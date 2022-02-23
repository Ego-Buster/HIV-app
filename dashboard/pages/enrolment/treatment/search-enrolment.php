<?php 

session_start();

require_once '../../../tools/init_functions/init.php';
require_once _APP_PATH.'tools/init_functions/functions.php';
require_once _APP_PATH.'tools/init_functions/import-class.php';


$enrolment=new Enrolment($current_enrolment);
$enrolments=$enrolment->findEnrolments($_POST['word']);

if(!count($enrolments)>0){
    ?>
    
    <div class="line-not-found">No enrollment found! !</div>

    <?php
}else{
    ?>


    <table border="0" cellspacing="0" class="responsive-table content-enrolment content-line-infos">
        <thead>
            <th>Beneficiary type</th>
            <th>First name</th>
            <th>Health district residence</th>
            <th>Health area</th>
            <th>Case worker</th>
            <th>Date</th>
        </thead>
        <tbody>
            <?php  foreach($enrolments as $enrolment){ ?>
                <tr class="row-item enrolment" data-id="<?php echo $enrolment->getId(); ?>">
                    <td data-label="Beneficiary type"><?php echo $enrolment->getBeneficiary_type(); ?></td>
                    <td data-label="First name"><?php echo $enrolment->getFirst_name(); ?></td>
                    <td data-label="Health district residence"><?php echo $enrolment->getHealth_district_residence(); ?></td>
                    <td data-label="Health area"><?php echo if_empty($enrolment->getHealth_area()); ?></td>
                    <td data-label="Case worker"><?php echo $enrolment->getCase_worker(); ?></td>
                    <td data-label="Date"><?php echo get_date($enrolment->getDate_enrolment()); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>


    <?php
}




?>