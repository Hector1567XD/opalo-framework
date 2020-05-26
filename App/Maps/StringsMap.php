<?php namespace App\Maps;
/*
 *
 */
trait StringsMap {
  protected $items = [
    'texto_404_not_found' => [
      'label' => 'Mensaje de pagina no encontrada (404)',
      'default'   => "La pagina que usted intenta buscar no existe!",
      'section' => 'seccion_textos_generales',
      'polyGroup' => 'Nextscale - Otras configuraciones'
    ],
  ];
}
