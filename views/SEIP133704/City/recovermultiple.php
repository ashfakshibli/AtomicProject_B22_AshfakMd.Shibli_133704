<?php
    include_once ('../../../vendor/autoload.php');

use App\Bitm\SEIP133704\City\City;
use App\Bitm\SEIP133704\City\Uses;
use App\Bitm\SEIP133704\GlobalClasses\Message;
use App\Bitm\SEIP133704\GlobalClasses\Utility;


    $recoverMultiple = new City();
if(!empty($_POST['mark']))
    $recoverMultiple->recoverSelected($_POST['mark']);
else {
    Utility::redirect('trashed.php');
    Message::message("
                        <div id=\"message\" class=\"alert alert-info\">
                                <strong>Really!</strong> Don't be dumb please select something to recover.
                        </div>
                        <script>
                            $('#message').show().delay(4000).fadeOut();
                        </script>");
}