<?php 

require_once '/autoload.inc.php';

class Perso {

	private $_nom;
	private $_vie;
	private $_mana;
	private $_attaqueRapide;
	private $_attaqueLente;
	private $_defense;
	private $_vitesse;

	public function __construct ($p_nom, $p_vie, $p_mana, $p_attaqueRapide, $p_attaqueLente, $p_defense, $p_vitesse) {
		$this->_nom = $p_nom;
		$this->_vie = $p_vie;
		$this->_mana = $p_mana;
		$this->_attaqueRapide = $p_attaqueRapide;
		$this->_attaqueLente = $p_attaqueLente;
		$this->_defense = $p_defense;
		$this->_vitesse = $p_vitesse;
	}

	public function getNom () { return $this-> _nom; }
	public function setNom ($p_nouveauNom) { $this->_nom = $p_nouveauNom; }

	public function getVie () { return $this-> _vie; }
	public function setVie ($p_nouveauVie) { $this->_vie = $p_nouveauVie; }

	public function getMana () { return $this-> _mana; }
	public function setMana ($p_nouveauMana) { $this->_mana = $p_nouveauMana; }

	public function getAttaqueRapide () { return $this-> _attaqueRapide; }
	public function setAttaqueRapide ($p_nouveauAttaqueRapide) { $this->_attaqueRapide = $p_nouveauAttaqueRapide; }

	public function getAttaqueLente () { return $this-> _attaqueLente; }
	public function setAttaqueLente ($p_nouveauAttaqueLente) { $this->_attaqueLente = $p_nouveauAttaqueLente; }

	public function getDefense () { return $this-> _defense; }
	public function setDefense ($p_nouveauDefense) { $this->_defense = $p_nouveauDefense; }

	public function getVitesse () { return $this-> _vitesse; }
	public function setVitesse ($p_nouveauVitesse) { $this->_vitesse = $p_nouveauVitesse; }

	public function toString () 
	{
		echo "<h3>".$this->getNom()."</h3><br/>vie: ".$this->getVie()."<br/> mana: ".$this->getMana()."<br/> attaque rapide: ".$this->getAttaqueRapide()."<br/> attaque lente: ".$this->getAttaqueLente()."<br/> defense: ".$this->getDefense()."<br/> vitesse: ".$this->getVitesse()."<br/>";
	}
}

?>