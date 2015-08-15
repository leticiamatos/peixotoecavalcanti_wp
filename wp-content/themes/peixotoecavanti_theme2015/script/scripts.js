(function ($, root, undefined) {
	

	$(function () {
        $( "#accordion_01" ).accordion({
          active: false,
          heightStyle: "content",
          collapsible: true
        });
        $( "#accordion_02" ).accordion({
          active: false,
          heightStyle: "content",
          collapsible: true
        });
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
