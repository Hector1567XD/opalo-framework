<?php namespace Opalo;

use Opalo\Kernel;

/**
 * Clase padre del una aplicacion del framework
 *
 * @version    Alpha: 0.0.1
 * @since      Class available since Release 0.0.1
 * @author     Feredev <hector1567xd@gmail.com>
 * @package    Opalo Framework
 */

class Opalo
{

  protected $actions;
  protected $imports;
  protected $settings;
  protected $strings;
  protected $supports;
  protected $custom_posts;
  protected $endpoints;
  protected $taxonomies;
  protected $sidebars;
  protected $maps = [];

  function addMaps($mapsAddeds) {

    // Agrega a Opalo todos los mapas declarados en App.php
    foreach ($mapsAddeds as $map_name => $map) {
      $this->{$map_name} = new $map();
      $this->maps[] = $map_name;
    }

  }

  function initialize() {

    $this->handleMaps();
    $this->onInitialize();

    $mapsToKernel = [];
    foreach ($this->maps as $map_name) {
      $mapsToKernel[$map_name] = $this->{$map_name}->getItems();
    }

    $kernel = new Kernel($this->config, $mapsToKernel);

    $kernel->start();

  }

}
