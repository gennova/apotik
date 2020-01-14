<?php
defined('BASEPATH') or exit ('No direct script alalowed');

class Produk extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->load->helper('url');
		$this->load->view('v_produk');
	}

	function insert(){
		$this->load->view('v_produk_insert');
	}
}