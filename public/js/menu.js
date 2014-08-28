$(document).ready(function(){
    var header = $('#header');
    if (!header.length) {
        $('#menu-spacer').css('display', 'block');
    }

    var menuOpen = false;
    var menuIcon = $('.menu-icon');
    $('.menu-btn').click(function () {
        if (menuOpen) {
            menuOpen = false;
            menuIcon.removeClass('open');
        } else {
            menuOpen = true;
            menuIcon.addClass('open');
        }
    });
});
