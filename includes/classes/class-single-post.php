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

				$this->open_graph->set_open_graph( $post_id );

				$title      = ( ! empty( $this->open_graph->get_title() ) ) ? $this->open_graph->get_title() : $this->open_graph->get_default_title();
				$snippet    = ( ! empty( $this->open_graph->get_snippet() ) ) ? $this->open_graph->get_snippet() : $this->open_graph->get_default_snippet();
				$site_name  = $this->open_graph->get_site_name();

				if ( ! empty( $this->open_graph->get_img_id() ) ) {
					$img_src    = $this->open_graph->get_img_src();
					$img_width  = $this->open_graph->get_img_width();
					$img_height = $this->open_graph->get_img_height();
				} else {
					$img_src    = $this->open_graph->get_default_img_src();
					$img_width  = $this->open_graph->get_default_img_width();
					$img_height = $this->open_graph->get_default_img_height();
				}

				$url = $this->open_graph->get_url();

				include Utilities::get_plugin_component_path( 'opengraph/opengraph.php' );

			} // End if
		} // End if
	}

}
