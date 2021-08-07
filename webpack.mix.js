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
    .options({
        postCss: [
            require('autoprefixer')({
                browsers: [
                    'defaults',
                    'not ie < 11',
                    'last 2 versions',
                    '> 1%',
                    'iOS 7',
                    'last 3 iOS versions'
                ]
            })
        ]
    })
    .sourceMaps(true, 'source-map');
