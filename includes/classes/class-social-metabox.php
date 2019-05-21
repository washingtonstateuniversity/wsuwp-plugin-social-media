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

		$this->options->set_post_options_by_id( $post->ID );

		$search_title   = $this->options->get_search_title();
		$search_snippet = $this->options->get_search_snippet();
		$fb_title       = $this->options->get_fb_title();
		$fb_snippet     = $this->options->get_fb_snippet();
		$fb_img_url     = $this->options->get_fb_img_url();
		$fb_img_id      = $this->options->get_fb_img_id();
		$tw_snippet     = $this->options->get_tw_snippet();
		$tw_img_url     = $this->options->get_tw_img_url();
		$tw_img_id      = $this->options->get_tw_img_id();

		include Utilities::get_plugin_component_path( 'metabox/tabs.php' );

		include Utilities::get_plugin_component_path( 'metabox/tab-content-fb.php' );

		include Utilities::get_plugin_component_path( 'metabox/tab-content-tw.php' );

		include Utilities::get_plugin_component_path( 'metabox/tab-content-search.php' );

		include Utilities::get_plugin_component_path( 'metabox/temp.php' );
		
	} // End the_social_share_metabox


}
