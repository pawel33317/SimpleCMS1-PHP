<?php 
class user_managment{
    public $wynik;
    public $db;
    
    
    public function __construct($db) {
        if(!$_SESSION['admin']){
            echo '<center>Brak uprawnien :(';
            die();
        }
        $this->db = $db;
        $this->wynik["tytul"][0]     = $sql.'Zarządzanie userami';
    	$this->wynik["wstep"][0] 	 = '<br>';
        $this->wynik["komenta"][0]    = '';
        
        
        if(isset($_GET['id']) && isset($_POST['idx'])){
            $this->savechange($_GET['id']);
        }
        elseif(isset($_GET['id'])){
            $this->useredit($_GET['id']);
        }
        else{
            $this->writeid();
        }
        
        $this->wynik["wstep"][0] .= '<br>';
    }
    
    
    public function useredit($id){
        $sql = $this->db->query('select * from userzy where id = '.$id);
        if($sql->num_rows > 0){
            $a = 1;
        }
        else{
            $a = 0;
        }
        if ($a == 0){
            $sql = $this->db->query('select * from userzy where login = '.$id);
            if($sql->num_rows > 0){
                $a = 2;
            }
            else{
                global $alerty;
                $alerty = "nie ma takiego usera";
                $this->writeid();
            }
        }
        
        if ($a>0){
            $sql = $sql->fetch_assoc();
            $this->wynik['wstep'][0] .= '<form action="usermanagment.php?id='.$sql['id'].'" method="post" id="logform">
                Id<br>         <input type="text" name="idx" value="'.$sql['id'].'" class="logincom" /><br><br>
				Ranga<br>         <input type="text" name="rangax" value="'.$sql['ranga'].'" class="logincom" /><br><br>
                Login<br>         <input type="text" name="loginx" value="'.$sql['login'].'" class="logincom" /><br><br>
                Mail<br>         <input type="text" name="mailx" value="'.$sql['mail'].'" class="logincom" /><br><br>
                Hasło<br>         <input type="text" name="haslox" value="'.$sql['haslo'].'" class="logincom" /><br><br>
                Imię<br>         <input type="text" name="imiex" value="'.$sql['imie'].'" class="logincom" /><br><br>
                Nazwisko<br>         <input type="text" name="nazwiskox" value="'.$sql['nazwisko'].'" class="logincom" /><br><br>
                <button tabindex="2" type="submit" id="logbut">OK</button>
                </form>';  
            $this->wynik["tytul"][0]     .= ' - '.$sql['login'];
            
        }
    }
    
    
    public function savechange($id){
        global $alerty;
        $rlogin = addslashes(htmlspecialchars($_POST["loginx"]));
        $rhaslo = md5(addslashes(htmlspecialchars($_POST["haslox"])));
        $rranga = addslashes(htmlspecialchars($_POST["rangax"]));
        $rmail = addslashes(htmlspecialchars($_POST["mailx"]));
        $rimie = addslashes(htmlspecialchars($_POST["imiex"]));
        $rnazwisko = addslashes(htmlspecialchars($_POST["nazwiskox"]));
        $rid = addslashes(htmlspecialchars($_POST["idx"]));
        
        $sql = $this->db->query('select haslo from userzy where id = "'.$rid.'"');
        $sql = $sql->fetch_assoc();
        
        if($sql['haslo'] == $_POST["haslox"]){
            $sql = $this->db->query('update userzy set ranga="'.$rranga.'", login="'.$rlogin.'", mail="'.$rmail.'", imie="'.$rimie.'", nazwisko="'.$rnazwisko.'" where id="'.$rid.'" ');
        }
        else{
            $sql = $this->db->query('update userzy set ranga="'.$rranga.'", login="'.$rlogin.'", mail="'.$rmail.'", haslo="'.$rhaslo.'", imie="'.$rimie.'", nazwisko="'.$rnazwisko.'" where id="'.$rid.'" ');
        }
        $this->useredit($id);
    }

    
       
    public function writeid(){
        $this->wynik['wstep'][0] .= '<form action="usermanagment.php" method="get" id="logform">Podaj id, lub nick:<br>
					<input type="text" name="id" value="" class="loginp" />
					<button tabindex="2" type="submit" id="logbut">OK</button>
				</form>';
    }
      

    public function details(){
        return true;
    }
    
}
?>