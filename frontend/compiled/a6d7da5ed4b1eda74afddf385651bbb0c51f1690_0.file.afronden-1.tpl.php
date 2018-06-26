<?php
/* Smarty version 3.1.30, created on 2018-06-12 14:32:47
  from "C:\Users\Nick\Desktop\Bewijzenmap\Inlichtingformulier\frontend\afronden-1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b1fbd6fcdc107_05883399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6d7da5ed4b1eda74afddf385651bbb0c51f1690' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\Inlichtingformulier\\frontend\\afronden-1.tpl',
      1 => 1528806766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1fbd6fcdc107_05883399 (Smarty_Internal_Template $_smarty_tpl) {
?>
<fieldset id="afronden-1">
  <img class="uw-gegevens-svg" src="assets/images/uw-gegevens.svg" />
<span class="start-tekst">Alleen nog even uw gegevens!</span>

<label for="naam">
  <i class="fa fa-user-o"></i>
  <input name="naam" type="text" placeholder="Uw naam" autofocus autocomplete="off" spellcheck="false" required/>
</label>

<label for="email">
  <i class="fa fa-envelope-o"></i>
  <input name="email" type="email" placeholder="Uw e-mail adres" autofocus autocomplete="off" spellcheck="false" required/>
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
