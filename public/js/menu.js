$(document).ready(function(){
    var header = $('#header');
    if (!header.length) {
        $('#menu-spacer').css('display', 'block');
    }

    var menuOpen = false;
    var menuIcon = $('.menu-icon');
    var sideMenu = $('#menu-sidebar');
    $('.menu-btn').click(function () {
        if (menuOpen) {
            // Open menu
            menuOpen = false;
            menuIcon.removeClass('open');

            sideMenu.stop().animate(
                { right: '-320px' },
                400,
                function (x, t, b, c, d) {
                    // easeOutQuad
                    return -c *(t/=d)*(t-2) + b;
                }
            );
        } else {
            // Close menu
            menuOpen = true;
            menuIcon.addClass('open');

            sideMenu.stop().animate(
                { right: 0 },
                400,
                function (x, t, b, c, d) {
                    // easeInQuad
                    return c*(t/=d)*t + b;
                }
            );
        }
    });
});
