<?php

namespace Kntnt\Custom_Fonts;

class Settings extends Abstract_Settings {

	public function __construct() {
		parent::__construct();
	}

	/**
	 * Returns the settings menu title.
	 */
	protected function menu_title() {
		return __( 'Custom Fonts', 'kntnt-custom-fonts' );
	}

	/**
	 * Returns the settings page title.
	 */
	protected function page_title() {
		return __( "Custom Fonts", 'kntnt-custom-fonts' );
	}

	/**
	 * Returns all fields used on the settings page.
	 */
	protected function fields() {

		$fields['fonts-directory'] = [
			'type' => 'text',
			'label' => __( 'Font directory', 'kntnt-custom-fonts' ),
			'size' => 80,
			'description' => sprintf( __( 'The path relative the WordPress installation directory (%s) where the fonts are stored. See this plugin\'s README-file for information on the required directory structure.', 'kntnt-custom-fonts' ), ABSPATH ),
			'default' => 'wp-content/fonts',
			'validate' => function ( $value ) {
				return count( Fonts::list( Plugin::str_join( ABSPATH, $value ) ) ) > 0;
			},
			'filter-after' => function ( $value ) {
				return rtrim( ltrim( $value, '/' ), '/' );
			},
		];

		$fields['submit'] = [
			'type' => 'submit',
		];

		return $fields;

	}

}
