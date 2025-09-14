"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_admin_menu_MenuBuilderComponent_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/menu/MenuBuilderComponent.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/menu/MenuBuilderComponent.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
function _toArray(arr) { return _arrayWithHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
  name: "MenuBuilderComponent",
  props: ["menuid", "menuname"],
  data: function data() {
    return {
      items: [],
      new_item: {},
      edit_data: {},
      menu_types: [],
      pages: [],
      show_new_form: false,
      categories: [],
      subcategories: []
    };
  },
  methods: {
    capitalizeFirstLetter: function capitalizeFirstLetter(_ref) {
      var _ref2 = _toArray(_ref),
          first = _ref2[0],
          rest = _ref2.slice(1);

      return first.toUpperCase() + rest.join("").toLowerCase();
    },
    itemSort: function itemSort() {
      var self = this;
      var dd = $(".dd");
      $(dd).nestable({
        maxDepth: 4
      });
      $(dd).on("change", function (e) {
        var data = JSON.stringify($(dd).nestable("serialize"));
        axios.post("/admin/menu-items/sort", {
          order: data
        }).then(function (res) {
          if (res.data.success === false) {
            notify("error", res.data.message);
            return;
          }

          notify("success", "Menu items successfully sorted");
        })["catch"](function (error) {
          console.log(error.response);
        });
      });
    },
    getMenuData: function getMenuData() {
      var self = this;
      axios.get("/admin/menus/".concat(self.menuid)).then(function (res) {
        if (res.data.success === false) {
          return;
        }

        self.items = res.data.items;
        self.new_item = res.data.new_item;
        self.menu_types = res.data.menu_types;
        self.show_new_form = true;
        self.itemSort();
      })["catch"](function (error) {
        console.log(error);
      });
    },
    addNewModalHandler: function addNewModalHandler() {
      var self = this;
      $(".page_selection").hide();
      self.new_item.menu_type = "link";
      $("#addNewMenuItem").modal("show");
    },
    getPages: function getPages() {
      var self = this;
      axios.get("/admin/ajax/pages").then(function (res) {
        self.pages = res.data.data;
      })["catch"](function (err) {
        console.log(err);
      });
    },
    menuTypeChangeHandler: function menuTypeChangeHandler() {
      var type = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : "add";
      var self = this;

      if (type == "edit") {
        if (event.target.value === "page") {
          $(".edit_page_selection").show();
        } else {
          $(".edit_page_selection").hide();
        }
      } else {
        if (event.target.value === "page") {
          $(".page_selection").show();
        } else {
          $(".page_selection").hide();
        }
      }

      self.new_item.menu_type = event.target.value;
    },
    pageChangeHandler: function pageChangeHandler() {
      var type = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : "add";
      var self = this;
      self.pages.forEach(function (item) {
        if (item.id == event.target.value) {
          if (type === "edit") {
            self.edit_data.title = item.title;
            self.edit_data.url = "/" + item.slug;
            self.edit_data.page_id = item.id;
          } else {
            self.new_item.title = item.title;
            self.new_item.url = "/" + item.slug;
            self.new_item.page_id = item.id;
          }
        }
      });
    },
    addNewItem: function addNewItem() {
      var self = this;
      $("#addNewMenuItem").modal("hide");
      axios.post("/admin/menu-items", this.new_item).then(function (res) {
        if (res.data.success === false) {
          return;
        }

        self.new_item.title = {};
        self.new_item.url = "";
        self.getMenuData();
        notify("success", "Menu item added successfully");
      })["catch"](function (error) {
        notify("error", error.response);
      })["finally"](function () {});
    },
    deleteItem: function deleteItem(id) {
      var self = this;
      self.$swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover!",
        icon: "warning",
        buttons: true,
        dangerMode: true
      }).then(function (willDelete) {
        if (willDelete) {
          axios["delete"]("/admin/menu-items/".concat(id)).then(function (res) {
            if (res.data.success === false) {
              return;
            }

            notify("success", "Menu item successfully updated");
            self.getMenuData();
          })["catch"](function (error) {
            console.log(error.response);
          });
        } else {
          self.$swal("Delete request cancel!");
        }
      });
    },
    editThisItem: function editThisItem(data) {
      var self = this;
      axios.get("/admin/menu-items/".concat(data.id, "/edit")).then(function (res) {
        if (res.data.success === false) {
          notify("error", res.data.message);
          return;
        }

        self.edit_data = res.data.new_item;
        self.$nextTick(function () {
          if (self.edit_data.menu_type === "page") {
            $(".edit_page_selection").show();
          } else {
            $(".edit_page_selection").hide();
          }
        });
        $("#editItem").modal("show");
      })["catch"](function (error) {
        console.log(error);
      });
    },
    updateItem: function updateItem() {
      var self = this;
      $("#editItem").modal("hide");
      axios.put("/admin/menu-items/".concat(self.edit_data.id), this.edit_data).then(function (res) {
        if (res.data.success === false) {
          notify("error", res.data.message);
          return;
        }

        self.edit_data.id = "";
        self.edit_data.title = "";
        self.edit_data.url = "";
        self.getMenuData();
        notify("success", "Menu item successfully updated");
      })["catch"](function (error) {
        console.log(error);
      });
    }
  },
  mounted: function mounted() {
    var self = this;
    self.getMenuData();
    self.getPages();
  }
});

