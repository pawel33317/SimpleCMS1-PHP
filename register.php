<?php 
$alerty;

include 'libs/Smarty.class.php';
include 'class/config.php';
include 'class/database.php';
include 'class/sesja.php';
include 'class/menus.php';
include 'class/register.php';
include 'class/gdzie.php';

$db = new Database($config['host'], $config['user'], $config['pass'], $config['dbname']);
$smarty = new Smarty();
$user = new sesja($db);
$gdzie = new gdziejestem($db,'show');
$menu = new menu($db,$gdzie->get_first(),$gdzie->get_second());
$footr = new footerln($db);
$najnowsze = new articlesort($db,'id', 'desc', 12);
$linki = new linki();
$kategorie = new kategorie($db);
$najpopularniejsze = new articlesort($db,'wejscia', 'desc', 12);
$register = new register($db);
$logo = new logo();
//opcje admina
$smarty->assign("admin", $_SESSION['admin']);
//ARTYKUŁ
$smarty->assign("article",$register->wynik);
//Szczegóły
$smarty->assign("details",$register->details());
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
//DATA GENERACJA
$smarty->assign("dzien",$register->getday());
$smarty->assign("miesiac",$register->getmontch());
$smarty->assign("rok",$register->getyear());
//szczegóły
$smarty->assign("idedit",$_GET['id']);
//Wyświetlenie
$smarty->display('index.tpl');
?>