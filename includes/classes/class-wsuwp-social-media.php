<?php namespace WSUWP\Social;


class WSUWP_Social_Media {

	private static $instance;


	public static function get_instance() {

		if ( null === self::$instance ) {

			self::$instance = new self();

		} // End if

		return self::$instance;

	} // End get_instance


	private function __construct() {

	} // End __construct

	private function init_plugin() {

	}


	public function setup_plugin() {


	} // End setup_plugin


}
