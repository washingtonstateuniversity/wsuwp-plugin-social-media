<?php namespace WSUWP\Social;


class Social_Settings {

	public function __construct() {

	}

	public function setup() {

		add_action( 'admin_init', array( $this, 'register_social_settings' ) );

	} // End setup


	public function register_social_settings() {

		register_setting(
			'writing',             // Options group
			'wsuwp[wsuwp_social_metabox_screens]',      // Option name/database
			'sanitize_text_field' // Sanitize callback function
		);

		add_settings_section(
			'wsuwp_social_settings',                   // Section ID
			'Social/Search Metabox',  // Section title
			array( $this, 'the_social_settings_desc' ), // Section callback function
			'writing'                          // Settings page slug
		);

		add_settings_field(
			'wsuwp_social_settings_post_types',       // Field ID
			'Include on Post Types',       // Field title
			array( $this, 'the_social_settings_field' ), // Field callback function
			'writing',                    // Settings page slug
			'wsuwp_social_settings'               // Section ID
		);

	}


	public function the_social_settings_desc() {

		echo 'Add the Social/Search metabox to the following post types';

	}

	public function the_social_settings_field() {

		$wsuwp_options = get_option( 'wsuwp' );

		$screens = ( ! empty( $wsuwp_options['wsuwp_social_metabox_screens'] ) && is_array( $wsuwp_options['wsuwp_social_metabox_screens'] ) ) ? $screens : array( 'page', 'post' );

		if ( ! is_array( $screens ) ) {

			$screens = array( 'page', 'post' );

		} // End if

		$post_types = get_post_types( array( 'public' => true ), 'objects' );

		$exclude = array( 'attachment' );

		foreach ( $post_types as $index => $post_type ) {

			if ( ! in_array( $post_type->name, $exclude, true ) ) {

				$post_type_label     = $post_type->label;
				$post_type_slug      = $post_type->name;
				$selected_post_types = $screens;

				include Utilities::get_plugin_component_path( 'settings/enable-post-type-field.php' );

			} // End if
		} // End foreach
	}

}
