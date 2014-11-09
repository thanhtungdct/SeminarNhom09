<?php /*%%SmartyHeaderCode:19801719685435450452ebb6-20763160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06e4cffa4f80a91496f1554bc995c2f505558636' => 
    array (
      0 => '/home/u679258040/public_html/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1406740920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19801719685435450452ebb6-20763160',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544c8bbb75c004_20961720',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544c8bbb75c004_20961720')) {function content_544c8bbb75c004_20961720($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="http://donghothuthiet.meximas.com/vn/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Tìm kiếm" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Tìm kiếm</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
