(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/jqcloud"],{

/***/ "./node_modules/css-loader/index.js?!./node_modules/postcss-loader/src/index.js?!./node_modules/jqcloud2/dist/jqcloud.css":
/*!**********************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--16-1!./node_modules/postcss-loader/src??ref--16-2!./node_modules/jqcloud2/dist/jqcloud.css ***!
  \**********************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "/*!\r\n * jQCloud 2.0.3\r\n * Copyright 2011 Luca Ongaro (http://www.lucaongaro.eu)\r\n * Copyright 2013 Daniel White (http://www.developerdan.com)\r\n * Copyright 2014-2017 Damien \"Mistic\" Sorel (http://www.strangeplanet.fr)\r\n * Licensed under MIT (http://opensource.org/licenses/MIT)\r\n */\r\n.jqcloud {\r\n  font: 10px \"Helvetica\", \"Arial\", sans-serif;\r\n  line-height: normal;\r\n  overflow: hidden;\r\n  position: relative;\r\n}\r\n\r\n.jqcloud-word {\r\n  margin: 0;\r\n  padding: 0;\r\n}\r\n.jqcloud-word.w1 {\r\n  color: #aab5f0;\r\n  font-size: 100%;\r\n}\r\n.jqcloud-word.w2 {\r\n  color: #99ccee;\r\n  font-size: 150%;\r\n}\r\n.jqcloud-word.w3 {\r\n  color: #a0ddff;\r\n  font-size: 200%;\r\n}\r\n.jqcloud-word.w4 {\r\n  color: #90c5f0;\r\n  font-size: 250%;\r\n}\r\n.jqcloud-word.w5 {\r\n  color: #90a0dd;\r\n  font-size: 300%;\r\n}\r\n.jqcloud-word.w6 {\r\n  color: #90c5f0;\r\n  font-size: 350%;\r\n}\r\n.jqcloud-word.w7 {\r\n  color: #3399dd;\r\n  font-size: 400%;\r\n}\r\n.jqcloud-word.w8 {\r\n  color: #00ccff;\r\n  font-size: 450%;\r\n}\r\n.jqcloud-word.w9 {\r\n  color: #00ccff;\r\n  font-size: 500%;\r\n}\r\n.jqcloud-word.w10 {\r\n  color: #00ccff;\r\n  font-size: 550%;\r\n}\r\n.jqcloud-word a {\r\n  color: inherit;\r\n  font-size: inherit;\r\n  text-decoration: none;\r\n}\r\n.jqcloud-word a:hover {\r\n  color: #00ccff;\r\n}\r\n", ""]);

// exports


/***/ }),

/***/ "./node_modules/css-loader/lib/css-base.js":
/*!*************************************************!*\
  !*** ./node_modules/css-loader/lib/css-base.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
	MIT License http://www.opensource.org/licenses/mit-license.php
	Author Tobias Koppers @sokra
*/
// css base code, injected by the css-loader
module.exports = function(useSourceMap) {
	var list = [];

	// return the list of modules as css string
	list.toString = function toString() {
		return this.map(function (item) {
			var content = cssWithMappingToString(item, useSourceMap);
			if(item[2]) {
				return "@media " + item[2] + "{" + content + "}";
			} else {
				return content;
			}
		}).join("");
	};

	// import a list of modules into the list
	list.i = function(modules, mediaQuery) {
		if(typeof modules === "string")
			modules = [[null, modules, ""]];
		var alreadyImportedModules = {};
		for(var i = 0; i < this.length; i++) {
			var id = this[i][0];
			if(typeof id === "number")
				alreadyImportedModules[id] = true;
		}
		for(i = 0; i < modules.length; i++) {
			var item = modules[i];
			// skip already imported module
			// this implementation is not 100% perfect for weird media query combinations
			//  when a module is imported multiple times with different media queries.
			//  I hope this will never occur (Hey this way we have smaller bundles)
			if(typeof item[0] !== "number" || !alreadyImportedModules[item[0]]) {
				if(mediaQuery && !item[2]) {
					item[2] = mediaQuery;
				} else if(mediaQuery) {
					item[2] = "(" + item[2] + ") and (" + mediaQuery + ")";
				}
				list.push(item);
			}
		}
	};
	return list;
};

function cssWithMappingToString(item, useSourceMap) {
	var content = item[1] || '';
	var cssMapping = item[3];
	if (!cssMapping) {
		return content;
	}

	if (useSourceMap && typeof btoa === 'function') {
		var sourceMapping = toComment(cssMapping);
		var sourceURLs = cssMapping.sources.map(function (source) {
			return '/*# sourceURL=' + cssMapping.sourceRoot + source + ' */'
		});

		return [content].concat(sourceURLs).concat([sourceMapping]).join('\n');
	}

	return [content].join('\n');
}

