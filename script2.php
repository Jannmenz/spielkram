<?php
	$line = readline(">>>");
	if(!is_numeric($line))
	{
		echo'Du Trottel sollst ne Zahl eingeben';
	}
	else
	{
		for($pPrimzahl = 1; $pPrimzahl<=$line; $pPrimzahl++) 
		{
			$teiler = 1;
			$prim = true;
			while(++$teiler<$pPrimzahl/2) 
			{
				if(0 == $pPrimzahl % $teiler ) 
				{
					$prim = false;
					break; 
				}
			}

		 	if($prim) 
		 	{
		 		$str = sprintf("%d ist eine Primzahl\n",$pPrimzahl);
		 		echo $str;
		 		
		 			 
		 	}
		}	
	}

	
