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
/******/ 	return __webpack_require__(__webpack_require__.s = 7);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/theme.js":
/*!*******************************!*\
  !*** ./resources/js/theme.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/******/
(function (modules) {
  // webpackBootstrap

  /******/
  // The module cache

  /******/
  var installedModules = {};
  /******/

  /******/
  // The require function

  /******/

  function __webpack_require__(moduleId) {
    /******/

    /******/
    // Check if module is in cache

    /******/
    if (installedModules[moduleId]) {
      /******/
      return installedModules[moduleId].exports;
      /******/
    }
    /******/
    // Create a new module (and put it into the cache)

    /******/


    var module = installedModules[moduleId] = {
      /******/
      i: moduleId,

      /******/
      l: false,

      /******/
      exports: {}
      /******/

    };
    /******/

    /******/
    // Execute the module function

    /******/

    modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
    /******/

    /******/
    // Flag the module as loaded

    /******/

    module.l = true;
    /******/

    /******/
    // Return the exports of the module

    /******/

    return module.exports;
    /******/
  }
  /******/

  /******/

  /******/
  // expose the modules object (__webpack_modules__)

  /******/


  __webpack_require__.m = modules;
  /******/

  /******/
  // expose the module cache

  /******/

  __webpack_require__.c = installedModules;
  /******/

  /******/
  // define getter function for harmony exports

  /******/

  __webpack_require__.d = function (exports, name, getter) {
    /******/
    if (!__webpack_require__.o(exports, name)) {
      /******/
      Object.defineProperty(exports, name, {
        enumerable: true,
        get: getter
      });
      /******/
    }
    /******/

  };
  /******/

  /******/
  // define __esModule on exports

  /******/


  __webpack_require__.r = function (exports) {
    /******/
    if (typeof Symbol !== 'undefined' && Symbol.toStringTag) {
      /******/
      Object.defineProperty(exports, Symbol.toStringTag, {
        value: 'Module'
      });
      /******/
    }
    /******/


    Object.defineProperty(exports, '__esModule', {
      value: true
    });
    /******/
  };
  /******/

  /******/
  // create a fake namespace object

  /******/
  // mode & 1: value is a module id, require it

  /******/
  // mode & 2: merge all properties of value into the ns

  /******/
  // mode & 4: return value when already ns object

  /******/
  // mode & 8|1: behave like require

  /******/


  __webpack_require__.t = function (value, mode) {
    /******/
    if (mode & 1) value = __webpack_require__(value);
    /******/

    if (mode & 8) return value;
    /******/

    if (mode & 4 && _typeof(value) === 'object' && value && value.__esModule) return value;
    /******/

    var ns = Object.create(null);
    /******/

    __webpack_require__.r(ns);
    /******/


    Object.defineProperty(ns, 'default', {
      enumerable: true,
      value: value
    });
    /******/

    if (mode & 2 && typeof value != 'string') for (var key in value) {
      __webpack_require__.d(ns, key, function (key) {
        return value[key];
      }.bind(null, key));
    }
    /******/

    return ns;
    /******/
  };
  /******/

  /******/
  // getDefaultExport function for compatibility with non-harmony modules

  /******/


  __webpack_require__.n = function (module) {
    /******/
    var getter = module && module.__esModule ?
    /******/
    function getDefault() {
      return module['default'];
    } :
    /******/
    function getModuleExports() {
      return module;
    };
    /******/

    __webpack_require__.d(getter, 'a', getter);
    /******/


    return getter;
    /******/
  };
  /******/

  /******/
  // Object.prototype.hasOwnProperty.call

  /******/


  __webpack_require__.o = function (object, property) {
    return Object.prototype.hasOwnProperty.call(object, property);
  };
  /******/

  /******/
  // __webpack_public_path__

  /******/


  __webpack_require__.p = "/";
  /******/

  /******/

  /******/
  // Load entry module and return exports

  /******/

  return __webpack_require__(__webpack_require__.s = 5);
  /******/
})(
/************************************************************************/

/******/
{
  /***/
  "./resources/js/theme.js":
  /*!*******************************!*\
    !*** ./resources/js/theme.js ***!
    \*******************************/

  /*! no static exports found */

  /***/
  function resourcesJsThemeJs(module, exports, __webpack_require__) {
    "use strict";
    /*!
     *
     * Directory Theme 1.2.0
     * Copyright 2019 - Bootstrapious.com
     *
     */

    $(function () {
      // ------------------------------------------------------- //
      //   Lightbox in galleries
      // ------------------------------------------------------ //
      $('.slider-gallery').each(function () {
        // the containers for all your galleries
        $(this).magnificPopup({
          delegate: 'a',
          // the selector for gallery item
          type: 'image',
          gallery: {
            enabled: true,
            tCounter: '' // markup of counter

          }
        });
      });
      $('.gallery').each(function () {
        // the containers for all your galleries
        $(this).magnificPopup({
          delegate: 'a',
          // the selector for gallery item
          type: 'image',
          gallery: {
            enabled: true
          }
        });
      }); // =====================================================
      //     Reset input
      // =====================================================

      $('.input-reset .form-control').on('focus', function () {
        $(this).parents('.input-reset').addClass('focus');
      });
      $('.input-reset .form-control').on('blur', function () {
        setTimeout(function () {
          $('.input-reset .form-control').parents('.input-reset').removeClass('focus');
        }, 333);
      }); // =====================================================
      //      Detail slider
      // =====================================================

      var detailSlider = new Swiper('.detail-slider', {
        slidesPerView: 3,
        spaceBetween: 0,
        centeredSlides: true,
        loop: true,
        breakpoints: {
          991: {
            slidesPerView: 4
          },
          565: {
            slidesPerView: 3
          }
        },
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          dynamicBullets: true
        },
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        }
      });
      var bookingDetailSlider = new Swiper('.booking-detail-slider', {
        slidesPerView: 2,
        spaceBetween: 0,
        centeredSlides: true,
        loop: true,
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          dynamicBullets: true
        },
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        }
      }); // =====================================================
      //      Init swipers automatically
      // =====================================================

      $('.swiper-init').each(function () {
        var slider = $(this),
            configuration = JSON.parse($(this).attr('data-swiper'));
        new Swiper(slider, configuration);
      }); // =====================================================
      //      Items slider
      // =====================================================

      var itemsSlider = new Swiper('.items-slider', {
        slidesPerView: 4,
        spaceBetween: 20,
        loop: true,
        roundLengths: true,
        breakpoints: {
          1200: {
            slidesPerView: 3
          },
          991: {
            slidesPerView: 2
          },
          565: {
            slidesPerView: 1
          }
        },
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          dynamicBullets: true
        }
      });
      var itemsSliderFull = new Swiper('.items-slider-full', {
        slidesPerView: 6,
        spaceBetween: 20,
        loop: true,
        roundLengths: true,
        breakpoints: {
          1600: {
            slidesPerView: 5
          },
          1400: {
            slidesPerView: 4
          },
          1200: {
            slidesPerView: 3
          },
          991: {
            slidesPerView: 2
          },
          565: {
            slidesPerView: 1
          }
        },
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          dynamicBullets: true
        }
      });
      var guidesSlider = new Swiper('.guides-slider', {
        slidesPerView: 5,
        spaceBetween: 15,
        loop: true,
        roundLengths: true,
        breakpoints: {
          1200: {
            slidesPerView: 4
          },
          991: {
            slidesPerView: 3
          },
          768: {
            slidesPerView: 2
          },
          400: {
            slidesPerView: 1
          }
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          dynamicBullets: true
        }
      });
      var brandsSlider = new Swiper('.brands-slider', {
        slidesPerView: 6,
        spaceBetween: 15,
        loop: true,
        roundLengths: true,
        breakpoints: {
          1200: {
            slidesPerView: 4
          },
          991: {
            slidesPerView: 3
          },
          768: {
            slidesPerView: 2
          }
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          dynamicBullets: true
        }
      });
      var swiper = new Swiper('.hero-slider', {
        effect: 'fade',
        speed: 2000,
        allowTouchMove: false,
        autoplay: {
          delay: 10000
        }
      });
      var instagramSlider = new Swiper('.instagram-slider', {
        slidesPerView: 12,
        breakpoints: {
          1500: {
            slidesPerView: 10
          },
          1200: {
            slidesPerView: 8
          },
          991: {
            slidesPerView: 6
          },
          768: {
            slidesPerView: 5
          },
          576: {
            slidesPerView: 4
          }
        }
      });
      var testimonialsSlider = new Swiper('.testimonials-slider', {
        slidesPerView: 2,
        spaceBetween: 20,
        loop: true,
        roundLengths: true,
        breakpoints: {
          1200: {
            slidesPerView: 3,
            spaceBetween: 0
          },
          991: {
            slidesPerView: 2,
            spaceBetween: 0
          },
          565: {
            slidesPerView: 1
          }
        },
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          dynamicBullets: true
        }
      }); // ------------------------------------------------------- //
      //   Increase/Decrease product amount
      // ------------------------------------------------------ //

      $('.btn-items-decrease').on('click', function () {
        var input = $(this).siblings('.input-items');

        if (parseInt(input.val(), 10) >= 1) {
          if (input.hasClass('input-items-greaterthan')) {
            input.val(parseInt(input.val(), 10) - 1 + '+');
          } else {
            input.val(parseInt(input.val(), 10) - 1);
          }
        }
      });
      $('.btn-items-increase').on('click', function () {
        var input = $(this).siblings('.input-items');

        if (input.hasClass('input-items-greaterthan')) {
          input.val(parseInt(input.val(), 10) + 1 + '+');
        } else {
          input.val(parseInt(input.val(), 10) + 1);
        }
      }); // ------------------------------------------------------- //
      //   Scroll to top button
      // ------------------------------------------------------ //

      $(window).on('scroll', function () {
        if ($(window).scrollTop() >= 1500) {
          $('#scrollTop').fadeIn();
        } else {
          $('#scrollTop').fadeOut();
        }
      });
      $('#scrollTop').on('click', function () {
        $('html, body').animate({
          scrollTop: 0
        }, 1000);
      }); // ------------------------------------------------------- //
      // Adding fade effect to dropdowns
      // ------------------------------------------------------ //

      $.fn.slideDropdownUp = function () {
        $(this).fadeIn().css('transform', 'translateY(0)');
        return this;
      };

      $.fn.slideDropdownDown = function (movementAnimation) {
        if (movementAnimation) {
          $(this).fadeOut().css('transform', 'translateY(30px)');
        } else {
          $(this).hide().css('transform', 'translateY(30px)');
        }

        return this;
      };

      $('.navbar .dropdown').on('show.bs.dropdown', function (e) {
        $(this).find('.dropdown-menu').first().slideDropdownUp();
      });
      $('.navbar .dropdown').on('hide.bs.dropdown', function (e) {
        var movementAnimation = true; // if on mobile or navigation to another page

        if ($(window).width() < 992 || e.clickEvent && e.clickEvent.target.tagName.toLowerCase() === 'a') {
          movementAnimation = false;
        }

        $(this).find('.dropdown-menu').first().slideDropdownDown(movementAnimation);
      }); // ------------------------------------------------------- //
      //    Collapse button control (used for more/less filters)
      // ------------------------------------------------------ //

      $('.btn-collapse').each(function () {
        var button = $(this),
            collapseId = button.attr('data-target');

        if ($(collapseId).length) {
          var collapseElement = $(collapseId);
          $(collapseElement).on('hide.bs.collapse', function () {
            button.text(button.attr('data-collapsed-text'));
          });
          $(collapseElement).on('show.bs.collapse', function () {
            button.text(button.attr('data-expanded-text'));
          });
        }
      }); // ------------------------------------------------------- //
      //   Bootstrap tooltips
      // ------------------------------------------------------- //

      $('[data-toggle="tooltip"]').tooltip(); // ------------------------------------------------------- //
      //   Smooth Scroll
      // ------------------------------------------------------- //

      var smoothScroll = new SmoothScroll('a[data-smooth-scroll]', {
        offset: 80
      }); // ------------------------------------------------------- //
      //   Object Fit Images
      // ------------------------------------------------------- //

      objectFitImages();
    });
    /***/
  },

  /***/
  5:
  /*!*************************************!*\
    !*** multi ./resources/js/theme.js ***!
    \*************************************/

  /*! no static exports found */

  /***/
  function _(module, exports, __webpack_require__) {
    module.exports = __webpack_require__(
    /*! C:\inetpub\wwwroot\FirstPage\resources\js\theme.js */
    "./resources/js/theme.js");
    /***/
  }
  /******/

});

/***/ }),

/***/ 7:
/*!*************************************!*\
  !*** multi ./resources/js/theme.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\inetpub\wwwroot\FirstPage\resources\js\theme.js */"./resources/js/theme.js");


/***/ })

/******/ });