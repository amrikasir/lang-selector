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
		'id' => 'Bahasa Indonesia',
		'ja' => '日本語',
		'jv' => 'Basa Jawa',
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
		'ja' => '🇯🇵',
		'jv' => '🇮🇩', // No specific flag for Javanese, using Indonesian flag as a placeholder
	],
];