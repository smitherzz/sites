window.console.log("Hello from Javascript");
function init() {
  var lightboxElements = "<div id='lightbox'>";
  lightboxElements += "<div id='overlay' class='hidden'></div>";
  lightboxElements += "<img class='hidden' id='big-image' />";
  lightboxElements += "</div>";
  document.querySelector("body").innerHTML += lightboxElements;
}

document.addEventListener("DOMContentLoaded", init, false);
