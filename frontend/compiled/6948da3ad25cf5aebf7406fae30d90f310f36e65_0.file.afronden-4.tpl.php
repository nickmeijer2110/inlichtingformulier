<?php
/* Smarty version 3.1.30, created on 2018-06-28 11:38:58
  from "C:\Users\Nick\Desktop\Bewijzenmap\Inlichtingformulier\frontend\afronden-4.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b34acb2068401_24299969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6948da3ad25cf5aebf7406fae30d90f310f36e65' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\Inlichtingformulier\\frontend\\afronden-4.tpl',
      1 => 1530178674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b34acb2068401_24299969 (Smarty_Internal_Template $_smarty_tpl) {
?>
<fieldset id="afronden-4">
  <label for="telefoonnummer">
    <i class="fa fa-phone"></i>
    <input name="uw_telefoonnummer" type="text" placeholder="Uw telefoonnummer" autocomplete="off" spellcheck="false"/>
  </label>
  <img class="telefonisch-contact-svg" src="assets/images/contact.svg" />
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
      <img class="vorige-svg" src="assets/images/vorige.svg" />
      Vorige
    </button>

    <input name="afronden" tabindex="-1" type="submit" value="Afronden" id="afronden-knop-2" class="btn btn-roze">
  </div>
</fieldset>
<?php }
}
