(self["webpackChunk"] = self["webpackChunk"] || []).push([["user"],{

/***/ "./assets/js/menu.js":
/*!***************************!*\
  !*** ./assets/js/menu.js ***!
  \***************************/
/***/ (() => {

console.log("cc menu.js"); /*le bouton icon va permuter nav et navresponsive au click */
function myFunction() {
  var x = document.getElementById("navbar");
  if (x.className === "nav") {
    x.className += " responsive";
  } else {
    x.className = "nav";
  }
}

/***/ }),

/***/ "./assets/js/price-input.js":
/*!**********************************!*\
  !*** ./assets/js/price-input.js ***!
  \**********************************/
/***/ (() => {

"use strict";


console.log("coucous inputpricejs");
/*
document.addEventListener('DOMContentLoaded', function() {
    //pour vider l'input, pas de saisie automatique
    var modifiedPriceInput = document.getElementById('calendar_modifiedPrice');

    modifiedPriceInput.addEventListener('change', function() {
        if (modifiedPriceInput.value === '') {
            modifiedPriceInput.defaultValue = '';
        }
    });

    var form = document.querySelector('form');

    form.addEventListener('submit', function() {
        if (modifiedPriceInput.value === modifiedPriceInput.defaultValue) {
            modifiedPriceInput.value = '';
        }
    });
});*/

/***/ }),

/***/ "./assets/js/searchphone.js":
/*!**********************************!*\
  !*** ./assets/js/searchphone.js ***!
  \**********************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


__webpack_require__(/*! core-js/modules/es.string.trim.js */ "./node_modules/core-js/modules/es.string.trim.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
__webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
console.log("coucou searchphonejs");
var inputPhone = document.querySelector('#user-search-phone');
var resultsPhone = document.querySelector('#result-phone');
inputPhone.addEventListener('input', function () {
  searchByPhone();
});
function searchByPhone() {
  var searchTerm = inputPhone.value.trim();
  if (searchTerm === '') {
    resultsPhone.innerHTML = '';
    return;
  }
  fetch("/searchphone/".concat(searchTerm)).then(function (response) {
    return response.json();
  }).then(function (users) {
    resultsPhone.innerHTML = '';
    users.forEach(function (user) {
      var div = document.createElement('div');
      var email = user.email;
      div.classList.add('container');
      div.innerHTML = "\n                    <h2>".concat(user.email, "</h2>\n                    <a href=\"purchase/user/").concat(user.id, "\">Voir d\xE9tail client</a>\n                ");
      resultsPhone.append(div);
    });
  });
}

/***/ }),

/***/ "./assets/js/searchuser.js":
/*!*********************************!*\
  !*** ./assets/js/searchuser.js ***!
  \*********************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


__webpack_require__(/*! core-js/modules/es.string.trim.js */ "./node_modules/core-js/modules/es.string.trim.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
__webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
console.log("coucous searchjs");
var input = document.querySelector('#user-search-email');
var results = document.querySelector('#result-email');
input.addEventListener('input', function () {
  searchUser();
});
function searchUser() {
  var searchTerm = input.value.trim();
  if (searchTerm === '') {
    results.innerHTML = '';
    return;
  }
  fetch("/search/".concat(searchTerm)).then(function (response) {
    return response.json();
  }).then(function (users) {
    results.innerHTML = '';
    users.forEach(function (user) {
      var div = document.createElement('div');
      var email = user.email;
      //   let fullName = user.fullName;

      div.classList.add('container');
      div.innerHTML = "\n                    <h2>".concat(user.fullName, "</h2>\n                    <a href=\"purchase/user/").concat(user.id, "\">Voir d\xE9tails client</a>\n                ");
      results.append(div);
    });
  });
}

/***/ }),

/***/ "./assets/js/searchusername.js":
/*!*************************************!*\
  !*** ./assets/js/searchusername.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


__webpack_require__(/*! core-js/modules/es.string.trim.js */ "./node_modules/core-js/modules/es.string.trim.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
__webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
console.log("coucou searchnamejs");
var inputName = document.querySelector('#user-search-name');
var resultsName = document.querySelector('#result-name');
inputName.addEventListener('input', function () {
  searchByName();
});
function searchByName() {
  var searchTerm = inputName.value.trim();
  if (searchTerm === '') {
    resultsName.innerHTML = '';
    return;
  }
  fetch("/searchname/".concat(searchTerm)).then(function (response) {
    return response.json();
  }).then(function (users) {
    resultsName.innerHTML = '';
    users.forEach(function (user) {
      var div = document.createElement('div');
      var email = user.email;
      div.classList.add('container');
      div.innerHTML = "\n                    <h2>".concat(user.email, "</h2>\n                    <a href=\"purchase/user/").concat(user.id, "\">Voir d\xE9tail client</a>\n                ");
      resultsName.append(div);
    });
  });
}

/***/ }),

/***/ "./assets/user.js":
/*!************************!*\
  !*** ./assets/user.js ***!
  \************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_app_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/app.css */ "./assets/styles/app.css");
