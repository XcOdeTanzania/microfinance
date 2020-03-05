(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/gmap"],{

/***/ "./node_modules/jquery.gmap/jquery.gmap.js":
/*!*************************************************!*\
  !*** ./node_modules/jquery.gmap/jquery.gmap.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(jQuery) {/**
 * jQuery gMap - Google Maps API V3
 *
 * @license MIT License; http://www.opensource.org/licenses/mit-license.php
 * @url   http://github.com/marioestrada/jQuery-gMap
 * @author  Mario Estrada <me@mario.ec> based on original plugin by Cedric Kastner <cedric@nur-text.de>
 * @version 2.1.5
 */
/* global google */
(function($)
{
  // Main plugin function
  $.fn.gMap = function(options, methods_options)
  {
    // Optional methods
    switch(options)
    {
    case 'addMarker':
      return $(this).trigger(
        'gMap.addMarker',
        [methods_options.latitude, methods_options.longitude, methods_options.content, methods_options.icon, methods_options.popup]
      );
    case 'centerAt':
      return $(this).trigger('gMap.centerAt', [methods_options.latitude, methods_options.longitude, methods_options.zoom]);
    case 'clearMarkers':
      return $(this).trigger('gMap.clearMarkers');
    }

    // Build main options before element iteration
    var opts = $.extend({}, $.fn.gMap.defaults, options);

    // Iterate through each element
    return this.each(function()
    {
      // Create map and set initial options
      var $gmap = new google.maps.Map(this);

      $(this).data('gMap.reference', $gmap);

      // Create new object to geocode addresses
      var $geocoder = new google.maps.Geocoder();

      // Check for address to center on
      if (opts.address)
      {
        // Get coordinates for given address and center the map
        $geocoder.geocode(
          {
            address: opts.address
          }, function(gresult, status)
          {
            if(gresult && gresult.length) {
              $gmap.setCenter(gresult[0].geometry.location);
            }
          }
        );
      }else{
        // Check for coordinates to center on
        if (opts.latitude && opts.longitude)
        {
          // Center map to coordinates given by option
          $gmap.setCenter(new google.maps.LatLng(opts.latitude, opts.longitude));
        }
        else
        {
          // Check for a marker to center on (if no coordinates given)
          if ($.isArray(opts.markers) && opts.markers.length > 0)
          {
            // Check if the marker has an address
            if (opts.markers[0].address)
            {
              // Get the coordinates for given marker address and center
              $geocoder.geocode(
                {
                  address: opts.markers[0].address
                }, function(gresult, status)
                {
                  if(gresult && gresult.length > 0) {
                    $gmap.setCenter(gresult[0].geometry.location);
                  }
                }
              );
            }else{
              // Center the map to coordinates given by marker
              $gmap.setCenter(new google.maps.LatLng(opts.markers[0].latitude, opts.markers[0].longitude));
            }
          }else{
            // Revert back to world view
            $gmap.setCenter(new google.maps.LatLng(34.885931, 9.84375));
          }
        }
      }
      $gmap.setZoom(opts.zoom);

      // Set the preferred map type
      $gmap.setMapTypeId(google.maps.MapTypeId[opts.maptype]);

      // Set scrollwheel option
      var map_options = { scrollwheel: opts.scrollwheel, disableDoubleClickZoom: !opts.doubleclickzoom };
      // Check for map controls
      if(opts.controls === false){
        $.extend(map_options, { disableDefaultUI: true });
      }else if (opts.controls.length !== 0){
        $.extend(map_options, opts.controls, { disableDefaultUI: true });
      }

      $gmap.setOptions(map_options);

      // Create new icon
      var gicon = new google.maps.Marker();
      var marker_icon;
      var marker_shadow;

      // Set icon properties from global options
      marker_icon = new google.maps.MarkerImage(opts.icon.image);
      marker_icon.size = new google.maps.Size(opts.icon.iconsize[0], opts.icon.iconsize[1]);
      marker_icon.anchor = new google.maps.Point(opts.icon.iconanchor[0], opts.icon.iconanchor[1]);
      gicon.setIcon(marker_icon);

      if(opts.icon.shadow)
      {
        marker_shadow = new google.maps.MarkerImage(opts.icon.shadow);
        marker_shadow.size = new google.maps.Size(opts.icon.shadowsize[0], opts.icon.shadowsize[1]);
        marker_shadow.anchor = new google.maps.Point(opts.icon.shadowanchor[0], opts.icon.shadowanchor[1]);
        gicon.setShadow(marker_shadow);
      }

      // Bind actions
      $(this).bind('gMap.centerAt', function(e, latitude, longitude, zoom)
      {
        if(zoom) {
          $gmap.setZoom(zoom);
        }

        $gmap.panTo(new google.maps.LatLng(parseFloat(latitude), parseFloat(longitude)));
      });

      // Clear Markers
      var overlays = [];
      $(this).bind('gMap.clearMarkers', function()
      {
        while(overlays[0]){
          overlays.pop().setMap(null);
        }
      });

      var last_infowindow;
      $(this).bind('gMap.addMarker', function(e, latitude, longitude, content, icon, popup)
      {
        var marker_icon;
        var marker_shadow;
        var glatlng = new google.maps.LatLng(parseFloat(latitude), parseFloat(longitude));

        var gmarker = new google.maps.Marker({
          position: glatlng
        });

        if(icon)
        {
          marker_icon = new google.maps.MarkerImage(icon.image);
          marker_icon.size = new google.maps.Size(icon.iconsize[0], icon.iconsize[1]);
          marker_icon.anchor = new google.maps.Point(icon.iconanchor[0], icon.iconanchor[1]);
          gmarker.setIcon(marker_icon);

          if(icon.shadow)
          {
            marker_shadow = new google.maps.MarkerImage(icon.shadow);
            marker_shadow.size = new google.maps.Size(icon.shadowsize[0], icon.shadowsize[1]);
            marker_shadow.anchor = new google.maps.Point(icon.shadowanchor[0], icon.shadowanchor[1]);
            gicon.setShadow(marker_shadow);
          }
        }else{
          gmarker.setIcon(gicon.getIcon());
          gmarker.setShadow(gicon.getShadow());
        }

        if(content)
        {
          if(content === '_latlng') {
            content = latitude + ', ' + longitude;
          }

          var infowindow = new google.maps.InfoWindow({
            content: opts.html_prepend + content + opts.html_append
          });

          google.maps.event.addListener(gmarker, 'click', function()
          {
            if (last_infowindow) {
              last_infowindow.close();
            }
            infowindow.open($gmap, gmarker);
            last_infowindow = infowindow;
          });

          if(popup)
          {
            google.maps.event.addListenerOnce($gmap, 'tilesloaded', function()
            {
              infowindow.open($gmap, gmarker);
            });
          }
        }
        gmarker.setMap($gmap);
        overlays.push(gmarker);
      });

      var marker;
      var self = this;
      var geocode_callback = function(marker) {
        return function(gresult, status) {
          // Create marker
          if(gresult && gresult.length > 0)
          {
            $(self).trigger(
              'gMap.addMarker',
              [gresult[0].geometry.location.lat(), gresult[0].geometry.location.lng(), marker.html, marker.icon, marker.popup]
            );
          }
        };
      };

      // Loop through marker array
      for (var j = 0; j < opts.markers.length; j++)
      {
        // Get the options from current marker
        marker = opts.markers[j];

        // Check if address is available
        if (marker.address)
        {
          // Check for reference to the marker's address
          if (marker.html === '_address') {
            marker.html = marker.address;
          }

          // Get the point for given address
          $geocoder.geocode({
              address: marker.address
            }, geocode_callback(marker));
        }else{
          $(this).trigger('gMap.addMarker', [marker.latitude, marker.longitude, marker.html, marker.icon, marker.popup]);
        }
      }
    });

  };

  // Default settings
  $.fn.gMap.defaults = {
    address: '',
    latitude: 0,
    longitude: 0,
    zoom: 1,
    markers: [],
    controls: [],
    scrollwheel: false,
    doubleclickzoom: true,
    maptype: 'ROADMAP',
    html_prepend: '<div class="gmap_marker">',
    html_append: '</div>',
    icon: {
      image: "http://www.google.com/mapfiles/marker.png",
      shadow: "http://www.google.com/mapfiles/shadow50.png",
      iconsize: [20, 34],
      shadowsize: [37, 34],
      iconanchor: [9, 34],
      shadowanchor: [6, 34]
    }
  };

})(jQuery);

/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ "./resources/js/angle/modules/maps/gmap.js":
/*!*************************************************!*\
  !*** ./resources/js/angle/modules/maps/gmap.js ***!
  \*************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function($) {/* harmony import */ var jquery_gmap_jquery_gmap_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery.gmap/jquery.gmap.js */ "./node_modules/jquery.gmap/jquery.gmap.js");
