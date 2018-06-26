<?php
/* Smarty version 3.1.30, created on 2018-06-11 16:46:19
  from "C:\Users\Nick\Desktop\Bewijzenmap\Inlichtingformulier\frontend\stap-1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b1e8b3b139623_24816553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '308796948957ef5e5e7a6af3a38827f5596f5392' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\Inlichtingformulier\\frontend\\stap-1.tpl',
      1 => 1528728338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1e8b3b139623_24816553 (Smarty_Internal_Template $_smarty_tpl) {
?>
<fieldset id="stap1">

  <img class="start-pistool-svg" src="assets/images/start.svg" />
  <span class="start-tekst">Klaar voor de start?</span>

  <label for="naam">
    <i class="fa fa-user-o"></i>
    <input name="naam" type="text" placeholder="Naam leerling" autofocus autocomplete="off" spellcheck="false" required/>
  </label>

  <label for="datum">
    <i class="fa fa-calendar-o"></i>
    <input placeholder="Geboortedatum leerling" type="text" autocomplete="off" spellcheck="false" required/>
  </label>

  <img class="start-pijltje-svg" src="assets/images/start-pijltje.svg" />

  <div class="buttons">
    <button tabindex="-1" type="button" id="naar-stap-2" class="btn btn-roze">
      Starten
      <img class="volgende-svg" src="assets/images/volgende.svg" />
    </button>
  </div>
</fieldset>
<?php }
}
