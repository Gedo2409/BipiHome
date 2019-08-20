// init controller
  var controller = new ScrollMagic.Controller();

  $('.provider').each(function(){
    var tween = TweenMax.from(this, 0.5,{autoAlpha: 0, scale:0.2 ,y:'90',ease: Expo.easeOut});
        
    // build a scene
    var scene = new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook:1.0,
        offset:-70

    })
    .setTween(tween)
    .addTo(controller);
  });
  
$(document).ready(function(){
    if(window.innerWidth <= 800) {
        $('.p-card').children().each(function(){
            //Build the tween
            var tween = TweenMax.from(this, 0.5,{autoAlpha: 0, scale:0.2 ,y:'90',ease: Expo.easeOut});
        
            // build a scene
            var scene = new ScrollMagic.Scene({
                triggerElement: this,
                triggerHook:1.0,
                offset:-70
        
            })
            .setTween(tween)
            .addTo(controller);
        });
    } else {
        $('.p-card').each(function(){

            //Build the tween
            var tween = new TimelineLite();
        
            $(this).children().each(function(){
                tween.add(TweenMax.from(this, 0.5,{autoAlpha: 0, scale:0.2 ,y:'90',ease: Expo.easeOut}), '-=.35');
            });
            // build a scene
            var scene = new ScrollMagic.Scene({
                triggerElement: this,
                triggerHook:0.5,
                offset:-70
        
            })
            .setTween(tween)
            .addTo(controller);
        });
    }

});

