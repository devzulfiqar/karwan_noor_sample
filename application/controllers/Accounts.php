<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends CI_Controller {

    function  __construct(){
        parent::__construct();
        
        if(!$this->session->userdata('uid'))
		redirect('signin');
    
        // Load member model
        $this->load->model('account');
    }

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('accounts/index');
		$this->load->view('layout/footer');
	}

    function getLists(){
        $data = $row = array();
        
        // Fetch Account's records
        $accountsData = $this->account->getRows($_POST);
        
        $i = $_POST['start'];
        foreach($accountsData as $account){
            $i++;
            $created = date( 'jS M Y', strtotime($account->Created_at));
            $updated = date( 'jS M Y', strtotime($account->Updated_at));
            $status = ($account->Status == 1)?'Active':'Inactive';
            $data[] = array($i, $account->AccountTitle, $account->AccountType, $account->OpeningBalance, $account->CreditLimit, $account->Address, $account->City, $account->Phone, $created, $updated, $status);
        }
        
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->account->countAll(),
            "recordsFiltered" => $this->account->countFiltered($_POST),
            "data" => $data,
        );
        
        // Output to JSON format
        echo json_encode($output);
    }
}