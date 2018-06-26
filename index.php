<?php
  require 'librarys/Smarty.class.php';
  require 'config/engine.php';

  echo '<!DOCTYPE html><html>';
  $formulier->display('head.tpl');
  echo '<body>';

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
  echo '<form method="POST">';

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

  echo '</form>
        </div>
        </div>
        </div>
        </div>';

  $formulier->display('nm-logo-en-js.tpl');
  echo "</body>";
  echo "</html>";
?>
