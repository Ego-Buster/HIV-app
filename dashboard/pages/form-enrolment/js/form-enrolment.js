$(function(){

	auto_load();

	function auto_load(){
		focused_menu();
	}


	function focused_menu(){
		$('.item-menu').removeClass('menu-focused');
		$('.menu-enrolment').addClass('menu-focused');
	}


});