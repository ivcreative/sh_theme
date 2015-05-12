(function($) {
 
  $(document).ready(function(){
   
    //Bootstrap Tab Collapse
    $('.nav.nav-tabs').tabCollapse();
     
    $(".downArrCont img").click(function() {
        $('html, body').animate({
            scrollTop: $(".downArrCont").offset().top -20
        }, 750);
    });  
      
  //end of document.ready function
  });

})(jQuery);


//
var opts = {
  lines: 13, // The number of lines to draw
  length: 9, // The length of each line
  width: 5, // The line thickness
  radius: 20, // The radius of the inner circle
  corners: 0.8, // Corner roundness (0..1)
  rotate: 14, // The rotation offset
  direction: 1, // 1: clockwise, -1: counterclockwise
  color: '#000', // #rgb or #rrggbb or array of colors
  speed: 0.9, // Rounds per second
  trail: 60, // Afterglow percentage
  shadow: false, // Whether to render a shadow
  hwaccel: true, // Whether to use hardware acceleration
  className: 'spinner', // The CSS class to assign to the spinner
  zIndex: 2e9, // The z-index (defaults to 2000000000)
  top: '5%', // Top position relative to parent
  left: '50%' // Left position relative to parent
};
var target = document.getElementById('spinner');
var spinner = new Spinner(opts).spin(target);