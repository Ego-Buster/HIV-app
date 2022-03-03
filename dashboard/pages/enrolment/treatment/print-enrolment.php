<?php


session_start();

require_once '../../../tools/init_functions/init.php';
require_once _APP_PATH.'tools/init_functions/functions.php';
require_once _APP_PATH.'tools/init_functions/import-class.php';
require_once _APP_PATH.'tools/modules/mpdf/vendor/autoload.php';

$data=false;

$enrollment=new Enrolment($current_enrolment);
$enrollment=$enrollment->getEnrolment($_POST['id']);
$enrollment->printEnrolment($_POST['id']);

$index_case=[
	"0"=>"",
	"1"=>"checked"
];

$beneficiary_type=[
	"Child"=>"1",
	"Primary Caregiver"=>"2",
	"Secondary Caregiver"=>"3"
];

$sexe_f="";
$sexe_m="";

if($enrollment->getSex()=="Male"){
	$sexe_m="checked";
}else{
	$sexe_f="checked";
}

$disability_no="";
$disability_yes="";

if($enrollment->getDisability()==0){
	$disability_no="checked";
}else{
	$disability_yes="checked";
}

$has_birth_certificate_no="";
$has_birth_certificate_yes="";

if($enrollment->getHas_birth_certificate()==0){
	$has_birth_certificate_no="checked";
}else{
	$has_birth_certificate_yes="checked";
}

$hiv_status=[
	"Negative"=>"1",
	"Positive"=>"2",
	"Unknown"=>"3",
	"Undisclosed"=>"4",
	"Test not required"=>"5"
];


$reason_unknown_hiv_status=[
	"Refused Testing"=>"1",
	"Test not yet done"=>"2",
	"Refused to disclose status"=>"3",
	"HIV Exposed Infant"=>"4"
];


$art_status=[
	"On Treatment"=>"1",
	"Not on Treatment"=>"2"
];


$pregnant_no="";
$pregnant_yes="";


if($enrollment->getPregnant_woman()==0){
	$pregnant_no="checked";
}else{
	$pregnant_yes="checked";
}


$school_level=[
	"Pre-Primary"=>"1",
	"Primary"=>"2",
	"Koranic schools"=>"3",
	"Secondary"=>"4",
	"Tertiary / University"=>"5",
	"Not in school"=>"6",
	"Never been to school"=>"7"
];


$relationship_caregiver_child=[
	"Mother"=>"1",
	"Father"=>"2",
	"Uncle"=>"3",
	"Aunt"=>"4",
	"Grand mother"=>"5",
	"Grandfather"=>"6",
	"Older sibling"=>"7",
	"Other relative"=>"8"
];
$dead_mother="";
$dead_father="";


if($enrollment->getCause_of_dead_mother()=="HIV Related"){
	$dead_mother="1";
}else if($enrollment->getCause_of_dead_mother()=="Other cause"){
	$dead_mother="2";
}


if($enrollment->getCause_of_dead_father()=="HIV Related"){
	$dead_father="1";
}else if($enrollment->getCause_of_dead_father()=="Other cause"){
	$dead_father="2";
}



$population=[
	"HIV exposed infant"=>"1",
	"Pregnant & breast feeding living with HIV"=>"2",
	"Adolescent mother"=>"3",
	"Sexual/GBV survivor"=>"4",
	"Child of FSW"=>"5",
	"IDP"=>"6",
	"Child/Adolescent living with HIV"=>"7"
];


header("Content-Type: text/html;charset=utf-8");

$mpdf= new \Mpdf\Mpdf();


$mpdf->SetTitle("Test");
$mpdf->SetAuthor("MEAL");
$mpdf->SetCreator("MEAL Manager");
$mpdf->showImageErrors = true;
$mpdf->SetSubject("Enrollment printed");


$html='
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="widtd=device-widtd, initial-scale=1">
<title></title>
<style type="text/css">
.content-ttl-enrolment{
	text-align: center;
	font-weight: bold;
	widtd: 100%;
	height: 40px;
}


.content-advice{
	widtd: 100%;
	background-color: aliceblue;
	text-align: center;
	margin-top: 10px;
	padding-top: 8px;
	font-weight: bold;
	font-family: Arial Rounded MT Bold;
}

.hr{
	background-color: darkblue;
}

.head-info{
	widtd: 100%;
	margin-top: 10px;
	display: flex;
	font-family: Arial Rounded MT Bold;
	font-size: 12px;
}

.head-info div{
	float: left;
}

.hidden-border{
	border: none;
}

.info{
	float: left;
	margin-left: 5px;
}

.table-data-enrolment{
	widtd: 100%;
	text-align: center;
	margin-top: 15px;
	border: solid 1px black;
}

.table-data-enrolment td{
	font-size: 18px;
}

.vertical-align{
	writing-mode: vertical-rl;
	stext-orientation: mixed;

}

.center-text{
	text-align: center;
}

.table-indication-enrollment{
	widtd: 96%;
	margin-left: 2%;
	font-size: 6px;
}


