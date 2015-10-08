<?php /* Smarty version Smarty-3.1.18, created on 2015-10-07 13:27:52
         compiled from "views\pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2057456090349bd17b1-62871970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77071f33a1748818100a14fe29d4f1d5e4d849b3' => 
    array (
      0 => 'views\\pagination.tpl',
      1 => 1444217270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2057456090349bd17b1-62871970',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56090349bd35e1_51795338',
  'variables' => 
  array (
    'curr_pagi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56090349bd35e1_51795338')) {function content_56090349bd35e1_51795338($_smarty_tpl) {?><ul class="pagination">
    <li <?php if ($_smarty_tpl->tpl_vars['curr_pagi']->value=="1") {?>class="active"<?php }?>><a href="?page_nr=1">1</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['curr_pagi']->value=="2") {?>class="active"<?php }?>><a href="?page_nr=2">2</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['curr_pagi']->value=="3") {?>class="active"<?php }?>><a href="?page_nr=3">3</a></li>
</ul><?php }} ?>
