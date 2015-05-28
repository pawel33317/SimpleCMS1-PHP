<?php /* Smarty version Smarty-3.1.14, created on 2013-08-22 16:08:52
         compiled from ".\templates\ajaxtresc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9122521636f56c05d9-75159545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c2994d30f918e173c57915ee4b989cfd165663c' => 
    array (
      0 => '.\\templates\\ajaxtresc.tpl',
      1 => 1377187729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9122521636f56c05d9-75159545',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_521636f5712a21_30554524',
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521636f5712a21_30554524')) {function content_521636f5712a21_30554524($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']);
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
<?php echo $_smarty_tpl->tpl_vars['article']->value['wstep'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>

<?php endfor; endif; ?><?php }} ?>