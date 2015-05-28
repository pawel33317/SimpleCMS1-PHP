<?php
class list_article{
    public $wynik;
    public $db;
    public $limit;
    
    
    public function __construct($db){
        $this->db = $db;
        $this->limit = 0;
        if(isset($_GET['limit'])){
            $this->limit = $_GET['limit'];
        }
        
        $sql = $this->db->sl('nazwa','kategorie','id',$_GET['id']);
        $this->wynik["tytul"][0]     = $sql.' - spis artykułów';
    	$this->wynik["wstep"][0] 	 = '';
        
        $sql2 = $this->db->query('select * from artykuly where idkategorii = '.$_GET['id'].' and stan = 0 limit '.$this->limit.',30');
        if($sql2->num_rows>0)$this->wynik["wstep"][0] 	 = '<br>';
        $this->wynik["komenta"][0]     = $sql2->num_rows;
        $i=$this->limit+1;
        while($row=$sql2->fetch_assoc()){
            $this->wynik["wstep"][0] .= $i.' <a href="show.php?id='.$row["id"].'">'.$row["tytul"].'</a><br>';
            $i++;
        }
    	if($sql2->num_rows>0)$this->wynik["wstep"][0] .= '<br>';
    }
    
    public function details(){
        return true;
    }
       
}
?>