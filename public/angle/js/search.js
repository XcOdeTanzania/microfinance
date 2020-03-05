(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/search"],{

/***/ "./resources/js/angle/modules/extras/search.js":
/*!*****************************************************!*\
  !*** ./resources/js/angle/modules/extras/search.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {// Search Results
// -----------------------------------
(function () {
  'use strict';

  $(initSearch);

  function initSearch() {
    if (!$.fn.slider) return;
    if (!$.fn.chosen) return;
    if (!$.fn.datepicker) return; // BOOTSTRAP SLIDER CTRL
    // -----------------------------------

    $('[data-ui-slider]').slider(); // CHOSEN
    // -----------------------------------

    $('.chosen-select').chosen(); // DATETIMEPICKER
    // -----------------------------------

    $('#datetimepicker').datepicker({
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
  }
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 26:
/*!***********************************************************!*\
  !*** multi ./resources/js/angle/modules/extras/search.js ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! X:\proyect\wb\angle4\development\laravel\resources\js\angle\modules\extras\search.js */"./resources/js/angle/modules/extras/search.js");


/***/ })

},[[26,"/js/manifest","/js/vendor"]]]);