<?php namespace WSUWP\Social;


class WSUWP_Social_Media {

	private static $instance;

	public $options;
	public $social_metabox;
	public $open_graph;
	public $single_post;
	public $save_post;


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
		require_once __DIR__ . '/class-options.php';
		require_once __DIR__ . '/class-single-post.php';

		$this->options        = new Options();
		$this->open_graph     = new Open_Graph( $this->options );
		$this->social_metabox = new Social_Metabox( $this->options, $this->open_graph );
		$this->single_post = new Single_Post( $this->options, $this->open_graph );

		if ( is_admin() ) {

			require_once __DIR__ . '/class-save-post.php';

			$this->save_post = new Save_Post( $this->options );

		} // End if

	} // End init_plugin 


	public function setup_plugin() {

		$this->options->setup();
		$this->social_metabox->setup();
		$this->open_graph->setup();
		$this->single_post->setup();

		if ( is_admin() && null !== $this->save_post ) {

			$this->save_post->setup();

		}

	} // End setup_plugin


}
