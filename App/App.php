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
    $this->addMaps([
      'actions'       => Actions::class,
      'imports'       => Imports::class,
      'settings'      => Settings::class,
      'strings'       => Strings::class,
      'supports'      => Supports::class,
      'custom_posts'  => CustomPosts::class,
      'taxonomies'    => Taxonomies::class,
      'sidebars'      => Sidebars::class,
      'endpoints'     => Endpoints::class,
    ]);
  }

  public function onInitialize() {
    //
  }

}
