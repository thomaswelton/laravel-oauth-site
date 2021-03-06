<div class="page-header">
	<h1><img src="<?= asset('assets/images/oauth/oauth-' . intval($provider->spec) . '-sm.png') ?>">  <?= $provider->name ?> <small>OAuth Documentation</small></h1>
</div>

<?= HTML::provider_table($provider) ?>

<h2>Demo</h2>

<?= HTML::provider_demo($provider) ?>


<h2>Creating an App</h2>

<p>Creating new apps on <?= $provider->name ?> can be done through their <a href="<?= $provider->dev_site ?>" target="_blank">developer portal</a>. To create an application you'll need a <?= $provider->name ?> account.</p>
<a href="<?= $provider->create_app ?>"  target="_blank" class="btn btn-success btn-lg">Create App</a>

<hr>

<h2>App Settings</h2>

<p>When creating a new application you'll be prompted a load of information. The important parts are</p>
<ul>
	<li><b>Website URL</b> - The root url of your site <code>http://example.com/</code></li>
	<li><b>OAuth 1.0 Accept Redirect URL</b> - OAuth callback URL <code>http://example.com/oauth/<?= Str::lower($provider->name) ?></code></li>
	<li><b>OAuth 1.0 Cancel Redirect URL</b> - Leave blank, will default to OAuth 1.0 Accept Redirect URL</li>
</ul>

<hr>

<h2>Site Config</h2>

<p>Next we need to add API Key and Secret Key to our <a href="<?= url('docs#configuration') ?>" target="_blank">configuration file</a>.</p>
<p>Find and update the key and secret, then give yourself a pat on the back. You're all finished.</p>
<ul>
	<li><b>key</b> - API Key</li>
	<li><b>secret</b> - Secret Key</li>
</ul>
<pre class="pre-scrollable"><?= View::make('snippets.config.' . Str::lower($provider->name)) ?></pre>
