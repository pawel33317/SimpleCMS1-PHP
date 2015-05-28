<!DOCTYPE html>
    <head>
        <meta charset="utf-8" /> 
        <link rel="stylesheet" href="img/style.css" />
        <title>{$tytulStrony}</title>
        <link rel="Shortcut icon" href="{$favi}" />
		
        <script src="js/topmenu.js"></script>
		<script src="js/jQuery.js"></script>
		<script src="js/ckeditor/ckeditor.js"></script>
		<script src="js/jquery.cookie.js"></script>

        <script>{literal}  
            function themeblue(){
                $.cookie('them', 'blue', { expires: 77 }); 
                $("body").css("background","#0769ad");
                $("a.nm").first().css("color","#ffffff");
                $("a.nm").first().css("text-shadow","0px 0px 2px #000000");
                $("a.nm").last().css("color","#000000");
                $("a.nm").last().css("text-shadow","1px 1px 5px #ffffff");

                $("#zalogowany").css("color","#ffffff");
                $("#zalogowany").css("text-shadow","0px 0px 5px #000000");
                $("img[src='img/logon2.png']").attr('src','img/logow.png');
            }
            function delthemeblue(){ 
                $("img[src='img/logow.png']").attr('src','img/logon2.png');
                $.removeCookie('them');
                $("body").css("background","#efefef repeat-y url(\"img/bg2.png\") center");
                $("a.nm").css("color","#620e0e");
                $("a.nm").css("text-shadow","0px 0px 1px #000000");
                $("#zalogowany").css("color","#c61500");
                $("#zalogowany").css("text-shadow","1px 1px 1px #000000");
                $("header.normmain > img").last().attr("src","/img/logon2.png");
            }       
            $(document).ready(function(){
               if($.cookie('them') == "blue"){
                    themeblue();
               }
            })     
            {/literal}
        </script>
        
        
        <script>
			function logowanie(){
				$("div#logr").slideUp("normal");
                $("div#close").slideDown("normal");
			}
			function closee(){
				$("div#close").slideUp("normal");
                $("div#logr").slideDown("normal");
			}
		</script>
        
        
        
		{if $alert != false}
		<script>
			alert("{$alert}");
		</script>
		{/if}
        
        
        
        <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/pl_PL/all.js#xfbml=1&appId=328363980633287";
              fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
        
        
        
        <script>
            (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
            })();
        </script>
    
        
        {if $page == 'index'}
        <script>
            var lmm = 0;//samozmienny
            var finis;
            var iddd = {if $smarty.get.id > 0}{$smarty.get.id}{else}0{/if};
            $(document).ready(function(){
               jQuery('section#article').append('<input type="submit" onclick="axxx()" id="dodajwiecej" value="WIĘCEJ" />'); 
            });{literal}
            function axxx(){
                $('input#dodajwiecej').remove();
                lmm=lmm+10;
                $.ajax({
                    type     : "GET",
                    url      : "ajaxindex.php",
                    data     : {limit : lmm, id : iddd},
                    success : function(msg) {
                        finis = msg;
                        $('section#article').append(msg);   
                        return false;
                    },complete : function(r) {addmore();},error:    function(error) {}
                });     
            }{/literal}
            function addmore(){
                if(finis != ''){
                    $('section#article').append(' <input type="submit" id="dodajwiecej" onclick="axxx()" value="WIĘCEJ" />');
                }
            }  
        </script> 
        {/if}


        {if $page == 'list'}
        <script>
            var lmm = 0;//samozmienny
            var finis;
            var iddd = {if $smarty.get.id > 0}{$smarty.get.id}{else}0{/if};
            $(document).ready(function(){
               jQuery('div.tresc').append('<input type="submit" onclick="axxx()" id="dodajwiecej" value="WIĘCEJ" />'); 
            });{literal}
            function axxx(){
                $('input#dodajwiecej').remove();
                $('div.tresc > br').last().remove(); 
                $('div.tresc > br').last().remove(); 
                lmm=lmm+30;
                $.ajax({
                    type     : "GET",
                    url      : "ajaxlist.php",
                    data     : {limit : lmm, id : iddd},
                    success : function(msg) {
                        finis = msg;
                        $('div.tresc').append(msg);   
                        return false;
                    },complete : function(r) {addmore();},error:    function(error) {}
                });     
            }{/literal}
            function addmore(){
                if((finis != '\n') && (finis != '')){
                    $('div.tresc').append('<input type="submit" id="dodajwiecej" onclick="axxx()" value="WIĘCEJ" />');
                }
            }  
        </script> 
        {/if}


    </head>
    <body>
    <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	!!!!!!!!!!GÓRA NORMALNA!!!!!!!!!!!!
    !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
    <section id="normain">
		<header class="normmain">
			{section name=logo loop=$logo}
			<a href="index.php"><img src="{$logo[logo]}" alt=""/></a>
			{/section}
			<div id="szuk">
				<form action="search.php" method="post" class="searchform">
					<input type="text" name="szukaj" value="Szukaj..." onblur="if(this.value.length == 0) this.value='Szukaj...';" onclick="if(this.value == 'Szukaj...') this.value='';" id="search-text" class="search" autofocus/>
					<button id="search-button" tabindex="2" type="submit" class="search-btn">Szukaj</button>
				</form>
			</div>
		</header>
		<section class="normmain" id="nmp">
			<div id="mail"><a href="mailto:pawel33317@gmail.com" onmouseover="document.images.maill.src='img/mail2.png'" onmouseout="document.images.maill.src='img/mail.png'"><img src="img/mail.png" alt="" id="maill" /></a></div>
			<div id="close">
				<form action="index.php" method="POST" id="logform">
					<a href="javascript:void(0);" onclick="closee();">x</a>
					<input type="text" name="login" value="Login" onblur="if(this.value.length == 0) this.value='Login';" onclick="if(this.value == 'Login') this.value='';" class="loginp" /><br>
					<button tabindex="2" type="submit" id="logbut">OK</button>
					<input type="password" name="haslo" value="haslo" onblur="if(this.value.length == 0) this.value='haslo';" onclick="if(this.value == 'haslo') this.value='';" class="loginp" />
				</form>
			</div>		
			<div id="logr">
				{if $login.czy == false}
				<a class="nm" href="javascript:void(0);" onclick="logowanie();">Logowanie</a><br>
				<a class="nm" href="register.php">Rejestracja</a>
				{/if}{if $login.czy == true}
				<a class="nm" href="">Zalogowany:</a><br>
				<a href="index.php?out=1"><img src="img/wyloguj.png" onmouseover="document.images.logout.src='img/wyloguj2.png'" onmouseout="document.images.logout.src='img/wyloguj.png'" id="logout" alt=""></a>
				<a href="" id="zalogowany">{$login.nick}</a>
				{/if}
			</div>
		</section>
		<div class="clear"></div>
		<nav class="normmain">
		    <ul id="normnav">
		    	{foreach item=menui  from=$menu }
				<li><a {if $menui.sub == true}class="hsubs"{/if} href="{$menui.link}">{if $menui.act == true}<strong>{/if}{$menui.title}{if $menui.act == true}</strong>{/if}</a>
					{if $menui.sub == true}
					<ul class="subsn">
						{section name=smenu loop=$menui.submenu}
						<li><a href="{$menui.sublink[smenu]}">{$menui.submenu[smenu]}</a></li>
						{/section}
					</ul>
					{/if}
				</li>
				{/foreach}
			</ul>
		</nav>
	</section>
    <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	!!!!!!!!!!!!!!GÓRA JAVA!!!!!!!!!!!!
    !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->    
    <header id="top">
        <section id="logo">
			{section name=logojs loop=$logojs}
			<a href="index.php"><img src="{$logojs[logojs]}" alt=""/></a>
			{/section}
        </section>
        <nav class="main">
	    	<ul id="nav">
	    		{foreach item=menui  from=$menu }
				<li><a {if $menui.sub == true}class="hsubs"{/if} href="{$menui.link}">{if $menui.act == true}<strong>{/if}{$menui.title}{if $menui.act == true}</strong>{/if}</a>
					{if $menui.sub == true}
					<ul class="subs">
						{section name=smenu loop=$menui.submenu}
						<li><a href="{$menui.sublink[smenu]}">{$menui.submenu[smenu]}</a></li>
						{/section}
					</ul>
					{/if}
				</li>
				{/foreach}
			</ul>
        </nav>
        <div id="share">
			<div id="szuk2">
				<form action="search.php" method="post" class="searchform2">
					<button id="search-button2" tabindex="2" type="submit" class="search-btn2">Szukaj</button>
					<input type="text" name="szukaj" value="Szukaj..." onblur="if(this.value.length == 0) this.value='Szukaj...';" onclick="if(this.value == 'Szukaj...') this.value='';" id="search-text2" class="search2" />
				</form>
			</div>
        </div>
    </header>