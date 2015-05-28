<?php 
$alerty;

include 'libs/Smarty.class.php';
include 'class/config.php';
include 'class/database.php';
include 'class/sesja.php';
include 'class/menus.php';
include 'class/list_article.php';
include 'class/gdzie.php';

$db = new Database($config['host'], $config['user'], $config['pass'], $config['dbname']);
$smarty = new Smarty();
$user = new sesja($db);
$gdzie = new gdziejestem($db,'index');
$menu = new menu($db,$gdzie->get_first(),$gdzie->get_second());
$footr = new footerln($db);
$najnowsze = new articlesort($db,'id', 'desc', 12);
$linki = new linki();
$kategorie = new kategorie($db);
$najpopularniejsze = new articlesort($db,'wejscia', 'desc', 12);
$list_article = new list_article($db);
$logo = new logo();
$smarty->assign("page",'list');
//opcje admina
$smarty->assign("admin", $_SESSION['admin']);
//LOGIN
$smarty->assign("login",$user->smarty_assign_and_data_last());      //czy zalogowany
//META
$smarty->assign("tytulStrony",$db->sl('tresc','inne','nazwa','tytulStrony'));
$smarty->assign("favi",$db->sl('tresc','inne','nazwa','favi'));
//LOGO
$smarty->assign("logo",$logo->logo);
$smarty->assign("logojs",$logo->logojs);
//GDZIEJESTEM
$smarty->assign("gdzie",$gdzie->wynik);
//MENU
$smarty->assign("menu",$menu->wynik);
//ARTYKUŁ
$smarty->assign("article",$list_article->wynik);
//FOOTER
$smarty->assign("footer",$db->sl('tresc','inne','nazwa','footer'));
//FOOTER LINKI
$smarty->assign("footerlnk",$footr->wynik);
//LICZNIK
$smarty->assign("licznikglowny",$db->sl('wartosc','licznik','nazwa','glowny'));
//NAJNOWSZE
$smarty->assign("najnowsze",$najnowsze->wynik);
//NAJPOPULARNIEJSZE
$smarty->assign("najpopularniejsze",$najpopularniejsze->wynik);
//LINKI
$smarty->assign("linki",$linki->wynik);
//KATEGORIE
$smarty->assign("kategorie",$kategorie->wynik);
//ALERTY
$smarty->assign("alert",$alerty);
//Szczegóły
$smarty->assign("details",$list_article->details());
//Wyświetlanie
$smarty->display('index.tpl');
?>