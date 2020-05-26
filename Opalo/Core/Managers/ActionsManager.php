<?php namespace Opalo\Core\Managers;

/**
 * Clase para manejar las acciones de la plantilla
 *
 * @version    Alpha: 0.0.1
 * @since      Class available since Release 0.0.1
 * @author     Feredev <hector1567xd@gmail.com>
 * @package    Opalo Framework
 */

trait ActionsManager
{

  protected $actions;

  function getActions($actions) {
    $this->actions = $actions;
  }

  function executeActions() {
    if ( function_exists( 'add_action' ) )
      foreach ($this->actions as $actionKey => $actionValue)
        add_action( $actionKey, $actionValue );
  }

}
