<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Modelproduct;
class Product extends BaseController
{
	public function index2(){
		$mp = new Modelproduct();
		$data = ['tampildata' => $mp->tampildata()->getResult()];
			echo View('viewtampilproduct', $data);
	}
public function adddata(){
			helper('form');
			echo View('viewtambahdata');
	}
	public function simpandata(){
			$data = [
				'name' => $this->request->getpost('name'),
				'price' => $this->request->getpost('price'),
				'stock' => $this->request->getpost('stock')
	];
		$mp = new Modelproduct();

		$save = $mp->simpan($data);

		if($save){
			return redirect()->to('/list');
		}
}
public function deletedata(){
	$uri = service('uri');
	$name = $uri->getSegment('3');

		$mp = new Modelproduct();

		$mp->deletedata($name);
		return redirect()->to('/list');
}

 public function formedit(){
 	helper('form');
$uri = service('uri');
	$name = $uri->getSegment('3');
 			$mp = new Modelproduct();

 			$ambildata = $mp->ambildata($name);
if (count($ambildata->getResult()) > 0){
	$row = $ambildata->getRow();
	$data = [
		'name' => $row->name,
		'price' => $row->price,
		'stock' => $row->stock
	];
	echo View('viewformedit',$data);
 }
}
public function updatedata(){
	$name = $this->request->getpost('name');

	$data = [
		'price' => $this->request->getpost('price'),
		'stock' => $this->request->getpost('stock')
	];

	 			$mp = new Modelproduct();
$simpan = $mp->editdata($data, $name);
if ($simpan){
	return redirect()->to('/list');
}
}
}


