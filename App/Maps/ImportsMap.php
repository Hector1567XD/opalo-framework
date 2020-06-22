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
      'styles'  => [SBP.'css/home-styles.css'],
      'scripts' => [SBP.'js/home-bundle.js']
    ],

    'blogPage' => [
      'styles'      => [SBP.'css/page-blog-styles.css'],
      'scripts'     => [SBP.'js/page-blog-bundle.js']
    ],

    'archivePage' => [
      'styles'      => [SBP.'css/page-posts-styles.css'],
      'scripts'     => [SBP.'js/page-posts-bundle.js']
    ],

    'singlePage' => [
      'styles'      => [],
      'scripts'     => []
    ],

    'simplePage' => [
      'styles'    => [SBP.'css/page-blank-styles.css'],
      'scripts'   => [SBP.'js/page-blank-bundle.js']
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
