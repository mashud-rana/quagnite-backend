"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_admin_PageComponent_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/PageComponent.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/PageComponent.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vuelidate_lib_validators__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! vuelidate/lib/validators */ "./node_modules/vuelidate/lib/validators/index.js");
/* harmony import */ var _template_DefaultTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./template/DefaultTemplateComponent.vue */ "./resources/js/components/admin/template/DefaultTemplateComponent.vue");
/* harmony import */ var _template_HomeTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./template/HomeTemplateComponent.vue */ "./resources/js/components/admin/template/HomeTemplateComponent.vue");
/* harmony import */ var _template_StudentTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./template/StudentTemplateComponent.vue */ "./resources/js/components/admin/template/StudentTemplateComponent.vue");
/* harmony import */ var _template_MentorTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./template/MentorTemplateComponent.vue */ "./resources/js/components/admin/template/MentorTemplateComponent.vue");
/* harmony import */ var _template_CourseTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./template/CourseTemplateComponent.vue */ "./resources/js/components/admin/template/CourseTemplateComponent.vue");
/* harmony import */ var _template_CompanyTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./template/CompanyTemplateComponent.vue */ "./resources/js/components/admin/template/CompanyTemplateComponent.vue");
/* harmony import */ var _template_ContactTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./template/ContactTemplateComponent.vue */ "./resources/js/components/admin/template/ContactTemplateComponent.vue");
/* harmony import */ var _template_AboutTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./template/AboutTemplateComponent.vue */ "./resources/js/components/admin/template/AboutTemplateComponent.vue");
/* harmony import */ var _template_HowitworksTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./template/HowitworksTemplateComponent.vue */ "./resources/js/components/admin/template/HowitworksTemplateComponent.vue");
/* harmony import */ var _template_CareerTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./template/CareerTemplateComponent.vue */ "./resources/js/components/admin/template/CareerTemplateComponent.vue");
/* harmony import */ var _template_ContentTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./template/ContentTemplateComponent.vue */ "./resources/js/components/admin/template/ContentTemplateComponent.vue");
/* harmony import */ var _template_JobTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./template/JobTemplateComponent.vue */ "./resources/js/components/admin/template/JobTemplateComponent.vue");
/* harmony import */ var _template_EventTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./template/EventTemplateComponent.vue */ "./resources/js/components/admin/template/EventTemplateComponent.vue");
/* harmony import */ var _template_FaqTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./template/FaqTemplateComponent.vue */ "./resources/js/components/admin/template/FaqTemplateComponent.vue");
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }

function _toArray(arr) { return _arrayWithHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }

function _regeneratorRuntime() { "use strict"; /*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/facebook/regenerator/blob/main/LICENSE */ _regeneratorRuntime = function _regeneratorRuntime() { return exports; }; var exports = {}, Op = Object.prototype, hasOwn = Op.hasOwnProperty, $Symbol = "function" == typeof Symbol ? Symbol : {}, iteratorSymbol = $Symbol.iterator || "@@iterator", asyncIteratorSymbol = $Symbol.asyncIterator || "@@asyncIterator", toStringTagSymbol = $Symbol.toStringTag || "@@toStringTag"; function define(obj, key, value) { return Object.defineProperty(obj, key, { value: value, enumerable: !0, configurable: !0, writable: !0 }), obj[key]; } try { define({}, ""); } catch (err) { define = function define(obj, key, value) { return obj[key] = value; }; } function wrap(innerFn, outerFn, self, tryLocsList) { var protoGenerator = outerFn && outerFn.prototype instanceof Generator ? outerFn : Generator, generator = Object.create(protoGenerator.prototype), context = new Context(tryLocsList || []); return generator._invoke = function (innerFn, self, context) { var state = "suspendedStart"; return function (method, arg) { if ("executing" === state) throw new Error("Generator is already running"); if ("completed" === state) { if ("throw" === method) throw arg; return doneResult(); } for (context.method = method, context.arg = arg;;) { var delegate = context.delegate; if (delegate) { var delegateResult = maybeInvokeDelegate(delegate, context); if (delegateResult) { if (delegateResult === ContinueSentinel) continue; return delegateResult; } } if ("next" === context.method) context.sent = context._sent = context.arg;else if ("throw" === context.method) { if ("suspendedStart" === state) throw state = "completed", context.arg; context.dispatchException(context.arg); } else "return" === context.method && context.abrupt("return", context.arg); state = "executing"; var record = tryCatch(innerFn, self, context); if ("normal" === record.type) { if (state = context.done ? "completed" : "suspendedYield", record.arg === ContinueSentinel) continue; return { value: record.arg, done: context.done }; } "throw" === record.type && (state = "completed", context.method = "throw", context.arg = record.arg); } }; }(innerFn, self, context), generator; } function tryCatch(fn, obj, arg) { try { return { type: "normal", arg: fn.call(obj, arg) }; } catch (err) { return { type: "throw", arg: err }; } } exports.wrap = wrap; var ContinueSentinel = {}; function Generator() {} function GeneratorFunction() {} function GeneratorFunctionPrototype() {} var IteratorPrototype = {}; define(IteratorPrototype, iteratorSymbol, function () { return this; }); var getProto = Object.getPrototypeOf, NativeIteratorPrototype = getProto && getProto(getProto(values([]))); NativeIteratorPrototype && NativeIteratorPrototype !== Op && hasOwn.call(NativeIteratorPrototype, iteratorSymbol) && (IteratorPrototype = NativeIteratorPrototype); var Gp = GeneratorFunctionPrototype.prototype = Generator.prototype = Object.create(IteratorPrototype); function defineIteratorMethods(prototype) { ["next", "throw", "return"].forEach(function (method) { define(prototype, method, function (arg) { return this._invoke(method, arg); }); }); } function AsyncIterator(generator, PromiseImpl) { function invoke(method, arg, resolve, reject) { var record = tryCatch(generator[method], generator, arg); if ("throw" !== record.type) { var result = record.arg, value = result.value; return value && "object" == _typeof(value) && hasOwn.call(value, "__await") ? PromiseImpl.resolve(value.__await).then(function (value) { invoke("next", value, resolve, reject); }, function (err) { invoke("throw", err, resolve, reject); }) : PromiseImpl.resolve(value).then(function (unwrapped) { result.value = unwrapped, resolve(result); }, function (error) { return invoke("throw", error, resolve, reject); }); } reject(record.arg); } var previousPromise; this._invoke = function (method, arg) { function callInvokeWithMethodAndArg() { return new PromiseImpl(function (resolve, reject) { invoke(method, arg, resolve, reject); }); } return previousPromise = previousPromise ? previousPromise.then(callInvokeWithMethodAndArg, callInvokeWithMethodAndArg) : callInvokeWithMethodAndArg(); }; } function maybeInvokeDelegate(delegate, context) { var method = delegate.iterator[context.method]; if (undefined === method) { if (context.delegate = null, "throw" === context.method) { if (delegate.iterator["return"] && (context.method = "return", context.arg = undefined, maybeInvokeDelegate(delegate, context), "throw" === context.method)) return ContinueSentinel; context.method = "throw", context.arg = new TypeError("The iterator does not provide a 'throw' method"); } return ContinueSentinel; } var record = tryCatch(method, delegate.iterator, context.arg); if ("throw" === record.type) return context.method = "throw", context.arg = record.arg, context.delegate = null, ContinueSentinel; var info = record.arg; return info ? info.done ? (context[delegate.resultName] = info.value, context.next = delegate.nextLoc, "return" !== context.method && (context.method = "next", context.arg = undefined), context.delegate = null, ContinueSentinel) : info : (context.method = "throw", context.arg = new TypeError("iterator result is not an object"), context.delegate = null, ContinueSentinel); } function pushTryEntry(locs) { var entry = { tryLoc: locs[0] }; 1 in locs && (entry.catchLoc = locs[1]), 2 in locs && (entry.finallyLoc = locs[2], entry.afterLoc = locs[3]), this.tryEntries.push(entry); } function resetTryEntry(entry) { var record = entry.completion || {}; record.type = "normal", delete record.arg, entry.completion = record; } function Context(tryLocsList) { this.tryEntries = [{ tryLoc: "root" }], tryLocsList.forEach(pushTryEntry, this), this.reset(!0); } function values(iterable) { if (iterable) { var iteratorMethod = iterable[iteratorSymbol]; if (iteratorMethod) return iteratorMethod.call(iterable); if ("function" == typeof iterable.next) return iterable; if (!isNaN(iterable.length)) { var i = -1, next = function next() { for (; ++i < iterable.length;) { if (hasOwn.call(iterable, i)) return next.value = iterable[i], next.done = !1, next; } return next.value = undefined, next.done = !0, next; }; return next.next = next; } } return { next: doneResult }; } function doneResult() { return { value: undefined, done: !0 }; } return GeneratorFunction.prototype = GeneratorFunctionPrototype, define(Gp, "constructor", GeneratorFunctionPrototype), define(GeneratorFunctionPrototype, "constructor", GeneratorFunction), GeneratorFunction.displayName = define(GeneratorFunctionPrototype, toStringTagSymbol, "GeneratorFunction"), exports.isGeneratorFunction = function (genFun) { var ctor = "function" == typeof genFun && genFun.constructor; return !!ctor && (ctor === GeneratorFunction || "GeneratorFunction" === (ctor.displayName || ctor.name)); }, exports.mark = function (genFun) { return Object.setPrototypeOf ? Object.setPrototypeOf(genFun, GeneratorFunctionPrototype) : (genFun.__proto__ = GeneratorFunctionPrototype, define(genFun, toStringTagSymbol, "GeneratorFunction")), genFun.prototype = Object.create(Gp), genFun; }, exports.awrap = function (arg) { return { __await: arg }; }, defineIteratorMethods(AsyncIterator.prototype), define(AsyncIterator.prototype, asyncIteratorSymbol, function () { return this; }), exports.AsyncIterator = AsyncIterator, exports.async = function (innerFn, outerFn, self, tryLocsList, PromiseImpl) { void 0 === PromiseImpl && (PromiseImpl = Promise); var iter = new AsyncIterator(wrap(innerFn, outerFn, self, tryLocsList), PromiseImpl); return exports.isGeneratorFunction(outerFn) ? iter : iter.next().then(function (result) { return result.done ? result.value : iter.next(); }); }, defineIteratorMethods(Gp), define(Gp, toStringTagSymbol, "Generator"), define(Gp, iteratorSymbol, function () { return this; }), define(Gp, "toString", function () { return "[object Generator]"; }), exports.keys = function (object) { var keys = []; for (var key in object) { keys.push(key); } return keys.reverse(), function next() { for (; keys.length;) { var key = keys.pop(); if (key in object) return next.value = key, next.done = !1, next; } return next.done = !0, next; }; }, exports.values = values, Context.prototype = { constructor: Context, reset: function reset(skipTempReset) { if (this.prev = 0, this.next = 0, this.sent = this._sent = undefined, this.done = !1, this.delegate = null, this.method = "next", this.arg = undefined, this.tryEntries.forEach(resetTryEntry), !skipTempReset) for (var name in this) { "t" === name.charAt(0) && hasOwn.call(this, name) && !isNaN(+name.slice(1)) && (this[name] = undefined); } }, stop: function stop() { this.done = !0; var rootRecord = this.tryEntries[0].completion; if ("throw" === rootRecord.type) throw rootRecord.arg; return this.rval; }, dispatchException: function dispatchException(exception) { if (this.done) throw exception; var context = this; function handle(loc, caught) { return record.type = "throw", record.arg = exception, context.next = loc, caught && (context.method = "next", context.arg = undefined), !!caught; } for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i], record = entry.completion; if ("root" === entry.tryLoc) return handle("end"); if (entry.tryLoc <= this.prev) { var hasCatch = hasOwn.call(entry, "catchLoc"), hasFinally = hasOwn.call(entry, "finallyLoc"); if (hasCatch && hasFinally) { if (this.prev < entry.catchLoc) return handle(entry.catchLoc, !0); if (this.prev < entry.finallyLoc) return handle(entry.finallyLoc); } else if (hasCatch) { if (this.prev < entry.catchLoc) return handle(entry.catchLoc, !0); } else { if (!hasFinally) throw new Error("try statement without catch or finally"); if (this.prev < entry.finallyLoc) return handle(entry.finallyLoc); } } } }, abrupt: function abrupt(type, arg) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.tryLoc <= this.prev && hasOwn.call(entry, "finallyLoc") && this.prev < entry.finallyLoc) { var finallyEntry = entry; break; } } finallyEntry && ("break" === type || "continue" === type) && finallyEntry.tryLoc <= arg && arg <= finallyEntry.finallyLoc && (finallyEntry = null); var record = finallyEntry ? finallyEntry.completion : {}; return record.type = type, record.arg = arg, finallyEntry ? (this.method = "next", this.next = finallyEntry.finallyLoc, ContinueSentinel) : this.complete(record); }, complete: function complete(record, afterLoc) { if ("throw" === record.type) throw record.arg; return "break" === record.type || "continue" === record.type ? this.next = record.arg : "return" === record.type ? (this.rval = this.arg = record.arg, this.method = "return", this.next = "end") : "normal" === record.type && afterLoc && (this.next = afterLoc), ContinueSentinel; }, finish: function finish(finallyLoc) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.finallyLoc === finallyLoc) return this.complete(entry.completion, entry.afterLoc), resetTryEntry(entry), ContinueSentinel; } }, "catch": function _catch(tryLoc) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.tryLoc === tryLoc) { var record = entry.completion; if ("throw" === record.type) { var thrown = record.arg; resetTryEntry(entry); } return thrown; } } throw new Error("illegal catch attempt"); }, delegateYield: function delegateYield(iterable, resultName, nextLoc) { return this.delegate = { iterator: values(iterable), resultName: resultName, nextLoc: nextLoc }, "next" === this.method && (this.arg = undefined), ContinueSentinel; } }, exports; }

function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//















