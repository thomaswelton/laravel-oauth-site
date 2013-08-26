<div class="page-header">
	<h1>Supported Providers</h1>
</div>

<?php foreach ($providers as $provider): ?>
	<h3><?= $provider->name ?> <small><a href="<?= url('docs/' . Str::lower($provider->name)) ?>">documentation</a></small></h3>
	<?= HTML::provider_table($provider) ?>
	<hr>
<?php endforeach; ?>
