$(document).scroll(function() {
if ($(this).scrollTop() > ($("#rec-post").offset().top)-450 ) {
  $("#rec-post").animate({opacity:'1'},"slow");
}
if ($(this).scrollTop() > ($("#pics").offset().top)-570 ) {
  $("#pics").animate({opacity:'1'},"slow");
}
if($(this).scrollTop() > ($("#about-me").offset().top)-570 ) {
  $("#about-me").animate({opacity:'1'},"slow");
}
});

var date = new Date();
$("#tahun").html(date.getYear()+1900);

$("#btn-scroll button").click(function() {
  $('html,body').animate({
    scrollTop: ($("#rec-post").offset().top) + 40},'slow');
});

$("#about").click(function() {
  $('html,body').animate({
    scrollTop: ($("#about-me").offset().top) - 120},'slow');
});

var backgroundHeight = $("#dibawah-header").height() / 2;

  $(document).scroll(function(){
    if ($(document).scrollTop() < backgroundHeight) {
        $( "#navbar-fixed" ).stop().animate({
          marginTop : '-75px'
       }, 200);

      console.log($(document).scrollTop());
       
      } else {
        $("#navbar-fixed").stop().animate({
          marginTop : 0
       }, 200);
      }
  });