"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_views_products_Products_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/products/Products.vue?vue&type=script&lang=js":
/*!******************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/products/Products.vue?vue&type=script&lang=js ***!
  \******************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: 'products',
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
      this.axios.post('/api/products').then(function (res) {
        _this.products = res.data.data;
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/products/Products.vue?vue&type=template&id=664b2140":
/*!**********************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/products/Products.vue?vue&type=template&id=664b2140 ***!
  \**********************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

var _hoisted_1 = {
  "class": "py-3"
};
var _hoisted_2 = {
  "class": "container"
};
var _hoisted_3 = {
  "class": "row"
};
var _hoisted_4 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "col-lg-3 sidebar sidebar-mobile",
  id: "open-mobile-filters"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "sidebar-content"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Header "), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "sidebar-header clearfix d-lg-none"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
  type: "button",
  "class": "close toggle-show p-3",
  "data-show": "open-mobile-filters",
  "aria-label": "Close"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "aria-hidden": "true"
}, "×")])]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Search "), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "bg-white p-2 p-lg-3 mb-2 mb-lg-4 shadow-sm br-sm"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "input-group"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
  type: "text",
  "class": "form-control form-control-sm",
  placeholder: "Search",
  "aria-label": "Search",
  "aria-describedby": "button-addon2"
}), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "input-group-append"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
  "class": "btn btn-primary btn-sm",
  type: "button",
  id: "button-addon2"
}, "Go!")])])]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Slider range "), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "bg-white p-2 p-lg-3 mb-2 mb-lg-4 shadow-sm br-sm"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
  "class": "pre-label px-0",
  "data-toggle": "collapse",
  href: "#collapseExamplePrice",
  role: "button",
  "aria-expanded": "false",
  "aria-controls": "collapseExamplePrice"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("small", null, "Slider range")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "collapse show",
  id: "collapseExamplePrice"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "pt-3"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "d-flex justify-content-between"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", null, "Price"), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", null, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(" $ "), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("b", {
  "class": "price-value"
})])]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
  type: "range",
  "class": "custom-range price-range",
  id: "customRange1",
  min: "0",
  max: "500",
  step: "5"
}), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "d-flex justify-content-between"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("small", null, "$ 0"), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("small", null, "$ 500")])])])]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Checkbox group "), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "bg-white p-2 p-lg-3 mb-2 mb-lg-4 shadow-sm br-sm"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
  "class": "pre-label px-0",
  "data-toggle": "collapse",
  href: "#collapseExampleCheckbox",
  role: "button",
  "aria-expanded": "false",
  "aria-controls": "collapseExampleCheckbox"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("small", null, "Checkboxes")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "collapse show",
  id: "collapseExampleCheckbox"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("ul", {
  "class": "list-group list-group-clean pt-4"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", {
  "class": "list-group-item d-flex justify-content-between align-items-center"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "custom-control custom-control-sm custom-control-light custom-checkbox"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
  type: "checkbox",
  "class": "custom-control-input",
  id: "customCheckGroup1"
}), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "class": "custom-control-label",
  "for": "customCheckGroup1"
}, "Men")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "badge badge-light badge-pill"
}, "14")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", {
  "class": "list-group-item d-flex justify-content-between align-items-center"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "custom-control custom-control-sm custom-control-light custom-checkbox"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
  type: "checkbox",
  "class": "custom-control-input",
  id: "customCheckGroup2"
}), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "class": "custom-control-label",
  "for": "customCheckGroup2"
}, "Woman")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "badge badge-light badge-pill"
}, "250")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", {
  "class": "list-group-item d-flex justify-content-between align-items-center"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "custom-control custom-control-sm custom-control-light custom-checkbox"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
  type: "checkbox",
  "class": "custom-control-input",
  id: "customCheckGroup3"
}), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "class": "custom-control-label",
  "for": "customCheckGroup3"
}, "Kid's")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "badge badge-light badge-pill"
}, "313")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", {
  "class": "list-group-item"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("hr")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", {
  "class": "list-group-item d-flex justify-content-between align-items-center"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "custom-control custom-control-sm custom-control-light custom-checkbox"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
  type: "checkbox",
  "class": "custom-control-input",
  id: "customCheckCategory1"
}), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "class": "custom-control-label",
  "for": "customCheckCategory1"
}, "Clothing")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "badge badge-light badge-pill"
}, "150")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", {
  "class": "list-group-item d-flex justify-content-between align-items-center"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "custom-control custom-control-sm custom-control-light custom-checkbox"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
  type: "checkbox",
  "class": "custom-control-input",
  id: "customCheckCategory2"
}), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "class": "custom-control-label",
  "for": "customCheckCategory2"
}, "Shoes")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "badge badge-light badge-pill"
}, "184")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", {
  "class": "list-group-item d-flex justify-content-between align-items-center"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "custom-control custom-control-sm custom-control-light custom-checkbox"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
  type: "checkbox",
  "class": "custom-control-input",
  id: "customCheckCategory3"
}), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "class": "custom-control-label",
  "for": "customCheckCategory3"
}, "Bags")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "badge badge-light badge-pill"
}, "164")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", {
  "class": "list-group-item d-flex justify-content-between align-items-center"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "custom-control custom-control-sm custom-control-light custom-checkbox"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
  type: "checkbox",
  "class": "custom-control-input",
  id: "customCheckCategory4"
}), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "class": "custom-control-label",
  "for": "customCheckCategory4"
}, "Accessories")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "badge badge-light badge-pill"
}, "212")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", {
  "class": "list-group-item d-flex justify-content-between align-items-center"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "custom-control custom-control-sm custom-control-light custom-checkbox"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
  type: "checkbox",
  "class": "custom-control-input",
  id: "customCheckCategory5"
}), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "class": "custom-control-label",
  "for": "customCheckCategory5"
}, "Collection")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "badge badge-light badge-pill"
}, "50")])])])]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Radio buttons group "), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "bg-white p-2 p-lg-3 mb-2 mb-lg-4 shadow-sm br-sm"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
  "class": "pre-label px-0",
  "data-toggle": "collapse",
  href: "#collapseExampleRadio",
  role: "button",
  "aria-expanded": "false",
  "aria-controls": "collapseExampleRadio"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("small", null, "Radio buttons")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "collapse show",
  id: "collapseExampleRadio"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("ul", {
  "class": "list-group list-group-clean pt-4"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", {
  "class": "list-group-item d-flex justify-content-between align-items-center"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "custom-control custom-control-sm custom-control-light custom-radio"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
  type: "radio",
  id: "customRadio1",
  name: "customRadio",
  "class": "custom-control-input"
}), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "class": "custom-control-label",
  "for": "customRadio1"
}, "In stock")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "badge badge-light badge-pill"
}, "1250")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", {
  "class": "list-group-item d-flex justify-content-between align-items-center"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "custom-control custom-control-sm custom-control-light custom-radio"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
  type: "radio",
  id: "customRadio2",
  name: "customRadio",
  "class": "custom-control-input"
}), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "class": "custom-control-label",
  "for": "customRadio2"
}, "Upcomming")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "badge badge-light badge-pill"
}, "245")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", {
  "class": "list-group-item d-flex justify-content-between align-items-center"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "custom-control custom-control-sm custom-control-light custom-radio"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
  type: "radio",
  id: "customRadio3",
  name: "customRadio",
  "class": "custom-control-input"
}), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "class": "custom-control-label",
  "for": "customRadio3"
}, "Presale")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "badge badge-light badge-pill"
}, "86")])])])]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Checkbox group "), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "bg-white p-2 p-lg-3 mb-2 mb-lg-4 shadow-sm br-sm"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
  "class": "pre-label px-0",
  "data-toggle": "collapse",
  href: "#collapseExampleSize",
  role: "button",
  "aria-expanded": "false",
  "aria-controls": "collapseExampleSize"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("small", null, "Sizes")]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "collapse show",
  id: "collapseExampleSize"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "d-flex justify-content-between pt-4"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "btn-group-toggle",
  "data-toggle": "buttons"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "class": "btn btn-outline-primary active"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
  type: "checkbox",
  checked: ""
}), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(" S ")])]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "btn-group-toggle",
  "data-toggle": "buttons"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "class": "btn btn-outline-primary active"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
  type: "checkbox"
}), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(" M ")])]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "btn-group-toggle",
  "data-toggle": "buttons"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "class": "btn btn-outline-primary active"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
  type: "checkbox"
}), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(" L ")])]), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "btn-group-toggle",
  "data-toggle": "buttons"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "class": "btn btn-outline-primary active"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
  type: "checkbox"
}), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(" XL ")])])])])])])], -1 /* HOISTED */);
var _hoisted_5 = {
  "class": "col-lg-9"
};
var _hoisted_6 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createStaticVNode)("<div class=\"bg-white p-2 p-lg-3 shadow-sm mb-2 mb-lg-4\"><div class=\"d-flex justify-content-between\"><!-- Left --><div><div class=\"form-inline\"><div class=\"form-group mb-0\"><select class=\"form-control form-control-sm\" id=\"exampleFormControlSelect1\"><option>20</option><option>50</option><option>100</option><option>All</option></select><label for=\"exampleFormControlSelect1\" class=\"ml-3 d-none d-lg-block\"><small>Showing all 24 of 128 products</small></label></div></div></div><!-- Right --><div><div class=\"form-inline\"><div class=\"mr-2\"><a href=\"products-grid.html\" class=\"btn btn-sm text-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Grid view\"><i class=\"fa fa-th-large\"></i></a><a href=\"products-list.html\" class=\"btn btn-sm\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"List view\"><i class=\"fa fa-list-ul\"></i></a></div><div class=\"form-group mb-0\"><label for=\"exampleFormControlSelect2\" class=\"mr-3 d-none d-lg-block\"><small>Sort by</small></label><select class=\"form-control form-control-sm\" id=\"exampleFormControlSelect2\"><option>Name</option><option>Price</option></select></div><div class=\"d-lg-none ml-2\"><button class=\"btn btn-primary btn-sm toggle-show\" data-show=\"open-mobile-filters\"><strong><i class=\"icon icon-text-align-center\"></i><span class=\"d-none d-sm-inline-block\">Filters</span></strong></button></div></div></div></div></div>", 1);
var _hoisted_7 = {
  key: 0,
  "class": "row gutters-mobile"
};
var _hoisted_8 = {
  key: 0,
  "class": "card card-fill border-0 mb-2 mb-lg-4"
};
var _hoisted_9 = {
  "class": "card-image"
};
var _hoisted_10 = ["src"];
var _hoisted_11 = {
  "class": "card-body p-3 p-lg-4"
};
var _hoisted_12 = {
  "class": "d-flex justify-content-between align-items-center"
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
var _hoisted_19 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createStaticVNode)("<nav aria-label=\"Page navigation example\"><ul class=\"pagination justify-content-center py-3 py-lg-4\"><li class=\"page-item disabled\"><a class=\"page-link page-link-first\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Prev</a></li><li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li><li class=\"page-item active\"><a class=\"page-link\" href=\"#\">2</a></li><li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li><li class=\"page-item\"><a class=\"page-link\" href=\"#\">4</a></li><li class=\"page-item\"><a class=\"page-link\" href=\"#\">Next</a></li></ul></nav>", 1);
function render(_ctx, _cache, $props, $setup, $data, $options) {
  var _component_router_link = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("router-link");
  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("section", _hoisted_1, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_2, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_3, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Product sidebar "), _hoisted_4, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Products content "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_5, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Products header "), _hoisted_6, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Products collection "), $data.products ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_7, [((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($data.products, function (product) {
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", {
      key: product.id,
      "class": "col-6 col-xl-4"
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
  }), 128 /* KEYED_FRAGMENT */))])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Pagination "), _hoisted_19])])])])]);
}

