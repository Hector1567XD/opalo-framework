<?php namespace App;

/**
 *
 */
trait Config
{
  protected $config = [
    # Project Name
    'projectName' => 'Opalo Framework',
    # Idioma por defecto
    'defaultLang' => 'es',
    # Idiomas aceptados
    'langList' => ['es'],
    # woocommerce
    'woocommerce' => [
      # Soon...
    ],
    # Say hello!
    'say_hello' => false,
    # Configuraciones de los scripts
    'scripts' => [
        # Envia los scripts al footer
        'to_footer' => false
    ]
  ];
}
