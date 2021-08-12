import $ from '../core/jquery/jquery.js';
import newChart from './shared/chart.js';

$(() => {
	const page = $('[data-page]').data('page');

	newChart({
		chartId: '#posts-chart',
		scales: {
			day: {
				count: 11,
				min: 0,
				max: 300
			},
			week: {
				count: 11,
				min: 0,
				max: 2000
			},
			month: {
				count: 7,
				min: 1000,
				max: 10000
			}
		},
		page
	});

	newChart({
		chartId: '#bubble-chart',
		scales: {
			day: {
				count: 7,
				min: 0,
				max: 10
			},
			x: {
				count: 24
			}
		},
		page
	});
});
