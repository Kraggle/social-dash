const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.sass('public/css/source/white-dashboard.scss', 'public/css')
    .sass('public/css/source/main.scss', 'public/css')
    .sourceMaps(true, 'source-map');
