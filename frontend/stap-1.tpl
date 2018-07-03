<fieldset id="stap1">

  <img alt="Pistool" class="start-pistool-svg" src="assets/images/start.svg" />
  <span class="start-tekst">Klaar voor de start?</span>

  <label data-balloon-length="medium" data-balloon-pos="down" data-balloon="Volledige voor- en achternaam." for="naam_leerling">
    <i class="fa fa-user-o"></i>
    <input id="naam_leerling" maxlength="50" name="naam_leerling" type="text" placeholder="Naam leerling" autofocus autocomplete="off" spellcheck="false"/>
  </label>

  <label data-balloon-length="medium" data-balloon="Geboortedatum in dd/mm/jjjj formaat." data-balloon-pos="down" for="gebdatum_leerling">
    <i class="fa fa-calendar-o"></i>
    <input id="gebdatum_leerling" maxlength="10" name="gebdatum_leerling" placeholder="Geboordedatum leerling" type="text" autocomplete="off" spellcheck="false"/>
  </label>

  <img alt="Start" class="start-pijltje-svg" src="assets/images/start-pijltje.svg" />

  <div class="buttons">
    <button tabindex="-1" type="button" id="naar-stap-2" class="btn btn-roze">
      Starten
      <img alt="Volgende" class="volgende-svg" src="assets/images/volgende.svg" />
    </button>
  </div>
</fieldset>
