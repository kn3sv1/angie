<?php

class Doctor {
	private $name;
	private $surname;
	private $date_of_birth;
	
	public function __construct($name, $surname, $date_of_birth) {
		$this->name = $name;
		$this->surname = $surname;
		$this->date_of_birth = $date_of_birth;
	}
	
	public function info() {
		return "Doctor name: {$this->name}, surname: {$this->surname}, date of birth: {$this->date_of_birth}";
	}
	public function birthDate() {
		return "Date of birth: {$this->date_of_birth}";
	}
		
	public function amountOfLegs() {
		return "Amount of legs = 2";
	}
}