<?php namespace Opalo\Core\Config;

/**
 * Clase lectora de configuraciones de Opalo
 *
 * Esta clase interpreta algunas de las configuraciones de App/Config
 *
 * @version    Alpha: 0.0.3
 * @since      Class available since Release 0.0.3
 * @author     Feredev <hector1567xd@gmail.com>
 * @package    Opalo Framework
 */

use Opalo\Core\Config\ConfigInterpreterInterface;

class ConfigInterpreterParent implements ConfigInterpreterInterface
{

  protected $configs = [];

  // El constructor de esta clase recibe las configuraciones
  public function __construct($configs) {
    $this->configs = $configs;
  }

  // Interpreta las configuraciones al crearse el Kernel de Opalo
  public function executeKernelCreation() {
    $this->onCreate();
  }

  // Interpreta las configuraciones al iniciar el Kernel de Opalo
  public function executeKernelStart() {
    $this->onStart();
  }

  // Interpreta las configuraciones al finalizar el Kernel de Opalo
  public function executeKernelEnd() {
    $this->onEnd();
  }

}
