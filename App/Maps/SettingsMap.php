<?php namespace App\Maps;
/*
 *
 */
trait SettingsMap {
  // Los items son "paneles"
  protected $items = [

      # Panel del Layout
      'panel_layout' => [
        'title'         => 'Layout',
        'description'   => 'Configuraciones del layout',
        'priority'      => 1,
        'sections' => [
            'seccion_navbar' => [
              'title'         =>  'Barra de navegacion',
              'description'   =>  'Barra de navegacion de la pagina',
              'priority'      =>  1,
              'inputs'        => [
                  'navbar_logo' => [
                    'title'   => 'Logo del navbar',
                    'type'    => 'image',
                    'default' => 'viva-ballon-logo.png'
                  ]
              ]
            ],
            'seccion_footer' => [
              'title'         =>  'Footer',
              'description'   =>  'Footer de la pagina',
              'priority'      =>  2,
              'inputs'        => [
                  'footer_fondo' => [
                    'title'   => 'Fondo del footer',
                    'type'    => 'image',
                    'default' => 'Fondo-Footer.png'
                  ],
                  'footer_icon_instagram' => [
                    'title'   => 'Icono de Instagram',
                    'type'    => 'image',
                    'default' => 'instagram-logo.png'
                  ],
                  'footer_icon_whatsapp' => [
                    'title'   => 'Icono de Whatsapp',
                    'type'    => 'image',
                    'default' => 'whatsapp-logo-variant.png'
                  ],
                  'footer_url_instagram' => [
                    'title'   => 'Instagram',
                    'type'    => 'url',
                    'default' => 'https://www.instagram.com'
                  ],
                  'footer_url_whatsapp' => [
                    'title'   => 'Whatsapp',
                    'type'    => 'url',
                    'default' => 'https://www.whatsapp.com'
                  ],
              ]
            ]
        ]
    ],
    'panel_homepage' => [
        'title'         => 'Homepage',
        'description'   => 'Configuraciones de la homepage',
        'priority'      => 1,
        'sections' => [
            'seccion_header' => [
              'title'         =>  'Header',
              'description'   =>  'Header de la pagina',
              'priority'      =>  1,
              'inputs'        => [
                  'home_parallax' => [
                    'title'   => 'Imagen del parallax',
                    'type'    => 'image',
                    'default' => 'Fondo-Pordada.png'
                  ],
                  'home_logo' => [
                    'title'   => 'Logo del header',
                    'type'    => 'image',
                    'default' => 'Glogos-P1.png'
                  ]
              ]
            ],
            'home_seccion_1' => [
              'title'         =>  'Seccion 1',
              'description'   =>  'Seccion 1 de la pagina',
              'priority'      =>  2,
              'inputs'        => [
                  'home_seccion_1_corazones' => [
                    'title'   => 'Imagen',
                    'type'    => 'image',
                    'default' => 'globos-3.jpg'
                  ],
                  'home_seccion_1_ver_mas' => [
                    'title'   => 'Boton de Ver Mas',
                    'type'    => 'image',
                    'default' => 'Icono-Boton.svg'
                  ]
              ]
            ],
            'seccion_productos_destacados' => [
              'title'         =>  'Productos Destacados',
              'description'   =>  'Seccion Productos Destacados de la pagina',
              'priority'      =>  3,
              'inputs'        => [
                  'productos_destacados_ver_mas' => [
                    'title'   => 'Boton de Ver Mas',
                    'type'    => 'image',
                    'default' => 'Icono-Boton.svg'
                  ],
                  'home_product' => [
                    'title'   => 'Imagen por defecto',
                    'type'    => 'image',
                    'default' => 'globos-1.jpg'
                  ]
              ]
            ],
            'seccion_carrusel' => [
              'title'         =>  'Carrusel',
              'description'   =>  'Seccion del Carrusel de la pagina',
              'priority'      =>  4,
              'inputs'        => [
                  'home_carrusel_1_1' => [
                    'title'   => 'Circulo Naranja 1',
                    'type'    => 'image',
                    'default' => 'circulo-naranja.png'
                  ],
                  'home_carrusel_1_2' => [
                    'title'   => 'Comillas',
                    'type'    => 'image',
                    'default' => 'left-quote.png'
                  ],
                  'home_carrusel_2_1' => [
                    'title'   => 'Circulo Naranja 2',
                    'type'    => 'image',
                    'default' => 'circulo-naranja.png'
                  ],
                  'home_carrusel_2_2' => [
                    'title'   => 'Comillas',
                    'type'    => 'image',
                    'default' => 'left-quote.png'
                  ],
                  'home_carrusel_3_1' => [
                    'title'   => 'Circulo Naranja 3',
                    'type'    => 'image',
                    'default' => 'circulo-naranja.png'
                  ],
                  'home_carrusel_3_2' => [
                    'title'   => 'Comillas',
                    'type'    => 'image',
                    'default' => 'left-quote.png'
                  ],
              ]
            ],
            'seccion_galeria' => [
              'title'         =>  'Galeria',
              'description'   =>  'Seccion de la Galeria de la pagina',
              'priority'      =>  5,
              'inputs'        => [
                  'url_galeria' => [
                    'title'   => 'Url base de galeria',
                    'type'    => 'url',
                    'default' => 'galeria'
                  ],
                  // 'galeria_globo_1' => [
                  //   'title'   => 'Circulo Naranja 1',
                  //   'type'    => 'image',
                  //   'default' => 'globos-3.jpg'
                  // ],
                  // 'galeria_globo_2' => [
                  //   'title'   => 'Comillas',
                  //   'type'    => 'image',
                  //   'default' => 'globos-1.jpg'
                  // ],
                  // 'galeria_globo_3' => [
                  //   'title'   => 'Circulo Naranja 2',
                  //   'type'    => 'image',
                  //   'default' => 'globos-2.jpg'
                  // ],
                  // 'galeria_globo_4' => [
                  //   'title'   => 'Comillas',
                  //   'type'    => 'image',
                  //   'default' => 'globos-3.jpg'
                  // ],
                  // 'galeria_globo_5' => [
                  //   'title'   => 'Circulo Naranja 3',
                  //   'type'    => 'image',
                  //   'default' => 'globos-1.jpg'
                  // ],
                  // 'galeria_globo_6' => [
                  //   'title'   => 'Comillas',
                  //   'type'    => 'image',
                  //   'default' => 'globos-2.jpg'
                  // ],
              ]
            ],
        ]
    ],
    'panel_compra' => [
        'title'         => 'Compra un Regalo',
        'description'   => 'Configuraciones de la pagina Compra un Regalo',
        'priority'      => 1,
        'sections' => [
            'seccion_compra_header' => [
              'title'         =>  'Header',
              'description'   =>  'Header de la pagina',
              'priority'      =>  1,
              'inputs'        => [
                  'compra_header_image' => [
                    'title'   => 'Imagen de Fondo',
                    'type'    => 'image',
                    'default' => 'Pordadas-internas.png'
                  ],
              ]
            ],
            'seccion_why_regalo' => [
              'title'         =>  '¿Por que regalo?',
              'description'   =>  'Seccion ¿Por que regalo?',
              'priority'      =>  2,
              'inputs'        => [
                  'why_regalo_imagen' => [
                    'title'   => 'Imagen',
                    'type'    => 'image',
                    'default' => 'globos-larga.jpg'
                  ]
              ]
            ],
            'seccion_compra_productos_destacados' => [
              'title'         =>  'Productos Destacados',
              'description'   =>  'Seccion Productos Destacados de la pagina',
              'priority'      =>  3,
              'inputs'        => [
                  'compra_productos_destacados_ver_mas' => [
                    'title'   => 'Boton de Ver Mas',
                    'type'    => 'image',
                    'default' => 'Icono-Boton.svg'
                  ],
                  'compra_product' => [
                    'title'   => 'Imagen por defecto',
                    'type'    => 'image',
                    'default' => 'globos-1.jpg'
                  ]
              ]
            ],
            'seccion_compra_carrusel' => [
              'title'         =>  'Carrusel',
              'description'   =>  'Seccion del Carrusel de la pagina',
              'priority'      =>  4,
              'inputs'        => [
                  'compra_carrusel_1_1' => [
                    'title'   => 'Circulo Azul 1',
                    'type'    => 'image',
                    'default' => 'circulo-azul.png'
                  ],
                  'compra_carrusel_1_2' => [
                    'title'   => 'Comillas',
                    'type'    => 'image',
                    'default' => 'left-quote.png'
                  ],
                  'compra_carrusel_2_1' => [
                    'title'   => 'Circulo Azul 2',
                    'type'    => 'image',
                    'default' => 'circulo-azul.png'
                  ],
                  'compra_carrusel_2_2' => [
                    'title'   => 'Comillas',
                    'type'    => 'image',
                    'default' => 'left-quote.png'
                  ],
                  'compra_carrusel_3_1' => [
                    'title'   => 'Circulo Azul 3',
                    'type'    => 'image',
                    'default' => 'circulo-azul.png'
                  ],
                  'compra_carrusel_3_2' => [
                    'title'   => 'Comillas',
                    'type'    => 'image',
                    'default' => 'left-quote.png'
                  ],
              ]
            ],
            'seccion_compra_extra' => [
              'title'         =>  'Campos Extra',
              'description'   =>  'Seccion extra de la pagina',
              'priority'      =>  5,
              'inputs'        => [

              ]
            ],
        ]
    ],
    'panel_decora' => [
        'title'         => 'Decora una ocasion',
        'description'   => 'Configuraciones de la pagina Decora una ocasion',
        'priority'      => 1,
        'sections' => [
            'seccion_decora_header' => [
              'title'         =>  'Header',
              'description'   =>  'Header de la pagina',
              'priority'      =>  1,
              'inputs'        => [
                  'decora_header_image' => [
                    'title'   => 'Imagen de Fondo',
                    'type'    => 'image',
                    'default' => 'Pordadas-internas.png'
                  ],
              ]
            ],
            'seccion_why_decora' => [
              'title'         =>  '¿Por que decorar?',
              'description'   =>  'Seccion ¿Por que decorar?',
              'priority'      =>  2,
              'inputs'        => [
                  'why_decora_imagen' => [
                    'title'   => 'Imagen',
                    'type'    => 'image',
                    'default' => 'globos-larga.jpg'
                  ]
              ]
            ],

            // 'seccion_decora_galeria' => [
            //   'title'         =>  'Productos Destacados',
            //   'description'   =>  'Seccion Productos Destacados de la pagina',
            //   'priority'      =>  2,
            //   'inputs'        => [
            //       'decora_ver_mas' => [
            //         'title'   => 'Boton de Ver Mas',
            //         'type'    => 'image',
            //         'default' => 'Icono-Boton.svg'
            //       ],
            //       'decora_galeria_globo_1' => [
            //         'title'   => 'Circulo Naranja 1',
            //         'type'    => 'image',
            //         'default' => 'globos-3.jpg'
            //       ],
            //       'decora_galeria_globo_2' => [
            //         'title'   => 'Comillas',
            //         'type'    => 'image',
            //         'default' => 'globos-1.jpg'
            //       ],
            //       'decora_galeria_globo_3' => [
            //         'title'   => 'Circulo Naranja 2',
            //         'type'    => 'image',
            //         'default' => 'globos-2.jpg'
            //       ],
            //       'decora_galeria_globo_4' => [
            //         'title'   => 'Comillas',
            //         'type'    => 'image',
            //         'default' => 'globos-3.jpg'
            //       ],
            //       'decora_galeria_globo_5' => [
            //         'title'   => 'Circulo Naranja 3',
            //         'type'    => 'image',
            //         'default' => 'globos-1.jpg'
            //       ],
            //       'decora_galeria_globo_6' => [
            //         'title'   => 'Comillas',
            //         'type'    => 'image',
            //         'default' => 'globos-2.jpg'
            //       ],
            //   ]
            // ],
            'seccion_decora_carrusel' => [
              'title'         =>  'Carrusel',
              'description'   =>  'Seccion del Carrusel de la pagina',
              'priority'      =>  4,
              'inputs'        => [
                  'decora_carrusel_1_1' => [
                    'title'   => 'Circulo Azul 1',
                    'type'    => 'image',
                    'default' => 'circulo-azul.png'
                  ],
                  'decora_carrusel_1_2' => [
                    'title'   => 'Comillas',
                    'type'    => 'image',
                    'default' => 'left-quote.png'
                  ],
                  'decora_carrusel_2_1' => [
                    'title'   => 'Circulo Azul 2',
                    'type'    => 'image',
                    'default' => 'circulo-azul.png'
                  ],
                  'decora_carrusel_2_2' => [
                    'title'   => 'Comillas',
                    'type'    => 'image',
                    'default' => 'left-quote.png'
                  ],
                  'decora_carrusel_3_1' => [
                    'title'   => 'Circulo Azul 3',
                    'type'    => 'image',
                    'default' => 'circulo-azul.png'
                  ],
                  'decora_carrusel_3_2' => [
                    'title'   => 'Comillas',
                    'type'    => 'image',
                    'default' => 'left-quote.png'
                  ],
              ]
            ],
            'seccion_decora_extra' => [
              'title'         =>  'Campos Extra',
              'description'   =>  'Seccion extra de la pagina',
              'priority'      =>  5,
              'inputs'        => [

              ]
            ],
        ]
    ],
    'panel_nosotros' => [
        'title'         => 'Nosotros',
        'description'   => 'Configuraciones de la pagina Nosotros',
        'priority'      => 1,
        'inputs'        => [
            'base_url_nosotros' => [
              'title'   => 'Nosotros url',
              'type'    => 'url',
              'default' => 'nosotros'
            ]
        ],
        'sections' => [
            'seccion_nosotros_header' => [
              'title'         =>  'Header',
              'description'   =>  'Header de la pagina',
              'priority'      =>  1,
              'inputs'        => [
                  'nosotros_header_image' => [
                    'title'   => 'Imagen de Fondo',
                    'type'    => 'image',
                    'default' => 'Pordadas-internas.png'
                  ],
              ]
            ],
            'seccion_about' => [
              'title'         =>  'Sobre Nosotros',
              'description'   =>  'Seccion "Sobre Nosotros" de la pagina',
              'priority'      =>  2,
              'inputs'        => [
                  'nosotros_about_image' => [
                    'title'   => 'Imagen',
                    'type'    => 'image',
                    'default' => 'globos-azules.jpg'
                  ]
              ]
            ],
            'seccion_mapa' => [
              'title'         =>  'Mapa',
              'description'   =>  'Seccion "Mapa" de la pagina',
              'priority'      =>  3,
              'inputs'        => [
                  'nosotros_mapa_imagen' => [
                    'title'   => 'Imagen del mapa',
                    'type'    => 'image',
                    'default' => 'mapa.jpg'
                  ],
                  'nosotros_mapa_boton' => [
                    'title'   => 'Icono del boton de Enviar',
                    'type'    => 'image',
                    'default' => 'Icono-Boton.svg'
                  ],
              ]
            ],
        ]
    ],
    'panel_catalogo' => [
        'title'         => 'Catalogo',
        'description'   => 'Configuraciones de la pagina Catalogo',
        'priority'      => 1,
        'inputs'        => [
            'base_url_catalogo' => [
              'title'   => 'Catalogo url',
              'type'    => 'url',
              'default' => 'catalogo'
            ]
        ],
        'sections' => [
            'seccion_carousel_products' => [
              'title'         =>  'Carrusel de productos',
              'description'   =>  'carrusel de productos dentro del catalogo',
              'priority'      =>  1,
              'inputs'        => [
                  'catalogo_ver_mas' => [
                    'title'   => 'Boton de Ver Mas',
                    'type'    => 'image',
                    'default' => 'Icono-Boton.svg'
                  ],
                  'catalogo_img_carousel_product_1' => [
                    'title'   => 'Imagen',
                    'type'    => 'image',
                    'default' => 'globos-coloridos.jpg'
                  ],
                  'catalogo_img_carousel_product_2' => [
                    'title'   => 'Imagen',
                    'type'    => 'image',
                    'default' => 'globos-coloridos.jpg'
                  ],
                  'catalogo_img_carousel_product_3' => [
                    'title'   => 'Imagen',
                    'type'    => 'image',
                    'default' => 'globos-coloridos.jpg'
                  ]
              ]
            ],
            'seccion_filter_products' => [
              'title'         =>  'Filtro de productos',
              'description'   =>  'Lista productos filtrados dentro del catalogo',
              'priority'      =>  1,
              'inputs'        => [
                  'catalogo_filtrar' => [
                    'title'   => 'Boton de Filtrado',
                    'type'    => 'image',
                    'default' => 'Icono-Boton.svg'
                  ],
              ]
            ],
        ]
    ],
    'panel_producto' => [
        'title'         => 'Producto',
        'description'   => 'Configuraciones de la pagina de producto',
        'priority'      => 1,
        'sections' => [
            'seccion_product' => [
              'title'         =>  'Producto',
              'description'   =>  'Informacion especifica de un producto',
              'priority'      =>  1,
              'inputs'        => [
                  'producto_ws_icon' => [
                    'title'   => 'Boton de contactar por WhatsApp',
                    'type'    => 'image',
                    'default' => 'ws.png'
                  ],
                  'producto_contactar' => [
                    'title'   => 'Boton de contactar',
                    'type'    => 'image',
                    'default' => 'Icono-Boton.svg'
                  ],
                  'product_default_image' => [
                    'title'   => 'Imagen por defecto',
                    'type'    => 'image',
                    'default' => 'default.jpg'
                  ],
              ]
            ],
        ]
    ],
    'panel_post' => [
        'title'         => 'Post',
        'description'   => 'Configuraciones de la pagina de post',
        'priority'      => 1,
        'sections' => [
            'seccion_post_header' => [
              'title'         =>  'Header',
              'description'   =>  'Header de la pagina',
              'priority'      =>  1,
              'inputs'        => [
                  'post_header_image_default' => [
                    'title'   => 'Imagen por defecto',
                    'type'    => 'image',
                    'default' => 'Pordadas-internas.png'
                  ],
              ]
            ],
        ]
    ],
    'panel_galeria' => [
      'title'         => 'Galeria',
      'description'   => 'Ajustes de la pagina de Galeria',
      'priority'      => 1,
      'sections' => [
          'seccion_galeria_header' => [
            'title'         =>  'Header',
            'description'   =>  'Header de la pagina',
            'priority'      =>  1,
            'inputs'        => [
              'galeria_header_image' => [
                'title'   => 'Imagen de fondo',
                'type'    => 'image',
                'default' => 'Pordadas-internas.png'
              ],
            ]
          ],
      ]
    ],
    'panel_cookies' => [
      'title'         => 'Politica de cookies',
      'description'   => 'Ajustes de las politicas de cookies',
      'priority'      => 1,
      'inputs'        => [
        'url_cookies' => [
          'title'   => 'Url de las politica de cookies',
          'type'    => 'url',
          'default' => '#'
        ],
      ],
      'sections' => []
    ],
    # Otros ajustes de plantilla
    'panel_others' => [
      'title'         => 'Otros ajustes',
      'description'   => 'Otros ajustes generales de plantilla',
      'priority'      => 1,
      'sections' => [
          'seccion_textos_generales' => [
            'title'         =>  'Textos generales',
            'description'   =>  'Textos generales de plantilla',
            'priority'      =>  1,
            'inputs'        => [
              // Solo tendra textos y estos se registraran en los StringsMap.php
            ]
          ],
          'seccion_imagenes_generales' => [
            'title'         =>  'Imagenes generales',
            'description'   =>  'Imagenes generales de la pagina',
            'priority'      =>  2,
            'inputs'        => [
              'favicon_page' => [
                'title'   => 'Imagen de favicon',
                'type'    => 'image',
                'default' => 'favicon.png'
              ],
            ]
          ],
      ]
    ],

  ];
}