/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "pageComponent",
  components: {
    DefaultTemplateComponent: _template_DefaultTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_0__["default"],
    HomeTemplateComponent: _template_HomeTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_1__["default"],
    StudentTemplateComponent: _template_StudentTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_2__["default"],
    MentorTemplateComponent: _template_MentorTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_3__["default"],
    CourseTemplateComponent: _template_CourseTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_4__["default"],
    CompanyTemplateComponent: _template_CompanyTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_5__["default"],
    ContactTemplateComponent: _template_ContactTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_6__["default"],
    AboutTemplateComponent: _template_AboutTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_7__["default"],
    HowitworksTemplateComponent: _template_HowitworksTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_8__["default"],
    CareerTemplateComponent: _template_CareerTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_9__["default"],
    ContentTemplateComponent: _template_ContentTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_10__["default"],
    JobTemplateComponent: _template_JobTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_11__["default"],
    EventTemplateComponent: _template_EventTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_12__["default"],
    FaqTemplateComponent: _template_FaqTemplateComponent_vue__WEBPACK_IMPORTED_MODULE_13__["default"]
  },
  props: {
    pageSlug: null
  },
  data: function data() {
    return {
      show_error: false,
      formData: {
        title: "",
        slug: "",
        meta_description: "",
        keyword: "",
        template_id: "",
        status: "active",
        content: {}
      },
      formated_template: [],
      activeTemplate: "DefaultTemplateComponent",
      isChangeTemplate: false,
      isLoading: false,
      pageData: {}
    };
  },
  methods: {
    PageSubmit: function PageSubmit() {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee() {
        var self;
        return _regeneratorRuntime().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                self = _this;
                self.isLoading = true;
                self.getButtonText();

                if (!self.isChangeTemplate) {
                  _context.next = 8;
                  break;
                }

                _context.next = 6;
                return axios.put("/admin/pages/".concat(self.formData.id), self.formData).then(function (res) {
                  self.isLoading = false;
                  self.getButtonText();
                  window.location.href = "/admin/pages";
                })["catch"](function (err) {
                  console.log("error", err);
                  self.isLoading = false;
                });

              case 6:
                _context.next = 10;
                break;

              case 8:
                _context.next = 10;
                return axios.post("/admin/pages", self.formData).then(function (res) {
                  self.isLoading = false;
                  self.getButtonText();
                  window.location.reload();
                })["catch"](function (err) {
                  console.log("error", err);
                });

              case 10:
              case "end":
                return _context.stop();
            }
          }
        }, _callee);
      }))();
    },
    capitalize: function capitalize(_ref) {
      var _ref2 = _toArray(_ref),
          first = _ref2[0],
          rest = _ref2.slice(1);

      return first.toUpperCase() + rest.join("").toLowerCase();
    },
    getButtonText: function getButtonText() {
      if (this.isLoading) {
        return "Loading...";
      } else {
        var _this$pageData;

        if ((_this$pageData = this.pageData) !== null && _this$pageData !== void 0 && _this$pageData.page) {
          return "Update";
        } else {
          return "Create";
        }
      }
    },
    setContent: function setContent(contentData) {
      var pageContentObjKeys = Object.keys(contentData);
      var formContent = this.formData.content;
      pageContentObjKeys.map(function (key) {
        formContent[key] = contentData[key];
      });
    },
    setActiveTemplate: function setActiveTemplate() {
      var _this2 = this;

      // set active template
      var templates = this.pageData.all_templates;
      var selectedTemplate = templates.find(function (template) {
        return template.id == _this2.formData.template_id;
      });
      this.activeTemplate = "".concat(this.capitalize(selectedTemplate.name), "TemplateComponent");
    }
  },
  mounted: function mounted() {
    var self = this;
    var url = "/admin/pages/load-template";

    if (self.pageSlug) {
      url = "/admin/pages/load-template?slug=".concat(this.pageSlug);
    }

    axios.get(url).then(function (res) {
      var _res$data$page, _res$data$page2;

      self.pageData = res.data; // deactivate change template

      if (res.data.type == "edit") {
        self.isChangeTemplate = true;
        var pageObj = res.data.page;
        var reqObj = Object.keys(res.data.page);
        var formObj = self.formData;
        reqObj.map(function (key) {
          formObj[key] = pageObj[key];
        });
        self.formData.type = res.data.type;
      } // By changing template will chnage the content


      if ((_res$data$page = res.data.page) !== null && _res$data$page !== void 0 && _res$data$page.template_id) {
        self.formData.template_id = res.data.page.template_id; // set active template

        var templates = res.data.all_templates;
        var selectedTemplate = templates.find(function (template) {
          return template.id == self.formData.template_id;
        });
        self.activeTemplate = "".concat(self.capitalize(selectedTemplate.name), "TemplateComponent");
      } else {
        var allTemplates = res.data.all_templates;

        var _selectedTemplate = allTemplates.find(function (_ref3) {
          var name = _ref3.name;
          return name == "default";
        });

        self.formData.template_id = _selectedTemplate.id;
        self.formData.type = "create";
      } // Get page status data and set default


      if ((_res$data$page2 = res.data.page) !== null && _res$data$page2 !== void 0 && _res$data$page2.status) {
        var _res$data$page3;

        self.formData.status = (_res$data$page3 = res.data.page) === null || _res$data$page3 === void 0 ? void 0 : _res$data$page3.status;
      } else {
        var allStatus = res.data.pageStatus;
        self.formData.status = allStatus[0];
      }
    }); // const templates = self.pageData.all_templates;
    // const formated_template = templates.map((item) => {
    //   return {
    //     id: item.id,
    //     text: item.name,
    //   };
    // });
  },
  validations: {
    formData: {
      title: {
        required: vuelidate_lib_validators__WEBPACK_IMPORTED_MODULE_14__.required,
        minLength: (0,vuelidate_lib_validators__WEBPACK_IMPORTED_MODULE_14__.minLength)(2)
      },
      slug: {
        required: vuelidate_lib_validators__WEBPACK_IMPORTED_MODULE_14__.required
      },
      content: {
        required: vuelidate_lib_validators__WEBPACK_IMPORTED_MODULE_14__.required
      },
      template_id: {
        required: vuelidate_lib_validators__WEBPACK_IMPORTED_MODULE_14__.required
      },
      status: {
        required: vuelidate_lib_validators__WEBPACK_IMPORTED_MODULE_14__.required
      }
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/AboutTemplateComponent.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/AboutTemplateComponent.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "AboutUsTemplateComponent",
  props: {
    body: null
  },
  data: function data() {
    return {
      content: {},
      banner_title: "",
      banner_paragraph: "",
      button_text: "",
      button_url: "",
      banner_image: "",
      get_sponsorship_first_image: "",
      get_sponsorship_second_image: "",
      get_sponsorship_title: "",
      get_sponsorship_subtitle: "",
      get_sponsorship_paragraph: "",
      get_sponsorship_button_text: "",
      get_sponsorship_button_url: "",
      video_presentation_title: "",
      youtube_presentation_url: "",
      one_to_one_banner_image: "",
      one_to_one_title: "",
      one_to_one_paragraph: "",
      one_to_one_first_title: "",
      one_to_one_first_paragraph: "",
      one_to_one_second_title: "",
      one_to_one_second_paragraph: "",
      one_to_one_button_text: "",
      one_to_one_button_url: "",
      immediately_top_title: "",
      immediately_sub_title: "",
      immediately_paragraph: "",
      immediately_button_text: "",
      immediately_button_url: "",
      immediately_banner_image: ""
    };
  },
  methods: {
    uploadimage: function uploadimage(selector, inputId) {
      uploadFileCustom(selector, "page");
      var allData = this.$data;
      var inputVal = $("#".concat(inputId));
      inputVal.change(function () {
        allData[inputId] = inputVal.val();
      });
    },
    updateAllData: function updateAllData() {
      var contentData = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

      if (Object.keys(contentData).length > 0) {
        var oldVal = this.$data;
        var reqObj = Object.keys(contentData);
        reqObj.map(function (key) {
          oldVal[key] = contentData[key];
        });
      }
    }
  },
  watch: {
    $data: {
      handler: function handler(val, oldVal) {
        this.$emit("getContents", val);
      },
      deep: true
    }
  },
  mounted: function mounted() {
    var _this = this;

    var self = this;
    setTimeout(function () {
      var _this$body$page;

      self.updateAllData((_this$body$page = _this.body.page) === null || _this$body$page === void 0 ? void 0 : _this$body$page.content);
    }, 880);
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/CareerTemplateComponent.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/CareerTemplateComponent.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "CareerTemplateComponent",
  props: {
    body: null
  },
  data: function data() {
    return {
      content: {},
      banner_title: "",
      banner_image: "",
      search_box_title: "",
      featured_job_title: "",
      featured_job_button_text: "",
      experienced_people_top_title: "",
      experienced_people_paragraph: "",
      experienced_people_button_text: "",
      experienced_people_button_url: ""
    };
  },
  methods: {
    uploadimage: function uploadimage(selector, inputId) {
      uploadFileCustom(selector, "page");
      var allData = this.$data;
      var inputVal = $("#".concat(inputId));
      inputVal.change(function () {
        allData[inputId] = inputVal.val();
      });
    },
    updateAllData: function updateAllData() {
      var contentData = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

      if (Object.keys(contentData).length > 0) {
        var oldVal = this.$data;
        var reqObj = Object.keys(contentData);
        reqObj.map(function (key) {
          oldVal[key] = contentData[key];
        });
      }
    }
  },
  watch: {
    $data: {
      handler: function handler(val, oldVal) {
        this.$emit("getContents", val);
      },
      deep: true
    }
  },
  mounted: function mounted() {
    var _this = this;

    var self = this;
    setTimeout(function () {
      var _this$body$page;

      self.updateAllData((_this$body$page = _this.body.page) === null || _this$body$page === void 0 ? void 0 : _this$body$page.content);
    }, 880);
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/CompanyTemplateComponent.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/CompanyTemplateComponent.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "CompanyTemplateComponent",
  props: {
    body: null
  },
  data: function data() {
    return {
      content: {},
      banner_title: "",
      banner_paragraph: "",
      button_text: "",
      button_url: "",
      banner_image: "",
      talent_acquisition_top_title: "",
      talent_acquisition_first_icon: "",
      talent_acquisition_first_title: "",
      talent_acquisition_first_paragraph: "",
      talent_acquisition_second_icon: "",
      talent_acquisition_second_title: "",
      talent_acquisition_second_paragraph: "",
      talent_acquisition_third_icon: "",
      talent_acquisition_third_title: "",
      talent_acquisition_third_paragraph: "",
      accelerate_title: "",
      accelerate_subtitle: "",
      accelerate_first_paragraph: "",
      accelerate_second_paragraph: "",
      accelerate_third_paragraph: "",
      discover_top_title: "",
      discover_first_icon: "",
      discover_first_title: "",
      discover_first_paragraph: "",
      discover_second_icon: "",
      discover_second_title: "",
      discover_second_paragraph: "",
      discover_third_icon: "",
      discover_third_title: "",
      discover_third_paragraph: "",
      discover_fourth_icon: "",
      discover_fourth_title: "",
      discover_fouth_paragraph: "",
      discover_fifth_icon: "",
      discover_fifth_title: "",
      discover_fifth_paragraph: "",
      discover_sixth_icon: "",
      discover_sixth_title: "",
      discover_sixth_paragraph: "",
      immediately_top_title: "",
      immediately_sub_title: "",
      immediately_paragraph: "",
      immediately_button_text: "",
      immediately_button_url: "",
      immediately_banner_image: ""
    };
  },
  methods: {
    uploadimage: function uploadimage(selector, inputId) {
      uploadFileCustom(selector, "page");
      var allData = this.$data;
      var inputVal = $("#".concat(inputId));
      inputVal.change(function () {
        allData[inputId] = inputVal.val();
      });
    },
    updateAllData: function updateAllData() {
      var contentData = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

      if (Object.keys(contentData).length > 0) {
        var oldVal = this.$data;
        var reqObj = Object.keys(contentData);
        reqObj.map(function (key) {
          oldVal[key] = contentData[key];
        });
      }
    }
  },
  watch: {
    $data: {
      handler: function handler(val, oldVal) {
        this.$emit("getContents", val);
      },
      deep: true
    }
  },
  mounted: function mounted() {
    var _this = this;

    var self = this;
    setTimeout(function () {
      var _this$body$page;

      self.updateAllData((_this$body$page = _this.body.page) === null || _this$body$page === void 0 ? void 0 : _this$body$page.content);
    }, 880);
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/ContactTemplateComponent.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/ContactTemplateComponent.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "ContactUsTemplateComponent",
  props: {
    body: null
  },
  data: function data() {
    return {
      content: {},
      top_title: "",
      top_paragraph: "",
      form_top_title: "",
      form_top_paragraph: "",
      button_text: "",
      button_url: "",
      head_office_title: "",
      head_office_addess: "",
      head_office_phones: "",
      head_office_email: "",
      branch_office1_title: "",
      branch_office1_addess: "",
      branch_office1_phones: "",
      branch_office1_email: "",
      branch_office2_title: "",
      branch_office2_addess: "",
      branch_office2_phones: "",
      branch_office2_email: ""
    };
  },
  methods: {
    uploadimage: function uploadimage(selector, inputId) {
      uploadFileCustom(selector, "page");
      var allData = this.$data;
      var inputVal = $("#".concat(inputId));
      inputVal.change(function () {
        allData[inputId] = inputVal.val();
      });
    },
    updateAllData: function updateAllData() {
      var contentData = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

      if (Object.keys(contentData).length > 0) {
        var oldVal = this.$data;
        var reqObj = Object.keys(contentData);
        reqObj.map(function (key) {
          oldVal[key] = contentData[key];
        });
      }
    }
  },
  watch: {
    $data: {
      handler: function handler(val, oldVal) {
        this.$emit("getContents", val);
      },
      deep: true
    }
  },
  mounted: function mounted() {
    var _this = this;

    var self = this;
    setTimeout(function () {
      var _this$body$page;

      self.updateAllData((_this$body$page = _this.body.page) === null || _this$body$page === void 0 ? void 0 : _this$body$page.content);
    }, 880);
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/ContentTemplateComponent.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/ContentTemplateComponent.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "ContentTemplateComponent",
  props: {
    body: null
  },
  data: function data() {
    return {
      content: {},
      banner_title: "",
      banner_paragraph: "",
      banner_image: "",
      get_sponsorship_first_image: "",
      get_sponsorship_second_image: "",
      get_sponsorship_third_image: "",
      get_sponsorship_title: "",
      get_sponsorship_subtitle: "",
      get_sponsorship_paragraph: "",
      get_sponsorship_text: "",
      top_firm_title: "",
      top_firm_button_text: ""
    };
  },
  methods: {
    uploadimage: function uploadimage(selector, inputId) {
      uploadFileCustom(selector, "page");
      var allData = this.$data;
      var inputVal = $("#".concat(inputId));
      inputVal.change(function () {
        allData[inputId] = inputVal.val();
      });
    },
    updateAllData: function updateAllData() {
      var contentData = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

      if (Object.keys(contentData).length > 0) {
        var oldVal = this.$data;
        var reqObj = Object.keys(contentData);
        reqObj.map(function (key) {
          oldVal[key] = contentData[key];
        });
      }
    }
  },
  watch: {
    $data: {
      handler: function handler(val, oldVal) {
        this.$emit("getContents", val);
      },
      deep: true
    }
  },
  mounted: function mounted() {
    var _this = this;

    var self = this;
    setTimeout(function () {
      var _this$body$page;

      self.updateAllData((_this$body$page = _this.body.page) === null || _this$body$page === void 0 ? void 0 : _this$body$page.content);
    }, 880);
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/CourseTemplateComponent.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/CourseTemplateComponent.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "CourseTemplateComponent",
  props: {
    body: null
  },
  data: function data() {
    return {
      content: {},
      banner_title: "",
      banner_paragraph: "",
      button_text: "",
      button_url: "",
      banner_image: "",
      trending_course_title_top: "",
      trending_course_title_bottom: "",
      trending_course_button_text: "",
      trending_course_button_url: "",
      level_up_skills_top_label: '',
      level_up_skills_title_top: '',
      level_up_skills_title_bottom: '',
      level_up_skills_paragraph: '',
      level_up_skills_button_text: '',
      online_learning_left_image: '',
      online_learning_title_top: '',
      online_learning_paragraph: '',
      online_learning_button_text: '',
      see_our_growth_right_image: '',
      see_our_growth_title_top: '',
      see_our_growth_title_second: '',
      see_our_growth_title_last: '',
      see_our_growth_paragraph: '',
      see_our_growth_button_text: ''
    };
  },
  methods: {
    uploadimage: function uploadimage(selector, inputId) {
      uploadFileCustom(selector, "page");
      var allData = this.$data;
      var inputVal = $("#".concat(inputId));
      inputVal.change(function () {
        allData[inputId] = inputVal.val();
      });
    },
    updateAllData: function updateAllData() {
      var contentData = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

      if (Object.keys(contentData).length > 0) {
        var oldVal = this.$data;
        var reqObj = Object.keys(contentData);
        reqObj.map(function (key) {
          oldVal[key] = contentData[key];
        });
      }
    }
  },
  watch: {
    $data: {
      handler: function handler(val, oldVal) {
        this.$emit("getContents", val);
      },
      deep: true
    }
  },
  mounted: function mounted() {
    var _this = this;

    var self = this;
    setTimeout(function () {
      var _this$body$page;

      self.updateAllData((_this$body$page = _this.body.page) === null || _this$body$page === void 0 ? void 0 : _this$body$page.content);
    }, 880);
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/DefaultTemplateComponent.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/DefaultTemplateComponent.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "DefaultTemplateComponent",
  props: {
    body: null
  },
  data: function data() {
    return {
      content: "",
      editorConfig: {
        // ckEditor configuration
        height: "350px"
      }
    };
  },
  methods: {
    setValue: function setValue(contentData) {
      var self = this;
      self.content = contentData;
    }
  },
  watch: {
    content: function content() {
      this.$emit("getContents", {
        content: this.content
      });
    }
  },
  mounted: function mounted() {
    var self = this;
    setTimeout(function () {
      self.setValue(self.body.page ? self.body.page.content : "");
    }, 700);
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/EventTemplateComponent.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/EventTemplateComponent.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "EventTemplateComponent",
  props: {
    body: null
  },
  data: function data() {
    return {
      content: {},
      banner_title: "",
      banner_paragraph: "",
      banner_button_text: "",
      banner_image: "",
      trending_event_title: ""
    };
  },
  methods: {
    uploadimage: function uploadimage(selector, inputId) {
      uploadFileCustom(selector, "page");
      var allData = this.$data;
      var inputVal = $("#".concat(inputId));
      inputVal.change(function () {
        allData[inputId] = inputVal.val();
      });
    },
    updateAllData: function updateAllData() {
      var contentData = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

      if (Object.keys(contentData).length > 0) {
        var oldVal = this.$data;
        var reqObj = Object.keys(contentData);
        reqObj.map(function (key) {
          oldVal[key] = contentData[key];
        });
      }
    }
  },
  watch: {
    $data: {
      handler: function handler(val, oldVal) {
        this.$emit("getContents", val);
      },
      deep: true
    }
  },
  mounted: function mounted() {
    var _this = this;

    var self = this;
    setTimeout(function () {
      var _this$body$page;

      self.updateAllData((_this$body$page = _this.body.page) === null || _this$body$page === void 0 ? void 0 : _this$body$page.content);
    }, 880);
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/FaqTemplateComponent.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/FaqTemplateComponent.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "PricingTemplateComponent",
  props: {
    body: null
  },
  data: function data() {
    return {
      content: {},
      banner_title: "",
      banner_image: ""
    };
  },
  methods: {
    uploadimage: function uploadimage(selector, inputId) {
      uploadFileCustom(selector, "page");
      var allData = this.$data;
      var inputVal = $("#".concat(inputId));
      inputVal.change(function () {
        allData[inputId] = inputVal.val();
      });
    },
    updateAllData: function updateAllData() {
      var contentData = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

      if (Object.keys(contentData).length > 0) {
        var oldVal = this.$data;
        var reqObj = Object.keys(contentData);
        reqObj.map(function (key) {
          oldVal[key] = contentData[key];
        });
      }
    }
  },
  watch: {
    $data: {
      handler: function handler(val, oldVal) {
        this.$emit("getContents", val);
      },
      deep: true
    }
  },
  mounted: function mounted() {
    var _this = this;

    var self = this;
    setTimeout(function () {
      var _this$body$page;

      self.updateAllData((_this$body$page = _this.body.page) === null || _this$body$page === void 0 ? void 0 : _this$body$page.content);
    }, 880);
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/HomeTemplateComponent.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/HomeTemplateComponent.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "HomeTemplateComponent",
  props: {
    body: null
  },
  data: function data() {
    return {
      content: {},
      banner_title: "",
      banner_paragraph: "",
      button_text: "",
      button_url: "",
      banner_image: "",
      first_title: "",
      first_paragraph: "",
      second_title: "",
      second_paragraph: "",
      third_title: "",
      third_paragraph: "",
      mentor_title: "",
      mentor_paragraph: "",
      mentor_button_text: "",
      mentor_button_url: "",
      discover_course_title: "",
      discover_course_paragraph: "",
      discover_course_first_title: "",
      discover_course_first_paragraph: "",
      discover_course_second_title: "",
      discover_course_second_paragraph: "",
      discover_course_third_title: "",
      discover_course_third_paragraph: "",
      discover_course_button_text: "",
      discover_course_button_url: "",
      discover_course_banner_image: "",
      video_presentation_title: "",
      youtube_presentation_url: "",
      company_title: "",
      company_button_text: "",
      company_button_url: "",
      company_logo_1: "",
      company_logo_2: "",
      company_logo_3: "",
      company_logo_4: "",
      company_logo_5: "",
      company_logo_6: "",
      company_logo_7: "",
      company_logo_8: "",
      get_started_image: "",
      get_started_title: "",
      get_started_paragraph: "",
      get_started_button_text: "",
      get_started_button_url: "",
      tips_title: "",
      tips_button_text: "",
      tips_button_url: ""
    };
  },
  methods: {
    uploadimage: function uploadimage(selector, inputId) {
      uploadFileCustom(selector, "page");
      var allData = this.$data;
      var inputVal = $("#".concat(inputId));
      inputVal.change(function () {
        allData[inputId] = inputVal.val();
      });
    },
    updateAllData: function updateAllData() {
      var contentData = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

      if (Object.keys(contentData).length > 0) {
        var oldVal = this.$data;
        var reqObj = Object.keys(contentData);
        reqObj.map(function (key) {
          oldVal[key] = contentData[key];
        });
      }
    }
  },
  watch: {
    $data: {
      handler: function handler(val, oldVal) {
        this.$emit("getContents", val);
      },
      deep: true
    }
  },
  mounted: function mounted() {
    var _this = this;

    var self = this;
    setTimeout(function () {
      var _this$body$page;

      self.updateAllData((_this$body$page = _this.body.page) === null || _this$body$page === void 0 ? void 0 : _this$body$page.content);
    }, 880);
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/HowitworksTemplateComponent.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/HowitworksTemplateComponent.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "HowItWorksTemplateComponent",
  props: {
    body: null
  },
  data: function data() {
    return {
      content: {},
      banner_title: "",
      banner_paragraph: "",
      banner_image: "",
      accelerate_title: "",
      accelerate_subtitle: "",
      accelerate_first_paragraph: "",
      accelerate_second_paragraph: "",
      accelerate_third_paragraph: "",
      accelerate_banner_image: "",
      success_your_career_top_title: "",
      success_your_career_image: "",
      success_your_career_title: "",
      success_your_career_subtitle: "",
      success_your_career_paragraph: "",
      success_your_career_button_text: "",
      success_your_career_button_url: "",
      take_your_course_title: "",
      take_your_course_subtitle: "",
      take_your_course_paragraph: "",
      take_your_course_button_text: "",
      take_your_course_button_url: "",
      take_your_course_image: "",
      complete_your_task_image: "",
      complete_your_task_title: "",
      complete_your_task_subtitle: "",
      complete_your_task_paragraph: "",
      complete_your_task_button_text: "",
      complete_your_task_button_url: ""
    };
  },
  methods: {
    uploadimage: function uploadimage(selector, inputId) {
      uploadFileCustom(selector, "page");
      var allData = this.$data;
      var inputVal = $("#".concat(inputId));
      inputVal.change(function () {
        allData[inputId] = inputVal.val();
      });
    },
    updateAllData: function updateAllData() {
      var contentData = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

      if (Object.keys(contentData).length > 0) {
        var oldVal = this.$data;
        var reqObj = Object.keys(contentData);
        reqObj.map(function (key) {
          oldVal[key] = contentData[key];
        });
      }
    }
  },
  watch: {
    $data: {
      handler: function handler(val, oldVal) {
        this.$emit("getContents", val);
      },
      deep: true
    }
  },
  mounted: function mounted() {
    var _this = this;

    var self = this;
    setTimeout(function () {
      var _this$body$page;

      self.updateAllData((_this$body$page = _this.body.page) === null || _this$body$page === void 0 ? void 0 : _this$body$page.content);
    }, 880);
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/JobTemplateComponent.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/JobTemplateComponent.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "JobTemplateComponent",
  props: {
    body: null
  },
  data: function data() {
    return {
      content: {},
      banner_title: "",
      banner_paragraph: "",
      banner_button_text: "",
      banner_image: "",
      trending_opportunity_title: ""
    };
  },
  methods: {
    uploadimage: function uploadimage(selector, inputId) {
      uploadFileCustom(selector, "page");
      var allData = this.$data;
      var inputVal = $("#".concat(inputId));
      inputVal.change(function () {
        allData[inputId] = inputVal.val();
      });
    },
    updateAllData: function updateAllData() {
      var contentData = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

      if (Object.keys(contentData).length > 0) {
        var oldVal = this.$data;
        var reqObj = Object.keys(contentData);
        reqObj.map(function (key) {
          oldVal[key] = contentData[key];
        });
      }
    }
  },
  watch: {
    $data: {
      handler: function handler(val, oldVal) {
        this.$emit("getContents", val);
      },
      deep: true
    }
  },
  mounted: function mounted() {
    var _this = this;

    var self = this;
    setTimeout(function () {
      var _this$body$page;

      self.updateAllData((_this$body$page = _this.body.page) === null || _this$body$page === void 0 ? void 0 : _this$body$page.content);
    }, 880);
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/MentorTemplateComponent.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/MentorTemplateComponent.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "MentorTemplateComponent",
  props: {
    body: null
  },
  data: function data() {
    return {
      content: {},
      banner_title: "",
      banner_paragraph: "",
      button_text: "",
      button_url: "",
      banner_image: "",
      share_knowledge_title: "",
      share_knowledge_first_icon: "",
      share_knowledge_first_title: "",
      share_knowledge_first_paragraph: "",
      share_knowledge_second_icon: "",
      share_knowledge_second_title: "",
      share_knowledge_second_paragraph: "",
      share_knowledge_third_icon: "",
      share_knowledge_third_title: "",
      share_knowledge_third_paragraph: "",
      share_expertise_banner_image: "",
      share_expertise_title: "",
      share_expertise_paragraph: "",
      share_expertise_first_title: "",
      share_expertise_first_paragraph: "",
      share_expertise_second_title: "",
      share_expertise_second_paragraph: "",
      video_presentation_title: "",
      youtube_presentation_url: "",
      become_a_mentor_title: "",
      become_a_mentor_button_text: "",
      become_a_mentor_button_url: "",
      become_a_mentor_first_image: "",
      become_a_mentor_first_title: "",
      become_a_mentor_first_paragraph: "",
      become_a_mentor_second_image: "",
      become_a_mentor_second_title: "",
      become_a_mentor_second_paragraph: "",
      become_a_mentor_third_image: "",
      become_a_mentor_third_title: "",
      become_a_mentor_third_paragraph: "",
      become_a_partner_image: "",
      become_a_partner_title: "",
      become_a_partner_subtitle: "",
      become_a_partner_paragraph: "",
      become_a_partner_button_text: "",
      become_a_partner_button_url: ""
    };
  },
  methods: {
    uploadimage: function uploadimage(selector, inputId) {
      uploadFileCustom(selector, "page");
      var allData = this.$data;
      var inputVal = $("#".concat(inputId));
      inputVal.change(function () {
        allData[inputId] = inputVal.val();
      });
    },
    updateAllData: function updateAllData() {
      var contentData = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

      if (Object.keys(contentData).length > 0) {
        var oldVal = this.$data;
        var reqObj = Object.keys(contentData);
        reqObj.map(function (key) {
          oldVal[key] = contentData[key];
        });
      }
    }
  },
  watch: {
    $data: {
      handler: function handler(val, oldVal) {
        this.$emit("getContents", val);
      },
      deep: true
    }
  },
  mounted: function mounted() {
    var _this = this;

    var self = this;
    setTimeout(function () {
      var _this$body$page;

      self.updateAllData((_this$body$page = _this.body.page) === null || _this$body$page === void 0 ? void 0 : _this$body$page.content);
    }, 880);
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/StudentTemplateComponent.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/StudentTemplateComponent.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "StudentTemplateComponent",
  props: {
    body: null
  },
  data: function data() {
    return {
      content: {},
      banner_title: "",
      banner_paragraph: "",
      button_text: "",
      button_url: "",
      banner_image: "",
      event_section_title: "",
      explore_button_text: "",
      explore_button_url: "",
      career_path_banner_image: "",
      career_path_title: "",
      career_path_paragraph: "",
      career_path_first_title: "",
      career_path_first_paragraph: "",
      career_path_second_title: "",
      career_path_second_paragraph: "",
      career_path_button_text: "",
      career_path_button_url: "",
      student_subscription_title: "",
      student_subscription_paragraph: ""
    };
  },
  methods: {
    uploadimage: function uploadimage(selector, inputId) {
      uploadFileCustom(selector, "page");
      var allData = this.$data;
      var inputVal = $("#".concat(inputId));
      inputVal.change(function () {
        allData[inputId] = inputVal.val();
      });
    },
    updateAllData: function updateAllData() {
      var contentData = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

      if (Object.keys(contentData).length > 0) {
        var oldVal = this.$data;
        var reqObj = Object.keys(contentData);
        reqObj.map(function (key) {
          oldVal[key] = contentData[key];
        });
      }
    }
  },
  watch: {
    $data: {
      handler: function handler(val, oldVal) {
        this.$emit("getContents", val);
      },
      deep: true
    }
  },
  mounted: function mounted() {
    var _this = this;

    var self = this;
    setTimeout(function () {
      var _this$body$page;

      self.updateAllData((_this$body$page = _this.body.page) === null || _this$body$page === void 0 ? void 0 : _this$body$page.content);
    }, 880);
  }
});

/***/ }),

/***/ "./resources/js/components/admin/PageComponent.vue":
/*!*********************************************************!*\
  !*** ./resources/js/components/admin/PageComponent.vue ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _PageComponent_vue_vue_type_template_id_bec8895a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./PageComponent.vue?vue&type=template&id=bec8895a& */ "./resources/js/components/admin/PageComponent.vue?vue&type=template&id=bec8895a&");
/* harmony import */ var _PageComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./PageComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/PageComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _PageComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _PageComponent_vue_vue_type_template_id_bec8895a___WEBPACK_IMPORTED_MODULE_0__.render,
  _PageComponent_vue_vue_type_template_id_bec8895a___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/PageComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/template/AboutTemplateComponent.vue":
/*!***************************************************************************!*\
  !*** ./resources/js/components/admin/template/AboutTemplateComponent.vue ***!
  \***************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _AboutTemplateComponent_vue_vue_type_template_id_4e399370___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AboutTemplateComponent.vue?vue&type=template&id=4e399370& */ "./resources/js/components/admin/template/AboutTemplateComponent.vue?vue&type=template&id=4e399370&");
/* harmony import */ var _AboutTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./AboutTemplateComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/template/AboutTemplateComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _AboutTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _AboutTemplateComponent_vue_vue_type_template_id_4e399370___WEBPACK_IMPORTED_MODULE_0__.render,
  _AboutTemplateComponent_vue_vue_type_template_id_4e399370___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/template/AboutTemplateComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/template/CareerTemplateComponent.vue":
/*!****************************************************************************!*\
  !*** ./resources/js/components/admin/template/CareerTemplateComponent.vue ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _CareerTemplateComponent_vue_vue_type_template_id_52e513db___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./CareerTemplateComponent.vue?vue&type=template&id=52e513db& */ "./resources/js/components/admin/template/CareerTemplateComponent.vue?vue&type=template&id=52e513db&");
/* harmony import */ var _CareerTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./CareerTemplateComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/template/CareerTemplateComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _CareerTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _CareerTemplateComponent_vue_vue_type_template_id_52e513db___WEBPACK_IMPORTED_MODULE_0__.render,
  _CareerTemplateComponent_vue_vue_type_template_id_52e513db___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/template/CareerTemplateComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/template/CompanyTemplateComponent.vue":
/*!*****************************************************************************!*\
  !*** ./resources/js/components/admin/template/CompanyTemplateComponent.vue ***!
  \*****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _CompanyTemplateComponent_vue_vue_type_template_id_5b6fe800___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./CompanyTemplateComponent.vue?vue&type=template&id=5b6fe800& */ "./resources/js/components/admin/template/CompanyTemplateComponent.vue?vue&type=template&id=5b6fe800&");
/* harmony import */ var _CompanyTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./CompanyTemplateComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/template/CompanyTemplateComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _CompanyTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _CompanyTemplateComponent_vue_vue_type_template_id_5b6fe800___WEBPACK_IMPORTED_MODULE_0__.render,
  _CompanyTemplateComponent_vue_vue_type_template_id_5b6fe800___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/template/CompanyTemplateComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/template/ContactTemplateComponent.vue":
/*!*****************************************************************************!*\
  !*** ./resources/js/components/admin/template/ContactTemplateComponent.vue ***!
  \*****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _ContactTemplateComponent_vue_vue_type_template_id_c5679786___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ContactTemplateComponent.vue?vue&type=template&id=c5679786& */ "./resources/js/components/admin/template/ContactTemplateComponent.vue?vue&type=template&id=c5679786&");
/* harmony import */ var _ContactTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ContactTemplateComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/template/ContactTemplateComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _ContactTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _ContactTemplateComponent_vue_vue_type_template_id_c5679786___WEBPACK_IMPORTED_MODULE_0__.render,
  _ContactTemplateComponent_vue_vue_type_template_id_c5679786___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/template/ContactTemplateComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/template/ContentTemplateComponent.vue":
/*!*****************************************************************************!*\
  !*** ./resources/js/components/admin/template/ContentTemplateComponent.vue ***!
  \*****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _ContentTemplateComponent_vue_vue_type_template_id_8517f4f8___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ContentTemplateComponent.vue?vue&type=template&id=8517f4f8& */ "./resources/js/components/admin/template/ContentTemplateComponent.vue?vue&type=template&id=8517f4f8&");
/* harmony import */ var _ContentTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ContentTemplateComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/template/ContentTemplateComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _ContentTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _ContentTemplateComponent_vue_vue_type_template_id_8517f4f8___WEBPACK_IMPORTED_MODULE_0__.render,
  _ContentTemplateComponent_vue_vue_type_template_id_8517f4f8___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/template/ContentTemplateComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/template/CourseTemplateComponent.vue":
/*!****************************************************************************!*\
  !*** ./resources/js/components/admin/template/CourseTemplateComponent.vue ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _CourseTemplateComponent_vue_vue_type_template_id_014ea144___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./CourseTemplateComponent.vue?vue&type=template&id=014ea144& */ "./resources/js/components/admin/template/CourseTemplateComponent.vue?vue&type=template&id=014ea144&");
/* harmony import */ var _CourseTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./CourseTemplateComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/template/CourseTemplateComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _CourseTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _CourseTemplateComponent_vue_vue_type_template_id_014ea144___WEBPACK_IMPORTED_MODULE_0__.render,
  _CourseTemplateComponent_vue_vue_type_template_id_014ea144___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/template/CourseTemplateComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/template/DefaultTemplateComponent.vue":
/*!*****************************************************************************!*\
  !*** ./resources/js/components/admin/template/DefaultTemplateComponent.vue ***!
  \*****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _DefaultTemplateComponent_vue_vue_type_template_id_83205e88___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./DefaultTemplateComponent.vue?vue&type=template&id=83205e88& */ "./resources/js/components/admin/template/DefaultTemplateComponent.vue?vue&type=template&id=83205e88&");
/* harmony import */ var _DefaultTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./DefaultTemplateComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/template/DefaultTemplateComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _DefaultTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _DefaultTemplateComponent_vue_vue_type_template_id_83205e88___WEBPACK_IMPORTED_MODULE_0__.render,
  _DefaultTemplateComponent_vue_vue_type_template_id_83205e88___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/template/DefaultTemplateComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/template/EventTemplateComponent.vue":
/*!***************************************************************************!*\
  !*** ./resources/js/components/admin/template/EventTemplateComponent.vue ***!
  \***************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _EventTemplateComponent_vue_vue_type_template_id_6c0bc2fa___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./EventTemplateComponent.vue?vue&type=template&id=6c0bc2fa& */ "./resources/js/components/admin/template/EventTemplateComponent.vue?vue&type=template&id=6c0bc2fa&");
/* harmony import */ var _EventTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./EventTemplateComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/template/EventTemplateComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _EventTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _EventTemplateComponent_vue_vue_type_template_id_6c0bc2fa___WEBPACK_IMPORTED_MODULE_0__.render,
  _EventTemplateComponent_vue_vue_type_template_id_6c0bc2fa___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/template/EventTemplateComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/template/FaqTemplateComponent.vue":
/*!*************************************************************************!*\
  !*** ./resources/js/components/admin/template/FaqTemplateComponent.vue ***!
  \*************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _FaqTemplateComponent_vue_vue_type_template_id_7d1bd7f2___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./FaqTemplateComponent.vue?vue&type=template&id=7d1bd7f2& */ "./resources/js/components/admin/template/FaqTemplateComponent.vue?vue&type=template&id=7d1bd7f2&");
/* harmony import */ var _FaqTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./FaqTemplateComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/template/FaqTemplateComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _FaqTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _FaqTemplateComponent_vue_vue_type_template_id_7d1bd7f2___WEBPACK_IMPORTED_MODULE_0__.render,
  _FaqTemplateComponent_vue_vue_type_template_id_7d1bd7f2___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/template/FaqTemplateComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/template/HomeTemplateComponent.vue":
/*!**************************************************************************!*\
  !*** ./resources/js/components/admin/template/HomeTemplateComponent.vue ***!
  \**************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _HomeTemplateComponent_vue_vue_type_template_id_3549649a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./HomeTemplateComponent.vue?vue&type=template&id=3549649a& */ "./resources/js/components/admin/template/HomeTemplateComponent.vue?vue&type=template&id=3549649a&");
