<?php
require_once ("autoload.inc.php");

class Arme extends Item{
	private $_degat;
	
	public function __construct($i_Type, $i_Name, $a_degat){
		parent::__construct($i_Type, $i_Name);
		$this->_degat = $a_degat;
	}
	
	public function getDegat(){ return $this->_degat; }
	public function getType(){ return parent::getType(); }
	public function getName(){ return parent::getName(); }
	
	public function toString(){
		echo $this->getName();
	}

	public function AfficherType(){
		echo $this->getType()."<br/>";
	}
}
?>