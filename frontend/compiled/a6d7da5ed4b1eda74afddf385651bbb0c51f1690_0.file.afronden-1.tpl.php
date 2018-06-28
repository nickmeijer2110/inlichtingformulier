<?php
/* Smarty version 3.1.30, created on 2018-06-28 11:38:57
  from "C:\Users\Nick\Desktop\Bewijzenmap\Inlichtingformulier\frontend\afronden-1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b34acb1dc2743_17360687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6d7da5ed4b1eda74afddf385651bbb0c51f1690' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\Inlichtingformulier\\frontend\\afronden-1.tpl',
      1 => 1530178314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b34acb1dc2743_17360687 (Smarty_Internal_Template $_smarty_tpl) {
?>
<fieldset id="afronden-1">
  <img class="uw-gegevens-svg" src="assets/images/uw-gegevens.svg" />
<span class="start-tekst">Alleen nog even uw gegevens!</span>

<label for="naam">
  <i class="fa fa-user-o"></i>
  <input name="uw_naam" type="text" placeholder="Uw naam" autofocus autocomplete="off" spellcheck="false"/>
</label>

<label for="email">
  <i class="fa fa-envelope-o"></i>
  <input name="uw_email" type="email" placeholder="Uw e-mail adres" autocomplete="off" spellcheck="false"/>
</label>

<div class="buttons">
  <button tabindex="-1" type="button" id="naar-afronden-2" class="btn btn-roze">
    Volgende
    <img class="volgende-svg" src="assets/images/volgende.svg" />
  </button>
</div>
</fieldset>
<?php }
}
