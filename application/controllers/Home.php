<?php
class Home extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->model('gudang_model');
		$this->load->library('session');

	}

	public function index(){
		$user_id= $this->session->userdata('user_id');
		if(!$user_id){
			redirect("user/login_user");	
		}else{
			$data['page']="home";
			$data['subpage']="home";
			$this->load->view("index.php",$data);
		}
	}

	public function getGudangCabang(){
		$data['gudang_cabang']=$this->gudang_model->getGudangCabang();
		echo json_encode($data['gudang_cabang']);
	}

	public function getGudangPusat(){
		$data['gudang_pusat']=$this->gudang_model->getGudangPusat();
		echo json_encode($data['gudang_pusat']);
	}
}

?>