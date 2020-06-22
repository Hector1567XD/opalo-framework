<?php namespace App;

// Padre del registrador de taxonomias
use Opalo\Maps\Utils\TaxonomiesRegister;
// Mapa de taxonomias
use App\Maps\TaxonomiesMap;


class Taxonomies extends TaxonomiesRegister {

  use TaxonomiesMap;

  function initialize() {
    //
  }

}

 ?>
