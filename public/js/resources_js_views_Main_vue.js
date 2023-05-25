"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_views_Main_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/Main.vue?vue&type=script&lang=js":
/*!*****************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/Main.vue?vue&type=script&lang=js ***!
  \*****************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "mainPage",
  data: function data() {
    return {
      products: []
    };
  },
  mounted: function mounted() {
    this.getProducts();
  },
  methods: {
    getProducts: function getProducts() {
      var _this = this;
      this.axios.post('../api/products').then(function (res) {
        _this.products = res.data.data;
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/Main.vue?vue&type=template&id=2ad93e50":
/*!*********************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/Main.vue?vue&type=template&id=2ad93e50 ***!
  \*********************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

var _hoisted_1 = {
  "class": "mb-auto"
};
var _hoisted_2 = {
  "class": "container"
};
var _hoisted_3 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createStaticVNode)("<div class=\"row py-2\"><div id=\"carouselMain\" class=\"carousel slide px-4 col-12\" data-bs-ride=\"carousel\"><div class=\"carousel-inner\" style=\"max-height:450px;\"><div class=\"carousel-item active\"><img src=\"/storage/images/main/slider1.jpg\" class=\"d-block w-100\"></div><div class=\"carousel-item\"><img src=\"/storage/images/main/slider2.jpg\" class=\"d-block w-100\"></div><div class=\"carousel-item\"><img src=\"/storage/images/main/slider3.jpg\" class=\"d-block w-100\"></div></div><button class=\"carousel-control-prev text-white d-flex justify-content-start\" type=\"button\" data-bs-target=\"#carouselMain\" data-bs-slide=\"prev\"><i class=\"fa-solid fa-circle-chevron-left fa-3x\"></i><span class=\"visually-hidden\">Назад</span></button><button class=\"carousel-control-next text-white d-flex justify-content-end\" type=\"button\" data-bs-target=\"#carouselMain\" data-bs-slide=\"next\"><i class=\"fa-solid fa-circle-chevron-right fa-3x\"></i><span class=\"visually-hidden\">Вперёд</span></button></div></div><div class=\"row\"><div class=\"col-12 col-md-4 btn btn-white rounded-0 d-flex align-items-center justify-content-evenly p-4\"><i class=\"fa-solid fa-hand-holding-dollar fa-2x text-danger\"></i><p class=\"text-muted\">Лучшие цены</p></div><div class=\"col-12 col-md-4 btn btn-white rounded-0 d-flex align-items-center justify-content-evenly p-4\"><i class=\"fa-solid fa-truck fa-2x text-danger\"></i><p class=\"text-muted\">Бесплатная доставка</p></div><div class=\"col-12 col-md-4 btn btn-white rounded-0 d-flex align-items-center justify-content-evenly p-4\"><i class=\"fa-solid fa-wallet fa-2x text-danger\"></i><p class=\"text-muted\">Удобная оплата</p></div></div>", 2);
var _hoisted_5 = {
  "class": "row text-center py-3"
};
var _hoisted_6 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h4", null, "Товары в ассортименте", -1 /* HOISTED */);
var _hoisted_7 = {
  key: 0,
  "class": "row gutters-mobile"
};
var _hoisted_8 = {
  key: 0,
  "class": "card card-fill border-0 mb-2 mb-lg-4",
  style: {
    "min-height": "350px"
  }
};
var _hoisted_9 = {
  "class": "card-image"
};
var _hoisted_10 = ["src"];
var _hoisted_11 = {
  "class": "card-body p-3 p-lg-4"
};
var _hoisted_12 = {
  "class": "d-flex justify-content-evenly align-items-center text-center"
};
var _hoisted_13 = {
  "class": "card-title mb-1 h5"
};
var _hoisted_14 = ["href"];
var _hoisted_15 = {
  "class": "text-muted"
};
var _hoisted_16 = ["href"];
var _hoisted_17 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
  "class": "icon icon-cart font-size-xl"
}, null, -1 /* HOISTED */);
var _hoisted_18 = [_hoisted_17];
function render(_ctx, _cache, $props, $setup, $data, $options) {
  var _component_router_link = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("router-link");
  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("main", _hoisted_1, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_2, [_hoisted_3, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_5, [_hoisted_6, $data.products ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_7, [((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($data.products, function (product) {
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", {
      key: product.id,
      "class": "col-12 col-md-6 col-xl-4"
    }, [product.published ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_8, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_9, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_router_link, {
      to: "/products/".concat(product.id)
    }, {
      "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
        var _product$preview_imag;
        return [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("img", {
          src: (_product$preview_imag = product.preview_image) !== null && _product$preview_imag !== void 0 ? _product$preview_imag : 'storage/images/main/none.png',
          "class": "card-img-top",
          alt: "..."
        }, null, 8 /* PROPS */, _hoisted_10)];
      }),
      _: 2 /* DYNAMIC */
    }, 1032 /* PROPS, DYNAMIC_SLOTS */, ["to"])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_11, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_12, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h2", _hoisted_13, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
      href: "/products/".concat(product.id)
    }, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(product.title), 9 /* TEXT, PROPS */, _hoisted_14)]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("small", _hoisted_15, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(product.price) + " ₽", 1 /* TEXT */)])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
      href: "/products/".concat(product.id),
      "class": "d-inline-block",
      "data-toggle": "tooltip",
      "data-placement": "top",
      title: "Add to cart"
    }, _hoisted_18, 8 /* PROPS */, _hoisted_16)])])])])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)]);
  }), 128 /* KEYED_FRAGMENT */))])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)])])]);
}

/***/ }),

/***/ "./resources/js/views/Main.vue":
/*!*************************************!*\
  !*** ./resources/js/views/Main.vue ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Main_vue_vue_type_template_id_2ad93e50__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Main.vue?vue&type=template&id=2ad93e50 */ "./resources/js/views/Main.vue?vue&type=template&id=2ad93e50");
/* harmony import */ var _Main_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Main.vue?vue&type=script&lang=js */ "./resources/js/views/Main.vue?vue&type=script&lang=js");
/* harmony import */ var D_Program_Files_x86_OpenServer_domains_MyShop_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,D_Program_Files_x86_OpenServer_domains_MyShop_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_Main_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_Main_vue_vue_type_template_id_2ad93e50__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/views/Main.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/views/Main.vue?vue&type=script&lang=js":
/*!*************************************************************!*\
  !*** ./resources/js/views/Main.vue?vue&type=script&lang=js ***!
  \*************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Main_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Main_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Main.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/Main.vue?vue&type=script&lang=js");
 

/***/ }),

/***/ "./resources/js/views/Main.vue?vue&type=template&id=2ad93e50":
/*!*******************************************************************!*\
  !*** ./resources/js/views/Main.vue?vue&type=template&id=2ad93e50 ***!
  \*******************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Main_vue_vue_type_template_id_2ad93e50__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Main_vue_vue_type_template_id_2ad93e50__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Main.vue?vue&type=template&id=2ad93e50 */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/Main.vue?vue&type=template&id=2ad93e50");


/***/ })

}]);