<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#000">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="apple-mobile-web-app-title" content="Nick Meijer">
    <meta name="author" content="Nick Meijer">
    <meta name="description" content="Wil jij ook worden wat je bent? Het Mediacollege Inlichtenformulier helpt een handje mee!" />
    <title>Mediacollege Amsterdam - Inlichtingenformulier</title>
    <link rel="stylesheet" type="text/css" href="assets/css/core.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/waves.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" />
    <link rel="shortcut icon" type="image/jpg" sizes="50x50" href="assets/images/icon.jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/waves.js"></script>
</head>
  <body>

    <div id="video-player" class="fullscreen-bg">
  		<video class="fullscreen-bg__video" autoplay muted poster="assets/images/videoframe.png">
  			<source src="assets/videos/codekraker.mp4" type="video/mp4">
  		</video>
  		<div class="fullscreen-bg__playlist">
  			<a href="assets/videos/codekraker.mp4" class="current-video"></a>
  			<a href="assets/videos/dramaqueen.mp4"></a>
  			<a href="assets/videos/herrieschopper.mp4"></a>
        <a href="assets/videos/kunstbeest.mp4"></a>
        <a href="assets/videos/williewortel.mp4"></a>
  		</div>
  	</div>

    <div class="logo">
      <img src="assets/images/logo.svg" class="logo_img"/>
      <center>
        <img src="assets/images/logo_tekst.svg" alt="MediaCollege Amsterdam" class="logo_tekst">
      </center>
    </div>

    <div class="container">
      <div class="center">
        <div class="formulier-content">
          <div id="formulier" class="formulier">
            <div class="titel">Inlichtingenformulier</div>

            <?php
            $jaarnu = date('Y');
            $volgendjaar = date('Y') +1;
            ?>

            <div class="schooljaar">Schooljaar <?php echo $jaarnu; ?> - <?php echo $volgendjaar; ?></div>
            <h2>
              Waar wacht je nog op? Vul 'm <span>nu</span> in!
              <img class="pijltje" src="assets/images/pijltje.svg" />
            </h2>
            <br />
            <button id="invullen-knop" type="button" class="button">
              Invullen
              <img style="vertical-align: -3px;" width="20px" src="assets/images/pen.svg" />
            </button>
          </div>

          <!-- form -->

          <div id="form" class="form">
            <div class="stappen-proces">
              <div class="lijn"></div>
                <div class="stap-dot dot-1 actief"></div>
                <div class="stap-dot dot-2"></div>
                <div class="stap-dot dot-3"></div>
                <div class="stap-dot dot-4"></div>
            </div>

            <form method="POST">

              <fieldset id="stap1">
                <img class="start-pistool" src="assets/images/start.svg" />
                <span class="start-tekst">Klaar voor de start?</span>

                <label for="naam">
                  <i class="fa fa-user-o"></i>
                  <input name="naam" type="text" placeholder="Naam leerling" required/>
                </label>

                <label for="datum">
                  <i style="left: 2px; top: 15px" class="fa fa-calendar-o"></i>
                  <input style="padding-left: 37px;" name="geboortedatum" type="date" placeholder="Geboortedatum leerling" required/>
                </label>

                <button tabindex="-1" type="button" id="naar-stap-2" class="btn btn-roze">
                  Volgende stap
                  <img style="vertical-align: 0px; margin-left: 5px" height="10px" src="assets/images/volgende.svg" />
                </button>

              </fieldset>

              <fieldset id="stap2">
                Stap 2.
              </fieldset>
            </form>
          </div>

        </div>
      </div>
    </div>

    <a class="nm-logo" target="_blank" href="http://22406.hosts.ma-cloud.nl">
      <img width="50px" src="assets/images/nm-logo.png" />
    </a>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/bg-videos.js"></script>
  </body>
</html>
