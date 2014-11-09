<?php /* Smarty version Smarty-3.1.19, created on 2014-10-08 23:00:10
         compiled from "/home/u679258040/public_html/admindhtt/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103753860254355f8a272100-77673664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a36a47acd8efc723007ed534f706926f6ed32a7' => 
    array (
      0 => '/home/u679258040/public_html/admindhtt/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1406740920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103753860254355f8a272100-77673664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54355f8a2991b7_25212192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54355f8a2991b7_25212192')) {function content_54355f8a2991b7_25212192($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
