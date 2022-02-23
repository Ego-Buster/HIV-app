$(function(){

	auto_load();

	function auto_load(){
		focused_menu();
		typing_search();
		search_enrolment();
	}

	function enrolment_events(){
		view_enrolment();
	}


	function focused_menu(){
		$('.item-menu').removeClass('menu-focused');
		$('.menu-enrolment').addClass('menu-focused');
	}


	function typing_search(){
		
		$('.searching-input').keyup(function(){
			let word=$('.searching-input').val();
			search_enrolment(word);

		});
	}

	function view_enrolment(){
		$('.enrolment').dblclick(function(){
			let id=$(this).data('id');
			window.location.href="../form-enrolment?id="+id;
		});
	}



	function search_enrolment(key){

		let word="";

		if(key){
			word=key;
		}



		$.ajax({
			type: "POST",
			url: "treatment/search-enrolment.php",
			data: {
			"word":word
			},

			//if received a response from the server
			success: function(data, textStatus, jqXHR) {
				$('.content-result-line').html(data);
				enrolment_events();
			},

			//If there was no resonse from the server
			error: function(jqXHR, textStatus, errorThrown){
				alert(textStatus);
			},

			//capture the request before it was sent to server
			beforeSend: function(jqXHR, settings){
			/*Vider / Reinitialiser le formulaire*/
				$('.waiting-zone').text("Searching...");
			},

			//this is called after the response or error functions are finished
			//so that we can take some action
			complete: function(jqXHR, textStatus){
				$('.waiting-zone').text("");
			}
		});




	}





});