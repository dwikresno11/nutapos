<?php
class Gudang_model extends CI_model{

  public function __construct()
  {
    parent::__construct();
    $this->default = $this->load->database('default', TRUE);
  }

  public function getGudangCabang(){
    return $this->default->query("SELECT * FROM tbl_gudang_cabang")->result();
  }

  public function getGudangPusat(){
    return $this->default->query("SELECT * FROM tbl_gudang_pusat")->result();
  }
  
}



?>