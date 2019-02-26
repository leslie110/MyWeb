<?php
class Car{
	public static $speed = 10;
	public static function getSpeed(){
		return self::$speed;
	}
}

class Ter{
	public $spaad = 20;
	public function getSpaad(){
		return $this->spaad;
	}
}

class Ber{
	
}
echo Car::$speed;
echo Car::getSpeed();
$ter = new Ter();
echo $ter->getSpaad();