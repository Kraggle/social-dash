import $ from './core/jquery/jquery.js';
// import Bootstrap from './core/bootstrap/bootstrap.esm.js';
import Theme from './imports/functionality.js';
import K from './plugins/K.js';

$(() => {

	Theme.initScrollbars();
	Theme.initNavbar();
	Theme.initSidebar();
	Theme.initTooltips();
	Theme.initSelects();
	Theme.initSwitches();
	// Theme.initCharts();

	const randMax = 300, randMin = 0;
	$('.card').each(function() {
		const rX = K.random(-200, 200),
			rY = K.random(-200, 200);
		$(this).css({
			transition: 'all 0.3s cubic-bezier(.38,.01,.38,1.49)',
			transform: `translate(${rX}%, ${rY}%)`
		});

		setTimeout(() => {
			$(this).css({
				transform: 'translate(0, 0)',
				opacity: '1'
			});
		}, K.random(randMax, randMin));
	});
});
