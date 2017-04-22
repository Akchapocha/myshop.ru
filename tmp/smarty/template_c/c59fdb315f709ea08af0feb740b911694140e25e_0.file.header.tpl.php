<?php
/* Smarty version 3.1.30, created on 2017-04-18 21:23:31
  from "F:\OpenServer\domains\shop.ru\views\default\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f659a325a368_84749320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c59fdb315f709ea08af0feb740b911694140e25e' => 
    array (
      0 => 'F:\\OpenServer\\domains\\shop.ru\\views\\default\\header.tpl',
      1 => 1492539760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_58f659a325a368_84749320 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css"/>
</head>

<body>

    <div id="header">
        <h1>Shop - интернет магазин</h1>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <div id="centrColumn"><?php }
}
