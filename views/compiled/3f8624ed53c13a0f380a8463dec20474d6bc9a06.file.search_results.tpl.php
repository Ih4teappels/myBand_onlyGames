<?php /* Smarty version Smarty-3.1.18, created on 2015-10-08 12:22:55
         compiled from "views\search_results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27661560504d454d5c7-71569634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f8624ed53c13a0f380a8463dec20474d6bc9a06' => 
    array (
      0 => 'views\\search_results.tpl',
      1 => 1444212187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27661560504d454d5c7-71569634',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560504d4572407_72614549',
  'variables' => 
  array (
    'search_result' => 0,
    'search_row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560504d4572407_72614549')) {function content_560504d4572407_72614549($_smarty_tpl) {?><div id="search_results">
<?php  $_smarty_tpl->tpl_vars['search_row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['search_row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search_result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['search_row']->key => $_smarty_tpl->tpl_vars['search_row']->value) {
$_smarty_tpl->tpl_vars['search_row']->_loop = true;
?>


    <h3><?php echo $_smarty_tpl->tpl_vars['search_row']->value['title'];?>
</h3>
    <p><?php echo $_smarty_tpl->tpl_vars['search_row']->value['content'];?>
</p>

<?php } ?>
</div><?php }} ?>
