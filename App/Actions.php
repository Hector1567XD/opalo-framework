<?php namespace App;

// Padre del registrador de acciones
use Opalo\Maps\Utils\ActionRegister;
// Mapa de acciones
use App\Maps\ActionsMap;


class Actions extends ActionRegister {

  use ActionsMap;

  function initialize() {
    //
  }

}

 ?>
