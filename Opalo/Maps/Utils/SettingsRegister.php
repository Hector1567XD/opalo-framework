<?php namespace Opalo\Maps\Utils;

use Opalo\Maps\Utils\UtilsParent;

/**
 * Clase padre para registrar ajustes
 *
 * @version    Alpha: 0.0.1
 * @since      Class available since Release 0.0.1
 * @author     Feredev <hector1567xd@gmail.com>
 * @package    Opalo Framework
 */

abstract class SettingsRegister extends UtilsParent
{

  function add(String $name, $item) {
    $this->items[$name] = $item;
  }

}

?>
