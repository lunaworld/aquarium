<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class eventctrl extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('eventmodel');
		$this->load->helper('url_helper');
	}

	function index() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('NameEvent', 'NameEvent', 'required');
		$this->form_validation->set_rules('AgeAllow', 'AgeAllow', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('eventview');
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
                    'NameEvent' => $this->input->post('NameEvent'),
                    'ImageEvent' => $tt,
					'AgeAllow' => $this->input->post('AgeAllow'),
                    'StartDate' => $this->input->post('StartDate'),
                    'EndDate' => $this->input->post('EndDate'),
                    'StartTime' => $this->input->post('StartTime'),
                    'EndTime' => $this->input->post('EndTime'),
                    'Description' => $this->input->post('Description'),
                    'EventPrice' => $this->input->post('EventPrice'),
				);
				//Transfering data to Model
				$this->eventmodel->insert_data($data);
				$data['message'] = 'Data Inserted Successfully';
				//Loading View
				$this->load->view('eventview', $data);
			}
		}
	}
}
?>