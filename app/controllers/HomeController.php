<?php

class HomeController extends BaseController {

	protected $layout = 'layouts.default';

	public function getIndex()
	{
		$providers = array(
			'Facebook' => 'http://facebook.com/',
			'Google' => 'https://plus.google.com',
			'Twitter' => 'https://twitter.com/',
			'Instagram' => 'http://instagram.com/',
			'Github' => 'http://github.com/',
			'Foursquare' => 'https://foursquare.com/',
			'LinkedIn' => 'http://linkedin.com/',
			'Microsoft' => 'http://www.live.com/',
			'tumblr' => 'https://www.tumblr.com/',
			'Soundcloud' => 'https://soundcloud.com/',
		);

		$this->layout->content = View::make('pages.index', array(
			'providers' => $providers
		));
	}

}
