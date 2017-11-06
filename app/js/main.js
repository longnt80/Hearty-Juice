$(document).ready(function() {
  
  // Close all sub menu when click the toggle Menu button
  $('a.mobile-toggle').on('click',function(){

    $('nav').toggleClass('show').find('ul.open').removeClass('open');
    $(this).toggleClass('grey');

  })



  $('nav ul li ').on("click",function(){
    $(this)
        .find('ul')
        .toggleClass('open')
        .closest('li')
        .siblings()  // Turn off othe sub menu
        .find('ul')
        .removeClass('open');

        if($('ul.open:visible').length === 0 ){
          $("#menu-overlay").hide();
        }else {
          $("#menu-overlay").show();
        }
  });

  $("#menu-overlay").on("click",function(){
   $(this).hide();
  });

  // check all the element needed to animated to hide them
  // $('.animated-element').addClass("hidden").viewportChecker({
  //   classToAdd: 'visible animated fadeIn',
  //   offset: 100
  // });

});
