<?php namespace Opalo\Core\Managers;

// Interface nucleo de Opalo para crear settings
use Opalo\Core\SettingsUtil;

/**
 * Clase para manejar los mapas de settings
 *
 * @version    Alpha: 0.0.1
 * @since      Class available since Release 0.0.1
 * @author     Feredev <hector1567xd@gmail.com>
 * @package    Opalo Framework
 */

trait SettingsManager
{

  // Posteriormente se inyectara el creador de settings
  protected $settings;
  // Mapa de settings
  protected $settingsMap;

  function getSettings($settings) {
    $this->settingsMap = $settings;
  }

  // Ejecutamos los registros del sistema dados por el mapa de paneles
  function excuteSettings($wp_customize) {

    $this->settings = new SettingsUtil($wp_customize);
    $this->settings->createArrayBased($this->settingsMap);

    $this->onExecuteSettingsEnd();

  }

}
