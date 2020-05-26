<?php namespace Opalo\Helpers\Complements;

define('IMGSBP', 'static/img/');

trait PathComplement
{

  public static function getTemplateUri() {
    return get_template_directory_uri();
  }

  public static function getTemplateIMGUri() {
    return Self::getTemplateUri().'/'.IMGSBP;
  }

}
