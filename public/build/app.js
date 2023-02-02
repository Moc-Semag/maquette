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
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var _hotwired_stimulus__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! @hotwired/stimulus */ "./node_modules/@hotwired/stimulus/dist/stimulus.js");
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
















function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
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
}(_hotwired_stimulus__WEBPACK_IMPORTED_MODULE_16__.Controller);


/***/ }),

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_scss_app_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/scss/app.scss */ "./assets/styles/scss/app.scss");
/* harmony import */ var _styles_scss_app_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_styles_scss_app_scss__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _bootstrap__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./bootstrap */ "./assets/bootstrap.js");
/* harmony import */ var bootstrap_dist_js_bootstrap_bundle__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! bootstrap/dist/js/bootstrap.bundle */ "./node_modules/bootstrap/dist/js/bootstrap.bundle.js");
/* harmony import */ var bootstrap_dist_js_bootstrap_bundle__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(bootstrap_dist_js_bootstrap_bundle__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _js_scripts__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./js/scripts */ "./assets/js/scripts.js");
/* harmony import */ var _js_scripts__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_js_scripts__WEBPACK_IMPORTED_MODULE_3__);
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)


// start the Stimulus application



// JavaScript perso


// PHP file for the user's answers
//import './user_answers.php';

/***/ }),

/***/ "./assets/bootstrap.js":
/*!*****************************!*\
  !*** ./assets/bootstrap.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "app": () => (/* binding */ app)
/* harmony export */ });
/* harmony import */ var _symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @symfony/stimulus-bridge */ "./node_modules/@symfony/stimulus-bridge/dist/index.js");


// Registers Stimulus controllers from controllers.json and in the controllers/ directory
var app = (0,_symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__.startStimulusApp)(__webpack_require__("./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.[jt]sx?$"));

// register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);

/***/ }),

