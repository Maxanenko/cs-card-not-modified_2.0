{if $runtime.controller == "auth"}
    {if $runtime.mode == "connect_social"}
    <h4 class="ty-login-info__title">{__("hybrid_auth.connect_social_title")}</h4>
    <div class="ty-login-info__txt">{__("hybrid_auth.text_connect_social") nofilter}</div>
    {/if}
    {if $runtime.mode == "specify_email"}
        <h4 class="ty-login-info__title">{__("hybrid_auth.specify_email_title")}</h4>
        <div class="ty-login-info__txt">{__("hybrid_auth.text_specify_email") nofilter}</div>
    {/if}
{/if}

