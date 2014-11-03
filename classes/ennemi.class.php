<?php

require_once '/autoload.inc.php';

class Ennemi extends Perso{

	private $_attaqueSpeciale;

	public function __construct ($p_nom, $p_vie, $p_mana, $p_attaqueRapide, $p_attaqueLente, $p_attaqueSpeciale, $p_defense, $p_vitesse) 
	{
		parent::__construct($p_nom, $p_vie, $p_mana, $p_attaqueRapide, $p_attaqueLente, $p_defense, $p_vitesse) ;

		$this->_attaqueSpeciale = $p_attaqueSpeciale;
	}


	public function getAttaqueSpeciale () { return $this-> _attaqueSpeciale; }
	public function setAttaqueSpeciale ($p_nouveauAttaqueSpeciale) { $this->_attaqueSpeciale = $p_nouveauAttaqueSpeciale; }

	public function toString () 
	{
		echo "<h3>".$this->getNom()."</h3><br/>vie: ".$this->getVie()."<br/> mana: ".$this->getMana()."<br/> attaque rapide: ".$this->getAttaqueRapide()."<br/> attaque lente: ".$this->getAttaqueLente()."<br/> attaque speciale: ".$this->getAttaqueSpeciale()."<br/> defense: ".$this->getDefense()."<br/> vitesse: ".$this->getVitesse()."<br/>";
		return 0;
	}
}

?>