<?php namespace WSUWP\Social;


class Options {

	private $wsu_social_metabox_screens = array( 'post', 'page' );


	public function setup() {


	} // End setup_plugin


	public function get_social_metabox_screens() {

		return $this->wsu_social_metabox_screens;

	} // End get_social_metabox_screens



}
