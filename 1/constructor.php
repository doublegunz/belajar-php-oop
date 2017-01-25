<?php 

class Car {
	public $color = "White";
	public $speed;
	public $fuel;
	public $brand;
	public $model;

	public function __construct($speed = 90,
								$fuel = 10,
								$brand = 'Brand',
								$model = 'Model',
								$color = 'White') {
		$this->speed = $speed;
		$this->fuel = $fuel;
		$this->brand = $brand;
		$this->model = $model;
		$this->color = $color;
	}

	public function waktuTempuh($distance){
		$time = $distance / $this->speed;
		return $time;
	}
}

$BMW = new Car(250, 9, "BMW", "M3", "Yellow");
$Lada = new Car(110, 10, "Lad", "2101", "Yellow");
$Nissan = new Car;
$Nissan->speed = 200;

echo "waktu tempuh BMW: " . $BMW->waktuTempuh(1000);
echo "<br/> waktu tempuh Lada: " . $Lada->waktuTempuh(1000);
echo "<br/> waktu tempuh Nissan: " . $Nissan->waktuTempuh(1000);

?>