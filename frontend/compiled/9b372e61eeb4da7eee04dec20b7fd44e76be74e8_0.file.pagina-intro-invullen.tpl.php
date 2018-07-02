<?php
/* Smarty version 3.1.30, created on 2018-07-02 21:01:31
  from "C:\Users\Nick\Desktop\Bewijzenmap\Inlichtingformulier\frontend\pagina-intro-invullen.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b3a768b2a7dc0_01851223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b372e61eeb4da7eee04dec20b7fd44e76be74e8' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\Inlichtingformulier\\frontend\\pagina-intro-invullen.tpl',
      1 => 1530541608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3a768b2a7dc0_01851223 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="formulier" class="formulier">
  <div class="titel">Inlichtingenformulier</div>
  <div class="schooljaar">Schooljaar <?php echo $_smarty_tpl->tpl_vars['jaarnu']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['volgendjaar']->value;?>
</div>
  <h2>
    Waar wacht je nog op? Vul 'm <span>nu</span> in!
    <img alt="Pijltje" class="pijltje" src="assets/images/pijltje.svg" />
  </h2>
  <br />
  <button id="invullen-knop" type="button" class="button">
    Invullen
    <img alt="Invullen" style="vertical-align: -3px;" width="20" src="assets/images/pen.svg" />
  </button>
</div>
<?php }
}
