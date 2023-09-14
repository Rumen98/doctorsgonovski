/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
__webpack_require__.r(__webpack_exports__);
window.handleSubmitForm = function handleSubmitForm(event) {
  // Prevent the default form submission
  event.preventDefault();
  var formData = new FormData(document.getElementById('contactForm'));
  fetch('/api/contact/send', {
    method: 'POST',
    body: formData
  }).then(function (response) {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json(); // Parse the response as JSON
  }).then(function (parsedData) {
    // Use reset to clear the form
    document.getElementById('contactForm').reset();
    // Show the success alert
    // Show the success alert
    var successAlert = document.getElementById('successAlert');
    successAlert.style.display = 'block';

    // Hide the success alert after 5 seconds
    setTimeout(function () {
      successAlert.style.display = 'none';
    }, 5000);
  })["catch"](function (error) {
    console.error('There was an error:', error);
  });
};
/******/ })()
;