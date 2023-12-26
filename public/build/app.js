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
    console.log("Setting calendar duration to 3 days");
    calendar.setOption('duration', {
      days: 3
    });
  } else {
    // The media query is not active (large screen)
    console.log("Setting calendar duration to 7 days");
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
  panierLink.style.color = "red";
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


/* création du tableau */
__webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");
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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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R0FBR0UsVUFBVSxDQUFDQyxTQUFTLENBQUM7QUFDN0Y7QUFFQUYsV0FBVyxDQUFDLG1CQUFtQixFQUFFLElBQUksQ0FBQzs7Ozs7Ozs7OztBQ3JDMUM7QUFDQTtBQUNBOzs7Ozs7Ozs7Ozs7QUNGQTs7Ozs7Ozs7Ozs7OztBQ0FBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLyBcXC5banRdc3giLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2NvbnRyb2xsZXJzLmpzb24iLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2NvbnRyb2xsZXJzL2hlbGxvX2NvbnRyb2xsZXIuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2FwcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvYm9vdHN0cmFwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9jYWxlbmRhci1kdXJhdGlvbi5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvY2FydGFtb3VudC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvbWVudS5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvcGF5bWVudC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvc2xpZGVyLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9zb3VzbWVudXF1YW50aXR5LmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvYXBwLmNzcz8zZmJhIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvc3R5bGUuY3NzPzI1MzgiXSwic291cmNlc0NvbnRlbnQiOlsidmFyIG1hcCA9IHtcblx0XCIuL2hlbGxvX2NvbnRyb2xsZXIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9Ac3ltZm9ueS9zdGltdWx1cy1icmlkZ2UvbGF6eS1jb250cm9sbGVyLWxvYWRlci5qcyEuL2Fzc2V0cy9jb250cm9sbGVycy9oZWxsb19jb250cm9sbGVyLmpzXCJcbn07XG5cblxuZnVuY3Rpb24gd2VicGFja0NvbnRleHQocmVxKSB7XG5cdHZhciBpZCA9IHdlYnBhY2tDb250ZXh0UmVzb2x2ZShyZXEpO1xuXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXyhpZCk7XG59XG5mdW5jdGlvbiB3ZWJwYWNrQ29udGV4dFJlc29sdmUocmVxKSB7XG5cdGlmKCFfX3dlYnBhY2tfcmVxdWlyZV9fLm8obWFwLCByZXEpKSB7XG5cdFx0dmFyIGUgPSBuZXcgRXJyb3IoXCJDYW5ub3QgZmluZCBtb2R1bGUgJ1wiICsgcmVxICsgXCInXCIpO1xuXHRcdGUuY29kZSA9ICdNT0RVTEVfTk9UX0ZPVU5EJztcblx0XHR0aHJvdyBlO1xuXHR9XG5cdHJldHVybiBtYXBbcmVxXTtcbn1cbndlYnBhY2tDb250ZXh0LmtleXMgPSBmdW5jdGlvbiB3ZWJwYWNrQ29udGV4dEtleXMoKSB7XG5cdHJldHVybiBPYmplY3Qua2V5cyhtYXApO1xufTtcbndlYnBhY2tDb250ZXh0LnJlc29sdmUgPSB3ZWJwYWNrQ29udGV4dFJlc29sdmU7XG5tb2R1bGUuZXhwb3J0cyA9IHdlYnBhY2tDb250ZXh0O1xud2VicGFja0NvbnRleHQuaWQgPSBcIi4vYXNzZXRzL2NvbnRyb2xsZXJzIHN5bmMgcmVjdXJzaXZlIC4vbm9kZV9tb2R1bGVzL0BzeW1mb255L3N0aW11bHVzLWJyaWRnZS9sYXp5LWNvbnRyb2xsZXItbG9hZGVyLmpzISBcXFxcLltqdF1zeD8kXCI7IiwiZXhwb3J0IGRlZmF1bHQge1xufTsiLCJpbXBvcnQgeyBDb250cm9sbGVyIH0gZnJvbSAnQGhvdHdpcmVkL3N0aW11bHVzJztcclxuXHJcbi8qXHJcbiAqIFRoaXMgaXMgYW4gZXhhbXBsZSBTdGltdWx1cyBjb250cm9sbGVyIVxyXG4gKlxyXG4gKiBBbnkgZWxlbWVudCB3aXRoIGEgZGF0YS1jb250cm9sbGVyPVwiaGVsbG9cIiBhdHRyaWJ1dGUgd2lsbCBjYXVzZVxyXG4gKiB0aGlzIGNvbnRyb2xsZXIgdG8gYmUgZXhlY3V0ZWQuIFRoZSBuYW1lIFwiaGVsbG9cIiBjb21lcyBmcm9tIHRoZSBmaWxlbmFtZTpcclxuICogaGVsbG9fY29udHJvbGxlci5qcyAtPiBcImhlbGxvXCJcclxuICpcclxuICogRGVsZXRlIHRoaXMgZmlsZSBvciBhZGFwdCBpdCBmb3IgeW91ciB1c2UhXHJcbiAqL1xyXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBleHRlbmRzIENvbnRyb2xsZXIge1xyXG4gICAgY29ubmVjdCgpIHtcclxuICAgICAgICB0aGlzLmVsZW1lbnQudGV4dENvbnRlbnQgPSAnSGVsbG8gU3RpbXVsdXMhIEVkaXQgbWUgaW4gYXNzZXRzL2NvbnRyb2xsZXJzL2hlbGxvX2NvbnRyb2xsZXIuanMnO1xyXG4gICAgfVxyXG59XHJcbiIsImltcG9ydCAnLi9ib290c3RyYXAuanMnO1xyXG4vKlxyXG4gKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXHJcbiAqXHJcbiAqIFdlIHJlY29tbWVuZCBpbmNsdWRpbmcgdGhlIGJ1aWx0IHZlcnNpb24gb2YgdGhpcyBKYXZhU2NyaXB0IGZpbGVcclxuICogKGFuZCBpdHMgQ1NTIGZpbGUpIGluIHlvdXIgYmFzZSBsYXlvdXQgKGJhc2UuaHRtbC50d2lnKS5cclxuICovXHJcblxyXG4vLyBhbnkgQ1NTIHlvdSBpbXBvcnQgd2lsbCBvdXRwdXQgaW50byBhIHNpbmdsZSBjc3MgZmlsZSAoYXBwLmNzcyBpbiB0aGlzIGNhc2UpXHJcbmltcG9ydCAnLi9zdHlsZXMvYXBwLmNzcyc7XHJcbmltcG9ydCAnLi9zdHlsZXMvc3R5bGUuY3NzJztcclxuaW1wb3J0ICcuL2pzL2NhbGVuZGFyLWR1cmF0aW9uLmpzJztcclxuaW1wb3J0ICcuL2pzL3BheW1lbnQuanMnO1xyXG5pbXBvcnQgJy4vanMvbWVudS5qcyc7XHJcbmltcG9ydCAnLi9qcy9jYXJ0YW1vdW50LmpzJztcclxuaW1wb3J0ICcuL2pzL3NvdXNtZW51cXVhbnRpdHkuanMnO1xyXG5pbXBvcnQgJy4vanMvc2xpZGVyLmpzJztcclxuXHJcbi8vc3RhcnQgdGhlIHN0aW11bHVzIGFwcGxpY2F0aW9uXHJcbmltcG9ydCAnYm9vdHN0cmFwJztcclxuXHJcbmltcG9ydCB7IFR1cmJvIH0gZnJvbSBcIkBob3R3aXJlZC90dXJiby1yYWlsc1wiXHJcblR1cmJvLnNlc3Npb24uZHJpdmUgPSBmYWxzZSIsImltcG9ydCB7IHN0YXJ0U3RpbXVsdXNBcHAgfSBmcm9tICdAc3ltZm9ueS9zdGltdWx1cy1icmlkZ2UnO1xyXG5cclxuLy8gUmVnaXN0ZXJzIFN0aW11bHVzIGNvbnRyb2xsZXJzIGZyb20gY29udHJvbGxlcnMuanNvbiBhbmQgaW4gdGhlIGNvbnRyb2xsZXJzLyBkaXJlY3RvcnlcclxuZXhwb3J0IGNvbnN0IGFwcCA9IHN0YXJ0U3RpbXVsdXNBcHAocmVxdWlyZS5jb250ZXh0KFxyXG4gICAgJ0BzeW1mb255L3N0aW11bHVzLWJyaWRnZS9sYXp5LWNvbnRyb2xsZXItbG9hZGVyIS4vY29udHJvbGxlcnMnLFxyXG4gICAgdHJ1ZSxcclxuICAgIC9cXC5banRdc3g/JC9cclxuKSk7XHJcbi8vIHJlZ2lzdGVyIGFueSBjdXN0b20sIDNyZCBwYXJ0eSBjb250cm9sbGVycyBoZXJlXHJcbi8vIGFwcC5yZWdpc3Rlcignc29tZV9jb250cm9sbGVyX25hbWUnLCBTb21lSW1wb3J0ZWRDb250cm9sbGVyKTtcclxuIiwibGV0IG1lZGlhUXVlcnkgPSB3aW5kb3cubWF0Y2hNZWRpYShcIihtYXgtd2lkdGg6IDEwMDBweClcIik7XHJcblxyXG5jb25zb2xlLmxvZyhcImNvdWNvdSBkdXJhdGlvblwiKVxyXG5cclxuZnVuY3Rpb24gdXBkYXRlQ2FsZW5kYXJEdXJhdGlvbigpIHtcclxuICBjb25zb2xlLmxvZyhcIk1lZGlhIHF1ZXJ5IGNoYW5nZSBldmVudDpcIiwgbWVkaWFRdWVyeS5tYXRjaGVzKTtcclxuICBpZiAobWVkaWFRdWVyeS5tYXRjaGVzKSB7XHJcbiAgICAvLyBUaGUgbWVkaWEgcXVlcnkgaXMgYWN0aXZlIChwaG9uZSBtb2JpbGUgc2NyZWVuKVxyXG4gICAgY29uc29sZS5sb2coXCJTZXR0aW5nIGNhbGVuZGFyIGR1cmF0aW9uIHRvIDMgZGF5c1wiKTtcclxuICAgIGNhbGVuZGFyLnNldE9wdGlvbignZHVyYXRpb24nLCB7IGRheXM6IDMgfSk7XHJcbiAgfSBlbHNlIHtcclxuICAgIC8vIFRoZSBtZWRpYSBxdWVyeSBpcyBub3QgYWN0aXZlIChsYXJnZSBzY3JlZW4pXHJcbiAgICBjb25zb2xlLmxvZyhcIlNldHRpbmcgY2FsZW5kYXIgZHVyYXRpb24gdG8gNyBkYXlzXCIpO1xyXG4gICAgY2FsZW5kYXIuc2V0T3B0aW9uKCdkdXJhdGlvbicsIHsgZGF5czogNyB9KTtcclxuICB9XHJcbn1cclxuXHJcbi8vIENhbGwgdGhlIGZ1bmN0aW9uIG9uY2Ugd2hlbiB0aGUgcGFnZSBsb2Fkc1xyXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignbG9hZCcsICgpID0+IHtcclxuICBjb25zb2xlLmxvZyhcIlBhZ2UgbG9hZGVkXCIpO1xyXG4gIHVwZGF0ZUNhbGVuZGFyRHVyYXRpb24oKTtcclxufSk7XHJcblxyXG4vLyBMaXN0ZW4gZm9yIHRoZSAnY2hhbmdlJyBldmVudCBvbiB0aGUgbWVkaWEgcXVlcnlcclxubWVkaWFRdWVyeS5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCAoKSA9PiB7XHJcbiAgY29uc29sZS5sb2coXCJNZWRpYSBxdWVyeSBjaGFuZ2VkXCIpO1xyXG4gIHVwZGF0ZUNhbGVuZGFyRHVyYXRpb24oKTtcclxufSk7XHJcblxyXG4iLCIvLyBSw6ljdXDDqXJlciBsJ8OpbMOpbWVudCBkdSBsaWVuIGR1IHBhbmllclxyXG52YXIgcGFuaWVyTGluayA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwicGFuaWVyLWxpbmtcIik7XHJcblxyXG4vLyBSw6ljdXDDqXJlciBsZSBtb250YW50IGR1IHBhbmllclxyXG52YXIgbW9udGFudFBhbmllciA9IHBhcnNlRmxvYXQocGFuaWVyTGluay5pbm5lclRleHQubWF0Y2goLyhbMC05Ll0rKS8pWzBdKTtcclxuXHJcbi8vIFbDqXJpZmllciBzaSBsZSBtb250YW50IGVzdCBkaWZmw6lyZW50IGRlIDAuMDAg4oKsXHJcbmlmIChtb250YW50UGFuaWVyICE9PSAwLjApIHtcclxuICAvLyBDcsOpZXIgdW4gbm91dmVsIMOpbMOpbWVudCBkZSB0ZXh0ZVxyXG4gIHZhciB0ZXh0ZUZpbmFsaXNlckNvbW1hbmRlID0gZG9jdW1lbnQuY3JlYXRlVGV4dE5vZGUoXHJcbiAgICBcIkZpbmFsaXNleiB2b3RyZSBjb21tYW5kZVwiXHJcbiAgKTtcclxuXHJcbiAgLy8gQWpvdXRlciBsZSB0ZXh0ZSDDoCBsJ8OpbMOpbWVudCBkdSBsaWVuIGR1IHBhbmllclxyXG4gIHBhbmllckxpbmsuYXBwZW5kQ2hpbGQodGV4dGVGaW5hbGlzZXJDb21tYW5kZSk7XHJcblxyXG4gIC8vIEFwcGxpcXVlciBsZSBzdHlsZSByb3VnZSBhdSB0ZXh0ZSBham91dMOpXHJcbiAgcGFuaWVyTGluay5zdHlsZS5jb2xvciA9IFwicmVkXCI7XHJcbn1cclxuIiwiLypsZSBib3V0b24gaWNvbiB2YSBwZXJtdXRlciBuYXYgZXQgbmF2cmVzcG9uc2l2ZSBhdSBjbGljayAqL1xyXG5mdW5jdGlvbiBteUZ1bmN0aW9uKCkge1xyXG4gdmFyIHggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIm5hdmJhclwiKTtcclxuIGlmICh4LmNsYXNzTmFtZSA9PT0gXCJuYXZcIikge1xyXG4gICAgIHguY2xhc3NOYW1lICs9IFwiIHJlc3BvbnNpdmVcIjtcclxuXHJcbiB9IGVsc2Uge1xyXG4gICAgIHguY2xhc3NOYW1lID0gXCJuYXZcIjtcclxuIH1cclxufVxyXG4iLCJcclxuY29uc3Qgc3RyaXBlID0gU3RyaXBlKHN0cmlwZVB1YmxpY0tleSk7XHJcblxyXG5jb25zdCBlbGVtZW50cyA9IHN0cmlwZS5lbGVtZW50cygpO1xyXG5cclxuY29uc3Qgc3R5bGUgPSB7XHJcbiAgYmFzZToge1xyXG4gICAgY29sb3I6IFwiIzA1NzBkZVwiLFxyXG4gICAgZm9udEZhbWlseTogJ0FyaWFsLCBzYW5zLXNlcmlmJyxcclxuICAgIGZvbnRTbW9vdGhpbmc6IFwiYW50aWFsaWFzZWRcIixcclxuICAgIGZvbnRTaXplOiBcIjE2cHhcIixcclxuICAgIFwiOjpwbGFjZWhvbGRlclwiOiB7XHJcbiAgICB9XHJcbiAgfSxcclxuICBpbnZhbGlkOiB7XHJcbiAgICAgZm9udEZhbWlseTonQXJpYWwsIHNhbnMtc2VyaWYnLFxyXG4gICAgIGNvbG9yOiBcIiNmYTc1NWFcIixcclxuICB9XHJcbn07XHJcbmNvbnNvbGUubG9nKFwiY291Y291cyBwYXltZW50XCIpO1xyXG5jb25zdCBjYXJkID0gZWxlbWVudHMuY3JlYXRlKFwiY2FyZFwiICwgeyBzdHlsZTogc3R5bGUgfSk7XHJcbi8vIHN0cmlwZSBpbmplY3RzIGFuIGlmcmFtZSBpbnRvIHRoZSBEb21cclxuY29uc29sZS5sb2coY2FyZCk7XHJcbmNhcmQubW91bnQoXCIjY2FyZC1lbGVtZW50XCIpO1xyXG5jb25zb2xlLmxvZyhjYXJkLm1vdW50KTtcclxuY2FyZC5vbihcImNoYW5nZVwiLCBmdW5jdGlvbiAoZXZlbnQpIHsgLy8gZGlzYWJsZSB0aGUgUGF5IGJ1dHRvbiBpZiB0aGVyZSBhcmUgbm8gY2FyZCBkZXRhaWxzIGluIHRoZSBFbGVtZW50XHJcbmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCJidXR0b25cIikuZGlzYWJsZWQgPSBldmVudC5lbXB0eTtcclxuZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIiNjYXJkLWVycm9yXCIpLnRleHRDb250ZW50ID0gZXZlbnQuZXJyb3IgPyBldmVudC5lcnJvci5tZXNzYWdlIDogXCJcIjtcclxufSk7XHJcblxyXG5jb25zdCBmb3JtID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJwYXltZW50LWZvcm1cIik7XHJcblxyXG5mb3JtLmFkZEV2ZW50TGlzdGVuZXIoXCJzdWJtaXRcIiwgZnVuY3Rpb24gKGV2ZW50KSB7XHJcbiAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xyXG4gICAvLyBDb21wbGV0ZSBwYXltZW50IHdoZW4gdGhlIHN1Ym1pdCBidXR0b24gaXMgY2xpY2tlZFxyXG4gICBzdHJpcGUuY29uZmlybUNhcmRQYXltZW50KGNsaWVudFNlY3JldCwge1xyXG4gICAgICBwYXltZW50X21ldGhvZDoge1xyXG4gICAgICBjYXJkOiBjYXJkXHJcbiAgICAgIH1cclxuICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzdWx0KSB7XHJcbiAgICAgIGlmIChyZXN1bHQuZXJyb3IpIHsgLy8gc2hvdyBlcnJvciB0byBjdXN0b21lclxyXG4gICAgICAgICBjb25zb2xlLmxvZyhyZXN1bHQuZXJyb3IubWVzc2FnZSk7XHJcbiAgICAgIH0gZWxzZSB7IC8vIHRoZSBwYXltZW50IHN1Y2NlZWRlZFxyXG4gICAgICAgICAvLyBvbiBmYWl0IHVuZSByZWRpcmVjdGlvblxyXG4gICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9IHJlZGlyZWN0QWZ0ZXJTdWNjZXNVcmw7XHJcbiAgICAgIH1cclxuICAgIH0pO1xyXG4gIH0pOyIsIid1c2Ugc3RyaWN0JzsgICAgXHJcbiAgICBcclxuICAgICAgIFxyXG4gICAgICAgICAgIC8qIGNyw6lhdGlvbiBkdSB0YWJsZWF1ICovXHJcbiAgICAgICAgICBjb25zdCBzbGlkZSA9IFtcImNoYXItYWNjdWVpbHRpdHJlZ3JvczE1MDAud2VicFwiLCBcImNoYXJkZXBhcnQtMTUwMC53ZWJwXCIsIFwiY2F0YS53ZWJwXCIsIFwicGFkZGxlLndlYnBcIiBdO1xyXG4gICAgICAgICAgbGV0IG51bWVybyA9IDA7XHJcbiBcclxuICAgICAgICAgIGZ1bmN0aW9uIENoYW5nZVNsaWRlKHNlbnMpIHtcclxuICAgICAgICAgICAgLyogZG9jdW1lbnQgLCBwYWdlIGVuIGNvdXIgKi9cclxuICAgICAgICAgICAgLyogc2VucyBlc3QgdW4gcGFyYW1ldHJlICovXHJcbiAgICAgICAgICAgIG51bWVybyA9IG51bWVybyArIHNlbnM7XHJcbiAgICAgICAgICAgIC8qbGVzIGNvbmRpdGlvbnMgcGVybWV0dGVudCBkZSBib3VjbGVyICovXHJcbiAgICAgICAgICAgIGlmIChudW1lcm8gPiBzbGlkZS5sZW5ndGggLSAxKVxyXG4gICAgICAgICAgICAgICAgbnVtZXJvID0gMDtcclxuICAgICAgICAgICAgaWYgKG51bWVybyA8IDApXHJcbiAgICAgICAgICAgICAgICBudW1lcm8gPSBzbGlkZS5sZW5ndGggLSAxO1xyXG4gICAgICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInNsaWRlXCIpLnNyYyA9IFwiYXNzZXRzL3VwbG9hZHMvc2xpZGUvXCIgKyBzbGlkZVtudW1lcm9dO1xyXG4gICAgICAgICAgfVxyXG5cclxuICAgICAgICAgIHNldEludGVydmFsKFwiQ2hhbmdlU2xpZGUoMSlcIiwgNDAwMCk7XHJcblxyXG4gICAgLyogY3LDqWF0aW9uIGR1IHRhYmxlYXUgKi9cclxuICAgIGNvbnN0IHNsaWRlbW9iaWwgPSBbXCJhY2N1ZWlsLW1vYmlsLWNoYXIud2VicFwiLFwiYWNjdWVpbC1jYXRhMi1tb2JpbC53ZWJwXCIsIFwiYWNjdWVpbC1rYXlhay1tb2JpbC53ZWJwXCIsIFwiYWNjdWVpbC1tb2JpbC1wYWRkbGUud2VicFwiIF07XHJcbiAgICBsZXQgbnVtZXJvbW9iID0gMDtcclxuXHJcbiAgICBmdW5jdGlvbiBDaGFuZ2VTbGlkZU1vYihzZW5zKSB7XHJcbiAgICAgIC8qIGRvY3VtZW50ICwgcGFnZSBlbiBjb3VyICovXHJcbiAgICAgIC8qIHNlbnMgZXN0IHVuIHBhcmFtZXRyZSAqL1xyXG4gICAgICBudW1lcm9tb2IgPSBudW1lcm9tb2IgKyBzZW5zO1xyXG4gICAgICAvKmxlcyBjb25kaXRpb25zIHBlcm1ldHRlbnQgZGUgYm91Y2xlciAqL1xyXG4gICAgICBpZiAobnVtZXJvbW9iID4gc2xpZGVtb2JpbC5sZW5ndGggLSAxKVxyXG4gICAgICAgICAgbnVtZXJvbW9iID0gMDtcclxuICAgICAgaWYgKG51bWVyb21vYiA8IDApXHJcbiAgICAgICAgICBudW1lcm9tb2IgPSBzbGlkZW1vYmlsLmxlbmd0aCAtIDE7XHJcbiAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwic2xpZGVtb2JpbFwiKS5zcmMgPSBcImFzc2V0cy91cGxvYWRzL3NsaWRlL1wiICsgc2xpZGVtb2JpbFtudW1lcm9tb2JdO1xyXG4gICAgfVxyXG5cclxuICAgIHNldEludGVydmFsKFwiQ2hhbmdlU2xpZGVNb2IoMSlcIiwgNDAwMCk7XHJcblxyXG4iLCIvKmNvbnNvbGUubG9nKFwiY2Mgc291c21lbnVxdWFudGl0eSFcIik7XHJcbi8vaWwgcydhZ2l0IGQnaW50ZWdyZXIgdW5lIGNvbGxlY3Rpb24gZGUgZm9ybXVsYWlyZVxyXG5jb25zdCBjb250YWluZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndXNlckZvcm0nKTsqLyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyJDb250cm9sbGVyIiwiX2RlZmF1bHQiLCJfQ29udHJvbGxlciIsIl9pbmhlcml0cyIsIl9zdXBlciIsIl9jcmVhdGVTdXBlciIsIl9jbGFzc0NhbGxDaGVjayIsImFwcGx5IiwiYXJndW1lbnRzIiwiX2NyZWF0ZUNsYXNzIiwia2V5IiwidmFsdWUiLCJjb25uZWN0IiwiZWxlbWVudCIsInRleHRDb250ZW50IiwiZGVmYXVsdCIsIlR1cmJvIiwic2Vzc2lvbiIsImRyaXZlIiwic3RhcnRTdGltdWx1c0FwcCIsImFwcCIsInJlcXVpcmUiLCJjb250ZXh0IiwibWVkaWFRdWVyeSIsIndpbmRvdyIsIm1hdGNoTWVkaWEiLCJjb25zb2xlIiwibG9nIiwidXBkYXRlQ2FsZW5kYXJEdXJhdGlvbiIsIm1hdGNoZXMiLCJjYWxlbmRhciIsInNldE9wdGlvbiIsImRheXMiLCJhZGRFdmVudExpc3RlbmVyIiwicGFuaWVyTGluayIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJtb250YW50UGFuaWVyIiwicGFyc2VGbG9hdCIsImlubmVyVGV4dCIsIm1hdGNoIiwidGV4dGVGaW5hbGlzZXJDb21tYW5kZSIsImNyZWF0ZVRleHROb2RlIiwiYXBwZW5kQ2hpbGQiLCJzdHlsZSIsImNvbG9yIiwibXlGdW5jdGlvbiIsIngiLCJjbGFzc05hbWUiLCJzdHJpcGUiLCJTdHJpcGUiLCJzdHJpcGVQdWJsaWNLZXkiLCJlbGVtZW50cyIsImJhc2UiLCJmb250RmFtaWx5IiwiZm9udFNtb290aGluZyIsImZvbnRTaXplIiwiaW52YWxpZCIsImNhcmQiLCJjcmVhdGUiLCJtb3VudCIsIm9uIiwiZXZlbnQiLCJxdWVyeVNlbGVjdG9yIiwiZGlzYWJsZWQiLCJlbXB0eSIsImVycm9yIiwibWVzc2FnZSIsImZvcm0iLCJwcmV2ZW50RGVmYXVsdCIsImNvbmZpcm1DYXJkUGF5bWVudCIsImNsaWVudFNlY3JldCIsInBheW1lbnRfbWV0aG9kIiwidGhlbiIsInJlc3VsdCIsImxvY2F0aW9uIiwiaHJlZiIsInJlZGlyZWN0QWZ0ZXJTdWNjZXNVcmwiLCJzbGlkZSIsIm51bWVybyIsIkNoYW5nZVNsaWRlIiwic2VucyIsImxlbmd0aCIsInNyYyIsInNldEludGVydmFsIiwic2xpZGVtb2JpbCIsIm51bWVyb21vYiIsIkNoYW5nZVNsaWRlTW9iIl0sInNvdXJjZVJvb3QiOiIifQ==