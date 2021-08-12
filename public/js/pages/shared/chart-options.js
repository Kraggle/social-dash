import K from '../../plugins/K.js';
import colors from './colors.js';
import Chart from '../../plugins/chart-js/chart.js';

Chart.defaults.font.family = "Montserrat";

const getHourOfDay = num => {
	if (num < 0) num += 24;
	if (num > 24) num -= 24;
	if (!num) return '12am';
	if (num < 12) return `${num}am`;
	if (num == 12) return `${num}pm`;
	return `${num - 12}pm`;
};

const getDayOfWeek = num => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'][num - 1];

class Defaults {

	tooltip = {
		backgroundColor: '#f5f5f5',
		titleColor: '#333',
		bodyColor: '#666',
		bodySpacing: 4,
		padding: 12,
		mode: "nearest",
		intersect: true,
		position: "average",
	}

	legend = {
		display: false
	}

	lineOptions = {
		maintainAspectRatio: false,
		layout: {
			// padding: 20
		},
		responsive: true,
		scales: {
			y: {
				barPercentage: 1.6,
				grid: {
					drawBorder: false,
					color: 'transparent',
					zeroLineColor: "transparent",
				},
				ticks: {
					padding: 20,
					// color: colors.hex.blue
				}
			},
			x: {
				barPercentage: 1.6,
				grid: {
					drawBorder: false,
					color: colors.alpha('blue', 0.1),
					zeroLineColor: "transparent",
				},
				ticks: {
					padding: 20,
					// color: colors.hex.blue
				}
			}
		},
		plugins: {
			legend: this.legend,
			tooltip: this.tooltip
		}
	}

	lineDataset = {
		label: '',
		// line styling
		fill: true,
		backgroundColor: 'transparent',
		borderCapStyle: 'round', // butt || round || square, 
		borderColor: colors.hex.blue,
		borderDash: [], // array of numbers
		borderWidth: 2,
		tension: 0.4,
		// point styling
		pointBackgroundColor: colors.hex.blue,
		pointBorderColor: 'transparent',
		pointBorderWidth: 2,
		pointHitRadius: 20,
		pointRadius: 4,
		pointHoverBackgroundColor: colors.hex.blue,
		pointHoverRadius: 7,
		pointHoverBorderWidth: 4,
	}

	barOptions = {
		maintainAspectRatio: false,
		layout: {
			padding: 20,
		},
		responsive: true,
		scales: {
			y: {
				grid: {
					drawBorder: false,
					color: colors.alpha('blue', 0.1),
					zeroLineColor: 'transparent',
				},
				ticks: {
					// color: colors.hex.blue
				}
			},

			x: {
				grid: {
					drawBorder: false,
					color: colors.alpha('blue', 0.1),
					zeroLineColor: 'transparent',
				},
				ticks: {
					// color: colors.hex.blue
				}
			}
		},
		plugins: {
			legend: this.legend,
			tooltip: this.tooltip
		}
	}

	barDataset = {
		label: '',
		fill: true,
		backgroundColor: colors.hex.blue,
		hoverBackgroundColor: colors.hex.blue,
		borderColor: colors.hex.blue,
		borderWidth: 2,
		borderDash: [],
		borderDashOffset: 0.0,
	}

	bubbleOptions = {
		maintainAspectRatio: false,
		layout: {
			padding: 20,
		},
		responsive: true,
		scales: {
			y: {
				grid: {
					borderColor: 'transparent',
					color: colors.alpha('black', 0.1),
				},
				ticks: {
					callback: function(value) {
						return getDayOfWeek(this.getLabelForValue(value));
					}
				}
			},

			x: {
				min: -1,
				max: 24,
				// grace: 1,
				grid: {
					borderColor: 'transparent',
					color: colors.alpha('black', 0.1),
				},
				ticks: {
					// color: colors.hex.blue,
					callback: function(value, index) {
						return getHourOfDay(parseInt(this.getLabelForValue(value)));
					}
				}
			}
		},
		plugins: {
			legend: this.legend,
			tooltip: K.extend(true, {}, this.tooltip, {
				callbacks: {
					label: function(context) {
						// console.log(context);
						return `${context.label} - ${getDayOfWeek(context.raw.y)} ${getHourOfDay(context.raw.x)}: ${context.raw.r}`;
					}
				}
			})
		}
	}

