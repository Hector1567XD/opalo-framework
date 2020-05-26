<?php namespace App;

// Padre del registrador de ajustes
use Opalo\Maps\Utils\SettingsRegister;
// Mapa de ajustes
use App\Maps\SettingsMap;


class Settings extends SettingsRegister {

  use SettingsMap;

  function initialize() {
    //
  }

}

 ?>
