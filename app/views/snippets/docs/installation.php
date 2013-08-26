<h2 id="installation">Installation</h2>

<p>Installtion into Laravel couldn't be easier due to the awesome package manager <a href="http://getcomposer.org/" target="blank">Composer</a><p>
<p>Simply add this package as a dependency into your <code>composer.json</code> file, it should look something like this</p>
<pre class="pre-scrollable">
{
	"name": "thomaswelton/laravel",
	"require": {
		"laravel/framework": "4.0.*",
		"thomaswelton/laravel-oauth": "dev-master"
	},
	"config": {
		"preferred-install": "dist"
	},
	"minimum-stability": "dev"
}
</pre>

<p>Once added you your composer file, run <code>composer update</code> and the files will be downloaded into you application<p>
