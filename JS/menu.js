$(document).ready(function() {
    $('.sidebar ul li a').click(function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        $('.combo-section').removeClass('active');
        $(target).addClass('active');
        $('html, body').animate({
            scrollTop: $(target).offset().top - 90
        }, 200);
    });
});
