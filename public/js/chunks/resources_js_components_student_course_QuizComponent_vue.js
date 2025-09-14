(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_student_course_QuizComponent_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/student/course/QuizComponent.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/student/course/QuizComponent.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vue_countdown_plus__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue-countdown-plus */ "./node_modules/vue-countdown-plus/dist/countdown-plus.js");
/* harmony import */ var vue_countdown_plus__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(vue_countdown_plus__WEBPACK_IMPORTED_MODULE_0__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "QuizComponent",
  props: ["questions", "exam", "qusCount"],
  components: {
    Countdown: (vue_countdown_plus__WEBPACK_IMPORTED_MODULE_0___default())
  },
  data: function data() {
    return {
      // examTime: 60 * 1000,
      examTime: 1 * 60 * 60 * 1000,
      examEnd: false,
      examStart: true,
      submitBtnDisable: true,
      nextBtnDisable: true,
      answered: false,
      index: 0,
      selectedAnswer: "",
      correctAnswer: 0,
      wrongAnswer: 0,
      passMark: 40,
      hintShow: false,
      answeredElement: null
    };
  },
  watch: {
    index: function index(value) {
      if (value == this.qusCount) {
        this.examStart = false;
        this.examEnd = true;
      }
    },
    selectedAnswer: function selectedAnswer(value) {
      if (value && !this.answered) {
        this.submitBtnDisable = false;
      }
    }
  },
  computed: {
    currentQusIndex: function currentQusIndex() {
      return this.index + 1;
    },
    score: function score() {
      return Math.round(100 * this.correctAnswer / this.qusCount);
    }
  },
  methods: {
    nextQuestion: function nextQuestion() {
      this.answeredElement.classList.remove("active");
      this.answeredElement.classList.remove("wrong");
      this.index++;
      this.selectedAnswer = "";
      this.nextBtnDisable = true;
      this.answered = false;
    },
    prevQuestion: function prevQuestion() {
      this.index--;
      this.selectedAnswer = "";
    },
    showResults: function showResults() {
      this.index++;
    },
    resetQuiz: function resetQuiz() {
      this.index = 0;
      this.selectedAnswer = "";
      this.correctAnswer = 0;
      this.wrongAnswer = 0;
      this.answeredElement.classList.remove("active");
      this.answeredElement.classList.remove("wrong");
      this.nextBtnDisable = true;
      this.answered = false;
      this.$refs.countdown.reset();
      this.$refs.countdown.start();
    },
    hintToggle: function hintToggle() {
      this.hintShow = !this.hintShow;
    },
    submitAnswer: function submitAnswer() {
      var refKey = this.selectedAnswer;
      this.submitBtnDisable = true;
      this.nextBtnDisable = false;
      this.answered = true;
      this.answeredElement = this.$refs[refKey][0];

      if (this.selectedAnswer == this.questions[this.index]["correctAnswer"]) {
        this.correctAnswer++;
        this.answeredElement.classList.add("active");
      } else {
        this.wrongAnswer++;
        this.answeredElement.classList.add("wrong");
      }
    },
    handleFinish: function handleFinish() {
      this.examStart = false;
      this.examEnd = true;
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-countdown-plus/dist/countdown-plus.js":
/*!****************************************************************!*\
  !*** ./node_modules/vue-countdown-plus/dist/countdown-plus.js ***!
  \****************************************************************/
/***/ ((module) => {

(function webpackUniversalModuleDefinition(root, factory) {
	if(true)
		module.exports = factory();
	else {}
})(self, function() {
return /******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./utils.js":
/*!******************!*\
  !*** ./utils.js ***!
  \******************/
/***/ ((__unused_webpack_module, __nested_webpack_exports__, __nested_webpack_require_632__) => {

__nested_webpack_require_632__.r(__nested_webpack_exports__);
/* harmony export */ __nested_webpack_require_632__.d(__nested_webpack_exports__, {
/* harmony export */   "resolveCountdown": () => (/* binding */ resolveCountdown),
/* harmony export */   "formatCountdown": () => (/* binding */ formatCountdown)
/* harmony export */ });
/**
 * Utils
 */
var units = [{
  symbol: 'D',
  value: 24 * 60 * 60 * 1000
}, {
  symbol: 'H',
  value: 60 * 60 * 1000
}, {
  symbol: 'm',
  value: 60 * 1000
}, {
  symbol: 's',
  value: 1000
}, {
  symbol: 'S',
  value: 100
}]; // Decompose time into time units

function resolveCountdown(countdown) {
  var format = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'HH:mm:ss';
  var res = {};
  var thisUnits = units.filter(function (unit) {
    return format.indexOf(unit.symbol) > -1 && format.indexOf('~' + unit.symbol) < 0;
  });

  for (var i = 0, l = thisUnits.length; i < l; i++) {
    var _thisUnits$i = thisUnits[i],
        symbol = _thisUnits$i.symbol,
        value = _thisUnits$i.value; // Use ceil method when only unit

    var unitValue = l === 1 ? Math.ceil(countdown / value) : Math.floor(countdown / value);
    res[symbol] = unitValue;
    res[symbol + symbol] = unitValue < 10 ? "0".concat(unitValue) : unitValue;
    countdown %= value;
  }

  return res;
} // Format countdown

function formatCountdown(countdown) {
  var format = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'HH:mm:ss';
  // Check whether resolved
  var time = typeof countdown === 'number' ? resolveCountdown(countdown, format) : countdown; // Sort the keys from long to short to replace long placeholders first
  // to prevent long placeholders from being replaced by short ones

  var keys = Object.keys(time).sort(function (a, b) {
    return b.length - a.length;
  });
  var rs = format;
  keys.forEach(function (key) {
    if (rs.indexOf(key) > -1 && rs.indexOf('~' + key) < 0) {
      rs = rs.replace(key, time[key]);
    }
  }); // Escape

  rs = rs.replace(/~([DHmsS])/g, '$1');
  return rs;
}

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __nested_webpack_require_2928__(moduleId) {
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
/******/ 		__webpack_modules__[moduleId](module, module.exports, __nested_webpack_require_2928__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__nested_webpack_require_2928__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__nested_webpack_require_2928__.o(definition, key) && !__nested_webpack_require_2928__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__nested_webpack_require_2928__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__nested_webpack_require_2928__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __nested_webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!******************!*\
  !*** ./index.js ***!
  \******************/
__nested_webpack_require_2928__.r(__nested_webpack_exports__);
/* harmony export */ __nested_webpack_require_2928__.d(__nested_webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _utils__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_2928__(/*! ./utils */ "./utils.js");

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: 'CountdownPlus',
  props: {
    // Countdown time. ms
    time: {
      type: Number,
      default: 0
    },
    format: {
      type: String,
      default: 'HH:mm:ss'
    },
    autoStart: {
      type: Boolean,
      default: true
    }
  },
  data: function data() {
    return {
      currentTime: 0,
      restTime: 0,
      resolved: {},
      now: 0,
      timer: 0,
      inCountdown: false
    };
  },
  computed: {
    stepInterval: function stepInterval() {
      return /s/i.test(this.format) ? 30 : 1000;
    },
    formatted: function formatted() {
      return (0,_utils__WEBPACK_IMPORTED_MODULE_0__.formatCountdown)(this.resolved, this.format);
    }
  },
  methods: {
    start: function start() {
      if (this.inCountdown) {
        return;
      }

      this.now = Date.now();
      this.restTime = this.currentTime;
      window.clearInterval(this.timer);
      this.timer = window.setInterval(this._step, this.stepInterval);
      this.inCountdown = true;
    },
    _step: function _step() {
      var restTime = this.restTime,
          now = this.now,
          format = this.format,
          formatted = this.formatted;
      var interval = Date.now() - now;
      var target = restTime > interval ? restTime - interval : 0;
      var thisResolved = (0,_utils__WEBPACK_IMPORTED_MODULE_0__.resolveCountdown)(target, format);
      var thisFormatted = (0,_utils__WEBPACK_IMPORTED_MODULE_0__.formatCountdown)(thisResolved, format);

      if (thisFormatted !== formatted) {
        this.$emit('change', {
          currentTime: target,
          resolved: thisResolved,
          formatted: thisFormatted
        });
        this.resolved = thisResolved;
      }

      this.currentTime = target;

      if (restTime <= interval) {
        this.stop();
      }
    },
    stop: function stop() {
      this._doStop();

      this.$emit('finish');
    },
    reset: function reset() {
      this.currentTime = this.restTime = this.time;
      this.resolved = (0,_utils__WEBPACK_IMPORTED_MODULE_0__.resolveCountdown)(this.currentTime, this.format);

      this._doStop();
    },
    _doStop: function _doStop() {
      this.inCountdown = false;
      window.clearInterval(this.timer);
    }
  },
  created: function created() {
    this.currentTime = this.restTime = this.time;
    this.resolved = (0,_utils__WEBPACK_IMPORTED_MODULE_0__.resolveCountdown)(this.currentTime, this.format);

    if (this.autoStart) {
      this.start();
    }
  },
  render: function render(h) {
    var currentTime = this.currentTime,
        resolved = this.resolved,
        formatted = this.formatted;
    return h('span', [this.$scopedSlots.default ? this.$scopedSlots.default({
      currentTime: currentTime,
      resolved: resolved,
      formatted: formatted
    }) : this.formatted]);
  }
});
})();

/******/ 	return __nested_webpack_exports__;
/******/ })()
;
});
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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Q1IsV0FBS2xCLFdBQUwsR0FBbUIsS0FBbkI7QUFDQVEsTUFBQUEsTUFBTSxDQUFDQyxhQUFQLENBQXFCLEtBQUtWLEtBQTFCO0FBQ0Q7QUE5Q00sR0FuQ0k7QUFtRmJxQixFQUFBQSxPQW5GYSxxQkFtRkg7QUFDUixTQUFLekIsV0FBTCxHQUFtQixLQUFLQyxRQUFMLEdBQWdCLEtBQUtwQixJQUF4QztBQUNBLFNBQUtxQixRQUFMLEdBQWdCckMsd0RBQWdCLENBQUMsS0FBS21DLFdBQU4sRUFBbUIsS0FBS2pDLE1BQXhCLENBQWhDOztBQUNBLFFBQUksS0FBSzhCLFNBQVQsRUFBb0I7QUFDbEIsV0FBS2MsS0FBTDtBQUNEO0FBQ0YsR0F6Rlk7QUEwRmJlLEVBQUFBLE1BMUZhLGtCQTBGTkMsQ0ExRk0sRUEwRkg7QUFDUixRQUNFM0IsV0FERixHQUlJLElBSkosQ0FDRUEsV0FERjtBQUFBLFFBRUVFLFFBRkYsR0FJSSxJQUpKLENBRUVBLFFBRkY7QUFBQSxRQUdFTyxTQUhGLEdBSUksSUFKSixDQUdFQSxTQUhGO0FBS0EsV0FBT2tCLENBQUMsQ0FDTixNQURNLEVBRU4sQ0FDRSxLQUFLQyxZQUFMLENBQWtCakMsT0FBbEIsR0FDSSxLQUFLaUMsWUFBTCxDQUFrQmpDLE9BQWxCLENBQTBCO0FBQ3hCSyxNQUFBQSxXQUFXLEVBQVhBLFdBRHdCO0FBRXhCRSxNQUFBQSxRQUFRLEVBQVJBLFFBRndCO0FBR3hCTyxNQUFBQSxTQUFTLEVBQVRBO0FBSHdCLEtBQTFCLENBREosR0FNSSxLQUFLQSxTQVBYLENBRk0sQ0FBUjtBQVlEO0FBNUdZLENBQWYsRSIsInNvdXJjZXMiOlsid2VicGFjazovL1Z1ZUNvdW50ZG93blBsdXMvd2VicGFjay91bml2ZXJzYWxNb2R1bGVEZWZpbml0aW9uIiwid2VicGFjazovL1Z1ZUNvdW50ZG93blBsdXMvLi91dGlscy5qcyIsIndlYnBhY2s6Ly9WdWVDb3VudGRvd25QbHVzL3dlYnBhY2svYm9vdHN0cmFwIiwid2VicGFjazovL1Z1ZUNvdW50ZG93blBsdXMvd2VicGFjay9ydW50aW1lL2RlZmluZSBwcm9wZXJ0eSBnZXR0ZXJzIiwid2VicGFjazovL1Z1ZUNvdW50ZG93blBsdXMvd2VicGFjay9ydW50aW1lL2hhc093blByb3BlcnR5IHNob3J0aGFuZCIsIndlYnBhY2s6Ly9WdWVDb3VudGRvd25QbHVzL3dlYnBhY2svcnVudGltZS9tYWtlIG5hbWVzcGFjZSBvYmplY3QiLCJ3ZWJwYWNrOi8vVnVlQ291bnRkb3duUGx1cy8uL2luZGV4LmpzIl0sInNvdXJjZXNDb250ZW50IjpbIihmdW5jdGlvbiB3ZWJwYWNrVW5pdmVyc2FsTW9kdWxlRGVmaW5pdGlvbihyb290LCBmYWN0b3J5KSB7XG5cdGlmKHR5cGVvZiBleHBvcnRzID09PSAnb2JqZWN0JyAmJiB0eXBlb2YgbW9kdWxlID09PSAnb2JqZWN0Jylcblx0XHRtb2R1bGUuZXhwb3J0cyA9IGZhY3RvcnkoKTtcblx0ZWxzZSBpZih0eXBlb2YgZGVmaW5lID09PSAnZnVuY3Rpb24nICYmIGRlZmluZS5hbWQpXG5cdFx0ZGVmaW5lKFtdLCBmYWN0b3J5KTtcblx0ZWxzZSBpZih0eXBlb2YgZXhwb3J0cyA9PT0gJ29iamVjdCcpXG5cdFx0ZXhwb3J0c1tcIlZ1ZUNvdW50ZG93blBsdXNcIl0gPSBmYWN0b3J5KCk7XG5cdGVsc2Vcblx0XHRyb290W1wiVnVlQ291bnRkb3duUGx1c1wiXSA9IGZhY3RvcnkoKTtcbn0pKHNlbGYsIGZ1bmN0aW9uKCkge1xucmV0dXJuICIsIi8qKlxyXG4gKiBVdGlsc1xyXG4gKi9cclxuXHJcbmNvbnN0IHVuaXRzID0gW1xyXG4gIHsgc3ltYm9sOiAnRCcsIHZhbHVlOiAyNCAqIDYwICogNjAgKiAxMDAwIH0sXHJcbiAgeyBzeW1ib2w6ICdIJywgdmFsdWU6IDYwICogNjAgKiAxMDAwIH0sXHJcbiAgeyBzeW1ib2w6ICdtJywgdmFsdWU6IDYwICogMTAwMCB9LFxyXG4gIHsgc3ltYm9sOiAncycsIHZhbHVlOiAxMDAwIH0sXHJcbiAgeyBzeW1ib2w6ICdTJywgdmFsdWU6IDEwMCB9XHJcbl1cclxuXHJcbi8vIERlY29tcG9zZSB0aW1lIGludG8gdGltZSB1bml0c1xyXG5leHBvcnQgZnVuY3Rpb24gcmVzb2x2ZUNvdW50ZG93bihjb3VudGRvd24sIGZvcm1hdCA9ICdISDptbTpzcycpIHtcclxuICBjb25zdCByZXMgPSB7fVxyXG4gIGNvbnN0IHRoaXNVbml0cyA9IHVuaXRzLmZpbHRlcihcclxuICAgIHVuaXQgPT4gKFxyXG4gICAgICBmb3JtYXQuaW5kZXhPZih1bml0LnN5bWJvbCkgPiAtMSAmJlxyXG4gICAgICBmb3JtYXQuaW5kZXhPZignficgKyB1bml0LnN5bWJvbCkgPCAwXHJcbiAgICApXHJcbiAgKVxyXG4gIGZvciAobGV0IGkgPSAwLCBsID0gdGhpc1VuaXRzLmxlbmd0aDsgaSA8IGw7IGkrKykge1xyXG4gICAgY29uc3QgeyBzeW1ib2wsIHZhbHVlIH0gPSB0aGlzVW5pdHNbaV1cclxuXHJcbiAgICAvLyBVc2UgY2VpbCBtZXRob2Qgd2hlbiBvbmx5IHVuaXRcclxuICAgIGNvbnN0IHVuaXRWYWx1ZSA9IChcclxuICAgICAgbCA9PT0gMVxyXG4gICAgICAgID8gTWF0aC5jZWlsKGNvdW50ZG93biAvIHZhbHVlKVxyXG4gICAgICAgIDogTWF0aC5mbG9vcihjb3VudGRvd24gLyB2YWx1ZSlcclxuICAgIClcclxuICAgIHJlc1tzeW1ib2xdID0gdW5pdFZhbHVlXHJcbiAgICByZXNbc3ltYm9sICsgc3ltYm9sXSA9IHVuaXRWYWx1ZSA8IDEwID8gYDAke3VuaXRWYWx1ZX1gIDogdW5pdFZhbHVlXHJcbiAgICBjb3VudGRvd24gJT0gdmFsdWVcclxuICB9XHJcbiAgcmV0dXJuIHJlc1xyXG59XHJcblxyXG4vLyBGb3JtYXQgY291bnRkb3duXHJcbmV4cG9ydCBmdW5jdGlvbiBmb3JtYXRDb3VudGRvd24oY291bnRkb3duLCBmb3JtYXQgPSAnSEg6bW06c3MnKSB7XHJcbiAgLy8gQ2hlY2sgd2hldGhlciByZXNvbHZlZFxyXG4gIGNvbnN0IHRpbWUgPSAoXHJcbiAgICB0eXBlb2YgY291bnRkb3duID09PSAnbnVtYmVyJ1xyXG4gICAgICA/IHJlc29sdmVDb3VudGRvd24oY291bnRkb3duLCBmb3JtYXQpXHJcbiAgICAgIDogY291bnRkb3duXHJcbiAgKVxyXG5cclxuICAvLyBTb3J0IHRoZSBrZXlzIGZyb20gbG9uZyB0byBzaG9ydCB0byByZXBsYWNlIGxvbmcgcGxhY2Vob2xkZXJzIGZpcnN0XHJcbiAgLy8gdG8gcHJldmVudCBsb25nIHBsYWNlaG9sZGVycyBmcm9tIGJlaW5nIHJlcGxhY2VkIGJ5IHNob3J0IG9uZXNcclxuICBjb25zdCBrZXlzID0gT2JqZWN0LmtleXModGltZSkuc29ydCgoYSwgYikgPT4gYi5sZW5ndGggLSBhLmxlbmd0aClcclxuICBsZXQgcnMgPSBmb3JtYXRcclxuICBrZXlzLmZvckVhY2goa2V5ID0+IHtcclxuICAgIGlmIChycy5pbmRleE9mKGtleSkgPiAtMSAmJiBycy5pbmRleE9mKCd+JyArIGtleSkgPCAwKSB7XHJcbiAgICAgIHJzID0gcnMucmVwbGFjZShrZXksIHRpbWVba2V5XSlcclxuICAgIH1cclxuICB9KVxyXG5cclxuICAvLyBFc2NhcGVcclxuICBycyA9IHJzLnJlcGxhY2UoL34oW0RIbXNTXSkvZywgJyQxJylcclxuXHJcbiAgcmV0dXJuIHJzXHJcbn1cclxuIiwiLy8gVGhlIG1vZHVsZSBjYWNoZVxudmFyIF9fd2VicGFja19tb2R1bGVfY2FjaGVfXyA9IHt9O1xuXG4vLyBUaGUgcmVxdWlyZSBmdW5jdGlvblxuZnVuY3Rpb24gX193ZWJwYWNrX3JlcXVpcmVfXyhtb2R1bGVJZCkge1xuXHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcblx0dmFyIGNhY2hlZE1vZHVsZSA9IF9fd2VicGFja19tb2R1bGVfY2FjaGVfX1ttb2R1bGVJZF07XG5cdGlmIChjYWNoZWRNb2R1bGUgIT09IHVuZGVmaW5lZCkge1xuXHRcdHJldHVybiBjYWNoZWRNb2R1bGUuZXhwb3J0cztcblx0fVxuXHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuXHR2YXIgbW9kdWxlID0gX193ZWJwYWNrX21vZHVsZV9jYWNoZV9fW21vZHVsZUlkXSA9IHtcblx0XHQvLyBubyBtb2R1bGUuaWQgbmVlZGVkXG5cdFx0Ly8gbm8gbW9kdWxlLmxvYWRlZCBuZWVkZWRcblx0XHRleHBvcnRzOiB7fVxuXHR9O1xuXG5cdC8vIEV4ZWN1dGUgdGhlIG1vZHVsZSBmdW5jdGlvblxuXHRfX3dlYnBhY2tfbW9kdWxlc19fW21vZHVsZUlkXShtb2R1bGUsIG1vZHVsZS5leHBvcnRzLCBfX3dlYnBhY2tfcmVxdWlyZV9fKTtcblxuXHQvLyBSZXR1cm4gdGhlIGV4cG9ydHMgb2YgdGhlIG1vZHVsZVxuXHRyZXR1cm4gbW9kdWxlLmV4cG9ydHM7XG59XG5cbiIsIi8vIGRlZmluZSBnZXR0ZXIgZnVuY3Rpb25zIGZvciBoYXJtb255IGV4cG9ydHNcbl9fd2VicGFja19yZXF1aXJlX18uZCA9IChleHBvcnRzLCBkZWZpbml0aW9uKSA9PiB7XG5cdGZvcih2YXIga2V5IGluIGRlZmluaXRpb24pIHtcblx0XHRpZihfX3dlYnBhY2tfcmVxdWlyZV9fLm8oZGVmaW5pdGlvbiwga2V5KSAmJiAhX193ZWJwYWNrX3JlcXVpcmVfXy5vKGV4cG9ydHMsIGtleSkpIHtcblx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBrZXksIHsgZW51bWVyYWJsZTogdHJ1ZSwgZ2V0OiBkZWZpbml0aW9uW2tleV0gfSk7XG5cdFx0fVxuXHR9XG59OyIsIl9fd2VicGFja19yZXF1aXJlX18ubyA9IChvYmosIHByb3ApID0+IChPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGwob2JqLCBwcm9wKSkiLCIvLyBkZWZpbmUgX19lc01vZHVsZSBvbiBleHBvcnRzXG5fX3dlYnBhY2tfcmVxdWlyZV9fLnIgPSAoZXhwb3J0cykgPT4ge1xuXHRpZih0eXBlb2YgU3ltYm9sICE9PSAndW5kZWZpbmVkJyAmJiBTeW1ib2wudG9TdHJpbmdUYWcpIHtcblx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgU3ltYm9sLnRvU3RyaW5nVGFnLCB7IHZhbHVlOiAnTW9kdWxlJyB9KTtcblx0fVxuXHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgJ19fZXNNb2R1bGUnLCB7IHZhbHVlOiB0cnVlIH0pO1xufTsiLCJpbXBvcnQgeyByZXNvbHZlQ291bnRkb3duLCBmb3JtYXRDb3VudGRvd24gfSBmcm9tICcuL3V0aWxzJ1xyXG5cclxuZXhwb3J0IGRlZmF1bHQge1xyXG4gIG5hbWU6ICdDb3VudGRvd25QbHVzJyxcclxuICBwcm9wczoge1xyXG4gICAgLy8gQ291bnRkb3duIHRpbWUuIG1zXHJcbiAgICB0aW1lOiB7XHJcbiAgICAgIHR5cGU6IE51bWJlcixcclxuICAgICAgZGVmYXVsdDogMFxyXG4gICAgfSxcclxuICAgIGZvcm1hdDoge1xyXG4gICAgICB0eXBlOiBTdHJpbmcsXHJcbiAgICAgIGRlZmF1bHQ6ICdISDptbTpzcydcclxuICAgIH0sXHJcbiAgICBhdXRvU3RhcnQ6IHtcclxuICAgICAgdHlwZTogQm9vbGVhbixcclxuICAgICAgZGVmYXVsdDogdHJ1ZVxyXG4gICAgfVxyXG4gIH0sXHJcbiAgZGF0YSgpIHtcclxuICAgIHJldHVybiB7XHJcbiAgICAgIGN1cnJlbnRUaW1lOiAwLFxyXG4gICAgICByZXN0VGltZTogMCxcclxuICAgICAgcmVzb2x2ZWQ6IHt9LFxyXG4gICAgICBub3c6IDAsXHJcbiAgICAgIHRpbWVyOiAwLFxyXG4gICAgICBpbkNvdW50ZG93bjogZmFsc2VcclxuICAgIH1cclxuICB9LFxyXG4gIGNvbXB1dGVkOiB7XHJcbiAgICBzdGVwSW50ZXJ2YWwoKSB7XHJcbiAgICAgIHJldHVybiAvcy9pLnRlc3QodGhpcy5mb3JtYXQpID8gMzAgOiAxMDAwXHJcbiAgICB9LFxyXG4gICAgZm9ybWF0dGVkKCkge1xyXG4gICAgICByZXR1cm4gZm9ybWF0Q291bnRkb3duKHRoaXMucmVzb2x2ZWQsIHRoaXMuZm9ybWF0KVxyXG4gICAgfVxyXG4gIH0sXHJcbiAgbWV0aG9kczoge1xyXG4gICAgc3RhcnQoKSB7XHJcbiAgICAgIGlmICh0aGlzLmluQ291bnRkb3duKSB7XHJcbiAgICAgICAgcmV0dXJuXHJcbiAgICAgIH1cclxuICAgICAgdGhpcy5ub3cgPSBEYXRlLm5vdygpXHJcbiAgICAgIHRoaXMucmVzdFRpbWUgPSB0aGlzLmN1cnJlbnRUaW1lXHJcbiAgICAgIHdpbmRvdy5jbGVhckludGVydmFsKHRoaXMudGltZXIpXHJcbiAgICAgIHRoaXMudGltZXIgPSB3aW5kb3cuc2V0SW50ZXJ2YWwodGhpcy5fc3RlcCwgdGhpcy5zdGVwSW50ZXJ2YWwpXHJcbiAgICAgIHRoaXMuaW5Db3VudGRvd24gPSB0cnVlXHJcbiAgICB9LFxyXG4gICAgX3N0ZXAoKSB7XHJcbiAgICAgIGNvbnN0IHsgcmVzdFRpbWUsIG5vdywgZm9ybWF0LCBmb3JtYXR0ZWQgfSA9IHRoaXNcclxuICAgICAgY29uc3QgaW50ZXJ2YWwgPSBEYXRlLm5vdygpIC0gbm93XHJcbiAgICAgIGNvbnN0IHRhcmdldCA9IChcclxuICAgICAgICByZXN0VGltZSA+IGludGVydmFsXHJcbiAgICAgICAgICA/IHJlc3RUaW1lIC0gaW50ZXJ2YWxcclxuICAgICAgICAgIDogMFxyXG4gICAgICApXHJcbiAgICAgIGNvbnN0IHRoaXNSZXNvbHZlZCA9IHJlc29sdmVDb3VudGRvd24odGFyZ2V0LCBmb3JtYXQpXHJcbiAgICAgIGNvbnN0IHRoaXNGb3JtYXR0ZWQgPSBmb3JtYXRDb3VudGRvd24odGhpc1Jlc29sdmVkLCBmb3JtYXQpXHJcbiAgICAgIGlmICh0aGlzRm9ybWF0dGVkICE9PSBmb3JtYXR0ZWQpIHtcclxuICAgICAgICB0aGlzLiRlbWl0KCdjaGFuZ2UnLCB7XHJcbiAgICAgICAgICBjdXJyZW50VGltZTogdGFyZ2V0LFxyXG4gICAgICAgICAgcmVzb2x2ZWQ6IHRoaXNSZXNvbHZlZCxcclxuICAgICAgICAgIGZvcm1hdHRlZDogdGhpc0Zvcm1hdHRlZFxyXG4gICAgICAgIH0pXHJcbiAgICAgICAgdGhpcy5yZXNvbHZlZCA9IHRoaXNSZXNvbHZlZFxyXG4gICAgICB9XHJcbiAgICAgIHRoaXMuY3VycmVudFRpbWUgPSB0YXJnZXRcclxuICAgICAgaWYgKHJlc3RUaW1lIDw9IGludGVydmFsKSB7XHJcbiAgICAgICAgdGhpcy5zdG9wKClcclxuICAgICAgfVxyXG4gICAgfSxcclxuICAgIHN0b3AoKSB7XHJcbiAgICAgIHRoaXMuX2RvU3RvcCgpXHJcbiAgICAgIHRoaXMuJGVtaXQoJ2ZpbmlzaCcpXHJcbiAgICB9LFxyXG4gICAgcmVzZXQoKSB7XHJcbiAgICAgIHRoaXMuY3VycmVudFRpbWUgPSB0aGlzLnJlc3RUaW1lID0gdGhpcy50aW1lXHJcbiAgICAgIHRoaXMucmVzb2x2ZWQgPSByZXNvbHZlQ291bnRkb3duKHRoaXMuY3VycmVudFRpbWUsIHRoaXMuZm9ybWF0KVxyXG4gICAgICB0aGlzLl9kb1N0b3AoKVxyXG4gICAgfSxcclxuICAgIF9kb1N0b3AoKSB7XHJcbiAgICAgIHRoaXMuaW5Db3VudGRvd24gPSBmYWxzZVxyXG4gICAgICB3aW5kb3cuY2xlYXJJbnRlcnZhbCh0aGlzLnRpbWVyKVxyXG4gICAgfVxyXG4gIH0sXHJcbiAgY3JlYXRlZCgpIHtcclxuICAgIHRoaXMuY3VycmVudFRpbWUgPSB0aGlzLnJlc3RUaW1lID0gdGhpcy50aW1lXHJcbiAgICB0aGlzLnJlc29sdmVkID0gcmVzb2x2ZUNvdW50ZG93bih0aGlzLmN1cnJlbnRUaW1lLCB0aGlzLmZvcm1hdClcclxuICAgIGlmICh0aGlzLmF1dG9TdGFydCkge1xyXG4gICAgICB0aGlzLnN0YXJ0KClcclxuICAgIH1cclxuICB9LFxyXG4gIHJlbmRlcihoKSB7XHJcbiAgICBjb25zdCB7XHJcbiAgICAgIGN1cnJlbnRUaW1lLFxyXG4gICAgICByZXNvbHZlZCxcclxuICAgICAgZm9ybWF0dGVkXHJcbiAgICB9ID0gdGhpc1xyXG4gICAgcmV0dXJuIGgoXHJcbiAgICAgICdzcGFuJyxcclxuICAgICAgW1xyXG4gICAgICAgIHRoaXMuJHNjb3BlZFNsb3RzLmRlZmF1bHRcclxuICAgICAgICAgID8gdGhpcy4kc2NvcGVkU2xvdHMuZGVmYXVsdCh7XHJcbiAgICAgICAgICAgICAgY3VycmVudFRpbWUsXHJcbiAgICAgICAgICAgICAgcmVzb2x2ZWQsXHJcbiAgICAgICAgICAgICAgZm9ybWF0dGVkXHJcbiAgICAgICAgICAgIH0pXHJcbiAgICAgICAgICA6IHRoaXMuZm9ybWF0dGVkXHJcbiAgICAgIF1cclxuICAgIClcclxuICB9XHJcbn1cclxuIl0sIm5hbWVzIjpbInVuaXRzIiwic3ltYm9sIiwidmFsdWUiLCJyZXNvbHZlQ291bnRkb3duIiwiY291bnRkb3duIiwiZm9ybWF0IiwicmVzIiwidGhpc1VuaXRzIiwiZmlsdGVyIiwidW5pdCIsImluZGV4T2YiLCJpIiwibCIsImxlbmd0aCIsInVuaXRWYWx1ZSIsIk1hdGgiLCJjZWlsIiwiZmxvb3IiLCJmb3JtYXRDb3VudGRvd24iLCJ0aW1lIiwia2V5cyIsIk9iamVjdCIsInNvcnQiLCJhIiwiYiIsInJzIiwiZm9yRWFjaCIsImtleSIsInJlcGxhY2UiLCJuYW1lIiwicHJvcHMiLCJ0eXBlIiwiTnVtYmVyIiwiZGVmYXVsdCIsIlN0cmluZyIsImF1dG9TdGFydCIsIkJvb2xlYW4iLCJkYXRhIiwiY3VycmVudFRpbWUiLCJyZXN0VGltZSIsInJlc29sdmVkIiwibm93IiwidGltZXIiLCJpbkNvdW50ZG93biIsImNvbXB1dGVkIiwic3RlcEludGVydmFsIiwidGVzdCIsImZvcm1hdHRlZCIsIm1ldGhvZHMiLCJzdGFydCIsIkRhdGUiLCJ3aW5kb3ciLCJjbGVhckludGVydmFsIiwic2V0SW50ZXJ2YWwiLCJfc3RlcCIsImludGVydmFsIiwidGFyZ2V0IiwidGhpc1Jlc29sdmVkIiwidGhpc0Zvcm1hdHRlZCIsIiRlbWl0Iiwic3RvcCIsIl9kb1N0b3AiLCJyZXNldCIsImNyZWF0ZWQiLCJyZW5kZXIiLCJoIiwiJHNjb3BlZFNsb3RzIl0sInNvdXJjZVJvb3QiOiIifQ==

/***/ }),

/***/ "./resources/js/components/student/course/QuizComponent.vue":
/*!******************************************************************!*\
  !*** ./resources/js/components/student/course/QuizComponent.vue ***!
  \******************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _QuizComponent_vue_vue_type_template_id_0ca8079a_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./QuizComponent.vue?vue&type=template&id=0ca8079a&scoped=true& */ "./resources/js/components/student/course/QuizComponent.vue?vue&type=template&id=0ca8079a&scoped=true&");
/* harmony import */ var _QuizComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./QuizComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/student/course/QuizComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _QuizComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _QuizComponent_vue_vue_type_template_id_0ca8079a_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _QuizComponent_vue_vue_type_template_id_0ca8079a_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "0ca8079a",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/student/course/QuizComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/student/course/QuizComponent.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/components/student/course/QuizComponent.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_QuizComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./QuizComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/student/course/QuizComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_QuizComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/student/course/QuizComponent.vue?vue&type=template&id=0ca8079a&scoped=true&":
/*!*************************************************************************************************************!*\
  !*** ./resources/js/components/student/course/QuizComponent.vue?vue&type=template&id=0ca8079a&scoped=true& ***!
  \*************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   render: () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_QuizComponent_vue_vue_type_template_id_0ca8079a_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   staticRenderFns: () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_QuizComponent_vue_vue_type_template_id_0ca8079a_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_QuizComponent_vue_vue_type_template_id_0ca8079a_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./QuizComponent.vue?vue&type=template&id=0ca8079a&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/student/course/QuizComponent.vue?vue&type=template&id=0ca8079a&scoped=true&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/student/course/QuizComponent.vue?vue&type=template&id=0ca8079a&scoped=true&":
/*!****************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/student/course/QuizComponent.vue?vue&type=template&id=0ca8079a&scoped=true& ***!
  \****************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   render: () => (/* binding */ render),
