<?php
 


$result = 0;
$d = 0;
$zahl = 100;
$teiler = 3;

/**
* HIER BITTE DEN CODE SCHREIBEBN
*/
for($d; $d <= $zahl; $d++) 	
{
	if ($d % $teiler==0)
	{
		$result = $result + $d;
	}
}
	
	
    
	$str = sprintf('Bei der Prüfung von %s zahlen ob sie durch einen teiler %s teilbar sind, ergibt deren summe %s' ,$zahl,$teiler,$result);
   echo $str;
   
?>
