<?php
	class MyCalculator{
		private $_x, $_y;
		public function __construct($x, $y){
			$this->_x = $x;
			$this->_y = $y;
		}
		public function printX(){
			return $this->_x;
		}
		public function printY(){
			return $this->_y;
		}
		public function add(){
			return $this->_x + $this->_y;
		}
		public function multiply(){
			return $this->_x * $this->_y;
		}
	}
?>