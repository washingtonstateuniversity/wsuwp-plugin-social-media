<?php namespace WSUWP\Social;


class Single_Post {

	private $options;
	private $open_graph;
	private $screens = array( 'post', 'page' );


	public function __construct( Site_Options $site_options, Post_Options $options, Open_Graph $open_graph ) {

		$this->site_options = $site_options;
		$this->options      = $options;
		$this->open_graph   = $open_graph;

	} // End __construct


	public function setup() {

		$this->screens = explode( ',', $this->site_options->get_wsuwp_option( 'wsuwp_social_metabox_screens', true ) );

		add_action( 'wp_head', array( $this, 'add_open_graph' ), 1 );

	}

	public function add_open_graph() {

		if ( is_singular( $this->screens ) ) {

			$post_id = get_the_ID();

			if ( $post_id ) {

				$this->open_graph->set_open_graph_by_post_id( $post_id );

				$default_title    = $this->open_graph->get_default_title();
				$default_snippet  = $this->open_graph->get_default_snippet();
				$default_img_src  = $this->open_graph->get_default_img_src();
				$default_url      = $this->open_graph->get_default_url();
				$search_title     = $this->open_graph->get_search_title();
				$search_snippet   = $this->open_graph->get_search_snippet( true );
				$fb_title         = $this->open_graph->get_fb_title( true );
				$fb_snippet       = $this->open_graph->get_fb_snippet( true );
				$fb_url           = $this->open_graph->get_fb_url( true );
				$fb_img_src       = $this->open_graph->get_fb_img_src( true );
				$fb_img_src_small = $this->open_graph->get_fb_img_src_small();
				$fb_img_src_large = $this->open_graph->get_fb_img_src_large();
				$fb_img_id        = $this->open_graph->get_fb_img_id();
				$tw_title         = $this->open_graph->get_tw_title( true );
				$tw_snippet       = $this->open_graph->get_tw_snippet( true );
				$tw_url           = $this->open_graph->get_tw_url( true );
				$tw_img_src       = $this->open_graph->get_tw_img_src( true );
				$tw_img_src_small = $this->open_graph->get_tw_img_src_small();
				$tw_img_src_large = $this->open_graph->get_tw_img_src_large();
				$tw_img_id        = $this->open_graph->get_tw_img_id();

				include Utilities::get_plugin_component_path( 'opengraph/opengraph.php' );

			} // End if
		} // End if
	}

}