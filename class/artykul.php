<?php
class artykul{
    public $wynik;
    public $db;
    public $limit;
     
    public function __construct($db,$page){
        $this->db = $db;
        $this->limit = 0;
        if(isset($_GET['limit'])){
            $this->limit = $_GET['limit'];
        }
        if($page == 'show'){
            $this->show_php();
        }
        elseif(!isset($_GET['id']) || empty($_GET['id']) || $_GET['id']==0){
        	$this->no_id();
        }
        else{
        	$this->yes_id();
        }
    }
     
    public function show_php(){
        $sql = $this->db->query('select * from artykuly where id = '.$_GET['id']);
        $this->get_from_db($sql,1);
    }
    
    public function no_id(){
        $sql = $this->db->query('select * from artykuly where stan = 0 ORDER BY id DESC LIMIT '.$this->limit.',10');
        $this->get_from_db($sql,0);
    }
    
    
    public function yes_id(){
        $sql = $this->db->query('select * from artykuly where idkategorii = '.$_GET['id'].' and stan = 0 ORDER BY id DESC LIMIT '.$this->limit.',10');
        $this->get_from_db($sql,0);
    }
    
    
    public function get_from_db($sql,$x){
        $i=0;
        while($sql2=$sql->fetch_assoc()){
            $this->wynik["tytul"][$i] = $sql2["tytul"];
            $this->wynik["id"][$i] = $sql2["id"];
            $this->wynik["czyedit"][$i] = $sql2["czyedit"];
            $this->wynik["dataedit"][$i] = date("d-m-Y",$sql2["dataedit"]);
            $this->wynik["link"][$i] = "#";
            $this->wynik["tresc"][$i] = stripslashes($sql2["tresc"]);  
            $this->wynik["wstep"][$i] = stripslashes($sql2["wstep"]);
            
            
            include_once 'geshi/geshi.php';

            $czyjest = preg_match_all('/gsh=([^>]*)=gshh/',$this->wynik["wstep"][$i],$gsh);
            if($czyjest){
                $l = 0;
                while(!empty($gsh[1][$l])){
                    $ll = $this->db->sl('tresc','kody','id',$gsh[1][$l]);
                    $ll2 = $this->db->sl('jezyk','kody','id',$gsh[1][$l]);
                    
					$ll = stripslashes($ll); 
					
$geshi['wstep'][$l] = new GeSHi($ll, $ll2);
//$geshi['wstep'][$l]-> set_header_type(GESHI_HEADER_DIV);
$bcolors = array('#f2e1e1','#f6eaf5','#ececff','#e6f3f2','#ebf4ed','#fafef4','#fffdec','#fff8ec','#efefee','#f0f0f0');
$colornr = rand(0, 9);
$geshi['wstep'][$l]->enable_line_numbers(GESHI_FANCY_LINE_NUMBERS, 5); // Numerowanie wierszy
$geshi['wstep'][$l]->set_overall_style('overflow: auto;font-size: 85%; color: #000066; border: 3px solid #d0d0d0; background-color: '.$bcolors[$colornr].';', true); // ogólne formatowanie (obramowanie i tło)
$geshi['wstep'][$l]->set_line_style('font: normal normal 95% \'Courier New\', Courier, monospace; color: #003030;', 'font: bold normal 95% \'Courier New\', Courier, monospace; color: #006060;', true);  // wygląd numerów wieszy

                    
                    
                    
                    
                    
                    
                    
                    //$geshi['wstep'][$l]->set_overall_style('font: normal normal 80% calibri; color: #636465; border: 1px solid #d0d0d0; background-color: '.$bcolors[$colornr].';', false);
  
                    $this->wynik["wstep"][$i] = str_replace($gsh[0][$l],$geshi['wstep'][$l]->parse_code(),$this->wynik["wstep"][$i]);
                    $l++;
                    
                }
            }
            $czyjest = preg_match_all('/gsh=([^>]*)=gshh/',$this->wynik["tresc"][$i],$gsh);
            if($czyjest){
                $l = 0;
                while(!empty($gsh[1][$l])){
                    $ll = $this->db->sl('tresc','kody','id',$gsh[1][$l]);
                    $ll2 = $this->db->sl('jezyk','kody','id',$gsh[1][$l]);
                    $ll = stripslashes($ll); 
                    
                    $geshi['tresc'][$l] = new GeSHi($ll, $ll2);
                    $geshi['tresc'][$l]->set_header_type(GESHI_HEADER_PRE_VALID);
                    $geshi['tresc'][$l]-> set_header_type(GESHI_HEADER_DIV);
                    $geshi['tresc'][$l]->enable_line_numbers(GESHI_FANCY_LINE_NUMBERS, 5); // Numerowanie wierszy
                    
                    $bcolors = array('#f2e1e1','#f6eaf5','#ececff','#e6f3f2','#ebf4ed','#fafef4','#fffdec','#fff8ec','#efefee','#f0f0f0');
                    $colornr = rand(0, 9);
                    $geshi['tresc'][$l]->set_overall_style('font: normal normal 80% calibri; color: #000066; border: 1px solid #d0d0d0; background-color: '.$bcolors[$colornr].';', false);
                      

                    $this->wynik["tresc"][$i] = str_replace($gsh[0][$l],$geshi['tresc'][$l]->parse_code(),$this->wynik["tresc"][$i]);
                    $l++;
                }
            }            
            $sql3 = $this->db->sl('imie, nazwisko, login','userzy','id',$sql2["idautora"]);
            $this->wynik["autor"][$i] = $sql3["imie"].' '.$sql3["nazwisko"];
            $this->wynik["data"][$i] = date("d-m-Y",$sql2["data"]);
            $sql4 = $this->db->query('select id from komentarze where idartykulu = '.$sql2["id"].'');
            if($x == 1){
                $this->wynik["aut_or_adm"][$i] = false;   
                if(($_SESSION['admin'] == true) || ($sql3["login"] == $_SESSION['login']))$this->wynik["aut_or_adm"][$i] = true;
                
            }
            $this->wynik["komenta"][$i] = $sql4->num_rows;
            $sql5 = $this->db->sl('nazwa','kategorie','id',$sql2["idkategorii"]);
            $this->wynik["kategoria"][$i] = $sql5;
        	$i++;
        } 
        
        
    }
    
}
?>