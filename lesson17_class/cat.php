<?php

class Cat {
	private $name;
	private $color;
	private $speak;
	
	public function __construct($name, $color) {
		$this->name = $name;
		$this->color = $color;
		$this->speak = '';
	}
	
	public function info() {
		return "Cat name: {$this->name}, color: {$this->color}";
	}
	
	public function amountOfLegs() {
		return 4;
	}
	
	public function setSpeak($sound) {
		$this->speak = $sound;
	}
	
	public function speak() {
		return $this->speak;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function hasFriend($cat) {
		return " I am {$this->name} and my friend is {$cat->getName()}";
	}
}