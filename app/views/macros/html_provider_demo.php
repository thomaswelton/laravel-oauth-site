<?php if($errors->has('oauth_error_' . Str::lower($provider->name))): ?>
	<?= HTML::alert($errors->first('oauth_error_' . Str::lower($provider->name)), 'error') ?>
<?php elseif(Session::get('oauth_token_' . Str::lower($provider->name))): ?>
	<?= HTML::oauth_response($provider) ?>
<?php else: ?>
	<a href="<?= OAuth::login(Str::lower($provider->name), Request::path()) ?>" class="btn btn-sm btn-primary">Login with <?= $provider->name ?></a>
<?php endif; ?>
