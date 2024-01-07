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
/***/ (() => {

"use strict";


console.log("coucou searchphonejs");

/*

let inputPhone = document.querySelector('#user-search-phone');
let resultsPhone = document.querySelector('#result-phone');

inputPhone.addEventListener('input', function() {
    searchByPhone();
});

function searchByPhone() {
    let searchTerm = inputPhone.value.trim();
    if (searchTerm === '') {
        resultsPhone.innerHTML = '';
        return;
    }

    fetch(`/searchphone/${searchTerm}`)
        .then(response => response.json())
        .then(users => {
            resultsPhone.innerHTML = '';
            users.forEach(user => {
                let div = document.createElement('div');
                let email = user.email;
                div.classList.add('container');
                div.innerHTML = `
                    <h2>${user.email}</h2>
                    <a href="purchase/user/${user.id}">Voir détail client</a>
                `;
                resultsPhone.append(div);
            });
        });
}
*/

/***/ }),

/***/ "./assets/js/searchuser.js":
/*!*********************************!*\
  !*** ./assets/js/searchuser.js ***!
  \*********************************/
/***/ (() => {

"use strict";


console.log("coucous searchjs");
/*
let input = document.querySelector('#user-search-email');
let results = document.querySelector('#result-email');

input.addEventListener('input', function() {
    searchUser();
});

function searchUser() {
    let searchTerm = input.value.trim();
    if (searchTerm === '') {
        results.innerHTML = '';
        return;
    }
    fetch(`/search/${searchTerm}`)
        .then(response => response.json())
        .then(users => {
            results.innerHTML = '';
            users.forEach(user => {
                let div = document.createElement('div');
                let email = user.email;
             //   let fullName = user.fullName;
            
                div.classList.add('container');
                div.innerHTML = `
                    <h2>${user.fullName}</h2>
                    <a href="purchase/user/${user.id}">Voir détails client</a>
                `;
                results.append(div);
            });
        });
}*/

/***/ }),

/***/ "./assets/js/searchusername.js":
/*!*************************************!*\
  !*** ./assets/js/searchusername.js ***!
  \*************************************/
