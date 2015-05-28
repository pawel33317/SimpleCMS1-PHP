{section name=idarticle loop=$article.tytul}
<article>
    <header class="article">
		<div class="articleheader2">
			<section class="article">
				{if $comenta == false }<div class="comment">{$article.komenta[idarticle]}</div>{/if}
        	</section>
        	<div class="ahead1">
				<img src="img/tytad.png" alt=""/>
			</div>
			<h1><a href="{if $details == false}show.php?id={$article.id[idarticle]}{/if}">{$article.tytul[idarticle]}</a></h1>
		</div>
		{if $details == false}
		<div class="articleheader3">
			KATEGORIA: <a class="cat" href="">{$article.kategoria[idarticle]}</a> | DATA: {$article.data[idarticle]} | 
			{if $article.czyedit[idarticle] != 0}EDYTOWANO: {$article.dataedit[idarticle]} |{/if}AUTOR: <a class="log" href="">{$article.autor[idarticle]}</a>
		</div>
		{/if}
    </header>
    <section class="article-content">
        <div class="tresc">{$article.wstep[idarticle]}{if $details == false}<a href="show.php?id={$article.id[idarticle]}">więcej...</a>{/if}</div>
    </section>
	<div class="clear"></div>
</article>
{/section}
