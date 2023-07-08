let mix = require('laravel-mix');

require('mix-tailwindcss');

mix.sass('assets/src/scss/styles.scss', 'assets/dist/css/styles.min.css').tailwind();
mix.js(['assets/src/js/scripts.js' ], 'assets/dist/js/scripts.min.js');
 