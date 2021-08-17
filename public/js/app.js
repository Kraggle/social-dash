import $ from './core/jquery/jquery.js';
// import Bootstrap from './core/bootstrap/bootstrap.esm.js';
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

	// transition the cards onto the screen
	// const randMax = 300, randMin = 0;
	// $('.card:not(.no-animate)').each(function() {
	// 	const rX = K.random(-200, 200),
	// 		rY = K.random(-200, 200),
	// 		r = K.random(-35, 35),
	// 		s = K.random(30, 80) / 100;
	// 	$(this).css({
	// 		transform: `translate(${rX}%, ${rY}%) rotate(${r}deg) scale(${s})`,
	// 	});

	// 	setTimeout(() => {
	// 		$(this).css({
	// 			transition: 'all 0.3s cubic-bezier(.38,.01,.38,1.49)',
	// 			transform: 'translate(0, 0) rotate(0) scale(1)',
	// 			opacity: '1',
	// 			visibility: 'visible'
	// 		});
	// 	}, K.random(randMax, randMin));
	// });

	$('.delete-alert').on('click', handler.deleteAlert);

	// Used to set the selected account
	$('#account-selector').on('change', handler.selectAccount);
	handler.selectAccount();

	$('.dropdown.keep-open').on('hide.bs.dropdown', function(e) {
		if ($(this).find(e.clickEvent.target).length) return false;
		return true;
	});
});
