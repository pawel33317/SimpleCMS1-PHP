<?php
class sesja{
    public $db;
  
    public function __construct($db) {
        session_start();
        $this->db = $db;
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
	       if(!empty($_GET["out"])){
                $this->logout();
	       }
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            	if(isset($_POST["haslo"])){
                    $this->get_post_password_protection();
            	}
        }
        if (!isset($_SESSION['inicjuj'])){
            $this->create_new_session();
        }
        else{
            if($_SESSION['ip'] != $_SERVER['REMOTE_ADDR']){
                $this->logout();
            }
        }
    }


    public function logout(){
        $_SESSION = array();
        setcookie(session_name(), '', time()-42000); 
        setcookie("login", 'vcv', time()-3600*24*7);
        setcookie("haslo", 'vcvc', time()-3600*24*7);
        session_destroy();
        header('Location: index.php');
        exit;
    }
    
    
    public function get_post_password_protection(){
   	    session_destroy();	
  		session_start();
    }
    
    
    public function create_new_session(){
   	    $_SESSION['inicjuj'] = true;
        $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
        $_SESSION['zalogowany'] = 0;
        
        
      	$licznik_add_one = $this->db->sl('wartosc','licznik','nazwa','glowny');
      	$nowawartosc = $licznik_add_one+1;
        $this->db->query('update licznik set wartosc = '.$nowawartosc.' where nazwa = "glowny"');
        $_SESSION['admin'] = false;
        $_SESSION['login'] = false;
        
        if(isset($_POST['login'])){
            $this->log_from_post_password();
        }
        elseif(isset($_COOKIE['login'])){
            $this->log_from_cookie();
        }
    }
    
    
    public function log_from_post_password(){
        $plogin = addslashes(htmlspecialchars($_POST['login']));
        $phaslo = addslashes(htmlspecialchars($_POST['haslo']));
        $userr = $this->db->sl('haslo','userzy','login',$plogin);
        
        
        if ( md5($phaslo) == $userr ){
	        $_SESSION['zalogowany'] = 1;
   	        $_SESSION['login'] = $plogin;
            $sql = $this->db->sl('ranga','userzy','login',$plogin);
            if ($sql > 5) $_SESSION['admin'] = true; else $_SESSION['admin'] = false;
   	        setcookie("login", $_SESSION['login'], time()+3600*24*7);
            setcookie("haslo", $userr["haslo"], time()+3600*24*7);
        }
   	    else{
    		$_SESSION['zalogowany'] = 2;
            global $alerty;
            $alerty = "Złe hasło";	
        }
    }
    
    
    public function log_from_cookie(){
        $userr = $this->db->sl('haslo','userzy','login',$_COOKIE['login']);
  		if($_COOKIE['haslo'] == $userr){
      		$_SESSION['zalogowany'] = 1;
      		$_SESSION['login'] = $_COOKIE['login'];
            $sql = $this->db->sl('ranga','userzy','login',$_COOKIE['login']);
            if ($sql > 5) $_SESSION['admin'] = true; else $_SESSION['admin'] = false;
      		setcookie("login", $_SESSION['login'], time()+3600*24*7);
			setcookie("haslo", $userr["haslo"], time()+3600*24*7);
 		}
 		else{
      		$this->logout();
 		}
    }
    
    
    public function hack(){
        die('Hahahahahahahahahahahaha!');
    }
    
    
    public function smarty_assign_and_data_last(){
        if($_SESSION['zalogowany'] == 1){
            $this->db->query('update userzy set datalast = '.time().' where login = "'.$_SESSION['login'].'"');
            $login['czy'] = true;
            $login['nick'] = $_SESSION['login'];
        }
        else{
            $login['czy'] = false;
        }
        return $login;
    }
    
    
}
?>