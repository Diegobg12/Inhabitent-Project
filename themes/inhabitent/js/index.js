
$( document ).ready(function() {
    $('.search-toggle').click(function(){
        event.preventDefault();
      $('.search-field').show('slow');
      $('.search-field').focus();
    });

    $('.search-field').focusout(function(){
        event.preventDefault();
        $('.search-field').hide('slow');
    });
    
  });

  
  