/* harmony import */ var _HomeTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./HomeTemplateComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/template/HomeTemplateComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _HomeTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _HomeTemplateComponent_vue_vue_type_template_id_3549649a___WEBPACK_IMPORTED_MODULE_0__.render,
  _HomeTemplateComponent_vue_vue_type_template_id_3549649a___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/template/HomeTemplateComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/template/HowitworksTemplateComponent.vue":
/*!********************************************************************************!*\
  !*** ./resources/js/components/admin/template/HowitworksTemplateComponent.vue ***!
  \********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _HowitworksTemplateComponent_vue_vue_type_template_id_4b62d512___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./HowitworksTemplateComponent.vue?vue&type=template&id=4b62d512& */ "./resources/js/components/admin/template/HowitworksTemplateComponent.vue?vue&type=template&id=4b62d512&");
/* harmony import */ var _HowitworksTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./HowitworksTemplateComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/template/HowitworksTemplateComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _HowitworksTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _HowitworksTemplateComponent_vue_vue_type_template_id_4b62d512___WEBPACK_IMPORTED_MODULE_0__.render,
  _HowitworksTemplateComponent_vue_vue_type_template_id_4b62d512___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/template/HowitworksTemplateComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/template/JobTemplateComponent.vue":
/*!*************************************************************************!*\
  !*** ./resources/js/components/admin/template/JobTemplateComponent.vue ***!
  \*************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _JobTemplateComponent_vue_vue_type_template_id_434e7c80___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./JobTemplateComponent.vue?vue&type=template&id=434e7c80& */ "./resources/js/components/admin/template/JobTemplateComponent.vue?vue&type=template&id=434e7c80&");
/* harmony import */ var _JobTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./JobTemplateComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/template/JobTemplateComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _JobTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _JobTemplateComponent_vue_vue_type_template_id_434e7c80___WEBPACK_IMPORTED_MODULE_0__.render,
  _JobTemplateComponent_vue_vue_type_template_id_434e7c80___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/template/JobTemplateComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/template/MentorTemplateComponent.vue":
/*!****************************************************************************!*\
  !*** ./resources/js/components/admin/template/MentorTemplateComponent.vue ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _MentorTemplateComponent_vue_vue_type_template_id_30bb2f78___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./MentorTemplateComponent.vue?vue&type=template&id=30bb2f78& */ "./resources/js/components/admin/template/MentorTemplateComponent.vue?vue&type=template&id=30bb2f78&");
/* harmony import */ var _MentorTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./MentorTemplateComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/template/MentorTemplateComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _MentorTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _MentorTemplateComponent_vue_vue_type_template_id_30bb2f78___WEBPACK_IMPORTED_MODULE_0__.render,
  _MentorTemplateComponent_vue_vue_type_template_id_30bb2f78___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/template/MentorTemplateComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/template/StudentTemplateComponent.vue":
/*!*****************************************************************************!*\
  !*** ./resources/js/components/admin/template/StudentTemplateComponent.vue ***!
  \*****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _StudentTemplateComponent_vue_vue_type_template_id_99f375fc___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./StudentTemplateComponent.vue?vue&type=template&id=99f375fc& */ "./resources/js/components/admin/template/StudentTemplateComponent.vue?vue&type=template&id=99f375fc&");
/* harmony import */ var _StudentTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./StudentTemplateComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/template/StudentTemplateComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _StudentTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _StudentTemplateComponent_vue_vue_type_template_id_99f375fc___WEBPACK_IMPORTED_MODULE_0__.render,
  _StudentTemplateComponent_vue_vue_type_template_id_99f375fc___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/template/StudentTemplateComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/PageComponent.vue?vue&type=script&lang=js&":
/*!**********************************************************************************!*\
  !*** ./resources/js/components/admin/PageComponent.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_PageComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./PageComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/PageComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_PageComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/template/AboutTemplateComponent.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/AboutTemplateComponent.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AboutTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AboutTemplateComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/AboutTemplateComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AboutTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/template/CareerTemplateComponent.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/CareerTemplateComponent.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_CareerTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./CareerTemplateComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/CareerTemplateComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_CareerTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/template/CompanyTemplateComponent.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/CompanyTemplateComponent.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_CompanyTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./CompanyTemplateComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/CompanyTemplateComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_CompanyTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/template/ContactTemplateComponent.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/ContactTemplateComponent.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ContactTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./ContactTemplateComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/ContactTemplateComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ContactTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/template/ContentTemplateComponent.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/ContentTemplateComponent.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ContentTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./ContentTemplateComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/ContentTemplateComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ContentTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/template/CourseTemplateComponent.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/CourseTemplateComponent.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_CourseTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./CourseTemplateComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/CourseTemplateComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_CourseTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/template/DefaultTemplateComponent.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/DefaultTemplateComponent.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_DefaultTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./DefaultTemplateComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/DefaultTemplateComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_DefaultTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/template/EventTemplateComponent.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/EventTemplateComponent.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_EventTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./EventTemplateComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/EventTemplateComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_EventTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/template/FaqTemplateComponent.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/FaqTemplateComponent.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_FaqTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./FaqTemplateComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/FaqTemplateComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_FaqTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/template/HomeTemplateComponent.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/HomeTemplateComponent.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_HomeTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./HomeTemplateComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/HomeTemplateComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_HomeTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/template/HowitworksTemplateComponent.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/HowitworksTemplateComponent.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_HowitworksTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./HowitworksTemplateComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/HowitworksTemplateComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_HowitworksTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/template/JobTemplateComponent.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/JobTemplateComponent.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_JobTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./JobTemplateComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/JobTemplateComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_JobTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/template/MentorTemplateComponent.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/MentorTemplateComponent.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_MentorTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./MentorTemplateComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/MentorTemplateComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_MentorTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/template/StudentTemplateComponent.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/StudentTemplateComponent.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_StudentTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./StudentTemplateComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/StudentTemplateComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_StudentTemplateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/PageComponent.vue?vue&type=template&id=bec8895a&":
/*!****************************************************************************************!*\
  !*** ./resources/js/components/admin/PageComponent.vue?vue&type=template&id=bec8895a& ***!
  \****************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_PageComponent_vue_vue_type_template_id_bec8895a___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_PageComponent_vue_vue_type_template_id_bec8895a___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_PageComponent_vue_vue_type_template_id_bec8895a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./PageComponent.vue?vue&type=template&id=bec8895a& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/PageComponent.vue?vue&type=template&id=bec8895a&");


/***/ }),

/***/ "./resources/js/components/admin/template/AboutTemplateComponent.vue?vue&type=template&id=4e399370&":
/*!**********************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/AboutTemplateComponent.vue?vue&type=template&id=4e399370& ***!
  \**********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AboutTemplateComponent_vue_vue_type_template_id_4e399370___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AboutTemplateComponent_vue_vue_type_template_id_4e399370___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AboutTemplateComponent_vue_vue_type_template_id_4e399370___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AboutTemplateComponent.vue?vue&type=template&id=4e399370& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/AboutTemplateComponent.vue?vue&type=template&id=4e399370&");


/***/ }),

/***/ "./resources/js/components/admin/template/CareerTemplateComponent.vue?vue&type=template&id=52e513db&":
/*!***********************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/CareerTemplateComponent.vue?vue&type=template&id=52e513db& ***!
  \***********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_CareerTemplateComponent_vue_vue_type_template_id_52e513db___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_CareerTemplateComponent_vue_vue_type_template_id_52e513db___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_CareerTemplateComponent_vue_vue_type_template_id_52e513db___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./CareerTemplateComponent.vue?vue&type=template&id=52e513db& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/CareerTemplateComponent.vue?vue&type=template&id=52e513db&");


/***/ }),

/***/ "./resources/js/components/admin/template/CompanyTemplateComponent.vue?vue&type=template&id=5b6fe800&":
/*!************************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/CompanyTemplateComponent.vue?vue&type=template&id=5b6fe800& ***!
  \************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_CompanyTemplateComponent_vue_vue_type_template_id_5b6fe800___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_CompanyTemplateComponent_vue_vue_type_template_id_5b6fe800___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_CompanyTemplateComponent_vue_vue_type_template_id_5b6fe800___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./CompanyTemplateComponent.vue?vue&type=template&id=5b6fe800& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/CompanyTemplateComponent.vue?vue&type=template&id=5b6fe800&");


/***/ }),

/***/ "./resources/js/components/admin/template/ContactTemplateComponent.vue?vue&type=template&id=c5679786&":
/*!************************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/ContactTemplateComponent.vue?vue&type=template&id=c5679786& ***!
  \************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ContactTemplateComponent_vue_vue_type_template_id_c5679786___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ContactTemplateComponent_vue_vue_type_template_id_c5679786___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ContactTemplateComponent_vue_vue_type_template_id_c5679786___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./ContactTemplateComponent.vue?vue&type=template&id=c5679786& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/ContactTemplateComponent.vue?vue&type=template&id=c5679786&");


/***/ }),

/***/ "./resources/js/components/admin/template/ContentTemplateComponent.vue?vue&type=template&id=8517f4f8&":
/*!************************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/ContentTemplateComponent.vue?vue&type=template&id=8517f4f8& ***!
  \************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ContentTemplateComponent_vue_vue_type_template_id_8517f4f8___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ContentTemplateComponent_vue_vue_type_template_id_8517f4f8___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ContentTemplateComponent_vue_vue_type_template_id_8517f4f8___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./ContentTemplateComponent.vue?vue&type=template&id=8517f4f8& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/ContentTemplateComponent.vue?vue&type=template&id=8517f4f8&");


/***/ }),

/***/ "./resources/js/components/admin/template/CourseTemplateComponent.vue?vue&type=template&id=014ea144&":
/*!***********************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/CourseTemplateComponent.vue?vue&type=template&id=014ea144& ***!
  \***********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_CourseTemplateComponent_vue_vue_type_template_id_014ea144___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_CourseTemplateComponent_vue_vue_type_template_id_014ea144___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_CourseTemplateComponent_vue_vue_type_template_id_014ea144___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./CourseTemplateComponent.vue?vue&type=template&id=014ea144& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/CourseTemplateComponent.vue?vue&type=template&id=014ea144&");


/***/ }),

/***/ "./resources/js/components/admin/template/DefaultTemplateComponent.vue?vue&type=template&id=83205e88&":
/*!************************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/DefaultTemplateComponent.vue?vue&type=template&id=83205e88& ***!
  \************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_DefaultTemplateComponent_vue_vue_type_template_id_83205e88___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_DefaultTemplateComponent_vue_vue_type_template_id_83205e88___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_DefaultTemplateComponent_vue_vue_type_template_id_83205e88___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./DefaultTemplateComponent.vue?vue&type=template&id=83205e88& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/DefaultTemplateComponent.vue?vue&type=template&id=83205e88&");


/***/ }),

/***/ "./resources/js/components/admin/template/EventTemplateComponent.vue?vue&type=template&id=6c0bc2fa&":
/*!**********************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/EventTemplateComponent.vue?vue&type=template&id=6c0bc2fa& ***!
  \**********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_EventTemplateComponent_vue_vue_type_template_id_6c0bc2fa___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_EventTemplateComponent_vue_vue_type_template_id_6c0bc2fa___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_EventTemplateComponent_vue_vue_type_template_id_6c0bc2fa___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./EventTemplateComponent.vue?vue&type=template&id=6c0bc2fa& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/EventTemplateComponent.vue?vue&type=template&id=6c0bc2fa&");


/***/ }),

/***/ "./resources/js/components/admin/template/FaqTemplateComponent.vue?vue&type=template&id=7d1bd7f2&":
/*!********************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/FaqTemplateComponent.vue?vue&type=template&id=7d1bd7f2& ***!
  \********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_FaqTemplateComponent_vue_vue_type_template_id_7d1bd7f2___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_FaqTemplateComponent_vue_vue_type_template_id_7d1bd7f2___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_FaqTemplateComponent_vue_vue_type_template_id_7d1bd7f2___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./FaqTemplateComponent.vue?vue&type=template&id=7d1bd7f2& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/FaqTemplateComponent.vue?vue&type=template&id=7d1bd7f2&");


/***/ }),

/***/ "./resources/js/components/admin/template/HomeTemplateComponent.vue?vue&type=template&id=3549649a&":
/*!*********************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/HomeTemplateComponent.vue?vue&type=template&id=3549649a& ***!
  \*********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_HomeTemplateComponent_vue_vue_type_template_id_3549649a___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_HomeTemplateComponent_vue_vue_type_template_id_3549649a___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_HomeTemplateComponent_vue_vue_type_template_id_3549649a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./HomeTemplateComponent.vue?vue&type=template&id=3549649a& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/HomeTemplateComponent.vue?vue&type=template&id=3549649a&");


/***/ }),

/***/ "./resources/js/components/admin/template/HowitworksTemplateComponent.vue?vue&type=template&id=4b62d512&":
/*!***************************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/HowitworksTemplateComponent.vue?vue&type=template&id=4b62d512& ***!
  \***************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_HowitworksTemplateComponent_vue_vue_type_template_id_4b62d512___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_HowitworksTemplateComponent_vue_vue_type_template_id_4b62d512___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_HowitworksTemplateComponent_vue_vue_type_template_id_4b62d512___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./HowitworksTemplateComponent.vue?vue&type=template&id=4b62d512& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/HowitworksTemplateComponent.vue?vue&type=template&id=4b62d512&");


/***/ }),

/***/ "./resources/js/components/admin/template/JobTemplateComponent.vue?vue&type=template&id=434e7c80&":
/*!********************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/JobTemplateComponent.vue?vue&type=template&id=434e7c80& ***!
  \********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_JobTemplateComponent_vue_vue_type_template_id_434e7c80___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_JobTemplateComponent_vue_vue_type_template_id_434e7c80___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_JobTemplateComponent_vue_vue_type_template_id_434e7c80___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./JobTemplateComponent.vue?vue&type=template&id=434e7c80& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/JobTemplateComponent.vue?vue&type=template&id=434e7c80&");


/***/ }),

/***/ "./resources/js/components/admin/template/MentorTemplateComponent.vue?vue&type=template&id=30bb2f78&":
/*!***********************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/MentorTemplateComponent.vue?vue&type=template&id=30bb2f78& ***!
  \***********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_MentorTemplateComponent_vue_vue_type_template_id_30bb2f78___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_MentorTemplateComponent_vue_vue_type_template_id_30bb2f78___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_MentorTemplateComponent_vue_vue_type_template_id_30bb2f78___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./MentorTemplateComponent.vue?vue&type=template&id=30bb2f78& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/MentorTemplateComponent.vue?vue&type=template&id=30bb2f78&");


/***/ }),

