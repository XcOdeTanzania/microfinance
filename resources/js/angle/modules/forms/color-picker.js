// Color picker
// -----------------------------------

// COLORPICKER
import 'bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js';
import 'bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css';

(function() {
    'use strict';

    $(initColorPicker);

    function initColorPicker() {

        if (!$.fn.colorpicker) return;

        $('.demo-colorpicker').colorpicker();

        $('#demo_selectors').colorpicker({
            colorSelectors: {
                'default': '#777777',
                'primary': APP_COLORS['primary'],
                'success': APP_COLORS['success'],
                'info': APP_COLORS['info'],
                'warning': APP_COLORS['warning'],
                'danger': APP_COLORS['danger']
            }
        });

    }

})();