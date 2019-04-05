<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categoryctrl extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('categorymodel');
		$this->load->helper('url_helper');
		$this->load->helper('ckeditor_helper');

        //Ckeditor's configuration
        $this->data['ckeditor'] = array(
            'id' => 'content',
            'path' => 'js/ckeditor',
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "550px", //Setting a custom width
                'height' => '100px', //Setting a custom height

            ),
            'styles' => array(
                'style 1' => array(
                    'name' => 'Blue Title',
                    'element' => 'h2',
                    'styles' => array(
                        'color' => 'Blue',
                        'font-weight' => 'bold'
                    )
                ),
                'style 2' => array(
                    'name' => 'Red Title',
                    'element' => 'h2',
                    'styles' => array(
                        'color' => 'Red',
                        'font-weight' => 'bold',
                        'text-decoration' => 'underline'
                    )
                )
            )
        );
	}

	function index() {
		$this->load->library('CKEditor');
        $this->load->library('CKFinder');

        //Add Ckfinder to Ckeditor
        $this->ckfinder->SetupCKEditor($this->ckeditor,'../../assets/ckfinder/'); 
		$this->load->view('layout/adminheader.php');
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
		$this->load->view('layout/adminfooter.php');
	}
}
?>