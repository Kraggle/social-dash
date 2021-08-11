import $ from '../../core/jquery/jquery.js';
import K from '../../plugins/K.js';
import Chart from '../../plugins/chart-js/chart.js';
import chartConfig from './chart-options.js';
import SS from './shared.js';
import dayjs from '../../plugins/dayjs/index.js';

export default (options = {}) => {
	const opts = K.extend(true, {
		chartId: '',
		scales: {},
		page: 'all',
		options: {
			maintainAspectRatio: true,
			aspectRatio: 4
		}
	}, options)

	let $ctx = $(opts.chartId);
	if (!$ctx.length) return;
	const ctx = $ctx.get(0).getContext('2d'),
		type = $ctx.data('type') || 'line';

	const setData = [],
		$card = $ctx.closest('.card'),
		$toggles = $card.find('[data-chart-toggles] input'),
		$scales = $card.find('[data-chart-scale]'),
		$date = $card.find('[data-flatpickr]');

	let chart;

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

	const createChart = () => {
		if (chart) chart.destroy();

		const datasets = [],
			dataValues = [],
			scale = $scales.find(':checked').val() || 'day',
			s = opts.scales[scale];

		let end = dayjs($date.length ? $date.val() : undefined),
			half = Math.ceil(s.count / 2);
		end = end.add(half, scale);

		if (end.isAfter(dayjs())) end = dayjs();

		K.each(setData, (i, set) => {
			let date = end.clone().add(-s.count, scale),
				last;

			const data = [];

			for (let d = 0; d < s.count; d++) {
				data.push({
					x: date.format(scale == 'month' ? "MMM 'YY" : 'DD/MM'),
					y: last = K.random(s.min, s.max)
				});
				date = date.clone().add(1, scale);
				dataValues.push(last);
			}

			datasets.push(K.extend({}, chartConfig.dataset(type, set.color, ctx, true), {
				hidden: set.hidden,
				label: set.label,
				data
			}));

			set.index = i;
		});

		let config = {
			type,
			data: { datasets },
			options: K.extend(true, {}, chartConfig.options(type), {
				scales: {
					yAxes: {
						suggestedMin: Math.max(0, Math.min.apply(null, dataValues) - 10),
						suggestedMax: Math.max.apply(null, dataValues) + 10
					}
				}
			}, opts.options)
		}

		chart = new Chart(ctx, config);
		$ctx.data('chart', chart);
	}
	createChart($scales.find(':checked').val());

	$scales.find('input').on('change', () => {
		const $checked = $scales.find(':checked');

		SS.setPageCookie(opts.page, {
			[$checked.attr('name')]: $checked.attr('id')
		});

		createChart();
	});

	$toggles.on('change', function() {
		const o = $(this).data('options'),
			hidden = o.hidden = !$(this).is(':checked');

		$toggles.each(function() {
			SS.setPageCookie(opts.page, {
				[$(this).attr('id')]: $(this).is(':checked')
			});
		});

		chart[!hidden ? 'show' : 'hide'](o.index);
	});

	$date.flatpickr();
	$date.on('change', function() {
		SS.setPageCookie(opts.page, {
			[$(this).attr('id')]: $(this).val()
		});

		createChart();
	})
}