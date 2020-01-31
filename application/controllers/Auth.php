<?php
defined('BASEPATH') or exit('No Direct script allowed');

class Auth extends CI_Controller{

	public function __Construct()
	{
		parent::__Construct();
		$this->load->model('Auth_model');
	}

	public function index()
    {
            $this->load->view('v_login');
    }
         
        public function logout(){
            $this->session->sess_destroy();
            redirect('/' ,'refresh');
            exit;
        }
         
        public function login(){
            $username =  $this->input->post('username');
            $password =  $this->input->post('password');
             
            //call the model for auth
            if( $this->Auth_model->login($username, $password)==1){
            	echo "SUKSES";
            }else{
            	echo "GAGAL";
            }
        }
}