<?php 

session_start();

require_once '../../../tools/init_functions/init.php';
require_once _APP_PATH.'tools/init_functions/functions.php';
require_once _APP_PATH.'tools/init_functions/import-class.php';



$current_enrolment=[
	'id'=>$_POST['id'],
    'first_name'=>$_POST['first_name'],
    'family_name'=>$_POST['family_name'],
    'national_id'=>$_POST['national_id'],
    'mobile'=>$_POST['mobile'],
    'sex'=>$_POST['sex'],
    'date_of_birth'=>$_POST['date_of_birth'],
    'hiv_status'=>$_POST['hiv_status'],
    'reason_unknown_hiv_status'=>$_POST['reason_unknown_hiv_status'],
    'art_status'=>$_POST['art_status'],
    'art_code'=>$_POST['art_code'],
    'date_initiation_art'=>$_POST['date_initiation_art'],
    'treatment_health_facility_linked'=>$_POST['treatment_health_facility_linked'],
    'art_regimen'=>$_POST['art_regimen'],
    'school_level'=>$_POST['school_level'],
    'class'=>$_POST['class_level'],
    'relationship_caregiver_child'=>$_POST['relationship_caregiver_child'],
    'cause_of_dead_mother'=>$_POST['cause_of_dead_mother'],
    'cause_of_dead_father'=>$_POST['cause_of_dead_father'],
    'population_type'=>$_POST['population_type'],
    'index_case'=>$_POST['index_case'],
    'disability'=>$_POST['disability'],
    'has_birth_certificate'=>$_POST['has_birth_certificate'],
    'pregnant_woman'=>$_POST['pregnant_woman'],
    'health_district_residence'=>$_POST['health_district_residence'],
    'health_area'=>$_POST['health_area'],
    'quarter'=>$_POST['quarter'],
    'village'=>$_POST['village'],
    'locality_description'=>$_POST['locality_description'],
    'point_of_entry'=>$_POST['point_of_entry'],
    'champ_code'=>$_POST['champ_code'],
    'type_enrolment'=>$_POST['type_enrolment'],
    'date_enrolment'=>$_POST['date_enrolment'],
    'case_worker'=>$_POST['case_worker'],
    'beneficiary_type'=>$_POST['beneficiary_type'],
    'deleted'=>0,
    'deleted'=>0,
    'added_by'=>$_SESSION['id'],
    'added_at'=>date("Y-m-d H:i:s")
];


$enrolment=new Enrolment($current_enrolment);

echo $enrolment->editEnrolment($enrolment);




?>