<?php /* Smarty version Smarty-3.1.18, created on 2015-10-09 09:15:59
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1620855f940d23aec10-81134974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1444374956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1620855f940d23aec10-81134974',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f940d2812930_24376560',
  'variables' => 
  array (
    'curr_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f940d2812930_24376560')) {function content_55f940d2812930_24376560($_smarty_tpl) {?><header>
    <h2>Only Games</h2>
    <div id="navbar">



        <ul>
            <li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='') {?>class="selected"<?php }?>><a href="index.php">News</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=="tournaments") {?>class="selected"<?php }?>><a href="?page=tournaments">Tournaments</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=="socialmedia") {?>class="selected"<?php }?>><a href="?page=socialmedia">Social Media Posts</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=="about") {?>class="selected"<?php }?>><a href="?page=about">Contact</a></li>
        </ul>

    </div>

</header>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.4";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="container-fluid">
    <div class="row"><?php }} ?>
