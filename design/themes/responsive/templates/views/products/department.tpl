<div id="product_features_{$block.block_id}">
    <div class="ty-feature" width="6%">
        {if $department_data.main_pair}
        <div  width="6%"">
        {include file="common/image.tpl" images=$department_data.main_pair}
    </div>
    {/if}
    <div class="ty-feature__description ty-wysiwyg-content">
        {$department_data.description nofilter}
    </div>
</div>
{if $products}
    {assign var="layouts" value=""|fn_get_products_views:false:0}
    {if $layouts.$selected_layout.template}
        {include file="`$layouts.$selected_layout.template`" columns=$settings.Appearance.columns_in_products_list}
    {/if}
{else}
    <h2>{__('staff')}:</h2>
    {foreach from=$staff_ids item=staff_id}
        <p>{__('the_one')}: {$staff_id.firstname} {$staff_id.lastname}</p>
    {/foreach}
{/if}
{capture name="mainbox_title"}{$department_data.variant nofilter}{/capture}