/***/ "./assets/js/scripts.js":
/*!******************************!*\
  !*** ./assets/js/scripts.js ***!
  \******************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
function _regeneratorRuntime() { "use strict"; /*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/facebook/regenerator/blob/main/LICENSE */ _regeneratorRuntime = function _regeneratorRuntime() { return exports; }; var exports = {}, Op = Object.prototype, hasOwn = Op.hasOwnProperty, defineProperty = Object.defineProperty || function (obj, key, desc) { obj[key] = desc.value; }, $Symbol = "function" == typeof Symbol ? Symbol : {}, iteratorSymbol = $Symbol.iterator || "@@iterator", asyncIteratorSymbol = $Symbol.asyncIterator || "@@asyncIterator", toStringTagSymbol = $Symbol.toStringTag || "@@toStringTag"; function define(obj, key, value) { return Object.defineProperty(obj, key, { value: value, enumerable: !0, configurable: !0, writable: !0 }), obj[key]; } try { define({}, ""); } catch (err) { define = function define(obj, key, value) { return obj[key] = value; }; } function wrap(innerFn, outerFn, self, tryLocsList) { var protoGenerator = outerFn && outerFn.prototype instanceof Generator ? outerFn : Generator, generator = Object.create(protoGenerator.prototype), context = new Context(tryLocsList || []); return defineProperty(generator, "_invoke", { value: makeInvokeMethod(innerFn, self, context) }), generator; } function tryCatch(fn, obj, arg) { try { return { type: "normal", arg: fn.call(obj, arg) }; } catch (err) { return { type: "throw", arg: err }; } } exports.wrap = wrap; var ContinueSentinel = {}; function Generator() {} function GeneratorFunction() {} function GeneratorFunctionPrototype() {} var IteratorPrototype = {}; define(IteratorPrototype, iteratorSymbol, function () { return this; }); var getProto = Object.getPrototypeOf, NativeIteratorPrototype = getProto && getProto(getProto(values([]))); NativeIteratorPrototype && NativeIteratorPrototype !== Op && hasOwn.call(NativeIteratorPrototype, iteratorSymbol) && (IteratorPrototype = NativeIteratorPrototype); var Gp = GeneratorFunctionPrototype.prototype = Generator.prototype = Object.create(IteratorPrototype); function defineIteratorMethods(prototype) { ["next", "throw", "return"].forEach(function (method) { define(prototype, method, function (arg) { return this._invoke(method, arg); }); }); } function AsyncIterator(generator, PromiseImpl) { function invoke(method, arg, resolve, reject) { var record = tryCatch(generator[method], generator, arg); if ("throw" !== record.type) { var result = record.arg, value = result.value; return value && "object" == _typeof(value) && hasOwn.call(value, "__await") ? PromiseImpl.resolve(value.__await).then(function (value) { invoke("next", value, resolve, reject); }, function (err) { invoke("throw", err, resolve, reject); }) : PromiseImpl.resolve(value).then(function (unwrapped) { result.value = unwrapped, resolve(result); }, function (error) { return invoke("throw", error, resolve, reject); }); } reject(record.arg); } var previousPromise; defineProperty(this, "_invoke", { value: function value(method, arg) { function callInvokeWithMethodAndArg() { return new PromiseImpl(function (resolve, reject) { invoke(method, arg, resolve, reject); }); } return previousPromise = previousPromise ? previousPromise.then(callInvokeWithMethodAndArg, callInvokeWithMethodAndArg) : callInvokeWithMethodAndArg(); } }); } function makeInvokeMethod(innerFn, self, context) { var state = "suspendedStart"; return function (method, arg) { if ("executing" === state) throw new Error("Generator is already running"); if ("completed" === state) { if ("throw" === method) throw arg; return doneResult(); } for (context.method = method, context.arg = arg;;) { var delegate = context.delegate; if (delegate) { var delegateResult = maybeInvokeDelegate(delegate, context); if (delegateResult) { if (delegateResult === ContinueSentinel) continue; return delegateResult; } } if ("next" === context.method) context.sent = context._sent = context.arg;else if ("throw" === context.method) { if ("suspendedStart" === state) throw state = "completed", context.arg; context.dispatchException(context.arg); } else "return" === context.method && context.abrupt("return", context.arg); state = "executing"; var record = tryCatch(innerFn, self, context); if ("normal" === record.type) { if (state = context.done ? "completed" : "suspendedYield", record.arg === ContinueSentinel) continue; return { value: record.arg, done: context.done }; } "throw" === record.type && (state = "completed", context.method = "throw", context.arg = record.arg); } }; } function maybeInvokeDelegate(delegate, context) { var method = delegate.iterator[context.method]; if (undefined === method) { if (context.delegate = null, "throw" === context.method) { if (delegate.iterator["return"] && (context.method = "return", context.arg = undefined, maybeInvokeDelegate(delegate, context), "throw" === context.method)) return ContinueSentinel; context.method = "throw", context.arg = new TypeError("The iterator does not provide a 'throw' method"); } return ContinueSentinel; } var record = tryCatch(method, delegate.iterator, context.arg); if ("throw" === record.type) return context.method = "throw", context.arg = record.arg, context.delegate = null, ContinueSentinel; var info = record.arg; return info ? info.done ? (context[delegate.resultName] = info.value, context.next = delegate.nextLoc, "return" !== context.method && (context.method = "next", context.arg = undefined), context.delegate = null, ContinueSentinel) : info : (context.method = "throw", context.arg = new TypeError("iterator result is not an object"), context.delegate = null, ContinueSentinel); } function pushTryEntry(locs) { var entry = { tryLoc: locs[0] }; 1 in locs && (entry.catchLoc = locs[1]), 2 in locs && (entry.finallyLoc = locs[2], entry.afterLoc = locs[3]), this.tryEntries.push(entry); } function resetTryEntry(entry) { var record = entry.completion || {}; record.type = "normal", delete record.arg, entry.completion = record; } function Context(tryLocsList) { this.tryEntries = [{ tryLoc: "root" }], tryLocsList.forEach(pushTryEntry, this), this.reset(!0); } function values(iterable) { if (iterable) { var iteratorMethod = iterable[iteratorSymbol]; if (iteratorMethod) return iteratorMethod.call(iterable); if ("function" == typeof iterable.next) return iterable; if (!isNaN(iterable.length)) { var i = -1, next = function next() { for (; ++i < iterable.length;) { if (hasOwn.call(iterable, i)) return next.value = iterable[i], next.done = !1, next; } return next.value = undefined, next.done = !0, next; }; return next.next = next; } } return { next: doneResult }; } function doneResult() { return { value: undefined, done: !0 }; } return GeneratorFunction.prototype = GeneratorFunctionPrototype, defineProperty(Gp, "constructor", { value: GeneratorFunctionPrototype, configurable: !0 }), defineProperty(GeneratorFunctionPrototype, "constructor", { value: GeneratorFunction, configurable: !0 }), GeneratorFunction.displayName = define(GeneratorFunctionPrototype, toStringTagSymbol, "GeneratorFunction"), exports.isGeneratorFunction = function (genFun) { var ctor = "function" == typeof genFun && genFun.constructor; return !!ctor && (ctor === GeneratorFunction || "GeneratorFunction" === (ctor.displayName || ctor.name)); }, exports.mark = function (genFun) { return Object.setPrototypeOf ? Object.setPrototypeOf(genFun, GeneratorFunctionPrototype) : (genFun.__proto__ = GeneratorFunctionPrototype, define(genFun, toStringTagSymbol, "GeneratorFunction")), genFun.prototype = Object.create(Gp), genFun; }, exports.awrap = function (arg) { return { __await: arg }; }, defineIteratorMethods(AsyncIterator.prototype), define(AsyncIterator.prototype, asyncIteratorSymbol, function () { return this; }), exports.AsyncIterator = AsyncIterator, exports.async = function (innerFn, outerFn, self, tryLocsList, PromiseImpl) { void 0 === PromiseImpl && (PromiseImpl = Promise); var iter = new AsyncIterator(wrap(innerFn, outerFn, self, tryLocsList), PromiseImpl); return exports.isGeneratorFunction(outerFn) ? iter : iter.next().then(function (result) { return result.done ? result.value : iter.next(); }); }, defineIteratorMethods(Gp), define(Gp, toStringTagSymbol, "Generator"), define(Gp, iteratorSymbol, function () { return this; }), define(Gp, "toString", function () { return "[object Generator]"; }), exports.keys = function (val) { var object = Object(val), keys = []; for (var key in object) { keys.push(key); } return keys.reverse(), function next() { for (; keys.length;) { var key = keys.pop(); if (key in object) return next.value = key, next.done = !1, next; } return next.done = !0, next; }; }, exports.values = values, Context.prototype = { constructor: Context, reset: function reset(skipTempReset) { if (this.prev = 0, this.next = 0, this.sent = this._sent = undefined, this.done = !1, this.delegate = null, this.method = "next", this.arg = undefined, this.tryEntries.forEach(resetTryEntry), !skipTempReset) for (var name in this) { "t" === name.charAt(0) && hasOwn.call(this, name) && !isNaN(+name.slice(1)) && (this[name] = undefined); } }, stop: function stop() { this.done = !0; var rootRecord = this.tryEntries[0].completion; if ("throw" === rootRecord.type) throw rootRecord.arg; return this.rval; }, dispatchException: function dispatchException(exception) { if (this.done) throw exception; var context = this; function handle(loc, caught) { return record.type = "throw", record.arg = exception, context.next = loc, caught && (context.method = "next", context.arg = undefined), !!caught; } for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i], record = entry.completion; if ("root" === entry.tryLoc) return handle("end"); if (entry.tryLoc <= this.prev) { var hasCatch = hasOwn.call(entry, "catchLoc"), hasFinally = hasOwn.call(entry, "finallyLoc"); if (hasCatch && hasFinally) { if (this.prev < entry.catchLoc) return handle(entry.catchLoc, !0); if (this.prev < entry.finallyLoc) return handle(entry.finallyLoc); } else if (hasCatch) { if (this.prev < entry.catchLoc) return handle(entry.catchLoc, !0); } else { if (!hasFinally) throw new Error("try statement without catch or finally"); if (this.prev < entry.finallyLoc) return handle(entry.finallyLoc); } } } }, abrupt: function abrupt(type, arg) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.tryLoc <= this.prev && hasOwn.call(entry, "finallyLoc") && this.prev < entry.finallyLoc) { var finallyEntry = entry; break; } } finallyEntry && ("break" === type || "continue" === type) && finallyEntry.tryLoc <= arg && arg <= finallyEntry.finallyLoc && (finallyEntry = null); var record = finallyEntry ? finallyEntry.completion : {}; return record.type = type, record.arg = arg, finallyEntry ? (this.method = "next", this.next = finallyEntry.finallyLoc, ContinueSentinel) : this.complete(record); }, complete: function complete(record, afterLoc) { if ("throw" === record.type) throw record.arg; return "break" === record.type || "continue" === record.type ? this.next = record.arg : "return" === record.type ? (this.rval = this.arg = record.arg, this.method = "return", this.next = "end") : "normal" === record.type && afterLoc && (this.next = afterLoc), ContinueSentinel; }, finish: function finish(finallyLoc) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.finallyLoc === finallyLoc) return this.complete(entry.completion, entry.afterLoc), resetTryEntry(entry), ContinueSentinel; } }, "catch": function _catch(tryLoc) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.tryLoc === tryLoc) { var record = entry.completion; if ("throw" === record.type) { var thrown = record.arg; resetTryEntry(entry); } return thrown; } } throw new Error("illegal catch attempt"); }, delegateYield: function delegateYield(iterable, resultName, nextLoc) { return this.delegate = { iterator: values(iterable), resultName: resultName, nextLoc: nextLoc }, "next" === this.method && (this.arg = undefined), ContinueSentinel; } }, exports; }
function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }
function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }
__webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");
__webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");
__webpack_require__(/*! core-js/modules/es.array.push.js */ "./node_modules/core-js/modules/es.array.push.js");
__webpack_require__(/*! core-js/modules/es.json.stringify.js */ "./node_modules/core-js/modules/es.json.stringify.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
__webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
__webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
__webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
__webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
__webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
__webpack_require__(/*! core-js/modules/es.symbol.async-iterator.js */ "./node_modules/core-js/modules/es.symbol.async-iterator.js");
__webpack_require__(/*! core-js/modules/es.symbol.to-string-tag.js */ "./node_modules/core-js/modules/es.symbol.to-string-tag.js");
__webpack_require__(/*! core-js/modules/es.json.to-string-tag.js */ "./node_modules/core-js/modules/es.json.to-string-tag.js");
__webpack_require__(/*! core-js/modules/es.math.to-string-tag.js */ "./node_modules/core-js/modules/es.math.to-string-tag.js");
__webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
__webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
__webpack_require__(/*! core-js/modules/es.error.cause.js */ "./node_modules/core-js/modules/es.error.cause.js");
__webpack_require__(/*! core-js/modules/es.error.to-string.js */ "./node_modules/core-js/modules/es.error.to-string.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
__webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
__webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
__webpack_require__(/*! core-js/modules/es.array.reverse.js */ "./node_modules/core-js/modules/es.array.reverse.js");
__webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* Afficher les boutons des questions */
var buttons = document.querySelector("#buttons");
window.addEventListener("load", function (e) {
  var _loop = function _loop(i) {
    var bouton = document.createElement("button");
    bouton.className = "eachButton";
    bouton.id = "button" + i;
    bouton.innerHTML = "Question " + i;
    bouton.onclick = function () {
      getBlock(i);
    };
    buttons.appendChild(bouton);
  };
  for (var i = 1; i <= 5; i++) {
    _loop(i);
  }
});

/* Fonction appelée au clic d'un bouton de question */
function getBlock(nb) {
  /* Faire apparaître la question et ses réponses */
  document.querySelector("#question" + nb).style.display = "block";

  /* Actionner le compteur */ /* TROUVER COMMENT EMPECHER LE REDEMARRAGE... */
  startCountDown(seconds, element, nb);
}

/* Mettre en place le compteur */
var seconds = 20;
var element = document.querySelector('#count-down-timer');
var countInterval;
function startCountDown(seconds, element, nb) {
  element.textContent = seconds + " secondes";
  var sec = 0;
  countInterval = setInterval(function () {
    sec = parseInt(seconds);
    element.textContent = sec + " secondes";
    seconds--;
    if (seconds < 0) {
      endQuestion(nb);
      console.log("Pas de réponse !");
      answers.push("none");
      console.log(answers);
    }
  }, 1000);
}

/* Récupérer la réponse choisie */
var answers = []; // Tableau des réponses du joueur.
function getAnswer(eachAnswer, i) {
  console.log(eachAnswer.innerText);
  answers.push(eachAnswer.innerText);
  console.log(answers);
  endQuestion(i);
}
var _loop2 = function _loop2(i) {
  //Numéro de question
  for (var j = 1; j <= 4; j++) {
    //Numéro de réponse
    var eachAnswer = document.querySelector("#rep" + i + "-" + j);
    eachAnswer.addEventListener("click", function (event) {
      return getAnswer(event.target, i);
    });
  }
};
for (var i = 1; i <= 5; i++) {
  _loop2(i);
}

/* Fonction appelée par le compteur et getAnswer() */
function endQuestion(nb) {
  /* Arrêter le compteur */
  clearInterval(countInterval);
  //console.log(countInterval);
  element.textContent = "20 secondes";
  var quest = document.querySelector("#question" + nb);
  /* Faire disparaître la question et ses réponses */
  quest.style.display = "none";

  /* Faire disparaître le bouton de la question terminée et afficher le bouton suivant */
  for (var _i = 1; _i <= 5; _i++) {
    if (_i === nb) {
      document.querySelector("#button" + _i).style.display = "none";
      if (_i + 1 <= 5) {
        document.querySelector("#button" + (_i + 1)).style.display = "block";
      } else {
        /* Si c'est le dernier bouton */
        console.log("Fini !");
        var gameOver = document.querySelector("#result");
        /* Faire apparaître le bloc final */
        gameOver.style.display = "inline-block";
        console.log(answers);
        console.log(JSON.stringify(answers));
        //requestData();
        //requestDataAsync()
        sendUserAnswers();
      }
    }
  }
}

/* Fonction de test d'appel AJAX synchrone */
function requestData() {
  // On crée une instance de l'objet.
  var appel = new XMLHttpRequest();
  // On spécifie le mode de transmission des données, l'URL et le mode de transmission de la requête
  // (false pour synchrone, true pour asynchrone).
  appel.open("GET", location.href, false);
  // On exécute la requête.
  appel.send(null);
  // On affiche une alerte quand la requête est terminée.
  if (appel.readyState == 4) alert(appel.response);
  // Les différentes valeurs de "readyState" sont : 0 (uninitialized), 1 (loading), 2 (loaded),
  // 3 (interactive) et 4 (complete).
  // alert(appel.response) redonne tout le code de la page HTML.
}

/* Fonction de test d'appel AJAX asynchrone */
function requestDataAsync() {
  // On crée une instance de l'objet.
  var appel = new XMLHttpRequest();
  // On spécifie le mode de transmission des données, l'URL et le mode de transmission de la requête.
  appel.open("GET", location.href, true);
  // On utilise l'asynchrone pour afficher une alerte quand la requête est terminée.
  appel.onreadystatechange = function () {
    if (appel.readyState == 4) alert(appel.responseText);
  };
  // On exécute la requête.
  appel.send(null);
}

/* Fonction d'envoi des réponses avec AJAX */
function sendUserAnswers() {
  return _sendUserAnswers.apply(this, arguments);
}
function _sendUserAnswers() {
  _sendUserAnswers = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee() {
    var data, response;
    return _regeneratorRuntime().wrap(function _callee$(_context) {
      while (1) {
        switch (_context.prev = _context.next) {
          case 0:
            /*let userAnswers = new XMLHttpRequest();
            //userAnswers = answers;
            //console.log("Réponses choisies : " + userAnswers);
            userAnswers.open("POST", "user_answers.php", true);
            userAnswers.onreadystatechange = function() {
                if (userAnswers.readyState == 4) alert(userAnswers.responseText)
            }
            // La ligne ci-dessous est requise pour le mode "POST".
            userAnswers.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            userAnswers.send(answers);*/
            /*let response = await fetch('http://127.0.0.1:8000/build/app.js');
            if (response.ok) {
                let json = await response.json();
                console.log(json)
            } else {
                    alert('HTTP-Error : ' + response.status)
            }*/
            /*fetch('http://127.0.0.1:8000/build/app.js')
                .then(response => response.json())*/
            data = {
              test: answers
            };
            /*let headers: {
               "Content-Type": "application/json"
              }*/
            console.log(answers); // Bien lu
            _context.next = 4;
            return fetch("http://127.0.0.1:8000", {
              // PROBLEME
              method: "POST",
              headers: "application/json",
              body: JSON.stringify(data)
            });
          case 4:
            response = _context.sent;
            console.log(response);
          case 6:
          case "end":
            return _context.stop();
        }
      }
    }, _callee);
  }));
  return _sendUserAnswers.apply(this, arguments);
}

