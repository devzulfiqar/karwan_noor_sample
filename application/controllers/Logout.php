<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
//Function for logout
public function index(){
$this->session->unset_userdata('uid');
$this->session->sess_destroy();
return redirect('signin');
}
}