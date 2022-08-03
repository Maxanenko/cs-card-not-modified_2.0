<?php
/* Smarty version 4.1.0, created on 2022-08-03 09:37:48
  from 'C:\usr\htdocs\site.devel\design\backend\templates\views\settings\trial_expired.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ea17bc199806_90210880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb10101e6a99b73d99c37e7fc8b861be76ffbe2c' => 
    array (
      0 => 'C:\\usr\\htdocs\\site.devel\\design\\backend\\templates\\views\\settings\\trial_expired.tpl',
      1 => 1658909441,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ea17bc199806_90210880 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\usr\\htdocs\\site.devel\\app\\functions\\smarty_plugins\\block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('trial_expired','text_input_license_code','please_enter_license_here','activate','text_buy_new_license','buy_license','text_money_back_guarantee'));
if ($_smarty_tpl->tpl_vars['show']->value) {?>
    <a id="trial" class="cm-dialog-opener cm-dialog-auto-size hidden cm-dialog-non-closable" data-ca-target-id="trial_dialog"></a>

    <div class="hidden trial-expired-dialog" title="<?php echo $_smarty_tpl->__("trial_expired",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
" id="trial_dialog">
        <?php if ($_smarty_tpl->tpl_vars['store_mode_errors']->value) {?>
            <div class="alert alert-error notification-content">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['store_mode_errors']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
                    <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['title'], ENT_QUOTES, 'UTF-8');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['message']->value['text'];?>
<br>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>

        <form name="trial_form" id="trial_dialog_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="store_mode" value="full">
            <div class="trial-expired">
                <p><?php echo $_smarty_tpl->__("text_input_license_code",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
</p>

                <div class="license <?php if ($_smarty_tpl->tpl_vars['store_mode_errors']->value) {?> type-error<?php }?> item">
                    <input type="text" name="license_number" class="<?php if ($_smarty_tpl->tpl_vars['store_mode_errors']->value) {?> type-error<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_mode_license']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo $_smarty_tpl->__("please_enter_license_here");?>
">
                    <input name="dispatch[settings.change_store_mode]" type="submit" value="<?php echo $_smarty_tpl->__("activate");?>
" class="btn btn-primary">
                </div>
                <div class="trial-purchase">
                    <p>
                        <?php echo $_smarty_tpl->__("text_buy_new_license");?>

                    </p>
                        <a class="btn btn-large btn-buy" target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['resources']['product_buy_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("buy_license");?>
</a>
                    <p>
                        <?php echo $_smarty_tpl->__("text_money_back_guarantee");?>

                    </p>
                </div>
            </div>
        </form>
    </div>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
        Tygh.$(document).ready(function () {
            Tygh.$('#trial').trigger('click');
        });

        Tygh.$(window).load(function () {
            Tygh.$('#trial_dialog_form').off('submit');
        });
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
