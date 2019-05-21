<?php namespace WSUWP\Social;


class Options {

	private $post_types = array( 'post', 'page' );

	private $metabox_screens = array( 'post', 'page' );

	private $post_options_array = array(
		'_wsu_social_fb_img_id'        => array(
			'sanitize_callback' => 'sanitize_text_field',
			'value'             => '',
			'default_value'     => '',
			'placeholder'       => '',
		),
		'_wsu_social_fb_img_src'       => array(
			'sanitize_callback' => 'sanitize_text_field',
			'value'             => '',
			'default_value'     => '',
			'placeholder'       => '',
		),
		'_wsu_social_fb_img_src_small' => array(
			'sanitize_callback' => 'sanitize_text_field',
			'value'             => '',
			'default_value'     => '',
			'placeholder'       => '',
		),
		'_wsu_social_fb_img_src_large' => array(
			'sanitize_callback' => 'sanitize_text_field',
			'value'             => '',
			'default_value'     => '',
			'placeholder'       => '',
		),
		'_wsu_social_fb_title'         => array(
			'sanitize_callback' => 'sanitize_text_field',
			'value'             => '',
			'default_value'     => '',
			'placeholder'       => '',
		),
		'_wsu_social_fb_url'         => array(
			'sanitize_callback' => 'sanitize_text_field',
			'value'             => '',
			'default_value'     => '',
			'placeholder'       => '',
		),
		'_wsu_social_fb_snippet'       => array(
			'sanitize_callback' => 'sanitize_text_field',
			'value'             => '',
			'default_value'     => '',
			'placeholder'       => '',
		),
		'_wsu_social_tw_img_id'        => array(
			'sanitize_callback' => 'sanitize_text_field',
			'value'             => '',
			'default_value'     => '',
			'placeholder'       => '',
		),
		'_wsu_social_tw_img_src'       => array(
			'sanitize_callback' => 'sanitize_text_field',
			'value'             => '',
			'default_value'     => '',
			'placeholder'       => '',
		),
		'_wsu_social_tw_img_src_small' => array(
			'sanitize_callback' => 'sanitize_text_field',
			'value'             => '',
			'default_value'     => '',
			'placeholder'       => '',
		),
		'_wsu_social_tw_img_src_large' => array(
			'sanitize_callback' => 'sanitize_text_field',
			'value'             => '',
			'default_value'     => '',
			'placeholder'       => '',
		),
		'_wsu_social_tw_title'         => array(
			'sanitize_callback' => 'sanitize_text_field',
			'value'             => '',
			'default_value'     => '',
			'placeholder'       => '',
		),
		'_wsu_social_tw_snippet'       => array(
			'sanitize_callback' => 'sanitize_text_field',
			'value'             => '',
			'default_value'     => '',
			'placeholder'       => '',
		),
		'_wsu_social_tw_url'       => array(
			'sanitize_callback' => 'sanitize_text_field',
			'value'             => '',
			'default_value'     => '',
			'placeholder'       => '',
		),
		'_wsu_search_title'            => array(
			'sanitize_callback' => 'sanitize_text_field',
			'value'             => '',
			'default_value'     => '',
			'placeholder'       => '',
		),
		'_wsu_search_snippet'          => array(
			'sanitize_callback' => 'sanitize_text_field',
			'value'             => '',
			'default_value'     => '',
			'placeholder'       => '',
		),
	);



	public function setup() {


	} // End setup_plugin


	public function set_post_options_by_id( $post_id ) {

		$post_options_array = $this->get_post_options_array();

		foreach ( $post_options_array as $key => $option ) {

			$value = get_post_meta( $post_id, $key, true );

			$this->post_options_array[ $key ]['value'] = $value;

		} // End foreach

	}


	public function get_post_options_array() {

		return $this->post_options_array;

	}


	public function get_post_option( $key, $return_default = false ) {

		$post_options_array = $this->get_post_options_array();

		if ( array_key_exists( $key, $post_options_array ) ) {

			return $post_options_array[ $key ];

		} else {

			return array();

		} // End if

	}


	public function get_post_option_value( $key, $return_default = false ) {

		$post_option = $this->get_post_option( $key, $return_default );

		if ( ! empty( $post_option['value'] ) ) {

			return $post_option['value'];

		} else {

			return '';

		}

	}


	public function get_metabox_screens() {

		return $this->metabox_screens;

	} // End get_social_metabox_screens


	public function get_search_title() {

		return $this->search_title;

	} // End


}
