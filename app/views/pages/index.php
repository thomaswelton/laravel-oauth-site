<h2>Overview</h2>

<p class="lead">Laravel OAuth is built upon the amazing <a href="https://github.com/Lusitanian/PHPoAuthLib" target="_blank">PHPoAuthLib</a> by <a href="https://github.com/Lusitanian" target="_blank">Lusitanian</a> and integrates almost all of the OAuth providers you'd ever need.</p>

<ul class="inline-block-list">
	<?php foreach($featured as $provider): ?>
		<li class="panel panel-default provider-panel">
			<a href="<?= url('docs/'. Str::lower($provider->name)) ?>">
				<div class="panel-body icon-<?= $provider->icon_font ?>"></div>
				<div class="panel-footer"><?= $provider->name ?></div>
			</a>
		</li>
	<?php endforeach ?>
</ul>

<a href="<?= URL::to('docs/providers') ?>" class="">Full list of supported OAuth providers</a>

<hr>

<h2>Example</h2>

<p>It's super simple to get an access token from one of our supported OAuth providers. Check this.</p>
<p>Want a Facebook token? We've got you covered.<p>
<p>This link authenticates the user via Facebook and redirects them back to the homepage of your site</p>

<pre><?= htmlentities('<a href="<?= OAuth::authorize(\'facebook\'); ?>">Grant Authorization</a>'); ?></pre>

<br>
<p>Want to redirect the user elsewhere after authorization?</p>
<p>No sweat! Authorization calls can be chained to pass additional options <code>OAuth::authorize('facebook')->redirect('/some/page')</code></p>

<br>
<p>Want to request additional permissions <i>(scope)</i> for some authorization calls?</p>
<p>Then you're gonna love this, just request additional scope inline <code>OAuth::authorize('facebook')->withScope('user_birthday')</code></p>
<p>You can also define default permissions in your config file</p>

<br>
<p>After successful authentication the users' access token is stored in a session, grab it like this</p>
<pre>OAuth::token('facebook')</pre>

<hr>
<?= View::make('snippets.docs.installation') ?>
<hr>
<?= View::make('snippets.docs.setup') ?>
<hr>
<?= View::make('snippets.docs.configuration') ?>
