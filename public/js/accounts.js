import { K } from './src/K.js';
import SS from './shared.js';
import wNumb from './libs/wNumb-min.js';

$(() => {
    $('#search').on('keypress', function(e) {
        if (e.key == 'Enter') {
            e.preventDefault();
            checkInstaUser();
        }
    });
    $('#find-btn').on('click', function(e) {
        e.preventDefault();
        checkInstaUser();
    });
    $('button[toggle]').on('click', SS.toggleHelp);

    $('[has-cost]').on('change switchChange.bootstrapSwitch', function(e) {
        const name = $(this).attr('name').replace(/(^s\w+\[|\])/g, ''),
            data = $(this).data(),
            type = $(this).attr('type');
        let cost = 0, val = '';
        if (type == 'checkbox') {
            cost = data[$(this).is(':checked') ? 'onCost' : 'offCost'];
            val = $(this).is(':checked') ? 'on' : 'off';
        } else if (!type) {
            cost = $(':selected', this).data('cost');
            val = $(this).val();
        }

        $(`#${name}_cost`).text(cost);
        updateMessage.call(this, val);
        updateCost();
    });

    $('div[id^=noUi_]:not(.initialized)').each(function() {
        $(this).addClass('initialized');
        const key = $(this).attr('name'),
            name = key.replace(/(^s\w+\[|\])/g, ''),
            $slider = $(this).get(0),
            $input = $(`input[name="${key}"]`),
            data = $(this).data(),
            min = data.min,
            max = data.max,
            step = data.step,
            value = data.default;

        $input.data(data);
        $input.attr('has-cost', '');

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

        function updateEl() {
            const iData = $input.data(),
                maxCost = iData.maxCost,
                minCost = iData.minCost,
                val = parseInt($slider.noUiSlider.get()),
                per = ((val - min) / (max - min)),
                cost = Math.round(((maxCost - minCost) * per) + minCost);
            $(`#${name}_cost`).text(cost);
        }

        $slider.noUiSlider.on('update', () => {
            const val = $slider.noUiSlider.get();
            $input.val(val);
            updateEl.call(this);
            updateMessage.call(this, val);
            updateCost();
        });

        $input.on('change', function() {
            const val = $(this).val();
            $slider.noUiSlider.set(val);
            updateEl.call(this);
            updateMessage.call(this, val);
            updateCost();
        });
    });

    updateFollowers();
});

const updateFollowers = () => {
    const followers = parseInt($('[name=followers]').val()),
        multi = Math.ceil(followers / 5e4);

    $('[has-cost]').each(function() {
        let data = $(this).data();

        switch ($(this).attr('type')) {
            case 'checkbox':

                break;
            case 'number':
                if (data.oldMax == null) data.oldMax = data.maxCost;
                if (data.oldMin == null) data.oldMin = data.minCost;
                data.maxCost = data.oldMax * multi;
                data.minCost = data.oldMin * multi;
                $(this).trigger('change');
                break;
            case 'hidden':

                break;
            case undefined:
                $('option', this).each(function() {
                    data = $(this).data();
                    if (!data.oldCost) data.oldCost = data.cost;
                    data.cost = data.oldCost * multi;
                    data.content = data.content.replace(/cost'>£\d+/, `cost'>£${data.cost}`);
                });
                $(this).selectpicker('refresh');
                $(this).trigger('change');
                break;
        }

    });

    $('[update=followers]').text(SS.nFormatter(followers, followers > 1e6 ? 1 : 0));
    updateCost();
}

function updateMessage(val) {
    if (!this.hasAttribute('has-msg')) return;
    const name = $(this).attr('name');
    $(`[update="${$(this).attr('name')}"]`).text(val.toLowerCase());
}

const updateCost = () => {
    let cost = 0;
    $('[has-cost]').each(function() {
        const data = $(this).data(),
            id = '#' + $(this).attr('name').replace(/(^s\w+\[|\])/g, '') + '_cost';
        if ($(this).attr('type') == 'hidden') cost += data.cost;
        else cost += parseInt($(id).text());
    });
    $('.acc-cost').text(cost);
}

const checkInstaUser = () => {
    const user = $('#search').val();
    if (!user) {
        SS.alert('Please input an instergram username!', 'error');
        return;
    }

    $.getJSON('/calls', {
        action: 'igAccountExists',
        name: user
    }, function(res) {
        SS.alert(res.message, res.success ? 'normal' : 'error');
        if (res.success) {
            $('input[name=username]').val(res.username);
            $('input[name=pk]').val(res.pk);

        }
    });
};

function insertValue(obj, path, value) {
    const props = path.split(/[\[\]]+/);
    let level = obj;
    for (let i = 0; i < props.length; i++) {
        const prop = props[i],
            next = props[i + 1];
        if (!prop) break;
        if (!next) level[prop] = value;
        else if (!level[prop])
            level[prop] = K.isNumeric(next) ? [] : {};
        level = level[prop];
    }
}