// Adapted from convert-source-map (MIT)
function toComment(sourceMap) {
	// eslint-disable-next-line no-undef
	var base64 = btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap))));
	var data = 'sourceMappingURL=data:application/json;charset=utf-8;base64,' + base64;

	return '/*# ' + data + ' */';
}


/***/ }),

/***/ "./node_modules/jqcloud2/dist/jqcloud.css":
/*!************************************************!*\
  !*** ./node_modules/jqcloud2/dist/jqcloud.css ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../css-loader??ref--16-1!../../postcss-loader/src??ref--16-2!./jqcloud.css */ "./node_modules/css-loader/index.js?!./node_modules/postcss-loader/src/index.js?!./node_modules/jqcloud2/dist/jqcloud.css");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"insertAt":"top","hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../../style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ "./node_modules/jqcloud2/dist/jqcloud.js":
/*!***********************************************!*\
  !*** ./node_modules/jqcloud2/dist/jqcloud.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/*!
 * jQCloud 2.0.3
 * Copyright 2011 Luca Ongaro (http://www.lucaongaro.eu)
 * Copyright 2013 Daniel White (http://www.developerdan.com)
 * Copyright 2014-2017 Damien "Mistic" Sorel (http://www.strangeplanet.fr)
 * Licensed under MIT (http://opensource.org/licenses/MIT)
 */