.thead td{
	text-align: center;
	font-weight: bold;
}

.table-indication-enrollment td{
	border-top: none;
}

.table-indication-enrollment tr{
	border-bottom: none;
}

.ttl-table-indication{
	text-align: center;
	widtd: 100%;
	margin-top: 60px;
	font-weight: bold;
	padding-bottom: 5px;
}

.bold{
	font-weight: bold;
}

.demographics{
	background-color: #e4dbd3;
}


.population{
	background-color: deepskyblue;
}



.health{
	background-color: lightskyblue;
}



.cause-relation{
	background-color: yellowgreen;
}


.education{
	background-color: yellow;
}
</style>
</head>
<body>

<div class="content-ttl-enrolment">KIDSS Beneficiary Enrollment Form</div>
<div class="content-advice">
This form is used for registering Orphans and Vulnerable Children (OVC) and their Caregivers. the Case Worker is required to seek caregiver consent before enrolling the household into the project.
</div>
<div class="head-info head-info-1">
<div class="info">HHD1. Health District of residence: __________</div>
<div class="info">HHD2. Health Area: __________</div>
<div class="info">HHD3. Quarter: __________</div>
<div class="info">HHD4. Village: __________</div>
<div class="info">HHD5. Description of tde locality: __________</div>
</div>
<div class="head-info head-info-2">
<div class="info">HHD9. Point of entry: 
<input type="checkbox" name="">Health facility
<input type="checkbox" name="">CHAMP / CARE
<input type="checkbox" name="">Social services (MINAS, MINPROFF)
<input type="checkbox" name="">Legal/Security
<input type="checkbox" name="">CSO
<input type="checkbox" name="">Community
</div>
<div class="info">HHD10. If source of household is "CHAMP / CARE" provide CHAMP code |_|_|_|_|_|_|</div>
<div class="info">HHD3. type of enrollment: In person [ ] Remote [ ]</div>
</div>

<hr class="hr">

<table class="table-data-enrolment" border="1" cellspacing="0">
<tr class="thead">
<td class="hidden-border"></td>
<td colspan="9" class="demographics">Demographics</td>
<td colspan="8"  class="health">health details</td>
<td colspan="2" class="education">Education details</td>
<td class="cause-relation">Relation</td>
<td colspan="2" class="cause-relation">Cause of death</td>
<td class="population">Population type</td>
</tr>
<tbody>
<tr>
<td class="hidden-border"></td>
<td class="demographics">BNF1</td>
<td class="demographics">IAC1</td>
<td class="demographics">IAC1</td>
<td class="demographics">IAC3</td>
<td class="demographics">IAC4</td>
<td class="demographics">IAC5</td>
<td class="demographics">IAC7</td>
<td class="demographics">IAC8</td>
<td class="demographics">IAC9</td>
<td class="health">CHD1</td>
<td class="health">CHD2</td>
<td class="health">CHD3</td>
<td class="health">CHD4</td>
<td class="health">CHD5</td>
<td class="health">CHD6</td>
<td class="health">CHD7</td>
<td class="health">CHD8</td>
<td class="education">CED1</td>
<td class="education">CED2</td>
<td class="cause-relation">CRC1</td>
<td colspan="2" class="cause-relation">CDM CDF</td>
<td class="population">PT</td>
</tr>
<tr>
<td class="vertical-align">Tick if index case</td>
<td class="vertical-align">Beneficiary type</td>
<td>First name</td>
<td>Family name</td>
<td>National ID</td>
<td>Mobile #</td>
<td>Sex</td>
<td class="vertical-align">Child with special needs (disability) (Y/N)</td>
<td class="vertical-align">Date of Birtd: (dd/mm/yyyy)</td>
<td class="vertical-align">Has birtd certificate (Y/N)</td>
<td>HIV status</td>
<td class="vertical-align">Reason for Unknown HIV status</td>
<td class="vertical-align">If HIV Positive; indicate ART status</td>
<td>ART Code if on Treatment</td>
<td class="vertical-align">Date of initiation to ART</td>
<td class="vertical-align">Treatment health Facility linked to</td>
<td class="vertical-align">ART Regimen (Refer from provided SOP)</td>
<td class="vertical-align">Pregnant Woman (Y/N)</td>
<td>School level</td>
<td>Class / form</td>
<td class="vertical-align">Relationship of tde caregiver to child</td>
<td class="vertical-align">If Child\'s Mother is dead, indicate cause of death</td>
<td class="vertical-align">If Child\'s Father is dead, indicate cause of death</td>
<td class="vertical-align">Select Population Type</td>
</tr>
<tr>
<td><input type="checkbox" '.$index_case[$enrollment->getIndex_case()].' name=""></td>
<td>'.$beneficiary_type[$enrollment->getBeneficiary_type()].'</td>
<td>'.$enrollment->getFirst_name().'</td>
<td>'.$enrollment->getFamily_name().'</td>
<td>'.$enrollment->getNational_id().'</td>
<td>'.$enrollment->getMobile().'</td>
<td><input type="checkbox" '.$sexe_m.' name="">M <input type="checkbox" '.$sexe_f.' name="">F</td>
<td>Yes<input type="checkbox" '.$disability_yes.' name=""> <br>No<input type="checkbox" '.$disability_no.' name=""></td>
<td>'.get_date($enrollment->getDate_of_birth()).'</td>
<td>Yes<input type="checkbox" '.$has_birth_certificate_yes.' name=""> <br>No<input type="checkbox" '.$has_birth_certificate_no.' name=""></td>
<td>'.$hiv_status[$enrollment->getHiv_status()].'</td>
<td>'.$reason_unknown_hiv_status[$enrollment->getReason_unknown_hiv_status()].'</td>
<td>'.$art_status[$enrollment->getArt_status()].'</td>
<td>'.$enrollment->getArt_code().'</td>
<td>'.get_date($enrollment->getDate_initiation_art()).'</td>
<td>'.$enrollment->getTreatment_health_facility_linked().'</td>
<td>'.$enrollment->getArt_regimen().'</td>
<td>Yes<input type="checkbox" '.$pregnant_yes.' name=""> <br>No<input type="checkbox" '.$pregnant_no.' name=""></td>
<td>'.$school_level[$enrollment->getSchool_level()].'</td>
<td>'.$enrollment->getClass().'</td>
<td>'.$relationship_caregiver_child[$enrollment->getRelationship_caregiver_child()].'</td>
<td>'.$dead_mother.'</td>
<td>'.$dead_father.'</td>
<td>'.$population[$enrollment->getPopulation_type()].'</td>
</tr>
</tbody>
</table>


