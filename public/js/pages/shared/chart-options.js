import K from '../../plugins/K.js';
import colors from './colors.js';

class Defaults {
	tooltip = {
		backgroundColor: '#f5f5f5',
		titleColor: '#333',
		bodyColor: '#666',
		bodySpacing: 4,
		padding: 12,
		mode: "nearest",
		intersect: false,
		position: "nearest"
	}

	lineOptions = {
		maintainAspectRatio: false,
		layout: {
			// padding: 20
		},
		responsive: true,
		scales: {
			yAxes: {
				barPercentage: 1.6,
				grid: {
					drawBorder: false,
					color: 'transparent',
					zeroLineColor: "transparent",
				},
				ticks: {
					padding: 20,
					fontColor: colors.hex.blue
				}
			},
			xAxes: {
				barPercentage: 1.6,
				grid: {
					drawBorder: false,
					color: colors.alpha('blue', 0.1),
					zeroLineColor: "transparent",
				},
				ticks: {
					padding: 20,
					fontColor: colors.hex.blue
				}
			}
		},
		plugins: {
			legend: {
				display: false
			},
			tooltip: this.tooltip
		}
	}

	lineDataset = {
		label: '',
		fill: true,
		borderColor: colors.hex.blue,
		borderWidth: 2,
		pointBackgroundColor: colors.hex.blue,
		pointBorderColor: 'transparent',
		pointHoverBackgroundColor: colors.hex.blue,
		pointBorderWidth: 20,
		pointHoverRadius: 4,
		pointHoverBorderWidth: 15,
		pointRadius: 4,
		tension: 0.4,
	}

	barOptions = {
		maintainAspectRatio: false,
		layout: {
			padding: 20,
		},
		responsive: true,
		scales: {
			yAxes: [{
				grid: {
					drawBorder: false,
					color: colors.alpha('blue', 0.1),
					zeroLineColor: 'transparent',
				},
				ticks: {
					fontColor: colors.hex.blue
				}
			}],

			xAxes: [{
				grid: {
					drawBorder: false,
					color: colors.alpha('blue', 0.1),
					zeroLineColor: 'transparent',
				},
				ticks: {
					fontColor: colors.hex.blue
				}
			}]
		},
		plugins: {
			legend: {
				display: false
			},
			tooltips: this.tooltip
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
			yAxes: [{
				grid: {
					// drawBorder: false,
					color: colors.alpha('blue', 0.1),
					// zeroLineColor: 'transparent',
				},
				ticks: {
					fontColor: colors.hex.blue
				}
			}],

			xAxes: [{
				grid: {
					// drawBorder: false,
					color: colors.alpha('blue', 0.1),
					// zeroLineColor: 'transparent',
				},
				ticks: {
					fontColor: colors.hex.blue
				}
			}]
		},
		plugins: {
			legend: {
				display: false
			},
			tooltips: this.tooltip
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
	lineDataset(color = 'blue', ctx = null, gradient = null) {
		if (gradient && ctx) {
			gradient = ctx.createLinearGradient(0, 150, 0, 0);
			gradient.addColorStop(1, colors.alpha(color, 0.3));
			gradient.addColorStop(0.4, colors.alpha(color, 0.05));
			gradient.addColorStop(0, colors.alpha(color, 0));
		}

		return K.extend({}, defaults.lineDataset, {
			borderColor: colors.hex[color],
			backgroundColor: gradient || colors.alpha(color, 0.1),
			pointBackgroundColor: colors.hex[color],
			pointHoverBackgroundColor: colors.hex[color],
			pointBorderColor: colors.alpha(color, 0),
		});
	},

	lineOptions(color = 'blue') {
		return K.extend(true, {}, defaults.lineOptions, {
			scales: {
				yAxes: {
					ticks: {
						fontColor: colors.hex[color]
					}
				},
				xAxes: {
					grid: {
						color: colors.alpha(color, 0.1)
					},
					ticks: {
						fontColor: colors.hex[color]
					}
				}
			}
		});
	},

	barDataset(color = 'blue', ctx = null, gradient = null) {
		let hoverGradient;
		if (gradient && ctx) {
			gradient = ctx.createLinearGradient(0, 150, 0, 0);
			gradient.addColorStop(1, colors.alpha(color, 0.8));
			gradient.addColorStop(0.4, colors.alpha(color, 0.55));
			gradient.addColorStop(0, colors.alpha(color, 0.5));

			hoverGradient = ctx.createLinearGradient(0, 150, 0, 0);
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

	barOptions(color = 'blue') {
		return K.extend(true, {}, defaults.barOptions, {
			scales: {
				yAxes: [{
					grid: {
						color: colors.alpha(color, 0.1)
					},
					ticks: {
						fontColor: colors.hex[color]
					}
				}],

				xAxes: [{
					grid: {
						color: colors.alpha(color, 0.1)
					},
					ticks: {
						fontColor: colors.hex[color]
					}
				}]
			}
		});
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

	bubbleOptions(color = 'blue') {
		return K.extend(true, {}, defaults.barOptions, {
			scales: {
				yAxes: [{
					grid: {
						color: colors.alpha(color, 0.1)
					},
					ticks: {
						fontColor: colors.hex[color]
					}
				}],

				xAxes: [{
					grid: {
						color: colors.alpha(color, 0.1)
					},
					ticks: {
						fontColor: colors.hex[color]
					}
				}]
			}
		});
	}
}