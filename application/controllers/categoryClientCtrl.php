<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class categoryClientCtrl extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('animalmodel');
		$this->load->model('bookingmodel');
		$this->load->model('categorymodel');
		$this->load->model('eventmodel');
		$this->load->model('feedbackmodel');
		$this->load->helper('html');
		$this->load->helper('url');
	}

	public function index() {
		$data['category'] = $this->categorymodel->truyvancategory();
		$this->load->view('layout/header');
		$this->load->view('category',$data);
		$this->load->view('layout/footer');
	}
}
