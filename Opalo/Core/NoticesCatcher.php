<?php namespace Opalo\Core;

/**
 * Receptor de "noticies" para Opalo
 *
 * @version    Alpha: 0.0.3
 * @since      Class available since Release 0.0.3
 * @author     Feredev <hector1567xd@gmail.com>
 * @package    Opalo Framework
 */

define('NOTISESSION', '__opalo__framework_manual_noticies');
define('ClearInNotice', [
  '<strong>Error:</strong> ',
  '<strong>Error:</strong>',
  'Error:',
  '<strong>Error</strong>: ',
  '<strong>Error</strong>:',
]);

class NoticesCatcher
{

  # Por defecto, esta funcion se llama en start() del Kernel de Opalo
  public static function initializeCatcher($configs = null) {

    if (!isset($_SESSION[NOTISESSION]))
      $_SESSION[NOTISESSION] = [];

    add_action( 'op_action_notices_handler', [NoticesCatcher::class,'handler']);

  }

  # Manejador, deberia estar justo cuando se inicia el body
  public static function handler() {
    // Recorro los avisos de la session y los agrego
    foreach (Self::getNotices() as $Notice) {
      wc_add_notice( $Notice['message'], $Notice['enverioment'] );
    }
    // Muestra los avisos
    Self::noticesToFrontend();
  }

  # Pasa los avisos al frontend
  public static function noticesToFrontend()
  {

    $noticesFronted = [];

    // Detecto si hay "avisos que mostrar"
    if (wc_notice_count() > 0) {
      // Obtengo los avisos
      $notices = wc_get_notices();


      // Veo si hay avisos de error y los recorro
      if (isset($notices['error']))
        foreach ($notices['error'] as $errorNotice) {
          if (isset($errorNotice['notice'])) {
            // Guardo el texto del error limpio en lo variable de errores
            $noticesFronted['errors'][] = str_replace(ClearInNotice,'',$errorNotice['notice']);
          }
        }

      // Veo si hay avisos de felicitaciones y los recorro
      if (isset($notices['success']))
        foreach ($notices['success'] as $successNotice) {
          if (isset($successNotice['notice'])) {
            // Guardo el texto de la felicitacion limpia en lo variable de felicitaciones
            $noticesFronted['success'][] = str_replace(ClearInNotice,'',$successNotice['notice']);
          }
        }

      // Elimino los avisos que acabo de crear
      wc_clear_notices();
    }

    // Si, esto es un javascript
    ?>
      <script type="text/javascript">
        // Esto pasara al javascript los avisos que detecto Opalo
        var opaloNotices = <?=json_encode($noticesFronted)?>;
      </script>
    <?php

  }

  public static function getNotices() {
    return (isset($_SESSION[NOTISESSION])) ? $_SESSION[NOTISESSION] : [];
  }

  public static function newNotice($notice, $enverioment = 'success') {
    $_SESSION[NOTISESSION][] = [
      'message'     => $notice,
      'enverioment' => $enverioment
    ];
  }

}
