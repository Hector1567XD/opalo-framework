<?php namespace Opalo\Core\Config\Configs;

/**
 * Configuracion para mover todos los scripts al footer
 *
 * @version    Alpha: 0.0.3
 * @since      Class available since Release 0.0.3
 * @author     Moncki <moncki21@gmail.com>
 * @package    Opalo Framework
 */

class Scripts
{

  public static function sendToFooter($configs) {

    if (
        isset($configs['scripts']) &&
        isset($configs['scripts']['to_footer']) &&
        $configs['scripts']['to_footer'] === true
    ) {

      //
  		add_action('wp_enqueue_scripts', function () {
  		    remove_action( 'wp_head', 'wp_print_scripts' );
  		    remove_action( 'wp_head', 'wp_print_head_scripts', 9 );
  		    remove_action( 'wp_head', 'wp_enqueue_scripts', 1 );

  		    add_action( 'wp_footer', 'wp_print_scripts', 5);
  		    add_action( 'wp_footer', 'wp_enqueue_scripts', 5);
  		    add_action( 'wp_footer', 'wp_print_head_scripts', 5);
  		});

      //Force JQuery to footer
  		add_action( 'wp_enqueue_scripts', function() {
  		    wp_deregister_script( 'jquery' );
  		    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
  		    wp_enqueue_script( 'jquery' );
  		});

    }

  }

}
