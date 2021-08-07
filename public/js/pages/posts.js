import $ from '../core/jquery/jquery.js';
import Chart from '../plugins/chart-js/chart.js';
import chartConfig from './shared/chart-options.js';
import K from '../plugins/K.js';
import Maps from './shared/map-data.js';

$(() => {
	Maps.init();

	(() => {
		const labels = ['09/05', '10/05', '11/05', '12/05', '13/05', '14/05', '15/05', '16/05', '17/05', '18/05', '19/05', '20/05'],
			data = [30, 40, 60, 40, 50, 70, 30, 50, 40, 60, 60, 40],
			color = 'red';

		let ctx = $("#posts-chart").get(0);

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
					maintainAspectRatio: true,
					aspectRatio: 2,
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
	})();

	(() => {
		const labels = ['09/05', '10/05', '11/05', '12/05', '13/05', '14/05', '15/05', '16/05', '17/05', '18/05', '19/05', '20/05'],
			data = [],
			color = 'orange';

		for (let y = 0; y < 7; y++) {
			for (let x = 0; x < 24; x++) {
				data.push({
					x: x + 1,
					y: y + 1,
					r: K.random(0, 10)
				});
			}
		}

		let ctx = $("#bubble-chart").get(0);

		if (ctx) {
			ctx = ctx.getContext('2d');

			let config = {
				type: 'bubble',
				data: {
					labels: labels,
					datasets: [K.extend({}, chartConfig.bubbleDataset(color), {
						label: 'Post (count, day, time)',
						data
					})]
				},
				options: K.extend(true, {}, chartConfig.lineOptions(color), {
					maintainAspectRatio: true,
					aspectRatio: 2.1
				})
			}

			let myChartData = new Chart(ctx, config);
		}
	})();
});
