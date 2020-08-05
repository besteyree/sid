<?php
/**
 * 
 */
class login_cont extends CI_Controller{
	
	public function index(){
		$this->load->view('login_view');
	}

	public function fetch_data(){
		$this->load->model('reg_model');

		$this->load->library('form_validation');

		$this->form_validation->set_rules('comp_name','comp_name','trim|required');
    $this->form_validation->set_rules('email','email','trim|required');
    $this->form_validation->set_rules('password','password','trim|required');

		$data = array(
			'comp_name'=>$this->input->post('comp_name'), 
      'email' =>$this->input->post('email'),
      'password'  =>$this->input->post('password')
            );

      	if ($this->form_validation->run()) {
      		$this->reg_model->fetch_data($data);
      		
      		// if(count($dat)>0){
        //          $sessiondata=array(                     
        //             'comp_name' => $dat[0]->comp_name,
        //             'email' => $dat[0]->email,   
        //             'password' => $dat[0]->password,);
        //          $this->session->set_userdata($sessiondata);
        //          $this->load->swf_viewport(xmin, xmax, ymin, ymax)('home');
        //     }else{
	      		echo "Company is Login";
	      		//$this->load->view('dashboard');
      		//}
      	}else{
      		echo "Error login";
      	}
	}

}
?>