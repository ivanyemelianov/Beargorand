<?php
/**
 * beargorand Theme Customizer
 *
 * @package beargorand
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function beargorand_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'beargorand_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'beargorand_customize_partial_blogdescription',
			)
		);
	}

	$wp_customize->add_section( 
		'sec_hero', array(
			'title' 		=> 'Home Page Settings',
			'description' 	=> 'Home Page'
		)
	);

	$wp_customize->add_setting(
		'set_heading', array(
			'type' 					=> 'theme_mod',
			'default' 				=> '',
			'sanitize-callback' 	=> 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'set_heading', array(
			'label' 			=> 'Heading',
			'description' 		=> 'Please, enter heading link here',
			'section' 			=> 'sec_hero',
			'type'				=> 'text'
		)
	);

	$wp_customize->add_setting(
		'set_text', array(
			'type' 					=> 'theme_mod',
			'default' 				=> '',
			'sanitize-callback' 	=> 'sanitize_textarea_field'
		)
	);

	$wp_customize->add_control(
		'set_text', array(
			'label' 			=> 'Text Area',
			'description' 		=> 'Please, enter text information here',
			'section' 			=> 'sec_hero',
			'type'				=> 'textarea'
		)
	);

	$wp_customize->add_setting(
		'set_reddit', array(
			'type' 					=> 'theme_mod',
			'default' 				=> '',
			'sanitize-callback' 	=> 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'set_reddit', array(
			'label' 			=> 'Reddit link',
			'description' 		=> 'Please, enter reddit link here',
			'section' 			=> 'sec_hero',
			'type'				=> 'text'
		)
	);

	$wp_customize->add_setting(
		'set_telegram', array(
			'type' 					=> 'theme_mod',
			'default' 				=> '',
			'sanitize-callback' 	=> 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'set_telegram', array(
			'label' 			=> 'Telegram link',
			'description' 		=> 'Please, enter telegram link here',
			'section' 			=> 'sec_hero',
			'type'				=> 'text'
		)
	);

	$wp_customize->add_setting(
		'set_instagram', array(
			'type' 					=> 'theme_mod',
			'default' 				=> '',
			'sanitize-callback' 	=> 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'set_instagram', array(
			'label' 			=> 'Instagram link',
			'description' 		=> 'Please, enter instagram link here',
			'section' 			=> 'sec_hero',
			'type'				=> 'text'
		)
	);

	$wp_customize->add_setting(
		'set_twitter', array(
			'type' 					=> 'theme_mod',
			'default' 				=> '',
			'sanitize-callback' 	=> 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'set_twitter', array(
			'label' 			=> 'Twitter link',
			'description' 		=> 'Please, enter twitter link here',
			'section' 			=> 'sec_hero',
			'type'				=> 'text'
		)
	);

	$wp_customize->add_setting(
		'set_discord', array(
			'type' 					=> 'theme_mod',
			'default' 				=> '',
			'sanitize-callback' 	=> 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'set_discord', array(
			'label' 			=> 'Discord link',
			'description' 		=> 'Please, enter discord link here',
			'section' 			=> 'sec_hero',
			'type'				=> 'text'
		)
	);

	$wp_customize->add_setting(
		'set_donated', array(
			'type' 					=> 'theme_mod',
			'default' 				=> '',
			'sanitize-callback' 	=> 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'set_donated', array(
			'label' 			=> 'Donated Amount',
			'description' 		=> 'Please, enter donated amount here',
			'section' 			=> 'sec_hero',
			'type'				=> 'text'
		)
	);
	

	$wp_customize->add_setting(
		'set_copyright', array(
			'type' 					=> 'theme_mod',
			'default' 				=> '',
			'sanitize-callback' 	=> 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'set_copyright', array(
			'label' 			=> 'Copyright Text',
			'description' 		=> 'Please, enter copyright text here',
			'section' 			=> 'sec_hero',
			'type'				=> 'text'
		)
	);

	$wp_customize->add_setting( 'set_welcome_gif', array(
        'default' => get_theme_file_uri('/img/bear.jpg'), // Add Default Image URL 
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'set_welcome_gif_control', array(
        'label' => 'Upload Image',
        'priority' => 20,
        'section' => 'sec_hero',
        'settings' => 'set_welcome_gif',
        'button_labels' => array(// All These labels are optional
                    'select' => 'Select Image',
                    'remove' => 'Remove Image',
                    'change' => 'Change Image',
                    )
    )));

}
add_action( 'customize_register', 'beargorand_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function beargorand_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function beargorand_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function beargorand_customize_preview_js() {
	wp_enqueue_script( 'beargorand-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'beargorand_customize_preview_js' );
