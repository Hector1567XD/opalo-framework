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
    if (isset($configs['sendScriptsToFooter']) && $configs['sendScriptsToFooter'] === true) {
      	function move_scripts_from_head_to_footer() {
		    remove_action( 'wp_head', 'wp_print_scripts' );
		    remove_action( 'wp_head', 'wp_print_head_scripts', 9 );
		    remove_action( 'wp_head', 'wp_enqueue_scripts', 1 );

		    add_action( 'wp_footer', 'wp_print_scripts', 5);
		    add_action( 'wp_footer', 'wp_enqueue_scripts', 5);
		    add_action( 'wp_footer', 'wp_print_head_scripts', 5);
		}
		add_action('wp_enqueue_scripts', 'move_scripts_from_head_to_footer');

		function force_jquery_to_footer() {
		    wp_deregister_script( 'jquery' );
		    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
		    wp_enqueue_script( 'jquery' );
		}
		add_action( 'wp_enqueue_scripts', 'force_jquery_to_footer' );
    }
  }

}
