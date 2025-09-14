"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_frontend_ArticleCommentReply_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/frontend/ArticleCommentReply.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/frontend/ArticleCommentReply.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************************************************************************************/
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
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "ArticleCommentReply",
  props: ["authid", "articleId"],
  data: function data() {
    return {
      formData: {
        comment: "",
        article_id: this.articleId
      },
      comments: [],
      obj: {
        article_id: this.articleId,
        user_id: this.authid,
        comment_id: "",
        reply: ""
      }
    };
  },
  methods: {
    addComment: function addComment() {
      var _this = this;

      axios.post("/comment/store", this.formData).then(function (res) {
        if (res.data.data) {
          _this.comments.unshift(res.data.data);

          _this.formData.comment = "";
          toastr.success("Comment added successfully!");
        }
      })["catch"](function (err) {
        console.log(err);
      });
    },
    getAllComment: function getAllComment() {
      var _this2 = this;

      axios.get("/comments/".concat(this.formData.article_id)).then(function (res) {
        var _res$data$data;

        _this2.comments = (_res$data$data = res.data.data) !== null && _res$data$data !== void 0 ? _res$data$data : [];
      })["catch"](function (err) {
        console.log(err);
      });
    },
    openReplyForm: function openReplyForm(cid, index) {
      var repyForm = document.getElementById("reply-form-".concat(index));
      repyForm.classList.remove("d-none"); //   let obj = {
      //     article_id: this.articleId,
      //     user_id: this.authid,
      //     comment_id: cid,
      //     reply: "",
      //     user: {
      //       full_name: "",
      //       user_id: this.authid,
      //       avatar_url: "/images/user_default.png",
      //       created_at: new Date().toLocaleString(),
      //     },
      //   };
      //   this.comments[index].replies.push(obj);
      //   this.obj.comment_id = cid;
    },
    commentReply: function commentReply(cid, obj, index) {
      var _this3 = this;

      obj.comment_id = cid;
      axios.post("/reply/store", obj).then(function (res) {
        var obj = res.data.data;
        var user = {
          full_name: "",
          user_id: _this3.authid,
          avatar_url: "/images/user_default.png",
          created_at: new Date().toLocaleString()
        }; //   obj.push(user);

        _this3.comments[index].replies.push(obj);

        var repyForm = document.getElementById("reply-form-".concat(index));
        repyForm.classList.add("d-none");
        toastr.success("Reply added successfully!");
        _this3.obj.reply = "";

        _this3.getAllComment();
      })["catch"](function (err) {
        console.log(err);
      });
    },
    deleteComment: function deleteComment(cid, index) {
      var _this4 = this;

      var self = this;
      self.$swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true
      }).then(function (result) {
        if (result.isConfirmed) {
          axios["delete"]("/comment/delete/".concat(cid)).then(function (res) {
            if (res.data.success) {
              _this4.comments.splice(index, 1);

              toastr.success(res.data.success);
            } else {
              toastr.error(res.data.error);
            }
          })["catch"](function (err) {
            console.log(err);
          });
        } else {
          self.$swal("Delete request cancel!");
        }
      });
    },
    deleteReply: function deleteReply(cindex, rid, index) {
      var _this5 = this;

      var self = this;
      self.$swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true
      }).then(function (result) {
        if (result.isConfirmed) {
          axios["delete"]("/reply/delete/".concat(rid)).then(function (res) {
            if (res.data.success) {
              _this5.comments[cindex].replies.splice(index, 1);

              toastr.success(res.data.success);
            } else {
              toastr.error(res.data.error);
            }
          })["catch"](function (err) {
            console.log(err);
          });
        } else {
          self.$swal("Delete request cancel!");
        }
      });
    },
    editComment: function editComment(cid, index) {
      var repyForm = document.getElementById("edit-comment-".concat(index));
      repyForm.classList.remove("d-none");
    },
    editReply: function editReply(rid, index) {
      var repyForm = document.getElementById("reply-edit-".concat(index));
      repyForm.classList.remove("d-none");
    },
    updateComment: function updateComment(cid, index) {
      var comment = this.comments[index].comment;
      axios.put("/comment/update/".concat(cid), {
        comment: comment
      }).then(function (res) {
        if (res.data.success) {
          var repyForm = document.getElementById("edit-comment-".concat(index));
          repyForm.classList.add("d-none");
          toastr.success(res.data.success);
        } else {
          toastr.error(res.data.error);
        }
      })["catch"](function (err) {
        console.log(err);
      });
    },
    updateReply: function updateReply(rid, index, key) {
      var reply = this.comments[index].replies[key].reply;
      axios.put("/reply/update/".concat(rid), {
        reply: reply
      }).then(function (res) {
        if (res.data.success) {
          var repyForm = document.getElementById("reply-edit-".concat(key));
          repyForm.classList.add("d-none");
          toastr.success(res.data.success);
        } else {
          toastr.error(res.data.error);
        }
      })["catch"](function (err) {
        console.log(err);
      });
    }
  },
  mounted: function mounted() {
    this.getAllComment();
  } //   watch: {
  //     comments(newQuestion, oldQuestion) {
  //       this.getAllComment();
  //     },
  //     deep: true,
  //   },

});

