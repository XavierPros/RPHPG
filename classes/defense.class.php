<?php
require_once ("autoload.inc.php");

class Defense extends Item{
	private $_armure;
	
	public function __construct($i_Type, $i_Name, $d_armure){
		parent::__construct($i_Type, $i_Name);
		$this->_armure = $d_armure;
	}
	
	public function getArmure(){ return $this->_armure; }
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