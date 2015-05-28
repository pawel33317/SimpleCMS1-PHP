<?php
class menu{ 
    public $wynik;
    
    
    public function __construct($db, $por1, $por2){
        $all = $db->query('select * from kategorie where idnadrzednej = 0 and showw = 1');
        error_reporting(0);
        $i=0;
        while($row=$all->fetch_assoc()){
            
            $this->wynik[$i]["act"] = false;
            if((!isset($_GET['id'])) && ($i==0)){
                $this->wynik[$i]["act"] = true;
            }
            if(($por2 == $row["nazwa"]) || ($por1 == $row["nazwa"])){
                $this->wynik[$i]["act"] = true;
            }
            
            $this->wynik[$i]["title"] = $row["nazwa"];
            $this->wynik[$i]["link"] = $row["link"];
            $this->wynik[$i]["sub"] = false;
            $spr = $db->query('select id from kategorie where idnadrzednej = '.$row["id"].'');
            if ($spr->num_rows>0){
                $this->wynik[$i]["sub"] = 1;
                $j=0;
                $alll = $db->query('select * from kategorie where idnadrzednej = '.$row["id"].'');
                while($rows=$alll->fetch_assoc()){
                    $this->wynik[$i]["submenu"][$j] = $rows["nazwa"];
                    $this->wynik[$i]["sublink"][$j] = $rows["link"];
                    $j++;
                }
            }
            $i++;
        } 
    }
}

class footerln{
    public $wynik;
    
    public function __construct($db){
        $sql = $db->query('select * from kategorie where showw = 1 and idnadrzednej = 0 ORDER BY id ASC LIMIT 10');
        $i=0;
        while ($row = $sql->fetch_assoc()) {
            $this->wynik["tytul"][$i]     = $row["nazwa"];
            $this->wynik["link"][$i]      = $row["link"];
            $i++; 
        }
    }
    
}

class articlesort{
    public $wynik;
    
    public function __construct($db, $order, $sc, $limit){
        $sql = $db->query('select tytul, id from artykuly where stan = 0 ORDER BY '.$order.' '.$sc.' LIMIT '.$limit.'');
        $i=0;
        while ($row = $sql->fetch_assoc()) {
            $tmp = substr($row["tytul"],0,26);
            if (strlen($row["tytul"])>25){
                $tmp.='...';
            }
            $this->wynik["tytul"][$i]     = $tmp;
            $this->wynik["link"][$i]      = 'show.php?id='.$row["id"];
            $i++;
        }
    }
    
    
}

class linki{
	public $wynik;
	
	public function __construct(){
	   $this->wynik = array("tytul"	=>	array("Kurs JavaScript", "Sublime edytor", "CKEditor JS", "Geshi", "Kurs Smarty", "Kurs Java YT", "InternetMap"),
                            "link"	=>	array("http://www.doman.art.pl/kursjs/", "http://www.sublimetext.com/", "http://ckeditor.com/", "http://qbnz.com/highlighter/", 
                                    "http://funkcje.net/view/4/7/41/", "http://www.youtube.com/user/CoraxTheTutor/videos?view=1", "http://internet-map.net/", "#", "#", "#", "#"));	
	}
}

class kategorie{
    public $wynik;
    
    public function __construct($db){
        $sql = $db->query('select * from kategorie where showw = 1 and idnadrzednej > 0 ORDER BY id ASC LIMIT 10');
        $i=0;
        while($row=$sql->fetch_assoc()){
            $this->wynik["tytul"][$i]     = $row["nazwa"];
            $this->wynik["link"][$i]      = $row["link"];
            $i++;
        }
    }
}

class logo{
    public $logo;
    public $logojs;
    
    public function __construct() {
        $this->logo = array("img/logon1.png", "img/logon2.png");//logow.png
        $this->logojs = array("img/logo.png", "img/logot.png");
    }

}
?>