(function(root, factory) {
    if (true) {
        !(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
    }
    else {}
}(this, function($) {
'use strict';

/*
 * Plugin class
 */
var jQCloud = function(element, word_array, options) {
    this.$element = $(element);

    this.word_array = word_array || [];
    this.options = options;

    this.sizeGenerator = null;
    this.colorGenerator = null;

    // Data used internally
    this.data = {
        placed_words: [],
        timeouts: {},
        namespace: null,
        step: null,
        angle: null,
        aspect_ratio: null,
        max_weight: null,
        min_weight: null,
        sizes: [],
        colors: []
    };

    this.initialize();
};

jQCloud.DEFAULTS = {
    width: 100,
    height: 100,
    center: { x: 0.5, y: 0.5 },
    steps: 10,
    delay: null,
    shape: 'elliptic',
    classPattern: 'w{n}',
    encodeURI: true,
    removeOverflowing: true,
    afterCloudRender: null,
    autoResize: false,
    colors: null,
    fontSize: null,
    template: null
};

jQCloud.prototype = {
    initialize: function() {
        // Set/Get dimensions
        if (this.options.width) {
            this.$element.width(this.options.width);
        }
        else {
            this.options.width = this.$element.width();
        }
        if (this.options.height) {
            this.$element.height(this.options.height);
        }
        else {
            this.options.height = this.$element.height();
        }

        // Default options value
        this.options = $.extend(true, {}, jQCloud.DEFAULTS, this.options);

        // Ensure delay
        if (this.options.delay === null) {
            this.options.delay = this.word_array.length > 50 ? 10 : 0;
        }

        // Backward compatibility
        if (this.options.center.x > 1) {
            this.options.center.x = this.options.center.x / this.options.width;
            this.options.center.y = this.options.center.y / this.options.height;
        }

        // Create colorGenerator function from options
        // Direct function
        if (typeof this.options.colors == 'function') {
            this.colorGenerator = this.options.colors;
        }
        // Array of sizes
        else if ($.isArray(this.options.colors)) {
            var cl = this.options.colors.length;
            if (cl > 0) {
                // Fill the sizes array to X items
                if (cl < this.options.steps) {
                    for (var i = cl; i < this.options.steps; i++) {
                        this.options.colors[i] = this.options.colors[cl - 1];
                    }
                }

                this.colorGenerator = function(weight) {
                    return this.options.colors[this.options.steps - weight];
                };
            }
        }

        // Create sizeGenerator function from options
        // Direct function
        if (typeof this.options.fontSize == 'function') {
            this.sizeGenerator = this.options.fontSize;
        }
        // Object with 'from' and 'to'
        else if ($.isPlainObject(this.options.fontSize)) {
            this.sizeGenerator = function(width, height, weight) {
                var max = width * this.options.fontSize.from,
                    min = width * this.options.fontSize.to;
                return Math.round(min + (max - min) * 1.0 / (this.options.steps - 1) * (weight - 1)) + 'px';
            };
        }
        // Array of sizes
        else if ($.isArray(this.options.fontSize)) {
            var sl = this.options.fontSize.length;
            if (sl > 0) {
                // Fill the sizes array to X items
                if (sl < this.options.steps) {
                    for (var j = sl; j < this.options.steps; j++) {
                        this.options.fontSize[j] = this.options.fontSize[sl - 1];
                    }
                }

                this.sizeGenerator = function(width, height, weight) {
                    return this.options.fontSize[this.options.steps - weight];
                };
            }
        }

        this.data.angle = Math.random() * 6.28;
        this.data.step = (this.options.shape === 'rectangular') ? 18.0 : 2.0;
        this.data.aspect_ratio = this.options.width / this.options.height;
        this.clearTimeouts();

        // Namespace word ids to avoid collisions between multiple clouds
        this.data.namespace = (this.$element.attr('id') || Math.floor((Math.random() * 1000000)).toString(36)) + '_word_';

        this.$element.addClass('jqcloud');

        // Container's CSS position cannot be 'static'
        if (this.$element.css('position') === 'static') {
            this.$element.css('position', 'relative');
        }

        // Delay execution so that the browser can render the page before the computatively intensive word cloud drawing
        this.createTimeout($.proxy(this.drawWordCloud, this), 10);

        // Attach window resize event
        if (this.options.autoResize) {
            $(window).on('resize.' + this.data.namespace, throttle(this.resize, 50, this));
        }
    },

    // Helper function to keep track of timeouts so they can be destroyed
    createTimeout: function(callback, time) {
        var timeout = setTimeout($.proxy(function() {
            delete this.data.timeouts[timeout];
            callback();
        }, this), time);
        this.data.timeouts[timeout] = true;
    },

    // Destroy all timeouts
    clearTimeouts: function() {
        $.each(this.data.timeouts, function(key) {
            clearTimeout(key);
        });
        this.data.timeouts = {};
    },

    // Pairwise overlap detection
    overlapping: function(a, b) {
        if (Math.abs(2.0 * a.left + a.width - 2.0 * b.left - b.width) < a.width + b.width) {
            if (Math.abs(2.0 * a.top + a.height - 2.0 * b.top - b.height) < a.height + b.height) {
                return true;
            }
        }
        return false;
    },

    // Helper function to test if an element overlaps others
    hitTest: function(elem) {
        // Check elements for overlap one by one, stop and return false as soon as an overlap is found
        for (var i = 0, l = this.data.placed_words.length; i < l; i++) {
            if (this.overlapping(elem, this.data.placed_words[i])) {
                return true;
            }
        }
        return false;
    },

    // Initialize the drawing of the whole cloud
    drawWordCloud: function() {
        var i, l;

        this.$element.children('[id^="' + this.data.namespace + '"]').remove();

        if (this.word_array.length === 0) {
            return;
        }

        // Make sure every weight is a number before sorting
        for (i = 0, l = this.word_array.length; i < l; i++) {
            this.word_array[i].weight = parseFloat(this.word_array[i].weight, 10);
        }

        // Sort word_array from the word with the highest weight to the one with the lowest
        this.word_array.sort(function(a, b) {
            return b.weight - a.weight;
        });

        // Kepp trace of bounds
        this.data.max_weight = this.word_array[0].weight;
        this.data.min_weight = this.word_array[this.word_array.length - 1].weight;

        // Generate colors
        this.data.colors = [];
        if (this.colorGenerator) {
            for (i = 0; i < this.options.steps; i++) {
                this.data.colors.push(this.colorGenerator(i + 1));
            }
        }

        // Generate font sizes
        this.data.sizes = [];
        if (this.sizeGenerator) {
            for (i = 0; i < this.options.steps; i++) {
                this.data.sizes.push(this.sizeGenerator(this.options.width, this.options.height, i + 1));
            }
        }

        // Iterate drawOneWord on every word, immediately or with delay
        if (this.options.delay > 0) {
            this.drawOneWordDelayed();
        }
        else {
            for (i = 0, l = this.word_array.length; i < l; i++) {
                this.drawOneWord(i, this.word_array[i]);
            }

            if (typeof this.options.afterCloudRender === 'function') {
                this.options.afterCloudRender.call(this.$element);
            }
        }
    },

    // Function to draw a word, by moving it in spiral until it finds a suitable empty place
    drawOneWord: function(index, word) {
        var word_id = this.data.namespace + index,
            word_selector = '#' + word_id,

        // option.shape == 'elliptic'
            angle = this.data.angle,
            radius = 0.0,

        // option.shape == 'rectangular'
            steps_in_direction = 0.0,
            quarter_turns = 0.0,

            weight = Math.floor(this.options.steps / 2),
            word_span,
            word_size,
            word_style;

        // Create word attr object
        word.attr = $.extend({}, word.html, { id: word_id });

        // Linearly map the original weight to a discrete scale from 1 to 10
        // Only if weights are different
        if (this.data.max_weight != this.data.min_weight) {
            weight = Math.round((word.weight - this.data.min_weight) * 1.0 * (this.options.steps - 1) / (this.data.max_weight - this.data.min_weight)) + 1;
        }
        word_span = $('<span>').attr(word.attr);

        word_span.addClass('jqcloud-word');

        // Apply class
        if (this.options.classPattern) {
            word_span.addClass(this.options.classPattern.replace('{n}', weight));
        }

        // Apply color
        if (this.data.colors.length) {
            word_span.css('color', this.data.colors[weight - 1]);
        }

        // Apply color from word property
        if (word.color) {
            word_span.css('color', word.color);
        }

        // Apply size
        if (this.data.sizes.length) {
            word_span.css('font-size', this.data.sizes[weight - 1]);
        }

        //Render using template function if provided.
        if (this.options.template) {
            word_span.html(this.options.template(word));
        } else if (word.link) {
            // Append link if word.link attribute was set
            // If link is a string, then use it as the link href
            if (typeof word.link === 'string') {
                word.link = { href: word.link };
            }

            if (this.options.encodeURI) {
                word.link.href = encodeURI(word.link.href).replace(/'/g, '%27');
            }

            word_span.append($('<a>').attr(word.link).text(word.text));
        }
        else {
            word_span.text(word.text);
        }

        // Bind handlers to words
        if (word.handlers) {
            word_span.on(word.handlers);
        }

        this.$element.append(word_span);

        word_size = {
            width: word_span.outerWidth(),
            height: word_span.outerHeight()
        };
        word_size.left = this.options.center.x * this.options.width - word_size.width / 2.0;
        word_size.top = this.options.center.y * this.options.height - word_size.height / 2.0;

        // Save a reference to the style property, for better performance
        word_style = word_span[0].style;
        word_style.position = 'absolute';
        word_style.left = word_size.left + 'px';
        word_style.top = word_size.top + 'px';

        while (this.hitTest(word_size)) {
            // option shape is 'rectangular' so move the word in a rectangular spiral
            if (this.options.shape === 'rectangular') {
                steps_in_direction++;

                if (steps_in_direction * this.data.step > (1 + Math.floor(quarter_turns / 2.0)) * this.data.step * ((quarter_turns % 4 % 2) === 0 ? 1 : this.data.aspect_ratio)) {
                    steps_in_direction = 0.0;
                    quarter_turns++;
                }

                switch (quarter_turns % 4) {
                    case 1:
                        word_size.left += this.data.step * this.data.aspect_ratio + Math.random() * 2.0;
                        break;
                    case 2:
                        word_size.top -= this.data.step + Math.random() * 2.0;
                        break;
                    case 3:
                        word_size.left -= this.data.step * this.data.aspect_ratio + Math.random() * 2.0;
                        break;
                    case 0:
                        word_size.top += this.data.step + Math.random() * 2.0;
                        break;
                }
            }
            // Default settings: elliptic spiral shape
            else {
                radius += this.data.step;
                angle += (index % 2 === 0 ? 1 : -1) * this.data.step;

                word_size.left = this.options.center.x * this.options.width - (word_size.width / 2.0) + (radius * Math.cos(angle)) * this.data.aspect_ratio;
                word_size.top = this.options.center.y * this.options.height + radius * Math.sin(angle) - (word_size.height / 2.0);
            }
            word_style.left = word_size.left + 'px';
            word_style.top = word_size.top + 'px';
        }

        // Don't render word if part of it would be outside the container
        if (this.options.removeOverflowing && (
                word_size.left < 0 || word_size.top < 0 ||
                (word_size.left + word_size.width) > this.options.width ||
                (word_size.top + word_size.height) > this.options.height
            )
        ) {
            word_span.remove();
            return;
        }

        // Save position for further usage
        this.data.placed_words.push(word_size);

        if (typeof word.afterWordRender === 'function') {
            word.afterWordRender.call(word_span);
        }
    },

    // Draw one word then recall the function after a delay
    drawOneWordDelayed: function(index) {
        index = index || 0;

        // if not visible then do not attempt to draw
        if (!this.$element.is(':visible')) {
            this.createTimeout($.proxy(function() {
                this.drawOneWordDelayed(index);
            }, this), 10);

            return;
        }

        if (index < this.word_array.length) {
            this.drawOneWord(index, this.word_array[index]);

            this.createTimeout($.proxy(function() {
                this.drawOneWordDelayed(index + 1);
            }, this), this.options.delay);
        }
        else {
            if (typeof this.options.afterCloudRender == 'function') {
                this.options.afterCloudRender.call(this.$element);
            }
        }
    },

    // Destroy any data and objects added by the plugin
    destroy: function() {
        if (this.options.autoResize) {
            $(window).off('resize.' + this.data.namespace);
        }

        this.clearTimeouts();
        this.$element.removeClass('jqcloud');
        this.$element.removeData('jqcloud');
        this.$element.children('[id^="' + this.data.namespace + '"]').remove();
    },

    // Update the list of words
    update: function(word_array) {
        this.word_array = word_array;
        this.data.placed_words = [];

        this.clearTimeouts();
        this.drawWordCloud();
    },

    resize: function() {
        var new_size = {
            width: this.$element.width(),
            height: this.$element.height()
        };

        if (new_size.width != this.options.width || new_size.height != this.options.height) {
            this.options.width = new_size.width;
            this.options.height = new_size.height;
            this.data.aspect_ratio = this.options.width / this.options.height;

            this.update(this.word_array);
        }
    },
};

/*
 * Apply throttling to a callback
 * @param callback {function}
 * @param delay {int} milliseconds
 * @param context {object|null}
 * @return {function}
 */
function throttle(callback, delay, context) {
    var state = {
        pid: null,
        last: 0
    };

    return function() {
        var elapsed = new Date().getTime() - state.last,
            args = arguments,
            that = this;

        function exec() {
            state.last = new Date().getTime();
            return callback.apply(context || that, Array.prototype.slice.call(args));
        }

        if (elapsed > delay) {
            return exec();
        }
        else {
            clearTimeout(state.pid);
            state.pid = setTimeout(exec, delay - elapsed);
        }
    };
}

/*
 * jQuery plugin
 */
$.fn.jQCloud = function(word_array, option) {
    var args = arguments;

    return this.each(function() {
        var $this = $(this),
            data = $this.data('jqcloud');

        if (!data && word_array === 'destroy') {
            // Don't even try to initialize when called with 'destroy'
            return;
        }
        if (!data) {
            var options = typeof option === 'object' ? option : {};
            $this.data('jqcloud', (data = new jQCloud(this, word_array, options)));
        }
        else if (typeof word_array === 'string') {
            data[word_array].apply(data, Array.prototype.slice.call(args, 1));
        }
    });
};

$.fn.jQCloud.defaults = {
    set: function(options) {
        $.extend(true, jQCloud.DEFAULTS, options);
    },
    get: function(key) {
        var options = jQCloud.DEFAULTS;
        if (key) {
            options = options[key];
        }
        return $.extend(true, {}, options);
    }
};

}));

/***/ }),

