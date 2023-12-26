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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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RUFBRztFQUNwQixJQUFJekIsVUFBVSxHQUFHdUIsU0FBUyxDQUFDdEIsS0FBSyxDQUFDQyxJQUFJLENBQUMsQ0FBQztFQUN2QyxJQUFJRixVQUFVLEtBQUssRUFBRSxFQUFFO0lBQ25Cd0IsV0FBVyxDQUFDckIsU0FBUyxHQUFHLEVBQUU7SUFDMUI7RUFDSjtFQUVBQyxLQUFLLGdCQUFBQyxNQUFBLENBQWdCTCxVQUFVLENBQUUsQ0FBQyxDQUM3Qk0sSUFBSSxDQUFDLFVBQUFDLFFBQVE7SUFBQSxPQUFJQSxRQUFRLENBQUNDLElBQUksQ0FBQyxDQUFDO0VBQUEsRUFBQyxDQUNqQ0YsSUFBSSxDQUFDLFVBQUFHLEtBQUssRUFBSTtJQUNYZSxXQUFXLENBQUNyQixTQUFTLEdBQUcsRUFBRTtJQUMxQk0sS0FBSyxDQUFDQyxPQUFPLENBQUMsVUFBQUMsSUFBSSxFQUFJO01BQ2xCLElBQUlDLEdBQUcsR0FBR3ZCLFFBQVEsQ0FBQ3dCLGFBQWEsQ0FBQyxLQUFLLENBQUM7TUFDdkMsSUFBSUMsS0FBSyxHQUFHSCxJQUFJLENBQUNHLEtBQUs7TUFDdEJGLEdBQUcsQ0FBQ0csU0FBUyxDQUFDQyxHQUFHLENBQUMsV0FBVyxDQUFDO01BQzlCSixHQUFHLENBQUNULFNBQVMsZ0NBQUFFLE1BQUEsQ0FDSE0sSUFBSSxDQUFDRyxLQUFLLHlEQUFBVCxNQUFBLENBQ1NNLElBQUksQ0FBQ00sRUFBRSxtREFDbkM7TUFDRE8sV0FBVyxDQUFDTixNQUFNLENBQUNOLEdBQUcsQ0FBQztJQUMzQixDQUFDLENBQUM7RUFDTixDQUFDLENBQUM7QUFDVjs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQ2hDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDMEI7QUFDRTtBQUNDO0FBQ0Q7QUFDSTs7Ozs7Ozs7Ozs7OztBQ2JoQzs7Ozs7Ozs7Ozs7OztBQ0FBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL21lbnUuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL3NlYXJjaHBob25lLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9zZWFyY2h1c2VyLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9zZWFyY2h1c2VybmFtZS5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvdXNlci5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc3R5bGVzL2FwcC5jc3M/M2ZiYSIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc3R5bGVzL3N0eWxlLmNzcz8yNTM4Il0sInNvdXJjZXNDb250ZW50IjpbIi8qbGUgYm91dG9uIGljb24gdmEgcGVybXV0ZXIgbmF2IGV0IG5hdnJlc3BvbnNpdmUgYXUgY2xpY2sgKi9cclxuZnVuY3Rpb24gbXlGdW5jdGlvbigpIHtcclxuIHZhciB4ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJuYXZiYXJcIik7XHJcbiBpZiAoeC5jbGFzc05hbWUgPT09IFwibmF2XCIpIHtcclxuICAgICB4LmNsYXNzTmFtZSArPSBcIiByZXNwb25zaXZlXCI7XHJcblxyXG4gfSBlbHNlIHtcclxuICAgICB4LmNsYXNzTmFtZSA9IFwibmF2XCI7XHJcbiB9XHJcbn1cclxuIiwiJ3VzZSBzdHJpY3QnO1xyXG5cclxuY29uc29sZS5sb2coXCJjb3Vjb3Ugc2VhcmNocGhvbmVqc1wiKTtcclxuXHJcbmxldCBpbnB1dFBob25lID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI3VzZXItc2VhcmNoLXBob25lJyk7XHJcbmxldCByZXN1bHRzUGhvbmUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjcmVzdWx0LXBob25lJyk7XHJcblxyXG5pbnB1dFBob25lLmFkZEV2ZW50TGlzdGVuZXIoJ2lucHV0JywgZnVuY3Rpb24oKSB7XHJcbiAgICBzZWFyY2hCeVBob25lKCk7XHJcbn0pO1xyXG5cclxuZnVuY3Rpb24gc2VhcmNoQnlQaG9uZSgpIHtcclxuICAgIGxldCBzZWFyY2hUZXJtID0gaW5wdXRQaG9uZS52YWx1ZS50cmltKCk7XHJcbiAgICBpZiAoc2VhcmNoVGVybSA9PT0gJycpIHtcclxuICAgICAgICByZXN1bHRzUGhvbmUuaW5uZXJIVE1MID0gJyc7XHJcbiAgICAgICAgcmV0dXJuO1xyXG4gICAgfVxyXG5cclxuICAgIGZldGNoKGAvc2VhcmNocGhvbmUvJHtzZWFyY2hUZXJtfWApXHJcbiAgICAgICAgLnRoZW4ocmVzcG9uc2UgPT4gcmVzcG9uc2UuanNvbigpKVxyXG4gICAgICAgIC50aGVuKHVzZXJzID0+IHtcclxuICAgICAgICAgICAgcmVzdWx0c1Bob25lLmlubmVySFRNTCA9ICcnO1xyXG4gICAgICAgICAgICB1c2Vycy5mb3JFYWNoKHVzZXIgPT4ge1xyXG4gICAgICAgICAgICAgICAgbGV0IGRpdiA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2RpdicpO1xyXG4gICAgICAgICAgICAgICAgbGV0IGVtYWlsID0gdXNlci5lbWFpbDtcclxuICAgICAgICAgICAgICAgIGRpdi5jbGFzc0xpc3QuYWRkKCdjb250YWluZXInKTtcclxuICAgICAgICAgICAgICAgIGRpdi5pbm5lckhUTUwgPSBgXHJcbiAgICAgICAgICAgICAgICAgICAgPGgyPiR7dXNlci5lbWFpbH08L2gyPlxyXG4gICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9XCJwdXJjaGFzZS91c2VyLyR7dXNlci5pZH1cIj5Wb2lyIGTDqXRhaWwgY2xpZW50PC9hPlxyXG4gICAgICAgICAgICAgICAgYDtcclxuICAgICAgICAgICAgICAgIHJlc3VsdHNQaG9uZS5hcHBlbmQoZGl2KTtcclxuICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgfSk7XHJcbn1cclxuIiwiJ3VzZSBzdHJpY3QnO1xyXG5jb25zb2xlLmxvZyhcImNvdWNvdXMgc2VhcmNoanNcIik7XHJcblxyXG5sZXQgaW5wdXQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjdXNlci1zZWFyY2gtZW1haWwnKTtcclxubGV0IHJlc3VsdHMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjcmVzdWx0LWVtYWlsJyk7XHJcblxyXG5pbnB1dC5hZGRFdmVudExpc3RlbmVyKCdpbnB1dCcsIGZ1bmN0aW9uKCkge1xyXG4gICAgc2VhcmNoVXNlcigpO1xyXG59KTtcclxuXHJcbmZ1bmN0aW9uIHNlYXJjaFVzZXIoKSB7XHJcbiAgICBsZXQgc2VhcmNoVGVybSA9IGlucHV0LnZhbHVlLnRyaW0oKTtcclxuICAgIGlmIChzZWFyY2hUZXJtID09PSAnJykge1xyXG4gICAgICAgIHJlc3VsdHMuaW5uZXJIVE1MID0gJyc7XHJcbiAgICAgICAgcmV0dXJuO1xyXG4gICAgfVxyXG4gICAgZmV0Y2goYC9zZWFyY2gvJHtzZWFyY2hUZXJtfWApXHJcbiAgICAgICAgLnRoZW4ocmVzcG9uc2UgPT4gcmVzcG9uc2UuanNvbigpKVxyXG4gICAgICAgIC50aGVuKHVzZXJzID0+IHtcclxuICAgICAgICAgICAgcmVzdWx0cy5pbm5lckhUTUwgPSAnJztcclxuICAgICAgICAgICAgdXNlcnMuZm9yRWFjaCh1c2VyID0+IHtcclxuICAgICAgICAgICAgICAgIGxldCBkaXYgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKTtcclxuICAgICAgICAgICAgICAgIGxldCBlbWFpbCA9IHVzZXIuZW1haWw7XHJcbiAgICAgICAgICAgICAvLyAgIGxldCBmdWxsTmFtZSA9IHVzZXIuZnVsbE5hbWU7XHJcbiAgICAgICAgICAgIFxyXG4gICAgICAgICAgICAgICAgZGl2LmNsYXNzTGlzdC5hZGQoJ2NvbnRhaW5lcicpO1xyXG4gICAgICAgICAgICAgICAgZGl2LmlubmVySFRNTCA9IGBcclxuICAgICAgICAgICAgICAgICAgICA8aDI+JHt1c2VyLmZ1bGxOYW1lfTwvaDI+XHJcbiAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj1cInB1cmNoYXNlL3VzZXIvJHt1c2VyLmlkfVwiPlZvaXIgZMOpdGFpbHMgY2xpZW50PC9hPlxyXG4gICAgICAgICAgICAgICAgYDtcclxuICAgICAgICAgICAgICAgIHJlc3VsdHMuYXBwZW5kKGRpdik7XHJcbiAgICAgICAgICAgIH0pO1xyXG4gICAgICAgIH0pO1xyXG59XHJcbiIsIid1c2Ugc3RyaWN0JztcclxuXHJcbmNvbnNvbGUubG9nKFwiY291Y291IHNlYXJjaG5hbWVqc1wiKTtcclxuXHJcbmxldCBpbnB1dE5hbWUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjdXNlci1zZWFyY2gtbmFtZScpO1xyXG5sZXQgcmVzdWx0c05hbWUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjcmVzdWx0LW5hbWUnKTtcclxuXHJcbmlucHV0TmFtZS5hZGRFdmVudExpc3RlbmVyKCdpbnB1dCcsIGZ1bmN0aW9uKCkge1xyXG4gICAgc2VhcmNoQnlOYW1lKCk7XHJcbn0pO1xyXG5cclxuZnVuY3Rpb24gc2VhcmNoQnlOYW1lKCkge1xyXG4gICAgbGV0IHNlYXJjaFRlcm0gPSBpbnB1dE5hbWUudmFsdWUudHJpbSgpO1xyXG4gICAgaWYgKHNlYXJjaFRlcm0gPT09ICcnKSB7XHJcbiAgICAgICAgcmVzdWx0c05hbWUuaW5uZXJIVE1MID0gJyc7XHJcbiAgICAgICAgcmV0dXJuO1xyXG4gICAgfVxyXG5cclxuICAgIGZldGNoKGAvc2VhcmNobmFtZS8ke3NlYXJjaFRlcm19YClcclxuICAgICAgICAudGhlbihyZXNwb25zZSA9PiByZXNwb25zZS5qc29uKCkpXHJcbiAgICAgICAgLnRoZW4odXNlcnMgPT4ge1xyXG4gICAgICAgICAgICByZXN1bHRzTmFtZS5pbm5lckhUTUwgPSAnJztcclxuICAgICAgICAgICAgdXNlcnMuZm9yRWFjaCh1c2VyID0+IHtcclxuICAgICAgICAgICAgICAgIGxldCBkaXYgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKTtcclxuICAgICAgICAgICAgICAgIGxldCBlbWFpbCA9IHVzZXIuZW1haWw7XHJcbiAgICAgICAgICAgICAgICBkaXYuY2xhc3NMaXN0LmFkZCgnY29udGFpbmVyJyk7XHJcbiAgICAgICAgICAgICAgICBkaXYuaW5uZXJIVE1MID0gYFxyXG4gICAgICAgICAgICAgICAgICAgIDxoMj4ke3VzZXIuZW1haWx9PC9oMj5cclxuICAgICAgICAgICAgICAgICAgICA8YSBocmVmPVwicHVyY2hhc2UvdXNlci8ke3VzZXIuaWR9XCI+Vm9pciBkw6l0YWlsIGNsaWVudDwvYT5cclxuICAgICAgICAgICAgICAgIGA7XHJcbiAgICAgICAgICAgICAgICByZXN1bHRzTmFtZS5hcHBlbmQoZGl2KTtcclxuICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgfSk7XHJcbn1cclxuIiwiXHJcbi8qXHJcbiAqIFdlbGNvbWUgdG8geW91ciBhcHAncyBtYWluIEphdmFTY3JpcHQgZmlsZSFcclxuICpcclxuICogV2UgcmVjb21tZW5kIGluY2x1ZGluZyB0aGUgYnVpbHQgdmVyc2lvbiBvZiB0aGlzIEphdmFTY3JpcHQgZmlsZVxyXG4gKiAoYW5kIGl0cyBDU1MgZmlsZSkgaW4geW91ciBiYXNlIGxheW91dCAoYmFzZS5odG1sLnR3aWcpLlxyXG4gKi9cclxuXHJcbi8vIGFueSBDU1MgeW91IGltcG9ydCB3aWxsIG91dHB1dCBpbnRvIGEgc2luZ2xlIGNzcyBmaWxlIChhcHAuY3NzIGluIHRoaXMgY2FzZSlcclxuaW1wb3J0ICcuL3N0eWxlcy9hcHAuY3NzJztcclxuaW1wb3J0ICcuL3N0eWxlcy9zdHlsZS5jc3MnO1xyXG5pbXBvcnQgJy4vanMvc2VhcmNocGhvbmUuanMnO1xyXG5pbXBvcnQgJy4vanMvc2VhcmNodXNlci5qcyc7XHJcbmltcG9ydCAnLi9qcy9zZWFyY2h1c2VybmFtZS5qcyc7XHJcbmltcG9ydCAnLi9qcy9tZW51LmpzJztcclxuXHJcblxyXG5cclxuXHJcbiIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyJteUZ1bmN0aW9uIiwieCIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJjbGFzc05hbWUiLCJyZXF1aXJlIiwiY29uc29sZSIsImxvZyIsImlucHV0UGhvbmUiLCJxdWVyeVNlbGVjdG9yIiwicmVzdWx0c1Bob25lIiwiYWRkRXZlbnRMaXN0ZW5lciIsInNlYXJjaEJ5UGhvbmUiLCJzZWFyY2hUZXJtIiwidmFsdWUiLCJ0cmltIiwiaW5uZXJIVE1MIiwiZmV0Y2giLCJjb25jYXQiLCJ0aGVuIiwicmVzcG9uc2UiLCJqc29uIiwidXNlcnMiLCJmb3JFYWNoIiwidXNlciIsImRpdiIsImNyZWF0ZUVsZW1lbnQiLCJlbWFpbCIsImNsYXNzTGlzdCIsImFkZCIsImlkIiwiYXBwZW5kIiwiaW5wdXQiLCJyZXN1bHRzIiwic2VhcmNoVXNlciIsImZ1bGxOYW1lIiwiaW5wdXROYW1lIiwicmVzdWx0c05hbWUiLCJzZWFyY2hCeU5hbWUiXSwic291cmNlUm9vdCI6IiJ9