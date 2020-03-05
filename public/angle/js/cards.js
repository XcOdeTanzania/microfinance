(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/cards"],{

/***/ "./resources/js/angle/modules/elements/cards.js":
/*!******************************************************!*\
  !*** ./resources/js/angle/modules/elements/cards.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {// Demo Cards
// -----------------------------------
(function () {
  'use strict';

  $(initCardDemo);

  function initCardDemo() {
    /**
     * This functions show a demonstration of how to use
     * the card tools system via custom event.
     */
    var cardList = [].slice.call(document.querySelectorAll('.card.card-demo'));
    cardList.forEach(function (item) {
      item.addEventListener('card.refresh', function (event) {
        // get the card element that is refreshing
        var card = event.detail.card; // perform any action here, when it is done,
        // remove the spinner calling "removeSpinner"
        // setTimeout used to simulate async operation

        setTimeout(card.removeSpinner, 3000);
      });
      item.addEventListener('card.collapse.hide', function () {
        console.log('Card Collapse Hide');
      });
      item.addEventListener('card.collapse.show', function () {
        console.log('Card Collapse Show');
      });
      item.addEventListener('card.remove', function (event) {
        var confirm = event.detail.confirm;
        var cancel = event.detail.cancel; // perform any action  here

        console.log('Removing Card'); // Call confirm() to continue removing card
        // otherwise call cancel()

        confirm();
      });
      item.addEventListener('card.removed', function (event) {
        console.log('Removed Card');
      });
    });
  }
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 27:
/*!************************************************************!*\
  !*** multi ./resources/js/angle/modules/elements/cards.js ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! X:\proyect\wb\angle4\development\laravel\resources\js\angle\modules\elements\cards.js */"./resources/js/angle/modules/elements/cards.js");


/***/ })

},[[27,"/js/manifest","/js/vendor"]]]);