<?php namespace App;

/**
 *
 */
trait Config
{
  protected $config = [
    # Idioma por defecto
    'defaultLang' => 'es',
    # Idiomas aceptados
    'langList' => ['es','en']
  ];
}
