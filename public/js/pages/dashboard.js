import $ from '../core/jquery/jquery.js';
import Chart from '../plugins/chart-js/chart.js';
import chartConfig from './shared/chart-options.js';
import K from '../plugins/K.js';
import Maps from './shared/map-data.js';
import dayjs from '../plugins/dayjs/index.js';

$(() => {
	Maps.init();

	(() => {
		let $ctx = $('#performance-chart');

		if ($ctx.length) {
			const ctx = $ctx.get(0).getContext('2d');

			const setData = [],
				$toggles = $ctx.closest('.card').find('[data-chart-toggles] input'),
				$scales = $ctx.closest('.card').find('[data-chart-scale] input');

			$toggles.each(function() {
				const data = $(this).data();
				data.options = {
					color: data.color,
					label: data.label,
					btn: this,
					hidden: !$(this).is(':checked')
				};
				setData.push(data.options);
			});

			const datasets = [],
				dataValues = [],
				dayCount = 14,
				min = 0,
				max = 300;

			K.each(setData, (i, set) => {
				let date = dayjs().add(-dayCount, 'day'),
					last;

				const data = [];

				for (let d = 0; d < dayCount; d++) {
					data.push({
						x: date.format('DD/MM'),
						y: last = K.random(min, max)
					});
					date = date.clone().add(1, 'day');
					dataValues.push(last);
				}

				datasets.push(K.extend({}, chartConfig.lineDataset(set.color, ctx, true), {
					hidden: set.hidden,
					label: set.label,
					data
				}));

				set.index = i;
			});

			let config = {
				type: 'line',
				data: { datasets },
				options: K.extend(true, {}, chartConfig.lineOptions(), {
					scales: {
						yAxes: {
							suggestedMin: Math.max(0, Math.min.apply(null, dataValues) - 10),
							suggestedMax: Math.max.apply(null, dataValues) + 10
						}
					},
					maintainAspectRatio: true,
					aspectRatio: 4
				})
			}

			const chart = new Chart(ctx, config);
			$ctx.data('chart', chart);

			$toggles.on('change', function() {
				const options = $(this).data('options');
				chart[$(this).is(':checked') ? 'show' : 'hide'](options.index);
			})
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

// var randomScalingFactor = function() {
// 	return Math.round(Math.random() * 100);
// };

// var chartColors = {
// 	red: 'rgb(255, 99, 132)',
// 	orange: 'rgb(255, 159, 64)',
// 	yellow: 'rgb(255, 205, 86)',
// 	green: 'rgb(75, 192, 192)',
// 	blue: 'rgb(54, 162, 235)',
// 	purple: 'rgb(153, 102, 255)',
// 	grey: 'rgb(231,233,237)'
// };

// var color = Chart.helpers.color;
// var config = {
// 	type: 'radar',
// 	data: {
// 		labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
// 		datasets: [{
// 			label: "My First dataset",
// 			backgroundColor: color(chartColors.red).alpha(0.2).rgbString(),
// 			borderColor: chartColors.red,
// 			pointBackgroundColor: chartColors.red,
// 			data: [
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor()
// 			]
// 		}, {
// 			label: "My Second dataset",
// 			backgroundColor: color(chartColors.blue).alpha(0.2).rgbString(),
// 			borderColor: chartColors.blue,
// 			pointBackgroundColor: chartColors.blue,
// 			data: [
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor()
// 			]
// 		}, {
// 			label: "My Third dataset",
// 			backgroundColor: color(chartColors.orange).alpha(0.2).rgbString(),
// 			borderColor: chartColors.orange,
// 			pointBackgroundColor: chartColors.orange,
// 			data: [
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor(),
// 				randomScalingFactor()
// 			]
// 		},]
// 	},
// 	options: {
// 		legend: {
// 			position: 'top',
// 			labels: {
// 				fontColor: 'rgb(255, 99, 132)'
// 			},
// 			onHover: function(event, legendItem) {
// 				document.getElementById("canvas").style.cursor = 'pointer';
// 			},
// 			onClick: function(e, legendItem) {
// 				var index = legendItem.datasetIndex;
// 				var ci = this.chart;
// 				var alreadyHidden = (ci.getDatasetMeta(index).hidden === null) ? false : ci.getDatasetMeta(index).hidden;

// 				ci.data.datasets.forEach(function(e, i) {
// 					var meta = ci.getDatasetMeta(i);

// 					if (i !== index) {
// 						if (!alreadyHidden) {
// 							meta.hidden = meta.hidden === null ? !meta.hidden : null;
// 						} else if (meta.hidden === null) {
// 							meta.hidden = true;
// 						}
// 					} else if (i === index) {
// 						meta.hidden = null;
// 					}
// 				});

// 				ci.update();
// 			},
// 		},
// 		tooltips: {
// 			custom: function(tooltip) {
// 				if (!tooltip.opacity) {
// 					document.getElementById("canvas").style.cursor = 'default';
// 					return;
// 				}
// 			}
// 		},
// 		title: {
// 			display: true,
// 			text: 'Chart.js Radar Chart'
// 		},
// 		scale: {
// 			ticks: {
// 				beginAtZero: true
// 			}
// 		}
// 	}
// };

// window.onload = function() {
// 	window.myRadar = new Chart(document.getElementById("canvas"), config);
// };