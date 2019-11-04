<?php namespace WSUWP\Social;


class Open_Graph {

	private $options;
	private $default_title = '';
	private $default_snippet = '';
	private $default_img_id = '';
	private $default_img_src = '';
	private $default_img_width = '';
	private $default_img_height = '';
	private $title = '';
	private $snippet = '';
	private $img_id = '';
	private $img_src = '';
	private $img_width = '';
	private $img_height = '';
	private $url = '';
	private $site_name = '';


	public function __construct( Post_Options $options ) {

		$this->options = $options;

	} // End __construct


	public function get_title() {
		return $this->title;
	} // End get_title

	public function get_default_title() {
		return $this->default_title;
	} // End get_title


	public function get_snippet() {
		return $this->snippet;
	}

	public function get_default_snippet() {
		return $this->default_snippet;
	}


	public function get_img_id() {
		return $this->img_id;
	}

	public function get_default_img_id() {
		return $this->default_img_id;
	}


	public function get_img_src() {
		return $this->img_src;
	}

	public function get_default_img_src() {
		return $this->default_img_src;
	}


	public function get_img_width() {
		return $this->img_width;
	}

	public function get_default_img_width() {
		return $this->default_img_width;
	}


	public function get_img_height() {
		return $this->img_height;
	}

	public function get_default_img_height() {
		return $this->default_img_height;
	}


	public function get_url() {
		return $this->url;
	}

	public function get_site_name() {
		return $this->site_name;
	}


	public function set_open_graph( $post_id ) {

		$this->options->set_post_options_values( $post_id );

		$this->site_name = get_bloginfo( 'name' );

		$this->set_the_snippet( $post_id );
		$this->set_default_snippet( $post_id );
		$this->set_the_title( $post_id );
		$this->set_default_title( $post_id );
		$this->set_url( $post_id );
		$this->set_img( $post_id );
		$this->set_default_img( $post_id );

	}


	private function set_the_title( $post_id ) {

		$title = $this->options->get_post_option_value( '_wsu_social_title', false );

		if ( empty( $title ) ) {

			$title = $this->options->get_post_option_value( '_wsu_social_fb_title', false );

		} // End if

		$this->title = $title;

	}


	private function set_default_title( $post_id ) {

		$title = get_the_title( $post_id );

		$title = apply_filters( 'the_title', $title );

		$this->default_title = $title;

	}


	private function set_the_snippet( $post_id ) {

		$snippet = $this->options->get_post_option_value( '_wsu_social_snippet', false );

		if ( empty( $snippet ) ) {

			$snippet = $this->options->get_post_option_value( '_wsu_social_fb_snippet', false );

		} // End if

		$this->snippet = $snippet;

	}
	

	private function set_default_snippet( $post_id ) {

		$post = get_post( $post_id );

		$snippet = $post->post_excerpt;

		if ( empty( $snippet ) ) {

			$snippet = wp_trim_words( $post->post_content, 55, '' );

		} // End if

		$this->default_snippet = $snippet;

	}

	private function set_img( $post_id ) {

		$img_id = $this->options->get_post_option_value( '_wsu_social_img_id', false );

		if ( empty( $img_id ) ) {

			$img_id = $this->options->get_post_option_value( '_wsu_social_fb_img_id', false );

		} // End if

		if ( ! empty( $img_id ) ) {

			$this->img_id = $img_id;

			$img = wp_get_attachment_image_src( $img_id, 'full' );

			if ( is_array( $img ) ) {

				$this->img_src = $img[0];
				$this->img_width = $img[1];
				$this->img_height = $img[2];

			} // End if
		}
	}


	private function set_default_img( $post_id ) {

		$img_id = get_post_thumbnail_id( $post_id );

		$this->default_img_id;

		if ( ! empty( $img_id ) ) {

			$img = wp_get_attachment_image_src( $img_id, 'full' );

			if ( is_array( $img ) ) {

				$this->default_img_src = $img[0];
				$this->default_img_width = $img[1];
				$this->default_img_height = $img[2];

			} // End if
		}
	}


	public function set_url( $post_id ) {

		$link = get_permalink( $post_id );

		$this->url = $link;

	} // End get_default_title

}
