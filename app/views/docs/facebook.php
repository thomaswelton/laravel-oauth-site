<div class="page-header">
	<h1><img src="<?= asset('assets/images/oauth/oauth-' . intval($provider->spec) . '-sm.png') ?>">  <?= $provider->name ?> <small>OAuth Documentation</small></h1>
</div>

<?= HTML::provider_table($provider) ?>

<h2>Demo</h2>

<?= HTML::provider_demo($provider) ?>


<h2>Creating an App</h2>

<p>Creating new apps on Facebook can be done through their <a href="<?= $provider->dev_site ?>" target="_blank">developer portal</a>. To register as a developer you'll need an active and <a href="http://www.facebook.com/help/398085743567023/" target="_blank">verified</a> Facebook account.</p>
<a href="<?= $provider->create_app ?>"  target="_blank" class="btn btn-success btn-lg">Create App</a>

<hr>

<h2>App Settings</h2>

<p>When creating a new application you'll be prompted for a few details</p>
<ul>
	<li><b>App Name</b> - The name of you application as displayed in OAuth dialog boxes</li>
	<li><b>Namespace</b> - Only required if you are developing a <a href="http://developers.facebook.com/docs/appsonfacebook/tutorial/" target="_blank">Facebook canvas app</a></li>
</ul>

<p>Once you've created your app we have to make a few more edits to the basic settings</p>

<ul>
	<li><b>App Domains</b> - Your application domain <code>example.com</code></li>
	<li><b>Sandbox Mode</b> - Enabled by default. When enabled only the listed developers of your app will be able to login. Make sure to disable this before moving to production</li>
</ul>

<p>Then under the section "Select how your app integrates with Facebook" we can enable website login. Enter your Site URL as the base url of your application <code>http://example.com/</code></p>

<img src="<?= asset('assets/images/docs/facebook/dashboard.jpg') ?>" class="img-responsive img-thumbnail">

<hr>

<h2>Site Config</h2>

<p>Next we need to add App ID and App Secret to our <a href="<?= url('docs#configuration') ?>" target="_blank">configuration file</a>.</p>
<p>Find and update the key and secret, then give yourself a pat on the back. You're all finished.</p>
<ul>
	<li><b>key</b> - Facebook App ID</li>
	<li><b>secret</b> - Facebook App Secret</li>
</ul>
<pre class="pre-scrollable"><?= View::make('snippets.config.' . Str::lower($provider->name)) ?></pre>
