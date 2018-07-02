<?php
/* Smarty version 3.1.30, created on 2018-07-02 21:01:31
  from "C:\Users\Nick\Desktop\Bewijzenmap\Inlichtingformulier\frontend\stap-1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b3a768b37c0e0_29520911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '308796948957ef5e5e7a6af3a38827f5596f5392' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\Inlichtingformulier\\frontend\\stap-1.tpl',
      1 => 1530542468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3a768b37c0e0_29520911 (Smarty_Internal_Template $_smarty_tpl) {
?>
<fieldset id="stap1">

  <img alt="Pistool" class="start-pistool-svg" src="assets/images/start.svg" />
  <span class="start-tekst">Klaar voor de start?</span>

  <label for="naam_leerling">
    <i class="fa fa-user-o"></i>
    <input id="naam_leerling" name="naam_leerling" type="text" placeholder="Naam leerling" autofocus autocomplete="off" spellcheck="false"/>
  </label>

  <label for="gebdatum_leerling">
    <i class="fa fa-calendar-o"></i>
    <input id="gebdatum_leerling" name="gebdatum_leerling" placeholder="Geboortedatum leerling" type="text" autocomplete="off" spellcheck="false"/>
  </label>

  <img alt="Start" class="start-pijltje-svg" src="assets/images/start-pijltje.svg" />

  <div class="buttons">
    <button tabindex="-1" type="button" id="naar-stap-2" class="btn btn-roze">
      Starten
      <img alt="Volgende" class="volgende-svg" src="assets/images/volgende.svg" />
    </button>
  </div>
</fieldset>
<?php }
}
