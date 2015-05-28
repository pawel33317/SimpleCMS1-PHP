<?php /* Smarty version Smarty-3.1.14, created on 2013-08-22 15:55:41
         compiled from ".\templates\ajaxindex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2204052156ef0226506-03003826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dea1433b4c7271133a97af75a9584d0e177399d' => 
    array (
      0 => '.\\templates\\ajaxindex.tpl',
      1 => 1377186893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2204052156ef0226506-03003826',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52156ef02714b7_75412143',
  'variables' => 
  array (
    'article' => 0,
    'comenta' => 0,
    'details' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52156ef02714b7_75412143')) {function content_52156ef02714b7_75412143($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']);
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
				<?php if ($_smarty_tpl->tpl_vars['comenta']->value==false){?><div class="comment"><?php echo $_smarty_tpl->tpl_vars['article']->value['komenta'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</div><?php }?>
        	</section>
        	<div class="ahead1">
				<img src="img/tytad.png" alt=""/>
			</div>
			<h1><a href="<?php if ($_smarty_tpl->tpl_vars['details']->value==false){?>show.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['article']->value['tytul'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</a></h1>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['details']->value==false){?>
		<div class="articleheader3">
			KATEGORIA: <a class="cat" href=""><?php echo $_smarty_tpl->tpl_vars['article']->value['kategoria'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</a> | DATA: <?php echo $_smarty_tpl->tpl_vars['article']->value['data'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
 | 
			<?php if ($_smarty_tpl->tpl_vars['article']->value['czyedit'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']]!=0){?>EDYTOWANO: <?php echo $_smarty_tpl->tpl_vars['article']->value['dataedit'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
 |<?php }?>AUTOR: <a class="log" href=""><?php echo $_smarty_tpl->tpl_vars['article']->value['autor'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</a>
		</div>
		<?php }?>
    </header>
    <section class="article-content">
        <div class="tresc"><?php echo $_smarty_tpl->tpl_vars['article']->value['wstep'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
<?php if ($_smarty_tpl->tpl_vars['details']->value==false){?><a href="show.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
">więcej...</a><?php }?></div>
    </section>
	<div class="clear"></div>
</article>
<?php endfor; endif; ?>
<?php }} ?>