// global mavigation >> mobile
$(document).ready(function showMobileNav(){
    $('#nav-burger').click(function(){
		$('.burger-icon').toggleClass('open');
        $('.menu-wrapper').toggleClass('open');
    });
});

$(document).ready(function showYearsDropdown(){
    $('#nav-years-button').click(function(){
		$('#nav-years-button').toggleClass('active');
        $('.dropdown-body').toggleClass('open');
    });
});

$(document).mouseup(function closeYearsDropdown(e) {
    var yearsTitle = $('#nav-years-button');
    var yearsDropdown = $('.dropdown-body');

    if (!yearsTitle.is(e.target) && !yearsDropdown.is(e.target) && yearsDropdown.has(e.target).length === 0) {
        $('#nav-years-button').removeClass('active');
        $('.dropdown-body').removeClass('open');
    }
});

//
// // global navigation >> previous years dropdown
// function showDropdown() {
//     document.getElementById("previous-years-button").classList.toggle("active");
//     document.getElementById("previous-years-list").classList.toggle("shown");
// }
//
// window.onclick = function(event) {
//   if (!event.target.matches('.dropdown-button')) {
//
//     var dropdowns = document.getElementsByClassName("dropdown-body");
//     var buttons = document.getElementsByClassName("dropdown-button");
//
//     var i;
//
//     for (i = 0; i < dropdowns.length; i++) {
//       var openDropdown = dropdowns[i];
//       if (openDropdown.classList.contains('shown')) {
//         openDropdown.classList.remove('shown');
//       }
//     }
//
//     for (i = 0; i < buttons.length; i++) {
//       var activeButton = buttons[i];
//       if (activeButton.classList.contains('active')) {
//         activeButton.classList.remove('active');
//       }
//     }
//   }
// }
//
// // hide & show popup window
// function showPopup() {
//     document.getElementById("container").classList.toggle("popup-active");
//     document.getElementById("slideshow").classList.toggle("popup-active");
//     document.getElementById("popup-location").classList.toggle("popup-shown");
//     document.getElementById("popup-close").classList.toggle("popup-shown");
// }
//
// window.onclick = function(event) {
//   if (!event.target.matches('.popup-body')) {
//
//     var popup = document.getElementsByClassName("popup-container");
//     var container = document.getElementsByClassName("content-container");
//
//     var i;
//
//     for (i = 0; i < popup.length; i++) {
//       var openPopup = popup[i];
//       if (openPopup.classList.contains('shown')) {
//         openPopup.classList.remove('shown');
//       }
//     }
//
//     for (i = 0; i < container.length; i++) {
//       var activePopup = container[i];
//       if (activePopup.classList.contains('active')) {
//         activePopup.classList.remove('active');
//       }
//     }
//   }
// }
//
// function showExpertise() {
//     document.getElementById("expertise-array").classList.toggle("expertise-shown");
// }
//
// var everyone = "all designers";
// var interaction = "interaction designers";
// var ux = "UX/UI designers";
// var product = "product designers";
// var visual = "visual designers";
//
// function changeExpertise(x) {
//     document.getElementById("expertise-button").innerHTML = x;
//     document.getElementById("expertise-array").classList.toggle("expertise-shown");
//     // document.getElementById("students-array").classList.toggle();
// }
//
// function showWork() {
//     document.getElementById("work-array").classList.toggle("work-shown");
// }
//
// var everywork = "all";
// var app = "app";
// var ar = "AR"
// var experiental = "experiental";
// var hybrid = "hybrid";
// var service = "service design";
// var ux = "UX/UI";
// var vr = "VR";
// var web = "web";
//
// function changeWork(x) {
//     document.getElementById("work-button").innerHTML = x + " projects";
//     document.getElementById("work-array").classList.toggle("expertise-shown");
//     // document.getElementById("students-array").classList.toggle();
// }
//
//
//
// function expandCard(div) {
//     var className = div.getAttribute("class");
//     document.getElementById("overlay").classList.toggle("overlay-on");
//
//     if (className == "student-single collapsed") {
//         div.className = "student-single expanded";
//     } else{
//         div.className = "student-single collapsed";
//     }
// }
