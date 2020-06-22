<?php namespace Opalo\Core\Managers;

/**
 * Clase para realizar importaciones de forma dinamica
 *
 * Permite realizar importaciones de estilos y javascriptg dinamicamente
 * segun la pagina
 *
 * @version    Alpha: 0.0.1
 * @since      Class available since Release 0.0.1
 * @author     Feredev <hector1567xd@gmail.com>
 * @package    Opalo Framework
 */

trait ImportsManager
{

  protected $imports;

  function getImports($imports) {
    $this->imports = $imports;
  }

  // #
  function importWoocommerce() {

    // Si woocomerce esta instalado

    if ( class_exists( 'WooCommerce' ) ) {

      if (function_exists('is_product'))
        if (is_product()) {
          $this->mapImports('ProductWooCommerce', $this->imports['WooCommerce']['Product']['styles'],   true);
          $this->mapImports('ProductWooCommerce', $this->imports['WooCommerce']['Product']['scripts'],  false);
        }

      if (function_exists('is_shop'))
        if (is_shop()) {
          $this->mapImports('ShopWooCommerce', $this->imports['WooCommerce']['Shop']['styles'],   true);
          $this->mapImports('ShopWooCommerce', $this->imports['WooCommerce']['Shop']['scripts'],  false);
        }

      if (function_exists('is_checkout'))
        if (is_checkout()) {
          $this->mapImports('CheckoutWooCommerce', $this->imports['WooCommerce']['Checkout']['styles'],   true);
          $this->mapImports('CheckoutWooCommerce', $this->imports['WooCommerce']['Checkout']['scripts'],  false);
        }

      if (function_exists('is_cart'))
        if (is_cart()) {
          $this->mapImports('CartWooCommerce', $this->imports['WooCommerce']['Cart']['styles'],   true);
          $this->mapImports('CartWooCommerce', $this->imports['WooCommerce']['Cart']['scripts'],  false);
        }

      if (function_exists('is_account_page'))
        if (is_account_page()) {
          $this->mapImports('AccoutPageWooCommerce', $this->imports['WooCommerce']['AccoutPage']['styles'],   true);
          $this->mapImports('AccoutPageWooCommerce', $this->imports['WooCommerce']['AccoutPage']['scripts'],  false);
        }

      if (function_exists('is_edit_account_page'))
        if (is_edit_account_page()) {
          $this->mapImports('AccountEditPageWooCommerce', $this->imports['WooCommerce']['AccountEditPage']['styles'],   true);
          $this->mapImports('AccountEditPageWooCommerce', $this->imports['WooCommerce']['AccountEditPage']['scripts'],  false);
        }

      if (function_exists('is_filtered'))
        if (is_filtered()) {
          $this->mapImports('FilteredWooCommerce', $this->imports['WooCommerce']['Filtered']['styles'],   true);
          $this->mapImports('FilteredWooCommerce', $this->imports['WooCommerce']['Filtered']['scripts'],  false);
        }

      if (function_exists('is_order_received_page'))
        if (is_order_received_page()) {
          $this->mapImports('OrderReceivedPageWooCommerce', $this->imports['WooCommerce']['OrderReceivedPage']['styles'],   true);
          $this->mapImports('OrderReceivedPageWooCommerce', $this->imports['WooCommerce']['OrderReceivedPage']['scripts'],  false);
        }

      if (function_exists('is_product_category'))
        if (is_product_category()) {
          $this->mapImports('ProductCategoryWooCommerce', $this->imports['WooCommerce']['ProductCategory']['styles'],   true);
          $this->mapImports('ProductCategoryWooCommerce', $this->imports['WooCommerce']['ProductCategory']['scripts'],  false);
        }

      if (function_exists('is_product_tag'))
        if (is_product_tag()) {
          $this->mapImports('ProductTagCommerce', $this->imports['WooCommerce']['ProductTag']['styles'],   true);
          $this->mapImports('ProductTagCommerce', $this->imports['WooCommerce']['ProductTag']['scripts'],  false);
        }

      if (function_exists('is_product_taxonomy'))
        if (is_product_taxonomy()) {
          $this->mapImports('ProductTaxonomyWooCommerce', $this->imports['WooCommerce']['ProductTaxonomy']['styles'],   true);
          $this->mapImports('ProductTaxonomyWooCommerce', $this->imports['WooCommerce']['ProductTaxonomy']['scripts'],  false);
        }

    }

  }

  // Ejecutamos las importaciones de estilos y javascript
  function executeImports() {
    $this->importCSS();
    $this->importJS();
    $this->importWoocommerce();
  }

