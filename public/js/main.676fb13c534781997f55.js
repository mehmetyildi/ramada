/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/main.js":
/***/ (function(module, exports) {

function getToday() {
	var today = new Date();
	return $.format.date(today, 'dd.MM.yyyy');
}
function getTomorrow() {
	var tomorrow = new Date();
	tomorrow.setDate(tomorrow.getDate() + 1);
	return $.format.date(tomorrow, 'dd.MM.yyyy');
}
function getOutput() {
	var checkinInput = $("#checkin").val();
	var checkinYear = checkinInput.substring(6, 10);
	var checkinMonth = checkinInput.substring(3, 5);
	var checkinDay = checkinInput.substring(0, 2);
	var checkoutInput = $("#checkout").val();
	var checkoutYear = checkoutInput.substring(6, 10);
	var checkoutMonth = checkoutInput.substring(3, 5);
	var checkoutDay = checkoutInput.substring(0, 2);
	var checkin = checkinMonth + '/' + checkinDay + '/' + checkinYear;
	var checkout = checkoutMonth + '/' + checkoutDay + '/' + checkoutYear;
	var adults = $('#adults').val();
	var children = $('#children').val();
	var output = "https://www.wyndhamhotels.com/ramada/istanbul-turkey/ramada-plaza-istanbul-tekstilkent/rooms-rates?brand_id=RA&checkin_date=" + checkin + "&checkout_date=" + checkout + "&useWRPoints=false&children=" + children + "&adults=" + adults + "&rooms=1&radius=25&brand_code=BH,DI,RA,BU,HJ,KG,MT,SE,TL,WG,WY,WT,WP,VO,DX,TM,CE&PriceFilter=0-2147483647&";
	$('#wyndhamRedirector').attr('href', output);
}
$("#checkin").val(getToday());
$("#checkout").val(getTomorrow());
getOutput();
$("#checkin").datepicker({
	autoclose: true,
	startDate: getToday()
}).on('changeDate', function (selected) {
	var minDate = new Date(selected.date.valueOf());
	checkoutInput = $('#checkout').val();
	var month = checkoutInput.substring(3, 5);
	if (month.substring(0, 1) == 0) {
		month = month.substring(1, 2);
	}
	var currentCheckout = new Date(checkoutInput.substring(6, 10), month - 1, checkoutInput.substring(0, 2));
	minDate.setDate(minDate.getDate() + 1);
	$('#checkout').datepicker('setStartDate', minDate);
	if (minDate >= currentCheckout) {
		$('#checkout').val($.format.date(minDate, 'dd.MM.yyyy'));
	}
	getOutput();
});

$("#checkout").datepicker({
	autoclose: true,
	startDate: getTomorrow()
}).on('changeDate', function (selected) {
	getOutput();
});

$('#adults').change(function () {
	getOutput();
});
$('#children').change(function () {
	getOutput();
});

$('.popup img').click(function (event) {

	event.stopPropagation();
});
$(document).keydown(function (e) {
	if (e.keyCode === 27) {
		$('.popup').fadeOut(300);
	}
});

$('.popup').click(function () {
	$('.popup').fadeOut(300);
});

/***/ }),

/***/ 2:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./resources/assets/js/main.js");


/***/ })

/******/ });