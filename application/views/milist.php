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
                    <a href="<?php echo base_url()?>user">Home</a>
                </li>
                <li class="active">Milist</li>
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

                Jenis Customer</label>
                <select class="form-control" id="jenis_customer">
                    <option value="All">.::Pilih::.</option>
                    <option value="KBS">CUSTOMER KBS</option>
                    <option value="MEMBER">CUSTOMER MEMBER</option>
                    <option value="CETAK">CUSTOMER CETAK</option>
                    <option value="PENGARANG">PENGARANG</option>
                    <option value="SUPPLIER">SUPPLIER</option>
                </select>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <?php
                    // var_dump($milist);
                    ?>
                    <table id="tablemilist" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th width="10%">Milist ID</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Kota</th>
                                <th>Provinsi</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th width="10%">Milist ID</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Kota</th>
                                <th>Provinsi</th>
                                <th>Jumlah</th>
                            </tr>
                        </tfoot>
                    </table>
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div>
<!-- MODAL DIALOG -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="row">
        <div class="col-xs-12">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title">Form Kirim</h4>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <div class="row">
                         <div class="col-md-12">
                            <!-- <form> -->
                                <table id="formKirim" class="table order-formKirim">
                                    <thead>
                                    </thead>
                                    <tbody>
                                        <!-- <input id="milistId" type="text" name="" hidden> -->
                                        <input id="stsdata" type="text" name="" hidden>
                                        <tr>
                                            <td> Milist ID </td>
                                            <td>:</td>
                                            <td><input id="milistId" type="text" name="" readonly="true" style="width:100%"></td>
                                        </tr>
                                        <tr>
                                            <td> Nama </td>
                                            <td>:</td>
                                            <td><input id="namaPerson" type="text" name="" readonly="true" style="width:100%"></td>
                                        </tr>
                                        <tr>
                                            <td> Alamat </td>
                                            <td>:</td>
                                            <td><textarea id="alamat" readonly="true" style="width: 100%"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td> Jenis Relasi </td>
                                            <td>:</td>
                                            <td><ul id="UlJenisRelasi">
                                            </ul></td>
                                        </tr>
                                        <tr colspan="3">
                                            <td colspan="3">
                                                <table id="listkirim" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th> Divisi Pengirim </th>
                                                            <th> Jumlah Kirim</th>
                                                            <th> Gudang</th>
                                                            <th> Dikirim Oleh</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Jumlah Kirim </td>
                                            <td>:</td>
                                            <td><input id="jumlahkirim" min="0" type="number" name="" <?php if($kalenderCreate != "Y" && $kalenderCreate != "Y"){ echo "readonly"; } ?>></td>
                                        </tr>
                                        <tr>
                                            <td> Gudang</td>
                                            <td>:</td>
                                            <td hidden=""><input id="gudangid" min="0" type="number" name=""></td>
                                            <td><input id="gudangnama" size="30" type="" name="" readonly="true"></td>
                                        </tr>
                                        <tr>
                                            <td>Dikirim Oleh</td>
                                            <td>:</td>
                                            <td><input id="peg_id" size="4" type="" name="" readonly="true">&nbsp;&nbsp;<input id="peg_nama" size="30" type="" name="" readonly="">&nbsp<i id="close_sales" class="fa fa-close" style="font-size:20px;color:red"></i></td>
                                            
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <?php
                                if($this->session->userdata('akses')!=NULL){
                                    // var_dump($kalender->privCreate);
                                    if($kalenderCreate == "Y" and $kalenderModif == "Y" ){
                                        ?>
                                        <button id="simpan" class="btn-warning" style="position: relative;left: 85%">
                                            SIMPAN
                                        </button>
                                        <?php
                                    }
                                }                                
                                ?>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

<!-- MODAL DIALOG -->
<!-- MODAL DIALOG PEGAWAI-->
<div id="myModal-pegawai" class="modal-pegawai">
    <!-- Modal content -->
    <div class="modal-content-pegawai">
        <span class="close">&times;</span>
        <div class="row">
            <div class="col-xs-12">
                <div class="widget-box">
                    <div class="widget-header">
                        <h4 class="widget-title">List Pegawai</h4>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main">
                            <div class="row">
                             <div class="col-md-12">
                                <!-- <form> -->
                                    <table id="listpegawai" class="table order-pegawai" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th width="20%">ID Pegawai</th>
                                                <th>Nama Pegawai</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>

                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL DIALOG PEGAWAI-->
<!-- MODAL DIALOG GUDANG-->
<div id="myModal-gudang" class="modal-gudang">
    <!-- Modal content -->
    <div class="modal-content-gudang">
        <span class="close">&times;</span>
        <div class="row">
            <div class="col-xs-12">
                <div class="widget-box">
                    <div class="widget-header">
                        <h4 class="widget-title">List Gudang</h4>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main">
                            <div class="row">
                             <div class="col-md-12">
                                <!-- <form> -->
                                    <table id="listgudang" class="table order-pegawai">
                                        <thead>
                                            <tr>
                                                <th width="20%">ID Gudang</th>
                                                <th>Nama Gudang</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL DIALOG PEGAWAI-->

