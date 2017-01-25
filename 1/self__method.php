<?php 

class Car {
	const BAN = 4;
	public $color;

	public function tes() {
		echo $this->color;
		echo '<br/>';
		echo self::BAN;
	}
}

$mobil = new Car;
$mobil->color = 'White';
$mobil->tes();

?>