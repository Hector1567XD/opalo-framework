<?php namespace App;

// Padre del registrador de importaciones
use Opalo\Maps\Utils\ImportsRegister;
// Mapa de importaciones
use App\Maps\ImportsMap;

define('SBP', 'static/');

class Imports extends ImportsRegister {

  use ImportsMap;

  function initialize() {

    //
    $this->addStyle('homePage',   SBP.'css/home-styles.css');
    //$this->addScript('homePage',  SBP.'js/home-scripts.js');

  }

}

 ?>
