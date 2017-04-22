<?php
/* Smarty version 3.1.30, created on 2017-04-19 14:06:24
  from "F:\OpenServer\domains\myshop.ru\views\default\leftcolumn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f744b03c2359_76258407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32b21c357f54d6af0a566930ac5c11ad1606e9fb' => 
    array (
      0 => 'F:\\OpenServer\\domains\\myshop.ru\\views\\default\\leftcolumn.tpl',
      1 => 1492599512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f744b03c2359_76258407 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="leftColumn">
        <div id="leftmenu">
            <div class="menuCaption">Меню:</div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br>
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
?>
                            -- <a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
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
        <div class="menuCaption">Корзина</div>
        <a href="/cart/" title="Перейти в корзину">В корзине</a>
        <span id="cartCntItems">
            <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;
} else { ?>пусто<?php }?>
        </span>
    </div><?php }
}
