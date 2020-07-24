<?php namespace Opalo\Helpers;

/*
 *  Para no hacer este codigo muy grande, se dividio al helper en muchos complementos (trait),
 *  si tu creas uno no dudes en poner tu nombre en los contrubuidores y hacer un pull request :D
 *  explico cada uno de los complementos al momento de importarlos en el helper
 */

use Opalo\Helpers\Complements\TaxonomiesComplement;
use Opalo\Helpers\Complements\TemplateComplement;
use Opalo\Helpers\Complements\NoticesComplement;
use Opalo\Helpers\Complements\NavbarComplement;
use Opalo\Helpers\Complements\HelperComplement;
use Opalo\Helpers\Complements\PathComplement;
use Opalo\Helpers\Complements\ModComplement;

/**
 * Helper para manejar de forma mas elegante (quiza no mas facil :P) las
 * funciones del wordpress que comunmente debemos usar en nuestras plantillas
 * para hacer las funcionales, siendo esta la interface que brinda el framework
 * entre la plantilla y wordpress
 *
 * @author HectorXD
 * @contributor - -
 * @contributor - -
 * Para mas informacion, consultar: Aqui habria un enlace a la documentacion, si tuvieramos una!
 */

class InPage {

  // Funciones referentes a las taxonomias
  use TaxonomiesComplement;
  // Funciones utiles al momento de programar la plantilla
  use TemplateComplement;
  // Pasa al frontend los avisos de wordpress en la variable "opaloNotices"
  use NoticesComplement;
  // Formas mas rapidas de crear un navbar!
  use NavbarComplement;
  // Funciones variadas de menor envergadura
  use HelperComplement;
  // Ayuda a ubicar las rutas base de multiples ubicaciones (por ahora, solo la plantilla)
  use PathComplement;
  // El punto fuerte del framework!, obtiene los mods, y si es un __, puede variar entre un mod y un texto de polylang!
  use ModComplement;

  // Justificacion de esta funcion: hi!
  public static function hi() {
    return 'Hi!';
  }

}
