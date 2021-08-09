const stripe = Stripe($('#payment-form').data('stripe'))

export default () => {

	const numberId = '#number-element',
		expiryId = '#expiry-element',
		cvcId = '#cvc-element',
		formId = '#payment-form',
		elements = stripe.elements({
			fonts: [{ cssSrc: 'https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,600,700,800,900' }]
		});

	const elementStyles = {
		base: {
			fontFamily: 'Montserrat, sans-serif',
			fontSize: '12px',
			color: 'rgb(29, 37, 59)',
			fontWeight: '400',
			lineHeight: '1.428571',
			height: 'calc(2.249999625rem + 2px)',

			'::placeholder': {
				color: 'rgba(0,0,0,0.4)'
			}
		}
	}

	const elementClasses = {
		focus: 'focus',
		empty: 'empty',
		invalid: 'invalid'
	}

	const cardNumber = elements.create('cardNumber', {
		style: elementStyles,
		classes: elementClasses
	});
	cardNumber.mount(numberId);

	const cardExpiry = elements.create('cardExpiry', {
		style: elementStyles,
		classes: elementClasses
	});
	cardExpiry.mount(expiryId);

	const cardCvc = elements.create('cardCvc', {
		style: elementStyles,
		classes: elementClasses
	});
	cardCvc.mount(cvcId);

	registerElements([cardNumber, cardExpiry, cardCvc], $(formId));
}

/**
 * Register the stripe payment method and elements.
 * 
 * @param {object[]} elements The stripe elements.
 * @param {jQueryElement} form The entire form.
 */
function registerElements(elements, form) {

	const secret = form.data('secret');

	// Listen on the form's 'submit' handler...
	form.on('submit', async function(e) {
		if ($('input[name=token]', this).length) return;
		e.preventDefault();

		// Gather additional customer data we may have collected in our form.
		const name = $('input[name=billing-name]').val();

		const { setupIntent, error } = await stripe.confirmCardSetup(
			secret, { payment_method: { card: elements[0], billing_details: { name } } }
		);

		if (error) {
			if (error.type == 'validation_error') {
				// TODO: handle card vaildation errors
			}
			console.log(error);
			return;
		}

		$('<input>', {
			type: 'hidden',
			name: 'token',
			value: setupIntent.payment_method
		}).prependTo(form);

		console.log(setupIntent);

		form.trigger('submit');
	});
}