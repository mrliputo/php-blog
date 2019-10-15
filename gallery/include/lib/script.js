$(document).scroll(function(){
    if ($(document).scrollTop() < 100) {
        $( "#gal-navbar-fixed" ).stop().animate({
          marginTop : '-75px'
       }, 200);

      console.log($(document).scrollTop());
       
      } else {
        $("#gal-navbar-fixed").stop().animate({
          marginTop : 0
       }, 200);
      }
  });

$(".fancybox").fancybox();

var date = new Date();
$("#tahun").html(date.getYear()+1900);