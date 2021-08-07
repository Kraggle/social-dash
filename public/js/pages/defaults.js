import $ from '../core/jquery/jquery.js';

$(() => {

    // Used to automatically set a key from the input name.
    $('#input-name').on('keyup', function() {
        const $key = $('#input-key');
        if ($key.hasClass('has-edited')) return;
        let val = $(this).val();
        $key.val(val.toLowerCase().replace(/ /g, '_'));
    });

    $('#input-key').on('keyup', function() {
        $(this).addClass('has-edited');
    });

    // Used to add more options to the string type
    $('#add-option').on('click', function(e) {
        e.preventDefault();
        const $copy = $('.no-vis').first().nextUntil('[repeat=_1]').clone(),
            count = parseInt($('[repeat]').last().attr('repeat').replace(/_/, '')) + 1;
        $('.choice-grid').append($copy);
        $copy.attr('repeat', `_${count}`);
        $copy.find('input').each(function() {
            $(this).attr('name', $(this).attr('name').replace('[0]', `[${count}]`));
            if ($(this).attr('type') == 'checkbox') {
                const $switch = $(this).closest('div.bootstrap-switch'),
                    $input = $(this).detach();
                $switch.prev('input').attr('name', $(this).attr('name').replace('[0]', `[${count}]`));
                $switch.before($input);
                $switch.remove();
                $input.prop('checked', false);
                $input.bootstrapSwitch();
            } else
                $(this).val('');
        });
    });

    // Used to ensure only one string option can be default
    $('#string-options').on('switchChange.bootstrapSwitch', 'input[type=checkbox]', function() {
        if (!$(this).is(':checked')) return;
        $('#string-options input:checked').not($(this)).bootstrapSwitch('state', false);
    });

    // Used to switch between variable types
    $('#select-type').on('change', function() {
        const selected = $('option:selected', this).val();
        $('div[type]').addClass('d-none').find('input').each(function() {
            if ($(this).hasClass('bootstrap-switch'))
                $(this).bootstrapSwitch('disabled', true);
            else
                $(this).prop('disabled', true);
        });
        $(`div[type=${selected}]`).removeClass('d-none').find('input').each(function() {
            if ($(this).hasClass('bootstrap-switch'))
                $(this).bootstrapSwitch('disabled', false);
            else
                $(this).prop('disabled', false);
        });
        disablerElements.call($('[data-disabler]'));
    });

    // Used to remove choices from the string type
    $('div[type=text]').on('click', '.btn.remove', function() {
        const num = $(this).attr('repeat'),
            total = $(`.btn[repeat]`),
            els = $(`[repeat${num}]`).first().prev().nextUntil(`.btn[repeat${num}]`);
        if (total.length < 2) {
            $('input[type=text]', els).val('');
            $('input[type=checkbox]', els).bootstrapSwitch('state', false);
        } else {
            els.remove();
            let i = 0;
            $('.choice-grid').children().each(function() {
                if (this.tagName != 'LABEL') {
                    $(this).attr('repeat', `_${i}`);
                    $('input', this).each(function() {
                        $(this).attr('name', $(this).attr('name').replace(/\[\d+\]/, `[${i}]`));
                    });
                }

                if (this.tagName == 'INPUT')
                    $(this).attr('name', $(this).attr('name').replace(/\[\d+\]/, `[${i}]`));

                if (this.tagName == 'BUTTON') i++;
            })
        }
    });

    $('[data-disabler]').on('switchChange.bootstrapSwitch', disablerElements);
    function disablerElements() {
        $(this).each(function() {
            const info = $(this).data('disabler'),
                show = ($(this).is(':checked') ? info[1] : info[0]) == 'show';
            $(`[disabler=${info.name}]`).each(function() {
                if ($(this).closest('.type-wrapper').hasClass('d-none')) return;
                if (show)
                    $(this).add($(this).closest('div')).removeAttr('disabled');
                else $(this).add($(this).closest('div')).attr('disabled', true);
            });
        });
    }
    disablerElements.call($('[data-disabler]'));
});
