<?php /* Smarty version Smarty-3.1.19, created on 2014-10-08 22:31:04
         compiled from "/home/u679258040/public_html/admindhtt/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:603998808543558b8344778-86169822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3099cf3528d3a8d1bde5203f65c71487e8f66e0e' => 
    array (
      0 => '/home/u679258040/public_html/admindhtt/themes/default/template/content.tpl',
      1 => 1406740920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '603998808543558b8344778-86169822',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543558b83955e1_01677249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543558b83955e1_01677249')) {function content_543558b83955e1_01677249($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
