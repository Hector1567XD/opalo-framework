<?php namespace App;

// Padre del registrador de cadenas
use Opalo\Maps\Utils\SupportsRegister;
// Mapa de suportes
use App\Maps\SupportsMap;


class Supports extends SupportsRegister {

  use SupportsMap;

  function initialize() {
    //
  }

}

 ?>
