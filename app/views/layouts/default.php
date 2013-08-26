<!DOCTYPE html>
<!--[if IE 7]>    <html class="ie7 oldie" > <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie" > <![endif]-->
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Laravel OAuth</title>

    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
    <![endif]-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?= asset('/bower_components/bootstrap/dist/css/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset('assets/stylesheets/compiled/template.css') ?>">
</head>
<body>
    <div id="container" class="container" role="main">
        <?= $content ?>
        <div id="container_footer"></div>
    </div>

    <footer>
    	<div class="container">
    		<p>Built with the best of intentions by <a href="https://github.com/thomaswelton" target="_blank">Thomas Welton</a></p>
    	</div>
    </footer>

    <script src="/bower_components/requirejs/require.js"></script>
    <?php if ('production' != App::environment()): ?>
        <script>
            require.config({
                urlArgs: "bust=" + (new Date()).getTime()
            });
        </script>
    <?php endif ?>

    <script type="text/javascript">
        <?= File::get(public_path().'/assets/scripts/compiled/config.js'); ?>
        requirejs.config({
            baseUrl: './'
        });

        require(["twbs"]);
    </script>
</body>
</html>
