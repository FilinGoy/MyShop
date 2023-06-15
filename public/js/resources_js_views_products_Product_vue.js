"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_views_products_Product_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/products/Product.vue?vue&type=script&lang=js":
/*!*****************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/products/Product.vue?vue&type=script&lang=js ***!
  \*****************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "product",
  data: function data() {
    return {
      product: []
    };
  },
  mounted: function mounted() {
    this.getProduct(this.$route);
  },
  watch: {
    $route: function $route(to, from) {
      this.getProduct(to);
    }
  },
  methods: {
    getProduct: function getProduct(place) {
      var _this = this;
      this.axios.get("/api/product/" + place.params.id).then(function (res) {
        _this.product = res.data.data;
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/products/Product.vue?vue&type=template&id=50cff623":
/*!*********************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/products/Product.vue?vue&type=template&id=50cff623 ***!
  \*********************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

var _hoisted_1 = {
  "class": "bg-white p-0 sider sider-right"
};
var _hoisted_2 = {
  "class": "container"
};
var _hoisted_3 = {
  "class": "row align-items-lg-center"
};
var _hoisted_4 = {
  "class": "col-lg-7 bg-white"
};
var _hoisted_5 = {
  id: "carouselExampleFade",
  "class": "carousel slide carousel-fade",
  "data-bs-ride": "carousel"
};
var _hoisted_6 = {
  "class": "carousel-inner"
};
var _hoisted_7 = {
  "class": "carousel-item active"
};
var _hoisted_8 = ["src"];
var _hoisted_9 = ["src"];
var _hoisted_10 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createStaticVNode)("<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"prev\"><span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span><span class=\"visually-hidden\">Предыдущий</span></button><button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"next\"><span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span><span class=\"visually-hidden\">Следующий</span></button>", 2);
var _hoisted_12 = {
  "class": "col-lg-5 pl-lg-6 pl-xl-7"
};
var _hoisted_13 = {
  "class": "px-lg-4 py-6"
};
var _hoisted_14 = {
  "class": "clearfix"
};
var _hoisted_15 = {
  "class": "h2 mb-0"
};
var _hoisted_16 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("hr", null, null, -1 /* HOISTED */);
var _hoisted_17 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("hr", null, null, -1 /* HOISTED */);
var _hoisted_18 = {
  "class": "row"
};
var _hoisted_19 = {
  "class": "col-12"
};
var _hoisted_20 = {
  "class": "row mb-2"
};
var _hoisted_21 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "col-xl-4"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "text-muted"
}, "Категория")], -1 /* HOISTED */);
var _hoisted_22 = {
  key: 0,
  "class": "col-xl-8"
};
var _hoisted_23 = {
  key: 0,
  "class": "row"
};
var _hoisted_24 = {
  "class": "col-12"
};
var _hoisted_25 = {
  "class": "row mb-2"
};
var _hoisted_26 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "col-xl-4"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "text-muted"
}, "Бренд")], -1 /* HOISTED */);
var _hoisted_27 = {
  key: 0,
  "class": "col-xl-8"
};
var _hoisted_28 = {
  "class": "row"
};
var _hoisted_29 = {
  "class": "col-12"
};
var _hoisted_30 = {
  "class": "row mb-2"
};
var _hoisted_31 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "col-xl-4"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "text-muted"
}, "Производитель")], -1 /* HOISTED */);
var _hoisted_32 = {
  key: 0,
  "class": "col-xl-8"
};
var _hoisted_33 = {
  key: 1,
  "class": "row"
};
var _hoisted_34 = {
  "class": "col-12"
};
var _hoisted_35 = {
  "class": "row mb-2"
};
var _hoisted_36 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "col-xl-4"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "text-muted"
}, "Срок хранения")], -1 /* HOISTED */);
var _hoisted_37 = {
  key: 0,
  "class": "col-xl-8"
};
var _hoisted_38 = {
  key: 2,
  "class": "row"
};
var _hoisted_39 = {
  "class": "col-12"
};
var _hoisted_40 = {
  "class": "row mb-2"
};
var _hoisted_41 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "col-xl-4"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "text-muted"
}, "Артикул")], -1 /* HOISTED */);
var _hoisted_42 = {
  key: 0,
  "class": "col-xl-8"
};
var _hoisted_43 = {
  key: 3,
  "class": "row"
};
var _hoisted_44 = {
  "class": "col-12"
};
var _hoisted_45 = {
  "class": "row mb-2"
};
var _hoisted_46 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "col-xl-4"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "text-muted"
}, "Упаковка")], -1 /* HOISTED */);
var _hoisted_47 = {
  key: 0,
  "class": "col-xl-8"
};
var _hoisted_48 = {
  key: 4,
  "class": "row"
};
var _hoisted_49 = {
  "class": "col-12"
};
var _hoisted_50 = {
  "class": "row mb-2"
};
var _hoisted_51 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "col-xl-4"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "text-muted"
}, "Вес")], -1 /* HOISTED */);
var _hoisted_52 = {
  key: 0,
  "class": "col-xl-8"
};
var _hoisted_53 = {
  key: 5,
  "class": "row"
};
var _hoisted_54 = {
  "class": "col-12"
};
var _hoisted_55 = {
  "class": "row mb-2"
};
var _hoisted_56 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "col-xl-4"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "text-muted"
}, "Калории")], -1 /* HOISTED */);
var _hoisted_57 = {
  key: 0,
  "class": "col-xl-8"
};
var _hoisted_58 = {
  key: 6,
  "class": "row"
};
var _hoisted_59 = {
  "class": "col-12"
};
var _hoisted_60 = {
  "class": "row mb-2"
};
var _hoisted_61 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "col-xl-4"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "text-muted"
}, "На складе")], -1 /* HOISTED */);
var _hoisted_62 = {
  key: 0,
  "class": "col-xl-8"
};
var _hoisted_63 = {
  key: 7,
  "class": "row"
};
var _hoisted_64 = {
  "class": "col-12"
};
var _hoisted_65 = {
  "class": "row mb-2"
};
var _hoisted_66 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "col-xl-4"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "text-muted"
}, "Теги")], -1 /* HOISTED */);
var _hoisted_67 = {
  key: 0,
  "class": "col-xl-8"
};
var _hoisted_68 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("hr", null, null, -1 /* HOISTED */);
var _hoisted_69 = {
  "class": "mb-2"
};
var _hoisted_70 = {
  "class": "row"
};
var _hoisted_71 = {
  key: 0,
  "class": "bg-white d-flex flex-fill align-items-center justify-content-center px-0"
};
var _hoisted_72 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
  "class": "btn btn-outline-primary text-nowrap d-flex align-items-center justify-content-center gap-2 w-100",
  disable: ""
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("small", null, "Нет в наличии")], -1 /* HOISTED */);
var _hoisted_73 = [_hoisted_72];
var _hoisted_74 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
  "class": "btn btn-outline-danger text-nowrap d-flex align-items-center justify-content-center gap-2 w-100"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
  "class": "fas fa-plus"
}), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
  "class": "fas fa-shopping-basket fs-5"
})], -1 /* HOISTED */);
var _hoisted_75 = [_hoisted_74];
var _hoisted_76 = {
  key: 2,
  "class": "d-flex flex-fill align-items-center justify-content-center border rounded-3 bg-white px-0"
};
var _hoisted_77 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
  "class": "fas fa-minus flex-fill"
}, null, -1 /* HOISTED */);
var _hoisted_78 = [_hoisted_77];
var _hoisted_79 = ["id", "value"];
var _hoisted_80 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
  "class": "fas fa-plus"
}, null, -1 /* HOISTED */);
var _hoisted_81 = [_hoisted_80];
var _hoisted_82 = {
  "class": "mb-2"
};
var _hoisted_83 = {
  "class": "row"
};
var _hoisted_84 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
  "class": "fas fa-heart"
}, null, -1 /* HOISTED */);
var _hoisted_85 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("hr", {
  "class": "divider"
}, null, -1 /* HOISTED */);
var _hoisted_86 = {
  "class": "container mt-5"
};
var _hoisted_87 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("ul", {
  "class": "nav nav-tabs nav-lavalamp justify-content-center mb-4",
  id: "productTab",
  role: "tablist"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", {
  "class": "nav-item"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
  "class": "nav-link active",
  id: "composition-tab",
  "data-toggle": "tab",
  href: "#composition",
  role: "tab",
  "aria-controls": "composition",
  "aria-selected": "true"
}, " Состав продукта ")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", {
  "class": "nav-item"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
  "class": "nav-link",
  id: "description-tab",
  "data-toggle": "tab",
  href: "#description",
  role: "tab",
  "aria-controls": "description",
  "aria-selected": "false"
}, " Описание ")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", {
  "class": "nav-item"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
  "class": "nav-link",
  id: "review-tab",
  "data-toggle": "tab",
  href: "#review",
  role: "tab",
  "aria-controls": "review",
  "aria-selected": "false"
}, " Отзывы ")])], -1 /* HOISTED */);
var _hoisted_88 = {
  "class": "tab-content",
  id: "productTabContent"
};
var _hoisted_89 = {
  "class": "tab-pane fade",
  id: "composition",
  role: "tabpanel",
  "aria-labelledby": "composition-tab"
};
var _hoisted_90 = {
  "class": "row justify-content-center"
};
var _hoisted_91 = {
  "class": "col-lg-8"
};
var _hoisted_92 = {
  "class": "py-3 py-lg-4"
};
var _hoisted_93 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("header", null, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "h3 mb-1"
}, "Состав продукта (на 100 г.)")], -1 /* HOISTED */);
var _hoisted_94 = {
  "class": "py-3 py-lg-4"
};
var _hoisted_95 = ["innerHTML"];
var _hoisted_96 = {
  "class": "tab-pane fade",
  id: "description",
  role: "tabpanel",
  "aria-labelledby": "description-tab"
};
var _hoisted_97 = {
  "class": "row justify-content-center"
};
var _hoisted_98 = {
  "class": "col-lg-8"
};
var _hoisted_99 = {
  "class": "py-3 py-lg-4"
};
var _hoisted_100 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("header", null, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "h3 mb-1"
}, "Описание")], -1 /* HOISTED */);
var _hoisted_101 = {
  "class": "py-3 py-lg-4"
};
var _hoisted_102 = ["innerHTML"];
var _hoisted_103 = {
  "class": "tab-pane fade show active",
  id: "review",
  role: "tabpanel",
  "aria-labelledby": "review-tab"
};
var _hoisted_104 = {
  "class": "row justify-content-center"
};
var _hoisted_105 = {
  "class": "col-lg-8"
};
var _hoisted_106 = {
  "class": "rating-overall"
};
var _hoisted_107 = {
  "class": "py-3 py-lg-4"
};
var _hoisted_108 = {
  "class": "h3 mb-1 d-flex"
};
var _hoisted_109 = {
  "class": "text-black"
};
var _hoisted_110 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
  "class": "fas fa-star text-warning pr-1"
}, null, -1 /* HOISTED */);
var _hoisted_111 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("p", {
  "class": "text-muted"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("small", null, "Новые отзывы")], -1 /* HOISTED */);
