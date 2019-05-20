<?php namespace WSUWP\Social;


class Options {

	private $metabox_screens = array( 'post', 'page' );


	public function setup() {


	} // End setup_plugin


	public function get_metabox_screens() {

		return $this->metabox_screens;

	} // End get_social_metabox_screens


	public function get_search_title() {

		return $this->search_title;

	} // End


	public function get_search_snippet() {

		return $this->search_snippet;

	} // End


	public function get_fb_title(); {

		return $this->fb_title;

	} // End


	public function get_fb_snippet() {

		return $this->fb_snippet;

	} // End


	public function get_fb_img_url() {

		return $this->fb_img_url;

	} // End


	public function get_fb_img_id() {

		return $this->fb_img_id;

	} // End


	public function get_tw_snippet() {

		return $this->tw_snippet;

	} // End


	public function get_tw_img_url() {

		return $this->tw_img_url;

	} // End


	public function get_tw_img_id() {

		return $this->tw_img_id;

	} // End



}