/***/ }),

/***/ "./resources/js/components/admin/menu/MenuBuilderComponent.vue":
/*!*********************************************************************!*\
  !*** ./resources/js/components/admin/menu/MenuBuilderComponent.vue ***!
  \*********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _MenuBuilderComponent_vue_vue_type_template_id_05611594___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./MenuBuilderComponent.vue?vue&type=template&id=05611594& */ "./resources/js/components/admin/menu/MenuBuilderComponent.vue?vue&type=template&id=05611594&");
/* harmony import */ var _MenuBuilderComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./MenuBuilderComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/admin/menu/MenuBuilderComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _MenuBuilderComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _MenuBuilderComponent_vue_vue_type_template_id_05611594___WEBPACK_IMPORTED_MODULE_0__.render,
  _MenuBuilderComponent_vue_vue_type_template_id_05611594___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null

)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/admin/menu/MenuBuilderComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/admin/menu/MenuBuilderComponent.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************!*\
  !*** ./resources/js/components/admin/menu/MenuBuilderComponent.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_MenuBuilderComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./MenuBuilderComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/menu/MenuBuilderComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_MenuBuilderComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

/***/ }),

/***/ "./resources/js/components/admin/menu/MenuBuilderComponent.vue?vue&type=template&id=05611594&":
/*!****************************************************************************************************!*\
  !*** ./resources/js/components/admin/menu/MenuBuilderComponent.vue?vue&type=template&id=05611594& ***!
  \****************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_MenuBuilderComponent_vue_vue_type_template_id_05611594___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_MenuBuilderComponent_vue_vue_type_template_id_05611594___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_MenuBuilderComponent_vue_vue_type_template_id_05611594___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./MenuBuilderComponent.vue?vue&type=template&id=05611594& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/menu/MenuBuilderComponent.vue?vue&type=template&id=05611594&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/menu/MenuBuilderComponent.vue?vue&type=template&id=05611594&":
/*!*******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/admin/menu/MenuBuilderComponent.vue?vue&type=template&id=05611594& ***!
  \*******************************************************************************************************************************************************************************************************************************************/
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
  return _c("div", { staticClass: "card-body" }, [
    _c("div", { staticClass: "row" }, [
      _c("div", { staticClass: "col-12" }, [
        _c("div", { staticClass: "d-flex justify-content-between" }, [
          _c("h5", [_vm._v(_vm._s(_vm.menuname) + " Menu Builder")]),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "btn btn-primary",
              attrs: { type: "button" },
              on: {
                click: function ($event) {
                  $event.preventDefault()
                  return _vm.addNewModalHandler.apply(null, arguments)
                },
              },
            },
            [
              _c("i", { staticClass: "fas fa-plus" }),
              _vm._v(" "),
              _c("span", [_vm._v("Add New Menu Item")]),
            ]
          ),
        ]),
        _vm._v(" "),
        _c("hr"),
      ]),
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "row justify-content-center" }, [
      _c("div", { staticClass: "col-8" }, [
        _c("div", { staticClass: "dd" }, [
          _c(
            "ol",
            { staticClass: "dd-list" },
            _vm._l(_vm.items, function (item, index) {
              return _c(
                "li",
                {
                  key: index,
                  staticClass: "dd-item",
                  attrs: { "data-id": item.id },
                },
                [
                  item.children.length > 0
                    ? _c(
                        "button",
                        {
                          attrs: { "data-action": "collapse", type: "button" },
                        },
                        [_vm._v("\n              Collapse\n            ")]
                      )
                    : _vm._e(),
                  _vm._v(" "),
                  item.children.length > 0
                    ? _c(
                        "button",
                        {
                          staticStyle: { display: "none" },
                          attrs: { "data-action": "expand", type: "button" },
                        },
                        [_vm._v("\n              Expand\n            ")]
                      )
                    : _vm._e(),
                  _vm._v(" "),
                  _c("div", { staticClass: "float-end item_actions" }, [
                    _c(
                      "button",
                      {
                        staticClass: "btn btn-sm btn-primary edit",
                        attrs: { type: "button" },
                        on: {
                          click: function ($event) {
                            return _vm.editThisItem(item)
                          },
                        },
                      },
                      [
                        _c("i", { staticClass: "mdi mdi-circle-edit-outline" }),
                        _vm._v(" "),
                        _c("span", [_vm._v("Edit")]),
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "button",
                      {
                        staticClass:
                          "btn btn-sm btn-danger pull-right delete ml-1",
                        attrs: { type: "button", "data-id": item.id },
                        on: {
                          click: function ($event) {
                            return _vm.deleteItem(item.id)
                          },
                        },
                      },
                      [
                        _c("i", { staticClass: "mdi mdi-delete-empty" }),
                        _vm._v(" "),
                        _c("span", [_vm._v("Delete")]),
                      ]
                    ),
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "dd-handle" }, [
                    _c("span", [_vm._v(_vm._s(item.title))]),
                  ]),
                  _vm._v(" "),
                  item.children.length > 0
                    ? _c(
                        "ol",
                        { staticClass: "dd-list" },
                        _vm._l(item.children, function (children, index) {
                          return _c(
                            "li",
                            {
                              key: index,
                              staticClass: "dd-item",
                              attrs: { "data-id": children.id },
                            },
                            [
                              children.child.length > 0
                                ? _c(
                                    "button",
                                    {
                                      attrs: {
                                        "data-action": "collapse",
                                        type: "button",
                                      },
                                    },
                                    [
                                      _vm._v(
                                        "\n                  Collapse\n                "
                                      ),
                                    ]
                                  )
                                : _vm._e(),
                              _vm._v(" "),
                              children.child.length > 0
                                ? _c(
                                    "button",
                                    {
                                      staticStyle: { display: "none" },
                                      attrs: {
                                        "data-action": "expand",
                                        type: "button",
                                      },
                                    },
                                    [
                                      _vm._v(
                                        "\n                  Expand\n                "
                                      ),
                                    ]
                                  )
                                : _vm._e(),
                              _vm._v(" "),
                              _c(
                                "div",
                                { staticClass: "float-right item_actions" },
                                [
                                  _c(
                                    "button",
                                    {
                                      staticClass:
                                        "btn btn-sm btn-primary edit",
                                      attrs: { type: "button" },
                                      on: {
                                        click: function ($event) {
                                          return _vm.editThisItem(children)
                                        },
                                      },
                                    },
                                    [
                                      _c("i", {
                                        staticClass:
                                          "mdi mdi-circle-edit-outline",
                                      }),
                                      _vm._v(" "),
                                      _c("span", [_vm._v("Edit")]),
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "button",
                                    {
                                      staticClass:
                                        "btn btn-sm btn-danger pull-right delete ml-1",
                                      attrs: {
                                        type: "button",
                                        "data-id": children.id,
                                      },
                                      on: {
                                        click: function ($event) {
                                          return _vm.deleteItem(children.id)
                                        },
                                      },
                                    },
                                    [
                                      _c("i", {
                                        staticClass: "mdi mdi-delete-empty",
                                      }),
                                      _vm._v(" "),
                                      _c("span", [_vm._v("Delete")]),
                                    ]
                                  ),
                                ]
                              ),
                              _vm._v(" "),
                              _c("div", { staticClass: "dd-handle" }, [
                                _c("span", [_vm._v(_vm._s(children.title))]),
                              ]),
                              _vm._v(" "),
                              children.child.length > 0
                                ? _c(
                                    "ol",
                                    { staticClass: "dd-list" },
                                    _vm._l(
                                      children.child,
                                      function (child, index) {
                                        return _c(
                                          "li",
                                          {
                                            key: index,
                                            staticClass: "dd-item",
                                            attrs: { "data-id": child.id },
                                          },
                                          [
                                            _c(
                                              "div",
                                              {
                                                staticClass:
                                                  "float-right item_actions",
                                              },
                                              [
                                                _c(
                                                  "button",
                                                  {
                                                    staticClass:
                                                      "btn btn-sm btn-primary edit",
                                                    attrs: { type: "button" },
                                                    on: {
                                                      click: function ($event) {
                                                        return _vm.editThisItem(
                                                          child
                                                        )
                                                      },
                                                    },
                                                  },
                                                  [
                                                    _c("i", {
                                                      staticClass:
                                                        "mdi mdi-circle-edit-outline",
                                                    }),
                                                    _vm._v(" "),
                                                    _c("span", [
                                                      _vm._v("Edit"),
                                                    ]),
                                                  ]
                                                ),
                                                _vm._v(" "),
                                                _c(
                                                  "button",
                                                  {
                                                    staticClass:
                                                      "btn btn-sm btn-danger pull-right delete ml-1",
                                                    attrs: {
                                                      type: "button",
                                                      "data-id": child.id,
                                                    },
                                                    on: {
                                                      click: function ($event) {
                                                        return _vm.deleteItem(
                                                          child.id
                                                        )
                                                      },
                                                    },
                                                  },
                                                  [
                                                    _c("i", {
                                                      staticClass:
                                                        "mdi mdi-delete-empty",
                                                    }),
                                                    _vm._v(" "),
                                                    _c("span", [
                                                      _vm._v("Delete"),
                                                    ]),
                                                  ]
                                                ),
                                              ]
                                            ),
                                            _vm._v(" "),
                                            _c(
                                              "div",
                                              { staticClass: "dd-handle" },
                                              [
                                                _c("span", [
                                                  _vm._v(_vm._s(child.title)),
                                                ]),
                                              ]
                                            ),
                                          ]
                                        )
                                      }
                                    ),
                                    0
                                  )
                                : _vm._e(),
                            ]
                          )
                        }),
                        0
                      )
                    : _vm._e(),
                ]
              )
            }),
            0
          ),
        ]),
      ]),
    ]),
    _vm._v(" "),
    _vm.show_new_form
      ? _c(
          "div",
          {
            staticClass: "modal fade",
            staticStyle: { display: "none" },
            attrs: {
              id: "addNewMenuItem",
              tabindex: "-1",
              role: "dialog",
              "aria-labelledby": "addNewMenuItemTitle",
              "aria-hidden": "true",
            },
          },
          [
            _c(
              "div",
              {
                staticClass: "modal-dialog modal-dialog-centered",
                attrs: { role: "document" },
              },
              [
                _c("div", { staticClass: "modal-content" }, [
                  _vm._m(0),
                  _vm._v(" "),
                  _c(
                    "form",
                    {
                      attrs: { method: "post" },
                      on: {
                        submit: function ($event) {
                          $event.preventDefault()
                          return _vm.addNewItem.apply(null, arguments)
                        },
                      },
                    },
                    [
                      _c("div", { staticClass: "modal-body" }, [
                        _c("div", { staticClass: "form-group mb-2" }, [
                          _c("label", { attrs: { for: "menuItemTitle" } }, [
                            _vm._v("Title"),
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "form-line" }, [
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.new_item.title,
                                  expression: "new_item.title",
                                },
                              ],
                              staticClass: "form-control",
                              attrs: {
                                type: "text",
                                id: "menuItemTitle",
                                placeholder: "Enter Title",
                                required: "",
                                autocomplete: "off",
                              },
                              domProps: { value: _vm.new_item.title },
                              on: {
                                input: function ($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.$set(
                                    _vm.new_item,
                                    "title",
                                    $event.target.value
                                  )
                                },
                              },
                            }),
                          ]),
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group mb-2" }, [
                          _c("label", { attrs: { for: "menuItemUrl" } }, [
                            _vm._v("Url"),
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "form-line" }, [
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.new_item.url,
                                  expression: "new_item.url",
                                },
                              ],
                              staticClass: "form-control",
                              attrs: {
                                type: "text",
                                required: "",
                                id: "menuItemUrl",
                                placeholder: "Enter Url",
                                autocomplete: "off",
                              },
                              domProps: { value: _vm.new_item.url },
                              on: {
                                input: function ($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.$set(
                                    _vm.new_item,
                                    "url",
                                    $event.target.value
                                  )
                                },
                              },
                            }),
                          ]),
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group mb-2" }, [
                          _c("label", { attrs: { for: "menu-type" } }, [
                            _vm._v("Menu Type"),
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "form-line" }, [
                            _c(
                              "select",
                              {
                                directives: [
                                  {
                                    name: "model",
                                    rawName: "v-model",
                                    value: _vm.new_item.menu_type,
                                    expression: "new_item.menu_type",
                                  },
                                ],
                                staticClass: "form-control",
                                attrs: { name: "menu_type", id: "menu-type" },
                                on: {
                                  change: [
                                    function ($event) {
                                      var $$selectedVal = Array.prototype.filter
                                        .call(
                                          $event.target.options,
                                          function (o) {
                                            return o.selected
                                          }
                                        )
                                        .map(function (o) {
                                          var val =
                                            "_value" in o ? o._value : o.value
                                          return val
                                        })
                                      _vm.$set(
                                        _vm.new_item,
                                        "menu_type",
                                        $event.target.multiple
                                          ? $$selectedVal
                                          : $$selectedVal[0]
                                      )
                                    },
                                    function ($event) {
                                      $event.preventDefault()
                                      return _vm.menuTypeChangeHandler()
                                    },
                                  ],
                                },
                              },
                              _vm._l(
                                _vm.menu_types,
                                function (menu_type, mindex) {
                                  return _c(
                                    "option",
                                    {
                                      key: mindex,
                                      domProps: { value: menu_type },
                                    },
                                    [
                                      _vm._v(
                                        "\n                    " +
                                          _vm._s(
                                            _vm.capitalizeFirstLetter(menu_type)
                                          ) +
                                          "\n                  "
                                      ),
                                    ]
                                  )
                                }
                              ),
                              0
                            ),
                          ]),
                        ]),
                        _vm._v(" "),
                        _c(
                          "div",
                          {
                            staticClass: "page_selection",
                            staticStyle: { display: "none" },
                          },
                          [
                            _c("div", { staticClass: "form-group mb-2" }, [
                              _c("label", { attrs: { for: "page" } }, [
                                _vm._v("Pages"),
                              ]),
                              _vm._v(" "),
                              _c("div", { staticClass: "form-line" }, [
                                _c(
                                  "select",
                                  {
                                    staticClass: "form-control",
                                    attrs: { name: "page", id: "page" },
                                    on: {
                                      change: function ($event) {
                                        $event.preventDefault()
                                        return _vm.pageChangeHandler()
                                      },
                                    },
                                  },
                                  [
                                    _c("option", { attrs: { value: "" } }, [
                                      _vm._v("Select page"),
                                    ]),
                                    _vm._v(" "),
                                    _vm._l(_vm.pages, function (page, pindex) {
                                      return _c(
                                        "option",
                                        {
                                          key: pindex,
                                          domProps: { value: page.id },
                                        },
                                        [
                                          _vm._v(
                                            "\n                      " +
                                              _vm._s(page.title) +
                                              "\n                    "
                                          ),
                                        ]
                                      )
                                    }),
                                  ],
                                  2
                                ),
                              ]),
                            ]),
                          ]
                        ),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group mb-2" }, [
                          _c("label", { attrs: { for: "target" } }, [
                            _vm._v("Target"),
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "form-line" }, [
                            _c(
                              "select",
                              {
                                directives: [
                                  {
                                    name: "model",
                                    rawName: "v-model",
                                    value: _vm.new_item.target,
                                    expression: "new_item.target",
                                  },
                                ],
                                staticClass: "form-control",
                                attrs: { name: "target", id: "target" },
                                on: {
                                  change: function ($event) {
                                    var $$selectedVal = Array.prototype.filter
                                      .call(
                                        $event.target.options,
                                        function (o) {
                                          return o.selected
                                        }
                                      )
                                      .map(function (o) {
                                        var val =
                                          "_value" in o ? o._value : o.value
                                        return val
                                      })
                                    _vm.$set(
                                      _vm.new_item,
                                      "target",
                                      $event.target.multiple
                                        ? $$selectedVal
                                        : $$selectedVal[0]
                                    )
                                  },
                                },
                              },
                              [
                                _c("option", { attrs: { value: "_blank" } }, [
                                  _vm._v("New Window"),
                                ]),
                                _vm._v(" "),
                                _c("option", { attrs: { value: "_self" } }, [
                                  _vm._v("Same Window"),
                                ]),
                              ]
                            ),
                          ]),
                        ]),
                      ]),
                      _vm._v(" "),
                      _vm._m(1),
                    ]
                  ),
                ]),
              ]
            ),
          ]
        )
      : _vm._e(),
    _vm._v(" "),
    _c(
      "div",
      {
        staticClass: "modal fade",
        staticStyle: { display: "none" },
        attrs: {
          id: "editItem",
          tabindex: "-1",
          role: "dialog",
          "aria-labelledby": "editItemTitle",
          "aria-hidden": "true",
        },
      },
      [
        _c(
          "div",
          {
            staticClass: "modal-dialog modal-dialog-centered",
            attrs: { role: "document" },
          },
          [
            _c("div", { staticClass: "modal-content" }, [
              _vm._m(2),
              _vm._v(" "),
              _c(
                "form",
                {
                  attrs: { method: "post" },
                  on: {
                    submit: function ($event) {
                      $event.preventDefault()
                      return _vm.updateItem.apply(null, arguments)
                    },
                  },
                },
                [
                  _c("div", { staticClass: "modal-body" }, [
                    _c("label", { attrs: { for: "update-menuItemTitle" } }, [
                      _vm._v("Title"),
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("div", { staticClass: "form-line" }, [
                        _c("input", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.edit_data.title,
                              expression: "edit_data.title",
                            },
                          ],
                          staticClass: "form-control",
                          attrs: {
                            type: "text",
                            id: "update-menuItemTitle",
                            placeholder: "Enter Title",
                            required: "",
                            autocomplete: "off",
                          },
                          domProps: { value: _vm.edit_data.title },
                          on: {
                            input: function ($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.$set(
                                _vm.edit_data,
                                "title",
                                $event.target.value
                              )
                            },
                          },
                        }),
                      ]),
                    ]),
                    _vm._v(" "),
                    _c("label", { attrs: { for: "menuItemUrlUpdate" } }, [
                      _vm._v("Url"),
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("div", { staticClass: "form-line" }, [
                        _c("input", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.edit_data.url,
                              expression: "edit_data.url",
                            },
                          ],
                          staticClass: "form-control",
                          attrs: {
                            type: "text",
                            required: "",
                            id: "menuItemUrlUpdate",
                            placeholder: "Enter Url",
                            autocomplete: "off",
                          },
                          domProps: { value: _vm.edit_data.url },
                          on: {
                            input: function ($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.$set(
                                _vm.edit_data,
                                "url",
                                $event.target.value
                              )
                            },
                          },
                        }),
                      ]),
                    ]),
                    _vm._v(" "),
                    _c("label", { attrs: { for: "edit-menu-type" } }, [
                      _vm._v("Menu Type"),
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("div", { staticClass: "form-line" }, [
                        _c(
                          "select",
                          {
                            directives: [
                              {
                                name: "model",
                                rawName: "v-model",
                                value: _vm.edit_data.menu_type,
                                expression: "edit_data.menu_type",
                              },
                            ],
                            staticClass: "form-control",
                            attrs: { name: "menu_type", id: "edit-menu-type" },
                            on: {
                              change: [
                                function ($event) {
                                  var $$selectedVal = Array.prototype.filter
                                    .call($event.target.options, function (o) {
                                      return o.selected
                                    })
                                    .map(function (o) {
                                      var val =
                                        "_value" in o ? o._value : o.value
                                      return val
                                    })
                                  _vm.$set(
                                    _vm.edit_data,
                                    "menu_type",
                                    $event.target.multiple
                                      ? $$selectedVal
                                      : $$selectedVal[0]
                                  )
                                },
                                function ($event) {
                                  $event.preventDefault()
                                  return _vm.menuTypeChangeHandler("edit")
                                },
                              ],
                            },
                          },
                          _vm._l(_vm.menu_types, function (menu_type, mindex) {
                            return _c(
                              "option",
                              { key: mindex, domProps: { value: menu_type } },
                              [
                                _vm._v(
                                  "\n                    " +
                                    _vm._s(
                                      _vm.capitalizeFirstLetter(menu_type)
                                    ) +
                                    "\n                  "
                                ),
                              ]
                            )
                          }),
                          0
                        ),
                      ]),
                    ]),
                    _vm._v(" "),
                    _c(
                      "div",
                      {
                        staticClass: "edit_page_selection",
                        staticStyle: { display: "none" },
                      },
                      [
                        _c("label", { attrs: { for: "edit-page" } }, [
                          _vm._v("Pages"),
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group" }, [
                          _c("div", { staticClass: "form-line" }, [
                            _c(
                              "select",
                              {
                                directives: [
                                  {
                                    name: "model",
                                    rawName: "v-model",
                                    value: _vm.edit_data.page_id,
                                    expression: "edit_data.page_id",
                                  },
                                ],
                                staticClass: "form-control",
                                attrs: { name: "edit_page", id: "edit-page" },
                                on: {
                                  change: [
                                    function ($event) {
                                      var $$selectedVal = Array.prototype.filter
                                        .call(
                                          $event.target.options,
                                          function (o) {
                                            return o.selected
                                          }
                                        )
                                        .map(function (o) {
                                          var val =
                                            "_value" in o ? o._value : o.value
                                          return val
                                        })
                                      _vm.$set(
                                        _vm.edit_data,
                                        "page_id",
                                        $event.target.multiple
                                          ? $$selectedVal
                                          : $$selectedVal[0]
                                      )
                                    },
                                    function ($event) {
                                      $event.preventDefault()
                                      return _vm.pageChangeHandler("edit")
                                    },
                                  ],
                                },
                              },
                              [
                                _c("option", { attrs: { value: "" } }, [
                                  _vm._v("Select page"),
                                ]),
                                _vm._v(" "),
                                _vm._l(_vm.pages, function (page, pindex) {
                                  return _c(
                                    "option",
                                    {
                                      key: pindex,
                                      domProps: { value: page.id },
                                    },
                                    [
                                      _vm._v(
                                        "\n                      " +
                                          _vm._s(page.title) +
                                          "\n                    "
                                      ),
                                    ]
                                  )
                                }),
                              ],
                              2
                            ),
                          ]),
                        ]),
                      ]
                    ),
                    _vm._v(" "),
                    _c("label", { attrs: { for: "target-update" } }, [
                      _vm._v("Target"),
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("div", { staticClass: "form-line" }, [
                        _c(
                          "select",
                          {
                            directives: [
                              {
                                name: "model",
                                rawName: "v-model",
                                value: _vm.edit_data.target,
                                expression: "edit_data.target",
                              },
                            ],
                            staticClass: "form-control",
                            attrs: { name: "target", id: "target-update" },
                            on: {
                              change: function ($event) {
                                var $$selectedVal = Array.prototype.filter
                                  .call($event.target.options, function (o) {
                                    return o.selected
                                  })
                                  .map(function (o) {
                                    var val = "_value" in o ? o._value : o.value
                                    return val
                                  })
                                _vm.$set(
                                  _vm.edit_data,
                                  "target",
                                  $event.target.multiple
                                    ? $$selectedVal
                                    : $$selectedVal[0]
                                )
                              },
                            },
                          },
                          [
                            _c("option", { attrs: { value: "_blank" } }, [
                              _vm._v("New Window"),
                            ]),
                            _vm._v(" "),
                            _c("option", { attrs: { value: "_self" } }, [
                              _vm._v("Same Window"),
                            ]),
                          ]
                        ),
                      ]),
                    ]),
                  ]),
                  _vm._v(" "),
                  _vm._m(3),
                ]
              ),
            ]),
          ]
        ),
      ]
    ),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-header" }, [
      _c(
        "h5",
        { staticClass: "modal-title", attrs: { id: "addNewMenuItemTitle" } },
        [_vm._v("\n            Add New Menu Item\n          ")]
      ),
      _vm._v(" "),
      _c("button", {
        staticClass: "btn-close",
        attrs: {
          type: "button",
          "data-bs-dismiss": "modal",
          "aria-label": "Close",
        },
      }),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-footer" }, [
      _c(
        "button",
        {
          staticClass: "btn btn-primary m-t-15 waves-effect",
          attrs: { type: "submit" },
        },
        [_vm._v("\n              Save\n            ")]
      ),
      _vm._v(" "),
      _c(
        "button",
        {
          staticClass: "btn btn-danger waves-effect",
          attrs: { type: "button", "data-bs-dismiss": "modal" },
        },
        [_vm._v("\n              Cancel\n            ")]
      ),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-header" }, [
      _c("h5", { staticClass: "modal-title", attrs: { id: "editItemTitle" } }, [
        _vm._v("Update Menu Item"),
      ]),
      _vm._v(" "),
      _c("button", {
        staticClass: "btn-close",
        attrs: {
          type: "button",
          "data-bs-dismiss": "modal",
          "aria-label": "Close",
        },
      }),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-footer" }, [
      _c(
        "button",
        {
          staticClass: "btn btn-primary m-t-15 waves-effect",
          attrs: { type: "submit" },
        },
        [_vm._v("\n              Update\n            ")]
      ),
      _vm._v(" "),
      _c(
        "button",
        {
          staticClass: "btn btn-danger waves-effect",
          attrs: { type: "button", "data-bs-dismiss": "modal" },
        },
        [_vm._v("\n              Cancel\n            ")]
      ),
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
