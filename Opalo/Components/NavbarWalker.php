<?php namespace Opalo\Components;

use Walker_Nav_Menu;

/**
 * Create HTML list of nav menu items.
 * Replacement for the native Walker, using the description.
 *
 * @see    https://wordpress.stackexchange.com/q/14037/
 * @author fuxia
 * Edit By:
 * @contributors HectorXD
 * with information of: https://www.ibenic.com/how-to-create-wordpress-custom-menu-walker-nav-menu-class/
 */

class NavbarWalker extends Walker_Nav_Menu
{

    protected $classes = [
      'first_element_first_item'    => null,
      'first_element'               => null,
      'second_element_first_item'   => null,
      'second_element'              => null
    ];

    protected $elements = [
      'li','a'
    ];

    public function __construct($options = []) {
      # parent::__construct();
      $this->init($options);
    }

    public function init($options = []) {

      // Necesitamos a un arreglo por aqui, si no lo eres, transformate
      if (is_object($options)) $options = json_decode(json_encode($options), 1);

      // Obtengo la clase del primer elemento
      if (isset($options['first_element_class']))
        $this->classes['first_element'] = $options['first_element_class'];
      // Obtengo la clase del segundo elemento
      if (isset($options['second_element_class']))
        $this->classes['second_element'] = $options['second_element_class'];

      // Obtengo la clase del primer elemento en caso de ser el primer item
      if (isset($options['first_element_class_first_item']))
        $this->classes['first_element_first_item'] = $options['first_element_class_first_item'];
      // Obtengo la clase del segundo elemento en caso de ser el primer item
      if (isset($options['second_element_class_first_item']))
        $this->classes['first_element_first_item'] = $options['second_element_class_first_item'];

      // Obtengo el primer elemento
      if (isset($options['first_element']))
        $this->elements[0] = $options['first_element'];
      // Obtengo el segundo elemento
      if (isset($options['second_element']))
        $this->elements[0] = $options['second_element'];

      return $this;

    }

    // Crea un nodo :O... basicamente "<$el $attributes>";
    public static function beginNode($el = 'div', $attributes = '') { return '<'.$el.' '.$attributes.'>'; }
    // Cierra un nodo :O... "</$el >";
    public static function endNode($el = 'div') { return '</'.$el.'>'; }
    // Sere el rey de los programadores, de veras!.

    /**
     * Start the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  object $item   Menu item data object.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array|object $args    Additional strings. Actually always an instance of stdClass. But this is WordPress.
     * @return void
     */
    function start_el( &$output, $item, $depth=0, $args=array(), $id = 0 ) {

      // Obtenemos los settings de los argumentos directamente
      $this->init($args);

      // Obtenemos las clases del item del menu
      $classes     = empty ( $item->classes ) ? array () : (array) $item->classes;
      $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item ));

      // Obtenemos el titulo del item
    	$title = $item->title;
      // Obtenemos la descripcion del item
    	$description = $item->description;
      // Obtenemos la url del item
    	$permalink = $item->url;

      // Comprobamos que el menu sea el primer item, si es asi obtenemos las clases correspondientes
      if ($item->menu_order === 1 || $item->menu_order === 0) {
        $extraClassToFirst    = $this->classes['first_element_first-item'];
        $extraClassToSecond   = $this->classes['second_element_first-item'];
      }else{ // Si no es el primer item, simplemente se deja en blanco
        $extraClassToFirst = null;
        $extraClassToSecond = null;
      }

      // Si hay clases entonces
      if (! empty ( $class_names ))
          $class_names = esc_attr( $class_names );

      /*
        Se crea una variable 'attributes' con las clases del item, las clases
        agregadas por argumentos y la clase extra agregada por argumento al
        primer item en caso de serlo
      */
      $attributes = ' class="'.$class_names.' '.$this->classes['first_element'].' '.$extraClassToFirst.'"';
      // Agrego como atributo tambien el ID
      $attributes .= " id='menu-item-$item->ID'";

      // Creamos el primer elemento, default: <li>
      $output .= Self::beginNode($this->elements[0], $attributes);


      // Limpiamos la variable attributes...
      $attributes  = '';
      // Comprobamos que algunos parametros delñ item tengan datos para dicho attribute
      ! empty( $item->attr_title )
          and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
      ! empty( $item->target )
          and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
      ! empty( $item->xfn )
          and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
      ! empty( $item->url )
          and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';

      // Agregamos las clases correspondientes
      $attributes .= ' class="'.$this->classes['second_element'].' '.$extraClassToSecond.'"';

      // Si tiene descripcion, se agrega (Solo para elementos de nivel superior)
      $description = ( ! empty ( $description ) and 0 == $depth )
        ? Self::beginNode('small','class="nav_desc"') . esc_attr( $item->description ) . Self::endNode('small') : '';

      // Obtenemos el titulo de este item
      $title = apply_filters( 'the_title', $title, $item->ID );

      $output .= $args->before
          . Self::beginNode($this->elements[1],$attributes)
          . $args->link_before
          . $title
          . Self::endNode($this->elements[1],$attributes)
          . $args->link_after
          . $description
          . $args->after;

    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
      // Obtenemos los settings de los argumentos directamente
      $this->init($args);

      if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
          $t = '';
          $n = '';
      } else {
          $t = "\t";
          $n = "\n";
      }
      $output .= "</".$this->elements[0].">{$n}";
    }

}
