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
