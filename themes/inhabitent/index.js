$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
     //console.log(scroll);
    if (scroll >= 50) {
        //console.log('a');
        $(".masthead").addClass("site-header");
    } else {
        console.log('a');
        // $(".header").removeClass("change");
    }