<div class="page-header">
	<h1><img src="<?= asset('assets/images/oauth/oauth-' . intval($provider->spec) . '-sm.png') ?>">  <?= $provider->name ?> <small>OAuth Documentation</small></h1>
</div>

<?= HTML::provider_table($provider) ?>

<h2>Demo</h2>

<?= HTML::provider_demo($provider) ?>


<h2>Creating an App</h2>

<p>Creating new apps on Twitter can be done through their <a href="<?= $provider->dev_site ?>" target="_blank">developer portal</a>. To register as a developer you'll need an active Twitter account.</p>
<a href="<?= $provider->create_app ?>"  target="_blank" class="btn btn-success btn-lg">Create App</a>

<hr>

<h2>App Settings</h2>

<p>When creating a new application you'll be prompted for a few details</p>
<ul>
	<li><b>Name</b> - The name of you application</li>
	<li><b>Description</b> - App description. Between 10 and 200 characters max.</li>
	<li><b>Website</b> - The root url of your site <code>http://example.com/</code></li>
	<li><b>Callback URL</b> - OAuth callback URL <code>http://example.com/oauth/<?= Str::lower($provider->name) ?></code></li>
</ul>

<p>Once you've created your app we have to make a few more edits on the settings tab</p>
<p>Check the box marked "Allow this application to be used to Sign in with Twitter"</p>
<p>Also from here you can set your application access level can be one of</p>
<ul>
	<li>Read only</li>
	<li>Read &amp; Write</li>
	<li>Read, Write &amp; Access direct messages</li>
</ul>

<img src="<?= asset('assets/images/docs/twitter/dashboard.jpg') ?>" class="img-responsive img-thumbnail">

<hr>

<h2>Site Config</h2>

<p>Next we need to add Consumer key and Consumer secret to our <a href="<?= url('docs#configuration') ?>" target="_blank">configuration file</a>.</p>
<p>Find and update the key and secret, then give yourself a pat on the back. You're all finished.</p>
<ul>
	<li><b>key</b> - Consumer key</li>
	<li><b>secret</b> - Consumer secret</li>
</ul>
<pre class="pre-scrollable"><?= View::make('snippets.config.' . Str::lower($provider->name)) ?></pre>
