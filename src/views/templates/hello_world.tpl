{extends 'main_layout.tpl'}

{block name=page_title}Smarty view{/block}

{block name=content_title}
<h2>Hello world from my awesome site</h2>
{/block}

{block name=content_intro}
<p>This is a very crude example of templating with Smarty.</p>
{/block}

{block name=content_main}
    {foreach from=$passed_values key=$key item=$value}
        {if $key eq 'title'}
            <header>
                <h2>{$value}</h2>
            </header>
        {elseif $key eq 'data'}
            <section>
                <nav>
                    <ul>
                        {foreach from=$value item=$item}
                            <li><a href="{$item.url}">{$item.name}</a>
                        {/foreach}
                    </ul>
                </nav>

                {foreach from=$value item=$item}
                    {if !empty($item.description)}
                        <article>
                            <h1>{$item.name}</h1>
                            {$item.description}
                        </article>
                    {/if}
                {/foreach}
            </section>
        {/if}
    {/foreach}
{/block}

{block name=content_footer}
<footer>
    <p>Footer</p>
</footer>
{/block}
