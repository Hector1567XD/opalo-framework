<?php namespace Opalo\Helpers\Complements;

use Opalo\Components\NavbarWalker;

trait NavbarComplement
{

    /*
     *  Argumentos personalizados ($args):
     *    "first_element_class":              Clases del primer elemento
     *    "second_element_class":             Clases del segundo elemento
     *    "first_element_class_first_item":   Clases del primer elemento (en caso de ser el primer item del menu tambien)
     *    "second_element_class_first_item":  Clases del segundo elemento (en caso de ser el primer item del menu tambien)
     *    "first_element":                    Etiqueta del primer elemento
     *    "second_element":                   Etiqueta del segundo elemento
     */

    public static function navMenu($menu = 'main-menu', $menu_class = null, $args = [], $walker = null) {

      if (!isset($args['menu']))
        $args['theme_location']   = $menu;

      if (!isset($args['container']))
        $args['container']        = False;

      if (!isset($args['container_id']))
        $args['container_id']     = False;

      if (!isset($args['menu_class']))
        $args['menu_class']       = $menu_class;

      if (!isset($args['menu_id']))
        $args['menu_id']          = False;

      if (!isset($args['depth']))
        $args['depth']            = 1;

      if (!isset($args['walker']))
        $args['walker']           = ($walker) ? $walker : new NavbarWalker($args);

      if (isset($args['active_class']))
        add_filter('nav_menu_css_class' , function($classes, $item) use ($args) {
          if (in_array('current-menu-item', $classes) ){
            $classes[] = $args['active_class'];
          }
          return $classes;
        } , 10 , 2);

      return wp_nav_menu($args);

    }

}
