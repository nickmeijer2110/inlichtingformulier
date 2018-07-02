<?php
/* Smarty version 3.1.30, created on 2018-07-02 21:01:31
  from "C:\Users\Nick\Desktop\Bewijzenmap\Inlichtingformulier\frontend\afronden-1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b3a768b918090_39662816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6d7da5ed4b1eda74afddf385651bbb0c51f1690' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\Inlichtingformulier\\frontend\\afronden-1.tpl',
      1 => 1530555382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3a768b918090_39662816 (Smarty_Internal_Template $_smarty_tpl) {
?>
<fieldset id="afronden-1">
  <img alt="Uw gegevens" class="uw-gegevens-svg" src="assets/images/uw-gegevens.svg" />
<span class="start-tekst">Alleen nog even uw gegevens!</span>

<label for="uw_naam">
  <i class="fa fa-user-o"></i>
  <input id="uw_naam" name="uw_naam" type="text" placeholder="Uw naam" autocomplete="off" spellcheck="false"/>
</label>

<label for="uw_email">
  <i class="fa fa-envelope-o"></i>
  <input id="uw_email" name="uw_email" type="email" placeholder="Uw e-mail adres" autocomplete="off" spellcheck="false"/>
</label>

<div class="buttons">
  <button tabindex="-1" type="button" id="naar-afronden-2" class="btn btn-roze">
    Volgende
    <img alt="Volgende" class="volgende-svg" src="assets/images/volgende.svg" />
  </button>
</div>
</fieldset>
<?php }
}
