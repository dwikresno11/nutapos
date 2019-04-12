<!DOCTYPE html>
<html lang="en">
<head>
  <title>FUTSAL SPOT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/aos.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery.timepicker.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/flaticon.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/icomoon.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <style type="text/css">
  .dataTables_wrapper .dataTables_filter {
    float: none;
    text-align: center;
  }
  .dataTables_wrapper{
    text-align: center;

  }
  .dataTables_wrapper .dataTables_info {
    clear: both;
    float: none;
    padding-top: 0.755em;
  }
  .ftco-navbar-light {
    background: transparent !important;
    position: absolute;
    left: 0;
    right: 0;
    z-index: 3;
    top: -25px;
  }

  @media only screen and (max-width: 990px) {
    .ftco-navbar-light {
      background: transparent !important;
      position: absolute;
      left: 0;
      right: 0;
      z-index: 3;
      top: -8px;
    }
  }
  .dataTables_wrapper .dataTables_paginate {
    float: none;
    text-align: center;
    padding-top: 0.25em;
  }
  #myModal{
    z-index: 1041;
  }
  #myModal1{
    z-index: 1042;
    top: 130px;
    left: -15px;
  }
  #modalGallery{
    z-index: 1042;
    left: -15px;
  }

  body {
    background-color: #333;
    font-family: Arial;
  }

  .tabs {
    box-shadow: 0px 2px 15px 2px;
    position: absolute;
    top: 51%;
    left: 50%;
    height: 50%;
    min-width: 450px;
    transform: translate(-50%, -50%);
  }

  #slider {
    display: inline-block;
    font-weight: bold;
    text-align: center;
    background: purple;
    color: #AAA;
    width: 150px;
    height: auto;
    padding: 20px 0px;
  }

  label:hover {
    color: white;
    cursor: pointer;
  }

  .tabs [type=radio] {
    display: none;   
  }

  .content {
    position: absolute;
    top: 50px; right: 0; bottom: 0; left: 0;
    background: white;
    padding: 20px;
    box-shadow: inset 0px 5px 5px -5px;
    display: none;
  }

  #slider {
    background-color: transparent;
    position: absolute;
    border-bottom: 3px solid white;
    margin: 7px 10px;
    transition: transform 0.5s;
    width: 130px;
  }

  [type=radio],#r1:checked ~ #slider {
    transform: translate(-450px, 0px);
  }

  [type=radio],#r2:checked ~ #slider {
    transform: translate(-300px, 0px);
  }

  [type=radio],#r3:checked ~ #slider {
    transform: translate(-150px, 0px);
  }

  [type=radio]:checked + label {
    color: white;
  }

  [type=radio]:checked + label + .content {
    display: inline-block;
  }
</style>
</head>
<body>
 <?php
 date_default_timezone_set("Asia/Jakarta");
// echo "The time is " . date("H");
 $jam=array();
 foreach ($jadwal as $value) {
  array_push($jam, $value->jam_mulai);
}

// var_dump();