/* harmony import */ var _styles_style_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./styles/style.css */ "./assets/styles/style.css");
/* harmony import */ var _js_searchphone_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./js/searchphone.js */ "./assets/js/searchphone.js");
/* harmony import */ var _js_searchphone_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_js_searchphone_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _js_searchuser_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./js/searchuser.js */ "./assets/js/searchuser.js");
/* harmony import */ var _js_searchuser_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_js_searchuser_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _js_searchusername_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./js/searchusername.js */ "./assets/js/searchusername.js");
/* harmony import */ var _js_searchusername_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_js_searchusername_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _js_menu_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./js/menu.js */ "./assets/js/menu.js");
/* harmony import */ var _js_menu_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_js_menu_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _js_price_input_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./js/price-input.js */ "./assets/js/price-input.js");
/* harmony import */ var _js_price_input_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_js_price_input_js__WEBPACK_IMPORTED_MODULE_6__);
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)








/***/ }),

/***/ "./assets/styles/app.css":
/*!*******************************!*\
  !*** ./assets/styles/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/styles/style.css":
/*!*********************************!*\
  !*** ./assets/styles/style.css ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./node_modules/core-js/internals/array-method-has-species-support.js":
/*!****************************************************************************!*\
  !*** ./node_modules/core-js/internals/array-method-has-species-support.js ***!
  \****************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";

var fails = __webpack_require__(/*! ../internals/fails */ "./node_modules/core-js/internals/fails.js");
var wellKnownSymbol = __webpack_require__(/*! ../internals/well-known-symbol */ "./node_modules/core-js/internals/well-known-symbol.js");
var V8_VERSION = __webpack_require__(/*! ../internals/engine-v8-version */ "./node_modules/core-js/internals/engine-v8-version.js");

var SPECIES = wellKnownSymbol('species');

module.exports = function (METHOD_NAME) {
  // We can't use this feature detection in V8 since it causes
  // deoptimization and serious performance degradation
  // https://github.com/zloirock/core-js/issues/677
  return V8_VERSION >= 51 || !fails(function () {
    var array = [];
    var constructor = array.constructor = {};
    constructor[SPECIES] = function () {
      return { foo: 1 };
    };
    return array[METHOD_NAME](Boolean).foo !== 1;
  });
};


/***/ }),

/***/ "./node_modules/core-js/internals/string-trim-forced.js":
/*!**************************************************************!*\
  !*** ./node_modules/core-js/internals/string-trim-forced.js ***!
  \**************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";

var PROPER_FUNCTION_NAME = (__webpack_require__(/*! ../internals/function-name */ "./node_modules/core-js/internals/function-name.js").PROPER);
var fails = __webpack_require__(/*! ../internals/fails */ "./node_modules/core-js/internals/fails.js");
var whitespaces = __webpack_require__(/*! ../internals/whitespaces */ "./node_modules/core-js/internals/whitespaces.js");

var non = '\u200B\u0085\u180E';

// check that a method works with the correct list
// of whitespaces and has a correct name
module.exports = function (METHOD_NAME) {
  return fails(function () {
    return !!whitespaces[METHOD_NAME]()
      || non[METHOD_NAME]() !== non
      || (PROPER_FUNCTION_NAME && whitespaces[METHOD_NAME].name !== METHOD_NAME);
  });
};


/***/ }),

/***/ "./node_modules/core-js/modules/es.array.concat.js":
/*!*********************************************************!*\
  !*** ./node_modules/core-js/modules/es.array.concat.js ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

"use strict";

var $ = __webpack_require__(/*! ../internals/export */ "./node_modules/core-js/internals/export.js");
var fails = __webpack_require__(/*! ../internals/fails */ "./node_modules/core-js/internals/fails.js");
var isArray = __webpack_require__(/*! ../internals/is-array */ "./node_modules/core-js/internals/is-array.js");
var isObject = __webpack_require__(/*! ../internals/is-object */ "./node_modules/core-js/internals/is-object.js");
var toObject = __webpack_require__(/*! ../internals/to-object */ "./node_modules/core-js/internals/to-object.js");
var lengthOfArrayLike = __webpack_require__(/*! ../internals/length-of-array-like */ "./node_modules/core-js/internals/length-of-array-like.js");
var doesNotExceedSafeInteger = __webpack_require__(/*! ../internals/does-not-exceed-safe-integer */ "./node_modules/core-js/internals/does-not-exceed-safe-integer.js");
var createProperty = __webpack_require__(/*! ../internals/create-property */ "./node_modules/core-js/internals/create-property.js");
var arraySpeciesCreate = __webpack_require__(/*! ../internals/array-species-create */ "./node_modules/core-js/internals/array-species-create.js");
var arrayMethodHasSpeciesSupport = __webpack_require__(/*! ../internals/array-method-has-species-support */ "./node_modules/core-js/internals/array-method-has-species-support.js");
var wellKnownSymbol = __webpack_require__(/*! ../internals/well-known-symbol */ "./node_modules/core-js/internals/well-known-symbol.js");
var V8_VERSION = __webpack_require__(/*! ../internals/engine-v8-version */ "./node_modules/core-js/internals/engine-v8-version.js");