/***/ }),

/***/ "./resources/js/views/products/Products.vue":
/*!**************************************************!*\
  !*** ./resources/js/views/products/Products.vue ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Products_vue_vue_type_template_id_664b2140__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Products.vue?vue&type=template&id=664b2140 */ "./resources/js/views/products/Products.vue?vue&type=template&id=664b2140");
/* harmony import */ var _Products_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Products.vue?vue&type=script&lang=js */ "./resources/js/views/products/Products.vue?vue&type=script&lang=js");
/* harmony import */ var D_Program_Files_x86_OpenServer_domains_MyShop_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,D_Program_Files_x86_OpenServer_domains_MyShop_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_Products_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_Products_vue_vue_type_template_id_664b2140__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/views/products/Products.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/views/products/Products.vue?vue&type=script&lang=js":
/*!**************************************************************************!*\
  !*** ./resources/js/views/products/Products.vue?vue&type=script&lang=js ***!
  \**************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Products_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Products_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Products.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/products/Products.vue?vue&type=script&lang=js");
 

/***/ }),

/***/ "./resources/js/views/products/Products.vue?vue&type=template&id=664b2140":
/*!********************************************************************************!*\
  !*** ./resources/js/views/products/Products.vue?vue&type=template&id=664b2140 ***!
  \********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Products_vue_vue_type_template_id_664b2140__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Products_vue_vue_type_template_id_664b2140__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Products.vue?vue&type=template&id=664b2140 */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/products/Products.vue?vue&type=template&id=664b2140");


/***/ })

}]);