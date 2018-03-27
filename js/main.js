var debug = true;

$(document).ready( function(){



    if($('body').hasClass('page-template-special-template-chapitre')){
        if(debug)console.log('page chapitre');

        // Mousewheel scroll on the image gallery

        $('#liens').on('mousewheel', function(event,delta) {
            event.preventDefault();

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
    }


    if($('body').hasClass('page-template-special-template-image')){
        if(debug)console.log('page image');
    }

    if($('body').hasClass('page-template-special-template-galerie')) {
        if (debug)console.log('page galerie');

        if (window.matchMedia("(max-width : 1200px)").matches) {
            // for mobile version : reverse the order of the elements

            $('.legende-galerie').each(function () {
                $(this).insertAfter($(this).next().find('.compteur'));
            });
        }

        $('.main-carousel').flickity({
            // options
            prevNextButtons: true,
            wrapAround: true,
            lazyLoad: true
        });
    }
});