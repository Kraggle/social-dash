import $ from '../../core/jquery/jquery.js';
import '../../plugins/jquery.jvectormap.js';
import colors from './colors.js';

const color = 'blue';

export default {
	init() {
		const mapData = {
			"AU": 760,
			"BR": 550,
			"CA": 120,
			"DE": 1300,
			"FR": 540,
			"GB": 690,
			"GE": 200,
			"IN": 200,
			"RO": 600,
			"RU": 300,
			"US": 2920,
		};

		$('#worldMap').vectorMap({
			map: 'world_mill',
			backgroundColor: 'transparent',
			zoomOnScroll: false,
			regionStyle: {
				initial: {
					fill: colors.lighten(color, 35),
					"fill-opacity": 0.9,
					stroke: colors.darken(color, 100),
					"stroke-width": 0.2,
					"stroke-opacity": 0.5
				}
			},
			series: {
				regions: [{
					values: mapData,
					scale: [colors.lighten(color, 30), colors.darken(color, 10)],
					normalizeFunction: 'polynomial'
				}]
			},
			onRegionTipShow: function(e, el, code) {
				el.html(el.html() + ` (${mapData[code] || 0})`);
			}
		});
	}
}
