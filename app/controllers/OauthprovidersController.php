<?php

class OauthprovidersController extends BaseController {

	protected $layout = 'layouts.default';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = array(
			'providers' => OAuthProvider::all()
		);

		// I am appending a $_GET variable to the OAuthRedirect URLs to contain the OAuth
		// provier name, is added only for the purposes of this demo page it is not a required
		// $_GET variable for auth and may not be required in your implementation
		$providerId = Input::get('provider');
		if($providerId){
			$data['provider'] = OAuthProvider::find($providerId);
		}

		$this->layout->content = View::make('providers.index', $data);
	}

}
