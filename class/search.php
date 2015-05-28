<?php
class search{
    public $wynik;
    public $szukana;
    public $db;
    public $eszukana;
    public $i;
    
    public function __construct($db){
        $this->db = $db;
        if(isset($_POST['szukaj'])){
            $this->set_szukana();
            $this->set_wynik();
            $this->szuk1();
            $this->szuk2();
            $this->szuk3();        
            $this->szuk4();
            $this->szuk5();
        }
    }
        
    public function set_szukana(){
        $this->szukana = htmlspecialchars($_POST['szukaj']);
        $this->szukana = str_replace(".", " ", $this->szukana);
        $this->szukana = str_replace(",", " ", $this->szukana);
        $this->szukana = str_replace("-", " ", $this->szukana);
        $this->szukana = str_replace(":", " ", $this->szukana);
        $this->szukana = str_replace("\"", " ", $this->szukana);
        $this->szukana = str_replace("/", " ", $this->szukana);
        $this->szukana = str_replace(";", " ", $this->szukana);   
        
        $this->eszukana = explode(' ', $this->szukana);
    }
    
    public function set_wynik(){
        $this->wynik["tytul"][0]       = 'Wyszukane artykuły';
        $this->wynik["wstep"][0]       = '<br>';
    }
     
        

    public function szuk1(){
        $sql = $this->db->query('select artykuly.tytul, artykuly.id, kategorie.nazwa from artykuly JOIN kategorie ON artykuly.idkategorii = kategorie.id where tytul like "%'.$this->szukana.'%" and stan = 0'); 
        $this->i=1;
        while($row=$sql->fetch_assoc()){
            $this->wynik["wstep"][0] .= $this->i.' <a href="show.php?id='.$row["id"].'">'.$row['nazwa'].' &rArr; '.$row["tytul"].'</a><br>';
            $this->i++;
        }
        $sql = $this->db->query('select artykuly.tytul, artykuly.id, kategorie.nazwa from artykuly JOIN kategorie ON artykuly.idkategorii = kategorie.id where tresc like "%'.$this->szukana.'%" and stan = 0');  
        while($row=$sql->fetch_assoc()){
            $czyjuzjest = strpos($this->wynik["wstep"][0], 'show.php?id='.$row['id']);
            if(($czyjuzjest == false) && ($this->i<100)){
                $this->wynik["wstep"][0] .= $this->i.' <a href="show.php?id='.$row["id"].'">'.$row['nazwa'].' &rArr; '.$row["tytul"].'</a><br>';
                $this->i++;
            }
        } 
    }   
    
    
    public function szuk2(){
        $j=0;
        while($j<count($this->eszukana)){
            if(empty($szuk1)){
                $szuk1 = 'tytul like "%'.$this->eszukana[$j].'%"';
                $szuk11 = 'tresc like "%'.$this->eszukana[$j].'%"';
            }
            else{
                $szuk1  .= ' and tytul like "%'.$this->eszukana[$j].'%"';
                $szuk11 .= ' and tresc like "%'.$this->eszukana[$j].'%"';
            }
            $this->eszukana[$j] = substr($this->eszukana[$j], 0, strlen($this->eszukana[$j])-1); 
            $j++;
        }


        $sql = $this->db->query('select artykuly.tytul, artykuly.id, kategorie.nazwa from artykuly JOIN kategorie ON artykuly.idkategorii = kategorie.id where '.$szuk1.' and stan = 0'); 
        while($row=$sql->fetch_assoc()){
            $czyjuzjest = strpos($this->wynik["wstep"][0], 'show.php?id='.$row['id']);
            if(($czyjuzjest == false) && ($this->i<100)){
                $this->wynik["wstep"][0] .= $this->i.' <a href="show.php?id='.$row["id"].'">'.$row['nazwa'].' &rArr; '.$row["tytul"].'</a><br>';
                $this->i++;
            }
        }
        $sql = $this->db->query('select artykuly.tytul, artykuly.id, kategorie.nazwa from artykuly JOIN kategorie ON artykuly.idkategorii = kategorie.id where '.$szuk11.' and stan = 0'); 
        while($row=$sql->fetch_assoc()){
            $czyjuzjest = strpos($this->wynik["wstep"][0], 'show.php?id='.$row['id']);
            if(($czyjuzjest == false) && ($this->i<100)){
                $this->wynik["wstep"][0] .= $this->i.' <a href="show.php?id='.$row["id"].'">'.$row['nazwa'].' &rArr; '.$row["tytul"].'</a><br>';
                $this->i++;
            }
        }
    }
    
       
    public function szuk3(){
        if(count($this->eszukana)>1){
            $j=0;
            while($j<count($this->eszukana)){
                if(empty($t1)){
                    $t1 = 'kategorie.nazwa like "%'.$this->eszukana[$j].'%"';
                }
                else {
                    $t1.= ' or kategorie.nazwa like "%'.$this->eszukana[$j].'%"';
                }
                $k=0;
                while($k<count($this->eszukana)){
                    if($k!=$j){
                        if(empty($t2[$k])){
                            $t2[$k] = 'artykuly.tytul like "%'.$this->eszukana[$j].'%"';
                        }
                        else {
                            $t2[$k] .= ' and artykuly.tytul like "%'.$this->eszukana[$j].'%"';
                        }
                    }
                    $k++;
                }
                $j++;
            } 
            $j=0;
            while($j<count($t2)){    
                if(empty($t3)){
                    $t3 = '('.$t2[$j].')';
                }
                else{
                    $t3 .= ' or ('.$t2[$j].')';
                }
                $j++;
            }

            $sql = $this->db->query('SELECT kategorie.nazwa, artykuly.tytul, artykuly.id  FROM artykuly INNER JOIN kategorie ON artykuly.idkategorii = kategorie.id where ('.$t1.') and ('.$t3.') and stan = 0');  
            while($row=$sql->fetch_assoc()){
                $czyjuzjest = strpos($this->wynik["wstep"][0], 'show.php?id='.$row['id']);
                if(($czyjuzjest == false) && ($this->i<100)){
                    $this->wynik["wstep"][0] .= $this->i.' <a href="show.php?id='.$row["id"].'">'.$row['nazwa'].' &rArr; '.$row["tytul"].'</a><br>';
                    $this->i++;
                }
            }
            $sql = $this->db->query('SELECT kategorie.nazwa, artykuly.tytul, artykuly.id  FROM artykuly INNER JOIN kategorie ON artykuly.idkategorii = kategorie.id where ('.$t3.') and stan = 0');  
            while($row=$sql->fetch_assoc()){
                $czyjuzjest = strpos($this->wynik["wstep"][0], 'show.php?id='.$row['id']);
                if(($czyjuzjest == false) && ($this->i<100)){
                    $this->wynik["wstep"][0] .= $this->i.' <a href="show.php?id='.$row["id"].'">'.$row['nazwa'].' &rArr; '.$row["tytul"].'</a><br>';
                    $this->i++;
                }
            }  
        }   
    }
    
    
    public function szuk4(){
        if(count($this->eszukana)>1){
            $j=0;
            while($j<count($this->eszukana)){
                if(empty($t1)){
                    $t1 = 'kategorie.nazwa like "%'.$this->eszukana[$j].'%"';
                }
                else {
                    $t1.= ' or kategorie.nazwa like "%'.$this->eszukana[$j].'%"';
                }
                $k=0;
                while($k<count($this->eszukana)){
                    if($k!=$j){
                        if(empty($t2[$k])){
                            $t2[$k] = 'artykuly.wstep like "%'.$this->eszukana[$j].'%"';
                        }
                        else {
                            $t2[$k] .= ' and artykuly.tresc like "%'.$this->eszukana[$j].'%"';
                        }
                    }
                    $k++;
                }
                $j++;
            } 
            $j=0;
            while($j<count($t2)){    
                if(empty($t3)){
                    $t3 = '('.$t2[$j].')';
                }
                else{
                    $t3 .= ' or ('.$t2[$j].')';
                }
                $j++;
            }

            $sql = $this->db->query('SELECT kategorie.nazwa, artykuly.tytul, artykuly.id  FROM artykuly INNER JOIN kategorie ON artykuly.idkategorii = kategorie.id where ('.$t1.') and ('.$t3.') and stan = 0');  
            while($row=$sql->fetch_assoc()){
                $czyjuzjest = strpos($this->wynik["wstep"][0], 'show.php?id='.$row['id']);
                if(($czyjuzjest == false) && ($this->i<100)){
                    $this->wynik["wstep"][0] .= $this->i.' <a href="show.php?id='.$row["id"].'">'.$row['nazwa'].' &rArr; '.$row["tytul"].'</a><br>';
                    $this->i++;
                }
            }
            $sql = $this->db->query('SELECT kategorie.nazwa, artykuly.tytul, artykuly.id  FROM artykuly INNER JOIN kategorie ON artykuly.idkategorii = kategorie.id where ('.$t3.') and stan = 0');  
            while($row=$sql->fetch_assoc()){
                $czyjuzjest = strpos($this->wynik["wstep"][0], 'show.php?id='.$row['id']);
                if(($czyjuzjest == false) && ($this->i<100)){
                    $this->wynik["wstep"][0] .= $this->i.' <a href="show.php?id='.$row["id"].'">'.$row['nazwa'].' &rArr; '.$row["tytul"].'</a><br>';
                    $this->i++;
                }
            }  
        }   
    }	


