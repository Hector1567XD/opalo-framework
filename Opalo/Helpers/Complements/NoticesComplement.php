<?php namespace Opalo\Helpers\Complements;

trait NoticesComplement
{

  public static function noticesHandler() {
    do_action('op_action_notices_handler');
  }

}
