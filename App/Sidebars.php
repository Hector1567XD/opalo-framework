<?php namespace App;

// Padre del registrador de sidebars
use Opalo\Maps\Utils\SidebarsRegister;
// Mapa de sidebars
use App\Maps\SidebarsMap;


class Sidebars extends SidebarsRegister {

  use SidebarsMap;

  function initialize() {
    //
  }

}

 ?>
