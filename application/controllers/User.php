<?php

class User extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
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


	public function login_user(){
		// $data['page']="login";
		$user_id= $this->session->userdata('user_id');
		//get session and set to variable user id
		if($user_id){
			redirect('home', 'refresh');
			//if user has logged in cannot access this page 
		}
		// var_dump($this->input->post('username'));
		if($this->input->post('username')!= NULL){
			//if user already input some data for login
			$user_login=array(
				'user'=>$this->input->post('username'),
				'pass'=>$this->input->post('password')
			);//get request and set to array

			$dataquery=$this->user_model->login_user($user_login['user'],$user_login['pass']);
			//get query model with parameter from array at above of this script
			if($dataquery->num_rows()==1)
			{//if data found
				foreach ($dataquery->result() as $sess) {
					$this->session->set_userdata('user_id',$sess->username);
					$this->session->set_userdata('user_name',$sess->username);
					$login_akses=$this->user_model->login_akses($sess->username);
					// var_dump($login_akses);
					$this->session->set_userdata('akses',$login_akses);
				}//set some data to session
				redirect("kalender/milist");
				//after that redirecting to home page
			}else{
				//if data not found 
				$data['page']="login";
				$data['subpage']="login";
				$this->session->set_flashdata('error_msg', 'Username atau password salah. Harap Coba Lagi.');
				$this->load->view("index.php",$data);

			}
		}else{
			$data['page']="login";
			$data['subpage']="login";
			$this->load->view("index.php",$data);
		}
	}

	public function user_profile(){
		//
		$user_id= $this->session->userdata('user_id');
		if(!$user_id){
			$this->load->view('503.html');
		}else{
			$data['page']='user';
			$data['subpage']='profile';
			$this->load->view('index.php',$data);
		}
	}

	public function update_password($user_no_peg,$password){
		$user_id= $this->session->userdata('user_id');
		if(!$user_id){
			$this->load->view('503.html');
		}else{
			$this->user_model->update_password($user_no_peg,$password);
			$this->session->sess_destroy();
			redirect("user/login_user");
		}
	}

	public function manage_user()
	{
		$user_id= $this->session->userdata('user_id');
		if(!$user_id){
			redirect("index.php");
		}else{
			$data['page']='user';
			$data['subpage']='manage_user';
			$this->load->view('index.php',$data);
		}
	}

	public function getUser(){
		$data['user']=$this->user_model->allUser();
		echo json_encode($data['user']);
	}

	public function listAkses($pegNoReg){
		$data['akses']=$this->user_model->login_akses($pegNoReg);
		echo json_encode($data['akses']);
	}
	public function userlogout(){
		$this->session->sess_destroy();
		$data['page']="login";
		$data['subpage']="login";
		redirect('user/login_user', 'refresh');
		// $this->load->view("index.php",$data);
	}

	public function addUser($pegNoReg){
		$data['akses']=$this->user_model->add_user($pegNoReg);
		echo $data['akses'];
	}

	public function allPegawaiNotInUser(){
		$data['user']=$this->user_model->pegawaiNotInUser();
		echo json_encode($data['user']);
	}

	public function updateAkses($pegNoReg){
		$data['user']=$this->user_model->updateAkses($pegNoReg);
		echo $data['user'];
	}

}

?>