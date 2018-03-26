var debug = true;

$(document).ready( function(){



    if($('body').hasClass('page-template-special-template-chapitre')){
        if(debug)console.log('page chapitre');
    }

    if($('body').hasClass('page-template-special-template-image')){
        if(debug)console.log('page image');
    }
    

    // Mousewheel scroll on the image gallery

    $('#liens').on('mousewheel', function(event,delta) {

        if(debug)console.log(event.deltaX, event.deltaY, event.deltaFactor);

        currentScrollPos = $(".linkOverflow").scrollLeft();

        if (delta > 0) {
            // mousewheel is going up;
            $(".linkOverflow").scrollLeft( currentScrollPos - 30); // -= (delta * 30);
        } else {
            // mousewheel is going down
            $(".linkOverflow").scrollLeft( currentScrollPos + 30); //-= (delta * 30);
        }
    });




    if($('body').hasClass('page-template-special-template-gallerie')){
        if(debug)console.log('page gallerie');
    }

});