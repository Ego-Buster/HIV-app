$(function(){

	auto_load_function();

	function auto_load_function(){
		auto_trigger();
	}


	function auto_trigger(){
		$('.content-username,.btn-burger,.content-btn-add button').off();
		
		$('.btn-burger').click(function(){
			$('.content-dropped-burger').slideToggle();
		});

		$('.content-username').click(function(){
			$('.content-menu-user').slideToggle();
		});

		$('.content-btn-add button').click(function(){
			$('.content-form-add').slideToggle();
		});

		$('.btn-slide-up').click(function(){
			scroll_to($('html,body'),$('body'));
		});
	}


	function scroll_to(scoll_in,scroll_to){
		scoll_in.animate({
			scrollTop: scroll_to.offset().top

		},1000);
	}









	function delete_old_rdv(){
		$.post('../../traitements/delete-old-rdv.php');
	}




});