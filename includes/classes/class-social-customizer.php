<?php namespace WSUWP\Social;


class Social_Customizer {


	public function __construct() {
		//add_action( 'customize_register', array( $this, 'add_customizer_options' ), 100, 1 );
	}



	public function setup() {

		add_action( 'customize_register', array( $this, 'add_customizer_options' ) );

		add_action( 'customize_controls_enqueue_scripts', array( $this, 'add_customizer_scripts' ) );

	}


	public function add_customizer_scripts() {

		$multi_checkbox_js_src  = Utilities::get_plugin_src_url( 'js/customizer/multi-checkbox.js' );

		wp_enqueue_script( 'multi-checkbox-script', $multi_checkbox_js_src, array(), '0.0.1', true );

	}


	public function add_customizer_options( $wp_customize ) {

		require_once __DIR__ . '/class-customizer-multi-checkbox-control.php';

		$post_types_objs = get_post_types( array( 'public' => true ), 'objects' );

		$exclude = array( 'attachment' );

		$post_type_choices = array();

		foreach ( $post_types_objs as $index => $post_type ) {

			if ( ! in_array( $post_type->name, $exclude, true ) ) {

				$post_type_choices[ $post_type->name ] = $post_type->label;

			} // End if
		} // End foreach

		$wp_customize->add_panel(
			'wsuwp_social',
			array(
				'title' => __( 'Social Media Options' ),
				'description' => esc_html__( 'Edit social media options and settings.' ),
			)
		);

		$wp_customize->add_section(
			'wsuwp_social_section',
			array(
				'title' => __( 'Social Metabox Settings' ),
				'description' => esc_html__( 'Settings for the social media metabox.' ),
				'panel' => 'wsuwp_social', // Only needed if adding your Section to a Panel
			)
		);

		$wp_customize->add_setting(
			'wsuwp[wsuwp_social_metabox_screens]',
			array(
				'default' => 'page,post', // Optional.
				'type' => 'option', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		/*$wp_customize->add_control(
			'wsuwp_social_metabox_screens_control',
			array(
				'label' => __( 'Show on Posts' ),
				'description' => esc_html__( 'Welect which posts the admin form will show on' ),
				'section' => 'wsuwp_social_section',
				'settings' => 'wsu[wsuwp_social_metabox_screens]',
				'type' => 'text', // Can be either text, email, url, number, hidden, or date
			)
		);*/

		$wp_customize->add_control(
			new Customizer_Multi_Checkbox_Control(
				$wp_customize,
				'wsuwp_social_metabox_screens_control',
				array(
					'settings' => 'wsuwp[wsuwp_social_metabox_screens]',
					'label'    => 'Testing multiple select',
					'section'  => 'wsuwp_social_section', // Enter the name of your own section
					'type'     => 'multi-checkbox', // The $type in our class
					'choices'  => $post_type_choices, // Your choices
				)
			)
		);

	} // End add_customizer_options

}
