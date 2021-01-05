<?php
class connectionDB{
	public function con(){

		$conn = new mysqli('localhost','root','','projcom');

		if(!$conn){
			die("Error Connect Database");
		}

		return $conn;
	}
}