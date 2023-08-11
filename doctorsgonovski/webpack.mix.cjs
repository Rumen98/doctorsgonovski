const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/main.js', 'public/js')  // Added this line
    .sass('resources/sass/app.scss', 'public/css')
    .autoload({
        jquery: ['$', 'window.jQuery', 'jQuery']
    });
