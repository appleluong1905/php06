<?php 
class Human{
	public $name;
	public function getName($name) {
		return $name;
	}
}
	$human = new Human();
	echo $human->getName('Chad');
	
?>