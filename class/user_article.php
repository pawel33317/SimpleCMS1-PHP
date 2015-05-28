<?php
class user_article{
    public $wynik;
    public $db;
     
    public function __construct($db){
        $this->db = $db;
        
        $this->wynik["tytul"][0] = $_SESSION['login'].' - spis artykułów';
        $this->wynik["wstep"][0] = '<br>';

        $sql = $this->db->sl('id','userzy','login',$_SESSION['login']);
        $sql2 = $this->db->query('select * from artykuly where idautora = '.$sql);
        $i=1;
        while($row=$sql2->fetch_assoc()){
            $this->wynik["wstep"][0] .= $i.' <a href="show.php?id='.$row["id"].'">'.$row["tytul"].'</a><a style="font-size:10px;" href="articleedit.php?id='.$row["id"].'"> edytuj</a><br>';
            $i++;
        }
        $this->wynik["wstep"][0] .= '<br>';    
        $this->wynik["komenta"][0] = $sql2->num_rows;
    }
    
    
    public function gdzie(){
        $gdzie["tytul"][0] = "Twoje artykuły";
        $gdzie["link"][0] = "userarticle.php";
        return $gdzie;
    }
       
}
?>