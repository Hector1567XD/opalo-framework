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

  // There's nothing here because ... HOLLYWOOD ;D

  public function handleMaps() {
    $this->addMaps(Actions::class, Imports::class, Settings::class, Strings::class, Supports::class,CustomPosts::class, Taxonomies::class, Sidebars::class);
  }

  public function onInitialize() {

  }

}