/***/ (() => {

"use strict";


console.log("coucou searchnamejs");
/*
let inputName = document.querySelector('#user-search-name');
let resultsName = document.querySelector('#result-name');

inputName.addEventListener('input', function() {
    searchByName();
});

function searchByName() {
    let searchTerm = inputName.value.trim();
    if (searchTerm === '') {
        resultsName.innerHTML = '';
        return;
    }

    fetch(`/searchname/${searchTerm}`)
        .then(response => response.json())
        .then(users => {
            resultsName.innerHTML = '';
            users.forEach(user => {
                let div = document.createElement('div');
                let email = user.email;
                div.classList.add('container');
                div.innerHTML = `
                    <h2>${user.email}</h2>
                    <a href="purchase/user/${user.id}">Voir détail client</a>
                `;
                resultsName.append(div);
            });
        });
}   */

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
/******/ __webpack_require__.O(0, ["assets_styles_app_css-assets_styles_style_css"], () => (__webpack_exec__("./assets/user.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoidXNlci5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7OztBQUFBO0FBQ0EsU0FBU0EsVUFBVUEsQ0FBQSxFQUFHO0VBQ3JCLElBQUlDLENBQUMsR0FBR0MsUUFBUSxDQUFDQyxjQUFjLENBQUMsUUFBUSxDQUFDO0VBQ3pDLElBQUlGLENBQUMsQ0FBQ0csU0FBUyxLQUFLLEtBQUssRUFBRTtJQUN2QkgsQ0FBQyxDQUFDRyxTQUFTLElBQUksYUFBYTtFQUVoQyxDQUFDLE1BQU07SUFDSEgsQ0FBQyxDQUFDRyxTQUFTLEdBQUcsS0FBSztFQUN2QjtBQUNEOzs7Ozs7Ozs7OztBQ1RhOztBQUNiQyxPQUFPLENBQUNDLEdBQUcsQ0FBQyxzQkFBc0IsQ0FBQztBQUNuQztBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7Ozs7Ozs7Ozs7QUNwQmE7O0FBRWJELE9BQU8sQ0FBQ0MsR0FBRyxDQUFDLHNCQUFzQixDQUFDOztBQUVuQztBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7Ozs7Ozs7Ozs7O0FDcENhOztBQUNiRCxPQUFPLENBQUNDLEdBQUcsQ0FBQyxrQkFBa0IsQ0FBQztBQUMvQjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOzs7Ozs7Ozs7OztBQ2pDYTs7QUFFYkQsT0FBTyxDQUFDQyxHQUFHLENBQUMscUJBQXFCLENBQUM7QUFDbEM7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQ2hDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDMEI7QUFDRTtBQUNDO0FBQ0Q7QUFDSTtBQUNWOzs7Ozs7Ozs7Ozs7O0FDZHRCOzs7Ozs7Ozs7Ozs7O0FDQUEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvbWVudS5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvcHJpY2UtaW5wdXQuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL3NlYXJjaHBob25lLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9zZWFyY2h1c2VyLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9zZWFyY2h1c2VybmFtZS5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvdXNlci5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc3R5bGVzL2FwcC5jc3M/M2ZiYSIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc3R5bGVzL3N0eWxlLmNzcz8yNTM4Il0sInNvdXJjZXNDb250ZW50IjpbIi8qbGUgYm91dG9uIGljb24gdmEgcGVybXV0ZXIgbmF2IGV0IG5hdnJlc3BvbnNpdmUgYXUgY2xpY2sgKi9cclxuZnVuY3Rpb24gbXlGdW5jdGlvbigpIHtcclxuIHZhciB4ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJuYXZiYXJcIik7XHJcbiBpZiAoeC5jbGFzc05hbWUgPT09IFwibmF2XCIpIHtcclxuICAgICB4LmNsYXNzTmFtZSArPSBcIiByZXNwb25zaXZlXCI7XHJcblxyXG4gfSBlbHNlIHtcclxuICAgICB4LmNsYXNzTmFtZSA9IFwibmF2XCI7XHJcbiB9XHJcbn1cclxuIiwiJ3VzZSBzdHJpY3QnO1xyXG5jb25zb2xlLmxvZyhcImNvdWNvdXMgaW5wdXRwcmljZWpzXCIpO1xyXG4vKlxyXG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdET01Db250ZW50TG9hZGVkJywgZnVuY3Rpb24oKSB7XHJcbiAgICAvL3BvdXIgdmlkZXIgbCdpbnB1dCwgcGFzIGRlIHNhaXNpZSBhdXRvbWF0aXF1ZVxyXG4gICAgdmFyIG1vZGlmaWVkUHJpY2VJbnB1dCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjYWxlbmRhcl9tb2RpZmllZFByaWNlJyk7XHJcblxyXG4gICAgbW9kaWZpZWRQcmljZUlucHV0LmFkZEV2ZW50TGlzdGVuZXIoJ2NoYW5nZScsIGZ1bmN0aW9uKCkge1xyXG4gICAgICAgIGlmIChtb2RpZmllZFByaWNlSW5wdXQudmFsdWUgPT09ICcnKSB7XHJcbiAgICAgICAgICAgIG1vZGlmaWVkUHJpY2VJbnB1dC5kZWZhdWx0VmFsdWUgPSAnJztcclxuICAgICAgICB9XHJcbiAgICB9KTtcclxuXHJcbiAgICB2YXIgZm9ybSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ2Zvcm0nKTtcclxuXHJcbiAgICBmb3JtLmFkZEV2ZW50TGlzdGVuZXIoJ3N1Ym1pdCcsIGZ1bmN0aW9uKCkge1xyXG4gICAgICAgIGlmIChtb2RpZmllZFByaWNlSW5wdXQudmFsdWUgPT09IG1vZGlmaWVkUHJpY2VJbnB1dC5kZWZhdWx0VmFsdWUpIHtcclxuICAgICAgICAgICAgbW9kaWZpZWRQcmljZUlucHV0LnZhbHVlID0gJyc7XHJcbiAgICAgICAgfVxyXG4gICAgfSk7XHJcbn0pOyovXHJcbiIsIid1c2Ugc3RyaWN0JztcclxuXHJcbmNvbnNvbGUubG9nKFwiY291Y291IHNlYXJjaHBob25lanNcIik7XHJcblxyXG4vKlxyXG5cclxubGV0IGlucHV0UGhvbmUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjdXNlci1zZWFyY2gtcGhvbmUnKTtcclxubGV0IHJlc3VsdHNQaG9uZSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNyZXN1bHQtcGhvbmUnKTtcclxuXHJcbmlucHV0UGhvbmUuYWRkRXZlbnRMaXN0ZW5lcignaW5wdXQnLCBmdW5jdGlvbigpIHtcclxuICAgIHNlYXJjaEJ5UGhvbmUoKTtcclxufSk7XHJcblxyXG5mdW5jdGlvbiBzZWFyY2hCeVBob25lKCkge1xyXG4gICAgbGV0IHNlYXJjaFRlcm0gPSBpbnB1dFBob25lLnZhbHVlLnRyaW0oKTtcclxuICAgIGlmIChzZWFyY2hUZXJtID09PSAnJykge1xyXG4gICAgICAgIHJlc3VsdHNQaG9uZS5pbm5lckhUTUwgPSAnJztcclxuICAgICAgICByZXR1cm47XHJcbiAgICB9XHJcblxyXG4gICAgZmV0Y2goYC9zZWFyY2hwaG9uZS8ke3NlYXJjaFRlcm19YClcclxuICAgICAgICAudGhlbihyZXNwb25zZSA9PiByZXNwb25zZS5qc29uKCkpXHJcbiAgICAgICAgLnRoZW4odXNlcnMgPT4ge1xyXG4gICAgICAgICAgICByZXN1bHRzUGhvbmUuaW5uZXJIVE1MID0gJyc7XHJcbiAgICAgICAgICAgIHVzZXJzLmZvckVhY2godXNlciA9PiB7XHJcbiAgICAgICAgICAgICAgICBsZXQgZGl2ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XHJcbiAgICAgICAgICAgICAgICBsZXQgZW1haWwgPSB1c2VyLmVtYWlsO1xyXG4gICAgICAgICAgICAgICAgZGl2LmNsYXNzTGlzdC5hZGQoJ2NvbnRhaW5lcicpO1xyXG4gICAgICAgICAgICAgICAgZGl2LmlubmVySFRNTCA9IGBcclxuICAgICAgICAgICAgICAgICAgICA8aDI+JHt1c2VyLmVtYWlsfTwvaDI+XHJcbiAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj1cInB1cmNoYXNlL3VzZXIvJHt1c2VyLmlkfVwiPlZvaXIgZMOpdGFpbCBjbGllbnQ8L2E+XHJcbiAgICAgICAgICAgICAgICBgO1xyXG4gICAgICAgICAgICAgICAgcmVzdWx0c1Bob25lLmFwcGVuZChkaXYpO1xyXG4gICAgICAgICAgICB9KTtcclxuICAgICAgICB9KTtcclxufVxyXG4qLyIsIid1c2Ugc3RyaWN0JztcclxuY29uc29sZS5sb2coXCJjb3Vjb3VzIHNlYXJjaGpzXCIpO1xyXG4vKlxyXG5sZXQgaW5wdXQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjdXNlci1zZWFyY2gtZW1haWwnKTtcclxubGV0IHJlc3VsdHMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjcmVzdWx0LWVtYWlsJyk7XHJcblxyXG5pbnB1dC5hZGRFdmVudExpc3RlbmVyKCdpbnB1dCcsIGZ1bmN0aW9uKCkge1xyXG4gICAgc2VhcmNoVXNlcigpO1xyXG59KTtcclxuXHJcbmZ1bmN0aW9uIHNlYXJjaFVzZXIoKSB7XHJcbiAgICBsZXQgc2VhcmNoVGVybSA9IGlucHV0LnZhbHVlLnRyaW0oKTtcclxuICAgIGlmIChzZWFyY2hUZXJtID09PSAnJykge1xyXG4gICAgICAgIHJlc3VsdHMuaW5uZXJIVE1MID0gJyc7XHJcbiAgICAgICAgcmV0dXJuO1xyXG4gICAgfVxyXG4gICAgZmV0Y2goYC9zZWFyY2gvJHtzZWFyY2hUZXJtfWApXHJcbiAgICAgICAgLnRoZW4ocmVzcG9uc2UgPT4gcmVzcG9uc2UuanNvbigpKVxyXG4gICAgICAgIC50aGVuKHVzZXJzID0+IHtcclxuICAgICAgICAgICAgcmVzdWx0cy5pbm5lckhUTUwgPSAnJztcclxuICAgICAgICAgICAgdXNlcnMuZm9yRWFjaCh1c2VyID0+IHtcclxuICAgICAgICAgICAgICAgIGxldCBkaXYgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKTtcclxuICAgICAgICAgICAgICAgIGxldCBlbWFpbCA9IHVzZXIuZW1haWw7XHJcbiAgICAgICAgICAgICAvLyAgIGxldCBmdWxsTmFtZSA9IHVzZXIuZnVsbE5hbWU7XHJcbiAgICAgICAgICAgIFxyXG4gICAgICAgICAgICAgICAgZGl2LmNsYXNzTGlzdC5hZGQoJ2NvbnRhaW5lcicpO1xyXG4gICAgICAgICAgICAgICAgZGl2LmlubmVySFRNTCA9IGBcclxuICAgICAgICAgICAgICAgICAgICA8aDI+JHt1c2VyLmZ1bGxOYW1lfTwvaDI+XHJcbiAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj1cInB1cmNoYXNlL3VzZXIvJHt1c2VyLmlkfVwiPlZvaXIgZMOpdGFpbHMgY2xpZW50PC9hPlxyXG4gICAgICAgICAgICAgICAgYDtcclxuICAgICAgICAgICAgICAgIHJlc3VsdHMuYXBwZW5kKGRpdik7XHJcbiAgICAgICAgICAgIH0pO1xyXG4gICAgICAgIH0pO1xyXG59Ki9cclxuIiwiJ3VzZSBzdHJpY3QnO1xyXG5cclxuY29uc29sZS5sb2coXCJjb3Vjb3Ugc2VhcmNobmFtZWpzXCIpO1xyXG4vKlxyXG5sZXQgaW5wdXROYW1lID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI3VzZXItc2VhcmNoLW5hbWUnKTtcclxubGV0IHJlc3VsdHNOYW1lID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI3Jlc3VsdC1uYW1lJyk7XHJcblxyXG5pbnB1dE5hbWUuYWRkRXZlbnRMaXN0ZW5lcignaW5wdXQnLCBmdW5jdGlvbigpIHtcclxuICAgIHNlYXJjaEJ5TmFtZSgpO1xyXG59KTtcclxuXHJcbmZ1bmN0aW9uIHNlYXJjaEJ5TmFtZSgpIHtcclxuICAgIGxldCBzZWFyY2hUZXJtID0gaW5wdXROYW1lLnZhbHVlLnRyaW0oKTtcclxuICAgIGlmIChzZWFyY2hUZXJtID09PSAnJykge1xyXG4gICAgICAgIHJlc3VsdHNOYW1lLmlubmVySFRNTCA9ICcnO1xyXG4gICAgICAgIHJldHVybjtcclxuICAgIH1cclxuXHJcbiAgICBmZXRjaChgL3NlYXJjaG5hbWUvJHtzZWFyY2hUZXJtfWApXHJcbiAgICAgICAgLnRoZW4ocmVzcG9uc2UgPT4gcmVzcG9uc2UuanNvbigpKVxyXG4gICAgICAgIC50aGVuKHVzZXJzID0+IHtcclxuICAgICAgICAgICAgcmVzdWx0c05hbWUuaW5uZXJIVE1MID0gJyc7XHJcbiAgICAgICAgICAgIHVzZXJzLmZvckVhY2godXNlciA9PiB7XHJcbiAgICAgICAgICAgICAgICBsZXQgZGl2ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XHJcbiAgICAgICAgICAgICAgICBsZXQgZW1haWwgPSB1c2VyLmVtYWlsO1xyXG4gICAgICAgICAgICAgICAgZGl2LmNsYXNzTGlzdC5hZGQoJ2NvbnRhaW5lcicpO1xyXG4gICAgICAgICAgICAgICAgZGl2LmlubmVySFRNTCA9IGBcclxuICAgICAgICAgICAgICAgICAgICA8aDI+JHt1c2VyLmVtYWlsfTwvaDI+XHJcbiAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj1cInB1cmNoYXNlL3VzZXIvJHt1c2VyLmlkfVwiPlZvaXIgZMOpdGFpbCBjbGllbnQ8L2E+XHJcbiAgICAgICAgICAgICAgICBgO1xyXG4gICAgICAgICAgICAgICAgcmVzdWx0c05hbWUuYXBwZW5kKGRpdik7XHJcbiAgICAgICAgICAgIH0pO1xyXG4gICAgICAgIH0pO1xyXG59ICAgKi9cclxuIiwiXHJcbi8qXHJcbiAqIFdlbGNvbWUgdG8geW91ciBhcHAncyBtYWluIEphdmFTY3JpcHQgZmlsZSFcclxuICpcclxuICogV2UgcmVjb21tZW5kIGluY2x1ZGluZyB0aGUgYnVpbHQgdmVyc2lvbiBvZiB0aGlzIEphdmFTY3JpcHQgZmlsZVxyXG4gKiAoYW5kIGl0cyBDU1MgZmlsZSkgaW4geW91ciBiYXNlIGxheW91dCAoYmFzZS5odG1sLnR3aWcpLlxyXG4gKi9cclxuXHJcbi8vIGFueSBDU1MgeW91IGltcG9ydCB3aWxsIG91dHB1dCBpbnRvIGEgc2luZ2xlIGNzcyBmaWxlIChhcHAuY3NzIGluIHRoaXMgY2FzZSlcclxuaW1wb3J0ICcuL3N0eWxlcy9hcHAuY3NzJztcclxuaW1wb3J0ICcuL3N0eWxlcy9zdHlsZS5jc3MnO1xyXG5pbXBvcnQgJy4vanMvc2VhcmNocGhvbmUuanMnO1xyXG5pbXBvcnQgJy4vanMvc2VhcmNodXNlci5qcyc7XHJcbmltcG9ydCAnLi9qcy9zZWFyY2h1c2VybmFtZS5qcyc7XHJcbmltcG9ydCAnLi9qcy9tZW51LmpzJztcclxuaW1wb3J0ICcuL2pzL3ByaWNlLWlucHV0LmpzJztcclxuXHJcblxyXG5cclxuXHJcbiIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyJteUZ1bmN0aW9uIiwieCIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJjbGFzc05hbWUiLCJjb25zb2xlIiwibG9nIl0sInNvdXJjZVJvb3QiOiIifQ==