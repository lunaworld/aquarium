<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bookingadminCtrl extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('loginmodel');
        $this->load->model('categorymodel');
        $this->load->model('eventmodel');
        $this->load->helper('url_helper');
        $this->load->model('bookingmodel');
        $this->load->helper('html');
		$this->load->helper('url');


	}

	function index() {
        if($this->loginmodel->isLoggedIn()){};	
        $data['bookings'] = $this->bookingmodel->truyvanbooking();
        $data['events'] = $this->eventmodel->truyvanevent();
		$this->load->view('layout/adminheader.php');
		$this->load->view('bookingadmin', $data);
		$this->load->view('layout/adminfooter.php');
	}
}
?>