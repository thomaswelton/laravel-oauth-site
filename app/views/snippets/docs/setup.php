<h2 id="setup">Setup</h2>

<p>Your Laravel config will need a little editing to load the OAuth Facade and service provider, so lets do that now</p>
<p>Open the file <code>app/config/app.php</code> and edit the <code>providers</code> and <code>aliases</code> arrays so they look a little something like this...</p>

<p>In the <code>providers</code> array add this <code>'Thomaswelton\LaravelOauth\LaravelOauthServiceProvider',</code></p>
<p>And in the <code>aliases</code> array add this <code>'OAuth' => 'Thomaswelton\LaravelOauth\Facades\OAuth',</code></p>

<p>High five homeboy! You're all setup, new lets get this thing configured</p>
