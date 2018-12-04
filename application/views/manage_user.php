<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal-akses {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 3; /* Sit on top */
    padding-top: 10%; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content-akses {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    /*padding-top: */
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
                <li class="active">Manage User</li>
            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                        <i class="ace-icon fa fa-search nav-search-icon"></i>
                    </span>
                </form>
            </div><!-- /.nav-search -->
            <div class="nav-search" style="padding-right: 165px;">
                <div id="txt"> </div>
            </div>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-sm-12">
                    <button id="adduser" type="button" class="btn btn-outline-primary"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Tambah User</button>
                    <!-- PAGE CONTENT BEGINS -->
                    <?php
                    // var_dump($milist);
                    ?>
                    <div class="clearfix">
                        <div class="pull-left tableTools-container"></div>
                    </div>
                    <table id="tableuser" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th width="20%">No Pegawai</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                    </table>
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div>
<!-- MODAL DIALOG -->
<div id="myModal-akses" class="modal-akses">
    <!-- Modal content -->
    <div class="modal-content-akses">
        <span class="close">&times;</span>
        <div class="row">
            <div class="col-xs-12">
                <div class="widget-box">
                    <input id="pegNoReg" type="" name="" hidden="">
                    <div class="widget-header">
                        <h4 class="widget-title">list Akses</h4>
                        <!-- <span id="pegNoReg"></span>  -->
                    </div>

                    <div class="widget-body">
                        <div class="widget-main">
                            <div class="row">
                             <div class="col-md-12">
                                <table id="listakses" class="table order-akses">
                                    <form id="formakses" action="/page/users" method="post">
                                        <thead>
                                            <tr>
                                                <th width="20%">Menu</th>
                                                <th>Akses</th>
                                                <th>Create</th>
                                                <th>Modify</th>
                                                <th>Validasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </form>
                                </table>

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

<script type="text/javascript">
  $(document).ready(function() {
    jQuery(function($) {
        var tableuser = $('#tableuser').DataTable( {
            "ajax": {
                "url": "<?php echo base_url()?>user/getUser",
                "dataSrc": ""
            },
            "columns": [
            { "data": "pegNoReg" },
            { "data": "pegNama" }
            ]
        });

        var modal   = document.getElementById('myModal-akses');
        var myModalpegawai   = document.getElementById('myModal-pegawai');

        var adduser   = document.getElementById('adduser');

        // Get the <span> element that closes the modal
        var span    = document.getElementsByClassName("close")[0];
        var span1    = document.getElementsByClassName("close")[1];

        span.onclick = function() {
            modal.style.display = "none";
        }
        span1.onclick = function() {
            myModalpegawai.style.display = "none";
        }

        adduser.onclick = function() {
            myModalpegawai.style.display = "block";
            var tablelistpegawai = $('#listpegawai').DataTable( {
                "ajax": {
                    "url": "<?php echo base_url()?>user/allPegawaiNotInUser",
                    "dataSrc": ""
                },
                "destroy": true,
                "columns": [
                { "data": "pegNoReg" },
                { "data": "pegNama" }
                ]
            });
            $('#listpegawai tbody').on('dblclick', 'tr', function () {
                var data = tablelistpegawai.row( this ).data();
                // $("#peg_id").val(data['pegNoReg']);
                // $("#peg_nama").val(data['pegNama']);
                $.ajax({
                    type:'POST',
                    url:'<?php echo base_url()?>user/addUser/'+data['pegNoReg'],
                    dataType: "json",
                    success:function(data){
                        if (data == "1"){
                            alert("Data berhasil di tambah");
                            $('#tableuser').DataTable().ajax.reload();
                            myModalpegawai.style.display = "none";
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                       alert(xhr.statusText);
                       alert(thrownError);
                   }  
               });
                // myModalpegawai.style.display = "none";
            })
        }


        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            if (event.target == myModalpegawai) {
                myModalpegawai.style.display = "none";
            }
        }

        $('#tableuser tbody').on('click', 'tr', function () {
            var data = tableuser.row( this ).data();
            modal.style.display = "block";
            $("#pegNoReg").val(data['pegNoReg']);
            var tablelistgudang = $('#listakses').DataTable( {
                "ajax": {
                    "url": "<?php echo base_url()?>user/listAkses/"+data['pegNoReg'],
                    "dataSrc": ""
                },
                "paging":false,
                "destroy": true,
                "info": false,
                "filter":false,
                "order":false,
                "columns": [
                { "data": "menuNama" },
                { "data": "privAkses" },
                { "data": "privCreate" },
                { "data": "privModif" },
                { "data": "privValidasi" }
                ],
                'columnDefs': [
                {
                    "targets": 1, 
                    "className": "text-center",
                    'render': function (data, type, full, meta){
                        if(data=="Y"){
                            return '<input class="call-checkbox" type="checkbox" name="akses[]" value="' + $('<div/>').text(data).html() + '" checked>';
                        }else{
                            return '<input class="call-checkbox" type="checkbox" name="akses[]" value="' + $('<div/>').text(data).html() + '" >';
                        }
                    }
                },
                {
                    "targets": 2,
                    "className": "text-center",
                    'render': function (data, type, full, meta){
                        if(data=="Y"){
                            return '<input class="call-checkbox" type="checkbox" name="create[]" value="' + $('<div/>').text(data).html() + '" checked>';
                        }else{
                            return '<input class="call-checkbox" type="checkbox" name="create[]" value="' + $('<div/>').text(data).html() + '" >';
                        }
                    }
                },
                {
                    "targets": 3,
                    "className": "text-center select-checkbox",
                    'render': function (data, type, full, meta){
                        if(data=="Y"){
                            return '<input class="call-checkbox" type="checkbox" name="modify[]" value="' + $('<div/>').text(data).html() + '" checked>';
                        }else{
                            return '<input class="call-checkbox" type="checkbox" name="modify[]" value="' + $('<div/>').text(data).html() + '" >';
                        }
                    }
                },
                {
                    "targets": 4,
                    "className": "text-center",
                    'render': function (data, type, full, meta){
                        console


                        if(data=="Y"){
                            return '<input class="call-checkbox" type="checkbox" name="validasi[]" value="' + $('<div/>').text(data).html() + '" checked>';
                        }else{
                            return '<input class="call-checkbox" type="checkbox" name="validasi[]" value="' + $('<div/>').text(data).html() + '" >';
                        }
                    }
                }],
            });
            // var table = $('#listakses').DataTable();
            $('#listakses tbody').on('click', 'tr', function () {
                var pegNoReg = document.getElementById("pegNoReg").value;
                // console.log(pegNoReg);
             // alert( table.cell( this ).data());
             // console.log( $('[name=akses[]').val() );
             var privAkses      = [];
             var privCreate     = [];
             var privModif      = [];
             var privValidasi   = [];
             // var kalender=[];
             $('table [type="checkbox"]').each(function(i, chk) {
                if (chk.checked) {
                    if(i==0 || i== 4){
                        privAkses.push("Y");
                    }
                    if(i==1 || i== 5){
                        privCreate.push("Y");
                    }
                    if(i==2 || i== 6){
                        privModif.push("Y");
                    }
                    if(i==3 || i== 7){
                        privValidasi.push("Y");
                    }
                }else{
                    if(i==0 || i== 4){
                        privAkses.push("N");
                    }
                    if(i==1 || i== 5){
                        privCreate.push("N");
                    }
                    if(i==2 || i== 6){
                        privModif.push("N");
                    }
                    if(i==3 || i== 7){
                        privValidasi.push("N");
                    }
                }
            });
             $.ajax({
                type:'POST',
                url:'<?php echo base_url()?>user/updateAkses/'+pegNoReg,
                data:{privAkses:privAkses,privCreate:privCreate,privModif:privModif,privValidasi:privValidasi},
                dataType: "html",
                success:function(data){
                    // console.log(data);
                        // if (data == "1"){
                        //     // alert("Data berhasil di tambah");
                        //     $('#tableuser').DataTable().ajax.reload();
                        //     myModalpegawai.style.display = "none";
                        // }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                       alert(xhr.statusText);
                       alert(thrownError);
                   }  
               });
             // console.log(admin);

         });
            // alert(data['pegNoReg']);
            // $("#peg_id").val(data['pegNoReg']);
            // $("#peg_nama").val(data['pegNama']);
            // modal_pegawai.style.display = "none";
        })
})
});

</script>