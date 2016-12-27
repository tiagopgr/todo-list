var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less', './public/assets/css/app.min.css');
    mix.copy('./bower_components/bootstrap/dist/fonts', './public/assets/fonts');
    mix.copy('./bower_components/bootstrap/dist/js', './public/assets/js');
    mix.copy('./bower_components/jquery/dist', './public/assets/js');
});