var IS_CONCAT_SPREADABLE = wellKnownSymbol('isConcatSpreadable');

// We can't use this feature detection in V8 since it causes
// deoptimization and serious performance degradation
// https://github.com/zloirock/core-js/issues/679
var IS_CONCAT_SPREADABLE_SUPPORT = V8_VERSION >= 51 || !fails(function () {
  var array = [];
  array[IS_CONCAT_SPREADABLE] = false;
  return array.concat()[0] !== array;
});

var isConcatSpreadable = function (O) {
  if (!isObject(O)) return false;
  var spreadable = O[IS_CONCAT_SPREADABLE];
  return spreadable !== undefined ? !!spreadable : isArray(O);
};

var FORCED = !IS_CONCAT_SPREADABLE_SUPPORT || !arrayMethodHasSpeciesSupport('concat');

// `Array.prototype.concat` method
// https://tc39.es/ecma262/#sec-array.prototype.concat
// with adding support of @@isConcatSpreadable and @@species
$({ target: 'Array', proto: true, arity: 1, forced: FORCED }, {
  // eslint-disable-next-line no-unused-vars -- required for `.length`
  concat: function concat(arg) {
    var O = toObject(this);
    var A = arraySpeciesCreate(O, 0);
    var n = 0;
    var i, k, length, len, E;
    for (i = -1, length = arguments.length; i < length; i++) {
      E = i === -1 ? O : arguments[i];
      if (isConcatSpreadable(E)) {
        len = lengthOfArrayLike(E);
        doesNotExceedSafeInteger(n + len);
        for (k = 0; k < len; k++, n++) if (k in E) createProperty(A, n, E[k]);
      } else {
        doesNotExceedSafeInteger(n + 1);
        createProperty(A, n++, E);
      }
    }
    A.length = n;
    return A;
  }
});


/***/ }),

/***/ "./node_modules/core-js/modules/es.string.trim.js":
/*!********************************************************!*\
  !*** ./node_modules/core-js/modules/es.string.trim.js ***!
  \********************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

"use strict";

var $ = __webpack_require__(/*! ../internals/export */ "./node_modules/core-js/internals/export.js");
var $trim = (__webpack_require__(/*! ../internals/string-trim */ "./node_modules/core-js/internals/string-trim.js").trim);
var forcedStringTrimMethod = __webpack_require__(/*! ../internals/string-trim-forced */ "./node_modules/core-js/internals/string-trim-forced.js");