/***/ "./resources/js/components/admin/template/StudentTemplateComponent.vue?vue&type=template&id=99f375fc&":
/*!************************************************************************************************************!*\
  !*** ./resources/js/components/admin/template/StudentTemplateComponent.vue?vue&type=template&id=99f375fc& ***!
  \************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_StudentTemplateComponent_vue_vue_type_template_id_99f375fc___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_StudentTemplateComponent_vue_vue_type_template_id_99f375fc___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_StudentTemplateComponent_vue_vue_type_template_id_99f375fc___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./StudentTemplateComponent.vue?vue&type=template&id=99f375fc& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/StudentTemplateComponent.vue?vue&type=template&id=99f375fc&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/PageComponent.vue?vue&type=template&id=bec8895a&":
/*!*******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/PageComponent.vue?vue&type=template&id=bec8895a& ***!
  \*******************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("form", { attrs: { method: "POST" } }, [
    _c("div", { staticClass: "row" }, [
      _c(
        "div",
        { staticClass: "col-md-8" },
        [
          _c("div", { staticClass: "mb-3" }, [
            _vm._m(0),
            _vm._v(" "),
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.formData.title,
                  expression: "formData.title",
                },
              ],
              staticClass: "form-control",
              attrs: { type: "text", placeholder: "Title" },
              domProps: { value: _vm.formData.title },
              on: {
                input: function ($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.$set(_vm.formData, "title", $event.target.value)
                },
              },
            }),
            _vm._v(" "),
            !_vm.$v.formData.title.required && _vm.show_error
              ? _c("div", { staticClass: "error" }, [
                  _vm._v("\n          Field is required\n        "),
                ])
              : _vm._e(),
            _vm._v(" "),
            !_vm.$v.formData.title.minLength && _vm.show_error
              ? _c("div", { staticClass: "error" }, [
                  _vm._v(
                    "\n          Title must have at least\n          " +
                      _vm._s(_vm.$v.formData.title.$params.minLength.min) +
                      " letters.\n        "
                  ),
                ])
              : _vm._e(),
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "mb-3" }, [
            _vm._m(1),
            _vm._v(" "),
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.formData.slug,
                  expression: "formData.slug",
                },
              ],
              staticClass: "form-control",
              attrs: { type: "text", placeholder: "Slug" },
              domProps: { value: _vm.formData.slug },
              on: {
                input: function ($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.$set(_vm.formData, "slug", $event.target.value)
                },
              },
            }),
            _vm._v(" "),
            !_vm.$v.formData.slug.required && _vm.show_error
              ? _c("div", { staticClass: "error" }, [
                  _vm._v("\n          Field is required\n        "),
                ])
              : _vm._e(),
          ]),
          _vm._v(" "),
          _c(_vm.activeTemplate, {
            tag: "component",
            attrs: { body: _vm.pageData },
            on: {
              getContents: function ($event) {
                return _vm.setContent($event)
              },
            },
          }),
          _vm._v(" "),
          !_vm.$v.formData.content.required && _vm.show_error
            ? _c("div", { staticClass: "error" }, [
                _vm._v("\n        Field is required\n      "),
              ])
            : _vm._e(),
        ],
        1
      ),
      _vm._v(" "),
      _c("div", { staticClass: "col-md-4" }, [
        _c("div", { staticClass: "mb-3" }, [
          _c("label", { staticClass: "form-label" }, [
            _vm._v("Meta Description"),
          ]),
          _vm._v(" "),
          _c("textarea", {
            directives: [
              {
                name: "model",
                rawName: "v-model",
                value: _vm.formData.meta_description,
                expression: "formData.meta_description",
              },
            ],
            staticClass: "form-control",
            attrs: { rows: "8" },
            domProps: { value: _vm.formData.meta_description },
            on: {
              input: function ($event) {
                if ($event.target.composing) {
                  return
                }
                _vm.$set(_vm.formData, "meta_description", $event.target.value)
              },
            },
          }),
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "mb-3" }, [
          _c("label", { staticClass: "form-label" }, [
            _vm._v("Meta keywords "),
          ]),
          _vm._v(" "),
          _c("input", {
            directives: [
              {
                name: "model",
                rawName: "v-model",
                value: _vm.formData.keyword,
                expression: "formData.keyword",
              },
            ],
            staticClass: "form-control",
            attrs: { type: "text", placeholder: "Meta Keywords" },
            domProps: { value: _vm.formData.keyword },
            on: {
              input: function ($event) {
                if ($event.target.composing) {
                  return
                }
                _vm.$set(_vm.formData, "keyword", $event.target.value)
              },
            },
          }),
        ]),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "mb-3" },
          [
            _vm._m(2),
            _vm._v(" "),
            _c("Select2", {
              attrs: {
                placeholder: "Select template",
                disabled: _vm.isChangeTemplate,
                options: _vm.pageData.all_templates.map(function (item) {
                  return {
                    id: item.id,
                    text: item.name,
                  }
                }),
              },
              on: { change: _vm.setActiveTemplate },
              model: {
                value: _vm.formData.template_id,
                callback: function ($$v) {
                  _vm.$set(_vm.formData, "template_id", $$v)
                },
                expression: "formData.template_id",
              },
            }),
            _vm._v(" "),
            !_vm.$v.formData.content.required && _vm.show_error
              ? _c("div", { staticClass: "error" }, [
                  _vm._v("\n          Template is required\n        "),
                ])
              : _vm._e(),
          ],
          1
        ),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "mb-3" },
          [
            _vm._m(3),
            _vm._v(" "),
            _c("Select2", {
              attrs: {
                placeholder: "Status",
                options: _vm.pageData.pageStatus,
              },
              model: {
                value: _vm.formData.status,
                callback: function ($$v) {
                  _vm.$set(_vm.formData, "status", $$v)
                },
                expression: "formData.status",
              },
            }),
            _vm._v(" "),
            !_vm.$v.formData.content.required && _vm.show_error
              ? _c("div", { staticClass: "error" }, [
                  _vm._v("\n          Field is required\n        "),
                ])
              : _vm._e(),
          ],
          1
        ),
        _vm._v(" "),
        _c("div", { staticClass: "mb-3" }, [
          _c("div", [
            _vm._m(4),
            _vm._v(" "),
            _c(
              "button",
              {
                staticClass: "btn btn-primary waves-effect waves-light",
                attrs: { type: "button", disabled: _vm.isLoading == true },
                on: { click: _vm.PageSubmit },
              },
              [
                _vm.isLoading == true
                  ? _c("span", {
                      staticClass: "spinner-border spinner-border-sm mt-1",
                      attrs: { role: "status", "aria-hidden": "true" },
                    })
                  : _vm._e(),
                _vm._v(" "),
                _c("span", [_vm._v(_vm._s(_vm.getButtonText()))]),
              ]
            ),
          ]),
        ]),
      ]),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { staticClass: "form-label" }, [
      _vm._v("Title "),
      _c("span", { staticClass: "error" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { staticClass: "form-label" }, [
      _vm._v("Slug "),
      _c("span", { staticClass: "error" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { staticClass: "form-label" }, [
      _vm._v("Select template "),
      _c("span", { staticClass: "error" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { staticClass: "form-label" }, [
      _vm._v("Status "),
      _c("span", { staticClass: "error" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "a",
      {
        staticClass: "btn btn-secondary waves-effect waves-light mr-2",
        attrs: { href: "/admin/pages" },
      },
      [
        _c("i", { staticClass: "fas fa-arrow-left" }),
        _vm._v(" "),
        _c("span", [_vm._v("Back")]),
      ]
    )
  },
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/AboutTemplateComponent.vue?vue&type=template&id=4e399370&":
/*!*************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/AboutTemplateComponent.vue?vue&type=template&id=4e399370& ***!
  \*************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "accordion", attrs: { id: "accordionExample" } }, [
      _c("div", { staticClass: "accordion-item border rounded" }, [
        _vm._m(0),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse show",
            attrs: {
              id: "collapseOne",
              "aria-labelledby": "headingOne",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(1),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_title,
                      expression: "banner_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "banner_title",
                    placeholder: "Banner Title",
                  },
                  domProps: { value: _vm.banner_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(2),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_paragraph,
                      expression: "banner_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "banner_paragraph",
                    placeholder: "Banner Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.banner_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(3),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.button_text,
                      expression: "button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "button_text",
                    placeholder: "Button Text",
                  },
                  domProps: { value: _vm.button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.button_text = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.banner_image,
                        expression: "banner_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "banner_image",
                      value: "",
                      type: "text",
                      name: "banner_image",
                      required: "",
                    },
                    domProps: { value: _vm.banner_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.banner_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "banner_image",
                        "data-preview": "banner_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "banner_image")
                        },
                      },
                    },
                    [_vm._m(4)]
                  ),
                ]
              ),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(5),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseTwo",
              "aria-labelledby": "headingTwo",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("h5", [_vm._v("First Image")]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.get_sponsorship_first_image,
                        expression: "get_sponsorship_first_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "get_sponsorship_first_image",
                      value: "",
                      type: "text",
                      name: "get_sponsorship_first_image",
                      required: "",
                    },
                    domProps: { value: _vm.get_sponsorship_first_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.get_sponsorship_first_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "get_sponsorship_first_image",
                        "data-preview": "get_sponsorship_first_image_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "get_sponsorship_first_image"
                          )
                        },
                      },
                    },
                    [_vm._m(6)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("h5", [_vm._v("Second Image")]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.get_sponsorship_second_image,
                        expression: "get_sponsorship_second_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "get_sponsorship_second_image",
                      value: "",
                      type: "text",
                      name: "get_sponsorship_second_image",
                      required: "",
                    },
                    domProps: { value: _vm.get_sponsorship_second_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.get_sponsorship_second_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "get_sponsorship_second_image",
                        "data-preview": "get_sponsorship_second_image_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "get_sponsorship_second_image"
                          )
                        },
                      },
                    },
                    [_vm._m(7)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(8),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.get_sponsorship_title,
                      expression: "get_sponsorship_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "get_sponsorship_title",
                    placeholder: "Get Sponsorship Title",
                  },
                  domProps: { value: _vm.get_sponsorship_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.get_sponsorship_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(9),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.get_sponsorship_subtitle,
                      expression: "get_sponsorship_subtitle",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "get_sponsorship_subtitle",
                    placeholder: "Get Sponsorship Sub Title",
                    rows: "4",
                  },
                  domProps: { value: _vm.get_sponsorship_subtitle },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.get_sponsorship_subtitle = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(10),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.get_sponsorship_paragraph,
                      expression: "get_sponsorship_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "get_sponsorship_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.get_sponsorship_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.get_sponsorship_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(11),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.get_sponsorship_button_text,
                      expression: "get_sponsorship_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "get_sponsorship_button_text",
                    placeholder: "Button Text",
                  },
                  domProps: { value: _vm.get_sponsorship_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.get_sponsorship_button_text = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(12),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseThird",
              "aria-labelledby": "headingThird",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(13),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.video_presentation_title,
                      expression: "video_presentation_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "video_presentation_title",
                    placeholder: "Video Presentation Title",
                  },
                  domProps: { value: _vm.video_presentation_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.video_presentation_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(14),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.youtube_presentation_url,
                      expression: "youtube_presentation_url",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "youtube_presentation_url",
                    placeholder: "Youtube Video Url",
                  },
                  domProps: { value: _vm.youtube_presentation_url },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.youtube_presentation_url = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(15),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseFourth",
              "aria-labelledby": "headingFourth",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.one_to_one_banner_image,
                        expression: "one_to_one_banner_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "one_to_one_banner_image",
                      type: "text",
                      name: "one_to_one_banner_image",
                      required: "",
                    },
                    domProps: { value: _vm.one_to_one_banner_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.one_to_one_banner_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "one_to_one_banner_image",
                        "data-preview": "one_to_one_banner_image_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "one_to_one_banner_image"
                          )
                        },
                      },
                    },
                    [_vm._m(16)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(17),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.one_to_one_title,
                      expression: "one_to_one_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "one_to_one_title",
                    placeholder: "1 To 1 Mentorship Title",
                  },
                  domProps: { value: _vm.one_to_one_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.one_to_one_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(18),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.one_to_one_paragraph,
                      expression: "one_to_one_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "one_to_one_paragraph",
                    placeholder: "1 To 1 Mentorship Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.one_to_one_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.one_to_one_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("First Item")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(19),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.one_to_one_first_title,
                      expression: "one_to_one_first_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "one_to_one_first_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.one_to_one_first_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.one_to_one_first_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(20),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.one_to_one_first_paragraph,
                      expression: "one_to_one_first_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "one_to_one_first_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.one_to_one_first_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.one_to_one_first_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Second Item")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(21),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.one_to_one_second_title,
                      expression: "one_to_one_second_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "one_to_one_second_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.one_to_one_second_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.one_to_one_second_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(22),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.one_to_one_second_paragraph,
                      expression: "one_to_one_second_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "one_to_one_second_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.one_to_one_second_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.one_to_one_second_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(23),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.one_to_one_button_text,
                      expression: "one_to_one_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "one_to_one_button_text",
                    placeholder: "Button Text",
                  },
                  domProps: { value: _vm.one_to_one_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.one_to_one_button_text = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(24),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseFifth",
              "aria-labelledby": "headingFifth",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(25),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.immediately_top_title,
                      expression: "immediately_top_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "immediately_top_title",
                    placeholder: "Immediately Attracting Title",
                  },
                  domProps: { value: _vm.immediately_top_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.immediately_top_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(26),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.immediately_sub_title,
                      expression: "immediately_sub_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "immediately_sub_title",
                    placeholder: "Immediately Attracting Sub Title",
                  },
                  domProps: { value: _vm.immediately_sub_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.immediately_sub_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(27),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.immediately_paragraph,
                      expression: "immediately_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "immediately_paragraph",
                    placeholder: "Immediately Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.immediately_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.immediately_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(28),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.immediately_button_text,
                      expression: "immediately_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "immediately_button_text",
                    placeholder: "Immediately Button Text",
                  },
                  domProps: { value: _vm.immediately_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.immediately_button_text = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.immediately_banner_image,
                        expression: "immediately_banner_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "immediately_banner_image",
                      value: "",
                      type: "text",
                      name: "immediately_banner_image",
                      required: "",
                    },
                    domProps: { value: _vm.immediately_banner_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.immediately_banner_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "immediately_banner_image",
                        "data-preview": "immediately_banner_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "immediately_banner_image"
                          )
                        },
                      },
                    },
                    [_vm._m(29)]
                  ),
                ]
              ),
            ]),
          ]
        ),
      ]),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingOne" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseOne",
              "aria-expanded": "true",
              "aria-controls": "collapseOne",
            },
          },
          [_vm._v("\n          Hero Banner Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Banner Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Banner Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "banner_image" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Banner Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingTwo" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseTwo",
              "aria-expanded": "false",
              "aria-controls": "collapseTwo",
            },
          },
          [_vm._v("\n          Get Sponsorship Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "get_sponsorship_first_image" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("First Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "get_sponsorship_second_image" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Second Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Get Sponsorship Title\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Get Sponsorship Sub Title\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Paragraph\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingThird" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseThird",
              "aria-expanded": "false",
              "aria-controls": "collapseThird",
            },
          },
          [_vm._v("\n          World Calss Education Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Video Presentation Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Youtube Video Url"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingFourth" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseFourth",
              "aria-expanded": "false",
              "aria-controls": "collapseFourth",
            },
          },
          [_vm._v("\n          1 To 1 Mentorship Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "one_to_one_banner_image" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [
          _vm._v("Expertise Banner Image"),
        ]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              1 To 1 Mentorship Title\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              1 To 1 Mentorship Paragraph\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Title\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Paragraph\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Title\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Paragraph\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Button Text\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingFifth" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseFifth",
              "aria-expanded": "false",
              "aria-controls": "collapseFifth",
            },
          },
          [_vm._v("\n          Immediately Attracting Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "immediately_top_title" } }, [
      _vm._v("\n              Immediately Attracting Title\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "immediately_sub_title" } }, [
      _vm._v(
        "\n              Immediately Attracting Sub Title\n              "
      ),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "immediately_paragraph" } }, [
      _vm._v("\n              Immediately Paragraph\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Immediately Button Text\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "immediately_banner_image" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Banner Image")]),
      ]
    )
  },
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/CareerTemplateComponent.vue?vue&type=template&id=52e513db&":
/*!**************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/CareerTemplateComponent.vue?vue&type=template&id=52e513db& ***!
  \**************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "accordion", attrs: { id: "accordionExample" } }, [
      _c("div", { staticClass: "accordion-item border rounded" }, [
        _vm._m(0),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse show",
            attrs: {
              id: "collapseOne",
              "aria-labelledby": "headingOne",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(1),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_title,
                      expression: "banner_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "banner_title",
                    placeholder: "Banner Title",
                  },
                  domProps: { value: _vm.banner_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.banner_image,
                        expression: "banner_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "banner_image",
                      value: "",
                      type: "text",
                      name: "banner_image",
                      required: "",
                    },
                    domProps: { value: _vm.banner_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.banner_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "banner_image",
                        "data-preview": "banner_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "banner_image")
                        },
                      },
                    },
                    [_vm._m(2)]
                  ),
                ]
              ),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(3),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseTwo",
              "aria-labelledby": "headingTwo",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(4),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.search_box_title,
                      expression: "search_box_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "search_box_title",
                    placeholder: "Search Box Title",
                  },
                  domProps: { value: _vm.search_box_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.search_box_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(5),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.featured_job_title,
                      expression: "featured_job_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "featured_job_title",
                    placeholder: "Featured Job Title",
                  },
                  domProps: { value: _vm.featured_job_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.featured_job_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(6),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.featured_job_button_text,
                      expression: "featured_job_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "featured_job_button_text",
                    placeholder: "Featured JobSuccess Your Career Button Text",
                  },
                  domProps: { value: _vm.featured_job_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.featured_job_button_text = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(7),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseThird",
              "aria-labelledby": "headingThird",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("h5", [_vm._v("Experienced People Top Title")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(8),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.experienced_people_top_title,
                      expression: "experienced_people_top_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "experienced_people_top_title",
                    placeholder: "Experienced People Top Title",
                  },
                  domProps: { value: _vm.experienced_people_top_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.experienced_people_top_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(9),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.experienced_people_paragraph,
                      expression: "experienced_people_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "experienced_people_paragraph",
                    placeholder: "Experienced People Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.experienced_people_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.experienced_people_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(10),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.experienced_people_button_text,
                      expression: "experienced_people_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "experienced_people_button_text",
                    placeholder: "Experienced People Button Text",
                  },
                  domProps: { value: _vm.experienced_people_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.experienced_people_button_text = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingOne" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseOne",
              "aria-expanded": "true",
              "aria-controls": "collapseOne",
            },
          },
          [_vm._v("\n          Hero Banner Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Banner Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "banner_image" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Banner Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingTwo" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseTwo",
              "aria-expanded": "false",
              "aria-controls": "collapseTwo",
            },
          },
          [_vm._v("\n          Featured Jobs Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Search Box Title\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Featured Job Title\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Featured Job Button Text\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingThird" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseThird",
              "aria-expanded": "false",
              "aria-controls": "collapseThird",
            },
          },
          [_vm._v("\n          Experienced People Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Success Your Career Title\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Experienced People Paragraph\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Experienced People Button Text\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/CompanyTemplateComponent.vue?vue&type=template&id=5b6fe800&":
/*!***************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/CompanyTemplateComponent.vue?vue&type=template&id=5b6fe800& ***!
  \***************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "accordion", attrs: { id: "accordionExample" } }, [
      _c("div", { staticClass: "accordion-item border rounded" }, [
        _vm._m(0),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse show",
            attrs: {
              id: "collapseOne",
              "aria-labelledby": "headingOne",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(1),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_title,
                      expression: "banner_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "banner_title",
                    placeholder: "Banner Title",
                  },
                  domProps: { value: _vm.banner_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(2),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_paragraph,
                      expression: "banner_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "banner_paragraph",
                    placeholder: "Banner Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.banner_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(3),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.button_text,
                      expression: "button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "button_text",
                    placeholder: "Button Text",
                  },
                  domProps: { value: _vm.button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.button_text = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.banner_image,
                        expression: "banner_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "banner_image",
                      value: "",
                      type: "text",
                      name: "banner_image",
                      required: "",
                    },
                    domProps: { value: _vm.banner_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.banner_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "banner_image",
                        "data-preview": "banner_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "banner_image")
                        },
                      },
                    },
                    [_vm._m(4)]
                  ),
                ]
              ),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(5),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseTwo",
              "aria-labelledby": "headingTwo",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(6),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.talent_acquisition_top_title,
                      expression: "talent_acquisition_top_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "talent_acquisition_top_title",
                    placeholder: "Talent Acquisition Title",
                  },
                  domProps: { value: _vm.talent_acquisition_top_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.talent_acquisition_top_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("First Item")]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.talent_acquisition_first_icon,
                        expression: "talent_acquisition_first_icon",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "talent_acquisition_first_icon",
                      value: "",
                      type: "text",
                      name: "talent_acquisition_first_icon",
                      required: "",
                    },
                    domProps: { value: _vm.talent_acquisition_first_icon },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.talent_acquisition_first_icon = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "talent_acquisition_first_icon",
                        "data-preview": "talent_acquisition_first_icon_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "talent_acquisition_first_icon"
                          )
                        },
                      },
                    },
                    [_vm._m(7)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(8),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.talent_acquisition_first_title,
                      expression: "talent_acquisition_first_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "talent_acquisition_first_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.talent_acquisition_first_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.talent_acquisition_first_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(9),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.talent_acquisition_first_paragraph,
                      expression: "talent_acquisition_first_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "talent_acquisition_first_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.talent_acquisition_first_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.talent_acquisition_first_paragraph =
                        $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Second Item")]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.talent_acquisition_second_icon,
                        expression: "talent_acquisition_second_icon",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "talent_acquisition_second_icon",
                      value: "",
                      type: "text",
                      name: "talent_acquisition_second_icon",
                      required: "",
                    },
                    domProps: { value: _vm.talent_acquisition_second_icon },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.talent_acquisition_second_icon = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "talent_acquisition_second_icon",
                        "data-preview": "talent_acquisition_second_icon_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "talent_acquisition_second_icon"
                          )
                        },
                      },
                    },
                    [_vm._m(10)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(11),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.talent_acquisition_second_title,
                      expression: "talent_acquisition_second_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "talent_acquisition_second_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.talent_acquisition_second_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.talent_acquisition_second_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(12),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.talent_acquisition_second_paragraph,
                      expression: "talent_acquisition_second_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "talent_acquisition_second_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.talent_acquisition_second_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.talent_acquisition_second_paragraph =
                        $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Third Item")]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.talent_acquisition_third_icon,
                        expression: "talent_acquisition_third_icon",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "talent_acquisition_third_icon",
                      value: "",
                      type: "text",
                      name: "talent_acquisition_third_icon",
                      required: "",
                    },
                    domProps: { value: _vm.talent_acquisition_third_icon },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.talent_acquisition_third_icon = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "talent_acquisition_third_icon",
                        "data-preview": "talent_acquisition_third_icon_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "talent_acquisition_third_icon"
                          )
                        },
                      },
                    },
                    [_vm._m(13)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(14),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.talent_acquisition_third_title,
                      expression: "talent_acquisition_third_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "talent_acquisition_third_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.talent_acquisition_third_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.talent_acquisition_third_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(15),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.talent_acquisition_third_paragraph,
                      expression: "talent_acquisition_third_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "talent_acquisition_third_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.talent_acquisition_third_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.talent_acquisition_third_paragraph =
                        $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(16),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseThree",
              "aria-labelledby": "headingThree",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(17),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.accelerate_title,
                      expression: "accelerate_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "accelerate_title",
                    placeholder: "Accelerate Title",
                  },
                  domProps: { value: _vm.accelerate_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.accelerate_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(18),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.accelerate_subtitle,
                      expression: "accelerate_subtitle",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "accelerate_subtitle",
                    placeholder: "Accelerate Sub Title",
                    rows: "4",
                  },
                  domProps: { value: _vm.accelerate_subtitle },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.accelerate_subtitle = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("First Paragraph")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(19),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.accelerate_first_paragraph,
                      expression: "accelerate_first_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "accelerate_first_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.accelerate_first_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.accelerate_first_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Second Paragraph")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(20),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.accelerate_second_paragraph,
                      expression: "accelerate_second_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "accelerate_second_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.accelerate_second_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.accelerate_second_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Third Paragraph")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(21),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.accelerate_third_paragraph,
                      expression: "accelerate_third_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "accelerate_third_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.accelerate_third_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.accelerate_third_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(22),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseFour",
              "aria-labelledby": "headingFour",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(23),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_top_title,
                      expression: "discover_top_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "discover_top_title",
                    placeholder: "Discover Title",
                  },
                  domProps: { value: _vm.discover_top_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_top_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("First Item")]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.discover_first_icon,
                        expression: "discover_first_icon",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "discover_first_icon",
                      value: "",
                      type: "text",
                      name: "discover_first_icon",
                      required: "",
                    },
                    domProps: { value: _vm.discover_first_icon },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.discover_first_icon = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "discover_first_icon",
                        "data-preview": "discover_first_icon_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "discover_first_icon")
                        },
                      },
                    },
                    [_vm._m(24)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(25),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_first_title,
                      expression: "discover_first_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "discover_first_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.discover_first_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_first_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(26),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_first_paragraph,
                      expression: "discover_first_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "discover_first_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.discover_first_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_first_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Second Item")]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.discover_second_icon,
                        expression: "discover_second_icon",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "discover_second_icon",
                      value: "",
                      type: "text",
                      name: "discover_second_icon",
                      required: "",
                    },
                    domProps: { value: _vm.discover_second_icon },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.discover_second_icon = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "discover_second_icon",
                        "data-preview": "discover_second_icon_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "discover_second_icon")
                        },
                      },
                    },
                    [_vm._m(27)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(28),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_second_title,
                      expression: "discover_second_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "discover_second_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.discover_second_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_second_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(29),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_second_paragraph,
                      expression: "discover_second_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "discover_second_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.discover_second_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_second_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Third Item")]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.discover_third_icon,
                        expression: "discover_third_icon",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "discover_third_icon",
                      value: "",
                      type: "text",
                      name: "discover_third_icon",
                      required: "",
                    },
                    domProps: { value: _vm.discover_third_icon },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.discover_third_icon = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "discover_third_icon",
                        "data-preview": "discover_third_icon_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "discover_third_icon")
                        },
                      },
                    },
                    [_vm._m(30)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(31),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_third_title,
                      expression: "discover_third_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "discover_third_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.discover_third_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_third_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(32),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_third_paragraph,
                      expression: "discover_third_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "discover_third_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.discover_third_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_third_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Fourth Item")]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.discover_fourth_icon,
                        expression: "discover_fourth_icon",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "discover_fourth_icon",
                      value: "",
                      type: "text",
                      name: "discover_fourth_icon",
                      required: "",
                    },
                    domProps: { value: _vm.discover_fourth_icon },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.discover_fourth_icon = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "discover_fourth_icon",
                        "data-preview": "discover_fourth_icon_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "discover_fourth_icon")
                        },
                      },
                    },
                    [_vm._m(33)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(34),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_fourth_title,
                      expression: "discover_fourth_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "discover_fourth_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.discover_fourth_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_fourth_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(35),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_fouth_paragraph,
                      expression: "discover_fouth_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "discover_fouth_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.discover_fouth_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_fouth_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Fifth Item")]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.discover_fifth_icon,
                        expression: "discover_fifth_icon",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "discover_fifth_icon",
                      value: "",
                      type: "text",
                      name: "discover_fifth_icon",
                      required: "",
                    },
                    domProps: { value: _vm.discover_fifth_icon },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.discover_fifth_icon = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "discover_fifth_icon",
                        "data-preview": "discover_fifth_icon_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "discover_fifth_icon")
                        },
                      },
                    },
                    [_vm._m(36)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(37),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_fifth_title,
                      expression: "discover_fifth_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "discover_fifth_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.discover_fifth_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_fifth_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(38),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_fifth_paragraph,
                      expression: "discover_fifth_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "discover_fifth_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.discover_fifth_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_fifth_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Sixth Item")]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.discover_sixth_icon,
                        expression: "discover_sixth_icon",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "discover_sixth_icon",
                      value: "",
                      type: "text",
                      name: "discover_sixth_icon",
                      required: "",
                    },
                    domProps: { value: _vm.discover_sixth_icon },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.discover_sixth_icon = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "discover_sixth_icon",
                        "data-preview": "discover_sixth_icon_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "discover_sixth_icon")
                        },
                      },
                    },
                    [_vm._m(39)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(40),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_sixth_title,
                      expression: "discover_sixth_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "discover_sixth_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.discover_sixth_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_sixth_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(41),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_sixth_paragraph,
                      expression: "discover_sixth_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "discover_sixth_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.discover_sixth_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_sixth_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(42),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseFifth",
              "aria-labelledby": "headingFifth",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(43),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.immediately_top_title,
                      expression: "immediately_top_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "immediately_top_title",
                    placeholder: "Immediately Attracting Title",
                  },
                  domProps: { value: _vm.immediately_top_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.immediately_top_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(44),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.immediately_sub_title,
                      expression: "immediately_sub_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "immediately_sub_title",
                    placeholder: "Immediately Attracting Sub Title",
                  },
                  domProps: { value: _vm.immediately_sub_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.immediately_sub_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(45),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.immediately_paragraph,
                      expression: "immediately_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "immediately_paragraph",
                    placeholder: "Immediately Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.immediately_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.immediately_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(46),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.immediately_button_text,
                      expression: "immediately_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "immediately_button_text",
                    placeholder: "Immediately Button Text",
                  },
                  domProps: { value: _vm.immediately_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.immediately_button_text = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.immediately_banner_image,
                        expression: "immediately_banner_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "immediately_banner_image",
                      value: "",
                      type: "text",
                      name: "immediately_banner_image",
                      required: "",
                    },
                    domProps: { value: _vm.immediately_banner_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.immediately_banner_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "immediately_banner_image",
                        "data-preview": "immediately_banner_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "immediately_banner_image"
                          )
                        },
                      },
                    },
                    [_vm._m(47)]
                  ),
                ]
              ),
            ]),
          ]
        ),
      ]),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingOne" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseOne",
              "aria-expanded": "true",
              "aria-controls": "collapseOne",
            },
          },
          [_vm._v("\n          Hero Banner Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Banner Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Banner Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "banner_image" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Banner Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingTwo" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseTwo",
              "aria-expanded": "false",
              "aria-controls": "collapseTwo",
            },
          },
          [_vm._v("\n          Talent Acquisition Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "talent_acquisition_top_title" } }, [
      _vm._v("\n              Talent Acquisition Title\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "talent_acquisition_first_icon" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Icon Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "talent_acquisition_first_title" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { attrs: { for: "talent_acquisition_first_paragraph" } },
      [
        _vm._v("Paragraph"),
        _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "talent_acquisition_second_icon" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Icon Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "talent_acquisition_second_title" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { attrs: { for: "talent_acquisition_second_paragraph" } },
      [
        _vm._v("Paragraph"),
        _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "talent_acquisition_third_icon" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Icon Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "talent_acquisition_third_title" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { attrs: { for: "talent_acquisition_third_paragraph" } },
      [
        _vm._v("Paragraph"),
        _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingThree" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseThree",
              "aria-expanded": "false",
              "aria-controls": "collapseThree",
            },
          },
          [_vm._v("\n          Accelerate Each Stage Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "accelerate_title" } }, [
      _vm._v("Accelerate Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "accelerate_subtitle" } }, [
      _vm._v("Accelerate Sub Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "accelerate_first_paragraph" } }, [
      _vm._v("\n              Accelerate First Paragraph\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "accelerate_second_paragraph" } }, [
      _vm._v("\n              Accelerate Second Paragraph\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "accelerate_third_paragraph" } }, [
      _vm._v("\n              Accelerate Third Paragraph\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingFour" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseFour",
              "aria-expanded": "false",
              "aria-controls": "collapseFour",
            },
          },
          [_vm._v("\n          Discover Top Firms Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "discover_top_title" } }, [
      _vm._v("\n              Discover Title\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "discover_first_icon" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Icon Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "discover_first_title" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "discover_first_paragraph" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "discover_second_icon" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Icon Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "discover_second_title" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "discover_second_paragraph" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "discover_third_icon" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Icon Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "discover_third_title" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "discover_third_paragraph" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "discover_fourth_icon" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Icon Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "discover_fourth_title" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "discover_fouth_paragraph" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "discover_fifth_icon" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Icon Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "discover_fifth_title" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "discover_fifth_paragraph" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "discover_sixth_icon" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Icon Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "discover_sixth_title" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "discover_sixth_paragraph" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingFifth" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseFifth",
              "aria-expanded": "false",
              "aria-controls": "collapseFifth",
            },
          },
          [_vm._v("\n          Immediately Attracting Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "immediately_top_title" } }, [
      _vm._v("\n              Immediately Attracting Title\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "immediately_sub_title" } }, [
      _vm._v(
        "\n              Immediately Attracting Sub Title\n              "
      ),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "immediately_paragraph" } }, [
      _vm._v("\n              Immediately Paragraph\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Immediately Button Text\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "immediately_banner_image" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Banner Image")]),
      ]
    )
  },
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/ContactTemplateComponent.vue?vue&type=template&id=c5679786&":
/*!***************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/ContactTemplateComponent.vue?vue&type=template&id=c5679786& ***!
  \***************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "accordion", attrs: { id: "accordionExample" } }, [
      _c("div", { staticClass: "accordion-item border rounded" }, [
        _vm._m(0),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse show",
            attrs: {
              id: "collapseOne",
              "aria-labelledby": "headingOne",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(1),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.top_title,
                      expression: "top_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "top_title",
                    placeholder: "Top Title",
                  },
                  domProps: { value: _vm.top_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.top_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(2),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.top_paragraph,
                      expression: "top_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "top_paragraph",
                    placeholder: "Top Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.top_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.top_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Form Area")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(3),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.form_top_title,
                      expression: "form_top_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "form_top_title",
                    placeholder: "Form Top Title",
                  },
                  domProps: { value: _vm.form_top_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.form_top_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(4),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.form_top_paragraph,
                      expression: "form_top_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "form_top_paragraph",
                    placeholder: "Form Top Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.form_top_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.form_top_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(5),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.button_text,
                      expression: "button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "button_text",
                    placeholder: "Button Text",
                  },
                  domProps: { value: _vm.button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.button_text = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(6),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseSecond",
              "aria-labelledby": "headingSecond",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("h5", [_vm._v("Head Office")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(7),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.head_office_title,
                      expression: "head_office_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "head_office_title",
                    placeholder: "Head Office Title",
                  },
                  domProps: { value: _vm.head_office_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.head_office_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(8),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.head_office_addess,
                      expression: "head_office_addess",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "head_office_addess",
                    placeholder: "Address",
                  },
                  domProps: { value: _vm.head_office_addess },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.head_office_addess = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(9),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.head_office_phones,
                      expression: "head_office_phones",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "tel",
                    name: "head_office_phones",
                    placeholder: "Phone Numbers",
                  },
                  domProps: { value: _vm.head_office_phones },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.head_office_phones = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(10),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.head_office_email,
                      expression: "head_office_email",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "email",
                    name: "head_office_email",
                    placeholder: "Email",
                  },
                  domProps: { value: _vm.head_office_email },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.head_office_email = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Branch Office 1")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(11),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.branch_office1_title,
                      expression: "branch_office1_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "branch_office1_title",
                    placeholder: "Branch Office 1 Title",
                  },
                  domProps: { value: _vm.branch_office1_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.branch_office1_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(12),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.branch_office1_addess,
                      expression: "branch_office1_addess",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "branch_office1_addess",
                    placeholder: "Address",
                  },
                  domProps: { value: _vm.branch_office1_addess },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.branch_office1_addess = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(13),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.branch_office1_phones,
                      expression: "branch_office1_phones",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "tel",
                    name: "branch_office1_phones",
                    placeholder: "Phone Numbers",
                  },
                  domProps: { value: _vm.branch_office1_phones },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.branch_office1_phones = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(14),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.branch_office1_email,
                      expression: "branch_office1_email",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "email",
                    name: "branch_office1_email",
                    placeholder: "Email",
                  },
                  domProps: { value: _vm.branch_office1_email },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.branch_office1_email = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Branch Office 2")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(15),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.branch_office2_title,
                      expression: "branch_office2_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "branch_office2_title",
                    placeholder: "Branch Office 2 Title",
                  },
                  domProps: { value: _vm.branch_office2_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.branch_office2_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(16),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.branch_office2_addess,
                      expression: "branch_office2_addess",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "branch_office2_addess",
                    placeholder: "Address",
                  },
                  domProps: { value: _vm.branch_office2_addess },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.branch_office2_addess = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(17),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.branch_office2_phones,
                      expression: "branch_office2_phones",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "tel",
                    name: "branch_office2_phones",
                    placeholder: "Phone Numbers",
                  },
                  domProps: { value: _vm.branch_office2_phones },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.branch_office2_phones = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(18),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.branch_office2_email,
                      expression: "branch_office2_email",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "email",
                    name: "branch_office2_email",
                    placeholder: "Email",
                  },
                  domProps: { value: _vm.branch_office2_email },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.branch_office2_email = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingOne" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseOne",
              "aria-expanded": "true",
              "aria-controls": "collapseOne",
            },
          },
          [_vm._v("\n          Contact Us Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Top Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Top Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Form Top Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Form Top Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingSecond" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseSecond",
              "aria-expanded": "false",
              "aria-controls": "collapseSecond",
            },
          },
          [_vm._v("\n          Contact Address Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Head Office Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Address"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Phone Numbers"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Email"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Branch Office 1 Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Address"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Phone Numbers"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Email"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Branch Office 1 Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Address"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Phone Numbers"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Email"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/ContentTemplateComponent.vue?vue&type=template&id=8517f4f8&":
/*!***************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/ContentTemplateComponent.vue?vue&type=template&id=8517f4f8& ***!
  \***************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "accordion", attrs: { id: "accordionExample" } }, [
      _c("div", { staticClass: "accordion-item border rounded" }, [
        _vm._m(0),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse show",
            attrs: {
              id: "collapseOne",
              "aria-labelledby": "headingOne",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(1),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_title,
                      expression: "banner_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "banner_title",
                    placeholder: "Banner Title",
                  },
                  domProps: { value: _vm.banner_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(2),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_paragraph,
                      expression: "banner_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "banner_paragraph",
                    placeholder: "Banner Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.banner_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.banner_image,
                        expression: "banner_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "banner_image",
                      value: "",
                      type: "text",
                      name: "banner_image",
                      required: "",
                    },
                    domProps: { value: _vm.banner_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.banner_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "banner_image",
                        "data-preview": "banner_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "banner_image")
                        },
                      },
                    },
                    [_vm._m(3)]
                  ),
                ]
              ),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(4),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseTwo",
              "aria-labelledby": "headingTwo",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _vm._m(5),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.get_sponsorship_first_image,
                        expression: "get_sponsorship_first_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "get_sponsorship_first_image",
                      value: "",
                      type: "text",
                      name: "get_sponsorship_first_image",
                      required: "",
                    },
                    domProps: { value: _vm.get_sponsorship_first_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.get_sponsorship_first_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "get_sponsorship_first_image",
                        "data-preview": "get_sponsorship_first_image_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "get_sponsorship_first_image"
                          )
                        },
                      },
                    },
                    [_vm._m(6)]
                  ),
                ]
              ),
              _vm._v(" "),
              _vm._m(7),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.get_sponsorship_second_image,
                        expression: "get_sponsorship_second_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "get_sponsorship_second_image",
                      value: "",
                      type: "text",
                      name: "get_sponsorship_second_image",
                      required: "",
                    },
                    domProps: { value: _vm.get_sponsorship_second_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.get_sponsorship_second_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "get_sponsorship_second_image",
                        "data-preview": "get_sponsorship_second_image_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "get_sponsorship_second_image"
                          )
                        },
                      },
                    },
                    [_vm._m(8)]
                  ),
                ]
              ),
              _vm._v(" "),
              _vm._m(9),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.get_sponsorship_third_image,
                        expression: "get_sponsorship_third_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "get_sponsorship_third_image",
                      value: "",
                      type: "text",
                      name: "get_sponsorship_third_image",
                      required: "",
                    },
                    domProps: { value: _vm.get_sponsorship_third_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.get_sponsorship_third_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "get_sponsorship_third_image",
                        "data-preview": "get_sponsorship_third_image_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "get_sponsorship_third_image"
                          )
                        },
                      },
                    },
                    [_vm._m(10)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(11),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.get_sponsorship_title,
                      expression: "get_sponsorship_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "get_sponsorship_title",
                    placeholder: "Get Sponsorship Title",
                  },
                  domProps: { value: _vm.get_sponsorship_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.get_sponsorship_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(12),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.get_sponsorship_subtitle,
                      expression: "get_sponsorship_subtitle",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "get_sponsorship_subtitle",
                    placeholder: "Get Sponsorship Sub Title",
                    rows: "4",
                  },
                  domProps: { value: _vm.get_sponsorship_subtitle },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.get_sponsorship_subtitle = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(13),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.get_sponsorship_paragraph,
                      expression: "get_sponsorship_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "get_sponsorship_paragraph",
                    placeholder: "Get Sponsorship Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.get_sponsorship_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.get_sponsorship_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(14),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.get_sponsorship_text,
                      expression: "get_sponsorship_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "get_sponsorship_text",
                    placeholder: "Get Sponsorship Button Text",
                  },
                  domProps: { value: _vm.get_sponsorship_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.get_sponsorship_text = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(15),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseThree",
              "aria-labelledby": "headingThree",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(16),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.top_firm_title,
                      expression: "top_firm_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "top_firm_title",
                    placeholder: "The Top Firms Title",
                  },
                  domProps: { value: _vm.top_firm_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.top_firm_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(17),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.top_firm_button_text,
                      expression: "top_firm_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "top_firm_button_text",
                    placeholder: "The Top Firms Button Text",
                  },
                  domProps: { value: _vm.top_firm_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.top_firm_button_text = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingOne" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseOne",
              "aria-expanded": "true",
              "aria-controls": "collapseOne",
            },
          },
          [_vm._v("\n          Hero Banner Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Banner Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Banner Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "banner_image" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Banner Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingTwo" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseTwo",
              "aria-expanded": "false",
              "aria-controls": "collapseTwo",
            },
          },
          [_vm._v("\n          Get Sponsorship & Learn With Us\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("h6", [
      _vm._v("First image "),
      _c("small", [_vm._v("(Image must be 400*400 px)")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "get_sponsorship_first_image" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("First Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("h6", [
      _vm._v("Second image "),
      _c("small", [_vm._v("(Image must be 400*520 px)")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "get_sponsorship_second_image" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Second Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("h6", [
      _vm._v("Third image "),
      _c("small", [_vm._v("(Image must be 200*200 px)")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "get_sponsorship_third_image" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Third Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "get_sponsorship_title" } }, [
      _vm._v("Get Sponsorship Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "get_sponsorship_subtitle" } }, [
      _vm._v("Get Sponsorship Sub Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "get_sponsorship_paragraph" } }, [
      _vm._v("\n              Get Sponsorship Paragraph\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Get Sponsorship Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingThree" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseThree",
              "aria-expanded": "false",
              "aria-controls": "collapseThree",
            },
          },
          [_vm._v("\n          Discover Why The Top Firms\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "top_firm_title" } }, [
      _vm._v("The Top Firms Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              The Top Firms Button Text\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/CourseTemplateComponent.vue?vue&type=template&id=014ea144&":
/*!**************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/CourseTemplateComponent.vue?vue&type=template&id=014ea144& ***!
  \**************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "accordion", attrs: { id: "accordionExample" } }, [
      _c("div", { staticClass: "accordion-item border rounded" }, [
        _vm._m(0),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse show",
            attrs: {
              id: "collapseOne",
              "aria-labelledby": "headingOne",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(1),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_title,
                      expression: "banner_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "banner_title",
                    placeholder: "Banner Title",
                  },
                  domProps: { value: _vm.banner_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(2),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_paragraph,
                      expression: "banner_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "banner_paragraph",
                    placeholder: "Banner Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.banner_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(3),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.button_text,
                      expression: "button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "button_text",
                    placeholder: "Button Text",
                  },
                  domProps: { value: _vm.button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.button_text = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.banner_image,
                        expression: "banner_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "banner_image",
                      value: "",
                      type: "text",
                      name: "banner_image",
                      required: "",
                    },
                    domProps: { value: _vm.banner_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.banner_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "banner_image",
                        "data-preview": "banner_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "banner_image")
                        },
                      },
                    },
                    [_vm._m(4)]
                  ),
                ]
              ),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(5),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseSecond",
              "aria-labelledby": "headingSecond",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(6),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.trending_course_title_top,
                      expression: "trending_course_title_top",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "trending_course_title_top",
                    placeholder: "Trending Course Title Top",
                  },
                  domProps: { value: _vm.trending_course_title_top },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.trending_course_title_top = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(7),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.trending_course_title_bottom,
                      expression: "trending_course_title_bottom",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "trending_course_title_bottom",
                    placeholder: "Trending Course Title Bottom",
                  },
                  domProps: { value: _vm.trending_course_title_bottom },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.trending_course_title_bottom = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(8),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.trending_course_button_text,
                      expression: "trending_course_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "trending_course_button_text",
                    placeholder: "Trending Course Button Text",
                  },
                  domProps: { value: _vm.trending_course_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.trending_course_button_text = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(9),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseThird",
              "aria-labelledby": "headingThird",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(10),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.level_up_skills_top_label,
                      expression: "level_up_skills_top_label",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "level_up_skills_top_label",
                    placeholder: "Label Title",
                  },
                  domProps: { value: _vm.level_up_skills_top_label },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.level_up_skills_top_label = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(11),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.level_up_skills_title_top,
                      expression: "level_up_skills_title_top",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "level_up_skills_title_top",
                    placeholder: "Level Up Skills Title Top",
                  },
                  domProps: { value: _vm.level_up_skills_title_top },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.level_up_skills_title_top = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(12),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.level_up_skills_title_bottom,
                      expression: "level_up_skills_title_bottom",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "level_up_skills_title_bottom",
                    placeholder: "Trending Course Title Bottom",
                  },
                  domProps: { value: _vm.level_up_skills_title_bottom },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.level_up_skills_title_bottom = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(13),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.level_up_skills_paragraph,
                      expression: "level_up_skills_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "level_up_skills_paragraph",
                    placeholder: "Level Up Skills Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.level_up_skills_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.level_up_skills_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(14),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.level_up_skills_button_text,
                      expression: "level_up_skills_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "level_up_skills_button_text",
                    placeholder: "Level Up Skills Button Text",
                  },
                  domProps: { value: _vm.level_up_skills_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.level_up_skills_button_text = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(15),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseFouth",
              "aria-labelledby": "headingFourth",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.online_learning_left_image,
                        expression: "online_learning_left_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "online_learning_left_image",
                      value: "",
                      type: "text",
                      name: "online_learning_left_image",
                      required: "",
                    },
                    domProps: { value: _vm.online_learning_left_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.online_learning_left_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "online_learning_left_image",
                        "data-preview": "online_learning_left_image_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "online_learning_left_image"
                          )
                        },
                      },
                    },
                    [_vm._m(16)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(17),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.online_learning_title_top,
                      expression: "online_learning_title_top",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "online_learning_title_top",
                    placeholder: "Online Learning Design Title",
                  },
                  domProps: { value: _vm.online_learning_title_top },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.online_learning_title_top = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(18),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.online_learning_paragraph,
                      expression: "online_learning_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "online_learning_paragraph",
                    placeholder: "Online Learning Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.online_learning_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.online_learning_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(19),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.online_learning_button_text,
                      expression: "online_learning_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "online_learning_button_text",
                    placeholder: "Online Learning Button Text",
                  },
                  domProps: { value: _vm.online_learning_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.online_learning_button_text = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(20),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseFifth",
              "aria-labelledby": "headingFifth",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.see_our_growth_right_image,
                        expression: "see_our_growth_right_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "see_our_growth_right_image",
                      value: "",
                      type: "text",
                      name: "see_our_growth_right_image",
                      required: "",
                    },
                    domProps: { value: _vm.see_our_growth_right_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.see_our_growth_right_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "see_our_growth_right_image",
                        "data-preview": "see_our_growth_right_image_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "see_our_growth_right_image"
                          )
                        },
                      },
                    },
                    [_vm._m(21)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(22),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.see_our_growth_title_top,
                      expression: "see_our_growth_title_top",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "see_our_growth_title_top",
                    placeholder: "See our Growth Title Top",
                  },
                  domProps: { value: _vm.see_our_growth_title_top },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.see_our_growth_title_top = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(23),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.see_our_growth_title_second,
                      expression: "see_our_growth_title_second",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "see_our_growth_title_second",
                    placeholder: "See our Growth Title Second",
                  },
                  domProps: { value: _vm.see_our_growth_title_second },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.see_our_growth_title_second = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(24),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.see_our_growth_title_last,
                      expression: "see_our_growth_title_last",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "see_our_growth_title_last",
                    placeholder: "See our Growth Title Last",
                  },
                  domProps: { value: _vm.see_our_growth_title_last },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.see_our_growth_title_last = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(25),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.see_our_growth_paragraph,
                      expression: "see_our_growth_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "see_our_growth_paragraph",
                    placeholder: "See our Growth Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.see_our_growth_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.see_our_growth_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(26),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.see_our_growth_button_text,
                      expression: "see_our_growth_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "see_our_growth_button_text",
                    placeholder: "See our Growth Button Text",
                  },
                  domProps: { value: _vm.see_our_growth_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.see_our_growth_button_text = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingOne" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseOne",
              "aria-expanded": "true",
              "aria-controls": "collapseOne",
            },
          },
          [_vm._v("\n          Hero Banner Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Banner Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Banner Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "banner_image" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Banner Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingSecond" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseSecond",
              "aria-expanded": "false",
              "aria-controls": "collapseSecond",
            },
          },
          [_vm._v("\n          Trending Course Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "trending_course_title_top" } }, [
      _vm._v("Trending Course Title Top"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "trending_course_title_bottom" } }, [
      _vm._v("Trending Course Title Bottom"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "trending_course_button_text" } }, [
      _vm._v("Trending Course Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingThird" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseThird",
              "aria-expanded": "false",
              "aria-controls": "collapseThird",
            },
          },
          [_vm._v("\n          Level Up Your Skill\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "level_up_skills_top_label" } }, [
      _vm._v("Label Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "level_up_skills_title_top" } }, [
      _vm._v("Level Up Skills Title Top"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "level_up_skills_title_bottom" } }, [
      _vm._v("Level Up Skills Title Bottom"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Level Up Skills Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "level_up_skills_button_text" } }, [
      _vm._v("Level Up Skills Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingFourth" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseFouth",
              "aria-expanded": "false",
              "aria-controls": "collapseFouth",
            },
          },
          [_vm._v("\n          Online Learning Design\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "online_learning_left_image" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Left Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "level_up_skills_title_top" } }, [
      _vm._v("Online Learning Design Title\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Online Learning Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "online_learning_button_text" } }, [
      _vm._v("Online Learning Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingFifth" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseFifth",
              "aria-expanded": "false",
              "aria-controls": "collapseFifth",
            },
          },
          [_vm._v("\n          See our Growth\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "see_our_growth_right_image" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Right Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "level_up_skills_title_top" } }, [
      _vm._v("\n              See our Growth Title Top\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "see_our_growth_title_second" } }, [
      _vm._v("\n              See our Growth Title Second\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "see_our_growth_title_last" } }, [
      _vm._v("\n              See our Growth Title Last\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              See our Growth Paragraph\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "see_our_growth_button_text" } }, [
      _vm._v("\n              See our Growth Button Text\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/DefaultTemplateComponent.vue?vue&type=template&id=83205e88&":
/*!***************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/DefaultTemplateComponent.vue?vue&type=template&id=83205e88& ***!
  \***************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "form-group" },
    [
      _vm._m(0),
      _vm._v(" "),
      _c("ckeditor", {
        attrs: { config: _vm.editorConfig },
        model: {
          value: _vm.content,
          callback: function ($$v) {
            _vm.content = $$v
          },
          expression: "content",
        },
      }),
    ],
    1
  )
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "slug" } }, [
      _vm._v("Content"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/EventTemplateComponent.vue?vue&type=template&id=6c0bc2fa&":
/*!*************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/EventTemplateComponent.vue?vue&type=template&id=6c0bc2fa& ***!
  \*************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "accordion", attrs: { id: "accordionExample" } }, [
      _c("div", { staticClass: "accordion-item border rounded" }, [
        _vm._m(0),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse show",
            attrs: {
              id: "collapseOne",
              "aria-labelledby": "headingOne",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(1),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_title,
                      expression: "banner_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "banner_title",
                    placeholder: "Banner Title",
                  },
                  domProps: { value: _vm.banner_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(2),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_paragraph,
                      expression: "banner_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "banner_paragraph",
                    placeholder: "Banner Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.banner_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(3),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_button_text,
                      expression: "banner_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "banner_button_text",
                    placeholder: "Banner Button Text",
                  },
                  domProps: { value: _vm.banner_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_button_text = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.banner_image,
                        expression: "banner_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "banner_image",
                      value: "",
                      type: "text",
                      name: "banner_image",
                      required: "",
                    },
                    domProps: { value: _vm.banner_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.banner_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "banner_image",
                        "data-preview": "banner_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "banner_image")
                        },
                      },
                    },
                    [_vm._m(4)]
                  ),
                ]
              ),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(5),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseThree",
              "aria-labelledby": "headingThree",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(6),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.trending_event_title,
                      expression: "trending_event_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "trending_event_title",
                    placeholder: "Trending Event Title",
                  },
                  domProps: { value: _vm.trending_event_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.trending_event_title = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingOne" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseOne",
              "aria-expanded": "true",
              "aria-controls": "collapseOne",
            },
          },
          [_vm._v("\n          Hero Banner Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Banner Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Banner Paragraph\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Banner Button Text\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "banner_image" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Banner Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingThree" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseThree",
              "aria-expanded": "false",
              "aria-controls": "collapseThree",
            },
          },
          [_vm._v("\n          Trending Event\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "trending_event_title" } }, [
      _vm._v("\n              Trending Event Title\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/FaqTemplateComponent.vue?vue&type=template&id=7d1bd7f2&":
/*!***********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/FaqTemplateComponent.vue?vue&type=template&id=7d1bd7f2& ***!
  \***********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "accordion-item border rounded" }, [
      _vm._m(0),
      _vm._v(" "),
      _c(
        "div",
        {
          staticClass: "accordion-collapse collapse show",
          attrs: {
            id: "collapseOne",
            "aria-labelledby": "headingOne",
            "data-bs-parent": "#accordionExample",
          },
        },
        [
          _c("div", { staticClass: "accordion-body" }, [
            _c("div", { staticClass: "form-group mb-3" }, [
              _vm._m(1),
              _vm._v(" "),
              _c("input", {
                directives: [
                  {
                    name: "model",
                    rawName: "v-model",
                    value: _vm.banner_title,
                    expression: "banner_title",
                  },
                ],
                staticClass: "form-control",
                attrs: {
                  type: "text",
                  name: "banner_title",
                  placeholder: "Banner Title",
                },
                domProps: { value: _vm.banner_title },
                on: {
                  input: function ($event) {
                    if ($event.target.composing) {
                      return
                    }
                    _vm.banner_title = $event.target.value
                  },
                },
              }),
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "bootstrap-filestyle input-group mb-3" }, [
              _c("input", {
                directives: [
                  {
                    name: "model",
                    rawName: "v-model",
                    value: _vm.banner_image,
                    expression: "banner_image",
                  },
                ],
                staticClass: "form-control",
                attrs: {
                  id: "banner_image",
                  value: "",
                  type: "text",
                  name: "banner_image",
                  required: "",
                },
                domProps: { value: _vm.banner_image },
                on: {
                  input: function ($event) {
                    if ($event.target.composing) {
                      return
                    }
                    _vm.banner_image = $event.target.value
                  },
                },
              }),
              _vm._v(" "),
              _c(
                "span",
                {
                  staticClass: "group-span-filestyle input-group-append lfm",
                  attrs: {
                    tabindex: "0",
                    "data-input": "banner_image",
                    "data-preview": "banner_holder",
                  },
                  on: {
                    click: function ($event) {
                      return _vm.uploadimage("lfm", "banner_image")
                    },
                  },
                },
                [_vm._m(2)]
              ),
            ]),
          ]),
        ]
      ),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingOne" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseOne",
              "aria-expanded": "true",
              "aria-controls": "collapseOne",
            },
          },
          [_vm._v("\n        Hero Banner Section\n      ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Banner Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "banner_image" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Banner Image")]),
      ]
    )
  },
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/HomeTemplateComponent.vue?vue&type=template&id=3549649a&":
/*!************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/HomeTemplateComponent.vue?vue&type=template&id=3549649a& ***!
  \************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "accordion", attrs: { id: "accordionExample" } }, [
      _c("div", { staticClass: "accordion-item border rounded" }, [
        _vm._m(0),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse show",
            attrs: {
              id: "collapseOne",
              "aria-labelledby": "headingOne",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(1),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_title,
                      expression: "banner_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "banner_title",
                    placeholder: "Banner Title",
                  },
                  domProps: { value: _vm.banner_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(2),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_paragraph,
                      expression: "banner_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "banner_paragraph",
                    placeholder: "Banner Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.banner_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(3),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.button_text,
                      expression: "button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "button_text",
                    placeholder: "Button Text",
                  },
                  domProps: { value: _vm.button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.button_text = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.banner_image,
                        expression: "banner_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "banner_image",
                      value: "",
                      type: "text",
                      name: "banner_image",
                      required: "",
                    },
                    domProps: { value: _vm.banner_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.banner_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "banner_image",
                        "data-preview": "banner_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "banner_image")
                        },
                      },
                    },
                    [_vm._m(4)]
                  ),
                ]
              ),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(5),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseTwo",
              "aria-labelledby": "headingTwo",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("h5", [_vm._v("First Item")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(6),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.first_title,
                      expression: "first_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "first_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.first_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.first_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(7),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.first_paragraph,
                      expression: "first_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "first_paragraph",
                    placeholder: "Paragraph",
                  },
                  domProps: { value: _vm.first_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.first_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Second Item")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(8),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.second_title,
                      expression: "second_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "second_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.second_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.second_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(9),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.second_paragraph,
                      expression: "second_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "second_paragraph",
                    placeholder: "Paragraph",
                  },
                  domProps: { value: _vm.second_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.second_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Third Item")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(10),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.third_title,
                      expression: "third_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "third_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.third_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.third_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(11),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.third_paragraph,
                      expression: "third_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "third_paragraph",
                    placeholder: "Paragraph",
                  },
                  domProps: { value: _vm.third_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.third_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(12),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseThree",
              "aria-labelledby": "headingThree",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(13),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.mentor_title,
                      expression: "mentor_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "mentor_title",
                    placeholder: "Mentor Title",
                  },
                  domProps: { value: _vm.mentor_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.mentor_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(14),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.mentor_paragraph,
                      expression: "mentor_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "mentor_paragraph",
                    placeholder: "Mentor Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.mentor_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.mentor_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(15),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.mentor_button_text,
                      expression: "mentor_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "mentor_button_text",
                    placeholder: "Mentor Button Text",
                  },
                  domProps: { value: _vm.mentor_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.mentor_button_text = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(16),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseFour",
              "aria-labelledby": "headingFour",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.discover_course_banner_image,
                        expression: "discover_course_banner_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "discover_course_banner_image",
                      value: "",
                      type: "text",
                      name: "discover_course_banner_image",
                      required: "",
                    },
                    domProps: { value: _vm.discover_course_banner_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.discover_course_banner_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "discover_course_banner_image",
                        "data-preview": "course_banner_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "discover_course_banner_image"
                          )
                        },
                      },
                    },
                    [_vm._m(17)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(18),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_course_title,
                      expression: "discover_course_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "discover_course_title",
                    placeholder: "Discover Course Title",
                  },
                  domProps: { value: _vm.discover_course_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_course_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(19),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_course_paragraph,
                      expression: "discover_course_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "discover_course_paragraph",
                    placeholder: "Discover Course Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.discover_course_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_course_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("First Item")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(20),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_course_first_title,
                      expression: "discover_course_first_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "discover_course_first_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.discover_course_first_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_course_first_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(21),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_course_first_paragraph,
                      expression: "discover_course_first_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "discover_course_first_paragraph",
                    placeholder: "Paragraph",
                  },
                  domProps: { value: _vm.discover_course_first_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_course_first_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Second Item")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(22),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_course_second_title,
                      expression: "discover_course_second_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "discover_course_second_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.discover_course_second_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_course_second_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(23),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_course_second_paragraph,
                      expression: "discover_course_second_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "discover_course_second_paragraph",
                    placeholder: "Paragraph",
                  },
                  domProps: { value: _vm.discover_course_second_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_course_second_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Third Item")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(24),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_course_third_title,
                      expression: "discover_course_third_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "discover_course_third_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.discover_course_third_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_course_third_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(25),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_course_third_paragraph,
                      expression: "discover_course_third_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "discover_course_third_paragraph",
                    placeholder: "Paragraph",
                  },
                  domProps: { value: _vm.discover_course_third_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_course_third_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(26),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.discover_course_button_text,
                      expression: "discover_course_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "discover_course_button_text",
                    placeholder: "Discover Course Button Text",
                  },
                  domProps: { value: _vm.discover_course_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.discover_course_button_text = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(27),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseFifth",
              "aria-labelledby": "headingFifth",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(28),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.video_presentation_title,
                      expression: "video_presentation_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "video_presentation_title",
                    placeholder: "Video Presentation Title",
                  },
                  domProps: { value: _vm.video_presentation_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.video_presentation_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(29),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.youtube_presentation_url,
                      expression: "youtube_presentation_url",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "youtube_presentation_url",
                    placeholder: "Youtube Video Url",
                  },
                  domProps: { value: _vm.youtube_presentation_url },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.youtube_presentation_url = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(30),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseSixth",
              "aria-labelledby": "headingSixth",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(31),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.company_title,
                      expression: "company_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "company_title",
                    placeholder: "All Company Title",
                  },
                  domProps: { value: _vm.company_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.company_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(32),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.company_button_text,
                      expression: "company_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "company_button_text",
                    placeholder: "All Company Button Text",
                  },
                  domProps: { value: _vm.company_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.company_button_text = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.company_logo_1,
                        expression: "company_logo_1",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "company_logo_1",
                      value: "",
                      type: "text",
                      name: "company_logo_1",
                      required: "",
                    },
                    domProps: { value: _vm.company_logo_1 },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.company_logo_1 = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "company_logo_1",
                        "data-preview": "company_logo_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "company_logo_1")
                        },
                      },
                    },
                    [_vm._m(33)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.company_logo_2,
                        expression: "company_logo_2",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "company_logo_2",
                      value: "",
                      type: "text",
                      name: "company_logo_2",
                      required: "",
                    },
                    domProps: { value: _vm.company_logo_2 },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.company_logo_2 = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "company_logo_2",
                        "data-preview": "company_logo_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "company_logo_2")
                        },
                      },
                    },
                    [_vm._m(34)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.company_logo_3,
                        expression: "company_logo_3",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "company_logo_3",
                      value: "",
                      type: "text",
                      name: "company_logo_3",
                      required: "",
                    },
                    domProps: { value: _vm.company_logo_3 },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.company_logo_3 = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "company_logo_3",
                        "data-preview": "company_logo_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "company_logo_3")
                        },
                      },
                    },
                    [_vm._m(35)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.company_logo_4,
                        expression: "company_logo_4",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "company_logo_4",
                      value: "",
                      type: "text",
                      name: "company_logo_4",
                      required: "",
                    },
                    domProps: { value: _vm.company_logo_4 },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.company_logo_4 = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "company_logo_4",
                        "data-preview": "company_logo_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "company_logo_4")
                        },
                      },
                    },
                    [_vm._m(36)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.company_logo_5,
                        expression: "company_logo_5",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "company_logo_5",
                      value: "",
                      type: "text",
                      name: "company_logo_5",
                      required: "",
                    },
                    domProps: { value: _vm.company_logo_5 },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.company_logo_5 = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "company_logo_5",
                        "data-preview": "company_logo_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "company_logo_5")
                        },
                      },
                    },
                    [_vm._m(37)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.company_logo_6,
                        expression: "company_logo_6",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "company_logo_6",
                      value: "",
                      type: "text",
                      name: "company_logo_6",
                      required: "",
                    },
                    domProps: { value: _vm.company_logo_6 },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.company_logo_6 = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "company_logo_6",
                        "data-preview": "company_logo_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "company_logo_6")
                        },
                      },
                    },
                    [_vm._m(38)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.company_logo_7,
                        expression: "company_logo_7",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "company_logo_7",
                      value: "",
                      type: "text",
                      name: "company_logo_7",
                      required: "",
                    },
                    domProps: { value: _vm.company_logo_7 },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.company_logo_7 = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "company_logo_7",
                        "data-preview": "company_logo_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "company_logo_7")
                        },
                      },
                    },
                    [_vm._m(39)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.company_logo_8,
                        expression: "company_logo_8",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "company_logo_8",
                      value: "",
                      type: "text",
                      name: "company_logo_8",
                      required: "",
                    },
                    domProps: { value: _vm.company_logo_8 },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.company_logo_8 = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "company_logo_8",
                        "data-preview": "company_logo_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "company_logo_8")
                        },
                      },
                    },
                    [_vm._m(40)]
                  ),
                ]
              ),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(41),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseSeventh",
              "aria-labelledby": "headingSeventh",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.get_started_image,
                        expression: "get_started_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "get_started_image",
                      value: "",
                      type: "text",
                      name: "get_started_image",
                      required: "",
                    },
                    domProps: { value: _vm.get_started_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.get_started_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "get_started_image",
                        "data-preview": "get_started_image_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "get_started_image")
                        },
                      },
                    },
                    [_vm._m(42)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(43),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.get_started_title,
                      expression: "get_started_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "get_started_title",
                    placeholder: "Get Started Title",
                  },
                  domProps: { value: _vm.get_started_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.get_started_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(44),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.get_started_paragraph,
                      expression: "get_started_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "get_started_paragraph",
                    placeholder: "Get Started Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.get_started_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.get_started_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(45),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.get_started_button_text,
                      expression: "get_started_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "get_started_button_text",
                    placeholder: "Get Started Button Text",
                  },
                  domProps: { value: _vm.get_started_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.get_started_button_text = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(46),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseEight",
              "aria-labelledby": "headingEight",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(47),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.tips_title,
                      expression: "tips_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "tips_title",
                    placeholder: "Tips Title",
                  },
                  domProps: { value: _vm.tips_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.tips_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(48),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.tips_button_text,
                      expression: "tips_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "tips_button_text",
                    placeholder: "Tips Button Text",
                  },
                  domProps: { value: _vm.tips_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.tips_button_text = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingOne" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseOne",
              "aria-expanded": "true",
              "aria-controls": "collapseOne",
            },
          },
          [_vm._v("\n          Hero Banner Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Banner Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Banner Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "banner_image" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Banner Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingTwo" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseTwo",
              "aria-expanded": "false",
              "aria-controls": "collapseTwo",
            },
          },
          [_vm._v("\n          How to Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingThree" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseThree",
              "aria-expanded": "false",
              "aria-controls": "collapseThree",
            },
          },
          [_vm._v("\n          Expand Your Skillset Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Mentor Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Mentor Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Mentor Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingFour" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseFour",
              "aria-expanded": "false",
              "aria-controls": "collapseFour",
            },
          },
          [_vm._v("\n          Discover Courses Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "discover_course_banner_image" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [
          _vm._v("Course Banner Image"),
        ]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Discover Course Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Discover Course Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Discover Course Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingFifth" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseFifth",
              "aria-expanded": "false",
              "aria-controls": "collapseFifth",
            },
          },
          [_vm._v("\n          Video Presentation Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Video Presentation Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Youtube Video Url"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingSixth" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseSixth",
              "aria-expanded": "false",
              "aria-controls": "collapseSixth",
            },
          },
          [_vm._v("\n          All Companies Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("All Company Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("All Company Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "company_logo_1" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Company Logo 1")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "company_logo_2" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Company Logo 2")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "company_logo_3" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Company Logo 3")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "company_logo_4" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Company Logo 4")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "company_logo_5" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Company Logo 5")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "company_logo_6" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Company Logo 6")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "company_logo_7" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Company Logo 7")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "company_logo_8" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Company Logo 8")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingSeventh" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseSeventh",
              "aria-expanded": "false",
              "aria-controls": "collapseSeventh",
            },
          },
          [_vm._v("\n          Get Started Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "get_started_image" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [
          _vm._v("Get Started Image"),
        ]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Get Started Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Get Started Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Get Started Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingEight" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseEight",
              "aria-expanded": "false",
              "aria-controls": "collapseEight",
            },
          },
          [_vm._v("\n          All Tips & Tricks Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Tips Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Tips Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/HowitworksTemplateComponent.vue?vue&type=template&id=4b62d512&":
/*!******************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/HowitworksTemplateComponent.vue?vue&type=template&id=4b62d512& ***!
  \******************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "accordion", attrs: { id: "accordionExample" } }, [
      _c("div", { staticClass: "accordion-item border rounded" }, [
        _vm._m(0),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse show",
            attrs: {
              id: "collapseOne",
              "aria-labelledby": "headingOne",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(1),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_title,
                      expression: "banner_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "banner_title",
                    placeholder: "Banner Title",
                  },
                  domProps: { value: _vm.banner_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(2),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_paragraph,
                      expression: "banner_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "banner_paragraph",
                    placeholder: "Banner Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.banner_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.banner_image,
                        expression: "banner_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "banner_image",
                      value: "",
                      type: "text",
                      name: "banner_image",
                      required: "",
                    },
                    domProps: { value: _vm.banner_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.banner_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "banner_image",
                        "data-preview": "banner_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "banner_image")
                        },
                      },
                    },
                    [_vm._m(3)]
                  ),
                ]
              ),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(4),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseTwo",
              "aria-labelledby": "headingTwo",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(5),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.accelerate_title,
                      expression: "accelerate_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "accelerate_title",
                    placeholder: "Accelerate Title",
                  },
                  domProps: { value: _vm.accelerate_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.accelerate_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(6),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.accelerate_subtitle,
                      expression: "accelerate_subtitle",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "accelerate_subtitle",
                    placeholder: "Accelerate Sub Title",
                    rows: "4",
                  },
                  domProps: { value: _vm.accelerate_subtitle },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.accelerate_subtitle = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("First Paragraph")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(7),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.accelerate_first_paragraph,
                      expression: "accelerate_first_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "accelerate_first_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.accelerate_first_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.accelerate_first_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Second Paragraph")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(8),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.accelerate_second_paragraph,
                      expression: "accelerate_second_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "accelerate_second_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.accelerate_second_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.accelerate_second_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Third Paragraph")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(9),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.accelerate_third_paragraph,
                      expression: "accelerate_third_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "accelerate_third_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.accelerate_third_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.accelerate_third_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.accelerate_banner_image,
                        expression: "accelerate_banner_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "accelerate_banner_image",
                      value: "",
                      type: "text",
                      name: "accelerate_banner_image",
                      required: "",
                    },
                    domProps: { value: _vm.accelerate_banner_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.accelerate_banner_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "accelerate_banner_image",
                        "data-preview": "accelerate_banner_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "accelerate_banner_image"
                          )
                        },
                      },
                    },
                    [_vm._m(10)]
                  ),
                ]
              ),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(11),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseThird",
              "aria-labelledby": "headingThird",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("h5", [_vm._v("Success Your Career Top Title")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(12),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.success_your_career_top_title,
                      expression: "success_your_career_top_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "success_your_career_top_title",
                    placeholder: "Success Your Career Top Title",
                  },
                  domProps: { value: _vm.success_your_career_top_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.success_your_career_top_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.success_your_career_image,
                        expression: "success_your_career_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "success_your_career_image",
                      value: "",
                      type: "text",
                      name: "success_your_career_image",
                      required: "",
                    },
                    domProps: { value: _vm.success_your_career_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.success_your_career_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "success_your_career_image",
                        "data-preview": "success_your_career_image_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "success_your_career_image"
                          )
                        },
                      },
                    },
                    [_vm._m(13)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(14),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.success_your_career_title,
                      expression: "success_your_career_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "success_your_career_title",
                    placeholder: "Success Your Career Title",
                  },
                  domProps: { value: _vm.success_your_career_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.success_your_career_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(15),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.success_your_career_subtitle,
                      expression: "success_your_career_subtitle",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "success_your_career_subtitle",
                    placeholder: "Success Your Career Sub Title",
                    rows: "4",
                  },
                  domProps: { value: _vm.success_your_career_subtitle },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.success_your_career_subtitle = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(16),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.success_your_career_paragraph,
                      expression: "success_your_career_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "success_your_career_paragraph",
                    placeholder: "Success Your Career Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.success_your_career_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.success_your_career_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(17),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.success_your_career_button_text,
                      expression: "success_your_career_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "success_your_career_button_text",
                    placeholder: "Success Your Career Button Text",
                  },
                  domProps: { value: _vm.success_your_career_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.success_your_career_button_text = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(18),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseFourth",
              "aria-labelledby": "headingFourth",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(19),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.take_your_course_title,
                      expression: "take_your_course_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "take_your_course_title",
                    placeholder: "Take Your Course Title",
                  },
                  domProps: { value: _vm.take_your_course_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.take_your_course_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(20),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.take_your_course_subtitle,
                      expression: "take_your_course_subtitle",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "take_your_course_subtitle",
                    placeholder: "Take Your Course Sub Title",
                    rows: "4",
                  },
                  domProps: { value: _vm.take_your_course_subtitle },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.take_your_course_subtitle = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(21),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.take_your_course_paragraph,
                      expression: "take_your_course_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "take_your_course_paragraph",
                    placeholder: "Take Your Course Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.take_your_course_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.take_your_course_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(22),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.take_your_course_button_text,
                      expression: "take_your_course_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "take_your_course_button_text",
                    placeholder: "Take Your Course Button Text",
                  },
                  domProps: { value: _vm.take_your_course_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.take_your_course_button_text = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.take_your_course_image,
                        expression: "take_your_course_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "take_your_course_image",
                      value: "",
                      type: "text",
                      name: "take_your_course_image",
                      required: "",
                    },
                    domProps: { value: _vm.take_your_course_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.take_your_course_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "take_your_course_image",
                        "data-preview": "take_your_course_image_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "take_your_course_image"
                          )
                        },
                      },
                    },
                    [_vm._m(23)]
                  ),
                ]
              ),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(24),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseFifth",
              "aria-labelledby": "headingFifth",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _c(
                  "div",
                  { staticClass: "bootstrap-filestyle input-group mb-3" },
                  [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.complete_your_task_image,
                          expression: "complete_your_task_image",
                        },
                      ],
                      staticClass: "form-control",
                      attrs: {
                        id: "complete_your_task_image",
                        value: "",
                        type: "text",
                        name: "complete_your_task_image",
                        required: "",
                      },
                      domProps: { value: _vm.complete_your_task_image },
                      on: {
                        input: function ($event) {
                          if ($event.target.composing) {
                            return
                          }
                          _vm.complete_your_task_image = $event.target.value
                        },
                      },
                    }),
                    _vm._v(" "),
                    _c(
                      "span",
                      {
                        staticClass:
                          "group-span-filestyle input-group-append lfm",
                        attrs: {
                          tabindex: "0",
                          "data-input": "complete_your_task_image",
                          "data-preview": "complete_your_task_image_holder",
                        },
                        on: {
                          click: function ($event) {
                            return _vm.uploadimage(
                              "lfm",
                              "complete_your_task_image"
                            )
                          },
                        },
                      },
                      [_vm._m(25)]
                    ),
                  ]
                ),
                _vm._v(" "),
                _vm._m(26),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.complete_your_task_title,
                      expression: "complete_your_task_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "complete_your_task_title",
                    placeholder: "Complete Your Task Title",
                  },
                  domProps: { value: _vm.complete_your_task_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.complete_your_task_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(27),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.complete_your_task_subtitle,
                      expression: "complete_your_task_subtitle",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "complete_your_task_subtitle",
                    placeholder: "Complete Your Task Sub Title",
                    rows: "4",
                  },
                  domProps: { value: _vm.complete_your_task_subtitle },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.complete_your_task_subtitle = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(28),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.complete_your_task_paragraph,
                      expression: "complete_your_task_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "complete_your_task_paragraph",
                    placeholder: "Complete Your Task Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.complete_your_task_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.complete_your_task_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(29),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.complete_your_task_button_text,
                      expression: "complete_your_task_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "complete_your_task_button_text",
                    placeholder: "Complete Your Task Button Text",
                  },
                  domProps: { value: _vm.complete_your_task_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.complete_your_task_button_text = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingOne" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseOne",
              "aria-expanded": "true",
              "aria-controls": "collapseOne",
            },
          },
          [_vm._v("\n          Hero Banner Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Banner Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Banner Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "banner_image" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Banner Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingTwo" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseTwo",
              "aria-expanded": "false",
              "aria-controls": "collapseTwo",
            },
          },
          [_vm._v("\n          Accelerate Each Stage Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "accelerate_title" } }, [
      _vm._v("Accelerate Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "accelerate_subtitle" } }, [
      _vm._v("Accelerate Sub Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "accelerate_first_paragraph" } }, [
      _vm._v("\n              Accelerate First Paragraph\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "accelerate_second_paragraph" } }, [
      _vm._v("\n              Accelerate Second Paragraph\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "accelerate_third_paragraph" } }, [
      _vm._v("\n              Accelerate Third Paragraph\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "accelerate_banner_image" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Right Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingThird" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseThird",
              "aria-expanded": "false",
              "aria-controls": "collapseThird",
            },
          },
          [_vm._v("\n          Success Your Career Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Success Your Career Top Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "success_your_career_image" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Left Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Success Your Career Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Success Your Career Sub Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Success Your Career Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Success Your Career Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingFourth" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseFourth",
              "aria-expanded": "false",
              "aria-controls": "collapseFourth",
            },
          },
          [_vm._v("\n          Take Your Course Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Take Your Course Title\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Take Your Course Sub Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Take Your Course Paragraph\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Take Your Course Button Text\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "take_your_course_image" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Right Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingFifth" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseFifth",
              "aria-expanded": "false",
              "aria-controls": "collapseFifth",
            },
          },
          [_vm._v("\n          Complete Your Task Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "complete_your_task_image" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Left Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Complete Your Task Title\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Complete Your Task Sub Title\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Complete Your Task Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Complete Your Task Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/JobTemplateComponent.vue?vue&type=template&id=434e7c80&":
/*!***********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/JobTemplateComponent.vue?vue&type=template&id=434e7c80& ***!
  \***********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "accordion", attrs: { id: "accordionExample" } }, [
      _c("div", { staticClass: "accordion-item border rounded" }, [
        _vm._m(0),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse show",
            attrs: {
              id: "collapseOne",
              "aria-labelledby": "headingOne",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(1),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_title,
                      expression: "banner_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "banner_title",
                    placeholder: "Banner Title",
                  },
                  domProps: { value: _vm.banner_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(2),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_paragraph,
                      expression: "banner_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "banner_paragraph",
                    placeholder: "Banner Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.banner_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(3),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_button_text,
                      expression: "banner_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "banner_button_text",
                    placeholder: "Banner Button Text",
                  },
                  domProps: { value: _vm.banner_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_button_text = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.banner_image,
                        expression: "banner_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "banner_image",
                      value: "",
                      type: "text",
                      name: "banner_image",
                      required: "",
                    },
                    domProps: { value: _vm.banner_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.banner_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "banner_image",
                        "data-preview": "banner_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "banner_image")
                        },
                      },
                    },
                    [_vm._m(4)]
                  ),
                ]
              ),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(5),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseThree",
              "aria-labelledby": "headingThree",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(6),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.trending_opportunity_title,
                      expression: "trending_opportunity_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "trending_opportunity_title",
                    placeholder: "Trending Opportunities Title",
                  },
                  domProps: { value: _vm.trending_opportunity_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.trending_opportunity_title = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingOne" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseOne",
              "aria-expanded": "true",
              "aria-controls": "collapseOne",
            },
          },
          [_vm._v("\n          Hero Banner Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Banner Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Banner Paragraph\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("\n              Banner Button Text\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "banner_image" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Banner Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingThree" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseThree",
              "aria-expanded": "false",
              "aria-controls": "collapseThree",
            },
          },
          [_vm._v("\n          Trending Opportunities\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "trending_opportunity_title" } }, [
      _vm._v("\n              Trending Opportunities Title\n              "),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/MentorTemplateComponent.vue?vue&type=template&id=30bb2f78&":
/*!**************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/MentorTemplateComponent.vue?vue&type=template&id=30bb2f78& ***!
  \**************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "accordion", attrs: { id: "accordionExample" } }, [
      _c("div", { staticClass: "accordion-item border rounded" }, [
        _vm._m(0),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse show",
            attrs: {
              id: "collapseOne",
              "aria-labelledby": "headingOne",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(1),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_title,
                      expression: "banner_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "banner_title",
                    placeholder: "Banner Title",
                  },
                  domProps: { value: _vm.banner_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(2),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_paragraph,
                      expression: "banner_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "banner_paragraph",
                    placeholder: "Banner Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.banner_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(3),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.button_text,
                      expression: "button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "button_text",
                    placeholder: "Button Text",
                  },
                  domProps: { value: _vm.button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.button_text = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.banner_image,
                        expression: "banner_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "banner_image",
                      value: "",
                      type: "text",
                      name: "banner_image",
                      required: "",
                    },
                    domProps: { value: _vm.banner_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.banner_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "banner_image",
                        "data-preview": "banner_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "banner_image")
                        },
                      },
                    },
                    [_vm._m(4)]
                  ),
                ]
              ),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(5),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseTwo",
              "aria-labelledby": "headingTwo",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(6),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.share_knowledge_title,
                      expression: "share_knowledge_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "share_knowledge_title",
                    placeholder: "Share Knowledge Title",
                  },
                  domProps: { value: _vm.share_knowledge_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.share_knowledge_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("First Item")]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.share_knowledge_first_icon,
                        expression: "share_knowledge_first_icon",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "share_knowledge_first_icon",
                      value: "",
                      type: "text",
                      name: "share_knowledge_first_icon",
                      required: "",
                    },
                    domProps: { value: _vm.share_knowledge_first_icon },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.share_knowledge_first_icon = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "share_knowledge_first_icon",
                        "data-preview": "share_knowledge_first_icon_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "share_knowledge_first_icon"
                          )
                        },
                      },
                    },
                    [_vm._m(7)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(8),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.share_knowledge_first_title,
                      expression: "share_knowledge_first_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "share_knowledge_first_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.share_knowledge_first_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.share_knowledge_first_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(9),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.share_knowledge_first_paragraph,
                      expression: "share_knowledge_first_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "share_knowledge_first_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.share_knowledge_first_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.share_knowledge_first_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Second Item")]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.share_knowledge_second_icon,
                        expression: "share_knowledge_second_icon",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "share_knowledge_second_icon",
                      value: "",
                      type: "text",
                      name: "share_knowledge_second_icon",
                      required: "",
                    },
                    domProps: { value: _vm.share_knowledge_second_icon },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.share_knowledge_second_icon = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "share_knowledge_second_icon",
                        "data-preview": "share_knowledge_second_icon_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "share_knowledge_second_icon"
                          )
                        },
                      },
                    },
                    [_vm._m(10)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(11),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.share_knowledge_second_title,
                      expression: "share_knowledge_second_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "share_knowledge_second_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.share_knowledge_second_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.share_knowledge_second_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(12),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.share_knowledge_second_paragraph,
                      expression: "share_knowledge_second_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "share_knowledge_second_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.share_knowledge_second_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.share_knowledge_second_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Third Item")]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.share_knowledge_third_icon,
                        expression: "share_knowledge_third_icon",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "share_knowledge_third_icon",
                      value: "",
                      type: "text",
                      name: "share_knowledge_third_icon",
                      required: "",
                    },
                    domProps: { value: _vm.share_knowledge_third_icon },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.share_knowledge_third_icon = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "share_knowledge_third_icon",
                        "data-preview": "share_knowledge_third_icon_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "share_knowledge_third_icon"
                          )
                        },
                      },
                    },
                    [_vm._m(13)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(14),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.share_knowledge_third_title,
                      expression: "share_knowledge_third_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "share_knowledge_third_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.share_knowledge_third_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.share_knowledge_third_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(15),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.share_knowledge_third_paragraph,
                      expression: "share_knowledge_third_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "share_knowledge_third_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.share_knowledge_third_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.share_knowledge_third_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(16),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseThree",
              "aria-labelledby": "headingThree",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.share_expertise_banner_image,
                        expression: "share_expertise_banner_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "share_expertise_banner_image",
                      type: "text",
                      name: "share_expertise_banner_image",
                      required: "",
                    },
                    domProps: { value: _vm.share_expertise_banner_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.share_expertise_banner_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "share_expertise_banner_image",
                        "data-preview": "share_expertise_banner_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "share_expertise_banner_image"
                          )
                        },
                      },
                    },
                    [_vm._m(17)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(18),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.share_expertise_title,
                      expression: "share_expertise_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "share_expertise_title",
                    placeholder: "Share Expertise Title",
                  },
                  domProps: { value: _vm.share_expertise_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.share_expertise_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(19),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.share_expertise_paragraph,
                      expression: "share_expertise_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "share_expertise_paragraph",
                    placeholder: "Share Expertise Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.share_expertise_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.share_expertise_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("First Item")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(20),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.share_expertise_first_title,
                      expression: "share_expertise_first_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "share_expertise_first_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.share_expertise_first_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.share_expertise_first_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(21),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.share_expertise_first_paragraph,
                      expression: "share_expertise_first_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "share_expertise_first_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.share_expertise_first_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.share_expertise_first_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Second Item")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(22),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.share_expertise_second_title,
                      expression: "share_expertise_second_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "share_expertise_second_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.share_expertise_second_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.share_expertise_second_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(23),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.share_expertise_second_paragraph,
                      expression: "share_expertise_second_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "share_expertise_second_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.share_expertise_second_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.share_expertise_second_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(24),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseFourth",
              "aria-labelledby": "headingFourth",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(25),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.video_presentation_title,
                      expression: "video_presentation_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "video_presentation_title",
                    placeholder: "Video Presentation Title",
                  },
                  domProps: { value: _vm.video_presentation_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.video_presentation_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(26),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.youtube_presentation_url,
                      expression: "youtube_presentation_url",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "youtube_presentation_url",
                    placeholder: "Youtube Video Url",
                  },
                  domProps: { value: _vm.youtube_presentation_url },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.youtube_presentation_url = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(27),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseFifth",
              "aria-labelledby": "headingFifth",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(28),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.become_a_mentor_title,
                      expression: "become_a_mentor_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "become_a_mentor_title",
                    placeholder: "Become A Mentor Title",
                  },
                  domProps: { value: _vm.become_a_mentor_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.become_a_mentor_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(29),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.become_a_mentor_button_text,
                      expression: "become_a_mentor_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "become_a_mentor_button_text",
                    placeholder: "Become A Mentor Button Text",
                  },
                  domProps: { value: _vm.become_a_mentor_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.become_a_mentor_button_text = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("First Mentor")]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.become_a_mentor_first_image,
                        expression: "become_a_mentor_first_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "become_a_mentor_first_image",
                      value: "",
                      type: "text",
                      name: "become_a_mentor_first_image",
                      required: "",
                    },
                    domProps: { value: _vm.become_a_mentor_first_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.become_a_mentor_first_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "become_a_mentor_first_image",
                        "data-preview": "become_a_mentor_first_image_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "become_a_mentor_first_image"
                          )
                        },
                      },
                    },
                    [_vm._m(30)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(31),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.become_a_mentor_first_title,
                      expression: "become_a_mentor_first_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "become_a_mentor_first_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.become_a_mentor_first_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.become_a_mentor_first_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(32),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.become_a_mentor_first_paragraph,
                      expression: "become_a_mentor_first_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "become_a_mentor_first_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.become_a_mentor_first_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.become_a_mentor_first_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Second Mentor")]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.become_a_mentor_second_image,
                        expression: "become_a_mentor_second_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "become_a_mentor_second_image",
                      value: "",
                      type: "text",
                      name: "become_a_mentor_second_image",
                      required: "",
                    },
                    domProps: { value: _vm.become_a_mentor_second_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.become_a_mentor_second_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "become_a_mentor_second_image",
                        "data-preview": "become_a_mentor_second_image_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "become_a_mentor_second_image"
                          )
                        },
                      },
                    },
                    [_vm._m(33)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(34),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.become_a_mentor_second_title,
                      expression: "become_a_mentor_second_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "become_a_mentor_second_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.become_a_mentor_second_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.become_a_mentor_second_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(35),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.become_a_mentor_second_paragraph,
                      expression: "become_a_mentor_second_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "become_a_mentor_second_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.become_a_mentor_second_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.become_a_mentor_second_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Third Mentor")]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.become_a_mentor_third_image,
                        expression: "become_a_mentor_third_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "become_a_mentor_third_image",
                      value: "",
                      type: "text",
                      name: "become_a_mentor_third_image",
                      required: "",
                    },
                    domProps: { value: _vm.become_a_mentor_third_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.become_a_mentor_third_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "become_a_mentor_third_image",
                        "data-preview": "become_a_mentor_third_image_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "become_a_mentor_third_image"
                          )
                        },
                      },
                    },
                    [_vm._m(36)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(37),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.become_a_mentor_third_title,
                      expression: "become_a_mentor_third_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "become_a_mentor_third_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.become_a_mentor_third_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.become_a_mentor_third_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(38),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.become_a_mentor_third_paragraph,
                      expression: "become_a_mentor_third_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "become_a_mentor_third_paragraph",
                    placeholder: "Paragraph",
                    rows: "4",
                  },
                  domProps: { value: _vm.become_a_mentor_third_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.become_a_mentor_third_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(39),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseSixth",
              "aria-labelledby": "headingSixth",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.become_a_partner_image,
                        expression: "become_a_partner_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "become_a_partner_image",
                      value: "",
                      type: "text",
                      name: "become_a_partner_image",
                      required: "",
                    },
                    domProps: { value: _vm.become_a_partner_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.become_a_partner_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "become_a_partner_image",
                        "data-preview": "become_a_partner_image_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "become_a_partner_image"
                          )
                        },
                      },
                    },
                    [_vm._m(40)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(41),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.become_a_partner_title,
                      expression: "become_a_partner_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "become_a_partner_title",
                    placeholder: "Become a Partner Title",
                  },
                  domProps: { value: _vm.become_a_partner_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.become_a_partner_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(42),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.become_a_partner_subtitle,
                      expression: "become_a_partner_subtitle",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "become_a_partner_subtitle",
                    placeholder: "Become a Partner Sub Title",
                  },
                  domProps: { value: _vm.become_a_partner_subtitle },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.become_a_partner_subtitle = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(43),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.become_a_partner_paragraph,
                      expression: "become_a_partner_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "become_a_partner_paragraph",
                    placeholder: "Become a Partner Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.become_a_partner_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.become_a_partner_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(44),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.become_a_partner_button_text,
                      expression: "become_a_partner_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "become_a_partner_button_text",
                    placeholder: "Become a Partner Button Text",
                  },
                  domProps: { value: _vm.become_a_partner_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.become_a_partner_button_text = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingOne" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseOne",
              "aria-expanded": "true",
              "aria-controls": "collapseOne",
            },
          },
          [_vm._v("\n          Hero Banner Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Banner Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Banner Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "banner_image" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Banner Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingTwo" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseTwo",
              "aria-expanded": "false",
              "aria-controls": "collapseTwo",
            },
          },
          [_vm._v("\n          Share Your Knowledge Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "share_knowledge_title" } }, [
      _vm._v("Share Knowledge Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "share_knowledge_first_icon" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Icon Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "share_knowledge_first_title" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "share_knowledge_first_paragraph" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "share_knowledge_second_icon" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Icon Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "share_knowledge_second_title" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "share_knowledge_second_paragraph" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "share_knowledge_third_icon" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Icon Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "share_knowledge_third_title" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "share_knowledge_third_paragraph" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingThree" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseThree",
              "aria-expanded": "false",
              "aria-controls": "collapseThree",
            },
          },
          [_vm._v("\n          Share Your Expertise Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "share_expertise_banner_image" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [
          _vm._v("Expertise Banner Image"),
        ]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "share_expertise_title" } }, [
      _vm._v("Share Expertise Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "share_expertise_paragraph" } }, [
      _vm._v("Share Expertise Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "share_expertise_first_title" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "share_expertise_first_paragraph" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "share_expertise_second_title" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "share_expertise_second_paragraph" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingFourth" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseFourth",
              "aria-expanded": "false",
              "aria-controls": "collapseFourth",
            },
          },
          [_vm._v("\n          Video Presentation Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Video Presentation Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Youtube Video Url"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingFifth" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseFifth",
              "aria-expanded": "false",
              "aria-controls": "collapseFifth",
            },
          },
          [_vm._v("\n          Become a Mentor Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "become_a_mentor_title" } }, [
      _vm._v("Become A Mentor Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "become_a_mentor_button_text" } }, [
      _vm._v("Become A Mentor Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "become_a_mentor_first_image" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Mentor Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "become_a_mentor_first_title" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "become_a_mentor_first_paragraph" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "become_a_mentor_second_image" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Mentor Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "become_a_mentor_second_title" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "become_a_mentor_second_paragraph" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "become_a_mentor_third_image" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Mentor Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "become_a_mentor_third_title" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "become_a_mentor_third_paragraph" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingSixth" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseSixth",
              "aria-expanded": "false",
              "aria-controls": "collapseSixth",
            },
          },
          [_vm._v("\n          Become a Partner Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "get_started_image" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [
          _vm._v("Partner Banner Image"),
        ]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "become_a_partner_title" } }, [
      _vm._v("Become a Partner Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "become_a_partner_subtitle" } }, [
      _vm._v("Become a Partner Sub Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "become_a_partner_paragraph" } }, [
      _vm._v("Become a Partner Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "become_a_partner_button_text" } }, [
      _vm._v("Become a Partner Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/StudentTemplateComponent.vue?vue&type=template&id=99f375fc&":
/*!***************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/template/StudentTemplateComponent.vue?vue&type=template&id=99f375fc& ***!
  \***************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "accordion", attrs: { id: "accordionExample" } }, [
      _c("div", { staticClass: "accordion-item border rounded" }, [
        _vm._m(0),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse show",
            attrs: {
              id: "collapseOne",
              "aria-labelledby": "headingOne",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(1),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_title,
                      expression: "banner_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "banner_title",
                    placeholder: "Banner Title",
                  },
                  domProps: { value: _vm.banner_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(2),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.banner_paragraph,
                      expression: "banner_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "banner_paragraph",
                    placeholder: "Banner Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.banner_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.banner_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(3),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.button_text,
                      expression: "button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "button_text",
                    placeholder: "Button Text",
                  },
                  domProps: { value: _vm.button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.button_text = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.banner_image,
                        expression: "banner_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "banner_image",
                      value: "",
                      type: "text",
                      name: "banner_image",
                      required: "",
                    },
                    domProps: { value: _vm.banner_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.banner_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "banner_image",
                        "data-preview": "hero_banner_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage("lfm", "banner_image")
                        },
                      },
                    },
                    [_vm._m(4)]
                  ),
                ]
              ),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(5),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseTwo",
              "aria-labelledby": "headingTwo",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("h5", [_vm._v("Section Title")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(6),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.event_section_title,
                      expression: "event_section_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "event_section_title",
                    placeholder: "Section Title",
                  },
                  domProps: { value: _vm.event_section_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.event_section_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Explore All Button")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(7),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.explore_button_text,
                      expression: "explore_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "explore_button_text",
                    placeholder: "Explore Button Text",
                  },
                  domProps: { value: _vm.explore_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.explore_button_text = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(8),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseThree",
              "aria-labelledby": "headingThree",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c(
                "div",
                { staticClass: "bootstrap-filestyle input-group mb-3" },
                [
                  _c("input", {
                    directives: [
                      {
                        name: "model",
                        rawName: "v-model",
                        value: _vm.career_path_banner_image,
                        expression: "career_path_banner_image",
                      },
                    ],
                    staticClass: "form-control",
                    attrs: {
                      id: "career_path_banner_image",
                      value: "",
                      type: "text",
                      name: "career_path_banner_image",
                      required: "",
                    },
                    domProps: { value: _vm.career_path_banner_image },
                    on: {
                      input: function ($event) {
                        if ($event.target.composing) {
                          return
                        }
                        _vm.career_path_banner_image = $event.target.value
                      },
                    },
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      staticClass:
                        "group-span-filestyle input-group-append lfm",
                      attrs: {
                        tabindex: "0",
                        "data-input": "career_path_banner_image",
                        "data-preview": "career_path_banner_holder",
                      },
                      on: {
                        click: function ($event) {
                          return _vm.uploadimage(
                            "lfm",
                            "career_path_banner_image"
                          )
                        },
                      },
                    },
                    [_vm._m(9)]
                  ),
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(10),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.career_path_title,
                      expression: "career_path_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "career_path_title",
                    placeholder: "Carrer Path Top Title",
                  },
                  domProps: { value: _vm.career_path_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.career_path_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(11),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.career_path_paragraph,
                      expression: "career_path_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    name: "career_path_paragraph",
                    placeholder: "Carrer Path Paragraph",
                    rows: "6",
                  },
                  domProps: { value: _vm.career_path_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.career_path_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("First Item")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(12),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.career_path_first_title,
                      expression: "career_path_first_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "career_path_first_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.career_path_first_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.career_path_first_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(13),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.career_path_first_paragraph,
                      expression: "career_path_first_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "career_path_first_paragraph",
                    placeholder: "Paragraph",
                  },
                  domProps: { value: _vm.career_path_first_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.career_path_first_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("h5", [_vm._v("Second Item")]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(14),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.career_path_second_title,
                      expression: "career_path_second_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "career_path_second_title",
                    placeholder: "Title",
                  },
                  domProps: { value: _vm.career_path_second_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.career_path_second_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(15),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.career_path_second_paragraph,
                      expression: "career_path_second_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "career_path_second_paragraph",
                    placeholder: "Paragraph",
                  },
                  domProps: { value: _vm.career_path_second_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.career_path_second_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(16),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.career_path_button_text,
                      expression: "career_path_button_text",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "career_path_button_text",
                    placeholder: "Career Path Button Text",
                  },
                  domProps: { value: _vm.career_path_button_text },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.career_path_button_text = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "accordion-item border rounded mt-2" }, [
        _vm._m(17),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "accordion-collapse collapse",
            attrs: {
              id: "collapseFour",
              "aria-labelledby": "headingFour",
              "data-bs-parent": "#accordionExample",
            },
          },
          [
            _c("div", { staticClass: "accordion-body" }, [
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(18),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.student_subscription_title,
                      expression: "student_subscription_title",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "student_subscription_title",
                    placeholder: "Student Subscription Title",
                  },
                  domProps: { value: _vm.student_subscription_title },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.student_subscription_title = $event.target.value
                    },
                  },
                }),
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3" }, [
                _vm._m(19),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.student_subscription_paragraph,
                      expression: "student_subscription_paragraph",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: {
                    type: "text",
                    name: "student_subscription_paragraph",
                    placeholder: "Student Subscription Paragraph",
                  },
                  domProps: { value: _vm.student_subscription_paragraph },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.student_subscription_paragraph = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]
        ),
      ]),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingOne" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseOne",
              "aria-expanded": "true",
              "aria-controls": "collapseOne",
            },
          },
          [_vm._v("\n          Hero Banner Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Banner Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Banner Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      { staticClass: "btn btn-secondary", attrs: { for: "banner_image" } },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Banner Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingTwo" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseTwo",
              "aria-expanded": "false",
              "aria-controls": "collapseTwo",
            },
          },
          [_vm._v("\n          Events and Seminer Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "explore_button_text" } }, [
      _vm._v("Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingThree" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseThree",
              "aria-expanded": "false",
              "aria-controls": "collapseThree",
            },
          },
          [_vm._v("\n          Carrer Path Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "label",
      {
        staticClass: "btn btn-secondary",
        attrs: { for: "career_path_banner_image" },
      },
      [
        _c("span", { staticClass: "icon-span-filestyle fas fa-folder-open" }),
        _vm._v(" "),
        _c("span", { staticClass: "buttonText" }, [_vm._v("Banner Image")]),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "career_path_title" } }, [
      _vm._v("Carrer Path Top Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "career_path_paragraph" } }, [
      _vm._v("Carrer Path Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "career_path_first_title" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "career_path_first_paragraph" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "career_path_second_title" } }, [
      _vm._v("Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "career_path_second_paragraph" } }, [
      _vm._v("Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "career_path_button_text" } }, [
      _vm._v("Career Path Button Text"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "h2",
      { staticClass: "accordion-header", attrs: { id: "headingFour" } },
      [
        _c(
          "button",
          {
            staticClass: "accordion-button fw-semibold collapsed",
            attrs: {
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#collapseFour",
              "aria-expanded": "false",
              "aria-controls": "collapseFour",
            },
          },
          [_vm._v("\n          Student Subscription Section\n        ")]
        ),
      ]
    )
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "student_subscription_title" } }, [
      _vm._v("Student Subscription Title"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "student_subscription_paragraph" } }, [
      _vm._v("Student Subscription Paragraph"),
      _c("span", { staticClass: "text-danger" }, [_vm._v("*")]),
    ])
  },
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ normalizeComponent)
/* harmony export */ });
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
      ? function () {
        injectStyles.call(
          this,
          (options.functional ? this.parent : this).$root.$options.shadowRoot
        )
      }
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

