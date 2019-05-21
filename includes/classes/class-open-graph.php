<?php namespace WSUWP\Social;


class Open_Graph {

	private $options;


	public function __construct( Options $options ) {

		$this->options = $options;

	} // End __construct


	public function setup() {

		add_action( 'wp_head', array( $this, 'add_open_graph' ), 1 );

	} // End setup_plugin


	public function add_open_graph() {

		$screens = $this->options->get_metabox_screens();

		if ( is_singular( $screens ) ) {

			$post_id = get_the_ID();

			if ( $post_id ) {

				$this->options->set_post_options_by_id( $post_id );

				$search_title     = $this->options->get_post_option_value( '_wsu_search_title', false );
				$search_snippet   = $this->options->get_post_option_value( '_wsu_search_snippet', false );
				$fb_title         = $this->options->get_post_option_value( '_wsu_social_fb_title', false );
				$fb_snippet       = $this->options->get_post_option_value( '_wsu_social_fb_snippet', false );
				$fb_url           = $this->options->get_post_option_value( '_wsu_social_fb_url', false );
				$fb_img_src       = $this->options->get_post_option_value( '_wsu_social_fb_img_src', false );
				$fb_img_src_small = $this->options->get_post_option_value( '_wsu_social_fb_img_src_small', false );
				$fb_img_src_large = $this->options->get_post_option_value( '_wsu_social_fb_img_src_large', false );
				$fb_img_id        = $this->options->get_post_option_value( '_wsu_social_fb_img_id', false );
				$tw_title         = $this->options->get_post_option_value( '_wsu_social_tw_title', false );
				$tw_snippet       = $this->options->get_post_option_value( '_wsu_social_tw_snippet', false );
				$tw_url           = $this->options->get_post_option_value( '_wsu_social_tw_url', false );
				$tw_img_src       = $this->options->get_post_option_value( '_wsu_social_tw_img_src', false );
				$tw_img_src_small = $this->options->get_post_option_value( '_wsu_social_tw_img_src_small', false );
				$tw_img_src_large = $this->options->get_post_option_value( '_wsu_social_tw_img_src_large', false );
				$tw_img_id        = $this->options->get_post_option_value( '_wsu_social_tw_img_id', false );

				include Utilities::get_plugin_component_path( 'opengraph/opengraph.php' );

			} // End if
		} // End if

	} // End add_open_graph


}
