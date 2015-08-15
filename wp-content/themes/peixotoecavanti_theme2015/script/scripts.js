(function ($, root, undefined) {
	

	$(function () {

	});
	// Changing Header (normal and extended versions)
	$(window).scroll(function () {
    	var topPage = $(this).scrollTop();
        
        // exemples
        if (topPage > 290) {
            $('body').addClass('header_extended');
            $('body').removeClass('header_normal');
        }
        else{
            $('body').addClass('header_normal');
            $('body').removeClass('header_extended');
        }
    });
	
	


})(jQuery, this);
