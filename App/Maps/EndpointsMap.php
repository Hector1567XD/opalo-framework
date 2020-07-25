<?php namespace App\Maps;

use App\Maps\Endpoints\Hola;

trait EndpointsMap {
  protected $items = [
  	'hola' => [Hola::class,'handler'],
  ];
}
