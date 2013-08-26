<div class="page-header">
	<h1><img src="<?= asset('assets/images/oauth/oauth-1-sm.png') ?>">  Usage <small>OAuth made awesome</small></h1>
</div>

<p>All <?= count($providers) ?> of our OAuth providers can be implemented into your site using the same generalized syntax</p>
<p>The user flow goes a little something like this</p>

<ol>
	<li>User clicks a login link</li>
	<li>They get redirected externally to login</li>
	<li>User accepts permissions for your application</li>
	<li>Redirected back to your site and an access_token is requested</li>
	<li>Redirected internally with an access_token stored in a session</li>
</ol>

<p>You'll notice that on steps 4 &amp; 5 there are two redirects that take place.</p>
<p>Some OAuth providers require you to specify a redirect_url when creating your application. When using Laravel 4 OAuth this redirect_url is something like <code>http://example.com/oauth/provider</code> where <code>provider</code> is the name of an OAuth provider for example<code>http://example.com/oauth/twitter</code></p>
<p>It is at this URL the Laravel OAuth package exchanges the OAuth code for an access token, before doing the final redirect on step 5. In this way you can create dynamic redirects without having to update your application settings</p>

<h2>Examples</h2>

<p>The source code for this website is freely available on github. You may find it useful to check out the <a href="https://github.com/thomaswelton/laravel-oauth-site/blob/master/app/controllers/OauthprovidersController.php" target="_blank">Controller</a> and <a href="https://github.com/thomaswelton/laravel-oauth-site/tree/master/app/views/providers/index.php" target="_blank">View</a> for the <a href="<?= url('demos') ?>" target="_blank">demos</a> page to see implementation examples</p>

<h2>Login Links</h2>

<p>Generating login links is easy, just add this code onto your page, swapping <code>provider</code> for one of our supported OAuth providers</p>
<pre><?= htmlentities('<a href="<?= OAuth::login(\'provider\'); ?>">Login</a>'); ?></pre>

<p>So for example, to login with Instagram you'd use this.</p>
<pre><?= htmlentities('<a href="<?= OAuth::login(\'instagram\'); ?>">Login with Instagram</a>'); ?></pre>

<h2>Retrieving access tokens</h2>

<p>Once the user has authorized your app you can grab their access token from the session. They are saved with session key names like this <code>oauth_token_provider</code>. Following on from the above example To get the users Instagram access token you'd could do this</p>
<pre><?= htmlentities('$token = Session::get(\'oauth_token_instagram\');'); ?></pre>

<code>$token</code> will then contain an instance of <code><a href="https://github.com/Lusitanian/PHPoAuthLib/blob/master/src/OAuth/OAuth2/Token/StdOAuth2Token.php" target="_blank">StdOAuth2Token</a></code> or <code><a href="https://github.com/Lusitanian/PHPoAuthLib/blob/master/src/OAuth/OAuth1/Token/StdOAuth1Token.php" target="_blank">StdOAuth1Token</a></code> depending on whether the provider uses the OAuth1 or OAuth2 spec. Both <code>StdOAuth2Token</code> and <code>StdOAuth1Token</code> implement the same <code><a href="https://github.com/Lusitanian/PHPoAuthLib/blob/master/src/OAuth/Common/Token/TokenInterface.php" target="_blank">TokenInterface</a></code></p>
<p>The <code>TokenInterface</code> contains a few methods you may find useful. But right now we're only interested in getting the access token, which we can do using the method <code>getAccessToken</code></p>

<p>So to wrap things up your final code will look something like this</p>
<pre>
<?= htmlentities('<?php'); ?>

    $token = Session::get('oauth_token_instagram');
    $access_token = $token->getAccessToken();
    echo "Thanks for logging in, your access token is " . $access_token;
<?= htmlentities('?>'); ?>
</pre>

<h2>Dealing with Errors</h2>

<p>Life's a bitch, and not everything works out the way we'd want. There may be an error retrieving a users' access token, or the user may decline the OAuth login.</p>
<p>Either way we've got your back. If things don't work, on step 5, instead of doing a redirect with an access token we'll do a <a href="http://laravel.com/api/class-Illuminate.Http.RedirectResponse.html" target="_blank">redirect with errors</a></p>
<p>Just like when using <a href="http://laravel.com/docs/validation#error-messages-and-views" target="_blank">Laravel validation</a> in your view you'll have access to an <code>$errors</code> variable which will be an instance of a <a href="http://laravel.com/api/class-Illuminate.Support.MessageBag.html" target="_blank">MessageBag</a></p>
<p>Errors are namespaced by provider, something like <code>oauth_error_provider</code> so you could check for Instagram errors using this code</p>

<pre>
<?= htmlentities('<?php'); ?>

    if($errors->has('oauth_error_instagram')){
        echo $errors->first('oauth_error_instagram');
    }
<?= htmlentities('?>'); ?>
</pre>
