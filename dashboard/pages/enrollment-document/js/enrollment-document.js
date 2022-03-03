$(function(){

	auto_load();

	function auto_load(){
		focused_menu();
		typing_search();
		search_document();
		filter_document();
		check_buttons();
	}

	function document_events(){
		view_document();
		select_document();
	}


	function check_buttons(){
		setInterval(update_buttons,500);
	}

	function update_buttons(){
		if($('.selected-document:visible').length==0){
			$('.btn-delete, .btn-open-pdf').fadeOut(200);
		}else{
			$('.btn-delete, .btn-open-pdf').fadeIn(200);
		}
	}


	function focused_menu(){
		$('.item-menu').removeClass('menu-focused');
		$('.menu-document').addClass('menu-focused');
	}

	function select_document(){
		$('.document').click(function(){

			open_document();
			delete_document();

			if($(this).hasClass('selected-document')){
				$(this).removeClass('selected-document');
			}else{
				$(this).addClass('selected-document');
			}

		});

		$('.selected-document').click(function(){
			$(this).removeClass('selected-document');
		});
	}

	function open_document(){

	}

	
	function delete_document(){
		$('.btn-delete').off();
		$('.btn-delete').click(function(){

			let deleted=0;
			let total=$('.selected-document').length;

			$('.selected-document').each(function(){
				$(this).slideUp(1,function(){


					let id=$(this).data('id');

					$.ajax({
						type: "POST",
						url: "treatment/delete-document.php",
						data: {
							"id":id
						},

						//if received a response from the server
						success: function(data, textStatus, jqXHR) {
							deleted=deleted+1;

							if(deleted==total){
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
			search_document(word);

		});
	}

	function view_document(){
		$('.document').dblclick(function(){
			
			var document_path=$(this).data('document');

			$('.pdf-view').html("<embed src='"+document_path+"' width='50%' height='50%' type='application/pdf' />");
			$('.content-pdf-view').fadeIn();

		});
	}

	function filter_document() {
		$('.input-filter').change(function(){
			$('.searching-input').trigger('keyup');
		});
	}


	function search_document(key){

		let word="";
		let filter=$('.input-filter').val();

		if(key){
			word=key;
		}


		$.ajax({
			type: "POST",
			url: "treatment/search-document.php",
			data: {
				"word":word,
				"filter":filter
			},

			//if received a response from the server
			success: function(data, textStatus, jqXHR) {
				$('.content-result-line').html(data);
				document_events();
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