<?php
defined('BASEPATH') or exit ('No Direct script allowed');
class Supplier extends CI_Controller{

	function index(){		
		$this->load->view('home');
	}

	function input(){
		$this->load->view('inputpaket');
	}

	function logout(){
		$array_items = array('username', 'email','logged_in');
		$this->session->unset_userdata($array_items);
		redirect(base_url(''));
	}
}