/***/ "./node_modules/style-loader/lib/addStyles.js":
/*!****************************************************!*\
  !*** ./node_modules/style-loader/lib/addStyles.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/*
	MIT License http://www.opensource.org/licenses/mit-license.php
	Author Tobias Koppers @sokra
*/

var stylesInDom = {};

var	memoize = function (fn) {
	var memo;

	return function () {
		if (typeof memo === "undefined") memo = fn.apply(this, arguments);
		return memo;
	};
};

var isOldIE = memoize(function () {
	// Test for IE <= 9 as proposed by Browserhacks
	// @see http://browserhacks.com/#hack-e71d8692f65334173fee715c222cb805
	// Tests for existence of standard globals is to allow style-loader
	// to operate correctly into non-standard environments
	// @see https://github.com/webpack-contrib/style-loader/issues/177
	return window && document && document.all && !window.atob;
});

var getTarget = function (target, parent) {
  if (parent){
    return parent.querySelector(target);
  }
  return document.querySelector(target);
};

var getElement = (function (fn) {
	var memo = {};

	return function(target, parent) {
                // If passing function in options, then use it for resolve "head" element.
                // Useful for Shadow Root style i.e
                // {
                //   insertInto: function () { return document.querySelector("#foo").shadowRoot }
                // }
                if (typeof target === 'function') {
                        return target();
                }
                if (typeof memo[target] === "undefined") {
			var styleTarget = getTarget.call(this, target, parent);
			// Special case to return head of iframe instead of iframe itself
			if (window.HTMLIFrameElement && styleTarget instanceof window.HTMLIFrameElement) {
				try {
					// This will throw an exception if access to iframe is blocked
					// due to cross-origin restrictions
					styleTarget = styleTarget.contentDocument.head;
				} catch(e) {
					styleTarget = null;
				}
			}
			memo[target] = styleTarget;
		}
		return memo[target]
	};
})();

