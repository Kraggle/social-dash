const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sourceMaps(true, 'source-map')
    .webpackConfig({ devtool: 'source-map' })
    .options({
        postCss: [
            require('autoprefixer')
        ]
    })
    .sass('resources/scss/app.scss', 'public/css')
    .sass('resources/scss/plugins/bootstrap/bootstrap.scss', 'public/css')
    // .sass('resources/scss/plugins/font-awesome/font-awesome.scss', 'public/css')
