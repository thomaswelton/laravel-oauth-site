<?php

class DocsController extends BaseController {

	protected $layout = 'layouts.default';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$content = View::make('docs.index', array(

		));

		$this->layout->content = View::make('layouts.docs')->with('content', $content);
	}

	public function usage(){
		$providers = OAuthProvider::all();

		$content = View::make('docs.usage', array(
			'providers' => $providers
		));

		$this->layout->content = View::make('layouts.docs')->with('content', $content);
	}

	public function providers(){
		$providers = OAuthProvider::all();

		$content = View::make('docs.providers', array(
			'providers' => $providers
		));

		$this->layout->content = View::make('layouts.docs')->with('content', $content);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $name
	 * @return Response
	 */
	public function show($name)
	{
		try{
			$provider = OAuthProvider::where('name', '=', Str::lower($name))->firstOrFail();
		}catch(Exception $e){
			return Redirect::to('/');
		}

		$content = View::make('docs.' . Str::lower($name), array(
			'provider' => $provider
		));

		$this->layout->content = View::make('layouts.docs')->with('content', $content);
	}

}
