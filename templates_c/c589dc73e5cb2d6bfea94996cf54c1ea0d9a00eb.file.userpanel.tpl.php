<?php /* Smarty version Smarty-3.1.14, created on 2013-08-16 22:17:52
         compiled from ".\templates\userpanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1920520e960760f228-66246159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c589dc73e5cb2d6bfea94996cf54c1ea0d9a00eb' => 
    array (
      0 => '.\\templates\\userpanel.tpl',
      1 => 1376691469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1920520e960760f228-66246159',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_520e960766ddb6_04880037',
  'variables' => 
  array (
    'edytowany' => 0,
    'dzien' => 0,
    'miesiac' => 0,
    'rok' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520e960766ddb6_04880037')) {function content_520e960766ddb6_04880037($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="clear"></div>
        <section id="main">
        	<section id="article">


		        <article>
		            <header class="article">
						<div class="articleheader2">
			            	<div class="ahead1">
								<img src="img/tytad.png" alt=""/>
							</div>
							<h1><a href="">Twoje dane</a></h1>
						</div>
		            </header>
		            <section class="article-content">
    <div>
	<form action="userpanel.php" method="POST" id="logform">
		<br>Login: <br>
		<input type="text" name="erlogin" class="logincom" value="<?php echo $_smarty_tpl->tpl_vars['edytowany']->value['login'];?>
" /><br>
		<br>Hasło: <br>
		<input type="password" name="erhaslo" value="Hasło" onblur="if(this.value.length == 0) this.value='Hasło';" onclick="if(this.value == 'Hasło') this.value='';" class="logincom" /><br>
		<br>Powtórz hasło: <br>
		<input type="password" name="erphaslo" value="Hasłoo" onblur="if(this.value.length == 0) this.value='Hasło';" onclick="if(this.value == 'Hasło') this.value='';" class="logincom" /><br>
		<br>E-mail: <br>
		<input type="text" name="ermail" value="<?php echo $_smarty_tpl->tpl_vars['edytowany']->value['mail'];?>
" class="logincom" /><br>
		<br>Imię: <br>
		<input type="text" name="erimie" value="<?php echo $_smarty_tpl->tpl_vars['edytowany']->value['imie'];?>
" class="logincom" /><br>
		<br>Nazwisko: <br>
		<input type="text" name="ernazwisko" value="<?php echo $_smarty_tpl->tpl_vars['edytowany']->value['nazwisko'];?>
" class="logincom" /><br>
		<br>Data urodzenia:<br>
		<select name="erdzien" class="logincom2">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dzien'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['name'] = 'dzien';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dzien']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dzien']['total']);
?>
			<option><?php echo $_smarty_tpl->tpl_vars['dzien']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dzien']['index']];?>
</option>
			<?php endfor; endif; ?>
		</select>
		<select name="ermiesiac" class="logincom2">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['name'] = 'miesiac';
$_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['miesiac']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['miesiac']['total']);
?>
			<option><?php echo $_smarty_tpl->tpl_vars['miesiac']->value[$_smarty_tpl->getVariable('smarty')->value['section']['miesiac']['index']];?>
</option>
			<?php endfor; endif; ?>
		</select>
		<select name="errok" class="logincom2">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rok'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rok']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['name'] = 'rok';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rok']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rok']['total']);
?>
			<option><?php echo $_smarty_tpl->tpl_vars['rok']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rok']['index']];?>
</option>
			<?php endfor; endif; ?>
		</select><br>
		<br>Płeć:<br>
			<input type="radio" name="erplec" value="men" <?php if ($_smarty_tpl->tpl_vars['edytowany']->value['plec']==1){?>checked<?php }?>/>Mężczyzna
			<input type="radio" name="erplec" value="women"  <?php if ($_smarty_tpl->tpl_vars['edytowany']->value['plec']==0){?>checked<?php }?> />Kobieta<br>
		<br>Opis:<br>
		<textarea name="ertresc"  id="comta"  ><?php echo $_smarty_tpl->tpl_vars['edytowany']->value['opis'];?>
</textarea><br>
		<button tabindex="2" type="submit" id="logbut">OK</button>
    </form>
    </div>
		            </section>
					<div class="clear"></div>
		        </article>




		    </section>
<?php echo $_smarty_tpl->getSubTemplate ("aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>