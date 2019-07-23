/* menu header SP */
$('.hamberger').click(function(){
  $(this).toggleClass("active");
  $("body").toggleClass("layerOn");
  $(".layerMenu").slideToggle(500)
});
