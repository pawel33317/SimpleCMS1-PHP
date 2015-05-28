<?php 
class user_list{
    public $wynik;
    public $db;
    
        
    public function __construct($db) {
        if(!$_SESSION['admin']){
            echo '<center>Brak uprawnien :(';
            die();
        }
        $this->db = $db;
        
        
        $this->wynik["tytul"][0] = $sql.'Spis userów';
        $this->wynik["wstep"][0] = '<br>';
        
        $sql = $this->db->query('select * from userzy limit 0, 100');
        $i=1;
        while($row = $sql->fetch_assoc()){
            $this->wynik["wstep"][0] .= $i.' <a href="usermanagment.php?id='.$row["id"].'">'.$row["id"].' - '.$row["login"].' - '.$row["mail"].' - '.$row["imie"].' '.$row["nazwisko"].'</a><br>';
            $i++;
        }
        $this->wynik["komenta"][0] = $sql->num_rows;
        $this->wynik["wstep"][0] .= '<br>';
        


    	
        
        
        
        
        
    }

    
    
    
    public function details(){
        return true;
    }
}
?>