<?php

View::composer('snippets.config.index', function($view)
{
    $view->with('providers', OAuthProvider::getAll(true));
});
