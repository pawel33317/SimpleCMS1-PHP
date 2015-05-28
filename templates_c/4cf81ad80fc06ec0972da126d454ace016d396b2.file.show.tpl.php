<?php /* Smarty version Smarty-3.1.14, created on 2013-08-21 21:58:18
         compiled from ".\templates\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198915206c801824733-81873582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cf81ad80fc06ec0972da126d454ace016d396b2' => 
    array (
      0 => '.\\templates\\show.tpl',
      1 => 1377122072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198915206c801824733-81873582',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5206c8018f76c9_29253757',
  'variables' => 
  array (
    'gdzie' => 0,
    'article' => 0,
    'articleheader3' => 0,
    'komentarze' => 0,
    'idedit' => 0,
    'login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5206c8018f76c9_29253757')) {function content_5206c8018f76c9_29253757($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="clear"></div>
        <section id="main">
        	<section id="article">
				<section id="adres">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['gdzie']->value['tytul']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['gdzie']->value['link'][$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['gdzie']->value['tytul'][$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['id']['last']){?> --> <?php }?>
					<?php endfor; endif; ?>
				</section>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['name'] = 'idarticle';
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['article']->value['tytul']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['total']);
?>
		        <article>
		            <header class="article">
						<div class="articleheader2">
	   						<section class="article">
	   							<div class="comment"><?php echo $_smarty_tpl->tpl_vars['article']->value['komenta'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</div>
			            	</section>
			            	<div class="ahead1">
								<img src="img/tytad.png" alt=""/>
							</div>
							<h1><a href="show.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['tytul'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</a></h1>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['articleheader3']->value==false){?>
						<div class="articleheader3">
							KATEGORIA: <a class="cat" href=""><?php echo $_smarty_tpl->tpl_vars['article']->value['kategoria'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</a> | DATA: <?php echo $_smarty_tpl->tpl_vars['article']->value['data'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
 | 
							<?php if ($_smarty_tpl->tpl_vars['article']->value['czyedit'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']]!=0){?>EDYTOWANO: <?php echo $_smarty_tpl->tpl_vars['article']->value['dataedit'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
 |<?php }?>AUTOR: <a class="log" href=""><?php echo $_smarty_tpl->tpl_vars['article']->value['autor'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</a>
                            <?php if ($_smarty_tpl->tpl_vars['article']->value['aut_or_adm'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']]==true){?> | <a class="log" href="articleedit.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
">edytuj</a><?php }?>
						</div>
						<?php }?>

		            </header>
		            <section class="article-content">
		                <div><?php echo $_smarty_tpl->tpl_vars['article']->value['tresc'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</div>
		            </section>
		            	<div class="udost">
							<div class="fb-like" data-href="http://haks.pl/index.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
" data-width="450" data-layout="button_count" data-show-faces="false" data-send="true"></div>
							<div class="g-plusone" data-size="medium"></div>
						</div>







					<h1><a>Komentarze</a></h1>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['name'] = 'idkomentarze';
$_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['komentarze']->value['tresc']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['idkomentarze']['total']);
?>
		            <section class="com-content">
		            	<div class="articleheader3">
							DATA: <?php echo $_smarty_tpl->tpl_vars['komentarze']->value['data'][$_smarty_tpl->getVariable('smarty')->value['section']['idkomentarze']['index']];?>
 | AUTOR: <a class="log" href=""><?php echo $_smarty_tpl->tpl_vars['komentarze']->value['autor'][$_smarty_tpl->getVariable('smarty')->value['section']['idkomentarze']['index']];?>
</a>
						</div>
		                <?php echo $_smarty_tpl->tpl_vars['komentarze']->value['tresc'][$_smarty_tpl->getVariable('smarty')->value['section']['idkomentarze']['index']];?>

		            </section>
		            <?php endfor; endif; ?>

					<section class="com-content2">
 						<h1><a>Dodaj nowy</a></h1>
						<form action="show.php?id=<?php echo $_smarty_tpl->tpl_vars['idedit']->value;?>
" method="POST" id="logform"><?php if ($_smarty_tpl->tpl_vars['login']->value['czy']==false){?>
							<input type="text" name="nick" value="Nick" onblur="if(this.value.length == 0) this.value='Nick';" onclick="if(this.value == 'Nick') this.value='';" class="logincom" /><br><?php }?>
							<textarea name="tresc"  id="comta"  onblur="if(this.value.length == 0) this.value='Wpisz treść...';" onclick="if(this.value == 'Wpisz treść...') this.value='';" >Wpisz treść...</textarea><br>
							<button tabindex="2" type="submit" id="logbut">Dodaj</button>
						</form>
					</section>




					<div class="clear"></div>
		        </article>
		    	<?php endfor; endif; ?>
		    </section>
<?php echo $_smarty_tpl->getSubTemplate ("aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>