<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model{

	protected $table = 'register';

	public function getNames($id = false){
		if ($id == false) {
			return $this->findAll();
		}else{
			return $this->getWhere(array('id'=>$id));
		}
	}

	public function getName($data){
		$query = $this->db->table($this->table)->insert($data);
		return $query;
	}

	public function updateName($data, $id){
		$query = $this->db->table($this->table)->update($data, array('id'=>$id));
		return $query;
	}

	public function deleteName($id){
		$query = $this->db->table($this->table)->delete(array('id'=>$id));
		return $query;
	}
}