  function importCSS() {

    // Style CORE
    wp_enqueue_style('style', get_stylesheet_uri());

    // Estilos principales
    $this->mapImports('main', $this->imports['main']['styles'], true);

    // Css importados de la pagina principal
    if (  is_front_page()  ) {
      $this->mapImports('home', $this->imports['homePage']['styles'], true);
    }
    // Si estas en la pagina de blog
    if (  is_home() ) {
      $this->mapImports('blog', $this->imports['blogPage']['styles'], true);
    }

    // Si estas en la pagina de archivo
    if ( is_archive() ) {
      $this->mapImports('archive', $this->imports['archivePage']['styles'], true);
      // if (is_author()) {
      //   $this->mapImports('autor', $this->archivePage['styles'], true);
      // }
    }

    // Si estas en la pagina 'single.php'
    if (is_singular('post')) {
      $this->mapImports('single', $this->imports['singlePage']['styles'], true);
    }
    // Si estas en la pagina 'page.php'
    if (is_page()) {
      $this->mapImports('page', $this->imports['simplePage']['styles'], true);
    }
    // Si estas en 404.php
    if (is_404()) {
      $this->mapImports('404_pageNotFound', $this->imports['pageNotFound404']['styles'], true);
    }

    // Css de pagina segun plantilla
    foreach ($this->imports['pages'] as $pageName => $page) {
      // Comprobamos que estemos en '$page'
      if ( is_page_template( $page['path'] ) ) {
        // Importamos al '$pageName' todos los estilos dentro de '$page'
        $this->mapImports($pageName, $page['styles'], true);
      }
    }

    // Estilos principales post-estilos de pagina
    $this->mapImports('main-after', $this->imports['mainAfter']['styles'], true);

    return $this;

  }

  function importJS() {

    // Scripts principales
    $this->mapImports('main', $this->imports['main']['scripts'], false);

    // Scripts importados de la pagina principal
    if (  is_front_page()  ) {
      $this->mapImports('home', $this->imports['homePage']['scripts'], false);
    }
    // Si estas en la pagina de blog
    if (  is_home() || is_archive() ) {
      $this->mapImports('blog', $this->imports['blogPage']['scripts'], false);
    }

    // Si estas en la pagina de archivo
    if ( is_archive() ) {
      $this->mapImports('archive', $this->imports['archivePage']['scripts'], false);
      // if (is_author()) {
      //   $this->mapImports('autor', $this->archivePage['styles'], true);
      // }
    }

    // Si estas en la pagina 'single.php'
    if (is_singular('post')) {
      $this->mapImports('single', $this->imports['singlePage']['scripts'], false);
    }
    // Si estas en la pagina 'page.php'
    if (is_page()) {
      $this->mapImports('page', $this->imports['simplePage']['scripts'], false);
    }
    // Si estas en 404.php
    if (is_404()) {
      $this->mapImports('404_pageNotFound', $this->imports['pageNotFound404']['scripts'], false);
    }


    // Scripts de pagina segun plantilla
    foreach ($this->imports['pages'] as $pageName => $page) {
      // Comprobamos que estemos en '$page'
      if ( is_page_template( $page['path'] ) ) {
        // Importamos al '$pageName' todos los scripts dentro de '$page'
        $this->mapImports($pageName, $page['scripts'], false);
      }
    }

    // Scripts principales post-scripts de pagina
    $this->mapImports('main-after', $this->imports['mainAfter']['scripts'], false);

    return $this;

  }

  /*
    Esta funcion recorre un arreglo de estilos o scripts y los importa bajo un
    identificador que comunmente sera el nombre de la pagina
    */

  private function mapImports($identify = 'none', $imports = [], $isStyle = false) {
    $i = 0;
    foreach ($imports as $import) { // Recorremos los scripts/stylos de '$imports' ($scripts/$styles)
      $suffix = '';
      if ($i > 0) // Si es la segunda vuelta, es hora de poner un sufijo
        $suffix = '-'.$i;

      // Por defecto todo se importa en el header
      $inFooter = false;
      // Pero comprobemos si es un string
      if (getType($import) === 'string') {
        // Si es asi, nada que ver, va en el header
        $inFooter = false;
      }else if (getType($import) === 'array' && is_array($import) && sizeof($import) > 0) { // Pero si es un arreglo
        // En el index=1, esta el si va o no en el footer
        if (isset($import[1]))
          $inFooter = $import[1];
        // El verdadero valor del import es el index=0
        $import = $import[0];
      }

      // Comprobamos si es un estilo o un script
      if ($isStyle) {
        wp_enqueue_style($identify  . '-style'.$suffix,   get_template_directory_uri() . '/' . $import, $inFooter);
      }else{
        wp_enqueue_script($identify . '-script'.$suffix,  get_template_directory_uri() . '/' . $import, $inFooter);
      }

      $i++;

    }
    return $this;
  }

}
