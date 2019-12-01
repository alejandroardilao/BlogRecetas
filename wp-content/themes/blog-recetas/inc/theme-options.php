<?php

/*****************************************register settings************************************************************/
/**
 * @param $wp_customize
 */
function materialize_template_customize_register( $wp_customize ) {
	if ( ! isset( $wp_customize ) ) {
		return;
	}

	//options
	$wp_customize->add_setting( 'header_color' , array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default'     	=> '#039be5',
		'transport'   	=> 'refresh',
	) );

	$wp_customize->add_setting( 'menu_color' , array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default'     	=> '#1387c0',
		'transport'   	=> 'refresh',
	) );

	$wp_customize->add_setting( 'search_bar_color' , array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default'     	=> '#1e73be',
		'transport'   	=> 'refresh',
	) );

	$wp_customize->add_setting( 'aside_color' , array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default'     	=> '#1565C0',
		'transport'   	=> 'refresh',
	) );

	$wp_customize->add_setting( 'footer_color' , array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default'     	=> '#2d2868',
		'transport'   	=> 'refresh',
	) );

	$wp_customize->add_setting( 'copyright_color' , array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default'     	=> '#483d8b',
		'transport'   	=> 'refresh',
	) );

	$wp_customize->add_setting( 'default_image', array(
		'sanitize_callback' => 'esc_url_raw',
		'default'		=> get_template_directory_uri() . '/img/default-parallax-header-image.jpeg',
		'transport'		=> 'refresh',
	) );

	$wp_customize->add_setting( 'copyright_text' , array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'     	=> __( '&copy; 2018 VsWeb', 'blog-recetas' ),
		'transport'		=> 'refresh',
	) );

	//sections
	$wp_customize->add_section( 'materialize_template_colours' , array(
		'title'      	=> __( 'Theme colours', 'blog-recetas' ),
		'priority'   	=> 30,
	) );

	$wp_customize->add_section( 'materialize_template_options' , array(
		'title'      	=> __( 'Theme options', 'blog-recetas' ),
		'priority'   	=> 30,
	) );

	//controls
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_color', array(
		'label'      	=> __( 'Header background-color', 'blog-recetas' ),
		'section'    	=> 'materialize_template_colours',
		'settings'   	=> 'header_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_color', array(
		'label'      	=> __( 'Menu background-color', 'blog-recetas' ),
		'section'    	=> 'materialize_template_colours',
		'settings'   	=> 'menu_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_bar_color', array(
		'label'      	=> __( 'Search bar background-color', 'blog-recetas' ),
		'section'    	=> 'materialize_template_colours',
		'settings'   	=> 'search_bar_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'aside_color', array(
		'label'      	=> __( 'Sidebar background-color', 'blog-recetas' ),
		'section'    	=> 'materialize_template_colours',
		'settings'   	=> 'aside_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_color', array(
		'label'      	=> __( 'Footer background-color', 'blog-recetas' ),
		'section'    	=> 'materialize_template_colours',
		'settings'   	=> 'footer_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copyright_color', array(
		'label'      	=> __( 'Copyright background-color', 'blog-recetas' ),
		'section'    	=> 'materialize_template_colours',
		'settings'   	=> 'copyright_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'default_image', array(
		'label'			=> __( 'Default image', 'blog-recetas' ),
		'section'		=> 'materialize_template_options',
		'settings'		=> 'default_image',
	) ) );

	$wp_customize->add_control( 'copyright_text', array(
		'type' 			=> 'text',
		'label'      	=> __( 'Copyright', 'blog-recetas' ),
		'section'    	=> 'materialize_template_options',
		'settings'   	=> 'copyright_text',
	) );
}

add_action( 'customize_register', 'materialize_template_customize_register' );


function materialize_template_customize_css()
{
    $header_color = esc_attr(get_theme_mod('header_color', '#1387c0'));
    $menu_color = esc_attr(get_theme_mod('menu_color', '#039be5'));
	$aside_color = esc_attr(get_theme_mod('aside_color', '#1565C0'));
	$footer_color = esc_attr(get_theme_mod('footer_color', '#2d2868'));
	$copyright_color = esc_attr(get_theme_mod('copyright_color', '#483d8b'));
	$search_bar_color = esc_attr(get_theme_mod('search_bar_color', '#1e73be'));
	$background_color = esc_attr(get_background_color());
    $header_text_color = esc_attr(get_header_textcolor());
    if (!strlen($header_text_color)) $header_text_color = 'ffffff';


    $css = <<<CSS
		header nav.nav-extended div.nav-wrapper.blue-custom { background-color: $header_color !important; }
		header nav.nav-extended { background-color: $menu_color !important; color: #$header_text_color ; }
		header nav.nav-extended * { color: #$header_text_color ; }
		header nav.nav-extended .input-field { background-color: $search_bar_color !important; color: #$header_text_color ; }
		main[role="main"] > .white > .container { background-color: $aside_color !important; }
		footer.page-footer { background-color: $footer_color !important; }
		div.footer-copyright { background-color: $copyright_color !important; }
		main[role="main"] > .white > .container > *:not(.sidebar) { background-color: #$background_color !important; }
CSS;

    wp_add_inline_style( 'blog-recetas-custom-style', $css );
}

add_action( 'wp_enqueue_scripts', 'materialize_template_customize_css');