<div class="ttl-table-indication">Codes Section</div>
<table border="1" cellspacing="0" class="table-indication-enrollment">
<tr class="thead">
<td>(CED1) school level</td>
<td>(CED2) Class / Form</td>
<td>CHD3</td>
<td>CDM</td>
<td>CDF</td>
<td>(CRC2) Relationship to Caregiver</td>
<td>(CDH1) HIV Status</td>
<td>(CDH2) Reason for Unknown HIV status</td>
<td>(PT) Otder population type</td>
</tr>
<tbody>
<tr>
<td>
<div>1. Pre-Primary</div>
<div>2. Primary</div>
<div>3. Koranic schools</div>
<div>4. Tertiary / University</div>
<div>5. Not in school</div>
<div>6. Never been to school</div>
</td>
<td class="center-text">
<div>1</div>
<div>2</div>
<div>3</div>
<div>4</div>
<div>5</div>
<div>6</div>
<div>7</div>
</td>
<td>
<div>1. On Treatment</div>
<div>2. Not on Treatment</div>
</td>
<td>
<div>1. HIV related</div>
<div>2. Otder cause</div><br><br>
</td>
<td>
<div>1. HIV related</div>
<div>2. Otder cause</div><br><br>
<div class="bold">BNF1</div><br>
<div>1. Child</div>
<div>2. Primary Caregiver</div>
<div>3. Secondary Caregiver</div>
</td>
<td>
<div>1. Mother</div>
<div>2. Father</div>
<div>3. Uncle</div>
<div>4. Aunt</div>
<div>5. Grand Mother</div>
<div>6. GrandFather</div>
<div>7. Older sibling</div>
<div>8. Otder relative</div>
</td>
<td>
<div>1=Negative</div> 	
<div>2=Positive</div>	
<div>3=Unknown</div> 	
<div>4=Undisclosed</div>	
<div>5=Test not required</div>	
</td>
<td>
<div>1. Refused testing</div>
<div>2. Test not yet done</div>
<div>3. Refused to disclose status </div>
<div>4. HIV Exposed Infant</div>
</td>
<td>
<div>1. HIV exposed infant 2. Pregnant & breast feeding living with HIV   3. Adolescent Mother  4. Sexual/GBV survivor  5. Child of FSW  6. IDP  7. Child/Adolescent living with HIV</div><br>
<div>HHD7. Enrollment Date: (dd/mm/yyyy) |_|_|/|_|_|/202__</div><br>

<div>CMD1. Case Worker (CW) Name____________________________</div><br>

<div>CMC Name/ Signature  _____________________________________</div>

</td>
</tr>
</tbody>
</table>



</body>
</html>
';

$mpdf->WriteHTML($html);
$enrollment_name="Enrollment_".$enrollment->getId()."_".$enrollment->getFirst_name().".pdf";


if(!file_exists(_APP_PATH."files/enrollment")){
	mkdir(_APP_PATH."files/enrollment");
}

$enrollment_folder=_APP_PATH."files/enrollment/".$enrollment->getId();

if(!file_exists($enrollment_folder)){
	mkdir($enrollment_folder);
}

if(file_exists($enrollment_folder."/".$enrollment_name)){
	unlink($enrollment_folder."/".$enrollment_name);
}

if($mpdf->Output($enrollment_folder."/".$enrollment_name)){
	$data=true;
}

echo $data;





?>