<script type="text/javascript">
    var tablemilist = "";
    $(document).ready(function() {
        $('#close_sales').hide();
        var kalenderCreate  = "<?php echo $kalenderCreate ?>";
        var kalenderModif   = "<?php echo $kalenderModif ?>";
        // console.log(admin);
        milist("All");
        $( "#jenis_customer" ).change(function() {
            $param=document.getElementById("jenis_customer").value;
            milist($param);
        });

        function milist($param){
            tablemilist = $('#tablemilist').DataTable( {
                "ajax": {
                    "url": "<?php echo base_url()?>kalender/getMilist/"+$param,
                    "dataSrc": ""
                },
                createdRow: function(row, data, dataIndex) {
                    var sTitle = "List Kirim";
                    $(row).attr('title', sTitle);
                },
                "destroy": true,
                "columns": [
                { "data": "milistId" },
                { "data": "namaPerson" },
                { "data": "alamat" },
                { "data": "kotanama" },
                { "data": "propNama" },
                { "data": "krmJumlah"}
                ],
                drawCallback: function () {
                    $("#tablemilist tbody tr").popover({ 
                        html: true,
                        trigger: 'hover',
                        placement: 'bottom',
                        "content": function () {
                           var data = tablemilist.row( this ).data();
                           return "<div><table class='table table-striped'><tr><th>Nama Divisi</th><th>Jumlah</th></tr><tr><td>"+data['divNama']+"</td><td>"+data['krmJumlah']+"</td></tr></table></div>";
                       }
                   })
                }
            });

             // var tablemilist = $('#tablemilist').DataTable();
             $('#tablemilist tbody').on('click', 'tr', function () {
                $('#UlJenisRelasi').empty(); //clear id UL
                var data            = tablemilist.row( this ).data();
                var divId           =  "<?php echo $this->session->userdata('div_id') ?>";
                var milistId        = data['milistId'];
                var namaPerson      = data['namaPerson'];
                var alamat          = data['alamat']+" "+data['kotanama']+" "+data['propNama'];
                var items           = []; 
                var jumlahkirim     = 0;
                var gudangid        = "";
                var gudangnama      = "";
                var peg_id          = "";
                var peg_nama        = "";//declaration of variable

                $("#namaPerson").val(namaPerson);
                $("#alamat").val(alamat);
                $("#milistId").val(milistId);//set value form by id

                $.ajax({
                    type:'POST',
                    url:'<?php echo base_url()?>kalender/getJenisRelasi/'+milistId,
                    dataType: "json",
                    success:function(data){
                        $('#UlJenisRelasi').empty();
                        $.each(data, function(i, item) {
                            items.push('<li>' + item.jenisRelasi + '</li>');
                        }); 
                        $('#UlJenisRelasi').append( items.join('') );
                    }
                });//add data to li tag

                $('#listkirim').DataTable( {
                    "ajax": {
                        "url": "<?php echo base_url()?>kalender/getKirimMilist/"+divId+"/"+milistId,
                        "dataSrc": ""
                    },
                    "scrollY":"100px",
                    "scrollCollapse": true,
                    "paging":false,
                    "destroy": true,
                    "info": false,
                    "filter":false,
                    "columns": [
                    { "data": "divNama" },
                    { "data": "krmJumlah" },
                    { "data": "gudangNama" },
                    { "data": "pegNama" }
                    ]
                });//get json data using ajax to set into datatable by id listkirim

                $.ajax({
                    type:'POST',
                    url:'<?php echo base_url()?>kalender/getKirimJumlah/'+divId+'/'+milistId,
                    dataType: "json",
                    success:function(data){
                        if (data == ""){
                            jumlahkirim     = 0;
                            gudangid        = "";
                            gudangnama      = "";
                            peg_id          = "";
                            peg_nama        = "";
                            stsdata = "false";
                        }else{
                            jumlahkirim     = data[0]['krmJumlah'];
                            gudangid        = data[0]['krmGudangId'];
                            gudangnama      = data[0]['gudangNama'];
                            peg_id          = data[0]['pegNoReg'];
                            peg_nama        = data[0]['pegNama'];
                            stsdata = "true";
                        }
                        $("#jumlahkirim").val(jumlahkirim);
                        $("#gudangid").val(gudangid);
                        $("#gudangnama").val(gudangnama);
                        $("#peg_id").val(peg_id);
                        $("#peg_nama").val(peg_nama);
                        $("#stsdata").val(stsdata);
                    }
                });
                
                // Get the modal
                var modal           = document.getElementById('myModal');
                var modal_pegawai   = document.getElementById('myModal-pegawai');
                var modal_gudang    = document.getElementById('myModal-gudang');
                var modal           = document.getElementById('myModal');

                //button
                var peg_id      = document.getElementById('peg_id');
                var peg_nama    = document.getElementById('peg_nama');
                var gudangnama  = document.getElementById('gudangnama');
                var simpan      = document.getElementById('simpan');
                var close_sales = document.getElementById('close_sales');

                // Get the <span> element that closes the modal
                var span    = document.getElementsByClassName("close")[0];
                var span1   = document.getElementsByClassName("close")[1];
                var span2   = document.getElementsByClassName("close")[2];
                
                // When the user clicks the button, open the modal 
                modal.style.display = "block";

                //clear data
                close_sales.onclick=function(){
                    $("#peg_id").val("");
                    $("#peg_nama").val("");
                }
                
                var tablelistpegawai = $('#listpegawai').DataTable( {
                    "ajax": {
                        "url": "<?php echo base_url()?>kalender/getAllListPegawai",
                        "dataSrc": ""
                    },
                    "destroy": true,
                    "columns": [
                    { "data": "pegNoReg" },
                    { "data": "pegNama" }
                    ]
                });

                if(kalenderCreate == "Y" && kalenderModif == "Y"){
                    $('#close_sales').show();
                    peg_id.onclick=function(){
                        modal_pegawai.style.display = "block";
                        $('#listpegawai tbody').on('click', 'tr', function () {
                            var data = tablelistpegawai.row( this ).data();
                            $("#peg_id").val(data['pegNoReg']);
                            $("#peg_nama").val(data['pegNama']);
                            modal_pegawai.style.display = "none";
                        })
                    }
                    peg_nama.onclick=function(){
                        modal_pegawai.style.display = "block";
                        $('#listpegawai tbody').on('click', 'tr', function () {
                            var data = tablelistpegawai.row( this ).data();
                            $("#peg_id").val(data['pegNoReg']);
                            $("#peg_nama").val(data['pegNama']);
                            modal_pegawai.style.display = "none";
                        })
                    }
                    gudangnama.onclick=function(){
                        modal_gudang.style.display = "block";
                        var tablelistgudang = $('#listgudang').DataTable( {
                            "ajax": {
                                "url": "<?php echo base_url()?>kalender/getAllListGudang",
                                "dataSrc": ""
                            },
                            "destroy": true,
                            "columns": [
                            { "data": "gudangId" },
                            { "data": "gudangNama" }
                            ]
                        });

                        $('#listgudang tbody').on('click', 'tr', function () {
                            var data = tablelistgudang.row( this ).data();
                            $("#gudangid").val(data['gudangId']);
                            $("#gudangnama").val(data['gudangNama']);
                            modal_gudang.style.display = "none";
                        })
                    }
                }

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                }
                span1.onclick = function() {
                    modal_pegawai.style.display = "none";
                }
                span2.onclick = function() {
                    modal_gudang.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal_pegawai) {
                        modal_pegawai.style.display = "none";
                    }
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                    if (event.target == modal_gudang) {
                        modal_gudang.style.display = "none";
                    }
                }
                if(kalenderCreate == "Y" && kalenderModif == "Y"){
                    simpan.onclick = function() {
                        var milistId    =   document.getElementById("milistId").value;
                        var divId       =   "<?php echo $this->session->userdata('div_id') ?>";
                        var jumlah      =   document.getElementById("jumlahkirim").value;
                        var stsdata     =   document.getElementById("stsdata").value;
                        var gudangId    =   document.getElementById("gudangid").value;
                        var dikirmoleh  =   document.getElementById("peg_id").value;

                        if(stsdata == "true"){
                            if(gudangId == ""){
                                alert("Gudang harus diisi");
                            }else{
                                $.ajax({
                                    type:'POST',
                                    url:'<?php echo base_url()?>kalender/updateJumlahKirim/'+milistId+'/'+divId+'/'+jumlah+'/'+gudangId+'/'+dikirmoleh,
                                    dataType: "json",
                                    success:function(data){
                                        if (data == "1"){
                                            alert("Data berhasil di Update");
                                            $('#tablemilist').DataTable().ajax.reload();
                                            modal.style.display = "none";
                                        }
                                    },
                                    error: function (xhr, ajaxOptions, thrownError) {
                                     alert(xhr.statusText);
                                     alert(thrownError);
                                 }  
                             });
                            }
                        }else{
                            if(gudangId == ""){
                                alert("Gudang harus diisi");
                            }else{
                                $.ajax({
                                    type:'POST',
                                    url:'<?php echo base_url()?>kalender/insertKirim/'+milistId+'/'+divId+'/'+jumlah+'/'+gudangId+'/'+dikirmoleh,
                                    dataType: "json",
                                    success:function(data){
                                        if (data == "1"){
                                            alert("Data berhasil di simpan");
                                            $('#tablemilist').DataTable().ajax.reload();
                                            modal.style.display = "none";
                                        }
                                    },
                                    error: function (xhr, ajaxOptions, thrownError) {
                                        alert(xhr.statusText);
                                        alert(thrownError);
                                    }  
                                });
                            }
                        }
                    // modal.style.display = "none";
                }
            }
        });
}
});
</script>