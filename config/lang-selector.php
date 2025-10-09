<?php

return [
	/*
	|--------------------------------------------------------------------------
	| Supported Languages
	|--------------------------------------------------------------------------
	|
	| This array defines the languages supported by the application.
	| The keys are the language codes, and the values are the language names.
	|
	*/
	'supported_languages' => [
		'en' => 'English',
		'id' => 'Bahasa Indonesia'
	],

	/*
	|--------------------------------------------------------------------------
	| Language Switch
	|--------------------------------------------------------------------------
	| Only 2 languages are supported for the switch button.
	| Set the two languages you want to switch between.
	| The keys should match the supported languages above.
	|
	*/
	'language_switch' => [
		'first' => 'en',
		'second' => 'id',
	],
	

	/*
	|--------------------------------------------------------------------------
	| Language Icons
	|--------------------------------------------------------------------------
	| This array maps language codes to their respective icons (e.g., flags).
	| The keys are the language codes, and the values are the icons.
	|
	*/
	'icons' => [
		'en' => '🇬🇧',
		'id' => '🇮🇩',
	],

	/*
	|--------------------------------------------------------------------------
	| Mode of Language Selector
	|--------------------------------------------------------------------------
	| This setting determines how the language selector is displayed.
	| Options are 'dropdown' for a dropdown menu or 'buttons' for individual buttons.
	|
	| available options: 'dropdown', 'buttons'
	*/
	'mode' => 'dropdown',
];