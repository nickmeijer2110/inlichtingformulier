<?php
/* Smarty version 3.1.30, created on 2018-06-10 20:56:40
  from "C:\Users\Nick\Desktop\Bewijzenmap\Inlichtingformulier\frontend\pagina-intro-invullen.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b1d74681e71c0_96965588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b372e61eeb4da7eee04dec20b7fd44e76be74e8' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\Inlichtingformulier\\frontend\\pagina-intro-invullen.tpl',
      1 => 1528656997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1d74681e71c0_96965588 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="formulier" class="formulier">
  <div class="titel">Inlichtingenformulier</div>
  <div class="schooljaar">Schooljaar <?php echo $_smarty_tpl->tpl_vars['jaarnu']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['volgendjaar']->value;?>
</div>
  <h2>
    Waar wacht je nog op? Vul 'm <span>nu</span> in!
    <img class="pijltje" src="assets/images/pijltje.svg" />
  </h2>
  <br />
  <button id="invullen-knop" type="button" class="button">
    Invullen
    <img style="vertical-align: -3px;" width="20px" src="assets/images/pen.svg" />
  </button>
</div>
<?php }
}
