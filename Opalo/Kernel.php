<?php namespace Opalo;

// Sistema de multi-lenguajes
use Opalo\Core\Multilenguague;
// Interface nucleo de Opalo para crear settings
use Opalo\Core\SettingsUtil;

// Importaciones de los manejadores de mapas
use Opalo\Core\Managers\ImportsManager;
use Opalo\Core\Managers\SettingsManager;
use Opalo\Core\Managers\StringsManager;
use Opalo\Core\Managers\SupportsManager;
use Opalo\Core\Managers\ActionsManager;

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

  function __construct($config, $settings, $strings, $imports, $actions, $supports)
  {
    $this->config = $config;
    $this->getImports ($imports);
    $this->getActions ($actions);
    $this->getSupports($supports);
    $this->getStrings ($strings);
    $this->getSettings($settings);
  }

  // Inicia el Kernel
  function start() {

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


  }

  // En la finalizacion de los settings
  function onExecuteSettingsEnd() {
    $this->executeStrings();
  }

}
