<?php 
/*
 * BCDL Header section
 * Adds posts and media for the header
*/

//bcdl_section_add( $wp_customize, 200, 'bcdl-headerclean', 'Header section', 'Header settings' );


$wp_customize->add_section( 'bcdl-header' , 
		array(
	    'title'      => __( 'Frontpage Header', 'bcdlpurple' ),
	    'description' => __( 'Select image for the header.', 'bcdlpurple' ),
	    'priority'   => 200,
		) 
	);

	$wp_customize->add_setting( 'bcdl-header-set', 
		array( 
			'type' => 'theme_mod',
			'default' => '',
			'transport' => 'refresh',
      'sanitize_callback' => 'absint'
		) 
	);

	$wp_customize->add_control( new WP_Customize_Media_Control( 
		$wp_customize, 'bcdl-headerctrl', 
			array( 
				'label' => __( 'Select Header image', 'bcdlpurple' ), //check the .pot file
				'section' => 'bcdl-header', 
				'settings' => 'bcdl-header-set',
			) 
		) 
	);
?>