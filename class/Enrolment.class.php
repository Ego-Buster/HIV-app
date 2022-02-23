<?php


class Enrolment
{

    /*PROPRIETES*/
    private $_id;
    private $_first_name;
    private $_family_name;
    private $_national_id;
    private $_mobile;
    private $_sex;
    private $_date_of_birth;
    private $_hiv_status;
    private $_reason_unknown_hiv_status;
    private $_art_status;
    private $_art_code;
    private $_date_initiation_art;
    private $_treatment_health_facility_linked;
    private $_art_regimen;
    private $_school_level;
    private $_class;
    private $_relationship_caregiver_child;
    private $_cause_of_dead_mother;
    private $_cause_of_dead_father;
    private $_population_type;
    private $_index_case;
    private $_disability;
    private $_has_birth_certificate;
    private $_pregnant_woman;
    private $_health_district_residence;
    private $_health_area;
    private $_quarter;
    private $_village;
    private $_locality_description;
    private $_point_of_entry;
    private $_champ_code;
    private $_type_enrolment;
    private $_date_enrolment;
    private $_case_worker;
    private $_beneficiary_type;
    private $_added_by;
    private $_added_at;

    /*CONSTRUCTEUR*/
    public function __construct(array $data){

        foreach ($data as $key => $value) {
            $method='set'.ucfirst($key);

            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }


    /*SETTERS & GETTERS*/

    public function setId($id){
        $this->_id=intval($id);
    }

    public function getId(){
        return $this->_id;
    }


    public function setFirst_name($first_name){
        $this->_first_name=htmlentities(strval($first_name));
    }

    public function getFirst_name(){
        return $this->_first_name;
    }


    public function setFamily_name($family_name){
        $this->_family_name=strval($family_name);

    }

    public function getFamily_name(){
        return $this->_family_name;
    }


    public function setNational_id($national_id){
        $this->_national_id=htmlentities(strval($national_id));
    }

    public function getNational_id(){
        return $this->_national_id;
    }


    public function setMobile($mobile){
        $this->_mobile=htmlentities(strval($mobile));
    }

    public function getMobile(){
        return $this->_mobile;
    }


    public function setSex($sex){
        $this->_sex=strval($sex);
    }

    public function getSex(){
        return $this->_sex;
    }


    public function setDate_of_birth($date_of_birth){
        $this->_date_of_birth=$date_of_birth;
    }

    public function getDate_of_birth(){
        return $this->_date_of_birth;
    }


    public function setHiv_status($hiv_status){
        $this->_hiv_status=strval($hiv_status);
    }

    public function getHiv_status(){
        return $this->_hiv_status;
    }


    public function setReason_unknown_hiv_status($reason_unknown_hiv_status){
        $this->_reason_unknown_hiv_status=strval($reason_unknown_hiv_status);
    }

    public function getReason_unknown_hiv_status(){
        return $this->_reason_unknown_hiv_status;
    }


    public function setArt_status($art_status){
        $this->_art_status=strval($art_status);
    }

    public function getArt_status(){
        return $this->_art_status;
    }


    public function setArt_code($art_code){
        $this->_art_code=strval($art_code);
    }

    public function getArt_code(){
        return $this->_art_code;
    }


    public function setDate_initiation_art($date_initiation_art){
        $this->_date_initiation_art=strval($date_initiation_art);
    }

    public function getDate_initiation_art(){
        return $this->_date_initiation_art;
    }


    public function setTreatment_health_facility_linked($treatment_health_facility_linked){
        $this->_treatment_health_facility_linked=strval($treatment_health_facility_linked);
    }

    public function getTreatment_health_facility_linked(){
        return $this->_treatment_health_facility_linked;
    }


    public function setArt_regimen($art_regimen){
        $this->_art_regimen=strval($art_regimen);
    }

    public function getArt_regimen(){
        return $this->_art_regimen;
    }


    public function setSchool_level($school_level){
        $this->_school_level=strval($school_level);
    }

    public function getSchool_level(){
        return $this->_school_level;
    }


    public function setClass($class){
        $this->_class=strval($class);
    }

    public function getClass(){
        return $this->_class;
    }


    public function setRelationship_caregiver_child($relationship_caregiver_child){
        $this->_relationship_caregiver_child=strval($relationship_caregiver_child);
    }

    public function getRelationship_caregiver_child(){
        return $this->_relationship_caregiver_child;
    }


    public function setCause_of_dead_mother($cause_of_dead_mother){
        $this->_cause_of_dead_mother=strval($cause_of_dead_mother);
    }

    public function getCause_of_dead_mother(){
        return $this->_cause_of_dead_mother;
    }


    public function setCause_of_dead_father($cause_of_dead_father){
        $this->_cause_of_dead_father=strval($cause_of_dead_father);
    }

    public function getCause_of_dead_father(){
        return $this->_cause_of_dead_father;
    }


    public function setPopulation_type($population_type){
        $this->_population_type=strval($population_type);
    }

    public function getPopulation_type(){
        return $this->_population_type;
    }


    public function setIndex_case($index_case){
        $this->_index_case=strval($index_case);
    }

    public function getIndex_case(){
        return $this->_index_case;
    }


    public function setDisability($disability){
        $this->_disability=strval($disability);
    }

    public function getDisability(){
        return $this->_disability;
    }


    public function setHas_birth_certificate($has_birth_certificate){
        $this->_has_birth_certificate=strval($has_birth_certificate);
    }

    public function getHas_birth_certificate(){
        return $this->_has_birth_certificate;
    }


    public function setPregnant_woman($pregnant_woman){
        $this->_pregnant_woman=strval($pregnant_woman);
    }

    public function getPregnant_woman(){
        return $this->_pregnant_woman;
    }


    public function setHealth_district_residence($health_district_residence){
        $this->_health_district_residence=strval($health_district_residence);
    }

    public function getHealth_district_residence(){
        return $this->_health_district_residence;
    }


    public function setHealth_area($health_area){
        $this->_health_area=strval($health_area);
    }

    public function getHealth_area(){
        return $this->_health_area;
    }


    public function setQuarter($quarter){
        $this->_quarter=strval($quarter);
    }

    public function getQuarter(){
        return $this->_quarter;
    }


    public function setVillage($village){
        $this->_village=strval($village);
    }

    public function getVillage(){
        return $this->_village;
    }


    public function setLocality_description($locality_description){
        $this->_locality_description=strval($locality_description);
    }

    public function getLocality_description(){
        return $this->_locality_description;
    }


    public function setPoint_of_entry($point_of_entry){
        $this->_point_of_entry=strval($point_of_entry);
    }

    public function getPoint_of_entry(){
        return $this->_point_of_entry;
    }


    public function setChamp_code($champ_code){
        $this->_champ_code=strval($champ_code);
    }

    public function getChamp_code(){
        return $this->_champ_code;
    }


    public function setType_enrolment($type_enrolment){
        $this->_type_enrolment=strval($type_enrolment);
    }

    public function getType_enrolment(){
        return $this->_type_enrolment;
    }


    public function setDate_enrolment($date_enrolment){
        $this->_date_enrolment=strval($date_enrolment);
    }

    public function getDate_enrolment(){
        return $this->_date_enrolment;
    }


    public function setCase_worker($case_worker){
        $this->_case_worker=strval($case_worker);
    }

    public function getCase_worker(){
        return $this->_case_worker;
    }


    public function setBeneficiary_type($beneficiary_type){
        $this->_beneficiary_type=$beneficiary_type;
    }

    public function getBeneficiary_type(){
        return $this->_beneficiary_type;
    }


    public function setAdded_by($added_by){
        $this->_added_by=strval($added_by);
    }

    public function getAdded_by(){
        return $this->_added_by;
    }


    public function setAdded_at($added_at){
        $this->_added_at=htmlentities(strval($added_at));
    }

    public function getAdded_at(){
        return $this->_added_at;
    }













    /*METHODES FONCTIONNELLES*/

    public function addEnrolment(Enrolment $enrolment){
        include(_APP_PATH."bd/server-connect.php");
        $query=$db->prepare("INSERT INTO enrolments VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

        $id=0;
        $first_name=$enrolment->getFirst_name();
        $family_name=$enrolment->getFamily_name();
        $national_id=$enrolment->getNational_id();
        $mobile=$enrolment->getMobile();
        $sex=$enrolment->getSex();
        $date_of_birth=$enrolment->getDate_of_birth();
        $hiv_status=$enrolment->getHiv_status();
        $reason_unknown_hiv_status=$enrolment->getReason_unknown_hiv_status();
        $art_status=$enrolment->getArt_status();
        $art_code=$enrolment->getArt_code();
        $date_initiation_art=$enrolment->getDate_initiation_art();
        $treatment_health_facility_linked=$enrolment->getTreatment_health_facility_linked();
        $art_regimen=$enrolment->getArt_regimen();
        $school_level=$enrolment->getSchool_level();
        $class=$enrolment->getClass();
        $relationship_caregiver_child=$enrolment->getRelationship_caregiver_child();
        $cause_of_dead_mother=$enrolment->getCause_of_dead_mother();
        $cause_of_dead_father=$enrolment->getCause_of_dead_father();
        $population_type=$enrolment->getPopulation_type();
        $index_case=$enrolment->getIndex_case();
        $disability=$enrolment->getDisability();
        $has_birth_certificate=$enrolment->getHas_birth_certificate();
        $pregnant_woman=$enrolment->getPregnant_woman();
        $health_district_residence=$enrolment->getHealth_district_residence();
        $health_area=$enrolment->getHealth_area();
        $quarter=$enrolment->getQuarter();
        $village=$enrolment->getVillage();
        $locality_description=$enrolment->getLocality_description();
        $point_of_entry=$enrolment->getPoint_of_entry();
        $champ_code=$enrolment->getChamp_code();
        $type_enrolment=$enrolment->getType_enrolment();
        $date_enrolment=$enrolment->getDate_enrolment();
        $case_worker=$enrolment->getCase_worker();
        $beneficiary_type=$enrolment->getBeneficiary_type();
        $added_by=$enrolment->getAdded_by();
        $added_at=$enrolment->getAdded_at();

        $query->bindParam(1,$id);
        $query->bindParam(2,$first_name);
        $query->bindParam(3,$family_name);
        $query->bindParam(4,$national_id);
        $query->bindParam(5,$mobile);
        $query->bindParam(6,$sex);
        $query->bindParam(7,$date_of_birth);
        $query->bindParam(8,$hiv_status);
        $query->bindParam(9,$reason_unknown_hiv_status);
        $query->bindParam(10,$art_status);
        $query->bindParam(11,$art_code);
        $query->bindParam(12,$date_initiation_art);
        $query->bindParam(13,$treatment_health_facility_linked);
        $query->bindParam(14,$art_regimen);
        $query->bindParam(15,$school_level);
        $query->bindParam(16,$class);
        $query->bindParam(17,$relationship_caregiver_child);
        $query->bindParam(18,$cause_of_dead_mother);
        $query->bindParam(19,$cause_of_dead_father);
        $query->bindParam(20,$population_type);
        $query->bindParam(21,$index_case);
        $query->bindParam(22,$disability);
        $query->bindParam(23,$has_birth_certificate);
        $query->bindParam(24,$pregnant_woman);
        $query->bindParam(25,$health_district_residence);
        $query->bindParam(26,$health_area);
        $query->bindParam(27,$quarter);
        $query->bindParam(28,$village);
        $query->bindParam(29,$locality_description);
        $query->bindParam(30,$point_of_entry);
        $query->bindParam(31,$champ_code);
        $query->bindParam(32,$type_enrolment);
        $query->bindParam(33,$date_enrolment);
        $query->bindParam(34,$case_worker);
        $query->bindParam(35,$beneficiary_type);
        $query->bindParam(36,$added_by);
        $query->bindParam(37,$added_at);


        if($query->execute()){
          return true;
      }else{
          return false;
      }
  }







  public function removeEnrolment($id_enrolment){
    include(_APP_PATH."bd/server-connect.php");

    $id_enrolment=intval($id_enrolment);

    $req=$db->prepare("DELETE FROM enrolments WHERE id=?");

    $req->bindParam(1,$id_enrolment);

    if($req->execute()){
        return true;
    }else{
        return false;
    }

}


public function getLastEnrolment(){
    include(_APP_PATH."bd/server-connect.php");

    $query=$db->prepare("SELECT * FROM enrolments WHERE id=(SELECT MAX(id) FROM enrolments)");
    if($query->execute() && $query->rowCount()==1){
        $data=$query->fetch();
        return (new Enrolment($data));
    }else{
        return false;
    }
}




public function getEnrolment($id){
    include(_APP_PATH."bd/server-connect.php");


    $id=intval($id);
    $query=$db->prepare("SELECT * FROM enrolments WHERE id=?");
    $query->bindParam(1,$id);
    if($query->execute() && $query->rowCount()==1){
        $data=$query->fetch();
        return (new Enrolment($data));
    }else{
        return false;
    }

}




public function getEnrolments() {
    include(_APP_PATH."bd/server-connect.php");
    $query=$db->prepare("SELECT * FROM enrolments ORDER BY added_at ASC");

    $enrolments=[];

    if($query->execute()){
        while($data=$query->fetch()){
            $enrolments[]=new Enrolment($data);
        }
        return $enrolments;
    }else{
        return false;
    }
}





public function findEnrolments($word) {
    include(_APP_PATH."bd/server-connect.php");
    $query=$db->prepare("SELECT * FROM enrolments
                        WHERE first_name LIKE '%$word%'
                        OR family_name LIKE '%$word%'
                        OR national_id LIKE '%$word%'
                        OR mobile LIKE '%$word%'
                        OR sex LIKE '%$word%'
                        OR date_of_birth LIKE '%$word%'
                        OR hiv_status LIKE '%$word%'
                        OR reason_unknown_hiv_status LIKE '%$word%'
                        OR art_status LIKE '%$word%'
                        OR art_code LIKE '%$word%'
                        OR date_initiation_art LIKE '%$word%'
                        OR treatment_health_facility_linked LIKE '%$word%'
                        OR art_regimen LIKE '%$word%'
                        OR school_level LIKE '%$word%'
                        OR relationship_caregiver_child LIKE '%$word%'
                        OR cause_of_dead_mother LIKE '%$word%'
                        OR cause_of_dead_father LIKE '%$word%'
                        OR population_type LIKE '%$word%'
                        OR health_district_residence LIKE '%$word%'
                        OR health_area LIKE '%$word%'
                        OR quarter LIKE '%$word%'
                        OR village LIKE '%$word%'
                        OR locality_description LIKE '%$word%'
                        OR point_of_entry LIKE '%$word%'
                        OR champ_code LIKE '%$word%'
                        OR type_enrolment LIKE '%$word%'
                        OR date_enrolment LIKE '%$word%'
                        OR case_worker LIKE '%$word%'
                        OR beneficiary_type LIKE '%$word%'

                        ORDER BY added_at ASC");

    $enrolments=[];

    if($query->execute()){
        while($data=$query->fetch()){
            $enrolments[]=new Enrolment($data);
        }
        return $enrolments;
    }else{
        return false;
    }
}






public function editEnrolment(Enrolment $enrolment) {
    include(_APP_PATH."bd/server-connect.php");

    $query=$db->prepare("UPDATE enrolments
        SET first_name=?,
        family_name=?,
        national_id=?,
        mobile=?,
        sex=?,
        date_of_birth=?,
        hiv_status=?,
        reason_unknown_hiv_status=?,
        art_status=?,
        art_code=?,
        date_initiation_art=?,
        treatment_health_facility_linked=?,
        art_regimen=?,
        school_level=?,
        class=?,
        relationship_caregiver_child=?,
        cause_of_dead_mother=?,
        cause_of_dead_father=?,
        population_type=?,
        index_case=?,
        disability=?,
        has_birth_certificate=?,
        pregnant_woman=?,
        health_district_residence=?,
        health_area=?,
        quarter=?,
        village=?,
        locality_description=?,
        point_of_entry=?,
        champ_code=?,
        type_enrolment=?,
        date_enrolment=?,
        case_worker=?,
        beneficiary_type=?
        WHERE id=?

        ");

        $id=$enrolment->getId();
        $first_name=$enrolment->getFirst_name();
        $family_name=$enrolment->getFamily_name();
        $national_id=$enrolment->getNational_id();
        $mobile=$enrolment->getMobile();
        $sex=$enrolment->getSex();
        $date_of_birth=$enrolment->getDate_of_birth();
        $hiv_status=$enrolment->getHiv_status();
        $reason_unknown_hiv_status=$enrolment->getReason_unknown_hiv_status();
        $art_status=$enrolment->getArt_status();
        $art_code=$enrolment->getArt_code();
        $date_initiation_art=$enrolment->getDate_initiation_art();
        $treatment_health_facility_linked=$enrolment->getTreatment_health_facility_linked();
        $art_regimen=$enrolment->getArt_regimen();
        $school_level=$enrolment->getSchool_level();
        $class=$enrolment->getClass();
        $relationship_caregiver_child=$enrolment->getRelationship_caregiver_child();
        $cause_of_dead_mother=$enrolment->getCause_of_dead_mother();
        $cause_of_dead_father=$enrolment->getCause_of_dead_father();
        $population_type=$enrolment->getPopulation_type();
        $index_case=$enrolment->getIndex_case();
        $disability=$enrolment->getDisability();
        $has_birth_certificate=$enrolment->getHas_birth_certificate();
        $pregnant_woman=$enrolment->getPregnant_woman();
        $health_district_residence=$enrolment->getHealth_district_residence();
        $health_area=$enrolment->getHealth_area();
        $quarter=$enrolment->getQuarter();
        $village=$enrolment->getVillage();
        $locality_description=$enrolment->getLocality_description();
        $point_of_entry=$enrolment->getPoint_of_entry();
        $champ_code=$enrolment->getChamp_code();
        $type_enrolment=$enrolment->getType_enrolment();
        $date_enrolment=$enrolment->getDate_enrolment();
        $case_worker=$enrolment->getCase_worker();
        $beneficiary_type=$enrolment->getBeneficiary_type();

        $query->bindParam(1,$first_name);
        $query->bindParam(2,$family_name);
        $query->bindParam(3,$national_id);
        $query->bindParam(4,$mobile);
        $query->bindParam(5,$sex);
        $query->bindParam(6,$date_of_birth);
        $query->bindParam(7,$hiv_status);
        $query->bindParam(8,$reason_unknown_hiv_status);
        $query->bindParam(9,$art_status);
        $query->bindParam(10,$art_code);
        $query->bindParam(11,$date_initiation_art);
        $query->bindParam(12,$treatment_health_facility_linked);
        $query->bindParam(13,$art_regimen);
        $query->bindParam(14,$school_level);
        $query->bindParam(15,$class);
        $query->bindParam(16,$relationship_caregiver_child);
        $query->bindParam(17,$cause_of_dead_mother);
        $query->bindParam(18,$cause_of_dead_father);
        $query->bindParam(19,$population_type);
        $query->bindParam(20,$index_case);
        $query->bindParam(21,$disability);
        $query->bindParam(22,$has_birth_certificate);
        $query->bindParam(23,$pregnant_woman);
        $query->bindParam(24,$health_district_residence);
        $query->bindParam(25,$health_area);
        $query->bindParam(26,$quarter);
        $query->bindParam(27,$village);
        $query->bindParam(28,$locality_description);
        $query->bindParam(29,$point_of_entry);
        $query->bindParam(30,$champ_code);
        $query->bindParam(31,$type_enrolment);
        $query->bindParam(32,$date_enrolment);
        $query->bindParam(33,$case_worker);
        $query->bindParam(34,$beneficiary_type);
        $query->bindParam(35,$id);

    if($query->execute()){

        return true;

    }else{
        return false;
    }
}


}

?>
