<?php 
	
	abstract class Car {
		protected $model;
		protected $color;
		protected $number;

		public function __construct() {
			$this->color = 'red';
		}

		public function getColor() {
			return $this->color;
		}
	}

	class Auto extends Car {
		
	}
?>