if(!isset($_POST['tanggal'])){
 $_POST['tanggal']=date('Y-m-d');
}
?>
<div class="modal fade" id="myModal1" role="dialog">
  <div class="modal-dialog" style="max-width: 355px">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <label>Login</label>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form>
          <div class="col-md-12">
            <table border="0" cellspacing="3" cellpadding="1">
              <tr>
                <td>Username</td>
                <td style="padding-left: 20px;"><input id="username" type="email" name="username"></td>
              </tr>
              <tr>
                <td>Password</td>
                <td style="padding-left: 20px;"><input id="password" type="password" name="password"></td>
              </tr>
              <tr>
                <td colspan="2" class="text-right">
                  <input id="confirm_login" type="button" name="" class="btn btn-primary px-4" value="Login">
                </td>
              </tr>
            </table>

            <!-- <button >Pesan</button> -->
          </div>
        </form>
        <!-- <span id="orderDetails"></span> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div class="modal fade" id="modalGallery" role="dialog">
  <div class="modal-dialog" style="max-width: 56%">
    <div class="modal-content" style="background-color: transparent;border: 0px">
      <!-- <div class="modal-header" style="height: 45px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div> -->
      <div class="modal-body">
        <form>
          <div class="col-md-12">
            <?php include 'gallery.php' ?>
            
            <!-- <button >Pesan</button> -->
          </div>
        </form>
        <!-- <span id="orderDetails"></span> -->
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form>
          <label class="radio-inline" style="margin-right: 45px;">
            <input id="id_jadwal" type="hidden" name="">
            <input id="non-member" type="radio" name="optradio" checked onclick="memberCheck();">&nbsp; non-member
          </label>
          <label  class="radio-inline" style="margin-right: 45px;">
            <input id="member" type="radio" name="optradio" onclick="memberCheck();">&nbsp;member
          </label>
          <div id="section-nonmember" style="border: 1px solid #45414140;padding: 50px">
            <div class="col-md-12">
              <table border="0" cellspacing="3" cellpadding="1">
                <tr>
                  <td>Nama</td>
                  <td style="padding-left: 20px;"><input id="nama_nonmember" type="text" name="nama"></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td style="padding-left: 20px;"><input id="email_nonmember" type="text" name="email"></td>
                </tr>
                <tr>
                  <td>No. telpon</td>
                  <td style="padding-left: 20px;"><input id="no_tlp_nonmember" type="text" name="no_tlp"></td>
                </tr>
              </table>
              <input id="pesan_nonmember" style="position: fixed;bottom: 90px;right: 125px;" type="button" name="" class="btn btn-primary px-4" value="Pesan">
              <!-- <button >Pesan</button> -->
            </div>
          </div>
          <div id="section-member" style="display: none;border: 1px solid #45414140;padding: 50px">
            <div class="col-md-12">
              <table border="0" cellspacing="3" cellpadding="1">
               <tr>
                <td>Member ID</td>
                <td style="padding-left: 20px;"><input id="member_id" type="text" name="member_id"></td>
              </tr>
              <tr>
                <td>Nama</td>
                <td style="padding-left: 20px;"><input id="nama_member" type="text" name="nama" disabled="true"></td>
              </tr>
              <tr>
                <td>Email</td>
                <td style="padding-left: 20px;"><input id="email_member" type="text" name="email" disabled="true"></td>
              </tr>
              <tr>
                <td>No. telpon</td>
                <td style="padding-left: 20px;"><input id="no_tlp_member" type="text" name="no_tlp" disabled="true"></td>
              </tr>
            </table>
            <input data-toggle='modal' data-target='#myModal1' id="pesan_member" style="position: fixed;bottom: 90px;right: 125px;" type="button" name="" class="btn btn-primary px-4" value="Pesan">
          </div>
        </div>

      </form>
      <!-- <span id="orderDetails"></span> -->
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>

