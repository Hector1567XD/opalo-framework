<?php namespace Opalo\Maps\Utils;

use Opalo\Maps\Utils\UtilsParent;

/**
 * Clase padre para imports strings
 *
 * @version    Alpha: 0.0.1
 * @since      Class available since Release 0.0.1
 * @author     Feredev <hector1567xd@gmail.com>
 * @package    Opalo Framework
 */

abstract class ImportsRegister extends UtilsParent
{
  /*
    -main
    -homePage
    -blogPage
    -archivePage
    -singlePage
    -simplePage
    -pages
    -mainAfter
  */

  function add(String $name, $item) {
    if (isset($item['styles']))
      $this->items[$name]['styles'][] = $item['styles'];
    if (isset($item['scripts']))
      $this->items[$name]['scripts'][] = $item['scripts'];
  }

}

?>
