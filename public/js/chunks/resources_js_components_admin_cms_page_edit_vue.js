(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_admin_cms_page_edit_vue"],{

/***/ "./node_modules/@babel/runtime/helpers/OverloadYield.js":
/*!**************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/OverloadYield.js ***!
  \**************************************************************/
/***/ ((module) => {

function _OverloadYield(e, d) {
  this.v = e, this.k = d;
}
module.exports = _OverloadYield, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/regenerator.js":
/*!************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/regenerator.js ***!
  \************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var regeneratorDefine = __webpack_require__(/*! ./regeneratorDefine.js */ "./node_modules/@babel/runtime/helpers/regeneratorDefine.js");
function _regenerator() {
  /*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/babel/babel/blob/main/packages/babel-helpers/LICENSE */
  var e,
    t,
    r = "function" == typeof Symbol ? Symbol : {},
    n = r.iterator || "@@iterator",
    o = r.toStringTag || "@@toStringTag";
  function i(r, n, o, i) {
    var c = n && n.prototype instanceof Generator ? n : Generator,
      u = Object.create(c.prototype);
    return regeneratorDefine(u, "_invoke", function (r, n, o) {
      var i,
        c,
        u,
        f = 0,
        p = o || [],
        y = !1,
        G = {
          p: 0,
          n: 0,
          v: e,
          a: d,
          f: d.bind(e, 4),
          d: function d(t, r) {
            return i = t, c = 0, u = e, G.n = r, a;
          }
        };
      function d(r, n) {
        for (c = r, u = n, t = 0; !y && f && !o && t < p.length; t++) {
          var o,
            i = p[t],
            d = G.p,
            l = i[2];
          r > 3 ? (o = l === n) && (u = i[(c = i[4]) ? 5 : (c = 3, 3)], i[4] = i[5] = e) : i[0] <= d && ((o = r < 2 && d < i[1]) ? (c = 0, G.v = n, G.n = i[1]) : d < l && (o = r < 3 || i[0] > n || n > l) && (i[4] = r, i[5] = n, G.n = l, c = 0));
        }
        if (o || r > 1) return a;
        throw y = !0, n;
      }
      return function (o, p, l) {
        if (f > 1) throw TypeError("Generator is already running");
        for (y && 1 === p && d(p, l), c = p, u = l; (t = c < 2 ? e : u) || !y;) {
          i || (c ? c < 3 ? (c > 1 && (G.n = -1), d(c, u)) : G.n = u : G.v = u);
          try {
            if (f = 2, i) {
              if (c || (o = "next"), t = i[o]) {
                if (!(t = t.call(i, u))) throw TypeError("iterator result is not an object");
                if (!t.done) return t;
                u = t.value, c < 2 && (c = 0);
              } else 1 === c && (t = i["return"]) && t.call(i), c < 2 && (u = TypeError("The iterator does not provide a '" + o + "' method"), c = 1);
              i = e;
            } else if ((t = (y = G.n < 0) ? u : r.call(n, G)) !== a) break;
          } catch (t) {
            i = e, c = 1, u = t;
          } finally {
            f = 1;
          }
        }
        return {
          value: t,
          done: y
        };
      };
    }(r, o, i), !0), u;
  }
  var a = {};
  function Generator() {}
  function GeneratorFunction() {}
  function GeneratorFunctionPrototype() {}
  t = Object.getPrototypeOf;
  var c = [][n] ? t(t([][n]())) : (regeneratorDefine(t = {}, n, function () {
      return this;
    }), t),
    u = GeneratorFunctionPrototype.prototype = Generator.prototype = Object.create(c);
  function f(e) {
    return Object.setPrototypeOf ? Object.setPrototypeOf(e, GeneratorFunctionPrototype) : (e.__proto__ = GeneratorFunctionPrototype, regeneratorDefine(e, o, "GeneratorFunction")), e.prototype = Object.create(u), e;
  }
  return GeneratorFunction.prototype = GeneratorFunctionPrototype, regeneratorDefine(u, "constructor", GeneratorFunctionPrototype), regeneratorDefine(GeneratorFunctionPrototype, "constructor", GeneratorFunction), GeneratorFunction.displayName = "GeneratorFunction", regeneratorDefine(GeneratorFunctionPrototype, o, "GeneratorFunction"), regeneratorDefine(u), regeneratorDefine(u, o, "Generator"), regeneratorDefine(u, n, function () {
    return this;
  }), regeneratorDefine(u, "toString", function () {
    return "[object Generator]";
  }), (module.exports = _regenerator = function _regenerator() {
    return {
      w: i,
      m: f
    };
  }, module.exports.__esModule = true, module.exports["default"] = module.exports)();
}
module.exports = _regenerator, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/regeneratorAsync.js":
/*!*****************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/regeneratorAsync.js ***!
  \*****************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var regeneratorAsyncGen = __webpack_require__(/*! ./regeneratorAsyncGen.js */ "./node_modules/@babel/runtime/helpers/regeneratorAsyncGen.js");
function _regeneratorAsync(n, e, r, t, o) {
  var a = regeneratorAsyncGen(n, e, r, t, o);
  return a.next().then(function (n) {
    return n.done ? n.value : a.next();
  });
}
module.exports = _regeneratorAsync, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/regeneratorAsyncGen.js":
/*!********************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/regeneratorAsyncGen.js ***!
  \********************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var regenerator = __webpack_require__(/*! ./regenerator.js */ "./node_modules/@babel/runtime/helpers/regenerator.js");
