(function($) {
    $.fn.clickUp = function(toHide) {
        $(this).on('click',function(){
            toHide.slideUp();
        });
    };


    $.fn.clickDown = function(toShow) {
        $(this).on('click',function(){
            toShow.slideDown();
        });
    };

})(jQuery);