var _hoisted_112 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createStaticVNode)("<div class=\"pt-3 pt-lg-4\"><div id=\"comment-1\"><div class=\"mb-4\"><div class=\"d-flex align-items-center text-small\"><img src=\"storage/images/main/noname.jpg\" class=\"mr-2 rounded-circle\" alt=\"...\" style=\"width:40px;\"><div><strong class=\"mr-1\">Анна Семанова</strong></div><div class=\"text-muted\">- 45 минут назад</div><div class=\"ml-auto\"><i class=\"fa fa-star icon-xs text-danger\"></i><i class=\"fa fa-star icon-xs text-danger\"></i><i class=\"fa fa-star icon-xs text-danger\"></i><i class=\"fa fa-star icon-xs text-secondary\"></i><i class=\"fa fa-star icon-xs text-secondary\"></i></div></div><div class=\"my-2\"> Вкусные, любим кушать всей семьёй! </div></div></div></div>", 1);
var _hoisted_113 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("hr", null, null, -1 /* HOISTED */);
var _hoisted_114 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("p", null, "В разработке!", -1 /* HOISTED */);

function render(_ctx, _cache, $props, $setup, $data, $options) {
  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Content "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("section", _hoisted_1, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_2, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_3, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Product gallery "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_4, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_5, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_6, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_7, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("img", {
    src: $data.product.preview_image,
    "class": "d-block w-100"
  }, null, 8 /* PROPS */, _hoisted_8)]), ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($data.product.images, function (image) {
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", {
      "class": "carousel-item",
      key: image.id
    }, [image ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("img", {
      key: 0,
      src: "storage/" + image.url,
      "class": "d-block w-100"
    }, null, 8 /* PROPS */, _hoisted_9)) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)]);
  }), 128 /* KEYED_FRAGMENT */))]), _hoisted_10])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Product info "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_12, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_13, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Product order "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_14, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Product price "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_15, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.product.title), 1 /* TEXT */), _hoisted_16, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", null, "Цена: " + (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.product.price) + " ₽", 1 /* TEXT */)]), _hoisted_17, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Product brand "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_18, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_19, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_20, [_hoisted_21, $data.product.category ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_22, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.product.category.title), 1 /* TEXT */)) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)])])]), $data.product.brand ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_23, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_24, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_25, [_hoisted_26, $data.product.brand ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_27, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.product.brand.title), 1 /* TEXT */)) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)])])])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_28, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_29, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_30, [_hoisted_31, $data.product.manufacturer ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_32, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.product.manufacturer.name), 1 /* TEXT */)) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)])])]), $data.product.expiration_date ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_33, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_34, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_35, [_hoisted_36, $data.product.expiration_date ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_37, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.product.expiration_date + " " + $data.product.expiration_type.title), 1 /* TEXT */)) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)])])])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true), $data.product.article ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_38, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_39, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_40, [_hoisted_41, $data.product.article ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_42, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.product.article), 1 /* TEXT */)) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)])])])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true), $data.product.packaging ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_43, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_44, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_45, [_hoisted_46, $data.product.packaging ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_47, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.product.packaging.title), 1 /* TEXT */)) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)])])])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true), $data.product.weight ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_48, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_49, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_50, [_hoisted_51, $data.product.weight ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_52, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.product.weight + " " + $data.product.weight_type.title), 1 /* TEXT */)) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)])])])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true), $data.product.weight ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_53, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_54, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_55, [_hoisted_56, $data.product.weight ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_57, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.product.calorie + " ккал"), 1 /* TEXT */)) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)])])])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true), $data.product.count ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_58, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_59, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_60, [_hoisted_61, $data.product.count ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_62, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.product.count + " шт"), 1 /* TEXT */)) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)])])])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true), $data.product.tags ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_63, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_64, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_65, [_hoisted_66, $data.product.tags ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_67, [((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($data.product.tags, function (tag) {
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("p", {
      href: "#",
      key: tag.id
    }, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(tag.title), 1 /* TEXT */);
  }), 128 /* KEYED_FRAGMENT */))])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)])])])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true), _hoisted_68, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Product quantity "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_69, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_70, [$data.product.count <= 0 ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("a", _hoisted_71, _hoisted_73)) : _ctx.checkToHaving($data.product, 'cart') === undefined ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("a", {
    key: 1,
    onClick: _cache[0] || (_cache[0] = function ($event) {
      return _ctx.addToCart($data.product);
    }),
    "class": "bg-white d-flex flex-fill align-items-center justify-content-center px-0"
  }, _hoisted_75)) : ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_76, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
    onClick: _cache[1] || (_cache[1] = (0,vue__WEBPACK_IMPORTED_MODULE_0__.withModifiers)(function ($event) {
      return _ctx.subtractQuantity($data.product);
    }, ["prevent"])),
    "class": "btn btn-outline-primary text-nowrap border-0 rounded-3 d-flex align-items-center justify-content-center"
  }, _hoisted_78), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
    type: "number",
    "class": "item-edit rounded-0 border-0 shadow-none flex-fill text-center",
    min: "0",
    max: "999",
    id: 'editQuantity' + $data.product.id,
    onInput: _cache[2] || (_cache[2] = function () {
      return _ctx.checkValue && _ctx.checkValue.apply(_ctx, arguments);
    }),
    onChange: _cache[3] || (_cache[3] = function ($event) {
      return _ctx.setProduct($data.product, $event);
    }),
    value: _ctx.checkToHaving($data.product, 'cart') === undefined ? 1 : _ctx.getValue($data.product)
  }, null, 40 /* PROPS, HYDRATE_EVENTS */, _hoisted_79), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
    onClick: _cache[4] || (_cache[4] = (0,vue__WEBPACK_IMPORTED_MODULE_0__.withModifiers)(function ($event) {
      return _ctx.addQuantity($data.product);
    }, ["prevent"])),
    "class": "btn btn-outline-primary text-nowrap border-0 rounded-3 d-flex align-items-center justify-content-center"
  }, _hoisted_81)]))])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_82, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_83, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
    onClick: _cache[5] || (_cache[5] = function ($event) {
      return _ctx.toggleToFavourite($data.product);
    }),
    "class": "bg-white d-flex flex-fill align-items-center justify-content-center px-0"
  }, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
    "class": (0,vue__WEBPACK_IMPORTED_MODULE_0__.normalizeClass)(["btn btn-outline-danger text-nowrap d-flex align-items-center justify-content-center gap-2 w-100", _ctx.checkToHaving($data.product, 'favourite') === undefined ? '' : 'active'])
  }, [_hoisted_84, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("p", null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(_ctx.checkToHaving($data.product, "favourite") === undefined ? "Добавить в избранное" : "Удалить из избранного"), 1 /* TEXT */)], 2 /* CLASS */)])])])])])])])])]), _hoisted_85, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Product details "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("section", null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_86, [_hoisted_87, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Product tab content "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_88, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_89, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_90, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_91, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_92, [_hoisted_93, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_94, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("p", {
    innerHTML: $data.product.ingredients
  }, null, 8 /* PROPS */, _hoisted_95)])])])])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_96, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_97, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_98, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_99, [_hoisted_100, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_101, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("p", {
    innerHTML: $data.product.description
  }, null, 8 /* PROPS */, _hoisted_102)])])])])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_103, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Widget rating "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_104, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_105, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_106, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Comments "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_107, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Comments header "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("header", null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_108, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(" Отзывы ( "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("p", _hoisted_109, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)((0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.product.rate), 1 /* TEXT */), _hoisted_110]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(" ) ")]), _hoisted_111]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Comments feedback "), _hoisted_112]), _hoisted_113, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Reply "), _hoisted_114, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("  ")])])])])])])])]);
}