/* harmony import */ var jquery_gmap_jquery_gmap_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery_gmap_jquery_gmap_js__WEBPACK_IMPORTED_MODULE_0__);
/**=========================================================
 * Module: gmap.js
 * Init Google Map plugin
 =========================================================*/


(function () {
  'use strict';

  $(initGoogleMaps); // -------------------------
  // Map Style definition
  // -------------------------
  // Get more styles from http://snazzymaps.com/style/29/light-monochrome
  // - Just replace and assign to 'MapStyles' the new style array

  var MapStyles = [{
    featureType: 'water',
    stylers: [{
      visibility: 'on'
    }, {
      color: '#bdd1f9'
    }]
  }, {
    featureType: 'all',
    elementType: 'labels.text.fill',
    stylers: [{
      color: '#334165'
    }]
  }, {
    featureType: 'landscape',
    stylers: [{
      color: '#e9ebf1'
    }]
  }, {
    featureType: 'road.highway',
    elementType: 'geometry',
    stylers: [{
      color: '#c5c6c6'
    }]
  }, {
    featureType: 'road.arterial',
    elementType: 'geometry',
    stylers: [{
      color: '#fff'
    }]
  }, {
    featureType: 'road.local',
    elementType: 'geometry',
    stylers: [{
      color: '#fff'
    }]
  }, {
    featureType: 'transit',
    elementType: 'geometry',
    stylers: [{
      color: '#d8dbe0'
    }]
  }, {
    featureType: 'poi',
    elementType: 'geometry',
    stylers: [{
      color: '#cfd5e0'
    }]
  }, {
    featureType: 'administrative',
    stylers: [{
      visibility: 'on'
    }, {
      lightness: 33
    }]
  }, {
    featureType: 'poi.park',
    elementType: 'labels',
    stylers: [{
      visibility: 'on'
    }, {
      lightness: 20
    }]
  }, {
    featureType: 'road',
    stylers: [{
      color: '#d8dbe0',
      lightness: 20
    }]
  }];

  function initGoogleMaps() {
    if (!$.fn.gMap) return;
    var mapSelector = '[data-gmap]';
    var gMapRefs = [];
    $(mapSelector).each(function () {
      var $this = $(this),
          addresses = $this.data('address') && $this.data('address').split(';'),
          titles = $this.data('title') && $this.data('title').split(';'),
          zoom = $this.data('zoom') || 14,
          maptype = $this.data('maptype') || 'ROADMAP',
          // or 'TERRAIN'
      markers = [];

      if (addresses) {
        for (var a in addresses) {
          if (typeof addresses[a] == 'string') {
            markers.push({
              address: addresses[a],
              html: titles && titles[a] || '',
              popup: true
              /* Always popup */

            });
          }
        }

        var options = {
          controls: {
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
          },
          scrollwheel: false,
          maptype: maptype,
          markers: markers,
          zoom: zoom // More options https://github.com/marioestrada/jQuery-gMap

        };
        var gMap = $this.gMap(options);
        var ref = gMap.data('gMap.reference'); // save in the map references list

        gMapRefs.push(ref); // set the styles

        if ($this.data('styled') !== undefined) {
          ref.setOptions({
            styles: MapStyles
          });
        }
      }
    }); //each
  }
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 9:
/*!*******************************************************!*\
  !*** multi ./resources/js/angle/modules/maps/gmap.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! X:\proyect\wb\angle4\development\laravel\resources\js\angle\modules\maps\gmap.js */"./resources/js/angle/modules/maps/gmap.js");


/***/ })

},[[9,"/js/manifest","/js/vendor"]]]);