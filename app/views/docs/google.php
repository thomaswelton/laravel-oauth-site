<div class="page-header">
	<h1><img src="<?= asset('assets/images/oauth/oauth-' . intval($provider->spec) . '-sm.png') ?>">  <?= $provider->name ?> <small>OAuth Documentation</small></h1>
</div>

<?= HTML::provider_table($provider) ?>

<h2>Demo</h2>

<?= HTML::provider_demo($provider) ?>


<h2>Creating an App</h2>

<p>Creating new apps on Google can be done through their <a href="<?= $provider->dev_site ?>" target="_blank">developer portal</a>. To register as a developer you'll need an active Google account.</p>
<p>Google <a href="https://developers.google.com/+/quickstart/php" target="_blank">quick start guide for PHP</a></p>
<a href="<?= $provider->create_app ?>"  target="_blank" class="btn btn-success btn-lg">Create App</a>

<hr>

<h2>App Settings</h2>

<p>When creating a new application you'll be prompted for a few details. When asked for "Your site or hostname" click for more options to enter a custom callback</p>
<ul>
	<li><b>Product Name</b> - The name of you application</li>
	<li><b>Home Page URL</b> - The root url of your site <code>http://example.com/</code></li>
	<li><b>Application Type</b> - Choose web application</li>
	<li><b>Authorized Redirect URIs</b> - OAuth callback URL <code>http://example.com/oauth/google</code></li>
</ul>

<img src="<?= asset('assets/images/docs/' . Str::lower($provider->name) . '/dashboard.jpg') ?>" class="img-responsive img-thumbnail">

<hr>

<h2>Site Config</h2>

<p>Next we need to add Client ID and Client secret to our <a href="<?= url('docs#configuration') ?>" target="_blank">configuration file</a>.</p>
<p>Find and update the key and secret, then give yourself a pat on the back. You're all finished.</p>
<ul>
	<li><b>key</b> - Client ID</li>
	<li><b>secret</b> - Client secret</li>
</ul>
<pre class="pre-scrollable"><?= View::make('snippets.config.google') ?></pre>
