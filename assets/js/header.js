// add class to header to show shadow on scroll (mobile only)
$(document).ready(function() {
    var preheaderHeight = $('header').outerHeight(true);
    var scrollValue = 0

    $(window).scroll(function() {
        var scrolled = $(document).scrollTop() - scrollValue;
        scrollValue = $(document).scrollTop();

        if (scrolled > preheaderHeight) {
            // scrolling down
            $('header').addClass('on-scroll');
        } else if (scrolled < -preheaderHeight) {
            //scrolling up
            $('header').removeClass('on-scroll');
        }
    });
});

// show menu after click on burger menu icon (mobile only)
$('.burger-wrapper').on('click', function() {
    $('header').toggleClass('menu-shown');
    $('.burger-wrapper').toggleClass('shown');
    $('.navigation-wrapper').toggleClass('shown');
});

// show previous years dropdown on hover
$('#nav-years').hover(function() {
    $('#nav-years-button').toggleClass('active');
    $('.dropdown-body').toggleClass('shown');
});

// close dropdown if dropdown is shown and user clicks on another element
$(document).mouseup(function(e) {
    var yearsBtn = $('#nav-years-button');
    var yearsDropdown = $('.dropdown-body');

    if (yearsBtn.hasClass('active') && yearsDropdown.hasClass('shown') && !yearsBtn.is(e.target) && !yearsDropdown.is(e.target)) {
        $('#nav-years-button').removeClass('active');
        $('.dropdown-body').removeClass('shown');
    }
});