	bubbleDataset = {
		label: '',
		fill: true,
		backgroundColor: colors.hex.blue,
		hoverBackgroundColor: colors.hex.blue,
		borderColor: colors.hex.blue,
		borderWidth: 0,
		borderDash: [],
		borderDashOffset: 0.0,
		pointBackgroundColor: colors.hex.blue,
		pointBorderColor: 'transparent',
		pointHoverBackgroundColor: colors.hex.blue,
		pointBorderWidth: 20,
		pointHoverRadius: 4,
		pointHoverBorderWidth: 15,
		pointRadius: 4,
	}
}

const defaults = new Defaults();

export default {

	getHeight(ctx) {
		return ($(ctx).data('height') || 280) * .71;
	},

	dataset(type = 'line', color = 'blue', ctx = null, gradient = null) {
		return this[`${type}Dataset`](color, ctx, gradient);
	},

	options(type = 'line') {
		return this[`${type}Options`]();
	},

	lineDataset(color = 'blue', ctx = null, gradient = null) {
		if (gradient && ctx) {
			const height = this.getHeight(ctx);
			ctx = ctx.getContext('2d');
			gradient = ctx.createLinearGradient(0, height, 0, 0);
			gradient.addColorStop(1, colors.alpha(color, 0.3));
			// gradient.addColorStop(0.4, colors.alpha(color, 0.05));
			gradient.addColorStop(0, colors.alpha(color, 0));
		}

		return K.extend({}, defaults.lineDataset, {
			borderColor: colors.hex[color],
			backgroundColor: gradient || colors.alpha(color, 0.1),
			pointBackgroundColor: colors.hex[color],
			pointHoverBackgroundColor: colors.hex[color],
			// pointBorderColor: colors.hex['white'],
		});
	},

	lineOptions() {
		return K.extend(true, {}, defaults.lineOptions);
	},

	barDataset(color = 'blue', ctx = null, gradient = null) {
		let hoverGradient;
		if (gradient && ctx) {
			const height = this.getHeight(ctx);
			ctx = ctx.getContext('2d');
			gradient = ctx.createLinearGradient(0, height, 0, 0);
			gradient.addColorStop(1, colors.alpha(color, 0.8));
			gradient.addColorStop(0.4, colors.alpha(color, 0.55));
			gradient.addColorStop(0, colors.alpha(color, 0.5));

			hoverGradient = ctx.createLinearGradient(0, height, 0, 0);
			hoverGradient.addColorStop(1, colors.alpha(color, 1));
			hoverGradient.addColorStop(0.4, colors.alpha(color, 0.75));
			hoverGradient.addColorStop(0, colors.alpha(color, 0.7));
		}

		return K.extend({}, defaults.barDataset, {
			borderColor: colors.hex[color],
			backgroundColor: gradient || colors.alpha(color, 0.6),
			hoverBackgroundColor: hoverGradient || colors.alpha(color, 0.9),
		});
	},

	barOptions() {
		return K.extend(true, {}, defaults.barOptions);
	},

	bubbleDataset(color = 'blue') {
		return K.extend({}, defaults.bubbleDataset, {
			backgroundColor: colors.hex[color],
			hoverBackgroundColor: colors.hex[color],
			borderColor: colors.hex[color],
			pointBackgroundColor: colors.hex[color],
			pointHoverBackgroundColor: colors.hex[color]
		});
	},

	bubbleOptions() {
		return K.extend(true, {}, defaults.bubbleOptions);
	}
}