"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_views_products_Category_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/products/Category.vue?vue&type=script&lang=js":
/*!******************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/products/Category.vue?vue&type=script&lang=js ***!
  \******************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "category",
  data: function data() {
    return {
      products: [],
      category: []
    };
  },
  mounted: function mounted() {
    this.getProductFromCategory(this.$route);
  },
  watch: {
    $route: function $route(to, from) {
      this.getProductFromCategory(to);
    }
  },
  methods: {
    getProductFromCategory: function getProductFromCategory(place) {
      var _this = this;
      this.axios.get("../../api/category/" + place.params.id).then(function (res) {
        _this.products = res.data.products;
        _this.category = res.data.category;
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/products/Category.vue?vue&type=template&id=ae84040c":
/*!**********************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/products/Category.vue?vue&type=template&id=ae84040c ***!
  \**********************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

var _hoisted_1 = {
  "class": "container"
};
var _hoisted_2 = {
  "class": "row"
};
var _hoisted_3 = {
  "class": "d-none d-xl-flex col-lg-3"
};
var _hoisted_4 = {
  "class": "py-3 shadow-sm bg-white"
};
var _hoisted_5 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h3", {
  "class": "px-4"
}, "Категории", -1 /* HOISTED */);
var _hoisted_6 = {
  "class": "col"
};
var _hoisted_7 = {
  "class": "row"
};
var _hoisted_8 = {
  "class": "col"
};
var _hoisted_9 = {
  "class": "bg-white p-2 p-lg-3 shadow-sm mb-2 mb-lg-4"
};
var _hoisted_10 = {
  "class": "d-flex align-items-end my-3"
};
var _hoisted_11 = {
  "class": "my-0 lh-1"
};
var _hoisted_12 = {
  "class": "pl-2"
};
var _hoisted_13 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createStaticVNode)("<div class=\"d-flex justify-content-between\"><!-- Left --><div><div class=\"form-inline\"><div class=\"form-group mb-0\"><select class=\"form-control form-control-sm\" id=\"exampleFormControlSelect1\"><option>20</option><option>50</option><option>100</option><option>All</option></select><label for=\"exampleFormControlSelect1\" class=\"ml-3 d-none d-lg-block\"><small>Showing all 24 of 128 products</small></label></div></div></div><!-- Right --><div><div class=\"form-inline\"><div class=\"mr-2\"><a href=\"products-grid.html\" class=\"btn btn-sm text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Grid view\"><i class=\"fa fa-th-large\"></i></a><a href=\"products-list.html\" class=\"btn btn-sm\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"List view\"><i class=\"fa fa-list-ul\"></i></a></div><div class=\"form-group mb-0\"><label for=\"exampleFormControlSelect2\" class=\"mr-3 d-none d-lg-block\"><small>Sort by</small></label><select class=\"form-control form-control-sm\" id=\"exampleFormControlSelect2\"><option>Name</option><option>Price</option></select></div><div class=\"d-lg-none ml-2\"><button class=\"btn btn-danger btn-sm toggle-show\" data-show=\"open-mobile-filters\"><strong><i class=\"icon icon-text-align-center\"></i><span class=\"d-none d-sm-inline-block\">Filters</span></strong></button></div></div></div></div>", 1);
var _hoisted_14 = {
  "class": "row row-cols-1 row-cols-lg-3 gy-4"
};
var _hoisted_15 = {
  key: 0,
  "class": "col"
};
var _hoisted_16 = {
  "class": "card bg-white d-flex flex-column justify-content-between"
};
var _hoisted_17 = {
  "class": "card-img-top h-50 position-relative"
};
var _hoisted_18 = ["src"];
var _hoisted_19 = {
  key: 0,
  "class": "position-absolute top-0 d-flex flex-wrap justify-content-start w-100 p-2 gap-2"
};
var _hoisted_20 = {
  key: 0,
  "class": "d-flex align-items-center badge badge-white rounded-pill"
};
var _hoisted_21 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
  "class": "fas fa-star text-warning pr-1"
}, null, -1 /* HOISTED */);
var _hoisted_22 = {
  "class": "text-black"
};
var _hoisted_23 = ["onClick"];
var _hoisted_24 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
  "class": "fas fa-heart text-white fs-5 favourite"
}, null, -1 /* HOISTED */);
var _hoisted_25 = {
  "class": "card-body px-3 py-3 d-flex flex-column justify-content-between"
};
var _hoisted_26 = ["href"];
var _hoisted_27 = {
  "class": "d-flex justify-content-between align-items-center h-25 w-100"
};
var _hoisted_28 = {
  "class": "d-flex flex-column flex-fill"
};
var _hoisted_29 = {
  "class": "fs-5 mb-0 text-nowrap"
};
var _hoisted_30 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("small", null, "за шт.", -1 /* HOISTED */);
var _hoisted_31 = {
  key: 0,
  "class": "d-flex align-items-center justify-content-center"
};
var _hoisted_32 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
  "class": "btn btn-outline-primary text-nowrap d-flex align-items-center justify-content-center gap-2",
  disable: ""
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("small", null, "Нет в наличии")], -1 /* HOISTED */);
var _hoisted_33 = [_hoisted_32];
var _hoisted_34 = ["onClick"];
var _hoisted_35 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
  "class": "btn btn-outline-primary text-nowrap d-flex align-items-center justify-content-center gap-2"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
  "class": "fas fa-plus"
}), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
  "class": "fas fa-shopping-basket fs-5"
})], -1 /* HOISTED */);
var _hoisted_36 = [_hoisted_35];
var _hoisted_37 = {
  key: 2,
  "class": "d-flex align-items-center justify-content-center border rounded-3 w-lg-25 w-50"
};
var _hoisted_38 = ["onClick"];
var _hoisted_39 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
  "class": "fas fa-minus flex-fill"
}, null, -1 /* HOISTED */);
var _hoisted_40 = [_hoisted_39];
var _hoisted_41 = ["id", "onChange", "value"];
var _hoisted_42 = ["onClick"];
var _hoisted_43 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
  "class": "fas fa-plus"
}, null, -1 /* HOISTED */);
var _hoisted_44 = [_hoisted_43];
var _hoisted_45 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createStaticVNode)("<nav aria-label=\"Page navigation example\"><ul class=\"pagination justify-content-center py-3 py-lg-4\"><li class=\"page-item disabled\"><a class=\"page-link page-link-first\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\"></a></li><li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li><li class=\"page-item\"><a class=\"page-link\" href=\"#\"></a></li></ul></nav>", 1);
function render(_ctx, _cache, $props, $setup, $data, $options) {
  var _component_router_link = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("router-link");
  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_1, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_2, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_3, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_4, [_hoisted_5, ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)(this.$store.state.categories, function (category) {
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createBlock)(_component_router_link, {
      key: category.id,
      to: "/category/".concat(category.id),
      "class": "dropdown-item text-wrap px-4"
    }, {
      "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
        return [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(category.title), 1 /* TEXT */)];
      }),

      _: 2 /* DYNAMIC */
    }, 1032 /* PROPS, DYNAMIC_SLOTS */, ["to"]);
  }), 128 /* KEYED_FRAGMENT */))])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_6, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Products header "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_7, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_8, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_9, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_10, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h1", _hoisted_11, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.category.title), 1 /* TEXT */), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_12, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.products.length) + " " + (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(_ctx.getProductWord($data.products.length)), 1 /* TEXT */)]), _hoisted_13])])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Products collection "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_14, [$data.products ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, {
    key: 0
  }, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($data.products, function (product) {
    var _product$preview_imag;
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, {
      key: product.id
    }, [product.published ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_15, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_16, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_17, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("img", {
      src: (_product$preview_imag = product.preview_image) !== null && _product$preview_imag !== void 0 ? _product$preview_imag : 'storage/images/main/none.png',
      "class": "fit-img"
    }, null, 8 /* PROPS */, _hoisted_18), product.tags ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_19, [((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)(product.tags, function (tag) {
      return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", {
        key: tag.tag_id,
        "class": "badge badge-danger"
      }, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(tag.title), 1 /* TEXT */);
    }), 128 /* KEYED_FRAGMENT */))])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
      "class": (0,vue__WEBPACK_IMPORTED_MODULE_0__.normalizeClass)(["position-absolute bottom-0 left-0 w-100 d-flex p-3", product.rate ? 'justify-content-between' : 'justify-content-end'])
    }, [product.rate ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_20, [_hoisted_21, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("p", _hoisted_22, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(product.rate), 1 /* TEXT */)])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
      onClick: function onClick($event) {
        return _ctx.toggleToFavourite(product);
      },
      type: "button",
      "class": "d-flex align-self-end align-items-center justify-content-center fs-4 position-relative favourite"
    }, [_hoisted_24, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
      "class": (0,vue__WEBPACK_IMPORTED_MODULE_0__.normalizeClass)([_ctx.checkToHaving(product, 'favourite') !== undefined ? 'fas text-danger' : 'fa-regular', "fa-heart position-absolute"])
    }, null, 2 /* CLASS */)], 8 /* PROPS */, _hoisted_23)], 2 /* CLASS */)]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_25, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
      href: "/product/".concat(product.id),
      "class": "text-wrap text-truncate card-title h-50"
    }, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(product.title), 9 /* TEXT, PROPS */, _hoisted_26), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_27, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_28, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("p", _hoisted_29, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(product.price) + " ₽", 1 /* TEXT */), _hoisted_30]), product.count <= 0 ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("a", _hoisted_31, _hoisted_33)) : _ctx.checkToHaving(product, 'cart') === undefined ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("a", {
      key: 1,
      onClick: function onClick($event) {
        return _ctx.addToCart(product);
      },
      "class": "d-flex align-items-center justify-content-center"
    }, _hoisted_36, 8 /* PROPS */, _hoisted_34)) : ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_37, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
      onClick: (0,vue__WEBPACK_IMPORTED_MODULE_0__.withModifiers)(function ($event) {
        return _ctx.subtractQuantity(product);
      }, ["prevent"]),
      "class": "btn btn-outline-primary text-nowrap border-0 rounded-3 d-flex align-items-center justify-content-center"
    }, _hoisted_40, 8 /* PROPS */, _hoisted_38), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
      type: "number",
      "class": "item-edit rounded-0 border-0 shadow-none flex-fill text-center",
      min: "0",
      max: "999",
      id: 'editQuantity' + product.id,
      onInput: _cache[0] || (_cache[0] = function () {
        return _ctx.checkValue && _ctx.checkValue.apply(_ctx, arguments);
      }),
      onChange: function onChange($event) {
        return _ctx.setProduct(product, $event);
      },
      value: _ctx.checkToHaving(product, 'cart') === undefined ? 1 : _ctx.getValue(product)
    }, null, 40 /* PROPS, HYDRATE_EVENTS */, _hoisted_41), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
      onClick: (0,vue__WEBPACK_IMPORTED_MODULE_0__.withModifiers)(function ($event) {
        return _ctx.addQuantity(product);
      }, ["prevent"]),
      "class": "btn btn-outline-primary text-nowrap border-0 rounded-3 d-flex align-items-center justify-content-center"
    }, _hoisted_44, 8 /* PROPS */, _hoisted_42)]))])])])])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)], 64 /* STABLE_FRAGMENT */);
  }), 128 /* KEYED_FRAGMENT */)) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Pagination "), _hoisted_45])])]);
}

