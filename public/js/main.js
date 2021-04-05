/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
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
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

/* ======= Fixed page nav when scrolled ======= */
$(window).on('load', function () {
  $('#page-nav-wrapper').removeClass('fixed');
  var scrollTop = $(this).scrollTop();
  var topDistance = $('#page-nav-wrapper').offset().top;

  if (topDistance > scrollTop) {
    $('#page-nav-wrapper').removeClass('fixed');
    $('body').removeClass('sticky-page-nav');
  } else {
    $('#page-nav-wrapper').addClass('fixed');
    $('body').addClass('sticky-page-nav');
  }
});
$(document).ready(function () {
  /* ======= Scrollspy ======= */
  $('body').scrollspy({
    target: '#page-nav-wrapper',
    offset: 100
  });
  /* ======= ScrollTo ======= */

  $('.scrollto').on('click', function (e) {
    //store hash
    var target = this.hash;
    e.preventDefault();
    $('body').scrollTo(target, 800, {
      offset: -60,
      'axis': 'y'
    });
  });
  /* ======= Fixed page nav when scrolled ======= */

  $(window).on('scroll resize', function () {
    $('#page-nav-wrapper').removeClass('fixed');
    var scrollTop = $(this).scrollTop();
    var topDistance = $('#page-nav-wrapper').offset().top;

    if (topDistance > scrollTop) {
      $('#page-nav-wrapper').removeClass('fixed');
      $('body').removeClass('sticky-page-nav');
    } else {
      $('#page-nav-wrapper').addClass('fixed');
      $('body').addClass('sticky-page-nav');
    }
  });
  /* ======= Chart ========= */

  $('.chart').easyPieChart({
    barColor: '#00BCD4',
    //Pie chart colour
    trackColor: '#e8e8e8',
    scaleColor: false,
    lineWidth: 5,
    animate: 2000,
    onStep: function onStep(from, to, percent) {
      $(this.el).find('span').text(Math.round(percent));
    }
  });
  /* ======= Isotope plugin ======= */

  /* Ref: http://isotope.metafizzy.co/ */
  // init Isotope    

  var $container = $('.isotope');
  $container.imagesLoaded(function () {
    $('.isotope').isotope({
      itemSelector: '.item'
    });
  }); // filter items on click

  $('#filters').on('click', '.type', function () {
    var filterValue = $(this).attr('data-filter');
    $container.isotope({
      filter: filterValue
    });
  }); // change is-checked class on buttons

  $('.filters').each(function (i, typeGroup) {
    var $typeGroup = $(typeGroup);
    $typeGroup.on('click', '.type', function () {
      $typeGroup.find('.active').removeClass('active');
      $(this).addClass('active');
    });
  });
});

/***/ }),

/***/ 1:
/*!************************************!*\
  !*** multi ./resources/js/main.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/mark/projects/villaflor/resources/js/main.js */"./resources/js/main.js");


/***/ })

/******/ });