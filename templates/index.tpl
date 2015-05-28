{include file="header.tpl"}
    <div class="clear"></div>
        <section id="main">
        	<section id="article">
				<section id="adres">
					{section name=id loop=$gdzie.tytul}
					<a href="{$gdzie.link[id]}">{$gdzie.tytul[id]}</a>{if not $smarty.section.id.last} --> {/if}
					{/section}
				</section>
                {include file="ajaxindex.tpl"}
		    </section>
		{include file="aside.tpl"}