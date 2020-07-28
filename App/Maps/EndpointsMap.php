<?php namespace App\Maps;

/*
 *
 */

# Hello Controller
use App\Maps\Endpoints\Hello;

trait EndpointsMap {
  protected $items = [
  	'hello' => [
  		'namespace' => 'v2',
  		'path' => 'hello',
  		'method' => 'GET',
  		'callback' => [Hello::class,'handler']
  	],
  ];
}