/***/ "./node_modules/vuelidate/lib/validators/alpha.js":
/*!********************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/alpha.js ***!
  \********************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var _default = (0, _common.regex)('alpha', /^[a-zA-Z]*$/);

exports["default"] = _default;

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/alphaNum.js":
/*!***********************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/alphaNum.js ***!
  \***********************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var _default = (0, _common.regex)('alphaNum', /^[a-zA-Z0-9]*$/);

exports["default"] = _default;

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/and.js":
/*!******************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/and.js ***!
  \******************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var _default = function _default() {
  for (var _len = arguments.length, validators = new Array(_len), _key = 0; _key < _len; _key++) {
    validators[_key] = arguments[_key];
  }

  return (0, _common.withParams)({
    type: 'and'
  }, function () {
    var _this = this;

    for (var _len2 = arguments.length, args = new Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
      args[_key2] = arguments[_key2];
    }

    return validators.length > 0 && validators.reduce(function (valid, fn) {
      return valid && fn.apply(_this, args);
    }, true);
  });
};

exports["default"] = _default;

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/between.js":
/*!**********************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/between.js ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var _default = function _default(min, max) {
  return (0, _common.withParams)({
    type: 'between',
    min: min,
    max: max
  }, function (value) {
    return !(0, _common.req)(value) || (!/\s/.test(value) || value instanceof Date) && +min <= +value && +max >= +value;
  });
};

exports["default"] = _default;

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/common.js":
/*!*********************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/common.js ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports.req = exports.regex = exports.ref = exports.len = void 0;
Object.defineProperty(exports, "withParams", ({
  enumerable: true,
  get: function get() {
    return _withParams.default;
  }
}));

var _withParams = _interopRequireDefault(__webpack_require__(/*! ../withParams */ "./node_modules/vuelidate/lib/withParams.js"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

