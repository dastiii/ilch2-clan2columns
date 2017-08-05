let mix = require('laravel-mix');

mix.options({
    processCssUrls: false
});

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

mix.copyDirectory('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'fonts/bootstrap');
// mix.copy('node_modules/font-awesome/fonts/*', 'fonts/');
mix.sass('src/scss/app.scss', 'css/');
mix.js('src/js/app.js', 'js/');
