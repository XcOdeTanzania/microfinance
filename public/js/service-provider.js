/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/axios/index.js":
/*!*************************************!*\
  !*** ./node_modules/axios/index.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! ./lib/axios */ "./node_modules/axios/lib/axios.js");

/***/ }),

/***/ "./node_modules/axios/lib/adapters/xhr.js":
/*!************************************************!*\
  !*** ./node_modules/axios/lib/adapters/xhr.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(/*! ./../utils */ "./node_modules/axios/lib/utils.js");
var settle = __webpack_require__(/*! ./../core/settle */ "./node_modules/axios/lib/core/settle.js");
var buildURL = __webpack_require__(/*! ./../helpers/buildURL */ "./node_modules/axios/lib/helpers/buildURL.js");
var parseHeaders = __webpack_require__(/*! ./../helpers/parseHeaders */ "./node_modules/axios/lib/helpers/parseHeaders.js");
var isURLSameOrigin = __webpack_require__(/*! ./../helpers/isURLSameOrigin */ "./node_modules/axios/lib/helpers/isURLSameOrigin.js");
var createError = __webpack_require__(/*! ../core/createError */ "./node_modules/axios/lib/core/createError.js");

module.exports = function xhrAdapter(config) {
  return new Promise(function dispatchXhrRequest(resolve, reject) {
    var requestData = config.data;
    var requestHeaders = config.headers;

    if (utils.isFormData(requestData)) {
      delete requestHeaders['Content-Type']; // Let the browser set it
    }

    var request = new XMLHttpRequest();

    // HTTP basic authentication
    if (config.auth) {
      var username = config.auth.username || '';
      var password = config.auth.password || '';
      requestHeaders.Authorization = 'Basic ' + btoa(username + ':' + password);
    }

    request.open(config.method.toUpperCase(), buildURL(config.url, config.params, config.paramsSerializer), true);

    // Set the request timeout in MS
    request.timeout = config.timeout;

    // Listen for ready state
    request.onreadystatechange = function handleLoad() {
      if (!request || request.readyState !== 4) {
        return;
      }

      // The request errored out and we didn't get a response, this will be
      // handled by onerror instead
      // With one exception: request that using file: protocol, most browsers
      // will return status as 0 even though it's a successful request
      if (request.status === 0 && !(request.responseURL && request.responseURL.indexOf('file:') === 0)) {
        return;
      }

      // Prepare the response
      var responseHeaders = 'getAllResponseHeaders' in request ? parseHeaders(request.getAllResponseHeaders()) : null;
      var responseData = !config.responseType || config.responseType === 'text' ? request.responseText : request.response;
      var response = {
        data: responseData,
        status: request.status,
        statusText: request.statusText,
        headers: responseHeaders,
        config: config,
        request: request
      };

      settle(resolve, reject, response);

      // Clean up request
      request = null;
    };

    // Handle browser request cancellation (as opposed to a manual cancellation)
    request.onabort = function handleAbort() {
      if (!request) {
        return;
      }

      reject(createError('Request aborted', config, 'ECONNABORTED', request));

      // Clean up request
      request = null;
    };

    // Handle low level network errors
    request.onerror = function handleError() {
      // Real errors are hidden from us by the browser
      // onerror should only fire if it's a network error
      reject(createError('Network Error', config, null, request));

      // Clean up request
      request = null;
    };

    // Handle timeout
    request.ontimeout = function handleTimeout() {
      reject(createError('timeout of ' + config.timeout + 'ms exceeded', config, 'ECONNABORTED',
        request));

      // Clean up request
      request = null;
    };

    // Add xsrf header
    // This is only done if running in a standard browser environment.
    // Specifically not if we're in a web worker, or react-native.
    if (utils.isStandardBrowserEnv()) {
      var cookies = __webpack_require__(/*! ./../helpers/cookies */ "./node_modules/axios/lib/helpers/cookies.js");

      // Add xsrf header
      var xsrfValue = (config.withCredentials || isURLSameOrigin(config.url)) && config.xsrfCookieName ?
        cookies.read(config.xsrfCookieName) :
        undefined;

      if (xsrfValue) {
        requestHeaders[config.xsrfHeaderName] = xsrfValue;
      }
    }

    // Add headers to the request
    if ('setRequestHeader' in request) {
      utils.forEach(requestHeaders, function setRequestHeader(val, key) {
        if (typeof requestData === 'undefined' && key.toLowerCase() === 'content-type') {
          // Remove Content-Type if data is undefined
          delete requestHeaders[key];
        } else {
          // Otherwise add header to the request
          request.setRequestHeader(key, val);
        }
      });
    }

    // Add withCredentials to request if needed
    if (config.withCredentials) {
      request.withCredentials = true;
    }

    // Add responseType to request if needed
    if (config.responseType) {
      try {
        request.responseType = config.responseType;
      } catch (e) {
        // Expected DOMException thrown by browsers not compatible XMLHttpRequest Level 2.
        // But, this can be suppressed for 'json' type as it can be parsed by default 'transformResponse' function.
        if (config.responseType !== 'json') {
          throw e;
        }
      }
    }

    // Handle progress if needed
    if (typeof config.onDownloadProgress === 'function') {
      request.addEventListener('progress', config.onDownloadProgress);
    }

    // Not all browsers support upload events
    if (typeof config.onUploadProgress === 'function' && request.upload) {
      request.upload.addEventListener('progress', config.onUploadProgress);
    }

    if (config.cancelToken) {
      // Handle cancellation
      config.cancelToken.promise.then(function onCanceled(cancel) {
        if (!request) {
          return;
        }

        request.abort();
        reject(cancel);
        // Clean up request
        request = null;
      });
    }

    if (requestData === undefined) {
      requestData = null;
    }

    // Send the request
    request.send(requestData);
  });
};


/***/ }),

/***/ "./node_modules/axios/lib/axios.js":
/*!*****************************************!*\
  !*** ./node_modules/axios/lib/axios.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(/*! ./utils */ "./node_modules/axios/lib/utils.js");
var bind = __webpack_require__(/*! ./helpers/bind */ "./node_modules/axios/lib/helpers/bind.js");
var Axios = __webpack_require__(/*! ./core/Axios */ "./node_modules/axios/lib/core/Axios.js");
var mergeConfig = __webpack_require__(/*! ./core/mergeConfig */ "./node_modules/axios/lib/core/mergeConfig.js");
var defaults = __webpack_require__(/*! ./defaults */ "./node_modules/axios/lib/defaults.js");

/**
 * Create an instance of Axios
 *
 * @param {Object} defaultConfig The default config for the instance
 * @return {Axios} A new instance of Axios
 */
function createInstance(defaultConfig) {
  var context = new Axios(defaultConfig);
  var instance = bind(Axios.prototype.request, context);

  // Copy axios.prototype to instance
  utils.extend(instance, Axios.prototype, context);

  // Copy context to instance
  utils.extend(instance, context);

  return instance;
}

// Create the default instance to be exported
var axios = createInstance(defaults);

// Expose Axios class to allow class inheritance
axios.Axios = Axios;

// Factory for creating new instances
axios.create = function create(instanceConfig) {
  return createInstance(mergeConfig(axios.defaults, instanceConfig));
};

// Expose Cancel & CancelToken
axios.Cancel = __webpack_require__(/*! ./cancel/Cancel */ "./node_modules/axios/lib/cancel/Cancel.js");
axios.CancelToken = __webpack_require__(/*! ./cancel/CancelToken */ "./node_modules/axios/lib/cancel/CancelToken.js");
axios.isCancel = __webpack_require__(/*! ./cancel/isCancel */ "./node_modules/axios/lib/cancel/isCancel.js");

// Expose all/spread
axios.all = function all(promises) {
  return Promise.all(promises);
};
axios.spread = __webpack_require__(/*! ./helpers/spread */ "./node_modules/axios/lib/helpers/spread.js");

module.exports = axios;

// Allow use of default import syntax in TypeScript
module.exports.default = axios;


/***/ }),

/***/ "./node_modules/axios/lib/cancel/Cancel.js":
/*!*************************************************!*\
  !*** ./node_modules/axios/lib/cancel/Cancel.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


/**
 * A `Cancel` is an object that is thrown when an operation is canceled.
 *
 * @class
 * @param {string=} message The message.
 */
function Cancel(message) {
  this.message = message;
}

Cancel.prototype.toString = function toString() {
  return 'Cancel' + (this.message ? ': ' + this.message : '');
};

Cancel.prototype.__CANCEL__ = true;

module.exports = Cancel;


/***/ }),

/***/ "./node_modules/axios/lib/cancel/CancelToken.js":
/*!******************************************************!*\
  !*** ./node_modules/axios/lib/cancel/CancelToken.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var Cancel = __webpack_require__(/*! ./Cancel */ "./node_modules/axios/lib/cancel/Cancel.js");

/**
 * A `CancelToken` is an object that can be used to request cancellation of an operation.
 *
 * @class
 * @param {Function} executor The executor function.
 */
function CancelToken(executor) {
  if (typeof executor !== 'function') {
    throw new TypeError('executor must be a function.');
  }

  var resolvePromise;
  this.promise = new Promise(function promiseExecutor(resolve) {
    resolvePromise = resolve;
  });

  var token = this;
  executor(function cancel(message) {
    if (token.reason) {
      // Cancellation has already been requested
      return;
    }

    token.reason = new Cancel(message);
    resolvePromise(token.reason);
  });
}

/**
 * Throws a `Cancel` if cancellation has been requested.
 */
CancelToken.prototype.throwIfRequested = function throwIfRequested() {
  if (this.reason) {
    throw this.reason;
  }
};

/**
 * Returns an object that contains a new `CancelToken` and a function that, when called,
 * cancels the `CancelToken`.
 */
CancelToken.source = function source() {
  var cancel;
  var token = new CancelToken(function executor(c) {
    cancel = c;
  });
  return {
    token: token,
    cancel: cancel
  };
};

module.exports = CancelToken;


/***/ }),

/***/ "./node_modules/axios/lib/cancel/isCancel.js":
/*!***************************************************!*\
  !*** ./node_modules/axios/lib/cancel/isCancel.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function isCancel(value) {
  return !!(value && value.__CANCEL__);
};


/***/ }),

/***/ "./node_modules/axios/lib/core/Axios.js":
/*!**********************************************!*\
  !*** ./node_modules/axios/lib/core/Axios.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(/*! ./../utils */ "./node_modules/axios/lib/utils.js");
var buildURL = __webpack_require__(/*! ../helpers/buildURL */ "./node_modules/axios/lib/helpers/buildURL.js");
var InterceptorManager = __webpack_require__(/*! ./InterceptorManager */ "./node_modules/axios/lib/core/InterceptorManager.js");
var dispatchRequest = __webpack_require__(/*! ./dispatchRequest */ "./node_modules/axios/lib/core/dispatchRequest.js");
var mergeConfig = __webpack_require__(/*! ./mergeConfig */ "./node_modules/axios/lib/core/mergeConfig.js");

/**
 * Create a new instance of Axios
 *
 * @param {Object} instanceConfig The default config for the instance
 */
function Axios(instanceConfig) {
  this.defaults = instanceConfig;
  this.interceptors = {
    request: new InterceptorManager(),
    response: new InterceptorManager()
  };
}

/**
 * Dispatch a request
 *
 * @param {Object} config The config specific for this request (merged with this.defaults)
 */
Axios.prototype.request = function request(config) {
  /*eslint no-param-reassign:0*/
  // Allow for axios('example/url'[, config]) a la fetch API
  if (typeof config === 'string') {
    config = arguments[1] || {};
    config.url = arguments[0];
  } else {
    config = config || {};
  }

  config = mergeConfig(this.defaults, config);
  config.method = config.method ? config.method.toLowerCase() : 'get';

  // Hook up interceptors middleware
  var chain = [dispatchRequest, undefined];
  var promise = Promise.resolve(config);

  this.interceptors.request.forEach(function unshiftRequestInterceptors(interceptor) {
    chain.unshift(interceptor.fulfilled, interceptor.rejected);
  });

  this.interceptors.response.forEach(function pushResponseInterceptors(interceptor) {
    chain.push(interceptor.fulfilled, interceptor.rejected);
  });

  while (chain.length) {
    promise = promise.then(chain.shift(), chain.shift());
  }

  return promise;
};

Axios.prototype.getUri = function getUri(config) {
  config = mergeConfig(this.defaults, config);
  return buildURL(config.url, config.params, config.paramsSerializer).replace(/^\?/, '');
};

// Provide aliases for supported request methods
utils.forEach(['delete', 'get', 'head', 'options'], function forEachMethodNoData(method) {
  /*eslint func-names:0*/
  Axios.prototype[method] = function(url, config) {
    return this.request(utils.merge(config || {}, {
      method: method,
      url: url
    }));
  };
});

utils.forEach(['post', 'put', 'patch'], function forEachMethodWithData(method) {
  /*eslint func-names:0*/
  Axios.prototype[method] = function(url, data, config) {
    return this.request(utils.merge(config || {}, {
      method: method,
      url: url,
      data: data
    }));
  };
});

module.exports = Axios;


/***/ }),

/***/ "./node_modules/axios/lib/core/InterceptorManager.js":
/*!***********************************************************!*\
  !*** ./node_modules/axios/lib/core/InterceptorManager.js ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(/*! ./../utils */ "./node_modules/axios/lib/utils.js");

function InterceptorManager() {
  this.handlers = [];
}

/**
 * Add a new interceptor to the stack
 *
 * @param {Function} fulfilled The function to handle `then` for a `Promise`
 * @param {Function} rejected The function to handle `reject` for a `Promise`
 *
 * @return {Number} An ID used to remove interceptor later
 */
InterceptorManager.prototype.use = function use(fulfilled, rejected) {
  this.handlers.push({
    fulfilled: fulfilled,
    rejected: rejected
  });
  return this.handlers.length - 1;
};

/**
 * Remove an interceptor from the stack
 *
 * @param {Number} id The ID that was returned by `use`
 */
InterceptorManager.prototype.eject = function eject(id) {
  if (this.handlers[id]) {
    this.handlers[id] = null;
  }
};

/**
 * Iterate over all the registered interceptors
 *
 * This method is particularly useful for skipping over any
 * interceptors that may have become `null` calling `eject`.
 *
 * @param {Function} fn The function to call for each interceptor
 */
InterceptorManager.prototype.forEach = function forEach(fn) {
  utils.forEach(this.handlers, function forEachHandler(h) {
    if (h !== null) {
      fn(h);
    }
  });
};

module.exports = InterceptorManager;


/***/ }),

/***/ "./node_modules/axios/lib/core/createError.js":
/*!****************************************************!*\
  !*** ./node_modules/axios/lib/core/createError.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var enhanceError = __webpack_require__(/*! ./enhanceError */ "./node_modules/axios/lib/core/enhanceError.js");

/**
 * Create an Error with the specified message, config, error code, request and response.
 *
 * @param {string} message The error message.
 * @param {Object} config The config.
 * @param {string} [code] The error code (for example, 'ECONNABORTED').
 * @param {Object} [request] The request.
 * @param {Object} [response] The response.
 * @returns {Error} The created error.
 */
module.exports = function createError(message, config, code, request, response) {
  var error = new Error(message);
  return enhanceError(error, config, code, request, response);
};


/***/ }),

/***/ "./node_modules/axios/lib/core/dispatchRequest.js":
/*!********************************************************!*\
  !*** ./node_modules/axios/lib/core/dispatchRequest.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(/*! ./../utils */ "./node_modules/axios/lib/utils.js");
var transformData = __webpack_require__(/*! ./transformData */ "./node_modules/axios/lib/core/transformData.js");
var isCancel = __webpack_require__(/*! ../cancel/isCancel */ "./node_modules/axios/lib/cancel/isCancel.js");
var defaults = __webpack_require__(/*! ../defaults */ "./node_modules/axios/lib/defaults.js");
var isAbsoluteURL = __webpack_require__(/*! ./../helpers/isAbsoluteURL */ "./node_modules/axios/lib/helpers/isAbsoluteURL.js");
var combineURLs = __webpack_require__(/*! ./../helpers/combineURLs */ "./node_modules/axios/lib/helpers/combineURLs.js");

/**
 * Throws a `Cancel` if cancellation has been requested.
 */
function throwIfCancellationRequested(config) {
  if (config.cancelToken) {
    config.cancelToken.throwIfRequested();
  }
}

/**
 * Dispatch a request to the server using the configured adapter.
 *
 * @param {object} config The config that is to be used for the request
 * @returns {Promise} The Promise to be fulfilled
 */
module.exports = function dispatchRequest(config) {
  throwIfCancellationRequested(config);

  // Support baseURL config
  if (config.baseURL && !isAbsoluteURL(config.url)) {
    config.url = combineURLs(config.baseURL, config.url);
  }

  // Ensure headers exist
  config.headers = config.headers || {};

  // Transform request data
  config.data = transformData(
    config.data,
    config.headers,
    config.transformRequest
  );

  // Flatten headers
  config.headers = utils.merge(
    config.headers.common || {},
    config.headers[config.method] || {},
    config.headers || {}
  );

  utils.forEach(
    ['delete', 'get', 'head', 'post', 'put', 'patch', 'common'],
    function cleanHeaderConfig(method) {
      delete config.headers[method];
    }
  );

  var adapter = config.adapter || defaults.adapter;

  return adapter(config).then(function onAdapterResolution(response) {
    throwIfCancellationRequested(config);

    // Transform response data
    response.data = transformData(
      response.data,
      response.headers,
      config.transformResponse
    );

    return response;
  }, function onAdapterRejection(reason) {
    if (!isCancel(reason)) {
      throwIfCancellationRequested(config);

      // Transform response data
      if (reason && reason.response) {
        reason.response.data = transformData(
          reason.response.data,
          reason.response.headers,
          config.transformResponse
        );
      }
    }

    return Promise.reject(reason);
  });
};


