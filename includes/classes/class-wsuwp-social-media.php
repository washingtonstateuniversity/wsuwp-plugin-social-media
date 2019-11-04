<?php namespace WSUWP\Social;


class WSUWP_Social_Media {

	private static $instance;

	public $post_options;
	public $social_metabox;
	public $open_graph;
	public $single_post;
	public $social_customizer;
	public $site_options;


	public static function get_instance() {

		if ( null === self::$instance ) {

			self::$instance = new self();

		} // End if

		return self::$instance;

	} // End get_instance


	private function __construct() {

		$this->init_plugin();

	} // End __construct

	private function init_plugin() {

		require_once __DIR__ . '/class-utilities.php';
		require_once __DIR__ . '/class-social-metabox.php';
		require_once __DIR__ . '/class-open-graph.php';
		require_once __DIR__ . '/wsuwp-classes/class-post-options.php';
		require_once __DIR__ . '/wsuwp-classes/class-site-options.php';
		require_once __DIR__ . '/class-social-post-options.php';
		require_once __DIR__ . '/class-single-post.php';
		require_once __DIR__ . '/class-social-customizer.php';
		require_once __DIR__ . '/class-social-site-options.php';

		$this->post_options      = new Social_Post_Options();
		$this->site_options      = new Social_Site_Options();
		$this->open_graph        = new Open_Graph( $this->post_options );
		$this->single_post       = new Single_Post( $this->site_options, $this->post_options, $this->open_graph );
		$this->social_customizer = new Social_Customizer();

		if ( is_admin() ) {

			$this->social_metabox  = new Social_Metabox( $this->site_options, $this->post_options, $this->open_graph );

		} // End if

	} // End init_plugin


	public function setup_plugin() {

		$this->single_post->setup();
		$this->social_customizer->setup();

		if ( is_admin() ) {

			$this->social_metabox->setup();

		} // End if

	} // End setup_plugin


}
