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
				'icon_font' => 'facebook',
				'spec' => 2.0,
				'featured' => 1,
			),
			array(
				'name' => 'Google',
				'site' => 'https://plus.google.com',
				'dev_site' => 'http://developers.facebook.com/',
				'icon_font' => 'google',
				'spec' => 2.0,
				'featured' => 1,
			),
			array(
				'name' => 'Twitter',
				'site' => 'https://twitter.com/',
				'dev_site' => 'http://developers.facebook.com/',
				'icon_font' => 'twitter',
				'spec' => 1.0,
				'featured' => 1,
			),
			array(
				'name' => 'Instagram',
				'site' => 'http://instagram.com/',
				'dev_site' => 'http://developers.facebook.com/',
				'icon_font' => 'instagram',
				'spec' => 2.0,
				'featured' => 1,
			),
			array(
				'name' => 'Github',
				'site' => 'http://github.com/',
				'dev_site' => 'http://developers.facebook.com/',
				'icon_font' => 'github',
				'spec' => 2.0,
				'featured' => 1,
			),
			array(
				'name' => 'Foursquare',
				'site' => 'https://foursquare.com/',
				'dev_site' => 'http://developers.facebook.com/',
				'icon_font' => 'foursquare',
				'spec' => 2.0,
				'featured' => 1,
			),
			array(
				'name' => 'LinkedIn',
				'site' => 'http://linkedin.com/',
				'dev_site' => 'http://developers.facebook.com/',
				'icon_font' => 'linkedin',
				'spec' => 2.0,
				'featured' => 1,
			),
			array(
				'name' => 'Microsoft',
				'site' => 'http://www.live.com/',
				'dev_site' => 'http://developers.facebook.com/',
				'icon_font' => 'microsoft',
				'spec' => 2.0,
				'featured' => 1,
			),
			array(
				'name' => 'tumblr',
				'site' => 'https://www.tumblr.com/',
				'dev_site' => 'http://developers.facebook.com/',
				'icon_font' => 'tumblr',
				'spec' => 1.0,
				'featured' => 1,
			),
			array(
				'name' => 'Soundcloud',
				'site' => 'https://soundcloud.com/',
				'dev_site' => 'http://developers.facebook.com/',
				'icon_font' => 'soundcloud',
				'spec' => 2.0,
				'featured' => 1,
			)
		);

		DB::table('oauth_providers')->insert($oauthproviders);
	}

}