/***/ }),

/***/ "./node_modules/axios/lib/core/enhanceError.js":
/*!*****************************************************!*\
  !*** ./node_modules/axios/lib/core/enhanceError.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


/**
 * Update an Error with the specified config, error code, and response.
 *
 * @param {Error} error The error to update.
 * @param {Object} config The config.
 * @param {string} [code] The error code (for example, 'ECONNABORTED').
 * @param {Object} [request] The request.
 * @param {Object} [response] The response.
 * @returns {Error} The error.
 */
module.exports = function enhanceError(error, config, code, request, response) {
  error.config = config;
  if (code) {
    error.code = code;
  }

  error.request = request;
  error.response = response;
  error.isAxiosError = true;

  error.toJSON = function() {
    return {
      // Standard
      message: this.message,
      name: this.name,
      // Microsoft
      description: this.description,
      number: this.number,
      // Mozilla
      fileName: this.fileName,
      lineNumber: this.lineNumber,
      columnNumber: this.columnNumber,
      stack: this.stack,
      // Axios
      config: this.config,
      code: this.code
    };
  };
  return error;
};


/***/ }),

/***/ "./node_modules/axios/lib/core/mergeConfig.js":
/*!****************************************************!*\
  !*** ./node_modules/axios/lib/core/mergeConfig.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(/*! ../utils */ "./node_modules/axios/lib/utils.js");

/**
 * Config-specific merge-function which creates a new config-object
 * by merging two configuration objects together.
 *
 * @param {Object} config1
 * @param {Object} config2
 * @returns {Object} New object resulting from merging config2 to config1
 */
module.exports = function mergeConfig(config1, config2) {
  // eslint-disable-next-line no-param-reassign
  config2 = config2 || {};
  var config = {};

  utils.forEach(['url', 'method', 'params', 'data'], function valueFromConfig2(prop) {
    if (typeof config2[prop] !== 'undefined') {
      config[prop] = config2[prop];
    }
  });

  utils.forEach(['headers', 'auth', 'proxy'], function mergeDeepProperties(prop) {
    if (utils.isObject(config2[prop])) {
      config[prop] = utils.deepMerge(config1[prop], config2[prop]);
    } else if (typeof config2[prop] !== 'undefined') {
      config[prop] = config2[prop];
    } else if (utils.isObject(config1[prop])) {
      config[prop] = utils.deepMerge(config1[prop]);
    } else if (typeof config1[prop] !== 'undefined') {
      config[prop] = config1[prop];
    }
  });

  utils.forEach([
    'baseURL', 'transformRequest', 'transformResponse', 'paramsSerializer',
    'timeout', 'withCredentials', 'adapter', 'responseType', 'xsrfCookieName',
    'xsrfHeaderName', 'onUploadProgress', 'onDownloadProgress', 'maxContentLength',
    'validateStatus', 'maxRedirects', 'httpAgent', 'httpsAgent', 'cancelToken',
    'socketPath'
  ], function defaultToConfig2(prop) {
    if (typeof config2[prop] !== 'undefined') {
      config[prop] = config2[prop];
    } else if (typeof config1[prop] !== 'undefined') {
      config[prop] = config1[prop];
    }
  });

  return config;
};


/***/ }),

/***/ "./node_modules/axios/lib/core/settle.js":
/*!***********************************************!*\
  !*** ./node_modules/axios/lib/core/settle.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var createError = __webpack_require__(/*! ./createError */ "./node_modules/axios/lib/core/createError.js");

/**
 * Resolve or reject a Promise based on response status.
 *
 * @param {Function} resolve A function that resolves the promise.
 * @param {Function} reject A function that rejects the promise.
 * @param {object} response The response.
 */
module.exports = function settle(resolve, reject, response) {
  var validateStatus = response.config.validateStatus;
  if (!validateStatus || validateStatus(response.status)) {
    resolve(response);
  } else {
    reject(createError(
      'Request failed with status code ' + response.status,
      response.config,
      null,
      response.request,
      response
    ));
  }
};


/***/ }),

/***/ "./node_modules/axios/lib/core/transformData.js":
/*!******************************************************!*\
  !*** ./node_modules/axios/lib/core/transformData.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(/*! ./../utils */ "./node_modules/axios/lib/utils.js");

/**
 * Transform the data for a request or a response
 *
 * @param {Object|String} data The data to be transformed
 * @param {Array} headers The headers for the request or response
 * @param {Array|Function} fns A single function or Array of functions
 * @returns {*} The resulting transformed data
 */
module.exports = function transformData(data, headers, fns) {
  /*eslint no-param-reassign:0*/
  utils.forEach(fns, function transform(fn) {
    data = fn(data, headers);
  });

  return data;
};


/***/ }),

/***/ "./node_modules/axios/lib/defaults.js":
/*!********************************************!*\
  !*** ./node_modules/axios/lib/defaults.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(process) {

var utils = __webpack_require__(/*! ./utils */ "./node_modules/axios/lib/utils.js");
var normalizeHeaderName = __webpack_require__(/*! ./helpers/normalizeHeaderName */ "./node_modules/axios/lib/helpers/normalizeHeaderName.js");

var DEFAULT_CONTENT_TYPE = {
  'Content-Type': 'application/x-www-form-urlencoded'
};

function setContentTypeIfUnset(headers, value) {
  if (!utils.isUndefined(headers) && utils.isUndefined(headers['Content-Type'])) {
    headers['Content-Type'] = value;
  }
}

function getDefaultAdapter() {
  var adapter;
  // Only Node.JS has a process variable that is of [[Class]] process
  if (typeof process !== 'undefined' && Object.prototype.toString.call(process) === '[object process]') {
    // For node use HTTP adapter
    adapter = __webpack_require__(/*! ./adapters/http */ "./node_modules/axios/lib/adapters/xhr.js");
  } else if (typeof XMLHttpRequest !== 'undefined') {
    // For browsers use XHR adapter
    adapter = __webpack_require__(/*! ./adapters/xhr */ "./node_modules/axios/lib/adapters/xhr.js");
  }
  return adapter;
}

var defaults = {
  adapter: getDefaultAdapter(),

  transformRequest: [function transformRequest(data, headers) {
    normalizeHeaderName(headers, 'Accept');
    normalizeHeaderName(headers, 'Content-Type');
    if (utils.isFormData(data) ||
      utils.isArrayBuffer(data) ||
      utils.isBuffer(data) ||
      utils.isStream(data) ||
      utils.isFile(data) ||
      utils.isBlob(data)
    ) {
      return data;
    }
    if (utils.isArrayBufferView(data)) {
      return data.buffer;
    }
    if (utils.isURLSearchParams(data)) {
      setContentTypeIfUnset(headers, 'application/x-www-form-urlencoded;charset=utf-8');
      return data.toString();
    }
    if (utils.isObject(data)) {
      setContentTypeIfUnset(headers, 'application/json;charset=utf-8');
      return JSON.stringify(data);
    }
    return data;
  }],

  transformResponse: [function transformResponse(data) {
    /*eslint no-param-reassign:0*/
    if (typeof data === 'string') {
      try {
        data = JSON.parse(data);
      } catch (e) { /* Ignore */ }
    }
    return data;
  }],

  /**
   * A timeout in milliseconds to abort a request. If set to 0 (default) a
   * timeout is not created.
   */
  timeout: 0,

  xsrfCookieName: 'XSRF-TOKEN',
  xsrfHeaderName: 'X-XSRF-TOKEN',

  maxContentLength: -1,

  validateStatus: function validateStatus(status) {
    return status >= 200 && status < 300;
  }
};

defaults.headers = {
  common: {
    'Accept': 'application/json, text/plain, */*'
  }
};

utils.forEach(['delete', 'get', 'head'], function forEachMethodNoData(method) {
  defaults.headers[method] = {};
});

utils.forEach(['post', 'put', 'patch'], function forEachMethodWithData(method) {
  defaults.headers[method] = utils.merge(DEFAULT_CONTENT_TYPE);
});

module.exports = defaults;

/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../../process/browser.js */ "./node_modules/process/browser.js")))

/***/ }),

/***/ "./node_modules/axios/lib/helpers/bind.js":
/*!************************************************!*\
  !*** ./node_modules/axios/lib/helpers/bind.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function bind(fn, thisArg) {
  return function wrap() {
    var args = new Array(arguments.length);
    for (var i = 0; i < args.length; i++) {
      args[i] = arguments[i];
    }
    return fn.apply(thisArg, args);
  };
};


/***/ }),

/***/ "./node_modules/axios/lib/helpers/buildURL.js":
/*!****************************************************!*\
  !*** ./node_modules/axios/lib/helpers/buildURL.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(/*! ./../utils */ "./node_modules/axios/lib/utils.js");

function encode(val) {
  return encodeURIComponent(val).
    replace(/%40/gi, '@').
    replace(/%3A/gi, ':').
    replace(/%24/g, '$').
    replace(/%2C/gi, ',').
    replace(/%20/g, '+').
    replace(/%5B/gi, '[').
    replace(/%5D/gi, ']');
}

/**
 * Build a URL by appending params to the end
 *
 * @param {string} url The base of the url (e.g., http://www.google.com)
 * @param {object} [params] The params to be appended
 * @returns {string} The formatted url
 */
module.exports = function buildURL(url, params, paramsSerializer) {
  /*eslint no-param-reassign:0*/
  if (!params) {
    return url;
  }

  var serializedParams;
  if (paramsSerializer) {
    serializedParams = paramsSerializer(params);
  } else if (utils.isURLSearchParams(params)) {
    serializedParams = params.toString();
  } else {
    var parts = [];

    utils.forEach(params, function serialize(val, key) {
      if (val === null || typeof val === 'undefined') {
        return;
      }

      if (utils.isArray(val)) {
        key = key + '[]';
      } else {
        val = [val];
      }

      utils.forEach(val, function parseValue(v) {
        if (utils.isDate(v)) {
          v = v.toISOString();
        } else if (utils.isObject(v)) {
          v = JSON.stringify(v);
        }
        parts.push(encode(key) + '=' + encode(v));
      });
    });

    serializedParams = parts.join('&');
  }

  if (serializedParams) {
    var hashmarkIndex = url.indexOf('#');
    if (hashmarkIndex !== -1) {
      url = url.slice(0, hashmarkIndex);
    }

    url += (url.indexOf('?') === -1 ? '?' : '&') + serializedParams;
  }

  return url;
};


/***/ }),

/***/ "./node_modules/axios/lib/helpers/combineURLs.js":
/*!*******************************************************!*\
  !*** ./node_modules/axios/lib/helpers/combineURLs.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


/**
 * Creates a new URL by combining the specified URLs
 *
 * @param {string} baseURL The base URL
 * @param {string} relativeURL The relative URL
 * @returns {string} The combined URL
 */
module.exports = function combineURLs(baseURL, relativeURL) {
  return relativeURL
    ? baseURL.replace(/\/+$/, '') + '/' + relativeURL.replace(/^\/+/, '')
    : baseURL;
};


/***/ }),

/***/ "./node_modules/axios/lib/helpers/cookies.js":
/*!***************************************************!*\
  !*** ./node_modules/axios/lib/helpers/cookies.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(/*! ./../utils */ "./node_modules/axios/lib/utils.js");

module.exports = (
  utils.isStandardBrowserEnv() ?

  // Standard browser envs support document.cookie
    (function standardBrowserEnv() {
      return {
        write: function write(name, value, expires, path, domain, secure) {
          var cookie = [];
          cookie.push(name + '=' + encodeURIComponent(value));

          if (utils.isNumber(expires)) {
            cookie.push('expires=' + new Date(expires).toGMTString());
          }

          if (utils.isString(path)) {
            cookie.push('path=' + path);
          }

          if (utils.isString(domain)) {
            cookie.push('domain=' + domain);
          }

          if (secure === true) {
            cookie.push('secure');
          }

          document.cookie = cookie.join('; ');
        },

        read: function read(name) {
          var match = document.cookie.match(new RegExp('(^|;\\s*)(' + name + ')=([^;]*)'));
          return (match ? decodeURIComponent(match[3]) : null);
        },

        remove: function remove(name) {
          this.write(name, '', Date.now() - 86400000);
        }
      };
    })() :

  // Non standard browser env (web workers, react-native) lack needed support.
    (function nonStandardBrowserEnv() {
      return {
        write: function write() {},
        read: function read() { return null; },
        remove: function remove() {}
      };
    })()
);


/***/ }),

/***/ "./node_modules/axios/lib/helpers/isAbsoluteURL.js":
/*!*********************************************************!*\
  !*** ./node_modules/axios/lib/helpers/isAbsoluteURL.js ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


/**
 * Determines whether the specified URL is absolute
 *
 * @param {string} url The URL to test
 * @returns {boolean} True if the specified URL is absolute, otherwise false
 */
module.exports = function isAbsoluteURL(url) {
  // A URL is considered absolute if it begins with "<scheme>://" or "//" (protocol-relative URL).
  // RFC 3986 defines scheme name as a sequence of characters beginning with a letter and followed
  // by any combination of letters, digits, plus, period, or hyphen.
  return /^([a-z][a-z\d\+\-\.]*:)?\/\//i.test(url);
};


/***/ }),

/***/ "./node_modules/axios/lib/helpers/isURLSameOrigin.js":
/*!***********************************************************!*\
  !*** ./node_modules/axios/lib/helpers/isURLSameOrigin.js ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(/*! ./../utils */ "./node_modules/axios/lib/utils.js");

module.exports = (
  utils.isStandardBrowserEnv() ?

  // Standard browser envs have full support of the APIs needed to test
  // whether the request URL is of the same origin as current location.
    (function standardBrowserEnv() {
      var msie = /(msie|trident)/i.test(navigator.userAgent);
      var urlParsingNode = document.createElement('a');
      var originURL;

      /**
    * Parse a URL to discover it's components
    *
    * @param {String} url The URL to be parsed
    * @returns {Object}
    */
      function resolveURL(url) {
        var href = url;

        if (msie) {
        // IE needs attribute set twice to normalize properties
          urlParsingNode.setAttribute('href', href);
          href = urlParsingNode.href;
        }

        urlParsingNode.setAttribute('href', href);

        // urlParsingNode provides the UrlUtils interface - http://url.spec.whatwg.org/#urlutils
        return {
          href: urlParsingNode.href,
          protocol: urlParsingNode.protocol ? urlParsingNode.protocol.replace(/:$/, '') : '',
          host: urlParsingNode.host,
          search: urlParsingNode.search ? urlParsingNode.search.replace(/^\?/, '') : '',
          hash: urlParsingNode.hash ? urlParsingNode.hash.replace(/^#/, '') : '',
          hostname: urlParsingNode.hostname,
          port: urlParsingNode.port,
          pathname: (urlParsingNode.pathname.charAt(0) === '/') ?
            urlParsingNode.pathname :
            '/' + urlParsingNode.pathname
        };
      }

      originURL = resolveURL(window.location.href);

      /**
    * Determine if a URL shares the same origin as the current location
    *
    * @param {String} requestURL The URL to test
    * @returns {boolean} True if URL shares the same origin, otherwise false
    */
      return function isURLSameOrigin(requestURL) {
        var parsed = (utils.isString(requestURL)) ? resolveURL(requestURL) : requestURL;
        return (parsed.protocol === originURL.protocol &&
            parsed.host === originURL.host);
      };
    })() :

  // Non standard browser envs (web workers, react-native) lack needed support.
    (function nonStandardBrowserEnv() {
      return function isURLSameOrigin() {
        return true;
      };
    })()
);


/***/ }),

/***/ "./node_modules/axios/lib/helpers/normalizeHeaderName.js":
/*!***************************************************************!*\
  !*** ./node_modules/axios/lib/helpers/normalizeHeaderName.js ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(/*! ../utils */ "./node_modules/axios/lib/utils.js");

module.exports = function normalizeHeaderName(headers, normalizedName) {
  utils.forEach(headers, function processHeader(value, name) {
    if (name !== normalizedName && name.toUpperCase() === normalizedName.toUpperCase()) {
      headers[normalizedName] = value;
      delete headers[name];
    }
  });
};


/***/ }),

/***/ "./node_modules/axios/lib/helpers/parseHeaders.js":
/*!********************************************************!*\
  !*** ./node_modules/axios/lib/helpers/parseHeaders.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(/*! ./../utils */ "./node_modules/axios/lib/utils.js");

// Headers whose duplicates are ignored by node
// c.f. https://nodejs.org/api/http.html#http_message_headers
var ignoreDuplicateOf = [
  'age', 'authorization', 'content-length', 'content-type', 'etag',
  'expires', 'from', 'host', 'if-modified-since', 'if-unmodified-since',
  'last-modified', 'location', 'max-forwards', 'proxy-authorization',
  'referer', 'retry-after', 'user-agent'
];

/**
 * Parse headers into an object
 *
 * ```
 * Date: Wed, 27 Aug 2014 08:58:49 GMT
 * Content-Type: application/json
 * Connection: keep-alive
 * Transfer-Encoding: chunked
 * ```
 *
 * @param {String} headers Headers needing to be parsed
 * @returns {Object} Headers parsed into an object
 */
