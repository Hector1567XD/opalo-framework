<?php namespace Opalo\Core;

/**
 * Clase de ayuda y funciones utiles del corazon de Opalo
 *
 * Esta clase contiene funciones utiles como "getConfigs" que incrusta las
 * configuraciones necesarias en una clase
 *
 * @version    Alpha: 0.0.3
 * @since      Class available since Release 0.0.3
 * @author     Feredev <hector1567xd@gmail.com>
 * @package    Opalo Framework
 */

class CoreHelper
{

  /** Function para obtener configuraciones dentro de la instancia de una clase
    * en base a la instancia y al arreglo de configuraciones
    */

  public function setConfigInside(&$__classInstance, $configs = null, $params = null) {

    // Tenemos las configuraciones
    if ($configs) {
      // Las configuraciones son un objeto o un arreglo
      if (gettype($configs) === 'object' || gettype($configs) === 'array') {
        foreach ($configs as $configKey => $configValue) {
          if ($params) {
            /** Si hay parametros que buscar definidos
              * vemos si la propiedad esta dentro del arreglo de parametros
              */
            if (in_array($configKey, $params))
              $__classInstance->{$configKey} = $configValue;

          }else{
            /** Si no hay parametros definidos que buscar
              * Comprobamos que la instancia de la clase tiene ya esta propiedad
              */
            if (isset($__classInstance->{$configKey}))
              $__classInstance->{$configKey} = $configValue;

          }
        }
      }
    }

  }

}
