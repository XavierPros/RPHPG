<?php
require_once ("autoload.inc.php");

class Consommable extends Item{
	private $_effet;
	
	public function __construct($i_Type, $i_Name, $o_effet){
		parent::__construct($i_Type, $i_Name);
		$this->_effet = $o_effet;
	}
	
	public function getEffet(){ return $this->_effet; }
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