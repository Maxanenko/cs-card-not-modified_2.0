{** department section **}

{capture name="mainbox"}

    <form action="{""|fn_url}" method="post" id="department_form" name="department_form" enctype="multipart/form-data">
        <input type="hidden" name="fake" value="1" />
        {include
        file="common/pagination.tpl"
        save_current_page=true
        save_current_url=true
        div_id="pagination_contents_department"
        }

        {$c_url=$config.current_url|fn_query_remove:"sort_by":"sort_order"}

        {$rev=$smarty.request.content_id|default:"pagination_contents_department"}
        {include_ext file="common/icon.tpl" class="icon-`$search.sort_order_rev`" assign=c_icon}
        {include_ext file="common/icon.tpl" class="icon-dummy" assign=c_dummy}
        {$department_statuses=""|fn_get_default_statuses:true}
        {$has_permission = fn_check_permissions("department", "update_status", "admin", "POST")}

        {if $departments}
            {capture name="department_table"}
                <div class="table-responsive-wrapper longtap-selection">
                    <table class="table table-middle table--relative table-responsive">
                        <thead
                                data-ca-bulkedit-default-object="true"
                                data-ca-bulkedit-component="defaultObject"
                        >
                        <tr>
                            <th width="6%" class="left mobile-hide">
                                {include
                                file="common/check_items.tpl"
                                is_check_disabled=!$has_permission
                                check_statuses=($has_permission) ? $department_statuses : ''
                                }

                                <input type="checkbox"
                                       class="bulkedit-toggler hide"
                                       data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                       data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                />
                            </th>
                            <th></th>
                            <th>
                                <a class="cm-ajax"
                                   href="{"`$c_url`&sort_by=name&sort_order=`$search.sort_order_rev`"|fn_url}"
                                   data-ca-target-id={$rev}>{__("name")}{if $search.sort_by === "name"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a>
                            </th>

                            <th width="15%">
                                <a class="cm-ajax"
                                   href="{"`$c_url`&sort_by=timestamp&sort_order=`$search.sort_order_rev`"|fn_url}"
                                   data-ca-target-id={$rev}>{__("creation_date")}{if $search.sort_by === "timestamp"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a>
                            </th>

                            <th width="6%" class="mobile-hide">&nbsp;</th>
                            <th width="10%" class="right">
                                <a class="cm-ajax"
                                   href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}"
                                   data-ca-target-id={$rev}>{__("status")}{if $search.sort_by === "status"}{$c_icon nofilter}{/if}
                                </a>
                            </th>
                        </tr>
                        </thead>
                        {foreach from=$departments item=department}
                            <tr class="cm-row-status-{$department.status|lower} cm-longtap-target"
                                    {if $has_permission}
                                        data-ca-longtap-action="setCheckBox"
                                        data-ca-longtap-target="input.cm-item"
                                        data-ca-id="{$department.department_id}"
                                    {/if}
                            >
                                {$allow_save=true}

                                {if $allow_save}
                                    {$no_hide_input="cm-no-hide-input"}
                                {else}
                                    {$no_hide_input=""}
                                {/if}

                                <td class="left mobile-hide">
                                    <input type="checkbox"
                                           name="department_ids[]"
                                           value="{$department.department_id}"
                                           class="cm-item {$no_hide_input}
                                           cm-item-status-{$department.status|lower} " />
                                </td>

                                <td width="{$image_width + 18}" class="products-list__image">
                                    {include
                                    file="common/image.tpl"
                                    image=$department.main_pair
                                    image_width=$settings.Thumbnails.product_admin_mini_icon_width
                                    image_height=$settings.Thumbnails.product_admin_mini_icon_height
                                    href="profiles.update_department?department_id=`$department.department_id`"|fn_url
                                    image_css_class="products-list__image--img"
                                    link_css_class="products-list__image--link"
                                    }
                                </td>
                                <td class="{$no_hide_input}" data-th="{__("name")}">
                                    <a class="row-status" href="{"profiles.update_department?department_id=`$department.department_id`"|fn_url}">{$department.department}</a>
                                    {include file="views/companies/components/company_name.tpl" object=$department}
                                </td>

                                <td width="15%" data-th="{__("creation_date")}">
                                    {$department.timestamp|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}
                                </td>

                                <td width="6%" class="mobile-hide">
                                    {capture name="tools_list"}
                                        <li>
                                            {btn type="list"
                                            text=__("edit")
                                            href="profiles.update_department?department_id=`$department.department_id`"}
                                        </li>
                                        {if $allow_save}
                                            <li>
                                                {btn
                                                type="list"
                                                class="cm-confirm"
                                                text=__("delete")
                                                href="profiles.delete_department?department_id=`$department.department_id`"
                                                method="POST"}
                                            </li>
                                        {/if}
                                    {/capture}
                                    <div class="hidden-tools">
                                        {dropdown content=$smarty.capture.tools_list}
                                    </div>
                                </td>

                                <td width="10%" class="right" data-th="{__("status")}">
                                    {include
                                    file="views/products/components/status_on_manage.tpl"
                                    id=$department.department_id
                                    status=$department.status
                                    hidden=false
                                    object_id_name="department_id"
                                    table="department_form"
                                   }
                                </td>

                            </tr>
                        {/foreach}
                    </table>
                </div>
            {/capture}

            {include file="common/context_menu_wrapper.tpl"
            form="department_form"
            object="department"
            items=$smarty.capture.department_table
            has_permissions=$has_permission
            }
        {else}
            <p class="no-items">{__("no_data")}</p>
        {/if}

        {include file="common/pagination.tpl" div_id="pagination_contents_department"}

        {capture name="adv_buttons"}
            {include
            file="common/tools.tpl"
            tool_href="profiles.add_department"
            prefix="top"
            hide_tools="true"
            title= __('Add_a_new_department')
            icon="icon-plus"
            }
        {/capture}

        {capture name="buttons"}
            {capture name="tools_list"}
                <li class="bulkedit-action--legacy">
                    {btn type="delete_selected"
                    dispatch="dispatch[profiles.delete_departments]"
                    form="department_form"}
                </li>
            {/capture}
            {dropdown content=$smarty.capture.tools_list}
        {/capture}

    </form>

{/capture}

{capture name="sidebar"}
    {hook name="banners:manage_sidebar"}
        {include file="common/saved_search.tpl" dispatch="profiles.manage_department" view_type="department"}
        {include file="views/profiles/components/department_serch_form.tpl" dispatch="profiles.manage_department"}
    {/hook}
{/capture}


{$page_title = __('departments')}
{$select_languages = true}

{include
file="common/mainbox.tpl"
title=$page_title
content=$smarty.capture.mainbox
adv_buttons=$smarty.capture.adv_buttons
select_languages=$select_languages
sidebar=$smarty.capture.sidebar
buttons=$smarty.capture.buttons
}

{** ad section **}
