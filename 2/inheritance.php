<?php 
//inheritance

class Kendaraan {
	public $warna;
	public $kecepatan;
	public $merek;

	public function waktuTempuh($jarak) {
		return $jarak / $this->kecepatan;
	}

	final public function smth() {
		// final method yang tidak bisa di-override oleh child class
	}
}

final class Truck {
	//Final class yang tidak bisa diwariskan
}

class Sepeda extends Kendaraan {
	public $tipe;
	public $warna = "Putih";
	const KALORI_PER_JAM = 500;

	public function bakarKalori($jarak) {
		$waktu = $this->waktuTempuh($jarak);
		$kalori = self::KALORI_PER_JAM * $waktu;
		return $kalori;
	}

	//overriding
	public function waktuTempuh($jarak) {
		return parent::waktuTempuh($jarak) * 1.2;
	}
}

class Mobil extends Kendaraan {
	public $bensin;
	public $warna = 'Kuning';

	public function konsumsiBensin($jarak) {
		return ($this->bensin * $jarak) / 100;
	}
}

$mobil1 = new Mobil;
$mobil1->kecepatan = 110;
$mobil1->bensin = 12;

$mobil2 = new Mobil;
$mobil2->kecepatan = 130;
$mobil2->bensin = 14;

$sepeda = new Sepeda;
$sepeda->kecepatan = 20;

$jarak = 300;

echo "waktu Mobil 1: ". $mobil1->waktuTempuh($jarak). "<br/>";
echo "waktu Mobil 2: ". $mobil2->waktuTempuh($jarak). "<br/>";
echo "waktu sepeda: ". $sepeda->waktuTempuh($jarak). "<br/>";

echo "<br/>";

echo "Konsumsi bahan bakar mobil 1: ". $mobil1->konsumsiBensin($jarak). "<br/>";
echo "Konsumsi bahan bakar mobil 2: ". $mobil2->konsumsiBensin($jarak). "<br/>";
echo "bakar kalori pada sepeda : ". $sepeda->bakarKalori($jarak). "<br/>";