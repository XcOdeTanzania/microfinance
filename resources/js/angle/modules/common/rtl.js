// Toggle RTL mode for demo
// -----------------------------------

(function() {
    'use strict';

    $(initRTL);

    function initRTL() {
        // get link tags
        var maincss = document.getElementById('maincss');
        var bscss = document.getElementById('bscss');
        // store rtl stylesheet paths
        var appRtl = maincss.getAttribute('data-rtl');
        var bsRtl = bscss.getAttribute('data-rtl');
        // store ltr stylesheet paths (assumes ltr is default mode)
        var appLtr = maincss.href;
        var bsLtr = bscss.href;
        var rtlCheck = document.getElementById('chk-rtl');
        if (rtlCheck) {
            rtlCheck.addEventListener('change', function() {
                // app rtl check
                maincss.href = this.checked ? appRtl : appLtr;
                // bootstrap rtl check
                bscss.href = this.checked ? bsRtl : bsLtr;
            });
        }
    }
})();
