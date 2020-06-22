<?php namespace App;

// Padre del registrador de custom-posts
use Opalo\Maps\Utils\CustomPostRegister;
// Mapa de custom-posts
use App\Maps\CustomPostMap;


class CustomPosts extends CustomPostRegister {

  use CustomPostMap;

  function initialize() {
    //
  }

}

 ?>
