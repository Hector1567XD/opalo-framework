<?php namespace Opalo\Helpers\Complements;

trait HelperComplement
{

  public static function stripShortcodeGallery($content) {
    preg_match_all( '/' . get_shortcode_regex() . '/s', $content, $matches, PREG_SET_ORDER );

    if ( ! empty( $matches ) ) {
        foreach ( $matches as $shortcode ) {
            if ( 'gallery' === $shortcode[2] ) {
                $pos = strpos( $content, $shortcode[0] );
                if( false !== $pos ) {
                    return substr_replace( $content, '', $pos, strlen( $shortcode[0] ) );
                }
            }
        }
    }

    return $content;
  }

  public static function taxonomiesCheckbox($taxonomyName,$divClass="custom-control custom-radio",$checkClass="custom-control-input", $labelClass="custom-control-label"){
    $taxonomies = get_terms( array(
        'taxonomy' => $taxonomyName,
        'hide_empty' => false,
    ) );
    $term_value = null;
    if (isset($_GET[$taxonomyName]) && $_GET[$taxonomyName] !== 'none') {
        $term_value = $_GET[$taxonomyName];
    }

    foreach ($taxonomies as $term){
        echo '<div class="'.$divClass.'">';
        if ($term_value === $term->slug) {
            echo '<input type="radio" checked class="'.$checkClass.'" id="color_'.$term->slug.'" name="'.$taxonomyName.'" value="'.$term->slug.'" />';
        }else{
            echo '<input type="radio" class="'.$checkClass.'" id="color_'.$term->slug.'" name="'.$taxonomyName.'" value="'.$term->slug.'" />';
        }
        
        echo '<label class="'.$labelClass.'" for="color_'.$term->slug.'">'.ucfirst($term->slug);
        echo "</label>";
        echo "</div>";
    }
  }

}