var req = function req(value) {
  if (Array.isArray(value)) return !!value.length;

  if (value === undefined || value === null) {
    return false;
  }

  if (value === false) {
    return true;
  }

  if (value instanceof Date) {
    return !isNaN(value.getTime());
  }

  if (_typeof(value) === 'object') {
    for (var _ in value) {
      return true;
    }

    return false;
  }

  return !!String(value).length;
};

exports.req = req;

var len = function len(value) {
  if (Array.isArray(value)) return value.length;

  if (_typeof(value) === 'object') {
    return Object.keys(value).length;
  }

  return String(value).length;
};

exports.len = len;

var ref = function ref(reference, vm, parentVm) {
  return typeof reference === 'function' ? reference.call(vm, parentVm) : parentVm[reference];
};

exports.ref = ref;

var regex = function regex(type, expr) {
  return (0, _withParams.default)({
    type: type
  }, function (value) {
    return !req(value) || expr.test(value);
  });
};

exports.regex = regex;

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/decimal.js":
/*!**********************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/decimal.js ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var _default = (0, _common.regex)('decimal', /^[-]?\d*(\.\d+)?$/);

exports["default"] = _default;

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/email.js":
/*!********************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/email.js ***!
  \********************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var emailRegex = /^(?:[A-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[A-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9]{2,}(?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/i;

var _default = (0, _common.regex)('email', emailRegex);

exports["default"] = _default;

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/index.js":
/*!********************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/index.js ***!
  \********************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

Object.defineProperty(exports, "__esModule", ({
  value: true
}));
Object.defineProperty(exports, "alpha", ({
  enumerable: true,
  get: function get() {
    return _alpha.default;
  }
}));
Object.defineProperty(exports, "alphaNum", ({
  enumerable: true,
  get: function get() {
    return _alphaNum.default;
  }
}));
Object.defineProperty(exports, "and", ({
  enumerable: true,
  get: function get() {
    return _and.default;
  }
}));
Object.defineProperty(exports, "between", ({
  enumerable: true,
  get: function get() {
    return _between.default;
  }
}));
Object.defineProperty(exports, "decimal", ({
  enumerable: true,
  get: function get() {
    return _decimal.default;
  }
}));
Object.defineProperty(exports, "email", ({
  enumerable: true,
  get: function get() {
    return _email.default;
  }
}));
exports.helpers = void 0;
Object.defineProperty(exports, "integer", ({
  enumerable: true,
  get: function get() {
    return _integer.default;
  }
}));
Object.defineProperty(exports, "ipAddress", ({
  enumerable: true,
  get: function get() {
    return _ipAddress.default;
  }
}));
Object.defineProperty(exports, "macAddress", ({
  enumerable: true,
  get: function get() {
    return _macAddress.default;
  }
}));
Object.defineProperty(exports, "maxLength", ({
  enumerable: true,
  get: function get() {
    return _maxLength.default;
  }
}));
Object.defineProperty(exports, "maxValue", ({
  enumerable: true,
  get: function get() {
    return _maxValue.default;
  }
}));
Object.defineProperty(exports, "minLength", ({
  enumerable: true,
  get: function get() {
    return _minLength.default;
  }
}));
Object.defineProperty(exports, "minValue", ({
  enumerable: true,
  get: function get() {
    return _minValue.default;
  }
}));
Object.defineProperty(exports, "not", ({
  enumerable: true,
  get: function get() {
    return _not.default;
  }
}));
Object.defineProperty(exports, "numeric", ({
  enumerable: true,
  get: function get() {
    return _numeric.default;
  }
}));
Object.defineProperty(exports, "or", ({
  enumerable: true,
  get: function get() {
    return _or.default;
  }
}));
Object.defineProperty(exports, "required", ({
  enumerable: true,
  get: function get() {
    return _required.default;
  }
}));
Object.defineProperty(exports, "requiredIf", ({
  enumerable: true,
  get: function get() {
    return _requiredIf.default;
  }
}));
Object.defineProperty(exports, "requiredUnless", ({
  enumerable: true,
  get: function get() {
    return _requiredUnless.default;
  }
}));
Object.defineProperty(exports, "sameAs", ({
  enumerable: true,
  get: function get() {
    return _sameAs.default;
  }
}));
Object.defineProperty(exports, "url", ({
  enumerable: true,
  get: function get() {
    return _url.default;
  }
}));

var _alpha = _interopRequireDefault(__webpack_require__(/*! ./alpha */ "./node_modules/vuelidate/lib/validators/alpha.js"));

