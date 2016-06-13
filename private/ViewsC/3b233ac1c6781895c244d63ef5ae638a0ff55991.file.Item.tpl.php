<?php /* Smarty version Smarty-3.0.7, created on 2016-05-07 23:17:25
         compiled from "D:\www\test\phpMVC-master\seed-project\private\Views\Question\Item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22815572e5b65162c16-01789833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b233ac1c6781895c244d63ef5ae638a0ff55991' => 
    array (
      0 => 'D:\\www\\test\\phpMVC-master\\seed-project\\private\\Views\\Question\\Item.tpl',
      1 => 1462655811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22815572e5b65162c16-01789833',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<ul>
	<?php  $_smarty_tpl->tpl_vars['foo2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['foo2']->key => $_smarty_tpl->tpl_vars['foo2']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['foo2']->key;
?>
	     <li><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 : <?php echo $_smarty_tpl->tpl_vars['foo2']->value;?>
</li>
	<?php }} ?>
</ul>