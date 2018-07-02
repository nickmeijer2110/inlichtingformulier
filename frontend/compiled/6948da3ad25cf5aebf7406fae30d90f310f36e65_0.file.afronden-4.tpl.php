<?php
/* Smarty version 3.1.30, created on 2018-07-02 21:01:31
  from "C:\Users\Nick\Desktop\Bewijzenmap\Inlichtingformulier\frontend\afronden-4.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b3a768bba37d6_96337667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6948da3ad25cf5aebf7406fae30d90f310f36e65' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\Inlichtingformulier\\frontend\\afronden-4.tpl',
      1 => 1530555518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3a768bba37d6_96337667 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
<?php }
}
