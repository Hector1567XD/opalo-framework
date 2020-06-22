<?php namespace Opalo\Core\Managers;

/**
 * Clase para manejar las taxonomias de la plantilla
 *
 * @version    Alpha: 0.0.2
 * @since      Class available since Release 0.0.2
 * @author     Feredev <hector1567xd@gmail.com>
 * @package    Opalo Framework
 */

trait SidebarsManager
{

  protected $sidebars;

  // Obtiene los sidebars
  function getSidebars($sidebars) {
    $this->sidebars = $sidebars;
  }

  // Registra los sidebars
  function executeSidebars() {
    if ( function_exists( 'register_sidebar' ) ){
      foreach ($this->sidebars as $sidebarKey => $sidebarValue)
        register_sidebar($sidebarValue);
    }
  }

}
