<?php
// Human
class Human{

	public  $name = "ACB"; // public/private/protected
	public  $age;

	public function setName($newName){ // public/private/protected
		$this->name = $newName;
	}

	public function getName(){
		return $this->name;
	}
} 

//Student
class Student extends Human{
	public $id;
	public function setID($id){
		$this->id = $id;
	}
	public function getID(){
		return $this->id;
	}
}


$student = new Student();

$student->setName('Chad');

echo $student->getName();



echo "<br/>";

$student->setID(12345);

echo $student->getID();



$human = new Human();
echo "<br/>";

$human->setID(66666);

echo $human->getID();

// $human = new Human();

// $human->setName('Chad');

// echo $human->getName();






//var_dump($human);
