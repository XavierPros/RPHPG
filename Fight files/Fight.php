<?php

class Fight 
{
	private $_life;
	private $_strongAttackDamage;
	private $_strongAttackChance;
	private $_weakAttackDamage;
	private $_weakAttackChance;

	public function __construct() {
		$this->_life = 100;
		$this->_strongAttackDamage = 20;
		$this->_strongAttackChance = 0.80;
		$this->_weakAttackDamage = 40;
		$this->_weakAttackChance = 0.40;
	}

	public function strongAttack(){
		$rand_hit=mt_rand() / mt_getrandmax(); //Donne un nombre à virgule entre 0 et 1
		$bool_hit=false; // Booléen initialisé à false de base
		echo $this->_life."<br/>"; //On affiche la vie avant l'attaque
		echo $rand_hit."<br/>"; // On affiche la valeur du random
		if ($rand_hit < $this->_strongAttackChance) { // Si le random donne un nombre inférieur à _strongAttackChance
			$bool_hit=true; // On défini le booléen sur true
		}

		if ($bool_hit==true){ // Test du booléen
			echo "bim!<br/>"; //Test d'entrée dans la boucle
			$this->_life -= $this->_strongAttackDamage; // On soustrait la vie avec les dégats de l'attaque
		}
			echo $this->_life; //On affiche la vie après l'attaque
	}

	public function weakAttack(){
		$rand_hit=mt_rand() / mt_getrandmax();
		$bool_hit=false;
		echo $this->_life."<br/>";
		echo $rand_hit."<br/>";
		if ($rand_hit < $this->_weakAttackChance) {
			$bool_hit=true;
		}
		if ($bool_hit==true){ // Test du booléen
			echo "bim!<br/>"; //Test d'entrée dans la boucle
			$this->_life -= $this->_weakAttackDamage; // On soustrait la vie avec les dégats de l'attaque
		}
			echo $this->_life; //On affiche la vie après l'attaque
	}


	public function getLife() {
		return $this->_life;
	}
}

?>