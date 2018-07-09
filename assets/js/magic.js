// filter work
$('.link-project-type').on('click', function() {

    $('.link-project-type').removeClass('active');
    $(this).addClass('active');

    var projectClass = $(this).attr('id');

    $('.projects-wrapper').delay('fast').fadeTo(250, 0, function(){
        $('.single-project').hide();

        if (projectClass === 'project-type-al') {
            $('.single-project').show();
        } else {
            $('.'+projectClass).show();
        }

        $('.projects-wrapper').delay('fast').fadeTo(250, 1);
    });
});

// fiter students
$('.link-student-title').on('click', function() {

    $('.link-student-title').removeClass('active');
    $(this).addClass('active');

    var titleClass = $(this).attr('id');

    $('.stundets-wrapper').delay('fast').fadeTo(250, 0, function(){
        $('.single-student').hide();

        if (titleClass === 'student-title-al') {
            $('.single-student').show();
        } else {
            $('.'+titleClass).show();
        }

        $('.stundets-wrapper').delay('fast').fadeTo(250, 1);
    });
});
