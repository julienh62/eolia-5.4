(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.[jt]sx?$":
/*!****************************************************************************************************************!*\
  !*** ./assets/controllers/ sync ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \.[jt]sx?$ ***!
  \****************************************************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var map = {
	"./hello_controller.js": "./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.[jt]sx?$";

/***/ }),

/***/ "./node_modules/@symfony/stimulus-bridge/dist/webpack/loader.js!./assets/controllers.json":
/*!************************************************************************************************!*\
  !*** ./node_modules/@symfony/stimulus-bridge/dist/webpack/loader.js!./assets/controllers.json ***!
  \************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
});

/***/ }),

/***/ "./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js":
/*!******************************************************************************************************************!*\
  !*** ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js ***!
  \******************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _default)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_reflect_to_string_tag_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.reflect.to-string-tag.js */ "./node_modules/core-js/modules/es.reflect.to-string-tag.js");
/* harmony import */ var core_js_modules_es_reflect_to_string_tag_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_to_string_tag_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_error_cause_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.error.cause.js */ "./node_modules/core-js/modules/es.error.cause.js");
/* harmony import */ var core_js_modules_es_error_cause_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_error_cause_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_error_to_string_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.error.to-string.js */ "./node_modules/core-js/modules/es.error.to-string.js");
/* harmony import */ var core_js_modules_es_error_to_string_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_error_to_string_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.symbol.to-primitive.js */ "./node_modules/core-js/modules/es.symbol.to-primitive.js");
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.date.to-primitive.js */ "./node_modules/core-js/modules/es.date.to-primitive.js");
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var _hotwired_stimulus__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! @hotwired/stimulus */ "./node_modules/@hotwired/stimulus/dist/stimulus.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }



















function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }
function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }
function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }
function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }
function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }
function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }
function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }


/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */
var _default = /*#__PURE__*/function (_Controller) {
  _inherits(_default, _Controller);
  var _super = _createSuper(_default);
  function _default() {
    _classCallCheck(this, _default);
    return _super.apply(this, arguments);
  }
  _createClass(_default, [{
    key: "connect",
    value: function connect() {
      this.element.textContent = 'Hello Stimulus! Edit me in assets/controllers/hello_controller.js';
    }
  }]);
  return _default;
}(_hotwired_stimulus__WEBPACK_IMPORTED_MODULE_19__.Controller);


/***/ }),

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _bootstrap_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./bootstrap.js */ "./assets/bootstrap.js");
/* harmony import */ var _styles_app_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./styles/app.css */ "./assets/styles/app.css");
/* harmony import */ var _styles_style_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./styles/style.css */ "./assets/styles/style.css");
/* harmony import */ var _js_calendar_duration_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./js/calendar-duration.js */ "./assets/js/calendar-duration.js");
/* harmony import */ var _js_calendar_duration_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_js_calendar_duration_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _js_payment_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./js/payment.js */ "./assets/js/payment.js");
/* harmony import */ var _js_payment_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_js_payment_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _js_menu_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./js/menu.js */ "./assets/js/menu.js");
/* harmony import */ var _js_menu_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_js_menu_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _js_cartamount_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./js/cartamount.js */ "./assets/js/cartamount.js");
/* harmony import */ var _js_cartamount_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_js_cartamount_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var _js_sousmenuquantity_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./js/sousmenuquantity.js */ "./assets/js/sousmenuquantity.js");
/* harmony import */ var _js_sousmenuquantity_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(_js_sousmenuquantity_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var _js_slider_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./js/slider.js */ "./assets/js/slider.js");
/* harmony import */ var _js_slider_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(_js_slider_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var bootstrap__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js");
/* harmony import */ var _hotwired_turbo_rails__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! @hotwired/turbo-rails */ "./node_modules/@hotwired/turbo-rails/app/javascript/turbo/index.js");

/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)









//start the stimulus application


_hotwired_turbo_rails__WEBPACK_IMPORTED_MODULE_10__.Turbo.session.drive = false;

/***/ }),

/***/ "./assets/bootstrap.js":
/*!*****************************!*\
  !*** ./assets/bootstrap.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   app: () => (/* binding */ app)
/* harmony export */ });
/* harmony import */ var _symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @symfony/stimulus-bridge */ "./node_modules/@symfony/stimulus-bridge/dist/index.js");


// Registers Stimulus controllers from controllers.json and in the controllers/ directory
var app = (0,_symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__.startStimulusApp)(__webpack_require__("./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.[jt]sx?$"));
// register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);

/***/ }),

/***/ "./assets/js/calendar-duration.js":
/*!****************************************!*\
  !*** ./assets/js/calendar-duration.js ***!
  \****************************************/
