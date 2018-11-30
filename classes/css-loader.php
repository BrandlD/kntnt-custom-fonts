<?php

namespace Kntnt\Custom_Fonts;

class CSS_Loader {

	public function run() {
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_assets' ] );
	}

	public function enqueue_assets() {
		$url = Fonts::css_url();
		wp_enqueue_style( Plugin::ns() . 'css', $url );
		Plugin::log( "Enqueued %s", $url );
	}

}
