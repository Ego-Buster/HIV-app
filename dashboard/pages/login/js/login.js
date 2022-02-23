$(function(){

	auto_load();

	function auto_load(){
		focused_menu();
		login();
	}


	function focused_menu(){
		$('.item-menu').removeClass('menu-focused');
	}

	function login(){
		$('.login-form').submit(function(){

			let email=$('.email').val();
			let password=$('.password').val();
			
			let verified=true;
			let response="";

			if(email==""){
				verified=false;
				response="<span class='orange'>Please, fill in the email</span>";
				
			}else if(password==""){
				verified=false;
				response="<span class='orange'>Please, fill in the password</span>";		
				
			}


			if(verified==true){

				$.ajax({
					type: "POST",
					url: "treatment/login.php",
					data: {
						"email":email,
						"password":password
					},

		            //if received a response from the server
		            success: function(data, textStatus, jqXHR) {
		            	if(data==true){
		            		window.location.href="../home";
		            		
		            	}else{
		            		$('.response-login').html("");
		            		response="<span class='red'>Incorrect email or password !</span>";
		            		$('.response-login').html(response).slideDown(100);
		            	}
		            },

		            //If there was no resonse from the server
		            error: function(jqXHR, textStatus, errorThrown){
		            	alert(textStatus);
		            },

		            //capture the request before it was sent to server
		            beforeSend: function(jqXHR, settings){
		            	$('.response-login').html("");
		            	response="<span class='orange'>Testing...</span>";
		            	$('.response-login').html(response).slideDown(1);
		            },

		            //this is called after the response or error functions are finished
		            //so that we can take some action
		            complete: function(jqXHR, textStatus){

		            }

		        }); 
				
			}else{
				$('.response-login').html("");
				$('.response-login').html(response).slideDown();
			}


			return false;
		});
	}





});