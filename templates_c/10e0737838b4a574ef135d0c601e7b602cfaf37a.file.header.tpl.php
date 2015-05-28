<?php /* Smarty version Smarty-3.1.14, created on 2014-01-03 22:30:07
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181935202a2062266b3-65891773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1388788205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181935202a2062266b3-65891773',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5202a206230c17_11082143',
  'variables' => 
  array (
    'tytulStrony' => 0,
    'favi' => 0,
    'alert' => 0,
    'page' => 0,
    'logo' => 0,
    'login' => 0,
    'menu' => 0,
    'menui' => 0,
    'logojs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5202a206230c17_11082143')) {function content_5202a206230c17_11082143($_smarty_tpl) {?><!DOCTYPE html>
    <head>
        <meta charset="utf-8" /> 
        <link rel="stylesheet" href="img/style.css" />
        <title><?php echo $_smarty_tpl->tpl_vars['tytulStrony']->value;?>
</title>
        <link rel="Shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favi']->value;?>
" />
		
        <script src="js/topmenu.js"></script>
		<script src="js/jQuery.js"></script>
		<script src="js/ckeditor/ckeditor.js"></script>
		<script src="js/jquery.cookie.js"></script>

        <script>  
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
        
        
        
		<?php if ($_smarty_tpl->tpl_vars['alert']->value!=false){?>
		<script>
			alert("<?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
");
		</script>
		<?php }?>
        
        
        
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
    
        
        <?php if ($_smarty_tpl->tpl_vars['page']->value=='index'){?>
        <script>
            var lmm = 0;//samozmienny
            var finis;
            var iddd = <?php if ($_GET['id']>0){?><?php echo $_GET['id'];?>
<?php }else{ ?>0<?php }?>;
            $(document).ready(function(){
               jQuery('section#article').append('<input type="submit" onclick="axxx()" id="dodajwiecej" value="WIĘCEJ" />'); 
            });
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
            }
            function addmore(){
                if(finis != ''){
                    $('section#article').append(' <input type="submit" id="dodajwiecej" onclick="axxx()" value="WIĘCEJ" />');
                }
            }  
        </script> 
        <?php }?>


        <?php if ($_smarty_tpl->tpl_vars['page']->value=='list'){?>
        <script>
            var lmm = 0;//samozmienny
            var finis;
            var iddd = <?php if ($_GET['id']>0){?><?php echo $_GET['id'];?>
<?php }else{ ?>0<?php }?>;
            $(document).ready(function(){
               jQuery('div.tresc').append('<input type="submit" onclick="axxx()" id="dodajwiecej" value="WIĘCEJ" />'); 
            });
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
            }
            function addmore(){
                if((finis != '\n') && (finis != '')){
                    $('div.tresc').append('<input type="submit" id="dodajwiecej" onclick="axxx()" value="WIĘCEJ" />');
                }
            }  
        </script> 
        <?php }?>


    </head>
    <body>
    <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	!!!!!!!!!!GÓRA NORMALNA!!!!!!!!!!!!
    !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
    <section id="normain">
		<header class="normmain">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['logo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['logo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['name'] = 'logo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['logo']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['logo']['total']);
?>
			<a href="index.php"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logo']['index']];?>
" alt=""/></a>
			<?php endfor; endif; ?>
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
				<?php if ($_smarty_tpl->tpl_vars['login']->value['czy']==false){?>
				<a class="nm" href="javascript:void(0);" onclick="logowanie();">Logowanie</a><br>
				<a class="nm" href="register.php">Rejestracja</a>
				<?php }?><?php if ($_smarty_tpl->tpl_vars['login']->value['czy']==true){?>
				<a class="nm" href="">Zalogowany:</a><br>
				<a href="index.php?out=1"><img src="img/wyloguj.png" onmouseover="document.images.logout.src='img/wyloguj2.png'" onmouseout="document.images.logout.src='img/wyloguj.png'" id="logout" alt=""></a>
				<a href="" id="zalogowany"><?php echo $_smarty_tpl->tpl_vars['login']->value['nick'];?>
</a>
				<?php }?>
			</div>
		</section>
		<div class="clear"></div>
		<nav class="normmain">
		    <ul id="normnav">
		    	<?php  $_smarty_tpl->tpl_vars['menui'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menui']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menui']->key => $_smarty_tpl->tpl_vars['menui']->value){
$_smarty_tpl->tpl_vars['menui']->_loop = true;
?>
				<li><a <?php if ($_smarty_tpl->tpl_vars['menui']->value['sub']==true){?>class="hsubs"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['menui']->value['link'];?>
"><?php if ($_smarty_tpl->tpl_vars['menui']->value['act']==true){?><strong><?php }?><?php echo $_smarty_tpl->tpl_vars['menui']->value['title'];?>
<?php if ($_smarty_tpl->tpl_vars['menui']->value['act']==true){?></strong><?php }?></a>
					<?php if ($_smarty_tpl->tpl_vars['menui']->value['sub']==true){?>
					<ul class="subsn">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['name'] = 'smenu';
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menui']->value['submenu']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['total']);
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['menui']->value['sublink'][$_smarty_tpl->getVariable('smarty')->value['section']['smenu']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['menui']->value['submenu'][$_smarty_tpl->getVariable('smarty')->value['section']['smenu']['index']];?>
</a></li>
						<?php endfor; endif; ?>
					</ul>
					<?php }?>
				</li>
				<?php } ?>
			</ul>
		</nav>
	</section>
    <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	!!!!!!!!!!!!!!GÓRA JAVA!!!!!!!!!!!!
    !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->    
    <header id="top">
        <section id="logo">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['logojs'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['name'] = 'logojs';
$_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['logojs']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['logojs']['total']);
?>
			<a href="index.php"><img src="<?php echo $_smarty_tpl->tpl_vars['logojs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['logojs']['index']];?>
" alt=""/></a>
			<?php endfor; endif; ?>
        </section>
        <nav class="main">
	    	<ul id="nav">
	    		<?php  $_smarty_tpl->tpl_vars['menui'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menui']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menui']->key => $_smarty_tpl->tpl_vars['menui']->value){
$_smarty_tpl->tpl_vars['menui']->_loop = true;
?>
				<li><a <?php if ($_smarty_tpl->tpl_vars['menui']->value['sub']==true){?>class="hsubs"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['menui']->value['link'];?>
"><?php if ($_smarty_tpl->tpl_vars['menui']->value['act']==true){?><strong><?php }?><?php echo $_smarty_tpl->tpl_vars['menui']->value['title'];?>
<?php if ($_smarty_tpl->tpl_vars['menui']->value['act']==true){?></strong><?php }?></a>
					<?php if ($_smarty_tpl->tpl_vars['menui']->value['sub']==true){?>
					<ul class="subs">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['name'] = 'smenu';
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menui']->value['submenu']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['total']);
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['menui']->value['sublink'][$_smarty_tpl->getVariable('smarty')->value['section']['smenu']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['menui']->value['submenu'][$_smarty_tpl->getVariable('smarty')->value['section']['smenu']['index']];?>
</a></li>
						<?php endfor; endif; ?>
					</ul>
					<?php }?>
				</li>
				<?php } ?>
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
    </header><?php }} ?>