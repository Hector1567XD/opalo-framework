<?php namespace Opalo\Core\Managers;

/**
 * Clase para manejar las taxonomias de la plantilla
 *
 * @version    Alpha: 0.0.2
 * @since      Class available since Release 0.0.2
 * @author     Moncki21 <>
 * @package    Opalo Framework
 */

trait TaxonomiesManager
{

  protected $taxonomies;

  function getTaxonomies($taxonomies) {
    $this->taxonomies = $taxonomies;
  }

  function executeTaxonomies() {
    if ( function_exists( 'register_post_type' ) ){
      foreach ($this->taxonomies as $taxonomyKey => $taxonomyValue){
        $labels = array(
            'name'                       => $taxonomyValue['name'],
            'singular_name'              => $taxonomyValue['singular_name'],
            'menu_name'                  => $taxonomyValue['plural_name'],
            'all_items'                  => $taxonomyValue['all_items'],
            'parent_item'                => $taxonomyValue['parent_item'],
            'parent_item_colon'          => $taxonomyValue['parent_item'],
            'new_item_name'              => $taxonomyValue['new_item_name'],
            'add_new_item'               => $taxonomyValue['add_new_item'],
            'edit_item'                  => $taxonomyValue['edit_item'],
            'update_item'                => $taxonomyValue['update_item'],
            'separate_items_with_commas' => $taxonomyValue['separate_items_with_commas'],
            'search_items'               => $taxonomyValue['search_items'],
            'add_or_remove_items'        => $taxonomyValue['add_or_remove_items'],
            'choose_from_most_used'      => $taxonomyValue['choose_from_most_used'],
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
        );
        register_taxonomy( $taxonomyKey, $taxonomyValue['association'], $args );
      }
    }
  }

}
