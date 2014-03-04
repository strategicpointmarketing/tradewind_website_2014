$(document).ready(function() {

    $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      console.log($(window).scrollTop())
    if ($(window).scrollTop() > 170) {
      $('.main-nav').addClass('sticky-nav');
    }
    if ($(window).scrollTop() < 171) {
      $('.main-nav').removeClass('sticky-nav');
    }
  });
    
    windowScroll = {
        config: {
            targetElems: $(".js-scroll-btn"),
            speed: 350
        },

        init: function() {
          var config = this.config;

            // Check if elements exist
            if (config.targetElems.length) {
                this.bindButtons( config );
            }

        },
        bindButtons: function( config ) {
            var buttons = config.targetElems;

            $(document.body).on("click", ".js-scroll-btn", function( e ) {

                var data = $(this).data('scroll'),
                    destination = $(".js-scroll-dest[data-scroll='" + data + "']"),
                    offset = destination.offset();

                // Prevent Click
                e.preventDefault();

                // Animate
                windowScroll.animateScroll( offset );

            });
        },
        animateScroll: function( offset ) {

            $('html, document').animate({
                scrollTop: offset.top - 20
            }, this.config.speed);

        }
    };

    homeSlider = {
        config: {
            targetElems: $(".js-slider"),
            pluginOptions: {
                "controlNav": true,
                "directionNav": false,
                "slideshowSpeed": 12000,  
            }
        },

        init: function() {
            var config = homeSlider.config;

            if ( config.targetElems.length ) {
                $.get("/templates/leaf-base/resources/js/jquery.flexslider.js")
                    .done(function() {
                        homeSlider.callSlider();
                    }).fail(function() {
                        config.targetElems.hide();
                    });
            }

        },

        callSlider: function() {
            var context = homeSlider.config;

            context.targetElems.flexslider( context.pluginOptions );
        }
    };

    // Call the script
    homeSlider.init();
    windowScroll.init();

});
