<?php namespace Opalo\Core;

/**
 * Clase para gestionar los multidiomas en opalo
 *
 * Esta clase utiliza poylland e incluso intenta servir de interface entre el
 * desarrollador y algunas funcionalidades de polyland
 *
 * @version    Alpha: 0.0.1
 * @since      Class available since Release 0.0.1
 * @author     Feredev <hector1567xd@gmail.com>
 * @package    Opalo Framework
 */

use Opalo\Helpers\InPage;
use Opalo\Core\CoreHelper;

class Multilenguague
{

  // Lista de idiomas permitidos en la aplicacion
  public $langList     = ['es','en'];
  // Idioma por defecto
  public $defaultLang  = 'es';

  // Esta polylang instalado?
  protected $isPolylandInstall          = false;
  // Permitir que polylang sobrescriba el idioma de la sesion
  protected $polyLangSobrescribeSession = true;

  // Idioma actual de la sesion recordado por la instancia
  protected $langSession                = null;
  // Idioma actual de la instancia
  protected $lang                       = null;
  // Idioma actual de polylang recordado por la instancia
  protected $polyLangLenguague          = null;
  // Idioma por defecto de polylang recordado por la instancia
  protected $pll_default_lang           = null;

  // Constructor
  public function __construct($params = null) {


    // Si es que se han enviado parametros de configuracion, obtenerlos dentro
    CoreHelper::setConfigInside($this, $params, [
      'langList',
      'defaultLang'
    ]);
    /*if ($params)
      if (gettype($params) === 'object' || gettype($params) === 'array') {
        foreach ($params as $paramKey => $paramValue) {
          switch ($paramKey) {
            case 'langList':    $this->langList     = $paramValue;  break;
            case 'defaultLang': $this->defaultLang  = $paramValue;  break;
          }
        }
      }*/


    // Lenguaje por defecto
    $this->lang = $this->defaultLang;

    // Detecta si polylang esta instalado
    if (function_exists ( 'pll_default_language' ) && function_exists ( 'pll_languages_list' ) && function_exists ( 'pll_default_language' ) && function_exists ( 'pll_register_string' )) {
      $this->isPolylandInstall = true;
    }

    if ($this->havePolyland()) {
      // Obtenemos el lenguaje por defecto de polylang
      $this->pll_default_lang = pll_default_language();
      // Obtenemos la lista de lenguajes de polylang
      $this->langList = pll_languages_list();
    }

  }

  // ¿Esta polylang instalado?
  public function havePolyland() {
    return $this->isPolylandInstall;
  }

  public static function initialize($params = null) {


    // Construye la clase de multilenguague
    $ins = new Self($params);

    // Se obtiene el idioma de la session
    $ins->getSessionLang();
    // Se obtiene el idioma de la ruta
    $ins->setLenguagueByGet();
    // Se obtiene el lenguaje de polylang
    $ins->getPolylandLenguagueIfAreInstall();

    return $ins;
  }

  // Establece el idioma
  public function setLang($lang = null, $overwriteOriginalSession = false) {
    $this->lang       = $lang;
    $_SESSION["lang"] = $lang;
    // Si esta activado el 'sobreescribir idioma de la sesion' entonces se hara
    if ($overwriteOriginalSession)
      $this->langSession = $this->lang;
  }

  // Obtiene el idioma
  public function getSessionLang() {
    // Si esta establecido un idioma en la session
    if (isset($_SESSION["lang"])) {
      // Y ese idioma esta en la lista de idiomas
      if (in_array($_SESSION["lang"], $this->langList))
        // Entonces se establece el idioma
        $this->setLang($_SESSION["lang"], true);
    }
  }

  // Establece el idioma en la instancia en base al obtenido por la URL de forma nativa
  public function setLenguagueByGet() {
    // Si se ha enviado un argumento con el idioma
    if (isset($_GET['lang'])) {
      // Se ve si este idioma esta en la lista de idiomas permitidos
      if (in_array($_GET["lang"], $this->langList)) {
        // Y se establece el idioma
        $this->setLang($_GET["lang"]);
      }
    }
    return $this;
  }

  // Si Polylang esta instalado, obtiene el lenguaje actual segun polylang
  public function getPolylandLenguagueIfAreInstall() {
    // Si esta polylang instalado
    if ($this->havePolyland()) {
      // Obtenemos el lenguaje de polylang
      $this->polyLangLenguague = pll_current_language();
      /*
        Establecemos el lenguaje actual como el de polylang
        [Sobreescribira la session si $this->polyLangSobrescribeSession es true]
      */
      $this->setLang($this->polyLangLenguague, $this->polyLangSobrescribeSession);
    }
  }

  // Obtiene la lista de idiomas de la instancia
  public function getLangList() {
    return $this->langList;
  }
  // Obtiene el idioma actual de la instancia
  public function getLang() {
    return $this->lang;
  }

  // Permite agregar el sufijo del idioma a una cadena
  public function suffix($string = null) {
  	if (!$string) return $string;
    // if ($this->lang === $this->defaultLang) return $string;
    return $string.'_'.$this->lang;
  }

  // Permite agregar un prefijo del idioma a una cadena
  public function prefix($string = null) {
    if (!$string) return $string;
    // if ($this->lang === $this->defaultLang) return $string;
    return $this->lang.'_'.$string;
  }

  // ¿Es el idioma?
  public function isEN() {
    return ($this->lang === 'en');
  }
  public function isES() {
    return ($this->lang === 'en');
  }

  // Obtener traduccion de polylang para una cadena
  public function getPlltranslate($string) {
    // Si esta el polylang instalado
    if ($this->havePolyland()) {
      return pll__($string);
    }
    return 'No se encuentra definido "pll__"';
  }

  // Isset en un arreglo con una llave, y si existe devuelve el valor
  public static function ieArray($data, $key, $default = null) { //Isset Echo Array
    if (isset($data[$key])) return $data[$key];
    return $default;
  }

  // Registrar textos [Solo con polylang] [Deprecated]
  public function registerPolylangTexts($texts) {
    // Si esta el polylang instalado
    if ($this->havePolyland()) {

      // Recorremos los textos si son un arreglo o un objeto
      if (gettype($texts) == 'array' || gettype($texts) == 'object') {
        foreach ($texts as $textID => $text) {

          // ¿Es un textarea?
          $textArea = (Self::ieArray($text, 'type') === 'textarea');

          // Registrar cadena con polylang
          pll_register_string(
            Self::ieArray($text,'label','Texto de plantilla'),
            $textID,
            Self::ieArray($text,'polyGroup','Plantilla de nextscale'),
            $textArea
          );

        }
      }

    }
  }

  // Registrar texto de Poylang en base a settings
  public function registerPolylangTextsBySettings($texts) {
    // Si esta el polylang instalado
    if ($this->havePolyland()) {

      // Recorremos los textos si son un arreglo o un objeto
      if (gettype($texts) == 'array' || gettype($texts) == 'object') {
        foreach ($texts as $textID => $text) {

          // ¿Es un textarea?
          $textArea = (Self::ieArray($text, 'type') === 'textarea');

          // Registrar cadena con polylang
          pll_register_string(
            Self::ieArray($text,'label','Texto de plantilla'),
            InPage::mod($textID),
            Self::ieArray($text,'polyGroup','Plantilla de nextscale'),
            $textArea
          );

        }
      }

    }
  }

}
