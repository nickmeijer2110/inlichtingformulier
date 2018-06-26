<fieldset id="afronden-4">
  <label for="telefoonnummer">
    <i class="fa fa-phone"></i>
    <input name="telefoonnummer" type="text" placeholder="Uw telefoonnummer" autocomplete="off" spellcheck="false" required/>
  </label>
  <img class="telefonisch-contact-svg" src="assets/images/contact.svg" />
  <span class="start-tekst">Is telefonisch contact gewenst?</span>

  <div class="contact-gewenst">


    <div class="mui-checkbox">
      <input id="contact-gewenst" type="checkbox" value="">
      <label for="contact-gewenst">
        Ja
      </label>
    </div>

    <div class="mui-checkbox">
      <input id="contact-nietgewenst" type="checkbox" value="">
      <label for="contact-nietgewenst">
        Nee
      </label>
    </div>

  </div>

  <div class="buttons">
    <button tabindex="-1" type="button" id="terug-naar-afronden-3" class="btn btn-grijze-outline">
      <img class="vorige-svg" src="assets/images/vorige.svg" />
      Vorige
    </button>

    <button tabindex="-1" type="button" id="afronden-knop-2" class="btn btn-roze">
      Afronden
      <img class="volgende-svg" src="assets/images/afronden.svg" />
    </button>
  </div>
</fieldset>
