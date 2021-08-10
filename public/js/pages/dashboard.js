import $ from '../core/jquery/jquery.js';
import K from '../plugins/K.js';
import Maps from './shared/map-data.js';
import Chart from './shared/chart.js';

$(() => {
	const page = $('[data-page]').data('page');

	Maps.init();

	Chart({
		chartId: '#performance-chart',
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

	// (() => {
	// 	let $ctx = $('#performance-chart');
	// 	if (!$ctx.length) return;
	// 	const ctx = $ctx.get(0).getContext('2d');

	// 	const setData = [],
	// 		scales = { // These can be changed tp generate different results
	// 			day: {
	// 				count: 14,
	// 				min: 0,
	// 				max: 300
	// 			},
	// 			week: {
	// 				count: 14,
	// 				min: 0,
	// 				max: 2000
	// 			},
	// 			month: {
	// 				count: 12,
	// 				min: 1000,
	// 				max: 10000
	// 			}
	// 		},
	// 		$toggles = $ctx.closest('.card').find('[data-chart-toggles] input'),
	// 		$scales = $ctx.closest('.card').find('[data-chart-scale]');

	// 	let chart;

	// 	$toggles.each(function() {
	// 		const data = $(this).data();
	// 		data.options = {
	// 			color: data.color,
	// 			label: data.label,
	// 			btn: this,
	// 			hidden: !$(this).is(':checked')
	// 		};
	// 		setData.push(data.options);
	// 	});

	// 	const createChart = (scale = 'day') => {
	// 		if (chart) chart.destroy();

	// 		const datasets = [],
	// 			dataValues = [],
	// 			opts = scales[scale];

	// 		K.each(setData, (i, set) => {
	// 			let date = dayjs().add(-opts.count, scale),
	// 				last;

	// 			const data = [];

	// 			for (let d = 0; d < opts.count; d++) {
	// 				data.push({
	// 					x: date.format(scale == 'month' ? "MMM 'YY" : 'DD/MM'),
	// 					y: last = K.random(opts.min, opts.max)
	// 				});
	// 				date = date.clone().add(1, scale);
	// 				dataValues.push(last);
	// 			}

	// 			datasets.push(K.extend({}, chartConfig.lineDataset(set.color, ctx, true), {
	// 				hidden: set.hidden,
	// 				label: set.label,
	// 				data
	// 			}));

	// 			set.index = i;
	// 		});

	// 		let config = {
	// 			type: 'line',
	// 			data: { datasets },
	// 			options: K.extend(true, {}, chartConfig.lineOptions(), {
	// 				scales: {
	// 					yAxes: {
	// 						suggestedMin: Math.max(0, Math.min.apply(null, dataValues) - 10),
	// 						suggestedMax: Math.max.apply(null, dataValues) + 10
	// 					}
	// 				},
	// 				maintainAspectRatio: true,
	// 				aspectRatio: 4
	// 			})
	// 		}

	// 		chart = new Chart(ctx, config);
	// 		$ctx.data('chart', chart);
	// 	}
	// 	createChart($scales.find(':checked').val());

	// 	$scales.find('input').on('change', () => {
	// 		const $checked = $scales.find(':checked');

	// 		SS.setPageCookie(page, {
	// 			[$checked.attr('name')]: $checked.attr('id')
	// 		});

	// 		createChart($checked.val());
	// 	});

	// 	$toggles.on('change', function() {
	// 		const options = $(this).data('options'),
	// 			hidden = options.hidden = !$(this).is(':checked');

	// 		$toggles.each(function() {
	// 			SS.setPageCookie(page, {
	// 				[$(this).attr('id')]: $(this).is(':checked')
	// 			});
	// 		});

	// 		chart[!hidden ? 'show' : 'hide'](options.index);
	// 	});
	// })();

	// fill the stat cards
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
