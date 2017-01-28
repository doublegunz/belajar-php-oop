<?php

abstract class Publikasi {
	public $id;
	public $judul;
	public $tanggal;
	public $konten_pendek;
	public $konten;
	public $preview;
	public $penulis;
	public $tipe;

	abstract public function printItem();

	function __construct($data) {
		$this->id = $data['id'];
		$this->judul = $data['judul'];
		$this->tanggal = $data['tanggal'];
		$this->konten_pendek = $data['konten_pendek'];
		$this->konten = $data['konten'];
		$this->preview = $data['preview'];
		$this->penulis = $data['penulis'];
		$this->tipe = $data['tipe'];
	}
}


class PublikasiBaru extends Publikasi {
	public function printItem() {
		echo '<br/>News: ' .$this->judul;
		echo '<br/>Data: ' .$this->tanggal;
		echo '<hr>';
	}
}

class PublikasiArtikel extends Publikasi {
	public function printItem() {
		echo '<br/>Artikel: ' . $this->judul;
		echo '<br/>Penulis: ' . $this->penulis;
		echo '<hr>';
	}
}

class PublikasiFotoLaporan extends Publikasi {
	public function printItem() {
		echo '<br/>Foto Laporan: ' . $this->judul;
		echo '<br/><img src="http://localhost/tes2/' . $this->preview . '">';
		echo '<hr>';
	}
}

//$a = new Publikasi; //fatal error

abstract class Manusia {
	abstract public function printHello();

	public function printHelloName($nama) {
		echo '<br/>Heloo, ' . $nama;
	}
}

class Siswa extends Manusia {
	//Jika parent class tidak memiliki method argumen dan tipe datanya
	//maka, harus dijabarkan default value yang digunakan untuk menghindari error
	public function printHello($nama = '') {
		
	}
}