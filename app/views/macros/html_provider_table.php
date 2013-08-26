<table class="table table-bordered">
	<tr>
		<td>Provider Name</td>
		<td><?= Str::lower($provider->name) ?></td>
	</tr>
	<tr>
		<td>OAuth Spec</td>
		<td>
			<b><?= $provider->spec ?></b>
		</td>
	</tr>
	<tr>
		<td>Website</td>
		<td><a href="<?= $provider->site ?>" target="_blank"><?= $provider->site ?></a></td>
	</tr>
	<tr>
		<td>Developer Portal</td>
		<td><a href="<?= $provider->dev_site ?>" target="_blank"><?= $provider->dev_site ?></a></td>
	</tr>
</table>
