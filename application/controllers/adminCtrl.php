<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminCtrl extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url_helper');
	}

	function index() {
		$data['var1'] = '';
		$this->load->view('layout/adminheader.php', $data);
		$this->load->view('layout/adminfooter.php', $data);
	}
}
?>