/***/ }),

/***/ "./assets/styles/scss/app.scss":
/*!*************************************!*\
  !*** ./assets/styles/scss/app.scss ***!
  \*************************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nHookWebpackError: Module build failed (from ./node_modules/resolve-url-loader/index.js):\nError: resolve-url-loader: error processing CSS\n  PostCSS received undefined instead of CSS string\n  at new Input (/var/www/oh.my03.com/node_modules/postcss/lib/input.js:24:13)\n    at encodeError (/var/www/oh.my03.com/node_modules/resolve-url-loader/index.js:274:12)\n    at onFailure (/var/www/oh.my03.com/node_modules/resolve-url-loader/index.js:215:14)\n    at tryRunOrWebpackError (/var/www/oh.my03.com/node_modules/webpack/lib/HookWebpackError.js:88:9)\n    at __webpack_require_module__ (/var/www/oh.my03.com/node_modules/webpack/lib/Compilation.js:5058:12)\n    at __webpack_require__ (/var/www/oh.my03.com/node_modules/webpack/lib/Compilation.js:5015:18)\n    at /var/www/oh.my03.com/node_modules/webpack/lib/Compilation.js:5086:20\n    at symbolIterator (/var/www/oh.my03.com/node_modules/neo-async/async.js:3485:9)\n    at done (/var/www/oh.my03.com/node_modules/neo-async/async.js:3527:9)\n    at Hook.eval [as callAsync] (eval at create (/var/www/oh.my03.com/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at Hook.CALL_ASYNC_DELEGATE [as _callAsync] (/var/www/oh.my03.com/node_modules/tapable/lib/Hook.js:18:14)\n    at /var/www/oh.my03.com/node_modules/webpack/lib/Compilation.js:4993:43\n    at symbolIterator (/var/www/oh.my03.com/node_modules/neo-async/async.js:3482:9)\n-- inner error --\nError: Module build failed (from ./node_modules/resolve-url-loader/index.js):\nError: resolve-url-loader: error processing CSS\n  PostCSS received undefined instead of CSS string\n  at new Input (/var/www/oh.my03.com/node_modules/postcss/lib/input.js:24:13)\n    at encodeError (/var/www/oh.my03.com/node_modules/resolve-url-loader/index.js:274:12)\n    at onFailure (/var/www/oh.my03.com/node_modules/resolve-url-loader/index.js:215:14)\n    at Object.<anonymous> (/var/www/oh.my03.com/node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[4].oneOf[1].use[1]!/var/www/oh.my03.com/node_modules/resolve-url-loader/index.js??ruleSet[1].rules[4].oneOf[1].use[2]!/var/www/oh.my03.com/node_modules/sass-loader/dist/cjs.js??ruleSet[1].rules[4].oneOf[1].use[3]!/var/www/oh.my03.com/assets/styles/scss/app.scss:1:7)\n    at /var/www/oh.my03.com/node_modules/webpack/lib/javascript/JavascriptModulesPlugin.js:441:11\n    at Hook.eval [as call] (eval at create (/var/www/oh.my03.com/node_modules/tapable/lib/HookCodeFactory.js:19:10), <anonymous>:7:1)\n    at Hook.CALL_DELEGATE [as _call] (/var/www/oh.my03.com/node_modules/tapable/lib/Hook.js:14:14)\n    at /var/www/oh.my03.com/node_modules/webpack/lib/Compilation.js:5060:39\n    at tryRunOrWebpackError (/var/www/oh.my03.com/node_modules/webpack/lib/HookWebpackError.js:83:7)\n    at __webpack_require_module__ (/var/www/oh.my03.com/node_modules/webpack/lib/Compilation.js:5058:12)\n    at __webpack_require__ (/var/www/oh.my03.com/node_modules/webpack/lib/Compilation.js:5015:18)\n    at /var/www/oh.my03.com/node_modules/webpack/lib/Compilation.js:5086:20\n    at symbolIterator (/var/www/oh.my03.com/node_modules/neo-async/async.js:3485:9)\n\nGenerated code for /var/www/oh.my03.com/node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[4].oneOf[1].use[1]!/var/www/oh.my03.com/node_modules/resolve-url-loader/index.js??ruleSet[1].rules[4].oneOf[1].use[2]!/var/www/oh.my03.com/node_modules/sass-loader/dist/cjs.js??ruleSet[1].rules[4].oneOf[1].use[3]!/var/www/oh.my03.com/assets/styles/scss/app.scss\n1 | throw new Error(\"Module build failed (from ./node_modules/resolve-url-loader/index.js):\\nError: resolve-url-loader: error processing CSS\\n  PostCSS received undefined instead of CSS string\\n  at new Input (/var/www/oh.my03.com/node_modules/postcss/lib/input.js:24:13)\\n    at encodeError (/var/www/oh.my03.com/node_modules/resolve-url-loader/index.js:274:12)\\n    at onFailure (/var/www/oh.my03.com/node_modules/resolve-url-loader/index.js:215:14)\");");

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_symfony_stimulus-bridge_dist_index_js-node_modules_bootstrap_dist_js_boo-fdd5d2"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7O0FBQUE7QUFDQTtBQUNBOzs7QUFHQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7Ozs7Ozs7Ozs7Ozs7OztBQ3RCQSxpRUFBZTtBQUNmLENBQUM7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQ0QrQzs7QUFFaEQ7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBUkE7RUFBQTtFQUFBO0VBQUE7SUFBQTtJQUFBO0VBQUE7RUFBQTtJQUFBO0lBQUEsT0FVSSxtQkFBVTtNQUNOLElBQUksQ0FBQ0MsT0FBTyxDQUFDQyxXQUFXLEdBQUcsbUVBQW1FO0lBQ2xHO0VBQUM7RUFBQTtBQUFBLEVBSHdCRiwyREFBVTs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUNYdkM7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ2dDOztBQUVoQztBQUNxQjtBQUN1Qjs7QUFFNUM7QUFDc0I7O0FBRXRCO0FBQ0E7Ozs7Ozs7Ozs7Ozs7Ozs7QUNsQjREOztBQUU1RDtBQUNPLElBQU1JLEdBQUcsR0FBR0QsMEVBQWdCLENBQUNFLHlJQUluQyxDQUFDOztBQUVGO0FBQ0E7Ozs7Ozs7Ozs7OytDQ1RBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQURBO0FBQ0EsSUFBTUUsT0FBTyxHQUFHQyxRQUFRLENBQUNDLGFBQWEsQ0FBQyxVQUFVLENBQUM7QUFDbERDLE1BQU0sQ0FBQ0MsZ0JBQWdCLENBQUMsTUFBTSxFQUFFLFVBQVNDLENBQUMsRUFBRTtFQUFBLDJCQUMvQkMsQ0FBQztJQUNOLElBQUlDLE1BQU0sR0FBR04sUUFBUSxDQUFDTyxhQUFhLENBQUMsUUFBUSxDQUFDO0lBQzdDRCxNQUFNLENBQUNFLFNBQVMsR0FBRyxZQUFZO0lBQy9CRixNQUFNLENBQUNHLEVBQUUsR0FBRyxRQUFRLEdBQUdKLENBQUM7SUFDeEJDLE1BQU0sQ0FBQ0ksU0FBUyxHQUFHLFdBQVcsR0FBR0wsQ0FBQztJQUNsQ0MsTUFBTSxDQUFDSyxPQUFPLEdBQUcsWUFBVztNQUN4QkMsUUFBUSxDQUFDUCxDQUFDLENBQUM7SUFDZixDQUFDO0lBQ0ROLE9BQU8sQ0FBQ2MsV0FBVyxDQUFDUCxNQUFNLENBQUM7RUFBQTtFQVIvQixLQUFLLElBQUlELENBQUMsR0FBQyxDQUFDLEVBQUVBLENBQUMsSUFBRSxDQUFDLEVBQUVBLENBQUMsRUFBRSxFQUFFO0lBQUEsTUFBaEJBLENBQUM7RUFTVjtBQUNKLENBQUMsQ0FBQzs7QUFFRjtBQUNBLFNBQVNPLFFBQVEsQ0FBQ0UsRUFBRSxFQUFFO0VBQ2xCO0VBQ0FkLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLFdBQVcsR0FBR2EsRUFBRSxDQUFDLENBQUNDLEtBQUssQ0FBQ0MsT0FBTyxHQUFHLE9BQU87O0VBRWhFLDRCQUE0QjtFQUM1QkMsY0FBYyxDQUFDQyxPQUFPLEVBQUV6QixPQUFPLEVBQUVxQixFQUFFLENBQUM7QUFDeEM7O0FBRUE7QUFDQSxJQUFJSSxPQUFPLEdBQUcsRUFBRTtBQUNoQixJQUFJekIsT0FBTyxHQUFHTyxRQUFRLENBQUNDLGFBQWEsQ0FBQyxtQkFBbUIsQ0FBQztBQUN6RCxJQUFJa0IsYUFBYTtBQUNqQixTQUFTRixjQUFjLENBQUNDLE9BQU8sRUFBRXpCLE9BQU8sRUFBRXFCLEVBQUUsRUFBRTtFQUMxQ3JCLE9BQU8sQ0FBQ0MsV0FBVyxHQUFHd0IsT0FBTyxHQUFHLFdBQVc7RUFDM0MsSUFBSUUsR0FBRyxHQUFHLENBQUM7RUFDWEQsYUFBYSxHQUFHRSxXQUFXLENBQUMsWUFBVztJQUNuQ0QsR0FBRyxHQUFHRSxRQUFRLENBQUNKLE9BQU8sQ0FBQztJQUN2QnpCLE9BQU8sQ0FBQ0MsV0FBVyxHQUFHMEIsR0FBRyxHQUFHLFdBQVc7SUFDdkNGLE9BQU8sRUFBRTtJQUNULElBQUlBLE9BQU8sR0FBRyxDQUFDLEVBQUU7TUFDYkssV0FBVyxDQUFDVCxFQUFFLENBQUM7TUFDZlUsT0FBTyxDQUFDQyxHQUFHLENBQUMsa0JBQWtCLENBQUM7TUFDL0JDLE9BQU8sQ0FBQ0MsSUFBSSxDQUFDLE1BQU0sQ0FBQztNQUNwQkgsT0FBTyxDQUFDQyxHQUFHLENBQUNDLE9BQU8sQ0FBQztJQUN4QjtFQUNKLENBQUMsRUFBRSxJQUFJLENBQUM7QUFDWjs7QUFFQTtBQUNBLElBQUlBLE9BQU8sR0FBRyxFQUFFLENBQUMsQ0FBQztBQUNsQixTQUFTRSxTQUFTLENBQUNDLFVBQVUsRUFBRXhCLENBQUMsRUFBRTtFQUM5Qm1CLE9BQU8sQ0FBQ0MsR0FBRyxDQUFDSSxVQUFVLENBQUNDLFNBQVMsQ0FBQztFQUNqQ0osT0FBTyxDQUFDQyxJQUFJLENBQUNFLFVBQVUsQ0FBQ0MsU0FBUyxDQUFDO0VBQ2xDTixPQUFPLENBQUNDLEdBQUcsQ0FBQ0MsT0FBTyxDQUFDO0VBQ3BCSCxXQUFXLENBQUNsQixDQUFDLENBQUM7QUFDbEI7QUFBQyw2QkFFUUEsQ0FBQztFQUFpQjtFQUN2QixLQUFLLElBQUkwQixDQUFDLEdBQUMsQ0FBQyxFQUFFQSxDQUFDLElBQUUsQ0FBQyxFQUFFQSxDQUFDLEVBQUUsRUFBRTtJQUFFO0lBQ3ZCLElBQUlGLFVBQVUsR0FBRzdCLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLE1BQU0sR0FBR0ksQ0FBQyxHQUFHLEdBQUcsR0FBRzBCLENBQUMsQ0FBQztJQUM3REYsVUFBVSxDQUFDMUIsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFVBQUE2QixLQUFLO01BQUEsT0FBSUosU0FBUyxDQUFDSSxLQUFLLENBQUNDLE1BQU0sRUFBRTVCLENBQUMsQ0FBQztJQUFBLEVBQUM7RUFDN0U7QUFBQztBQUpMLEtBQUssSUFBSUEsQ0FBQyxHQUFDLENBQUMsRUFBRUEsQ0FBQyxJQUFFLENBQUMsRUFBRUEsQ0FBQyxFQUFFLEVBQUU7RUFBQSxPQUFoQkEsQ0FBQztBQUtWOztBQUVBO0FBQ0EsU0FBU2tCLFdBQVcsQ0FBQ1QsRUFBRSxFQUFFO0VBQ3JCO0VBQ0FvQixhQUFhLENBQUNmLGFBQWEsQ0FBQztFQUM1QjtFQUNBMUIsT0FBTyxDQUFDQyxXQUFXLEdBQUcsYUFBYTtFQUVuQyxJQUFJeUMsS0FBSyxHQUFHbkMsUUFBUSxDQUFDQyxhQUFhLENBQUMsV0FBVyxHQUFHYSxFQUFFLENBQUM7RUFDcEQ7RUFDQXFCLEtBQUssQ0FBQ3BCLEtBQUssQ0FBQ0MsT0FBTyxHQUFHLE1BQU07O0VBRTVCO0VBQ0EsS0FBSyxJQUFJWCxFQUFDLEdBQUMsQ0FBQyxFQUFFQSxFQUFDLElBQUUsQ0FBQyxFQUFFQSxFQUFDLEVBQUUsRUFBRTtJQUNyQixJQUFJQSxFQUFDLEtBQUtTLEVBQUUsRUFBRTtNQUNWZCxRQUFRLENBQUNDLGFBQWEsQ0FBQyxTQUFTLEdBQUdJLEVBQUMsQ0FBQyxDQUFDVSxLQUFLLENBQUNDLE9BQU8sR0FBRyxNQUFNO01BQzVELElBQUtYLEVBQUMsR0FBQyxDQUFDLElBQUssQ0FBQyxFQUFFO1FBQ1pMLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLFNBQVMsSUFBSUksRUFBQyxHQUFDLENBQUMsQ0FBQyxDQUFDLENBQUNVLEtBQUssQ0FBQ0MsT0FBTyxHQUFHLE9BQU87TUFDckUsQ0FBQyxNQUFNO1FBQUU7UUFDTFEsT0FBTyxDQUFDQyxHQUFHLENBQUMsUUFBUSxDQUFDO1FBQ3JCLElBQU1XLFFBQVEsR0FBR3BDLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLFNBQVMsQ0FBQztRQUNsRDtRQUNBbUMsUUFBUSxDQUFDckIsS0FBSyxDQUFDQyxPQUFPLEdBQUcsY0FBYztRQUN2Q1EsT0FBTyxDQUFDQyxHQUFHLENBQUNDLE9BQU8sQ0FBQztRQUNwQkYsT0FBTyxDQUFDQyxHQUFHLENBQUNZLElBQUksQ0FBQ0MsU0FBUyxDQUFDWixPQUFPLENBQUMsQ0FBQztRQUNwQztRQUNBO1FBQ0FhLGVBQWUsRUFBRTtNQUNyQjtJQUNKO0VBQ0o7QUFDSjs7QUFFQTtBQUNBLFNBQVNDLFdBQVcsR0FBRztFQUNuQjtFQUNBLElBQUlDLEtBQUssR0FBRyxJQUFJQyxjQUFjLEVBQUU7RUFDaEM7RUFDQTtFQUNBRCxLQUFLLENBQUNFLElBQUksQ0FBQyxLQUFLLEVBQUVDLFFBQVEsQ0FBQ0MsSUFBSSxFQUFFLEtBQUssQ0FBQztFQUN2QztFQUNBSixLQUFLLENBQUNLLElBQUksQ0FBQyxJQUFJLENBQUM7RUFDaEI7RUFDQSxJQUFJTCxLQUFLLENBQUNNLFVBQVUsSUFBSSxDQUFDLEVBQUVDLEtBQUssQ0FBQ1AsS0FBSyxDQUFDUSxRQUFRLENBQUM7RUFDaEQ7RUFDQTtFQUNBO0FBQ0o7O0FBRUE7QUFDQSxTQUFTQyxnQkFBZ0IsR0FBRztFQUN4QjtFQUNBLElBQUlULEtBQUssR0FBRyxJQUFJQyxjQUFjLEVBQUU7RUFDaEM7RUFDQUQsS0FBSyxDQUFDRSxJQUFJLENBQUMsS0FBSyxFQUFFQyxRQUFRLENBQUNDLElBQUksRUFBRSxJQUFJLENBQUM7RUFDdEM7RUFDQUosS0FBSyxDQUFDVSxrQkFBa0IsR0FBRyxZQUFXO0lBQ2xDLElBQUlWLEtBQUssQ0FBQ00sVUFBVSxJQUFJLENBQUMsRUFBRUMsS0FBSyxDQUFDUCxLQUFLLENBQUNXLFlBQVksQ0FBQztFQUN4RCxDQUFDO0VBQ0Q7RUFDQVgsS0FBSyxDQUFDSyxJQUFJLENBQUMsSUFBSSxDQUFDO0FBQ3BCOztBQUVBO0FBQUEsU0FDZVAsZUFBZTtFQUFBO0FBQUE7QUFBQTtFQUFBLDhFQUE5QjtJQUFBO0lBQUE7TUFBQTtRQUFBO1VBQUE7WUFDSTtBQUNKO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtZQUVJO0FBQ0o7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO1lBRUk7QUFDSjtZQUVRYyxJQUFJLEdBQUc7Y0FDUEMsSUFBSSxFQUFFNUI7WUFDVixDQUFDO1lBRUQ7QUFDSjtBQUNBO1lBRUlGLE9BQU8sQ0FBQ0MsR0FBRyxDQUFDQyxPQUFPLENBQUMsRUFBQztZQUFBO1lBQUEsT0FFQTZCLEtBQUssQ0FBQyx1QkFBdUIsRUFBRTtjQUFFO2NBQ2xEQyxNQUFNLEVBQUUsTUFBTTtjQUNkQyxPQUFPLEVBQUUsa0JBQWtCO2NBQzNCQyxJQUFJLEVBQUVyQixJQUFJLENBQUNDLFNBQVMsQ0FBQ2UsSUFBSTtZQUM3QixDQUFDLENBQUM7VUFBQTtZQUpFSixRQUFRO1lBTVp6QixPQUFPLENBQUNDLEdBQUcsQ0FBQ3dCLFFBQVEsQ0FBQztVQUFBO1VBQUE7WUFBQTtRQUFBO01BQUE7SUFBQTtFQUFBLENBRXhCO0VBQUE7QUFBQSIsInNvdXJjZXMiOlsid2VicGFjazovLy8gXFwuW2p0XXN4Iiwid2VicGFjazovLy8uL2Fzc2V0cy9jb250cm9sbGVycy5qc29uIiwid2VicGFjazovLy8uL2Fzc2V0cy9jb250cm9sbGVycy9oZWxsb19jb250cm9sbGVyLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9hcHAuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2Jvb3RzdHJhcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvc2NyaXB0cy5qcyJdLCJzb3VyY2VzQ29udGVudCI6WyJ2YXIgbWFwID0ge1xuXHRcIi4vaGVsbG9fY29udHJvbGxlci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL0BzeW1mb255L3N0aW11bHVzLWJyaWRnZS9sYXp5LWNvbnRyb2xsZXItbG9hZGVyLmpzIS4vYXNzZXRzL2NvbnRyb2xsZXJzL2hlbGxvX2NvbnRyb2xsZXIuanNcIlxufTtcblxuXG5mdW5jdGlvbiB3ZWJwYWNrQ29udGV4dChyZXEpIHtcblx0dmFyIGlkID0gd2VicGFja0NvbnRleHRSZXNvbHZlKHJlcSk7XG5cdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKGlkKTtcbn1cbmZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0UmVzb2x2ZShyZXEpIHtcblx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhtYXAsIHJlcSkpIHtcblx0XHR2YXIgZSA9IG5ldyBFcnJvcihcIkNhbm5vdCBmaW5kIG1vZHVsZSAnXCIgKyByZXEgKyBcIidcIik7XG5cdFx0ZS5jb2RlID0gJ01PRFVMRV9OT1RfRk9VTkQnO1xuXHRcdHRocm93IGU7XG5cdH1cblx0cmV0dXJuIG1hcFtyZXFdO1xufVxud2VicGFja0NvbnRleHQua2V5cyA9IGZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0S2V5cygpIHtcblx0cmV0dXJuIE9iamVjdC5rZXlzKG1hcCk7XG59O1xud2VicGFja0NvbnRleHQucmVzb2x2ZSA9IHdlYnBhY2tDb250ZXh0UmVzb2x2ZTtcbm1vZHVsZS5leHBvcnRzID0gd2VicGFja0NvbnRleHQ7XG53ZWJwYWNrQ29udGV4dC5pZCA9IFwiLi9hc3NldHMvY29udHJvbGxlcnMgc3luYyByZWN1cnNpdmUgLi9ub2RlX21vZHVsZXMvQHN5bWZvbnkvc3RpbXVsdXMtYnJpZGdlL2xhenktY29udHJvbGxlci1sb2FkZXIuanMhIFxcXFwuW2p0XXN4PyRcIjsiLCJleHBvcnQgZGVmYXVsdCB7XG59OyIsImltcG9ydCB7IENvbnRyb2xsZXIgfSBmcm9tICdAaG90d2lyZWQvc3RpbXVsdXMnO1xuXG4vKlxuICogVGhpcyBpcyBhbiBleGFtcGxlIFN0aW11bHVzIGNvbnRyb2xsZXIhXG4gKlxuICogQW55IGVsZW1lbnQgd2l0aCBhIGRhdGEtY29udHJvbGxlcj1cImhlbGxvXCIgYXR0cmlidXRlIHdpbGwgY2F1c2VcbiAqIHRoaXMgY29udHJvbGxlciB0byBiZSBleGVjdXRlZC4gVGhlIG5hbWUgXCJoZWxsb1wiIGNvbWVzIGZyb20gdGhlIGZpbGVuYW1lOlxuICogaGVsbG9fY29udHJvbGxlci5qcyAtPiBcImhlbGxvXCJcbiAqXG4gKiBEZWxldGUgdGhpcyBmaWxlIG9yIGFkYXB0IGl0IGZvciB5b3VyIHVzZSFcbiAqL1xuZXhwb3J0IGRlZmF1bHQgY2xhc3MgZXh0ZW5kcyBDb250cm9sbGVyIHtcbiAgICBjb25uZWN0KCkge1xuICAgICAgICB0aGlzLmVsZW1lbnQudGV4dENvbnRlbnQgPSAnSGVsbG8gU3RpbXVsdXMhIEVkaXQgbWUgaW4gYXNzZXRzL2NvbnRyb2xsZXJzL2hlbGxvX2NvbnRyb2xsZXIuanMnO1xuICAgIH1cbn1cbiIsIi8qXG4gKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXG4gKlxuICogV2UgcmVjb21tZW5kIGluY2x1ZGluZyB0aGUgYnVpbHQgdmVyc2lvbiBvZiB0aGlzIEphdmFTY3JpcHQgZmlsZVxuICogKGFuZCBpdHMgQ1NTIGZpbGUpIGluIHlvdXIgYmFzZSBsYXlvdXQgKGJhc2UuaHRtbC50d2lnKS5cbiAqL1xuXG4vLyBhbnkgQ1NTIHlvdSBpbXBvcnQgd2lsbCBvdXRwdXQgaW50byBhIHNpbmdsZSBjc3MgZmlsZSAoYXBwLmNzcyBpbiB0aGlzIGNhc2UpXG5pbXBvcnQgJy4vc3R5bGVzL3Njc3MvYXBwLnNjc3MnO1xuXG4vLyBzdGFydCB0aGUgU3RpbXVsdXMgYXBwbGljYXRpb25cbmltcG9ydCAnLi9ib290c3RyYXAnO1xuaW1wb3J0ICdib290c3RyYXAvZGlzdC9qcy9ib290c3RyYXAuYnVuZGxlJztcblxuLy8gSmF2YVNjcmlwdCBwZXJzb1xuaW1wb3J0ICcuL2pzL3NjcmlwdHMnO1xuXG4vLyBQSFAgZmlsZSBmb3IgdGhlIHVzZXIncyBhbnN3ZXJzXG4vL2ltcG9ydCAnLi91c2VyX2Fuc3dlcnMucGhwJztcblxuIiwiaW1wb3J0IHsgc3RhcnRTdGltdWx1c0FwcCB9IGZyb20gJ0BzeW1mb255L3N0aW11bHVzLWJyaWRnZSc7XG5cbi8vIFJlZ2lzdGVycyBTdGltdWx1cyBjb250cm9sbGVycyBmcm9tIGNvbnRyb2xsZXJzLmpzb24gYW5kIGluIHRoZSBjb250cm9sbGVycy8gZGlyZWN0b3J5XG5leHBvcnQgY29uc3QgYXBwID0gc3RhcnRTdGltdWx1c0FwcChyZXF1aXJlLmNvbnRleHQoXG4gICAgJ0BzeW1mb255L3N0aW11bHVzLWJyaWRnZS9sYXp5LWNvbnRyb2xsZXItbG9hZGVyIS4vY29udHJvbGxlcnMnLFxuICAgIHRydWUsXG4gICAgL1xcLltqdF1zeD8kL1xuKSk7XG5cbi8vIHJlZ2lzdGVyIGFueSBjdXN0b20sIDNyZCBwYXJ0eSBjb250cm9sbGVycyBoZXJlXG4vLyBhcHAucmVnaXN0ZXIoJ3NvbWVfY29udHJvbGxlcl9uYW1lJywgU29tZUltcG9ydGVkQ29udHJvbGxlcik7XG4iLCIvKiBBZmZpY2hlciBsZXMgYm91dG9ucyBkZXMgcXVlc3Rpb25zICovXG5jb25zdCBidXR0b25zID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIiNidXR0b25zXCIpO1xud2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJsb2FkXCIsIGZ1bmN0aW9uKGUpIHtcbiAgICBmb3IgKGxldCBpPTE7IGk8PTU7IGkrKykge1xuICAgICAgICBsZXQgYm91dG9uID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudChcImJ1dHRvblwiKTtcbiAgICAgICAgYm91dG9uLmNsYXNzTmFtZSA9IFwiZWFjaEJ1dHRvblwiO1xuICAgICAgICBib3V0b24uaWQgPSBcImJ1dHRvblwiICsgaTtcbiAgICAgICAgYm91dG9uLmlubmVySFRNTCA9IFwiUXVlc3Rpb24gXCIgKyBpO1xuICAgICAgICBib3V0b24ub25jbGljayA9IGZ1bmN0aW9uKCkge1xuICAgICAgICAgICAgZ2V0QmxvY2soaSlcbiAgICAgICAgfVxuICAgICAgICBidXR0b25zLmFwcGVuZENoaWxkKGJvdXRvbilcbiAgICB9XG59KVxuXG4vKiBGb25jdGlvbiBhcHBlbMOpZSBhdSBjbGljIGQndW4gYm91dG9uIGRlIHF1ZXN0aW9uICovXG5mdW5jdGlvbiBnZXRCbG9jayhuYikge1xuICAgIC8qIEZhaXJlIGFwcGFyYcOudHJlIGxhIHF1ZXN0aW9uIGV0IHNlcyByw6lwb25zZXMgKi9cbiAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI3F1ZXN0aW9uXCIgKyBuYikuc3R5bGUuZGlzcGxheSA9IFwiYmxvY2tcIjtcblxuICAgIC8qIEFjdGlvbm5lciBsZSBjb21wdGV1ciAqLyAvKiBUUk9VVkVSIENPTU1FTlQgRU1QRUNIRVIgTEUgUkVERU1BUlJBR0UuLi4gKi9cbiAgICBzdGFydENvdW50RG93bihzZWNvbmRzLCBlbGVtZW50LCBuYilcbn1cblxuLyogTWV0dHJlIGVuIHBsYWNlIGxlIGNvbXB0ZXVyICovXG5sZXQgc2Vjb25kcyA9IDIwO1xubGV0IGVsZW1lbnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjY291bnQtZG93bi10aW1lcicpO1xubGV0IGNvdW50SW50ZXJ2YWw7XG5mdW5jdGlvbiBzdGFydENvdW50RG93bihzZWNvbmRzLCBlbGVtZW50LCBuYikge1xuICAgIGVsZW1lbnQudGV4dENvbnRlbnQgPSBzZWNvbmRzICsgXCIgc2Vjb25kZXNcIjtcbiAgICBsZXQgc2VjID0gMDtcbiAgICBjb3VudEludGVydmFsID0gc2V0SW50ZXJ2YWwoZnVuY3Rpb24oKSB7XG4gICAgICAgIHNlYyA9IHBhcnNlSW50KHNlY29uZHMpO1xuICAgICAgICBlbGVtZW50LnRleHRDb250ZW50ID0gc2VjICsgXCIgc2Vjb25kZXNcIjtcbiAgICAgICAgc2Vjb25kcy0tO1xuICAgICAgICBpZiAoc2Vjb25kcyA8IDApIHtcbiAgICAgICAgICAgIGVuZFF1ZXN0aW9uKG5iKTtcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKFwiUGFzIGRlIHLDqXBvbnNlICFcIik7XG4gICAgICAgICAgICBhbnN3ZXJzLnB1c2goXCJub25lXCIpO1xuICAgICAgICAgICAgY29uc29sZS5sb2coYW5zd2VycylcbiAgICAgICAgfVxuICAgIH0sIDEwMDApXG59XG5cbi8qIFLDqWN1cMOpcmVyIGxhIHLDqXBvbnNlIGNob2lzaWUgKi9cbmxldCBhbnN3ZXJzID0gW107IC8vIFRhYmxlYXUgZGVzIHLDqXBvbnNlcyBkdSBqb3VldXIuXG5mdW5jdGlvbiBnZXRBbnN3ZXIoZWFjaEFuc3dlciwgaSkge1xuICAgIGNvbnNvbGUubG9nKGVhY2hBbnN3ZXIuaW5uZXJUZXh0KTtcbiAgICBhbnN3ZXJzLnB1c2goZWFjaEFuc3dlci5pbm5lclRleHQpO1xuICAgIGNvbnNvbGUubG9nKGFuc3dlcnMpO1xuICAgIGVuZFF1ZXN0aW9uKGkpXG59XG5cbmZvciAobGV0IGk9MTsgaTw9NTsgaSsrKSB7IC8vTnVtw6lybyBkZSBxdWVzdGlvblxuICAgIGZvciAobGV0IGo9MTsgajw9NDsgaisrKSB7IC8vTnVtw6lybyBkZSByw6lwb25zZVxuICAgICAgICBsZXQgZWFjaEFuc3dlciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIjcmVwXCIgKyBpICsgXCItXCIgKyBqKTtcbiAgICAgICAgZWFjaEFuc3dlci5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgZXZlbnQgPT4gZ2V0QW5zd2VyKGV2ZW50LnRhcmdldCwgaSkpXG4gICAgfVxufVxuXG4vKiBGb25jdGlvbiBhcHBlbMOpZSBwYXIgbGUgY29tcHRldXIgZXQgZ2V0QW5zd2VyKCkgKi9cbmZ1bmN0aW9uIGVuZFF1ZXN0aW9uKG5iKSB7XG4gICAgLyogQXJyw6p0ZXIgbGUgY29tcHRldXIgKi9cbiAgICBjbGVhckludGVydmFsKGNvdW50SW50ZXJ2YWwpO1xuICAgIC8vY29uc29sZS5sb2coY291bnRJbnRlcnZhbCk7XG4gICAgZWxlbWVudC50ZXh0Q29udGVudCA9IFwiMjAgc2Vjb25kZXNcIjtcblxuICAgIGxldCBxdWVzdCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIjcXVlc3Rpb25cIiArIG5iKTtcbiAgICAvKiBGYWlyZSBkaXNwYXJhw650cmUgbGEgcXVlc3Rpb24gZXQgc2VzIHLDqXBvbnNlcyAqL1xuICAgIHF1ZXN0LnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjtcblxuICAgIC8qIEZhaXJlIGRpc3BhcmHDrnRyZSBsZSBib3V0b24gZGUgbGEgcXVlc3Rpb24gdGVybWluw6llIGV0IGFmZmljaGVyIGxlIGJvdXRvbiBzdWl2YW50ICovXG4gICAgZm9yIChsZXQgaT0xOyBpPD01OyBpKyspIHtcbiAgICAgICAgaWYgKGkgPT09IG5iKSB7XG4gICAgICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI2J1dHRvblwiICsgaSkuc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xuICAgICAgICAgICAgaWYgKChpKzEpIDw9IDUpIHtcbiAgICAgICAgICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI2J1dHRvblwiICsgKGkrMSkpLnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCJcbiAgICAgICAgICAgIH0gZWxzZSB7IC8qIFNpIGMnZXN0IGxlIGRlcm5pZXIgYm91dG9uICovXG4gICAgICAgICAgICAgICAgY29uc29sZS5sb2coXCJGaW5pICFcIik7XG4gICAgICAgICAgICAgICAgY29uc3QgZ2FtZU92ZXIgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI3Jlc3VsdFwiKTtcbiAgICAgICAgICAgICAgICAvKiBGYWlyZSBhcHBhcmHDrnRyZSBsZSBibG9jIGZpbmFsICovXG4gICAgICAgICAgICAgICAgZ2FtZU92ZXIuc3R5bGUuZGlzcGxheSA9IFwiaW5saW5lLWJsb2NrXCI7XG4gICAgICAgICAgICAgICAgY29uc29sZS5sb2coYW5zd2Vycyk7XG4gICAgICAgICAgICAgICAgY29uc29sZS5sb2coSlNPTi5zdHJpbmdpZnkoYW5zd2VycykpXG4gICAgICAgICAgICAgICAgLy9yZXF1ZXN0RGF0YSgpO1xuICAgICAgICAgICAgICAgIC8vcmVxdWVzdERhdGFBc3luYygpXG4gICAgICAgICAgICAgICAgc2VuZFVzZXJBbnN3ZXJzKClcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgIH1cbn1cblxuLyogRm9uY3Rpb24gZGUgdGVzdCBkJ2FwcGVsIEFKQVggc3luY2hyb25lICovXG5mdW5jdGlvbiByZXF1ZXN0RGF0YSgpIHtcbiAgICAvLyBPbiBjcsOpZSB1bmUgaW5zdGFuY2UgZGUgbCdvYmpldC5cbiAgICBsZXQgYXBwZWwgPSBuZXcgWE1MSHR0cFJlcXVlc3QoKTtcbiAgICAvLyBPbiBzcMOpY2lmaWUgbGUgbW9kZSBkZSB0cmFuc21pc3Npb24gZGVzIGRvbm7DqWVzLCBsJ1VSTCBldCBsZSBtb2RlIGRlIHRyYW5zbWlzc2lvbiBkZSBsYSByZXF1w6p0ZVxuICAgIC8vIChmYWxzZSBwb3VyIHN5bmNocm9uZSwgdHJ1ZSBwb3VyIGFzeW5jaHJvbmUpLlxuICAgIGFwcGVsLm9wZW4oXCJHRVRcIiwgbG9jYXRpb24uaHJlZiwgZmFsc2UpO1xuICAgIC8vIE9uIGV4w6ljdXRlIGxhIHJlcXXDqnRlLlxuICAgIGFwcGVsLnNlbmQobnVsbCk7XG4gICAgLy8gT24gYWZmaWNoZSB1bmUgYWxlcnRlIHF1YW5kIGxhIHJlcXXDqnRlIGVzdCB0ZXJtaW7DqWUuXG4gICAgaWYgKGFwcGVsLnJlYWR5U3RhdGUgPT0gNCkgYWxlcnQoYXBwZWwucmVzcG9uc2UpXG4gICAgLy8gTGVzIGRpZmbDqXJlbnRlcyB2YWxldXJzIGRlIFwicmVhZHlTdGF0ZVwiIHNvbnQgOiAwICh1bmluaXRpYWxpemVkKSwgMSAobG9hZGluZyksIDIgKGxvYWRlZCksXG4gICAgLy8gMyAoaW50ZXJhY3RpdmUpIGV0IDQgKGNvbXBsZXRlKS5cbiAgICAvLyBhbGVydChhcHBlbC5yZXNwb25zZSkgcmVkb25uZSB0b3V0IGxlIGNvZGUgZGUgbGEgcGFnZSBIVE1MLlxufVxuXG4vKiBGb25jdGlvbiBkZSB0ZXN0IGQnYXBwZWwgQUpBWCBhc3luY2hyb25lICovXG5mdW5jdGlvbiByZXF1ZXN0RGF0YUFzeW5jKCkge1xuICAgIC8vIE9uIGNyw6llIHVuZSBpbnN0YW5jZSBkZSBsJ29iamV0LlxuICAgIGxldCBhcHBlbCA9IG5ldyBYTUxIdHRwUmVxdWVzdCgpO1xuICAgIC8vIE9uIHNww6ljaWZpZSBsZSBtb2RlIGRlIHRyYW5zbWlzc2lvbiBkZXMgZG9ubsOpZXMsIGwnVVJMIGV0IGxlIG1vZGUgZGUgdHJhbnNtaXNzaW9uIGRlIGxhIHJlcXXDqnRlLlxuICAgIGFwcGVsLm9wZW4oXCJHRVRcIiwgbG9jYXRpb24uaHJlZiwgdHJ1ZSk7XG4gICAgLy8gT24gdXRpbGlzZSBsJ2FzeW5jaHJvbmUgcG91ciBhZmZpY2hlciB1bmUgYWxlcnRlIHF1YW5kIGxhIHJlcXXDqnRlIGVzdCB0ZXJtaW7DqWUuXG4gICAgYXBwZWwub25yZWFkeXN0YXRlY2hhbmdlID0gZnVuY3Rpb24oKSB7XG4gICAgICAgIGlmIChhcHBlbC5yZWFkeVN0YXRlID09IDQpIGFsZXJ0KGFwcGVsLnJlc3BvbnNlVGV4dClcbiAgICB9XG4gICAgLy8gT24gZXjDqWN1dGUgbGEgcmVxdcOqdGUuXG4gICAgYXBwZWwuc2VuZChudWxsKTtcbn1cblxuLyogRm9uY3Rpb24gZCdlbnZvaSBkZXMgcsOpcG9uc2VzIGF2ZWMgQUpBWCAqL1xuYXN5bmMgZnVuY3Rpb24gc2VuZFVzZXJBbnN3ZXJzKCkge1xuICAgIC8qbGV0IHVzZXJBbnN3ZXJzID0gbmV3IFhNTEh0dHBSZXF1ZXN0KCk7XG4gICAgLy91c2VyQW5zd2VycyA9IGFuc3dlcnM7XG4gICAgLy9jb25zb2xlLmxvZyhcIlLDqXBvbnNlcyBjaG9pc2llcyA6IFwiICsgdXNlckFuc3dlcnMpO1xuICAgIHVzZXJBbnN3ZXJzLm9wZW4oXCJQT1NUXCIsIFwidXNlcl9hbnN3ZXJzLnBocFwiLCB0cnVlKTtcbiAgICB1c2VyQW5zd2Vycy5vbnJlYWR5c3RhdGVjaGFuZ2UgPSBmdW5jdGlvbigpIHtcbiAgICAgICAgaWYgKHVzZXJBbnN3ZXJzLnJlYWR5U3RhdGUgPT0gNCkgYWxlcnQodXNlckFuc3dlcnMucmVzcG9uc2VUZXh0KVxuICAgIH1cbiAgICAvLyBMYSBsaWduZSBjaS1kZXNzb3VzIGVzdCByZXF1aXNlIHBvdXIgbGUgbW9kZSBcIlBPU1RcIi5cbiAgICB1c2VyQW5zd2Vycy5zZXRSZXF1ZXN0SGVhZGVyKFwiQ29udGVudC10eXBlXCIsIFwiYXBwbGljYXRpb24veC13d3ctZm9ybS11cmxlbmNvZGVkXCIpO1xuICAgIHVzZXJBbnN3ZXJzLnNlbmQoYW5zd2Vycyk7Ki9cblxuICAgIC8qbGV0IHJlc3BvbnNlID0gYXdhaXQgZmV0Y2goJ2h0dHA6Ly8xMjcuMC4wLjE6ODAwMC9idWlsZC9hcHAuanMnKTtcbiAgICBpZiAocmVzcG9uc2Uub2spIHtcbiAgICAgICAgbGV0IGpzb24gPSBhd2FpdCByZXNwb25zZS5qc29uKCk7XG4gICAgICAgIGNvbnNvbGUubG9nKGpzb24pXG4gICAgfSBlbHNlIHtcbiAgICAgICAgICAgIGFsZXJ0KCdIVFRQLUVycm9yIDogJyArIHJlc3BvbnNlLnN0YXR1cylcbiAgICB9Ki9cblxuICAgIC8qZmV0Y2goJ2h0dHA6Ly8xMjcuMC4wLjE6ODAwMC9idWlsZC9hcHAuanMnKVxuICAgICAgICAudGhlbihyZXNwb25zZSA9PiByZXNwb25zZS5qc29uKCkpKi9cbiAgICBcbiAgICBsZXQgZGF0YSA9IHtcbiAgICAgICAgdGVzdDogYW5zd2VycyxcbiAgICB9O1xuICAgIFxuICAgIC8qbGV0IGhlYWRlcnM6IHtcbiAgICAgICBcIkNvbnRlbnQtVHlwZVwiOiBcImFwcGxpY2F0aW9uL2pzb25cIlxuICAgICAgfSovXG5cbiAgICBjb25zb2xlLmxvZyhhbnN3ZXJzKSAvLyBCaWVuIGx1XG5cbiAgICBsZXQgcmVzcG9uc2UgPSBhd2FpdCBmZXRjaChcImh0dHA6Ly8xMjcuMC4wLjE6ODAwMFwiLCB7IC8vIFBST0JMRU1FXG4gICAgICAgIG1ldGhvZDogXCJQT1NUXCIsXG4gICAgICAgIGhlYWRlcnM6IFwiYXBwbGljYXRpb24vanNvblwiLFxuICAgICAgICBib2R5OiBKU09OLnN0cmluZ2lmeShkYXRhKVxuICAgIH0pO1xuXG4gICAgY29uc29sZS5sb2cocmVzcG9uc2UpXG5cbn0iXSwibmFtZXMiOlsiQ29udHJvbGxlciIsImVsZW1lbnQiLCJ0ZXh0Q29udGVudCIsInN0YXJ0U3RpbXVsdXNBcHAiLCJhcHAiLCJyZXF1aXJlIiwiY29udGV4dCIsImJ1dHRvbnMiLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJ3aW5kb3ciLCJhZGRFdmVudExpc3RlbmVyIiwiZSIsImkiLCJib3V0b24iLCJjcmVhdGVFbGVtZW50IiwiY2xhc3NOYW1lIiwiaWQiLCJpbm5lckhUTUwiLCJvbmNsaWNrIiwiZ2V0QmxvY2siLCJhcHBlbmRDaGlsZCIsIm5iIiwic3R5bGUiLCJkaXNwbGF5Iiwic3RhcnRDb3VudERvd24iLCJzZWNvbmRzIiwiY291bnRJbnRlcnZhbCIsInNlYyIsInNldEludGVydmFsIiwicGFyc2VJbnQiLCJlbmRRdWVzdGlvbiIsImNvbnNvbGUiLCJsb2ciLCJhbnN3ZXJzIiwicHVzaCIsImdldEFuc3dlciIsImVhY2hBbnN3ZXIiLCJpbm5lclRleHQiLCJqIiwiZXZlbnQiLCJ0YXJnZXQiLCJjbGVhckludGVydmFsIiwicXVlc3QiLCJnYW1lT3ZlciIsIkpTT04iLCJzdHJpbmdpZnkiLCJzZW5kVXNlckFuc3dlcnMiLCJyZXF1ZXN0RGF0YSIsImFwcGVsIiwiWE1MSHR0cFJlcXVlc3QiLCJvcGVuIiwibG9jYXRpb24iLCJocmVmIiwic2VuZCIsInJlYWR5U3RhdGUiLCJhbGVydCIsInJlc3BvbnNlIiwicmVxdWVzdERhdGFBc3luYyIsIm9ucmVhZHlzdGF0ZWNoYW5nZSIsInJlc3BvbnNlVGV4dCIsImRhdGEiLCJ0ZXN0IiwiZmV0Y2giLCJtZXRob2QiLCJoZWFkZXJzIiwiYm9keSJdLCJzb3VyY2VSb290IjoiIn0=