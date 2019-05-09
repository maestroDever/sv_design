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

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css');

mix.options({
   // Our own set of PostCSS plugins.
   postCss: [
      require('postcss-easy-import')(),
      require('tailwindcss'),
      require('postcss-nested')(),
      require('postcss-preset-env')(),
      require('postcss-css-variables')()
  ],

  // PostCSS Preset Env already processes our css with Autoprefixer, so we don't
  // need mix to do it twice.
  autoprefixer: false,
  processCssUrls: false,
  // Since we don't do any image preprocessing and write url's that are
  // relative to the site root, we don't want the css loader to try to
  // follow paths in `url()` functions.
  // processCssUrls: false,
});

mix.browserSync('sv_design_2019.test');