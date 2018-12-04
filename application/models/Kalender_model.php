<?php
class Kalender_model extends CI_model{

  public function __construct()
  {
    parent::__construct();
    $this->default = $this->load->database('default', TRUE);
    // $this->db_kbs_manufacture = $this->load->database('db_kbs_manufacture', TRUE);
  }

  public function getAllMilist($jenisRelasi=null){
    $arraylist=array();
    if($jenisRelasi=="KBS"){
      $list = $this->default->query("SELECT custMilistId as milistid FROM `db_kbs`.`ref_customer` WHERE custID LIKE '1%'")->result();
    }
    if($jenisRelasi=="MEMBER"){
      $list = $this->default->query("SELECT custMilistId as milistid FROM `db_kbs`.`ref_customer` WHERE custID LIKE '2%'")->result();
    }
    if($jenisRelasi=="CETAK"){
      $list = $this->default->query("SELECT custMilistId as milistid FROM `db_kbs`.`ref_customer` WHERE custID LIKE '3%'")->result();
    }
    if($jenisRelasi=="PENGARANG"){
      $list = $this->default->query("SELECT pengMilist as milistid FROM db_kbs.`ref_pengarang`")->result();
    }
    if($jenisRelasi=="SUPPLIER"){
      $list = $this->default->query("SELECT suppMilistId as milistid FROM db_kbs.`ref_supplier`")->result();
    }
    if($jenisRelasi != "All"){
      foreach ($list as $value) {
        array_push($arraylist, $value->milistid);
      }
      $query="SELECT milistId,krmMilistId,(SELECT krmDivisiID FROM db_referensi.`tb_kirim` WHERE krmJumlah=(SELECT MAX(krmJumlah) FROM db_referensi.`tb_kirim` WHERE krmMilistId=milistId) AND krmMilistId=milistId GROUP BY milistId) AS krmDivisiID,divNama,namaPerson,Namalembaga,alamat,kotanama,propNama, COALESCE((SELECT MAX(krmJumlah) FROM db_referensi.`tb_kirim` WHERE krmJumlah=(SELECT MAX(krmJumlah) FROM db_referensi.`tb_kirim` WHERE krmMilistId=milistId) AND krmMilistId=milistId),0) AS krmJumlah 
      FROM db_referensi.`ref_alamat`
      LEFT JOIN  db_referensi.`tb_kirim` ON db_referensi.`ref_alamat`.`milistId` = db_referensi.`tb_kirim`.`krmMilistId`
      LEFT JOIN db_personalia.`ref_divisi` ON (SELECT krmDivisiID FROM db_referensi.`tb_kirim` 
      WHERE krmJumlah=(SELECT MAX(krmJumlah) FROM db_referensi.`tb_kirim` WHERE krmMilistId=milistId) AND krmMilistId=milistId GROUP BY milistId) = db_personalia.`ref_divisi`.`divId`
      LEFT JOIN db_referensi.`ref_kota` ON db_referensi.`ref_alamat`.`kota` = db_referensi.`ref_kota`.`kotakode` 
      JOIN db_referensi.`ref_propinsi` ON db_referensi.`ref_alamat`.`propinsi` = db_referensi.`ref_propinsi`.`propKode`
      WHERE alamat !='' and milistId IN ? GROUP BY milistId";
      return $this->default->query($query, array($arraylist))->result();
    }else{
      $query="SELECT milistId,krmMilistId,(SELECT krmDivisiID FROM db_referensi.`tb_kirim` WHERE krmJumlah=(SELECT MAX(krmJumlah) FROM db_referensi.`tb_kirim` WHERE krmMilistId=milistId) AND krmMilistId=milistId GROUP BY milistId) AS krmDivisiID,divNama,namaPerson,Namalembaga,alamat,kotanama,propNama, COALESCE((SELECT MAX(krmJumlah) FROM db_referensi.`tb_kirim` WHERE krmJumlah=(SELECT MAX(krmJumlah) FROM db_referensi.`tb_kirim` WHERE krmMilistId=milistId) AND krmMilistId=milistId),0) AS krmJumlah 
      FROM db_referensi.`ref_alamat`
      LEFT JOIN  db_referensi.`tb_kirim` ON db_referensi.`ref_alamat`.`milistId` = db_referensi.`tb_kirim`.`krmMilistId`
      LEFT JOIN db_personalia.`ref_divisi` ON (SELECT krmDivisiID FROM db_referensi.`tb_kirim` 
      WHERE krmJumlah=(SELECT MAX(krmJumlah) FROM db_referensi.`tb_kirim` WHERE krmMilistId=milistId) AND krmMilistId=milistId GROUP BY milistId) = db_personalia.`ref_divisi`.`divId`
      LEFT JOIN db_referensi.`ref_kota` ON db_referensi.`ref_alamat`.`kota` = db_referensi.`ref_kota`.`kotakode` 
      JOIN db_referensi.`ref_propinsi` ON db_referensi.`ref_alamat`.`propinsi` = db_referensi.`ref_propinsi`.`propKode`
      WHERE alamat !='' GROUP BY milistId";
      return $this->default->query($query)->result();
    }

  }

