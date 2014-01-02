<?php /* Smarty version Smarty-3.1.16, created on 2014-01-02 21:47:42
         compiled from "index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142050425552c3c366502927-61774477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e43b807af9cc8df7d350c3baf9e47f167c9520a0' => 
    array (
      0 => 'index.tpl',
      1 => 1388666797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142050425552c3c366502927-61774477',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c3c36659cf18_58085098',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c3c36659cf18_58085098')) {function content_52c3c36659cf18_58085098($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<p class="blue">click to toggle!</p>

	<script type="text/javascript">
	$(function(){

	        $("#acMenu dt").on("click", function() {
	            $(this).next().slideToggle();
	        });

	});
	</script>

	<dl id="acMenu">
    <dt>アコーディオンメニュー1</dt>
    <dd>アコーディオンメニューが開く。</dd>
    <dt>アコーディオンメニュー2</dt>
    <dd>アコーディオンメニューが開く。</dd>
    <dt>アコーディオンメニュー3</dt>
    <dd>アコーディオンメニューが開く。</dd>
	</dl>
</body>
</html>	
<?php }} ?>
