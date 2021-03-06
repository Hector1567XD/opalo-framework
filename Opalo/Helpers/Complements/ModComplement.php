<?php namespace Opalo\Helpers\Complements;

use Opalo\Core\Multilenguague;

trait ModComplement
{

  public static function imgMod( $modName, $defaultPath = null, $sobrePath = false) {

      if ($defaultPath && !$sobrePath)
        $defaultPath = Self::getTemplateIMGUri().$defaultPath;

      return Self::mod( $modName, $defaultPath );
  }

  public static function postFeaturedImage( $postId, $defaultPath = null) {

      $featured_img_url = get_the_post_thumbnail_url($postId,'full');
      if (!$featured_img_url) {
        $featured_img_url = Self::getTemplateIMGUri().$defaultPath;
      }
      return $featured_img_url;
  }

  public static function mod( $modName, $default = null) {
    return get_theme_mod( $modName , $default );
  }

  public static function __($string, $default = null) {

    $languague = Multilenguague::initialize();

    // Si no esta polyland instalado
    if (!$languague->havePolyland()) {
      // Obtenemos el texto pero en base al sufijo
      $string = $languague->suffix($string);
      return Self::mod( $string, $default );
    }

    // Obtenemos el texto y la traduccion del mismo
    return $languague->getPlltranslate(
      Self::mod( $string, $default ), $default
    );

    //return Multilenguague::getPlltranslate($string, $default );
  }

}
