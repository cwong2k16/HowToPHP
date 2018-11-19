<?php
	Class Person{
		private $id, $f, $l, $email, $country, $ip;
		public function __construct($id, $f, $l, $email, $country, $ip){
			$this->id = $id;
			$this->f = $f;
			$this->l = $l;
			$this->email = $email;
			$this->country = $country;
		}
		public function greet(){
			return "Hello I am " . $this->f . " " . $this->l . " " . "I am from " . $this->country;
		}
	}
?>