<?php

HTML::macro('alert', function($text, $type = null) {
    switch ($type) {
        case 'warning':
            $class = '';
            break;

        case 'error':
            $class = 'alert-danger';
            break;

        default:
            $class = 'alert-'.$type;
            break;
    }

    return View::make('macros/html_alert', array(
        'class' => $class,
        'text' => $text
    ));
});

HTML::macro('provider_table', function($provider) {
    return View::make('macros/html_provider_table', array(
        'provider' => $provider
    ));
});

HTML::macro('provider_demo', function($provider) {
    return View::make('macros/html_provider_demo', array(
        'provider' => $provider
    ));
});

HTML::macro('oauth_response', function($provider) {
    return View::make('macros/html_oauth_response', array(
        'provider' => $provider
    ));
});
