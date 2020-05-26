<?php namespace Opalo\Maps\Utils;

use Opalo\Maps\Interfaces\UtilsParentInterface;

abstract class UtilsParent implements UtilsParentInterface
{

  function __construct() {
    $this->initialize();
  }

  function getItems() {
    return $this->items;
  }

}

?>