  public function getAllMilistByDivisi($divId){
    return $this->default->query("SELECT milistId,namaPerson, CONCAT(alamat,', ',kotanama,', ',propNama)as alamat, krmjumlah FROM db_referensi.`ref_alamat` JOIN db_referensi.`ref_kota` 
      ON db_referensi.`ref_alamat`.`kota` = db_referensi.`ref_kota`.`kotakode` JOIN db_referensi.`ref_propinsi`
      ON db_referensi.`ref_alamat`.`propinsi` = db_referensi.`ref_propinsi`.`propKode` JOIN db_referensi.`tb_kirim`
      ON db_referensi.`tb_kirim`.`krmMilistId` = db_referensi.`ref_alamat`.`milistId` JOIN db_personalia.`ref_divisi` 
      ON db_referensi.`tb_kirim`.`krmDivisiID` = db_personalia.`ref_divisi`.`divId`
      WHERE db_referensi.`ref_alamat`.`status`='Y' AND db_personalia.`ref_divisi`.`divId` = ".$divId)->result();
  }

  public function numMilistRow(){
    return $this->db->get('ref_alamat')->num_rows();

  }

  public function getAllKirimByMilistID($divId,$milistId){
    //this funtion get All data from kirim table on condition milistid and divisi is not current login 
    return $this->default->query("SELECT namaPerson,CONCAT(alamat,',',kotanama,',',propNama) AS alamat,divNama,krmJumlah,krmGudangId,gudangNama,pegNoReg,pegNama FROM db_referensi.`tb_kirim` 
      JOIN db_referensi.`ref_alamat` ON db_referensi.`ref_alamat`.`milistId` = db_referensi.`tb_kirim`.`krmMilistId`
      JOIN db_personalia.`ref_divisi` ON db_referensi.`tb_kirim`.`krmDivisiID` = db_personalia.`ref_divisi`.`divId`
      JOIN db_referensi.`ref_kota` ON db_referensi.`ref_alamat`.`kota` = db_referensi.`ref_kota`.`kotakode` 
      JOIN db_referensi.`ref_propinsi` ON db_referensi.`ref_alamat`.`propinsi` = db_referensi.`ref_propinsi`.`propKode`
      LEFT JOIN db_kbs.`ref_gudang` ON db_kbs.`ref_gudang`.`gudangId` = db_referensi.`tb_kirim`.`krmGudangId`
      LEFT JOIN db_personalia.`ref_detail_pegawai` ON db_personalia.`ref_detail_pegawai`.`pegNoReg` = db_referensi.`tb_kirim`.`krmOleh`
      WHERE db_personalia.`ref_divisi`.`divId` <> ".$divId." AND db_referensi.`tb_kirim`.`krmMilistId` = ".$milistId)->result();
  }

  public function getJenisRelasi($milistId){
    //this funtion get All data from kirim table on conditio milistid and divisi
    return $this->default->query("SELECT * FROM (
      SELECT (CASE WHEN custID LIKE '1%' THEN 'CUSTOMER KBS' END) jenisRelasi FROM db_kbs.`ref_customer` WHERE custMilistId='".$milistId."'
      UNION 
      SELECT (CASE WHEN custID LIKE '2%' THEN 'CUSTOMER MEMBER' END)   FROM db_kbs.`ref_customer` WHERE custMilistId='".$milistId."'
      UNION 
      SELECT (CASE WHEN custID LIKE '3%' THEN 'CUSTOMER CETAK' END)   FROM db_kbs.`ref_customer` WHERE custMilistId='".$milistId."'
      UNION 
      SELECT 'PENGARANG' FROM db_kbs.`ref_pengarang` WHERE `pengMilist`='".$milistId."'
      UNION 
      SELECT 'SUPPLIER' FROM db_kbs.`ref_supplier` WHERE `suppMilistId`='".$milistId."') AS tbl WHERE jenisRelasi IS NOT NULL")->result();
  }


  public function getKirimJumByDivisi($divId,$milistId){
    //this funtion get All data from kirim table on conditio milistid and divisi
    return $this->default->query("SELECT namaPerson,CONCAT(alamat,',',kotanama,',',propNama) AS alamat,divNama,krmJumlah,krmGudangId,gudangNama,pegNoReg,pegNama FROM db_referensi.`tb_kirim` 
      JOIN db_referensi.`ref_alamat` ON db_referensi.`ref_alamat`.`milistId` = db_referensi.`tb_kirim`.`krmMilistId`
      JOIN db_personalia.`ref_divisi` ON db_referensi.`tb_kirim`.`krmDivisiID` = db_personalia.`ref_divisi`.`divId`
      JOIN db_referensi.`ref_kota` ON db_referensi.`ref_alamat`.`kota` = db_referensi.`ref_kota`.`kotakode` 
      JOIN db_referensi.`ref_propinsi` ON db_referensi.`ref_alamat`.`propinsi` = db_referensi.`ref_propinsi`.`propKode`
      LEFT JOIN db_kbs.`ref_gudang` ON db_kbs.`ref_gudang`.`gudangId` = db_referensi.`tb_kirim`.`krmGudangId`
      LEFT JOIN db_personalia.`ref_detail_pegawai` ON db_personalia.`ref_detail_pegawai`.`pegNoReg` = db_referensi.`tb_kirim`.`krmOleh`
      WHERE db_personalia.`ref_divisi`.`divId` = ".$divId." AND db_referensi.`tb_kirim`.`krmMilistId` = ".$milistId)->result();
  }

  public function update_kirim_jumlah($milistId,$divId,$jumlah,$gudangId,$dikirimoleh){
    return $this->default->query("UPDATE db_referensi.`tb_kirim` SET krmJumlah=".$jumlah.",krmGudangId='".$gudangId."',krmOleh='".$dikirimoleh."' WHERE krmMilistId=".$milistId." AND krmDivisiID=".$divId);
  }

  public function insert_kirim($milistId,$divId,$jumlah,$gudangId,$dikirimoleh){
    return $this->default->query("INSERT INTO db_referensi.`tb_kirim` VALUES(0,".$milistId.",'".$divId."','".$jumlah."','".$gudangId."','".$dikirimoleh."')");
  }

  public function printkirim($gudang=null,$sales=null){
    if($gudang=='semua'){
      return $this->default->query("SELECT krmMilistId,krmDivisiID,namaPerson,Namalembaga,alamat,kotanama,propnama,MAX(krmJumlah) AS krmJumlah FROM db_referensi.`tb_kirim`JOIN db_referensi.`ref_alamat` 
        ON db_referensi.`ref_alamat`.`milistId` = db_referensi.`tb_kirim`.`krmMilistId`
        JOIN db_personalia.`ref_divisi` ON db_referensi.`tb_kirim`.`krmDivisiID` = db_personalia.`ref_divisi`.`divId`
        JOIN db_referensi.`ref_kota` 
        ON db_referensi.`ref_alamat`.`kota` = db_referensi.`ref_kota`.`kotakode` JOIN db_referensi.`ref_propinsi`
        ON db_referensi.`ref_alamat`.`propinsi` = db_referensi.`ref_propinsi`.`propKode` AND krmJumlah !=0 GROUP BY krmMilistId ORDER BY krmJumlah DESC")->result();
    }if($gudang != 'semua' && $sales == 'true'){
      return $this->default->query("SELECT krmMilistId,pegNama AS sales,gudangNama,krmDivisiID,namaPerson,Namalembaga,alamat,kotanama,propnama,MAX(krmJumlah) AS krmJumlah 
        FROM db_referensi.`tb_kirim`
        JOIN db_referensi.`ref_alamat` ON db_referensi.`ref_alamat`.`milistId` = db_referensi.`tb_kirim`.`krmMilistId`
        JOIN db_kbs.`ref_gudang` ON db_kbs.`ref_gudang`.`gudangId` = db_referensi.`tb_kirim`.`krmGudangId`
        LEFT JOIN db_personalia.`ref_detail_pegawai` ON db_personalia.`ref_detail_pegawai`.`pegNoReg` =  db_referensi.`tb_kirim`.`krmOleh`
        JOIN db_personalia.`ref_divisi` ON db_referensi.`tb_kirim`.`krmDivisiID` = db_personalia.`ref_divisi`.`divId`
        JOIN db_referensi.`ref_kota` ON db_referensi.`ref_alamat`.`kota` = db_referensi.`ref_kota`.`kotakode` 
        JOIN db_referensi.`ref_propinsi`
        ON db_referensi.`ref_alamat`.`propinsi` = db_referensi.`ref_propinsi`.`propKode` WHERE krmGudangId='".$gudang."' AND krmOleh != '' AND krmJumlah !=0 GROUP BY krmMilistId ORDER BY krmJumlah DESC")->result();
    }
    if($gudang != 'All' && $sales == 'false'){
      return $this->default->query("SELECT krmMilistId,pegNama AS sales,gudangNama,krmDivisiID,namaPerson,Namalembaga,alamat,kotanama,propnama,MAX(krmJumlah) AS krmJumlah 
        FROM db_referensi.`tb_kirim`
        JOIN db_referensi.`ref_alamat` ON db_referensi.`ref_alamat`.`milistId` = db_referensi.`tb_kirim`.`krmMilistId`
        JOIN db_kbs.`ref_gudang` ON db_kbs.`ref_gudang`.`gudangId` = db_referensi.`tb_kirim`.`krmGudangId`
        LEFT JOIN db_personalia.`ref_detail_pegawai` ON db_personalia.`ref_detail_pegawai`.`pegNoReg` =  db_referensi.`tb_kirim`.`krmOleh`
        JOIN db_personalia.`ref_divisi` ON db_referensi.`tb_kirim`.`krmDivisiID` = db_personalia.`ref_divisi`.`divId`
        JOIN db_referensi.`ref_kota` ON db_referensi.`ref_alamat`.`kota` = db_referensi.`ref_kota`.`kotakode` 
        JOIN db_referensi.`ref_propinsi`
        ON db_referensi.`ref_alamat`.`propinsi` = db_referensi.`ref_propinsi`.`propKode` WHERE krmGudangId='".$gudang."' AND krmOleh = '' AND krmJumlah !=0
        GROUP BY krmMilistId ORDER BY krmJumlah DESC")->result();
    }
  }

    public function allListGudang(){
      return $this->default->query("SELECT * FROM db_kbs.`ref_gudang` rg where rg.`gudangId`!=00 ")->result();
    }

    public function allListPegawai(){
      return $this->default->query("SELECT * FROM db_personalia.`ref_detail_pegawai` rdp where rdp.`pegNoReg`!=0000")->result();
    }

  }



  ?>