var singleton = null;
var	singletonCounter = 0;
var	stylesInsertedAtTop = [];

var	fixUrls = __webpack_require__(/*! ./urls */ "./node_modules/style-loader/lib/urls.js");

module.exports = function(list, options) {
	if (typeof DEBUG !== "undefined" && DEBUG) {
		if (typeof document !== "object") throw new Error("The style-loader cannot be used in a non-browser environment");
	}

	options = options || {};

	options.attrs = typeof options.attrs === "object" ? options.attrs : {};

	// Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
	// tags it will allow on a page
	if (!options.singleton && typeof options.singleton !== "boolean") options.singleton = isOldIE();

	// By default, add <style> tags to the <head> element
        if (!options.insertInto) options.insertInto = "head";

	// By default, add <style> tags to the bottom of the target
	if (!options.insertAt) options.insertAt = "bottom";

	var styles = listToStyles(list, options);

	addStylesToDom(styles, options);

	return function update (newList) {
		var mayRemove = [];

		for (var i = 0; i < styles.length; i++) {
			var item = styles[i];
			var domStyle = stylesInDom[item.id];

			domStyle.refs--;
			mayRemove.push(domStyle);
		}

		if(newList) {
			var newStyles = listToStyles(newList, options);
			addStylesToDom(newStyles, options);
		}

		for (var i = 0; i < mayRemove.length; i++) {
			var domStyle = mayRemove[i];

			if(domStyle.refs === 0) {
				for (var j = 0; j < domStyle.parts.length; j++) domStyle.parts[j]();

				delete stylesInDom[domStyle.id];
			}
		}
	};
};

