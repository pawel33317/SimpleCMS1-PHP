<?php 
class stats{
    public $wynik;
    public $db;
    
        
    public function __construct($db) {
        if(!$_SESSION['admin']){
            echo '<center>Brak uprawnien :(';
            die();
        }
        $this->db = $db;
        
        $this->wynik["tytul"][0] = $sql.'Statystyki';
        $this->wynik["wstep"][0] = '<br>';
        
        $sql = $this->db->query('select wartosc from licznik where nazwa = "glowny"');
        $sql = $sql->fetch_assoc();
        $this->wynik["wstep"][0] .= 'Ilość odwiedzin strony: '.$sql['wartosc'].'<br><br>';
  
        $sql = $this->db->query('select id from artykuly');
        //$sql = $sql->fetch_assoc();
        $this->wynik["wstep"][0] .= 'Ilość artykułów: '.$sql->num_rows.'<br><br>';
        
        $sql = $this->db->query('select id from komentarze');
        //$sql = $sql->fetch_assoc();
        $this->wynik["wstep"][0] .= 'Ilość komentarzy: '.$sql->num_rows.'<br><br>';
        
        $sql = $this->db->query('select id from userzy');
        //$sql = $sql->fetch_assoc();
        $this->wynik["wstep"][0] .= 'Ilość userów: '.$sql->num_rows.'<br><br>';
        
        $sql = $this->db->query('select id from artykuly where stan !=0');
        //$sql = $sql->fetch_assoc();
        $this->wynik["wstep"][0] .= 'Ilość artykułów nie zaakceptowanych: '.$sql->num_rows.'<br><br>';
        
        $sql = $this->db->query('select id from artykuly');
        //$sql = $sql->fetch_assoc();
        $this->wynik["wstep"][0] .= 'Ilość artykułów: '.$sql->num_rows.'<br><br>';
        
        $sql = $this->db->query('select id, tytul from artykuly order by wejscia desc limit 0,1');
        $sql = $sql->fetch_assoc();
        $this->wynik["wstep"][0] .= 'Najpopulatniejszy artykuł: <a href="show.php?id='.$sql['id'].'">'.$sql['tytul'].'</a><br><br>';  
        
        $sql = $this->db->query('select wynik.idartykulu, artykuly.tytul
                            from(SELECT idartykulu, COUNT(idartykulu) AS suma FROM komentarze GROUP BY idartykulu ORDER BY idartykulu) as wynik 
                            join artykuly on wynik.idartykulu = artykuly.id
                            order by suma desc limit 0,1');
        $sql = $sql->fetch_assoc();
        $this->wynik["wstep"][0] .= 'Artykuł o największej liczbie komentarzy: <a href="show.php?id='.$sql['idartykulu'].'">'.$sql['tytul'].'</a><br><br>';  
        
        $sql = $this->db->query('select id from kody');
        //$sql = $sql->fetch_assoc();
        $this->wynik["wstep"][0] .= 'Ilość kodów: '.$sql->num_rows.'<br><br>';       
        
    }

    
    
    
    public function details(){
        return true;
    }
}
?>