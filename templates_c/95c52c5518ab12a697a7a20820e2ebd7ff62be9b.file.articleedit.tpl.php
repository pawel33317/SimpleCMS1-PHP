<?php /* Smarty version Smarty-3.1.14, created on 2013-08-20 22:53:01
         compiled from ".\templates\articleedit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5567520c01ecc16d25-92397662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95c52c5518ab12a697a7a20820e2ebd7ff62be9b' => 
    array (
      0 => '.\\templates\\articleedit.tpl',
      1 => 1377039179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5567520c01ecc16d25-92397662',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_520c01eccde2d0_31647816',
  'variables' => 
  array (
    'getid' => 0,
    'edytowany' => 0,
    'kategoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520c01eccde2d0_31647816')) {function content_520c01eccde2d0_31647816($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="clear"></div>
        <section id="main">
        	<section id="article">

<form action="articleedit.php?id=<?php echo $_smarty_tpl->tpl_vars['getid']->value;?>
" method="post">
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
							<textarea class="ckeditor" name="tresc"><?php echo $_smarty_tpl->tpl_vars['edytowany']->value['tresc'];?>
</textarea>			
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
							<textarea class="ckeditor" name="wstep"><?php echo $_smarty_tpl->tpl_vars['edytowany']->value['wstep'];?>
</textarea>	
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
							<input type="text" name="tytul" value="<?php echo $_smarty_tpl->tpl_vars['edytowany']->value['tytul'];?>
" onblur="if(this.value.length == 0) this.value='Tytuł';" onclick="if(this.value == 'Tytuł') this.value='';" class="logincom" /><br>
							<br>Pozycja: <br>
							<input type="text" name="pozycja" value="<?php echo $_smarty_tpl->tpl_vars['edytowany']->value['idtop'];?>
" onblur="if(this.value.length == 0) this.value='0';" onclick="if(this.value == '0') this.value='';" class="logincom" /><br>
							<br>Stan: <br>
							<input type="text" name="stan" value="<?php echo $_smarty_tpl->tpl_vars['edytowany']->value['stan'];?>
" onblur="if(this.value.length == 0) this.value='0';" onclick="if(this.value == '0') this.value='';" class="logincom" /><br>
							<br>Kategoria: <br>
							<select name="kategoria" class="logincom2">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['name'] = 'kategoria';
$_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['kategoria']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['kategoria']['total']);
?>
								<option><?php echo $_smarty_tpl->tpl_vars['kategoria']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kategoria']['index']];?>
</option>
								<?php endfor; endif; ?>
							</select><br><br>
							<button tabindex="2" type="submit" id="logbut">OK</button>
		                </div>
		            </section>
					<div class="clear"></div>
		        </article>

</form>


		    </section>
<?php echo $_smarty_tpl->getSubTemplate ("aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>