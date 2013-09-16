<div class="page-header">
	<h1>OAuth Demos</h1>
</div>

<?php if(isset($provider)): ?>
	<?php if($errors->has('oauth_error_' . Str::lower($provider->name))): ?>
		<?= HTML::alert($errors->first('oauth_error_' . Str::lower($provider->name)), 'error') ?>
	<?php elseif(OAuth::hasToken(Str::lower($provider->name))): ?>
		<?= HTML::oauth_response($provider) ?>
	<?php endif; ?>

<?php endif; ?>

<ul class="inline-block-list">
	<?php foreach($providers as $provider): $redirect = Request::path() . '?provider=' . $provider->id; ?>
		<li class="panel panel-default provider-panel">
			<a href="<?= OAuth::authorize(Str::lower($provider->name))->redirect($redirect) ?>">
				<div class="panel-body <?= (strlen($provider->icon_font) > 0) ? 'icon-' . $provider->icon_font : 'icon-oauth' ?>"></div>
				<div class="panel-footer"><?= $provider->name ?></div>
			</a>
		</li>
	<?php endforeach ?>
</ul>
