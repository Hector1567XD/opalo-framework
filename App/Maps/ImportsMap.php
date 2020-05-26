<?php namespace App\Maps;
/*
 *
 */
define('SBP', 'static/');

trait ImportsMap {

  protected $items = [
    'main' => [
      'styles' => [
        SBP.'vendor/bootstrap/css/bootstrap.min.css',
        SBP.'css/app.css'
      ],
      'scripts' => [
        SBP.'vendor/jquery/jquery.min.js',
        SBP.'vendor/bootstrap/bootstrap.bundle.min.js',
        SBP.'js/app.js'
      ]
    ],

    'homePage' => [
      'styles'  => [],
      'scripts' => []
    ],

    'blogPage' => [
      'styles'      => [],
      'scripts'     => []
    ],

    'archivePage' => [
      'styles'      => [],
      'scripts'     => []
    ],

    'singlePage' => [
      'styles'      => [],
      'scripts'     => []
    ],

    'simplePage' => [
      'styles'      => [],
      'scripts'     => []
    ],

    # Para plantillas de paginas personalizadas
    'pages' => [
      /*
        'page-absolute-blank' => [
          'path'      => 'pages-template/page-absolute-blank',
          'styles'      => [],
          'scripts'     => []
        ]
      */
    ],

    'mainAfter' => [
      'styles'      => [],
      'scripts'     => []
    ],
  ];

}
