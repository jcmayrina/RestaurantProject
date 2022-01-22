$(document).ready(function () {
  $("ul.nav-list > li > a").click(function (e) {
    $("ul.nav-list > li > a").removeClass("active");
    $(this).addClass("active");
  });
});
function getImage(imagename) {
  var newimg = imagename.replace(/^.*\\/, "");
  $("#display-image").html(newimg);
}
function menuToggle() {
  var nav = document.getElementById("menu-small");
  nav.classList.toggle("active");
  var nav = document.getElementById("toggleIcon");
  nav.classList.toggle("active");
}
function menumenuToggle() {
  var nav = document.getElementById("menu-menu");
  nav.classList.toggle("active");
}
