<?php

include(_APP_PATH."class/Admin.class.php");
include(_APP_PATH."class/Enrolment.class.php");
include(_APP_PATH."class/History.class.php");
include(_APP_PATH."class/Notification.class.php");

$current_history=[
	'id'=>0,
	'id_admin'=>0,
	'id_target'=>0,
	'action'=>"",
	'description'=>"",
	'added_at'=>""
];



$current_admin=[
	'id'=>0,
	'email'=>"",
	'password'=>"",
	'role'=>"",
	'position'=>"",
	'name'=>"",
	'last_seen'=>"",
	'added_at'=>""
];


$current_notification=[
	'id'=>0,
	'id_target'=>0,
	'type'=>"",
	'viewed'=>0,
	'added_at'=>""
];


$current_enrolment=[
	'id'=>0,
    'first_name'=>"",
    'family_name'=>"",
    'national_id'=>"",
    'mobile'=>"",
    'sex'=>"",
    'date_of_birth'=>"",
    'hiv_status'=>"",
    'reason_unknown_hiv_status'=>"",
    'art_status'=>"",
    'art_code'=>"",
    'date_initiation_art'=>"",
    'treatment_health_facility_linked'=>"",
    'art_regimen'=>"",
    'school_level'=>"",
    'class'=>"",
    'relationship_caregiver_child'=>"",
    'cause_of_dead_mother'=>"",
    'cause_of_dead_father'=>"",
    'population_type'=>"",
    'index_case'=>0,
    'disability'=>0,
    'has_birth_certificate'=>0,
    'pregnant_woman'=>0,
    'health_district_residence'=>"",
    'health_area'=>"",
    'quarter'=>"",
    'village'=>"",
    'locality_description'=>"",
    'point_of_entry'=>"",
    'champ_code'=>"",
    'type_enrolment'=>"",
    'date_enrolment'=>"",
    'case_worker'=>"",
    'beneficiary_type'=>"",
    'added_by'=>0,
    'added_at'=>""
];












?>