function addStylesToDom (styles, options) {
	for (var i = 0; i < styles.length; i++) {
		var item = styles[i];
		var domStyle = stylesInDom[item.id];

		if(domStyle) {
			domStyle.refs++;

			for(var j = 0; j < domStyle.parts.length; j++) {
				domStyle.parts[j](item.parts[j]);
			}

			for(; j < item.parts.length; j++) {
				domStyle.parts.push(addStyle(item.parts[j], options));
			}
		} else {
			var parts = [];

			for(var j = 0; j < item.parts.length; j++) {
				parts.push(addStyle(item.parts[j], options));
			}

			stylesInDom[item.id] = {id: item.id, refs: 1, parts: parts};
		}
	}
}

function listToStyles (list, options) {
	var styles = [];
	var newStyles = {};

	for (var i = 0; i < list.length; i++) {
		var item = list[i];
		var id = options.base ? item[0] + options.base : item[0];
		var css = item[1];
		var media = item[2];
		var sourceMap = item[3];
		var part = {css: css, media: media, sourceMap: sourceMap};

		if(!newStyles[id]) styles.push(newStyles[id] = {id: id, parts: [part]});
		else newStyles[id].parts.push(part);
	}

	return styles;
}

function insertStyleElement (options, style) {
	var target = getElement(options.insertInto)

	if (!target) {
		throw new Error("Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid.");
	}

	var lastStyleElementInsertedAtTop = stylesInsertedAtTop[stylesInsertedAtTop.length - 1];

	if (options.insertAt === "top") {
		if (!lastStyleElementInsertedAtTop) {
			target.insertBefore(style, target.firstChild);
		} else if (lastStyleElementInsertedAtTop.nextSibling) {
			target.insertBefore(style, lastStyleElementInsertedAtTop.nextSibling);
		} else {
			target.appendChild(style);
		}
		stylesInsertedAtTop.push(style);
	} else if (options.insertAt === "bottom") {
		target.appendChild(style);
	} else if (typeof options.insertAt === "object" && options.insertAt.before) {
		var nextSibling = getElement(options.insertAt.before, target);
		target.insertBefore(style, nextSibling);
	} else {
		throw new Error("[Style Loader]\n\n Invalid value for parameter 'insertAt' ('options.insertAt') found.\n Must be 'top', 'bottom', or Object.\n (https://github.com/webpack-contrib/style-loader#insertat)\n");
	}
}

function removeStyleElement (style) {
	if (style.parentNode === null) return false;
	style.parentNode.removeChild(style);

	var idx = stylesInsertedAtTop.indexOf(style);
	if(idx >= 0) {
		stylesInsertedAtTop.splice(idx, 1);
	}
}

function createStyleElement (options) {
	var style = document.createElement("style");

	if(options.attrs.type === undefined) {
		options.attrs.type = "text/css";
	}

	if(options.attrs.nonce === undefined) {
		var nonce = getNonce();
		if (nonce) {
			options.attrs.nonce = nonce;
		}
	}

	addAttrs(style, options.attrs);
	insertStyleElement(options, style);

	return style;
}

function createLinkElement (options) {
	var link = document.createElement("link");

	if(options.attrs.type === undefined) {
		options.attrs.type = "text/css";
	}
	options.attrs.rel = "stylesheet";

	addAttrs(link, options.attrs);
	insertStyleElement(options, link);

	return link;
}

