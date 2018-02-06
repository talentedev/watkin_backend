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

mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/dashboard.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/dashboard.scss', 'public/css')
   .sass('resources/assets/sass/upcoming.scss', 'public/css')
   // copy node modules to public directory
   .copy('node_modules/jvectormap/jquery-jvectormap.css', 'public/vendor/jvectormap/jquery-jvectormap.css')
   .copy('node_modules/jvectormap/jquery-jvectormap.min.js', 'public/vendor/jvectormap/jquery-jvectormap.min.js');