module.exports = function parseHeaders(headers) {
  var parsed = {};
  var key;
  var val;
  var i;

  if (!headers) { return parsed; }

  utils.forEach(headers.split('\n'), function parser(line) {
    i = line.indexOf(':');
    key = utils.trim(line.substr(0, i)).toLowerCase();
    val = utils.trim(line.substr(i + 1));

    if (key) {
      if (parsed[key] && ignoreDuplicateOf.indexOf(key) >= 0) {
        return;
      }
      if (key === 'set-cookie') {
        parsed[key] = (parsed[key] ? parsed[key] : []).concat([val]);
      } else {
        parsed[key] = parsed[key] ? parsed[key] + ', ' + val : val;
      }
    }
  });

  return parsed;
};


/***/ }),

/***/ "./node_modules/axios/lib/helpers/spread.js":
/*!**************************************************!*\
  !*** ./node_modules/axios/lib/helpers/spread.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


/**
 * Syntactic sugar for invoking a function and expanding an array for arguments.
 *
 * Common use case would be to use `Function.prototype.apply`.
 *
 *  ```js
 *  function f(x, y, z) {}
 *  var args = [1, 2, 3];
 *  f.apply(null, args);
 *  ```
 *
 * With `spread` this example can be re-written.
 *
 *  ```js
 *  spread(function(x, y, z) {})([1, 2, 3]);
 *  ```
 *
 * @param {Function} callback
 * @returns {Function}
 */
module.exports = function spread(callback) {
  return function wrap(arr) {
    return callback.apply(null, arr);
  };
};


/***/ }),

/***/ "./node_modules/axios/lib/utils.js":
/*!*****************************************!*\
  !*** ./node_modules/axios/lib/utils.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var bind = __webpack_require__(/*! ./helpers/bind */ "./node_modules/axios/lib/helpers/bind.js");
var isBuffer = __webpack_require__(/*! is-buffer */ "./node_modules/is-buffer/index.js");

/*global toString:true*/

// utils is a library of generic helper functions non-specific to axios

var toString = Object.prototype.toString;

/**
 * Determine if a value is an Array
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is an Array, otherwise false
 */
function isArray(val) {
  return toString.call(val) === '[object Array]';
}

/**
 * Determine if a value is an ArrayBuffer
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is an ArrayBuffer, otherwise false
 */
function isArrayBuffer(val) {
  return toString.call(val) === '[object ArrayBuffer]';
}

/**
 * Determine if a value is a FormData
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is an FormData, otherwise false
 */
function isFormData(val) {
  return (typeof FormData !== 'undefined') && (val instanceof FormData);
}

/**
 * Determine if a value is a view on an ArrayBuffer
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is a view on an ArrayBuffer, otherwise false
 */
function isArrayBufferView(val) {
  var result;
  if ((typeof ArrayBuffer !== 'undefined') && (ArrayBuffer.isView)) {
    result = ArrayBuffer.isView(val);
  } else {
    result = (val) && (val.buffer) && (val.buffer instanceof ArrayBuffer);
  }
  return result;
}

/**
 * Determine if a value is a String
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is a String, otherwise false
 */
function isString(val) {
  return typeof val === 'string';
}

/**
 * Determine if a value is a Number
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is a Number, otherwise false
 */
function isNumber(val) {
  return typeof val === 'number';
}

/**
 * Determine if a value is undefined
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if the value is undefined, otherwise false
 */
function isUndefined(val) {
  return typeof val === 'undefined';
}

/**
 * Determine if a value is an Object
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is an Object, otherwise false
 */
function isObject(val) {
  return val !== null && typeof val === 'object';
}

/**
 * Determine if a value is a Date
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is a Date, otherwise false
 */
function isDate(val) {
  return toString.call(val) === '[object Date]';
}

/**
 * Determine if a value is a File
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is a File, otherwise false
 */
function isFile(val) {
  return toString.call(val) === '[object File]';
}

/**
 * Determine if a value is a Blob
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is a Blob, otherwise false
 */
function isBlob(val) {
  return toString.call(val) === '[object Blob]';
}

/**
 * Determine if a value is a Function
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is a Function, otherwise false
 */
function isFunction(val) {
  return toString.call(val) === '[object Function]';
}

/**
 * Determine if a value is a Stream
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is a Stream, otherwise false
 */
function isStream(val) {
  return isObject(val) && isFunction(val.pipe);
}

/**
 * Determine if a value is a URLSearchParams object
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is a URLSearchParams object, otherwise false
 */
function isURLSearchParams(val) {
  return typeof URLSearchParams !== 'undefined' && val instanceof URLSearchParams;
}

/**
 * Trim excess whitespace off the beginning and end of a string
 *
 * @param {String} str The String to trim
 * @returns {String} The String freed of excess whitespace
 */
function trim(str) {
  return str.replace(/^\s*/, '').replace(/\s*$/, '');
}

/**
 * Determine if we're running in a standard browser environment
 *
 * This allows axios to run in a web worker, and react-native.
 * Both environments support XMLHttpRequest, but not fully standard globals.
 *
 * web workers:
 *  typeof window -> undefined
 *  typeof document -> undefined
 *
 * react-native:
 *  navigator.product -> 'ReactNative'
 * nativescript
 *  navigator.product -> 'NativeScript' or 'NS'
 */
function isStandardBrowserEnv() {
  if (typeof navigator !== 'undefined' && (navigator.product === 'ReactNative' ||
                                           navigator.product === 'NativeScript' ||
                                           navigator.product === 'NS')) {
    return false;
  }
  return (
    typeof window !== 'undefined' &&
    typeof document !== 'undefined'
  );
}

/**
 * Iterate over an Array or an Object invoking a function for each item.
 *
 * If `obj` is an Array callback will be called passing
 * the value, index, and complete array for each item.
 *
 * If 'obj' is an Object callback will be called passing
 * the value, key, and complete object for each property.
 *
 * @param {Object|Array} obj The object to iterate
 * @param {Function} fn The callback to invoke for each item
 */
function forEach(obj, fn) {
  // Don't bother if no value provided
  if (obj === null || typeof obj === 'undefined') {
    return;
  }

  // Force an array if not already something iterable
  if (typeof obj !== 'object') {
    /*eslint no-param-reassign:0*/
    obj = [obj];
  }

  if (isArray(obj)) {
    // Iterate over array values
    for (var i = 0, l = obj.length; i < l; i++) {
      fn.call(null, obj[i], i, obj);
    }
  } else {
    // Iterate over object keys
    for (var key in obj) {
      if (Object.prototype.hasOwnProperty.call(obj, key)) {
        fn.call(null, obj[key], key, obj);
      }
    }
  }
}

/**
 * Accepts varargs expecting each argument to be an object, then
 * immutably merges the properties of each object and returns result.
 *
 * When multiple objects contain the same key the later object in
 * the arguments list will take precedence.
 *
 * Example:
 *
 * ```js
 * var result = merge({foo: 123}, {foo: 456});
 * console.log(result.foo); // outputs 456
 * ```
 *
 * @param {Object} obj1 Object to merge
 * @returns {Object} Result of all merge properties
 */
function merge(/* obj1, obj2, obj3, ... */) {
  var result = {};
  function assignValue(val, key) {
    if (typeof result[key] === 'object' && typeof val === 'object') {
      result[key] = merge(result[key], val);
    } else {
      result[key] = val;
    }
  }

  for (var i = 0, l = arguments.length; i < l; i++) {
    forEach(arguments[i], assignValue);
  }
  return result;
}

/**
 * Function equal to merge with the difference being that no reference
 * to original objects is kept.
 *
 * @see merge
 * @param {Object} obj1 Object to merge
 * @returns {Object} Result of all merge properties
 */
function deepMerge(/* obj1, obj2, obj3, ... */) {
  var result = {};
  function assignValue(val, key) {
    if (typeof result[key] === 'object' && typeof val === 'object') {
      result[key] = deepMerge(result[key], val);
    } else if (typeof val === 'object') {
      result[key] = deepMerge({}, val);
    } else {
      result[key] = val;
    }
  }

  for (var i = 0, l = arguments.length; i < l; i++) {
    forEach(arguments[i], assignValue);
  }
  return result;
}

/**
 * Extends object a by mutably adding to it the properties of object b.
 *
 * @param {Object} a The object to be extended
 * @param {Object} b The object to copy properties from
 * @param {Object} thisArg The object to bind function to
 * @return {Object} The resulting value of object a
 */
function extend(a, b, thisArg) {
  forEach(b, function assignValue(val, key) {
    if (thisArg && typeof val === 'function') {
      a[key] = bind(val, thisArg);
    } else {
      a[key] = val;
    }
  });
  return a;
}

module.exports = {
  isArray: isArray,
  isArrayBuffer: isArrayBuffer,
  isBuffer: isBuffer,
  isFormData: isFormData,
  isArrayBufferView: isArrayBufferView,
  isString: isString,
  isNumber: isNumber,
  isObject: isObject,
  isUndefined: isUndefined,
  isDate: isDate,
  isFile: isFile,
  isBlob: isBlob,
  isFunction: isFunction,
  isStream: isStream,
  isURLSearchParams: isURLSearchParams,
  isStandardBrowserEnv: isStandardBrowserEnv,
  forEach: forEach,
  merge: merge,
  deepMerge: deepMerge,
  extend: extend,
  trim: trim
};


/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/awaiting.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loan/awaiting.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/closed.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loan/closed.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/loan-detail.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loan/loan-detail.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  props: ['loan'],
  data: function data() {
    return {};
  },
  methods: {},
  mounted: function mounted() {
    console.log(this.loan);
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/overpaid.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loan/overpaid.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/pedding-approval.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loan/pedding-approval.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  name: 'view-loans',
  props: ['loans'],
  data: function data() {
    return {
      title: 'Pedding Approval',
      loans: []
    };
  },
  methods: {},
  mounted: function mounted() {
    var _this = this;

    Container.resolve('viewLoans').then(function (data) {
      _this.loans = data.loans;
    });
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/pennding-second-approval.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loan/pennding-second-approval.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/rejected.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loan/rejected.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/view-loans.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loan/view-loans.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
// import DataTable from '../../angle/modules/tables/datatable'
/* harmony default export */ __webpack_exports__["default"] = ({
  name: 'view-loans',
  data: function data() {
    return {
      title: 'Loans',
      loans: []
    };
  },
  methods: {
    getLoanId: function getLoanId(id) {
      return $this.route.push();
    }
  },
  mounted: function mounted() {
    var _this = this;

    Container.resolve('viewLoans').then(function (data) {
      _this.loans = data.loans;
    });
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/withdraw.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loan/withdraw.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/written-off.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loan/written-off.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/pending-approval-clients.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/pending-approval-clients.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  name: 'pending-approval-clients',
  data: function data() {
    return {
      clients: []
    };
  },
  methods: {
    getClients: function getClients() {
      var _this = this;

      Container.resolve('clients').then(function (data) {
        _this.clients = data.clients;
        console.log(_this.clients);
      });
    }
  },
  mounted: function mounted() {
    this.getClients();
  }
});

/***/ }),

/***/ "./node_modules/is-buffer/index.js":
/*!*****************************************!*\
  !*** ./node_modules/is-buffer/index.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*!
 * Determine if an object is a Buffer
 *
 * @author   Feross Aboukhadijeh <https://feross.org>
 * @license  MIT
 */

module.exports = function isBuffer (obj) {
  return obj != null && obj.constructor != null &&
    typeof obj.constructor.isBuffer === 'function' && obj.constructor.isBuffer(obj)
}


/***/ }),

