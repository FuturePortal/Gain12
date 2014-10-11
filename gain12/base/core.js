/**
 * A list of characteristics you can gain with Gain12
 * @type {string[]}
 */
var characteristics = [
    'Confidence', 'Shape', 'Health', 'Discipline',
    'Genuine happiness', 'Strength', 'Resilience', 'Ethic',
    'Dedication', 'Awareness', 'Persistence', 'Attractiveness'
];

/**
 * Component base class
 * @constructor
 */
var Component = function () {
    // Component base is empty
};

/**
 * Default component initiator
 */
Component.prototype.init = function () {
    // Default init empty
};

// Load all .components by their data-component class.
$(document).ready(function(){
   $('.component').each(function(){
       var currentComponent = $(this).attr('data-component');
       var handler = new window[currentComponent]();
       handler.init();
   });
});
