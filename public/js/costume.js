/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/costume.js ***!
  \*********************************/
// get queryselector .sidebar-menu
var sidebarMenu = document.querySelector(".sidebar-menu"); // find a in sidebarMenu

var a = sidebarMenu.querySelectorAll("a"); // if href == window.location.href then add class active

for (var i = 0; i < a.length; i++) {
  if (a[i].href == window.location.href) {
    a[i].parentElement.classList.add("active");
  }
}
/******/ })()
;