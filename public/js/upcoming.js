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
/******/ 	return __webpack_require__(__webpack_require__.s = 52);
/******/ })
/************************************************************************/
/******/ ({

/***/ 52:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(53);


/***/ }),

/***/ 53:
/***/ (function(module, exports) {

$(function () {

    // Datatable initialize
    $('#upcomingTasks').DataTable({
        order: [1, 'desc'],
        columnDefs: [{ targets: [0, 4, 7], orderable: false }],
        paging: false,
        info: false
    });

    // Select all rows.
    $('thead input').on('ifChecked', function (event) {
        $('tbody input').each(function () {
            $(this).iCheck('check');
        });
    });

    // Deselect all rows.
    $('thead input').on('ifUnchecked', function (event) {
        $('tbody input').each(function () {
            $(this).iCheck('uncheck');
        });
    });

    // Delete a selected task
    $('.delete-task').on('click', function () {
        var url = '/upcoming/delete/' + $(this).data('id');

        axios.delete(url).then(function (response) {
            if (response.data.message == 'Task was removed successfuly') {
                location.reload();
            } else {
                console.log(response.data);
            }
        }).catch(function (error) {
            console.log(error);
        });
    });

    // Delete the selected tasks
    $('#removeTasks').on('click', function () {
        var url = '/upcoming/delete-all';
        var ids = [];

        $('tbody input').each(function () {
            if ($(this).is(':checked')) {
                ids.push($(this).data('id'));
            }
        });

        axios.post(url, ids).then(function (response) {
            if (response.data.message == 'Tasks were removed successfuly') {
                location.reload();
            } else {
                console.log(response.data);
            }
        }).catch(function (error) {
            console.log(error);
        });
    });
});

/***/ })

/******/ });