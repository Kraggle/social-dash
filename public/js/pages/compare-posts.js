import $ from '../core/jquery/jquery.js';
import newChart from './shared/chart.js';

$(() => {
	const page = $('[data-page]').data('page');

	newChart({
		chartId: '#comparison-chart',
		scales: {
			day: {
				count: 11,
				min: 0,
				max: 300
			}
		},
		page
	});

	// (() => {
	// 	const labels = ['09/05', '10/05', '11/05', '12/05', '13/05', '14/05', '15/05', '16/05', '17/05', '18/05', '19/05', '20/05'],
	// 		data = [{
	// 			data: [30, 40, 60, 40, 50, 70, 30, 50, 40, 60, 60, 40],
	// 			color: 'pink'
	// 		}, {
	// 			data: [50, 70, 90, 70, 30, 80, 60, 80, 90, 50, 30, 20],
	// 			color: 'blue'
	// 		}, {
	// 			data: [70, 50, 65, 40, 60, 50, 80, 80, 30, 70, 20, 30],
	// 			color: 'purple'
	// 		}, {
	// 			data: [20, 90, 60, 30, 90, 40, 20, 80, 50, 30, 50, 40],
	// 			color: 'red'
	// 		}, {
	// 			data: [10, 30, 50, 80, 50, 10, 60, 80, 110, 20, 90, 50],
	// 			color: 'orange'
	// 		}],
	// 		color = 'pink',
	// 		$ctx = $('#comparison-chart');

	// 	if ($ctx.length) {
	// 		const ctx = $ctx.get(0).getContext('2d'),
	// 			datasets = [],
	// 			mergedData = [];

	// 		data.forEach(dataset => {
	// 			datasets.push(K.extend({}, chartConfig.lineDataset(dataset.color, ctx, true), {
	// 				data: dataset.data
	// 			}));
	// 			mergedData.concat(dataset.data);
	// 		});

	// 		const config = {
	// 			type: 'line',
	// 			data: {
	// 				labels,
	// 				datasets
	// 			},
	// 			options: K.extend(true, {}, chartConfig.lineOptions(color), {
	// 				scales: {
	// 					y: {
	// 						suggestedMin: Math.max(0, Math.min.apply(null, mergedData) - 10),
	// 						suggestedMax: Math.max.apply(null, mergedData) + 10
	// 					}
	// 				},
	// 				maintainAspectRatio: true,
	// 				aspectRatio: 4
	// 			})
	// 		}

	// 		$ctx.data('chart', new Chart(ctx, config));
	// 	}
	// })();
});