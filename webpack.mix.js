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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/main.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .sass('resources/css/sass/amber.scss', 'public/css/theme')
    .sass('resources/css/sass/blue.scss', 'public/css/theme')
    .sass('resources/css/sass/blue-grey.scss', 'public/css/theme')
    .sass('resources/css/sass/brown.scss', 'public/css/theme')
    .sass('resources/css/sass/cyan.scss', 'public/css/theme')
    .sass('resources/css/sass/deep-orange.scss', 'public/css/theme')
    .sass('resources/css/sass/deep-purple.scss', 'public/css/theme')
    .sass('resources/css/sass/green.scss', 'public/css/theme')
    .sass('resources/css/sass/indigo.scss', 'public/css/theme')
    .sass('resources/css/sass/light-blue.scss', 'public/css/theme')
    .sass('resources/css/sass/light-green.scss', 'public/css/theme')
    .sass('resources/css/sass/lime.scss', 'public/css/theme')
    .sass('resources/css/sass/orange.scss', 'public/css/theme')
    .sass('resources/css/sass/pink.scss', 'public/css/theme')
    .sass('resources/css/sass/purple.scss', 'public/css/theme')
    .sass('resources/css/sass/teal.scss', 'public/css/theme');
