<?php
class Human{

	private $name;
	public  $age;

	public function __construct(){
		$this->name = "Chad";
		$this->age = 29;

	}
	public function setName($newName){
		$this->name = $newName;
	}

	protected function demo(){
		return "Demo";
	}
	public function getName(){
		$demo = $this->demo();
		return $this->name.' '.$demo;
	}
} 
	$human = new Human();
	echo $human->getName();
	echo "<br/>";
	$human->setName('Canh');
	echo $human->getName();
	echo "<br/>";
	echo $human->age;
	//not working
	//echo $human->demo();
	
class Student extends Human{
	public $idStudent = 233;
	public function showMember(){
		return $this->demo()." all members";
	}
}

	$student = new Student();
	//var_dump($student);
	$student->setName('Nam');
	echo "<br/>";
	echo $student->getName();
	echo "<br/>";
	echo $student->idStudent;
	echo "<br/>";
	echo $student->showMember();