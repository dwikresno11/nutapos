<?php

class Kalender extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->model('kalender_model');
		$this->load->library('session');

	}

	public function index()
	{
		$user_id= $this->session->userdata('user_id');
		
		if(!$user_id){
			redirect("index.php");
		}else{
			redirect("kalender/milist");
			//if user has logged in redirecting to home page not index
		}
	}

	public function milist(){
		$user_id= $this->session->userdata('user_id');
		if(!$user_id){
			redirect("user/login_user");	
		}
		$data['page']='kalender';
		$data['subpage']='milist';
		$this->load->view('index.php',$data);
	}

	public function milistByDivisi(){
		$user_id= $this->session->userdata('user_id');
		//get session
		if(!$user_id){
			redirect("user/login_user");	
		}//if user id not login yet
		$data['page']='kalender';
		$data['subpage']='milistByDivisi';
		$this->load->view('index.php',$data);
	}

	public function getMilist($jenisRelasi){
		$data['milist']=$this->kalender_model->getAllMilist($jenisRelasi);
		echo json_encode($data['milist']);
	}

	public function getMilistByDivisi(){
		$divId= $this->session->userdata('div_id');
		$data['milistByDivisi']=$this->kalender_model->getAllMilistByDivisi($divId);
		echo json_encode($data['milistByDivisi']);
	}

	public function getKirimMilist($divId,$milistId){
		$data['listkirim']=$this->kalender_model->getAllKirimByMilistID($divId,$milistId);
		echo json_encode($data['listkirim']);
	}

	public function getJenisRelasi($milistId){
		$data['jenisCutomer']=$this->kalender_model->getJenisRelasi($milistId);
		echo json_encode($data['jenisCutomer']);
	}

	public function getKirimJumlah($divId,$milistId){
		$data['kirimjumlah']=$this->kalender_model->getKirimJumByDivisi($divId,$milistId);
		echo json_encode($data['kirimjumlah']);
	}

	public function updateJumlahKirim($milistId,$divId,$jumlah,$gudangId=null,$dikirimoleh=null){
		echo $this->kalender_model->update_kirim_jumlah($milistId,$divId,$jumlah,$gudangId,$dikirimoleh);
	}

	public function insertKirim($milistId,$divId,$jumlah,$gudangId=null,$dikirimoleh=null){
		echo $this->kalender_model->insert_kirim($milistId,$divId,$jumlah,$gudangId,$dikirimoleh);
	}

	public function print_label($gudang,$sales){
		$user_id= $this->session->userdata('user_id');
		if(!$user_id){
			$this->load->view('503.html');
		}else{
			$data['query']=$this->kalender_model->printkirim($gudang,$sales);
			$this->load->view("printkirimPDF.php",$data);
		}
	}

	public function getAllListGudang(){
		$data['gudang']=$this->kalender_model->allListGudang();
		echo json_encode($data['gudang']);
	}
	
	public function getAllListPegawai(){
		$data['pegawai']=$this->kalender_model->allListPegawai();
		echo json_encode($data['pegawai']);
	}
}

?>