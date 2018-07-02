<?php

  echo '<!DOCTYPE html><html lang="en">';

  require 'start.php';

  $formulier->display('head.tpl');

  echo '<body>';

  echo '<div id="top-div-weg" class="formulier-gegevens">';
  require 'engine.php';
  echo '</div>';


  $formulier->display('video-achtergrond.tpl');
  $formulier->display('logo.tpl');

  echo '<div class="container">
        <div class="center">
        <div class="formulier-content">';

  $jaarnu = date('Y');
  $volgendjaar = date('Y') +1;
  $formulier->assign('jaarnu', $jaarnu);
  $formulier->assign('volgendjaar', $volgendjaar);
  $formulier->display('pagina-intro-invullen.tpl');

  echo '<div id="form" class="form">';

  // Stappen indicatie
  $formulier->display('stappen-dots.tpl');

  // Start formulier
  echo '<form action="engine.php" method="post">';

  // Formulier: leerling gegevens
  $formulier->display('stap-1.tpl');
  $formulier->display('stap-2.tpl');
  $formulier->display('stap-3.tpl');
  $formulier->display('stap-4.tpl');

  // Formulier: afronden & mentor/decaan gegevens
  $formulier->display('afronden-1.tpl');
  $formulier->display('afronden-2.tpl');
  $formulier->display('afronden-3.tpl');
  $formulier->display('afronden-4.tpl');
  $formulier->display('afgerond.tpl');

  echo '</form>
        </div>
        </div>
        </div>
        </div>';

  $formulier->display('modal.tpl');
  $formulier->display('nm-logo-en-js.tpl');

  ?>


  <!-- Submit POST via ajax -->

  <script>
  $(function () {

    var formulier_data = $('.formulier-gegevens');
    var html = "";

    $('form').bind('submit', function (event) {

  event.preventDefault();

      $.ajax({
        type: 'POST',
        url: 'engine.php',
        data: $('form').serialize(),
        success: function (html) {
          formulier_data.html(html);
        }
      });

    });
  });

  </script>

  <!-- Genereer PDF via jsPDF -->

  <script>
  $(document).ready(function(){
    var doc = new jsPDF();

// We'll make our own renderer to skip this editor
var specialElementHandlers = {
 '#editor': function(element, renderer){
   return true;
 }
};

   $('#cmd').click(function () {
       doc.fromHTML($('#formulier-gegevens-pdf').get(0), 15, 15, {
       'width': 170,
       'elementHandlers': specialElementHandlers
     });
       doc.save('Inlichtingenformulier.pdf');
     });
});
</script>

  <?php
  echo "</body>";
  echo "</html>";
  ?>
