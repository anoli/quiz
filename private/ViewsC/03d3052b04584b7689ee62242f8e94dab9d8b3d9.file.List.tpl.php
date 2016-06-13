<?php /* Smarty version Smarty-3.0.7, created on 2016-05-07 23:20:03
         compiled from "D:\www\test\phpMVC-master\seed-project\private\Views\Question\List.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16731572e5c03bd73a0-32075068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03d3052b04584b7689ee62242f8e94dab9d8b3d9' => 
    array (
      0 => 'D:\\www\\test\\phpMVC-master\\seed-project\\private\\Views\\Question\\List.tpl',
      1 => 1462656002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16731572e5c03bd73a0-32075068',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<ul>
	<hr/>

<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
?>
	<?php  $_smarty_tpl->tpl_vars['foo2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['foo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['foo2']->key => $_smarty_tpl->tpl_vars['foo2']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['foo2']->key;
?>
	     <li><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 : <?php echo $_smarty_tpl->tpl_vars['foo2']->value;?>
</li>
	<?php }} ?>
	<hr/>
<?php }} ?>
</ul>