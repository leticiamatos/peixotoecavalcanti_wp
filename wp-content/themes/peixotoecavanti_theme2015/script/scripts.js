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
    
    // Vertical Scrolling Navigation
    $.scrollIt({
      upKey: 38,             // key code to navigate to the next section
      downKey: 40,           // key code to navigate to the previous section
      easing: 'easeInOutCubic',      // the easing function for animation
      scrollTime: 800,       // how long (in ms) the animation takes
      activeClass: 'active', // class given to the active nav element
      onPageChange: null,    // function(pageIndex) that is called when page is changed
      topOffset: 0           // offste (in px) for fixed top navigation
    });

    // Office images Carousel
    $('.bxslider').bxSlider({
      minSlides: 2,
      maxSlides: 3,
      moveSlides: 1,
      slideWidth: 585,
      pager:false
    });

    // Contact Form Modal 
    $( "#contact_form" ).dialog({
      autoOpen: false,
      modal: true,
      draggable: false,
      resizable: false,
      width: 970
    });
    $( ".contact_link" ).click(function() {
      $( "#contact_form" ).dialog( "open" );
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
