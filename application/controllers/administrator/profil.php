<?php 

class Profil extends CI_Controller{
	public function index(){
		$id = $this->session->userdata("idadmin");
		if($id!=null){
		$this->load->model('main_model');
		$data['admin'] = $this->main_model->get_admin_where(["id"=>$id]);
		$this->load->view('template/header');
		$this->load->view('administrator/sidebar');
		$this->load->view('administrator/profil', $data);
		$this->load->view('template/footer');
		}else{
			redirect("login_controller/index");
		}
	}
}