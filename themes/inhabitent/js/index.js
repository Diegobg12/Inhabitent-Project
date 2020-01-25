
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


$(window).scroll(function() {    
  var scroll = $(window).scrollTop();
  var mainPage = $( '#masthead' ).hasClass( 'main-page' );
  console.log("scroll");
  if (mainPage){
        if (scroll >= 700){
          
            $('#masthead').removeClass('home-site-header');
            $('#masthead').addClass('site-header');
        }
  
  
        if ((scroll < 700) && mainPage){
          $('#masthead').removeClass('site-header');
          $('#masthead').addClass('home-site-header');
       }

    }

}); 





  