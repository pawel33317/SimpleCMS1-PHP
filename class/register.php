<?php
class register{
    public $wynik;
    public $db;
    
    
    public function __construct($db){
        $this->db = $db;
        $this->show();
        
        if(isset($_POST["rlogin"])){
            $this->check();
        }
    }
    
    
    public function show(){
        
        $this->wynik["tytul"][0] = $sql.'Rejestracja';
        $this->wynik["wstep"][0] = '  
					<section class="register">

						<form action="register.php" method="POST" id="logform">
							<br>Login: <br>
							<input type="text" name="rlogin" value="Login" onblur="if(this.value.length == 0) this.value=\'Login\';" onclick="if(this.value == \'Login\') this.value=\'\';" class="logincom" /><br>
							<br>Hasło: <br>
							<input type="password" name="rhaslo" value="Hasło" onblur="if(this.value.length == 0) this.value=\'Hasło\';" onclick="if(this.value == \'Hasło\') this.value=\'\';" class="logincom" /><br>
							<br>Powtórz hasło: <br>
							<input type="password" name="rphaslo" value="Hasło" onblur="if(this.value.length == 0) this.value=\'Hasło\';" onclick="if(this.value == \'Hasło\') this.value=\'\';" class="logincom" /><br>
							<br>E-mail: <br>
							<input type="text" name="rmail" value="login@domena.com" onblur="if(this.value.length == 0) this.value=\'login@domena.com\';" onclick="if(this.value == \'login@domena.com\') this.value=\'\';" class="logincom" /><br>
							<br>Imię: <br>
							<input type="text" name="rimie" value="Imię" onblur="if(this.value.length == 0) this.value=\'Imię\';" onclick="if(this.value == \'Imię\') this.value=\'\';" class="logincom" /><br>
							<br>Nazwisko: <br>
							<input type="text" name="rnazwisko" value="Nazwisko" onblur="if(this.value.length == 0) this.value=\'Nazwisko\';" onclick="if(this.value == \'Nazwisko\') this.value=\'\';" class="logincom" /><br>
							<br>Data urodzenia:<br>
							<select name="rdzien" class="logincom2">
								'.$this->getday().'
							</select>
							<select name="rmiesiac" class="logincom2">
								'.$this->getmontch().'
							</select>
							<select name="rrok" class="logincom2">
								'.$this->getyear().'
							</select><br>
							<br>Płeć:<br>
								<input type="radio" name="rplec" value="men" checked="checked" />Mężczyzna
								<input type="radio" name="rplec" value="women"  checked="checked"/>Kobieta<br>
							<br>Opis:<br>
							<textarea name="rtresc"  id="comta"  onblur="if(this.value.length == 0) this.value=\'Wpisz treść...\';" onclick="if(this.value == \'Wpisz treść...\') this.value=\'\';" >Wpisz treść...</textarea><br>
							<button tabindex="2" type="submit" id="logbut">OK</button>
						</form>
					</section>

';
        
        
        
        
        
        
        
        
        
        
        
        
    }
    
    

    public function check(){
        global $alerty;
        $rlogin = addslashes(htmlspecialchars($_POST["rlogin"]));
        $sql = $this->db->query('select id from userzy where login = "'.$rlogin.'"');
        if($sql->fetch_assoc() > 0){
            $alerty = "Podany Login już istnieje";
        }
        else{
            if(strlen($rlogin) < 5){
                $alerty = "Login zbyt krótki";
            }
            else{
                $rhaslo = addslashes(htmlspecialchars($_POST["rhaslo"]));
                if(strlen($rhaslo) < 5){
                    $alerty = "Hasło zbyt krótkie";
                }
                else{
                    $rphaslo = addslashes(htmlspecialchars($_POST["rphaslo"]));
                    if($rhaslo != $rphaslo){
                        $alerty = "Różne hasła";
                    }
                    else{
                        $rmail = addslashes(htmlspecialchars($_POST["rmail"]));
                        if(!filter_var($rmail, FILTER_VALIDATE_EMAIL)){
                            $alerty = "E-mail niepoprawny";
                        }
                        else{
                            $rimie = addslashes(htmlspecialchars($_POST["rimie"]));
                            $rnazwisko = addslashes(htmlspecialchars($_POST["rnazwisko"]));
                            $rdzien = addslashes(htmlspecialchars($_POST["rdzien"]));
                            $rmiesiac = addslashes(htmlspecialchars($_POST["rmiesiac"]));
                            $rrok = addslashes(htmlspecialchars($_POST["rrok"]));
                            $rtresc = addslashes(htmlspecialchars($_POST["rtresc"]));
                            $rplec = addslashes(htmlspecialchars($_POST["rplec"]));if ($rplec == 'men'){$rplec = 0;} else {$rplec = 1;}
                            $daraur = mktime(0,0,0,$rmiesiac,$rdzien,$rrok);
                            $sql = $this->db->query('insert into userzy (ranga, login, mail, haslo, imie, nazwisko, dataur, plec, datareg, datalast, opis) values(
                                        0, "'.$rlogin.'", "'.$rmail.'", "'.md5($rhaslo).'", "'.$rimie.'", "'.$rnazwisko.'", '.$daraur.', '.$rplec.', '.time().', '.time().', "'.$rtresc.'")');
                            if(!$sql)$alerty = 'Błąd w rejestracji :-(';
                            $this->log_in($rlogin,md5($rhaslo));
                        }
                    }
                }
            }
        }
        
        
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
        $i=0;
        $result = '';
        while($i<31){$tmp = $i+1; $result .= '<option>'.$tmp.'</option>'; $i++;}
        return $result;
    }
    public function getmontch(){
        $i=0;
        $result = '';
        while($i<12){$tmp = $i+1; $result .= '<option>'.$tmp.'</option>'; $i++;}
        return $result;
    }
    public function getyear(){
        $i=0;
        $result = '';
        while($i<90){$tmp = date("Y")-$i; $result .= '<option>'.$tmp.'</option>'; $i++;}
        return $result;
    }
    
    public function details(){
        return true;
    }
}
?>