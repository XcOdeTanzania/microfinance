/*!
 *
 * Angle - Bootstrap Admin Template
 *
 * Version: 4.7.1
 * Author: @themicon_co
 * Website: http://themicon.co
 * License: https://wrapbootstrap.com/help/licenses
 *
 */


(function() {
    'use strict';

    $(function() {

        // Restore body classes
        // -----------------------------------
        var $body = $('body');
        new StateToggler().restoreState($body);

        // enable settings toggle after restore
        $('#chk-fixed').prop('checked', $body.hasClass('layout-fixed'));
        $('#chk-collapsed').prop('checked', $body.hasClass('aside-collapsed'));
        $('#chk-collapsed-text').prop('checked', $body.hasClass('aside-collapsed-text'));
        $('#chk-boxed').prop('checked', $body.hasClass('layout-boxed'));
        $('#chk-float').prop('checked', $body.hasClass('aside-float'));
        $('#chk-hover').prop('checked', $body.hasClass('aside-hover'));

        // When ready display the offsidebar
        $('.offsidebar.d-none').removeClass('d-none');

        // DEMO ONLY: remove sidebar related classes as they dont
        // have effect with horizontal layout and disabled switches
        if (document.body.className.indexOf('layout-h') > -1) {
            document.body.className = document.body.className.replace(/(^|\s)aside-\S+/g, '');
            $('#chk-collapsed').prop({ disabled: true, checked: false });
            $('#chk-collapsed-text').prop({ disabled: true, checked: false });
            $('#chk-float').prop({ disabled: true, checked: false });
            $('#chk-hover').prop({ disabled: true, checked: false });
            $('#chk-scroll').prop({ disabled: true, checked: false });
        }

    }); // doc ready

})();