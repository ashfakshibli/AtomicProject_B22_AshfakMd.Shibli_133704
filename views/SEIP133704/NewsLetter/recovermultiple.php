<?php
    include_once ('../../../vendor/autoload.php');

    use App\Bitm\SEIP133704\NewsLetter\Email;

    $recoverMultiple = new Email();
    $recoverMultiple->recoverSelected($_POST['mark']);