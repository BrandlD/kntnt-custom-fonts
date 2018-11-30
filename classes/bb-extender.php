<?php

namespace Kntnt\Custom_Fonts;

class BB_Extender {

	public function run() {
		add_filter( 'fl_theme_system_fonts', [ $this, 'custom_fonts' ] );
		add_filter( 'fl_builder_font_families_system', [ $this, 'custom_fonts' ] );
	}

	public function custom_fonts( $fonts ) {
		foreach ( Fonts::info() as $name => $weights ) {
			$fonts[ $name ]['weights'] = array_keys( $weights );
		}
		return $fonts;
	}

}
