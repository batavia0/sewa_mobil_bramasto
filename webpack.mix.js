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

 const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

 mix.js('resources/js/app.js', 'public/js', 'public/css')
    //  .sass('resources/sass/app.scss', 'public/css')
    mix.browserSync('127.0.0.1:8000');