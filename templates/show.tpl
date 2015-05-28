{include file="header.tpl"}
    <div class="clear"></div>
        <section id="main">
        	<section id="article">
				<section id="adres">
					{section name=id loop=$gdzie.tytul}
					<a href="{$gdzie.link[id]}">{$gdzie.tytul[id]}</a>{if not $smarty.section.id.last} --> {/if}
					{/section}
				</section>
				{section name=idarticle loop=$article.tytul}
		        <article>
		            <header class="article">
						<div class="articleheader2">
	   						<section class="article">
	   							<div class="comment">{$article.komenta[idarticle]}</div>
			            	</section>
			            	<div class="ahead1">
								<img src="img/tytad.png" alt=""/>
							</div>
							<h1><a href="show.php?id={$article.id[idarticle]}">{$article.tytul[idarticle]}</a></h1>
						</div>
						{if $articleheader3 == false}
						<div class="articleheader3">
							KATEGORIA: <a class="cat" href="">{$article.kategoria[idarticle]}</a> | DATA: {$article.data[idarticle]} | 
							{if $article.czyedit[idarticle] != 0}EDYTOWANO: {$article.dataedit[idarticle]} |{/if}AUTOR: <a class="log" href="">{$article.autor[idarticle]}</a>
                            {if $article.aut_or_adm[idarticle] == true} | <a class="log" href="articleedit.php?id={$article.id[idarticle]}">edytuj</a>{/if}
						</div>
						{/if}

		            </header>
		            <section class="article-content">
		                <div>{$article.tresc[idarticle]}</div>
		            </section>
		            	<div class="udost">
							<div class="fb-like" data-href="http://haks.pl/index.php?id={$article.id[idarticle]}" data-width="450" data-layout="button_count" data-show-faces="false" data-send="true"></div>
							<div class="g-plusone" data-size="medium"></div>
						</div>







					<h1><a>Komentarze</a></h1>
					{section name=idkomentarze loop=$komentarze.tresc}
		            <section class="com-content">
		            	<div class="articleheader3">
							DATA: {$komentarze.data[idkomentarze]} | AUTOR: <a class="log" href="">{$komentarze.autor[idkomentarze]}</a>
						</div>
		                {$komentarze.tresc[idkomentarze]}
		            </section>
		            {/section}

					<section class="com-content2">
 						<h1><a>Dodaj nowy</a></h1>
						<form action="show.php?id={$idedit}" method="POST" id="logform">{if $login.czy == false}
							<input type="text" name="nick" value="Nick" onblur="if(this.value.length == 0) this.value='Nick';" onclick="if(this.value == 'Nick') this.value='';" class="logincom" /><br>{/if}
							<textarea name="tresc"  id="comta"  onblur="if(this.value.length == 0) this.value='Wpisz treść...';" onclick="if(this.value == 'Wpisz treść...') this.value='';" >Wpisz treść...</textarea><br>
							<button tabindex="2" type="submit" id="logbut">Dodaj</button>
						</form>
					</section>




					<div class="clear"></div>
		        </article>
		    	{/section}
		    </section>
{include file="aside.tpl"}