/***/ }),

/***/ "./resources/js/views/products/Product.vue":
/*!*************************************************!*\
  !*** ./resources/js/views/products/Product.vue ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Product_vue_vue_type_template_id_50cff623__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Product.vue?vue&type=template&id=50cff623 */ "./resources/js/views/products/Product.vue?vue&type=template&id=50cff623");
/* harmony import */ var _Product_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Product.vue?vue&type=script&lang=js */ "./resources/js/views/products/Product.vue?vue&type=script&lang=js");
/* harmony import */ var D_Program_Files_x86_OpenServer_domains_MyShop_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,D_Program_Files_x86_OpenServer_domains_MyShop_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_Product_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_Product_vue_vue_type_template_id_50cff623__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/views/products/Product.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/views/products/Product.vue?vue&type=script&lang=js":
/*!*************************************************************************!*\
  !*** ./resources/js/views/products/Product.vue?vue&type=script&lang=js ***!
  \*************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Product_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Product_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Product.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/products/Product.vue?vue&type=script&lang=js");
 

/***/ }),

/***/ "./resources/js/views/products/Product.vue?vue&type=template&id=50cff623":
/*!*******************************************************************************!*\
  !*** ./resources/js/views/products/Product.vue?vue&type=template&id=50cff623 ***!
  \*******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Product_vue_vue_type_template_id_50cff623__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Product_vue_vue_type_template_id_50cff623__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Product.vue?vue&type=template&id=50cff623 */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/products/Product.vue?vue&type=template&id=50cff623");


/***/ })

}]);