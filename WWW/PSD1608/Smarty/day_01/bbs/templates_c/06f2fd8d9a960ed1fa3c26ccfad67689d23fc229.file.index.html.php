<?php /* Smarty version Smarty-3.1.16, created on 2016-10-10 11:58:42
         compiled from ".\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:402257faff90501bd3-20599104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06f2fd8d9a960ed1fa3c26ccfad67689d23fc229' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1476071913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '402257faff90501bd3-20599104',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57faff9053ec61_58014188',
  'variables' => 
  array (
    'uname' => 0,
    'age' => 0,
    'cityList' => 0,
    'userInfo' => 0,
    'i' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57faff9053ec61_58014188')) {function content_57faff9053ec61_58014188($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>网站首页</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  </head>
  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
<br><br>
    
    <?php echo $_smarty_tpl->tpl_vars['age']->value;?>
<br><br>
    
    <?php echo $_smarty_tpl->tpl_vars['cityList']->value[0];?>
<br><br>
    
    <?php echo $_smarty_tpl->tpl_vars['cityList']->value[1];?>
<br><br>
    
    <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['sex'];?>
<br><br>
    
    <?php echo $_smarty_tpl->tpl_vars['userInfo']->value["address"];?>
<br><br>
    
    <?php if ($_smarty_tpl->tpl_vars['age']->value<18) {?>
    未成年
    <?php } elseif ($_smarty_tpl->tpl_vars['age']->value==18) {?>
    刚成年
    <?php } else { ?>
    己成年
    <?php }?><br><br>
    
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (0) : 0-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
      hello<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
&nbsp;&nbsp;
    <?php }} ?><br><br>
    
    <?php while ($_smarty_tpl->tpl_vars['age']->value<25) {?>
      <?php echo $_smarty_tpl->tpl_vars['age']->value++;?>
哈哈&nbsp;&nbsp;
    <?php }?><br><br>
    
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["hello"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['name'] = "hello";
$_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cityList']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["hello"]['total']);
?>
      <?php echo $_smarty_tpl->tpl_vars['cityList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['hello']['index']];?>
<br>
    <?php endfor; endif; ?><br><br>
    
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cityList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
      <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
---<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<br>
    <?php } ?><br><br>
    
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
      <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
---<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<br>
    <?php } ?><br><br>
    
    
      {$userInfo.address}
    <br><br>
    
  </body>
</html>








<?php }} ?>
