<?php 
class user_panel{
    public $db;
    public $wynik;
    
    public function __construct($db){
        $this->db = $db;
        $this->show();
        if(isset($_POST["erlogin"])){
            global $alerty;
            $rlogin = addslashes(htmlspecialchars($_POST["erlogin"]));
            $sql = $this->db->query('select id from userzy where login = "'.$rlogin.'"');
            if(($sql->fetch_assoc() > 0) && ($_COOKIE['login'] != $rlogin)){
                $alerty = "Podany Login już istnieje";
            }
            else{
                if(strlen($rlogin) < 5){
                    $alerty = "Login zbyt krótki";
                }
                else{
                    $rhaslo = addslashes(htmlspecialchars($_POST["erhaslo"]));
                    if(strlen($rhaslo) < 5){
                        $alerty = "Hasło zbyt krótkie";
                    }
                    else{
                        $rphaslo = addslashes(htmlspecialchars($_POST["erphaslo"]));
                        if($rhaslo != $rphaslo){
                            $alerty = "Różne hasła";
                        }
                        else{
                            $rmail = addslashes(htmlspecialchars($_POST["ermail"]));
                            if(!filter_var($rmail, FILTER_VALIDATE_EMAIL)){
                                $alerty = "E-mail niepoprawny";
                            }
                            else{
                                $rimie = addslashes(htmlspecialchars($_POST["erimie"]));
                                $rnazwisko = addslashes(htmlspecialchars($_POST["ernazwisko"]));
                                $rdzien = addslashes(htmlspecialchars($_POST["erdzien"]));
                                $rmiesiac = addslashes(htmlspecialchars($_POST["ermiesiac"]));
                                $rrok = addslashes(htmlspecialchars($_POST["errok"]));
                                $rtresc = addslashes(htmlspecialchars($_POST["ertresc"]));
                                $rplec = addslashes(htmlspecialchars($_POST["erplec"]));if ($rplec == 'men'){$rplec = 0;} else {$rplec = 1;}
                                $daraur = mktime(0,0,0,$rmiesiac,$rdzien,$rrok);
                                $sql = $this->db->query('update userzy set  login = "'.$rlogin.'",
                                                                            mail = "'.$rmail.'",
                                                                            haslo = "'.md5($rhaslo).'",
                                                                            imie = "'.$rimie.'",
                                                                            nazwisko = "'.$rnazwisko.'",
                                                                            dataur = '.$daraur.',
                                                                            plec = '.$rplec.',
                                                                            opis = "'.$rtresc.'" where login = "'.$_COOKIE['login'].'"');
                                if(!$sql)$alerty = 'Błąd w rejestracji :-(';
                                $this->log_in($rlogin,md5($rhaslo));
                            }
                        }
                    }
                }
            }
        }
    }


    public function details(){
        return true;
    }



    public function show(){
        
        
        $this->wynik["tytul"][0] = $sql.'Twoje dane';
                
                
        $sql = $this->db->query('select * from userzy where login = "'.$_SESSION['login'].'"');
        $sql = $sql->fetch_assoc();
        
        $p1 = ''; $p2= '';
        if($sql['plec'] == 1) $p2='checked';
        if($sql['plec'] == 0) $p1='checked';        
        $this->wynik["wstep"][0] = '
            <div>
        	<form action="userpanel.php" method="POST" id="logform">
        		<br>Login: <br>
        		<input type="text" name="erlogin" class="logincom" value="'.$sql['login'].'" /><br>
        		<br>Hasło: <br>
        		<input type="password" name="erhaslo" value="Hasło" onblur="if(this.value.length == 0) this.value=\'Hasło\';" onclick="if(this.value == \'Hasło\') this.value=\'\';" class="logincom" /><br>
        		<br>Powtórz hasło: <br>
        		<input type="password" name="erphaslo" value="Hasłoo" onblur="if(this.value.length == 0) this.value=\'Hasło\';" onclick="if(this.value == \'Hasło\') this.value=\'\';" class="logincom" /><br>
        		<br>E-mail: <br>
        		<input type="text" name="ermail" value="'.$sql['mail'].'" class="logincom" /><br>
        		<br>Imię: <br>
        		<input type="text" name="erimie" value="'.$sql['imie'].'" class="logincom" /><br>
        		<br>Nazwisko: <br>
        		<input type="text" name="ernazwisko" value="'.$sql['nazwisko'].'" class="logincom" /><br>
        		<br>Data urodzenia:<br>
        		<select name="erdzien" class="logincom2">
                    '.$this->getday().'
        		</select>
        		<select name="ermiesiac" class="logincom2">
        			'.$this->getmontch().'
        		</select>
        		<select name="errok" class="logincom2">
        			'.$this->getyear().'
        		</select><br>
        		<br>Płeć:<br>
        			<input type="radio" name="erplec" value="men" '.$p1.'/>Mężczyzna
        			<input type="radio" name="erplec" value="women" '.$p2.'/>Kobieta<br>
        		<br>Opis:<br>
        		<textarea name="ertresc"  id="comta"  >'.$sql['opis'].'</textarea><br>
        		<button tabindex="2" type="submit" id="logbut">OK</button>
            </form>
            </div>';

        
        
        
        
    }


    public function log_in($login,$haslo){
        $_SESSION = array();
        setcookie(session_name(), '', time()-42000); 
        setcookie("login", 'vcv', time()-3600*24*7);
        setcookie("haslo", 'vcvc', time()-3600*24*7);
        session_destroy();
        setcookie("login", $login, time()+3600*24*7);
        setcookie("haslo", $haslo, time()+3600*24*7);
        session_start();
        header('Location: index.php');
        exit;
    }
    
    public function getday(){
        $i=1;
        $result = '<option>'.date('d',$this->db->sl('dataur','userzy','login',$_COOKIE['login'])).'</option>';
        while($i<32){$result .= '<option>'.$i.'</option>'; $i++;}
        return $result;
    }
    public function getmontch(){
        $i=1;
        $result = '<option>'.date('m',$this->db->sl('dataur','userzy','login',$_COOKIE['login'])).'</option>'; 
        while($i<13){$result .= '<option>'.$i.'</option>'; $i++;}
        return $result;
    }
    public function getyear(){
        $result = '<option>'.date('Y',$this->db->sl('dataur','userzy','login',$_COOKIE['login'])).'</option>'; 
        $i=1;
        while($i<90){$tmp = date("Y")-$i+1; $result .= '<option>'.$tmp.'</option>'; $i++;}
        return $result;
    }
}
?>