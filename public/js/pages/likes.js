import $ from '../core/jquery/jquery.js';
import Chart from '../plugins/chart-js/chart.js';
import chartConfig from './shared/chart-options.js';
import K from '../plugins/K.js';
import Maps from './shared/map-data.js';

$(() => {
	Maps.init();

	const labels = ['09/05', '10/05', '11/05', '12/05', '13/05', '14/05', '15/05', '16/05', '17/05', '18/05', '19/05', '20/05'],
		data = [60, 70, 90, 180, 270, 490, 732, 900, 1380, 1580, 1910, 2100],
		color = 'yellow';

	let ctx = $("#likes-chart").get(0);

	if (ctx) {
		ctx = ctx.getContext('2d');

		let config = {
			type: 'line',
			data: {
				labels: labels,
				datasets: [K.extend({}, chartConfig.lineDataset(color, ctx, true), {
					data
				})]
			},
			options: K.extend(true, {}, chartConfig.lineOptions(color), {
				scales: {
					yAxes: {
						suggestedMin: Math.min.apply(null, data) - 10,
						suggestedMax: Math.max.apply(null, data) + 10
					}
				}
			})
		}

		let myChartData = new Chart(ctx, config);
	}
});
