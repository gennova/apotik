<?php
defined('BASEPATH') or exit ('No direct script allowed');

class M_katpembeli extends CI_Model{
	function kat_pembeli_list(){
		$hasil=$this->db->get('kategoripembeli');
		return $hasil->result();
	}


	function save(){
		$data = array(				
				'namakategori' 			=> $this->input->post('namakategori'), 
				'infokategori' 			=> $this->input->post('infokategori'), 
				'marginresep' 			=> $this->input->post('marginresep'), 
				'marginnonresep' 			=> $this->input->post('marginnonresep'), 
			);
		$result=$this->db->insert('kategoripembeli',$data);
		return $result;
	}

	function update(){
		$id=$this->input->post('id');
		$namakategori=$this->input->post('namakategori');
		$infokategori=$this->input->post('infokategori');
		$marginresep=$this->input->post('marginresep');
		$marginnonresep=$this->input->post('marginnonresep');
		$this->db->set('namakategori', $namakategori);
		$this->db->set('infokategori', $infokategori);
		$this->db->set('marginresep', $marginresep);
		$this->db->set('marginnonresep', $marginnonresep);
		$this->db->where('id', $id);
		$result=$this->db->update('kategoripembeli');
		return $result;	
	}
	function delete(){
		$id=$this->input->post('id');
		$this->db->where('id', $id);
		$result=$this->db->delete('kategoripembeli');
		return $result;
	}	
}