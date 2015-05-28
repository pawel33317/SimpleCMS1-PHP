<?php 
class categorymanagment{
    public $wynik;
    public $db;
    
        
    public function __construct($db) {
        if(!$_SESSION['admin']){
            echo '<center>Brak uprawnien :(';
            die();
        }



        $this->db = $db;
        $this->wynik["wstep"][0] = '<br>';
        
        
        if(isset($_POST['add'])){
            $this->add();
            $this->show();
        }
        elseif(isset($_GET['del'])){
            $this->del();
            $this->show();
        }
        elseif(isset($_POST['change'])){
            $this->change();
            $this->show();
        }
        else{
            $this->show();
        }
        $this->wynik["tytul"][0] = $sql.'Edytuj aktualne';
        // 
        //$this->wynik["komenta"][$i] = $sql4->num_rows;     
    }


    public function show (){
        $this->wynik['wstep'][0] .= '<form action="categorymanagment.php" method="post" id="logform">'; 
        
        $sql = $this->db->query('select * from kategorie');
        while($row = $sql->fetch_assoc()){
           $this->wynik['wstep'][0] .=  'Nazwa: <input type="text" name="nm'.$row['id'].'" value="'.$row['nazwa'].'" class="logincom2" /> <strong>Id: '.$row['id'].'</strong>
                                          &uArr; Id nadrzędnej: <input type="text" name="in'.$row['id'].'" value="'.$row['idnadrzednej'].'" class="logincom22" /> 
                                         Link: <input type="text" name="ln'.$row['id'].'" value="'.$row['link'].'" class="logincom2" />
                                         Czy widać w menu: <input type="text" name="sh'.$row['id'].'" value="'.$row['showw'].'" class="logincom22" />
                                         <a href="categorymanagment.php?del='.$row['id'].'">USUŃ</a>
                                         <br>';
        }         
        $this->wynik['wstep'][0] .= '<button tabindex="2" type="submit" name="change" id="logbut">OK</button>
                </form>'; 
                
                
                
        $this->wynik['tytul'][1] = 'Dodaj nową';
        $this->wynik['wstep'][1] = '<form action="categorymanagment.php" method="post" id="logform">
                                         Nazwa: <input type="text" name="anazwa" value="" class="logincom2" />
                                         Id nadrzędnej: <input type="text" name="aidnadrzednej" value="" class="logincom22" /> 
                                         Czy widać w menu: <input type="text" name="ashoww" value="" class="logincom22" /> 
                                         Link: <input type="text" name="alink" value="" class="logincom2" />
                                         <button tabindex="2" type="submit" name="add" id="logbut">OK</button>
                </form>';          
    }
    


    public function add(){
        $sql = $this->db->query('insert into kategorie (nazwa,link,idnadrzednej,showw) values ("'.$_POST['anazwa'].'","'.$_POST['alink'].'",'.$_POST['aidnadrzednej'].','.$_POST['ashoww'].')');
    }
    
    
    public function del(){
        $sql = $this->db->query('delete from kategorie where id='.$_GET['del'].'');
    }
    
    
    public function change(){
        $sql = $this->db->query('select * from kategorie');
        
        while($row = $sql->fetch_assoc()){
                $this->db->query('update kategorie set nazwa="'.$_POST['nm'.$row['id']].'", link="'.$_POST['ln'.$row['id']].'", 
                                idnadrzednej='.$_POST['in'.$row['id']].', showw='.$_POST['sh'.$row['id']].' where id = '.$row['id']);
        }
    }
    
    
    public function details(){
        return true;
    }
}
?>