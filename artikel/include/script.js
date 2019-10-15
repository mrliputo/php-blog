var date = new Date();
$("#tahun").html(date.getYear()+1900);

var areaJava = document.getElementsByClassName("codeShell");
  for(var i=0; i<areaJava.length; i++) {
    CodeMirror.fromTextArea(areaJava.item(i), {
      mode: "text/x-sh",
      lineNumbers: true,
      theme: "ttcn",
      readOnly: true,
      tabSize: 2,
    });  
  }  
  
  var areaPhp = document.getElementsByClassName("codePhp");
  for(var i=0; i<areaPhp.length; i++) {
    CodeMirror.fromTextArea(areaPhp.item(i), {
  mode: "application/x-httpd-php",
    lineNumbers: true,
    theme: "ttcn",
    readOnly: true,
    tabSize: 2,
    scrollbarStyle: "simple",
   });  
  }
  $(".CodeMirror").mouseenter(function() {
    $(".CodeMirror-simplescroll-horizontal").animate({"height":"8px","bottom":"0"},'fast');
    $(".CodeMirror-simplescroll-vertical").animate({"width":"8px","right":"0"},'fast');
  });
  $(".CodeMirror").mouseleave(function() {
    $(".CodeMirror-simplescroll-horizontal").animate({"height":"0","bottom":"-5px"},'fast');
    $(".CodeMirror-simplescroll-vertical").animate({"width":"0","right":"-5px"},'fast');
  });