/***/ "./node_modules/process/browser.js":
/*!*****************************************!*\
  !*** ./node_modules/process/browser.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// shim for using process in browser
var process = module.exports = {};

// cached from whatever global is present so that test runners that stub it
// don't break things.  But we need to wrap it in a try catch in case it is
// wrapped in strict mode code which doesn't define any globals.  It's inside a
// function because try/catches deoptimize in certain engines.

var cachedSetTimeout;
var cachedClearTimeout;

function defaultSetTimout() {
    throw new Error('setTimeout has not been defined');
}
function defaultClearTimeout () {
    throw new Error('clearTimeout has not been defined');
}
(function () {
    try {
        if (typeof setTimeout === 'function') {
            cachedSetTimeout = setTimeout;
        } else {
            cachedSetTimeout = defaultSetTimout;
        }
    } catch (e) {
        cachedSetTimeout = defaultSetTimout;
    }
    try {
        if (typeof clearTimeout === 'function') {
            cachedClearTimeout = clearTimeout;
        } else {
            cachedClearTimeout = defaultClearTimeout;
        }
    } catch (e) {
        cachedClearTimeout = defaultClearTimeout;
    }
} ())
function runTimeout(fun) {
    if (cachedSetTimeout === setTimeout) {
        //normal enviroments in sane situations
        return setTimeout(fun, 0);
    }
    // if setTimeout wasn't available but was latter defined
    if ((cachedSetTimeout === defaultSetTimout || !cachedSetTimeout) && setTimeout) {
        cachedSetTimeout = setTimeout;
        return setTimeout(fun, 0);
    }
    try {
        // when when somebody has screwed with setTimeout but no I.E. maddness
        return cachedSetTimeout(fun, 0);
    } catch(e){
        try {
            // When we are in I.E. but the script has been evaled so I.E. doesn't trust the global object when called normally
            return cachedSetTimeout.call(null, fun, 0);
        } catch(e){
            // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error
            return cachedSetTimeout.call(this, fun, 0);
        }
    }


}
function runClearTimeout(marker) {
    if (cachedClearTimeout === clearTimeout) {
        //normal enviroments in sane situations
        return clearTimeout(marker);
    }
    // if clearTimeout wasn't available but was latter defined
    if ((cachedClearTimeout === defaultClearTimeout || !cachedClearTimeout) && clearTimeout) {
        cachedClearTimeout = clearTimeout;
        return clearTimeout(marker);
    }
    try {
        // when when somebody has screwed with setTimeout but no I.E. maddness
        return cachedClearTimeout(marker);
    } catch (e){
        try {
            // When we are in I.E. but the script has been evaled so I.E. doesn't  trust the global object when called normally
            return cachedClearTimeout.call(null, marker);
        } catch (e){
            // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error.
            // Some versions of I.E. have different rules for clearTimeout vs setTimeout
            return cachedClearTimeout.call(this, marker);
        }
    }



}
var queue = [];
var draining = false;
var currentQueue;
var queueIndex = -1;

function cleanUpNextTick() {
    if (!draining || !currentQueue) {
        return;
    }
    draining = false;
    if (currentQueue.length) {
        queue = currentQueue.concat(queue);
    } else {
        queueIndex = -1;
    }
    if (queue.length) {
        drainQueue();
    }
}

function drainQueue() {
    if (draining) {
        return;
    }
    var timeout = runTimeout(cleanUpNextTick);
    draining = true;

    var len = queue.length;
    while(len) {
        currentQueue = queue;
        queue = [];
        while (++queueIndex < len) {
            if (currentQueue) {
                currentQueue[queueIndex].run();
            }
        }
        queueIndex = -1;
        len = queue.length;
    }
    currentQueue = null;
    draining = false;
    runClearTimeout(timeout);
}

process.nextTick = function (fun) {
    var args = new Array(arguments.length - 1);
    if (arguments.length > 1) {
        for (var i = 1; i < arguments.length; i++) {
            args[i - 1] = arguments[i];
        }
    }
    queue.push(new Item(fun, args));
    if (queue.length === 1 && !draining) {
        runTimeout(drainQueue);
    }
};

// v8 likes predictible objects
function Item(fun, array) {
    this.fun = fun;
    this.array = array;
}
Item.prototype.run = function () {
    this.fun.apply(null, this.array);
};
process.title = 'browser';
process.browser = true;
process.env = {};
process.argv = [];
process.version = ''; // empty string to avoid regexp issues
process.versions = {};

function noop() {}

process.on = noop;
process.addListener = noop;
process.once = noop;
process.off = noop;
process.removeListener = noop;
process.removeAllListeners = noop;
process.emit = noop;
process.prependListener = noop;
process.prependOnceListener = noop;

process.listeners = function (name) { return [] }

process.binding = function (name) {
    throw new Error('process.binding is not supported');
};

process.cwd = function () { return '/' };
process.chdir = function (dir) {
    throw new Error('process.chdir is not supported');
};
process.umask = function() { return 0; };


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/awaiting.vue?vue&type=template&id=745fc160&":
/*!****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loan/awaiting.vue?vue&type=template&id=745fc160& ***!
  \****************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm._m(0)
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", [
      _c("div", { staticClass: "content-heading" }, [
        _c("div", [_vm._v("\n          Awaiting Disbursement\n      ")])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "container-fluid" }, [
        _c("div", { staticClass: "card" }, [
          _c("div", { staticClass: "card-body" }, [
            _c(
              "table",
              {
                staticClass: "table table-striped my-4 w100",
                attrs: { id: "datatable2" }
              },
              [
                _c("thead", [
                  _c("tr", [
                    _c("th", [_vm._v("Account Nbr")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Branch")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Loan Officer")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Client Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Group Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Amount")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Approved Date")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Expected Disbursement Date")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Product Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("View")])
                  ])
                ]),
                _vm._v(" "),
                _c("tbody")
              ]
            )
          ])
        ])
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/closed.vue?vue&type=template&id=f1dbb620&":
/*!**************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loan/closed.vue?vue&type=template&id=f1dbb620& ***!
  \**************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm._m(0)
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", [
      _c("div", { staticClass: "content-heading" }, [
        _c("div", [_vm._v("\n          Closed Loans\n      ")])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "container-fluid" }, [
        _c("div", { staticClass: "card" }, [
          _c("div", { staticClass: "card-body" }, [
            _c(
              "table",
              {
                staticClass: "table table-striped my-4 w100",
                attrs: { id: "datatable2" }
              },
              [
                _c("thead", [
                  _c("tr", [
                    _c("th", [_vm._v("Account Nbr")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Branch")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Loan Officer")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Client Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Group Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Amount")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Closed On")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Product Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("View")])
                  ])
                ]),
                _vm._v(" "),
                _c("tbody")
              ]
            )
          ])
        ])
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/loan-detail.vue?vue&type=template&id=1ca6b7fa&":
/*!*******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loan/loan-detail.vue?vue&type=template&id=1ca6b7fa& ***!
  \*******************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _vm._m(0),
    _vm._v(" "),
    _vm._m(1),
    _vm._v(" "),
    _c("div", { staticClass: "container-fluid" }, [
      _c("div", { staticClass: "card" }, [
        _c("div", { staticClass: "card card-default" }, [
          _c("div", { staticClass: "card-header" }, [_vm._v("Loan details")]),
          _vm._v(" "),
          _c("div", { staticClass: "card-body" }, [
            _vm._m(2),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "tab-content", attrs: { id: "myTabContent" } },
              [
                _vm._m(3),
                _vm._v(" "),
                _vm._m(4),
                _vm._v(" "),
                _c(
                  "div",
                  {
                    staticClass: "tab-pane fade",
                    attrs: {
                      id: "repayment-schedule",
                      role: "tabpanel",
                      "aria-labelledby": "payment"
                    }
                  },
                  [
                    _c("div", { staticClass: "card card-default" }, [
                      _c("div", { staticClass: "card-header" }, [
                        _vm._v("Repayment Schedule")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "card-body" }, [
                        _c(
                          "div",
                          { staticClass: "table-responsive table-bordered" },
                          [
                            _c("table", { staticClass: "table table-sm" }, [
                              _vm._m(5),
                              _vm._v(" "),
                              _c(
                                "tbody",
                                [
                                  _vm._m(6),
                                  _vm._v(" "),
                                  _vm._l([123456], function(row) {
                                    return _c("tr", { key: row[0] }, [
                                      _c("td"),
                                      _vm._v(" "),
                                      _c("td", [_vm._v("10-01-2020")]),
                                      _vm._v(" "),
                                      _c("td"),
                                      _vm._v(" "),
                                      _c("td", {
                                        staticStyle: {
                                          "border-left": "1px",
                                          "border-color": "#1D68A7",
                                          "border-top-color": "#80808033",
                                          "border-bottom": "0px"
                                        }
                                      }),
                                      _vm._v(" "),
                                      _c("td", [_vm._v("50000.00")]),
                                      _vm._v(" "),
                                      _c("td"),
                                      _vm._v(" "),
                                      _c(
                                        "td",
                                        {
                                          staticStyle: {
                                            "border-left": "1px",
                                            "border-color": "#1D68A7",
                                            "border-top-color": "#80808033",
                                            "border-bottom": "0px"
                                          }
                                        },
                                        [_vm._v("50000.00")]
                                      ),
                                      _vm._v(" "),
                                      _c("td"),
                                      _vm._v(" "),
                                      _c("td", [_vm._v("0.00")]),
                                      _vm._v(" "),
                                      _c("td", {
                                        staticStyle: {
                                          "border-left": "1px",
                                          "border-color": "#1D68A7",
                                          "border-top-color": "#80808033",
                                          "border-bottom": "0px"
                                        }
                                      }),
                                      _vm._v(" "),
                                      _c("td", [_vm._v("5000.00")]),
                                      _vm._v(" "),
                                      _c("td", {
                                        staticStyle: {
                                          "border-left": "1px",
                                          "border-color": "#1D68A7",
                                          "border-top-color": "#80808033",
                                          "border-bottom": "0px"
                                        }
                                      }),
                                      _vm._v(" "),
                                      _c("td", [_vm._v("0.00")]),
                                      _vm._v(" "),
                                      _c("td", [_vm._v("0.00")]),
                                      _vm._v(" "),
                                      _c("td")
                                    ])
                                  }),
                                  _vm._v(" "),
                                  _vm._m(7)
                                ],
                                2
                              )
                            ])
                          ]
                        )
                      ])
                    ])
                  ]
                ),
                _vm._v(" "),
                _c(
                  "div",
                  {
                    staticClass: "tab-pane fade",
                    attrs: {
                      id: "repayment-schedule",
                      role: "tabpanel",
                      "aria-labelledby": "payment"
                    }
                  },
                  [
                    _c("div", { staticClass: "card card-default" }, [
                      _c("div", { staticClass: "card-header" }, [
                        _vm._v("Repayment Schedule")
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "card-body" }, [
                        _c(
                          "div",
                          { staticClass: "table-responsive table-bordered" },
                          [
                            _c("table", { staticClass: "table table-sm" }, [
                              _vm._m(8),
                              _vm._v(" "),
                              _c(
                                "tbody",
                                [
                                  _vm._m(9),
                                  _vm._v(" "),
                                  _vm._l([0, 1, 2, 3], function(row) {
                                    return _c("tr", { key: row[0] }, [
                                      _c("td", [_vm._v("x")]),
                                      _vm._v(" "),
                                      _c("td", [_vm._v("10-01-2020")]),
                                      _vm._v(" "),
                                      _c("td"),
                                      _vm._v(" "),
                                      _c("td", {
                                        staticStyle: {
                                          "border-left": "1px",
                                          "border-color": "#1D68A7",
                                          "border-top-color": "#80808033",
                                          "border-bottom": "0px"
                                        }
                                      }),
                                      _vm._v(" "),
                                      _c("td", [_vm._v("50000.00")]),
                                      _vm._v(" "),
                                      _c("td"),
                                      _vm._v(" "),
                                      _c(
                                        "td",
                                        {
                                          staticStyle: {
                                            "border-left": "1px",
                                            "border-color": "#1D68A7",
                                            "border-top-color": "#80808033",
                                            "border-bottom": "0px"
                                          }
                                        },
                                        [_vm._v("50000.00")]
                                      ),
                                      _vm._v(" "),
                                      _c("td"),
                                      _vm._v(" "),
                                      _c("td", [_vm._v("0.00")]),
                                      _vm._v(" "),
                                      _c("td", {
                                        staticStyle: {
                                          "border-left": "1px",
                                          "border-color": "#1D68A7",
                                          "border-top-color": "#80808033",
                                          "border-bottom": "0px"
                                        }
                                      }),
                                      _vm._v(" "),
                                      _c("td", [_vm._v("5000.00")]),
                                      _vm._v(" "),
                                      _c("td", {
                                        staticStyle: {
                                          "border-left": "1px",
                                          "border-color": "#1D68A7",
                                          "border-top-color": "#80808033",
                                          "border-bottom": "0px"
                                        }
                                      }),
                                      _vm._v(" "),
                                      _c("td", [_vm._v("0.00")]),
                                      _vm._v(" "),
                                      _c("td", [_vm._v("0.00")]),
                                      _vm._v(" "),
                                      _c("td")
                                    ])
                                  }),
                                  _vm._v(
                                    "\n                                            @endfor\n                                            "
                                  ),
                                  _vm._m(10)
                                ],
                                2
                              )
                            ])
                          ]
                        )
                      ])
                    ])
                  ]
                ),
                _vm._v(" "),
                _vm._m(11),
                _vm._v(" "),
                _vm._m(12),
                _vm._v(" "),
                _vm._m(13),
                _vm._v(" "),
                _vm._m(14),
                _vm._v(" "),
                _vm._m(15),
                _vm._v(" "),
                _vm._m(16)
              ]
            )
          ])
        ])
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "content-heading" }, [
      _c("div", [
        _vm._v("\n        LoanID_with_Loanactive\n        "),
        _c("div", { staticClass: "badge badge-success" }, [_vm._v("Active")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col pl-0 pr-0" }, [
      _c("div", { staticClass: "card mb-3 border-secondary" }, [
        _c("div", { staticClass: "card-header bg-secondary " }),
        _vm._v(" "),
        _c("div", { staticClass: "card-body row" }, [
          _c("div", { staticClass: "col-lg-6" }, [
            _c("form", { staticClass: "form-horizontal" }, [
              _c("div", { staticClass: "form-group row" }, [
                _c("div", { staticClass: "col-md-4" }, [_vm._v("Client Name")]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-8" }, [
                  _c("strong", [_vm._v("client_name")])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group row" }, [
                _c("div", { staticClass: "col-md-4" }, [_vm._v("Group Name")]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-8" }, [
                  _c("strong", [_vm._v("group_name")])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group row" }, [
                _c("div", { staticClass: "col-md-4" }, [
                  _vm._v("Original Officer")
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-8" }, [
                  _c("strong", [_vm._v("Loan, officer 3 Loan")])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group row" }, [
                _c("div", { staticClass: "col-md-4" }, [
                  _vm._v("Loan Officer")
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-8" }, [
                  _c("strong", [_vm._v("Loan, officer 3 Loan")])
                ])
              ])
            ])
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "right" })
        ])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "ul",
      { staticClass: "nav nav-tabs", attrs: { id: "myTab", role: "tablist" } },
      [
        _c("li", { staticClass: "nav-item" }, [
          _c(
            "a",
            {
              staticClass: "nav-link active",
              attrs: {
                id: "summary",
                "data-toggle": "tab",
                href: "#summary",
                role: "tab",
                "aria-controls": "summary",
                "aria-selected": "true"
              }
            },
            [_vm._v("summary")]
          )
        ]),
        _vm._v(" "),
        _c("li", { staticClass: "nav-item" }, [
          _c(
            "a",
            {
              staticClass: "nav-link",
              attrs: {
                id: "details",
                "data-toggle": "tab",
                href: "#details-tab",
                role: "tab",
                "aria-controls": "details",
                "aria-selected": "false"
              }
            },
            [_vm._v("Details")]
          )
        ]),
        _vm._v(" "),
        _c("li", { staticClass: "nav-item" }, [
          _c(
            "a",
            {
              staticClass: "nav-link",
              attrs: {
                id: "repayment",
                "data-toggle": "tab",
                href: "#repayment-schedule",
                role: "tab",
                "aria-controls": "repayment",
                "aria-selected": "false"
              }
            },
            [_vm._v("Repayment Schedule")]
          )
        ]),
        _vm._v(" "),
        _c("li", { staticClass: "nav-item" }, [
          _c(
            "a",
            {
              staticClass: "nav-link",
              attrs: {
                id: "transaction",
                "data-toggle": "tab",
                href: "#transaction-tab",
                role: "tab",
                "aria-controls": "transaction",
                "aria-selected": "false"
              }
            },
            [_vm._v("Transaction")]
          )
        ]),
        _vm._v(" "),
        _c("li", { staticClass: "nav-item" }, [
          _c(
            "a",
            {
              staticClass: "nav-link",
              attrs: {
                id: "security",
                "data-toggle": "tab",
                href: "#security-tab",
                role: "tab",
                "aria-controls": "security",
                "aria-selected": "false"
              }
            },
            [_vm._v("Security")]
          )
        ]),
        _vm._v(" "),
        _c("li", { staticClass: "nav-item" }, [
          _c(
            "a",
            {
              staticClass: "nav-link",
              attrs: {
                id: "standing-instruction",
                "data-toggle": "tab",
                href: "#standing-instruction-tab",
                role: "tab",
                "aria-controls": "standing-instruction",
                "aria-selected": "false"
              }
            },
            [_vm._v("Standing Instruction")]
          )
        ]),
        _vm._v(" "),
        _c("li", { staticClass: "nav-item" }, [
          _c(
            "a",
            {
              staticClass: "nav-link",
              attrs: {
                id: "crb",
                "data-toggle": "tab",
                href: "#crb-tab",
                role: "tab",
                "aria-controls": "crb",
                "aria-selected": "false"
              }
            },
            [_vm._v("CRB")]
          )
        ]),
        _vm._v(" "),
        _c("li", { staticClass: "nav-item" }, [
          _c(
            "a",
            {
              staticClass: "nav-link",
              attrs: {
                id: "group-allocation",
                "data-toggle": "tab",
                href: "#group-allocation-tab",
                role: "tab",
                "aria-controls": "group-allocation",
                "aria-selected": "false"
              }
            },
            [_vm._v("Group Member Allocation")]
          )
        ]),
        _vm._v(" "),
        _c("li", { staticClass: "nav-item" }, [
          _c(
            "a",
            {
              staticClass: "nav-link",
              attrs: {
                id: "survey",
                "data-toggle": "tab",
                href: "#survey-tab",
                role: "tab",
                "aria-controls": "survey",
                "aria-selected": "false"
              }
            },
            [_vm._v("Survey")]
          )
        ])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      {
        staticClass: "tab-pane fade show active",
        attrs: { id: "summary", role: "tabpanel", "aria-labelledby": "summary" }
      },
      [
        _c("section", [
          _c("div", { staticClass: "row" }, [
            _c("div", { staticClass: "col-lg-6" }, [
              _c("form", { staticClass: "form-horizontal" }, [
                _c("div", { staticClass: "form-group row" }, [
                  _c("div", { staticClass: "col-md-4" }, [
                    _vm._v("Loan Cycle")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "col-md-8" }, [
                    _c("strong", [_vm._v("987654")])
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "form-group row" }, [
                  _c("div", { staticClass: "col-md-4" }, [
                    _vm._v("Timely Repayment:")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "col-md-8" }, [
                    _c("strong", [_vm._v("03/11/2015 10:10")])
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "form-group row" }, [
                  _c("div", { staticClass: "col-md-4" }, [
                    _vm._v("Amount in Arrears")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "col-md-8" }, [
                    _c("strong", [_vm._v("Addison Nichols")])
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "form-group row" }, [
                  _c("div", { staticClass: "col-md-4" }, [
                    _vm._v("Days in Arrears")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "col-md-8" }, [
                    _c("strong", [_vm._v("547")])
                  ])
                ])
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "col-lg-6" }, [
              _c("form", { staticClass: "form-horizontal" }, [
                _c("div", { staticClass: "form-group row" }, [
                  _c("div", { staticClass: "col-md-4" }, [
                    _vm._v("Date Disbursed")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "col-md-8" }, [
                    _c("strong", [_vm._v("#32654")])
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "form-group row" }, [
                  _c("div", { staticClass: "col-md-4" }, [
                    _vm._v("Last Payment")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "col-md-8" }, [
                    _c("strong", [_vm._v("Addison Nichols")])
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "form-group row" }, [
                  _c("div", { staticClass: "col-md-4" }, [
                    _vm._v("Next Payment")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "col-md-8" }, [
                    _c("strong", [_vm._v("addisong@mail.com")])
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "form-group row" }, [
                  _c("div", { staticClass: "col-md-4" }, [
                    _vm._v("Fina payment Expected")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "col-md-8" }, [
                    _c("strong", [_vm._v("Addison co.")])
                  ])
                ])
              ])
            ])
          ]),
          _vm._v(" "),
          _c(
            "table",
            { staticClass: "table table-striped table-bordered table-hover" },
            [
              _c("tr", [_vm._v("Summary")]),
              _vm._v(" "),
              _c("tr", [
                _c("th"),
                _vm._v(" "),
                _c("th", [_vm._v("Contract")]),
                _vm._v(" "),
                _c("th", [_vm._v("Paid")]),
                _vm._v(" "),
                _c("th", [_vm._v("OutStanding")]),
                _vm._v(" "),
                _c("th", [_vm._v("overdue")])
              ]),
              _vm._v(" "),
              _c("tr", [
                _c("th", [_vm._v("Principal")]),
                _vm._v(" "),
                _c("td"),
                _vm._v(" "),
                _c("td"),
                _vm._v(" "),
                _c("td"),
                _vm._v(" "),
                _c("td")
              ]),
              _vm._v(" "),
              _c("tr", [
                _c("th", [_vm._v("Interest")]),
                _vm._v(" "),
                _c("td"),
                _vm._v(" "),
                _c("td"),
                _vm._v(" "),
                _c("td"),
                _vm._v(" "),
                _c("td")
              ]),
              _vm._v(" "),
              _c("tr", [
                _c("th", [_vm._v("Fees")]),
                _vm._v(" "),
                _c("td"),
                _vm._v(" "),
                _c("td"),
                _vm._v(" "),
                _c("td"),
                _vm._v(" "),
                _c("td")
              ]),
              _vm._v(" "),
              _c("tr", [
                _c("th", [_vm._v("Penalties")]),
                _vm._v(" "),
                _c("td"),
                _vm._v(" "),
                _c("td"),
                _vm._v(" "),
                _c("td"),
                _vm._v(" "),
                _c("td")
              ]),
              _vm._v(" "),
              _c("tr", [
                _c("th", [_vm._v("Total")]),
                _vm._v(" "),
                _c("td"),
                _vm._v(" "),
                _c("td"),
                _vm._v(" "),
                _c("td"),
                _vm._v(" "),
                _c("td")
              ])
            ]
          ),
          _vm._v(" "),
          _c("div", { staticClass: "row mt-2 ml-1" }, [
            _c(
              "button",
              {
                staticClass: "btn btn-labeled btn-primary",
                attrs: { type: "button" }
              },
              [
                _c("span", { staticClass: "btn-label" }, [
                  _c("i", { staticClass: "fa fa-arrow-left" })
                ]),
                _vm._v(
                  "\n                                    Left\n                                "
                )
              ]
            ),
            _vm._v(" "),
            _c(
              "button",
              {
                staticClass: "btn btn-labeled btn-primary",
                attrs: { type: "button" }
              },
              [
                _vm._v(
                  "\n                                    Right\n                                    "
                ),
                _c("span", { staticClass: "btn-label btn-label-right" }, [
                  _c("i", { staticClass: "fa fa-arrow-right" })
                ])
              ]
            )
          ])
        ])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      {
        staticClass: "tab-pane fade",
        attrs: {
          id: "details-tab",
          role: "tabpanel",
          "aria-labelledby": "details"
        }
      },
      [
        _c("div", { staticClass: "row" }, [
          _c("div", { staticClass: "col-lg-6" }, [
            _c("form", { staticClass: "form-horizontal" }, [
              _c("div", { staticClass: "form-group row" }, [
                _c("div", { staticClass: "col-md-4" }, [_vm._v("Account ID:")]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-8" }, [
                  _c("strong", [_vm._v("987654")])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group row" }, [
                _c("div", { staticClass: "col-md-4" }, [
                  _vm._v("Loan Amount:")
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-8" }, [
                  _c("strong", [_vm._v("03/11/2015 10:10")])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group row" }, [
                _c("div", { staticClass: "col-md-4" }, [_vm._v("Loarn Term:")]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-8" }, [
                  _c("strong", [_vm._v("Addison Nichols")])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group row" }, [
                _c("div", { staticClass: "col-md-4" }, [
                  _vm._v("Repayment Every:")
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-8" }, [
                  _c("strong", [_vm._v("547")])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group row" }, [
                _c("div", { staticClass: "col-md-4" }, [
                  _vm._v("Linked Account:")
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-8" }, [
                  _c("strong", [_vm._v("$515.20")])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group row" }, [
                _c("div", { staticClass: "col-md-4" }, [
                  _vm._v("Interest Type")
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-8" }, [
                  _c("strong", [_vm._v("Flat")])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group row" }, [
                _c("div", { staticClass: "col-md-4" }, [_vm._v("Signature")]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-8" }, [_c("div", {})])
              ])
            ])
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "col-lg-6" }, [
            _c("form", { staticClass: "form-horizontal" }, [
              _c("div", { staticClass: "form-group row" }, [
                _c("div", { staticClass: "col-md-4" }, [
                  _vm._v("Loan Product:")
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-8" }, [
                  _c("strong", [_vm._v("#32654")])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group row" }, [
                _c("div", { staticClass: "col-md-4" }, [
                  _vm._v("Loan Purpose:")
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-8" }, [
                  _c("strong", [_vm._v("Addison Nichols")])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group row" }, [
                _c("div", { staticClass: "col-md-4" }, [_vm._v("APR:")]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-8" }, [
                  _c("strong", [_vm._v("addisong@mail.com")])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group row" }, [
                _c("div", { staticClass: "col-md-4" }, [_vm._v("EIR:")]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-8" }, [
                  _c("strong", [_vm._v("Addison co.")])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group row" }, [
                _c("div", { staticClass: "col-md-4" }, [
                  _vm._v("Loan Sector:")
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-8" }, [
                  _c("strong", [_vm._v("(123) 123 456465")])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group row" }, [
                _c("div", { staticClass: "col-md-4" }, [_vm._v("Channel")]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-8" }, [
                  _c("div", {}, [_vm._v("default loan fund")])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group row" }, [
                _c("div", { staticClass: "col-md-4" }, [
                  _vm._v("No of Guarantors")
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-8" }, [
                  _c("div", {}, [_vm._v("0")])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group row" }, [
                _c("div", { staticClass: "col-md-4" }, [
                  _vm._v("Collateral values")
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-8" }, [
                  _c("div", {}, [_vm._v("0.00")])
                ])
              ])
            ])
          ])
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "row" }, [
          _c("table", { staticClass: "table table-bordered" }, [
            _c("tr", [
              _c("th", [_vm._v("Name")]),
              _vm._v(" "),
              _c("th", [_vm._v("Type")]),
              _vm._v(" "),
              _c("th", [_vm._v("Amount")]),
              _vm._v(" "),
              _c("th", [_vm._v("Collected Type")]),
              _vm._v(" "),
              _c("th", [_vm._v("Payment mode")]),
              _vm._v(" "),
              _c("th", [_vm._v("Charge Type")]),
              _vm._v(" "),
              _c("th", [_vm._v("Wave Penalty")])
            ]),
            _vm._v(" "),
            _c("tr", [
              _c("td", [_vm._v("Late Payment")]),
              _vm._v(" "),
              _c("td", [_vm._v("Flat")]),
              _vm._v(" "),
              _c("td", [_vm._v("1000")]),
              _vm._v(" "),
              _c("td", [_vm._v("10/3/2020")]),
              _vm._v(" "),
              _c("td", [_vm._v("Normal")]),
              _vm._v(" "),
              _c("td", [_vm._v("Regular")]),
              _vm._v(" "),
              _c("th", [_vm._v("Charge waived")])
            ])
          ])
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "row" }, [
          _c(
            "button",
            {
              staticClass: "btn btn-primary",
              attrs: { "data-toggle": "modal", "data-target": "#charges" }
            },
            [_c("i", { staticClass: "fa fa-plus" }, [_vm._v(" Add Charges")])]
          )
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "row mt-2" }, [
          _c(
            "button",
            {
              staticClass: "btn btn-labeled btn-secondary",
              attrs: { type: "button" }
            },
            [
              _c("span", { staticClass: "btn-label" }, [
                _c("i", { staticClass: "fa fa-arrow-left" })
              ]),
              _vm._v(
                "\n                                Left\n                            "
              )
            ]
          ),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "btn btn-labeled btn-secondary",
              attrs: { type: "button" }
            },
            [
              _vm._v(
                "\n                                Right\n                                "
              ),
              _c("span", { staticClass: "btn-label btn-label-right" }, [
                _c("i", { staticClass: "fa fa-arrow-right" })
              ])
            ]
          )
        ])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("thead", [
      _c("tr", { staticClass: "bg-gray" }, [
        _c("th", {
          staticClass: "empty",
          staticStyle: {
            "border-left": "1px",
            "border-top": "1px !important",
            "border-color": "#1D68A7 !important"
          },
          attrs: { colspan: "4" }
        }),
        _vm._v(" "),
        _c(
          "th",
          {
            staticStyle: {
              "border-left": "1px",
              "border-color": "#1D68A7 !important"
            },
            attrs: { colspan: "3" }
          },
          [_vm._v("Loan Amount and Balance")]
        ),
        _vm._v(" "),
        _c(
          "th",
          {
            staticStyle: {
              "border-left": "1px",
              "border-color": "#1D68A7 !important"
            },
            attrs: { colspan: "3" }
          },
          [_vm._v("Total Cost of Loan")]
        ),
        _vm._v(" "),
        _c(
          "th",
          {
            staticStyle: {
              "border-left": "1px",
              "border-color": "#1D68A7 !important"
            },
            attrs: { colspan: "2" }
          },
          [_vm._v("Compulsory Savings")]
        ),
        _vm._v(" "),
        _c("th", { staticClass: "empty", attrs: { colspan: "3" } })
      ]),
      _vm._v(" "),
      _c("tr", [
        _c("th", [_vm._v("#")]),
        _vm._v(" "),
        _c("th", [_vm._v("Date")]),
        _vm._v(" "),
        _c("th", [_vm._v("# Days")]),
        _vm._v(" "),
        _c(
          "th",
          { staticStyle: { "border-left": "1px", "border-color": "#1D68A7" } },
          [_vm._v("Paid by")]
        ),
        _vm._v(" "),
        _c("th", { staticClass: "boarder-left boarder-primary" }, [
          _vm._v("Disbursement")
        ]),
        _vm._v(" "),
        _c("th", [_vm._v("Principle Due")]),
        _vm._v(" "),
        _c(
          "th",
          { staticStyle: { "border-left": "1px", "border-color": "#1D68A7" } },
          [_vm._v(" Principle Balance")]
        ),
        _vm._v(" "),
        _c("th", [_vm._v("Interest due")]),
        _vm._v(" "),
        _c("th", [_vm._v("Fees")]),
        _vm._v(" "),
        _c(
          "th",
          { staticStyle: { "border-left": "1px", "border-color": "#1D68A7" } },
          [_vm._v("Penalties")]
        ),
        _vm._v(" "),
        _c("th", [_vm._v("Expected Savings")]),
        _vm._v(" "),
        _c(
          "th",
          { staticStyle: { "border-left": "1px", "border-color": "#1D68A7" } },
          [_vm._v("Actual Savings")]
        ),
        _vm._v(" "),
        _c("th", [_vm._v("Total Due")]),
        _vm._v(" "),
        _c("th", [_vm._v("Total Paid")]),
        _vm._v(" "),
        _c("th", [_vm._v("Total OutStanding")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("tr", [
      _c("td"),
      _vm._v(" "),
      _c("td", [_vm._v("10-01-2020")]),
      _vm._v(" "),
      _c("td"),
      _vm._v(" "),
      _c("td", {
        staticStyle: {
          "border-left": "1px",
          "border-color": "#1D68A7",
          "border-top-color": "#80808033",
          "border-bottom": "0px"
        }
      }),
      _vm._v(" "),
      _c("td", [_vm._v("50000.00")]),
      _vm._v(" "),
      _c("td"),
      _vm._v(" "),
      _c(
        "td",
        {
          staticStyle: {
            "border-left": "1px",
            "border-color": "#1D68A7",
            "border-top-color": "#80808033",
            "border-bottom": "0px"
          }
        },
        [_vm._v("50000.00")]
      ),
      _vm._v(" "),
      _c("td"),
      _vm._v(" "),
      _c("td", [_vm._v("0.00")]),
      _vm._v(" "),
      _c("td", {
        staticStyle: {
          "border-left": "1px",
          "border-color": "#1D68A7",
          "border-top-color": "#80808033",
          "border-bottom": "0px"
        }
      }),
      _vm._v(" "),
      _c("td", [_vm._v("5000.00")]),
      _vm._v(" "),
      _c("td", {
        staticStyle: {
          "border-left": "1px",
          "border-color": "#1D68A7",
          "border-top-color": "#80808033",
          "border-bottom": "0px"
        }
      }),
      _vm._v(" "),
      _c("td", [_vm._v("0.00")]),
      _vm._v(" "),
      _c("td", [_vm._v("0.00")]),
      _vm._v(" "),
      _c("td")
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("tr", { staticClass: "bg-gray" }, [
      _c("td"),
      _vm._v(" "),
      _c("td", [_vm._v("Total")]),
      _vm._v(" "),
      _c("td", [_vm._v("60")]),
      _vm._v(" "),
      _c("td", {
        staticStyle: {
          "border-left": "1px",
          "border-color": "#1D68A7",
          "border-top-color": "#80808033",
          "border-bottom": "0px"
        }
      }),
      _vm._v(" "),
      _c("td", [_vm._v("50000.00")]),
      _vm._v(" "),
      _c("td", [_vm._v("14000.00")]),
      _vm._v(" "),
      _c("td", {
        staticStyle: {
          "border-left": "1px",
          "border-color": "#1D68A7",
          "border-top-color": "#80808033",
          "border-bottom": "0px"
        }
      }),
      _vm._v(" "),
      _c("td", [_vm._v("1000.00")]),
      _vm._v(" "),
      _c("td", [_vm._v("1000.00")]),
      _vm._v(" "),
      _c(
        "td",
        {
          staticStyle: {
            "border-left": "1px",
            "border-color": "#1D68A7",
            "border-top-color": "#80808033",
            "border-bottom": "0px"
          }
        },
        [_vm._v("0.00")]
      ),
      _vm._v(" "),
      _c("td", [_vm._v("5000.00")]),
      _vm._v(" "),
      _c("td", {
        staticStyle: {
          "border-left": "1px",
          "border-color": "#1D68A7",
          "border-top-color": "#80808033",
          "border-bottom": "0px"
        }
      }),
      _vm._v(" "),
      _c("td", [_vm._v("16000.00")]),
      _vm._v(" "),
      _c("td", [_vm._v("7500.00")]),
      _vm._v(" "),
      _c("td", [_vm._v("8500.00")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("thead", [
      _c("tr", { staticClass: "bg-gray" }, [
        _c("th", {
          staticClass: "empty",
          staticStyle: {
            "border-left": "1px",
            "border-top": "1px !important",
            "border-color": "#1D68A7 !important"
          },
          attrs: { colspan: "4" }
        }),
        _vm._v(" "),
        _c(
          "th",
          {
            staticStyle: {
              "border-left": "1px",
              "border-color": "#1D68A7 !important"
            },
            attrs: { colspan: "3" }
          },
          [_vm._v("Loan Amount and Balance")]
        ),
        _vm._v(" "),
        _c(
          "th",
          {
            staticStyle: {
              "border-left": "1px",
              "border-color": "#1D68A7 !important"
            },
            attrs: { colspan: "3" }
          },
          [_vm._v("Total Cost of Loan")]
        ),
        _vm._v(" "),
        _c(
          "th",
          {
            staticStyle: {
              "border-left": "1px",
              "border-color": "#1D68A7 !important"
            },
            attrs: { colspan: "2" }
          },
          [_vm._v("Compulsory Savings")]
        ),
        _vm._v(" "),
        _c("th", { staticClass: "empty", attrs: { colspan: "3" } })
      ]),
      _vm._v(" "),
      _c("tr", [
        _c("th", [_vm._v("#")]),
        _vm._v(" "),
        _c("th", [_vm._v("Date")]),
        _vm._v(" "),
        _c("th", [_vm._v("# Days")]),
        _vm._v(" "),
        _c(
          "th",
          { staticStyle: { "border-left": "1px", "border-color": "#1D68A7" } },
          [_vm._v("Paid by")]
        ),
        _vm._v(" "),
        _c("th", { staticClass: "boarder-left boarder-primary" }, [
          _vm._v("Disbursement")
        ]),
        _vm._v(" "),
        _c("th", [_vm._v("Principle Due")]),
        _vm._v(" "),
        _c(
          "th",
          { staticStyle: { "border-left": "1px", "border-color": "#1D68A7" } },
          [_vm._v(" Principle Balance")]
        ),
        _vm._v(" "),
        _c("th", [_vm._v("Interest due")]),
        _vm._v(" "),
        _c("th", [_vm._v("Fees")]),
        _vm._v(" "),
        _c(
          "th",
          { staticStyle: { "border-left": "1px", "border-color": "#1D68A7" } },
          [_vm._v("Penalties")]
        ),
        _vm._v(" "),
        _c("th", [_vm._v("Expected Savings")]),
        _vm._v(" "),
        _c(
          "th",
          { staticStyle: { "border-left": "1px", "border-color": "#1D68A7" } },
          [_vm._v("Actual Savings")]
        ),
        _vm._v(" "),
        _c("th", [_vm._v("Total Due")]),
        _vm._v(" "),
        _c("th", [_vm._v("Total Paid")]),
        _vm._v(" "),
        _c("th", [_vm._v("Total OutStanding")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("tr", [
      _c("td"),
      _vm._v(" "),
      _c("td", [_vm._v("10-01-2020")]),
      _vm._v(" "),
      _c("td"),
      _vm._v(" "),
      _c("td", {
        staticStyle: {
          "border-left": "1px",
          "border-color": "#1D68A7",
          "border-top-color": "#80808033",
          "border-bottom": "0px"
        }
      }),
      _vm._v(" "),
      _c("td", [_vm._v("50000.00")]),
      _vm._v(" "),
      _c("td"),
      _vm._v(" "),
      _c(
        "td",
        {
          staticStyle: {
            "border-left": "1px",
            "border-color": "#1D68A7",
            "border-top-color": "#80808033",
            "border-bottom": "0px"
          }
        },
        [_vm._v("50000.00")]
      ),
      _vm._v(" "),
      _c("td"),
      _vm._v(" "),
      _c("td", [_vm._v("0.00")]),
      _vm._v(" "),
      _c("td", {
        staticStyle: {
          "border-left": "1px",
          "border-color": "#1D68A7",
          "border-top-color": "#80808033",
          "border-bottom": "0px"
        }
      }),
      _vm._v(" "),
      _c("td", [_vm._v("5000.00")]),
      _vm._v(" "),
      _c("td", {
        staticStyle: {
          "border-left": "1px",
          "border-color": "#1D68A7",
          "border-top-color": "#80808033",
          "border-bottom": "0px"
        }
      }),
      _vm._v(" "),
      _c("td", [_vm._v("0.00")]),
      _vm._v(" "),
      _c("td", [_vm._v("0.00")]),
      _vm._v(" "),
      _c("td")
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("tr", { staticClass: "bg-gray" }, [
      _c("td"),
      _vm._v(" "),
      _c("td", [_vm._v("Total")]),
      _vm._v(" "),
      _c("td", [_vm._v("60")]),
      _vm._v(" "),
      _c("td", {
        staticStyle: {
          "border-left": "1px",
          "border-color": "#1D68A7",
          "border-top-color": "#80808033",
          "border-bottom": "0px"
        }
      }),
      _vm._v(" "),
      _c("td", [_vm._v("50000.00")]),
      _vm._v(" "),
      _c("td", [_vm._v("14000.00")]),
      _vm._v(" "),
      _c("td", {
        staticStyle: {
          "border-left": "1px",
          "border-color": "#1D68A7",
          "border-top-color": "#80808033",
          "border-bottom": "0px"
        }
      }),
      _vm._v(" "),
      _c("td", [_vm._v("1000.00")]),
      _vm._v(" "),
      _c("td", [_vm._v("1000.00")]),
      _vm._v(" "),
      _c(
        "td",
        {
          staticStyle: {
            "border-left": "1px",
            "border-color": "#1D68A7",
            "border-top-color": "#80808033",
            "border-bottom": "0px"
          }
        },
        [_vm._v("0.00")]
      ),
      _vm._v(" "),
      _c("td", [_vm._v("5000.00")]),
      _vm._v(" "),
      _c("td", {
        staticStyle: {
          "border-left": "1px",
          "border-color": "#1D68A7",
          "border-top-color": "#80808033",
          "border-bottom": "0px"
        }
      }),
      _vm._v(" "),
      _c("td", [_vm._v("16000.00")]),
      _vm._v(" "),
      _c("td", [_vm._v("7500.00")]),
      _vm._v(" "),
      _c("td", [_vm._v("8500.00")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      {
        staticClass: "tab-pane fade",
        attrs: {
          id: "transaction-tab",
          role: "tabpanel",
          "aria-labelledby": "transaction"
        }
      },
      [
        _c("div", { staticClass: "card-body" }, [
          _c(
            "table",
            {
              staticClass: "table table-striped my-4 w-100",
              attrs: { id: "datatable2" }
            },
            [
              _c("thead", [
                _c("tr", [
                  _c("th", { attrs: { "data-priority": "1" } }, [
                    _vm._v("Account Nbr")
                  ]),
                  _vm._v(" "),
                  _c("th", [_vm._v("Branch")]),
                  _vm._v(" "),
                  _c("th", [_vm._v("Loan Officer")]),
                  _vm._v(" "),
                  _c("th", [_vm._v("Group Name")]),
                  _vm._v(" "),
                  _c("th", { staticClass: "sort-alpha" }, [_vm._v("Amount")]),
                  _vm._v(" "),
                  _c("th", { staticClass: "sort-alpha" }, [_vm._v("Balance")]),
                  _vm._v(" "),
                  _c("th", { staticClass: "sort-alpha" }, [
                    _vm._v("Disbursed")
                  ]),
                  _vm._v(" "),
                  _c("th", { staticClass: "sort-alpha" }, [
                    _vm._v("Product Name")
                  ]),
                  _vm._v(" "),
                  _c("th", [_vm._v("View")])
                ])
              ]),
              _vm._v(" "),
              _c("tbody", [
                _c("tr", { staticClass: "gradeX" }, [
                  _c("td", [_vm._v("Trident")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Internet Explorer 4.0")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Win 95+")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("4")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("X")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("X")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("X")]),
                  _vm._v(" "),
                  _c("td", [
                    _c(
                      "a",
                      {
                        staticClass: "btn btn-primary",
                        attrs: { href: "/loan/details", type: "submit" }
                      },
                      [_c("i", { staticClass: "fa fa-eye" }), _vm._v(" view")]
                    )
                  ])
                ]),
                _vm._v(" "),
                _c("tr", { staticClass: "gradeC" }, [
                  _c("td", [_vm._v("Trident")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Internet Explorer 5.0")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Win 95+")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("5")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("C")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("X")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("X")]),
                  _vm._v(" "),
                  _c("td", [
                    _c("button", { staticClass: "btn btn-primary" }, [
                      _c("i", { staticClass: "fa fa-eye" }),
                      _vm._v(" view")
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("tr", { staticClass: "gradeA" }, [
                  _c("td", [_vm._v("Trident")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Internet Explorer 5.5")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Win 95+")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("5.5")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("A")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("X")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("X")]),
                  _vm._v(" "),
                  _c("td", [
                    _c("button", { staticClass: "btn btn-primary" }, [
                      _c("i", { staticClass: "fa fa-eye" }),
                      _vm._v(" view")
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("tr", { staticClass: "gradeA" }, [
                  _c("td", [_vm._v("Trident")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Internet Explorer 6")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Win 98+")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("6")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("A")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("X")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("X")]),
                  _vm._v(" "),
                  _c("td", [
                    _c("button", { staticClass: "btn btn-primary" }, [
                      _c("i", { staticClass: "fa fa-eye" }),
                      _vm._v(" view")
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("tr", { staticClass: "gradeA" }, [
                  _c("td", [_vm._v("Trident")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Internet Explorer 7")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Win XP SP2+")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("7")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("A")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("X")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("X")]),
                  _vm._v(" "),
                  _c("td", [
                    _c("button", { staticClass: "btn btn-primary" }, [
                      _c("i", { staticClass: "fa fa-eye" }),
                      _vm._v(" view")
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("tr", { staticClass: "gradeA" }, [
                  _c("td", [_vm._v("Trident")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("AOL browser (AOL desktop)")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Win XP")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("6")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("A")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("X")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("X")]),
                  _vm._v(" "),
                  _c("td", [
                    _c("button", { staticClass: "btn btn-primary" }, [
                      _c("i", { staticClass: "fa fa-eye" }),
                      _vm._v(" view")
                    ])
                  ])
                ])
              ])
            ]
          )
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "row" }, [
          _c(
            "button",
            {
              staticClass: "btn btn-labeled btn-primary ",
              attrs: { type: "button" }
            },
            [
              _c("span", { staticClass: "btn-label" }, [
                _c("i", { staticClass: "fa fa-note" })
              ]),
              _vm._v(
                "\n                                Min-statement\n                            "
              )
            ]
          ),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "btn btn-labeled btn-primary ",
              attrs: { type: "button" }
            },
            [
              _c("span", { staticClass: "btn-label" }, [
                _c("i", { staticClass: "fa fa-eye" })
              ]),
              _vm._v(
                "\n                                View Loan Journal\n                            "
              )
            ]
          )
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "row mt-2" }, [
          _c(
            "button",
            {
              staticClass: "btn btn-labeled btn-primary ",
              attrs: { type: "button" }
            },
            [
              _c("span", { staticClass: "btn-label" }, [
                _c("i", { staticClass: "fa fa-arrow-left" })
              ]),
              _vm._v(
                "\n                                previous\n                            "
              )
            ]
          ),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "btn btn-labeled btn-primary pl-2",
              attrs: { type: "button" }
            },
            [
              _vm._v(
                "\n                                Next\n                                "
              ),
              _c("span", { staticClass: "btn-label btn-label-right" }, [
                _c("i", { staticClass: "fa fa-arrow-right" })
              ])
            ]
          )
        ])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      {
        staticClass: "tab-pane fade",
        attrs: {
          id: "security-tab",
          role: "tabpanel",
          "aria-labelledby": "security"
        }
      },
      [
        _c("div", { staticClass: "row" }, [_c("h4", [_vm._v("Guarantors")])]),
        _vm._v(" "),
        _c("div", { staticClass: "row" }, [
          _c("table", { staticClass: "table table-bordered" }, [
            _c("tr", [
              _c("th", [_vm._v("Name")]),
              _vm._v(" "),
              _c("th", [_vm._v("Guarantor Type")]),
              _vm._v(" "),
              _c("th", [_vm._v("Branch Name")]),
              _vm._v(" "),
              _c("th", [_vm._v("Amount Guarantee")])
            ])
          ])
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "row" }, [_c("h4", [_vm._v("Collateral")])]),
        _vm._v(" "),
        _c("div", { staticClass: "row" }, [
          _c("table", { staticClass: "table table-bordered" }, [
            _c("tr", [
              _c("th", [_vm._v("Type")]),
              _vm._v(" "),
              _c("th", [_vm._v("Description")]),
              _vm._v(" "),
              _c("th", [_vm._v("Value")])
            ])
          ])
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "row mt-2" }, [
          _c(
            "button",
            {
              staticClass: "btn btn-labeled btn-primary ",
              attrs: { type: "button" }
            },
            [
              _c("span", { staticClass: "btn-label" }, [
                _c("i", { staticClass: "fa fa-arrow-left" })
              ]),
              _vm._v(
                "\n                                previous\n                            "
              )
            ]
          ),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "btn btn-labeled btn-primary pl-2",
              attrs: { type: "button" }
            },
            [
              _vm._v(
                "\n                                Next\n                                "
              ),
              _c("span", { staticClass: "btn-label btn-label-right" }, [
                _c("i", { staticClass: "fa fa-arrow-right" })
              ])
            ]
          )
        ])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      {
        staticClass: "tab-pane fade",
        attrs: {
          id: "standing-instruction-tab",
          role: "tabpanel",
          "aria-labelledby": "standard-instruction"
        }
      },
      [
        _c("div", { staticClass: "row mt-2" }, [
          _c("table", { staticClass: "table table-bordered" }, [
            _c("tr", [
              _c("th", [_vm._v("Name")]),
              _vm._v(" "),
              _c("th", [_vm._v("From Client")]),
              _vm._v(" "),
              _c("th", [_vm._v("From Account Number")]),
              _vm._v(" "),
              _c("th", [_vm._v("To Client")]),
              _vm._v(" "),
              _c("th", [_vm._v("To Account Number")])
            ]),
            _vm._v(" "),
            _c("tr", [_c("td")])
          ])
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "row mt-2" }, [
          _c(
            "button",
            {
              staticClass: "btn btn-labeled btn-primary ",
              attrs: { type: "button" }
            },
            [
              _c("span", { staticClass: "btn-label" }, [
                _c("i", { staticClass: "fa fa-arrow-left" })
              ]),
              _vm._v(
                "\n                                previous\n                            "
              )
            ]
          ),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "btn btn-labeled btn-primary pl-2",
              attrs: { type: "button" }
            },
            [
              _vm._v(
                "\n                                Next\n                                "
              ),
              _c("span", { staticClass: "btn-label btn-label-right" }, [
                _c("i", { staticClass: "fa fa-arrow-right" })
              ])
            ]
          )
        ])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      {
        staticClass: "tab-pane fade",
        attrs: { id: "crb-tab", role: "tabpanel", "aria-labelledby": "crb" }
      },
      [
        _c("div", { staticClass: "row mt-2" }, [
          _c("div", { staticClass: "table-responsive table-bordered" }, [
            _c("table", { staticClass: "table table-bordered" }, [
              _c("tr", [
                _c("th", [_vm._v("ID")]),
                _vm._v(" "),
                _c("th", [_vm._v("Start Date")]),
                _vm._v(" "),
                _c("th", [_vm._v("End Date")]),
                _vm._v(" "),
                _c("th", [_vm._v("Client")]),
                _vm._v(" "),
                _c("th", [_vm._v("Loan Account")]),
                _vm._v(" "),
                _c("th", [_vm._v("Status")])
              ]),
              _vm._v(" "),
              _c("tr", [_c("td")])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "row mt-2" }, [
              _c(
                "button",
                {
                  staticClass: "btn btn-labeled btn-primary ml-2 ",
                  attrs: { type: "button" }
                },
                [
                  _c("span", { staticClass: "btn-label" }, [
                    _c("i", { staticClass: "fa fa-arrow-left" })
                  ]),
                  _vm._v(
                    "\n                                        previous\n                                    "
                  )
                ]
              )
            ])
          ])
        ])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      {
        staticClass: "tab-pane fade",
        attrs: {
          id: "group-allocation-tab",
          role: "tabpanel",
          "aria-labelledby": "group"
        }
      },
      [
        _c("div", { staticClass: "row mt-2" }, [
          _c("div", { staticClass: "table-responsive table-bordered" }, [
            _c("table", { staticClass: "table table-bordered" }, [
              _c("tr", [
                _c("th", [_vm._v("Client Id")]),
                _vm._v(" "),
                _c("th", [_vm._v("Client")]),
                _vm._v(" "),
                _c("th", [_vm._v("Amount")])
              ]),
              _vm._v(" "),
              _c("tr", [_c("td")])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "row" })
          ])
        ])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      {
        staticClass: "tab-pane fade",
        attrs: {
          id: "survey-tab",
          role: "tabpanel",
          "aria-labelledby": "survey"
        }
      },
      [
        _c("div", { staticClass: "card-body" }, [
          _c(
            "table",
            {
              staticClass: "table table-striped my-4 w-100",
              attrs: { id: "datatable" }
            },
            [
              _c("thead", [
                _c("tr", [
                  _c("th", { attrs: { "data-priority": "1" } }, [
                    _vm._v("Account Nbr")
                  ]),
                  _vm._v(" "),
                  _c("th", [_vm._v("Client Name")]),
                  _vm._v(" "),
                  _c("th", [
                    _vm._v(
                      "Savings Account Number/th>\n                                        "
                    )
                  ]),
                  _c(
                    "th",
                    {
                      staticClass: "sort-alpha",
                      attrs: { "data-priority": "2" }
                    },
                    [_vm._v("Approved Shares")]
                  ),
                  _vm._v(" "),
                  _c(
                    "th",
                    {
                      staticClass: "sort-alpha",
                      attrs: { "data-priority": "2" }
                    },
                    [_vm._v("Prodcut Name")]
                  )
                ])
              ]),
              _vm._v(" "),
              _c("tbody", [
                _c("tr", { staticClass: "gradeX" }, [
                  _c("td", [_vm._v("Trident")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Internet Explorer 4.0")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Win 95+")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("4")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("X")])
                ]),
                _vm._v(" "),
                _c("tr", { staticClass: "gradeC" }, [
                  _c("td", [_vm._v("Trident")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Internet Explorer 5.0")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Win 95+")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("5")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("C")])
                ]),
                _vm._v(" "),
                _c("tr", { staticClass: "gradeA" }, [
                  _c("td", [_vm._v("Trident")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Internet Explorer 5.5")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Win 95+")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("5.5")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("A")])
                ]),
                _vm._v(" "),
                _c("tr", { staticClass: "gradeA" }, [
                  _c("td", [_vm._v("Trident")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Internet Explorer 6")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Win 98+")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("6")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("A")])
                ]),
                _vm._v(" "),
                _c("tr", { staticClass: "gradeA" }, [
                  _c("td", [_vm._v("Trident")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Internet Explorer 7")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Win XP SP2+")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("7")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("A")])
                ]),
                _vm._v(" "),
                _c("tr", { staticClass: "gradeA" }, [
                  _c("td", [_vm._v("Trident")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("AOL browser (AOL desktop)")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Win XP")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("6")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("A")])
                ]),
                _vm._v(" "),
                _c("tr", { staticClass: "gradeA" }, [
                  _c("td", [_vm._v("Gecko")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Firefox 1.0")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Win 98+ / OSX.2+")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("1.7")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("A")])
                ]),
                _vm._v(" "),
                _c("tr", { staticClass: "gradeA" }, [
                  _c("td", [_vm._v("Gecko")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Firefox 1.5")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Win 98+ / OSX.2+")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("1.8")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("A")])
                ]),
                _vm._v(" "),
                _c("tr", { staticClass: "gradeA" }, [
                  _c("td", [_vm._v("Gecko")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Firefox 2.0")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("Win 98+ / OSX.2+")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("1.8")]),
                  _vm._v(" "),
                  _c("td", [_vm._v("A")])
                ])
              ])
            ]
          )
        ])
      ]
    )
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/overpaid.vue?vue&type=template&id=54c71424&":
/*!****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loan/overpaid.vue?vue&type=template&id=54c71424& ***!
  \****************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm._m(0)
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", [
      _c("div", { staticClass: "content-heading" }, [
        _c("div", [_vm._v("\n          Overpaid Loans\n      ")])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "container-fluid" }, [
        _c("div", { staticClass: "card" }, [
          _c("div", { staticClass: "card-body" }, [
            _c(
              "table",
              {
                staticClass: "table table-striped my-4 w100 responsive",
                attrs: { id: "datatable2" }
              },
              [
                _c("thead", [
                  _c("tr", [
                    _c("th", [_vm._v("Account Nbr")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Branch")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Loan Officer")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Client Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Group Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Amount")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Balanced")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Disbursed")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Product Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("View")])
                  ])
                ]),
                _vm._v(" "),
                _c("tbody")
              ]
            )
          ])
        ])
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/pedding-approval.vue?vue&type=template&id=2a300287&":
/*!************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loan/pedding-approval.vue?vue&type=template&id=2a300287& ***!
  \************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "content-heading" }, [
      _c("div", [
        _vm._v("\n          " + _vm._s(_vm.title) + "\n          "),
        _c("small", [_vm._v("All load with in microfinance")])
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "container-fluid" }, [
      _c("div", { staticClass: "card" }, [
        _vm._m(0),
        _vm._v(" "),
        _c("div", { staticClass: "card-body" }, [
          _c(
            "table",
            {
              staticClass: "table table-striped my-4 w-100",
              attrs: { id: "datatable2" }
            },
            [
              _vm._m(1),
              _vm._v(" "),
              _c(
                "tbody",
                _vm._l(_vm.loans, function(loan) {
                  return _c("tr", { key: loan.id, staticClass: "gradeX" }, [
                    _c("td"),
                    _vm._v(" "),
                    _c("td"),
                    _vm._v(" "),
                    _c("td"),
                    _vm._v(" "),
                    _c("td", [_vm._v(_vm._s(loan.amount))]),
                    _vm._v(" "),
                    _c("td"),
                    _vm._v(" "),
                    _c("td", [_vm._v(_vm._s(loan.disbursement_date))]),
                    _vm._v(" "),
                    _c("td", [_vm._v("X")]),
                    _vm._v(" "),
                    _vm._m(2, true)
                  ])
                }),
                0
              )
            ]
          )
        ])
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "card-header" }, [
      _c("div", { staticClass: "card-title" }, [_vm._v("All Loans")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("thead", [
      _c("tr", [
        _c("th", { attrs: { "data-priority": "1" } }, [_vm._v("Account Nbr")]),
        _vm._v(" "),
        _c("th", [_vm._v("Branch")]),
        _vm._v(" "),
        _c("th", [_vm._v("Loan Officer")]),
        _vm._v(" "),
        _c("th", { staticClass: "sort-alpha" }, [_vm._v("Amount")]),
        _vm._v(" "),
        _c("th", { staticClass: "sort-alpha" }, [_vm._v("Balance")]),
        _vm._v(" "),
        _c("th", { staticClass: "sort-alpha" }, [_vm._v("created Date")]),
        _vm._v(" "),
        _c("th", { staticClass: "sort-alpha" }, [_vm._v("Product Name")]),
        _vm._v(" "),
        _c("th", [_vm._v("View")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [
      _c("a", { attrs: { href: "/loan/details/" } }, [
        _c("button", { staticClass: "btn btn-primary" }, [
          _c(
            "i",
            { staticClass: "fa fa-eye", staticStyle: { color: "white" } },
            [_vm._v(" view")]
          )
        ])
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/pennding-second-approval.vue?vue&type=template&id=529db426&":
/*!********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loan/pennding-second-approval.vue?vue&type=template&id=529db426& ***!
  \********************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm._m(0)
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", [
      _c("div", { staticClass: "content-heading" }, [
        _c("div", [_vm._v("\n          Pending Second Approval\n      ")])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "container-fluid" }, [
        _c("div", { staticClass: "card" }, [
          _c("div", { staticClass: "card-body" }, [
            _c(
              "table",
              {
                staticClass: "table table-striped my-4 w100",
                attrs: { id: "datatable2" }
              },
              [
                _c("thead", [
                  _c("tr", [
                    _c("th", [_vm._v("Account Nbr")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Branch")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Loan Officer")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Client Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Group Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Amount")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Created Date")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Product Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("View")])
                  ])
                ]),
                _vm._v(" "),
                _c("tbody")
              ]
            )
          ])
        ])
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/rejected.vue?vue&type=template&id=66757402&":
/*!****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loan/rejected.vue?vue&type=template&id=66757402& ***!
  \****************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm._m(0)
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", [
      _c("div", { staticClass: "content-heading" }, [
        _c("div", [_vm._v("\n          Rejected Loans\n      ")])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "container-fluid" }, [
        _c("div", { staticClass: "card" }, [
          _c("div", { staticClass: "card-body" }, [
            _c(
              "table",
              {
                staticClass: "table table-striped my-4 w100",
                attrs: { id: "datatable2" }
              },
              [
                _c("thead", [
                  _c("tr", [
                    _c("th", [_vm._v("Account Nbr")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Branch")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Loan Officer")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Client Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Group Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Amount")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Submitted On")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Rejected On Date")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Product Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("View")])
                  ])
                ]),
                _vm._v(" "),
                _c("tbody")
              ]
            )
          ])
        ])
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/view-loans.vue?vue&type=template&id=35289342&":
/*!******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loan/view-loans.vue?vue&type=template&id=35289342& ***!
  \******************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "content-heading" }, [
      _c("div", [
        _vm._v("\n          " + _vm._s(_vm.title) + "\n          "),
        _c("small", [_vm._v("All load with in microfinance")])
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "container-fluid" }, [
      _c("div", { staticClass: "card" }, [
        _vm._m(0),
        _vm._v(" "),
        _c("div", { staticClass: "card-body" }, [
          _c(
            "table",
            {
              staticClass: "table table-striped my-4 w-100 responsive",
              attrs: { id: "datatable2" }
            },
            [
              _vm._m(1),
              _vm._v(" "),
              _c(
                "tbody",
                _vm._l(_vm.loans, function(loan) {
                  return _c("tr", { key: loan.id, staticClass: "gradeX" }, [
                    _c("td"),
                    _vm._v(" "),
                    _c("td"),
                    _vm._v(" "),
                    _c("td"),
                    _vm._v(" "),
                    _c("td", [_vm._v(_vm._s(loan.amount))]),
                    _vm._v(" "),
                    _c("td"),
                    _vm._v(" "),
                    _c("td", [_vm._v(_vm._s(loan.disbursement_date))]),
                    _vm._v(" "),
                    _c("td", [_vm._v("X")]),
                    _vm._v(" "),
                    _c("td", [
                      _c("a", { attrs: { href: "details/" + loan.id } }, [
                        _c(
                          "button",
                          {
                            staticClass: "btn btn-primary",
                            on: {
                              click: function($event) {
                                return _vm.getLoanId(loan.id)
                              }
                            }
                          },
                          [
                            _c(
                              "i",
                              {
                                staticClass: "fa fa-eye",
                                staticStyle: { color: "white" }
                              },
                              [_vm._v(" view")]
                            )
                          ]
                        )
                      ])
                    ])
                  ])
                }),
                0
              )
            ]
          )
        ])
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "card-header" }, [
      _c("div", { staticClass: "card-title" }, [_vm._v("All Loans")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("thead", [
      _c("tr", [
        _c("th", { attrs: { "data-priority": "1" } }, [_vm._v("Account Nbr")]),
        _vm._v(" "),
        _c("th", [_vm._v("Branch")]),
        _vm._v(" "),
        _c("th", [_vm._v("Loan Officer")]),
        _vm._v(" "),
        _c("th", { staticClass: "sort-alpha" }, [_vm._v("Amount")]),
        _vm._v(" "),
        _c("th", { staticClass: "sort-alpha" }, [_vm._v("Balance")]),
        _vm._v(" "),
        _c("th", { staticClass: "sort-alpha" }, [_vm._v("Disbursed")]),
        _vm._v(" "),
        _c("th", { staticClass: "sort-alpha" }, [_vm._v("Product Name")]),
        _vm._v(" "),
        _c("th", [_vm._v("View")])
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/withdraw.vue?vue&type=template&id=2079448e&":
/*!****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loan/withdraw.vue?vue&type=template&id=2079448e& ***!
  \****************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm._m(0)
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", [
      _c("div", { staticClass: "content-heading" }, [
        _c("div", [_vm._v("\n          Withdraw Loans\n      ")])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "container-fluid" }, [
        _c("div", { staticClass: "card" }, [
          _c("div", { staticClass: "card-body" }, [
            _c(
              "table",
              {
                staticClass: "table table-striped my-4 w100",
                attrs: { id: "datatable2" }
              },
              [
                _c("thead", [
                  _c("tr", [
                    _c("th", [_vm._v("Account Nbr")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Branch")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Loan Officer")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Client Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Group Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Amount")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Submitted On")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Withdrawn On")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Product Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("View")])
                  ])
                ]),
                _vm._v(" "),
                _c("tbody")
              ]
            )
          ])
        ])
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/written-off.vue?vue&type=template&id=72814b36&":
/*!*******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loan/written-off.vue?vue&type=template&id=72814b36& ***!
  \*******************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm._m(0)
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", [
      _c("div", { staticClass: "content-heading" }, [
        _c("div", [_vm._v("\n          Written Off Loans\n      ")])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "container-fluid" }, [
        _c("div", { staticClass: "card" }, [
          _c("div", { staticClass: "card-body" }, [
            _c(
              "table",
              {
                staticClass: "table table-striped my-4 w100",
                attrs: { id: "datatable2" }
              },
              [
                _c("thead", [
                  _c("tr", [
                    _c("th", [_vm._v("Account Nbr")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Branch")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Loan Officer")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Client Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Group Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Amount")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Written Off On")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Product Name")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("View")])
                  ])
                ]),
                _vm._v(" "),
                _c("tbody")
              ]
            )
          ])
        ])
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/pending-approval-clients.vue?vue&type=template&id=c8d88982&":
/*!***************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/pending-approval-clients.vue?vue&type=template&id=c8d88982& ***!
  \***************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _vm._m(0),
    _vm._v(" "),
    _c("div", { staticClass: "container-fluid" }, [
      _c("div", { staticClass: "card" }, [
        _vm._m(1),
        _vm._v(" "),
        _c("div", { staticClass: "card-body" }, [
          _c(
            "table",
            {
              staticClass: "table table-striped my-4 w-100",
              attrs: { id: "pendingApproval" }
            },
            [
              _vm._m(2),
              _vm._v(" "),
              _c(
                "tbody",
                _vm._l(_vm.clients, function(client) {
                  return _c("tr", { key: client.id }, [
                    _c("td", [_vm._v(_vm._s(client.id))]),
                    _vm._v(" "),
                    _c("td", [
                      _vm._v(
                        _vm._s(
                          client["profile"].first_name +
                            " " +
                            client["profile"].last_name
                        )
                      )
                    ]),
                    _vm._v(" "),
                    _c("td"),
                    _vm._v(" "),
                    _c("td", [
                      _vm._v(" " + _vm._s(client["branch"].name) + " ")
                    ]),
                    _vm._v(" "),
                    _c("td", [_vm._v("Mr. JPM")]),
                    _vm._v(" "),
                    _c("td", [_vm._v(_vm._s(client.registration_date))]),
                    _vm._v(" "),
                    _vm._m(3, true)
                  ])
                }),
                0
              )
            ]
          )
        ])
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "content-heading" }, [
      _c("div", [_vm._v("\n            Pending Approval\n        ")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "card-header" }, [
      _c("div", { staticClass: "card-title" }),
      _vm._v(" "),
      _c("div", { staticClass: "text-sm" })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("thead", [
      _c("tr", [
        _c("th", { attrs: { "data-priority": "1" } }, [_vm._v("Client Id")]),
        _vm._v(" "),
        _c("th", [_vm._v("Display Name")]),
        _vm._v(" "),
        _c("th", [_vm._v("Group Name")]),
        _vm._v(" "),
        _c("th", [_vm._v("Branch")]),
        _vm._v(" "),
        _c("th", [_vm._v("Loan Officer")]),
        _vm._v(" "),
        _c("th", [_vm._v("Registration Date")]),
        _vm._v(" "),
        _c("th", [_vm._v("Action")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [
      _c("button", { staticClass: "btn btn-sm btn-primary " }, [
        _c("i", { staticClass: "fas fa-eye" }),
        _vm._v(
          "\n                                View\n                            "
        )
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return normalizeComponent; });
/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file (except for modules).
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

function normalizeComponent (
  scriptExports,
  render,
  staticRenderFns,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier, /* server only */
  shadowMode /* vue-cli only */
) {
  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (render) {
    options.render = render
    options.staticRenderFns = staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = 'data-v-' + scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = shadowMode
      ? function () { injectStyles.call(this, this.$root.$options.shadowRoot) }
      : injectStyles
  }

  if (hook) {
    if (options.functional) {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functional component in vue file
      var originalRender = options.render
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return originalRender(h, context)
      }
    } else {
      // inject component registration as beforeCreate hook
      var existing = options.beforeCreate
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    }
  }

  return {
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ "./resources/js/components/loan/awaiting.vue":
/*!***************************************************!*\
  !*** ./resources/js/components/loan/awaiting.vue ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _awaiting_vue_vue_type_template_id_745fc160___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./awaiting.vue?vue&type=template&id=745fc160& */ "./resources/js/components/loan/awaiting.vue?vue&type=template&id=745fc160&");