function addAttrs (el, attrs) {
	Object.keys(attrs).forEach(function (key) {
		el.setAttribute(key, attrs[key]);
	});
}

function getNonce() {
	if (false) {}

	return __webpack_require__.nc;
}

function addStyle (obj, options) {
	var style, update, remove, result;

	// If a transform function was defined, run it on the css
	if (options.transform && obj.css) {
	    result = typeof options.transform === 'function'
		 ? options.transform(obj.css) 
		 : options.transform.default(obj.css);

	    if (result) {
	    	// If transform returns a value, use that instead of the original css.
	    	// This allows running runtime transformations on the css.
	    	obj.css = result;
	    } else {
	    	// If the transform function returns a falsy value, don't add this css.
	    	// This allows conditional loading of css
	    	return function() {
	    		// noop
	    	};
	    }
	}

	if (options.singleton) {
		var styleIndex = singletonCounter++;

		style = singleton || (singleton = createStyleElement(options));

		update = applyToSingletonTag.bind(null, style, styleIndex, false);
		remove = applyToSingletonTag.bind(null, style, styleIndex, true);

	} else if (
		obj.sourceMap &&
		typeof URL === "function" &&
		typeof URL.createObjectURL === "function" &&
		typeof URL.revokeObjectURL === "function" &&
		typeof Blob === "function" &&
		typeof btoa === "function"
	) {
		style = createLinkElement(options);
		update = updateLink.bind(null, style, options);
		remove = function () {
			removeStyleElement(style);

			if(style.href) URL.revokeObjectURL(style.href);
		};
	} else {
		style = createStyleElement(options);
		update = applyToTag.bind(null, style);
		remove = function () {
			removeStyleElement(style);
		};
	}

	update(obj);

	return function updateStyle (newObj) {
		if (newObj) {
			if (
				newObj.css === obj.css &&
				newObj.media === obj.media &&
				newObj.sourceMap === obj.sourceMap
			) {
				return;
			}

			update(obj = newObj);
		} else {
			remove();
		}
	};
}

var replaceText = (function () {
	var textStore = [];

	return function (index, replacement) {
		textStore[index] = replacement;

		return textStore.filter(Boolean).join('\n');
	};
})();

function applyToSingletonTag (style, index, remove, obj) {
	var css = remove ? "" : obj.css;

	if (style.styleSheet) {
		style.styleSheet.cssText = replaceText(index, css);
	} else {
		var cssNode = document.createTextNode(css);
		var childNodes = style.childNodes;

		if (childNodes[index]) style.removeChild(childNodes[index]);

		if (childNodes.length) {
			style.insertBefore(cssNode, childNodes[index]);
		} else {
			style.appendChild(cssNode);
		}
	}
}

function applyToTag (style, obj) {
	var css = obj.css;
	var media = obj.media;

	if(media) {
		style.setAttribute("media", media)
	}

	if(style.styleSheet) {
		style.styleSheet.cssText = css;
	} else {
		while(style.firstChild) {
			style.removeChild(style.firstChild);
		}

		style.appendChild(document.createTextNode(css));
	}
}

function updateLink (link, options, obj) {
	var css = obj.css;
	var sourceMap = obj.sourceMap;

	/*
		If convertToAbsoluteUrls isn't defined, but sourcemaps are enabled
		and there is no publicPath defined then lets turn convertToAbsoluteUrls
		on by default.  Otherwise default to the convertToAbsoluteUrls option
		directly
	*/
	var autoFixUrls = options.convertToAbsoluteUrls === undefined && sourceMap;

	if (options.convertToAbsoluteUrls || autoFixUrls) {
		css = fixUrls(css);
	}

	if (sourceMap) {
		// http://stackoverflow.com/a/26603875
		css += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))) + " */";
	}

	var blob = new Blob([css], { type: "text/css" });

	var oldSrc = link.href;

	link.href = URL.createObjectURL(blob);

	if(oldSrc) URL.revokeObjectURL(oldSrc);
}


/***/ }),

/***/ "./node_modules/style-loader/lib/urls.js":
/*!***********************************************!*\
  !*** ./node_modules/style-loader/lib/urls.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {


/**
 * When source maps are enabled, `style-loader` uses a link element with a data-uri to
 * embed the css on the page. This breaks all relative urls because now they are relative to a
 * bundle instead of the current page.
 *
 * One solution is to only use full urls, but that may be impossible.
 *
 * Instead, this function "fixes" the relative urls to be absolute according to the current page location.
 *
 * A rudimentary test suite is located at `test/fixUrls.js` and can be run via the `npm test` command.
 *
 */

