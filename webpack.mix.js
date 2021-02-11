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

mix.setPublicPath('./')
.postCss('resources/css/site.css', 'resources/dist/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
])
.postCss('resources/css/docs.css', 'resources/dist/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
])
.copy('resources/css/prism.css', 'resources/dist/css/prism.css')
.copyDirectory('resources/img', 'resources/dist/img')
.copyDirectory('resources/meta', 'resources/dist/meta')
.js('resources/js/site.js', 'resources/dist/js')
.js('resources/js/docs.js', 'resources/dist/js');

if (mix.inProduction()) {
    mix.version();
}