/* harmony export */   staticRenderFns: () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "ic-codePlayground--liveCode" }, [
    _c("div", { staticClass: "ic-codePlayground--left w-100" }, [
      _c("div", { staticClass: "ic-codePlayground-header" }, [
        _c("ul", { staticClass: "edit-tabs" }, [
          _vm.exam != undefined
            ? _c("li", [
                _vm.exam.name.length < 18
                  ? _c("a", { attrs: { href: "#" } }, [
                      _vm._v(_vm._s(_vm.exam.name)),
                    ])
                  : _c("a", { attrs: { href: "#" } }, [
                      _vm._v(_vm._s(_vm.exam.name.substring(0, 17) + "..")),
                    ]),
              ])
            : _vm._e(),
        ]),
        _vm._v(" "),
        _c("ul", { staticClass: "editor-times" }, [
          _vm._m(0),
          _vm._v(" "),
          _vm._m(1),
          _vm._v(" "),
          _c("li", [
            _c(
              "span",
              { staticClass: "ic-times-count" },
              [
                _vm.exam != undefined
                  ? _c("countdown", {
                      ref: "countdown",
                      attrs: {
                        time: _vm.exam.duration * 1000,
                        format: "HH:mm:ss",
                      },
                      on: { finish: _vm.handleFinish },
                    })
                  : _vm._e(),
              ],
              1
            ),
          ]),
        ]),
      ]),
      _vm._v(" "),
      _vm.examStart
        ? _c("div", { staticClass: "ic-codePlayground-innerDiv" }, [
            _c(
              "div",
              { staticClass: "ic-codePlayground-questionBackFroward-btn" },
              [
                _c(
                  "button",
                  {
                    attrs: { disabled: _vm.nextBtnDisable },
                    on: { click: _vm.nextQuestion },
                  },
                  [
                    _vm._v("\n          Next "),
                    _c("i", { staticClass: "ri-arrow-right-line" }),
                  ]
                ),
              ]
            ),
            _vm._v(" "),
            _c("div", { staticClass: "ic-codePlayground-question" }, [
              _c("p", {
                staticClass: "ic-question-text",
                domProps: {
                  innerHTML: _vm._s(_vm.questions[_vm.index]["question"]),
                },
              }),
              _vm._v(" "),
              _vm.questions
                ? _c(
                    "ul",
                    { staticClass: "ic-question" },
                    _vm._l(
                      _vm.questions[_vm.index]["answers"],
                      function (answer, key) {
                        return answer != null
                          ? _c("li", { key: key }, [
                              _c("div", { staticClass: "form-check p-0 m-0" }, [
                                _c(
                                  "label",
                                  {
                                    ref: key,
                                    refInFor: true,
                                    staticClass: "form-check-label ic-ques-ans",
                                  },
                                  [
                                    _c("input", {
                                      directives: [
                                        {
                                          name: "model",
                                          rawName: "v-model",
                                          value: _vm.selectedAnswer,
                                          expression: "selectedAnswer",
                                        },
                                      ],
                                      staticClass:
                                        "form-check-input ic-question-checkInput me-2 ms-0",
                                      attrs: {
                                        type: "radio",
                                        name: "question",
                                        id: "flexCheckDefault4",
                                      },
                                      domProps: {
                                        value: key,
                                        checked: _vm._q(
                                          _vm.selectedAnswer,
                                          key
                                        ),
                                      },
                                      on: {
                                        change: function ($event) {
                                          _vm.selectedAnswer = key
                                        },
                                      },
                                    }),
                                    _vm._v(
                                      "\n                " +
                                        _vm._s(answer) +
                                        "\n              "
                                    ),
                                  ]
                                ),
                              ]),
                            ])
                          : _vm._e()
                      }
                    ),
                    0
                  )
                : _vm._e(),
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "ic-answar-submit" }, [
              _c("button", { on: { click: _vm.resetQuiz } }, [
                _vm._v("Reset Quiz"),
              ]),
              _vm._v(" "),
              _c("p", [
                _vm._v(
                  "Question-" +
                    _vm._s(_vm.currentQusIndex) +
                    "/" +
                    _vm._s(_vm.qusCount)
                ),
              ]),
              _vm._v(" "),
              _c(
                "button",
                {
                  attrs: { disabled: _vm.submitBtnDisable },
                  on: { click: _vm.submitAnswer },
                },
                [_vm._v("\n          Submit\n        ")]
              ),
            ]),
          ])
        : _vm._e(),
      _vm._v(" "),
      _vm.examEnd
        ? _c("div", { staticClass: "ic-codePlayground-questionMark" }, [
            _c("ul", { staticClass: "ic-question-Numbers" }, [
              _c("li", [
                _c("i", { staticClass: "ri-question-fill" }),
                _vm._v(" "),
                _c("div", { staticClass: "icquestion-show" }, [
                  _c("p", [_vm._v("Number of Question")]),
                  _vm._v(" "),
                  _c("p", [_vm._v(_vm._s(_vm.qusCount))]),
                ]),
              ]),
              _vm._v(" "),
              _c("li", [
                _c("img", {
                  attrs: { src: "/frontend/images/award.webp", alt: "" },
                }),
                _vm._v(" "),
                _c("div", { staticClass: "icquestion-show" }, [
                  _c("p", [_vm._v("Pass Marks")]),
                  _vm._v(" "),
                  _c("p", [_vm._v(_vm._s(_vm.passMark) + "%")]),
                ]),
              ]),
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "ic-congratulation" }, [
              _vm.score >= _vm.passMark
                ? _c("h3", [_vm._v("Congratulations! You Passed")])
                : _c("h3", [_vm._v("You Failed!")]),
              _vm._v(" "),
              _c("ul", { staticClass: "ic-congra-select" }, [
                _c("li", [
                  _c("img", {
                    attrs: { src: "/frontend/images/list.png", alt: "" },
                  }),
                  _vm._v(" "),
                  _c("div", { staticClass: "icquestion-show" }, [
                    _c("p", [_vm._v("Correct Answer")]),
                    _vm._v(" "),
                    _c("p", [
                      _vm._v(
                        _vm._s(_vm.correctAnswer) + "/" + _vm._s(_vm.qusCount)
                      ),
                    ]),
                  ]),
                ]),
                _vm._v(" "),
                _c("li", [
                  _c("img", {
                    attrs: { src: "/frontend/images/award.webp", alt: "" },
                  }),
                  _vm._v(" "),
                  _c("div", { staticClass: "icquestion-show" }, [
                    _c("p", [_vm._v("Your Score")]),
                    _vm._v(" "),
                    _c("p", [_vm._v(_vm._s(_vm.score) + "%")]),
                  ]),
                ]),
              ]),
            ]),
          ])
        : _vm._e(),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("li", [
      _c("span", { staticClass: "pro-names" }, [_vm._v("MCdns")]),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("li", [
      _c("span", { staticClass: "ic-times-prime" }, [
        _c("i", { staticClass: "ri-timer-line" }),
      ]),
    ])
  },
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ normalizeComponent)
/* harmony export */ });
/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file (except for modules).
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

function normalizeComponent (
  scriptExports,
  render,
  staticRenderFns,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier, /* server only */
  shadowMode /* vue-cli only */
) {
  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (render) {
    options.render = render
    options.staticRenderFns = staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = 'data-v-' + scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = shadowMode
      ? function () {
        injectStyles.call(
          this,
          (options.functional ? this.parent : this).$root.$options.shadowRoot
        )
      }
      : injectStyles
  }

  if (hook) {
    if (options.functional) {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functional component in vue file
      var originalRender = options.render
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return originalRender(h, context)
      }
    } else {
      // inject component registration as beforeCreate hook
      var existing = options.beforeCreate
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    }
  }

  return {
    exports: scriptExports,
    options: options
  }
}


/***/ })

}]);