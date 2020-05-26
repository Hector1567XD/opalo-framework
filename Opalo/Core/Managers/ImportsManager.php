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

  // Ejecutamos las importaciones de estilos y javascript
  function executeImports() {
    $this->importCSS();
    $this->importJS();
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

      // Comprobamos si es un estilo o un script
      if ($isStyle) {
        wp_enqueue_style($identify  . '-style'.$suffix,   get_template_directory_uri() . '/' . $import);
      }else{
        wp_enqueue_script($identify . '-script'.$suffix,  get_template_directory_uri() . '/' . $import);
      }
      $i++;
    }
    return $this;
  }

}
