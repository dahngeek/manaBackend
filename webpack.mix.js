let mix = require('laravel-mix');

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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .js('public/assets/decoy/index.js', 'public/assets/decoy/index.min.js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

mix.js('public/assets/decoy/principal.coffee', 'public/assets/decoy/principal.min.js');
