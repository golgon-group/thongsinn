!(function($) {
    "use strict";
  
    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          if ($(this).attr("href") == '#robertoNav') {
            $('html, body').animate({
              scrollTop: 0
            }, 1000);
            return false;
          }
  
          $('html, body').animate({
            scrollTop: (target.offset().top - 54)
          }, 1000);
          return false;
        }
      }
    });

    // Collapse Navbar
    var navbarCollapse = function() {
        if ($("#robertoNav").offset().top > 100) {
        $("#robertoNav").addClass("navbar-shrink");
        } else {
        $("#robertoNav").removeClass("navbar-shrink");
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);

    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
        $('.classy-menu').removeClass('menu-on');
        $('.navbarToggler').removeClass('active');
    });


    
    // $("#mynav ul li a[href^='#']").on('click', function(e) {

    //     // prevent default anchor click behavior
    //     e.preventDefault();

    //     // store hash
    //     var hash = this.hash;

    //     // animate
    //     $('html, body').animate({
    //         scrollTop: $(hash).offset().top
    //     }, 1000, function(){

    //         // when done, add hash to url
    //         // (default click behaviour)
    //         window.location.hash = hash;
    //     });

    //     });

})(jQuery);