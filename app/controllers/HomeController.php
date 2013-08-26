<?php

class HomeController extends BaseController {

	protected $layout = 'layouts.default';

	public function getIndex()
	{
		$featured =  OAuthProvider::getFeatured();

		$this->layout->content = View::make('pages.index', array(
			'featured' => $featured
		));
	}

}
