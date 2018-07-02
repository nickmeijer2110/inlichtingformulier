<fieldset id="afronden-4">
  <label for="uw_telefoonnummer">
    <i class="fa fa-phone"></i>
    <input id="uw_telefoonnummer" name="uw_telefoonnummer" type="text" placeholder="Uw telefoonnummer" autocomplete="off" spellcheck="false"/>
  </label>
  <img alt="Contact" class="telefonisch-contact-svg" src="assets/images/contact.svg" />
  <span class="start-tekst">Is telefonisch contact gewenst?</span>

  <div class="contact-gewenst">


    <div class="mui-checkbox">
      <input name="contact_gewenst[]" id="contact-gewenst" type="checkbox" value="ja">
      <label for="contact-gewenst">
        Ja
      </label>
    </div>

    <div class="mui-checkbox">
      <input name="contact_gewenst[]" id="contact-nietgewenst" type="checkbox" value="nee">
      <label for="contact-nietgewenst">
        Nee
      </label>
    </div>

  </div>

  <div class="buttons">
    <button tabindex="-1" type="button" id="terug-naar-afronden-3" class="btn btn-grijze-outline">
      <img alt="Vorige" class="vorige-svg" src="assets/images/vorige.svg" />
      Vorige
    </button>

    <button tabindex="-1" name="submit" type="submit" id="submit" class="btn btn-roze">
      Afronden
      <img alt="Volgende" class="volgende-svg" src="assets/images/volgende.svg" />
    </button>
  </div>
</fieldset>
