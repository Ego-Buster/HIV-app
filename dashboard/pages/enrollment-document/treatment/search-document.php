<?php 

session_start();

require_once '../../../tools/init_functions/init.php';
require_once _APP_PATH.'tools/init_functions/functions.php';
require_once _APP_PATH.'tools/init_functions/import-class.php';


$enrolment=new Enrolment($current_enrolment);
$enrolments=$enrolment->findPrintedEnrolments($_POST['word'],$_POST['filter']);


if(!count($enrolments)>0){
    ?>

    <div class="line-not-found">No document found! !</div>

    <?php
}else{
    ?>


    <div class="content-number-line-found"><?php echo count($enrolments); ?> documents</div>

    <div class="content-box">

        <?php

        foreach($enrolments as $enrolment){ 



            $health_area=$enrolment->getHealth_area();
            if($health_area==""){
                $health_area="...";
            }

            ?>



            <div class="document box-item box-document col-12 col-xs-6 col-md-4 col-lg-3" data-id="<?php echo $enrolment->getId(); ?>" data-document="<?php echo _ROOT_PATH.'files/enrollment/'.$enrolment->getId().'/Enrollment_'.$enrolment->getId().'_'.$enrolment->getFirst_name().'.pdf'; ?>">
                <div class="contener-doument">
                    <div class="document-icon">
                        <i class="DGfi-file-text2"></i>
                    </div>
                    <div class="document-data">
                        <div class="document-row document-name">
                            <?php echo $enrolment->getFirst_name()." ".$enrolment->getFamily_name(); ?>
                        </div>
                        <div class="document-row document-district">
                            <?php echo $enrolment->getHealth_district_residence(); ?>
                        </div>
                        <div class="document-row document-health-area">
                            <?php echo $health_area; ?>
                        </div>
                        <div class="document-row document-case-worker">
                            <?php echo $enrolment->getCase_worker(); ?></div>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>



        <?php
    }




?>