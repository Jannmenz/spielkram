<?php

include_once "Haustier.php";
include_once "TierMitFell.php";
include_once "TierMitMaul.php";


class Hund extends Haustier implements TierMitMaul,TierMitFell{

	public $halsbandUm;

	public function sagWuff()
	{
		echo "Wuff";
	}

	public function lala() {
		echo "lala";
	}

	public function fuetterDasTier() {
		echo 'NOMNOM LECKER WUFF';
	}
	public function fellreinigen(){
		echo 'Tut dem Hund gut';
	}
}