var regeneratorAsyncIterator = __webpack_require__(/*! ./regeneratorAsyncIterator.js */ "./node_modules/@babel/runtime/helpers/regeneratorAsyncIterator.js");
function _regeneratorAsyncGen(r, e, t, o, n) {
  return new regeneratorAsyncIterator(regenerator().w(r, e, t, o), n || Promise);
}
module.exports = _regeneratorAsyncGen, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/regeneratorAsyncIterator.js":
/*!*************************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/regeneratorAsyncIterator.js ***!
  \*************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var OverloadYield = __webpack_require__(/*! ./OverloadYield.js */ "./node_modules/@babel/runtime/helpers/OverloadYield.js");
var regeneratorDefine = __webpack_require__(/*! ./regeneratorDefine.js */ "./node_modules/@babel/runtime/helpers/regeneratorDefine.js");
function AsyncIterator(t, e) {
  function n(r, o, i, f) {
    try {
      var c = t[r](o),
        u = c.value;
      return u instanceof OverloadYield ? e.resolve(u.v).then(function (t) {
        n("next", t, i, f);
      }, function (t) {
        n("throw", t, i, f);
      }) : e.resolve(u).then(function (t) {
        c.value = t, i(c);
      }, function (t) {
        return n("throw", t, i, f);
      });
    } catch (t) {
      f(t);
    }
  }
  var r;
  this.next || (regeneratorDefine(AsyncIterator.prototype), regeneratorDefine(AsyncIterator.prototype, "function" == typeof Symbol && Symbol.asyncIterator || "@asyncIterator", function () {
    return this;
  })), regeneratorDefine(this, "_invoke", function (t, o, i) {
    function f() {
      return new e(function (e, r) {
        n(t, i, e, r);
      });
    }
    return r = r ? r.then(f, f) : f();
  }, !0);
}
module.exports = AsyncIterator, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/regeneratorDefine.js":
/*!******************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/regeneratorDefine.js ***!
  \******************************************************************/
