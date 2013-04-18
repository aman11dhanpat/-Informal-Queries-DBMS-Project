<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Loading Bootstrap -->
		<link href="<?php echo base_url(); ?>files/css/bootstrap.css" rel="stylesheet">
		<!-- Loading Flat UI -->
		<link href="<?php echo base_url(); ?>files/css/flat-ui.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>files/css/profile.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" media="screen" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!--[if lt IE 9]>
		<script src="<?php echo base_url(); ?>files/js/html5shiv.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php echo $header; ?>
		<div id="dash_main">
			<div class="container" style="margin-top: 50px;">
			  <h3 class="demo-panel-title"> <?php echo $conf_text; ?> </h3>
			  <form action="" method="post">
			    <div style="display: table;">
				<div style="display: table-row;">
				    <div style="display: table-cell;">Full Name: </div>
				    <div style="display: table-cell;"><input name="fname" type="text" value="<?php echo $this->session->userdata('fname'); ?>" placeholder="Full Name" class="span3"></div>
				    <div style="display: table-cell;"><?php echo form_error('name'); ?></div>
				</div>
				<div style="display: table-row;">
				    <div style="display: table-cell;">Email Address: </div>
				    <div style="display: table-cell;"><input name="email_dis" type="text" value="<?php echo $this->session->userdata('email'); ?>" disabled="disabled" class="span3"><input type="hidden" name="email" value="<?php echo $this->session->userdata('email'); ?>"></div>
				    <div style="display: table-cell;"><?php echo form_error('email'); ?></div>
				</div>
				<div style="display: table-row;">
				    <div style="display: table-cell;">New Password: </div>
				    <div style="display: table-cell;"><input name="new_pass" type="password" value="" class="span3"></div>
				    <div style="display: table-cell;"><?php echo form_error('new_pass'); ?></div>
				</div>
				<div style="display: table-row;">
				    <div style="display: table-cell;">Confirm New Password: </div>
				    <div style="display: table-cell;"><input name="conf_new_pass" type="password" value="" class="span3"></div>
				    <div style="display: table-cell;"><?php echo form_error('conf_new_pass'); ?></div>
				</div>
				<div style="display: table-row;">
				    <div style="display: table-cell;">Old Password: </div>
				    <div style="display: table-cell;"><input name="old_pass" type="password" value="" class="span3"></div>
				    <div style="display: table-cell;"><?php echo form_error('old_pass'); ?></div>
				</div>
			    </div>
			  <input type="submit" class="btn btn-large btn-primary">
			  </form>
			</div>
		</div>
		<script src="<?php echo base_url(); ?>files/js/jquery-1.8.2.min.js"></script>
		<script src="<?php echo base_url(); ?>files/js/jquery-ui-1.10.0.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>files/js/jquery.dropkick-1.0.0.js"></script>
		<script src="<?php echo base_url(); ?>files/js/custom_checkbox_and_radio.js"></script>
		<script src="<?php echo base_url(); ?>files/js/custom_radio.js"></script>
		<script src="<?php echo base_url(); ?>files/js/jquery.tagsinput.js"></script>
		<script src="<?php echo base_url(); ?>files/js/bootstrap-tooltip.js"></script>
		<script src="<?php echo base_url(); ?>files/js/jquery.placeholder.js"></script>
		<footer>
			<div class="container">
				<center> <strong>Informal Queries</strong> &copy; Developed by <strong>Aman Verma</strong> (U10CO028) @ SVNIT </center>
			</div>
		</footer>
	</body>
</html>
