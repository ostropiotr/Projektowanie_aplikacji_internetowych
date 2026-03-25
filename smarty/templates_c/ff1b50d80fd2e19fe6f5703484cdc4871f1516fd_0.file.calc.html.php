<?php
/* Smarty version 4.5.4, created on 2026-03-25 23:24:41
  from 'C:\xampp\htdocs\smarty\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_69c460a9c6d328_00756824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff1b50d80fd2e19fe6f5703484cdc4871f1516fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\app\\calc.html',
      1 => 1774477193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69c460a9c6d328_00756824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44964809869c460a9c5cc72_46355251', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49348410669c460a9c5e316_96848362', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'title'} */
class Block_44964809869c460a9c5cc72_46355251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_44964809869c460a9c5cc72_46355251',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator Kredytowy<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_49348410669c460a9c5e316_96848362 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_49348410669c460a9c5e316_96848362',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\lib\\smarty\\libs\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>

<div class="bgimg w3-display-container w3-text-white">
    <div class="w3-display-middle w3-center">
        <p>
            <button onclick="document.getElementById('id_calc').style.display='block'" class="w3-button w3-black w3-xxlarge w3-hover-white w3-card-4">
                OBLICZ RATĘ
            </button>
        </p>
        
        <h1 class="w3-jumbo w3-animate-top">KALKULATOR</h1>
        <hr class="w3-border-grey" style="margin:auto;width:40%">

        <?php if ((isset($_smarty_tpl->tpl_vars['wynik']->value))) {?>
            <div class="res-box w3-animate-zoom">
                <p class="w3-large">Twoja miesięczna rata:</p>
                <h2 class="w3-xxlarge"><?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['wynik']->value,2,","," ");?>
 zł</h2>
            </div>
        <?php }?>
    </div>
</div>

<div id="id_calc" class="w3-modal" <?php if (count($_smarty_tpl->tpl_vars['errors']->value) > 0) {?>style="display:block"<?php }?>>
    <div class="w3-modal-content w3-animate-zoom">
        <div class="w3-container w3-black">
            <span onclick="document.getElementById('id_calc').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
            <h1>Parametry kredytu</h1>
        </div>
        <div class="w3-container w3-padding-32 w3-text-black">
            <form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
                <p>
                    <label>Kwota kredytu</label>
                    <input class="w3-input w3-border" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['kwota']->value;?>
">
                    <?php if ((isset($_smarty_tpl->tpl_vars['errors']->value['kwota']))) {?>
                        <span class="w3-text-red w3-small"><?php echo $_smarty_tpl->tpl_vars['errors']->value['kwota'];?>
</span>
                    <?php }?>
                </p>
                <p>
                    <label>Oprocentowanie (%)</label>
                    <input class="w3-input w3-border" type="text" name="procent" value="<?php echo $_smarty_tpl->tpl_vars['procent']->value;?>
">
                    <?php if ((isset($_smarty_tpl->tpl_vars['errors']->value['procent']))) {?>
                        <span class="w3-text-red w3-small"><?php echo $_smarty_tpl->tpl_vars['errors']->value['procent'];?>
</span>
                    <?php }?>
                </p>
                <p>
                    <label>Ile lat</label>
                    <input class="w3-input w3-border" type="text" name="lata" value="<?php echo $_smarty_tpl->tpl_vars['lata']->value;?>
">
                    <?php if ((isset($_smarty_tpl->tpl_vars['errors']->value['lata']))) {?>
                        <span class="w3-text-red w3-small"><?php echo $_smarty_tpl->tpl_vars['errors']->value['lata'];?>
</span>
                    <?php }?>
                </p>
                <p><button class="w3-button w3-black w3-block w3-padding-16" type="submit">OBLICZ</button></p>
            </form>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
