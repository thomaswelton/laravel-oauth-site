<?php

class OAuthProvider extends Eloquent {
	protected $guarded = array();

	public $timestamps = false;
	protected $table = 'oauth_providers';

	public static $rules = array();

	public static function getFeatured(){
		return OAuthProvider::where('featured', '=', 1)->remember(60)->get();
	}

	public static function getAll($cached){
		if($cached){
			return OAuthProvider::remember(60)->get();
		}else{
			return OAuthProvider::get();
		}
	}
}
