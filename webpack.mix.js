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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');


mix.styles([
    'resources/assets/admin/bootstrap/css/bootstrap.min.css',
    'resources/assets/admin/font-awesome/4.5.0/css/font-awesome.min.css',
    'resources/assets/admin/ionicons/2.0.1/css/ionicons.min.css',
    'resources/assets/admin/dist/css/AdminLTE.min.css',
    'resources/assets/admin/dist/css/skins/_all-skins.min.css',
    'resources/assets/admin/plugins/iCheck/all.css',
    'resources/assets/admin/plugins/iCheck/minimal/_all.css',
    'resources/assets/admin/plugins/datepicker/datepicker3.css',
    'resources/assets/admin/plugins/select2/select2.min.css',
    'resources/assets/admin/plugins/datatables/dataTables.bootstrap.css',
], 'public/css/admin.css').version();




mix.scripts([
    'resources/assets/admin/plugins/jQuery/jquery-2.2.3.min.js',
    'resources/assets/admin/bootstrap/js/bootstrap.min.js',
    'resources/assets/admin/plugins/slimScroll/jquery.slimscroll.min.js',
    'resources/assets/admin/plugins/fastclick/fastclick.js',
    'resources/assets/admin/dist/js/app.min.js',
    'resources/assets/admin/dist/js/demo.js',
    'resources/assets/admin/plugins/select2/select2.full.min.js',
    'resources/assets/admin/plugins/datepicker/bootstrap-datepicker.js',
    'resources/assets/admin/plugins/iCheck/icheck.min.js',
    'resources/assets/admin/plugins/datatables/jquery.dataTables.min.js',
    'resources/assets/admin/plugins/datatables/dataTables.bootstrap.min.js',
    'resources/assets/admin/custom.js'
], 'public/js/admin.js').version();



mix.copy([
    'resources/assets/admin/bootstrap/fonts',
    'resources/assets/admin/dist/fonts',
],  'public/fonts');

mix.copy(['resources/assets/admin/dist/img',],  'public/img');
mix.copy('resources/assets/admin/plugins/iCheck/minimal/blue.png',  'public/css');





mix.styles([
    'resources/assets/front/css/bootstrap.min.css',
    'resources/assets/front/css/font-awesome.min.css',
    'resources/assets/front/css/animate.min.css',
    'resources/assets/front/css/owl.carousel.css',
    'resources/assets/front/css/owl.theme.css',
    'resources/assets/front/css/owl.transitions.css',
    'resources/assets/front/css/style.css',
    'resources/assets/front/css/responsive.css'
], 'public/css/front.css').version();


mix.scripts([
    'resources/assets/front/js/jquery-1.11.3.min.js',
    'resources/assets/front/js/bootstrap.min.js',
    'resources/assets/front/js/owl.carousel.min.js',
    'resources/assets/front/js/jquery.stickit.min.js',
    'resources/assets/front/js/map.js',
    'resources/assets/front/js/menu.js',
    'resources/assets/front/js/scripts.js',
    'resources/assets/front/custom.js'
], 'public/js/front.js').version();

mix.copy('resources/assets/front/fonts', 'public/fonts');
mix.copy('resources/assets/front/images', 'public/images');