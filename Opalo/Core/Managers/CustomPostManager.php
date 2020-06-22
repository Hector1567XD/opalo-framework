<?php namespace Opalo\Core\Managers;

/**
 * Clase para manejar los custom post type de la plantilla
 *
 * @version    Alpha: 0.0.2
 * @since      Class available since Release 0.0.2
 * @author     Moncki21 <>
 * @package    Opalo Framework
 */

trait CustomPostManager
{

  protected $customPosts;

  function getCustomPosts($customPosts) {
    $this->customPosts = $customPosts;
  }

  function executeCustomPosts() {
    if ( function_exists( 'register_post_type' ) ){
      foreach ($this->customPosts as $customPostKey => $customPostValue){
      	$labels = array(
            'name'                  => _x( $customPostValue['singular_name'], 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( $customPostValue['singular_name'], 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( $customPostValue['plural_name'], 'text_domain' ),
            'name_admin_bar'        => __( $customPostValue['plural_name'], 'text_domain' ),
        );
        $args = array(
            'label'                 => __( $customPostValue['singular_name'], 'text_domain' ),
            'description'           => __( $customPostValue['description'], 'text_domain' ),
            'labels'                => $labels,
            'supports'              => $customPostValue['supports'],
            'taxonomies'            => $customPostValue['taxonomies'],
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( $customPostKey, $args );
      }
    }
  }

}
