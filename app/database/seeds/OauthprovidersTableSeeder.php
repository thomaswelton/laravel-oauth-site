<?php

class OauthprovidersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('oauth_providers')->truncate();

		$oauthproviders = array(
			array(
				'name' => 'Facebook',
				'site' => 'http://facebook.com/',
				'dev_site' => 'http://developers.facebook.com/',
				'create_app' => 'https://developers.facebook.com/apps',
				'icon_font' => 'facebook',
				'spec' => 2.0,
				'featured' => 1,
			),
			array(
				'name' => 'Twitter',
				'site' => 'https://twitter.com/',
				'dev_site' => 'https://dev.twitter.com/',
				'create_app' => 'https://dev.twitter.com/apps/new',
				'icon_font' => 'twitter',
				'spec' => 1.0,
				'featured' => 1,
			),
			array(
				'name' => 'Google',
				'site' => 'https://plus.google.com',
				'dev_site' => 'https://developers.google.com',
				'create_app' => 'https://code.google.com/apis/console',
				'icon_font' => 'google',
				'spec' => 2.0,
				'featured' => 1,
			),
			array(
				'name' => 'Github',
				'site' => 'http://github.com/',
				'dev_site' => 'http://developer.github.com/',
				'create_app' => 'https://github.com/settings/applications/new',
				'icon_font' => 'github',
				'spec' => 2.0,
				'featured' => 1,
			),
			array(
				'name' => 'Instagram',
				'site' => 'http://instagram.com/',
				'dev_site' => 'http://instagram.com/developer',
				'create_app' => 'http://instagram.com/developer/clients/register/',
				'icon_font' => 'instagram',
				'spec' => 2.0,
				'featured' => 1,
			),
			array(
				'name' => 'Microsoft',
				'site' => 'http://www.live.com/',
				'dev_site' => 'http://msdn.microsoft.com/en-us/live/',
				'create_app' => 'https://account.live.com/developers/applications/create',
				'icon_font' => 'microsoft',
				'spec' => 2.0,
				'featured' => 1,
			),
			array(
				'name' => 'LinkedIn',
				'site' => 'http://linkedin.com/',
				'dev_site' => 'https://www.linkedin.com/secure/developer',
				'create_app' => 'https://www.linkedin.com/secure/developer?newapp=',
				'icon_font' => 'linkedin',
				'spec' => 2.0,
				'featured' => 1,
			),
			array(
				'name' => 'Foursquare',
				'site' => 'https://foursquare.com/',
				'dev_site' => 'https://developer.foursquare.com/',
				'create_app' => 'https://foursquare.com/developers/register',
				'icon_font' => 'foursquare',
				'spec' => 2.0,
				'featured' => 1,
			),
			array(
				'name' => 'Soundcloud',
				'site' => 'https://soundcloud.com/',
				'dev_site' => 'http://developers.soundcloud.com/',
				'create_app' => 'http://soundcloud.com/you/apps/new',
				'icon_font' => 'soundcloud',
				'spec' => 2.0,
				'featured' => 1,
			),
			array(
				'name' => 'tumblr',
				'site' => 'https://www.tumblr.com/',
				'dev_site' => 'http://www.tumblr.com/developers',
				'create_app' => 'http://www.tumblr.com/oauth/register',
				'icon_font' => 'tumblr',
				'spec' => 1.0,
				'featured' => 1,
			),
		);

		DB::table('oauth_providers')->insert($oauthproviders);
	}

}
