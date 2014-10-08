function HeroHeader () {
    Component.call(this);
}

HeroHeader.prototype = new Component();
HeroHeader.prototype.constructor = HeroHeader;

HeroHeader.prototype.init = function () {
    $('#header').height($(window).height());
};
