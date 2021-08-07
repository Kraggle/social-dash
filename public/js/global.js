import Swal from './libs/sweetalert2/sweetalert2.js';
import K from './src/K.js';

$(() => {
	$('.delete-alert').on('click', deleteAlert);

	// Used to set the selected account
	$('#account-selector').on('change', selectAccount);
	selectAccount();
});

/**
 * This is used to set the visably selected account.
 */
function selectAccount() {
	const $el = $('#account-selector'),
		selected = $el.val();
	if ($el.data('selected') == selected) return;
	$el.data('selected', selected);
	K.cookie.set('selected-account', selected, { expires: 64 });
	console.log(selected);
}

function deleteAlert(e) {
	e.preventDefault();

	const swal = Swal.mixin({
		customClass: {
			confirmButton: 'btn btn-success',
			cancelButton: 'btn btn-danger'
		},
		buttonsStyling: false
	})

	swal.fire({
		title: 'Are you sure?',
		text: "You won't be able to revert this!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Yes, delete it!',
		cancelButtonText: 'No, cancel!',
		reverseButtons: true
	}).then((result) => {
		if (result.isConfirmed) {
			swal.fire(
				'Deleted!',
				'Your file has been deleted.',
				'success'
			)
			setTimeout(() => {
				this.parentElement.submit();
			}, 1000);
		} else if (result.dismiss === Swal.DismissReason.cancel) {
			swal.fire(
				'Cancelled',
				'Delete canceled :)',
				'error'
			)
		}
	});
}