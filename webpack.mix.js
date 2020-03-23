const mix = require('laravel-mix');
const path = require('path');

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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/service-provider.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .webpackConfig({
        resolve: {
            alias: {
                // '@Store': path.resolve(__dirname, 'resources/js/store'),
                '@Routes': path.resolve(__dirname,'resources/js/routes'),
                '@Service': path.resolve(__dirname, 'resources/js/services'),
                '@Component': path.resolve(__dirname, 'resources/js/components')
            }
        }

    });
