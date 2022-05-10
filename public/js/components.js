/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/components/number.js":
/*!*******************************************!*\
  !*** ./resources/js/components/number.js ***!
  \*******************************************/
/***/ (() => {

// selctor all .number
var numbers = document.querySelectorAll(".number");

var numberConvert = function numberConvert() {
  // add eventlistener keyup to all .number
  numbers.forEach(function (number) {
    number.addEventListener("keyup", function () {
      myEvent(number);
    });
  });

  var myEvent = function myEvent(number) {
    // just number
    var justNumber = number.value.replace(/\D/g, ""); // if justNumber is empty then set value to empty

    if (justNumber === "") {
      number.value = 0;
    } else {
      // set value to justNumber
      number.value = justNumber; // remove 0 before decimal

      number.value = number.value.replace(/^0+/, "");
    } // display decimal


    number.value = number.value.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  };

  console.log("numberConvert");
};

if (numbers) {
  numberConvert();
}

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!************************************!*\
  !*** ./resources/js/components.js ***!
  \************************************/
// import number
__webpack_require__(/*! ./components/number */ "./resources/js/components/number.js");
})();

/******/ })()
;