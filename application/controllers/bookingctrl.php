<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bookingctrl extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('loginmodel');
		$this->load->model('bookingmodel');
		$this->load->helper('url_helper');
		$this->load->helper('html');
		$this->load->helper('url');
	}

	function index() {
		$this->load->view('layout/header');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('IDEvent', 'IDEvent', 'required');
		$this->form_validation->set_rules('NameCustomer', 'NameCustomer', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('bookingview');
		} else {
			// $image_path = realpath(APPPATH . '/');
			// $config['upload_path']          = $image_path;
            // $config['allowed_types']        = '*';
                
            // $this->load->library('upload', $config);
			// $tt = '1';
            // if ( ! $this->upload->do_upload('file_hinh')) {
			// 	echo "validet";
			// 	$tt='0';
			// 	$error = array('error' => $this->upload->display_errors());
			// 	print_r($error);      
            // } else {
			// 	$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
			// 	echo $tt;
			// 	$tt = $upload_data['file_name'];
			// 	echo $tt;
			// }
			//Setting values for tabel columns
			$tt = 1;
			if($tt != '0') {	
				$data = array(
					'IDEvent' => $this->input->post('IDEvent'),
                    'NameCustomer' => $this->input->post('NameCustomer'),
                    // 'ImageCustomer' => $tt,
					'Phone' => $this->input->post('Phone'),
					'Mail' => $this->input->post('Mail'),
                    // 'StartDate' => $this->input->post('StartDate'),
                    // 'EndDate' => $this->input->post('EndDate'),
                    // 'StartTime' => $this->input->post('StartTime'),
                    // 'EndTime' => $this->input->post('EndTime'),
                    'Address' => $this->input->post('Address'),
                    'Note' => $this->input->post('Note'),
				);
				//Transfering data to Model
				$this->bookingmodel->insert_data($data);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				$this->load->view('bookingview', $data);
			}
		}
		$this->load->view('layout/footer');
	}
}
?>