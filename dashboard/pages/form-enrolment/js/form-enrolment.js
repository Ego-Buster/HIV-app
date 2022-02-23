$(function(){

	auto_load();

	function auto_load(){
		focused_menu();
		form_constraint_management();
		check_no_empty_field();
		submit_enrolment();
	}


	function focused_menu(){
		$('.item-menu').removeClass('menu-focused');
		$('.menu-enrolment').addClass('menu-focused');
	}


	function form_constraint_management(){

		$('.hiv-status, .date-birth, .beneficiary-type, .school-level').trigger('change');

		$('.champ-care').click(function(){
			if($(this).is(':checked')){
				$('.column-champ-code').fadeIn();

			}else{
				$('.column-champ-code').fadeOut();
			}
		});

		$('.health-facilitiy').click(function(){
			if($(this).is(':checked')){
				$('.column-health-facilities').fadeIn();

			}else{
				$('.column-health-facilities').fadeOut();
			}
		});

		$('.hiv-status').change(function(){
			if($(this).val()=="Unknown"){
				$('.column-art-status, .column-art-code').fadeOut(function(){
					$('.column-reason').fadeIn();
				});

			}else if($(this).val()=="Positive"){
				$('.column-reason').fadeOut(function(){
					$('.column-art-status, .column-art-code').fadeIn();
				});
			
			}else{
				$('.column-art-status, .column-art-code, .column-reason').fadeOut();

			}
		});

		
		var d = new Date();
		
		var year=d.getFullYear();
		var month=d.getMonth()+1;
		var day=d.getDate();

		if(month<10){
			month="0"+month;
		}

		var actual_date = year + "-" + month + "-" + day;

		$('.date-birth').change(function(){
			var year_birth=$(this).val().split('-')[0];
			age=parseInt(actual_date)-parseInt(year_birth);
			if(age>=21){
				$('.column-birth-certificate, .column-relationship-caregiver-child').fadeOut();
				$('.column-national-id').fadeIn();
				$('.column-case-infos').fadeOut();
			
			}else{
				$('.column-case-infos').fadeIn();
				$('.column-birth-certificate, .column-relationship-caregiver-child').fadeIn();
				$('.column-national-id').fadeOut();

			}

		});

		$('.beneficiary-type').change(function(){
			if($(this).val()=="Child"){
				$('.column-case-infos').fadeIn();
				$('.column-birth-certificate, .column-relationship-caregiver-child').fadeIn();
				$('.column-national-id').fadeOut();

			}else{
				$('.column-birth-certificate, .column-relationship-caregiver-child').fadeOut();
				$('.column-national-id').fadeIn();
				$('.column-case-infos').fadeOut();

			}
		});

		$('.school-level').change(function(){
			if($(this).val()=="Not in school" || $(this).val()=="Never been to school"){
				$('.column-class').fadeOut();
			}else{
				$('.column-class').fadeIn();
			}
		});

		$('.dead-mother').click(function(){
			if($(this).is(':checked')){
				$('.column-death-mother').fadeIn();
			}else{
				$('.column-death-mother').fadeOut();
			}
		});

		$('.dead-father').click(function(){
			if($(this).is(':checked')){
				$('.column-death-father').fadeIn();
			}else{
				$('.column-death-father').fadeOut();
			}
		});
	}


	/*Vérifie que tous les elements VISIBLES ET OBLIGATOIRES ont une valeur*/
	function check_no_empty_field(){
		$('.btn-save').click(function(){

			let completed="true";

			/*Parcours chaque champs*/
			$('.column-form').each(function(){
				/*Verifie si le champs est visible*/
				if($(this).is(':visible')){
					/*Verifie si le champs est vide*/
					if($(this).find('.required-field').parents('.column-form').find('.input-form').val()==""){
						completed="false";
					}
				}
			});

			/*Si aucun champs visible et obligatoire n'est vide*/
			if(completed=="true"){
				$('.form-enrolment').trigger('submit');

			}

		});
	}



	function submit_enrolment(){
		$('.form-enrolment').submit(function(){

			let response="";
			
			let first_name=$('.first-name').val();
			let family_name=$('.family-name').val();
			let national_id=$('.national-id').val();
			let mobile=$('.mobile').val();
			let sex=$('.sex').val();
			let date_of_birth=$('.date-birth').val();
			let hiv_status=$('.hiv-status').val();
			let reason_unknown_hiv_status=$('.reason-unknown-status').val();
			let art_status=$('.art-status').val();
			let art_code=$('.art-code').val();
			let date_initiation_art_code=$('.date-initiation-art-code').val();
			let treatment_health_facility_linked=$('.treatment-health-facilities').val();
			let art_regimen=$('.art-regimen').val();
			let school_level=$('.school-level').val();
			let class_level=$('.class').val();
			let relationship_caregiver_child=$('.relationship-caregiver-child').val();
			let cause_of_dead_mother="";
			let cause_of_dead_father="";
			let population_type=$('.population-type').val();
			let index_case=0;
			let disability=0;
			let has_birth_certificate=0;
			let pregnant_woman=0;
			let health_district_residence=$('.health-district-residence').val();
			let health_area=$('.health-area').val();
			let quarter=$('.quarter').val();
			let village=$('.village').val();
			let locality_description=$('.description-locality').val();
			let point_of_entry="";
			let champ_code=$('.champ-code').val();
			let type_enrolment=$('.type-enrolment').val();
			let date_enrolment=$('.enrolment-date').val();
			let case_worker=$('.case-worker-name').val();
			let beneficiary_type=$('.beneficiary-type').val();

			if($('.health-facilitiy').is(':checked')){
				point_of_entry+=$('.health-facilitiy').val()+" ";
			}

			if($('.champ-care').is(':checked')){
				point_of_entry+=$('.champ-care').val()+" ";
			}

			if($('.social-services').is(':checked')){
				point_of_entry+=$('.social-services').val()+" ";
			}

			if($('.legal-security').is(':checked')){
				point_of_entry+=$('.legal-security').val()+" ";
			}

			if($('.cso').is(':checked')){
				point_of_entry+=$('.cso').val()+" ";
			}

			if($('.community').is(':checked')){
				point_of_entry+=$('.community').val()+" ";
			}


			if($('.index-case').is(':checked')){
				index_case=1;
			}
			if($('.disability').is(':checked')){
				disability=1;
			}
			if($('.birth-certificate').is(':checked')){
				has_birth_certificate=1;
			}
			if($('.pregnant').is(':checked')){
				pregnant_woman=1;
			}
			if($('.dead-mother').is(':checked')){
				cause_of_dead_mother=$('.cause-death-mother').val();
			}
			if($('.dead-father').is(':checked')){
				cause_of_dead_father=$('.cause-death-father').val();
			}


			$.ajax({
		            type: "POST",
		            url: "treatment/add-enrolment.php",
		            data: {
		                "first_name":first_name,
				        "family_name":family_name,
				        "national_id":national_id,
				        "mobile":mobile,
				        "sex":sex,
				        "date_of_birth":date_of_birth,
				        "hiv_status":hiv_status,
				        "reason_unknown_hiv_status":reason_unknown_hiv_status,
				        "art_status":art_status,
				        "art_code":art_code,
				        "date_initiation_art":date_initiation_art_code,
				        "treatment_health_facility_linked":treatment_health_facility_linked,
				        "art_regimen":art_regimen,
				        "school_level":school_level,
				        "class_level":class_level,
				        "relationship_caregiver_child":relationship_caregiver_child,
				        "cause_of_dead_mother":cause_of_dead_mother,
				        "cause_of_dead_father":cause_of_dead_father,
				        "population_type":population_type,
				        "index_case":index_case,
				        "disability":disability,
				        "has_birth_certificate":has_birth_certificate,
				        "pregnant_woman":pregnant_woman,
				        "health_district_residence":health_district_residence,
				        "health_area":health_area,
				        "quarter":quarter,
				        "village":village,
				        "locality_description":locality_description,
				        "point_of_entry":point_of_entry,
				        "champ_code":champ_code,
				        "type_enrolment":type_enrolment,
				        "date_enrolment":date_enrolment,
				        "case_worker":case_worker,
				        "beneficiary_type":beneficiary_type
		            },

		            //if received a response from the server
		            success: function(data, textStatus, jqXHR) {
		            	window.location.href="../enrolment";
		            },

		            //If there was no resonse from the server
		            error: function(jqXHR, textStatus, errorThrown){
		            	alert(textStatus);
		            },

		            //capture the request before it was sent to server
		            beforeSend: function(jqXHR, settings){
		            	/*Vider / Reinitialiser le formulaire*/
		            	$('.form-enrolment').trigger('reset');
		            	$('.form-enrolment')[0].reset();

		            	$('.content-form').html("");
						response="<span class='orange'>Saving...</span>";
		            	$('.content-form').css('text-align','center').html(response).slideDown(1);
		            },

		            //this is called after the response or error functions are finished
		            //so that we can take some action
		            complete: function(jqXHR, textStatus){

		            }

		        });


			return false;

		});
	}



});