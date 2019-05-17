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
		$this->load->model('hire_model');
	}


	public function index()
	{
		$this->load->view('homepage');
	}

	public function form_hire()
	{
		$errors = array(); // array to hold validation errors
		$data = array();   // array to pass back data

		// validate the variables ================================================
		// if any of these variables don't exist, add an error to our $errors array

		if(empty($this->input->post('name'))){
			$errors['name'] = 'Name is required.';
		}

		if(empty($this->input->post('email'))){
			$errors['email'] = 'email is required.';
		}

		if(empty($this->input->post('message'))){
			$errors['message'] = 'message is required.';
		}

		// return a response =====================================================
		// if there are any errors in our errors array, 
		// return a success boolean of false

		if(!empty($errors)){

			//if there are items in our errors array, return those errors
			$data['success'] = false;
			$data['errors'] = $errors;

		} else{

			// if there are no errors process our form, then return a message

			$data_hire = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'subject' => $this->input->post('subject'),
				'message' => $this->input->post('message')
			);

			$this->hire_model->insert_entry($data_hire);
			$data['success'] = true;
			$data['errors'] = 'success';
		}
		echo json_encode($data);
	}

	public function xyzxyz()
	{
		$data = $this->hire_model->get_last_ten_entries();
		$this->load->view('data_table', $data);
	}
}
