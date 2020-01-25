
$( document ).ready(function() {
    const inputHeader= $('input:first');
    const inputSecond= $('.search-field').last();

    $(inputSecond).removeClass('hide');
    $(inputHeader).addClass('hide');

    $('.search-toggle').click(function(){
        event.preventDefault();
      $(inputHeader).show('slow');
      $(inputHeader).focus();
    });

    $(inputHeader).focusout(function(){
        event.preventDefault();
        $(inputHeader).hide('slow');
    });

  });


// $(window).scroll(function() {    
//   var scroll = $(window).scrollTop();
//   var mainPage = $( "#masthead" ).hasClass( "home-site-header" );
//    //>=, not <=

//       if ((scroll >= 700) && !mainPage ){
//           //clearHeader, not clearheader - caps H
//           // $("#masthead").removeClass();
//           $("#masthead").addClass("site-header");
//       }else{
//         $("#masthead").removeClass("site-header");
//         // $("#masthead").addClass("home-site-header");
//       }
   

}); 




  