/* harmony import */ var _awaiting_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./awaiting.vue?vue&type=script&lang=js& */ "./resources/js/components/loan/awaiting.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _awaiting_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _awaiting_vue_vue_type_template_id_745fc160___WEBPACK_IMPORTED_MODULE_0__["render"],
  _awaiting_vue_vue_type_template_id_745fc160___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/loan/awaiting.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/loan/awaiting.vue?vue&type=script&lang=js&":
/*!****************************************************************************!*\
  !*** ./resources/js/components/loan/awaiting.vue?vue&type=script&lang=js& ***!
  \****************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_awaiting_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./awaiting.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/awaiting.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_awaiting_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/loan/awaiting.vue?vue&type=template&id=745fc160&":
/*!**********************************************************************************!*\
  !*** ./resources/js/components/loan/awaiting.vue?vue&type=template&id=745fc160& ***!
  \**********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_awaiting_vue_vue_type_template_id_745fc160___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./awaiting.vue?vue&type=template&id=745fc160& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/awaiting.vue?vue&type=template&id=745fc160&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_awaiting_vue_vue_type_template_id_745fc160___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_awaiting_vue_vue_type_template_id_745fc160___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/components/loan/closed.vue":
/*!*************************************************!*\
  !*** ./resources/js/components/loan/closed.vue ***!
  \*************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _closed_vue_vue_type_template_id_f1dbb620___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./closed.vue?vue&type=template&id=f1dbb620& */ "./resources/js/components/loan/closed.vue?vue&type=template&id=f1dbb620&");
