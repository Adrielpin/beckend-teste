const { mix } = require('laravel-mix');

 mix.scripts([
 	'node_modules/jquery/dist/jquery.js',
 	'node_modules/materialize-css/dist/js/materialize.js',
 	'node_modules/chart.js/dist/Chart.js',
 	'resources/assets/js/javascript.js',
 	],'public/assets/javascript.js');

 mix.styles([
 	'node_modules/materialize-css/dist/css/materialize.css',
 	'resources/assets/css/style.css',
 	],'public/assets/styles.css');

 mix.copy('resources/assets/img', 'public/assets/img');
 mix.copy('node_modules/materialize-css/dist/fonts','public/fonts');