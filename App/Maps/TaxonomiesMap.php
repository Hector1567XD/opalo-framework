<?php namespace App\Maps;
/*
 *
 */
trait TaxonomiesMap {
  protected $items = [
  	'color' => [
  		'association'				         => 'product',
      'name'                       => 'Colores',
	    'singular_name'              => 'Color',
	    'plural_name'                => 'Colores',
	    'all_items'                  => 'Todos los colores',
	    'parent_item'                => 'Color padre',
	    'new_item_name'              => 'Nombre de nuevo color',
	    'add_new_item'               => 'Añadir nuevo color',
	    'edit_item'                  => 'Editar color',
	    'update_item'                => 'Actualizar color',
	    'separate_items_with_commas' => 'Separa los colores con comas',
	    'search_items'               => 'Buscar colores',
	    'add_or_remove_items'        => 'Añadir o eliminar colores',
	    'choose_from_most_used'      => 'Seleccionar los colores mas usados',
    ],
  ];
}
