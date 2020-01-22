<?php
defined('BASEPATH') or exit ('No direct script alalowed');

class Produk extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_produk");
		$this->load->model("M_golongan");
		$this->load->model('M_kemasan');
        $this->load->library('form_validation');
	}
	function index(){
		$data["golongan"] = $this->M_golongan->getAll();
		$data["kemasan"] = $this->M_kemasan->getAll();
		$data["produks"] = $this->M_produk->getAllProduk();
		$this->load->helper('url');		
		$this->load->view('v_produk',$data);
	}

	function insert(){
		$product = $this->M_produk;		
		$data["golongans"] = $this->M_golongan->getAll();
		$data["kemasan"] = $this->M_kemasan->getAll();
		$data["produks"] = $this->M_produk->getAllProduk();
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules($product->rules());
                if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('v_produk_insert',$data);
                }	else {
                	$product->save();
                	$this->load->view("v_produk");
                }	
	}

	function update(){
		$product = $this->M_produk;		
		$data["golongans"] = $this->M_golongan->getAll();
		$data["kemasan"] = $this->M_kemasan->getAll();
		$data["produks"] = $this->M_produk->getAllProduk();
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules($product->rules());
                if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('v_produk_insert',$data);
                }	else {
                	$product->save();
                	$this->load->view("v_produk");
                }
	}
}