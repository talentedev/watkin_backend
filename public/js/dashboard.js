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
/******/ 	return __webpack_require__(__webpack_require__.s = 50);
/******/ })
/************************************************************************/
/******/ ({

/***/ 50:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(51);


/***/ }),

/***/ 51:
/***/ (function(module, exports) {

$(function () {

    /*
     * LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var sin = [],
        cos = [];
    for (var i = 0; i < 14; i += 0.5) {
        sin.push([i, Math.sin(i)]);
        cos.push([i, Math.cos(i)]);
    }
    var line_data1 = {
        data: sin,
        color: '#3c8dbc'
    };
    var line_data2 = {
        data: cos,
        color: '#00c0ef'
    };
    $.plot('#line-chart', [line_data1, line_data2], {
        grid: {
            hoverable: true,
            borderColor: '#f3f3f3',
            borderWidth: 1,
            tickColor: '#f3f3f3'
        },
        series: {
            shadowSize: 0,
            lines: {
                show: true
            },
            points: {
                show: true
            }
        },
        lines: {
            fill: false,
            color: ['#3c8dbc', '#f56954']
        },
        yaxis: {
            show: true
        },
        xaxis: {
            serieshow: true
        }
    });
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
        position: 'absolute',
        display: 'none',
        opacity: 0.8
    }).appendTo('body');
    $('#line-chart').bind('plothover', function (event, pos, item) {

        if (item) {
            var x = item.datapoint[0].toFixed(2),
                y = item.datapoint[1].toFixed(2);

            $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y).css({ top: item.pageY + 5, left: item.pageX + 5 }).fadeIn(200);
        } else {
            $('#line-chart-tooltip').hide();
        }
    });
    /* END LINE CHART */

    /* jVector Maps
     * ------------
     * Create a world map with markers
     */
    $('#world-map-markers').vectorMap({
        map: 'world_mill_en',
        normalizeFunction: 'polynomial',
        hoverOpacity: 0.7,
        hoverColor: false,
        backgroundColor: 'transparent',
        regionStyle: {
            initial: {
                fill: 'rgba(210, 214, 222, 1)',
                'fill-opacity': 1,
                stroke: 'none',
                'stroke-width': 0,
                'stroke-opacity': 1
            },
            hover: {
                'fill-opacity': 0.7,
                cursor: 'pointer'
            },
            selected: {
                fill: 'yellow'
            },
            selectedHover: {}
        },
        markerStyle: {
            initial: {
                fill: '#00a65a',
                stroke: '#111'
            }
        },
        markers: [{ latLng: [41.90, 12.45], name: 'Vatican City' }, { latLng: [43.73, 7.41], name: 'Monaco' }, { latLng: [-0.52, 166.93], name: 'Nauru' }, { latLng: [-8.51, 179.21], name: 'Tuvalu' }, { latLng: [43.93, 12.46], name: 'San Marino' }, { latLng: [47.14, 9.52], name: 'Liechtenstein' }, { latLng: [7.11, 171.06], name: 'Marshall Islands' }, { latLng: [17.3, -62.73], name: 'Saint Kitts and Nevis' }, { latLng: [3.2, 73.22], name: 'Maldives' }, { latLng: [35.88, 14.5], name: 'Malta' }, { latLng: [12.05, -61.75], name: 'Grenada' }, { latLng: [13.16, -61.23], name: 'Saint Vincent and the Grenadines' }, { latLng: [13.16, -59.55], name: 'Barbados' }, { latLng: [17.11, -61.85], name: 'Antigua and Barbuda' }, { latLng: [-4.61, 55.45], name: 'Seychelles' }, { latLng: [7.35, 134.46], name: 'Palau' }, { latLng: [42.5, 1.51], name: 'Andorra' }, { latLng: [14.01, -60.98], name: 'Saint Lucia' }, { latLng: [6.91, 158.18], name: 'Federated States of Micronesia' }, { latLng: [1.3, 103.8], name: 'Singapore' }, { latLng: [1.46, 173.03], name: 'Kiribati' }, { latLng: [-21.13, -175.2], name: 'Tonga' }, { latLng: [15.3, -61.38], name: 'Dominica' }, { latLng: [-20.2, 57.5], name: 'Mauritius' }, { latLng: [26.02, 50.55], name: 'Bahrain' }, { latLng: [0.33, 6.73], name: 'São Tomé and Príncipe' }]
    });
});

/*
* Custom Label formatter
* ----------------------
*/
function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">' + label + '<br>' + Math.round(series.percent) + '%</div>';
}

/***/ })

/******/ });