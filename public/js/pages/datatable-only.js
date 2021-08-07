import $ from '../core/jquery/jquery.js';
import '../plugins/datatables.js';
import { timed } from '../plugins/K.js';

const timer = timed();

$(() => {
	$.extend(true, $.fn.dataTable.defaults, {
		'columnDefs': [{ orderable: false, targets: 'dt-nosort' }]
	});

	$('#datatable, [is-datatable]').each(function() {
		$(this).fadeIn(1100).DataTable({
			pagingType: 'full_numbers',
			lengthMenu: [
				[10, 25, 50, -1],
				[10, 25, 50, "All"]
			],
			responsive: true,
			language: {
				search: "_INPUT_",
				searchPlaceholder: $(this).data('searchPlaceholder') || 'Search...',
			}
		})
	});
});
