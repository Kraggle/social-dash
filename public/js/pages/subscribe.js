import { K } from '../plugins/K.js';
import stripeForm from './shared/stripeForm.js';

$(() => {
	stripeForm();

	const $check = $('#check-policy'),
		$error = $('#policy-error'),
		$form = $('#pay-popup');

	$('#pay-now').on('click', function() {
		if (!$check.is(':checked')) {
			$error.text('You must accept the terms and conditions.');
			return;
		}

		$form.css({
			visibility: 'visible',
			opacity: 1
		})
	});

	$check.on('change', function() {
		$error.text('');
	});

	$('#close-btn').on('click', function() {
		$form.css({
			visibility: 'hidden',
			opacity: 0
		})
	});

	$('#radio-package').on('change', 'input[name=package_id]', () => {
		const id = $('input[name=package_id]:checked').val();
		$('#payment-form input[name=package_id]').val(id);
	});

	setInterval(() => {
		let next = $('.img-rotator img:not(.hidden)').next();
		$('.img-rotator img').addClass('hidden');
		if (!next.length) next = $('.img-rotator img').first();
		next.removeClass('hidden');
	}, 3000);


});
