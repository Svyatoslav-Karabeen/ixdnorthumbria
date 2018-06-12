/* When the user clicks on the button, toggle between hiding and showing class */
function showDropdown() {
    document.getElementById("previous-years-button").classList.toggle("active");
    document.getElementById("previous-years-list").classList.toggle("shown");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropdown-button')) {

    var dropdowns = document.getElementsByClassName("dropdown-body");
    var buttons = document.getElementsByClassName("dropdown-button");

    var i;

    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('shown')) {
        openDropdown.classList.remove('shown');
      }
    }

    for (i = 0; i < buttons.length; i++) {
      var activeButton = buttons[i];
      if (activeButton.classList.contains('active')) {
        activeButton.classList.remove('active');
      }
    }
  }
}
