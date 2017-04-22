<?php
/* Smarty version 3.1.30, created on 2017-04-19 22:03:52
  from "F:\OpenServer\domains\myshop.ru\views\default\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7b498e0b8a7_19552292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e6e4da0875b3d8da4b41ed704e731f31e99b525' => 
    array (
      0 => 'F:\\OpenServer\\domains\\myshop.ru\\views\\default\\header.tpl',
      1 => 1492628631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_58f7b498e0b8a7_19552292 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/www/js/main.js"><?php echo '</script'; ?>
>
</head>

<body>

    <div id="header">
        <h1>Shop - интернет магазин</h1>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <div id="centrColumn"><?php }
}
