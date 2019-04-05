<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {
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
		$this->load->view('layout/header');
<<<<<<< HEAD
		$this->load->view('gallery');
=======
		// $this->load->view('welcome_message');
		
		//Table Animal
		$IDAnimal = 3;
		$t1 = $this->animalmodel->truyvanidanimal($IDAnimal);
		print_r($t1);
		$IDCategory = 1;
		$t2 = $this->animalmodel->truyvanidcategory($IDCategory);
		print_r($t2);
		//Table Booking
		$IDBooking = 3;
		$t3 = $this->bookingmodel->truyvanidbooking($IDBooking);
		print_r($t3);
		$IDEvent = 1;
		$t4 = $this->bookingmodel->truyvanidevent($IDEvent);
		print_r($t4);
		//Table Category
		$IDCategory = 1;
		$t5 = $this->categorymodel->truyvanidcategory($IDCategory);
		print_r($t5);
		//Table Event
		$IDEvent = 1;
		$t6 = $this->eventmodel->truyvanidevent($IDEvent);
		print_r($t6);
		//Table Feedback
		$IDFeedback = 1;
		$t7 = $this->feedbackmodel->truyvanidfeedback($IDFeedback);
		print_r($t7);

>>>>>>> 4e7a98f6d084a7a4c46dc07adf62459f75de69cb
		$this->load->view('layout/footer');
	}
}
