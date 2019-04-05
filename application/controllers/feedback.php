<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class feedbackctrl extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('feedbackmodel');
		$this->load->helper('url_helper');
	}

	function index() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('Name', 'Name', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('feedbackview');
		} else {	
			$data = array(
				'Name' => $this->input->post('Name'),
                'Content' => $this->input->post('Content'),
			);
			//Transfering data to Model
			$this->feedbackmodel->insert_data($data);
			$data['message'] = 'Data Inserted Successfully';
			//Loading View
			$this->load->view('feedbackview', $data);
		}
	}
}
?>