import { K } from './src/K.js';
import SS from './shared.js';

$(() => {
    $('#find-btn').on('click', checkInstaUser);

    $('button[toggle]').on('click', SS.toggleHelp);

    $('[has-cost]').on('change switchChange.bootstrapSwitch', SS.changeCost);
});

const checkInstaUser = () => {
    const user = $('input[name=search]').val();
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
            $('#username').val(res.username);
            $('#pk').val(res.pk);
        }
    });
};
