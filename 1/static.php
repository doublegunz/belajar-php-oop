<?php 

class Car {
	public static $engine = 1;

	public static function apaIni() {
		echo '<br/>Ini adalah sebuah mobil.<br/>';
	}

	public static function tes() {
		echo self::$engine;
		echo self::apaIni();
	}
}

echo Car::$engine;
Car::apaIni();

Car::tes();

?>