/***/ }),

/***/ "./resources/js/components/frontend/ArticleCommentReply.vue":
/*!******************************************************************!*\
  !*** ./resources/js/components/frontend/ArticleCommentReply.vue ***!
  \******************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _ArticleCommentReply_vue_vue_type_template_id_05a2540f___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ArticleCommentReply.vue?vue&type=template&id=05a2540f& */ "./resources/js/components/frontend/ArticleCommentReply.vue?vue&type=template&id=05a2540f&");
/* harmony import */ var _ArticleCommentReply_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ArticleCommentReply.vue?vue&type=script&lang=js& */ "./resources/js/components/frontend/ArticleCommentReply.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _ArticleCommentReply_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _ArticleCommentReply_vue_vue_type_template_id_05a2540f___WEBPACK_IMPORTED_MODULE_0__.render,
  _ArticleCommentReply_vue_vue_type_template_id_05a2540f___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/frontend/ArticleCommentReply.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/frontend/ArticleCommentReply.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/components/frontend/ArticleCommentReply.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ArticleCommentReply_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./ArticleCommentReply.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/frontend/ArticleCommentReply.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ArticleCommentReply_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/frontend/ArticleCommentReply.vue?vue&type=template&id=05a2540f&":
/*!*************************************************************************************************!*\
  !*** ./resources/js/components/frontend/ArticleCommentReply.vue?vue&type=template&id=05a2540f& ***!
  \*************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ArticleCommentReply_vue_vue_type_template_id_05a2540f___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ArticleCommentReply_vue_vue_type_template_id_05a2540f___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ArticleCommentReply_vue_vue_type_template_id_05a2540f___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./ArticleCommentReply.vue?vue&type=template&id=05a2540f& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/frontend/ArticleCommentReply.vue?vue&type=template&id=05a2540f&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/frontend/ArticleCommentReply.vue?vue&type=template&id=05a2540f&":
/*!****************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/frontend/ArticleCommentReply.vue?vue&type=template&id=05a2540f& ***!
  \****************************************************************************************************************************************************************************************************************************************/
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
  return _c("div", { staticClass: "ic-leave-comment-main ic-contact-right" }, [
    _vm.authid ? _c("h2", [_vm._v("Leave a Comment")]) : _vm._e(),
    _vm._v(" "),
    _c("form", { attrs: { action: "#" } }, [
      _vm.authid
        ? _c("div", { staticClass: "row" }, [
            _c("div", { staticClass: "col-lg-12" }, [
              _c("div", { staticClass: "form-group" }, [
                _c("label", { staticClass: "pb-2" }, [_vm._v("Comment")]),
                _vm._v(" "),
                _c("textarea", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.formData.comment,
                      expression: "formData.comment",
                    },
                  ],
                  staticClass: "form-control",
                  attrs: { placeholder: "Type a comment" },
                  domProps: { value: _vm.formData.comment },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.$set(_vm.formData, "comment", $event.target.value)
                    },
                  },
                }),
              ]),
            ]),
          ])
        : _vm._e(),
      _vm._v(" "),
      _vm.authid
        ? _c("div", { staticClass: "ic-leave-comment-button" }, [
            _c(
              "button",
              {
                staticClass: "ic-btn",
                attrs: { type: "button" },
                on: { click: _vm.addComment },
              },
              [_vm._v("Submit")]
            ),
          ])
        : _vm._e(),
      _vm._v(" "),
      _c("div", { staticClass: "ic-blog-comments-main" }, [
        _c("h2", [_vm._v("Comments (" + _vm._s(_vm.comments.length) + ")")]),
        _vm._v(" "),
        _c("div", { staticClass: "ic-blog-comments-show" }, [
          _c(
            "div",
            { staticClass: "ic-blog-comments-show-group mb-5" },
            _vm._l(_vm.comments, function (comment, index) {
              return _c(
                "div",
                { key: index, staticClass: "mb-3" },
                [
                  _c("div", { staticClass: "ic-blog-comments-show-items" }, [
                    _c("img", {
                      attrs: {
                        src: comment.user.avatar_url,
                        alt: "blog-comments-img",
                      },
                    }),
                    _vm._v(" "),
                    _c("div", { staticClass: "ic-comments-contents" }, [
                      _c("ul", { staticClass: "ic-blog-comments-name" }, [
                        _c("li", [
                          _c("h4", [_vm._v(_vm._s(comment.user.full_name))]),
                        ]),
                        _vm._v(" "),
                        _c("li", [
                          _c("p", { staticClass: "blog-date" }, [
                            _vm._v(
                              "\n                      " +
                                _vm._s(
                                  _vm._f("customDate")(comment.created_at)
                                ) +
                                "\n                    "
                            ),
                          ]),
                        ]),
                      ]),
                      _vm._v(" "),
                      _c("p", [
                        _vm._v(
                          "\n                  " +
                            _vm._s(comment.comment) +
                            "\n                "
                        ),
                      ]),
                      _vm._v(" "),
                      _c(
                        "div",
                        { staticClass: "ic__action-btn" },
                        [
                          _vm.authid
                            ? _c(
                                "button",
                                {
                                  attrs: { type: "button" },
                                  on: {
                                    click: function ($event) {
                                      return _vm.openReplyForm(
                                        comment.id,
                                        index
                                      )
                                    },
                                  },
                                },
                                [_c("i", { staticClass: "ri-reply-fill" })]
                              )
                            : _vm._e(),
                          _vm._v(" "),
                          _vm.authid == comment.user.id
                            ? [
                                _c(
                                  "button",
                                  {
                                    attrs: { type: "button" },
                                    on: {
                                      click: function ($event) {
                                        return _vm.deleteComment(
                                          comment.id,
                                          index
                                        )
                                      },
                                    },
                                  },
                                  [
                                    _c("i", {
                                      staticClass: "ri-delete-bin-fill",
                                    }),
                                  ]
                                ),
                                _vm._v(" "),
                                _c(
                                  "button",
                                  {
                                    attrs: { type: "button" },
                                    on: {
                                      click: function ($event) {
                                        return _vm.editComment(
                                          comment.id,
                                          index
                                        )
                                      },
                                    },
                                  },
                                  [_c("i", { staticClass: "ri-edit-2-fill" })]
                                ),
                              ]
                            : _vm._e(),
                        ],
                        2
                      ),
                      _vm._v(" "),
                      _vm.authid
                        ? _c(
                            "div",
                            {
                              staticClass: "d-none",
                              attrs: { id: "reply-form-" + index },
                            },
                            [
                              _c("div", { staticClass: "form-group mt-3" }, [
                                _c("textarea", {
                                  directives: [
                                    {
                                      name: "model",
                                      rawName: "v-model.lazy",
                                      value: comment.comment,
                                      expression: "comment.comment",
                                      modifiers: { lazy: true },
                                    },
                                  ],
                                  staticClass: "form-control",
                                  attrs: { placeholder: "Type a comment" },
                                  domProps: { value: comment.comment },
                                  on: {
                                    change: function ($event) {
                                      return _vm.$set(
                                        comment,
                                        "comment",
                                        $event.target.value
                                      )
                                    },
                                  },
                                }),
                              ]),
                              _vm._v(" "),
                              _c(
                                "button",
                                {
                                  staticClass: "ic-btn btn-hotpink",
                                  attrs: { type: "button" },
                                  on: {
                                    click: function ($event) {
                                      return _vm.commentReply(
                                        comment.id,
                                        _vm.obj,
                                        index
                                      )
                                    },
                                  },
                                },
                                [
                                  _vm._v(
                                    "\n                    Submit\n                  "
                                  ),
                                ]
                              ),
                            ]
                          )
                        : _vm._e(),
                      _vm._v(" "),
                      _vm.authid
                        ? _c(
                            "div",
                            {
                              staticClass: "d-none",
                              attrs: { id: "edit-comment-" + index },
                            },
                            [
                              _c("div", { staticClass: "form-group mt-3" }, [
                                _c("textarea", {
                                  directives: [
                                    {
                                      name: "model",
                                      rawName: "v-model",
                                      value: comment.comment,
                                      expression: "comment.comment",
                                    },
                                  ],
                                  staticClass: "form-control",
                                  attrs: { placeholder: "Type a comment" },
                                  domProps: { value: comment.comment },
                                  on: {
                                    input: function ($event) {
                                      if ($event.target.composing) {
                                        return
                                      }
                                      _vm.$set(
                                        comment,
                                        "comment",
                                        $event.target.value
                                      )
                                    },
                                  },
                                }),
                              ]),
                              _vm._v(" "),
                              _c(
                                "button",
                                {
                                  staticClass: "ic-btn btn-hotpink",
                                  attrs: { type: "button" },
                                  on: {
                                    click: function ($event) {
                                      return _vm.updateComment(
                                        comment.id,
                                        index
                                      )
                                    },
                                  },
                                },
                                [
                                  _vm._v(
                                    "\n                    Update\n                  "
                                  ),
                                ]
                              ),
                            ]
                          )
                        : _vm._e(),
                    ]),
                  ]),
                  _vm._v(" "),
                  comment.replies.length > 0
                    ? _vm._l(comment.replies, function (reply, key) {
                        return _c(
                          "div",
                          {
                            key: key,
                            staticClass: "ic-blog-comments-show-items",
                          },
                          [
                            _c("img", {
                              attrs: {
                                src: reply.user.avatar_url,
                                alt: "blog-comments-img",
                              },
                            }),
                            _vm._v(" "),
                            _c("div", { staticClass: "ic-comments-contents" }, [
                              _c(
                                "ul",
                                { staticClass: "ic-blog-comments-name" },
                                [
                                  _c("li", [
                                    _c("h4", [
                                      _vm._v(_vm._s(reply.user.full_name)),
                                    ]),
                                  ]),
                                  _vm._v(" "),
                                  _c("li", [
                                    reply.created_at
                                      ? _c("p", { staticClass: "blog-date" }, [
                                          _vm._v(
                                            "\n                        " +
                                              _vm._s(
                                                _vm._f("customDate")(
                                                  reply.created_at
                                                )
                                              ) +
                                              "\n                      "
                                          ),
                                        ])
                                      : _vm._e(),
                                  ]),
                                ]
                              ),
                              _vm._v(" "),
                              _c("p", [
                                _vm._v(
                                  "\n                    " +
                                    _vm._s(reply.reply) +
                                    "\n                  "
                                ),
                              ]),
                              _vm._v(" "),
                              _c(
                                "div",
                                { staticClass: "ic__action-btn" },
                                [
                                  _vm.authid == reply.user.id
                                    ? [
                                        _c(
                                          "button",
                                          {
                                            attrs: { type: "button" },
                                            on: {
                                              click: function ($event) {
                                                return _vm.deleteReply(
                                                  index,
                                                  reply.id,
                                                  key
                                                )
                                              },
                                            },
                                          },
                                          [
                                            _c("i", {
                                              staticClass: "ri-delete-bin-fill",
                                            }),
                                          ]
                                        ),
                                        _vm._v(" "),
                                        _c(
                                          "button",
                                          {
                                            attrs: { type: "button" },
                                            on: {
                                              click: function ($event) {
                                                return _vm.editReply(
                                                  reply.id,
                                                  key
                                                )
                                              },
                                            },
                                          },
                                          [
                                            _c("i", {
                                              staticClass: "ri-edit-2-fill",
                                            }),
                                          ]
                                        ),
                                      ]
                                    : _vm._e(),
                                ],
                                2
                              ),
                              _vm._v(" "),
                              _vm.authid
                                ? _c(
                                    "div",
                                    {
                                      staticClass: "d-none",
                                      attrs: { id: "reply-edit-" + key },
                                    },
                                    [
                                      _c(
                                        "div",
                                        { staticClass: "form-group mt-3" },
                                        [
                                          _c("textarea", {
                                            directives: [
                                              {
                                                name: "model",
                                                rawName: "v-model",
                                                value: reply.reply,
                                                expression: "reply.reply",
                                              },
                                            ],
                                            staticClass: "form-control",
                                            attrs: {
                                              placeholder: "Type a reply",
                                            },
                                            domProps: { value: reply.reply },
                                            on: {
                                              input: function ($event) {
                                                if ($event.target.composing) {
                                                  return
                                                }
                                                _vm.$set(
                                                  reply,
                                                  "reply",
                                                  $event.target.value
                                                )
                                              },
                                            },
                                          }),
                                        ]
                                      ),
                                      _vm._v(" "),
                                      _c(
                                        "button",
                                        {
                                          staticClass: "ic-btn btn-hotpink",
                                          attrs: { type: "button" },
                                          on: {
                                            click: function ($event) {
                                              return _vm.updateReply(
                                                reply.id,
                                                index,
                                                key
                                              )
                                            },
                                          },
                                        },
                                        [
                                          _vm._v(
                                            "\n                      Update\n                    "
                                          ),
                                        ]
                                      ),
                                    ]
                                  )
                                : _vm._e(),
                            ]),
                          ]
                        )
                      })
                    : _vm._e(),
                ],
                2
              )
            }),
            0
          ),
        ]),
      ]),
    ]),
  ])
}
var staticRenderFns = []
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