</div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="index.html">FUTSAL TAPI BO'ONG</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="?" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link" id="gallery" data-toggle='modal' data-target='#modalGallery'>Gallery</a></li>
        <?php 
        if($this->session->has_userdata('login')){ 
          ?>
          <li class="nav-item"><a href="#" class="nav-link">Welcome, <?php echo $this->session->userdata('login')[0]->nama; ?></a></li>
          <li class="nav-item"><a href="#" class="nav-link" id="logout">Logout</a></li>
          <?php
        }else{
          ?>
          <li class="nav-item"><a href="#" class="nav-link" id="login" data-toggle='modal' data-target='#myModal1'>Login</a></li>
          <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
<!-- END nav -->

<div class="block-31" style="position: relative;">
  <div class="owl-carousel loop-block-31 ">
    <div class="block-30 item" style="background-image: url('<?php echo base_url()?>assets/images/lap1.jpg');" data-stellar-background-ratio="0.5">

    </div>
    <div class="block-30 item" style="background-image: url('<?php echo base_url()?>assets/images/lap2.jpg');" data-stellar-background-ratio="0.5">

    </div>
    <div class="block-30 item" style="background-image: url('<?php echo base_url()?>assets/images/lap3.jpg');" data-stellar-background-ratio="0.5">

    </div>
  </div>
</div>
<div class="page-content" style="margin-left: 10%;margin-right: 20%;margin-top: -635px;z-index: 1;position: relative;">
  <div class="row" style="margin:0px; padding: 2%;width:117%;background: #f8f9fa3b;">
    <div class="col-sm-10" style="margin: auto;">
      <div class="row">
        <div class="col-xs-6" style="margin-left: auto;margin-right: auto;">
          <div class="row">
            <div class="field-icon-wrap">
              <div class="icon">
                <span class="icon-calendar"></span> Pilih Tanggal
              </div>
              <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->
              <form method='POST' enctype='multipart/form-data' id='formTanggal'>
                <!-- <form method="GET"> -->
                  <?php
                  if(isset($_POST['tanggal'])){
                    ?>
                    <input name="tanggal" type="text" id="tanggal" class="form-control" value="<?php echo $_POST['tanggal'] ?>"/>
                    <?php
                  }else{
                    ?>
                    <input name="tanggal" type="text" id="tanggal" class="form-control"/>
                    <?php
                  }
                  ?>

                </form>
              </div>
            </div>
          </div>
          <div class="col-xs-6" style="margin-left: auto;margin-right: auto;">
            <table id="jadwal" class="table display table-striped" style="">
              <thead>
                <tr>
                  <th></th>
                  <th>Mulai</th>
                  <th>Selesai</th>
                  <th>Hijau</th>
                  <th>Biru</th>
                </tr>
              </thead>
              <tbody>
                <?php for ($i=8; $i < 22 ; $i++) {
                  if(isset($_POST['tanggal']) && $_POST['tanggal']==date('Y-m-d')){
                    if((date('H')+4)>$i){
                      echo "<tr style='background-color: #919297'>";
                      echo "<td><input type='text' value='".$i."'/></td>";
                      echo "<td>".$i.":00</td>";
                      echo "<td>".($i+1).":00</td>";
                      echo "<td><input disabled class='btn btn-primary px-4' type='submit' value='expired' style='height:35px'></td>";
                      echo "<td><input disabled class='btn btn-primary px-4' type='submit' value='expired' style='height:35px'></td>";
                      echo "</tr>";
                    }else{
                      if(in_array($i, $jam)){
                        echo "<tr style='background-color: #919297'>";
                        echo "<td><input type='text' value='".$i."'/></td>";
                        echo "<td>".$i.":00</td>";
                        echo "<td>".($i+1).":00</td>";
                        echo "<td><input disabled class='btn btn-primary px-4' type='submit' value='Booked' style='height:35px'></td>";
                        echo "<td><input disabled class='btn btn-primary px-4' type='submit' value='Booked' style='height:35px'></td>";
                        echo "</tr>";
                      }else{
                        echo "<tr id='".$i."'>";
                        echo "<td><input type='text' value='".$i."'/></td>";
                        echo "<td>".$i.":00</td>";
                        echo "<td>".($i+1).":00</td>";
                        echo "<td id='".$i."'><input class='btn btn-primary px-4' data-target='".$i."' type='button' style='height:35px' value='pesan'></td>";
                        echo "<td id='".$i."'><input class='btn btn-primary px-4' data-target='".$i."' type='button' style='height:35px' value='pesan'></td>";
                        echo "</tr>";
                      }
                    }
                  }else if(isset($_POST['tanggal']) && $_POST['tanggal']>date('Y-m-d')){
                    if(in_array($i, $jam)){
                      foreach ($jadwal as $value) {
                        echo "<tr>";
                        echo "<td><input type='text' value='".$i."'/></td>";
                        echo "<td>".$i.":00</td>";
                        echo "<td>".($i+1).":00</td>";
                        echo "<td id='".$i."'>";
                        if($value->jam_mulai==$i && $value->tanggal==$_POST['tanggal']){
                          $this->default = $this->load->database('default', TRUE);
                          $result_detail = $this->default->query("SELECT * FROM tb_jadwal_detail WHERE id_jadwal = $value->id and jns_lapangan='hijau'")->result();
                          if(count($result_detail)!=0){
                            if($result_detail[0]->status=='pending'){
                              echo "<input disabled class='btn btn-primary px-4' type='submit' value='Pending' style='height:35px'>";
                            }else if($result_detail[0]->status=='booked'){
                              echo "<input disabled class='btn btn-primary px-4' type='submit' value='Booked' style='height:35px'>";
                            }else{
                              echo "<input class='btn btn-primary px-4' value='pesan' data-target='".$i."' type='button' style='height:35px'>";
                            }
                          }else{
                            echo "<input class='btn btn-primary px-4' value='pesan' data-target='".$i."' type='button' style='height:35px'>";
                          }
                          echo "</td>";
                          echo "<td id='".$i."'>";
                          $this->default = $this->load->database('default', TRUE);
                          $result_detail = $this->default->query("SELECT * FROM tb_jadwal_detail WHERE id_jadwal = $value->id and jns_lapangan='biru'")->result();
                          if(count($result_detail)!=0){
                            if($result_detail[0]->status=='pending'){
                              echo "<input disabled class='btn btn-primary px-4' type='submit' value='Pending' style='height:35px'>";
                            }else if($result_detail[0]->status=='booked'){
                              echo "<input disabled class='btn btn-primary px-4' type='submit' value='Booked' style='height:35px'>";
                            }else{
                              echo "<input class='btn btn-primary px-4' value='pesan' data-target='".$i."' type='button' style='height:35px'>";
                            }
                          }else{
                            echo "<input class='btn btn-primary px-4' value='pesan' data-target='".$i."' type='button' style='height:35px'>";
                          }
                        }else{
                          echo "<input class='btn btn-primary px-4' value='pesan' data-target='".$i."' type='button' style='height:35px'>";
                        }
                        echo "</td>";
                      }
                      echo "</tr>";
                    }else{
                      echo "<tr id='".$i."'>";
                      echo "<td><input type='text' value='".$i."'/></td>";
                      echo "<td>".$i.":00</td>";
                      echo "<td>".($i+1).":00</td>";
                      echo "<td id='".$i."'><input class='btn btn-primary px-4' value='pesan' data-target='".$i."' type='button' style='height:35px'></td>";
                      echo "<td id='".$i."'><input class='btn btn-primary px-4' value='pesan' data-target='".$i."' type='button' style='height:35px'></td>";
                      echo "</tr>";
                    }
                  }
                  else{
                    echo "<tr style='background-color: #919297'>";
                    echo "<td><input type='text' value='".$i."'/></td>";
                    echo "<td>".$i.":00</td>";
                    echo "<td>".($i+1).":00</td>";
                    echo "<td><input disabled class='btn btn-primary px-4' type='submit' value='expired' style='height:35px'></td>";
                    echo "<td><input disabled class='btn btn-primary px-4' type='submit' value='expired' style='height:35px'></td>";
                    echo "</tr>";
                  }

                } ?>
              </tbody>
              <tfoot>
                <tr>
                 <th></th>
                 <th>Mulai</th>
                 <th>Selesai</th>
                 <th>Hijau</th>
                 <!-- <th>Biru</th> -->
               </tr>
             </tfoot>
           </table>

         </div>
       </div>
     </div>
   </div>

   <footer class="footer" style="padding: 0px;margin-top: 15%">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">About Us</h3>
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid. Atque dolore esse veritatis iusto eaque perferendis non dolorem fugiat voluptatibus vitae error ad itaque inventore accusantium tempore dolores sunt.</p>
          <p><a href="#" class="btn btn-primary px-4">Button</a></p>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-23">
            <h3 class="heading-section">Contact Info</h3>
            <ul>
              <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
              <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
              <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
              <li><span class="icon icon-clock-o"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
            </ul>
          </div>
        </div>


      </div>
      <div class="row pt-5">
        <div class="col-md-12 text-left">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url()?>assets/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/bootstrap-datepicker.js"></script>

  <script src="<?php echo base_url()?>assets/js/aos.js"></script>
  <script src="<?php echo base_url()?>assets/js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url()?>assets/js/google-map.js"></script>
  <script src="<?php echo base_url()?>assets/js/main.js"></script>
  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    $(document).ready( function () {
      var jenis_lap     = "";
      var id            = "";
      var tanggal       = "";
      var session_login = "";
      var exp_date      = "";
      var id_jadwal     = "";
      var email         = "";
      var no_tlp        = "";
      var nama          = "";
      var tanggal       = "";
      var r             = "";

      var jadwal = $('#jadwal').DataTable({
        "lengthChange": false,
        "pageLength": 5,
        "order":false,
        "columnDefs": [
        {
          "targets": [ 0 ],
          "visible": false
        }
        ]
      });

      $('#login').on( 'click', function () {
        jadwal.columns( [3] ).visible( true );
      } );

      $('#jadwal').on( 'click', 'tr>td:nth-child(3)', function () {
        // console.log(this.id);
        id        = this.id;
        jenis_lap = "hijau";
        // console.log(this.id);
        tanggal = "<?php echo $_POST['tanggal']?>";
        document.getElementById('id_jadwal').value=id;
        session_login='<?php echo $this->session->has_userdata('login'); ?>';
        if(session_login==""){
          $('#myModal1').modal('show');
        }else{
          exp_date='<?php if($this->session->has_userdata('login')){ echo $this->session->userdata('login')[0]->exp_date; }?>';
          console.log(exp_date);
          id_jadwal = id;
          email = '<?php if($this->session->has_userdata('login')){ echo $this->session->userdata('login')[0]->email; }?>';
          no_tlp = '<?php if($this->session->has_userdata('login')){ echo $this->session->userdata('login')[0]->no_tlp; } ?>';
          nama = '<?php if($this->session->has_userdata('login')){ echo $this->session->userdata('login')[0]->nama; } ?>';
          main_proses(tanggal, id_jadwal,jenis_lap,nama,email,no_tlp,exp_date);
        }
      });

      $('#jadwal').on( 'click', 'tr>td:nth-child(4)', function () {
       id        = this.id;
       jenis_lap = "biru";
        // console.log(this.id);
        tanggal = "<?php echo $_POST['tanggal']?>";
        document.getElementById('id_jadwal').value=id;
        session_login='<?php echo $this->session->has_userdata('login'); ?>';
        if(session_login==""){
          $('#myModal1').modal('show');
        }else{
          exp_date='<?php if($this->session->has_userdata('login')){ echo $this->session->userdata('login')[0]->exp_date; }?>';
          console.log(exp_date);
          id_jadwal = id;
          email = '<?php if($this->session->has_userdata('login')){ echo $this->session->userdata('login')[0]->email; }?>';
          no_tlp = '<?php if($this->session->has_userdata('login')){ echo $this->session->userdata('login')[0]->no_tlp; } ?>';
          nama = '<?php if($this->session->has_userdata('login')){ echo $this->session->userdata('login')[0]->nama; } ?>';
          main_proses(tanggal, id_jadwal,jenis_lap,nama,email,no_tlp,exp_date);
        }
      });

      $('#tanggal').datepicker({
        // dateFormat: 'yy-mm-dd',
        format:'yyyy-mm-dd',
        autoclose: true,
        startDate: new Date()
      }).on('changeDate', function(ev){
       $('#formTanggal').submit();
       // jadwal.reload();
     });

      $('#member_id').keyup(function(){
        var member_id= document.getElementById("member_id").value;
        $.ajax({
          type:'POST',
          url:'<?php echo base_url()?>order/checkMember',
          data:{member_id:member_id},
          dataType: "json",
          success:function(data){
            if(Object.keys(data).length !== 0){
              document.getElementById('nama_member').value  =data[0].nama;
              document.getElementById('email_member').value =data[0].email;
              document.getElementById('no_tlp_member').value=data[0].no_tlp;
            }else{
              document.getElementById('nama_member').value='';
              document.getElementById('email_member').value='';
              document.getElementById('no_tlp_member').value='';
            }
          },
          error: function (xhr, ajaxOptions, thrownError) {
           alert(xhr.statusText);
           alert(thrownError);
         }  
       });
      });

      $('#logout').click(function(){
        $.ajax({
          type:'POST',
          url:'<?php echo base_url()?>order/logout',
          dataType: "html",
          success:function(data){
            location.reload();
          },
          error: function (xhr, ajaxOptions, thrownError) {
           alert(xhr.statusText);
           alert(thrownError);
         }  
       });
      });

      $('#confirm_login').click(function(){
        id_jadwal = document.getElementById("id_jadwal").value;
        email= document.getElementById("username").value;
        password= document.getElementById("password").value;
        $.ajax({
          type:'POST',
          url:'<?php echo base_url()?>order/checkLogin',
          data:{email:email,password:password},
          dataType: "json",
          success:function(data){
            if(Object.keys(data).length !== 0){
             // alert('verify successful');
             console.log(data[0]);
             email    = data[0]['email'];
             no_tlp   = data[0]['no_tlp'];
             nama     = data[0]['nama'];
             exp_date = data[0]['exp_date'];
             tanggal  = "<?php echo $_POST['tanggal']?>";
             main_proses(tanggal, id_jadwal,jenis_lap,nama,email,no_tlp,exp_date);
           }else{
            alert('verify failed');
          }
        },
        error: function (xhr, ajaxOptions, thrownError) {
         alert(xhr.statusText);
         alert(thrownError);
       }  
     });
      });


      $(document).on('click','#gallery',function() {
        $.ajax({
          type:'POST',
          url:'<?php echo base_url()?>home/only_gallery',
          data:{},
          dataType: "html",
          success:function(data){
            console.log(data);
            $("#modalGallery").load(" #modalGallery > *");
          },
          error: function (xhr, ajaxOptions, thrownError) {
           alert(xhr.statusText);
           alert(thrownError);
         }  
       });
      });
      

    } );

function main_proses(tanggal,id_jadwal,jenis_lap,nama,email,no_tlp,exp_date){
  if(id_jadwal!=""){
    r = confirm("Yakin ingin melakukan pemesan untuk tanggal "+tanggal+" pukul "+id_jadwal+".00 ?");
    if (r == true) {
      console.log(exp_date);
      if(exp_date==""){
        $.ajax({
          type:'POST',
          url:'<?php echo base_url()?>order/schedule_nonmember',
          data:{date:tanggal,time:id_jadwal,jenis_lap:jenis_lap},
          dataType: "html",
          success:function(data){
            console.log(data);
            if(data=="201"){
              alert("Gagal Pesan, tidak boleh melakukan pemesanan beda lapangan untuk jadwal yang sama dengan 1 akun");
            }else{
              $.ajax({
                type:'POST',
                url:'<?php echo base_url()?>order/sendEmail',
                data:{nama:nama,email:email,no_tlp:no_tlp,id_jadwal:id_jadwal,tanggal:tanggal},
                dataType: "html",
                success:function(data){
                  console.log(data);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                 alert(xhr.statusText);
                 alert(thrownError);
               }  
             });
            }
          },
          error: function (xhr, ajaxOptions, thrownError) {
           alert(xhr.statusText);
           alert(thrownError);
         }  
       });
      }else{
        $.ajax({
          type:'POST',
          url:'<?php echo base_url()?>order/schedule_member',
          data:{date:tanggal,time:id_jadwal,jenis_lap:jenis_lap},
          dataType: "html",
          success:function(data){
            console.log(data);
            if(data=="201"){
              alert("Gagal Pesan, tidak boleh melakukan pemesanan beda lapangan untuk jadwal yang sama dengan 1 akun");
            }else{
              $.ajax({
                type:'POST',
                url:'<?php echo base_url()?>order/sendEmail',
                data:{nama:nama,email:email,no_tlp:no_tlp,id_jadwal:id_jadwal,tanggal:tanggal},
                dataType: "html",
                success:function(data){
                  console.log(data);

                },
                error: function (xhr, ajaxOptions, thrownError) {
                 alert(xhr.statusText);
                 alert(thrownError);
               }  
             });
            }
          },
          error: function (xhr, ajaxOptions, thrownError) {
           alert(xhr.statusText);
           alert(thrownError);
         }  
       });
      }
    }     
  }
  location.reload();
}

function memberCheck() {
  if (document.getElementById('member').checked) {
    document.getElementById('section-member').style.display = 'block';
    document.getElementById('section-nonmember').style.display = 'none';
  }
  else{
    document.getElementById('section-member').style.display = 'none';
    document.getElementById('section-nonmember').style.display = 'block';
  }

}
</script>
</body>
</html>