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
//
// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');




mix.styles(['resources/css/css/bootstrap.min.css',
    'resources/css/css/slick.css',
    'resources/css/css/slick-theme.css',
    'resources/css/css/nouislider.min.css',
    'resources/css/css/font-awesome.min.cs',
    'resources/css/css/style.css',
],'public/front/css/app.css')




mix.scripts(['resources/js/js/jquery.min.js',
        'resources/js/js/bootstrap.min.js',
        'resources/js/js/slick.min.js',
        'resources/js/js/nouislider.min.js',
        'resources/js/js/jquery.zoom.min.js',
        'resources/js/js/main.js',
    ],'public/front/js/app.js');
