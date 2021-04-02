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

 mix.copyDirectory('resources/assets', 'public/assets')
   .copyDirectory('resources/js/jquery-3.6.0.min.js', 'public/js')
   .copyDirectory('resources/assets/owl-carousel/js/owl.carousel.min.js', 'public/js')
   .copyDirectory('resources/js/aos.js', 'public/js')
   .copyDirectory('resources/js/main.js', 'public/js')
   .copyDirectory('resources/js/app.js', 'public/js')
   .copyDirectory('resources/js/bootstrap.js', 'public/js')
      .postCss('resources/css/variables.css', 'public/css/app.css')
      .postCss('resources/css/app.css', 'public/css/app.css')
      .postCss('resources/css/main.css', 'public/css/app.css')
      .postCss('resources/css/fonts.css', 'public/css/app.css')
      .postCss('resources/css/navbar.css', 'public/css/app.css')
      .postCss('resources/css/sidebar.css', 'public/css/app.css')
      .postCss('resources/css/aos.css', 'public/css/app.css')
      .postCss('resources/css/footer.css', 'public/css/app.css')
      .copyDirectory('resources/assets/owl-carousel/css/owl.carousel.min.css', 'public/css/owl.carousel.min.css')
      .copyDirectory('resources/assets/owl-carousel/css/owl.theme.default.min.css', 'public/css/owl.theme.default.min.css')
      .postCss('resources/css/owl-carousel.css', 'public/css/app.css')
      .postCss('resources/assets/fontawesome/css/all.min.css', 'public/css/app.css');
    
