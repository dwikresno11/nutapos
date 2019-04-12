<?php
class Transaksi_model extends CI_model{

  public function __construct()
  {
    parent::__construct();
    $this->default = $this->load->database('default', TRUE);
    $this->load->library('session');
  }

  function get_all_produk(){
    $hasil=$this->default->query("SELECT * FROM masteritem LIMIT 10");
    return $hasil->result();
  }

  function insert_penjualan($DataPenjualan,$TempDetailPenjualan){
    if($this->session->has_userdata('DetailPenjualan')){
      //check apakah masih ada data terakhir
      $DetailPenjualan = $this->session->userdata("DetailPenjualan");
      $TransactionID = $DetailPenjualan['TransactionID'];
      $count_detail_database = count($this->default->get_where("penjualandetil",array('TransactionID'=>$TransactionID)));
      ///check jumlah data di database
      $count_detail_session = count($DetailPenjualan['detail']);
      // check jumlah data di session
      if($count_detail_database==$count_detail_session){
        //cek apa jumlah data sama klo sama berati data sudah masuk semua
        $this->session->unset_userdata("DetailPenjualan");
      }else{
        //kalo belum 
        $this->default->delete('penjualandetil', array('TransactionID' => $TransactionID));
        // $this->default->delete_string('penjualandetil', array('TransactionID' => $TransactionID)); 
        // berart hapus semua detail dengan id yg terakhir
        $berhasil=false;
        foreach ($DetailPenjualan['detail'] as $value) {
          $data = array(
            'DetailID'      => 0,
            'TransactionID' => $TransactionID,
            'NamaItem'      => $value['Item'], 
            'Quantity'      => $value['Qty'],
            'HargaSatuan'   => $value['HargaSatuan'], 
            'SubTotal'      => $value['SubTotal'],
            'TglJamUpdate'  => date("Y-m-d H:i:s"), 
          );
          $hasil=$this->default->insert('penjualandetil',$data);
          // return $hasil;
          if($hasil > 0){
            //jika berhasil hapus data terakhir di session
            $berhasil=true;
          }else{
            $berhasil=false;
            // return "eror";
            break;
            //jika masih ada yg gagal insert berak
            //session tidak di hapus atau masih ada
            //echo pesan error juga bisa
          }
        }
        if($berhasil){
          $this->session->unset_userdata("DetailPenjualan");
        }
      }
    }else{
      // kalo ndak ada data terakhir insert data baru
      $hasil=$this->default->insert("penjualan",$DataPenjualan);
      $insert_id = $this->default->insert_id();
      if($hasil!=0){
        //jika berhasil insert data penjualan lanjut insert detail
        $DetailPenjualan['detail']=$TempDetailPenjualan;
        $DetailPenjualan['TransactionID']=$insert_id;
        $this->session->set_userdata("DetailPenjualan",$DetailPenjualan);
        //jangan lupa insert data penjualan
        $berhasil=false;
        foreach ($DetailPenjualan['detail'] as $value) {
          $data = array(
            'DetailID'      => 0,
            'TransactionID' => $TransactionID,
            'NamaItem'      => $value['Item'], 
            'Quantity'      => $value['Qty'],
            'HargaSatuan'   => $value['HargaSatuan'], 
            'SubTotal'      => $value['SubTotal'],
            'TglJamUpdate'  => date("Y-m-d H:i:s"), 
          );
          $hasil=$this->default->insert('penjualandetil',$data);
          // return $hasil;
          if($hasil > 0){
            //jika berhasil hapus data terakhir di session
            $berhasil=true;
          }else{
            $berhasil=false;
            // return "eror";
            break;
            //jika masih ada yg gagal insert berak
            //session tidak di hapus atau masih ada
            //echo pesan error juga bisa
          }
        }
        if($berhasil){
          $this->session->unset_userdata("DetailPenjualan");
        }
      }
    }
    
  }

}



?>