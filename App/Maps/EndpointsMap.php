<?php namespace App\Maps;

use App\Maps\Endpoints\Hola;

trait EndpointsMap {
  protected $items = [
  	'hola' => [
  		'parent_path' => 'prueba',
  		'path' => '/hola',
  		'method' => 'GET',
  		'callback' => [Hola::class,'handler']
  	],
  ];
}
