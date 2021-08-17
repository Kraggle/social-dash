import $ from '../core/jquery/jquery.js';
import '../plugins/flatpickr/flatpickr.js';
import Bootstrap from '../core/bootstrap/bootstrap.esm.js';
import Scrollbar from '../plugins/perfect-scrollbar/perfect-scrollbar.js';
import '../plugins/bootstrap-notify.js';
import '../plugins/bootstrap-select.js';
import '../plugins/bootstrap-switch-button.js';
import K from '../plugins/K.js';
import '../plugins/K.jquery.js';
import SS from '../pages/shared/shared.js';

const $html = $('html');

const F = {
	initTextareas() {
		$('textarea.form-control').each(function() {
			const $group = $(this).parent();
			if ($group.hasClass('input-group, form-group')) {
				// $group.addClass('perfect-scrollbar');
				$(this).wrap($('<div />', {
					class: 'grow-wrap'
				}));
				$(this).on('input', function() {
					$(this).parent().get(0).dataset.replicatedValue = $(this).val();
				});

				$(this).parent().get(0).dataset.replicatedValue = $(this).val()
			}
		});
	},

	initSidebar() {

		$('.minimize-sidebar').on('click', function() {
			const active = !$('.sidebar-mini').length;
			$('body')[`${active ? 'add' : 'remove'}Class`]('sidebar-mini');

			SS.setPageCookie('all', {
				sidebar: active
			});

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
				$els = $('.main-panel, .wrapper-full-page, .sidebar .sidebar-wrapper, .table-responsive, .perfect-scrollbar'),
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

	initForms() {
		$('input').each(function() {
			$(this).hasAttr('disabled') && $(this).disable();
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

	initDatePickers() {
		$('[data-flatpickr]').each(function() {
			$(this).data().flatpickr =
				$(this).flatpickr({
					positionElement: $(this).closest('.input-group').get(0)
				});
		});

		$('.main-panel').on('scroll', function() {
			const $flatpickr = $('.flatpickr-input + input.active');
			if ($flatpickr.length) {
				const flatpickr = $flatpickr.prev().data().flatpickr || {};
				flatpickr.close();
				flatpickr.open();
			}
		})
	},

	initInputLabels() {
		const $els = $('.input-label').siblings('.form-control'),
			handleLabel = function() {
				$(this).each(function() {
					const action = `${$(this).val() ? 'add' : 'remove'}Class`;
					$(this)[action]('has-value');
					$(this).closest('.input-group')[action]('has-value');
				});
			};
		handleLabel.call($els);
		$els.on('change blur input keyup', handleLabel);
	}
}

export default F;
