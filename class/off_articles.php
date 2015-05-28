<?php
class off_articles {
    public $wynik;
    public $db;
     
    public function __construct($db){
        if(!$_SESSION['admin']){
            echo '<center>Brak uprawnien :(';
            die();
        }
        $this->db = $db;

        if(isset($_GET['what'])){
            if($_GET['what'] == 1){
               $this->akceptuj(); 
            }
            elseif($_GET['what'] == 2){
                $this->usun();
            }
        }
        else{
            $this->show();
        }
    }
    
    
    public function usun(){
        $this->db->query('delete from artykuly where id = '.$_GET['id'].'');
        $this->show();
    }
    
    
    public function akceptuj(){
        $this->db->query('update artykuly set stan=0 where id = '.$_GET['id']);
        $this->show();
    }
    
    
    public function show(){
        $sql = $this->db->sl('nazwa','kategorie','id',$_GET['id']);
        $this->wynik["tytul"][0]     = 'Artykuły nie zaakceprowane';
    	$this->wynik["wstep"][0] 	 = '<br>';

        $sql2 = $this->db->query('select * from artykuly where stan = 1');
        $this->wynik["komenta"][0]     = $sql2->num_rows;
        $i=1;
        while($row=$sql2->fetch_assoc()){
            $this->wynik["wstep"][0] .= $i.' <a href="show.php?id='.$row["id"].'">'.$row["tytul"].'</a>
                                        <a href="offarticles.php?what=1&id='.$row['id'].'">Akceptuj</a>
                                        <a href="offarticles.php?what=2&id='.$row['id'].'">Usuń</a>
                                        <a href="articleedit.php?id='.$row['id'].'">Edytuj</a><br>';
            $i++;
        }
    	$this->wynik["wstep"][0] .= '<br>'; 
    }
    
    
    public function details(){
        return true;
    }
       
}
?>