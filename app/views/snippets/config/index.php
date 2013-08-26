/*
|--------------------------------------------------------------------------
| Routing array
|--------------------------------------------------------------------------
|
| Already using the oauth route in your app?
| No worries! Set a different one here
|
*/

'route' => 'oauth',

<?php foreach($providers as $provider) echo View::make('snippets.config.' . Str::lower($provider->name)) . "\n\n"; ?>
