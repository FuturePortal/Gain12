function Menu () {
    Component.call(this);
}

Menu.prototype = new Component();
Menu.prototype.constructor = Menu;

Menu.prototype.init = function () {
    this.open = false;
    this.button = $('.menu-btn');
    this.button.click(this.toggleMenu);
};

Menu.prototype.toggleMenu = function () {
    this.icon = $('.menu-icon');
    this.sideMenu = $('#menu-sidebar');
    if (this.open) {
        this.open = false;
        this.icon.removeClass('open');
        this.sideMenu.stop().animate(
            { right: '-320px' },
            400,
            function (x, t, b, c, d) {
                // easeOutQuad
                return -c *(t/=d)*(t-2) + b;
            }
        );
    } else {
        this.open = true;
        this.icon.addClass('open');
        this.sideMenu.stop().animate(
            { right: 0 },
            400,
            function (x, t, b, c, d) {
                // easeInQuad
                return c*(t/=d)*t + b;
            }
        );
    }
};
