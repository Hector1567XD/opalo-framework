<?php namespace Opalo\Maps\Interfaces;

interface UtilsParentInterface
{
  function initialize();
  function add(String $name, $item);
  function getItems();
}

?>
