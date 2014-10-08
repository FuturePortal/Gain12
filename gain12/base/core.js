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
       try {
           var handler = new window[currentComponent]();
           handler.init();
       } catch (e) {
           alert('Unable to load component ' + currentComponent);
       }
   });
});
