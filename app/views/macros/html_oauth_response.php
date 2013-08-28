<div class="bs-callout bs-callout-info">
	<h4><?= Str::studly($provider->name) ?> OAuth Response</h4>
	<? $token = OAuth::token(Str::lower($provider->name)) ?>
	<table class="table table-bordered">
		<tr>
			<td width="100"><b>Token</b></td>
			<td><span><?= $token->getAccessToken() ?></span></td>
		</tr>
		<tr>
			<td><b>Expires On</b></td>
			<td><?= Carbon::createFromTimeStamp($token->getEndOfLife())->toDayDateTimeString(); ?></td>
		</tr>
	</table>
</div>
