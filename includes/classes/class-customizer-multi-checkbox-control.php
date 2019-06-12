<?php namespace WSUWP\Social;


class Customizer_Multi_Checkbox_Control extends \WP_Customize_Control {

	/**
	 * The type of customize control being rendered.
	 */
	public $type = 'multi-checkbox';


	public function render_content() {

		if ( empty( $this->choices ) ) {

			return;

		};

		$choices          = $this->choices;
		$selected_choices = explode( ',', $this->value() );

		include Utilities::get_plugin_component_path( 'customizer/customizer-multi-checkbox-form-field.php' );

	}

}
