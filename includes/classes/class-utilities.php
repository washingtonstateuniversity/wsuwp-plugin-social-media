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


	public static function get_plugin_url( $path = '' ) {

		$base_path = dirname( __DIR__ );

		$base_url = plugin_dir_url( $base_path );

		return $base_url . '/' . $path;

	} // End get_plugin_dir_path


	public static function get_plugin_src_url( $path = '' ) {

		$base_url = self::get_plugin_url( 'src' );

		return $base_url . '/' . $path;

	} // End get_plugin_dir_path

}
