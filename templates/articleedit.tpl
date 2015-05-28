{include file="header.tpl"}
    <div class="clear"></div>
        <section id="main">
        	<section id="article">

<form action="articleedit.php?id={$getid}" method="post">
		        <article>
		            <header class="article">
						<div class="articleheader2">
			            	<div class="ahead1">
								<img src="img/tytad.png" alt=""/>
							</div>
							<h1><a href="">Treść</a></h1>
						</div>
		            </header>
		            <section class="article-content3">
		                <div>Kod programowanie wklejamy w "Dodj kod" i wygenerowany kod wklejamy w okno artykułu np. gsh=0=gshh<br><br>
							<textarea class="ckeditor" name="tresc">{$edytowany.tresc}</textarea>			
		                </div>
		            </section>
					<div class="clear"></div>
		        </article>
		        <article>
		            <header class="article">
						<div class="articleheader2">
			            	<div class="ahead1">
								<img src="img/tytad.png" alt=""/>
							</div>
							<h1><a href="">Wstęp</a></h1>
						</div>
		            </header>
		            <section class="article-content3">
		                <div>
							<textarea class="ckeditor" name="wstep">{$edytowany.wstep}</textarea>	
		                </div>
		            </section>
					<div class="clear"></div>
		        </article>
		        <article>
		            <header class="article">
						<div class="articleheader2">
			            	<div class="ahead1">
								<img src="img/tytad.png" alt=""/>
							</div>
							<h1><a href="">Ustawienia</a></h1>
						</div>
		            </header>
		            <section class="article-content">
		                <div>
							<br>Tytuł: <br>
							<input type="text" name="tytul" value="{$edytowany.tytul}" onblur="if(this.value.length == 0) this.value='Tytuł';" onclick="if(this.value == 'Tytuł') this.value='';" class="logincom" /><br>
							<br>Pozycja: <br>
							<input type="text" name="pozycja" value="{$edytowany.idtop}" onblur="if(this.value.length == 0) this.value='0';" onclick="if(this.value == '0') this.value='';" class="logincom" /><br>
							<br>Stan: <br>
							<input type="text" name="stan" value="{$edytowany.stan}" onblur="if(this.value.length == 0) this.value='0';" onclick="if(this.value == '0') this.value='';" class="logincom" /><br>
							<br>Kategoria: <br>
							<select name="kategoria" class="logincom2">
								{section name=kategoria loop=$kategoria}
								<option>{$kategoria[kategoria]}</option>
								{/section}
							</select><br><br>
							<button tabindex="2" type="submit" id="logbut">OK</button>
		                </div>
		            </section>
					<div class="clear"></div>
		        </article>

</form>


		    </section>
{include file="aside.tpl"}