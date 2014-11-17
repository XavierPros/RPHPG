<?php
require_once ("autoload.inc.php");

class Item{
	private $_type;
	private $_name;
	
	public function __construct($i_Type, $i_Name){
		$this->_type = $i_Type;
		$this->_name = $i_Name;
	}

	public function getType(){ return $this->_type; }
	public function setType($_newType){ $this->_type = $_newType; }
	
	public function getName(){ return $this->_name; }
	public function setName($_newName){ $this->_name = $_newName; }
	
	public function AfficherItem(){
		echo "Une ".$this->getType()." tombe à terre.<br/>";
		return 0;
	}
	
	public function toString(){
		echo $this->getType();
	}
}
?>