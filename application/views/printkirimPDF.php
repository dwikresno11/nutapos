<!DOCTYPE html>
<html>
<head>
	<title>Print Label</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- page specific plugin styles -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.custom.min.css" />
	<style type="text/css">
	.cstm-label{
		border-style: solid;
		border-width: 1px;
		margin-right: 2%;
		margin-bottom: 3%;
	}
	.col-xs-3{
		width: 31%;
		/*padding: 0px;*/
	}
	@page {
		size: landscape;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php
				// var_dump($query);
				foreach ($query as $value) {
					?>
					<div class="col-xs-3 cstm-label">
						<table width="100%">
							<tr align="right">
								<td width="40%">&nbsp</td>
								<td width="40%">&nbsp</td>
								<td style="text-align: center;border: 1px solid black;"><?php echo $value->krmJumlah ?></td>
							</tr>
							<tr>
								<td>Kepada Yth.</td>
								<td colspan="2" style="text-align: right;"><?php echo $value->krmMilistId ?></td>
							</tr>
							<tr>
								<td colspan="3"><p style="height: 15px;"><?php echo $value->namaPerson ?></p></td>
							</tr>
							<tr>
								<td colspan="3"><p style="height: 15px;">
									<?php
									if($value->Namalembaga!=""){
										echo $value->Namalembaga;
									}else{
										echo "&nbsp";
									}
									?></p>
								</td>
							</tr>
							<tr>
								<td colspan="3"><p style="height: 15px;"><?php echo $value->alamat ?></p></td>
							</tr>
							<tr>
								<td colspan="3">&nbsp</td>
							</tr>
							<tr>
								<td colspan="3"><?php echo $value->kotanama." ".$value->propnama ?></td>
							</tr>
						</table>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>