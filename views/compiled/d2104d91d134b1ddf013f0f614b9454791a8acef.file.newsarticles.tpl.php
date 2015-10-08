<?php /* Smarty version Smarty-3.1.18, created on 2015-10-08 12:31:34
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2324655ffc953958038-66456260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1444300293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2324655ffc953958038-66456260',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55ffc953e4bf80_73163267',
  'variables' => 
  array (
    'data' => 0,
    'newsItem' => 0,
    'newsItemId' => 0,
    'page_nr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffc953e4bf80_73163267')) {function content_55ffc953e4bf80_73163267($_smarty_tpl) {?>

    <div class="col-md-6">
<section>
    <?php  $_smarty_tpl->tpl_vars['newsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsItem']->key => $_smarty_tpl->tpl_vars['newsItem']->value) {
$_smarty_tpl->tpl_vars['newsItem']->_loop = true;
?>
    <article id="news">


            <h1><?php echo $_smarty_tpl->tpl_vars['newsItem']->value['title'];?>
</h1>
            <h5>Published on: <?php echo $_smarty_tpl->tpl_vars['newsItem']->value['date_created'];?>
</h5>
            <?php if ($_smarty_tpl->tpl_vars['newsItem']->value['id']==$_smarty_tpl->tpl_vars['newsItemId']->value) {?>
                <p><?php echo $_smarty_tpl->tpl_vars['newsItem']->value['content'];?>
<br><br/><a id="readMore" href="?page_nr=<?php echo $_smarty_tpl->tpl_vars['page_nr']->value;?>
&index.php"> Hide</a></p>
        <?php } else { ?>
            
                <p><a href="?page_nr=<?php echo $_smarty_tpl->tpl_vars['page_nr']->value;?>
&newsItemId=<?php echo $_smarty_tpl->tpl_vars['newsItem']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['newsItem']->value['image'];?>
"/></a><br/>
                    <a id="readMore" href="?page_nr=<?php echo $_smarty_tpl->tpl_vars['page_nr']->value;?>
&newsItemId=<?php echo $_smarty_tpl->tpl_vars['newsItem']->value['id'];?>
"> Read More</a>
                </p>

        <?php }?>




    </article>
    <?php } ?>
</section>

        <?php echo $_smarty_tpl->getSubTemplate ("pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>

<?php }} ?>
