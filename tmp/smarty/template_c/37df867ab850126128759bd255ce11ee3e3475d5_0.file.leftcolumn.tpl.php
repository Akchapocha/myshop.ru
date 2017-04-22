<?php
/* Smarty version 3.1.30, created on 2017-04-18 21:06:06
  from "F:\OpenServer\domains\shop.ru\views\default\leftcolumn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f6558ec5ca98_28169123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37df867ab850126128759bd255ce11ee3e3475d5' => 
    array (
      0 => 'F:\\OpenServer\\domains\\shop.ru\\views\\default\\leftcolumn.tpl',
      1 => 1492537885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f6558ec5ca98_28169123 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="leftColumn">
        <div id="leftmenu">
            <div class="menuCaption">Меню:</div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <a href="/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br>
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
?>
                            -- <a href="/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a><br>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div><?php }
}
