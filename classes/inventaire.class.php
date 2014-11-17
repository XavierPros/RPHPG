<?php
require_once ("autoload.inc.php");

class Inventaire implements Iterator{
	private $_placeLibre;
	private $_monInventaire;
	
	public function __construct($i_placeLibre){
		$this->_placeLibre = $i_placeLibre;
		$this->_monInventaire = array();
		$this->_placeItem = 1;
		$this->_placeTotal = 40;
	}

/***** ACCESSEUR *****/

	public function getPlaceLibre() { return $this->_placeLibre; }
	public function getMonInventaire() { return $this->_monInventaire; }

/***** FONCTIONS *****/ 
	public function PrendreItem(Item $i_item) {
	// renvoie une erreur si l'inventaire est égale à 0 ou moins
		if($this->_placeLibre <= 0){
			echo "Plus de place dans l'inventaire<br/>";
		}
	// place un item dans l'inventaire
		else{
			$this->_monInventaire[$i_item->getName()] = $i_item;
			$this->_placeLibre -= $this->_placeItem;
			echo $i_item->toString()." est placé dan votre inventaire<br/>";
		}
	}
	
	public function SupprimerItem($i_item) {
		if($this->_placeLibre >= 40){
			echo "Votre inventaire est vide !<br/>";
		}
		else{
			$Inventaire = $this->_monInventaire[$i_item->getName()];
			unset ($this->_monInventaire[$i_item->getName()]);
			$this->_placeLibre += $this->_placeItem;
			//affichage étrange sur une seul ligne
			echo "Vous jetez ";
			echo $i_item->toString();
			echo "<br/>";
		}
	}
	
	public function toString(){
		echo "<h3 title=\"Places disponibles / Places totales\">Inventaire (".$this->_placeLibre." / ".$this->_placeTotal.")</h3><br/>";
		foreach($this->_monInventaire as $Inventaire){
			echo $Inventaire->toString()."<br/>";
		}
	}
	
	/***** Iterator *****/
	
	public function current(){
		echo "<br/>";
		return current ($this->_monInventaire);
	}
	
	public function key(){
		echo "<br/>";
		return key($this->_monInventaire);
	}
	
	public function next(){
		echo "<br/>";
		return next($this->_monInventaire);
	}
	
	public function rewind(){
		echo "<br/>";
		reset($this->_monInventaire);
	}
	
	public function valid(){
		echo "<br/>";
		return (key($this->_monInventaire)!=NULL);
	}
}
?>