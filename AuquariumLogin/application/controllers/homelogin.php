<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller { 
    public function __construct() { 
        parent::__construct(); 
        $this->load->model('loginmodel');
    }
    
    function index() {
        //check user logged in or not
        $this->loginmodel->isLoggedIn();
        $this->load->view('Home');
    }
}   
?>