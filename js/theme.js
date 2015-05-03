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