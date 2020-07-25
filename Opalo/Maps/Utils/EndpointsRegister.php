<?php namespace Opalo\Maps\Utils;

use Opalo\Maps\Utils\UtilsParent;

/**
 * Clase padre para registrar endpoints personalizados
 *
 * @version    Alpha: 0.0.3
 * @since      Class available since Release 0.0.3
 * @author     Moncki <moncki21@gmail.com>
 * @package    Opalo Framework
 */

abstract class EndpointsRegister extends UtilsParent
{

  function add(String $name, $item) {
    $this->items[$name] = $item;
  }

}

?>
