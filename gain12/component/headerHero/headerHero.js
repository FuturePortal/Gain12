function HeroHeader () {
    Component.call(this);

    this.windowHeight = 0;
}

HeroHeader.prototype = new Component();
HeroHeader.prototype.constructor = HeroHeader;

HeroHeader.prototype.init = function () {
    this.windowHeight = $(window).height();
    this.scrollVisible = true;
    this.setSize();

    $(window).on('resize', function () {
        HeroHeader.prototype.setSize();
    });

    $(window).on('scroll touchmove', function () {
        HeroHeader.prototype.onScroll();
    });

    setInterval(function () {
        HeroHeader.prototype.bounceScrollDown();
    }, 3000);

    setInterval(function () {
        HeroHeader.prototype.nextCharacteristic();
    }, 2000);
};

HeroHeader.prototype.nextCharacteristic = function () {
    if (this.currentCharacteristic == undefined) {
        this.currentCharacteristic = 0;
    }

    $('#characteristic').html(characteristics[this.currentCharacteristic]);

    this.currentCharacteristic++;
    if (this.currentCharacteristic == characteristics.length) {
        this.currentCharacteristic = 0;
    }
};

HeroHeader.prototype.onScroll = function () {
    this.scrollTop = $(document).scrollTop();

    if (this.scrollTop < this.windowHeight) {
        var wrap = $('#header-inner-wrap');
        wrap.css('top', this.scrollTop + 'px');

        if (this.scrollTop > 1 && (this.scrollVisible || this.scrollVisible == undefined)) {
            wrap.find('.scroller').stop().fadeTo(400, 0);
            this.scrollVisible = false;
        }
        if (this.scrollTop < 2 && !this.scrollVisible) {
            wrap.find('.scroller').stop().fadeTo(400, 1);
            this.scrollVisible = true;
        }
    }
};

HeroHeader.prototype.setSize = function () {
    HeroHeader.prototype.windowHeight = $(window).height();
    $('#header').height(this.windowHeight);
};

HeroHeader.prototype.bounceScrollDown = function () {
    if (this.scrollVisible == false) {
        return;
    }
    var scrollArrows = $('#header .scroller');
    var animation = 'animated bounce';
    scrollArrows.addClass(animation);
    setTimeout(function () {
        scrollArrows.removeClass(animation);
    }, 1500);
};
