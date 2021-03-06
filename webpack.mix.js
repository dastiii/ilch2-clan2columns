let mix = require('laravel-mix');

mix.setPublicPath('./');
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
mix.sass('src/scss/app.scss', 'css/');
mix.js('src/js/app.js', 'js/');

if (mix.inProduction()) {
    mix.version();
}
