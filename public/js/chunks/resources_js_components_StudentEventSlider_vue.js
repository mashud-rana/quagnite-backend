"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_StudentEventSlider_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/StudentEventSlider.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/StudentEventSlider.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************************************************************/
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
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "EventSlider",
  props: ["events", "seminers"],
  data: function data() {
    return {
      event: true,
      seminar: false
    };
  },
  mounted: function mounted() {
    this.updateSlider();
  },
  methods: {
    EventActive: function EventActive() {
      this.event = true;
      this.seminar = false;
      this.updateSlider();
    },
    SeminarActive: function SeminarActive() {
      this.seminar = true;
      this.event = false;
      this.updateSlider();
    },
    updateSlider: function updateSlider() {
      Vue.nextTick(function () {
        $(".ic-event-slider").slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          fade: false,
          dots: false,
          autoplay: false,
          infinite: false,
          prevArrow: ".ic-event-prev",
          nextArrow: ".ic-event-next",
          responsive: [{
            breakpoint: 1280,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          }, {
            breakpoint: 992,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }]
        });
      });
    }
  }
});

/***/ }),

/***/ "./resources/js/components/StudentEventSlider.vue":
/*!********************************************************!*\
  !*** ./resources/js/components/StudentEventSlider.vue ***!
  \********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _StudentEventSlider_vue_vue_type_template_id_3f6e788b___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./StudentEventSlider.vue?vue&type=template&id=3f6e788b& */ "./resources/js/components/StudentEventSlider.vue?vue&type=template&id=3f6e788b&");
/* harmony import */ var _StudentEventSlider_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./StudentEventSlider.vue?vue&type=script&lang=js& */ "./resources/js/components/StudentEventSlider.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _StudentEventSlider_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _StudentEventSlider_vue_vue_type_template_id_3f6e788b___WEBPACK_IMPORTED_MODULE_0__.render,
  _StudentEventSlider_vue_vue_type_template_id_3f6e788b___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/StudentEventSlider.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/StudentEventSlider.vue?vue&type=script&lang=js&":
