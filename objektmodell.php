<?php

include_once "Haustier.php";
include_once "Katze.php";
include_once "Hund.php";

$Hund = new Hund();
$Hund->halsbandUm =true;
$Hund->fellfarbe = 'schwarz';

$tiere = [];

for($i = 0; $i < 20; $i++) {
	$tier = null;
	if ($i %2 == 0) {
		$tier = new Hund();
	} else {
		$tier = new Katze();
	}

	$tier->name = 'Tier-' . $i;

	$tiere[] = $tier; 
	echo $tier->fuetterDasTier();
	echo "\n";
	echo $tier->fellreinigen();
	echo "\n";
}