/* harmony import */ var _closed_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./closed.vue?vue&type=script&lang=js& */ "./resources/js/components/loan/closed.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _closed_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _closed_vue_vue_type_template_id_f1dbb620___WEBPACK_IMPORTED_MODULE_0__["render"],
  _closed_vue_vue_type_template_id_f1dbb620___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/loan/closed.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/loan/closed.vue?vue&type=script&lang=js&":
/*!**************************************************************************!*\
  !*** ./resources/js/components/loan/closed.vue?vue&type=script&lang=js& ***!
  \**************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_closed_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./closed.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/closed.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_closed_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/loan/closed.vue?vue&type=template&id=f1dbb620&":
/*!********************************************************************************!*\
  !*** ./resources/js/components/loan/closed.vue?vue&type=template&id=f1dbb620& ***!
  \********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_closed_vue_vue_type_template_id_f1dbb620___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./closed.vue?vue&type=template&id=f1dbb620& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/closed.vue?vue&type=template&id=f1dbb620&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_closed_vue_vue_type_template_id_f1dbb620___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_closed_vue_vue_type_template_id_f1dbb620___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/components/loan/loan-detail.vue":
/*!******************************************************!*\
  !*** ./resources/js/components/loan/loan-detail.vue ***!
  \******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _loan_detail_vue_vue_type_template_id_1ca6b7fa___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./loan-detail.vue?vue&type=template&id=1ca6b7fa& */ "./resources/js/components/loan/loan-detail.vue?vue&type=template&id=1ca6b7fa&");
