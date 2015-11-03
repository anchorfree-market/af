$(document).ready(function() {
    // Sticky green bar
    var sticky_bar = $('.section-contact-sticky');
    var close_bar = $('.close-sticky');

    // Show sticky bar
    $(window).load(function(){
        sticky_bar.delay(1000).animate({'bottom': '0'}, 500);
    });
    
    // Remove stick bar
    close_bar.click(function(e){
        e.preventDefault();
        sticky_bar.addClass('sticky-hide').animate({'bottom': '-100px'},500);
    });

    // Enamble popover
    $('.popover-custom').popover();
    $('.popover-custom').click(function(e){
        e.preventDefault();
    });
    

    // Animation of scroll to "how it works"
    function scrollToAnchor(id){
        $('html,body').animate({scrollTop: $(id).offset().top-40}, 2000, 'easeInOutExpo', function (){});
    }

    $('.js-scroll-to').click(function(e){
        e.preventDefault();
        var id = $(this).data('scroll');
        scrollToAnchor(id);
    });

    // Switch wi-fi security
    $('.switch').click(function(e){
        e.preventDefault();
        $(this).toggleClass('switch--on');
        $(this).toggleClass('switch--off');

        $('#security-on').stop(true, true).fadeToggle( 500, "linear" );
        $('#security-off').stop(true, true).fadeToggle( 500, "linear" );
    });
    

    var margin_top = 200;

    var section_attacks = $('.section-attacks').offset().top-margin_top*2;
    /*var section_video = $('.section-video').offset().top-margin_top;
    var section_howitworks = $('.section-howitworks-carrier').offset().top-margin_top;*/
    var section_features_list = $('.section-features-list').offset().top-margin_top;
    var section_contactus = $('.section-contact-us-carrier').offset().top-margin_top*4;

    // Disable animations for devices
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $('.section-attacks').find('*').addClass('animate');
        $('.section-video').find('*').addClass('animate');
        $('.section-howitworks-carrier').find('*').addClass('animate');
        $('.section-video').find('*').addClass('animate');
        $('.section-features-list').find('*').addClass('animate');
    }
    
    $('.section-video').addClass('section-video-background');
    
    // Animation on scroll
    $(window).scroll(function() {
        
        var y = $(this).scrollTop();

        // Hide / Show sticky bar on scroll
        if (y >= section_contactus) {
            sticky_bar.hide();
        } else {
            sticky_bar.show();
        }

        // Animate Attacks 
        if (y >= section_attacks) {
            $('.attack-list-type').each(function(i) {
                var $li = $(this);
                if ($li.hasClass('animate')) {
                    return false;
                } else {
                   setTimeout(function() {
                       $li.addClass('animate');
                   }, i*500); // delay 500 ms 
                }
                
            });                      
        }

        // Animate Features 
        if (y >= section_features_list) {
            $('.feature-type').each(function(i) {
                var $li = $(this);
                if ($li.hasClass('animate')) {
                    return false;
                } else {
                    setTimeout(function() {
                        $li.addClass('animate');
                    }, i*500); // delay 500 ms
                }
            });                      
        }
    });

    // Set the same height for each item of attacks list
    function equalHeight(items) {
       var tallest = 0;
       items.each(function() {
          var this_height = $(this).height();
          if(this_height > tallest) {
             tallest = this_height;
          }
       });
       items.height(tallest);
    }

    $(window).load(function() {
        equalHeight($('.attacks-list .attack-list-wrapper'));
    });

    $(window).resize(function(){
        equalHeight($('.attacks-list .attack-list-wrapper'));
    });

});