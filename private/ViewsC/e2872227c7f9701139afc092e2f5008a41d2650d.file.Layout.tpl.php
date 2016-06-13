<?php /* Smarty version Smarty-3.0.7, created on 2016-05-07 23:09:54
         compiled from "D:\www\test\phpMVC-master\seed-project\private\Views\Layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29760572e59a2cf1627-98304328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2872227c7f9701139afc092e2f5008a41d2650d' => 
    array (
      0 => 'D:\\www\\test\\phpMVC-master\\seed-project\\private\\Views\\Layout.tpl',
      1 => 1462655307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29760572e59a2cf1627-98304328',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <head>
        <title>Quiz</title>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <h1>Quiz</h1>
        
        <div><?php echo $_smarty_tpl->getVariable('view')->value->render();?>
</div>
        
        <?php echo $_smarty_tpl->getVariable('html')->value->partial('footer');?>

    </body>
</html>
