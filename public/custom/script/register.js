
$(() => {

});

const checkInstaUser = () => {
    const user = $('input[name=name]').val();
    if (!user) {
        showSidebarMessage('Please input an instergram username!', 'error');
        return;
    }

    $.getJSON('/calls', {
        action: 'igAccountExists',
        name: user
    }, function(res) {
        if (res.success) {
            showSidebarMessage('Instagram account found!');
            replaceMsg();
            toggleHide($('#submit-btn'));
            toggleHide($('#find-btn'));
            toggleHide($('div[toggle]'));
            $('input[name=name]').attr('disabled', 'true');
        }
    });
};

const toggleHide = el => {
    const hidden = el.hasClass('d-none'),
        replace = el.attr('unhide');
    el[`${hidden ? 'remove' : 'add'}Class`]('d-none');
    replace && el[`${hidden ? 'add' : 'remove'}Class`](replace);
};

const replaceMsg = (msg = '') => {
    $('.card-message .card-text').text(msg);
};

const showSidebarMessage = (message, type = 'normal') => {
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
};
