<?php

namespace Kntnt\Custom_Fonts;

class Fonts {

	public function run() {
		add_action( Plugin::ns() . '/settings/saved', [ self::class, 'create_css' ] );
	}

	static public function info() {
		return Plugin::option( 'fonts', [ self::class, 'load_fonts' ], true );
	}

	static public function load_fonts() {
		$fonts = self::list( Plugin::str_join( ABSPATH, Plugin::option( 'fonts-directory' ) ) );
		Plugin::log( "%s", $fonts );
		return $fonts;
	}

	static public function list( $dir ) {
		$list = [];
		foreach ( glob( "$dir/*/*/*/*.woff{,2}", GLOB_BRACE ) as $path ) {
			$path = substr( $path, strlen( ABSPATH ) - 1 );
			preg_match( '/([^\/]*)\/([^\/]*)\/([^\/]*)\/[^\/]*\.(woff2?)/i', $path, $matches );
			$list[ $matches[1] ][ $matches[2] ][ $matches[3] ][ $matches[4] ] = site_url( esc_url_raw( $path ) );
		}
		return $list;
	}

	static public function create_css() {

		$fonts = self::load_fonts();

		// Create CSS
		ob_start();
		foreach ( $fonts as $font_family => $weights ) {
			foreach ( $weights as $font_weight => $styles ) {
				foreach ( $styles as $font_style => $font_urls ) {
					include Plugin::template( 'font-face.php' );
				}
			}
		}
		$css = ob_get_clean();

		// Write CSS to file
		$css_file = self::css_file();
		$status = file_put_contents( $css_file, $css );
		if ( false === $status ) {
			Plugin::log( "Couldn't create %s", $css_file );
		}
		else {
			Plugin::log( "Successfylly created %s", $css_file );
		}

	}

	static public function remove_css() {
		$css_file = self::css_file();
		$status = unlink( $css_file );
		if ( false === $status ) {
			Plugin::log( "Couldn't remove %s", $css_file );
		}
		else {
			Plugin::log( "Successfylly removed %s", $css_file );
		}
	}

	static public function css_file() {
		return wp_upload_dir()['basedir'] . '/' . Plugin::ns() . '.css';
	}

	static public function css_url() {
		return wp_upload_dir()['baseurl'] . '/' . Plugin::ns() . '.css';
	}

}
