<?php 
class gdziejestem{
    public $wynik;
    public $db;
        
    public function __construct($db,$page){
        $this->db = $db;
        
        if($page == 'show' && isset($_GET['id'])){
           $all = $this->db->sl('idkategorii','artykuly','id',$_GET['id']);
           $this->jest($all);
        }
        elseif($page == 'index' && isset($_GET['id'])){
            $this->jest($_GET["id"]);
        }
        else{
            $this->nie_ma();
        }
    }
    
    
    public function nie_ma(){
        $this->wynik["tytul"][0] = "Strona Główna";
        $this->wynik["link"][0] = "index.php";
    }
    
    
    public function jest($kat){
        $sql = $this->db->query('select * from kategorie where id = '.$kat.'');
        $sql = $sql->fetch_assoc();
        $this->wynik["tytul"][0] = $sql['nazwa'];
        $this->wynik["link"][0] = $sql['link'];
        $this->wynik["id"][0] = $sql['id'];
        if ($sql['idnadrzednej'] !=0){
            $sql = $this->db->query('select * from kategorie where id = '.$sql['idnadrzednej'].'');
            $sql = $sql->fetch_assoc();
            $this->wynik["tytul"][1] = $this->wynik["tytul"][0];
            $this->wynik["link"][1] = $this->wynik["link"][0];
            $this->wynik["tytul"][0] = $sql['nazwa'];
            $this->wynik["link"][0] = $sql['link'];
            $this->wynik["id"][1] = $sql['id'];
        }
    }
    
    public function get_first(){
        return $this->wynik["tytul"][0];
    }
    
    public function get_second(){
        if(!empty($this->wynik["tytul"][1]))
            return $this->wynik["tytul"][1];
        else 
            return 'zxc';
        
    }   
}
?>