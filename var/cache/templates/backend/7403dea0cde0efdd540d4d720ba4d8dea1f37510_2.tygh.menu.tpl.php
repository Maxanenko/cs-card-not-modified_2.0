<?php
/* Smarty version 4.1.0, created on 2022-08-03 09:37:47
  from 'C:\usr\htdocs\site.devel\design\backend\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ea17bbe8c048_36298858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7403dea0cde0efdd540d4d720ba4d8dea1f37510' => 
    array (
      0 => 'C:\\usr\\htdocs\\site.devel\\design\\backend\\templates\\menu.tpl',
      1 => 1658909441,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_object.tpl' => 4,
    'tygh:components/notifications_center/opener.tpl' => 1,
    'tygh:views/companies/components/picker/picker.tpl' => 1,
    'tygh:common/product_release_info.tpl' => 1,
    'tygh:common/popupbox.tpl' => 2,
    'tygh:common/quick_menu.tpl' => 1,
  ),
),false)) {
function content_62ea17bbe8c048_36298858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu_attrs' => 
  array (
    'compiled_filepath' => 'C:\\usr\\htdocs\\site.devel\\var\\cache\\templates\\backend\\7403dea0cde0efdd540d4d720ba4d8dea1f37510_2.tygh.menu.tpl.php',
    'uid' => '7403dea0cde0efdd540d4d720ba4d8dea1f37510',
    'call_name' => 'smarty_template_function_menu_attrs_132296660562ea17bbdee8f8_75900913',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\usr\\htdocs\\site.devel\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\usr\\htdocs\\site.devel\\app\\functions\\smarty_plugins\\modifier.sizeof.php','function'=>'smarty_modifier_sizeof',),2=>array('file'=>'C:\\usr\\htdocs\\site.devel\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),3=>array('file'=>'C:\\usr\\htdocs\\site.devel\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),4=>array('file'=>'C:\\usr\\htdocs\\site.devel\\app\\functions\\smarty_plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
\Tygh\Languages\Helper::preloadLangVars(array('all_vendors','no_active_storefronts','view_storefront','storefront','view_storefront','vendor','signed_in_as','edit_profile','log_in_as_vendor','sign_out','feedback_values','send_feedback','admin_search_general','home','close','signed_in_as','edit_profile','sign_out','manage_stores','feedback_values','send_feedback','view_storefront','view_storefront','view_storefront','view_storefront','home','language','currency','go_back'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"menu:general"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"menu:general"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

    <?php if (defined("THEMES_PANEL")) {?>
        <?php $_smarty_tpl->_assignInScope('sticky_top', -5);?>
        <?php $_smarty_tpl->_assignInScope('sticky_padding', 35);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('sticky_top', -40);?>
        <?php $_smarty_tpl->_assignInScope('sticky_padding', 0);?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('navigation_accordion', (($tmp = $_smarty_tpl->tpl_vars['navigation_accordion']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('enable_onclick_menu', (($tmp = $_smarty_tpl->tpl_vars['enable_onclick_menu']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('enable_sticky_scroll', (($tmp = $_smarty_tpl->tpl_vars['enable_sticky_scroll']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('enable_search_collapse', (($tmp = $_smarty_tpl->tpl_vars['enable_search_collapse']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('show_company', (($tmp = $_smarty_tpl->tpl_vars['show_company']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('show_menu_descriptions', (($tmp = $_smarty_tpl->tpl_vars['show_menu_descriptions']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('show_menu_caret', (($tmp = $_smarty_tpl->tpl_vars['show_menu_caret']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('show_addon_icon', (($tmp = $_smarty_tpl->tpl_vars['show_addon_icon']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('show_languages_in_header_menu', (($tmp = $_smarty_tpl->tpl_vars['show_languages_in_header_menu']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('show_currencies_in_header_menu', (($tmp = $_smarty_tpl->tpl_vars['show_currencies_in_header_menu']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

    

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "languages_menu", null, null);?>
        <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['menu_languages']->value) > 1) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"dropdown",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl="),'items'=>$_smarty_tpl->tpl_vars['menu_languages']->value,'selected_id'=>(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'display_icons'=>true,'key_name'=>"name",'key_selected'=>"lang_code",'class'=>"languages",'is_submenu'=>!$_smarty_tpl->tpl_vars['show_languages_in_header_menu']->value), 0, false);
?>
        <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "currencies_menu", null, null);?>
        <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"dropdown",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"currency="),'items'=>$_smarty_tpl->tpl_vars['currencies']->value,'selected_id'=>$_smarty_tpl->tpl_vars['secondary_currency']->value,'display_icons'=>false,'key_name'=>"description",'key_selected'=>"currency_code",'class'=>"curriencies",'is_submenu'=>!$_smarty_tpl->tpl_vars['show_currencies_in_header_menu']->value), 0, true);
?>
        <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <div class="navbar-admin-top <?php if ($_smarty_tpl->tpl_vars['enable_sticky_scroll']->value) {?>cm-sticky-scroll<?php }?>" data-ca-stick-on-screens="sm-large,md,md-large,lg,uhd" data-ca-top="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sticky_top']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-padding="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sticky_padding']->value, ENT_QUOTES, 'UTF-8');?>
">
        <!--Navbar-->
        <div class="navbar navbar-inverse mobile-hidden" id="header_navbar">
            <div class="navbar-inner<?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_current_storefront_closed'] || $_smarty_tpl->tpl_vars['runtime']->value['are_all_storefronts_closed']) {?> navbar-inner--disabled<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company']) {?>
                <?php $_smarty_tpl->_assignInScope('name', $_smarty_tpl->tpl_vars['runtime']->value['company_data']['company']);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('name', $_smarty_tpl->tpl_vars['settings']->value['Company']['company_name']);?>
            <?php }?>

            <?php if (fn_allowed_for("ULTIMATE")) {?>
                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_current_storefront_closed'] || $_smarty_tpl->tpl_vars['runtime']->value['are_all_storefronts_closed']) {?>
                    <?php $_smarty_tpl->_assignInScope('storefront_status_icon', "icon-lock");?>
                <?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['have_closed_storefronts']) {?>
                    <?php $_smarty_tpl->_assignInScope('storefront_status_icon', "icon-unlock-alt");?>
                <?php }?>

                <div class="nav-ult">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"menu:storefront_icon"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"menu:storefront_icon"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_data']['company_id']) {?>
                            <?php $_smarty_tpl->_assignInScope('name', $_smarty_tpl->__("all_vendors"));?>
                        <?php }?>
                    <li class="nav-company">
                        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['are_all_storefronts_closed']) {?>
                            <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->__("no_active_storefronts"));?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->__("view_storefront"));?>
                        <?php }?>
                        <?php $_smarty_tpl->_assignInScope('storefront_url', fn_url("profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])."&area=C"));?>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_url']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="brand" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-shopping-cart"),$_smarty_tpl);?>

                        </a>
                    </li>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"menu:storefront_icon"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] || $_smarty_tpl->tpl_vars['runtime']->value['forced_company_id']) {?>
                        <ul class="nav">
                            <li class="dropdown">
                                <a href="<?php echo htmlspecialchars(fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_data']['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("storefront");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company'], ENT_QUOTES, 'UTF-8');?>
</a>
                            </li>
                        </ul>
                    <?php }?>
                </div>
            <?php }?>

            <?php if (fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>

                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['are_all_storefronts_closed']) {?>
                    <?php $_smarty_tpl->_assignInScope('storefront_status_icon', "icon-lock");?>
                <?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['have_closed_storefronts']) {?>
                    <?php $_smarty_tpl->_assignInScope('storefront_status_icon', "icon-unlock-alt");?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_multiple_storefronts']) {?>
                    <?php if ($_REQUEST['storefront_id']) {?>
                        <?php $_smarty_tpl->_assignInScope('storefront_id', $_REQUEST['storefront_id']);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('storefront_id', $_smarty_tpl->tpl_vars['app']->value['storefront']->storefront_id);?>
                    <?php }?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['show_company']->value) {?>
                    <ul class="nav">
                        <li class="nav-company">
                            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::ADMIN")) {?>
                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['storefront_id']->value) {
echo "&storefront_id=";
echo (string)$_smarty_tpl->tpl_vars['storefront_id']->value;
}
$_prefixVariable13=ob_get_clean();
$_smarty_tpl->_assignInScope('storefront_url', fn_url("profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])."&area=C".$_prefixVariable13));?>
                            <?php } else { ?>
                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['storefront_id']->value) {
echo "&storefront_id=";
echo (string)$_smarty_tpl->tpl_vars['storefront_id']->value;
}
$_prefixVariable14=ob_get_clean();
$_smarty_tpl->_assignInScope('storefront_url', $_smarty_tpl->tpl_vars['runtime']->value['company_id'] ? "companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_id']).$_prefixVariable14 : '');?>
                                <?php $_smarty_tpl->_assignInScope('storefront_url', fn_url($_smarty_tpl->tpl_vars['storefront_url']->value,"C"));?>
                                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['storefront_access_key']) {?>
                                    <?php $_smarty_tpl->_assignInScope('storefront_url', fn_link_attach($_smarty_tpl->tpl_vars['storefront_url']->value,"store_access_key=".((string)$_smarty_tpl->tpl_vars['runtime']->value['storefront_access_key'])));?>
                                <?php }?>
                            <?php }?>
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_url']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="brand" title="<?php echo $_smarty_tpl->__("view_storefront");?>
">
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-shopping-cart"),$_smarty_tpl);?>

                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['storefront_status_icon']->value && fn_check_view_permissions("storefronts.manage","GET")) {?>
                            <a href="<?php echo htmlspecialchars(fn_url("storefronts.manage"), ENT_QUOTES, 'UTF-8');?>
" class="brand">
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['storefront_status_icon']->value)." dropdown-menu__icon"),$_smarty_tpl);?>

                            </a>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>
                                <?php $_smarty_tpl->_assignInScope('company_name', $_smarty_tpl->tpl_vars['runtime']->value['company_data']['company']);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('company_name', smarty_modifier_truncate($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company'],43,"...",true));?>
                            <?php }?>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['auth']->value['company_id']) {?>
                            <li class="dropdown nav__company-name">
                                <a href="<?php echo htmlspecialchars(fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company'], ENT_QUOTES, 'UTF-8');?>
</a>
                            </li>
                        <?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_check_view_permissions("companies.update","GET")) {?>
                            <li class="dropdown">
                                <a href="<?php echo htmlspecialchars(fn_url("companies.update?company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                            </li>
                        <?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                            <li class="dropdown">
                                <a class="unedited-element"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                            </li>
                        <?php }?>
                    </ul>
                <?php }?>
            <?php }?>

                <ul id="mainrightnavbar" class="nav hover-show navbar-right">
                <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['navigation']->value['static']) {?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigation']->value['static']['top'], 'm', false, 'first_level_title', 'first_level_top', array (
));
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['first_level_title']->value => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
                        <li class="dropdown dropdown-top-menu-item<?php if ($_smarty_tpl->tpl_vars['first_level_title']->value == $_smarty_tpl->tpl_vars['navigation']->value['selected_tab']) {?> active<?php }?> navigate-items">
                            <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php if ($_smarty_tpl->tpl_vars['m']->value['href']) {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['m']->value['href']), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>" class="dropdown-toggle <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['first_level_title']->value);?>

                                <?php if ($_smarty_tpl->tpl_vars['m']->value['items']) {?>
                                    <b class="caret"></b>
                                <?php }?>
                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['m']->value['items']) {?>
                            <ul class="dropdown-menu">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m']->value['items'], 'second_level', false, 'second_level_title', 'sec_level_top', array (
));
$_smarty_tpl->tpl_vars['second_level']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['second_level_title']->value => $_smarty_tpl->tpl_vars['second_level']->value) {
$_smarty_tpl->tpl_vars['second_level']->do_else = false;
?>
                                    <li class="<?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>dropdown-submenu<?php }
if ($_smarty_tpl->tpl_vars['second_level_title']->value == $_smarty_tpl->tpl_vars['navigation']->value['subsection']) {?> active<?php }?> <?php if ($_smarty_tpl->tpl_vars['second_level']->value['is_promo']) {?>cm-promo-popup<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
" <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['main']), true);?>
>
                                        <?php if ($_smarty_tpl->tpl_vars['second_level']->value['type'] == "title") {?>
                                            <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?><div class="dropdown-submenu__link-overlay"></div><?php }?>
                                            <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>dropdown-submenu__link<?php }?> <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href'], ENT_QUOTES, 'UTF-8');
}?>" <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['href']), true);?>
>
                                                <?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['second_level']->value['title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level_title']->value) ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

                                                <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'] === "is-addon") {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-is-addon"),$_smarty_tpl);
}?>
                                            </a>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['second_level']->value['type'] != "divider") {?>
                                            <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?><div class="dropdown-submenu__link-overlay"></div><?php }?>
                                            <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>dropdown-submenu__link<?php }?> <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['second_level']->value['href']), ENT_QUOTES, 'UTF-8');?>
" <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['href']), true);?>
>
                                                <?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['second_level']->value['title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level_title']->value) ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

                                                <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'] === "is-addon") {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-is-addon"),$_smarty_tpl);
}?>
                                            </a>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>
                                            <ul class="dropdown-menu">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['second_level']->value['subitems'], 'sm', false, 'subitem_title');
$_smarty_tpl->tpl_vars['sm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subitem_title']->value => $_smarty_tpl->tpl_vars['sm']->value) {
$_smarty_tpl->tpl_vars['sm']->do_else = false;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['sm']->value['type'] != "divider") {?>
                                                    <li class="<?php if ($_smarty_tpl->tpl_vars['sm']->value['active']) {?>active<?php }?> <?php if ($_smarty_tpl->tpl_vars['sm']->value['is_promo']) {?>cm-promo-popup<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
" <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['sm']->value['attrs']['main']), true);?>
>
                                                        <?php if ($_smarty_tpl->tpl_vars['sm']->value['type'] == "title") {?>
                                                            <?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['sm']->value['title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['subitem_title']->value) ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

                                                        <?php } elseif ($_smarty_tpl->tpl_vars['sm']->value['type'] != "divider") {?>
                                                            <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subitem_title']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['sm']->value['attrs']['class']) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sm']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['sm']->value['href']), ENT_QUOTES, 'UTF-8');?>
" <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['sm']->value['attrs']['href']), true);?>
>
                                                                <?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['sm']->value['title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['subitem_title']->value) ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

                                                                <?php if ($_smarty_tpl->tpl_vars['sm']->value['attrs']['class'] === "is-addon") {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-is-addon"),$_smarty_tpl);
}?>
                                                            </a>
                                                        <?php }?>
                                                    </li>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['sm']->value['type'] == "divider") {?>
                                                        <li class="divider"></li>
                                                    <?php }?>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </ul>
                                        <?php }?>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['second_level']->value['type'] == "divider") {?>
                                        <li class="divider"></li>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                            <?php }?>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                    <!-- end navbar-->

                <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>

                    <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['menu_languages']->value) > 1 || smarty_modifier_sizeof($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?>
                        <li class="divider-vertical"></li>
                    <?php }?>

                    <!--language-->
                    <?php if ($_smarty_tpl->tpl_vars['show_languages_in_header_menu']->value) {?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'languages_menu');?>

                    <?php }?>
                    <!--end language-->

                    <!-- Notification Center -->
                        <?php $_smarty_tpl->_subTemplateRender("tygh:components/notifications_center/opener.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <!-- /Notification Center -->

                    <!--Curriencies-->
                        <?php if ($_smarty_tpl->tpl_vars['show_currencies_in_header_menu']->value) {?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'currencies_menu');?>

                        <?php }?>
                    <!--end curriencies-->

                    <li class="divider-vertical"></li>

                    <!-- user menu -->
                    <li class="dropdown dropdown-top-menu-item dropdown--open-enable nav__user-menu<?php if ($_smarty_tpl->tpl_vars['enable_onclick_menu']->value) {?> hover-show--disabled<?php }?>">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:top_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:top_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <a class="dropdown-toggle dropdown-top-menu-item-link nav__user-menu-link"
                                <?php if ($_smarty_tpl->tpl_vars['enable_onclick_menu']->value) {?> data-toggle="dropdown"<?php }?>
                            >
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-user nav__profile-icon"),$_smarty_tpl);?>

                                <span class="nav__profile-text">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['lastname'], ENT_QUOTES, 'UTF-8');?>

                                </span>
                                <?php if ($_smarty_tpl->tpl_vars['show_menu_caret']->value) {?>
                                    <b class="caret"></b>
                                <?php }?>
                            </a>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:top_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <ul class="dropdown-menu pull-right nav__user-menu-dropdown">
                            <li class="disabled">
                                <a><strong><?php echo $_smarty_tpl->__("signed_in_as");?>
</strong><br><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
                            </li>
                            <li class="divider"></li>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"menu:profile"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"menu:profile"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php if (!$_smarty_tpl->tpl_vars['show_languages_in_header_menu']->value) {?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'languages_menu');?>

                            <?php }?>
                            <?php if (!$_smarty_tpl->tpl_vars['show_currencies_in_header_menu']->value) {?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'currencies_menu');?>

                            <?php }?>
                            <li><a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("edit_profile");?>
</a></li>
                            <?php if (fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate'] && $_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::ADMIN") && fn_check_view_permissions("companies.get_companies_list","GET") && fn_check_view_permissions("profiles.login_as_vendor","POST")) {?>
                                <li id="company_picker_dropdown_menu"
                                    class="js-company-switcher"
                                    data-ca-switcher-param-name="company_id"
                                    data-ca-switcher-data-name="company_id">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>$_smarty_tpl->tpl_vars['companies_picker_name']->value,'item_ids'=>array($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company_id']),'type'=>"list",'show_advanced'=>false,'selection_title_pre'=>$_smarty_tpl->__("log_in_as_vendor"),'dropdown_parent_selector'=>"#company_picker_dropdown_menu"), 0, false);
?>
                                </li>
                            <?php }?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"menu:profile_menu_extra_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"menu:profile_menu_extra_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"menu:profile_menu_extra_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <li><a href="<?php echo htmlspecialchars(fn_url("auth.logout"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("sign_out");?>
</a></li>
                            <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                                <li class="divider"></li>
                                <?php if (fn_check_view_permissions("upgrade_center.manage","POST")) {?>
                                    <li class="disabled">
                                        <a><?php $_smarty_tpl->_subTemplateRender("tygh:common/product_release_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_time_shown'=>false), 0, false);
?></a>
                                    </li>
                                <?php }?>
                                <li>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."feedback",'edit_onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'text'=>$_smarty_tpl->__("feedback_values"),'act'=>"link",'picker_meta'=>"cm-clear-content",'link_text'=>$_smarty_tpl->__("send_feedback",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'update_block'),'href'=>"feedback.prepare",'no_icon_link'=>true,'but_name'=>"dispatch[feedback.send]",'opener_ajax_class'=>"cm-ajax"), 0, false);
?>
                                </li>
                            <?php }?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"menu:profile"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </ul>
                    </li>
                    <!--end user menu -->
                <?php }?>
                </ul>

            </div>
        <!--header_navbar--></div>

        <!--Subnav-->
        <div class="subnav header-subnav" id="header_subnav">
            <!--quick search-->
            <div class="search nav__search pull-right">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:global_search"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:global_search"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <form id="global_search" method="get" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="search__form">
                        <input type="hidden" name="dispatch" value="search.results" />
                        <input type="hidden" name="compact" value="Y" />
                        <label for="gs_text" class="search__group">
                            <input type="text" class="cm-autocomplete-off search__input <?php if ($_smarty_tpl->tpl_vars['enable_search_collapse']->value) {?>search__input--collapse<?php }?>" id="gs_text" name="q" placeholder="<?php echo $_smarty_tpl->__("admin_search_general");?>
" value="<?php echo htmlspecialchars($_REQUEST['q'], ENT_QUOTES, 'UTF-8');?>
" />
                            <button class="btn search__button" type="submit" id="search_button"></button>
                        </label>
                    </form>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:global_search"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            </div>
            <!--end quick search-->

            <!-- quick menu -->
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/quick_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <!-- end quick menu -->

            <ul class="nav nav__menu hover-show nav-pills">
                <li class="mobile-hidden nav__header-main-menu-item">
                    <a href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="home nav__menu-item">
                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-home nav__home-icon"),$_smarty_tpl);?>

                        <span class="nav__home-text"><?php echo $_smarty_tpl->__("home");?>
</span>
                    </a>
                </li>

                <div class="menu-heading mobile-visible">

                    <button class="btn btn-primary mobile-visible-inline mobile-menu-closer"><?php echo $_smarty_tpl->__("close");?>
</button>


                    <!-- title of heading -->
                    <div class="menu-heading__title-block">
                        <span class="menu-heading__title-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['email'], ENT_QUOTES, 'UTF-8');?>
</span>
                        <span class="caret menu-heading__title-caret"></span>
                    </div>

                    <div class="menu-heading__dropdowned closed">
                    <ul class="dropdown-menu menu-heading__dropdowned-menu">
                                                <li class="disabled">
                            <a><strong><?php echo $_smarty_tpl->__("signed_in_as");?>
</strong><br><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
                        </li>
                        <li class="divider"></li>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"menu:profile"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"menu:profile"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <li><a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("edit_profile");?>
</a></li>
                            <li><a href="<?php echo htmlspecialchars(fn_url("auth.logout"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("sign_out");?>
</a></li>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"menu:profile"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        
                        <?php if (fn_allowed_for("ULTIMATE")) {?>
                            <?php if (fn_check_view_permissions("companies.manage","GET")) {?>
                                <li class="divider"></li>
                                <li><a href="<?php echo htmlspecialchars(fn_url("companies.manage?switch_company_id=0"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("manage_stores");?>
...</a></li>
                            <?php }?>
                        <?php }?>

                                                <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                            <li class="divider"></li>
                            <li>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."feedback",'edit_onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'text'=>$_smarty_tpl->__("feedback_values"),'act'=>"link",'picker_meta'=>"cm-clear-content",'link_text'=>$_smarty_tpl->__("send_feedback",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'update_block'),'href'=>"feedback.prepare",'no_icon_link'=>true,'but_name'=>"dispatch[feedback.send]",'opener_ajax_class'=>"cm-ajax"), 0, true);
?>
                            </li>
                        <?php }?>
                                            </ul>
                    </div>
                </div>

                <ul class="nav hover-show nav-pills nav-child mobile-visible nav-first">
                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_data']['storefront']) {?>
                    <li class="dropdown">
                        <?php $_smarty_tpl->_assignInScope('storefront_url', fn_url("profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])."&area=C"));?>
                        <a  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                            target="_blank"
                            title="<?php echo $_smarty_tpl->__("view_storefront");?>
"
                            class="dropdown-toggle"
                        ><?php echo $_smarty_tpl->__("view_storefront");?>
</a>
                    </li>
                <?php } elseif (fn_allowed_for("MULTIVENDOR")) {?>
                    <li class="dropdown">
                        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::ADMIN")) {?>
                            <?php $_smarty_tpl->_assignInScope('storefront_url', fn_url("profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])."&area=C"));?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('storefront_url', fn_url('',"C"));?>
                            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['storefront_access_key']) {?>
                                <?php $_smarty_tpl->_assignInScope('storefront_url', fn_link_attach($_smarty_tpl->tpl_vars['storefront_url']->value,"store_access_key=".((string)$_smarty_tpl->tpl_vars['runtime']->value['storefront_access_key'])));?>
                            <?php }?>
                        <?php }?>
                        <a  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                            target="_blank"
                            title="<?php echo $_smarty_tpl->__("view_storefront");?>
"
                            class="dropdown-toggle"
                        ><?php echo $_smarty_tpl->__("view_storefront");?>
</a>
                    </li>
                <?php }?>
                    <li class="dropdown"><a href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="dropdown-toggle"><?php echo $_smarty_tpl->__("home");?>
</a></li>
                </ul>

                <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['navigation']->value['static']['central']) {?>
                <hr class="mobile-visible navbar-hr" />
                <ul class="nav hover-show nav-pills nav-child nav__header-main-menu" id="header_main_menu">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigation']->value['static']['central'], 'm', false, 'first_level_title', 'first_level', array (
));
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['first_level_title']->value => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>

                    <?php $_smarty_tpl->_assignInScope('is_active_menu_class', $_smarty_tpl->tpl_vars['first_level_title']->value === $_smarty_tpl->tpl_vars['navigation']->value['selected_tab'] ? "active" : '');?>

                    <li
                        <?php if ($_smarty_tpl->tpl_vars['navigation_accordion']->value) {?>
                            class="accordion-group nav__header-main-menu-item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_menu_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                        <?php } else { ?>
                            class="dropdown nav__header-main-menu-item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_menu_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
                    >
                        <a href="<?php if ($_smarty_tpl->tpl_vars['m']->value['href']) {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['m']->value['href']), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');
}?>"
                            <?php if ($_smarty_tpl->tpl_vars['navigation_accordion']->value && $_smarty_tpl->tpl_vars['m']->value['items']) {?>
                                data-toggle="collapse" data-parent="#header_main_menu" class="nav__menu-item nav__menu-item--accordion <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_menu_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                            <?php } elseif ($_smarty_tpl->tpl_vars['m']->value['items']) {?>
                                class="dropdown-toggle nav__menu-item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_menu_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                            <?php } else { ?>
                                class="nav__menu-item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_menu_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                            <?php }?>
                        >
                            <?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['m']->value['title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['first_level_title']->value) ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['m']->value['items'] && $_smarty_tpl->tpl_vars['show_menu_caret']->value) {?>
                                <b class="caret"></b>
                            <?php }?>
                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['m']->value['items']) {?>
                        <ul
                            <?php if ($_smarty_tpl->tpl_vars['navigation_accordion']->value) {?>
                                class="collapse nav__header-main-menu-submenu <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_menu_class']->value, ENT_QUOTES, 'UTF-8');?>

                                    <?php if ($_smarty_tpl->tpl_vars['first_level_title']->value === $_smarty_tpl->tpl_vars['navigation']->value['selected_tab']) {?>
                                        in
                                    <?php }?>
                                "
                            <?php } else { ?>
                                class="dropdown-menu nav__header-main-menu-submenu <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_menu_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                            <?php }?>
                            id="<?php if ($_smarty_tpl->tpl_vars['m']->value['href']) {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['m']->value['href']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');
}?>"
                        >
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m']->value['items'], 'second_level', false, 'second_level_title', 'sec_level', array (
));
$_smarty_tpl->tpl_vars['second_level']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['second_level_title']->value => $_smarty_tpl->tpl_vars['second_level']->value) {
$_smarty_tpl->tpl_vars['second_level']->do_else = false;
?>

                                <?php $_smarty_tpl->_assignInScope('is_active_submenu_class', $_smarty_tpl->tpl_vars['second_level_title']->value === $_smarty_tpl->tpl_vars['navigation']->value['subsection'] && $_smarty_tpl->tpl_vars['first_level_title']->value === $_smarty_tpl->tpl_vars['navigation']->value['selected_tab'] ? "active" : '');?>

                                <li <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['main']), true);?>

                                    <?php if ($_smarty_tpl->tpl_vars['navigation_accordion']->value) {?>
                                        class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
 accordion-group nav__header-main-menu-subitem <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_submenu_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    <?php } else { ?>
                                        class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
 nav__header-main-menu-subitem
                                        <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?> dropdown-submenu<?php }?>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_submenu_class']->value, ENT_QUOTES, 'UTF-8');?>

                                        "
                                    <?php }?>
                                >
                                    <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems'] && !$_smarty_tpl->tpl_vars['navigation_accordion']->value) {?><div class="dropdown-submenu__link-overlay"></div><?php }?>
                                    <a <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['href']), true);?>

                                        <?php if ($_smarty_tpl->tpl_vars['second_level']->value['is_promo']) {?>
                                            class="cm-promo-popup nav__menu-subitem"
                                        <?php } elseif ($_smarty_tpl->tpl_vars['navigation_accordion']->value && $_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>
                                            href="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_second_level"
                                            class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
 nav__menu-subitem nav__menu-subitem--accordion <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_submenu_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                                            data-toggle="collapse"
                                            data-parent="#<?php if ($_smarty_tpl->tpl_vars['m']->value['href']) {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['m']->value['href']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');
}?>"
                                        <?php } else { ?>
                                            href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['second_level']->value['href']), ENT_QUOTES, 'UTF-8');?>
"
                                            class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
 nav__menu-subitem
                                                <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>
                                                    dropdown-submenu__link
                                                <?php }?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_active_submenu_class']->value, ENT_QUOTES, 'UTF-8');?>

                                            "
                                        <?php }?>
                                    >
                                        <span><?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['second_level']->value['title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level_title']->value) ?? null : $tmp), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'] === "is-addon" && $_smarty_tpl->tpl_vars['show_addon_icon']->value) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-is-addon"),$_smarty_tpl);
}?></span>
                                        <?php if ($_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level']->value['description']) != "_".((string)$_smarty_tpl->tpl_vars['second_level_title']->value)."_menu_description") {
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['show_menu_descriptions'] === "Y" && $_smarty_tpl->tpl_vars['show_menu_descriptions']->value) {?><span class="hint"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level']->value['description']);?>
</span><?php }
}?>
                                    </a>

                                    <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>
                                        <ul
                                            <?php if ($_smarty_tpl->tpl_vars['navigation_accordion']->value) {?>
                                                class="collapse
                                                    <?php if ($_smarty_tpl->tpl_vars['second_level_title']->value == $_smarty_tpl->tpl_vars['navigation']->value['subsection'] && $_smarty_tpl->tpl_vars['first_level_title']->value == $_smarty_tpl->tpl_vars['navigation']->value['selected_tab']) {?>
                                                        in
                                                    <?php }?>
                                                "
                                            <?php } else { ?>
                                                class="dropdown-menu"
                                            <?php }?>
                                            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_second_level"
                                        >
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['second_level']->value['subitems'], 'sm', false, 'subitem_title');
$_smarty_tpl->tpl_vars['sm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subitem_title']->value => $_smarty_tpl->tpl_vars['sm']->value) {
$_smarty_tpl->tpl_vars['sm']->do_else = false;
?>
                                                <li class="<?php if ($_smarty_tpl->tpl_vars['sm']->value['active']) {?>active<?php }?> <?php if ($_smarty_tpl->tpl_vars['sm']->value['is_promo']) {?>cm-promo-popup<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
" <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['sm']->value['attrs']['main']), true);?>
><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['sm']->value['href']), ENT_QUOTES, 'UTF-8');?>
" <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['sm']->value['attrs']['href']), true);?>
><?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['sm']->value['title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['subitem_title']->value) ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a></li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    <?php }?>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                        <?php }?>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['navigation']->value['static']['top']) {?>
                <hr class="mobile-visible navbar-hr" />
                <ul class="nav hover-show nav-pills nav-child mobile-visible">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigation']->value['static']['top'], 'm', false, 'first_level_title', 'first_level_top', array (
));
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['first_level_title']->value => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
                    <li class="dropdown dropdown-top-menu-item<?php if ($_smarty_tpl->tpl_vars['first_level_title']->value == $_smarty_tpl->tpl_vars['navigation']->value['selected_tab']) {?> active<?php }?> navigate-items">
                        <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
" href="#" class="dropdown-toggle <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['first_level_title']->value);?>

                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m']->value['items'], 'second_level', false, 'second_level_title', 'sec_level_top', array (
));
$_smarty_tpl->tpl_vars['second_level']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['second_level_title']->value => $_smarty_tpl->tpl_vars['second_level']->value) {
$_smarty_tpl->tpl_vars['second_level']->do_else = false;
?>
                                <li class="<?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>dropdown-submenu<?php }
if ($_smarty_tpl->tpl_vars['second_level_title']->value == $_smarty_tpl->tpl_vars['navigation']->value['subsection']) {?> active<?php }?> <?php if ($_smarty_tpl->tpl_vars['second_level']->value['is_promo']) {?>cm-promo-popup<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
" <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['main']), true);?>
>
                                    <?php if ($_smarty_tpl->tpl_vars['second_level']->value['type'] == "title") {?>
                                        <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href']) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['href']), true);?>
><?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['second_level']->value['title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level_title']->value) ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['second_level']->value['type'] != "divider") {?>
                                        <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href']) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class_href'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['second_level']->value['href']), ENT_QUOTES, 'UTF-8');?>
" <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['second_level']->value['attrs']['href']), true);?>
>
                                            <?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['second_level']->value['title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['second_level_title']->value) ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

                                            <?php if ($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'] === "is-addon") {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-is-addon"),$_smarty_tpl);
}?>
                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['second_level']->value['subitems']) {?>
                                        <ul class="dropdown-menu">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['second_level']->value['subitems'], 'sm', false, 'subitem_title');
$_smarty_tpl->tpl_vars['sm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subitem_title']->value => $_smarty_tpl->tpl_vars['sm']->value) {
$_smarty_tpl->tpl_vars['sm']->do_else = false;
?>
                                                <li class="<?php if ($_smarty_tpl->tpl_vars['sm']->value['active']) {?>active<?php }?> <?php if ($_smarty_tpl->tpl_vars['sm']->value['is_promo']) {?>cm-promo-popup<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
" <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['sm']->value['attrs']['main']), true);?>
>
                                                    <?php if ($_smarty_tpl->tpl_vars['sm']->value['type'] == "title") {?>
                                                        <?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['sm']->value['title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['subitem_title']->value) ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

                                                    <?php } elseif ($_smarty_tpl->tpl_vars['sm']->value['type'] != "divider") {?>
                                                        <a id="elm_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_level_title']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subitem_title']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['sm']->value['href']), ENT_QUOTES, 'UTF-8');?>
" <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['sm']->value['attrs']['href']), true);?>
><?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['sm']->value['title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['subitem_title']->value) ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
                                                    <?php }?>
                                                </li>
                                                <?php if ($_smarty_tpl->tpl_vars['sm']->value['type'] == "divider") {?>
                                                    <li class="divider"></li>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    <?php }?>
                                </li>
                                <?php if ($_smarty_tpl->tpl_vars['second_level']->value['type'] == "divider") {?>
                                    <li class="divider"></li>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <?php }?>

                <hr class="mobile-visible navbar-hr" />
                <ul class="nav hover-show nav-pills nav-child mobile-visible nav__header-main-menu">
                    <?php $_smarty_tpl->_assignInScope('style', $_smarty_tpl->tpl_vars['navigation_accordion']->value ? "accordion" : "dropdown");?>

                    <!--language-->
                    <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['menu_languages']->value) > 1) {?> 
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>$_smarty_tpl->tpl_vars['style']->value,'selected_tab'=>$_smarty_tpl->tpl_vars['navigation']->value['selected_tab'],'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl="),'items'=>$_smarty_tpl->tpl_vars['menu_languages']->value,'selected_id'=>(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'display_icons'=>true,'key_name'=>"name",'key_selected'=>"lang_code",'class'=>"languages",'plain_name'=>$_smarty_tpl->__("language")), 0, true);
?>
                    <?php }?>
                    <!--end language-->

                    <!--curriencies-->
                    <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>$_smarty_tpl->tpl_vars['style']->value,'selected_tab'=>$_smarty_tpl->tpl_vars['navigation']->value['selected_tab'],'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"currency="),'items'=>$_smarty_tpl->tpl_vars['currencies']->value,'selected_id'=>$_smarty_tpl->tpl_vars['secondary_currency']->value,'display_icons'=>false,'key_name'=>"description",'key_selected'=>"currency_code",'plain_name'=>$_smarty_tpl->__("currency")), 0, true);
?>
                    <?php }?>
                    <!--end curriencies-->
                </ul>
                <hr class="mobile-visible navbar-hr" />

            </ul>
        <!--header_subnav--></div>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['navigation_accordion']->value) {?>
                <div class="overlayed-mobile-menu mobile-visible">
            <div class="overlayed-mobile-menu__content">
                <div class="overlayed-mobile-menu__title-container">
                    <h3 class="overlayed-mobile-menu-title"></h3>
                </div>

                <div class="overlayed-mobile-menu-closer">
                    <button class="mobile-visible-inline overlay-navbar-close btn btn-primary"><?php echo $_smarty_tpl->__("go_back");?>
</button>
                </div>
            </div>

            <div class="overlayed-mobile-menu__content">
            </div>
            <div class="overlayed-mobile-menu-container"></div>
        </div>
            <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"menu:general"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
/* smarty_template_function_menu_attrs_132296660562ea17bbdee8f8_75900913 */
if (!function_exists('smarty_template_function_menu_attrs_132296660562ea17bbdee8f8_75900913')) {
function smarty_template_function_menu_attrs_132296660562ea17bbdee8f8_75900913(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('attrs'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attrs']->value, 'value', false, 'attr');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attr']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attr']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}}
/*/ smarty_template_function_menu_attrs_132296660562ea17bbdee8f8_75900913 */
}
