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

// play/pause hero video
function heroPlayPause() {

    var heroVideo = document.getElementById("video-hero");
    var heroBtn = document.getElementById("video-hero-btn");

    if (heroVideo.paused) {
        heroVideo.play();
        heroBtn.classList.add("hidden")
    } else {
        heroVideo.pause();
        heroBtn.classList.remove("hidden")
    }
}

// play/pause final video
function finalPlayPause() {

    var finalVideo = document.getElementById("video-final-result");
    var finalBtn = document.getElementById("video-final-btn");

    if (finalVideo.paused) {
        finalVideo.play();
        finalBtn.classList.add("hidden")
    } else {
        finalVideo.pause();
        finalBtn.classList.remove("hidden")
    }
}

// final slider
$(document).ready(function(){

    var slideWidth = $('#hero-container .images-wrapper').width();
	var slideHeight = $('#hero-container .images-wrapper').height();
    $('.images-wrapper.slider ul').css({ width: slideWidth, height: slideHeight });

    $('.images-wrapper.slider ul li').first().addClass('active');
    $('.images-wrapper.slider ul li').hide();
    $('.images-wrapper.slider ul li.active').show();

    $('#next-slide-btn').click(function(){
        $('.images-wrapper.slider ul li.active').removeClass('active').addClass('oldActive');

        if ( $('.oldActive').is(':last-child')) {
            $('.images-wrapper.slider ul li').first().addClass('active');
        } else{
            $('.oldActive').next().addClass('active');
        }

        $('.oldActive').removeClass('oldActive');
        $('.images-wrapper.slider ul li').fadeOut();
        $('.images-wrapper.slider ul li.active').fadeIn();
    });

    $('#prev-slide-btn').click(function(){
        $('.images-wrapper.slider ul li.active').removeClass('active').addClass('oldActive');

        if ( $('.oldActive').is(':first-child')) {
            $('.images-wrapper.slider ul li').last().addClass('active');
        } else{
            $('.oldActive').prev().addClass('active');
       }

       $('.oldActive').removeClass('oldActive');
       $('.images-wrapper.slider ul li').fadeOut();
       $('.images-wrapper.slider ul li.active').fadeIn();
    });
});
