<?php namespace App;

// Padre del registrador de importaciones
use Opalo\Maps\Utils\ImportsRegister;
// Mapa de importaciones
use App\Maps\ImportsMap;


class Imports extends ImportsRegister {

  use ImportsMap;

  function initialize() {
    //
  }

}

 ?>
