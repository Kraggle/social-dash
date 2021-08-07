import $ from '../core/jquery/jquery.js';
import Bootstrap from '../core/bootstrap/bootstrap.esm.js';
import Scrollbar from '../plugins/perfect-scrollbar/perfect-scrollbar.js';
import '../plugins/bootstrap-notify.js';
import '../plugins/bootstrap-select.js';
import '../plugins/bootstrap-switch.js';
import K from '../plugins/K.js';
import '../plugins/K.jquery.js';

let sidebarMiniActive = false;

const $html = $('html');

const F = {
	initSidebar() {
		if ($('.sidebar-mini').length != 0)
			sidebarMiniActive = true;

		$('.minimize-sidebar').on('click', function() {
			if (sidebarMiniActive) {
				$('body').removeClass('sidebar-mini');
				sidebarMiniActive = false;
				F.showMessage('Sidebar mini deactivated...');
			} else {
				$('body').addClass('sidebar-mini');
				sidebarMiniActive = true;
				F.showMessage('Sidebar mini activated...');
			}

			// we simulate the window Resize so the charts will get updated in realtime.
			const simulateWindowResize = setInterval(function() {
				window.dispatchEvent(new Event('resize'));
			}, 180);

			// we stop the simulation of Window Resize after the animations are completed
			setTimeout(function() {
				clearInterval(simulateWindowResize);
			}, 1000);
		});

		if (K.isWindows) {
			$('.sidebar .collapse').on('shown.bs.collapse hidden.bs.collapse', function() {
				const sBar = $('.sidebar .sidebar-wrapper').data('scrollbar');
				sBar.update();
			});
		}
	},

	initScrollbars() {
		if (K.isWindows) {
			// if we are on windows OS we activate the perfectScrollbar function

			const sBars = [],
				$els = $('.main-panel, .wrapper-full-page, .sidebar .sidebar-wrapper, .table-responsive'),
				options = {
					wheelSpeed: 2,
					wheelPropagation: true,
					minScrollbarLength: 20,
					suppressScrollX: true
				};

			$els.each(function() {
				const me = $(this),
					sBar = me.data().scrollbar = new Scrollbar(
						this,
						me.hasClass('main-panel') || me.hasClass('wrapper-full-page') ? options : {}
					);
				sBars.push(sBar);
			});

			// Update the scrollbars if the window is resized
			if (sBars.length) {
				$(window).on('resize', function() {
					$.each(sBars, function(i, bar) {
						bar.update();
					});
				});
			}

			$html.addClass('perfect-scrollbar-on');
		} else {
			$html.addClass('perfect-scrollbar-off');
		}
	},

	initNavbar() {
		const $nav = $('.navbar');

		$('#navigation').on('show.bs.collapse', function() {
			$nav.removeClass('navbar-transparent').addClass('bg-white');
		}).on('hide.bs.collapse', function() {
			$nav.addClass('navbar-transparent').removeClass('bg-white');
		});

		$('.navbar-toggle').on('click', function() {
			const me = $(this),
				$html = $('html');

			if ($html.hasClass('nav-open')) {
				$html.removeClass('nav-open');
				setTimeout(() => {
					me.removeClass('toggled');
					$('.bodyClick').remove();
				}, 550);

			} else {
				setTimeout(function() {
					me.addClass('toggled');
				}, 580);

				var div = '<div class="bodyClick"></div>';
				$(div).appendTo('body').on('click', function() {
					$html.removeClass('nav-open');
					setTimeout(() => {
						me.removeClass('toggled');
						$('.bodyClick').remove();
					}, 550);
				});

				$html.addClass('nav-open');
			}
		});

		// const triggerSize = 992,
		// 	$dropdown = $('#notify-panel').closest('.dropdown'),
		// 	$panel = $('.dropdown-menu', $dropdown);

		// $dropdown.on('show.bs.dropdown', function() {
		// 	const width = $(window).width();
		// 	if (width < triggerSize) {
		// 		$dropdown.addClass('dropstart');
		// 		$panel.removeClass('dropdown-menu-end');
		// 	}
		// }).on('hide.bs.dropdown', function() {
		// 	const width = $(window).width();
		// 	if (width < triggerSize) {
		// 		$dropdown.removeClass('dropstart');
		// 		$panel.addClass('dropdown-menu-end');
		// 	}
		// })
	},

	initTooltips() {
		$('[title][title!=""]').each(function() {
			const data = $(this).data();
			if (!data.bsToggle) data.bsToggle = 'tooltip';
			new Bootstrap.Tooltip(this);
		});
	},

	initSelects() {
		const selects = $('.selectpicker');
		if (selects.length != 0) {
			selects.selectpicker({
				iconBase: "fal",
				tickIcon: "fa-check",
				showTick: true
			});
		}
	},

	initSwitches() {
		$('.bootstrap-switch').each(function() {
			const data = $(this).data();

			$(this).bootstrapSwitch({
				onText: data.onText || 'ON',
				offText: data.offText || 'OFF',
				onColor: data.onColor || 'danger',
				offColor: data.offColor || 'default',
			});
		});
	},

	showMessage(message, icon = 'far fa-bell', type = 'primary', time = 4000) {
		try {
			$.notify({
				icon: icon,
				message: message
			}, {
				type: type,
				timer: time,
				placement: {
					from: 'top',
					align: 'right'
				}
			});
		} catch (e) {
			console.error('Notify library is missing, please make sure you have the notifications library added.');
		}
	},

	initCharts() {
		// const $matches = $('[data-match-height]');
		// $matches.each(function() {
		// 	const $me = $(this),
		// 		data = $me.data(),
		// 		id = data.matchHeight,
		// 		$chart = $('canvas', $me);

		// 	if ($chart.length && $chart.data('chart')) {
		// 		data.chart = $chart.data('chart');
		// 		const $body = $('card-body', $me);
		// 		data.paddingLeft = $body.
		// 	}

		// 	if (!$(id).length) return;

		// 	const doScale = () => {
		// 		const height = $(id).height(),
		// 			headerHeight = $('.card-header', $me).height();
		// 		$me.height(height);
		// 		if (data.chart) {
		// 			data.chart.resize($me.width(), height - headerHeight);
		// 		}
		// 	};
		// 	$(window).on('resize', doScale);
		// 	doScale();

		// 	console.log(data);
		// });
	}
}

export default F;