/***/ ((module) => {

function _regeneratorDefine(e, r, n, t) {
  var i = Object.defineProperty;
  try {
    i({}, "", {});
  } catch (e) {
    i = 0;
  }
  module.exports = _regeneratorDefine = function regeneratorDefine(e, r, n, t) {
    function o(r, n) {
      _regeneratorDefine(e, r, function (e) {
        return this._invoke(r, n, e);
      });
    }
    r ? i ? i(e, r, {
      value: n,
      enumerable: !t,
      configurable: !t,
      writable: !t
    }) : e[r] = n : (o("next", 0), o("throw", 1), o("return", 2));
  }, module.exports.__esModule = true, module.exports["default"] = module.exports, _regeneratorDefine(e, r, n, t);
}
module.exports = _regeneratorDefine, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/regeneratorKeys.js":
/*!****************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/regeneratorKeys.js ***!
  \****************************************************************/
/***/ ((module) => {

function _regeneratorKeys(e) {
  var n = Object(e),
    r = [];
  for (var t in n) r.unshift(t);
  return function e() {
    for (; r.length;) if ((t = r.pop()) in n) return e.value = t, e.done = !1, e;
    return e.done = !0, e;
  };
}
module.exports = _regeneratorKeys, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/regeneratorRuntime.js":
/*!*******************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/regeneratorRuntime.js ***!
  \*******************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var OverloadYield = __webpack_require__(/*! ./OverloadYield.js */ "./node_modules/@babel/runtime/helpers/OverloadYield.js");
var regenerator = __webpack_require__(/*! ./regenerator.js */ "./node_modules/@babel/runtime/helpers/regenerator.js");
var regeneratorAsync = __webpack_require__(/*! ./regeneratorAsync.js */ "./node_modules/@babel/runtime/helpers/regeneratorAsync.js");
var regeneratorAsyncGen = __webpack_require__(/*! ./regeneratorAsyncGen.js */ "./node_modules/@babel/runtime/helpers/regeneratorAsyncGen.js");
var regeneratorAsyncIterator = __webpack_require__(/*! ./regeneratorAsyncIterator.js */ "./node_modules/@babel/runtime/helpers/regeneratorAsyncIterator.js");
var regeneratorKeys = __webpack_require__(/*! ./regeneratorKeys.js */ "./node_modules/@babel/runtime/helpers/regeneratorKeys.js");
var regeneratorValues = __webpack_require__(/*! ./regeneratorValues.js */ "./node_modules/@babel/runtime/helpers/regeneratorValues.js");
function _regeneratorRuntime() {
  "use strict";

  var r = regenerator(),
    e = r.m(_regeneratorRuntime),
    t = (Object.getPrototypeOf ? Object.getPrototypeOf(e) : e.__proto__).constructor;
  function n(r) {
    var e = "function" == typeof r && r.constructor;
    return !!e && (e === t || "GeneratorFunction" === (e.displayName || e.name));
  }
  var o = {
    "throw": 1,
    "return": 2,
    "break": 3,
    "continue": 3
  };
  function a(r) {
    var e, t;
    return function (n) {
      e || (e = {
        stop: function stop() {
          return t(n.a, 2);
        },
        "catch": function _catch() {
          return n.v;
        },
        abrupt: function abrupt(r, e) {
          return t(n.a, o[r], e);
        },
        delegateYield: function delegateYield(r, o, a) {
          return e.resultName = o, t(n.d, regeneratorValues(r), a);
        },
        finish: function finish(r) {
          return t(n.f, r);
        }
      }, t = function t(r, _t, o) {
        n.p = e.prev, n.n = e.next;
        try {
          return r(_t, o);
        } finally {
          e.next = n.n;
        }
      }), e.resultName && (e[e.resultName] = n.v, e.resultName = void 0), e.sent = n.v, e.next = n.n;
      try {
        return r.call(this, e);
      } finally {
        n.p = e.prev, n.n = e.next;
      }
    };
  }
  return (module.exports = _regeneratorRuntime = function _regeneratorRuntime() {
    return {
      wrap: function wrap(e, t, n, o) {
        return r.w(a(e), t, n, o && o.reverse());
      },
      isGeneratorFunction: n,
      mark: r.m,
      awrap: function awrap(r, e) {
        return new OverloadYield(r, e);
      },
      AsyncIterator: regeneratorAsyncIterator,
      async: function async(r, e, t, o, u) {
        return (n(e) ? regeneratorAsyncGen : regeneratorAsync)(a(r), e, t, o, u);
      },
      keys: regeneratorKeys,
      values: regeneratorValues
    };
  }, module.exports.__esModule = true, module.exports["default"] = module.exports)();
}
module.exports = _regeneratorRuntime, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/regeneratorValues.js":
/*!******************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/regeneratorValues.js ***!
  \******************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var _typeof = (__webpack_require__(/*! ./typeof.js */ "./node_modules/@babel/runtime/helpers/typeof.js")["default"]);
function _regeneratorValues(e) {
  if (null != e) {
    var t = e["function" == typeof Symbol && Symbol.iterator || "@@iterator"],
      r = 0;
    if (t) return t.call(e);
    if ("function" == typeof e.next) return e;
    if (!isNaN(e.length)) return {
      next: function next() {
        return e && r >= e.length && (e = void 0), {
          value: e && e[r++],
          done: !e
        };
      }
    };
  }
  throw new TypeError(_typeof(e) + " is not iterable");
}
module.exports = _regeneratorValues, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/typeof.js":
/*!*******************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/typeof.js ***!
  \*******************************************************/
/***/ ((module) => {

function _typeof(o) {
  "@babel/helpers - typeof";

  return module.exports = _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) {
    return typeof o;
  } : function (o) {
    return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o;
  }, module.exports.__esModule = true, module.exports["default"] = module.exports, _typeof(o);
}
module.exports = _typeof, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/regenerator/index.js":
/*!**********************************************************!*\
  !*** ./node_modules/@babel/runtime/regenerator/index.js ***!
  \**********************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

// TODO(Babel 8): Remove this file.

var runtime = __webpack_require__(/*! ../helpers/regeneratorRuntime */ "./node_modules/@babel/runtime/helpers/regeneratorRuntime.js")();
module.exports = runtime;

// Copied from https://github.com/facebook/regenerator/blob/main/packages/runtime/runtime.js#L736=
try {
  regeneratorRuntime = runtime;
} catch (accidentalStrictMode) {
  if (typeof globalThis === "object") {
    globalThis.regeneratorRuntime = runtime;
  } else {
    Function("r", "regeneratorRuntime = r")(runtime);
  }
}


/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/cms/page/edit.vue?vue&type=script&lang=js":
/*!*************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/cms/page/edit.vue?vue&type=script&lang=js ***!
  \*************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);

function asyncGeneratorStep(n, t, e, r, o, a, c) { try { var i = n[a](c), u = i.value; } catch (n) { return void e(n); } i.done ? t(u) : Promise.resolve(u).then(r, o); }
function _asyncToGenerator(n) { return function () { var t = this, e = arguments; return new Promise(function (r, o) { var a = n.apply(t, e); function _next(n) { asyncGeneratorStep(a, r, o, _next, _throw, "next", n); } function _throw(n) { asyncGeneratorStep(a, r, o, _next, _throw, "throw", n); } _next(void 0); }); }; }
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: 'cms-page-edit',
  //  get the props value
  props: ["page"],
  data: function data() {
    return {
      editorConfig: {
        height: 80,
        toolbar: [{
          name: "basicstyles",
          items: ["Bold", "Italic", "Underline", "TextColor", "BGColor"]
        }, {
          name: "paragraph",
          items: ["NumberedList", "BulletedList"]
        }, {
          name: "links",
          items: ["Link", "Unlink"]
        }],
        extraPlugins: "colorbutton,font,colordialog",
        // 'colordialog' adds advanced color picker
        removePlugins: "elementspath",
        // Optional: allow full color picker with custom hex input
        colorButton_enableAutomatic: true
      },
      title: "",
      slug: "",
      seo_slug: "",
      meta_title: {
        en: ""
      },
      meta_description: {
        en: ""
      },
      meta_keywords: "",
      meta_robots: "",
      meta_author: "",
      status: "",
      //     Page Content
      page_contents: {}
    };
  },
  methods: {
    addSEOData: function addSEOData(inputName, event) {
      console.log('inputName', inputName, event.target.value);
      if (inputName != 'meta_title' && inputName != 'meta_description') {
        this[inputName] = event.target.value;
      } else {
        this[inputName].en = event.target.value;
      }
    },
    addCmsContent: function addCmsContent(inputName, event, module_name) {
      this.page_contents.forEach(function (content) {
        // Hero Section
        if (content.module_name === module_name) {
          if (inputName === 'status') {
            content.status = event.target.checked ? 'active' : 'inactive';
          } else if (inputName === 'title' || inputName === 'sub_title' || inputName === 'button_text' || inputName === 'button_url') {
            content.content[inputName] = event.target.value;
          }
        }
        if (content.module_name === module_name) {
          if (inputName === 'status') {
            content.status = event.target.checked ? 'active' : 'inactive';
          } else if (inputName === 'title' || inputName === 'content') {
            content.content[inputName] = event.target.value;
          }
        }
      });
    },
    removeSchool: function removeSchool(schoolIndex) {
      // console.log('schoolIndex', schoolIndex);
      var content = this.page_contents.find(function (content) {
        var _content$content;
        return (content === null || content === void 0 ? void 0 : content.module_name) === 'school_section' && (content === null || content === void 0 ? void 0 : (_content$content = content.content) === null || _content$content === void 0 ? void 0 : _content$content.schools);
      });
      if (content) {
        content.content.schools.splice(schoolIndex, 1);
      }
    },
    addMoreSchoolSection: function addMoreSchoolSection() {
      var schoolSection = {
        image: '',
        // Placeholder image
        title: '',
        description: '',
        button_text: '',
        button_url: ''
      };
      var content = this.page_contents.find(function (content) {
        var _content$content2;
        return (content === null || content === void 0 ? void 0 : content.module_name) === 'school_section' && (content === null || content === void 0 ? void 0 : (_content$content2 = content.content) === null || _content$content2 === void 0 ? void 0 : _content$content2.schools);
      });
      if (content) {
        content.content.schools.push(schoolSection);
      }
    },
    uploadFileSchoolSectionCms: function uploadFileSchoolSectionCms(event) {
      var _this = this;
      return _asyncToGenerator(/*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
        var file, allowedTypes, formData, response, content;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                console.log('File upload function called', event);
                file = event.target.files[0];
                if (file) {
                  _context.next = 4;
                  break;
                }
                return _context.abrupt("return");
              case 4:
                // Validate file type
                allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
                if (allowedTypes.includes(file.type)) {
                  _context.next = 8;
                  break;
                }
                _this.showSomethingWrong('Please select a valid image file (JPEG, PNG, GIF, WEBP)');
                return _context.abrupt("return");
              case 8:
                _context.prev = 8;
                // Create FormData for file upload
                formData = new FormData();
                formData.append('school_logo', file);

                // Make API call to upload file
                _context.next = 13;
                return axios.post('/admin/cms/upload-file-school-section', formData, {
                  headers: {
                    'Content-Type': 'multipart/form-data'
                  },
                  onUploadProgress: function onUploadProgress(progressEvent) {
                    var percentCompleted = Math.round(progressEvent.loaded * 100 / progressEvent.total);
                    console.log('Upload progress:', percentCompleted + '%');
                  }
                });
              case 13:
                response = _context.sent;
                if (response.data.success) {
                  // Update the school image in the data
                  content = _this.page_contents.find(function (content) {
                    var _content$content3;
                    return (content === null || content === void 0 ? void 0 : content.module_name) === 'school_section' && (content === null || content === void 0 ? void 0 : (_content$content3 = content.content) === null || _content$content3 === void 0 ? void 0 : _content$content3.schools);
                  });
                  if (content && content.content.schools[schoolIndex]) {
                    content.content.schools[schoolIndex].image = response.data.image_url;
                  }
                  _this.$toast.success('Image uploaded successfully!');
                } else {
                  _this.$toast.error(response.data.message || 'Upload failed');
                }
                _context.next = 21;
                break;
              case 17:
                _context.prev = 17;
                _context.t0 = _context["catch"](8);
                console.error('Upload error:', _context.t0);
                if (_context.t0.response && _context.t0.response.data && _context.t0.response.data.message) {
                  _this.$toast.error(_context.t0.response.data.message);
                } else {
                  _this.$toast.error('Failed to upload image. Please try again.');
                }
              case 21:
                _context.prev = 21;
                // Clear uploading state
                _this.$delete(_this.uploadingFiles, schoolIndex);

                // Clear the input value so same file can be selected again
                event.target.value = '';
                return _context.finish(21);
              case 25:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, null, [[8, 17, 21, 25]]);
      }))();
    }
  },
  mounted: function mounted() {
    console.log('Component mounted. Page data', this.page);
    // set value
    var _this$page = this.page,
      title = _this$page.title,
      slug = _this$page.slug,
      seo_slug = _this$page.seo_slug,
      meta_title = _this$page.meta_title,
      meta_description = _this$page.meta_description,
      meta_keywords = _this$page.meta_keywords,
      meta_robots = _this$page.meta_robots,
      meta_author = _this$page.meta_author,
      status = _this$page.status,
      page_contents = _this$page.page_contents;
    this.title = title;
    this.slug = slug;
    this.seo_slug = seo_slug;
    this.meta_title = meta_title;
    this.meta_description = meta_description;
    this.meta_keywords = meta_keywords;
    this.meta_robots = meta_robots;
    this.meta_author = meta_author;
    this.status = status;
    this.page_contents = page_contents;
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/lib/loaders/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/cms/page/edit.vue?vue&type=template&id=50e65189":
/*!************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/lib/loaders/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/cms/page/edit.vue?vue&type=template&id=50e65189 ***!
  \************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   render: () => (/* binding */ render),
