<?php /* Smarty version Smarty-3.1.19, created on 2014-10-28 22:37:59
         compiled from "/home/u679258040/public_html/admindhtt/themes/default/template/controllers/orders/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1713052501544fb857dfeb50-99681366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fc1c2a1b863a20a55fdfe9ce323128488723299' => 
    array (
      0 => '/home/u679258040/public_html/admindhtt/themes/default/template/controllers/orders/_print_pdf_icon.tpl',
      1 => 1406740920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1713052501544fb857dfeb50-99681366',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_state' => 0,
    'order' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544fb857e5f0a8_81171008',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544fb857e5f0a8_81171008')) {function content_544fb857e5f0a8_81171008($_smarty_tpl) {?>


<span class="btn-group-action">
	<span class="btn-group">
	<?php if (Configuration::get('PS_INVOICE')&&(($_smarty_tpl->tpl_vars['order_state']->value&&$_smarty_tpl->tpl_vars['order_state']->value->invoice)||$_smarty_tpl->tpl_vars['order']->value->invoice_number)) {?>
		<a class="btn btn-default" target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
			<i class="icon-file-text"></i>
		</a>
	<?php }?>
	
	<?php if ((($_smarty_tpl->tpl_vars['order_state']->value&&$_smarty_tpl->tpl_vars['order_state']->value->delivery)||$_smarty_tpl->tpl_vars['order']->value->delivery_number)) {?>
		<a class="btn btn-default"  target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateDeliverySlipPDF&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
			<i class="icon-truck"></i>
		</a>
	<?php }?>
	</span>
</span><?php }} ?>
