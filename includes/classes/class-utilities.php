<?php namespace WSUWP\Social;


class Utilities {


	public static function get_plugin_dir_path( $path = '' ) {

		$base_path = dirname( dirname( __DIR__ ) );

		return $base_path . '/' . $path;

	} // End get_plugin_dir_path


	public static function get_plugin_component_path( $path = '' ) {

		$base_path = self::get_plugin_dir_path( 'includes/components' );

		return $base_path . '/' . $path;

	} // End get_plugin_dir_path

}
