import $ from '../core/jquery/jquery.js';
import newChart from './shared/chart.js';

$(() => {
	const page = $('[data-page]').data('page');

	newChart({
		chartId: '#comments-chart',
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