// `String.prototype.trim` method
// https://tc39.es/ecma262/#sec-string.prototype.trim
$({ target: 'String', proto: true, forced: forcedStringTrimMethod('trim') }, {
  trim: function trim() {
    return $trim(this);
  }
});


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_internals_create-property_js-node_modules_core-js_internals_does-764739","assets_styles_app_css-assets_styles_style_css"], () => (__webpack_exec__("./assets/user.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTtBQUNBLElBQUksd0RBQXdEO0FBQzVEO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLDRDQUE0QyxZQUFZO0FBQ3hEO0FBQ0E7QUFDQTtBQUNBO0FBQ0Esb0JBQW9CLFNBQVM7QUFDN0IsUUFBUTtBQUNSO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsQ0FBQzs7Ozs7Ozs7Ozs7O0FDekRZO0FBQ2IsUUFBUSxtQkFBTyxDQUFDLHVFQUFxQjtBQUNyQyxZQUFZLDZHQUF3QztBQUNwRCw2QkFBNkIsbUJBQU8sQ0FBQywrRkFBaUM7O0FBRXRFO0FBQ0E7QUFDQSxJQUFJLHVFQUF1RTtBQUMzRTtBQUNBO0FBQ0E7QUFDQSxDQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL21lbnUuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL3ByaWNlLWlucHV0LmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9zZWFyY2hwaG9uZS5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvc2VhcmNodXNlci5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvc2VhcmNodXNlcm5hbWUuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3VzZXIuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9hcHAuY3NzPzNmYmEiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9zdHlsZS5jc3M/MjUzOCIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9pbnRlcm5hbHMvYXJyYXktbWV0aG9kLWhhcy1zcGVjaWVzLXN1cHBvcnQuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvaW50ZXJuYWxzL3N0cmluZy10cmltLWZvcmNlZC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9tb2R1bGVzL2VzLmFycmF5LmNvbmNhdC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9tb2R1bGVzL2VzLnN0cmluZy50cmltLmpzIl0sInNvdXJjZXNDb250ZW50IjpbImNvbnNvbGUubG9nKFwiY2MgbWVudS5qc1wiKTsvKmxlIGJvdXRvbiBpY29uIHZhIHBlcm11dGVyIG5hdiBldCBuYXZyZXNwb25zaXZlIGF1IGNsaWNrICovXHJcbmZ1bmN0aW9uIG15RnVuY3Rpb24oKSB7XHJcbiB2YXIgeCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwibmF2YmFyXCIpO1xyXG4gaWYgKHguY2xhc3NOYW1lID09PSBcIm5hdlwiKSB7XHJcbiAgICAgeC5jbGFzc05hbWUgKz0gXCIgcmVzcG9uc2l2ZVwiO1xyXG5cclxuIH0gZWxzZSB7XHJcbiAgICAgeC5jbGFzc05hbWUgPSBcIm5hdlwiO1xyXG4gfVxyXG59XHJcbiIsIid1c2Ugc3RyaWN0JztcclxuY29uc29sZS5sb2coXCJjb3Vjb3VzIGlucHV0cHJpY2Vqc1wiKTtcclxuLypcclxuZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsIGZ1bmN0aW9uKCkge1xyXG4gICAgLy9wb3VyIHZpZGVyIGwnaW5wdXQsIHBhcyBkZSBzYWlzaWUgYXV0b21hdGlxdWVcclxuICAgIHZhciBtb2RpZmllZFByaWNlSW5wdXQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY2FsZW5kYXJfbW9kaWZpZWRQcmljZScpO1xyXG5cclxuICAgIG1vZGlmaWVkUHJpY2VJbnB1dC5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCBmdW5jdGlvbigpIHtcclxuICAgICAgICBpZiAobW9kaWZpZWRQcmljZUlucHV0LnZhbHVlID09PSAnJykge1xyXG4gICAgICAgICAgICBtb2RpZmllZFByaWNlSW5wdXQuZGVmYXVsdFZhbHVlID0gJyc7XHJcbiAgICAgICAgfVxyXG4gICAgfSk7XHJcblxyXG4gICAgdmFyIGZvcm0gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdmb3JtJyk7XHJcblxyXG4gICAgZm9ybS5hZGRFdmVudExpc3RlbmVyKCdzdWJtaXQnLCBmdW5jdGlvbigpIHtcclxuICAgICAgICBpZiAobW9kaWZpZWRQcmljZUlucHV0LnZhbHVlID09PSBtb2RpZmllZFByaWNlSW5wdXQuZGVmYXVsdFZhbHVlKSB7XHJcbiAgICAgICAgICAgIG1vZGlmaWVkUHJpY2VJbnB1dC52YWx1ZSA9ICcnO1xyXG4gICAgICAgIH1cclxuICAgIH0pO1xyXG59KTsqL1xyXG4iLCIndXNlIHN0cmljdCc7XHJcblxyXG5jb25zb2xlLmxvZyhcImNvdWNvdSBzZWFyY2hwaG9uZWpzXCIpO1xyXG5cclxuXHJcblxyXG5sZXQgaW5wdXRQaG9uZSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyN1c2VyLXNlYXJjaC1waG9uZScpO1xyXG5sZXQgcmVzdWx0c1Bob25lID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI3Jlc3VsdC1waG9uZScpO1xyXG5cclxuaW5wdXRQaG9uZS5hZGRFdmVudExpc3RlbmVyKCdpbnB1dCcsIGZ1bmN0aW9uKCkge1xyXG4gICAgc2VhcmNoQnlQaG9uZSgpO1xyXG59KTtcclxuXHJcbmZ1bmN0aW9uIHNlYXJjaEJ5UGhvbmUoKSB7XHJcbiAgICBsZXQgc2VhcmNoVGVybSA9IGlucHV0UGhvbmUudmFsdWUudHJpbSgpO1xyXG4gICAgaWYgKHNlYXJjaFRlcm0gPT09ICcnKSB7XHJcbiAgICAgICAgcmVzdWx0c1Bob25lLmlubmVySFRNTCA9ICcnO1xyXG4gICAgICAgIHJldHVybjtcclxuICAgIH1cclxuXHJcbiAgICBmZXRjaChgL3NlYXJjaHBob25lLyR7c2VhcmNoVGVybX1gKVxyXG4gICAgICAgIC50aGVuKHJlc3BvbnNlID0+IHJlc3BvbnNlLmpzb24oKSlcclxuICAgICAgICAudGhlbih1c2VycyA9PiB7XHJcbiAgICAgICAgICAgIHJlc3VsdHNQaG9uZS5pbm5lckhUTUwgPSAnJztcclxuICAgICAgICAgICAgdXNlcnMuZm9yRWFjaCh1c2VyID0+IHtcclxuICAgICAgICAgICAgICAgIGxldCBkaXYgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKTtcclxuICAgICAgICAgICAgICAgIGxldCBlbWFpbCA9IHVzZXIuZW1haWw7XHJcbiAgICAgICAgICAgICAgICBkaXYuY2xhc3NMaXN0LmFkZCgnY29udGFpbmVyJyk7XHJcbiAgICAgICAgICAgICAgICBkaXYuaW5uZXJIVE1MID0gYFxyXG4gICAgICAgICAgICAgICAgICAgIDxoMj4ke3VzZXIuZW1haWx9PC9oMj5cclxuICAgICAgICAgICAgICAgICAgICA8YSBocmVmPVwicHVyY2hhc2UvdXNlci8ke3VzZXIuaWR9XCI+Vm9pciBkw6l0YWlsIGNsaWVudDwvYT5cclxuICAgICAgICAgICAgICAgIGA7XHJcbiAgICAgICAgICAgICAgICByZXN1bHRzUGhvbmUuYXBwZW5kKGRpdik7XHJcbiAgICAgICAgICAgIH0pO1xyXG4gICAgICAgIH0pO1xyXG59XHJcbiIsIid1c2Ugc3RyaWN0JztcclxuY29uc29sZS5sb2coXCJjb3Vjb3VzIHNlYXJjaGpzXCIpO1xyXG5cclxubGV0IGlucHV0ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI3VzZXItc2VhcmNoLWVtYWlsJyk7XHJcbmxldCByZXN1bHRzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI3Jlc3VsdC1lbWFpbCcpO1xyXG5cclxuaW5wdXQuYWRkRXZlbnRMaXN0ZW5lcignaW5wdXQnLCBmdW5jdGlvbigpIHtcclxuICAgIHNlYXJjaFVzZXIoKTtcclxufSk7XHJcblxyXG5mdW5jdGlvbiBzZWFyY2hVc2VyKCkge1xyXG4gICAgbGV0IHNlYXJjaFRlcm0gPSBpbnB1dC52YWx1ZS50cmltKCk7XHJcbiAgICBpZiAoc2VhcmNoVGVybSA9PT0gJycpIHtcclxuICAgICAgICByZXN1bHRzLmlubmVySFRNTCA9ICcnO1xyXG4gICAgICAgIHJldHVybjtcclxuICAgIH1cclxuICAgIGZldGNoKGAvc2VhcmNoLyR7c2VhcmNoVGVybX1gKVxyXG4gICAgICAgIC50aGVuKHJlc3BvbnNlID0+IHJlc3BvbnNlLmpzb24oKSlcclxuICAgICAgICAudGhlbih1c2VycyA9PiB7XHJcbiAgICAgICAgICAgIHJlc3VsdHMuaW5uZXJIVE1MID0gJyc7XHJcbiAgICAgICAgICAgIHVzZXJzLmZvckVhY2godXNlciA9PiB7XHJcbiAgICAgICAgICAgICAgICBsZXQgZGl2ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XHJcbiAgICAgICAgICAgICAgICBsZXQgZW1haWwgPSB1c2VyLmVtYWlsO1xyXG4gICAgICAgICAgICAgLy8gICBsZXQgZnVsbE5hbWUgPSB1c2VyLmZ1bGxOYW1lO1xyXG4gICAgICAgICAgICBcclxuICAgICAgICAgICAgICAgIGRpdi5jbGFzc0xpc3QuYWRkKCdjb250YWluZXInKTtcclxuICAgICAgICAgICAgICAgIGRpdi5pbm5lckhUTUwgPSBgXHJcbiAgICAgICAgICAgICAgICAgICAgPGgyPiR7dXNlci5mdWxsTmFtZX08L2gyPlxyXG4gICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9XCJwdXJjaGFzZS91c2VyLyR7dXNlci5pZH1cIj5Wb2lyIGTDqXRhaWxzIGNsaWVudDwvYT5cclxuICAgICAgICAgICAgICAgIGA7XHJcbiAgICAgICAgICAgICAgICByZXN1bHRzLmFwcGVuZChkaXYpO1xyXG4gICAgICAgICAgICB9KTtcclxuICAgICAgICB9KTtcclxufVxyXG4iLCIndXNlIHN0cmljdCc7XHJcblxyXG5jb25zb2xlLmxvZyhcImNvdWNvdSBzZWFyY2huYW1lanNcIik7XHJcblxyXG5sZXQgaW5wdXROYW1lID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI3VzZXItc2VhcmNoLW5hbWUnKTtcclxubGV0IHJlc3VsdHNOYW1lID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI3Jlc3VsdC1uYW1lJyk7XHJcblxyXG5pbnB1dE5hbWUuYWRkRXZlbnRMaXN0ZW5lcignaW5wdXQnLCBmdW5jdGlvbigpIHtcclxuICAgIHNlYXJjaEJ5TmFtZSgpO1xyXG59KTtcclxuXHJcbmZ1bmN0aW9uIHNlYXJjaEJ5TmFtZSgpIHtcclxuICAgIGxldCBzZWFyY2hUZXJtID0gaW5wdXROYW1lLnZhbHVlLnRyaW0oKTtcclxuICAgIGlmIChzZWFyY2hUZXJtID09PSAnJykge1xyXG4gICAgICAgIHJlc3VsdHNOYW1lLmlubmVySFRNTCA9ICcnO1xyXG4gICAgICAgIHJldHVybjtcclxuICAgIH1cclxuXHJcbiAgICBmZXRjaChgL3NlYXJjaG5hbWUvJHtzZWFyY2hUZXJtfWApXHJcbiAgICAgICAgLnRoZW4ocmVzcG9uc2UgPT4gcmVzcG9uc2UuanNvbigpKVxyXG4gICAgICAgIC50aGVuKHVzZXJzID0+IHtcclxuICAgICAgICAgICAgcmVzdWx0c05hbWUuaW5uZXJIVE1MID0gJyc7XHJcbiAgICAgICAgICAgIHVzZXJzLmZvckVhY2godXNlciA9PiB7XHJcbiAgICAgICAgICAgICAgICBsZXQgZGl2ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XHJcbiAgICAgICAgICAgICAgICBsZXQgZW1haWwgPSB1c2VyLmVtYWlsO1xyXG4gICAgICAgICAgICAgICAgZGl2LmNsYXNzTGlzdC5hZGQoJ2NvbnRhaW5lcicpO1xyXG4gICAgICAgICAgICAgICAgZGl2LmlubmVySFRNTCA9IGBcclxuICAgICAgICAgICAgICAgICAgICA8aDI+JHt1c2VyLmVtYWlsfTwvaDI+XHJcbiAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj1cInB1cmNoYXNlL3VzZXIvJHt1c2VyLmlkfVwiPlZvaXIgZMOpdGFpbCBjbGllbnQ8L2E+XHJcbiAgICAgICAgICAgICAgICBgO1xyXG4gICAgICAgICAgICAgICAgcmVzdWx0c05hbWUuYXBwZW5kKGRpdik7XHJcbiAgICAgICAgICAgIH0pO1xyXG4gICAgICAgIH0pO1xyXG59ICAgXHJcbiIsIlxyXG4vKlxyXG4gKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXHJcbiAqXHJcbiAqIFdlIHJlY29tbWVuZCBpbmNsdWRpbmcgdGhlIGJ1aWx0IHZlcnNpb24gb2YgdGhpcyBKYXZhU2NyaXB0IGZpbGVcclxuICogKGFuZCBpdHMgQ1NTIGZpbGUpIGluIHlvdXIgYmFzZSBsYXlvdXQgKGJhc2UuaHRtbC50d2lnKS5cclxuICovXHJcblxyXG4vLyBhbnkgQ1NTIHlvdSBpbXBvcnQgd2lsbCBvdXRwdXQgaW50byBhIHNpbmdsZSBjc3MgZmlsZSAoYXBwLmNzcyBpbiB0aGlzIGNhc2UpXHJcbmltcG9ydCAnLi9zdHlsZXMvYXBwLmNzcyc7XHJcbmltcG9ydCAnLi9zdHlsZXMvc3R5bGUuY3NzJztcclxuaW1wb3J0ICcuL2pzL3NlYXJjaHBob25lLmpzJztcclxuaW1wb3J0ICcuL2pzL3NlYXJjaHVzZXIuanMnO1xyXG5pbXBvcnQgJy4vanMvc2VhcmNodXNlcm5hbWUuanMnO1xyXG5pbXBvcnQgJy4vanMvbWVudS5qcyc7XHJcbmltcG9ydCAnLi9qcy9wcmljZS1pbnB1dC5qcyc7XHJcblxyXG5cclxuXHJcblxyXG4iLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiLCIndXNlIHN0cmljdCc7XG52YXIgZmFpbHMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZmFpbHMnKTtcbnZhciB3ZWxsS25vd25TeW1ib2wgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvd2VsbC1rbm93bi1zeW1ib2wnKTtcbnZhciBWOF9WRVJTSU9OID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2VuZ2luZS12OC12ZXJzaW9uJyk7XG5cbnZhciBTUEVDSUVTID0gd2VsbEtub3duU3ltYm9sKCdzcGVjaWVzJyk7XG5cbm1vZHVsZS5leHBvcnRzID0gZnVuY3Rpb24gKE1FVEhPRF9OQU1FKSB7XG4gIC8vIFdlIGNhbid0IHVzZSB0aGlzIGZlYXR1cmUgZGV0ZWN0aW9uIGluIFY4IHNpbmNlIGl0IGNhdXNlc1xuICAvLyBkZW9wdGltaXphdGlvbiBhbmQgc2VyaW91cyBwZXJmb3JtYW5jZSBkZWdyYWRhdGlvblxuICAvLyBodHRwczovL2dpdGh1Yi5jb20vemxvaXJvY2svY29yZS1qcy9pc3N1ZXMvNjc3XG4gIHJldHVybiBWOF9WRVJTSU9OID49IDUxIHx8ICFmYWlscyhmdW5jdGlvbiAoKSB7XG4gICAgdmFyIGFycmF5ID0gW107XG4gICAgdmFyIGNvbnN0cnVjdG9yID0gYXJyYXkuY29uc3RydWN0b3IgPSB7fTtcbiAgICBjb25zdHJ1Y3RvcltTUEVDSUVTXSA9IGZ1bmN0aW9uICgpIHtcbiAgICAgIHJldHVybiB7IGZvbzogMSB9O1xuICAgIH07XG4gICAgcmV0dXJuIGFycmF5W01FVEhPRF9OQU1FXShCb29sZWFuKS5mb28gIT09IDE7XG4gIH0pO1xufTtcbiIsIid1c2Ugc3RyaWN0JztcbnZhciBQUk9QRVJfRlVOQ1RJT05fTkFNRSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9mdW5jdGlvbi1uYW1lJykuUFJPUEVSO1xudmFyIGZhaWxzID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2ZhaWxzJyk7XG52YXIgd2hpdGVzcGFjZXMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvd2hpdGVzcGFjZXMnKTtcblxudmFyIG5vbiA9ICdcXHUyMDBCXFx1MDA4NVxcdTE4MEUnO1xuXG4vLyBjaGVjayB0aGF0IGEgbWV0aG9kIHdvcmtzIHdpdGggdGhlIGNvcnJlY3QgbGlzdFxuLy8gb2Ygd2hpdGVzcGFjZXMgYW5kIGhhcyBhIGNvcnJlY3QgbmFtZVxubW9kdWxlLmV4cG9ydHMgPSBmdW5jdGlvbiAoTUVUSE9EX05BTUUpIHtcbiAgcmV0dXJuIGZhaWxzKGZ1bmN0aW9uICgpIHtcbiAgICByZXR1cm4gISF3aGl0ZXNwYWNlc1tNRVRIT0RfTkFNRV0oKVxuICAgICAgfHwgbm9uW01FVEhPRF9OQU1FXSgpICE9PSBub25cbiAgICAgIHx8IChQUk9QRVJfRlVOQ1RJT05fTkFNRSAmJiB3aGl0ZXNwYWNlc1tNRVRIT0RfTkFNRV0ubmFtZSAhPT0gTUVUSE9EX05BTUUpO1xuICB9KTtcbn07XG4iLCIndXNlIHN0cmljdCc7XG52YXIgJCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9leHBvcnQnKTtcbnZhciBmYWlscyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9mYWlscycpO1xudmFyIGlzQXJyYXkgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvaXMtYXJyYXknKTtcbnZhciBpc09iamVjdCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pcy1vYmplY3QnKTtcbnZhciB0b09iamVjdCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy90by1vYmplY3QnKTtcbnZhciBsZW5ndGhPZkFycmF5TGlrZSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9sZW5ndGgtb2YtYXJyYXktbGlrZScpO1xudmFyIGRvZXNOb3RFeGNlZWRTYWZlSW50ZWdlciA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9kb2VzLW5vdC1leGNlZWQtc2FmZS1pbnRlZ2VyJyk7XG52YXIgY3JlYXRlUHJvcGVydHkgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvY3JlYXRlLXByb3BlcnR5Jyk7XG52YXIgYXJyYXlTcGVjaWVzQ3JlYXRlID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2FycmF5LXNwZWNpZXMtY3JlYXRlJyk7XG52YXIgYXJyYXlNZXRob2RIYXNTcGVjaWVzU3VwcG9ydCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9hcnJheS1tZXRob2QtaGFzLXNwZWNpZXMtc3VwcG9ydCcpO1xudmFyIHdlbGxLbm93blN5bWJvbCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy93ZWxsLWtub3duLXN5bWJvbCcpO1xudmFyIFY4X1ZFUlNJT04gPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZW5naW5lLXY4LXZlcnNpb24nKTtcblxudmFyIElTX0NPTkNBVF9TUFJFQURBQkxFID0gd2VsbEtub3duU3ltYm9sKCdpc0NvbmNhdFNwcmVhZGFibGUnKTtcblxuLy8gV2UgY2FuJ3QgdXNlIHRoaXMgZmVhdHVyZSBkZXRlY3Rpb24gaW4gVjggc2luY2UgaXQgY2F1c2VzXG4vLyBkZW9wdGltaXphdGlvbiBhbmQgc2VyaW91cyBwZXJmb3JtYW5jZSBkZWdyYWRhdGlvblxuLy8gaHR0cHM6Ly9naXRodWIuY29tL3psb2lyb2NrL2NvcmUtanMvaXNzdWVzLzY3OVxudmFyIElTX0NPTkNBVF9TUFJFQURBQkxFX1NVUFBPUlQgPSBWOF9WRVJTSU9OID49IDUxIHx8ICFmYWlscyhmdW5jdGlvbiAoKSB7XG4gIHZhciBhcnJheSA9IFtdO1xuICBhcnJheVtJU19DT05DQVRfU1BSRUFEQUJMRV0gPSBmYWxzZTtcbiAgcmV0dXJuIGFycmF5LmNvbmNhdCgpWzBdICE9PSBhcnJheTtcbn0pO1xuXG52YXIgaXNDb25jYXRTcHJlYWRhYmxlID0gZnVuY3Rpb24gKE8pIHtcbiAgaWYgKCFpc09iamVjdChPKSkgcmV0dXJuIGZhbHNlO1xuICB2YXIgc3ByZWFkYWJsZSA9IE9bSVNfQ09OQ0FUX1NQUkVBREFCTEVdO1xuICByZXR1cm4gc3ByZWFkYWJsZSAhPT0gdW5kZWZpbmVkID8gISFzcHJlYWRhYmxlIDogaXNBcnJheShPKTtcbn07XG5cbnZhciBGT1JDRUQgPSAhSVNfQ09OQ0FUX1NQUkVBREFCTEVfU1VQUE9SVCB8fCAhYXJyYXlNZXRob2RIYXNTcGVjaWVzU3VwcG9ydCgnY29uY2F0Jyk7XG5cbi8vIGBBcnJheS5wcm90b3R5cGUuY29uY2F0YCBtZXRob2Rcbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtYXJyYXkucHJvdG90eXBlLmNvbmNhdFxuLy8gd2l0aCBhZGRpbmcgc3VwcG9ydCBvZiBAQGlzQ29uY2F0U3ByZWFkYWJsZSBhbmQgQEBzcGVjaWVzXG4kKHsgdGFyZ2V0OiAnQXJyYXknLCBwcm90bzogdHJ1ZSwgYXJpdHk6IDEsIGZvcmNlZDogRk9SQ0VEIH0sIHtcbiAgLy8gZXNsaW50LWRpc2FibGUtbmV4dC1saW5lIG5vLXVudXNlZC12YXJzIC0tIHJlcXVpcmVkIGZvciBgLmxlbmd0aGBcbiAgY29uY2F0OiBmdW5jdGlvbiBjb25jYXQoYXJnKSB7XG4gICAgdmFyIE8gPSB0b09iamVjdCh0aGlzKTtcbiAgICB2YXIgQSA9IGFycmF5U3BlY2llc0NyZWF0ZShPLCAwKTtcbiAgICB2YXIgbiA9IDA7XG4gICAgdmFyIGksIGssIGxlbmd0aCwgbGVuLCBFO1xuICAgIGZvciAoaSA9IC0xLCBsZW5ndGggPSBhcmd1bWVudHMubGVuZ3RoOyBpIDwgbGVuZ3RoOyBpKyspIHtcbiAgICAgIEUgPSBpID09PSAtMSA/IE8gOiBhcmd1bWVudHNbaV07XG4gICAgICBpZiAoaXNDb25jYXRTcHJlYWRhYmxlKEUpKSB7XG4gICAgICAgIGxlbiA9IGxlbmd0aE9mQXJyYXlMaWtlKEUpO1xuICAgICAgICBkb2VzTm90RXhjZWVkU2FmZUludGVnZXIobiArIGxlbik7XG4gICAgICAgIGZvciAoayA9IDA7IGsgPCBsZW47IGsrKywgbisrKSBpZiAoayBpbiBFKSBjcmVhdGVQcm9wZXJ0eShBLCBuLCBFW2tdKTtcbiAgICAgIH0gZWxzZSB7XG4gICAgICAgIGRvZXNOb3RFeGNlZWRTYWZlSW50ZWdlcihuICsgMSk7XG4gICAgICAgIGNyZWF0ZVByb3BlcnR5KEEsIG4rKywgRSk7XG4gICAgICB9XG4gICAgfVxuICAgIEEubGVuZ3RoID0gbjtcbiAgICByZXR1cm4gQTtcbiAgfVxufSk7XG4iLCIndXNlIHN0cmljdCc7XG52YXIgJCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9leHBvcnQnKTtcbnZhciAkdHJpbSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9zdHJpbmctdHJpbScpLnRyaW07XG52YXIgZm9yY2VkU3RyaW5nVHJpbU1ldGhvZCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9zdHJpbmctdHJpbS1mb3JjZWQnKTtcblxuLy8gYFN0cmluZy5wcm90b3R5cGUudHJpbWAgbWV0aG9kXG4vLyBodHRwczovL3RjMzkuZXMvZWNtYTI2Mi8jc2VjLXN0cmluZy5wcm90b3R5cGUudHJpbVxuJCh7IHRhcmdldDogJ1N0cmluZycsIHByb3RvOiB0cnVlLCBmb3JjZWQ6IGZvcmNlZFN0cmluZ1RyaW1NZXRob2QoJ3RyaW0nKSB9LCB7XG4gIHRyaW06IGZ1bmN0aW9uIHRyaW0oKSB7XG4gICAgcmV0dXJuICR0cmltKHRoaXMpO1xuICB9XG59KTtcbiJdLCJuYW1lcyI6WyJjb25zb2xlIiwibG9nIiwibXlGdW5jdGlvbiIsIngiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwiY2xhc3NOYW1lIiwicmVxdWlyZSIsImlucHV0UGhvbmUiLCJxdWVyeVNlbGVjdG9yIiwicmVzdWx0c1Bob25lIiwiYWRkRXZlbnRMaXN0ZW5lciIsInNlYXJjaEJ5UGhvbmUiLCJzZWFyY2hUZXJtIiwidmFsdWUiLCJ0cmltIiwiaW5uZXJIVE1MIiwiZmV0Y2giLCJjb25jYXQiLCJ0aGVuIiwicmVzcG9uc2UiLCJqc29uIiwidXNlcnMiLCJmb3JFYWNoIiwidXNlciIsImRpdiIsImNyZWF0ZUVsZW1lbnQiLCJlbWFpbCIsImNsYXNzTGlzdCIsImFkZCIsImlkIiwiYXBwZW5kIiwiaW5wdXQiLCJyZXN1bHRzIiwic2VhcmNoVXNlciIsImZ1bGxOYW1lIiwiaW5wdXROYW1lIiwicmVzdWx0c05hbWUiLCJzZWFyY2hCeU5hbWUiXSwic291cmNlUm9vdCI6IiJ9