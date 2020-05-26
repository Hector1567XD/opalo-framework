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

  function addMaps($actions, $imports, $settings, $strings, $supports) {
    $this->actions  = new $actions  ();
    $this->imports  = new $imports  ();
    $this->settings = new $settings ();
    $this->strings  = new $strings  ();
    $this->supports = new $supports ();
  }

  function initialize() {

    $this->handleMaps();
    $this->onInitialize();

    $kernel = new Kernel(
      $this->config,
      $this->settings ->getItems(),
      $this->strings  ->getItems(),
      $this->imports  ->getItems(),
      $this->actions  ->getItems(),
      $this->supports ->getItems()
    );

    $kernel->start();

  }

}
