$(document).ready(function() {
    
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
            targetElems: "js-slider"
        },

        init: function() {
            var config = homeSlider.config;

            if ( config.targetElems.length ) {
                $.get("/templates/leaf-base/resources/js/jquery.flexslider.js");

                homeSlider.callSlider();
            }

        },

        callSlider: function() {
            homeSlider.config.targetElems.flexslider();
        }
    };

    // Call the script
    homeSlider.init();
    windowScroll.init();

});