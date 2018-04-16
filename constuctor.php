<?php

class Person{
	public $name;
	public $age;

	public function __construct($name,$age){
		$this->name=$name;
		$this->age=$age;
	}
	public function personDetalis(){
		echo "Person name is {$this->name}"."<br/>";

		echo "Person age is {$this->age}";
	}
}

$personOne=new Person("shible islam","21");

$personOne->personDetalis();




?>