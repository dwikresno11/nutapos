<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 3; /* Sit on top */
    padding-top: 18px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 5px;
    border: 1px solid #888;
    width: 50%;
}

.modal-pegawai {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 3; /* Sit on top */
    padding-top: 18px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content-pegawai {
    background-color: #fefefe;
    margin: auto;
    padding: 5px;
    border: 1px solid #888;
    width: 50%;
}

.modal-gudang {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 3; /* Sit on top */
    padding-top: 18px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content-gudang {
    background-color: #fefefe;
    margin: auto;
    padding: 5px;
    border: 1px solid #888;
    width: 50%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.pagination>li.active>a, .pagination>li.active>a:focus, .pagination>li.active>a:hover{
    z-index: 1;
}
.input-icon>.ace-icon{
    z-index: 1;
}
.navbar-fixed-bottom, .navbar-fixed-top{
    z-index: 2;
}
</style>

<div class="main-content">

    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?php echo base_url()?>home">Home</a>
                </li>
            </ul><!-- /.breadcrumb -->

            <!-- <div class="nav-search" id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                        <i class="ace-icon fa fa-search nav-search-icon"></i>
                    </span>
                </form>
            </div> -->
            <!-- /.nav-search -->
            <div class="nav-search" style="padding-right: 165px;">
                <div id="txt"> </div>
            </div>
        </div>

        <div class="page-content">

            <div class="col-md-3" style="padding: 0px;padding-bottom: 10px">
                <label for="form-field-select-1">

                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-6">
                            <div>
                                <h6>Gudang Pusat</h6>
                            </div>
                            <table id="pusat" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="10%">Nama Gudang</th>
                                        <th>Pasokan</th>
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th width="10%">Nama Gudang</th>
                                        <th>Pasokan</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <!-- PAGE CONTENT ENDS -->
                        </div>
                        <div class="col-xs-6">
                            <div>
                                <h6>Gudang Cabang</h6>
                            </div>
                            <table id="cabang" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="10%">Nama Gudang</th>
                                        <th>Permintaan</th>
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th width="10%">Nama Gudang</th>
                                        <th>Permintaan</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <!-- PAGE CONTENT ENDS -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div><!-- /.row -->
                <div class="col-lg-12">
                    <?php
                    $this->default = $this->load->database('default', TRUE);
                    $pusat = $this->default->query("SELECT * FROM tbl_gudang_pusat")->result();
                    $cabang = $this->default->query("SELECT * FROM tbl_gudang_cabang")->result();
                    foreach ($pusat as $row){
                        $arraypusat[]=$row;
                    }
                    foreach ($cabang as $row){
                        $arraycabang[] = $row;
                    }
                    ?>
                    <div class="card">
                        <div class="card-title">
                            <h4>Table Optimasi Least Cost</h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form method="POST" action="proses_least_cost.php">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>DARI\KE</th>
                                                <?php
                                                foreach ($arraycabang as $arraycabang1) {
                                                    ?>
                                                    <th><?php echo $arraycabang1->nama_gudang_cabang; ?></th>
                                                    <?php
                                                }
                                                ?>
                                                <th>Pasokan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                         foreach ($arraypusat as $arraypusat1) {
                                            ?>
                                            <tr style="font-size: 18px;">
                                                <td style="font-weight: bold;"><strong><?php echo $arraypusat1->nama_gudang_pusat; ?></strong></td>
                                                <?php
                                                foreach ($arraycabang as $arraycabang1) {
                                                    $pusat=$arraypusat1->nama_gudang_pusat;
                                                    $cabang=$arraycabang1->id_gudang_cabang;
                                                    $biaya = $this->default->query("SELECT * FROM biaya_transportasi where
                                                        id_pusat ='".$arraypusat1->id_gudang_pusat."' and id_cabang='".$arraycabang1->id_gudang_cabang."'")->result();
                                                    foreach ($biaya as $rowbiaya){
                                                        ?>
                                                        <td>
                                                            <div class="col-lg-10"">
                                                                <div class="col-lg-5" style="float: left;padding: 0px"></div>
                                                                <div class="col-lg-5" style="float: left;padding: 0px">
                                                                    <input type="" name="biaya_awal[<?php echo $pusat ?>][<?php echo $cabang ?>]" value="<?php echo $rowbiaya->biaya_awal ?>" maxlength="3" size="3" style="text-align: center;" required>
                                                                </div>
                                                                <div class="col-lg-5" style="float: left;padding: 0px">
                                                                    <?php 
                                                                    if($rowbiaya->kebutuhan_terpenuhi_lc==0){
                                                                        echo "";
                                                                    }else{
                                                                        echo $rowbiaya->kebutuhan_terpenuhi_lc;
                                                                    } 
                                                                    ?>
                                                                </div>
                                                                <div class="col-lg-5" style="float: left;padding: 0px"></div>
                                                            </div>
                                                        </td>
                                                        <?php
                                                    }
                                                }
                                                ?> 
                                                <td style="text-align: center;"><?php echo $arraypusat1->pasokan; ?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        <tr style="font-size: 18px;">
                                            <td>Permintaan</td>
                                            <?php
                                            $total=0;
                                            foreach ($arraycabang as $arraycabang1) {
                                                $total+=$arraycabang1->permintaan;
                                                ?>
                                                <td style="text-align: center;"><?php echo $arraycabang1->permintaan; ?></td>
                                                <?php
                                            }
                                            ?>
                                            <td style="text-align: center;"><?php echo $total ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="col-lg-12">
                                    <?php
                                    $biayatransport2 = $this->default->query("SELECT SUM(biaya_awal*kebutuhan_terpenuhi_lc) AS total FROM biaya_transportasi")->result();
                                    foreach ($biayatransport2 as $rowbiaya ){
                                        echo "Total Biaya Solusi awal adalah : <strong>$".$rowbiaya->total."</strong>";
                                    }
                                    ?>
                                </div>
                                <div class="col-lg-12">
                                    <input class="btn" type="submit" name="Reset" value="Reset" style="position: inherit;left: 80%;margin-top: 15px;">
                                    <input class="btn" type="submit" name="proses_least_cost" value="Proses" style="position: inherit;left: 80%;margin-top: 15px;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-title">
                        <h4>Table Optimasi North West Corner</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="POST" action="proses_nwc.php">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>DARI\KE</th>
                                            <?php
                                            foreach ($arraycabang as $arraycabang1) {
                                                ?>
                                                <th><?php echo $arraycabang1->nama_gudang_cabang; ?></th>
                                                <?php
                                            }
                                            ?>
                                            <th>Pasokan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
                                     foreach ($arraypusat as $arraypusat1) {
                                        ?>
                                        <tr style="font-size: 18px;">
                                            <td style="font-weight: bold;"><strong><?php echo $arraypusat1->nama_gudang_pusat; ?></strong></td>
                                            <?php
                                            foreach ($arraycabang as $arraycabang1) {
                                                $pusat=$arraypusat1->nama_gudang_pusat;
                                                $cabang=$arraycabang1->id_gudang_cabang;
                                                $biaya = $this->default->query("SELECT * FROM biaya_transportasi where
                                                    id_pusat ='".$arraypusat1->id_gudang_pusat."' and id_cabang='".$arraycabang1->id_gudang_cabang."'")->result();
                                                foreach ($biaya as $rowbiaya){
                                                    ?>
                                                    <td>
                                                        <div class="col-lg-10"">
                                                            <div class="col-lg-5" style="float: left;padding: 0px"></div>
                                                            <div class="col-lg-5" style="float: left;padding: 0px">
                                                                <input type="" name="biaya_awal[<?php echo $pusat ?>][<?php echo $cabang ?>]" value="<?php echo $rowbiaya->biaya_awal ?>" maxlength="3" size="3" style="text-align: center;" required>
                                                            </div>
                                                            <div class="col-lg-5" style="float: left;padding: 0px">
                                                                <?php 
                                                                if($rowbiaya->kebutuhan_terpenuhi_nwc==0){
                                                                    echo "";
                                                                }else{
                                                                    echo $rowbiaya->kebutuhan_terpenuhi_nwc;
                                                                } 
                                                                ?>
                                                            </div>
                                                            <div class="col-lg-5" style="float: left;padding: 0px"></div>
                                                        </div>
                                                    </td>
                                                    <?php
                                                }
                                            }
                                            ?> 
                                            <td style="text-align: center;"><?php echo $arraypusat1->pasokan; ?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    <tr style="font-size: 18px;">
                                        <td>Permintaan</td>
                                        <?php
                                        $total=0;
                                        foreach ($arraycabang as $arraycabang1) {
                                            $total+=$arraycabang1->permintaan;
                                            ?>
                                            <td style="text-align: center;"><?php echo $arraycabang1->permintaan; ?></td>
                                            <?php
                                        }
                                        ?>
                                        <td style="text-align: center;"><?php echo $total ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="col-lg-12">
                             <?php
                             $biayatransport2 = $this->default->query("SELECT SUM(biaya_awal*kebutuhan_terpenuhi_nwc) AS total FROM biaya_transportasi")->result();
                             foreach ($biayatransport2 as $rowbiaya ){
                                echo "Total Biaya Solusi awal adalah : <strong>$".$rowbiaya->total."</strong>";
                            }
                            ?>
                        </div>
                        <div class="col-lg-12">
                            <input class="btn" type="submit" name="Reset" value="Reset" style="position: inherit;left: 80%;margin-top: 15px;">
                            <input class="btn" type="submit" name="proses_least_cost" value="Proses" style="position: inherit;left: 80%;margin-top: 15px;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.page-content -->
</div>
</div>


<script type="text/javascript">
    var gudang_cabang = "";
    var gudang_pusat = "";
    $(document).ready(function() {
        var gudang_cabang = $('#cabang').DataTable( {
            "ajax": {
                "url": "<?php echo base_url()?>Home/getGudangCabang",
                "dataSrc": ""
            },
            "destroy": true,
            "columns": [
            { "data": "nama_gudang_cabang"},
            { "data": "permintaan"}
            ],
            "searching": false,   // Search Box will Be Disabled
            "ordering": false,    // Ordering (Sorting on Each Column)will Be Disabled
            "info": false,         // Will show "1 to n of n entries" Text at bottom
            "lengthChange": false,
            "paging": false,
            "columnDefs": [
            { "width": '50%', "targets": 0 }
            ],
            "autoWidth": false
        });

        var gudang_pusat = $('#pusat').DataTable( {
            "ajax": {
                "url": "<?php echo base_url()?>Home/getGudangPusat",
                "dataSrc": ""
            },
            "destroy": true,
            "columns": [
            { "data": "nama_gudang_pusat" },
            { "data": "pasokan" }
            ],
            "searching": false,   // Search Box will Be Disabled
            "ordering": false,    // Ordering (Sorting on Each Column)will Be Disabled
            "info": false,         // Will show "1 to n of n entries" Text at bottom
            "lengthChange": false,
            "paging": false,
            "columnDefs": [
            { "width": '50%', "targets": 0 }
            ],
            "autoWidth": false
        });
    });
    // var tablemilist = "";
//     $(document).ready(function() {
//         $('#close_sales').hide();
//         var kalenderCreate  = "<?php echo $kalenderCreate ?>";
//         var kalenderModif   = "<?php echo $kalenderModif ?>";
//         // console.log(admin);
//         milist("All");
//         $( "#jenis_customer" ).change(function() {
//             $param=document.getElementById("jenis_customer").value;
//             milist($param);
//         });

//         function milist($param){
//             tablemilist = $('#tablemilist').DataTable( {
//                 "ajax": {
//                     "url": "<?php echo base_url()?>kalender/getMilist/"+$param,
//                     "dataSrc": ""
//                 },
//                 createdRow: function(row, data, dataIndex) {
//                     var sTitle = "List Kirim";
//                     $(row).attr('title', sTitle);
//                 },
//                 "destroy": true,
//                 "columns": [
//                 { "data": "milistId" },
//                 { "data": "namaPerson" },
//                 { "data": "alamat" },
//                 { "data": "kotanama" },
//                 { "data": "propNama" },
//                 { "data": "krmJumlah"}
//                 ],
//                 drawCallback: function () {
//                     $("#tablemilist tbody tr").popover({ 
//                         html: true,
//                         trigger: 'hover',
//                         placement: 'bottom',
//                         "content": function () {
//                          var data = tablemilist.row( this ).data();
//                          return "<div><table class='table table-striped'><tr><th>Nama Divisi</th><th>Jumlah</th></tr><tr><td>"+data['divNama']+"</td><td>"+data['krmJumlah']+"</td></tr></table></div>";
//                      }
//                  })
//                 }
//             });

//              // var tablemilist = $('#tablemilist').DataTable();
//              $('#tablemilist tbody').on('click', 'tr', function () {
//                 $('#UlJenisRelasi').empty(); //clear id UL
//                 var data            = tablemilist.row( this ).data();
//                 var divId           =  "<?php echo $this->session->userdata('div_id') ?>";
//                 var milistId        = data['milistId'];
//                 var namaPerson      = data['namaPerson'];
//                 var alamat          = data['alamat']+" "+data['kotanama']+" "+data['propNama'];
//                 var items           = []; 
//                 var jumlahkirim     = 0;
//                 var gudangid        = "";
//                 var gudangnama      = "";
//                 var peg_id          = "";
//                 var peg_nama        = "";//declaration of variable

//                 $("#namaPerson").val(namaPerson);
//                 $("#alamat").val(alamat);
//                 $("#milistId").val(milistId);//set value form by id

//                 $.ajax({
//                     type:'POST',
//                     url:'<?php echo base_url()?>kalender/getJenisRelasi/'+milistId,
//                     dataType: "json",
//                     success:function(data){
//                         $('#UlJenisRelasi').empty();
//                         $.each(data, function(i, item) {
//                             items.push('<li>' + item.jenisRelasi + '</li>');
//                         }); 
//                         $('#UlJenisRelasi').append( items.join('') );
//                     }
//                 });//add data to li tag

//                 $('#listkirim').DataTable( {
//                     "ajax": {
//                         "url": "<?php echo base_url()?>kalender/getKirimMilist/"+divId+"/"+milistId,
//                         "dataSrc": ""
//                     },
//                     "scrollY":"100px",
//                     "scrollCollapse": true,
//                     "paging":false,
//                     "destroy": true,
//                     "info": false,
//                     "filter":false,
//                     "columns": [
//                     { "data": "divNama" },
//                     { "data": "krmJumlah" },
//                     { "data": "gudangNama" },
//                     { "data": "pegNama" }
//                     ]
//                 });//get json data using ajax to set into datatable by id listkirim

//                 $.ajax({
//                     type:'POST',
//                     url:'<?php echo base_url()?>kalender/getKirimJumlah/'+divId+'/'+milistId,
//                     dataType: "json",
//                     success:function(data){
//                         if (data == ""){
//                             jumlahkirim     = 0;
//                             gudangid        = "";
//                             gudangnama      = "";
//                             peg_id          = "";
//                             peg_nama        = "";
//                             stsdata = "false";
//                         }else{
//                             jumlahkirim     = data[0]['krmJumlah'];
//                             gudangid        = data[0]['krmGudangId'];
//                             gudangnama      = data[0]['gudangNama'];
//                             peg_id          = data[0]['pegNoReg'];
//                             peg_nama        = data[0]['pegNama'];
//                             stsdata = "true";
//                         }
//                         $("#jumlahkirim").val(jumlahkirim);
//                         $("#gudangid").val(gudangid);
//                         $("#gudangnama").val(gudangnama);
//                         $("#peg_id").val(peg_id);
//                         $("#peg_nama").val(peg_nama);
//                         $("#stsdata").val(stsdata);
//                     }
//                 });

//                 // Get the modal
//                 var modal           = document.getElementById('myModal');
//                 var modal_pegawai   = document.getElementById('myModal-pegawai');
//                 var modal_gudang    = document.getElementById('myModal-gudang');
//                 var modal           = document.getElementById('myModal');

//                 //button
//                 var peg_id      = document.getElementById('peg_id');
//                 var peg_nama    = document.getElementById('peg_nama');
//                 var gudangnama  = document.getElementById('gudangnama');
//                 var simpan      = document.getElementById('simpan');
//                 var close_sales = document.getElementById('close_sales');

//                 // Get the <span> element that closes the modal
//                 var span    = document.getElementsByClassName("close")[0];
//                 var span1   = document.getElementsByClassName("close")[1];
//                 var span2   = document.getElementsByClassName("close")[2];

//                 // When the user clicks the button, open the modal 
//                 modal.style.display = "block";

//                 //clear data
//                 close_sales.onclick=function(){
//                     $("#peg_id").val("");
//                     $("#peg_nama").val("");
//                 }

//                 var tablelistpegawai = $('#listpegawai').DataTable( {
//                     "ajax": {
//                         "url": "<?php echo base_url()?>kalender/getAllListPegawai",
//                         "dataSrc": ""
//                     },
//                     "destroy": true,
//                     "columns": [
//                     { "data": "pegNoReg" },
//                     { "data": "pegNama" }
//                     ]
//                 });

//                 if(kalenderCreate == "Y" && kalenderModif == "Y"){
//                     $('#close_sales').show();
//                     peg_id.onclick=function(){
//                         modal_pegawai.style.display = "block";
//                         $('#listpegawai tbody').on('click', 'tr', function () {
//                             var data = tablelistpegawai.row( this ).data();
//                             $("#peg_id").val(data['pegNoReg']);
//                             $("#peg_nama").val(data['pegNama']);
//                             modal_pegawai.style.display = "none";
//                         })
//                     }
//                     peg_nama.onclick=function(){
//                         modal_pegawai.style.display = "block";
//                         $('#listpegawai tbody').on('click', 'tr', function () {
//                             var data = tablelistpegawai.row( this ).data();
//                             $("#peg_id").val(data['pegNoReg']);
//                             $("#peg_nama").val(data['pegNama']);
//                             modal_pegawai.style.display = "none";
//                         })
//                     }
//                     gudangnama.onclick=function(){
//                         modal_gudang.style.display = "block";
//                         var tablelistgudang = $('#listgudang').DataTable( {
//                             "ajax": {
//                                 "url": "<?php echo base_url()?>kalender/getAllListGudang",
//                                 "dataSrc": ""
//                             },
//                             "destroy": true,
//                             "columns": [
//                             { "data": "gudangId" },
//                             { "data": "gudangNama" }
//                             ]
//                         });

//                         $('#listgudang tbody').on('click', 'tr', function () {
//                             var data = tablelistgudang.row( this ).data();
//                             $("#gudangid").val(data['gudangId']);
//                             $("#gudangnama").val(data['gudangNama']);
//                             modal_gudang.style.display = "none";
//                         })
//                     }
//                 }

//                 // When the user clicks on <span> (x), close the modal
//                 span.onclick = function() {
//                     modal.style.display = "none";
//                 }
//                 span1.onclick = function() {
//                     modal_pegawai.style.display = "none";
//                 }
//                 span2.onclick = function() {
//                     modal_gudang.style.display = "none";
//                 }

//                 // When the user clicks anywhere outside of the modal, close it
//                 window.onclick = function(event) {
//                     if (event.target == modal_pegawai) {
//                         modal_pegawai.style.display = "none";
//                     }
//                     if (event.target == modal) {
//                         modal.style.display = "none";
//                     }
//                     if (event.target == modal_gudang) {
//                         modal_gudang.style.display = "none";
//                     }
//                 }
//                 if(kalenderCreate == "Y" && kalenderModif == "Y"){
//                     simpan.onclick = function() {
//                         var milistId    =   document.getElementById("milistId").value;
//                         var divId       =   "<?php echo $this->session->userdata('div_id') ?>";
//                         var jumlah      =   document.getElementById("jumlahkirim").value;
//                         var stsdata     =   document.getElementById("stsdata").value;
//                         var gudangId    =   document.getElementById("gudangid").value;
//                         var dikirmoleh  =   document.getElementById("peg_id").value;

//                         if(stsdata == "true"){
//                             if(gudangId == ""){
//                                 alert("Gudang harus diisi");
//                             }else{
//                                 $.ajax({
//                                     type:'POST',
//                                     url:'<?php echo base_url()?>kalender/updateJumlahKirim/'+milistId+'/'+divId+'/'+jumlah+'/'+gudangId+'/'+dikirmoleh,
//                                     dataType: "json",
//                                     success:function(data){
//                                         if (data == "1"){
//                                             alert("Data berhasil di Update");
//                                             $('#tablemilist').DataTable().ajax.reload();
//                                             modal.style.display = "none";
//                                         }
//                                     },
//                                     error: function (xhr, ajaxOptions, thrownError) {
//                                        alert(xhr.statusText);
//                                        alert(thrownError);
//                                    }  
//                                });
//                             }
//                         }else{
//                             if(gudangId == ""){
//                                 alert("Gudang harus diisi");
//                             }else{
//                                 $.ajax({
//                                     type:'POST',
//                                     url:'<?php echo base_url()?>kalender/insertKirim/'+milistId+'/'+divId+'/'+jumlah+'/'+gudangId+'/'+dikirmoleh,
//                                     dataType: "json",
//                                     success:function(data){
//                                         if (data == "1"){
//                                             alert("Data berhasil di simpan");
//                                             $('#tablemilist').DataTable().ajax.reload();
//                                             modal.style.display = "none";
//                                         }
//                                     },
//                                     error: function (xhr, ajaxOptions, thrownError) {
//                                         alert(xhr.statusText);
//                                         alert(thrownError);
//                                     }  
//                                 });
//                             }
//                         }
//                     // modal.style.display = "none";
//                 }
//             }
//         });
// }
// });
</script>