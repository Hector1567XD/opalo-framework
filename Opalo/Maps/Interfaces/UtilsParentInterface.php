<?php namespace Opalo\Maps\Interfaces;

interface UtilsParentInterface
{
  //protected $items;
  function initialize();
  function add(String $name, $item);
  function getItems();
}

?>