/* harmony export */   staticRenderFns: () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function render() {
  var _vm = this,
    _c = _vm._self._c;
  return _c("div", [_c("div", {
    staticClass: "row"
  }, [_c("h2", [_vm._v("Page SEO")]), _vm._v(" "), _c("div", {
    staticClass: "col-md-6"
  }, [_c("div", {
    staticClass: "mb-3"
  }, [_vm._m(0), _vm._v(" "), _c("input", {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: _vm.title,
      expression: "title"
    }],
    staticClass: "form-control",
    attrs: {
      type: "text",
      name: "title",
      required: "",
      placeholder: "Page Title"
    },
    domProps: {
      value: _vm.title
    },
    on: {
      change: function change($event) {
        return _vm.addSEOData("title", $event);
      },
      input: function input($event) {
        if ($event.target.composing) return;
        _vm.title = $event.target.value;
      }
    }
  })])]), _vm._v(" "), _c("div", {
    staticClass: "col-md-6"
  }, [_c("div", {
    staticClass: "mb-3"
  }, [_vm._m(1), _vm._v(" "), _c("input", {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: _vm.slug,
      expression: "slug"
    }],
    staticClass: "form-control",
    attrs: {
      type: "text",
      name: "slug",
      required: "",
      placeholder: "Page Slug"
    },
    domProps: {
      value: _vm.slug
    },
    on: {
      change: function change($event) {
        return _vm.addSEOData("slug", $event);
      },
      input: function input($event) {
        if ($event.target.composing) return;
        _vm.slug = $event.target.value;
      }
    }
  })])]), _vm._v(" "), _c("div", {
    staticClass: "col-md-6"
  }, [_c("div", {
    staticClass: "mb-3"
  }, [_vm._m(2), _vm._v(" "), _c("input", {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: _vm.meta_author,
      expression: "meta_author"
    }],
    staticClass: "form-control",
    attrs: {
      type: "text",
      name: "meta_author",
      required: "",
      placeholder: "Meta Author"
    },
    domProps: {
      value: _vm.meta_author
    },
    on: {
      change: function change($event) {
        return _vm.addSEOData("meta_author", $event);
      },
      input: function input($event) {
        if ($event.target.composing) return;
        _vm.meta_author = $event.target.value;
      }
    }
  })])]), _vm._v(" "), _c("div", {
    staticClass: "col-md-6"
  }, [_c("div", {
    staticClass: "mb-3"
  }, [_vm._m(3), _vm._v(" "), _c("input", {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: _vm.meta_title.en,
      expression: "meta_title.en"
    }],
    staticClass: "form-control",
    attrs: {
      type: "text",
      name: "meta_title",
      required: "",
      placeholder: "Meta Title"
    },
    domProps: {
      value: _vm.meta_title.en
    },
    on: {
      change: function change($event) {
        return _vm.addSEOData("meta_title", $event);
      },
      input: function input($event) {
        if ($event.target.composing) return;
        _vm.$set(_vm.meta_title, "en", $event.target.value);
      }
    }
  })])]), _vm._v(" "), _c("div", {
    staticClass: "col-md-6"
  }, [_c("div", {
    staticClass: "mb-3"
  }, [_vm._m(4), _vm._v(" "), _c("textarea", {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: _vm.meta_description.en,
      expression: "meta_description.en"
    }],
    staticClass: "form-control",
    attrs: {
      name: "meta_description",
      required: "",
      placeholder: "Meta Description"
    },
    domProps: {
      value: _vm.meta_description.en
    },
    on: {
      change: function change($event) {
        return _vm.addSEOData("meta_description", $event);
      },
      input: function input($event) {
        if ($event.target.composing) return;
        _vm.$set(_vm.meta_description, "en", $event.target.value);
      }
    }
  })])]), _vm._v(" "), _c("div", {
    staticClass: "col-md-6"
  }, [_c("div", {
    staticClass: "mb-3"
  }, [_vm._m(5), _vm._v(" "), _c("input", {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: _vm.meta_keywords,
      expression: "meta_keywords"
    }],
    staticClass: "form-control",
    attrs: {
      type: "text",
      name: "meta_keyword",
      required: "",
      placeholder: "Meta Keyword"
    },
    domProps: {
      value: _vm.meta_keywords
    },
    on: {
      change: function change($event) {
        return _vm.addSEOData("meta_keyword", $event);
      },
      input: function input($event) {
        if ($event.target.composing) return;
        _vm.meta_keywords = $event.target.value;
      }
    }
  })])]), _vm._v(" "), _c("h2", [_vm._v("Page Content")]), _vm._v(" "), _vm._l(_vm.page_contents, function (page_content, index) {
    var _page_content$content;
    return _c("div", {
      key: index
    }, [_c("div", {
      staticClass: "accordion mt-2",
      attrs: {
        id: page_content === null || page_content === void 0 ? void 0 : page_content.module_name
      }
    }, [_c("div", {
      staticClass: "accordion-item"
    }, [_c("h2", {
      staticClass: "accordion-header"
    }, [_c("button", {
      staticClass: "accordion-button bg-success text-white",
      attrs: {
        type: "button",
        "data-bs-toggle": "collapse",
        "data-bs-target": "#collapse" + index,
        "aria-expanded": "true",
        "aria-controls": "collapse" + index
      }
    }, [_vm._v("\n                                    " + _vm._s(_vm.cmsCheckChangeKey(page_content === null || page_content === void 0 ? void 0 : page_content.module_name)) + "\n                                ")])]), _vm._v(" "), _c("div", {
      staticClass: "accordion-collapse collapse show",
      attrs: {
        id: "collapse" + index,
        "data-bs-parent": "#" + (page_content === null || page_content === void 0 ? void 0 : page_content.module_name)
      }
    }, [page_content.module_name === "hero_section" ? _c("div", {
      staticClass: "accordion-body"
    }, [_c("div", {
      staticClass: "row"
    }, [_c("div", {
      staticClass: "col-md-6"
    }, [_c("div", {
      staticClass: "mb-3"
    }, [_vm._m(6, true), _vm._v(" "), _c("input", {
      directives: [{
        name: "model",
        rawName: "v-model",
        value: page_content.content.title,
        expression: "page_content.content.title"
      }],
      staticClass: "form-control",
      attrs: {
        type: "text",
        name: "title",
        required: "",
        placeholder: "Title"
      },
      domProps: {
        value: page_content.content.title
      },
      on: {
        change: function change($event) {
          return _vm.addCmsContent("title", $event, "hero_section");
        },
        input: function input($event) {
          if ($event.target.composing) return;
          _vm.$set(page_content.content, "title", $event.target.value);
        }
      }
    })])]), _vm._v(" "), _c("div", {
      staticClass: "col-md-6"
    }, [_c("div", {
      staticClass: "mb-3"
    }, [_vm._m(7, true), _vm._v(" "), _c("input", {
      directives: [{
        name: "model",
        rawName: "v-model",
        value: page_content.content.sub_title,
        expression: "page_content.content.sub_title"
      }],
      staticClass: "form-control",
      attrs: {
        type: "text",
        name: "sub_title",
        required: "",
        placeholder: "Sub Title"
      },
      domProps: {
        value: page_content.content.sub_title
      },
      on: {
        change: function change($event) {
          return _vm.addCmsContent("sub_title", $event, "hero_section");
        },
        input: function input($event) {
          if ($event.target.composing) return;
          _vm.$set(page_content.content, "sub_title", $event.target.value);
        }
      }
    })])]), _vm._v(" "), _c("div", {
      staticClass: "col-md-6"
    }, [_c("div", {
      staticClass: "mb-3"
    }, [_vm._m(8, true), _vm._v(" "), _c("input", {
      directives: [{
        name: "model",
        rawName: "v-model",
        value: page_content.content.button_text,
        expression: "page_content.content.button_text"
      }],
      staticClass: "form-control",
      attrs: {
        type: "text",
        name: "sub_title",
        required: "",
        placeholder: "Sub Title"
      },
      domProps: {
        value: page_content.content.button_text
      },
      on: {
        change: function change($event) {
          return _vm.addCmsContent("button_text", $event, "hero_section");
        },
        input: function input($event) {
          if ($event.target.composing) return;
          _vm.$set(page_content.content, "button_text", $event.target.value);
        }
      }
    })])]), _vm._v(" "), _c("div", {
      staticClass: "col-md-6"
    }, [_c("div", {
      staticClass: "mb-3"
    }, [_vm._m(9, true), _vm._v(" "), _c("input", {
      directives: [{
        name: "model",
        rawName: "v-model",
        value: page_content.content.button_url,
        expression: "page_content.content.button_url"
      }],
      staticClass: "form-control",
      attrs: {
        type: "text",
        name: "sub_title",
        required: "",
        placeholder: "Sub Title"
      },
      domProps: {
        value: page_content.content.button_url
      },
      on: {
        change: function change($event) {
          return _vm.addCmsContent("button_url", $event, "hero_section");
        },
        input: function input($event) {
          if ($event.target.composing) return;
          _vm.$set(page_content.content, "button_url", $event.target.value);
        }
      }
    })])]), _vm._v(" "), _c("div", {
      staticClass: "col-md-6"
    }, [_c("div", {
      staticClass: "mb-3"
    }, [_c("label", {
      staticClass: "form-label"
    }, [_vm._v("Show ")]), _vm._v(" "), _c("br"), _vm._v(" "), _c("input", {
      staticClass: "form-check form-switch",
      attrs: {
        type: "checkbox",
        id: "switch" + index,
        "switch": "none"
      },
      domProps: {
        checked: (page_content === null || page_content === void 0 ? void 0 : page_content.status) === "active"
      },
      on: {
        change: function change($event) {
          return _vm.addCmsContent("status", $event, "hero_section");
        }
      }
    }), _vm._v(" "), _c("label", {
      staticClass: "form-label",
      attrs: {
        "for": "switch" + index,
        "data-on-label": "On",
        "data-off-label": "Off"
      }
    })])])])]) : _vm._e(), _vm._v(" "), page_content.module_name === "about_section" ? _c("div", {
      staticClass: "accordion-body"
    }, [_c("div", {
      staticClass: "row"
    }, [_c("div", {
      staticClass: "col-md-6"
    }, [_c("div", {
      staticClass: "mb-3"
    }, [_vm._m(10, true), _vm._v(" "), _c("ckeditor", {
      attrs: {
        config: _vm.editorConfig
      },
      on: {
        change: function change($event) {
          return _vm.addCmsContent("title", $event, "about_section");
        }
      },
      model: {
        value: page_content.content.title,
        callback: function callback($$v) {
          _vm.$set(page_content.content, "title", $$v);
        },
        expression: "page_content.content.title"
      }
    })], 1)]), _vm._v(" "), _c("div", {
      staticClass: "col-md-6"
    }, [_c("div", {
      staticClass: "mb-3"
    }, [_vm._m(11, true), _vm._v(" "), _c("ckeditor", {
      attrs: {
        config: _vm.editorConfig
      },
      on: {
        change: function change($event) {
          return _vm.addCmsContent("content", $event, "about_section");
        }
      },
      model: {
        value: page_content.content.content,
        callback: function callback($$v) {
          _vm.$set(page_content.content, "content", $$v);
        },
        expression: "page_content.content.content"
      }
    })], 1)]), _vm._v(" "), _c("div", {
      staticClass: "col-md-6"
    }, [_c("div", {
      staticClass: "mb-3"
    }, [_c("label", {
      staticClass: "form-label"
    }, [_vm._v("Show ")]), _vm._v(" "), _c("br"), _vm._v(" "), _c("input", {
      staticClass: "form-check form-switch",
      attrs: {
        type: "checkbox",
        id: "switch" + index,
        "switch": "none"
      },
      domProps: {
        checked: (page_content === null || page_content === void 0 ? void 0 : page_content.status) === "active"
      },
      on: {
        change: function change($event) {
          return _vm.addCmsContent("status", $event, "about_section");
        }
      }
    }), _vm._v(" "), _c("label", {
      staticClass: "form-label",
      attrs: {
        "for": "switch" + index,
        "data-on-label": "On",
        "data-off-label": "Off"
      }
    })])])])]) : _vm._e(), _vm._v(" "), page_content.module_name === "school_section" ? _c("div", {
      staticClass: "accordion-body"
    }, [_vm._l(page_content === null || page_content === void 0 ? void 0 : (_page_content$content = page_content.content) === null || _page_content$content === void 0 ? void 0 : _page_content$content.schools, function (school, schoolIndex) {
      return _c("div", {
        key: schoolIndex,
        staticClass: "mb-4"
      }, [_c("div", {
        staticClass: "position-relative p-4 border rounded-3 shadow-sm bg-white"
      }, [_c("button", {
        staticClass: "btn btn-sm btn-danger position-absolute",
        staticStyle: {
          top: "0.5rem",
          right: "0.5rem"
        },
        attrs: {
          type: "button"
        },
        on: {
          click: function click($event) {
            return _vm.removeSchool(schoolIndex);
          }
        }
      }, [_c("i", {
        staticClass: "mdi mdi-trash-can-outline"
      })]), _vm._v(" "), _c("h6", {
        staticClass: "mb-3 text-primary fw-semibold"
      }, [_vm._v("\n                                                School " + _vm._s(schoolIndex + 1) + "\n                                            ")]), _vm._v(" "), _c("div", {
        staticClass: "row g-3 align-items-center"
      }, [_c("div", {
        staticClass: "col-md-6 d-flex align-items-center"
      }, [_c("div", [_c("img", {
        staticClass: "border rounded",
        staticStyle: {
          width: "60px",
          height: "60px",
          "object-fit": "cover"
        },
        attrs: {
          src: school.image,
          alt: "School Logo"
        }
      })]), _vm._v(" "), _c("div", {
        staticClass: "me-3"
      }, [_vm._m(12, true), _vm._v(" "), _c("input", {
        staticClass: "form-control",
        attrs: {
          type: "file",
          name: "school_logo",
          accept: "",
          required: ""
        },
        on: {
          change: function change($event) {
            return _vm.uploadFileSchoolSectionCms($event);
          }
        }
      })])]), _vm._v(" "), _c("div", {
        staticClass: "col-md-6"
      }, [_vm._m(13, true), _vm._v(" "), _c("input", {
        directives: [{
          name: "model",
          rawName: "v-model",
          value: school.title,
          expression: "school.title"
        }],
        staticClass: "form-control",
        attrs: {
          type: "text",
          name: "title",
          required: "",
          placeholder: "Enter school title"
        },
        domProps: {
          value: school.title
        },
        on: {
          change: function change($event) {
            return _vm.addCmsContent("title", $event, "school_section", schoolIndex);
          },
          input: function input($event) {
            if ($event.target.composing) return;
            _vm.$set(school, "title", $event.target.value);
          }
        }
      })]), _vm._v(" "), _c("div", {
        staticClass: "col-md-12"
      }, [_vm._m(14, true), _vm._v(" "), _c("ckeditor", {
        attrs: {
          config: _vm.editorConfig
        },
        model: {
          value: school.description,
          callback: function callback($$v) {
            _vm.$set(school, "description", $$v);
          },
          expression: "school.description"
        }
      })], 1), _vm._v(" "), _c("div", {
        staticClass: "col-md-6"
      }, [_vm._m(15, true), _vm._v(" "), _c("input", {
        directives: [{
          name: "model",
          rawName: "v-model",
          value: school.button_text,
          expression: "school.button_text"
        }],
        staticClass: "form-control",
        attrs: {
          type: "text",
          name: "button_text",
          required: "",
          placeholder: "Enter button text"
        },
        domProps: {
          value: school.button_text
        },
        on: {
          input: function input($event) {
            if ($event.target.composing) return;
            _vm.$set(school, "button_text", $event.target.value);
          }
        }
      })]), _vm._v(" "), _c("div", {
        staticClass: "col-md-6"
      }, [_vm._m(16, true), _vm._v(" "), _c("input", {
        directives: [{
          name: "model",
          rawName: "v-model",
          value: school.button_url,
          expression: "school.button_url"
        }],
        staticClass: "form-control",
        attrs: {
          type: "url",
          name: "button_url",
          required: "",
          placeholder: "https://example.com"
        },
        domProps: {
          value: school.button_url
        },
        on: {
          input: function input($event) {
            if ($event.target.composing) return;
            _vm.$set(school, "button_url", $event.target.value);
          }
        }
      })])])])]);
    }), _vm._v(" "), _c("button", {
      staticClass: "btn btn-info btn-sm",
      attrs: {
        type: "button"
      },
      on: {
        click: _vm.addMoreSchoolSection
      }
    }, [_vm._v("+ Add More")])], 2) : _vm._e()])])])]);
  })], 2)]);
};
var staticRenderFns = [function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("label", {
    staticClass: "form-label"
  }, [_vm._v("Page Title "), _c("span", {
    staticClass: "error"
  }, [_vm._v("*")])]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("label", {
    staticClass: "form-label"
  }, [_vm._v("Page Slug "), _c("span", {
    staticClass: "error"
  }, [_vm._v("*")])]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("label", {
    staticClass: "form-label"
  }, [_vm._v("Meta Author "), _c("span", {
    staticClass: "error"
  }, [_vm._v("*")])]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("label", {
    staticClass: "form-label"
  }, [_vm._v("Meta Title "), _c("span", {
    staticClass: "error"
  }, [_vm._v("*")])]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("label", {
    staticClass: "form-label"
  }, [_vm._v("Meta Description "), _c("span", {
    staticClass: "error"
  }, [_vm._v("*")])]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("label", {
    staticClass: "form-label"
  }, [_vm._v("Meta keyword (Make it comma separate) "), _c("span", {
    staticClass: "error"
  }, [_vm._v("*")])]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("label", {
    staticClass: "form-label"
  }, [_vm._v("Title "), _c("span", {
    staticClass: "error"
  }, [_vm._v("*")])]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("label", {
    staticClass: "form-label"
  }, [_vm._v("Sub Title "), _c("span", {
    staticClass: "error"
  }, [_vm._v("*")])]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("label", {
    staticClass: "form-label"
  }, [_vm._v("Button Text "), _c("span", {
    staticClass: "error"
  }, [_vm._v("*")])]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("label", {
    staticClass: "form-label"
  }, [_vm._v("Button URL "), _c("span", {
    staticClass: "error"
  }, [_vm._v("*")])]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("label", {
    staticClass: "form-label"
  }, [_vm._v("Title "), _c("span", {
    staticClass: "error"
  }, [_vm._v("*")])]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("label", {
    staticClass: "form-label"
  }, [_vm._v("Content "), _c("span", {
    staticClass: "error"
  }, [_vm._v("*")])]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("label", {
    staticClass: "form-label d-block"
  }, [_vm._v("School Logo "), _c("span", {
    staticClass: "text-danger"
  }, [_vm._v("*")])]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("label", {
    staticClass: "form-label"
  }, [_vm._v("Title "), _c("span", {
    staticClass: "text-danger"
  }, [_vm._v("*")])]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("label", {
    staticClass: "form-label"
  }, [_vm._v("Description "), _c("span", {
    staticClass: "text-danger"
  }, [_vm._v("*")])]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("label", {
    staticClass: "form-label"
  }, [_vm._v("Button Text "), _c("span", {
    staticClass: "text-danger"
  }, [_vm._v("*")])]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("label", {
    staticClass: "form-label"
  }, [_vm._v("Button URL "), _c("span", {
    staticClass: "text-danger"
  }, [_vm._v("*")])]);
}];
render._withStripped = true;


/***/ }),

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ normalizeComponent)
/* harmony export */ });
/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file (except for modules).
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

function normalizeComponent(
  scriptExports,
  render,
  staticRenderFns,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier /* server only */,
  shadowMode /* vue-cli only */
) {
  // Vue.extend constructor export interop
  var options =
    typeof scriptExports === 'function' ? scriptExports.options : scriptExports

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
  if (moduleIdentifier) {
    // server build
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
      options.render = function renderWithStyleInjection(h, context) {
        hook.call(context)
        return originalRender(h, context)
      }
    } else {
      // inject component registration as beforeCreate hook
      var existing = options.beforeCreate
      options.beforeCreate = existing ? [].concat(existing, hook) : [hook]
    }
  }

  return {
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ "./resources/js/components/admin/cms/page/edit.vue":
/*!*********************************************************!*\
  !*** ./resources/js/components/admin/cms/page/edit.vue ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _edit_vue_vue_type_template_id_50e65189__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./edit.vue?vue&type=template&id=50e65189 */ "./resources/js/components/admin/cms/page/edit.vue?vue&type=template&id=50e65189");
/* harmony import */ var _edit_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./edit.vue?vue&type=script&lang=js */ "./resources/js/components/admin/cms/page/edit.vue?vue&type=script&lang=js");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _edit_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"],
  _edit_vue_vue_type_template_id_50e65189__WEBPACK_IMPORTED_MODULE_0__.render,
  _edit_vue_vue_type_template_id_50e65189__WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) // removed by dead control flow
{ var api; }
component.options.__file = "resources/js/components/admin/cms/page/edit.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/cms/page/edit.vue?vue&type=script&lang=js":
/*!*********************************************************************************!*\
  !*** ./resources/js/components/admin/cms/page/edit.vue?vue&type=script&lang=js ***!
  \*********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_edit_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./edit.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/cms/page/edit.vue?vue&type=script&lang=js");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_edit_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/admin/cms/page/edit.vue?vue&type=template&id=50e65189":
/*!***************************************************************************************!*\
  !*** ./resources/js/components/admin/cms/page/edit.vue?vue&type=template&id=50e65189 ***!
  \***************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   render: () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_lib_loaders_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_lib_index_js_vue_loader_options_edit_vue_vue_type_template_id_50e65189__WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   staticRenderFns: () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_lib_loaders_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_lib_index_js_vue_loader_options_edit_vue_vue_type_template_id_50e65189__WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_lib_loaders_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_lib_index_js_vue_loader_options_edit_vue_vue_type_template_id_50e65189__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??ruleSet[1].rules[2]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./edit.vue?vue&type=template&id=50e65189 */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/lib/loaders/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/cms/page/edit.vue?vue&type=template&id=50e65189");


/***/ })

}]);