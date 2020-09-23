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
         [SBP.'vendor/jquery/jquery.min.js', true],
         [SBP.'vendor/bootstrap/bootstrap.bundle.min.js', true],
         [SBP.'js/app.js', true],
       ]
     ],

    'homePage' => [
      'styles'  => [SBP.'css/home-styles.css'],
      'scripts' => [[SBP.'js/home-bundle.js', true]],
    ],

    'blogPage' => [
      'styles'      => [SBP.'css/page-blog-styles.css'],
      'scripts'     => [[SBP.'js/page-blog-bundle.js', true]]
    ],

    'archivePage' => [
      'styles'      => [SBP.'css/page-posts-styles.css'],
      'scripts'     => [[SBP.'js/page-posts-bundle.js', true]]
    ],

    'singlePage' => [
      'styles'      => [],
      'scripts'     => []
    ],

    'simplePage' => [
      'styles'    => [SBP.'css/page-blank-styles.css'],
      'scripts'   => [[SBP.'js/page-blank-bundle.js', true]]
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

    'pageNotFound404' => [
      'styles'      => [],
      'scripts'     => []
    ],

    'WooCommerce' => [
      'Product' => [
        'styles'  => [],
        'scripts' => []
      ],
      'Shop' => [
        'styles'  => [],
        'scripts' => []
      ],
      'Checkout' => [
        'styles'  => [],
        'scripts' => []
      ],
      'Cart' => [
        'styles'  => [],
        'scripts' => []
      ],
      'AccoutPage' => [
        'styles'  => [],
        'scripts' => []
      ],
      'AccountEditPage' => [
        'styles'  => [],
        'scripts' => []
      ],
      'Filtered' => [
        'styles'  => [],
        'scripts' => []
      ],
      'OrderReceivedPage' => [
        'styles'  => [],
        'scripts' => []
      ],
      'ProductCategory' => [
        'styles'  => [],
        'scripts' => []
      ],
      'ProductTag' => [
        'styles'  => [],
        'scripts' => []
      ],
      'ProductTaxonomy' => [
        'styles'  => [],
        'scripts' => []
      ],
    ]

  ];

}
