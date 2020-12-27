<?php
/* Smarty version 3.1.36, created on 2020-12-22 15:16:30
  from 'D:\Program Files\xampp\htdocs\Application\View\Admin\products_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe1ffbe01c664_68163443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e60045d3c97c84f355e1c663e6683583d9ce5e39' => 
    array (
      0 => 'D:\\Program Files\\xampp\\htdocs\\Application\\View\\Admin\\products_list.html',
      1 => 1608646587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe1ffbe01c664_68163443 (Smarty_Internal_Template $_smarty_tpl) {
?><!Doctype html>
<html>
<head>
<meta charset="utf-8">
<title>显示商品</title>
</head>
<body>
	<table border='1' width='980' bordercolor='#000'>
		<a href="index.php?p=Admin&c=Products&a=add">添加商品</a>
		<tr>
			<th>编号</th> 
			<th>名称</th> 
			<th>价格</th> 
			<th>删除</th>
			<th>修改</th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'rows');
$_smarty_tpl->tpl_vars['rows']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
$_smarty_tpl->tpl_vars['rows']->do_else = false;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['proID'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['proname'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['proprice'];?>
</td>
			<td><a href="index.php?p=Admin&c=Products&a=del&proid=<?php echo $_smarty_tpl->tpl_vars['rows']->value['proID'];?>
" onclick="return confirm('确定要删除吗')">删除</a></td>
			<td><a href="index.php?p=Admin&c=Products&a=edit&proid=<?php echo $_smarty_tpl->tpl_vars['rows']->value['proID'];?>
">修改</a></td>
		</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
</body>
</html><?php }
}
