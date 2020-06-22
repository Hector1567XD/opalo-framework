<?php namespace App\Maps;
/*
 *
 */
trait SidebarsMap {
  protected $items = [
    [
      'name' => 'Sidebar por defecto',
      'id' => 'default-sidebar',
      'description' => 'Sidebar por defecto de Opalo',
      'before_widget' => '<div class="sidebar__box-secondary">',
      'after_widget' => '</div><div class="sidebar__hr"></div>',
      'before_title' => '<h6 class="my-2">',
      'after_title' => '</h6>',
    ]
  ];
}
