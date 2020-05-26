<?php namespace App;

# Opalo Framework
use Opalo\Opalo;

# Configuraciones
use App\Config;
/**
 *
 */
class App extends Opalo
{

  use Config;

  public function handleMaps() {
    $this->addMaps(Actions::class, Imports::class, Settings::class, Strings::class, Supports::class);
  }

  public function onInitialize() {
    # Aqui va el codigo que normalmente pondrias en functions.php

    // Esto no lo hagan chicos, lo voy a refactorizar luego

    add_action( 'init', function() {
      register_nav_menu('ns-navbar-menu',__( 'Nextscale navbar' ));
    });

  }

}