/* harmony import */ var _loan_detail_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./loan-detail.vue?vue&type=script&lang=js& */ "./resources/js/components/loan/loan-detail.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _loan_detail_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _loan_detail_vue_vue_type_template_id_1ca6b7fa___WEBPACK_IMPORTED_MODULE_0__["render"],
  _loan_detail_vue_vue_type_template_id_1ca6b7fa___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/loan/loan-detail.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/loan/loan-detail.vue?vue&type=script&lang=js&":
/*!*******************************************************************************!*\
  !*** ./resources/js/components/loan/loan-detail.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_loan_detail_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./loan-detail.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/loan-detail.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_loan_detail_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/loan/loan-detail.vue?vue&type=template&id=1ca6b7fa&":
/*!*************************************************************************************!*\
  !*** ./resources/js/components/loan/loan-detail.vue?vue&type=template&id=1ca6b7fa& ***!
  \*************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_loan_detail_vue_vue_type_template_id_1ca6b7fa___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./loan-detail.vue?vue&type=template&id=1ca6b7fa& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/loan-detail.vue?vue&type=template&id=1ca6b7fa&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_loan_detail_vue_vue_type_template_id_1ca6b7fa___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_loan_detail_vue_vue_type_template_id_1ca6b7fa___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/components/loan/overpaid.vue":
/*!***************************************************!*\
  !*** ./resources/js/components/loan/overpaid.vue ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _overpaid_vue_vue_type_template_id_54c71424___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./overpaid.vue?vue&type=template&id=54c71424& */ "./resources/js/components/loan/overpaid.vue?vue&type=template&id=54c71424&");
/* harmony import */ var _overpaid_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./overpaid.vue?vue&type=script&lang=js& */ "./resources/js/components/loan/overpaid.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _overpaid_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _overpaid_vue_vue_type_template_id_54c71424___WEBPACK_IMPORTED_MODULE_0__["render"],
  _overpaid_vue_vue_type_template_id_54c71424___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/loan/overpaid.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/loan/overpaid.vue?vue&type=script&lang=js&":
/*!****************************************************************************!*\
  !*** ./resources/js/components/loan/overpaid.vue?vue&type=script&lang=js& ***!
  \****************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_overpaid_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./overpaid.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/overpaid.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_overpaid_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/loan/overpaid.vue?vue&type=template&id=54c71424&":
/*!**********************************************************************************!*\
  !*** ./resources/js/components/loan/overpaid.vue?vue&type=template&id=54c71424& ***!
  \**********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_overpaid_vue_vue_type_template_id_54c71424___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./overpaid.vue?vue&type=template&id=54c71424& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/overpaid.vue?vue&type=template&id=54c71424&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_overpaid_vue_vue_type_template_id_54c71424___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_overpaid_vue_vue_type_template_id_54c71424___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/components/loan/pedding-approval.vue":
/*!***********************************************************!*\
  !*** ./resources/js/components/loan/pedding-approval.vue ***!
  \***********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _pedding_approval_vue_vue_type_template_id_2a300287___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./pedding-approval.vue?vue&type=template&id=2a300287& */ "./resources/js/components/loan/pedding-approval.vue?vue&type=template&id=2a300287&");
/* harmony import */ var _pedding_approval_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./pedding-approval.vue?vue&type=script&lang=js& */ "./resources/js/components/loan/pedding-approval.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _pedding_approval_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _pedding_approval_vue_vue_type_template_id_2a300287___WEBPACK_IMPORTED_MODULE_0__["render"],
  _pedding_approval_vue_vue_type_template_id_2a300287___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/loan/pedding-approval.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/loan/pedding-approval.vue?vue&type=script&lang=js&":
/*!************************************************************************************!*\
  !*** ./resources/js/components/loan/pedding-approval.vue?vue&type=script&lang=js& ***!
  \************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_pedding_approval_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./pedding-approval.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/pedding-approval.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_pedding_approval_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/loan/pedding-approval.vue?vue&type=template&id=2a300287&":
/*!******************************************************************************************!*\
  !*** ./resources/js/components/loan/pedding-approval.vue?vue&type=template&id=2a300287& ***!
  \******************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_pedding_approval_vue_vue_type_template_id_2a300287___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./pedding-approval.vue?vue&type=template&id=2a300287& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/pedding-approval.vue?vue&type=template&id=2a300287&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_pedding_approval_vue_vue_type_template_id_2a300287___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_pedding_approval_vue_vue_type_template_id_2a300287___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/components/loan/pennding-second-approval.vue":
/*!*******************************************************************!*\
  !*** ./resources/js/components/loan/pennding-second-approval.vue ***!
  \*******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _pennding_second_approval_vue_vue_type_template_id_529db426___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./pennding-second-approval.vue?vue&type=template&id=529db426& */ "./resources/js/components/loan/pennding-second-approval.vue?vue&type=template&id=529db426&");
