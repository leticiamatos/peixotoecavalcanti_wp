(function ($, root, undefined) {
	  // Responsive debugger script
  $(document).ready(function(){
    var MEASUREMENTS_ID = 'measurements'; // abstracted-out for convenience in renaming
    $("body").append('<div id="'+MEASUREMENTS_ID+'"></div>');
    $("#"+MEASUREMENTS_ID).css({
        'position': 'fixed',
        'bottom': '0',
        'right': '0',
        'background-color': 'black',
        'color': 'white',
        'padding': '5px',
        'font-size': '10px',
        'opacity': '0.4'
    });
    getDimensions = function(){
        return $(window).width() + ' (' + $(document).width() + ') x ' + $(window).height() + ' (' + $(document).height() + ')';
    }
    $("#"+MEASUREMENTS_ID).text(getDimensions());
    $(window).on("resize", function(){
        $("#"+MEASUREMENTS_ID).text(getDimensions());
    });
  });

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
    $( "#archive_accordion" ).accordion({
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
      minSlides: 1,
      maxSlides: 3,
      moveSlides: 1,
      slideWidth: 585,
      pager:false,
      auto: true,
      pause: 10000
    });

    // Contact Form Modal 
    $( "#contact_form" ).dialog({
      autoOpen: false,
      modal: true,
      draggable: false,
      resizable: false,
      width: 'auto', // overcomes width:'auto' and maxWidth bug
      maxWidth: 980,
      fluid: true
    });
    $( ".contact_link" ).click(function() {
      $( "#contact_form" ).dialog( "open" );
    });

    // Menu Dropdown 
    $( ".menu_link" ).click(function() {
      $( ".menu_wpr" ).toggle("blind");
    });
    $( ".menu_ext_link" ).click(function() {
      $( ".menu_ext_wpr" ).toggle("blind");
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


