$( document ).ready(function() {


  $( "#invullen-knop" ).click(function() {
    $("#formulier").delay(500).fadeOut(1000);

    setTimeout(function(){
      $(".formulier-content").addClass("nieuweHeight");
    }, 1500);

    setTimeout(function(){
      $("#form").fadeIn("fast").toggleClass("show");
    }, 3500);

});

$("#naar-stap-2").click(function() {
  setTimeout(function(){
    $("#stap1").addClass("vliegWeg");
    $("#stap2").addClass("vliegIn");
    $(".dot-1").removeClass("actief");
    $(".dot-2").addClass("actief");
  }, 1000);
});

Waves.init();
Waves.attach('button', '.btn');

});
