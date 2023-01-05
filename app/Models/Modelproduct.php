<?php
namespace App\Models;

use CodeIgniter\Model;
class Modelproduct extends Model{
	function __construct()
	{
		$this->db = db_connect();
	}
	function tampildata(){
		return $this->db->table('products')->get();
	}
function simpan($save){
return $this->db->table('products')->insert($save);

}
function deletedata($stock){
	return $this->db->table('products')->delete(['stock' => $stock]);
}
function ambildata($stock){
		return $this->db->table('products')->getWhere(['stock' => $stock]);

}
function editdata($data, $name){
	return $this->db->table('products')->update();
}


}