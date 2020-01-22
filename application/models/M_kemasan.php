<?php
defined('BASEPATH') or exit ('No direct script allowed');

class M_kemasan extends CI_Model{
	private $_table = "kemasan";
	public $id;
	public $namakemasan;

	public function getAll(){
		 return $this->db->get($this->_table)->result();
	}
}