<?php 

class Car {
	const BAN = 4;

	public function tes() {
		echo Car::BAN;
		echo '<br/>';
		echo self::BAN;
	}
}

class Sepeda {
	const BAN = 2;

	public function tes() {
		echo Car::BAN;
		echo '<br/>';
		echo self::BAN;
	}
}

$s = new Sepeda;
$s->tes();
?>