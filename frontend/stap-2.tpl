<fieldset id="stap2">

  <!-- Select in huisstijl -->

  <div class="custom-select2" style="width:200px;">
    <img class="opleiding-icoon" src="assets/images/opleiding-hoed.svg" />
  <select name="opleiding_niveau">
    <option>Opleiding</option>
    <option value="vmbo">VMBO</option>
    <option value="havo">HAVO</option>
    <option value="vwo">VWO</option>
    <option value="mbo">MBO</option>
    <option value="anders">Anders</option>
  </select>
</div>

  <!-- JS voor select in huisstijl -->
  <script src="assets/js/select.js"></script>

  <!-- Einde Select in huisstijl -->

  <!-- Opleiding gekozen? Aanvullende informatie invullen -->
  <div id="opleiding-leeg" class="opleiding-leeg laten-zien">
    <img class="opleiding-svg" src="assets/images/opleiding.svg" />
    <span class="start-tekst">Welk opleidingsniveau heeft de leerling momenteel?</span>
  </div>

  <div id="opleiding-1-input" class="opleiding-optie">
    <div class="aanvullende-informatie">
      <div class="checkbox-groep">

      <div class="checkbox-row">
        <div class="mui-checkbox">
          <input name="vmbo_niveau[]" id="vmbo-bb" type="checkbox" value="VMBO-BB">
          <label for="vmbo-bb">
            Niveau BB
          </label>
        </div>

        <div class="mui-checkbox">
          <input name="vmbo_niveau[]" id="vmbo-gl" type="checkbox" value="VMBO-GL">
          <label for="vmbo-gl">
            Niveau GL
          </label>
        </div>
      </div>

      <div class="checkbox-row">
        <div class="mui-checkbox">
          <input name="vmbo_niveau[]" id="vmbo-kb" type="checkbox" value="VMBO-KB">
          <label for="vmbo-kb">
            Niveau KB
          </label>
        </div>

        <div class="mui-checkbox">
          <input name="vmbo_niveau[]" id="vmbo-tl" type="checkbox" value="VMBO-TL">
          <label for="vmbo-tl">
            Niveau TL
          </label>
        </div>
      </div>

      <div class="checkbox-row">
        <div class="mui-checkbox">
          <input name="vmbo_niveau[]" id="vmbo-lwt" type="checkbox" value="VMBO-LWT">
          <label for="vmbo-lwt">
            Niveau LWT
          </label>
        </div>

        <div class="mui-checkbox">
          <input name="vmbo_niveau[]" id="vmbo-lwoo" type="checkbox" value="VMBO-LWOO">
          <label for="vmbo-lwoo">
            Niveau LWOO
          </label>
        </div>
      </div>
    </div>

    <div class="checkbox-groep2">
      <div class="checkbox-row">
        <div class="mui-checkbox">
          <input name="vmbo_sector[]" id="vmbo-economie" type="checkbox" value="economie">
          <label for="vmbo-economie">
            Economie
          </label>
        </div>

        <div class="mui-checkbox">
          <input name="vmbo_sector[]" id="vmbo-landbouw" type="checkbox" value="landbouw">
          <label for="vmbo-landbouw">
            Landbouw
          </label>
        </div>
      </div>

      <div class="checkbox-row">
        <div class="mui-checkbox">
          <input name="vmbo_sector[]" id="vmbo-techniek" type="checkbox" value="techniek">
          <label for="vmbo-techniek">
            Techniek
          </label>
        </div>

        <div class="mui-checkbox">
          <input name="vmbo_sector[]" id="vmbo-zorgwelzijn" type="checkbox" value="zorgwelzijn">
          <label for="vmbo-zorgwelzijn">
            Zorg/Welzijn
          </label>
        </div>
      </div>
    </div>

    <div class="checkbox-groep3">
      <div class="keuzevak">
        MVI keuzevak?
      </div>
      <div class="mui-checkbox mvi-checkbox">
        <input name="mvi_keuzevak[]" id="mvi-ja" type="checkbox" value="ja">
        <label for="mvi-ja">
          Ja
        </label>
      </div>

      <div class="mui-checkbox mvi-checkbox2">
        <input name="mvi_keuzevak[]" id="mvi-nee" type="checkbox" value="nee">
        <label for="mvi-nee">
          Nee
        </label>
      </div>

      <label class="diploma" for="diploma">
        <i class="fa fa-calendar-o"></i>
        <input name="vmbo_diploma" name="diploma" type="text" placeholder="Diploma behaald / Te behalen?" autofocus autocomplete="off" spellcheck="false" />
      </label>


    </div>

    </div>
  </div>

  <div id="opleiding-2-input" class="opleiding-optie">
    <label class="diploma" for="diploma">
      <i class="fa fa-calendar-o"></i>
      <input name="havo_diploma" type="text" placeholder="Diploma behaald / Te behalen?" autofocus autocomplete="off" spellcheck="false" />
    </label>

    <img class="overgangsbewijs-svg" src="assets/images/overgangsbewijs.svg" />
    <span class="start-tekst">Overgangsbewijs</span>

    <label class="overgangsbewijs-input" for="van-jaar">
      <i class="fa fa-calendar-o"></i>
      <input name="havo_overgang_van" min="1" max="6" placeholder="Van leerjaar" type="number" autocomplete="off" spellcheck="false" />
    </label>

    <label class="overgangsbewijs-input" for="naar-jaar">
      <i class="fa fa-calendar-o"></i>
      <input name="havo_overgang_naar" min="1" max="6" placeholder="Naar leerjaar" type="number" autocomplete="off" spellcheck="false" />
    </label>

  </div>

  <div id="opleiding-3-input" class="opleiding-optie">
    <label class="diploma" for="diploma">
      <i class="fa fa-calendar-o"></i>
      <input name="vwo_diploma" type="text" placeholder="Diploma behaald / Te behalen?" autofocus autocomplete="off" spellcheck="false" />
    </label>

    <img class="overgangsbewijs-svg" src="assets/images/overgangsbewijs.svg" />
    <span class="start-tekst">Overgangsbewijs</span>

    <label class="overgangsbewijs-input" for="van-jaar">
      <i class="fa fa-calendar-o"></i>
      <input name="vwo_overgang_van" min="1" max="6" placeholder="Van leerjaar" type="number" autocomplete="off" spellcheck="false" />
    </label>

    <label class="overgangsbewijs-input" for="naar-jaar">
      <i class="fa fa-calendar-o"></i>
      <input name="vwo_overgang_naar" min="1" max="6" placeholder="Naar leerjaar" type="number" autocomplete="off" spellcheck="false" />
    </label>

  </div>

  <div id="opleiding-4-input" class="opleiding-optie">
      <div class="checkbox-groep4">
        <div class="mui-checkbox">
          <input name="mbo_niveau[]" id="mbo-1" type="checkbox" value="niveau1">
          <label for="mbo-1">
            Niveau 1
          </label>
        </div>

        <div class="mui-checkbox">
          <input name="mbo_niveau[]" id="mbo-2" type="checkbox" value="niveau2">
          <label for="mbo-2">
            Niveau 2
          </label>
        </div>

        <div class="mui-checkbox">
          <input name="mbo_niveau[]" id="mbo-3" type="checkbox" value="niveau3">
          <label for="mbo-3">
            Niveau 3
          </label>
        </div>

        <div class="mui-checkbox">
          <input name="mbo_niveau[]" id="mbo-4" type="checkbox" value="niveau4">
          <label for="mbo-4">
            Niveau 4
          </label>
        </div>
      </div>

      <div class="checkbox-groep5">
      <div class="keuzevak">
        Leerweg
      </div>
      <div class="mui-checkbox mvi-checkbox">
        <input name="mbo_leerweg[]" id="leerweg-bol" type="checkbox" value="bol">
        <label for="leerweg-bol">
          BOL
        </label>
      </div>

      <div class="mui-checkbox mvi-checkbox2 checkbox-bbl">
        <input name="mbo_leerweg[]" id="leerweg-bbl" type="checkbox" value="bbl">
        <label for="leerweg-bbl">
          BBL
        </label>
      </div>
    </div>
  </div>

  <div id="opleiding-5-input" class="opleiding-optie">
    <label class="anders-opleiding-input" for="anders-opleiding">
        <img class="opleiding-icoon" src="assets/images/opleiding-hoed.svg" />
      <input name="anders_opleiding" class="anders-opleiding-input" placeholder="Opleiding" type="text" autocomplete="off" spellcheck="false" />
    </label>

    <img class="toelichting-svg" src="assets/images/toelichting.svg" />
    <span class="start-tekst">Toelichting</span>

    <label class="anders-opleiding-input" for="anders-opleiding">
      <i class="fa fa-commenting-o"></i>
      <input class="anders-opleiding-input" placeholder="Toelichting (niet verplicht)" type="text" autocomplete="off" spellcheck="false" />
    </label>

  </div>


  <div class="buttons">

  <button tabindex="-1" type="button" id="terug-naar-1" class="btn btn-grijze-outline">
    <img class="vorige-svg" src="assets/images/vorige.svg" />
    Vorige
  </button>

  <button tabindex="-1" type="button" id="naar-stap-3" class="btn btn-roze">
    Volgende
    <img class="volgende-svg" src="assets/images/volgende.svg" />
  </button>
  </div>
</fieldset>
