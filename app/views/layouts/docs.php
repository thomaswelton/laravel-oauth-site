<div class="row">
	<div class="col-sm-3">
		<ul class="nav nav-pills nav-stacked">
			<li class="<? if(Request::is('docs')) echo 'active'; ?>"><a href="<?= url('docs') ?>">Get Started</a></li>
			<li class="<? if(Request::is('docs/providers')) echo 'active'; ?>"><a href="<?= url('docs/providers') ?>">Providers</a></li>
			<li class="<? if(Request::is('docs/usage')) echo 'active'; ?>"><a href="<?= url('docs/usage') ?>">Usage</a></li>
			<li class="<? if(Request::is('docs/facebook')) echo 'active'; ?>"><a href="<?= url('docs/facebook') ?>">Facebook</a></li>
		</ul>
	</div>
	<div class="col-sm-9">
		<?= $content ?>
	</div>
</div>
