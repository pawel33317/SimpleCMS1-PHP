 <?php 
 include 'config.php';
 
	mysql_connect($config['host'],$config['user'],$config['pass']);
	@mysql_select_db($config['dbname']);

	$zapytanie = mysql_query('create table artykuly (
		id 			int unsigned not null auto_increment primary key,
		idtop 		int unsigned,
		idautora 	int unsigned,
		stan 	 	int,
		idkategorii	int,
		tytul		varchar(100),
		wstep		text,
		tresc		text,
		wejscia 	int unsigned not null ,
		czyedit 	int unsigned not null ,
		dataedit 	int,
		data 	 	int
		)');
		if($zapytanie)echo 'OK artykuly<br>';else echo 'NO artykuly<br>';

	$zapytanie = mysql_query('create table kody (
		id 			int unsigned not null auto_increment primary key,
		tresc		text,
        jezyk		text
		)');
		if($zapytanie)echo 'OK artykuly<br>';else echo 'NO artykuly<br>';

	$zapytanie = mysql_query('create table userzy (
		id 			int unsigned not null auto_increment primary key,
		ranga 		int,
		login		varchar(100),
		mail		varchar(100),
		haslo		varchar(64),
		imie		varchar(100),
		nazwisko	varchar(100),
		dataur 		int,
		plec 		int,
		datareg 	int,
		datalast  	int,
		opis 		text
		)');
		if($zapytanie)echo 'OK userzy<br>';else echo 'NO userzy<br>';

	$zapytanie = mysql_query('create table komentarze (
		id 			int unsigned not null auto_increment primary key,
		autor		text,
		idartykulu 	int,
		dobre 	int,
		zle 		int,
		tresc		text,		
		stan 		int,
		data  	int
		)');
		if($zapytanie)echo 'OK komentarze<br>';else echo 'NO komentarze<br>';

	$zapytanie = mysql_query('create table linki (
		id 			int unsigned not null auto_increment primary key,
		idkategorii	int,
		link		text,
		tytul		varchar(100),
		idtop	 	int,
		data 	  	int
		)');
		if($zapytanie)echo 'OK linki<br>';else echo 'NO linki<br>';

	$zapytanie = mysql_query('create table inne (
		id 			int unsigned not null auto_increment primary key,
		nazwa	  	varchar(100),
		tresc		text
		)');
		if($zapytanie)echo 'OK inne<br>';else echo 'NO inne<br>';

	$zapytanie = mysql_query('create table licznik (
		id 			int unsigned not null auto_increment primary key,
		wartosc	 	int,
		nazwa		varchar(100)
		)');
		if($zapytanie)echo 'OK licznik<br>';else echo 'NO licznik<br>';

	$zapytanie = mysql_query("INSERT INTO `kody` (`id`, `tresc`, `jezyk`) VALUES (1, '<? php\r\necho ''czesc'';\r\nexit();\r\n?>', 'php');")	;if($zapytanie)echo 'OK nowenowenowenowenowev<br>';else echo 'NO nowenowenowenowenowe<br>';
		
	$zapytanie = mysql_query('create table kategorie (
		id 			int unsigned not null auto_increment primary key,
		idtop	  	int,
		showw	  	int,
		idnadrzednej 	int,
		nazwa		varchar(100),
		link		text
		)');
		if($zapytanie)echo 'OK kategorie<br>';else echo 'NO kategorie<br>';


		$a1 = 'Artykul przykł‚adowy';
		$a2 = '<p><img alt="" src="upload/1.jpg" style="float:left; height:204px; opacity:0.9; width:204px" /><strong>W Nowy Rok nad ranem w ziemska atmosferą wpada‚a planetoida 2014 AA. Na szcza›cie w większości spaliła się w niej i do powierzchni planety doleciały tylko niewielkie fragmenty.&nbsp;</strong><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:arial,helvetica,droid sans,sans-serif; font-size:14px">2014 AA została zaobserwowana przez Richarda Kowalskiego, amerykańskiego astronoma amatora, na zaledwie kilka godzin przed zderzeniem obiektu z Ziemią. Z początkowych wyliczeń wynika żo, e asteroida powinna min naszą planetę w dzin przed zderzeniem obiektu z Ziemią. Z początkowych wyliczeń wynika żo, e asteroida powindzin przed zderzeniem obiektu z Ziemią. Z początkowych wyliczeń wynika żo, e asteroida powindzin przed zderzeniem obiektu z Ziemią. Z początkowych wyliczeń wynika żo, e asteroida powindzin przed zderzeniem obiektu z Ziemią. Z początkowych wyliczeń wynika żo, e asteroida powin&nbsp;</span></p>\r\n\r\n<p><span style="color:rgb(80, 80, 80); font-family:arial; font-size:15px">gsh=1=gshh</span></p>\r\n';



	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,8, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 352, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 1<br>';else echo 'NO insert artykuly 1<br>';

	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,8, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 336, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 2<br>';else echo 'NO insert artykuly 2<br>';

	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,9, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 152, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 3<br>';else echo 'NO insert artykuly 3<br>';
	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,9, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 352, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 1<br>';else echo 'NO insert artykuly 1<br>';

	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,11, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 336, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 2<br>';else echo 'NO insert artykuly 2<br>';

	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,11, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 152, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 3<br>';else echo 'NO insert artykuly 3<br>';
	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,12, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 352, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 1<br>';else echo 'NO insert artykuly 1<br>';

	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,12, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 336, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 2<br>';else echo 'NO insert artykuly 2<br>';

	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,13, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 152, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 3<br>';else echo 'NO insert artykuly 3<br>';
	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,13, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 352, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 1<br>';else echo 'NO insert artykuly 1<br>';

	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,14, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 336, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 2<br>';else echo 'NO insert artykuly 2<br>';

	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,15, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 152, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 3<br>';else echo 'NO insert artykuly 3<br>';
	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,16, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 352, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 1<br>';else echo 'NO insert artykuly 1<br>';

	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,17, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 336, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 2<br>';else echo 'NO insert artykuly 2<br>';

	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,18, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 152, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 3<br>';else echo 'NO insert artykuly 3<br>';
	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,16, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 352, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 1<br>';else echo 'NO insert artykuly 1<br>';

	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,14, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 336, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 2<br>';else echo 'NO insert artykuly 2<br>';

	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,15, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 152, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 3<br>';else echo 'NO insert artykuly 3<br>';
	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,17, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 352, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 1<br>';else echo 'NO insert artykuly 1<br>';

	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,18, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 336, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 2<br>';else echo 'NO insert artykuly 2<br>';

	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,19, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 152, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 3<br>';else echo 'NO insert artykuly 3<br>';
	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,19, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 352, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 1<br>';else echo 'NO insert artykuly 1<br>';

	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,20, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 336, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 2<br>';else echo 'NO insert artykuly 2<br>';

	$zapytanie = mysql_query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
													0,1,0,20, "'.addslashes($a1).'", "'.addslashes($a2).'", "'.addslashes($a2).'", 152, 0, '.time().')');
				if($zapytanie)echo 'OK insert artykuly 3<br>';else echo 'NO insert artykuly 3<br>';

























	$zapytanie = mysql_query('insert into userzy (ranga, login, mail, haslo, imie, nazwisko, dataur, plec, datareg, datalast) values(
													10, "admin", "admin@example.com", "'.md5("admin").'", "admin", "admin", '.strtotime("1991-06-04 17:54:32").', 0, '.time().', '.time().')');
				if($zapytanie)echo 'OK insert userzy<br>';else echo 'NO insert userzy<br>';



	$zapytanie = mysql_query('insert into komentarze (idartykulu, dobre, zle, tresc, stan, data, idautora) values(
													27, 11, 2, "allah akabar", 0, '.time().', "admin")');
				if($zapytanie)echo 'OK insert komentarze<br>';else echo 'NO insert komentarze<br>';



	$zapytanie = mysql_query('insert into kategorie (idtop, showw, idnadrzednej, nazwa, link) values(0, 1, 0, "Aktualności", "index.php")');			if($zapytanie)echo 'OK insert kategorie<br>';else echo 'NO insert kategorie<br>';
	$zapytanie = mysql_query('insert into kategorie (idtop, showw, idnadrzednej, nazwa, link) values(0, 1, 0, "WWW", "#")');					if($zapytanie)echo 'OK insert kategorie<br>';else echo 'NO insert kategorie<br>';
	$zapytanie = mysql_query('insert into kategorie (idtop, showw, idnadrzednej, nazwa, link) values(0, 1, 0, "Programowanie", "#")');				if($zapytanie)echo 'OK insert kategorie<br>';else echo 'NO insert kategorie<br>';
	$zapytanie = mysql_query('insert into kategorie (idtop, showw, idnadrzednej, nazwa, link) values(0, 1, 0, "Sieci", "#")');					if($zapytanie)echo 'OK insert kategorie<br>';else echo 'NO insert kategorie<br>';
	$zapytanie = mysql_query('insert into kategorie (idtop, showw, idnadrzednej, nazwa, link) values(0, 1, 0, "Pliki", "#")');					if($zapytanie)echo 'OK insert kategorie<br>';else echo 'NO insert kategorie<br>';
	$zapytanie = mysql_query('insert into kategorie (idtop, showw, idnadrzednej, nazwa, link) values(0, 1, 0, "Przydatne strony", "index.php?id=6")');	if($zapytanie)echo 'OK insert kategorie<br>';else echo 'NO insert kategorie<br>';
	$zapytanie = mysql_query('insert into kategorie (idtop, showw, idnadrzednej, nazwa, link) values(0, 1, 0, "Info", "index.php?id=7")');			if($zapytanie)echo 'OK insert kategorie<br>';else echo 'NO insert kategorie<br>';
	$zapytanie = mysql_query('insert into kategorie (idtop, showw, idnadrzednej, nazwa, link) values(0, 1, 2, "HTML, CSS3", "list.php?id=8")');		if($zapytanie)echo 'OK insert kategorie<br>';else echo 'NO insert kategorie<br>';
	$zapytanie = mysql_query('insert into kategorie (idtop, showw, idnadrzednej, nazwa, link) values(0, 1, 2, "PHP", "list.php?id=9")');			if($zapytanie)echo 'OK insert kategorie<br>';else echo 'NO insert kategorie<br>';
	$zapytanie = mysql_query('insert into kategorie (idtop, showw, idnadrzednej, nazwa, link) values(0, 1, 2, "MySQL", "list.php?id=16")');			if($zapytanie)echo 'OK insert kategorie<br>';else echo 'NO insert kategorie<br>';
	$zapytanie = mysql_query('insert into kategorie (idtop, showw, idnadrzednej, nazwa, link) values(0, 1, 2, "JavaScript", "list.php?id=11")');		if($zapytanie)echo 'OK insert kategorie<br>';else echo 'NO insert kategorie<br>';
	$zapytanie = mysql_query('insert into kategorie (idtop, showw, idnadrzednej, nazwa, link) values(0, 1, 2, "XML", "list.php?id=12")');			if($zapytanie)echo 'OK insert kategorie<br>';else echo 'NO insert kategorie<br>';
	$zapytanie = mysql_query('insert into kategorie (idtop, showw, idnadrzednej, nazwa, link) values(0, 1, 3, "Java", "list.php?id=13")');			if($zapytanie)echo 'OK insert kategorie<br>';else echo 'NO insert kategorie<br>';
	$zapytanie = mysql_query('insert into kategorie (idtop, showw, idnadrzednej, nazwa, link) values(0, 1, 3, "Python", "list.php?id=14")');			if($zapytanie)echo 'OK insert kategorie<br>';else echo 'NO insert kategorie<br>';
	$zapytanie = mysql_query('insert into kategorie (idtop, showw, idnadrzednej, nazwa, link) values(0, 1, 3, "C, C++", "list.php?id=15")');			if($zapytanie)echo 'OK insert kategorie<br>';else echo 'NO insert kategorie<br>';
	$zapytanie = mysql_query('insert into kategorie (idtop, showw, idnadrzednej, nazwa, link) values(0, 1, 3, "MySQL", "list.php?id=16")');			if($zapytanie)echo 'OK insert kategorie<br>';else echo 'NO insert kategorie<br>';
	$zapytanie = mysql_query('insert into kategorie (idtop, showw, idnadrzednej, nazwa, link) values(0, 0, 4, "Windows", "index.php?id=17")');		if($zapytanie)echo 'OK insert kategorie<br>';else echo 'NO insert kategorie<br>';
	$zapytanie = mysql_query('insert into kategorie (idtop, showw, idnadrzednej, nazwa, link) values(0, 0, 4, "Linux", "index.php?id=18")');			if($zapytanie)echo 'OK insert kategorie<br>';else echo 'NO insert kategorie<br>';
	$zapytanie = mysql_query('insert into kategorie (idtop, showw, idnadrzednej, nazwa, link) values(0, 0, 5, "Haks - pliki", "index.php?id=19")');		if($zapytanie)echo 'OK insert kategorie<br>';else echo 'NO insert kategorie<br>';
	$zapytanie = mysql_query('insert into kategorie (idtop, showw, idnadrzednej, nazwa, link) values(0, 0, 5, "Linki", "index.php?id=20")');			if($zapytanie)echo 'OK insert kategorie<br>';else echo 'NO insert kategorie<br>';

	$zapytanie = mysql_query('insert into inne (nazwa, tresc) values("footer", "Copyright © <strong>2013</strong>. Created by <strong>Paweł Czubak</strong>.<br>Valid <strong>HTML 5</strong> and <strong>CSS 3</strong>.")');
			if($zapytanie)echo 'OK insert inne<br>';else echo 'NO insert inne<br>';
	$zapytanie = mysql_query('insert into inne (nazwa, tresc) values("tytulStrony", "haks.pl - programowanie: php, sql, java, js, smarty, jquery, ajax, python, c, c++, html, xml, css")');
			if($zapytanie)echo 'OK insert inne<br>';else echo 'NO insert inne<br>';
	$zapytanie = mysql_query('insert into inne (nazwa, tresc) values("favi", "img/favi.png")');
			if($zapytanie)echo 'OK insert inne<br>';else echo 'NO insert inne<br>';


	$zapytanie = mysql_query('insert into licznik (nazwa, wartosc) values("glowny", 11)');if($zapytanie)echo 'OK insert licznik<br>';else echo 'NO insert licznik<br>';
    $zapytanie = mysql_query('insert into licznik (nazwa, wartosc) values("upload", 1)');if($zapytanie)echo 'OK insert licznik<br>';else echo 'NO insert licznik<br>';

	//$zapytanie = mysql_query('insert into linki (idkategorii, link, tytul, idtop, data) values()');if($zapytanie)echo 'OK insert linki<br>';else echo 'NO insert linki<br>';
	
	mysql_close();
?>