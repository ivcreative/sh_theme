(function($) {
 
  $(document).ready(function(){
   
    //scroling in menu
     $('.menu a').click(function(){
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top-120
        }, 750,'swing');
        return false;
     });  
      
      
  //end of document.ready function
  });

})(jQuery);