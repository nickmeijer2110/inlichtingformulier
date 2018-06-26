<?php
/* Smarty version 3.1.30, created on 2018-06-12 16:22:32
  from "C:\Users\Nick\Desktop\Bewijzenmap\Inlichtingformulier\frontend\afronden-4.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b1fd7280c2ba4_70689423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6948da3ad25cf5aebf7406fae30d90f310f36e65' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\Inlichtingformulier\\frontend\\afronden-4.tpl',
      1 => 1528813350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1fd7280c2ba4_70689423 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
<?php }
}