/***/ (() => {

var mediaQuery = window.matchMedia("(max-width: 1000px)");
console.log("coucou duration");
function updateCalendarDuration() {
  console.log("Media query change event:", mediaQuery.matches);
  if (mediaQuery.matches) {
    // The media query is active (phone mobile screen)
    console.log("CategoryColorSetting calendar duration to 3 days");
    calendar.setOption('duration', {
      days: 3
    });
  } else {
    // The media query is not active (large screen)
    console.log("CategoryColorSetting calendar duration to 7 days");
    calendar.setOption('duration', {
      days: 7
    });
  }
}

// Call the function once when the page loads
window.addEventListener('load', function () {
  console.log("Page loaded");
  updateCalendarDuration();
});

// Listen for the 'change' event on the media query
mediaQuery.addEventListener('change', function () {
  console.log("Media query changed");
  updateCalendarDuration();
});

/***/ }),

/***/ "./assets/js/cartamount.js":
/*!*********************************!*\
  !*** ./assets/js/cartamount.js ***!
  \*********************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.parse-float.js */ "./node_modules/core-js/modules/es.parse-float.js");
__webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
__webpack_require__(/*! core-js/modules/es.string.match.js */ "./node_modules/core-js/modules/es.string.match.js");
// Récupérer l'élément du lien du panier
var panierLink = document.getElementById("panier-link");

// Récupérer le montant du panier
var montantPanier = parseFloat(panierLink.innerText.match(/([0-9.]+)/)[0]);

// Vérifier si le montant est différent de 0.00 €
if (montantPanier !== 0.0) {
  // Créer un nouvel élément de texte
  var texteFinaliserCommande = document.createTextNode("Finalisez votre commande");

  // Ajouter le texte à l'élément du lien du panier
  panierLink.appendChild(texteFinaliserCommande);

  // Appliquer le style rouge au texte ajouté
  panierLink.style.color = "#f87902";
}

/***/ }),

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

/***/ "./assets/js/payment.js":
/*!******************************!*\
  !*** ./assets/js/payment.js ***!
  \******************************/
/***/ (() => {

var stripe = Stripe(stripePublicKey);
var elements = stripe.elements();
var style = {
  base: {
    color: "#0570de",
    fontFamily: 'Arial, sans-serif',
    fontSmoothing: "antialiased",
    fontSize: "16px",
    "::placeholder": {}
  },
  invalid: {
    fontFamily: 'Arial, sans-serif',
    color: "#fa755a"
  }
};
console.log("coucous payment");
var card = elements.create("card", {
  style: style
});
// stripe injects an iframe into the Dom
console.log(card);
card.mount("#card-element");
console.log(card.mount);
card.on("change", function (event) {
  // disable the Pay button if there are no card details in the Element
  document.querySelector("button").disabled = event.empty;
  document.querySelector("#card-error").textContent = event.error ? event.error.message : "";
});
var form = document.getElementById("payment-form");
form.addEventListener("submit", function (event) {
  event.preventDefault();
  // Complete payment when the submit button is clicked
  stripe.confirmCardPayment(clientSecret, {
    payment_method: {
      card: card
    }
  }).then(function (result) {
    if (result.error) {
      // show error to customer
      console.log(result.error.message);
    } else {
      // the payment succeeded
      // on fait une redirection
      window.location.href = redirectAfterSuccesUrl;
    }
  });
});

/***/ }),

/***/ "./assets/js/slider.js":
/*!*****************************!*\
  !*** ./assets/js/slider.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


__webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");
console.log("cc slider.js");
/* création du tableau */
var slide = ["char-accueiltitregros1500.webp", "chardepart-1500.webp", "cata.webp", "paddle.webp"];
var numero = 0;
function ChangeSlide(sens) {
  /* document , page en cour */
  /* sens est un parametre */
  numero = numero + sens;
  /*les conditions permettent de boucler */
  if (numero > slide.length - 1) numero = 0;
  if (numero < 0) numero = slide.length - 1;
  document.getElementById("slide").src = "assets/uploads/slide/" + slide[numero];
}
setInterval("ChangeSlide(1)", 4000);

/* création du tableau */
var slidemobil = ["accueil-mobil-char.webp", "accueil-cata2-mobil.webp", "accueil-kayak-mobil.webp", "accueil-mobil-paddle.webp"];
var numeromob = 0;
function ChangeSlideMob(sens) {
  /* document , page en cour */
  /* sens est un parametre */
  numeromob = numeromob + sens;
  /*les conditions permettent de boucler */
  if (numeromob > slidemobil.length - 1) numeromob = 0;
  if (numeromob < 0) numeromob = slidemobil.length - 1;
  document.getElementById("slidemobil").src = "assets/uploads/slide/" + slidemobil[numeromob];
}
setInterval("ChangeSlideMob(1)", 4000);

