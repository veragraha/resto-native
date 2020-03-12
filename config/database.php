<?php

class database{
	private $db = [
		'host' =>'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'restovera'
	];

	public function data (){
		return $this->db; 
	}
}