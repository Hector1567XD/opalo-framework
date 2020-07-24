<?php namespace Opalo;

// Sistema de multi-lenguajes
use Opalo\Core\Multilenguague;
// Interface nucleo de Opalo para crear settings
use Opalo\Core\SettingsUtil;
// Interpretador de configuraciones de Opalo
use Opalo\Core\Config\ConfigInterpreter;

// Noticer Catcher de Opalo
use Opalo\Core\NoticesCatcher;

// Importaciones de los manejadores de mapas
use Opalo\Core\Managers\ImportsManager;
use Opalo\Core\Managers\SettingsManager;
use Opalo\Core\Managers\StringsManager;
use Opalo\Core\Managers\SupportsManager;
use Opalo\Core\Managers\ActionsManager;
use Opalo\Core\Managers\CustomPostManager;
use Opalo\Core\Managers\TaxonomiesManager;
use Opalo\Core\Managers\SidebarsManager;

/**
 * Clase base para la inicializacion de Opalo
 *
 * Esta clase servira como base para inicializar todos los eventos y procesos de
 * Opalo Framework dentro del proyecto
 *
 * @version    Alpha: 0.0.1
 * @since      Class available since Release 0.0.1
 * @author     Feredev <hector1567xd@gmail.com>
 * @package    Opalo Framework
 */

class Kernel
{
  // Config
  protected $config;

  // Funcion que almacenara la instancia del multi-idiomas
  protected $lenguague;

  use ImportsManager;
  use SettingsManager;
  use StringsManager;
  use SupportsManager;
  use ActionsManager;
  use CustomPostManager;
  use TaxonomiesManager;
  use SidebarsManager;

  // Interpretador de configuraciones
  protected $configInterpreter;

  function __construct($config, $settings, $strings, $imports, $actions, $supports,$customPosts, $taxonomies, $sidebars)
  {

    # Importo las configuraciones y las interpreto
    $this->config = $config;
    $this->configInterpreter = new ConfigInterpreter($this->config);
    $this->configInterpreter->executeKernelCreation();

    $this->getImports ($imports);
    $this->getActions ($actions);
    $this->getSupports($supports);
    $this->getStrings ($strings);
    $this->getSettings($settings);
    $this->getCustomPosts($customPosts);
    $this->getTaxonomies($taxonomies);
    $this->getSidebars($sidebars);

  }

  // Inicia el Kernel
  function start() {

    // Ejecutamos la inicializacion del Kernel de Opalo
    $this->configInterpreter->executeKernelStart();

    // Ejecutamos el receptor de avisos
    NoticesCatcher::initializeCatcher();

    #
    $this->executeSupports();
    $this->executeActions();

    // Iniciamos la sesion
    session_start();
    // Inicializa e inyecta la instancia de la clase de multilenguague
    $this->lenguague = Multilenguague::initialize($this->config);

    // Importamos los estilos y scripts
    add_action( 'wp_enqueue_scripts', [ $this, 'executeImports' ] );

    // Registramos todas las personalizaciones de plantilla
    add_action( 'customize_register', [ $this, 'excuteSettings' ] );

    // Registramos los custom-post
    $this->executeCustomPosts();
    // Registramos las custom-taxonomies
    $this->executeTaxonomies();

    // Registramos los sidebars cuando se inicialicen los widgets
    add_action( 'widgets_init', [ $this, 'executeSidebars'] );

    // Ejecutamos la finalizacion del Kernel de Opalo
    $this->onKernelEnd();

  }

  // En la finalizacion de los settings
  function onExecuteSettingsEnd() {
    $this->executeStrings();
  }

  // En la finalizacion de la ejecusion del kernel de Opalo
  private function onKernelEnd() {
    $this->configInterpreter->executeKernelEnd();
  }

}
