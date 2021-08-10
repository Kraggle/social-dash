import $ from '../core/jquery/jquery.js';
import newChart from './shared/chart.js';

$(() => {
	const page = $('[data-page]').data('page');

	newChart({
		chartId: '#follower-chart',
		scales: {
			day: {
				count: 14,
				min: 0,
				max: 300
			},
			week: {
				count: 14,
				min: 0,
				max: 2000
			},
			month: {
				count: 12,
				min: 1000,
				max: 10000
			}
		},
		page
	});

	newChart({
		chartId: '#follow-vs-unfollow-chart',
		scales: {
			month: {
				count: 6,
				min: 20,
				max: 170
			}
		},
		page,
		options: {
			maintainAspectRatio: false
		}
	});

	newChart({
		chartId: '#follow-all-time-chart',
		scales: {
			month: {
				count: 6,
				min: 1000,
				max: 10000
			}
		},
		page,
		options: {
			maintainAspectRatio: false
		}
	});
});
