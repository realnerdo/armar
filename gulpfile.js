const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

// Gentelella vendors path : vendor/bower_components/gentelella/vendors

elixir((mix) => {

    /********************/
    /* Copy Stylesheets */
    /********************/

    // Bootstrap
    mix.copy('vendor/bower_components/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css');

    // Font awesome
    mix.copy('vendor/bower_components/gentelella/vendors/font-awesome/css/font-awesome.min.css', 'public/css/font-awesome.min.css');

    // Gentelella
    mix.copy('vendor/bower_components/gentelella/build/css/custom.min.css', 'public/css/gentelella.min.css');

    // Switchery
    mix.copy('vendor/bower_components/gentelella/vendors/switchery/dist/switchery.min.css', 'public/css/switchery.min.css');

    // Select2
    mix.copy('vendor/bower_components/gentelella/vendors/select2/dist/css/select2.min.css', 'public/css/select2.min.css');

    // iCheck
    mix.copy('vendor/bower_components/gentelella/vendors/iCheck/skins/flat/green.css', 'public/css/icheck.css');
    mix.copy('vendor/bower_components/gentelella/vendors/iCheck/skins/flat/green.png', 'public/css/green.png');
    mix.copy('vendor/bower_components/gentelella/vendors/iCheck/skins/flat/green@2x.png', 'public/css/green@2x.png');

    // Datatables
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css', 'public/css/dataTables.bootstrap.min.css');
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css', 'public/css/buttons.bootstrap.min.css');
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css', 'public/css/fixedHeader.bootstrap.min.css');
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css', 'public/css/responsive.bootstrap.min.css');
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css', 'public/css/scroller.bootstrap.min.css');

    /****************/
    /* Copy Scripts */
    /****************/

    // Bootstrap
    mix.copy('vendor/bower_components/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');

    // jQuery
    mix.copy('vendor/bower_components/gentelella/vendors/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');

    // Gentelella
    mix.copy('vendor/bower_components/gentelella/build/js/custom.min.js', 'public/js/gentelella.min.js');

    // Switchery
    mix.copy('vendor/bower_components/gentelella/vendors/switchery/dist/switchery.min.js', 'public/js/switchery.min.js');

    // Select2
    mix.copy('vendor/bower_components/gentelella/vendors/select2/dist/js/select2.full.min.js', 'public/js/select2.full.min.js');

    // iCheck
    mix.copy('vendor/bower_components/gentelella/vendors/iCheck/icheck.min.js', 'public/js/icheck.min.js');

    // Moment
    mix.copy('vendor/bower_components/gentelella/production/js/moment/moment.min.js', 'public/js/moment.min.js');

    // Datepicker
    mix.copy('vendor/bower_components/gentelella/production/js/datepicker/daterangepicker.js', 'public/js/daterangepicker.js');

    // Datatables
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js', 'public/js/jquery.dataTables.min.js');
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js', 'public/js/dataTables.bootstrap.min.js');
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js', 'public/js/dataTables.buttons.min.js');
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js', 'public/js/buttons.bootstrap.min.js');
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js', 'public/js/buttons.flash.min.js');
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js', 'public/js/buttons.html5.min.js');
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js', 'public/js/buttons.print.min.js');
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js', 'public/js/dataTables.fixedHeader.min.js');
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js', 'public/js/dataTables.keyTable.min.js');
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js', 'public/js/dataTables.responsive.min.js');
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js', 'public/js/responsive.bootstrap.js');
    mix.copy('vendor/bower_components/gentelella/vendors/datatables.net-scroller/js/datatables.scroller.min.js', 'public/js/datatables.scroller.min.js');
    mix.copy('vendor/bower_components/gentelella/vendors/jszip/dist/jszip.min.js', 'public/js/jszip.min.js');
    mix.copy('vendor/bower_components/gentelella/vendors/pdfmake/build/pdfmake.min.js', 'public/js/pdfmake.min.js');
    mix.copy('vendor/bower_components/gentelella/vendors/pdfmake/build/vfs_fonts.js', 'public/js/vfs_fonts.js');

    /**************/
    /* Copy Fonts */
    /**************/

    // Bootstrap
    mix.copy('vendor/bower_components/gentelella/vendors/bootstrap/fonts/', 'public/fonts');

    // Font awesome
    mix.copy('vendor/bower_components/gentelella/vendors/font-awesome/fonts/', 'public/fonts');
});