/***/ }),

/***/ "./resources/js/views/products/Category.vue":
/*!**************************************************!*\
  !*** ./resources/js/views/products/Category.vue ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Category_vue_vue_type_template_id_ae84040c__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Category.vue?vue&type=template&id=ae84040c */ "./resources/js/views/products/Category.vue?vue&type=template&id=ae84040c");
/* harmony import */ var _Category_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Category.vue?vue&type=script&lang=js */ "./resources/js/views/products/Category.vue?vue&type=script&lang=js");
/* harmony import */ var D_Program_Files_x86_OpenServer_domains_MyShop_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,D_Program_Files_x86_OpenServer_domains_MyShop_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_Category_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_Category_vue_vue_type_template_id_ae84040c__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/views/products/Category.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/views/products/Category.vue?vue&type=script&lang=js":
/*!**************************************************************************!*\
  !*** ./resources/js/views/products/Category.vue?vue&type=script&lang=js ***!
  \**************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Category_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Category_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Category.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/products/Category.vue?vue&type=script&lang=js");
 

/***/ }),

/***/ "./resources/js/views/products/Category.vue?vue&type=template&id=ae84040c":
/*!********************************************************************************!*\
  !*** ./resources/js/views/products/Category.vue?vue&type=template&id=ae84040c ***!
  \********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Category_vue_vue_type_template_id_ae84040c__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Category_vue_vue_type_template_id_ae84040c__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Category.vue?vue&type=template&id=ae84040c */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/products/Category.vue?vue&type=template&id=ae84040c");


/***/ })

}]);