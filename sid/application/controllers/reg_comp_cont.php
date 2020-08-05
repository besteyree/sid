<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class reg_comp_cont extends CI_Controller{
	public function index(){
		$this->load->view('main_view');
	}

	public function reg_insert_comp(){
		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('comp_name', 'comp_name', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('reg_model');

			$CompName = $this->input->post('comp_name');
			$Email = $this->input->post('email');
			$Password = $this->input->post('password');
			
			$data = array(
				'comp_name' => $CompName,
				'email' => $Email,
				'password' => $Password,
				 );

				$this->reg_model->insert_data($data);



				$this->load->view('login_view');


				//$this->session->set_userdata($data);

		}else{
				echo "Error Eta";
			}
	}
}
?>