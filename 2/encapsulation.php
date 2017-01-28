<?php 
//encapsulation

class Phone {
	public function getNumberByName($name) {
		//public - access method
	}

	public function dialNumber($num) {
		//.
	}

	public function call($name) {
		//public - access to the method of any program
		$number = $this->getNumberByName($name);
		$this->dialNumber($number);
	}

	//protected - it allows you to access the current class and inherited
	//private - a member has access only to the class in which it is declared
}

$phone1 = new Phone;
$phone1->call('mariana');

?>