module.exports = function (css) {
  // get current location
  var location = typeof window !== "undefined" && window.location;

  if (!location) {
    throw new Error("fixUrls requires window.location");
  }

	// blank or null?
	if (!css || typeof css !== "string") {
	  return css;
  }

  var baseUrl = location.protocol + "//" + location.host;
  var currentDir = baseUrl + location.pathname.replace(/\/[^\/]*$/, "/");

	// convert each url(...)
	/*
	This regular expression is just a way to recursively match brackets within
	a string.

	 /url\s*\(  = Match on the word "url" with any whitespace after it and then a parens
	   (  = Start a capturing group
	     (?:  = Start a non-capturing group
	         [^)(]  = Match anything that isn't a parentheses
	         |  = OR
	         \(  = Match a start parentheses
	             (?:  = Start another non-capturing groups
	                 [^)(]+  = Match anything that isn't a parentheses
	                 |  = OR
	                 \(  = Match a start parentheses
	                     [^)(]*  = Match anything that isn't a parentheses
	                 \)  = Match a end parentheses
	             )  = End Group
              *\) = Match anything and then a close parens
          )  = Close non-capturing group
          *  = Match anything
       )  = Close capturing group
	 \)  = Match a close parens

	 /gi  = Get all matches, not the first.  Be case insensitive.
	 */
	var fixedCss = css.replace(/url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi, function(fullMatch, origUrl) {
		// strip quotes (if they exist)
		var unquotedOrigUrl = origUrl
			.trim()
			.replace(/^"(.*)"$/, function(o, $1){ return $1; })
			.replace(/^'(.*)'$/, function(o, $1){ return $1; });

		// already a full url? no change
		if (/^(#|data:|http:\/\/|https:\/\/|file:\/\/\/|\s*$)/i.test(unquotedOrigUrl)) {
		  return fullMatch;
		}

		// convert the url to a full url
		var newUrl;

		if (unquotedOrigUrl.indexOf("//") === 0) {
		  	//TODO: should we add protocol?
			newUrl = unquotedOrigUrl;
		} else if (unquotedOrigUrl.indexOf("/") === 0) {
			// path should be relative to the base url
			newUrl = baseUrl + unquotedOrigUrl; // already starts with '/'
		} else {
			// path should be relative to current directory
			newUrl = currentDir + unquotedOrigUrl.replace(/^\.\//, ""); // Strip leading './'
		}

		// send back the fixed url(...)
		return "url(" + JSON.stringify(newUrl) + ")";
	});

	// send back the fixed css
	return fixedCss;
};


/***/ }),

/***/ "./resources/js/angle/modules/extras/jqcloud.js":
/*!******************************************************!*\
  !*** ./resources/js/angle/modules/extras/jqcloud.js ***!
  \******************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function($) {/* harmony import */ var jqcloud2_dist_jqcloud_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jqcloud2/dist/jqcloud.js */ "./node_modules/jqcloud2/dist/jqcloud.js");
/* harmony import */ var jqcloud2_dist_jqcloud_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jqcloud2_dist_jqcloud_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var jqcloud2_dist_jqcloud_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! jqcloud2/dist/jqcloud.css */ "./node_modules/jqcloud2/dist/jqcloud.css");
/* harmony import */ var jqcloud2_dist_jqcloud_css__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(jqcloud2_dist_jqcloud_css__WEBPACK_IMPORTED_MODULE_1__);
// JQCloud
// -----------------------------------
// JQCLOUD



(function () {
  'use strict';

  $(initWordCloud);

  function initWordCloud() {
    if (!$.fn.jQCloud) return; //Create an array of word objects, each representing a word in the cloud

    var word_array = [{
      text: 'Lorem',
      weight: 13
      /*link: 'http://themicon.co'*/

    }, {
      text: 'Ipsum',
      weight: 10.5
    }, {
      text: 'Dolor',
      weight: 9.4
    }, {
      text: 'Sit',
      weight: 8
    }, {
      text: 'Amet',
      weight: 6.2
    }, {
      text: 'Consectetur',
      weight: 5
    }, {
      text: 'Adipiscing',
      weight: 5
    }, {
      text: 'Sit',
      weight: 8
    }, {
      text: 'Amet',
      weight: 6.2
    }, {
      text: 'Consectetur',
      weight: 5
    }, {
      text: 'Adipiscing',
      weight: 5
    }];
    $("#jqcloud").jQCloud(word_array, {
      width: 240,
      height: 200,
      steps: 7
    });
  }
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 25:
/*!************************************************************!*\
  !*** multi ./resources/js/angle/modules/extras/jqcloud.js ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! X:\proyect\wb\angle4\development\laravel\resources\js\angle\modules\extras\jqcloud.js */"./resources/js/angle/modules/extras/jqcloud.js");


/***/ })

},[[25,"/js/manifest","/js/vendor"]]]);