    public function szuk5(){
        if(count($this->eszukana)>1){
            $j=0;
            while($j<count($this->eszukana)){
                $k=0;
                while($k<count($this->eszukana)){
                    if($k!=$j){
                        if(empty($t2[$k])){
                            $t2[$k] = 'tresc like "%'.$this->eszukana[$j].'%"';
                        }
                        else {
                            $t2[$k] .= ' and tresc like "%'.$this->eszukana[$j].'%"';
                        }
                    }
                    $k++;
                }
                $j++;
            } 
            $j=0;
            while($j<count($t2)){    
                if(empty($t3)){
                    $t3 = '('.$t2[$j].')';
                }
                else{
                    $t3 .= ' or ('.$t2[$j].')';
                }
                $j++;
            }
            $sql = $this->db->query('SELECT id FROM kody where ('.$t3.')');  
            while($row=$sql->fetch_assoc()){
                $sql2 = $this->db->query('SELECT kategorie.nazwa, artykuly.tytul, artykuly.id  FROM artykuly INNER JOIN kategorie 
                            ON artykuly.idkategorii = kategorie.id where wstep like "%gsh='.$row['id'].'=gshh%" or tresc like "%gsh='.$row['id'].'=gshh%" and stan = 0');
                
                while($row2=$sql2->fetch_assoc()){
                    $czyjuzjest = strpos($this->wynik["wstep"][0], 'show.php?id='.$row2['id']);
                    if(($czyjuzjest == false) && ($this->i<100)){
                        $this->wynik["wstep"][0] .= $this->i.' <a href="show.php?id='.$row2["id"].'">'.$row2['nazwa'].' &rArr; '.$row2["tytul"].'</a><br>';
                        $this->i++;     
                    }
                }
            }
        }   
        $this->wynik["wstep"][0] .= '<br>';
        $this->wynik["komenta"][0]     = $this->i-1;
    }	


    public function details(){
        return true;
    }
    
    
    public function gdzie(){
        $gdzie["tytul"][0] = htmlspecialchars($_POST['szukaj']);
        $gdzie["link"][0] = "#";
        return $gdzie;
    }
       
}

?>
