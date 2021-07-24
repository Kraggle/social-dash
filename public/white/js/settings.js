$(() => {
    const $sidebar = $('.sidebar'),
        $navbar = $('.navbar'),
        $main_panel = $('.main-panel');

    const $full_page = $('.full-page');

    const $sidebar_responsive = $('body > .navbar-collapse');
    let sidebar_mini_active = false,
        white_color = false;

    let window_width = $(window).width();

    $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
        let $btn = $(this);

        if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            whiteDashboard.showSidebarMessage('Sidebar mini deactivated...');
        } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            whiteDashboard.showSidebarMessage('Sidebar mini activated...');
        }

        // we simulate the window Resize so the charts will get updated in realtime.
        let simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
        }, 180);

        // we stop the simulation of Window Resize after the animations are completed
        setTimeout(function() {
            clearInterval(simulateWindowResize);
        }, 1000);
    });

    $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
        let $btn = $(this);

        if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
                $('body').removeClass('change-background');
                $('body').removeClass('white-content');
            }, 900);
            white_color = false;
        } else {

            $('body').addClass('change-background');
            setTimeout(function() {
                $('body').removeClass('change-background');
                $('body').addClass('white-content');
            }, 900);

            white_color = true;
        }


    });

    $('.light-badge').click(function() {
        $('body').addClass('white-content');
    });

    $('.dark-badge').click(function() {
        $('body').removeClass('white-content');
    });
});
