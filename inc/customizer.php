<?php

function neutral_customize_register($wp_customize){
	// Home Page
	$wp_customize->add_section('homepage', array(
		'title' => __('Home Page', 'neutral'),
		'description' => sprintf(__('Options for home page', 'neutral')),
		'priority' => 130
	));
	
		// Header
		$wp_customize->add_setting('homepage_heading', array(
			'default' => _x('the latest', 'neutral'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('homepage_heading', array(
			'label' => __('Heading', 'neutral'),
			'section' => 'homepage',
			'priority' => 1
		));
	
	// Footer
	$wp_customize->add_section('footer', array(
		'title' => __('Footer', 'neutral'),
		'description' => sprintf(__('Options for footer', 'neutral')),
		'priority' => 130
	));
	
		// LinkedIn
		$wp_customize->add_setting('footer_icon1', array(
			'default' => _x('fa fa-linkedin', 'neutral'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('footer_icon1', array(
			'label' => __('FontAwesome Icon 1', 'neutral'),
			'section' => 'footer',
			'priority' => 1
		));
	
		$wp_customize->add_setting('footer_icon1link', array(
			'default' => _x('https://www.linkedin.com/in/kyle-barnes-568714122/', 'neutral'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('footer_icon1link', array(
			'label' => __('FontAwesome Icon 1 Link', 'neutral'),
			'section' => 'footer',
			'priority' => 2
		));
	
		// GitHub
		$wp_customize->add_setting('footer_icon2', array(
			'default' => _x('fa fa-github', 'neutral'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('footer_icon2', array(
			'label' => __('FontAwesome Icon 2 Link', 'neutral'),
			'section' => 'footer',
			'priority' => 3
		));
	
		$wp_customize->add_setting('footer_icon2link', array(
			'default' => _x('https://github.com/kylewb94', 'neutral'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('footer_icon2link', array(
			'label' => __('FontAwesome Icon 2 Link', 'neutral'),
			'section' => 'footer',
			'priority' => 4
		));
}

add_action('customize_register', 'neutral_customize_register');

?>