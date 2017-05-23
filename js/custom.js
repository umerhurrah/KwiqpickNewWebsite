
//(function ($) {
//    $(function () {
//        $('.button-collapse').sideNav();
//        $('.parallax').parallax();
//    }); // end of document ready
//})(jQuery); // end of jQuery name space


$(document).on('click', 'a', function () {
    elementId = $(this).attr('href');
    $("html, body").animate({
        scrollTop: $(elementId).offset().top - 10
    }, "slow");
    return false;
});

$(function () {
    $('.pt-active .btnGetPlan').css('display', 'block');
});


$('.plan').hover(function () {
    $('.plan').removeClass('pt-active');
    $('.btnGetPlan').css('display', 'none');
    $(this).addClass('pt-active');
    $('.pt-active .btnGetPlan').css('display', 'block');
})

$(function () {
    $(window).scroll(function () {
        $('.fadeInBlock').each(function (i) {

            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            /* Adjust the "200" to either have a delay or that the content starts fading a bit before you reach it  */
            bottom_of_window = bottom_of_window + 200;

            if (bottom_of_window > bottom_of_object) {

                $(this).animate({ 'opacity': '1' }, 500);

            }
        });

    });
});

window.setTimeout(function () {
        $(".alert").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 5000);