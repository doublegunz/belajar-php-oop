<?php 
//product

class Produk {
	public function setPrice($price) {	
		try {
			//set price in db
		} catch (DbException $e) {
			$this->logError($e->getMessage());
		}
	}

	public function logError($error) {
		//save error message
	}
}

$produk = new Produk;
$produk->setPrice(10);



//logger
class Logger {
	public function log($message) {
		//...
		$this->saveToFile($message);
	}
}

class Produk {
	private $logger;

	public function __construct(Logger $logger) {
		$this->logger = $logger;
	}

	public function setPrice($price) {
		try {
			//save price in db
		} catch (DbException $e) {
			$this->logger->log($e->getMessage());
		}
	}
}

$logger = new Logger();
$produk = new Produk($logger);
$produk->setPrice(10);
?>