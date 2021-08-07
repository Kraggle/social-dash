import { K } from './src/K.js';
import Sentencer from './libs/Sentencer.js';

$(() => {
    // if (K.urlParam('user')) {
    //     checkInstaUser();
    //     console.log('triggered');
    // }
    // $('#find-btn').on('click', checkInstaUser);

    $('#submit-btn').on('click', (e) => {
        e.preventDefault();

        $('#register-form').prepend($('<input>', {
            type: 'hidden',
            name: 'team_name',
            value: Sentencer.make('{{ adverb }} {{ adjective }} {{ nouns }}').titleCase()
        }));

        const params = K.urlParam();
        $.each(params, (key, value) => {
            if ($(`[name=${key}]`).length == 0) {
                $('#register-form').prepend($('<input>', {
                    type: 'hidden',
                    name: key,
                    value
                }));
            }
        });

        $('#register-form').trigger('submit');
    });
});

// const checkInstaUser = () => {
//     const user = $('input[name=user]').val();
//     if (!user) {
//         showSidebarMessage('Please input an instergram username!', 'error');
//         return;
//     }

//     disableControl('input[name=user]');

//     $.getJSON('/calls', {
//         action: 'igAccountExists',
//         name: user
//     }, function(res) {
//         showSidebarMessage(res.message, res.success ? 'normal' : 'error');
//         if (res.success) {
//             replaceMsg();
//             toggleHide($('#submit-btn'));
//             toggleHide($('#find-btn'));
//             toggleHide($('div[toggle]'));
//         } else
//             disableControl('input[name=user]', false);
//     });
// };

const disableControl = (selector, disable = true) => {
    const el = $(selector);
    if (disable) {
        el.attr('readonly', 1);
        el.closest('.input-group').attr('disabled', 1);
    } else {
        el.removeAttr('readonly');
        el.closest('.input-group').removeAttr('disabled');
    }
};

// const toggleHide = el => {
//     const hidden = el.hasClass('d-none'),
//         replace = el.attr('unhide');
//     el[`${hidden ? 'remove' : 'add'}Class`]('d-none');
//     replace && el[`${hidden ? 'add' : 'remove'}Class`](replace);
// };

// const replaceMsg = (msg = '') => {
//     $('.card-message .card-text').text(msg);
// };

// const showSidebarMessage = (message, type = 'normal') => {
//     try {
//         $.notify({
//             icon: `fal ${type == 'error' ? 'fa-exclamation-circle' : 'fa-bell-on'}`,
//             message: message
//         }, {
//             type: 'primary',
//             timer: 4000,
//             placement: {
//                 from: 'top',
//                 align: 'right'
//             }
//         });
//     } catch (e) {
//         console.log('Notify library is missing, please make sure you have the notifications library added.');
//     }
// };