/*!*********************************************************************************!*\
  !*** ./resources/js/components/StudentEventSlider.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_StudentEventSlider_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./StudentEventSlider.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/StudentEventSlider.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_StudentEventSlider_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/StudentEventSlider.vue?vue&type=template&id=3f6e788b&":
/*!***************************************************************************************!*\
  !*** ./resources/js/components/StudentEventSlider.vue?vue&type=template&id=3f6e788b& ***!
  \***************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_StudentEventSlider_vue_vue_type_template_id_3f6e788b___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_StudentEventSlider_vue_vue_type_template_id_3f6e788b___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_StudentEventSlider_vue_vue_type_template_id_3f6e788b___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./StudentEventSlider.vue?vue&type=template&id=3f6e788b& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/StudentEventSlider.vue?vue&type=template&id=3f6e788b&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/StudentEventSlider.vue?vue&type=template&id=3f6e788b&":
/*!******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/StudentEventSlider.vue?vue&type=template&id=3f6e788b& ***!
  \******************************************************************************************************************************************************************************************************************************/
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
    _c("div", { staticClass: "ic-event-heading mb-40" }, [
      _c("div", { staticClass: "ic-event-heading-left" }, [
        _c(
          "a",
          {
            staticClass: "ic-btn ic-tab-link cursor-pointer",
            class: _vm.event == true ? "active" : "",
            attrs: { "data-tabs": "allEvents" },
            on: {
              click: function ($event) {
                return _vm.EventActive()
              },
            },
          },
          [_vm._v("\n        Events\n      ")]
        ),
        _vm._v(" "),
        _c(
          "a",
          {
            staticClass: "ic-btn ic-tab-link cursor-pointer",
            class: _vm.seminar == true ? "active" : "",
            attrs: { "data-tabs": "allSeminars" },
            on: {
              click: function ($event) {
                return _vm.SeminarActive()
              },
            },
          },
          [_vm._v("\n        Seminers\n      ")]
        ),
      ]),
      _vm._v(" "),
      _vm._m(0),
    ]),
    _vm._v(" "),
    _vm.event
      ? _c(
          "div",
          {
            staticClass: "ic-event-slider-wraper ic-tab-pane active",
            attrs: { id: "allEvents" },
          },
          [
            _c(
              "div",
              { staticClass: "ic-event-slider" },
              _vm._l(_vm.events, function (event, key) {
                return _c(
                  "div",
                  { key: key, staticClass: "ic-event-item padding-24" },
                  [
                    _c("div", { staticClass: "ic-event-item-img mb-24" }, [
                      _c(
                        "a",
                        { attrs: { href: "/event-details/" + event.slug } },
                        [
                          _c("img", {
                            staticClass: "img-fluid",
                            attrs: { src: event.thumb_url, alt: "event" },
                          }),
                        ]
                      ),
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "ic-event-item-content" }, [
                      _c(
                        "a",
                        { attrs: { href: "/event-details/" + event.slug } },
                        [
                          _c(
                            "h3",
                            {
                              staticClass: "color-shuttleGray mb-24",
                              attrs: { title: event.title },
                            },
                            [
                              _vm._v(
                                "\n              " +
                                  _vm._s(
                                    _vm._f("limitedEventTitle")(event.title)
                                  ) +
                                  "\n            "
                              ),
                            ]
                          ),
                        ]
                      ),
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "ic-event-action" }, [
                      _c("a", { attrs: { href: "#" } }, [
                        _c("i", { staticClass: "ri-calendar-line" }),
                        _vm._v(
                          _vm._s(_vm._f("customDateTime")(event.start_date))
                        ),
                      ]),
                      _vm._v(" "),
                      _c("a", { attrs: { href: "#" } }, [
                        _c("i", { staticClass: "ri-navigation-line" }),
                        _vm._v(_vm._s(event.place_type)),
                      ]),
                      _vm._v(" "),
                      _c("a", { attrs: { href: "#" } }, [
                        _c("i", { staticClass: "ri-share-line" }),
                        _vm._v(_vm._s(event.total_share)),
                      ]),
                    ]),
                  ]
                )
              }),
              0
            ),
          ]
        )
      : _vm._e(),
    _vm._v(" "),
    _vm.seminar
      ? _c(
          "div",
          {
            staticClass: "ic-event-slider-wraper ic-tab-pane active",
            attrs: { id: "allSeminars" },
          },
          [
            _c(
              "div",
              { staticClass: "ic-event-slider" },
              _vm._l(_vm.seminers, function (seminer, key) {
                return _c(
                  "div",
                  { key: key, staticClass: "ic-event-item padding-24" },
                  [
                    _c("div", { staticClass: "ic-event-item-img mb-24" }, [
                      _c("a", { attrs: { href: seminer.link } }, [
                        _c("img", {
                          staticClass: "img-fluid",
                          attrs: { src: seminer.thumb_url, alt: "seminer" },
                        }),
                      ]),
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "ic-event-item-content" }, [
                      _c("a", { attrs: { href: seminer.link } }, [
                        _c(
                          "h3",
                          {
                            staticClass: "color-shuttleGray mb-24",
                            attrs: { title: seminer.title },
                          },
                          [
                            _vm._v(
                              "\n              " +
                                _vm._s(
                                  _vm._f("limitedEventTitle")(seminer.title)
                                ) +
                                "\n            "
                            ),
                          ]
                        ),
                      ]),
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "ic-event-action" }, [
                      _c("a", { attrs: { href: "#" } }, [
                        _c("i", { staticClass: "ri-calendar-line" }),
                        _vm._v(
                          _vm._s(_vm._f("customDateTime")(seminer.start_date))
                        ),
                      ]),
                      _vm._v(" "),
                      _c("a", { attrs: { href: "#" } }, [
                        _c("i", { staticClass: "ri-navigation-line" }),
                        _vm._v(_vm._s(seminer.place_type)),
                      ]),
                      _vm._v(" "),
                      _c("a", { attrs: { href: "#" } }, [
                        _c("i", { staticClass: "ri-share-line" }),
                        _vm._v(_vm._s(seminer.total_share)),
                      ]),
                    ]),
                  ]
                )
              }),
              0
            ),
          ]
        )
      : _vm._e(),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "ic-event-heading-right" }, [
      _c("div", { staticClass: "explore-btn" }, [
        _c("a", { staticClass: "ic-btn", attrs: { href: "/event" } }, [
          _vm._v("\n          Explore All\n          "),
          _c("i", { staticClass: "ri-arrow-right-up-line icon-right" }),
        ]),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "event-next-prev slider-next-prev-wrap" }, [
        _c(
          "a",
          {
            staticClass: "ic-event-prev slider-next-prev",
            attrs: { href: "javascript:void(0)" },
          },
          [_c("i", { staticClass: "ri-arrow-left-line" })]
        ),
        _vm._v(" "),
        _c(
          "a",
          {
            staticClass: "ic-event-next slider-next-prev",
            attrs: { href: "javascript:void(0)" },
          },
          [_c("i", { staticClass: "ri-arrow-right-line" })]
        ),
      ]),
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