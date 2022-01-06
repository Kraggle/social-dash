import $ from '../core/jquery/jquery.js';
import FullCalendar from '../plugins/full-calendar/fullcalendar.js';
import Scrollbar from '../plugins/perfect-scrollbar/perfect-scrollbar.js';
import K from '../plugins/K.js';

$(() => {

	const $calendar = $('full-calendar').get(0),
		today = new Date(),
		y = today.getFullYear(),
		m = today.getMonth(),
		d = today.getDate();

	const calendar = new FullCalendar.Calendar($calendar, {
		themeSystem: 'bootstrap',
		initialView: 'dayGridMonth',
		headerToolbar: {
			left: 'title',
			center: 'dayGridMonth,timeGridWeek,timeGridDay',
			right: 'prev,next,today'
		},
		viewDidMount: function(e) {
			if (K.isWindows && e.view.type != 'dayGridMonth') {
				$(e.el).find('.fc-scroller').each(function() {
					new Scrollbar(this);
				});
			}
		},
		selectable: true,
		selectHelper: true,
		editable: true,
		eventLimit: true,

		events: [{
			title: 'All Day Event',
			start: new Date(y, m, 1),
			allDay: true,
			className: 'event-default'
		}, {
			title: 'Meeting',
			start: new Date(y, m, d - 1, 10, 30),
			allDay: false,
			className: 'event-green'
		}, {
			title: 'Lunch',
			start: new Date(y, m, d + 7, 12, 0),
			end: new Date(y, m, d + 7, 14, 0),
			allDay: false,
			className: 'event-red'
		}, {
			title: 'BD-pro Launch',
			start: new Date(y, m, d - 2, 12, 0),
			allDay: true,
			className: 'event-pink'
		}, {
			title: 'Birthday Party',
			start: new Date(y, m, d + 1, 19, 0),
			end: new Date(y, m, d + 1, 22, 30),
			allDay: false,
			className: 'event-indigo'
		}, {
			title: 'Click for Creative Tim',
			start: new Date(y, m, 21),
			end: new Date(y, m, 22),
			url: 'http://www.creative-tim.com/',
			className: 'event-orange'
		}, {
			title: 'Click for Google',
			start: new Date(y, m, 21),
			end: new Date(y, m, 22),
			url: 'http://www.google.com/',
			className: 'event-purple'
		}]
	});

	calendar.render();

	// $calendar.fullCalendar({
	// 	select: function(start, end) {

	// 		// on select we show the Sweet Alert modal with an input
	// 		swal({
	// 			title: 'Create an Event',
	// 			html: '<div class="form-group">' +
	// 				'<input class="form-control" placeholder="Event Title" id="input-field">' +

	// 				'</div>',
	// 			showCancelButton: true,
	// 			confirmButtonClass: 'btn btn-success',
	// 			cancelButtonClass: 'btn btn-danger',
	// 			buttonsStyling: false
	// 		}).then(function(result) {

	// 			var eventData;
	// 			event_title = $('#input-field').val();

	// 			if (event_title) {
	// 				eventData = {
	// 					title: event_title,
	// 					start: start,
	// 					end: end
	// 				};
	// 				$calendar.fullCalendar('renderEvent', eventData, true); // stick? = true
	// 			}

	// 			$calendar.fullCalendar('unselect');

	// 		});
	// 	},
	// 	editable: true,
	// 	eventLimit: true, // allow "more" link when too many events


	// 	// color classes: [ event-blue | event-azure | event-green | event-orange | event-red ]

	// });
});
