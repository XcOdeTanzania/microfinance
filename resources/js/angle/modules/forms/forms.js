// Forms Demo
// -----------------------------------

// Tags input
import 'bootstrap-tagsinput/dist/bootstrap-tagsinput.js';
import 'bootstrap-tagsinput/dist/bootstrap-tagsinput.css';
// Chosen
import 'chosen-js/chosen.css';
import 'chosen-js/chosen.jquery.js';
// // MOMENT JS
// import 'moment/min/moment-with-locales.js';
// DATEPICKER
import 'bootstrap-datepicker/dist/js/bootstrap-datepicker.js';
import 'bootstrap-datepicker/dist/css/bootstrap-datepicker.css';
// SLIDER CTRL
import 'bootstrap-slider/dist/bootstrap-slider.js';
import 'bootstrap-slider/dist/css/bootstrap-slider.css';
// WYSIWYG
import 'bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js';
import 'bootstrap-wysiwyg/css/style.css';
// INPUT MASK
import 'inputmask/dist/jquery.inputmask.bundle.js';
// FILESTYLE
import 'bootstrap-filestyle/src/bootstrap-filestyle.js';


(function() {
    'use strict';

    $(initFormsDemo);

    function initFormsDemo() {

        if (!$.fn.slider) return;
        if (!$.fn.chosen) return;
        if (!$.fn.inputmask) return;
        if (!$.fn.filestyle) return;
        if (!$.fn.wysiwyg) return;
        if (!$.fn.datepicker) return;

        // BOOTSTRAP SLIDER CTRL
        // -----------------------------------

        $('[data-ui-slider]').slider();

        // CHOSEN
        // -----------------------------------

        $('.chosen-select').chosen();

        // MASKED
        // -----------------------------------

        $('[data-masked]').inputmask();

        // FILESTYLE
        // -----------------------------------

        $('.filestyle').filestyle();

        // WYSIWYG
        // -----------------------------------

        $('.wysiwyg').wysiwyg();


        // DATETIMEPICKER
        // -----------------------------------

        $('#datetimepicker1').datepicker({
            orientation: 'bottom',
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-crosshairs',
                clear: 'fa fa-trash'
            }
        });
        // only time
        $('#datetimepicker2').datepicker({
            format: 'mm-dd-yyyy'
        });

    }

})();