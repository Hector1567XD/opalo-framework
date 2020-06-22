<?php namespace App\Maps;
/*
 *
 */
trait StringsMap {
  protected $items = [
    'texto_404_not_found' => [
      'label' => 'Mensaje de pagina no encontrada (404)',
      'default'   => "La pagina que usted intenta buscar no existe!",
      'section' => 'seccion_textos_generales',
      'polyGroup' => 'Nextscale - Otras configuraciones'
    ],
    'home_titulo_sobre_nosotros' => [
      'label' => 'Mensaje de pagina no encontrada (404)',
      'default'   => "La pagina que usted intenta buscar no existe!",
      'section' => 'seccion_textos_generales',
      'polyGroup' => 'Nextscale - Otras configuraciones'
    ],
    'home_sobre_nosotros_1' => [
      'label' => 'Texto 1 de la seccion Sobre Nosotros',
      'default'   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo.",
      'section' => 'home_seccion_1',
      'polyGroup' => 'Nextscale - Home',
      'type' => 'textarea'
    ],
    'home_sobre_nosotros_2' => [
      'label' => 'Texto 2 de la seccion Sobre Nosotros',
      'default'   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo.",
      'section' => 'home_seccion_1',
      'polyGroup' => 'Nextscale - Home',
      'type' => 'textarea'
    ],
    'home_carrusel_titulo' => [
      'label' => 'Texto del titulo del carrusel',
      'default'   => "Experiencia Habla",
      'section' => 'seccion_carrusel',
      'polyGroup' => 'Nextscale - Home'
    ],
    'home_carrusel_texto_autor_1' => [
      'label' => 'Texto Autor 1 del carrusel',
      'default'   => "Nombre de quien lo hace",
      'section' => 'seccion_carrusel',
      'polyGroup' => 'Nextscale - Home'
    ],
    'home_carrusel_texto_autor_2' => [
      'label' => 'Texto Autor 2 del carrusel',
      'default'   => "Nombre de quien lo hace",
      'section' => 'seccion_carrusel',
      'polyGroup' => 'Nextscale - Home'
    ],
    'home_carrusel_texto_autor_3' => [
      'label' => 'Texto Autor 3 del carrusel',
      'default'   => "Nombre de quien lo hace",
      'section' => 'seccion_carrusel',
      'polyGroup' => 'Nextscale - Home'
    ],
    'home_carrusel_texto_1' => [
      'label' => 'Texto 1 del carrusel',
      'default'   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Lorem ipsum dolor sit amet, consectetur.",
      'section' => 'seccion_carrusel',
      'polyGroup' => 'Nextscale - Home',
      'type' => 'textarea'
    ],
    'home_carrusel_texto_2' => [
      'label' => 'Texto 2 del carrusel',
      'default'   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Lorem ipsum dolor sit amet, consectetur.",
      'section' => 'seccion_carrusel',
      'polyGroup' => 'Nextscale - Home',
      'type' => 'textarea'
    ],
    'home_carrusel_texto_3' => [
      'label' => 'Texto 3 del carrusel',
      'default'   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Lorem ipsum dolor sit amet, consectetur.",
      'section' => 'seccion_carrusel',
      'polyGroup' => 'Nextscale - Home',
      'type' => 'textarea'
    ],
    'compra_title' => [
      'label' => 'Titulo de la pagina',
      'default' => "Compra <br/> un regalo",
      'section' => 'seccion_compra_header',
      'polyGroup' => 'Nextscale - Compra un Regalo',
    ],
    'compra_why_regalo_1' => [
      'label' => 'Texto 1 de la seccion ¿Por que Regalar?',
      'default'   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo.",
      'section' => 'seccion_why_regalo',
      'polyGroup' => 'Nextscale - Compra un Regalo',
      'type' => 'textarea'
    ],
    'compra_why_regalo_2' => [
      'label' => 'Texto 2 de la seccion ¿Por que Regalar?',
      'default'   => "Duis aute irure dolor inreprehenderit in voluptate velit esse cillum
                      dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
      'section' => 'seccion_why_regalo',
      'polyGroup' => 'Nextscale - Compra un Regalo',
      'type' => 'textarea'
    ],
    'compra_carrusel_titulo' => [
      'label' => 'Texto del titulo del carrusel',
      'default'   => "Experiencia Habla",
      'section' => 'seccion_compra_carrusel',
      'polyGroup' => 'Nextscale - Home'
    ],
    'compra_carrusel_texto_autor_1' => [
      'label' => 'Texto Autor 1 del carrusel',
      'default'   => "Nombre de quien lo hace",
      'section' => 'seccion_compra_carrusel',
      'polyGroup' => 'Nextscale - Compra un Regalo'
    ],
    'compra_carrusel_texto_autor_2' => [
      'label' => 'Texto Autor 2 del carrusel',
      'default'   => "Nombre de quien lo hace",
      'section' => 'seccion_compra_carrusel',
      'polyGroup' => 'Nextscale - Compra un Regalo'
    ],
    'compra_carrusel_texto_autor_3' => [
      'label' => 'Texto Autor 3 del carrusel',
      'default'   => "Nombre de quien lo hace",
      'section' => 'seccion_compra_carrusel',
      'polyGroup' => 'Nextscale - Compra un Regalo'
    ],
    'compra_carrusel_texto_1' => [
      'label' => 'Texto 1 del carrusel',
      'default'   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Lorem ipsum dolor sit amet, consectetur.",
      'section' => 'seccion_compra_carrusel',
      'polyGroup' => 'Nextscale - Compra un Regalo',
      'type' => 'textarea'
    ],
    'compra_carrusel_texto_2' => [
      'label' => 'Texto 2 del carrusel',
      'default'   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Lorem ipsum dolor sit amet, consectetur.",
      'section' => 'seccion_compra_carrusel',
      'polyGroup' => 'Nextscale - Compra un Regalo',
      'type' => 'textarea'
    ],
    'compra_carrusel_texto_3' => [
      'label' => 'Texto 3 del carrusel',
      'default'   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Lorem ipsum dolor sit amet, consectetur.",
      'section' => 'seccion_compra_carrusel',
      'polyGroup' => 'Nextscale - Compra un Regalo',
      'type' => 'textarea'
    ],
    'compra_extra_texto_1' => [
      'label' => 'Texto 1 de la seccion extra',
      'default' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.",
      'section' => 'seccion_compra_extra',
      'polyGroup' => 'Nextscale - Compra un Regalo',
      'type' => 'textarea'
    ],
    'compra_extra_texto_2' => [
      'label' => 'Texto 2 de la seccion extra',
      'default' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.",
      'section' => 'seccion_compra_extra',
      'polyGroup' => 'Nextscale - Compra un Regalo',
      'type' => 'textarea'
    ],
    'decora_title' => [
      'label' => 'Titulo de la pagina',
      'default' => "Decora <br/> una ocación",
      'section' => 'seccion_decora_header',
      'polyGroup' => 'Nextscale - Decora una ocasion',
    ],
    'decora_why_decora_1' => [
      'label' => 'Texto 1 de la seccion ¿Por que Decorar?',
      'default'   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo.",
      'section' => 'seccion_why_decora',
      'polyGroup' => 'Nextscale - Decora una ocasion',
      'type' => 'textarea'
    ],
    'decora_why_decora_2' => [
      'label' => 'Texto 2 de la seccion ¿Por que Decorar?',
      'default'   => "Duis aute irure dolor inreprehenderit in voluptate velit esse cillum
                      dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
      'section' => 'seccion_why_decora',
      'polyGroup' => 'Nextscale - Decora una ocasion',
      'type' => 'textarea'
    ],
    'decora_carrusel_titulo' => [
      'label' => 'Texto del titulo del carrusel',
      'default'   => "Experiencia Habla",
      'section' => 'seccion_decora_carrusel',
      'polyGroup' => 'Nextscale - Home'
    ],
    'decora_carrusel_texto_autor_1' => [
      'label' => 'Texto Autor 1 del carrusel',
      'default'   => "Nombre de quien lo hace",
      'section' => 'seccion_decora_carrusel',
      'polyGroup' => 'Nextscale - Decora una ocasion'
    ],
    'decora_carrusel_texto_autor_2' => [
      'label' => 'Texto Autor 2 del carrusel',
      'default'   => "Nombre de quien lo hace",
      'section' => 'seccion_decora_carrusel',
      'polyGroup' => 'Nextscale - Decora una ocasion'
    ],
    'decora_carrusel_texto_autor_3' => [
      'label' => 'Texto Autor 3 del carrusel',
      'default'   => "Nombre de quien lo hace",
      'section' => 'seccion_decora_carrusel',
      'polyGroup' => 'Nextscale - Decora una ocasion'
    ],
    'decora_carrusel_texto_1' => [
      'label' => 'Texto 1 del carrusel',
      'default'   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Lorem ipsum dolor sit amet, consectetur.",
      'section' => 'seccion_decora_carrusel',
      'polyGroup' => 'Nextscale - Decora una ocasion',
      'type' => 'textarea'
    ],
    'decora_carrusel_texto_2' => [
      'label' => 'Texto 2 del carrusel',
      'default'   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Lorem ipsum dolor sit amet, consectetur.",
      'section' => 'seccion_decora_carrusel',
      'polyGroup' => 'Nextscale - Decora una ocasion',
      'type' => 'textarea'
    ],
    'decora_carrusel_texto_3' => [
      'label' => 'Texto 3 del carrusel',
      'default'   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Lorem ipsum dolor sit amet, consectetur.",
      'section' => 'seccion_decora_carrusel',
      'polyGroup' => 'Nextscale - Decora una ocasion',
      'type' => 'textarea'
    ],
    'decora_extra_texto_1' => [
      'label' => 'Texto 1 de la seccion extra',
      'default' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.",
      'section' => 'seccion_decora_extra',
      'polyGroup' => 'Nextscale - Decora una ocasion',
      'type' => 'textarea'
    ],
    'decora_extra_texto_2' => [
      'label' => 'Texto 2 de la seccion extra',
      'default' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.",
      'section' => 'seccion_decora_extra',
      'polyGroup' => 'Nextscale - Decora una ocasion',
      'type' => 'textarea'
    ],
    'nosotros_title' => [
      'label' => 'Titulo de la pagina',
      'default' => "Nosotros",
      'section' => 'seccion_nosotros_header',
      'polyGroup' => 'Nextscale - Nosotros',
    ],
    'nosotros_about_1' => [
      'label' => 'Texto 1 de la seccion Sobre Nosotros',
      'default' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.",
      'section' => 'seccion_about',
      'polyGroup' => 'Nextscale - Nosotros',
      'type' => 'textarea'
    ],
    'nosotros_about_2' => [
      'label' => 'Texto 2 de la seccion Sobre Nosotros',
      'default' => "Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.",
      'section' => 'seccion_about',
      'polyGroup' => 'Nextscale - Nosotros',
      'type' => 'textarea'
    ],
    'nosotros_about_3' => [
      'label' => 'Texto 3 de la seccion Sobre Nosotros',
      'default' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.",
      'section' => 'seccion_about',
      'polyGroup' => 'Nextscale - Nosotros',
      'type' => 'textarea'
    ],
    'nosotros_about_4' => [
      'label' => 'Texto 4 de la seccion Sobre Nosotros',
      'default' => "Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur.",
      'section' => 'seccion_about',
      'polyGroup' => 'Nextscale - Nosotros',
      'type' => 'textarea'
    ],
    'nosotros_contact_title' => [
      'label' => 'Texto del titulo del formulario',
      'default' => "¡Escríbenos!",
      'section' => 'seccion_mapa',
      'polyGroup' => 'Nextscale - Nosotros',
    ],
    'nosotros_contact_nombre' => [
      'label' => 'Texto del campo Nombre',
      'default' => "Nombre",
      'section' => 'seccion_mapa',
      'polyGroup' => 'Nextscale - Nosotros',
    ],
    'nosotros_contact_apellido' => [
      'label' => 'Texto del campo Apellido',
      'default' => "Apellido",
      'section' => 'seccion_mapa',
      'polyGroup' => 'Nextscale - Nosotros',
    ],
    'nosotros_contact_correo' => [
      'label' => 'Texto del campo Correo',
      'default' => "Correo",
      'section' => 'seccion_mapa',
      'polyGroup' => 'Nextscale - Nosotros',
    ],
    'nosotros_contact_mensaje' => [
      'label' => 'Texto del campo Mensaje',
      'default' => "Mensaje",
      'section' => 'seccion_mapa',
      'polyGroup' => 'Nextscale - Nosotros',
    ],
    'galeria_title' => [
      'label' => 'Titulo de la pagina',
      'default' => "conoce <br/> nuestros trabajos <br/> más recientes",
      'section' => 'seccion_galeria_header',
      'polyGroup' => 'Nextscale - Galeria',
    ],
    'producto_numero' => [
      'label' => 'Numero de contacto de WhatsApp',
      'default' => "000000000",
      'section' => 'seccion_product',
      'polyGroup' => 'Nextscale - Producto',
    ],
    'title_footer_1' => [
      'label' => 'Titulo 1 del footer',
      'default'   => "información importante",
      'section' => 'seccion_footer',
      'polyGroup' => 'Nextscale - Footer',
      'type' => 'text'
    ],
    'texto_footer_1' => [
      'label' => 'Texto 1 del footer',
      'default'   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo.",
      'section' => 'seccion_footer',
      'polyGroup' => 'Nextscale - Footer',
      'type' => 'textarea'
    ],
    'title_footer_2' => [
      'label' => 'Titulo 2 del footer',
      'default'   => "información importante",
      'section' => 'seccion_footer',
      'polyGroup' => 'Nextscale - Footer',
      'type' => 'text'
    ],
    'texto_footer_2' => [
      'label' => 'Texto 2 del footer',
      'default'   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo.",
      'section' => 'seccion_footer',
      'polyGroup' => 'Nextscale - Footer',
      'type' => 'textarea'
    ],
  ];
}
