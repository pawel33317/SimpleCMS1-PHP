<?php 
class article_edit{
    public $db;
    
    public function __construct($db){
        $this->db = $db;
    	if(isset($_POST["tresc"])){
            $sql = $this->db->sl('id','kategorie', 'nazwa', $_POST['kategoria']);
            
            $sql3 = $this->db->sl('idautora','artykuly','id',$_GET['id']);
            $sql4 = $this->db->sl('login','userzy','id',$sql3);
            
            if(($sql4 != $_SESSION['login']) && ($_SESSION['admin']!= true)){
                echo "Brak uprawnien";
                die();
            }
            
    		$sql2 = $this->db->query('update artykuly set 
                                        idtop='.$_POST['pozycja'].', 
                                        stan='.$_POST['stan'].',
                                        idkategorii='.$sql.',
                                        tytul= "'.addslashes($_POST['tytul']).'",
                                        wstep="'.addslashes($_POST['wstep']).'",
                                        tresc= "'.addslashes($_POST['tresc']).'",
                                        czyedit=1,
                                        dataedit='.time().' where id = '.$_GET['id'].'');
                                        
                                        
                                        
                                    
                                        
                                        
            if(!$sql2){
                global $alerty;
                $alerty = 'NO insert artykuly';
            }
    	}
    }


    public function category(){
        $i=0;
        $sql = $this->db->query('select nazwa from kategorie where idnadrzednej > 0');
        while($row=$sql->fetch_assoc()){
        	$kategoria[$i] = $row['nazwa']; 
        	$i++;
        }
        $sql = $this->db->query('select nazwa from kategorie where idnadrzednej = 0 && link != "#"');
        while($row=mysql_fetch_array($all)){
        	$kategoria[$i] = $row['nazwa']; 
        	$i++;
        }
        return $kategoria;
    }
    
    
    public function to_edit(){
        if(!empty($_GET['id'])){
            $sql = $this->db->query('select * from artykuly where id = '.$_GET['id']);
            $sql = $sql->fetch_assoc();
			$sql['tresc']=stripslashes($sql['tresc']);
			$sql['wstep']=stripslashes($sql['wstep']);
            return $sql;
        }
    }
}
?>