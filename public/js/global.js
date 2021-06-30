import Swal from './libs/sweetalert2/sweetalert2.js';

$(() => {
	$('.delete-alert').on('click', deleteAlert);
});

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