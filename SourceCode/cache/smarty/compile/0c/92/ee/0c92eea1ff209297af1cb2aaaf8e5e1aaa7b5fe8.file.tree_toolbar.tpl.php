<?php /* Smarty version Smarty-3.1.19, created on 2014-10-12 22:25:56
         compiled from "/home/u679258040/public_html/admindhtt/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1085350268543a9d844037e8-28106885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c92eea1ff209297af1cb2aaaf8e5e1aaa7b5fe8' => 
    array (
      0 => '/home/u679258040/public_html/admindhtt/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1406740920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1085350268543a9d844037e8-28106885',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543a9d845a9953_15537675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543a9d845a9953_15537675')) {function content_543a9d845a9953_15537675($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
