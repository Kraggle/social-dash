import $ from './core/jquery/jquery.js';
import Bootstrap from './core/bootstrap/bootstrap.esm.js';
import Theme from './imports/functionality.js';
import K from './plugins/K.js';
import handler from './imports/handlers.js';

$(() => {

	Theme.initTextareas();
	Theme.initScrollbars();
	Theme.initNavbar();
	Theme.initSidebar();
	Theme.initTooltips();
	Theme.initSelects();
	Theme.initForms();
	Theme.initDatePickers();
	Theme.initInputLabels();

	$('.delete-alert').on('click', handler.deleteAlert);

	// Used to set the selected account
	$('#account-selector').on('change', handler.selectAccount);
	handler.selectAccount();

	$('.dropdown.keep-open').on('hide.bs.dropdown', function(e) {
		if ($(this).find(e.clickEvent.target).length) return false;
		return true;
	});

	const $life = $('.modal[data-lifetime]');
	if ($life.length) {
		const lifetime = parseInt($life.data('lifetime')) * 60000,
			modal = new Bootstrap.Modal($life.get(0)),
			timeout = 45000,
			$time = $('#time-left');
		let timedOut, timeInterval, timeLeft = timeout / 1000;

		const startLifetime = () => {
			setTimeout(() => {
				modal.show();

				timedOut = setTimeout(() => {
					window.location.reload();
				}, timeout);

				$time.text(timeLeft);
				timeInterval = setInterval(() => {
					$time.text(timeLeft--);
				}, 1000);

			}, lifetime - timeout);
		}
		startLifetime();

		$('#resume-session').on('click', function() {
			modal.hide();
			clearTimeout(timedOut);
			clearInterval(timeInterval);

			$.ajax({
				dataType: "json",
				type: 'POST',
				url: '/keep-alive',
				complete: function() {
					startLifetime();
					timeLeft = timeout / 1000
				}
			});
		});
	}
});
