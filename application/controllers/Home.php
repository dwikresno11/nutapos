<?php
class Home extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('transaksi_model');
	}

	function index(){
		$data['data']=$this->transaksi_model->get_all_produk();
		$this->load->view('index',$data);
	}

	function add_to_cart(){ //fungsi Add To Cart
		$data = array(
			'id' => $this->input->post('produk_id'), 
			'name' => $this->input->post('produk_nama'), 
			'price' => $this->input->post('produk_harga'), 
			'qty' => $this->input->post('quantity'), 
		);
		$this->cart->insert($data);
		echo $this->show_cart(); //tampilkan cart setelah added
	}

	function show_cart(){ //Fungsi untuk menampilkan Cart
		$output = '';
		$no = 0;
		foreach ($this->cart->contents() as $items) {
			$no++;
			$output .='
			<tr>
			<td>'.$items['name'].'</td>
			<td>'.number_format($items['price']).'</td>
			<td>'.$items['qty'].'</td>
			<td>'.number_format($items['subtotal']).'</td>
			<td><button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
			</tr>
			';
		}
		$output .= '
		<tr>
		<th colspan="3">Total</th>
		<th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
		</tr>
		';
		return $output;
	}

	function get_all_data(){ //load data cart
		$TempDetailPenjualan=array();
		foreach ($this->cart->contents() as $items) {
			$data['Item']		 = $items['name'];
			$data['Qty'] 		 = $items['qty'];
			$data['HargaSatuan'] = $items['price'];
			$data['SubTotal']	 = $items['subtotal'];
			array_push($TempDetailPenjualan,$data);
		}

		$DataPenjualan = array(
			'TransactionID' 	=> 0,
			'Tanggal' 			=> $this->input->post('tanggal'),
			'Jam' 				=> $this->input->post('jam'), 
			'NamaPelanggan' 		=> $this->input->post('nama'), 
			'Total' 			=> $this->cart->total(),
			'BayarTunai' 		=> $this->input->post('bayar'),
			'Kembali' 			=> $this->input->post('kembali'),
			'TglJamUpdate' 		=> date("Y-m-d H:i:s"), 
			// 'DetailPenjualan' 	=> $DetailPenjualan, 
		);
		// $this->db->set('TglJamUpdate', 'NOW()', FALSE);
		// $DetailPenjualan['TransactionID']="123123123";
		// echo json_encode($DetailPenjualan);
		// // $this->db->insert_string('penjualan',$DataPenjualan);
		// $this->session->set_userdata("DataPenjualan",$DataPenjualan);
		// $this->session->set_userdata("DetailPenjualan",$DetailPenjualan);
		var_dump($this->transaksi_model->insert_penjualan($DataPenjualan,$TempDetailPenjualan));
		echo json_encode($this->session->userdata("DetailPenjualan"));
		// $DetailPenjualan=$this->session->userdata("DetailPenjualan");
		// // foreach ($DetailPenjualan['detail'] as $value) {
		// // 	var_dump($value['Item']);
		// // }

		// echo count($DetailPenjualan['detail']);
	}

	function load_cart(){ //load data cart
		echo $this->show_cart();
	}

	function hapus_cart(){ //fungsi untuk menghapus item cart
		$data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => 0, 
		);
		$this->cart->update($data);
		echo $this->show_cart();
	}


}

?>