<?php namespace App\Maps;
/*
 *
 */
trait CustomPostMap {
  protected $items = [
  	'cookies-post' => [
      'singular_name'	=> 'Galleta',
      'plural_name'	=> 'Galletas',
      'description'	=> 'Crea tus galletas!',
      'supports'    => ['title', 'editor', 'thumbnail'],
      'taxonomies'  => []
    ],
  ];
}
