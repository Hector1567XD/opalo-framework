<?php namespace App\Maps;
/*
 * Mapa de suportes de la plantilla
 */
trait SupportsMap {
  protected $items = [
    'post-thumbnails',  //  Permite que los post tengan imagenes destacadas
    'title-tag',        //  Permite modificar el valor de la etiqueta del titulo
  ];
}
