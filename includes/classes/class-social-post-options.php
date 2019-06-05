<?php namespace WSUWP\Social;


class Social_Post_Options extends Post_Options {

	protected $post_options_array = array(
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
}
