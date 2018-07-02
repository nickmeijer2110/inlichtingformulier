$( document ).ready(function() {

$("#top-div-weg").remove();

  $( "#invullen-knop" ).click(function() {
    $("#formulier").delay(500).fadeOut(1000);

    setTimeout(function(){
      $(".formulier-content").addClass("nieuweHeight");
    }, 1500);

    if ($(window).width() > 600) {
    setTimeout(function(){
      $("#form").fadeIn("fast").toggleClass("show");
      $(".overlay").css("opacity", 1);
    }, 3500);

  }

    if ($(window).width() < 600) {
      setTimeout(function(){
        $("#form").fadeIn("fast").toggleClass("show");
        $(".overlay").css("opacity", 1);
      }, 1500);
}

});

/* Stap 2 buttons */

$("#terug-naar-1").click(function() {
  setTimeout(function(){
    $("#stap2").removeClass("vliegIn");
    $("#stap1").removeClass("vliegWeg");
    $("#stap2").addClass("vliegWegRechts");
    $("#stap1").addClass("vliegIn");
    $(".dot-2").removeClass("actief");
    $(".dot-1").addClass("actief");
    $('title').html("Stap 1 - Inlichtingenformulier");
  }, 10);
});

$("#naar-stap-2").click(function() {
  setTimeout(function(){
    $("#stap1").removeClass("vliegIn");
    $("#stap2").removeClass("vliegWegRechts");
    $("#stap1").addClass("vliegWeg");
    $("#stap2").addClass("vliegIn");
    $(".dot-1").removeClass("actief");
    $(".dot-2").addClass("actief");
    $('title').html("Stap 2 - Inlichtingenformulier");
  }, 10);
});

/* Einde Stap 2 buttons */


/* Stap 3 buttons */
$("#naar-stap-3").click(function() {
  setTimeout(function(){
    $("#stap2").removeClass("vliegIn");
    $("#stap2").addClass("vliegWeg");
    $("#stap3").removeClass("vliegWegRechts");
    $("#stap3").addClass("vliegIn");
    $(".dot-2").removeClass("actief");
    $(".dot-3").addClass("actief");
    $('title').html("Stap 3 - Inlichtingenformulier");
}, 10);

  setTimeout(function(){
  $("#goed").attr( "data-balloon-visible", "");
}, 2500);

  setTimeout(function(){
  $("#goed").removeAttr("data-balloon-visible");
}, 5000);

setTimeout(function(){
$("#voldoende").attr( "data-balloon-visible", "");
}, 6000);

setTimeout(function(){
$("#voldoende").removeAttr("data-balloon-visible");
}, 8500);

setTimeout(function(){
$("#matig").attr( "data-balloon-visible", "");
}, 9500);

setTimeout(function(){
$("#matig").removeAttr("data-balloon-visible");
}, 11500);

setTimeout(function(){
$("#onvoldoende").attr( "data-balloon-visible", "");
}, 12500);

setTimeout(function(){
$("#onvoldoende").removeAttr("data-balloon-visible");
}, 15000);


});

$("#terug-naar-2").click(function() {
  setTimeout(function(){
    $("#stap3").removeClass("vliegIn");
    $("#stap2").removeClass("vliegWeg");
    $("#stap3").addClass("vliegWegRechts");
    $("#stap2").addClass("vliegIn");
    $(".dot-3").removeClass("actief");
    $(".dot-2").addClass("actief");
    $('title').html("Stap 2 - Inlichtingenformulier");
  }, 10);
});

$("#naar-stap-4").click(function() {
  setTimeout(function(){
    $("#stap3").removeClass("vliegIn");
    $("#stap3").addClass("vliegWeg");
    $("#stap4").removeClass("vliegWegRechts");
    $("#stap4").addClass("vliegIn");
    $(".dot-3").removeClass("actief");
    $(".dot-4").addClass("actief");
    $('title').html("Stap 4 - Inlichtingenformulier");
  }, 10);
});
/* Einde Stap 3 buttons */

/* Stap 4 buttons */
$("#terug-naar-3").click(function() {
  setTimeout(function(){
    $("#stap4").removeClass("vliegIn");
    $("#stap3").removeClass("vliegWeg");
    $("#stap4").addClass("vliegWegRechts");
    $("#stap3").addClass("vliegIn");
    $(".dot-4").removeClass("actief");
    $(".dot-3").addClass("actief");
    $('title').html("Stap 3 - Inlichtingenformulier");
  }, 10);
});


/* Afronden buttons */

/* Stap 1 */
$("#afronden-knop").click(function() {
  setTimeout(function(){
    $("#stap4").removeClass("vliegIn");
    $("#stap4").addClass("vliegWeg");
    $("#stap4").removeClass("vliegWegRechts");
    $("#afronden-1").addClass("vliegIn");
    $(".dot-3").removeClass("actief");
    $(".dot-4").removeClass("actief");
    $(".dot-1").addClass("actief");
    $('title').html("Gegevens 1 - Inlichtingenformulier");
  }, 10);
});

$("#naar-afronden-2").click(function() {
  setTimeout(function(){
    $("#afronden-1").removeClass("vliegIn");
    $("#afronden-2").removeClass("vliegWegRechts");
    $("#afronden-1").addClass("vliegWeg");
    $("#afronden-2").addClass("vliegIn");
    $(".dot-1").removeClass("actief");
    $(".dot-2").addClass("actief");
    $('title').html("Gegevens 2 - Inlichtingenformulier");
  }, 10);
});

/* Stap 1 einde */

/* Stap 2 */
$("#terug-naar-afronden-1").click(function() {
  setTimeout(function(){
    $("#afronden-2").removeClass("vliegIn");
    $("#afronden-1").removeClass("vliegWeg");
    $("#afronden-2").addClass("vliegWegRechts");
    $("#afronden-1").addClass("vliegIn");
    $(".dot-2").removeClass("actief");
    $(".dot-1").addClass("actief");
    $('title').html("Gegevens 1 - Inlichtingenformulier");
  }, 10);
});


$("#naar-afronden-3").click(function() {
  setTimeout(function(){
    $("#afronden-2").removeClass("vliegIn");
    $("#afronden-3").removeClass("vliegWegRechts");
    $("#afronden-2").addClass("vliegWeg");
    $("#afronden-3").addClass("vliegIn");
    $(".dot-2").removeClass("actief");
    $(".dot-3").addClass("actief");
    $('title').html("Gegevens 3 - Inlichtingenformulier");
  }, 10);
});

/* Einde stap 2 */

/* Stap 3 */
$("#terug-naar-afronden-2").click(function() {
  setTimeout(function(){
    $("#afronden-3").removeClass("vliegIn");
    $("#afronden-2").removeClass("vliegWeg");
    $("#afronden-3").addClass("vliegWegRechts");
    $("#afronden-2").addClass("vliegIn");
    $(".dot-3").removeClass("actief");
    $(".dot-2").addClass("actief");
    $('title').html("Gegevens 2 - Inlichtingenformulier");
  }, 10);
});

$("#naar-afronden-4").click(function() {
  setTimeout(function(){
    $("#afronden-3").removeClass("vliegIn");
    $("#afronden-3").addClass("vliegWeg");
    $("#afronden-4").removeClass("vliegWegRechts");
    $("#afronden-4").addClass("vliegIn");
    $(".dot-3").removeClass("actief");
    $(".dot-4").addClass("actief");
    $('title').html("Gegevens 4 - Inlichtingenformulier");
  }, 10);
});

/* Einde stap 3 */

/* Begin Stap 4 */
$("#terug-naar-afronden-3").click(function() {
  setTimeout(function(){
    $("#afronden-4").removeClass("vliegIn");
    $("#afronden-3").removeClass("vliegWeg");
    $("#afronden-4").addClass("vliegWegRechts");
    $("#afronden-3").addClass("vliegIn");
    $(".dot-4").removeClass("actief");
    $(".dot-3").addClass("actief");
    $('title').html("Gegevens 3 - Inlichtingenformulier");
  }, 10);
});
/* Einde stap 4 */

$("#submit").click(function() {
  setTimeout(function(){
    $("#afronden-4").removeClass("vliegIn");
    $("#afronden-4").addClass("vliegWeg");
    $("#afgerond").addClass("vliegIn");
    $(".dot-4").removeClass("actief");
    $(".dot-1").addClass("dot-afgerond");
    $(".dot-2").addClass("dot-afgerond");
    $(".dot-3").addClass("dot-afgerond");
    $(".dot-4").addClass("dot-afgerond");
    $('title').html("Afgerond - Inlichtingenformulier");
    $(".sa-success").removeClass("hide");
  }, 10);
});


/* Einde afronden buttons */


/*Add id foreach div*/
$(document).ready(function(){
  $.each($('.select-items div'), function(ind) {
    $(this).attr('id', 'opleiding-' + parseInt(ind + 1));
    $(this).attr('value', 'opleiding-' + parseInt(ind + 1));
  });

  $('.select-items div').click(function(e) {
    if ($("#opleiding-1").hasClass("same-as-selected")) {
      $(".opleiding-optie").removeClass('laten-zien');
      $("#opleiding-1-input").addClass('laten-zien');
      $("#opleiding-leeg").addClass('weghalen');

    } else if ($("#opleiding-2").hasClass("same-as-selected")) {
      $(".opleiding-optie").removeClass('laten-zien');
      $("#opleiding-2-input").addClass('laten-zien');
      $("#opleiding-leeg").addClass('weghalen');

    } else if ($("#opleiding-3").hasClass("same-as-selected")) {
      $(".opleiding-optie").removeClass('laten-zien');
      $("#opleiding-3-input").addClass('laten-zien');
      $("#opleiding-leeg").addClass('weghalen');

    } else if ($("#opleiding-4").hasClass("same-as-selected")) {
      $(".opleiding-optie").removeClass('laten-zien');
      $("#opleiding-4-input").addClass('laten-zien');
      $("#opleiding-leeg").addClass('weghalen');

    } else if ($("#opleiding-5").hasClass("same-as-selected")) {
      $(".opleiding-optie").removeClass('laten-zien');
      $("#opleiding-5-input").addClass('laten-zien');
      $("#opleiding-leeg").addClass('weghalen');
    } else {
      $(".opleiding-optie").removeClass('laten-zien');
      $("#opleiding-leeg").addClass('weghalen');
    }
  });

  $("#submit").click(function() {
    var uw_naam = $('input[name=uw_naam]').val().split(' ')[0];
    $('.afgerond-naam').html(uw_naam);
  });

});


Waves.init();
Waves.attach('button', '.btn');

});
