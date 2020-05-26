<?php namespace Opalo\Helpers\Complements;

trait TemplateComplement
{

  public static function pageTitle() {

    $title = wp_title('', false);

    if (wp_title('', false)) {
        $title .= ' | ';
    }

   $title = get_bloginfo( 'name', 'display' );

   return $title;

  }

}
