<?php
/* Smarty version 4.1.0, created on 2022-08-03 09:37:47
  from 'C:\usr\htdocs\site.devel\design\backend\templates\addons\help_center\component\customer_care_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ea17bbdda796_49908051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bf793a2e6703657331b0337051d3f24bedcac46' => 
    array (
      0 => 'C:\\usr\\htdocs\\site.devel\\design\\backend\\templates\\addons\\help_center\\component\\customer_care_block.tpl',
      1 => 1658909441,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 3,
    'tygh:buttons/helpdesk.tpl' => 1,
  ),
),false)) {
function content_62ea17bbdda796_49908051 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\usr\\htdocs\\site.devel\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\usr\\htdocs\\site.devel\\app\\functions\\smarty_plugins\\modifier.count.php','function'=>'smarty_modifier_count',),2=>array('file'=>'C:\\usr\\htdocs\\site.devel\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('help_center.customer_care','help_center.customer_care.submit_ticket','help_center.customer_care.status.resolved','help_center.customer_care.status.open','help_center.customer_care.view_all_tickets','help_center.customer_care','help_center.customer_care.no_support_tickets','help_center.customer_care.submit_ticket','help_center.customer_care.all_tickets','help_center.customer_care.service_unavailable','help_center.customer_care.service_unavailable_description','help_center.customer_care.prolong_subscription','help_center.customer_care','help_center.customer_care.sign_in_text'));
$_smarty_tpl->_assignInScope('service_url', ((string)(rtrim($_smarty_tpl->tpl_vars['config']->value['helpdesk']['url'],'/')))."/");
if (!$_smarty_tpl->tpl_vars['auth']->value['helpdesk_user_id'] || $_smarty_tpl->tpl_vars['settings']->value['Upgrade_center']['license_number']) {?>
<div class="help-center__block">
    <div class="help-center__block-customer-care help-center__block-customer-care--hidden">
        <?php if ($_smarty_tpl->tpl_vars['auth']->value['helpdesk_user_id'] && $_smarty_tpl->tpl_vars['settings']->value['Upgrade_center']['license_number'] && $_smarty_tpl->tpl_vars['customer_care_data']->value['subscription']['status'] === smarty_modifier_enum("ObjectStatuses::ACTIVE") && $_smarty_tpl->tpl_vars['customer_care_data']->value['tickets'] && smarty_modifier_count($_smarty_tpl->tpl_vars['customer_care_data']->value['tickets']) > 0) {?>
                        <div class="help-center__block-header flex-vertical-centered flex-space-between flex-wrap">
                <div class="help-center__block-title"><?php echo $_smarty_tpl->__("help_center.customer_care");?>
</div>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("help_center.customer_care.submit_ticket"),'but_role'=>"action",'but_href'=>((string)$_smarty_tpl->tpl_vars['service_url']->value)."index.php?dispatch=communication.tickets&submit_ticket=Y",'but_target'=>"_blank",'but_icon'=>"icon-plus"), 0, false);
?>
            </div>
            <div class="help-center__block-content">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_care_data']->value['tickets'], 'ticket_data');
$_smarty_tpl->tpl_vars['ticket_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ticket_data']->value) {
$_smarty_tpl->tpl_vars['ticket_data']->do_else = false;
?>
                    <div class="help-center__block-link">
                        <div class="flex-vertical-centered flex-space-between">
                            <a class="wrap-word"
                               href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['service_url']->value, ENT_QUOTES, 'UTF-8');?>
index.php?dispatch=communication.messages&ticket_id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ticket_data']->value['ticket_id'], ENT_QUOTES, 'UTF-8');?>
"
                               target="_blank"
                            >
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ticket_data']->value['ticket'], ENT_QUOTES, 'UTF-8');?>

                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['ticket_data']->value['status'] === "resolved") {?>
                                <span class="label label-success"><?php echo $_smarty_tpl->__("help_center.customer_care.status.resolved");?>
</span>
                            <?php } else { ?>
                                <span class="label label-warning"><?php echo $_smarty_tpl->__("help_center.customer_care.status.open");?>
</span>
                            <?php }?>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <div class="help-center__block-link">
                    <a class="help-center__block-link-link"
                       href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['service_url']->value, ENT_QUOTES, 'UTF-8');?>
index.php?dispatch=communication.tickets"
                       target="_blank"
                    >
                        <span class="wrap-word">
                            <?php echo $_smarty_tpl->__("help_center.customer_care.view_all_tickets");?>
...
                        </span>
                    </a>
                </div>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['auth']->value['helpdesk_user_id'] && $_smarty_tpl->tpl_vars['settings']->value['Upgrade_center']['license_number'] && $_smarty_tpl->tpl_vars['customer_care_data']->value['subscription']['status'] === smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
                        <div class="help-center__block-content no-items">
                <p>
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-comments-alt cs-icon-xlarge cm-opacity"),$_smarty_tpl);?>

                </p>
                <strong class="text-larger"><?php echo $_smarty_tpl->__("help_center.customer_care");?>
</strong>
                <p class="muted"><?php echo $_smarty_tpl->__("help_center.customer_care.no_support_tickets");?>
</p>
                <p class="spaced-child">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("help_center.customer_care.submit_ticket"),'but_role'=>"action",'but_href'=>((string)$_smarty_tpl->tpl_vars['service_url']->value)."index.php?dispatch=communication.tickets&submit_ticket=Y",'but_target'=>"_blank"), 0, true);
?>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['service_url']->value, ENT_QUOTES, 'UTF-8');?>
index.php?dispatch=communication.tickets"
                       target="_blank"
                    >
                        <?php echo $_smarty_tpl->__("help_center.customer_care.all_tickets");?>

                    </a>
                </p>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['auth']->value['helpdesk_user_id'] && $_smarty_tpl->tpl_vars['settings']->value['Upgrade_center']['license_number']) {?>
                        <div class="help-center__block-content no-items">
                <p>
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-comments-alt cs-icon-xlarge cm-opacity"),$_smarty_tpl);?>

                </p>
                <strong class="text-larger"><?php echo $_smarty_tpl->__("help_center.customer_care.service_unavailable");?>
</strong>
                <p><?php echo $_smarty_tpl->__("help_center.customer_care.service_unavailable_description");?>
</p>
                <p class="spaced-child">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("help_center.customer_care.prolong_subscription"),'but_role'=>"action",'but_href'=>((string)$_smarty_tpl->tpl_vars['service_url']->value)."customer-care-subscription.html",'but_target'=>"_blank"), 0, true);
?>
                </p>
            </div>
        <?php } elseif (!$_smarty_tpl->tpl_vars['auth']->value['helpdesk_user_id']) {?>
                        <div class="help-center__block-content well text-center">
                <p>
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-comments-alt cs-icon-xlarge cm-opacity"),$_smarty_tpl);?>

                </p>
                <p>
                    <strong class="text-larger"><?php echo $_smarty_tpl->__("help_center.customer_care");?>
</strong>
                </p>
                <p><?php echo $_smarty_tpl->__("help_center.customer_care.sign_in_text");?>
</p>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/helpdesk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        <?php }?>
    </div>
</div>
<?php }
}
}
