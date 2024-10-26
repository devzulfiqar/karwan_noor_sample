<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {

    //Validating login
	function __construct() {
		parent::__construct();
		if($this->session->userdata('uid'))
		redirect('dashboard');
	}

    public function index() {

        //Validation for login form
        $this->form_validation->set_rules('emailid','Email id','required|valid_email');
        $this->form_validation->set_rules('password','Password','required');
        
        if($this->form_validation->run()) {
            $email=$this->input->post('emailid');
            $password=$this->input->post('password');
            
            $this->load->model('Signin_Model');
            $validate=$this->Signin_Model->index($email,$password);

            if($validate){
                $this->session->set_userdata('uid',$validate->userid);	
                $this->session->set_userdata('fname',$validate->firstname);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('error','Invalid login details.Please try again.');
                redirect('signin');
            }
        }
        else
        {
            $this->load->view('admin_login');	
        }
    }
}