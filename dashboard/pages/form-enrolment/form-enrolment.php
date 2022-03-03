<?php

$enrolment=new Enrolment($current_enrolment);

if(isset($_GET['id'])){
	$enrolment=$enrolment->getEnrolment($_GET['id']);
}

?>



<div class="content-tab">

	<div class="content-head">
		<div class="content-path-navigation">You're in : 
			<a href="../enrolment" class="link-navigation">Enrollment ></a>
			<a href="../form-enrolment" class="link-navigation">Form enrollment ></a>

			<?php if(isset($_GET['id'])){ ?>
				<a href="../form-enrolment/<?php echo $_GET['id'] ?>" class="link-navigation">Enrollment <?php echo $enrolment->getFirst_name(); ?></a>
			<?php } ?>
		</div>
	</div>

	<div class="line-title">KIDSS Beneficiary Enrollment Form</div>

	<div class="content-form content-form-enrolment">
		<form class="form-enrolment" method="post" <?php if(isset($_GET['id'])){echo "data-id=".$_GET['id'];} ?> action="treatment/add-enrolment.php">
			<div class="legend">Head</div>

			<div class="column-form col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="health-district-residence"> Health district of residence</label></div>
					<select class="input-form health-district-residence" required id="health-district-residence" name="health_district_residence">
						<option value="GAROUA 1" <?php if($enrolment->getHealth_district_residence()=="GAROUA 1"){ echo "selected";} ?>>GAROUA 1</option>
						<option value="MAROUA 2" <?php if($enrolment->getHealth_district_residence()=="MAROUA 2"){ echo "selected";} ?>>MAROUA 2</option>
						<option value="MOKOLO" <?php if($enrolment->getHealth_district_residence()=="MOKOLO"){ echo "selected";} ?>>MOKOLO</option>
						<option value="YAGOUA" <?php if($enrolment->getHealth_district_residence()=="YAGOUA"){ echo "selected";} ?>>YAGOUA</option>
						<option value="BOGO" <?php if($enrolment->getHealth_district_residence()=="BOGO"){ echo "selected";} ?>>BOGO</option>
						<option value="MAROUA 3" <?php if($enrolment->getHealth_district_residence()=="MAROUA 3"){ echo "selected";} ?>>MAROUA 3</option>
						<option value="MAROUA 1" <?php if($enrolment->getHealth_district_residence()=="MAROUA 1"){ echo "selected";} ?>>MAROUA 1</option>
						<option value="GAROUA 2" <?php if($enrolment->getHealth_district_residence()=="GAROUA 2"){ echo "selected";} ?>>GAROUA 2</option>
						<option value="NGONG" <?php if($enrolment->getHealth_district_residence()=="NGONG"){ echo "selected";} ?>>NGONG</option>
						<option value="MORA" <?php if($enrolment->getHealth_district_residence()=="MORA"){ echo "selected";} ?>>MORA</option>
						<option value="HINA" <?php if($enrolment->getHealth_district_residence()=="HINA"){ echo "selected";} ?>>HINA</option>
						<option value="DOUME" <?php if($enrolment->getHealth_district_residence()=="DOUME"){ echo "selected";} ?>>DOUME</option>
						<option value="GAROUA BOULAI" <?php if($enrolment->getHealth_district_residence()=="GAROUA BOULAI"){ echo "selected";} ?>>GAROUA BOULAI</option>
						<option value="ABONG MBANG" <?php if($enrolment->getHealth_district_residence()=="ABONG MBANG"){ echo "selected";} ?>>ABONG MBANG</option>
						<option value="BERTOUA" <?php if($enrolment->getHealth_district_residence()=="BERTOUA"){ echo "selected";} ?>>BERTOUA</option>
						<option value="NGAOUNDERE URBAIN" <?php if($enrolment->getHealth_district_residence()=="NGAOUNDERE URBAIN"){ echo "selected";} ?>>NGAOUNDERE URBAIN</option>
						<option value="MEIGANGA" <?php if($enrolment->getHealth_district_residence()=="MEIGANGA"){ echo "selected";} ?>>MEIGANGA</option>
						<option value="BUEA" <?php if($enrolment->getHealth_district_residence()=="BUEA"){ echo "selected";} ?>>BUEA</option>
						<option value="DEIDO" <?php if($enrolment->getHealth_district_residence()=="DEIDO"){ echo "selected";} ?>>DEIDO</option>
						<option value="BONASSAMA" <?php if($enrolment->getHealth_district_residence()=="BONASSAMA"){ echo "selected";} ?>>BONASSAMA</option>
						<option value="LIMBE" <?php if($enrolment->getHealth_district_residence()=="LIMBE"){ echo "selected";} ?>>LIMBE</option>
						<option value="NEW BELL" <?php if($enrolment->getHealth_district_residence()=="NEW BELL"){ echo "selected";} ?>>NEW BELL</option>
						<option value="LOGBABA" <?php if($enrolment->getHealth_district_residence()=="LOGBABA"){ echo "selected";} ?>>LOGBABA</option>
						<option value="MBANGUE" <?php if($enrolment->getHealth_district_residence()=="MBANGUE"){ echo "selected";} ?>>MBANGUE</option>
						<option value="NYLON" <?php if($enrolment->getHealth_district_residence()=="NYLON"){ echo "selected";} ?>>NYLON</option>
						<option value="TIKO" <?php if($enrolment->getHealth_district_residence()=="TIKO"){ echo "selected";} ?>>TIKO</option>
						<option value="CITE DES PALMIERS" <?php if($enrolment->getHealth_district_residence()=="CITE DES PALMIERS"){ echo "selected";} ?>>CITE DES PALMIERS</option>
						<option value="NKONGSAMBA" <?php if($enrolment->getHealth_district_residence()=="NKONGSAMBA"){ echo "selected";} ?>>NKONGSAMBA</option>
						<option value="NJOMBE PENJA" <?php if($enrolment->getHealth_district_residence()=="NJOMBE PENJA"){ echo "selected";} ?>>NJOMBE PENJA</option>
						<option value="JAPOMA" <?php if($enrolment->getHealth_district_residence()=="JAPOMA"){ echo "selected";} ?>>JAPOMA</option>
						<option value="EDEA" <?php if($enrolment->getHealth_district_residence()=="EDEA"){ echo "selected";} ?>>EDEA</option>
						<option value="MANJO" <?php if($enrolment->getHealth_district_residence()=="MANJO"){ echo "selected";} ?>>MANJO</option>
						<option value="KRIBI" <?php if($enrolment->getHealth_district_residence()=="KRIBI"){ echo "selected";} ?>>KRIBI</option>
						<option value="AMBAM" <?php if($enrolment->getHealth_district_residence()=="AMBAM"){ echo "selected";} ?>>AMBAM</option>
						<option value="SANGMELIMA" <?php if($enrolment->getHealth_district_residence()=="SANGMELIMA"){ echo "selected";} ?>>SANGMELIMA</option>
						<option value="LOLODORF" <?php if($enrolment->getHealth_district_residence()=="LOLODORF"){ echo "selected";} ?>>LOLODORF</option>
						<option value="EBOLOWA" <?php if($enrolment->getHealth_district_residence()=="EBOLOWA"){ echo "selected";} ?>>EBOLOWA</option>
						<option value="MVANGAN" <?php if($enrolment->getHealth_district_residence()=="MVANGAN"){ echo "selected";} ?>>MVANGAN</option>
						<option value="BAFUT" <?php if($enrolment->getHealth_district_residence()=="BAFUT"){ echo "selected";} ?>>BAFUT</option>
						<option value="FUNDONG" <?php if($enrolment->getHealth_district_residence()=="FUNDONG"){ echo "selected";} ?>>FUNDONG</option>
						<option value="KUMBO EAST" <?php if($enrolment->getHealth_district_residence()=="KUMBO EAST"){ echo "selected";} ?>>KUMBO EAST</option>
						<option value="KUMBO WEST" <?php if($enrolment->getHealth_district_residence()=="KUMBO WEST"){ echo "selected";} ?>>KUMBO WEST</option>
						<option value="NDOP" <?php if($enrolment->getHealth_district_residence()=="NDOP"){ echo "selected";} ?>>NDOP</option>
						<option value="TUBAH" <?php if($enrolment->getHealth_district_residence()=="TUBAH"){ echo "selected";} ?>>TUBAH</option>
						<option value="BAMENDA" <?php if($enrolment->getHealth_district_residence()=="BAMENDA"){ echo "selected";} ?>>BAMENDA</option>
						<option value="BANDJOUN" <?php if($enrolment->getHealth_district_residence()=="BANDJOUN"){ echo "selected";} ?>>BANDJOUN</option>
						<option value="FOUMBAN" <?php if($enrolment->getHealth_district_residence()=="FOUMBAN"){ echo "selected";} ?>>FOUMBAN</option>
						<option value="FOUMBOT" <?php if($enrolment->getHealth_district_residence()=="FOUMBOT"){ echo "selected";} ?>>FOUMBOT</option>
						<option value="MALENTOUEN" <?php if($enrolment->getHealth_district_residence()=="MALENTOUEN"){ echo "selected";} ?>>MALENTOUEN</option>
						<option value="MBOUDA" <?php if($enrolment->getHealth_district_residence()=="MBOUDA"){ echo "selected";} ?>>MBOUDA</option>
						<option value="DSCHANG" <?php if($enrolment->getHealth_district_residence()=="DSCHANG"){ echo "selected";} ?>>DSCHANG</option>
						<option value="MIFI" <?php if($enrolment->getHealth_district_residence()=="MIFI"){ echo "selected";} ?>>MIFI</option>
						<option value="AYOS" <?php if($enrolment->getHealth_district_residence()=="AYOS"){ echo "selected";} ?>>AYOS</option>
						<option value="BIYEM ASSI" <?php if($enrolment->getHealth_district_residence()=="BIYEM ASSI"){ echo "selected";} ?>>BIYEM ASSI</option>
						<option value="CITE VERTE" <?php if($enrolment->getHealth_district_residence()=="CITE VERTE"){ echo "selected";} ?>>CITE VERTE</option>
						<option value="DJOUNGOLO" <?php if($enrolment->getHealth_district_residence()=="DJOUNGOLO"){ echo "selected";} ?>>DJOUNGOLO</option>
						<option value="EFOULAN" <?php if($enrolment->getHealth_district_residence()=="EFOULAN"){ echo "selected";} ?>>EFOULAN</option>
						<option value="NKOLNDONGO" <?php if($enrolment->getHealth_district_residence()=="NKOLNDONGO"){ echo "selected";} ?>>NKOLNDONGO</option>
						<option value="OBALA" <?php if($enrolment->getHealth_district_residence()=="OBALA"){ echo "selected";} ?>>OBALA</option>
						<option value="ESEKA" <?php if($enrolment->getHealth_district_residence()=="ESEKA"){ echo "selected";} ?>>ESEKA</option>
						<option value="MBALMAYO" <?php if($enrolment->getHealth_district_residence()=="MBALMAYO"){ echo "selected";} ?>>MBALMAYO</option>
						<option value="MFOU" <?php if($enrolment->getHealth_district_residence()=="MFOU"){ echo "selected";} ?>>MFOU</option>
						<option value="NKOLBISSONG" <?php if($enrolment->getHealth_district_residence()=="NKOLBISSONG"){ echo "selected";} ?>>NKOLBISSONG</option>
						<option value="SOA" <?php if($enrolment->getHealth_district_residence()=="SOA"){ echo "selected";} ?>>SOA</option>
						<option value="AKONOLINGA" <?php if($enrolment->getHealth_district_residence()=="AKONOLINGA"){ echo "selected";} ?>>AKONOLINGA</option>
						<option value="NGOUMOU" <?php if($enrolment->getHealth_district_residence()=="NGOUMOU"){ echo "selected";} ?>>NGOUMOU</option>
						<option value="BAFIA" <?php if($enrolment->getHealth_district_residence()=="BAFIA"){ echo "selected";} ?>>BAFIA</option>
						<option value="OKOLA" <?php if($enrolment->getHealth_district_residence()=="OKOLA"){ echo "selected";} ?>>OKOLA</option>
						<option value="SAA" <?php if($enrolment->getHealth_district_residence()=="SAA"){ echo "selected";} ?>>SAA</option>

					</select>	
				</div>
			</div>
			<div class="column-form col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form"><label for="health-area">Health area</label></div>
					<input class="input-form health-area" value="<?php echo $enrolment->getHealth_area(); ?>" id="health-area" type="text"  name="health_area">	
				</div>
			</div>
			<div class="column-form col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form"><label for="quarter">Quarter</label></div>
					<input class="input-form quarter" value="<?php echo $enrolment->getQuarter(); ?>" id="quarter" type="text"  name="quarter">	
				</div>
			</div>
			<div class="column-form col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form"><label for="village">Village</label></div>
					<input class="input-form village" value="<?php echo $enrolment->getVillage(); ?>" id="village" type="text"  name="village">	
				</div>
			</div>
			<div class="column-form col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form"><label for="description-locality">Description of the locality</label></div>
					<input class="input-form description-locality" value="<?php echo $enrolment->getLocality_description(); ?>" id="description-locality" type="text"  name="description_locality">	
				</div>
			</div>
			<div class="column-form col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="beneficiary-type">Beneficiary-type</label></div>
					<select name="beneficiary_type" required id="beneficiary-type" class="input-form beneficiary-type">
						<option value="Child" <?php if($enrolment->getBeneficiary_type()=="Child"){ echo "selected";} ?>>Child</option>
						<option value="Primary Caregiver" <?php if($enrolment->getBeneficiary_type()=="Primary Caregiver"){ echo "selected";} ?>>Primary Caregiver</option>
						<option value="Secondary Caregiver" <?php if($enrolment->getBeneficiary_type()=="Secondary Caregiver"){ echo "selected";} ?>>Secondary Caregiver</option>
					</select>	
				</div>
			</div>
			<div class="column-form col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="enrolment-date">Enrolment date </label></div>
					<input type="date" required class="input-form enrolment-date" id="enrolment-date" value="<?php echo $enrolment->getDate_enrolment(); ?>" max="<?php echo date("Y-m-d"); ?>" name="enrolment_date">
				</div>
			</div>

			<div class="legend">Entry</div>

			<div class="column-form col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form">
						<label>Point of entry</label>
					</div>
					<div class="title-form">
						<input class="input-form health-facilitiy" value="Health facilitiy" id="health-facilitiy" type="checkbox" <?php if($enrolment->getIndex_case()==1){ echo "checked";} ?>  name="health_facilitiy">
						<label for="health-facilitiy">Health facilitiy</label>
					</div>
					<div class="title-form">
						<input class="input-form champ-care" <?php if($enrolment->getIndex_case()==1){ echo "checked";} ?> value="CHAMP / CARE" id="champ-care" type="checkbox"  name="champ_care">
						<label for="champ-care">CHAMP / CARE</label>
					</div>
					<div class="title-form">
						<input class="input-form social-services" <?php if($enrolment->getIndex_case()==1){ echo "checked";} ?> value="Social services" id="social-services" type="checkbox"  name="social-services">
						<label for="social-services">Social services</label>
					</div>
					<div class="title-form">
						<input class="input-form legal-security" <?php if($enrolment->getIndex_case()==1){ echo "checked";} ?> value="Legal / Security" id="legal-security" type="checkbox"  name="legal-security">
						<label for="legal-security">Legal / Security</label>
					</div>
					<div class="title-form">
						<input class="input-form cso" <?php if($enrolment->getIndex_case()==1){ echo "checked";} ?> value="CSO" id="cso" type="checkbox"  name="cso">
						<label for="cso">CSO</label>
					</div>
					<div class="title-form">
						<input class="input-form community" <?php if($enrolment->getIndex_case()==1){ echo "checked";} ?> value="Community" id="community" type="checkbox"  name="community">
						<label for="community">Community</label>
					</div>
				</div>
			</div>

			<div class="column-form display-element column-champ-code col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="champ-code">CHAMP code</label></div>
					<input type="text" required class="input-form champ-code" id="champ-code" name="champ_code">
				</div>
			</div>
			<div class="column-form col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="type-enrolment">Type of enrolment</label></div>
					<select name="type_enrolment" required id="type-enrolment" class="input-form type-enrolment">
						<option value="In person" <?php if($enrolment->getType_enrolment()=="In person"){ echo "selected";} ?>>In person</option>
						<option value="Remote" <?php if($enrolment->getType_enrolment()=="Remote"){ echo "selected";} ?>>Remote</option>
					</select>	
				</div>
			</div>



			<div class="legend">Kid's informations</div>
			<div class="column-form column-kid-infos col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="first-name">First name </label></div>
					<input class="input-form first-name" value="<?php echo $enrolment->getFirst_name(); ?>" required id="first-name" type="text"  name="first_name">	
				</div>
			</div>
			<div class="column-form column-kid-infos col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form"><label for="family-name">Family name </label></div>
					<input class="input-form family-name" value="<?php echo $enrolment->getFamily_name(); ?>" id="family-name" type="text"  name="family_name">	
				</div>
			</div>
			<div class="column-form column-kid-infos col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="date-birth">Date of birth </label></div>
					<input class="input-form date-birth" value="<?php echo $enrolment->getDate_of_birth(); ?>" required id="date-birth" type="date" min="1950-01-01" max="<?php echo date("Y-m-d"); ?>" name="date_birth">	
				</div>
			</div>
			<div class="column-form column-kid-infos col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="sex">Sex </label></div>
					<select class="input-form sex" required id="sex" name="sex">
						<option value="Male" <?php if($enrolment->getSex()=="Male"){ echo "selected";} ?>>Male</option>
						<option value="Female" <?php if($enrolment->getSex()=="Female"){ echo "selected";} ?>>Female</option>
					</select>
				</div>
			</div>
			<div class="column-form col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="school-level">School level </label></div>
					<select name="school_level" required id="school-level" class="input-form school-level">
						<option value="Pre-Primary" <?php if($enrolment->getSchool_level()=="Pre-Primary"){ echo "selected";} ?>>Pre-Primary</option>
						
						<option value="Primary" <?php if($enrolment->getSchool_level()=="Primary"){ echo "selected";} ?>>Primary</option>
						
						<option value="Koranic schools" <?php if($enrolment->getSchool_level()=="Koranic schools"){ echo "selected";} ?>>Koranic schools</option>
						
						<option value="Secondary" <?php if($enrolment->getSchool_level()=="Secondary"){ echo "selected";} ?>>Secondary</option>
						
						<option value="Tertiary/University" <?php if($enrolment->getSchool_level()=="Tertiary/University"){ echo "selected";} ?>>Tertiary/University</option>
						
						<option value="Not in school" <?php if($enrolment->getSchool_level()=="Not in school"){ echo "selected";} ?>>Not in school</option>
						
						<option value="Never been to school" <?php if($enrolment->getSchool_level()=="Never been to school"){ echo "selected";} ?>>Never been to school</option>
					</select>
				</div>
			</div>
			<div class="column-form column-class col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="class">Class </label></div>
					<select class="input-form class" name="class" required id="class">
						<option value="1" <?php if($enrolment->getClass()=="1"){ echo "selected";} ?>>1</option>
						<option value="2" <?php if($enrolment->getClass()=="2"){ echo "selected";} ?>>2</option>
						<option value="3" <?php if($enrolment->getClass()=="3"){ echo "selected";} ?>>3</option>
						<option value="4" <?php if($enrolment->getClass()=="4"){ echo "selected";} ?>>4</option>
						<option value="5" <?php if($enrolment->getClass()=="5"){ echo "selected";} ?>>5</option>
						<option value="6" <?php if($enrolment->getClass()=="6"){ echo "selected";} ?>>6</option>
						<option value="7" <?php if($enrolment->getClass()=="7"){ echo "selected";} ?>>7</option>
					</select>
				</div>
			</div>
			<div class="column-form display-element column-national-id col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="national-id">National ID </label></div>
					<input class="input-form national-id" value="<?php echo $enrolment->getNational_id(); ?>" required id="national-id" type="text"  name="national_id">	
				</div>
			</div>
			<div class="column-form column-mobile col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form"><label for="mobile">Mobile </label></div>
					<input class="input-form mobile" value="<?php echo $enrolment->getMobile(); ?>" id="mobile" type="text"  name="mobile">	
				</div>
			</div>



			<div class="legend">Case informations</div>
			<div class="column-form column-case-infos col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form">
						<input class="input-form index-case" id="index-case" type="checkbox"  name="index_case">
						<label for="index-case">Index case</label>
					</div>
					<div class="title-form">
						<input class="input-form disability" id="disability" type="checkbox"  name="disability">
						<label for="disability">Child with special needs</label>
					</div>
					<div class="title-form column-birth-certificate">
						<input class="input-form birth-certificate" id="birth-certificate" type="checkbox"  name="birth_certificate">
						<label for="birth-certificate">Has birth certificate</label>
					</div>
					<div class="title-form">
						<input class="input-form pregnant" id="pregnant" type="checkbox"  name="pregnant">
						<label for="pregnant">Pregnant woman</label>
					</div>
					<div class="title-form">
						<input class="input-form dead-mother" id="dead-mother" type="checkbox"  name="dead_mother">
						<label for="dead-mother">Child's mother is dead</label>
					</div>
					<div class="title-form">
						<input class="input-form dead-father" id="dead-father" type="checkbox"  name="dead_father">
						<label for="dead-father">Child's father is dead</label>
					</div>
				</div>
			</div>
			<div class="column-form col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="case-worker-name">Case worker name </label></div>
					<input type="text" value="<?php echo $enrolment->getCase_worker(); ?>" required class="input-form case-worker-name" id="case-worker-name" name="case_worker_name">
				</div>
			</div>
			<div class="column-form column-relationship-caregiver-child col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="relationship-caregiver-child">Reationship of the caregiver to child </label></div>
					<select class="input-form relationship-caregiver-child" required id="relationship-caregiver-child" name="relationship_caregiver_child">
						<option value="Mother" <?php if($enrolment->getRelationship_caregiver_child()=="Mother"){echo "selected";} ?>>Mother</option>
						<option value="Father" <?php if($enrolment->getRelationship_caregiver_child()=="Father"){echo "selected";} ?>>Father</option>
						<option value="Uncle" <?php if($enrolment->getRelationship_caregiver_child()=="Uncle"){echo "selected";} ?>>Uncle</option>
						<option value="Aunt" <?php if($enrolment->getRelationship_caregiver_child()=="Aunt"){echo "selected";} ?>>Aunt</option>
						<option value="Grand mother" <?php if($enrolment->getRelationship_caregiver_child()=="Grand mother"){echo "selected";} ?>>Grand mother</option>
						<option value="Grandfather" <?php if($enrolment->getRelationship_caregiver_child()=="Grandfather"){echo "selected";} ?>>Grandfather</option>
						<option value="Older sibling" <?php if($enrolment->getRelationship_caregiver_child()=="Older sibling"){echo "selected";} ?>>Older sibling</option>
						<option value="Other relative" <?php if($enrolment->getRelationship_caregiver_child()=="Other relative"){echo "selected";} ?>>Other relative</option>
					</select>
				</div>
			</div>
			<div class="column-form col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="population-type">Population type </label></div>
					<select class="input-form population-type" required id="population-type" name="population_type">
						<option value="HIV exposed infant" <?php if($enrolment->getPopulation_type()=="HIV exposed infant"){echo "selected";} ?>>HIV exposed infant</option>

						<option value="Pregnant & breast feeding living with HIV" <?php if($enrolment->getPopulation_type()=="Pregnant & breast feeding living with HIV"){echo "selected";} ?>>Pregnant & breast feeding living with HIV</option>
						
						<option value="Adolescent mother" <?php if($enrolment->getPopulation_type()=="Adolescent mother"){echo "selected";} ?>>Adolescent mother</option>
						
						<option value="Sexual/GBV survivor" <?php if($enrolment->getPopulation_type()=="Sexual/GBV survivor"){echo "selected";} ?>>Sexual/GBV survivor</option>
						
						<option value="Child of FSW" <?php if($enrolment->getPopulation_type()=="Child of FSW"){echo "selected";} ?>>Child of FSW</option>
						
						<option value="IDP" <?php if($enrolment->getPopulation_type()=="IDP"){echo "selected";} ?>>IDP</option>
						
						<option value="Child/Adolescent living with VIH" <?php if($enrolment->getPopulation_type()=="Child/Adolescent living with VIH"){echo "selected";} ?>>Child/Adolescent living with VIH</option>
					</select>
				</div>
			</div>
			<div class="column-form column-death-mother display-element col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="cause-death-mother">Cause of mother's dead </label></div>
					<select class="input-form cause-death-mother" required id="cause-death-mother" name="cause_death_mother">
						<option value="HIV Related" <?php if($enrolment->getCause_of_dead_mother()=="HIV Related"){echo "selected";} ?>>HIV Related</option>
						<option value="Other cause" <?php if($enrolment->getCause_of_dead_mother()=="HIV Related"){echo "selected";} ?>>Other cause</option>
					</select>	
				</div>
			</div>
			<div class="column-form column-death-father display-element col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="cause-death-father">Cause of father's dead </label></div>
					<select class="input-form cause-death-father" required id="cause-death-father" name="cause_death_father">
						<option value="HIV Related" <?php if($enrolment->getCause_of_dead_father()=="HIV Related"){echo "selected";} ?>>HIV Related</option>
						<option value="Other cause" <?php if($enrolment->getCause_of_dead_father()=="Other cause"){echo "selected";} ?>>Other cause</option>
					</select>
				</div>
			</div>


			<div class="legend">More informations</div>
			<div class="column-form col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="hiv-status">HIV status </label></div>
					<select class="input-form hiv-status" required id="hiv-status" name="hiv_status">
						<option value="Negative" <?php if($enrolment->getHiv_status()=="Negative"){echo "selected";} ?>>Negative</option>
						<option value="Positive" <?php if($enrolment->getHiv_status()=="Positive"){echo "selected";} ?>>Positive</option>
						<option value="Unknown" <?php if($enrolment->getHiv_status()=="Unknown"){echo "selected";} ?>>Unknown</option>
						<option value="Undisclosed" <?php if($enrolment->getHiv_status()=="Undisclosed"){echo "selected";} ?>>Undisclosed</option>
						<option value="Test not required" <?php if($enrolment->getHiv_status()=="Test not required"){echo "selected";} ?>>Test not required</option>
					</select>
				</div>
			</div>
			<div class="column-form column-reason display-element col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="reason-unknown-status">Reason for unknown status </label></div>
					<select class="input-form reason-unknown-status" required id="reason-unknown-status" name="reason_unknown_status">
						<option value="Refused Testing" -<?php if($enrolment->getReason_unknown_hiv_status()=="Refused Testing"){echo "selected";} ?>>Refused Testing</option>
						<option value="Test not yet done" <?php if($enrolment->getReason_unknown_hiv_status()=="Test not yet done"){echo "selected";} ?>>Test not yet done</option>
						<option value="Refused to disclose status" <?php if($enrolment->getReason_unknown_hiv_status()=="Refused to disclose status"){echo "selected";} ?>>Refusedto disclose status</option>
						<option value="HIV exposed Infant" <?php if($enrolment->getReason_unknown_hiv_status()=="HIV exposed Infant"){echo "selected";} ?>>HIV exposed Infant</option>
					</select>
				</div>
			</div>
			<div class="column-form column-art-status col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="art-status">ART status </label></div>
					<select class="input-form art-status" name="art_status" required id="art-status">
						<option value="On Treatment" <?php if($enrolment->getArt_status()=="On treatment"){echo "selected";} ?>>On Treatment</option>
						<option value="Not on Treatment" <?php if($enrolment->getArt_status()=="Not on treatment"){echo "selected";} ?>>Not on Treatment</option>
					</select>
				</div>
			</div>
			<div class="column-form column-art-code col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="art-code">ART code </label></div>
					<input class="input-form art-code" value="<?php echo $enrolment->getArt_code(); ?>" required id="art-code" type="text"  name="art_code">	
				</div>
			</div>
			<div class="column-form column-art-code col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="date-initiation-art-code">Date of initiation to ART</label></div>
					<input class="input-form date-initiation-art-code" value="<?php echo $enrolment->getDate_initiation_art(); ?>" required id="date-initiation-art-code" type="date" min="1950-01-01" max="<?php echo date("Y-m-d"); ?>"  name="date_initiation_art_code">	
				</div>
			</div>


			<div class="column-form column-health-facilities display-element col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="treatment-health-facilities">Treatment Health Facilities linked to </label></div>
					<input class="input-form treatment-health-facilities" value="<?php echo $enrolment->getTreatment_health_facility_linked(); ?>" required id="treatment-health-facilities" type="text"  name="treatment_health_facilities">	
				</div>
			</div>

			<div class="column-form column-art-code col-xs-12 col-md-4 col-lg-3">
				<div class="content-input-form">
					<div class="title-form required-field"><label for="art-regimen">ART regimen (Refer from provided SOP) </label></div>
					<input class="input-form art-regimen" value="<?php echo $enrolment->getArt_regimen(); ?>" required id="art-regimen" type="text"  name="art_regimen">	
				</div>
			</div>


			<div class="content-submit-btn">
				<?php if(!isset($_GET['id'])){ ?>
					<button class="btn-submit btn-save" type="submit">Save</button>
				<?php }else{ ?>
					<button class="btn-submit btn-update" type="submit">Update</button>
				<?php } ?>
			</div>

		</form>
	</div>