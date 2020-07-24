<?php namespace Opalo\Core\Config\Configs;

/**
 * Configuracion de prueba de Opalo
 *
 * @version    Alpha: 0.0.3
 * @since      Class available since Release 0.0.3
 * @author     Feredev <hector1567xd@gmail.com>
 * @package    Opalo Framework
 */

class SayHello
{

  public static function hello($configs) {
    if (isset($configs['say_hello']) && $configs['say_hello'] === true) {
      printf('Hello!');
      exit();
    }
  }

}
