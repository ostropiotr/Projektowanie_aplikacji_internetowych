<?php
/* Smarty version 4.5.4, created on 2026-03-25 23:28:05
  from 'C:\xampp\htdocs\smarty\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_69c461750d0228_97772665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c0925e5067d1935bd7e9cd8ac588694bad99973' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\main.html',
      1 => 1774477158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69c461750d0228_97772665 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59374311569c461750cf2c2_85314978', 'title');
?>
</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
        body,h1,h5 { font-family: "Raleway", sans-serif }
        body, html { height: 100%; margin: 0; }
        .bgimg {
            background-image: url('https://www.w3schools.com/w3images/onepage_restaurant.jpg');
            min-height: 100%;
            background-position: center;
            background-size: cover;
        }
        .res-box { background: rgba(0,0,0,0.7); padding: 20px; border-radius: 10px; border: 1px solid white; margin-top: 20px; }
    </style>
</head>
<body>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191330752269c461750cfd42_45218890', 'content');
?>


</body>
</html><?php }
/* {block 'title'} */
class Block_59374311569c461750cf2c2_85314978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_59374311569c461750cf2c2_85314978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_191330752269c461750cfd42_45218890 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_191330752269c461750cfd42_45218890',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
