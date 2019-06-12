<?php namespace WSUWP\Social;


class Open_Graph {

	private $options;

	private $default_title = '';
	private $default_snippet = '';
	private $default_img_src = '';
	private $default_img_src_small = '';
	private $default_img_src_large = '';
	private $default_url = '';
	private $search_title = '';
	private $search_snippet = '';
	private $fb_title = '';
	private $fb_snippet = '';
	private $fb_url = '';
	private $fb_img_src = '';
	private $fb_img_src_small = '';
	private $fb_img_src_large = '';
	private $fb_img_id = '';
	private $tw_title = '';
	private $tw_snippet = '';
	private $tw_url = '';
	private $tw_img_src = '';
	private $tw_img_src_small = '';
	private $tw_img_src_large = '';
	private $tw_img_id = '';


	public function __construct( Post_Options $options ) {

		$this->options = $options;

	} // End __construct


	public function setup() {

	} // End setup_plugin


	public function set_open_graph_by_post_id( $post_id ) {

		$this->options->set_post_options_values( $post_id );

		$this->set_default_title_by_id( $post_id );
		$this->set_default_snippet_by_id( $post_id );
		$this->set_default_img_by_post_id( $post_id );
		$this->set_default_url_by_id( $post_id );

		$this->search_title          = $this->options->get_post_option_value( '_wsu_search_title', false );
		$this->search_snippet        = $this->options->get_post_option_value( '_wsu_search_snippet', false );
		$this->fb_title              = $this->options->get_post_option_value( '_wsu_social_fb_title', false );
		$this->fb_snippet            = $this->options->get_post_option_value( '_wsu_social_fb_snippet', false );
		$this->fb_url                = $this->options->get_post_option_value( '_wsu_social_fb_url', false );
		$this->fb_img_src            = $this->options->get_post_option_value( '_wsu_social_fb_img_src', false );
		$this->fb_img_src_small      = $this->options->get_post_option_value( '_wsu_social_fb_img_src_small', false );
		$this->fb_img_src_large      = $this->options->get_post_option_value( '_wsu_social_fb_img_src_large', false );
		$this->fb_img_id             = $this->options->get_post_option_value( '_wsu_social_fb_img_id', false );
		$this->tw_title              = $this->options->get_post_option_value( '_wsu_social_tw_title', false );
		$this->tw_snippet            = $this->options->get_post_option_value( '_wsu_social_tw_snippet', false );
		$this->tw_url                = $this->options->get_post_option_value( '_wsu_social_tw_url', false );
		$this->tw_img_src            = $this->options->get_post_option_value( '_wsu_social_tw_img_src', false );
		$this->tw_img_src_small      = $this->options->get_post_option_value( '_wsu_social_tw_img_src_small', false );
		$this->tw_img_src_large      = $this->options->get_post_option_value( '_wsu_social_tw_img_src_large', false );
		$this->tw_img_id             = $this->options->get_post_option_value( '_wsu_social_tw_img_id', false );

	} // End set_open_graph_by_post_id


	public function set_default_title_by_id( $post_id ) {

		$title = get_the_title( $post_id );

		$this->default_title = apply_filters( 'the_title', $title );

	} // End get_default_title


	public function set_default_url_by_id( $post_id ) {

		$link = get_permalink( $post_id );

		$this->default_url = $link;

	} // End get_default_title


	public function set_default_snippet_by_id( $post_id ) {

		$post = get_post( $post_id );

		$snippet = $post->post_excerpt;

		if ( empty( $post->post_excerpt ) ) {

			$snippet = wp_trim_words( $post->post_content, 55, '' );

		} // End if

		$this->default_snippet = $snippet;

	} // End get_default_title


	public function set_default_img_by_post_id( $post_id ) {

		$img_id = get_post_thumbnail_id( $post_id );

		if ( ! empty( $img_id ) ) {

			$this->set_default_img_by_id( $img_id );

		} // End if

	} // End get_default_title


	public function set_default_img_by_id( $img_id ) {

		$this->default_img_src = wp_get_attachment_image_url( $img_id, 'large' );

		$this->default_img_src_small = wp_get_attachment_image_url( $img_id, 'thumbnail' );

		$this->default_img_src_large = wp_get_attachment_image_url( $img_id, 'large' );

	} // End get_default_title



