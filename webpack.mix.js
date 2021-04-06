const mix = require('laravel-mix');

// mix.js('resources/js/app.js', 'public/js').vue()
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/css/app.scss', 'public/css');