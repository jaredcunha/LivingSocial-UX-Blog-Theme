/* 
 * Lazy Line Painter - Path Object 
 * Generated using 'SVG to Lazy Line Converter'
 * 
 * http://lazylinepainter.info 
 * Copyright 2013, Cam O'Connell  
 *  
 */ 
 var pathObj = {
    "arrowLToR": {
        "strokepath": [
            {
                "path": "  M0.881,18.451c0,0,98.71,62.096,147.862-9.384c0,0-44.69,2.823,4.781-7.642c0,0-1.91,10.845-1.542,20.661",
                "duration": 600
            }
        ],
        "dimensions": {
            "width": 157,
            "height": 45
        }
    }
};  

var pathObj2 = {
    "arrowRToL": {
        "strokepath": [
            {
                "path": "  M154.097,18.926c0,0-98.71,62.096-147.862-9.384c0,0,44.69,2.823-4.781-7.642c0,0,1.91,10.845,1.542,20.661",
                "duration": 600
            }
        ],
        "dimensions": {
            "width": 157,
            "height": 46
        }
    }
}; 
 
 
/* 
 Setup and Paint your lazyline! 
 */ 
$('#arrowLToR').bind('inview', function (event, visible) {
  if (visible == true) {
    setTimeout(function(){
    $('#arrowLToR').lazylinepainter( 
    {
      "svgData": pathObj,
      "strokeWidth": 2,
      "strokeColor": "#333333"
      }).lazylinepainter('paint');  
  }, 500) }
  else {
    $(this).unbind('inview');
  }
});
$('#arrowRToL').bind('inview', function (event, visible) {
  if (visible == true) {
    setTimeout(function(){
    $('#arrowRToL').lazylinepainter( 
    {
      "svgData": pathObj2,
      "strokeWidth": 2,
      "strokeColor": "#333333"
      }).lazylinepainter('paint');  
  }, 500) }
  else {
    $(this).unbind('inview');
  }
});

$('.topic-icon').bind('inview', function (event, visible) {
  if (visible == true) {
    $(this).addClass("in-view");
  } 
  else {
    $(this).unbind('inview');
  }
});

$('.app-preview img').bind('inview', function (event, visible) {
  if (visible == true) {
    $(this).addClass("in-view");
  } 
  else {
    $(this).unbind('inview');
  }
});

$('#swissArmyTrigger').bind('inview', function (event, visible) {
  if (visible == true) {
    $('#swissArmy').addClass("in-view");
  } 
  else {
    $(this).unbind('inview');
  }
});

$('#swissArmyTrigger').bind('inview', function (event, visible) {
  if (visible == true) {
    $('#swissArmy').addClass("in-view");
  } 
  else {
    $(this).unbind('inview');
  }
});

$('#cloudVisualTrigger').bind('inview', function (event, visible) {
  if (visible == true) {
    $('#cloudVisual').addClass("in-view");
  } 
  else {
    $(this).unbind('inview');
  }
});



/* Replace SVG with PNG in crappy browsers */
if (!Modernizr.svg) {
    $('img[src*="svg"]').attr('src', function() {
        return $(this).attr('src').replace('.svg', '.png');
    });
}

/* Carousel */
var slider =
  Swipe(document.getElementById('slider'), {
    auto: 0,
    continuous: true,
    callback: function(pos) {
      var i = bullets.length;
      while (i--) {
        bullets[i].className = ' ';
      }
      bullets[pos].className = 'on';
    }
  });

$('#next').on('click', function(){
  slider.next();
});

$('#prev').on('click', function(){
  slider.prev();
});

var bullets = document.getElementById('position').getElementsByTagName('li');



// Cache the Window object
$window = $(window);            
 $('section[data-type="background"]').each(function(){
   var $bgobj = $(this); // assigning the object
                  
    $(window).scroll(function() {
                  
      // Scroll the background at var speed
      // the yPos is a negative value because we're scrolling it UP!                
      var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
      
      // Put together our final background position
      var coords = '50% '+ yPos + 'px';
      var doubledCoords = '50% '+ yPos*5 + 'px';

      // Move the background
      $bgobj.css({'background-position': doubledCoords+", 50% 0"});
      
    }); // window scroll Ends

});  

/*
var windowHeight = $(window).height();
var startPoint = $('#gratuitousParallax h2').offset().top - windowHeight;
var scrolledInView = 0;

$(window).bind('scroll', function(){
    var currentScroll= $(window).scrollTop();
    console.log("Start point "+startPoint+ ", Window Height "+windowHeight+", Current Scroll "+currentScroll)
    if ((currentScroll >= startPoint) && (currentScroll <= (startPoint+windowHeight))) {
      var scrolledInView = (currentScroll - startPoint)/windowHeight;
      var newOpacity = (1-scrolledInView).toFixed(6);

      $('#gratuitousParallax h2').css({'opacity': newOpacity, 'letter-spacing': (scrolledInView/5)+"em"});
    };
});
*/
