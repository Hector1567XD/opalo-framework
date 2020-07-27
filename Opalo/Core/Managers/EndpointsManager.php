<?php namespace Opalo\Core\Managers;

/**
 * Clase para manejar los endpoints de la plantilla
 *
 * @version    Alpha: 0.0.3
 * @since      Class available since Release 0.0.3
 * @author     Moncki21 <moncki21@gmail.com>
 * @package    Opalo Framework
 */

trait EndpointsManager
{

  protected $endpoints;

  function getEndpoints($endpoints) {
    $this->endpoints = $endpoints;
  }

  function executeEndpoints() {
    add_action( 'rest_api_init', function () {
      foreach ($this->endpoints as $endpointKey => $endpointValue){
        register_rest_route( $endpointValue['parent_path'], $endpointValue['path'],
          array(
            'methods' => $endpointValue['method'],
            'callback' => $endpointValue['callback']
          )
        );
      }
    });
  }

}
