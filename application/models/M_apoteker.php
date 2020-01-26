<?php
class M_apoteker extends CI_Model{

	function employeeList(){
		$hasil=$this->db->get('apoteker');
		return $hasil->result();
	}


	function saveEmp(){
		$data = array(				
				'nojasa' 			=> $this->input->post('nojasa'), 
				'namajasa' 			=> $this->input->post('namajasa'), 
				'nominal' 			=> $this->input->post('nominal'), 
				'status' 			=> $this->input->post('status'), 
				'keterangan' 		=> $this->input->post('keterangan'), 
			);
		$result=$this->db->insert('apoteker',$data);
		return $result;
	}
	
	function updateEmp(){
		$id=$this->input->post('id');
		$name=$this->input->post('name');
		$age=$this->input->post('age');
		$designation=$this->input->post('designation');
		$skills=$this->input->post('skills');
		$address=$this->input->post('address');
		$this->db->set('name', $name);
		$this->db->set('age', $age);
		$this->db->set('designation', $designation);
		$this->db->set('skills', $skills);
		$this->db->set('address', $address);
		$this->db->where('id', $id);
		$result=$this->db->update('emp');
		return $result;	
	}
	function deleteEmp(){
		$id=$this->input->post('id');
		$this->db->where('id', $id);
		$result=$this->db->delete('emp');
		return $result;
	}	
}