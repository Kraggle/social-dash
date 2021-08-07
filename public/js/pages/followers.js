import $ from '../core/jquery/jquery.js';
import Chart from '../plugins/chart-js/chart.js';
import chartConfig from './shared/chart-options.js';
import K from '../plugins/K.js';

$(() => {

	(() => {
		const labels = ['09/05', '10/05', '11/05', '12/05', '13/05', '14/05', '15/05', '16/05', '17/05', '18/05', '19/05', '20/05'],
			data = [30, 40, 60, 40, 50, 70, 30, 50, 40, 60, 60, 40],
			color = 'orange';
		let ctx = $('#follower-chart').get(0);

		if (ctx) {
			ctx = ctx.getContext('2d');

			const config = {
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

		/* const myChartData = */ new Chart(ctx, config);
		}
	})();

	(() => {
		const labels = ['JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
			data = [
				[80, 100, 70, 80, 120, 160],
				[60, 80, 40, 70, 90, 80]
			],
			allData = data[0].concat(data[1]),
			color = 'purple';
		let ctx = $('#follow-vs-unfollow-chart').get(0);

		if (ctx) {
			ctx = ctx.getContext('2d');

			const config = {
				type: 'bar',
				data: {
					labels: labels,
					datasets: [
						K.extend({}, chartConfig.barDataset('orange', ctx, true), {
							data: data[0]
						}),
						K.extend({}, chartConfig.barDataset('blue', ctx, true), {
							data: data[1]
						})
					]
				},
				options: K.extend(true, {}, chartConfig.barOptions('purple'), {
					scales: {
						yAxes: {
							min: Math.max(0, Math.min.apply(null, allData) - 10),
							max: Math.max.apply(null, allData) + 10
						}
					}
				})
			}

		/* const myChartData = */ new Chart(ctx, config);
		}
	})();

	(() => {
		const labels = ['JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
			data = [1000, 2200, 3700, 4200, 7200, 8800],
			color = 'green';
		let ctx = $("#follow-all-time-chart").get(0);

		if (ctx) {
			ctx = ctx.getContext('2d');

			const config = {
				type: 'line',
				data: {
					labels: labels,
					datasets: [K.extend({}, chartConfig.lineDataset(color, ctx, true), {
						data
					})]
				},
				options: K.extend(true, {}, chartConfig.lineOptions('blue'), {
					scales: {
						yAxes: {
							suggestedMin: Math.min.apply(null, data) - 10,
							suggestedMax: Math.max.apply(null, data) + 10
						}
					}
				})
			}

		/* const myChartData = */ new Chart(ctx, config);
		}
	})();

});
