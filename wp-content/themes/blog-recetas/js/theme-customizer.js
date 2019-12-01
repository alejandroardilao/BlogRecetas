(function($) {
    //live customizer API
    wp.customize('header_color', function(value) {
        value.bind(function(newval) {
            $('header nav.nav-extended div.nav-wrapper.blue-custom').css('background-color', newval);
        });
    });

    wp.customize('menu_color', function(value) {
        value.bind(function(newval) {
            $('header nav.nav-extended').css('background-color', newval);
        });
    });

    wp.customize('aside_color', function(value) {
        value.bind(function(newval) {
            $('main[role="main"] > .white > .container').css('background-color', newval);
        });
    });

    wp.customize('footer_color', function(value) {
        value.bind(function(newval) {
            $('footer.page-footer').css('background-color', newval);
        });
    });

    wp.customize('copyright_color', function(value) {
        value.bind(function(newval) {
            $('div.footer-copyright').css('background-color', newval);
        });
    });

    wp.customize('copyright_text', function(value) {
        value.bind(function(newval) {
            $('div.footer-copyright p span.text').html(newval);
        });
    });

    wp.customize('default_image', function(value) {
        value.bind(function(newval) {
            $('img.activator').attr('src', newval);
            $('div.parallax img').attr('src', newval);
        });
    });
})(jQuery);