$('#collapse-menu .collapse').on('shown.bs.collapse', function () {
  TweenMax.to('#meca-navbar',0.1,{css:{className:"+=active"}});
});
$('#collapse-menu .collapse').on('hidden.bs.collapse', function () {
  TweenMax.to('#meca-navbar',0.1,{css:{className:"-=active"}});
});
// var slider = document.getElementById("priceRange");
// var output = document.getElementById("range");
// output.innerHTML = '$'+slider.value; // Display the default slider value
//
// // Update the current slider value (each time you drag the slider handle)
// slider.oninput = function() {
//   output.innerHTML = '$'+this.value;
// }


$( document ).ready(function() {
  // add multiple tweens, wrapped in a timeline.
var timeline = new TimelineMax();
var tween1 = TweenMax.from("#nav-background", 0.1,{y:'-100%',autoAlpha:'0'},"navbar");
var tween2 = TweenMax.to('#meca-navbar',0.1,{css:{className:"+=filled"}});
timeline.add(tween1)
        .add(tween2);
  // animar formulario
   var controller = new ScrollMagic.Controller();
   var scene = new ScrollMagic.Scene({
     triggerElement: "#mdo-content",
     triggerHook: .1
   })
   .setTween(timeline)
   .addTo(controller);
});
