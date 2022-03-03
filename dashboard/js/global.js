$(function(){
	
	auto_load();
	auto_load_mobile();



	function auto_load_mobile(){
		show_mobile_content_menu();
	}


	function auto_load(){
		content_item_menu();		
	}

	function content_item_menu(){
		show_content_menu();
		hide_content_menu();
	}

	/* FONCTIONS POUR APPAREILS MOBILES */
	function show_mobile_content_menu(){
		$('.btn-burger').click(function(){
			$('.mobile-content-menu').slideToggle(function(){
				$('.mobile-item-menu .txt-menu').slideDown();
				if($('.mobile-content-menu').is(':visible')){
					$('.btn-burger').html('<i class="DGfi-cross" style="font-size:27px;"></i>');
				}else{
					$('.btn-burger').html('<i class="DGfi-menu"></i>');
					$('.txt-menu').slideUp();
				}
			});
		});
	}


	/* FONCTIONS POUR GRAND ECRAN */
	function show_content_menu(){
		$('.content-menu').on('mouseenter mouseover',function(){
			if($('.content-menu .state').val()=="0"){
				$(this).animate({width:'16vw'},300,function(){
					$('.txt-menu').show(200);
					$('.content-menu .state').val("1");
				});
			}
		});
	}

	
	function hide_content_menu(){
		$('.content-menu').on('mouseleave',function(){
			$('.txt-menu').hide(100);
			$(this).animate({width:'4vw'},300,function(){
				$('.content-menu .state').val("0");

				if($('.txt-menu').is(':visible')){
					$('.txt-menu').hide(100);
				}
			});
			
		});	
	}

	$('.btn-scroll-up').click(function(){
		scrollTop();
	});

	function scrollTo(element){
		$([document.documentElement, document.body]).animate({
		    scrollTop: element.offset().top
		}, 500);
	}


	function scrollTop(){

		$([document.documentElement, document.body]).animate({scrollTop:0}, '1000', 'swing', function() {
			
		});
	}


/*

	function redimensionnement() {
  		var result = document.getElementById('result');
  		if("matchMedia" in window) { // Détection
		    if(window.matchMedia("(max-width: 991px)").matches) {
		      alert("ok");
		    } else {
		      // Il y en a moins...
		    }
		}
	}

window.resize(redimensionnement, false);
*/

});