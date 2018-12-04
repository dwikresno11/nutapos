<style type="text/css">
.space-4{
	/*margin: 10px 0 30px;*/
}
.form-group{
	margin-bottom: 60px;
	margin-left: 18%;
}
.profile-info-name {
	width: 111px;
}
</style>
<div class="main-content-inner">
	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i>
				<a href="<?php echo base_url();?>user">Home</a>
			</li>
			<li class="active">User Profile</li>
		</ul><!-- /.breadcrumb -->

		<div class="nav-search" id="nav-search">
			<form class="form-search">
				<span class="input-icon">
					<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
					<i class="ace-icon fa fa-search nav-search-icon"></i>
				</span>
			</form>
		</div>
		<div class="nav-search" style="padding-right: 165px;">
			<div id="txt"> </div>
		</div><!-- /.nav-search -->
	</div>

	<div class="page-content">
		<!-- /.ace-settings-container -->

		<div class="page-header">
			<h1>
				User Profile Page
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->
				<div class="clearfix">

						<?php
						if($this->session->flashdata('msg')){
							echo "<div class='alert alert-success'>".
							$this->session->flashdata('msg')."</div>";
						}
						?>
					
				</div>

				<div class="hr dotted"></div>

				<div>
					<div id="user-profile-2" class="user-profile">
						<div class="tabbable">
							<ul class="nav nav-tabs padding-18">
								<li class="active">
									<a data-toggle="tab" href="#home">
										<i class="green ace-icon fa fa-user bigger-120"></i>
										Profile
									</a>
								</li>

								<li>
									<a data-toggle="tab" href="#edit-password">
										<i class="blue ace-icon fa fa-key bigger-125"></i>
										Edit Password
									</a>
								</li>
							</ul>
							<form>
								<div class="tab-content profile-edit-tab-content">
									<div id="home" class="tab-pane in active">
										<div class="row">
											<div class="col-xs-12 col-sm-3 center">
												<span class="profile-picture">
													<img class="editable img-responsive" alt="Alex's Avatar" id="" src="<?php echo base_url();?>assets/images/avatars/profile-pic.jpg" />
												</span>
												<?php
												$userid= $this->session->userdata('user_id');
												$username= $this->session->userdata('user_name');
												$jenis_kelamin= $this->session->userdata('jenis_kelamin');
												$div_nama= $this->session->userdata('div_nama');
												?>

												<div class="space space-4"></div>
											</div><!-- /.col -->

											<div class="col-xs-12 col-sm-9">
												<h4 class="blue">
													<span class="middle"><?php echo $username ?></span>

													<span class="label label-purple arrowed-in-right">
														<i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
														online
													</span>
												</h4>

												<div class="profile-user-info">
													<div class="profile-info-row">
														<div class="profile-info-name"> Nomor Pegawai </div>

														<div class="profile-info-value">
															<span><?php echo $userid ?></span>
														</div>
													</div>
													<div class="profile-info-row">
														<div class="profile-info-name"> Jenis Kelamin </div>

														<div class="profile-info-value">
															<span><?php echo $jenis_kelamin ?> </span>
														</div>
													</div>

													<div class="profile-info-row">
														<div class="profile-info-name"> Divisi </div>

														<div class="profile-info-value">
															<i class="fa fa-map-marker light-orange bigger-110"></i>
															<span><?php echo $div_nama ?></span>
														</div>
													</div>
												</div>

												<div class="hr hr-8 dotted"></div>


											</div><!-- /.col -->
										</div><!-- /.row -->

										<div class="space-20"></div>


									</div><!-- /#home -->

									<div id="edit-password" class="tab-pane">
										<div class="space-10"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">New Password</label>

											<div class="col-sm-9">
												<input type="password" id="form-field-pass1" required="true" />
											</div>
										</div>

										<div class="space-4"></div>

										<div class="form-group" id="form-pass2">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Confirm Password</label>

											<div class="col-sm-9" style="width: 21%;padding-right: 0px;">
												<input type="password" id="form-field-pass2" required="true" />
												<i id="icon-error" class="ace-icon fa fa-times-circle hide"></i>
											</div>
											<div id="warning-error" class="hide help-block col-xs-2" style="margin-top: 8px"> Password tidak cocok 
											</div>
										</div>
										<div class="clearfix form-actions">
											<div class="col-md-offset-3 col-md-9">
												<button class="btn btn-info" type="submit" id="save">
													<i class="ace-icon fa fa-check bigger-110"></i>
													Save
												</button>

												&nbsp; &nbsp;
												<button class="btn" type="reset" id="reset">
													<i class="ace-icon fa fa-undo bigger-110"></i>
													Reset
												</button>
											</div>
										</div>
									</div>

									<!-- EDit Password -->


								</div>
							</form>
						</div>
					</div>
				</div>

				<!-- PAGE CONTENT ENDS -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.page-content -->
</div>

<script type="text/javascript">
	$(document).ready(function() {
		document.getElementById("form-pass2").onkeyup = function() {
			var pass1 	= document.getElementById("form-field-pass1").value;
			var pass2 	= document.getElementById("form-field-pass2").value;
			var user_id = "<?php echo $this->session->userdata('user_id'); ?>";
			// console.log(pass1,pass2);
			if(pass1==""){

			}else if(pass2==""){

			}else{
				if(pass1!=pass2){
					$( "#form-pass2" ).addClass( "has-error" );
					$( "#icon-error" ).removeClass( "hide" );
					$( "#warning-error" ).removeClass( "hide" );
					$( "#save").attr("disabled", "disabled");
				}else{
					$( "#form-pass2" ).removeClass( "has-error" );
					$( "#icon-error" ).addClass( "hide" );
					$( "#warning-error" ).addClass( "hide" );
					$( "#save").prop("disabled", false);

				}
			}
		};

		document.getElementById("save").onclick = function() {
			var pass1 	= document.getElementById("form-field-pass1").value;
			var pass2 	= document.getElementById("form-field-pass2").value;
			var user_id = "<?php echo $this->session->userdata('user_id'); ?>";
			// console.log(pass1,pass2);
			if(pass1==""){

			}else if(pass2==""){

			}else{
				if(pass1!=pass2){
					$( "#form-pass2" ).addClass( "has-error" );
					$( "#icon-error" ).removeClass( "hide" );
					$( "#warning-error" ).removeClass( "hide" );
					// $( "#save").attr("disabled", "disabled");
				}else{
					$( "#form-pass2" ).removeClass( "has-error" );
					$( "#icon-error" ).addClass( "hide" );
					$( "#warning-error" ).addClass( "hide" );
					// $( "#save").prop("disabled", false);
					$.ajax({
						type:'POST',
						url:'<?php echo base_url()?>user/update_password/'+user_id+'/'+pass2,
						dataType: "json",
						success:function(data){
							console.log(data);
							if (data == "1"){
								"<?php 
								$this->session->set_flashdata('msg', 'Password Berhasil di ubah'); ?>";
							}
						}
					});
				}
			}

		};
		document.getElementById("reset").onclick = function() {
			$( "#form-pass2" ).removeClass( "has-error" );
			$( "#icon-error" ).addClass( "hide" );
			$( "#warning-error" ).addClass( "hide" );
			$( "#save").prop("disabled", false);
		};

	});
</script>



<!-- inline scripts related to this page -->
