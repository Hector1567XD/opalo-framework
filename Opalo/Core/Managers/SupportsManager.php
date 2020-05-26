<?php namespace Opalo\Core\Managers;

/**
 * Clase para manejar las acciones de la plantilla
 *
 * @version    Alpha: 0.0.1
 * @since      Class available since Release 0.0.1
 * @author     Feredev <hector1567xd@gmail.com>
 * @package    Opalo Framework
 */

trait SupportsManager
{

  protected $supports;

  function getSupports($supports) {
    $this->supports = $supports;
  }

  function executeSupports() {
    if ( function_exists( 'add_theme_support' ) )
      foreach ($this->supports as $themeSupport)
        add_theme_support( $themeSupport );
  }

}
