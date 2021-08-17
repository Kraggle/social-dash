import $ from '../../core/jquery/jquery.js';

$(() => {
	$('input').on('keyup', function(e) {
		if (e.key == 'Enter')
			$(this).closest('form').submit();
	});
});