/***/ }),

/***/ "./assets/js/sousmenuquantity.js":
/*!***************************************!*\
  !*** ./assets/js/sousmenuquantity.js ***!
  \***************************************/
/***/ (() => {

/*console.log("cc sousmenuquantity!");
//il s'agit d'integrer une collection de formulaire
const container = document.getElementById('userForm');*/

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
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_internals_a-constructor_js-node_modules_core-js_internals_array--0b3311","vendors-node_modules_hotwired_turbo-rails_app_javascript_turbo_index_js-node_modules_symfony_-a447b1","assets_styles_app_css-assets_styles_style_css"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QUFDLFlBQVksQ0FBQyxDQUFDK0MsR0FBRyxHQUFHLHVCQUF1QixHQUFHRSxVQUFVLENBQUNDLFNBQVMsQ0FBQztBQUM3RjtBQUVBRixXQUFXLENBQUMsbUJBQW1CLEVBQUUsSUFBSSxDQUFDOzs7Ozs7Ozs7O0FDckMxQztBQUNBO0FBQ0E7Ozs7Ozs7Ozs7OztBQ0ZBOzs7Ozs7Ozs7Ozs7O0FDQUEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vIFxcLltqdF1zeCIsIndlYnBhY2s6Ly8vLi9hc3NldHMvY29udHJvbGxlcnMuanNvbiIsIndlYnBhY2s6Ly8vLi9hc3NldHMvY29udHJvbGxlcnMvaGVsbG9fY29udHJvbGxlci5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9ib290c3RyYXAuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2NhbGVuZGFyLWR1cmF0aW9uLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9jYXJ0YW1vdW50LmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9tZW51LmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9wYXltZW50LmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9zbGlkZXIuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL3NvdXNtZW51cXVhbnRpdHkuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9hcHAuY3NzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvc3R5bGUuY3NzIl0sInNvdXJjZXNDb250ZW50IjpbInZhciBtYXAgPSB7XG5cdFwiLi9oZWxsb19jb250cm9sbGVyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvQHN5bWZvbnkvc3RpbXVsdXMtYnJpZGdlL2xhenktY29udHJvbGxlci1sb2FkZXIuanMhLi9hc3NldHMvY29udHJvbGxlcnMvaGVsbG9fY29udHJvbGxlci5qc1wiXG59O1xuXG5cbmZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0KHJlcSkge1xuXHR2YXIgaWQgPSB3ZWJwYWNrQ29udGV4dFJlc29sdmUocmVxKTtcblx0cmV0dXJuIF9fd2VicGFja19yZXF1aXJlX18oaWQpO1xufVxuZnVuY3Rpb24gd2VicGFja0NvbnRleHRSZXNvbHZlKHJlcSkge1xuXHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKG1hcCwgcmVxKSkge1xuXHRcdHZhciBlID0gbmV3IEVycm9yKFwiQ2Fubm90IGZpbmQgbW9kdWxlICdcIiArIHJlcSArIFwiJ1wiKTtcblx0XHRlLmNvZGUgPSAnTU9EVUxFX05PVF9GT1VORCc7XG5cdFx0dGhyb3cgZTtcblx0fVxuXHRyZXR1cm4gbWFwW3JlcV07XG59XG53ZWJwYWNrQ29udGV4dC5rZXlzID0gZnVuY3Rpb24gd2VicGFja0NvbnRleHRLZXlzKCkge1xuXHRyZXR1cm4gT2JqZWN0LmtleXMobWFwKTtcbn07XG53ZWJwYWNrQ29udGV4dC5yZXNvbHZlID0gd2VicGFja0NvbnRleHRSZXNvbHZlO1xubW9kdWxlLmV4cG9ydHMgPSB3ZWJwYWNrQ29udGV4dDtcbndlYnBhY2tDb250ZXh0LmlkID0gXCIuL2Fzc2V0cy9jb250cm9sbGVycyBzeW5jIHJlY3Vyc2l2ZSAuL25vZGVfbW9kdWxlcy9Ac3ltZm9ueS9zdGltdWx1cy1icmlkZ2UvbGF6eS1jb250cm9sbGVyLWxvYWRlci5qcyEgXFxcXC5banRdc3g/JFwiOyIsImV4cG9ydCBkZWZhdWx0IHtcbn07IiwiaW1wb3J0IHsgQ29udHJvbGxlciB9IGZyb20gJ0Bob3R3aXJlZC9zdGltdWx1cyc7XHJcblxyXG4vKlxyXG4gKiBUaGlzIGlzIGFuIGV4YW1wbGUgU3RpbXVsdXMgY29udHJvbGxlciFcclxuICpcclxuICogQW55IGVsZW1lbnQgd2l0aCBhIGRhdGEtY29udHJvbGxlcj1cImhlbGxvXCIgYXR0cmlidXRlIHdpbGwgY2F1c2VcclxuICogdGhpcyBjb250cm9sbGVyIHRvIGJlIGV4ZWN1dGVkLiBUaGUgbmFtZSBcImhlbGxvXCIgY29tZXMgZnJvbSB0aGUgZmlsZW5hbWU6XHJcbiAqIGhlbGxvX2NvbnRyb2xsZXIuanMgLT4gXCJoZWxsb1wiXHJcbiAqXHJcbiAqIERlbGV0ZSB0aGlzIGZpbGUgb3IgYWRhcHQgaXQgZm9yIHlvdXIgdXNlIVxyXG4gKi9cclxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgZXh0ZW5kcyBDb250cm9sbGVyIHtcclxuICAgIGNvbm5lY3QoKSB7XHJcbiAgICAgICAgdGhpcy5lbGVtZW50LnRleHRDb250ZW50ID0gJ0hlbGxvIFN0aW11bHVzISBFZGl0IG1lIGluIGFzc2V0cy9jb250cm9sbGVycy9oZWxsb19jb250cm9sbGVyLmpzJztcclxuICAgIH1cclxufVxyXG4iLCJpbXBvcnQgJy4vYm9vdHN0cmFwLmpzJztcclxuLypcclxuICogV2VsY29tZSB0byB5b3VyIGFwcCdzIG1haW4gSmF2YVNjcmlwdCBmaWxlIVxyXG4gKlxyXG4gKiBXZSByZWNvbW1lbmQgaW5jbHVkaW5nIHRoZSBidWlsdCB2ZXJzaW9uIG9mIHRoaXMgSmF2YVNjcmlwdCBmaWxlXHJcbiAqIChhbmQgaXRzIENTUyBmaWxlKSBpbiB5b3VyIGJhc2UgbGF5b3V0IChiYXNlLmh0bWwudHdpZykuXHJcbiAqL1xyXG5cclxuLy8gYW55IENTUyB5b3UgaW1wb3J0IHdpbGwgb3V0cHV0IGludG8gYSBzaW5nbGUgY3NzIGZpbGUgKGFwcC5jc3MgaW4gdGhpcyBjYXNlKVxyXG5pbXBvcnQgJy4vc3R5bGVzL2FwcC5jc3MnO1xyXG5pbXBvcnQgJy4vc3R5bGVzL3N0eWxlLmNzcyc7XHJcbmltcG9ydCAnLi9qcy9jYWxlbmRhci1kdXJhdGlvbi5qcyc7XHJcbmltcG9ydCAnLi9qcy9wYXltZW50LmpzJztcclxuaW1wb3J0ICcuL2pzL21lbnUuanMnO1xyXG5pbXBvcnQgJy4vanMvY2FydGFtb3VudC5qcyc7XHJcbmltcG9ydCAnLi9qcy9zb3VzbWVudXF1YW50aXR5LmpzJztcclxuaW1wb3J0ICcuL2pzL3NsaWRlci5qcyc7XHJcblxyXG4vL3N0YXJ0IHRoZSBzdGltdWx1cyBhcHBsaWNhdGlvblxyXG5pbXBvcnQgJ2Jvb3RzdHJhcCc7XHJcblxyXG5pbXBvcnQgeyBUdXJibyB9IGZyb20gXCJAaG90d2lyZWQvdHVyYm8tcmFpbHNcIlxyXG5UdXJiby5zZXNzaW9uLmRyaXZlID0gZmFsc2UiLCJpbXBvcnQgeyBzdGFydFN0aW11bHVzQXBwIH0gZnJvbSAnQHN5bWZvbnkvc3RpbXVsdXMtYnJpZGdlJztcclxuXHJcbi8vIFJlZ2lzdGVycyBTdGltdWx1cyBjb250cm9sbGVycyBmcm9tIGNvbnRyb2xsZXJzLmpzb24gYW5kIGluIHRoZSBjb250cm9sbGVycy8gZGlyZWN0b3J5XHJcbmV4cG9ydCBjb25zdCBhcHAgPSBzdGFydFN0aW11bHVzQXBwKHJlcXVpcmUuY29udGV4dChcclxuICAgICdAc3ltZm9ueS9zdGltdWx1cy1icmlkZ2UvbGF6eS1jb250cm9sbGVyLWxvYWRlciEuL2NvbnRyb2xsZXJzJyxcclxuICAgIHRydWUsXHJcbiAgICAvXFwuW2p0XXN4PyQvXHJcbikpO1xyXG4vLyByZWdpc3RlciBhbnkgY3VzdG9tLCAzcmQgcGFydHkgY29udHJvbGxlcnMgaGVyZVxyXG4vLyBhcHAucmVnaXN0ZXIoJ3NvbWVfY29udHJvbGxlcl9uYW1lJywgU29tZUltcG9ydGVkQ29udHJvbGxlcik7XHJcbiIsImxldCBtZWRpYVF1ZXJ5ID0gd2luZG93Lm1hdGNoTWVkaWEoXCIobWF4LXdpZHRoOiAxMDAwcHgpXCIpO1xyXG5cclxuY29uc29sZS5sb2coXCJjb3Vjb3UgZHVyYXRpb25cIilcclxuXHJcbmZ1bmN0aW9uIHVwZGF0ZUNhbGVuZGFyRHVyYXRpb24oKSB7XHJcbiAgY29uc29sZS5sb2coXCJNZWRpYSBxdWVyeSBjaGFuZ2UgZXZlbnQ6XCIsIG1lZGlhUXVlcnkubWF0Y2hlcyk7XHJcbiAgaWYgKG1lZGlhUXVlcnkubWF0Y2hlcykge1xyXG4gICAgLy8gVGhlIG1lZGlhIHF1ZXJ5IGlzIGFjdGl2ZSAocGhvbmUgbW9iaWxlIHNjcmVlbilcclxuICAgIGNvbnNvbGUubG9nKFwiQ2F0ZWdvcnlDb2xvclNldHRpbmcgY2FsZW5kYXIgZHVyYXRpb24gdG8gMyBkYXlzXCIpO1xyXG4gICAgY2FsZW5kYXIuc2V0T3B0aW9uKCdkdXJhdGlvbicsIHsgZGF5czogMyB9KTtcclxuICB9IGVsc2Uge1xyXG4gICAgLy8gVGhlIG1lZGlhIHF1ZXJ5IGlzIG5vdCBhY3RpdmUgKGxhcmdlIHNjcmVlbilcclxuICAgIGNvbnNvbGUubG9nKFwiQ2F0ZWdvcnlDb2xvclNldHRpbmcgY2FsZW5kYXIgZHVyYXRpb24gdG8gNyBkYXlzXCIpO1xyXG4gICAgY2FsZW5kYXIuc2V0T3B0aW9uKCdkdXJhdGlvbicsIHsgZGF5czogNyB9KTtcclxuICB9XHJcbn1cclxuXHJcbi8vIENhbGwgdGhlIGZ1bmN0aW9uIG9uY2Ugd2hlbiB0aGUgcGFnZSBsb2Fkc1xyXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignbG9hZCcsICgpID0+IHtcclxuICBjb25zb2xlLmxvZyhcIlBhZ2UgbG9hZGVkXCIpO1xyXG4gIHVwZGF0ZUNhbGVuZGFyRHVyYXRpb24oKTtcclxufSk7XHJcblxyXG4vLyBMaXN0ZW4gZm9yIHRoZSAnY2hhbmdlJyBldmVudCBvbiB0aGUgbWVkaWEgcXVlcnlcclxubWVkaWFRdWVyeS5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCAoKSA9PiB7XHJcbiAgY29uc29sZS5sb2coXCJNZWRpYSBxdWVyeSBjaGFuZ2VkXCIpO1xyXG4gIHVwZGF0ZUNhbGVuZGFyRHVyYXRpb24oKTtcclxufSk7XHJcblxyXG4iLCIvLyBSw6ljdXDDqXJlciBsJ8OpbMOpbWVudCBkdSBsaWVuIGR1IHBhbmllclxyXG52YXIgcGFuaWVyTGluayA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwicGFuaWVyLWxpbmtcIik7XHJcblxyXG4vLyBSw6ljdXDDqXJlciBsZSBtb250YW50IGR1IHBhbmllclxyXG52YXIgbW9udGFudFBhbmllciA9IHBhcnNlRmxvYXQocGFuaWVyTGluay5pbm5lclRleHQubWF0Y2goLyhbMC05Ll0rKS8pWzBdKTtcclxuXHJcbi8vIFbDqXJpZmllciBzaSBsZSBtb250YW50IGVzdCBkaWZmw6lyZW50IGRlIDAuMDAg4oKsXHJcbmlmIChtb250YW50UGFuaWVyICE9PSAwLjApIHtcclxuICAvLyBDcsOpZXIgdW4gbm91dmVsIMOpbMOpbWVudCBkZSB0ZXh0ZVxyXG4gIHZhciB0ZXh0ZUZpbmFsaXNlckNvbW1hbmRlID0gZG9jdW1lbnQuY3JlYXRlVGV4dE5vZGUoXHJcbiAgICBcIkZpbmFsaXNleiB2b3RyZSBjb21tYW5kZVwiXHJcbiAgKTtcclxuXHJcbiAgLy8gQWpvdXRlciBsZSB0ZXh0ZSDDoCBsJ8OpbMOpbWVudCBkdSBsaWVuIGR1IHBhbmllclxyXG4gIHBhbmllckxpbmsuYXBwZW5kQ2hpbGQodGV4dGVGaW5hbGlzZXJDb21tYW5kZSk7XHJcblxyXG4gIC8vIEFwcGxpcXVlciBsZSBzdHlsZSByb3VnZSBhdSB0ZXh0ZSBham91dMOpXHJcbiAgcGFuaWVyTGluay5zdHlsZS5jb2xvciA9IFwiI2Y4NzkwMlwiO1xyXG59XHJcbiIsIi8qbGUgYm91dG9uIGljb24gdmEgcGVybXV0ZXIgbmF2IGV0IG5hdnJlc3BvbnNpdmUgYXUgY2xpY2sgKi9cclxuZnVuY3Rpb24gbXlGdW5jdGlvbigpIHtcclxuIHZhciB4ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJuYXZiYXJcIik7XHJcbiBpZiAoeC5jbGFzc05hbWUgPT09IFwibmF2XCIpIHtcclxuICAgICB4LmNsYXNzTmFtZSArPSBcIiByZXNwb25zaXZlXCI7XHJcblxyXG4gfSBlbHNlIHtcclxuICAgICB4LmNsYXNzTmFtZSA9IFwibmF2XCI7XHJcbiB9XHJcbn1cclxuIiwiXHJcbmNvbnN0IHN0cmlwZSA9IFN0cmlwZShzdHJpcGVQdWJsaWNLZXkpO1xyXG5cclxuY29uc3QgZWxlbWVudHMgPSBzdHJpcGUuZWxlbWVudHMoKTtcclxuXHJcbmNvbnN0IHN0eWxlID0ge1xyXG4gIGJhc2U6IHtcclxuICAgIGNvbG9yOiBcIiMwNTcwZGVcIixcclxuICAgIGZvbnRGYW1pbHk6ICdBcmlhbCwgc2Fucy1zZXJpZicsXHJcbiAgICBmb250U21vb3RoaW5nOiBcImFudGlhbGlhc2VkXCIsXHJcbiAgICBmb250U2l6ZTogXCIxNnB4XCIsXHJcbiAgICBcIjo6cGxhY2Vob2xkZXJcIjoge1xyXG4gICAgfVxyXG4gIH0sXHJcbiAgaW52YWxpZDoge1xyXG4gICAgIGZvbnRGYW1pbHk6J0FyaWFsLCBzYW5zLXNlcmlmJyxcclxuICAgICBjb2xvcjogXCIjZmE3NTVhXCIsXHJcbiAgfVxyXG59O1xyXG5jb25zb2xlLmxvZyhcImNvdWNvdXMgcGF5bWVudFwiKTtcclxuY29uc3QgY2FyZCA9IGVsZW1lbnRzLmNyZWF0ZShcImNhcmRcIiAsIHsgc3R5bGU6IHN0eWxlIH0pO1xyXG4vLyBzdHJpcGUgaW5qZWN0cyBhbiBpZnJhbWUgaW50byB0aGUgRG9tXHJcbmNvbnNvbGUubG9nKGNhcmQpO1xyXG5jYXJkLm1vdW50KFwiI2NhcmQtZWxlbWVudFwiKTtcclxuY29uc29sZS5sb2coY2FyZC5tb3VudCk7XHJcbmNhcmQub24oXCJjaGFuZ2VcIiwgZnVuY3Rpb24gKGV2ZW50KSB7IC8vIGRpc2FibGUgdGhlIFBheSBidXR0b24gaWYgdGhlcmUgYXJlIG5vIGNhcmQgZGV0YWlscyBpbiB0aGUgRWxlbWVudFxyXG5kb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiYnV0dG9uXCIpLmRpc2FibGVkID0gZXZlbnQuZW1wdHk7XHJcbmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIjY2FyZC1lcnJvclwiKS50ZXh0Q29udGVudCA9IGV2ZW50LmVycm9yID8gZXZlbnQuZXJyb3IubWVzc2FnZSA6IFwiXCI7XHJcbn0pO1xyXG5cclxuY29uc3QgZm9ybSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwicGF5bWVudC1mb3JtXCIpO1xyXG5cclxuZm9ybS5hZGRFdmVudExpc3RlbmVyKFwic3VibWl0XCIsIGZ1bmN0aW9uIChldmVudCkge1xyXG4gICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcclxuICAgLy8gQ29tcGxldGUgcGF5bWVudCB3aGVuIHRoZSBzdWJtaXQgYnV0dG9uIGlzIGNsaWNrZWRcclxuICAgc3RyaXBlLmNvbmZpcm1DYXJkUGF5bWVudChjbGllbnRTZWNyZXQsIHtcclxuICAgICAgcGF5bWVudF9tZXRob2Q6IHtcclxuICAgICAgY2FyZDogY2FyZFxyXG4gICAgICB9XHJcbiAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3VsdCkge1xyXG4gICAgICBpZiAocmVzdWx0LmVycm9yKSB7IC8vIHNob3cgZXJyb3IgdG8gY3VzdG9tZXJcclxuICAgICAgICAgY29uc29sZS5sb2cocmVzdWx0LmVycm9yLm1lc3NhZ2UpO1xyXG4gICAgICB9IGVsc2UgeyAvLyB0aGUgcGF5bWVudCBzdWNjZWVkZWRcclxuICAgICAgICAgLy8gb24gZmFpdCB1bmUgcmVkaXJlY3Rpb25cclxuICAgICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSByZWRpcmVjdEFmdGVyU3VjY2VzVXJsO1xyXG4gICAgICB9XHJcbiAgICB9KTtcclxuICB9KTsiLCIndXNlIHN0cmljdCc7ICAgIFxyXG4gICAgXHJcbiAgICAgICAgICAgY29uc29sZS5sb2coXCJjYyBzbGlkZXIuanNcIik7XHJcbiAgICAgICAgICAgLyogY3LDqWF0aW9uIGR1IHRhYmxlYXUgKi9cclxuICAgICAgICAgIGNvbnN0IHNsaWRlID0gW1wiY2hhci1hY2N1ZWlsdGl0cmVncm9zMTUwMC53ZWJwXCIsIFwiY2hhcmRlcGFydC0xNTAwLndlYnBcIiwgXCJjYXRhLndlYnBcIiwgXCJwYWRkbGUud2VicFwiIF07XHJcbiAgICAgICAgICBsZXQgbnVtZXJvID0gMDtcclxuIFxyXG4gICAgICAgICAgZnVuY3Rpb24gQ2hhbmdlU2xpZGUoc2Vucykge1xyXG4gICAgICAgICAgICAvKiBkb2N1bWVudCAsIHBhZ2UgZW4gY291ciAqL1xyXG4gICAgICAgICAgICAvKiBzZW5zIGVzdCB1biBwYXJhbWV0cmUgKi9cclxuICAgICAgICAgICAgbnVtZXJvID0gbnVtZXJvICsgc2VucztcclxuICAgICAgICAgICAgLypsZXMgY29uZGl0aW9ucyBwZXJtZXR0ZW50IGRlIGJvdWNsZXIgKi9cclxuICAgICAgICAgICAgaWYgKG51bWVybyA+IHNsaWRlLmxlbmd0aCAtIDEpXHJcbiAgICAgICAgICAgICAgICBudW1lcm8gPSAwO1xyXG4gICAgICAgICAgICBpZiAobnVtZXJvIDwgMClcclxuICAgICAgICAgICAgICAgIG51bWVybyA9IHNsaWRlLmxlbmd0aCAtIDE7XHJcbiAgICAgICAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwic2xpZGVcIikuc3JjID0gXCJhc3NldHMvdXBsb2Fkcy9zbGlkZS9cIiArIHNsaWRlW251bWVyb107XHJcbiAgICAgICAgICB9XHJcblxyXG4gICAgICAgICAgc2V0SW50ZXJ2YWwoXCJDaGFuZ2VTbGlkZSgxKVwiLCA0MDAwKTtcclxuXHJcbiAgICAvKiBjcsOpYXRpb24gZHUgdGFibGVhdSAqL1xyXG4gICAgY29uc3Qgc2xpZGVtb2JpbCA9IFtcImFjY3VlaWwtbW9iaWwtY2hhci53ZWJwXCIsXCJhY2N1ZWlsLWNhdGEyLW1vYmlsLndlYnBcIiwgXCJhY2N1ZWlsLWtheWFrLW1vYmlsLndlYnBcIiwgXCJhY2N1ZWlsLW1vYmlsLXBhZGRsZS53ZWJwXCIgXTtcclxuICAgIGxldCBudW1lcm9tb2IgPSAwO1xyXG5cclxuICAgIGZ1bmN0aW9uIENoYW5nZVNsaWRlTW9iKHNlbnMpIHtcclxuICAgICAgLyogZG9jdW1lbnQgLCBwYWdlIGVuIGNvdXIgKi9cclxuICAgICAgLyogc2VucyBlc3QgdW4gcGFyYW1ldHJlICovXHJcbiAgICAgIG51bWVyb21vYiA9IG51bWVyb21vYiArIHNlbnM7XHJcbiAgICAgIC8qbGVzIGNvbmRpdGlvbnMgcGVybWV0dGVudCBkZSBib3VjbGVyICovXHJcbiAgICAgIGlmIChudW1lcm9tb2IgPiBzbGlkZW1vYmlsLmxlbmd0aCAtIDEpXHJcbiAgICAgICAgICBudW1lcm9tb2IgPSAwO1xyXG4gICAgICBpZiAobnVtZXJvbW9iIDwgMClcclxuICAgICAgICAgIG51bWVyb21vYiA9IHNsaWRlbW9iaWwubGVuZ3RoIC0gMTtcclxuICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJzbGlkZW1vYmlsXCIpLnNyYyA9IFwiYXNzZXRzL3VwbG9hZHMvc2xpZGUvXCIgKyBzbGlkZW1vYmlsW251bWVyb21vYl07XHJcbiAgICB9XHJcblxyXG4gICAgc2V0SW50ZXJ2YWwoXCJDaGFuZ2VTbGlkZU1vYigxKVwiLCA0MDAwKTtcclxuXHJcbiIsIi8qY29uc29sZS5sb2coXCJjYyBzb3VzbWVudXF1YW50aXR5IVwiKTtcclxuLy9pbCBzJ2FnaXQgZCdpbnRlZ3JlciB1bmUgY29sbGVjdGlvbiBkZSBmb3JtdWxhaXJlXHJcbmNvbnN0IGNvbnRhaW5lciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd1c2VyRm9ybScpOyovIiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307IiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbIkNvbnRyb2xsZXIiLCJfZGVmYXVsdCIsIl9Db250cm9sbGVyIiwiX2luaGVyaXRzIiwiX3N1cGVyIiwiX2NyZWF0ZVN1cGVyIiwiX2NsYXNzQ2FsbENoZWNrIiwiYXBwbHkiLCJhcmd1bWVudHMiLCJfY3JlYXRlQ2xhc3MiLCJrZXkiLCJ2YWx1ZSIsImNvbm5lY3QiLCJlbGVtZW50IiwidGV4dENvbnRlbnQiLCJkZWZhdWx0IiwiVHVyYm8iLCJzZXNzaW9uIiwiZHJpdmUiLCJzdGFydFN0aW11bHVzQXBwIiwiYXBwIiwicmVxdWlyZSIsImNvbnRleHQiLCJtZWRpYVF1ZXJ5Iiwid2luZG93IiwibWF0Y2hNZWRpYSIsImNvbnNvbGUiLCJsb2ciLCJ1cGRhdGVDYWxlbmRhckR1cmF0aW9uIiwibWF0Y2hlcyIsImNhbGVuZGFyIiwic2V0T3B0aW9uIiwiZGF5cyIsImFkZEV2ZW50TGlzdGVuZXIiLCJwYW5pZXJMaW5rIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsIm1vbnRhbnRQYW5pZXIiLCJwYXJzZUZsb2F0IiwiaW5uZXJUZXh0IiwibWF0Y2giLCJ0ZXh0ZUZpbmFsaXNlckNvbW1hbmRlIiwiY3JlYXRlVGV4dE5vZGUiLCJhcHBlbmRDaGlsZCIsInN0eWxlIiwiY29sb3IiLCJteUZ1bmN0aW9uIiwieCIsImNsYXNzTmFtZSIsInN0cmlwZSIsIlN0cmlwZSIsInN0cmlwZVB1YmxpY0tleSIsImVsZW1lbnRzIiwiYmFzZSIsImZvbnRGYW1pbHkiLCJmb250U21vb3RoaW5nIiwiZm9udFNpemUiLCJpbnZhbGlkIiwiY2FyZCIsImNyZWF0ZSIsIm1vdW50Iiwib24iLCJldmVudCIsInF1ZXJ5U2VsZWN0b3IiLCJkaXNhYmxlZCIsImVtcHR5IiwiZXJyb3IiLCJtZXNzYWdlIiwiZm9ybSIsInByZXZlbnREZWZhdWx0IiwiY29uZmlybUNhcmRQYXltZW50IiwiY2xpZW50U2VjcmV0IiwicGF5bWVudF9tZXRob2QiLCJ0aGVuIiwicmVzdWx0IiwibG9jYXRpb24iLCJocmVmIiwicmVkaXJlY3RBZnRlclN1Y2Nlc1VybCIsInNsaWRlIiwibnVtZXJvIiwiQ2hhbmdlU2xpZGUiLCJzZW5zIiwibGVuZ3RoIiwic3JjIiwic2V0SW50ZXJ2YWwiLCJzbGlkZW1vYmlsIiwibnVtZXJvbW9iIiwiQ2hhbmdlU2xpZGVNb2IiXSwic291cmNlUm9vdCI6IiJ9