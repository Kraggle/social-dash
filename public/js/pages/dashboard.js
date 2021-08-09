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
			color = 'pink';

		let ctx = $('#performance-chart').get(0);

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
					},
					maintainAspectRatio: true,
					aspectRatio: 4
				})
			}

			let myChartData = new Chart(ctx, config);
		}
	})();

	const testData = [{
		id: 'aua',
		value: 7.45,
		last: 7.98
	}, {
		id: 'engagement',
		value: 17941,
		last: 16042
	}, {
		id: 'followers',
		value: 4598,
		last: 3912
	}, {
		id: 'likes',
		value: 14726,
		last: 12861
	}, {
		id: 'comments',
		value: 1892,
		last: 1983
	}, {
		id: 'posts',
		value: 12,
		last: 10
	}];

	K.each(testData, (i, data) => {
		const $num = $(`#num-${data.id}`),
			$dir = $(`#dir-${data.id}`),
			$inc = $(`#inc-${data.id}`),
			type = $num.data('type');

		let name = $inc.data('value'),
			change = (data.value - data.last) / data.last * 100,
			up = change >= 0;

		$num.text(`${type == 'number' ? '+' : ''}${K.noCommas(data.value)}${type == 'percent' ? '%' : ''}`);
		$inc.text(`${Math.round(Math.abs(change))}% ${name} ${up ? 'Increase' : 'Decrease'}`);
		$dir[`${up ? 'add' : 'remove'}Class`]('fa-arrow-up')[`${up ? 'remove' : 'add'}Class`]('fa-arrow-down');
	});
});
