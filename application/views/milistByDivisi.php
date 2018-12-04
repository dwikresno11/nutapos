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
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
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
                <li class="active">Milist by Divisi</li>
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
                    <!-- PAGE CONTENT BEGINS -->
                    <?php
                    // var_dump($milist);
                    ?>
                    <div class="clearfix">
                        <div class="pull-left tableTools-container"></div>
                    </div>
                    <table id="tablemilist" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th width="10%">Milist ID</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jumlah</th>
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


<!-- MODAL DIALOG -->

<script type="text/javascript">
  $(document).ready(function() {
    var span        = document.getElementsByClassName("close")[0];
    span.onclick = function() {
        modalcetak.style.display = "none";
    }
});

</script>