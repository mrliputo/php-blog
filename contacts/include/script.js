$(document).scroll(function(){
    if ($(document).scrollTop() < 100) {
        $( "#con-navbar-fixed" ).stop().animate({
          marginTop : '-75px'
       }, 200);

      console.log($(document).scrollTop());
       
      } else {
        $("#con-navbar-fixed").stop().animate({
          marginTop : 0
       }, 200);
      }
  });

var date = new Date();
$("#tahun").html(date.getYear()+1900);