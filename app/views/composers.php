<?php

View::composer('snippets.config.index', function($view)
{
    $view->with('providers', OAuthProvider::getAll(true));
});

View::composer('layouts.docs', function($view)
{
    $view->with('providers', OAuthProvider::getAll(true));
});
