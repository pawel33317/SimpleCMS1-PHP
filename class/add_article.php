<?php
class add_article{
    public $db;
     
    public function __construct($db){
        $this->db = $db;
       	if(isset($_POST["tresc"])){
            $sql = $this->db->sl('id','userzy','login',$_SESSION['login']);
            $sql2 = $this->db->sl('id','kategorie','nazwa',$_POST['kategoria']);
            $sql3 = $this->db->query('insert into artykuly (idtop, idautora, stan, idkategorii, tytul, wstep, tresc, wejscia, czyedit, data) values(
        							'.$_POST['pozycja'].','.$sql.',1,'.$sql2.', "'.addslashes($_POST['tytul']).'", "'.addslashes($_POST['wstep']).'",
        							 "'.addslashes($_POST['tresc']).'", 1, 0, '.time().')');
            if(!$sql3){
                global $alerty;
                $alerty = 'NO insert artykuly';
            }
       	}
    }
    
    
    public function category(){
        $i=0;
        $sql = $this->db->query('select nazwa from kategorie where idnadrzednej > 0 ');
        while($row=$sql->fetch_assoc()){
        	$kategorie[$i] = $row['nazwa']; 
        	$i++;
        }
        $sql = $this->db->query('select nazwa from kategorie where idnadrzednej = 0 && link != "#"');
        while($row=$sql->fetch_assoc()){
        	$kategorie[$i] = $row['nazwa']; 
        	$i++;
        }
        return $kategorie;
    }
       
}
?>