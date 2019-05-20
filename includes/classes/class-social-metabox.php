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

		$screens = $this->options->get_social_metabox_screens();

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

		$this->options->set_post_options( $post_id );

		$search_title = $this->options->get_search_title();
		

	} // End the_social_share_metabox


}
