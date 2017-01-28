<?php 

interface Kendaraan {
	public function info();
}

interface Mobil extends Kendaraan {
	public function drive();
}

interface Perahu extends Kendaraan {
	public function berenang();
}

class Audi implements Mobil {
	public function info() {
		echo '<br/>Audi adalah manufaktur automobile dari jerman';
	}

	public function drive() {
		echo '<br/>Audi drives!';
	}
}

$audi_a3 = new Audi;
$audi_a3->info();
$audi_a3->drive();

class MersedesAmpibi implements Mobil, Perahu {
	public function info() {
		echo '<br/>Mersedes adalah manufaktur automobile dari jerman';
	}

	public function drive() {
		echo '<br/>Mersedes drives';
	}

	public function berenang() {
		echo '<br/>Mersedes berenang!';
	}
}

$MersedesAmpibi1 = new MersedesAmpibi;
$MersedesAmpibi1->info();
$MersedesAmpibi1->drive();
$MersedesAmpibi1->berenang();
?>