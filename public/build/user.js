(self["webpackChunk"] = self["webpackChunk"] || []).push([["user"],{

/***/ "./assets/js/menu.js":
/*!***************************!*\
  !*** ./assets/js/menu.js ***!
  \***************************/
/***/ (() => {

/*le bouton icon va permuter nav et navresponsive au click */
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


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_internals_a-constructor_js-node_modules_core-js_internals_array--0b3311","vendors-node_modules_core-js_modules_es_array_concat_js-node_modules_core-js_modules_es_array-e643a4","assets_styles_app_css-assets_styles_style_css"], () => (__webpack_exec__("./assets/user.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QUVBO0FBQzBCO0FBQ0U7QUFDQztBQUNEO0FBQ0k7QUFDVjs7Ozs7Ozs7Ozs7OztBQ2R0Qjs7Ozs7Ozs7Ozs7OztBQ0FBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL21lbnUuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL3ByaWNlLWlucHV0LmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9zZWFyY2hwaG9uZS5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvc2VhcmNodXNlci5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvc2VhcmNodXNlcm5hbWUuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3VzZXIuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9hcHAuY3NzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvc3R5bGUuY3NzIl0sInNvdXJjZXNDb250ZW50IjpbIi8qbGUgYm91dG9uIGljb24gdmEgcGVybXV0ZXIgbmF2IGV0IG5hdnJlc3BvbnNpdmUgYXUgY2xpY2sgKi9cclxuZnVuY3Rpb24gbXlGdW5jdGlvbigpIHtcclxuIHZhciB4ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJuYXZiYXJcIik7XHJcbiBpZiAoeC5jbGFzc05hbWUgPT09IFwibmF2XCIpIHtcclxuICAgICB4LmNsYXNzTmFtZSArPSBcIiByZXNwb25zaXZlXCI7XHJcblxyXG4gfSBlbHNlIHtcclxuICAgICB4LmNsYXNzTmFtZSA9IFwibmF2XCI7XHJcbiB9XHJcbn1cclxuIiwiJ3VzZSBzdHJpY3QnO1xyXG5jb25zb2xlLmxvZyhcImNvdWNvdXMgaW5wdXRwcmljZWpzXCIpO1xyXG4vKlxyXG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdET01Db250ZW50TG9hZGVkJywgZnVuY3Rpb24oKSB7XHJcbiAgICAvL3BvdXIgdmlkZXIgbCdpbnB1dCwgcGFzIGRlIHNhaXNpZSBhdXRvbWF0aXF1ZVxyXG4gICAgdmFyIG1vZGlmaWVkUHJpY2VJbnB1dCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjYWxlbmRhcl9tb2RpZmllZFByaWNlJyk7XHJcblxyXG4gICAgbW9kaWZpZWRQcmljZUlucHV0LmFkZEV2ZW50TGlzdGVuZXIoJ2NoYW5nZScsIGZ1bmN0aW9uKCkge1xyXG4gICAgICAgIGlmIChtb2RpZmllZFByaWNlSW5wdXQudmFsdWUgPT09ICcnKSB7XHJcbiAgICAgICAgICAgIG1vZGlmaWVkUHJpY2VJbnB1dC5kZWZhdWx0VmFsdWUgPSAnJztcclxuICAgICAgICB9XHJcbiAgICB9KTtcclxuXHJcbiAgICB2YXIgZm9ybSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ2Zvcm0nKTtcclxuXHJcbiAgICBmb3JtLmFkZEV2ZW50TGlzdGVuZXIoJ3N1Ym1pdCcsIGZ1bmN0aW9uKCkge1xyXG4gICAgICAgIGlmIChtb2RpZmllZFByaWNlSW5wdXQudmFsdWUgPT09IG1vZGlmaWVkUHJpY2VJbnB1dC5kZWZhdWx0VmFsdWUpIHtcclxuICAgICAgICAgICAgbW9kaWZpZWRQcmljZUlucHV0LnZhbHVlID0gJyc7XHJcbiAgICAgICAgfVxyXG4gICAgfSk7XHJcbn0pOyovXHJcbiIsIid1c2Ugc3RyaWN0JztcclxuXHJcbmNvbnNvbGUubG9nKFwiY291Y291IHNlYXJjaHBob25lanNcIik7XHJcblxyXG5cclxuXHJcbmxldCBpbnB1dFBob25lID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI3VzZXItc2VhcmNoLXBob25lJyk7XHJcbmxldCByZXN1bHRzUGhvbmUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjcmVzdWx0LXBob25lJyk7XHJcblxyXG5pbnB1dFBob25lLmFkZEV2ZW50TGlzdGVuZXIoJ2lucHV0JywgZnVuY3Rpb24oKSB7XHJcbiAgICBzZWFyY2hCeVBob25lKCk7XHJcbn0pO1xyXG5cclxuZnVuY3Rpb24gc2VhcmNoQnlQaG9uZSgpIHtcclxuICAgIGxldCBzZWFyY2hUZXJtID0gaW5wdXRQaG9uZS52YWx1ZS50cmltKCk7XHJcbiAgICBpZiAoc2VhcmNoVGVybSA9PT0gJycpIHtcclxuICAgICAgICByZXN1bHRzUGhvbmUuaW5uZXJIVE1MID0gJyc7XHJcbiAgICAgICAgcmV0dXJuO1xyXG4gICAgfVxyXG5cclxuICAgIGZldGNoKGAvc2VhcmNocGhvbmUvJHtzZWFyY2hUZXJtfWApXHJcbiAgICAgICAgLnRoZW4ocmVzcG9uc2UgPT4gcmVzcG9uc2UuanNvbigpKVxyXG4gICAgICAgIC50aGVuKHVzZXJzID0+IHtcclxuICAgICAgICAgICAgcmVzdWx0c1Bob25lLmlubmVySFRNTCA9ICcnO1xyXG4gICAgICAgICAgICB1c2Vycy5mb3JFYWNoKHVzZXIgPT4ge1xyXG4gICAgICAgICAgICAgICAgbGV0IGRpdiA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2RpdicpO1xyXG4gICAgICAgICAgICAgICAgbGV0IGVtYWlsID0gdXNlci5lbWFpbDtcclxuICAgICAgICAgICAgICAgIGRpdi5jbGFzc0xpc3QuYWRkKCdjb250YWluZXInKTtcclxuICAgICAgICAgICAgICAgIGRpdi5pbm5lckhUTUwgPSBgXHJcbiAgICAgICAgICAgICAgICAgICAgPGgyPiR7dXNlci5lbWFpbH08L2gyPlxyXG4gICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9XCJwdXJjaGFzZS91c2VyLyR7dXNlci5pZH1cIj5Wb2lyIGTDqXRhaWwgY2xpZW50PC9hPlxyXG4gICAgICAgICAgICAgICAgYDtcclxuICAgICAgICAgICAgICAgIHJlc3VsdHNQaG9uZS5hcHBlbmQoZGl2KTtcclxuICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgfSk7XHJcbn1cclxuIiwiJ3VzZSBzdHJpY3QnO1xyXG5jb25zb2xlLmxvZyhcImNvdWNvdXMgc2VhcmNoanNcIik7XHJcblxyXG5sZXQgaW5wdXQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjdXNlci1zZWFyY2gtZW1haWwnKTtcclxubGV0IHJlc3VsdHMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjcmVzdWx0LWVtYWlsJyk7XHJcblxyXG5pbnB1dC5hZGRFdmVudExpc3RlbmVyKCdpbnB1dCcsIGZ1bmN0aW9uKCkge1xyXG4gICAgc2VhcmNoVXNlcigpO1xyXG59KTtcclxuXHJcbmZ1bmN0aW9uIHNlYXJjaFVzZXIoKSB7XHJcbiAgICBsZXQgc2VhcmNoVGVybSA9IGlucHV0LnZhbHVlLnRyaW0oKTtcclxuICAgIGlmIChzZWFyY2hUZXJtID09PSAnJykge1xyXG4gICAgICAgIHJlc3VsdHMuaW5uZXJIVE1MID0gJyc7XHJcbiAgICAgICAgcmV0dXJuO1xyXG4gICAgfVxyXG4gICAgZmV0Y2goYC9zZWFyY2gvJHtzZWFyY2hUZXJtfWApXHJcbiAgICAgICAgLnRoZW4ocmVzcG9uc2UgPT4gcmVzcG9uc2UuanNvbigpKVxyXG4gICAgICAgIC50aGVuKHVzZXJzID0+IHtcclxuICAgICAgICAgICAgcmVzdWx0cy5pbm5lckhUTUwgPSAnJztcclxuICAgICAgICAgICAgdXNlcnMuZm9yRWFjaCh1c2VyID0+IHtcclxuICAgICAgICAgICAgICAgIGxldCBkaXYgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKTtcclxuICAgICAgICAgICAgICAgIGxldCBlbWFpbCA9IHVzZXIuZW1haWw7XHJcbiAgICAgICAgICAgICAvLyAgIGxldCBmdWxsTmFtZSA9IHVzZXIuZnVsbE5hbWU7XHJcbiAgICAgICAgICAgIFxyXG4gICAgICAgICAgICAgICAgZGl2LmNsYXNzTGlzdC5hZGQoJ2NvbnRhaW5lcicpO1xyXG4gICAgICAgICAgICAgICAgZGl2LmlubmVySFRNTCA9IGBcclxuICAgICAgICAgICAgICAgICAgICA8aDI+JHt1c2VyLmZ1bGxOYW1lfTwvaDI+XHJcbiAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj1cInB1cmNoYXNlL3VzZXIvJHt1c2VyLmlkfVwiPlZvaXIgZMOpdGFpbHMgY2xpZW50PC9hPlxyXG4gICAgICAgICAgICAgICAgYDtcclxuICAgICAgICAgICAgICAgIHJlc3VsdHMuYXBwZW5kKGRpdik7XHJcbiAgICAgICAgICAgIH0pO1xyXG4gICAgICAgIH0pO1xyXG59XHJcbiIsIid1c2Ugc3RyaWN0JztcclxuXHJcbmNvbnNvbGUubG9nKFwiY291Y291IHNlYXJjaG5hbWVqc1wiKTtcclxuXHJcbmxldCBpbnB1dE5hbWUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjdXNlci1zZWFyY2gtbmFtZScpO1xyXG5sZXQgcmVzdWx0c05hbWUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjcmVzdWx0LW5hbWUnKTtcclxuXHJcbmlucHV0TmFtZS5hZGRFdmVudExpc3RlbmVyKCdpbnB1dCcsIGZ1bmN0aW9uKCkge1xyXG4gICAgc2VhcmNoQnlOYW1lKCk7XHJcbn0pO1xyXG5cclxuZnVuY3Rpb24gc2VhcmNoQnlOYW1lKCkge1xyXG4gICAgbGV0IHNlYXJjaFRlcm0gPSBpbnB1dE5hbWUudmFsdWUudHJpbSgpO1xyXG4gICAgaWYgKHNlYXJjaFRlcm0gPT09ICcnKSB7XHJcbiAgICAgICAgcmVzdWx0c05hbWUuaW5uZXJIVE1MID0gJyc7XHJcbiAgICAgICAgcmV0dXJuO1xyXG4gICAgfVxyXG5cclxuICAgIGZldGNoKGAvc2VhcmNobmFtZS8ke3NlYXJjaFRlcm19YClcclxuICAgICAgICAudGhlbihyZXNwb25zZSA9PiByZXNwb25zZS5qc29uKCkpXHJcbiAgICAgICAgLnRoZW4odXNlcnMgPT4ge1xyXG4gICAgICAgICAgICByZXN1bHRzTmFtZS5pbm5lckhUTUwgPSAnJztcclxuICAgICAgICAgICAgdXNlcnMuZm9yRWFjaCh1c2VyID0+IHtcclxuICAgICAgICAgICAgICAgIGxldCBkaXYgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKTtcclxuICAgICAgICAgICAgICAgIGxldCBlbWFpbCA9IHVzZXIuZW1haWw7XHJcbiAgICAgICAgICAgICAgICBkaXYuY2xhc3NMaXN0LmFkZCgnY29udGFpbmVyJyk7XHJcbiAgICAgICAgICAgICAgICBkaXYuaW5uZXJIVE1MID0gYFxyXG4gICAgICAgICAgICAgICAgICAgIDxoMj4ke3VzZXIuZW1haWx9PC9oMj5cclxuICAgICAgICAgICAgICAgICAgICA8YSBocmVmPVwicHVyY2hhc2UvdXNlci8ke3VzZXIuaWR9XCI+Vm9pciBkw6l0YWlsIGNsaWVudDwvYT5cclxuICAgICAgICAgICAgICAgIGA7XHJcbiAgICAgICAgICAgICAgICByZXN1bHRzTmFtZS5hcHBlbmQoZGl2KTtcclxuICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgfSk7XHJcbn0gICBcclxuIiwiXHJcbi8qXHJcbiAqIFdlbGNvbWUgdG8geW91ciBhcHAncyBtYWluIEphdmFTY3JpcHQgZmlsZSFcclxuICpcclxuICogV2UgcmVjb21tZW5kIGluY2x1ZGluZyB0aGUgYnVpbHQgdmVyc2lvbiBvZiB0aGlzIEphdmFTY3JpcHQgZmlsZVxyXG4gKiAoYW5kIGl0cyBDU1MgZmlsZSkgaW4geW91ciBiYXNlIGxheW91dCAoYmFzZS5odG1sLnR3aWcpLlxyXG4gKi9cclxuXHJcbi8vIGFueSBDU1MgeW91IGltcG9ydCB3aWxsIG91dHB1dCBpbnRvIGEgc2luZ2xlIGNzcyBmaWxlIChhcHAuY3NzIGluIHRoaXMgY2FzZSlcclxuaW1wb3J0ICcuL3N0eWxlcy9hcHAuY3NzJztcclxuaW1wb3J0ICcuL3N0eWxlcy9zdHlsZS5jc3MnO1xyXG5pbXBvcnQgJy4vanMvc2VhcmNocGhvbmUuanMnO1xyXG5pbXBvcnQgJy4vanMvc2VhcmNodXNlci5qcyc7XHJcbmltcG9ydCAnLi9qcy9zZWFyY2h1c2VybmFtZS5qcyc7XHJcbmltcG9ydCAnLi9qcy9tZW51LmpzJztcclxuaW1wb3J0ICcuL2pzL3ByaWNlLWlucHV0LmpzJztcclxuXHJcblxyXG5cclxuXHJcbiIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyJteUZ1bmN0aW9uIiwieCIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJjbGFzc05hbWUiLCJjb25zb2xlIiwibG9nIiwicmVxdWlyZSIsImlucHV0UGhvbmUiLCJxdWVyeVNlbGVjdG9yIiwicmVzdWx0c1Bob25lIiwiYWRkRXZlbnRMaXN0ZW5lciIsInNlYXJjaEJ5UGhvbmUiLCJzZWFyY2hUZXJtIiwidmFsdWUiLCJ0cmltIiwiaW5uZXJIVE1MIiwiZmV0Y2giLCJjb25jYXQiLCJ0aGVuIiwicmVzcG9uc2UiLCJqc29uIiwidXNlcnMiLCJmb3JFYWNoIiwidXNlciIsImRpdiIsImNyZWF0ZUVsZW1lbnQiLCJlbWFpbCIsImNsYXNzTGlzdCIsImFkZCIsImlkIiwiYXBwZW5kIiwiaW5wdXQiLCJyZXN1bHRzIiwic2VhcmNoVXNlciIsImZ1bGxOYW1lIiwiaW5wdXROYW1lIiwicmVzdWx0c05hbWUiLCJzZWFyY2hCeU5hbWUiXSwic291cmNlUm9vdCI6IiJ9