<?php
/* Smarty version 3.1.30, created on 2018-07-02 21:07:29
  from "C:\Users\Nick\Desktop\Bewijzenmap\Inlichtingformulier\frontend\afgerond.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b3a77f1c71897_85736069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6f2588e84b99055f9ff2725dad48679a9335097' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\Inlichtingformulier\\frontend\\afgerond.tpl',
      1 => 1530558400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3a77f1c71897_85736069 (Smarty_Internal_Template $_smarty_tpl) {
?>
<fieldset id="afgerond">
  <div class="check_mark">
  <div class="sa-icon sa-success animate hide">
    <span class="sa-line sa-tip animateSuccessTip"></span>
    <span class="sa-line sa-long animateSuccessLong"></span>
    <div class="sa-placeholder"></div>
    <div class="sa-fix"></div>
  </div>
</div>

Hoi <span class="afgerond-naam"></span>, goed nieuws! <br />
Alles is vlekkeloos verlopen <i class="em em-smile"></i>
<br /><br />
We vragen het altijd maar even..<br /><br />

<button data-toggle="modal" data-target="#formulier-gegevens-modal" id="laat-gegevens-zien" type="button" class="btn btn-grijze-outline buttons-klaar bottom10">
Eerst even zien!
<img alt="Laten zien" class="volgende-svg" src="assets/images/volgende.svg" />
</button>

<br />

<button id="cmd" type="button" class="btn btn-roze buttons-klaar">
Downloaden maar! (PDF)
</button>

</fieldset>
<?php }
}
