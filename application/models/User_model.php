<?php
class User_model extends CI_model{

  public function __construct()
  {
    parent::__construct();
    $this->default = $this->load->database('default', TRUE);
  }
  public function login_user($user,$pass){
    return $this->default->query("SELECT username FROM tbl_login WHERE username = '".$user."' and password = md5('".$pass."')");
  }

  public function update_password($no_peg,$pass){
    return $this->default->query("UPDATE db_referensi.`tb_login_pegawai` SET PASSWORD=MD5('".$pass."') WHERE pegNoReg='".$no_peg."'");
  }

  public function allUser(){
    return $this->default->query("SELECT * FROM db_personalia.`ref_detail_pegawai` rdp where rdp.`pegNoReg`!=0000 and pegNoReg IN (SELECT privUserId FROM db_referensi.`tb_user_priv` GROUP BY privUserId)")->result();
  }

  public function login_akses($no_peg){
    return $this->default->query("SELECT * FROM db_referensi.`tb_user_priv` 
      JOIN db_referensi.`tb_menu` 
      ON db_referensi.`tb_user_priv`.`privMenuId`=db_referensi.`tb_menu`.`menuId` WHERE privUserId =".$no_peg)->result();
  }

  public function pegawaiNotInUser(){
    return $this->default->query("SELECT * FROM db_personalia.`ref_detail_pegawai` rdp where rdp.`pegNoReg`!=0000 and pegNoReg NOT IN (SELECT privUserId FROM db_referensi.`tb_user_priv` GROUP BY privUserId)")->result();
  }

  public function add_user($pegNoReg){
    $menu = $this->default->query("SELECT * FROM db_referensi.`tb_menu`")->result();
    foreach ($menu as $value) {
      //var_dump($value->menuId);
      $this->default->query("INSERT INTO db_referensi.`tb_user_priv` VALUES (0,'".$pegNoReg."','".$value->menuId."','N','N','N','N')");
    }
    echo 1;
  }

  public function updateAkses($pegNoReg){
    $query=$this->default->query('SELECT privId,menuNama,privAkses,privCreate,privModif,privValidasi FROM tb_login_pegawai lp 
      JOIN tb_user_priv tup ON lp.`pegNoReg`= tup.`privUserId`
      JOIN tb_menu tm ON tup.`privMenuId` = tm.`menuId` 
      WHERE lp.`pegNoReg`="'.$pegNoReg.'"')->result();
    $i=0;
    foreach ($query as $value) {
       // var_dump($value->privId);
      $this->default->query('UPDATE tb_user_priv SET privAkses="'.$_POST['privAkses'][$i].'", privCreate="'.$_POST['privCreate'][$i].'", privModif="'.$_POST['privModif'][$i].'", privValidasi="'.$_POST['privValidasi'][$i].'" WHERE privId="'.$value->privId.'"');
      $i++;
    }
    // var_dump($query);
  }


}



?>