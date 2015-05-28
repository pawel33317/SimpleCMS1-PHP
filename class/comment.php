<?php 
class comment{
    public $wynik;
    public $db;
    
    public function __construct($db){
        $this->db = $db;    
        if(isset($_GET['id'])){
            if($_GET['id']>0){
                $this->update_wejscia();
                if(isset($_POST['tresc'])){//KOMENTARZ DODAJ
                    $this->add_comment();
                }
            }
        }
        $this->show_comment();
    }


    public function show_comment(){
        $sql = $this->db->query('select * from komentarze where idartykulu = '.$_GET['id']);
        $i=0;
        while($row=$sql->fetch_assoc()){
            $this->wynik["data"][$i]       = date("d-m-Y",$row["data"]);
            $this->wynik["autor"][$i]      = $row["autor"];
            $this->wynik["tresc"][$i]      = $row["tresc"];
            $i++;
        } 
    }
    
    
    public function update_wejscia(){
        $sql = $this->db->sl('wejscia','artykuly','id',$_GET['id']);
        $tmp = $sql + 1;
        $sql = $this->db->query('update artykuly set wejscia = "'.$tmp.'" where id = '.$_GET['id'].'');
    }
    
    
    public function add_comment(){
        if(isset($_COOKIE['block'])){
            global $alerty;
            $alerty = "Blokada - poczekaj kilka sekund";
        }
        else{
            if($_POST['tresc'] != ''){
                if(isset($_POST['nick'])){
                    $nick = 'anonim - '.addslashes(htmlspecialchars($_POST['nick']));
                }
                else{
                    $nick = $_SESSION['login'];
                }
                setcookie("block", "block", time()+45);
                $this->db->query('insert into komentarze (idartykulu, dobre, zle, tresc, stan, data, autor) values('.$_GET['id'].', 0, 0,
                                "'.htmlspecialchars($_POST['tresc']).'", 0, '.time().', "'.$nick.'")');
            }
        }   
    }
}
?>