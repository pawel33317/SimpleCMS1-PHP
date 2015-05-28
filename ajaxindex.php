<?php 
include 'libs/Smarty.class.php';
include 'class/config.php';
include 'class/database.php';
include 'class/artykul.php';
$db = new Database($config['host'], $config['user'], $config['pass'], $config['dbname']);
$smarty = new Smarty();
$artykul = new artykul($db,'index');
//ARTYKUŁ
$smarty->assign("article",$artykul->wynik);
$smarty->assign("comenta",false);
$smarty->assign("details",false);
$smarty->assign("page",'index');
//WYŚWIETLENIE
$smarty->display('ajaxindex.tpl');
?>