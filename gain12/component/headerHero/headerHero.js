function HeroHeader () {
    Component.call(this);
}

HeroHeader.prototype = new Component();
HeroHeader.prototype.constructor = HeroHeader;

HeroHeader.prototype.init = function () {
    this.setSize();

    $(window).on('resize', function () {
        HeroHeader.prototype.setSize();
    });

    $(window).on('scroll touchmove', function () {
        HeroHeader.prototype.onScroll();
    });
};

HeroHeader.prototype.onScroll = function () {
    var scrollTop = $(document).scrollTop();
    var wrap = $('#header-inner-wrap');

    wrap.css('top', scrollTop + 'px');
};

HeroHeader.prototype.setSize = function () {
    $('#header').height($(window).height());
};
