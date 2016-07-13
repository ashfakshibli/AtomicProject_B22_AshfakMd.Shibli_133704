<?php
    include_once ("../../../vendor/autoload.php");
    include "header.php";
use App\Bitm\SEIP133704\OrganizationSummary\Summary;
use App\Bitm\SEIP133704\OrganizationSummary\Uses;
use App\Bitm\SEIP133704\GlobalClasses\Utility;
use App\Bitm\SEIP133704\GlobalClasses\Message;


    $view= new Summary();
    $view->prepare($_GET);
    $singleItem = $view->view();
    //Utility::dd($singleItem);
?>
<div class="container" style="margin-bottom: 100px">
    <div class="panel panel-default">
        <div class="panel-body" align="center"></div>
    </div>
    <h2></h2>
    <p></p>
    <div class="container-viewport panel-default">
        <div class="panel-heading">
            <?php echo Uses::siteKeyword() ?>

        </div>
        <div class="panel-body" style="margin-bottom: 88px">
            <ul class="list-group">
                <li class="list-group-item">ID:   <?php echo $singleItem->id?></li>
                <li class="list-group-item">Name:   <?php echo $singleItem->name?></li>

                <li class="list-group-item"><?php echo Uses::siteKeyword() ?>:   <?php echo $singleItem->summary ?></li>
                <li class="list-group-item"> </li>
                <li class="list-group-item"> </li>
            </ul>
        </div>


    </div>
</div>
<?php include "footer.php"?>
