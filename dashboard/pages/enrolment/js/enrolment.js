$(function(){

	auto_load();

	function auto_load(){
		focused_menu();
		typing_search();
		search_enrolment();
		filter_enrolment();
		check_buttons();
	}

	function enrolment_events(){
		view_enrolment();
		select_enrolment();
	}

	function check_buttons(){
		setInterval(update_buttons,500);
	}

	function update_buttons(){
		if($('.selected-enrollment:visible').length==0){
			$('.btn-delete, .btn-print-pdf').fadeOut(200);
		}else{
			$('.btn-delete, .btn-print-pdf').fadeIn(200);
		}
	}


	function focused_menu(){
		$('.item-menu').removeClass('menu-focused');
		$('.menu-enrolment').addClass('menu-focused');
	}

	function select_enrolment(){
		$('.enrolment').click(function(){

			if($(this).hasClass('selected-enrollment')){
				$(this).removeClass('selected-enrollment');
			}else{
				$(this).addClass('selected-enrollment');
			}

			archive_enrolment();
			print_enrolment();

		});

		$('.selected-enrollment').click(function(){
			$(this).removeClass('selected-enrollment');
		});
	}

	
	function print_enrolment(){
		$('.btn-print-pdf').off();
		$('.btn-print-pdf').click(function(){

			let printed=0;
			let total=$('.selected-enrollment').length;

			$('.selected-enrollment').each(function(){
				let id=$(this).data('id');

				$.ajax({
					type: "POST",
					url: "treatment/print-enrolment.php",
					data: {
						"id":id
					},

					//if received a response from the server
					success: function(data, textStatus, jqXHR) {
						printed=printed+1;
						if(printed==total){
							$('.btn-print-pdf').fadeIn();
							$('.waiting-zone').slideUp();
							$('.printing-zone').html("Printed successfuly<i class='DGfi-checkmark2'></i>").slideDown().delay(3000).slideUp();
						}
					},


					//If there was no resonse from the server
					error: function(jqXHR, textStatus, errorThrown){
						alert("Printing error: "+textStatus);
					},

					//capture the request before it was sent to server
					beforeSend: function(jqXHR, settings){
						/*Vider / Reinitialiser le formulaire*/
						$('.btn-print-pdf').fadeOut(100);
						$('.waiting-zone').html("Printing <i class='DGfi-spinner6'></i>").slideDown();
					},

					//this is called after the response or error functions are finished
					//so that we can take some action
					complete: function(jqXHR, textStatus){

					}
				});
			});

		});
	}

	function archive_enrolment(){
		$('.btn-delete').off();
		$('.btn-delete').click(function(){

			let archived=0;
			let total=$('.selected-enrollment').length;

			$('.selected-enrollment').each(function(){
				$(this).slideUp(1,function(){


					let id=$(this).data('id');

					$.ajax({
						type: "POST",
						url: "treatment/archive-enrolment.php",
						data: {
							"id":id
						},

						//if received a response from the server
						success: function(data, textStatus, jqXHR) {
							archived=archived+1;

							if(archived==total){
								$('.btn-delete').fadeIn();
								$('.waiting-zone').slideUp();
								$('.deleting-zone').html("Deleted successfuly <i class='DGfi-checkmark2'></i>").slideDown().delay(3000).slideUp();
							}
						},

						//If there was no resonse from the server
						error: function(jqXHR, textStatus, errorThrown){
							alert("Deleting error: "+textStatus);
						},

						//capture the request before it was sent to server
						beforeSend: function(jqXHR, settings){
							/*Vider / Reinitialiser le formulaire*/

							$('.btn-delete').fadeOut(200);
							$('.waiting-zone').html("Deleting <i class='DGfi-spinner6'></i>").slideDown();
						},

						//this is called after the response or error functions are finished
						//so that we can take some action
						complete: function(jqXHR, textStatus){
							
						}
					});

				});
			});

		});
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
			window.location.href="../form-enrolment/"+id;
		});
	}

	function filter_enrolment() {
		$('.input-filter').change(function(){
			$('.searching-input').trigger('keyup');
		});
	}


	function search_enrolment(key){

		let word="";
		let filter=$('.input-filter').val();

		if(key){
			word=key;
		}


		$.ajax({
			type: "POST",
			url: "treatment/search-enrolment.php",
			data: {
				"word":word,
				"filter":filter
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
				$('.waiting-zone').html("Searching <i class='DGfi-spinner6'></i>");
			},

			//this is called after the response or error functions are finished
			//so that we can take some action
			complete: function(jqXHR, textStatus){
				$('.waiting-zone').html("");
			}
		});




	}





});