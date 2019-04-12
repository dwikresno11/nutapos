
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
  if(isset($jadwal)){
    // var_dump($jadwal);
    foreach ($jadwal as $value) {
      $id_jadwal  = $value->id_jadwal_detail;
      $tanggal    = $value->tanggal;
      $jam        = $value->jam_mulai;
      # code...
    }
  }
  // echo "crot";
  // if (isset($_POST['nama'])){
  //   echo "crot";
  // }
  // var_dump($_SERVER['REQUEST_URI']);
  if (isset($_FILES['fileToUpload'])){
    // var_dump($_SERVER['REQUEST_URI']);
    // var_dump($_FILES['fileToUpload']);
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/sewa_lapangan/assets/images/bukti/";
    // echo $target_dir;
    $filename=substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 10);
    // echo $filename;
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $target_file = $target_dir."".$filename;
    if (file_exists($target_file)) {
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      $target_file = $target_dir."".$filename;
    }
    $uploadOk = 1;
    
// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
// Check if file already exists
    // if (file_exists($target_file)) {
    //   echo "Sorry, file already exists.";
    //   $uploadOk = 0;
    // }
// Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
      // echo "Sorry, your file is too large.";
      $message = "<div style='width: 100%;margin: auto;text-align: center' class='alert alert-warning'>
      <strong>Gagal Upload!</strong> Ukuran gambar terlalu besar.
      </div>";
      $uploadOk = 0;
    }
// Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG") {
      // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $message = "<div style='width: 100%;margin: auto;text-align: center' class='alert alert-warning'>
      <strong>Gagal Upload!</strong> Type gambar harus JPG, PNG, atau JPEG.
      </div>";
      $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
      // var_dump(file_get_contents('http://localhost/sewa_lapangan/home/customer'));
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file.".".$imageFileType)) {
      // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        file_get_contents('http://localhost/sewa_lapangan/order/insert_konfirmasi/'.$filename.".".$imageFileType.'/'.$id_jadwal);
        $message = "<div style='width: 100%;margin: auto;text-align: center' class='alert alert-success'>
        <strong>Berhasil!</strong> Bukti Pembayaran Berhasil diupload.
        </div>";
      } else {
        $message = "<div style='width: 100%;margin: auto;text-align: center' class='alert alert-danger'>
        <strong>Gagal Upload!</strong> Cek Kembali foto bukti pembayaran anda.
        </div>";
      // echo "Sorry, there was an error uploading your file.";
      }
    }
  }
  ?>
  <div class="container" style="margin-top: 4%;">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <?php
      if(isset($message)){
        echo $message;
      }
      ?>
      <h2 style="text-align: center;">Konfirmasi Bayar</h2>
      <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label>Atas Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?php if(isset($_GET['nama'])) echo $_GET['nama'];?>" readonly="true">
        </div>
        <label>Tanggal & jam</label>
        <div style="margin-bottom: 15%">
          <!--  -->
          <div class="col-md-6">
            <input type="text" class="form-control col-md-6" id="tanggal" name="tanggal" value="<?php if(isset($tanggal)) echo $tanggal;?>" readonly="true">
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control col-md-6" id="jam" name="jadwjamal" value="<?php if(isset($jam)) echo $jam.".00";?>" readonly="true">
          </div>
        </div>
        <input type="file" name="fileToUpload" id="fileToUpload" required="true">
        <button type="submit" class="btn btn-default btn-warning" name="submit" style="width: 100%;margin-top: 5%;">Submit</button>
      </form>
    </div>
    <div class="col-md-4">

    </div>

  </div>

</body>
</html>
