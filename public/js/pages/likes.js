import $ from '../core/jquery/jquery.js';
import newChart from './shared/chart.js';
import Maps from './shared/map-data.js';

$(() => {
	const page = $('[data-page]').data('page');

	Maps.init();

	newChart({
		chartId: '#likes-chart',
		scales: {
			day: {
				count: 15,
				min: 0,
				max: 300
			},
			week: {
				count: 15,
				min: 0,
				max: 2000
			},
			month: {
				count: 11,
				min: 1000,
				max: 10000
			}
		},
		page
	});
});
