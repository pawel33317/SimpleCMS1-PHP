<?php 
include 'libs/Smarty.class.php';
include 'class/config.php';
include 'class/database.php';
include 'class/list_article.php';
$db = new Database($config['host'], $config['user'], $config['pass'], $config['dbname']);
$smarty = new Smarty();
$list_article = new list_article($db);
//ARTYKUŁ
$smarty->assign("article",$list_article->wynik);
$smarty->assign("comenta",false);
$smarty->assign("page",'list');
//Szczegóły
$smarty->assign("details",$list_article->details());
//Wyświetlanie
$smarty->display('ajaxtresc.tpl');
?>