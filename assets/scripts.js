$(document).ready(function () { 
    
    if ($(window).height() >= 616) {
        $('.fullpage').css("height", $(window).height());
    } else {
        $('.fullpage').css("height", "650px");
    }
    
    $('.scrollUp').hide();
    
    $(window).scroll(function () {
        $('h2,h3').each(function () {
            
            var elementPos = $(this).offset().top, topOfWindow = $(window).scrollTop();
            if (elementPos < topOfWindow + 600) {
                $(this).addClass("animated slideInDown");
            }
        });
        
        if ($(document).scrollTop() <= 100) {
            $('.scrollUp').hide('slow');
        } else if ($(document).scrollTop() > 0) {
            $('.scrollUp').show('slow');
        }
    });


    $('a[href^="#"]').on('click', function (event) {

        var target = $(this.getAttribute('href'));

        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }

    });
    
});