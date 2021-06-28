// import SS from './shared.js';

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
        const $copy = $('.row[repeat=_0]').clone();
        $(this).closest('.row').before($copy);
        const count = $('.row[repeat]').length - 1;
        $copy.attr('repeat', `_${count}`);
        $copy.find('input').each(function() {
            $(this).attr('name', $(this).attr('name').replace('[0]', `[${count}]`));
            if ($(this).attr('type') == 'checkbox') {
                const $group = $(this).closest('.has-switch'),
                    $input = $(this).detach();
                $group.html($input);
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
        const els = $('div[repeat]');
        if (els.length < 2) {
            $('input', els).val('');
            $('input[type=checkbox]', els).bootstrapSwitch('state', false);
        } else {
            $(this).closest('div[repeat]').remove();
            $('div[repeat]').each(function(i) {
                $(this).attr('repeat', `_${i}`);
                $('input', this).each(function() {
                    $(this).attr('name', $(this).attr('name').replace(/\[\d+\]/, `[${i}]`));
                });
            });
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
