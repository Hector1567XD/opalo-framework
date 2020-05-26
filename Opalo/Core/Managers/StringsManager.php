<?php namespace Opalo\Core\Managers;

/**
 * Clase para manejar los mapas de textos
 *
 * @version    Alpha: 0.0.1
 * @since      Class available since Release 0.0.1
 * @author     Feredev <hector1567xd@gmail.com>
 * @package    Opalo Framework
 */

trait StringsManager
{

  protected $strings;

  function getStrings($strings) {
    $this->strings = $strings;
  }

  function executeStrings() {
    if ($this->lenguague->havePolyland()) {
      // Si esta instalado polyland

      # [Deprecated] Registramos los textos con llaves en polyland [Deprecated]
      # $this->lenguague->registerPolylangTexts($this->strings); [Deprecated]

      # Agregamos los textos a inputs del personalizador de plantillas sin prefijos, un solo idioma
      $this->settings->addInputsArrayBased($this->strings, null);
      $this->lenguague->registerPolylangTextsBySettings($this->strings);

    }else{
      // Si no esta instalado el polyland
      # Agregamos los textos a inputs del personalizador de plantillas para todos los idiomas
      $this->settings->addInputsArrayBased($this->strings, $this->lenguague->getLangList());
    }
  }

}
