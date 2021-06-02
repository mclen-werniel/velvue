(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_vue_store_home_module_js"],{

/***/ "./resources/vue/common/api.service.js":
/*!*********************************************!*\
  !*** ./resources/vue/common/api.service.js ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__),
/* harmony export */   "EmployeeService": () => (/* binding */ EmployeeService)
/* harmony export */ });
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _config__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./config */ "./resources/vue/common/config.js");


var ax = axios__WEBPACK_IMPORTED_MODULE_0___default().create({
  baseURL: _config__WEBPACK_IMPORTED_MODULE_1__.default,
  headers: {
    "Content-Type": "application/json"
  }
});
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ax);
var EmployeeService = {
  get: function get() {
    return ax.get("employees");
  }
};

/***/ }),

/***/ "./resources/vue/common/config.js":
/*!****************************************!*\
  !*** ./resources/vue/common/config.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (API_URL = "http://localhost:8000/api");

/***/ }),

/***/ "./resources/vue/store/home.module.js":
/*!********************************************!*\
  !*** ./resources/vue/store/home.module.js ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _common_api_service__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../common/api.service */ "./resources/vue/common/api.service.js");

var state = {
  employees: [],
  isLoading: true,
  employeesCount: 0
};
var getters = {
  employees: function employees(state) {
    return state.employees;
  }
};
var actions = {
  fetchEmployees: function fetchEmployees(_ref) {
    var commit = _ref.commit;
    commit('setLoading');
  }
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  state: state,
  getters: getters,
  actions: actions
});

/***/ })

}]);