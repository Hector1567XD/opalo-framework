<?php namespace Opalo\Maps\Utils;

use Opalo\Maps\Utils\UtilsParent;

/**
 * Clase padre para registrar sidebars personalizados
 *
 * @version    Alpha: 0.0.2
 * @since      Class available since Release 0.0.2
 * @author     Feredev <hector1567xd@gmail.com>
 * @package    Opalo Framework
 */

abstract class SidebarsRegister extends UtilsParent
{

  function add(String $name, $item) {
    $this->items[$name] = $item;
  }

}

?>