var _alphaNum = _interopRequireDefault(__webpack_require__(/*! ./alphaNum */ "./node_modules/vuelidate/lib/validators/alphaNum.js"));

var _numeric = _interopRequireDefault(__webpack_require__(/*! ./numeric */ "./node_modules/vuelidate/lib/validators/numeric.js"));

var _between = _interopRequireDefault(__webpack_require__(/*! ./between */ "./node_modules/vuelidate/lib/validators/between.js"));

var _email = _interopRequireDefault(__webpack_require__(/*! ./email */ "./node_modules/vuelidate/lib/validators/email.js"));

var _ipAddress = _interopRequireDefault(__webpack_require__(/*! ./ipAddress */ "./node_modules/vuelidate/lib/validators/ipAddress.js"));

var _macAddress = _interopRequireDefault(__webpack_require__(/*! ./macAddress */ "./node_modules/vuelidate/lib/validators/macAddress.js"));

var _maxLength = _interopRequireDefault(__webpack_require__(/*! ./maxLength */ "./node_modules/vuelidate/lib/validators/maxLength.js"));

var _minLength = _interopRequireDefault(__webpack_require__(/*! ./minLength */ "./node_modules/vuelidate/lib/validators/minLength.js"));

var _required = _interopRequireDefault(__webpack_require__(/*! ./required */ "./node_modules/vuelidate/lib/validators/required.js"));

