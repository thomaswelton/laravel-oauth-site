<h2 id="configuration">Configuration</h2>

<p>Copy the configuration file into your project by running</p>
<pre>php artisan config:publish thomaswelton/laravel-oauth</pre>

<p>The config file will be copied to this location <code>app/config/packages/thomaswelton/laravel-oauth</code></p>
<p>The config file is <b>huge</b>, but it's mostly comments. It contains config options for all the OAuth provider we support. You only need to edit the config for the OAuth providers you plan on supporting in you application</p>

<pre class="pre-scrollable"><?= View::make('snippets.config.index') ?></pre>
