<?php

if ( ! function_exists( 'materialize_template_the_custom_logo' ) ) :
    /**
     * Displays the optional custom logo.
     * Does nothing if the custom logo is not available.
     */
    function materialize_template_the_custom_logo() {
        if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        }
    }
endif;