var _requiredIf = _interopRequireDefault(__webpack_require__(/*! ./requiredIf */ "./node_modules/vuelidate/lib/validators/requiredIf.js"));

var _requiredUnless = _interopRequireDefault(__webpack_require__(/*! ./requiredUnless */ "./node_modules/vuelidate/lib/validators/requiredUnless.js"));

var _sameAs = _interopRequireDefault(__webpack_require__(/*! ./sameAs */ "./node_modules/vuelidate/lib/validators/sameAs.js"));

var _url = _interopRequireDefault(__webpack_require__(/*! ./url */ "./node_modules/vuelidate/lib/validators/url.js"));

var _or = _interopRequireDefault(__webpack_require__(/*! ./or */ "./node_modules/vuelidate/lib/validators/or.js"));

var _and = _interopRequireDefault(__webpack_require__(/*! ./and */ "./node_modules/vuelidate/lib/validators/and.js"));

var _not = _interopRequireDefault(__webpack_require__(/*! ./not */ "./node_modules/vuelidate/lib/validators/not.js"));

var _minValue = _interopRequireDefault(__webpack_require__(/*! ./minValue */ "./node_modules/vuelidate/lib/validators/minValue.js"));

var _maxValue = _interopRequireDefault(__webpack_require__(/*! ./maxValue */ "./node_modules/vuelidate/lib/validators/maxValue.js"));

var _integer = _interopRequireDefault(__webpack_require__(/*! ./integer */ "./node_modules/vuelidate/lib/validators/integer.js"));

var _decimal = _interopRequireDefault(__webpack_require__(/*! ./decimal */ "./node_modules/vuelidate/lib/validators/decimal.js"));

var helpers = _interopRequireWildcard(__webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js"));

exports.helpers = helpers;

function _getRequireWildcardCache(nodeInterop) { if (typeof WeakMap !== "function") return null; var cacheBabelInterop = new WeakMap(); var cacheNodeInterop = new WeakMap(); return (_getRequireWildcardCache = function _getRequireWildcardCache(nodeInterop) { return nodeInterop ? cacheNodeInterop : cacheBabelInterop; })(nodeInterop); }

function _interopRequireWildcard(obj, nodeInterop) { if (!nodeInterop && obj && obj.__esModule) { return obj; } if (obj === null || _typeof(obj) !== "object" && typeof obj !== "function") { return { default: obj }; } var cache = _getRequireWildcardCache(nodeInterop); if (cache && cache.has(obj)) { return cache.get(obj); } var newObj = {}; var hasPropertyDescriptor = Object.defineProperty && Object.getOwnPropertyDescriptor; for (var key in obj) { if (key !== "default" && Object.prototype.hasOwnProperty.call(obj, key)) { var desc = hasPropertyDescriptor ? Object.getOwnPropertyDescriptor(obj, key) : null; if (desc && (desc.get || desc.set)) { Object.defineProperty(newObj, key, desc); } else { newObj[key] = obj[key]; } } } newObj.default = obj; if (cache) { cache.set(obj, newObj); } return newObj; }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/integer.js":
/*!**********************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/integer.js ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var _default = (0, _common.regex)('integer', /(^[0-9]*$)|(^-[0-9]+$)/);

exports["default"] = _default;

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/ipAddress.js":
/*!************************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/ipAddress.js ***!
  \************************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var _default = (0, _common.withParams)({
  type: 'ipAddress'
}, function (value) {
  if (!(0, _common.req)(value)) {
    return true;
  }

  if (typeof value !== 'string') {
    return false;
  }

  var nibbles = value.split('.');
  return nibbles.length === 4 && nibbles.every(nibbleValid);
});

exports["default"] = _default;

var nibbleValid = function nibbleValid(nibble) {
  if (nibble.length > 3 || nibble.length === 0) {
    return false;
  }

  if (nibble[0] === '0' && nibble !== '0') {
    return false;
  }

  if (!nibble.match(/^\d+$/)) {
    return false;
  }

  var numeric = +nibble | 0;
  return numeric >= 0 && numeric <= 255;
};

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/macAddress.js":
/*!*************************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/macAddress.js ***!
  \*************************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var _default = function _default() {
  var separator = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : ':';
  return (0, _common.withParams)({
    type: 'macAddress'
  }, function (value) {
    if (!(0, _common.req)(value)) {
      return true;
    }

    if (typeof value !== 'string') {
      return false;
    }

    var parts = typeof separator === 'string' && separator !== '' ? value.split(separator) : value.length === 12 || value.length === 16 ? value.match(/.{2}/g) : null;
    return parts !== null && (parts.length === 6 || parts.length === 8) && parts.every(hexValid);
  });
};

exports["default"] = _default;

var hexValid = function hexValid(hex) {
  return hex.toLowerCase().match(/^[0-9a-f]{2}$/);
};

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/maxLength.js":
/*!************************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/maxLength.js ***!
  \************************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var _default = function _default(length) {
  return (0, _common.withParams)({
    type: 'maxLength',
    max: length
  }, function (value) {
    return !(0, _common.req)(value) || (0, _common.len)(value) <= length;
  });
};

exports["default"] = _default;

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/maxValue.js":
/*!***********************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/maxValue.js ***!
  \***********************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var _default = function _default(max) {
  return (0, _common.withParams)({
    type: 'maxValue',
    max: max
  }, function (value) {
    return !(0, _common.req)(value) || (!/\s/.test(value) || value instanceof Date) && +value <= +max;
  });
};

exports["default"] = _default;

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/minLength.js":
/*!************************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/minLength.js ***!
  \************************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var _default = function _default(length) {
  return (0, _common.withParams)({
    type: 'minLength',
    min: length
  }, function (value) {
    return !(0, _common.req)(value) || (0, _common.len)(value) >= length;
  });
};

exports["default"] = _default;

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/minValue.js":
/*!***********************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/minValue.js ***!
  \***********************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var _default = function _default(min) {
  return (0, _common.withParams)({
    type: 'minValue',
    min: min
  }, function (value) {
    return !(0, _common.req)(value) || (!/\s/.test(value) || value instanceof Date) && +value >= +min;
  });
};

exports["default"] = _default;

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/not.js":
/*!******************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/not.js ***!
  \******************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var _default = function _default(validator) {
  return (0, _common.withParams)({
    type: 'not'
  }, function (value, vm) {
    return !(0, _common.req)(value) || !validator.call(this, value, vm);
  });
};

exports["default"] = _default;

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/numeric.js":
/*!**********************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/numeric.js ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var _default = (0, _common.regex)('numeric', /^[0-9]*$/);

exports["default"] = _default;

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/or.js":
/*!*****************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/or.js ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var _default = function _default() {
  for (var _len = arguments.length, validators = new Array(_len), _key = 0; _key < _len; _key++) {
    validators[_key] = arguments[_key];
  }

  return (0, _common.withParams)({
    type: 'or'
  }, function () {
    var _this = this;

    for (var _len2 = arguments.length, args = new Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
      args[_key2] = arguments[_key2];
    }

    return validators.length > 0 && validators.reduce(function (valid, fn) {
      return valid || fn.apply(_this, args);
    }, false);
  });
};

exports["default"] = _default;

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/required.js":
/*!***********************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/required.js ***!
  \***********************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var _default = (0, _common.withParams)({
  type: 'required'
}, function (value) {
  if (typeof value === 'string') {
    return (0, _common.req)(value.trim());
  }

  return (0, _common.req)(value);
});

exports["default"] = _default;

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/requiredIf.js":
/*!*************************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/requiredIf.js ***!
  \*************************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var _default = function _default(prop) {
  return (0, _common.withParams)({
    type: 'requiredIf',
    prop: prop
  }, function (value, parentVm) {
    return (0, _common.ref)(prop, this, parentVm) ? (0, _common.req)(value) : true;
  });
};

exports["default"] = _default;

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/requiredUnless.js":
/*!*****************************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/requiredUnless.js ***!
  \*****************************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var _default = function _default(prop) {
  return (0, _common.withParams)({
    type: 'requiredUnless',
    prop: prop
  }, function (value, parentVm) {
    return !(0, _common.ref)(prop, this, parentVm) ? (0, _common.req)(value) : true;
  });
};

exports["default"] = _default;

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/sameAs.js":
/*!*********************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/sameAs.js ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var _default = function _default(equalTo) {
  return (0, _common.withParams)({
    type: 'sameAs',
    eq: equalTo
  }, function (value, parentVm) {
    return value === (0, _common.ref)(equalTo, this, parentVm);
  });
};

exports["default"] = _default;

/***/ }),

/***/ "./node_modules/vuelidate/lib/validators/url.js":
/*!******************************************************!*\
  !*** ./node_modules/vuelidate/lib/validators/url.js ***!
  \******************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;

var _common = __webpack_require__(/*! ./common */ "./node_modules/vuelidate/lib/validators/common.js");

var urlRegex = /^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z0-9\u00a1-\uffff][a-z0-9\u00a1-\uffff_-]{0,62})?[a-z0-9\u00a1-\uffff]\.)+(?:[a-z\u00a1-\uffff]{2,}\.?))(?::\d{2,5})?(?:[/?#]\S*)?$/i;

var _default = (0, _common.regex)('url', urlRegex);

exports["default"] = _default;

/***/ }),

/***/ "./node_modules/vuelidate/lib/withParams.js":
/*!**************************************************!*\
  !*** ./node_modules/vuelidate/lib/withParams.js ***!
  \**************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

/* provided dependency */ var process = __webpack_require__(/*! process/browser.js */ "./node_modules/process/browser.js");


Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;
var withParams = process.env.BUILD === 'web' ? (__webpack_require__(/*! ./withParamsBrowser */ "./node_modules/vuelidate/lib/withParamsBrowser.js").withParams) : (__webpack_require__(/*! ./params */ "./node_modules/vuelidate/lib/params.js").withParams);
var _default = withParams;
exports["default"] = _default;

/***/ }),

/***/ "./node_modules/vuelidate/lib/withParamsBrowser.js":
/*!*********************************************************!*\
  !*** ./node_modules/vuelidate/lib/withParamsBrowser.js ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports.withParams = void 0;

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

var root = typeof window !== 'undefined' ? window : typeof __webpack_require__.g !== 'undefined' ? __webpack_require__.g : {};

var fakeWithParams = function fakeWithParams(paramsOrClosure, maybeValidator) {
  if (_typeof(paramsOrClosure) === 'object' && maybeValidator !== undefined) {
    return maybeValidator;
  }

  return paramsOrClosure(function () {});
};

var withParams = root.vuelidate ? root.vuelidate.withParams : fakeWithParams;
exports.withParams = withParams;

/***/ })

}]);