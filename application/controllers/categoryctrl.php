<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categoryctrl extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('categorymodel');
		$this->load->helper('url_helper');
	}

	function index() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('CategoryName', 'CategoryName', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('categoryview');
		} else {
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
			//Setting values for tabel columns
			if($tt != '0') {	
				$data = array(
					'CategoryName' => $this->input->post('CategoryName'),
                    'SpeciesInfomaton' => $this->input->post('SpeciesInfomaton'),
                    'ImageCategory' => $tt,
				);
				//Transfering data to Model
				$this->categorymodel->insert_data($data);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				$this->load->view('categoryview', $data);
			}
		}
	}
}
?>