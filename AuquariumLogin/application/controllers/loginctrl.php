<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//location: application/controller/auth.php 
// class Auth extends CI_Controller { 
//     public function __construct() { 
//         parent::__construct(); 
//         $this->load->Model('Auth_model');
//     2
// }

class loginctrl extends CI_Controller {
	function __construct() {
		parent::__construct();
        $this->load->model('loginmodel');
        $this->load->helper('url_helper');
        $this->load->helper('form');
	}
    function index() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->load->view('loginview');
    }

    // function logout() {
    //     $this->session->sess_destroy();
    //     redirect('/' ,'refresh');
    //     exit;
    // }

    function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        //call the model for auth
        if($this->loginmodel->login($username, $password)) {
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('loginview');
            } else {
                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                );
                //Transfering data to Model
                $this->loginmodel->insert_data($data);
                $data['message'] = 'Data Inserted Successfully';
                //Loading View
                $this->load->view('loginview', $data);
            }
        } else {
            echo'username or password incorrect';
        }
    }
}
?>