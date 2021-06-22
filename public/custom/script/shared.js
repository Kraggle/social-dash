import wNumb from './libs/wNumb-min.js';

export default {
    alert(message, type = 'normal') {
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
    },

    noUISlider() {
        $('div[id^=noUi_]:not(.initialized)').each(function() {
            $(this).addClass('initialized');
            const min = $(this).data('min'),
                max = $(this).data('max'),
                minCost = $(this).data('minCost'),
                maxCost = $(this).data('maxCost'),
                step = $(this).data('step'),
                value = $(this).data('default'),
                key = $(this).attr('name'),
                $slider = $(this).get(0),
                $input = $(`input[name=${key}]`);

            noUiSlider.create($slider, {
                start: value,
                connect: [true, true],
                range: {
                    min,
                    max
                },
                step,
                format: wNumb({
                    decimals: 0
                })
            });

            const updateCost = () => {
                const val = parseInt($slider.noUiSlider.get()),
                    per = ((val - min) / (max - min)),
                    cost = Math.round(((maxCost - minCost) * per) + minCost);
                $(`#${key}_cost`).text(cost);
            }

            $slider.noUiSlider.on('update', () => {
                $input.val($slider.noUiSlider.get());
                updateCost();
            });

            $input.on('change', function() {
                $slider.noUiSlider.set($(this).val());
                updateCost();
            });
        });
    }
}
