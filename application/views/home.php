<style type="text/css">
.modal-cetak {
	display: none; /* Hidden by default */
	position: fixed; /* Stay in place */
	z-index: 3; /* Sit on top */
	padding-top: 100px; /* Location of the box */
	left: 0;
	top: 0;
	width: 100%; /* Full width */
	height: 100%; /* Full height */
	overflow: auto; /* Enable scroll if needed */
	background-color: rgb(0,0,0); /* Fallback color */
	background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content-cetak {
	background-color: #fefefe;
	margin: auto;
	padding: 5px;
	border: 1px solid #888;
	width: 50%;
}
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
</style>
<body class="no-skin"  onload="startTime()" >	
	<div id="navbar" class="navbar navbar-default ace-save-state navbar-fixed-top">
		<div class="navbar-container ace-save-state" id="navbar-container">
			<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
				<span class="sr-only">Toggle sidebar</span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>
			</button>

			<div class="navbar-header pull-left">
				<a href="<?php echo base_url();?>" class="navbar-brand">
					<small>
						<i class="fa fa-leaf"></i>
						Perbandingan Biaya Kopra
					</small> 
				</a>
			</div>

			<div class="navbar-buttons navbar-header pull-right" role="navigation">
				<ul class="nav ace-nav">
					<li class="light-blue dropdown-modal">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<?php 
							if($this->session->userdata('jenis_kelamin')== "LAKI-LAKI"){
								?>
								<img class="nav-user-photo" src="<?php echo base_url();?>assets/images/avatars/avatar4.png" alt="Jason's Photo" />
								<?php
							}else{
								?>
								<img class="nav-user-photo" src="<?php echo base_url();?>assets/images/avatars/avatar3.png" alt="Jason's Photo" />
								<?php
							}
							?>
							<span class="user-info">
								<small>Welcome</small>
								<?php echo $this->session->userdata('user_name'); ?>
							</span>

							<i class="ace-icon fa fa-caret-down"></i>
						</a>

						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close" >
							<!-- <li>
								<a href="#">
									<i class="ace-icon fa fa-cog"></i>
									Settings
								</a>
							</li> -->

							<li>
								<a href="<?php echo base_url(); ?>user/user_profile">
									<i class="ace-icon fa fa-user"></i>
									Profile
								</a>
							</li>

							<li class="divider"></li>

							<li>
								<a href="<?php echo base_url(); ?>user/userlogout">
									<i class="ace-icon fa fa-power-off"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.navbar-container -->
	</div>

	<div class="main-container ace-save-state" id="main-container">
		<script type="text/javascript">
			try{ace.settings.loadState('main-container')}catch(e){}
		</script>

		<div id="sidebar" class="sidebar responsive ace-save-state compact">
			<script type="text/javascript">
				try{ace.settings.loadState('sidebar')}catch(e){}
			</script>


				<ul class="nav nav-list">
					
					<?php
					if($subpage=="home"){
						echo "<li class='active hover'>";
					}else{
						echo "<li>";
					}
					?>
					<a href="<?php echo base_url(); ?>home">
						<i class="menu-icon fa fa-list"></i>
						<span class="menu-text"> Home </span>
					</a>

					<b class="arrow"></b>
				</li>
				<?php
					if($subpage=="milist"){
						echo "<li class='active hover'>";
					}else{
						echo "<li>";
					}
					?>
					<a href="<?php echo base_url(); ?>kalender/milist">
						<i class="menu-icon fa fa-list"></i>
						<span class="menu-text"> Milist </span>
					</a>

					<b class="arrow"></b>
				</li>
				<?php
				if($subpage=="milistByDivisi"){
					echo "<li class='active hover'>";
				}else{
					echo "<li>";
				}
				?>
				<a href="<?php echo base_url(); ?>kalender/milistByDivisi">
					<i class="menu-icon fa fa-list"></i>
					<span class="menu-text"> Milist by Divisi </span>
				</a>

				<b class="arrow"></b>
			</li>
			<?php 
			if($this->session->userdata('print')=='Y'){
				?>
				<li id="cetak">
					<a href="#">
						<i class="menu-icon fa fa-print"></i>
						<span class="menu-text"> Cetak Label </span>
					</a>
					<b class="arrow"></b>
				</li>
				<?php
			}
			?>
			<?php
			if($adminAkses=="Y"){
				if($subpage=="manage_user"){
					echo "<li class='active hover'>";
				}else{
					echo "<li>";
				}
				?>
				<a href="<?php echo base_url(); ?>user/manage_user">
					<i class="menu-icon fa fa-user"></i>
					<span class="menu-text"> Manage User </span>
				</a>
				<b class="arrow"></b>
			</li>
			<?php
		}
		?>


	</ul><!-- /.nav-list -->

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state compact" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>

<div class="main-content">
	<?php
	if($subpage=="home"){
		include 'dashboard.php';
	}if($subpage=="profile"){
		include 'profile.php';
	}
	if($subpage=="milist"){
		include 'milist.php';
	}
	if($subpage=="milistByDivisi"){
		include 'milistByDivisi.php';
	}
	if($subpage=="manage_user"){
		include 'manage_user.php';
	}
	?>
</div><!-- /.main-content -->

<div class="footer">
	<div class="footer-inner">
		<div class="footer-content">
			<span class="bigger-120">
				<span class="blue bolder">Perbandingan Biaya Kopra</span>
				BIBAL &copy; 2018 <?php if(date("Y")!="2018") echo "-".date("Y"); ?>
			</span>

			&nbsp; &nbsp;
			<span class="action-buttons">
				<a href="#">
					<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
				</a>

				<a href="#">
					<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
				</a>

				<a href="#">
					<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
				</a>
			</span>
		</div>
	</div>
</div>

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!-- MODAL DIALOG GUDANG-->
<div id="myModal-cetak" class="modal-cetak">
	<!-- Modal content -->
	<div class="modal-content-cetak">
		<span class="close" id="close-cetak">&times;</span>
		<div class="row">
			<div class="col-xs-12">
				<div class="widget-box">
					<div class="widget-header">
						<h4 class="widget-title">Filter Cetak</h4>
					</div>

					<div class="widget-body">
						<div class="widget-main">
							<div class="row">
								<div class="col-md-12">
									<!-- <form> -->
										<table id="listgudang" class="table order-pegawai">
											<thead>
											</thead>
											<tbody>
												<tr>
													<td>Gudang</td>
													<td>:</td>
													<td>
														<select id="gudang"></select>
													</td>
												</tr>
												<tr>
													<td>Kirim Sendiri</td>
													<td>:</td>
													<td>
														<input id="sendiri" type="checkbox" name="">
													</td>
												</tr>
											</tbody>
										</table>
										<button id="print" class="btn btn-warning" style="position: relative;left: 87%;">Cetak</button>
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
			// Get the modal
			var modalcetak 	= document.getElementById('myModal-cetak');

			//button
			var cetak 		= document.getElementById('cetak');
			var close_cetak 		= document.getElementById('close-cetak');
			var print 		= document.getElementById('print');

			

			//clear data
			cetak.onclick=function(){
				let gudang    = $('#gudang');
				gudang.empty();
				gudang.append('<option selected="true" value="semua">.::Semua Gudang::.</option>');
				gudang.prop('selectedIndex', 0);


				$.ajax({
					type:'POST',
					url:'<?php echo base_url()?>kalender/getAllListGudang/',
					dataType: "json",
					success:function(data){
						// console.log(data);
						// var obj=data.rajaongkir.results;
						$.each(data, function(k, v) {
							// console.log(v.gudangId);
							gudang.append($('<option></option>').attr('value', v.gudangId).text(v.gudangNama));
						});
					}
				});
				// When the user clicks the button, open the modal 
				modalcetak.style.display = "block";
				// var span 		= document.getElementsByClassName("close")[0];
				close_cetak.onclick = function () {
                    modalcetak.style.display = "none";
                }

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == modalcetak) {
					modalcetak.style.display = "none";
				}
			}

			print.onclick=function(){
				var sales;
				if($('#sendiri').is(":checked")){
					sales=true;
				}else{
					sales=false;
				}
				var gudang = $('#gudang').val();
				console.log($('#gudang').val());
				window.open('<?php echo base_url(); ?>kalender/print_label/'+gudang+'/'+sales, '_blank');
			}
		}


	});
</script>
