<?php namespace App;

// Padre del registrador de custom-posts
use Opalo\Maps\Utils\EndpointsRegister;
// Mapa de custom-posts
use App\Maps\EndpointsMap;


class Endpoints extends EndpointsRegister {

  use EndpointsMap;

  function initialize() {
    //
  }

}

 ?>
