<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this->load->view('template/header');
		// $this->load->view('template/sidebar');
		// $this->load->view('template/navbar');		
		// $this->load->view('template/edit_user');
		// $this->load->view('template/footer');
	}

	public function tambahAdmin(){
		$this->load->model('Model');
		$data = array();
		
		if(!$this->input->post()){
			$return = array(
				'status' => 'failed',
				'text' => '',
				'page' => '',
			);
			echo json_encode($return);
			exit();
		}

		if($this->input->post('password', true) != $this->input->post('konfirmasipassword', true)){
			$return = array(
				'status' => 'failed',
				'text' => '',
				'page' => '',
			);
			echo json_encode($return);
			exit();
		}

		$cek = $this->Model->get(array('username' => $this->input->post('username', true)), 'tb_user');

		if($cek->num_rows() != 0){
			$return = array(
				'status' => 'failed',
				'text' => '',
				'page' => '',
			);
			echo json_encode($return);
			exit();
		}

		$dataToSave = array(
			'username' => $this->input->post('username', true),
			'nama' => $this->input->post('nama', true),
			'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
		);
		$save = $this->Model->save($dataToSave, 'tb_user');
		if($save){
			$return = array(
				'status' => 'failed',
				'text' => '',
				'page' => '',
			);
		}else{
			$return = array(
				'status' => 'failed',
				'text' => '',
				'page' => '',
			);
		}

		echo json_encode($return);
	}
}
