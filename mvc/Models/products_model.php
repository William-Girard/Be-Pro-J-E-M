<?php
class products_model extends Model {
	
	function test() {
		$query = 'INSERT INTO `users`(`name`, `firstname`, `mail`) VALUES (:name, :first, :mail)';
		
		return $this->get_from_DB($query, ["name" => 'titi', "first" => "toto", "mail" => "toto@"],false);
	}

	function get_products(){
		
	}

	function get_product(){

	}

	function update_product(){

	}

	function delete_product(){

	}

	function add_product(){

	}
	
}