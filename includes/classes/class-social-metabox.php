<?php namespace WSUWP\Social;


class Social_Metabox {

	private $options;


	public function __construct( Options $options ) {

		$this->options = $options;

	} // End __construct


	public function setup() {

		add_action( 'add_meta_boxes', array( $this, 'register_social_metabox' ) );

	} // End setup_plugin


	public function register_social_metabox() {

		$screens = $this->options->get_metabox_screens();

		foreach ( $screens as $screen ) {

			add_meta_box(
				'wsu_social_options',           // Unique ID
				'Search & Social Settings',  // Box title
				array( $this, 'the_social_share_metabox' ),  // Content callback, must be of type callable
				$screen                   // Post type
			);

		} // End foreach

	} // End register_social_metabox


	public function the_social_share_metabox( $post ) {

		var_dump( get_post_meta( $post->ID ) );

		var_dump( $this->options->get_metabox_screens() );

		$this->options->set_post_options_by_id( $post->ID );

		$search_title     = $this->options->get_post_option_value( '_wsu_search_title', false );
		$search_snippet   = $this->options->get_post_option_value( '_wsu_search_snippet', false );
		$fb_title         = $this->options->get_post_option_value( '_wsu_social_fb_title', false );
		$fb_snippet       = $this->options->get_post_option_value( '_wsu_social_fb_snippet', false );
		$fb_img_src       = $this->options->get_post_option_value( '_wsu_social_fb_img_src', false );
		$fb_img_src_small = $this->options->get_post_option_value( '_wsu_social_fb_img_src_small', false );
		$fb_img_src_large = $this->options->get_post_option_value( '_wsu_social_fb_img_src_large', false );
		$fb_img_id        = $this->options->get_post_option_value( '_wsu_social_fb_img_id', false );
		$tw_title         = $this->options->get_post_option_value( '_wsu_social_tw_title', false );
		$tw_snippet       = $this->options->get_post_option_value( '_wsu_social_tw_snippet', false );
		$tw_img_src       = $this->options->get_post_option_value( '_wsu_social_tw_img_src', false );
		$tw_img_src_small = $this->options->get_post_option_value( '_wsu_social_tw_img_src_small', false );
		$tw_img_src_large = $this->options->get_post_option_value( '_wsu_social_tw_img_src_large', false );
		$tw_img_id        = $this->options->get_post_option_value( '_wsu_social_tw_img_id', false );

		include Utilities::get_plugin_component_path( 'metabox/tabs.php' );

		include Utilities::get_plugin_component_path( 'metabox/tab-content-fb.php' );

		include Utilities::get_plugin_component_path( 'metabox/tab-content-tw.php' );

		include Utilities::get_plugin_component_path( 'metabox/tab-content-search.php' );

		include Utilities::get_plugin_component_path( 'metabox/temp.php' );
		
	} // End the_social_share_metabox


}
