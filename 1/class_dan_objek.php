<?php 

class Car {
	public $color = "White";
	public $speed;
	public $fuel;
	public $brand;
	public $model;

	public function __construct() {
		echo "<br/>Objek baru dari kelas " . __CLASS__ . " dibuat<br/>";
		echo "<br/>Method " . __METHOD__ . " dipanggil<br/>";
	}

	public function __destruct() {
		echo "<br/>Method " . __METHOD__ . " dipanggil<br/>";
	}

	public function test() {
		echo 'tes fungsi<br/>' . PHP_EOL;
	}

	public function waktuTempuh($distance) {
		$time = $distance / $this->speed;
		return $time;
	}
}

$BMW = new Car;
$BMW->speed = 250;
$BMW->fuel = 9;
$BMW->brand = "M3";

$Lada = new Car;
$Lada->speed = 120;
$Lada->fuel = 10;
$Lada->model = "2101";
$Lada->color = "Red";

var_dump($BMW, $Lada);
var_dump($BMW->speed);

$BMW->test();
unset($BMW);
$Lada->test();

echo '<br/>Waktu tempuh Lada: ' . $Lada->waktuTempuh(1000) . 'jam';
?>