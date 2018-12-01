const mix = require('laravel-mix');
mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css','resources/css/bootstrap.min.css');

mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js','resources/js/bootstrap.min.js');
mix.copy('node_modules/jquery/dist/jquery.min.js','resources/js/jquery.min.js');

mix.scripts([

	'resources/js/jqueryslim.js',
	'resources/js/popper.min.js',
	'resources/js/bootstrap.min.js',
	'resources/js/holder.min.js',

	], 'public/js/all.js');

mix.styles([
	'resources/css/main.css',
	'resources/css/bootstrap.min.css',
	
	],'public/css/all.css');