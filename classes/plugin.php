<?php

namespace Kntnt\Custom_Fonts;

class Plugin extends Abstract_Plugin {

	public function __construct() {
		parent::__construct();
		register_activation_hook( Plugin::plugin_dir( self::ns() . '.php' ), [ self::class, 'activation' ] );
		register_deactivation_hook( Plugin::plugin_dir( self::ns() . '.php' ), [ self::class, 'deactivation' ] );
	}

	public function activation() {
		Fonts::create_css();
	}

	public function deactivation() {
		Fonts::remove_css();
	}

	public function classes_to_load() {

		return [
			'admin' => [
				'setup_theme' => [
				],
				'init' => [
					'Fonts',
					'Settings',
					'BB_Extender',
					'CSS_Loader',
				],
			],
			'public' => [
				'init' => [
					'CSS_Loader',
				],
			],
		];

	}

}
