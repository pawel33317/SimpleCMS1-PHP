<?php 
class add_code{
    public $db;
    public $wynik;
    public $tochange = '<form action="addcode.php" method="post">
            <h3>Wpisz kod</h3>
            <p>
            <textarea id="comta" style="width:100%; height:500px;" name="source" id="source"></textarea>
            </p>
            <h3>Wybierz język</h3>
            <p>
            <select name="language" class="logincom2">
            <option value="4cs" >4cs</option>
            <option value="6502acme" >6502acme</option>
            <option value="6502kickass" >6502kickass</option>
            <option value="6502tasm" >6502tasm</option>
            <option value="68000devpac" >68000devpac</option>
            <option value="abap" >abap</option>
            <option value="actionscript" >actionscript</option>
            <option value="actionscript3" >actionscript3</option>
            <option value="ada" >ada</option>
            <option value="algol68" >algol68</option>
            <option value="apache" >apache</option>
            <option value="applescript" >applescript</option>
            <option value="apt_sources" >apt_sources</option>
            <option value="arm" >arm</option>
            <option value="asm" >asm</option>
            <option value="asp" >asp</option>
            <option value="asymptote" >asymptote</option>
            <option value="autoconf" >autoconf</option>
            <option value="autohotkey" >autohotkey</option>
            <option value="autoit" >autoit</option>
            <option value="avisynth" >avisynth</option>
            <option value="awk" >awk</option>
            <option value="bascomavr" >bascomavr</option>
            <option value="bash" >bash</option>
            <option value="basic4gl" >basic4gl</option>
            <option value="bf" >bf</option>
            <option value="bibtex" >bibtex</option>
            <option value="blitzbasic" >blitzbasic</option>
            <option value="bnf" >bnf</option>
            <option value="boo" >boo</option>
            <option value="c" >c</option>
            <option value="c_loadrunner" >c_loadrunner</option>
            <option value="c_mac" >c_mac</option>
            <option value="caddcl" >caddcl</option>
            <option value="cadlisp" >cadlisp</option>
            <option value="cfdg" >cfdg</option>
            <option value="cfm" >cfm</option>
            <option value="chaiscript" >chaiscript</option>
            <option value="cil" >cil</option>
            <option value="clojure" >clojure</option>
            <option value="cmake" >cmake</option>
            <option value="cobol" >cobol</option>
            <option value="coffeescript" >coffeescript</option>
            <option value="cpp" >cpp</option>
            <option value="cpp-qt" >cpp-qt</option>
            <option value="csharp" >csharp</option>
            <option value="css" >css</option>
            <option value="cuesheet" >cuesheet</option>
            <option value="d" >d</option>
            <option value="dcl" >dcl</option>
            <option value="dcpu16" >dcpu16</option>
            <option value="dcs" >dcs</option>
            <option value="delphi" >delphi</option>
            <option value="diff" >diff</option>
            <option value="div" >div</option>
            <option value="dos" >dos</option>
            <option value="dot" >dot</option>
            <option value="e" >e</option>
            <option value="ecmascript" >ecmascript</option>
            <option value="eiffel" >eiffel</option>
            <option value="email" >email</option>
            <option value="epc" >epc</option>
            <option value="erlang" >erlang</option>
            <option value="euphoria" >euphoria</option>
            <option value="f1" >f1</option>
            <option value="falcon" >falcon</option>
            <option value="fo" >fo</option>
            <option value="fortran" >fortran</option>
            <option value="freebasic" >freebasic</option>
            <option value="freeswitch" >freeswitch</option>
            <option value="fsharp" >fsharp</option>
            <option value="gambas" >gambas</option>
            <option value="gdb" >gdb</option>
            <option value="genero" >genero</option>
            <option value="genie" >genie</option>
            <option value="gettext" >gettext</option>
            <option value="glsl" >glsl</option>
            <option value="gml" >gml</option>
            <option value="gnuplot" >gnuplot</option>
            <option value="go" >go</option>
            <option value="groovy" >groovy</option>
            <option value="gwbasic" >gwbasic</option>
            <option value="haskell" >haskell</option>
            <option value="haxe" >haxe</option>
            <option value="hicest" >hicest</option>
            <option value="hq9plus" >hq9plus</option>
            <option value="html4strict" >html4strict</option>
            <option value="html5" >html5</option>
            <option value="icon" >icon</option>
            <option value="idl" >idl</option>
            <option value="ini" >ini</option>
            <option value="inno" >inno</option>
            <option value="intercal" >intercal</option>
            <option value="io" >io</option>
            <option value="j" >j</option>
            <option value="java" >java</option>
            <option value="java5" >java5</option>
            <option value="javascript" >javascript</option>
            <option value="jquery" >jquery</option>
            <option value="kixtart" >kixtart</option>
            <option value="klonec" >klonec</option>
            <option value="klonecpp" >klonecpp</option>
            <option value="latex" >latex</option>
            <option value="lb" >lb</option>
            <option value="ldif" >ldif</option>
            <option value="lisp" >lisp</option>
            <option value="llvm" >llvm</option>
            <option value="locobasic" >locobasic</option>
            <option value="logtalk" >logtalk</option>
            <option value="lolcode" >lolcode</option>
            <option value="lotusformulas" >lotusformulas</option>
            <option value="lotusscript" >lotusscript</option>
            <option value="lscript" >lscript</option>
            <option value="lsl2" >lsl2</option>
            <option value="lua" >lua</option>
            <option value="m68k" >m68k</option>
            <option value="magiksf" >magiksf</option>
            <option value="make" >make</option>
            <option value="mapbasic" >mapbasic</option>
            <option value="matlab" >matlab</option>
            <option value="mirc" >mirc</option>
            <option value="mmix" >mmix</option>
            <option value="modula2" >modula2</option>
            <option value="modula3" >modula3</option>
            <option value="mpasm" >mpasm</option>
            <option value="mxml" >mxml</option>
            <option value="mysql" >mysql</option>
            <option value="nagios" >nagios</option>
            <option value="netrexx" >netrexx</option>
            <option value="newlisp" >newlisp</option>
            <option value="nsis" >nsis</option>
            <option value="oberon2" >oberon2</option>
            <option value="objc" >objc</option>
            <option value="objeck" >objeck</option>
            <option value="ocaml" >ocaml</option>
            <option value="ocaml-brief" >ocaml-brief</option>
            <option value="octave" >octave</option>
            <option value="oobas" >oobas</option>
            <option value="oorexx" >oorexx</option>
            <option value="oracle11" >oracle11</option>
            <option value="oracle8" >oracle8</option>
            <option value="oxygene" >oxygene</option>
            <option value="oz" >oz</option>
            <option value="parasail" >parasail</option>
            <option value="parigp" >parigp</option>
            <option value="pascal" >pascal</option>
            <option value="pcre" >pcre</option>
            <option value="per" >per</option>
            <option value="perl" >perl</option>
            <option value="perl6" >perl6</option>
            <option value="pf" >pf</option>
            <option value="php" >php</option>
            <option value="php-brief" >php-brief</option>
            <option value="pic16" >pic16</option>
            <option value="pike" >pike</option>
            <option value="pixelbender" >pixelbender</option>
            <option value="pli" >pli</option>
            <option value="plsql" >plsql</option>
            <option value="postgresql" >postgresql</option>
            <option value="povray" >povray</option>
            <option value="powerbuilder" >powerbuilder</option>
            <option value="powershell" >powershell</option>
            <option value="proftpd" >proftpd</option>
            <option value="progress" >progress</option>
            <option value="prolog" >prolog</option>
            <option value="properties" >properties</option>
            <option value="providex" >providex</option>
            <option value="purebasic" >purebasic</option>
            <option value="pycon" >pycon</option>
            <option value="pys60" >pys60</option>
            <option value="python" >python</option>
            <option value="q" >q</option>
            <option value="qbasic" >qbasic</option>
            <option value="rails" >rails</option>
            <option value="rebol" >rebol</option>
            <option value="reg" >reg</option>
            <option value="rexx" >rexx</option>
            <option value="robots" >robots</option>
            <option value="rpmspec" >rpmspec</option>
            <option value="rsplus" >rsplus</option>
            <option value="ruby" >ruby</option>
            <option value="sas" >sas</option>
            <option value="scala" >scala</option>
            <option value="scheme" >scheme</option>
            <option value="scilab" >scilab</option>
            <option value="sdlbasic" >sdlbasic</option>
            <option value="smalltalk" >smalltalk</option>
            <option value="smarty" >smarty</option>
            <option value="spark" >spark</option>
            <option value="sparql" >sparql</option>
            <option value="sql" >sql</option>
            <option value="stonescript" >stonescript</option>
            <option value="systemverilog" >systemverilog</option>
            <option value="tcl" >tcl</option>
            <option value="teraterm" >teraterm</option>
            <option value="text" >text</option>
            <option value="thinbasic" >thinbasic</option>
            <option value="tsql" >tsql</option>
            <option value="typoscript" >typoscript</option>
            <option value="unicon" >unicon</option>
            <option value="upc" >upc</option>
            <option value="urbi" >urbi</option>
            <option value="uscript" >uscript</option>
            <option value="vala" >vala</option>
            <option value="vb" >vb</option>
            <option value="vbnet" >vbnet</option>
            <option value="vedit" >vedit</option>
            <option value="verilog" >verilog</option>
            <option value="vhdl" >vhdl</option>
            <option value="vim" >vim</option>
            <option value="visualfoxpro" >visualfoxpro</option>
            <option value="visualprolog" >visualprolog</option>
            <option value="whitespace" >whitespace</option>
            <option value="whois" >whois</option>
            <option value="winbatch" >winbatch</option>
            <option value="xbasic" >xbasic</option>
            <option value="xml" >xml</option>
            <option value="xorg_conf" >xorg_conf</option>
            <option value="xpp" >xpp</option>
            <option value="yaml" >yaml</option>
            <option value="z80" >z80</option>
            <option value="zxbasic" >zxbasic</option>
            </select>
            </p>
            <p>
            <input type="submit" name="submit" id="comta" value="Pobierz kod do artykułu" />
            </p>
            </form>'; 
            
               
    public function __construct($db) {
        $this->db = $db;
        $this->wynik["tytul"][0]     = 'Dodaj kod';
        
        if (isset($_POST['source'])){	      
            $this->wynik["wstep"][0] = $this->add_to_db();
            $this->wynik["wstep"][0] .= $this->tochange;
        }
        else {
            $this->wynik["wstep"][0] = $this->tochange;
        	//$this->wynik["tresc"][0] = $this->tochange;
        }
    }
    
    
    public function add_to_db(){
    	$source = $_POST['source'];
    	$language = $_POST['language'];
        //include_once 'geshi/geshi.php';
    	//$geshi = new GeSHi($source, $language);
        //$geshi->enable_line_numbers(GESHI_FANCY_LINE_NUMBERS, 5); // Numerowanie wierszy
        //$geshi->set_overall_style('font-size: 12px; color: #000066; border: 1px solid #d0d0d0; background-color: #ffeeec; width:100%;', true); // ogólne formatowanie (obramowanie i tło)
        //$geshi->set_line_style('font: normal normal 12px "Courier New", Courier, monospace; color: #003030;', 'font: bold normal 12px "Courier New", Courier, monospace; color: #006060;', true);  // wygląd numerów wieszy
    	//echo $geshi->parse_code();
        //$sql = $db->query('insert into kody (tresc) values ("'.addslashes($geshi->parse_code()).'")');
        $sql = $this->db->query('insert into kody (tresc, jezyk) values ("'.addslashes($_POST['source']).'","'.addslashes($_POST['language']).'")');
        $sql = $this->db->query('select id from kody ORDER BY id DESC limit 0,1');
    	$sql = $sql->fetch_assoc();
        return '<br><br>gsh='.$sql['id'].'=gshh<br><br>';  
    }


    public function details(){
        return true;
    }
}
?>