/* harmony import */ var _pennding_second_approval_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./pennding-second-approval.vue?vue&type=script&lang=js& */ "./resources/js/components/loan/pennding-second-approval.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _pennding_second_approval_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _pennding_second_approval_vue_vue_type_template_id_529db426___WEBPACK_IMPORTED_MODULE_0__["render"],
  _pennding_second_approval_vue_vue_type_template_id_529db426___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/loan/pennding-second-approval.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/loan/pennding-second-approval.vue?vue&type=script&lang=js&":
/*!********************************************************************************************!*\
  !*** ./resources/js/components/loan/pennding-second-approval.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_pennding_second_approval_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./pennding-second-approval.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/pennding-second-approval.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_pennding_second_approval_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/loan/pennding-second-approval.vue?vue&type=template&id=529db426&":
/*!**************************************************************************************************!*\
  !*** ./resources/js/components/loan/pennding-second-approval.vue?vue&type=template&id=529db426& ***!
  \**************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_pennding_second_approval_vue_vue_type_template_id_529db426___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./pennding-second-approval.vue?vue&type=template&id=529db426& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/pennding-second-approval.vue?vue&type=template&id=529db426&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_pennding_second_approval_vue_vue_type_template_id_529db426___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_pennding_second_approval_vue_vue_type_template_id_529db426___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/components/loan/rejected.vue":
/*!***************************************************!*\
  !*** ./resources/js/components/loan/rejected.vue ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _rejected_vue_vue_type_template_id_66757402___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./rejected.vue?vue&type=template&id=66757402& */ "./resources/js/components/loan/rejected.vue?vue&type=template&id=66757402&");
/* harmony import */ var _rejected_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./rejected.vue?vue&type=script&lang=js& */ "./resources/js/components/loan/rejected.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _rejected_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _rejected_vue_vue_type_template_id_66757402___WEBPACK_IMPORTED_MODULE_0__["render"],
  _rejected_vue_vue_type_template_id_66757402___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/loan/rejected.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/loan/rejected.vue?vue&type=script&lang=js&":
/*!****************************************************************************!*\
  !*** ./resources/js/components/loan/rejected.vue?vue&type=script&lang=js& ***!
  \****************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_rejected_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./rejected.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/rejected.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_rejected_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/loan/rejected.vue?vue&type=template&id=66757402&":
/*!**********************************************************************************!*\
  !*** ./resources/js/components/loan/rejected.vue?vue&type=template&id=66757402& ***!
  \**********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_rejected_vue_vue_type_template_id_66757402___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./rejected.vue?vue&type=template&id=66757402& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/rejected.vue?vue&type=template&id=66757402&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_rejected_vue_vue_type_template_id_66757402___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_rejected_vue_vue_type_template_id_66757402___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/components/loan/view-loans.vue":
/*!*****************************************************!*\
  !*** ./resources/js/components/loan/view-loans.vue ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _view_loans_vue_vue_type_template_id_35289342___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./view-loans.vue?vue&type=template&id=35289342& */ "./resources/js/components/loan/view-loans.vue?vue&type=template&id=35289342&");
/* harmony import */ var _view_loans_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./view-loans.vue?vue&type=script&lang=js& */ "./resources/js/components/loan/view-loans.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _view_loans_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _view_loans_vue_vue_type_template_id_35289342___WEBPACK_IMPORTED_MODULE_0__["render"],
  _view_loans_vue_vue_type_template_id_35289342___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/loan/view-loans.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/loan/view-loans.vue?vue&type=script&lang=js&":
/*!******************************************************************************!*\
  !*** ./resources/js/components/loan/view-loans.vue?vue&type=script&lang=js& ***!
  \******************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_view_loans_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./view-loans.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/view-loans.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_view_loans_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/loan/view-loans.vue?vue&type=template&id=35289342&":
/*!************************************************************************************!*\
  !*** ./resources/js/components/loan/view-loans.vue?vue&type=template&id=35289342& ***!
  \************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_view_loans_vue_vue_type_template_id_35289342___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./view-loans.vue?vue&type=template&id=35289342& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/view-loans.vue?vue&type=template&id=35289342&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_view_loans_vue_vue_type_template_id_35289342___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_view_loans_vue_vue_type_template_id_35289342___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/components/loan/withdraw.vue":
/*!***************************************************!*\
  !*** ./resources/js/components/loan/withdraw.vue ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _withdraw_vue_vue_type_template_id_2079448e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./withdraw.vue?vue&type=template&id=2079448e& */ "./resources/js/components/loan/withdraw.vue?vue&type=template&id=2079448e&");
/* harmony import */ var _withdraw_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./withdraw.vue?vue&type=script&lang=js& */ "./resources/js/components/loan/withdraw.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _withdraw_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _withdraw_vue_vue_type_template_id_2079448e___WEBPACK_IMPORTED_MODULE_0__["render"],
  _withdraw_vue_vue_type_template_id_2079448e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/loan/withdraw.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/loan/withdraw.vue?vue&type=script&lang=js&":
/*!****************************************************************************!*\
  !*** ./resources/js/components/loan/withdraw.vue?vue&type=script&lang=js& ***!
  \****************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_withdraw_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./withdraw.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/withdraw.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_withdraw_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/loan/withdraw.vue?vue&type=template&id=2079448e&":
/*!**********************************************************************************!*\
  !*** ./resources/js/components/loan/withdraw.vue?vue&type=template&id=2079448e& ***!
  \**********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_withdraw_vue_vue_type_template_id_2079448e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./withdraw.vue?vue&type=template&id=2079448e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/withdraw.vue?vue&type=template&id=2079448e&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_withdraw_vue_vue_type_template_id_2079448e___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_withdraw_vue_vue_type_template_id_2079448e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/components/loan/written-off.vue":
/*!******************************************************!*\
  !*** ./resources/js/components/loan/written-off.vue ***!
  \******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _written_off_vue_vue_type_template_id_72814b36___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./written-off.vue?vue&type=template&id=72814b36& */ "./resources/js/components/loan/written-off.vue?vue&type=template&id=72814b36&");
/* harmony import */ var _written_off_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./written-off.vue?vue&type=script&lang=js& */ "./resources/js/components/loan/written-off.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _written_off_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _written_off_vue_vue_type_template_id_72814b36___WEBPACK_IMPORTED_MODULE_0__["render"],
  _written_off_vue_vue_type_template_id_72814b36___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/loan/written-off.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/loan/written-off.vue?vue&type=script&lang=js&":
/*!*******************************************************************************!*\
  !*** ./resources/js/components/loan/written-off.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_written_off_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./written-off.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/written-off.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_written_off_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/loan/written-off.vue?vue&type=template&id=72814b36&":
/*!*************************************************************************************!*\
  !*** ./resources/js/components/loan/written-off.vue?vue&type=template&id=72814b36& ***!
  \*************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_written_off_vue_vue_type_template_id_72814b36___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./written-off.vue?vue&type=template&id=72814b36& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loan/written-off.vue?vue&type=template&id=72814b36&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_written_off_vue_vue_type_template_id_72814b36___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_written_off_vue_vue_type_template_id_72814b36___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/components/pending-approval-clients.vue":
/*!**************************************************************!*\
  !*** ./resources/js/components/pending-approval-clients.vue ***!
  \**************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _pending_approval_clients_vue_vue_type_template_id_c8d88982___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./pending-approval-clients.vue?vue&type=template&id=c8d88982& */ "./resources/js/components/pending-approval-clients.vue?vue&type=template&id=c8d88982&");
/* harmony import */ var _pending_approval_clients_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./pending-approval-clients.vue?vue&type=script&lang=js& */ "./resources/js/components/pending-approval-clients.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _pending_approval_clients_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _pending_approval_clients_vue_vue_type_template_id_c8d88982___WEBPACK_IMPORTED_MODULE_0__["render"],
  _pending_approval_clients_vue_vue_type_template_id_c8d88982___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/pending-approval-clients.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/pending-approval-clients.vue?vue&type=script&lang=js&":
/*!***************************************************************************************!*\
  !*** ./resources/js/components/pending-approval-clients.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_pending_approval_clients_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./pending-approval-clients.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/pending-approval-clients.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_pending_approval_clients_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/pending-approval-clients.vue?vue&type=template&id=c8d88982&":
/*!*********************************************************************************************!*\
  !*** ./resources/js/components/pending-approval-clients.vue?vue&type=template&id=c8d88982& ***!
  \*********************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_pending_approval_clients_vue_vue_type_template_id_c8d88982___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./pending-approval-clients.vue?vue&type=template&id=c8d88982& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/pending-approval-clients.vue?vue&type=template&id=c8d88982&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_pending_approval_clients_vue_vue_type_template_id_c8d88982___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_pending_approval_clients_vue_vue_type_template_id_c8d88982___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/service-provider.js":
/*!******************************************!*\
  !*** ./resources/js/service-provider.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/**
 * Created by henry on 23-Mar-20.
 */
__webpack_require__(/*! @Service/pending-approval-clients */ "./resources/js/services/pending-approval-clients.js");

__webpack_require__(/*! @Service/http */ "./resources/js/services/http.js"); //Loan services


__webpack_require__(/*! @Service/loan/view-loan-service */ "./resources/js/services/loan/view-loan-service.js");

__webpack_require__(/*! @Service/loan/pedding-approval-service */ "./resources/js/services/loan/pedding-approval-service.js");

__webpack_require__(/*! @Service/loan/pedding-second-approval */ "./resources/js/services/loan/pedding-second-approval.js");

__webpack_require__(/*! @Service/loan/overpaid-service */ "./resources/js/services/loan/overpaid-service.js");

__webpack_require__(/*! @Service/loan/awaiting-service */ "./resources/js/services/loan/awaiting-service.js");

__webpack_require__(/*! @Service/loan/rejected-service */ "./resources/js/services/loan/rejected-service.js");

__webpack_require__(/*! @Service/loan/writtenoff-service */ "./resources/js/services/loan/writtenoff-service.js");

__webpack_require__(/*! @Service/loan/closed-service */ "./resources/js/services/loan/closed-service.js");

__webpack_require__(/*! @Service/loan/withdraw-service */ "./resources/js/services/loan/withdraw-service.js");

__webpack_require__(/*! @Service/loan/loan-detail-service */ "./resources/js/services/loan/loan-detail-service.js");

/***/ }),

/***/ "./resources/js/services/http.js":
/*!***************************************!*\
  !*** ./resources/js/services/http.js ***!
  \***************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_0__);
/**
 * Created by henry on 23-Mar-20.
 */

Container.provide({
  register: function register(_ref) {
    var container = _ref.container,
        content = _ref.content;
    container.bind('clients', function () {
      return axios__WEBPACK_IMPORTED_MODULE_0___default.a.get("api/client/list").then(function (_ref2) {
        var data = _ref2.data;
        return data;
      });
    });
  }
});
Container.provide({
  register: function register(_ref3) {
    var container = _ref3.container,
        content = _ref3.content;
    container.bind('viewLoans', function () {
      return axios__WEBPACK_IMPORTED_MODULE_0___default.a.get('/api/loan/list').then(function (_ref4) {
        var data = _ref4.data;
        return data;
      });
    });
  }
});

/***/ }),

/***/ "./resources/js/services/loan/awaiting-service.js":
/*!********************************************************!*\
  !*** ./resources/js/services/loan/awaiting-service.js ***!
  \********************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Component_loan_awaiting__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @Component/loan/awaiting */ "./resources/js/components/loan/awaiting.vue");

Container.provide({
  register: function register(_ref) {
    var Vue = _ref.Vue;
    Vue.component('awaiting-loans', _Component_loan_awaiting__WEBPACK_IMPORTED_MODULE_0__["default"]);
  }
});

/***/ }),

/***/ "./resources/js/services/loan/closed-service.js":
/*!******************************************************!*\
  !*** ./resources/js/services/loan/closed-service.js ***!
  \******************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Component_loan_closed__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @Component/loan/closed */ "./resources/js/components/loan/closed.vue");

Container.provide({
  register: function register(_ref) {
    var Vue = _ref.Vue;
    Vue.component('closed-loans', _Component_loan_closed__WEBPACK_IMPORTED_MODULE_0__["default"]);
  }
});

/***/ }),

/***/ "./resources/js/services/loan/loan-detail-service.js":
/*!***********************************************************!*\
  !*** ./resources/js/services/loan/loan-detail-service.js ***!
  \***********************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Component_loan_loan_detail__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @Component/loan/loan-detail */ "./resources/js/components/loan/loan-detail.vue");

Container.provide({
  register: function register(_ref) {
    var Vue = _ref.Vue;
    Vue.component('loan-detail', _Component_loan_loan_detail__WEBPACK_IMPORTED_MODULE_0__["default"]);
  }
});

/***/ }),

/***/ "./resources/js/services/loan/overpaid-service.js":
/*!********************************************************!*\
  !*** ./resources/js/services/loan/overpaid-service.js ***!
  \********************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Component_loan_overpaid__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @Component/loan/overpaid */ "./resources/js/components/loan/overpaid.vue");

Container.provide({
  register: function register(_ref) {
    var Vue = _ref.Vue;
    Vue.component('over-paid', _Component_loan_overpaid__WEBPACK_IMPORTED_MODULE_0__["default"]);
  }
});

/***/ }),

/***/ "./resources/js/services/loan/pedding-approval-service.js":
/*!****************************************************************!*\
  !*** ./resources/js/services/loan/pedding-approval-service.js ***!
  \****************************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Component_loan_pedding_approval__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @Component/loan/pedding-approval */ "./resources/js/components/loan/pedding-approval.vue");

Container.provide({
  register: function register(_ref) {
    var Vue = _ref.Vue;
    Vue.component('pedding-approval', _Component_loan_pedding_approval__WEBPACK_IMPORTED_MODULE_0__["default"]);
  }
});

/***/ }),

/***/ "./resources/js/services/loan/pedding-second-approval.js":
/*!***************************************************************!*\
  !*** ./resources/js/services/loan/pedding-second-approval.js ***!
  \***************************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Component_loan_pennding_second_approval__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @Component/loan/pennding-second-approval */ "./resources/js/components/loan/pennding-second-approval.vue");

Container.provide({
  register: function register(_ref) {
    var Vue = _ref.Vue;
    Vue.component('pedding-second-approval', _Component_loan_pennding_second_approval__WEBPACK_IMPORTED_MODULE_0__["default"]);
  }
});

/***/ }),

/***/ "./resources/js/services/loan/rejected-service.js":
/*!********************************************************!*\
  !*** ./resources/js/services/loan/rejected-service.js ***!
  \********************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Component_loan_rejected__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @Component/loan/rejected */ "./resources/js/components/loan/rejected.vue");

Container.provide({
  register: function register(_ref) {
    var Vue = _ref.Vue;
    Vue.component('rejected-loans', _Component_loan_rejected__WEBPACK_IMPORTED_MODULE_0__["default"]);
  }
});

/***/ }),

/***/ "./resources/js/services/loan/view-loan-service.js":
/*!*********************************************************!*\
  !*** ./resources/js/services/loan/view-loan-service.js ***!
  \*********************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Component_loan_view_loans__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @Component/loan/view-loans */ "./resources/js/components/loan/view-loans.vue");

Container.provide({
  register: function register(_ref) {
    var Vue = _ref.Vue;
    Vue.component('view-loans', _Component_loan_view_loans__WEBPACK_IMPORTED_MODULE_0__["default"]);
  }
});

/***/ }),

/***/ "./resources/js/services/loan/withdraw-service.js":
/*!********************************************************!*\
  !*** ./resources/js/services/loan/withdraw-service.js ***!
  \********************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Component_loan_withdraw__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @Component/loan/withdraw */ "./resources/js/components/loan/withdraw.vue");

Container.provide({
  register: function register(_ref) {
    var Vue = _ref.Vue;
    Vue.component('withdraw-loans', _Component_loan_withdraw__WEBPACK_IMPORTED_MODULE_0__["default"]);
  }
});

/***/ }),

/***/ "./resources/js/services/loan/writtenoff-service.js":
/*!**********************************************************!*\
  !*** ./resources/js/services/loan/writtenoff-service.js ***!
  \**********************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Component_loan_written_off__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @Component/loan/written-off */ "./resources/js/components/loan/written-off.vue");

Container.provide({
  register: function register(_ref) {
    var Vue = _ref.Vue;
    Vue.component('written-off', _Component_loan_written_off__WEBPACK_IMPORTED_MODULE_0__["default"]);
  }
});

/***/ }),

/***/ "./resources/js/services/pending-approval-clients.js":
/*!***********************************************************!*\
  !*** ./resources/js/services/pending-approval-clients.js ***!
  \***********************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Component_pending_approval_clients__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @Component/pending-approval-clients */ "./resources/js/components/pending-approval-clients.vue");
/**
 * Created by henry on 23-Mar-20.
 */

Container.provide({
  register: function register(_ref) {
    var Vue = _ref.Vue;
    Vue.component('pending-approval-clients', _Component_pending_approval_clients__WEBPACK_IMPORTED_MODULE_0__["default"]);
  }
});

/***/ }),

/***/ 1:
/*!************************************************!*\
  !*** multi ./resources/js/service-provider.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/mzanda/Documents/project/microfinance/resources/js/service-provider.js */"./resources/js/service-provider.js");


/***/ })

/******/ });