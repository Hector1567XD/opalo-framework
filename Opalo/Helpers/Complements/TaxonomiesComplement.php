<?php namespace Opalo\Helpers\Complements;

trait TaxonomiesComplement
{

  public static function taxonomiesCheckbox($taxonomyName,$divClass="custom-control custom-radio",$checkClass="custom-control-input", $labelClass="custom-control-label") {
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

        $checkedString = ($term_value === $term->slug) ? 'checked' : '';
        echo '<input type="radio" '.$checkedString.' class="'.$checkClass.'" id="color_'.$term->slug.'" name="'.$taxonomyName.'" value="'.$term->slug.'" />';

        echo '<label class="'.$labelClass.'" for="color_'.$term->slug.'">'.ucfirst($term->name);
        echo "</label>";
        echo "</div>";
    }
  }

  public static function taxonomiesSelect($taxonomyName,$divClass="custom-control custom-select",$checkClass="custom-control-input", $labelClass="custom-control-label") {

    $taxonomies = get_terms( array(
        'taxonomy' => $taxonomyName,
        'hide_empty' => false,
    ) );
    $term_value = null;
    if (isset($_GET[$taxonomyName]) && $_GET[$taxonomyName] !== 'none') {
        $term_value = $_GET[$taxonomyName];
    }

    echo '<label class="'.$labelClass.'" for="color_'.$term->slug.'">'.ucfirst($term->name);
    echo "</label>";
    echo '<select name="'.$taxonomyName.'" id="select_'.$taxonomyName.'" class="'.$divClass.'">';

    foreach ($taxonomies as $term){
        $selectString = ($term_value === $term->slug) ? 'selected' : '';
        echo '<option type="radio" '.$selectString.' class="'.$checkClass.'" id="color_'.$term->slug.'" value="'.$term->slug.'">'.$term->name.'</option>';
    }
    echo "</select>";
    
  }

}
