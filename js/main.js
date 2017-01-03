$(document).ready(function() {
  
  // Close all sub menu when click the toggle Menu button
  $('a.mobile-toggle').on('click',function(){

    $('nav').toggleClass('show').find('ul.open').removeClass('open');
    $(this).toggleClass('grey');
  
  })

  

  $('nav ul li > a').on("click",function(e){
    
    e.preventDefault();
    $(this)
        .next()
        .toggleClass('open');
    $(this)
        .closest('li')   // Turn off othe sub menu
        .siblings()
        .find('ul')
        .removeClass('open');



        if($('ul.open:visible').length === 0 ){
          $("#menu-overlay").hide();
        }else {
          $("#menu-overlay").show();
        }
      });

       $("#menu-overlay").on("click",function(){
         $("ul.open").removeClass('open');
         $(this).hide();
   
   });

});