	public function get_default_title() {

		if ( ! empty( $this->fb_title ) ) {

			return $this->fb_title;

		} else {

			return $this->default_title;

		}
	}

	public function get_default_snippet() {

		if ( ! empty( $this->fb_snippet ) ) {

			return $this->fb_snippet;

		} else {

			return $this->default_snippet;

		}
	}

	public function get_default_img_id() {

		if ( ! empty( $this->fb_img_id ) ) {

			return $this->fb_img_id;

		} else {

			return $this->default_img_id;

		}
	}
	
	public function get_default_img_src() {

		if ( ! empty( $this->fb_img_src ) ) {

			return $this->fb_img_src;

		} else {

			return $this->default_img_src;

		}
	}

	public function get_default_img_src_small() {
		return $this->default_img_src_small;
	}

	public function get_default_img_src_large() {
		return $this->default_img_src_large;
	}

	public function get_default_url() {
		return $this->default_url;
	}

	public function get_search_title( $return_default = false ) {

		if ( ! empty( $this->search_title ) ) {

			return $this->search_title;

		} elseif ( $return_default ) {

			return $this->get_default_title();

		} else {

			return '';

		} // End if

	}

	public function get_search_snippet( $return_default = false ) {

		if ( ! empty( $this->search_snippet ) ) {

			return $this->search_snippet;

		} elseif ( $return_default ) {

			return $this->get_default_snippet();

		} else {

			return '';

		} // End if

	}

	public function get_fb_title( $return_default = false ) {

		if ( ! empty( $this->fb_title ) ) {

			return $this->fb_title;

		} elseif ( $return_default ) {

			return $this->get_default_title();

		} else {

			return '';

		} // End if

	}

	public function get_fb_snippet( $return_default = false ) {

		if ( ! empty( $this->fb_snippet ) ) {

			return $this->fb_snippet;

		} elseif ( $return_default ) {

			return $this->get_default_snippet();

		} else {

			return '';

		} // End if

	}

	public function get_fb_url( $return_default = false ) {

		if ( ! empty( $this->fb_url ) ) {

			return $this->fb_url;

		} elseif ( $return_default ) {

			return $this->get_default_url();

		} else {

			return '';

		} // End if
	}

	public function get_fb_img_src( $return_default = false ) {

		if ( ! empty( $this->fb_img_src ) ) {

			return $this->fb_img_src;

		} elseif ( $return_default ) {

			return $this->get_default_img_src();

		} else {

			return '';

		} // End if
	}

	public function get_fb_img_src_small() {
		return $this->fb_img_src_small;
	}

	public function get_fb_img_src_large() {
		return $this->fb_img_src_large;
	}

	public function get_fb_img_id() {
		return $this->fb_img_id;
	}

	public function get_tw_title( $return_default = false ) {

		if ( ! empty( $this->tw_title ) ) {

			return $this->tw_title;

		} elseif ( $return_default ) {

			return $this->get_default_title();

		} else {

			return '';

		} // End if
	}

	public function get_tw_snippet( $return_default = false ) {

		if ( ! empty( $this->tw_snippet ) ) {

			return $this->tw_snippet;

		} elseif ( $return_default ) {

			return $this->get_default_snippet();

		} else {

			return '';

		} // End if

	}

	public function get_tw_url( $return_default = false ) {

		if ( ! empty( $this->tw_url ) ) {

			return $this->tw_url;

		} elseif ( $return_default ) {

			return $this->get_default_url();

		} else {

			return '';

		} // End if
	}

	public function get_tw_img_src( $return_default = false ) {

		if ( ! empty( $this->tw_img_src ) ) {

			return $this->tw_img_src;

		} elseif ( $return_default ) {

			return $this->get_default_img_src();

		} else {

			return '';

		} // End if
	}

	public function get_tw_img_src_small() {
		return $this->tw_img_src_small;
	}

	public function get_tw_img_src_large() {
		return $this->tw_img_src_large;
	}

	public function get_tw_img_id() {
		return $this->tw_img_id;
	}


}
