		    <section id="aside">
				<aside>
                    <div id="themm">
                        <a href="javascript:void(0)" onclick="delthemeblue();" class="theme1">JASNY MOTYW</a>
                        <a href="javascript:void(0)" onclick="themeblue();" class="theme2">NIEBIESKI MOTYW</a>
                    </div>
                    {if $login.czy == true}
                    {if $admin == true}
                    <h1>OPCJE ADMINA</h1>
					<div class="lista">
                        <img src="img/strzalka.png" alt=""/><a href="userlist.php">Spis userów</a><br>
                        <img src="img/strzalka.png" alt=""/><a href="usermanagment.php">Zarządzanie userami</a><br>
                        <img src="img/strzalka.png" alt=""/><a href="offarticles.php">Nie zaakceptowane artykuły</a><br>
                        <img src="img/strzalka.png" alt=""/><a href="stats.php">Statystyki</a><br>
                        <img src="img/strzalka.png" alt=""/><a href="categorymanagment.php">Zarzadzanie kategoriami</a><br>
					</div>
                    {/if}
                    <h1>OPCJE</h1>
					<div class="lista">
						<img src="img/strzalka.png" alt=""/><a href="addarticle.php">Dodaj artykuł</a><br>
                        <img src="img/strzalka.png" alt=""/><a href="addcode.php">Dodaj kod</a><br>
                        <img src="img/strzalka.png" alt=""/><a href="upload.php">Upload</a><br>
                        <img src="img/strzalka.png" alt=""/><a href="userarticle.php">Twoje artykuły</a><br>
                        <img src="img/strzalka.png" alt=""/><a href="userpanel.php">Twój panel</a><br>
					</div>
                    {/if}
					<h1>KATEGORIE !!!</h1>
					<div class="lista">
						{section name=id loop=$kategorie.tytul}
						<img src="img/strzalka.png" alt=""/><a href="{$kategorie.link[id]}">{$kategorie.tytul[id]}</a><br>
						{/section}
					</div>
                    
					<h1>NAJPOPULARNIEJSZE</h1>
					<div class="lista">
						{section name=id loop=$najpopularniejsze.tytul}
						<img src="img/strzalka.png" alt=""/><a href="{$najpopularniejsze.link[id]}">{$najpopularniejsze.tytul[id]}</a><br>
						{/section}
					</div>
     
					<h1>NAJNOWSZE</h1>
					<div class="lista">
						{section name=id loop=$najnowsze.tytul}
						<img src="img/strzalka.png" alt=""/><a href="{$najnowsze.link[id]}">{$najnowsze.tytul[id]}</a><br>
						{/section}
					</div>
					<h1>LINKI</h1>
					<div class="lista">
						{section name=id loop=$linki.tytul}
						<img src="img/strzalka.png" alt=""/><a href="{$linki.link[id]}">{$linki.tytul[id]}</a><br>
						{/section}
					</div>
			</aside>
			</section>
			<div class="clear"></div>
        </section>

{include file="footer.tpl"}
