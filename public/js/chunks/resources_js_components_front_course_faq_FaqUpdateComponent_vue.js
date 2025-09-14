"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_front_course_faq_FaqUpdateComponent_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/front_course/faq/FaqUpdateComponent.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/front_course/faq/FaqUpdateComponent.vue?vue&type=script&lang=js& ***!
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
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "FaqUpdateComponent",
  props: ["course_id", "course"],
  data: function data() {
    return {
      formData: {
        faqs: [{
          question: "",
          answer: ""
        }],
        course_id: ""
      }
    };
  },
  methods: {
    add: function add(index) {
      this.formData.faqs.push({
        question: "",
        answer: ""
      });
    },
    remove: function remove(index) {
      this.formData.faqs.splice(index, 1);
    },
    CreateOrUpdate: function CreateOrUpdate() {
      var self = this;
      axios.post("/faqs/store", self.formData).then(function (res) {
        window.location.href = "/faqs/" + self.formData.course_id;
      })["catch"](function (err) {
        console.log(err);
        self.showSomethingWrong();
      });
    }
  },
  mounted: function mounted() {
    var self = this;
    self.formData.course_id = self.course_id;

    if (self.course.faqs.length > 0) {
      self.formData.faqs = self.course.faqs;
    }
  }
});

/***/ }),

/***/ "./resources/js/components/front_course/faq/FaqUpdateComponent.vue":
/*!*************************************************************************!*\
  !*** ./resources/js/components/front_course/faq/FaqUpdateComponent.vue ***!
  \*************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _FaqUpdateComponent_vue_vue_type_template_id_20d0725a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./FaqUpdateComponent.vue?vue&type=template&id=20d0725a& */ "./resources/js/components/front_course/faq/FaqUpdateComponent.vue?vue&type=template&id=20d0725a&");
/* harmony import */ var _FaqUpdateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./FaqUpdateComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/front_course/faq/FaqUpdateComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _FaqUpdateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _FaqUpdateComponent_vue_vue_type_template_id_20d0725a___WEBPACK_IMPORTED_MODULE_0__.render,
  _FaqUpdateComponent_vue_vue_type_template_id_20d0725a___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/front_course/faq/FaqUpdateComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/front_course/faq/FaqUpdateComponent.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************!*\
  !*** ./resources/js/components/front_course/faq/FaqUpdateComponent.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_FaqUpdateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./FaqUpdateComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/front_course/faq/FaqUpdateComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_FaqUpdateComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/front_course/faq/FaqUpdateComponent.vue?vue&type=template&id=20d0725a&":
/*!********************************************************************************************************!*\
  !*** ./resources/js/components/front_course/faq/FaqUpdateComponent.vue?vue&type=template&id=20d0725a& ***!
  \********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_FaqUpdateComponent_vue_vue_type_template_id_20d0725a___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_FaqUpdateComponent_vue_vue_type_template_id_20d0725a___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_FaqUpdateComponent_vue_vue_type_template_id_20d0725a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./FaqUpdateComponent.vue?vue&type=template&id=20d0725a& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/front_course/faq/FaqUpdateComponent.vue?vue&type=template&id=20d0725a&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/front_course/faq/FaqUpdateComponent.vue?vue&type=template&id=20d0725a&":
/*!***********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/front_course/faq/FaqUpdateComponent.vue?vue&type=template&id=20d0725a& ***!
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
  return _c(
    "form",
    {
      on: {
        submit: function ($event) {
          $event.preventDefault()
          return _vm.CreateOrUpdate.apply(null, arguments)
        },
      },
    },
    [
      _vm._l(_vm.formData.faqs, function (faq, i) {
        return _c("div", { key: i }, [
          _c("div", { staticClass: "form-group my-3" }, [
            _vm._m(0, true),
            _vm._v(" "),
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: faq.question,
                  expression: "faq.question",
                },
              ],
              staticClass: "form-control",
              attrs: {
                name: "title",
                type: "text",
                placeholder: "Add a question",
                required: "",
              },
              domProps: { value: faq.question },
              on: {
                input: function ($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.$set(faq, "question", $event.target.value)
                },
              },
            }),
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "form-group mb-3" }, [
            _vm._m(1, true),
            _vm._v(" "),
            _c("textarea", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: faq.answer,
                  expression: "faq.answer",
                },
              ],
              staticClass: "form-control",
              staticStyle: { height: "150px" },
              attrs: {
                name: "answer",
                placeholder: "Enter answer here..",
                required: "",
              },
              domProps: { value: faq.answer },
              on: {
                input: function ($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.$set(faq, "answer", $event.target.value)
                },
              },
            }),
          ]),
          _vm._v(" "),
          _c("span", { staticClass: "mt-3" }, [
            _c(
              "button",
              {
                directives: [
                  {
                    name: "show",
                    rawName: "v-show",
                    value: i || (!i && _vm.formData.faqs.length > 1),
                    expression: "i || (!i && formData.faqs.length > 1)",
                  },
                ],
                staticClass: "btn btn-danger btn-sm",
                on: {
                  click: function ($event) {
                    return _vm.remove(i)
                  },
                },
              },
              [
                _c("i", { staticClass: "ri-delete-bin-line" }),
                _vm._v("\n        Remove\n      "),
              ]
            ),
            _vm._v(" "),
            _c(
              "button",
              {
                directives: [
                  {
                    name: "show",
                    rawName: "v-show",
                    value: i == _vm.formData.faqs.length - 1,
                    expression: "i == formData.faqs.length - 1",
                  },
                ],
                staticClass: "btn btn-success btn-sm",
                on: {
                  click: function ($event) {
                    return _vm.add(i)
                  },
                },
              },
              [
                _c("i", { staticClass: "ri-add-fill" }),
                _vm._v("\n        Add New\n      "),
              ]
            ),
          ]),
        ])
      }),
      _vm._v(" "),
      _c("input", {
        directives: [
          {
            name: "model",
            rawName: "v-model",
            value: _vm.formData.course_id,
            expression: "formData.course_id",
          },
        ],
        attrs: { type: "hidden" },
        domProps: { value: _vm.formData.course_id },
        on: {
          input: function ($event) {
            if ($event.target.composing) {
              return
            }
            _vm.$set(_vm.formData, "course_id", $event.target.value)
          },
        },
      }),
      _vm._v(" "),
      _c("div", { staticClass: "mt-4 mb-3" }, [
        _c(
          "button",
          {
            staticClass: "ic-btn waves-effect waves-lightml-2 me-2",
            attrs: { type: "submit" },
          },
          [_vm._v("\n      Update & Change\n    ")]
        ),
        _vm._v(" "),
        _c(
          "a",
          {
            staticClass: "ic-btn waves-effect",
            attrs: { href: "/faqs/" + _vm.formData.course_id },
          },
          [_vm._v("\n      Cancel\n    ")]
        ),
      ]),
    ],
    2
  )
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { staticClass: "form-label" }, [
      _vm._v("FAQ Question\n        "),
      _c("span", { staticClass: "color-red" }, [_vm._v("*")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { staticClass: "form-label" }, [
      _vm._v("FAQ Answer\n        "),
      _c("span", { staticClass: "color-red" }, [_vm._v("*")]),
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


/***/ })

}]);