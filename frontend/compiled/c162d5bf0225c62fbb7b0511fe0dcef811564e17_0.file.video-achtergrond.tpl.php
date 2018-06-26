<?php
/* Smarty version 3.1.30, created on 2018-06-10 21:59:37
  from "C:\Users\Nick\Desktop\Bewijzenmap\Inlichtingformulier\frontend\video-achtergrond.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b1d832943c5c1_47429817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c162d5bf0225c62fbb7b0511fe0dcef811564e17' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\Inlichtingformulier\\frontend\\video-achtergrond.tpl',
      1 => 1528660751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1d832943c5c1_47429817 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="overlay"></div>
<div id="video-player" class="fullscreen-bg">
    <video class="fullscreen-bg__video" autoplay muted poster="assets/images/videoframe.png">
      <source src="assets/videos/codekraker.mp4" type="video/mp4">
    </video>
    <div class="fullscreen-bg__playlist">
      <a href="assets/videos/codekraker.mp4" class="current-video"></a>
      <a href="assets/videos/dramaqueen.mp4"></a>
      <a href="assets/videos/herrieschopper.mp4"></a>
      <a href="assets/videos/kunstbeest.mp4"></a>
      <a href="assets/videos/williewortel.mp4"></a>
    </div>
  </div>
<?php }
}
