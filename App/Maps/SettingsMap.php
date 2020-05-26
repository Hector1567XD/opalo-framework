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
                    'default' => 'logo.png'
                  ]
              ]
            ],
            'seccion_navbar' => [
              'title'         =>  'Footer',
              'description'   =>  'Footer de la pagina',
              'priority'      =>  2,
              'inputs'        => [
                  'footer_logo' => [
                    'title'   => 'Logo del footer',
                    'type'    => 'image',
                    'default' => 'logo-2.png'
                  ]
              ]
            ]
        ]
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
      ]
    ],

  ];
}
