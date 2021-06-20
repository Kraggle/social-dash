export default {
    alert: function(message, type = 'normal') {
        try {
            $.notify({
                icon: `fal ${type == 'error' ? 'fa-exclamation-circle' : 'fa-bell-on'}`,
                message: message
            }, {
                type: 'primary',
                timer: 4000,
                placement: {
                    from: 'top',
                    align: 'right'
                }
            });
        } catch (e) {
            console.log('Notify library is missing, please make sure you have the notifications library added.');
        }
    },

    toggleHelp: function(e) {
        e.preventDefault();
        const name = $(this).attr('toggle');
        $(`div[toggle="${name}"]`).toggleClass('d-none');
    },

    changeCost: function(e) {
        const name = $(this).attr('name'),
            data = $(this).data(),
            type = $(this).attr('type');
        let cost = 0;
        if (type == 'checkbox')
            cost = data[$(this).is(':checked') ? 'onCost' : 'offCost'];
        else if (!type)
            cost = $(':selected', this).data('cost');

        $(`#${name}_cost`).text(cost);
    }
}
