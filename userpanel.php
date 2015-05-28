<?php 
$alerty;

include 'libs/Smarty.class.php';
include 'class/config.php';
include 'class/database.php';
include 'class/sesja.php';
include 'class/menus.php';
include 'class/gdzie.php';
include 'class/user_panel.php';

$db = new Database($config['host'], $config['user'], $config['pass'], $config['dbname']);
$smarty = new Smarty();
$user = new sesja($db);
$menu = new menu($db,'zxc','zxc');
$footr = new footerln($db);
$najnowsze = new articlesort($db,'id', 'desc', 12);
$linki = new linki();
$kategorie = new kategorie($db);
$najpopularniejsze = new articlesort($db,'wejscia', 'desc', 12);
$user_panel = new user_panel($db);
$logo = new logo();

//opcje admina
$smarty->assign("admin", $_SESSION['admin']);
//Komentarzy ilość
$smarty->assign("comenta",true);
//ARTYKUŁ
$smarty->assign("article",$user_panel->wynik);
//LOGIN
$smarty->assign("login",$user->smarty_assign_and_data_last());      //czy zalogowany
//META
$smarty->assign("tytulStrony",$db->sl('tresc','inne','nazwa','tytulStrony'));
$smarty->assign("favi",$db->sl('tresc','inne','nazwa','favi'));
//LOGO
$smarty->assign("logo",$logo->logo);
$smarty->assign("logojs",$logo->logojs);
//MENU
$smarty->assign("menu",$menu->wynik);
//FOOTER
$smarty->assign("footer",$db->sl('tresc','inne','nazwa','footer'));
//FOOTER LINKI
$smarty->assign("footerlnk",$footr->wynik);
//Szczegóły
$smarty->assign("details",$user_panel->details());
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
//Szczegóły
$smarty->assign("idedit",$_GET['id']);
//ALERTY
$smarty->assign("alert",$alerty);
//WYŚWIETLENIE
$smarty->display('index.tpl');
?>