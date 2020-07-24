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
// Interpretador de configuraciones padre
use Opalo\Core\Config\ConfigInterpreterParent;

// Configuraciones
use Opalo\Core\Config\Configs\SayHello;

class ConfigInterpreter extends ConfigInterpreterParent
{

  protected function onCreate() {

    SayHello::hello($this->configs);

  }
  protected function onStart() {

  }
  protected function onEnd() {
  }

}
