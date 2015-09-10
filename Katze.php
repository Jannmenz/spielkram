<?php

include_once "Haustier.php";
include_once "TierMitMaul.php";
include_once "TierMitFell.php";

class Katze extends Haustier implements TierMitMaul,TiermitFell {

	public $schwanzlaenge;

	public function sagMiau()
	{
		echo "miau";
	}

	public function fuetterDasTier() {
		echo 'MIAU KRATZ BEISS LECKER';
	}

	public function fellreinigen(){
		echo 'Katze rennt weg';
	}
}