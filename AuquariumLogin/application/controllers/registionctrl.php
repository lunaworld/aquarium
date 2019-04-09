<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registionctrl extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('registionmodel');
		$this->load->helper('url_helper');
	}
    function index() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('registionview');
		} else {
			//Setting values for tabel columns
			$image_path = realpath(APPPATH . '/');
			$config['upload_path']          = $image_path;
            $config['allowed_types']        = '*';
                
            $this->load->library('upload', $config);
			$tt = '1';
            if ( ! $this->upload->do_upload('file_hinh')) {
				echo "validet";
						$tt='0';
						$error = array('error' => $this->upload->display_errors());
						print_r($error);      
            } else {
					
				$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
				echo $tt;
				$tt = $upload_data['file_name'];
				echo $tt;
			}
			if($tt !='0') {	
				$data = array(
					'Name' => $this->input->post('Name'),
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'Email' => $this->input->post('Email'),
					'ImageUser' => $tt,
				);
				//Transfering data to Model
				$this->registionmodel->insert_data($data);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				$this->load->view('registionview', $data);
			}
		}
    }
}
?>