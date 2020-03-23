// Easypie chart Loader
// -----------------------------------

// Easy Pie
import EasyPieChart from 'easy-pie-chart';

(function() {
    'use strict';

    $(initEasyPieChart);

    function initEasyPieChart() {
        // Usage via data attributes
        // <div class="easypie-chart" data-easypiechart data-percent="X" data-optionName="value"></div>
        $('[data-easypiechart]').each(function() {
            var $elem = $(this);
            var options = $elem.data();
            new EasyPieChart(this, options || {});
        });

        // programmatic usage
        var pieOptions1 = {
            animate: {
                duration: 800,
                enabled: true
            },
            barColor: APP_COLORS['success'],
            trackColor: false,
            scaleColor: false,
            lineWidth: 10,
            lineCap: 'circle'
        };
        const easyPie1 = document.querySelector('#easypie1');
        if (easyPie1) new EasyPieChart(easyPie1, pieOptions1);

        var pieOptions2 = {
            animate: {
                duration: 800,
                enabled: true
            },
            barColor: APP_COLORS['warning'],
            trackColor: false,
            scaleColor: false,
            lineWidth: 4,
            lineCap: 'circle'
        };
        const easyPie2 = document.querySelector('#easypie2');
        if (easyPie2) new EasyPieChart(easyPie2, pieOptions2);

        var pieOptions3 = {
            animate: {
                duration: 800,
                enabled: true
            },
            barColor: APP_COLORS['danger'],
            trackColor: false,
            scaleColor: APP_COLORS['gray'],
            lineWidth: 15,
            lineCap: 'circle'
        };
        const easyPie3 = document.querySelector('#easypie3');
        if (easyPie3) new EasyPieChart(easyPie3, pieOptions3);

        var pieOptions4 = {
            animate: {
                duration: 800,
                enabled: true
            },
            barColor: APP_COLORS['danger'],
            trackColor: APP_COLORS['yellow'],
            scaleColor: APP_COLORS['gray-dark'],
            lineWidth: 15,
            lineCap: 'circle'
        };
        const easyPie4 = document.querySelector('#easypie4');
        if (easyPie4) new EasyPieChart(easyPie4, pieOptions4);
    }
})();
