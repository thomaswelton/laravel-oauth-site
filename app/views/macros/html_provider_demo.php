<?php if($errors->has('oauth_error_' . Str::lower($provider->name))): ?>
	<?= HTML::alert($errors->first('oauth_error_' . Str::lower($provider->name)), 'error') ?>
<?php elseif(OAuth::hasToken(Str::lower($provider->name))): ?>
	<?= HTML::oauth_response($provider) ?>
<?php else: ?>
	<a href="<?= OAuth::authorize(Str::lower($provider->name))->redirect(Request::path()) ?>" class="btn btn-sm btn-primary">Login with <?= $provider->name ?></a>
<?php endif; ?>
