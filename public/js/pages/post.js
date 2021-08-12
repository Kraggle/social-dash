import $ from '../core/jquery/jquery.js';
import newChart from './shared/chart.js';

$(() => {
	const page = $('[data-page]').data('page');

	newChart({
		chartId: '#engagement-chart',
		scales: {
			hour: {
				count: 24,
				min: 0,
				max: 300
			}
		},
		page
	});

	// (() => {
	// 	const labels = ['09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00'],
	// 		data = [0, 30, 80, 160, 240, 140, 115, 75, 55, 35, 20, 10],
	// 		color = 'pink',
	// 		$ctx = $('#engagement-chart');

	// 	if ($ctx.length) {
	// 		const ctx = $ctx.get(0).getContext('2d');

	// 		const config = {
	// 			type: 'line',
	// 			data: {
	// 				labels: labels,
	// 				datasets: [K.extend({}, chartConfig.lineDataset(color, ctx, true), {
	// 					data
	// 				})]
	// 			},
	// 			options: K.extend(true, {}, chartConfig.lineOptions(color), {
	// 				scales: {
	// 					y: {
	// 						suggestedMin: Math.max(0, Math.min.apply(null, data) - 10),
	// 						suggestedMax: Math.max.apply(null, data) + 10
	// 					}
	// 				},
	// 				maintainAspectRatio: true,
	// 				aspectRatio: 2.6
	// 			})
	// 		}

	// 		$ctx.data('chart', new Chart(ctx, config));
	// 	}
	// })();
});