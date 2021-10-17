let mix = require('laravel-mix');
require('mix-tailwindcss');

// Compile and minify Sass using Laravel Mix and PurgeCSS
mix.sass('resources/assets/sass/app.scss', 'web/assets/css')
    .disableNotifications()
    .tailwind();

// Compile JS dependencies
mix.combine([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/js-cookie/src/js.cookie.js',
    'node_modules/lazysizes/lazysizes.min.js'
],'web/assets/js/dependencies.min.js');

// Compile custom JS
mix.scripts('resources/assets/js/*', 'web/assets/js/app.js');