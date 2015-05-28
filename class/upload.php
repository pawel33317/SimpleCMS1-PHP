<?php 
class upload{
    public $wynik;
    public $db;
    
        
    public function __construct($db) {
        $this->db = $db;
        $this->wynik["wstep"][0] .= '<br>';
        $this->wynik["tytul"][0] = $sql.'Upload';
        
        if(isset($_GET['block'])){
            global $alerty;
            $alerty="Tylko obrazki i dokumenty";
        }
  
  
    	if(is_uploaded_file($_FILES['plik']['tmp_name'])){
            @$plik_tmp = @$_FILES['plik']['tmp_name'];
            @$plik_nazwa = htmlspecialchars(@$_FILES['plik']['name']);
            @$plik_rozmiar = @$_FILES['plik']['size'];
    		if ($plik_rozmiar > 30000000){
    			global $alerty;
                $alerty="Plik zbyt duży :(";
    		}
    		else{
                $upload_folder='upload';
                $rozszerzenie = explode(".",$plik_nazwa);
                $tmp = count($rozszerzenie)-1;
                $rozszerzenie = $rozszerzenie[$tmp];
                if($rozszerzenie == 'php' || $rozszerzenie == 'php5'){
                    header('Location: upload.php?block=1');
                }
                
                $sql = $this->db->sl('wartosc','licznik','nazwa','upload');
                $plik_nazwa = $sql.'.'.$rozszerzenie;
                $this->wynik["wstep"][0] .= 'Plik: <strong>'.$plik_nazwa.'</strong> o rozmiarze <strong>'.number_format($plik_rozmiar/(1024*1024), 2, '.', '').' MB</strong> został przesłany na serwer!<br>
									Link do pliku to: <br><br><strong><a href="http://haks.pl/'.$upload_folder.'/'.$plik_nazwa.'">http://haks.pl/'.$upload_folder.'/'.$plik_nazwa.'</a></strong><br><br><br>';
                
                move_uploaded_file($plik_tmp, $upload_folder.'/'.$plik_nazwa);
                
                $sql++;
                $sql = $this->db->query('update licznik set wartosc = '.$sql.' where nazwa = "upload"');
                
            }
        }   
          
        $this->wynik["wstep"][0] .= '<form enctype="multipart/form-data" action="upload.php" method="POST">
                                        <strong>Nie wybrałeś pliku</strong><input type="hidden" name="MAX_FILE_SIZE" value="10000000000"/>
                                        <input type="file" name="plik" class="upload" />
                                        <input type="submit" name="upload" id="formlogokup" value="Wrzuć""/>
                                    </form>'; 
    }  
    
    
    public function details(){
        return true;
    }
}
?>