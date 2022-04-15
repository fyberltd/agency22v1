$(document).on("mousemove", function (e) {
  //Get 'container' offset:
  o = $("#home_page").offset();
  //Track mouse position:
  $(".circle").css({
    top: e.pageY - o.top - 30,
    left: e.pageX - o.left - 30,
  });
});