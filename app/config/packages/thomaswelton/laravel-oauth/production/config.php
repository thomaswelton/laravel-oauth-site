<?php

$providers = array('facebook', 'twitter', 'google', 'github', 'instagram', 'microsoft', 'linkedin', 'foursquare', 'soundcloud', 'tumblr');

$herokuConfig = array();

foreach ($providers as $provider) {
	$herokuConfig[strtolower($provider)] = array(
		'key' => getenv(strtoupper($provider) . '_KEY'),
		'secret' => getenv(strtoupper($provider) . '_SECRET'),
		'scope' => ''
	);
}

return array_merge($herokuConfig, array(

	/*
	|--------------------------------------------------------------------------
	| Routing array
	|--------------------------------------------------------------------------
	|
	| Already using the oauth route in your app?
	| No worries! Set a different one here
	|
	*/

	'route' => 'oauth',


	/*
	|--------------------------------------------------------------------------
	| FitBit
	|--------------------------------------------------------------------------
	|
	| Create a new app - https://dev.fitbit.com/apps/new
	|
	| Key - FitBit calls this the Consumer key
	| Secret - FitBit calls this the Consumer Secret
	| Scope - No scope
	|
	*/
	'fitbit' => array(
		'key' => '',
		'secret' => '',
		'scope' => ''
	),

	/*
	|--------------------------------------------------------------------------
	| Bitly
	|--------------------------------------------------------------------------
	|
	| Create a new app - https://bitly.com/a/create_oauth_app
	|
	| Key - BitLy calls this the Client ID
	| Secret - BitLy calls this the Client Secret
	| Scope - No scope
	|
	*/
	'bitly' => array(
		'key' => '',
		'secret' => '',
		'scope' => ''
	),


	/*
	|--------------------------------------------------------------------------
	| Box
	|--------------------------------------------------------------------------
	|
	| Create a new app - https://app.box.com/developers/services/edit/
	|
	| Key - Box calls this the Client ID
	| Secret - Box calls this the Client Secret
	| Scope - No scope
	|
	*/
	'box' => array(
		'key' => '',
		'secret' => '',
		'scope' => ''
	),
));
