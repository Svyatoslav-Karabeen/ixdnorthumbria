function showDropdown() {
    document.getElementById("previous-years-button").classList.toggle("active");
    document.getElementById("previous-years-list").classList.toggle("shown");
}

function showLocation() {
    document.getElementById("container").classList.toggle("popup-active");
    document.getElementById("popup-location").classList.toggle("popup-shown");
    document.getElementById("popup-close").classList.toggle("popup-shown");
}

function hideLocation() {
    document.getElementById("container").classList.toggle("popup-active");
    document.getElementById("popup-location").classList.toggle("popup-shown");
    document.getElementById("popup-close").classList.toggle("popup-shown");
}

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

  if (!event.target.matches('.popup-body')) {

    var popup = document.getElementsByClassName("popup-container");
    var container = document.getElementsByClassName("content-container");

    var i;

    for (i = 0; i < popup.length; i++) {
      var openPopup = popup[i];
      if (openPopup.classList.contains('shown')) {
        openPopup.classList.remove('shown');
      }
    }

    for (i = 0; i < container.length; i++) {
      var activePopup = container[i];
      if (activePopup.classList.contains('active')) {
        activePopup.classList.remove('active');
      }
    }
  }
}
