<?php
set_time_limit(0);
$start = microtime();


	$n = 10000;
		for($i=0; $i<$n; $i++)
        	for($j=0; $j<$n; $j++)
        		$w = (0.3*$i+0.22*$j)/3.14159265359;

				
				
$koniec = microtime();
$start = explode(' ', $start);
$koniec = explode(' ', $koniec);
$roznica = ($koniec[0]+$koniec[1])-($start[0]+$start[1]);


echo 'Skrypt wykona³ siê w '.$roznica.' sekund.';
?>