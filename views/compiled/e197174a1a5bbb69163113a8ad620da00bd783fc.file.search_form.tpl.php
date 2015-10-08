<?php /* Smarty version Smarty-3.1.18, created on 2015-09-30 15:10:23
         compiled from "views\search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1945956091644e08f29-84005267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e197174a1a5bbb69163113a8ad620da00bd783fc' => 
    array (
      0 => 'views\\search_form.tpl',
      1 => 1443618620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1945956091644e08f29-84005267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56091644e29fc0_01509641',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56091644e29fc0_01509641')) {function content_56091644e29fc0_01509641($_smarty_tpl) {?><div class="col-md-3">

<form  method="post" id="searchform" action="?page=search">
    <input  type="text" name="search_string" required onkeyup="showResult(this.value)">
    <input  type="submit" name="submit" value="Search">
</form>

    <div id="livesearch"></div>

    </div><?php }} ?>
