<?php namespace WSUWP\Social;


class Social_Metabox {

	private $options;
	private $open_graph;


	public function __construct( Options $options, Open_Graph $open_graph ) {

		$this->options = $options;

		$this->open_graph = $open_graph;

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

		$this->open_graph->set_open_graph_by_post_id( $post->ID );

		//var_dump( $this->open_graph );

		//$this->options->set_post_options_by_id( $post->ID );

		$default_title    = $this->open_graph->get_default_title();
		$default_snippet  = $this->open_graph->get_default_snippet();
		$default_img_src  = $this->open_graph->get_default_img_src();
		$default_url      = $this->open_graph->get_default_url();
		$search_title     = $this->open_graph->get_search_title();
		$search_snippet   = $this->open_graph->get_search_snippet();
		$fb_title         = $this->open_graph->get_fb_title();
		$fb_snippet       = $this->open_graph->get_fb_snippet();
		$fb_img_src       = $this->open_graph->get_fb_img_src();
		$fb_img_src_small = $this->open_graph->get_fb_img_src_small();
		$fb_img_src_large = $this->open_graph->get_fb_img_src_large();
		$fb_img_id        = $this->open_graph->get_fb_img_id();
		$tw_title         = $this->open_graph->get_tw_title();
		$tw_snippet       = $this->open_graph->get_tw_snippet();
		$tw_img_src       = $this->open_graph->get_tw_img_src();
		$tw_img_src_small = $this->open_graph->get_tw_img_src_small();
		$tw_img_src_large = $this->open_graph->get_tw_img_src_large();
		$tw_img_id        = $this->open_graph->get_tw_img_id();

		include Utilities::get_plugin_component_path( 'metabox/tabs.php' );

		include Utilities::get_plugin_component_path( 'metabox/tab-content-fb.php' );

		include Utilities::get_plugin_component_path( 'metabox/tab-content-tw.php' );

		include Utilities::get_plugin_component_path( 'metabox/tab-content-search.php' );

		include Utilities::get_plugin_component_path( 'metabox/temp.php' );
		
	} // End the_social_share_metabox


}
