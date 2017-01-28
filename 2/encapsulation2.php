<?php 

class Base {
	public $a = 'public';
	protected $b = 'protected';
	private $c = 'private';

	function dump() {
		echo $this->a, "\n",
			 $this->b, "\n",
			 $this->c, "\n";
	}
}

$obj = new Base;

//echo $obj->a, "\n";
//echo $obj->b, "\n";
//echo $obj->c, "\n";

//$obj->dump();


class Inherited extends Base {
	function printProp() {
		echo $this->a, "\n",
			 $this->b, "\n",
			 $this->c, "\n";
	}
}

$obj2 = new Inherited;

echo $obj2->a, "\n"; //working
echo $obj2->b, "\n"; //fatal error
echo $obj2->c, "\n"; //undefined 

$obj2->printProp();

?>