<?php namespace WSUWP\Social;


class Save_Post {

	private $options;


	public function __construct( Options $options ) {

		$this->options = $options;

	} // End __construct


	public function setup() {

		$screens = $this->options->get_metabox_screens();

		foreach ( $screens as $screen ) {

			add_action( 'save_post_' . $screen, array( $this, 'save_post' ), 10, 2 );

		} // End foreach

	} // End setup_plugin


	public function save_post( $post_id, $post ) {

		$save_options = $this->options->get_post_options_array();

		foreach ( $save_options as $key => $option_array ) {

			if ( isset( $_REQUEST[ $key ] ) ) {

				$value = $_REQUEST[ $key ];

				update_post_meta( $post_id, $key, $value );
			}
		} // End foreach

	} // End save_post


}
