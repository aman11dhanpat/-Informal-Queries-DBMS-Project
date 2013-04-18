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
		<link href="<?php echo base_url(); ?>files/css/dashboard.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" media="screen" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
		<!--<script type="text/javascript" src="<?php echo base_url(); ?>files/js/jquery-1.8.2.min.js" ></script>
			<script type="text/javascript" src="<?php echo base_url(); ?>files/js/bootstrap.min.js" ></script>
			<script type="text/javascript" src="<?php echo base_url(); ?>files/js/bootbox.min.js"> </script>
			<script type="text/javascript" src="<?php echo base_url(); ?>files/scripts/dashboard.js" ></script>
			<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!--[if lt IE 9]>
		<script src="<?php echo base_url(); ?>files/js/html5shiv.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php echo $header; ?>
		<div id="dash_main">
			<div class="container">
				<form id="manual_search" method="post" action="">
					<div style="width: 750px;margin-left: auto;margin-right: auto;position: relative;">
						<span><?php echo $from_stations; ?></span>
						<span style="margin-left: 25px;"><?php echo $to_stations; ?></span>
						<span style="margin-left: 25px;">
							<span id="datetimepicker" class="input-append date">
							      <input id="date" name="date" type="text" placeholder="YYYY-MM-DD"></input>
							      <span class="add-on fui-calendar-24">
							      </span>
							</span>
						</span>
						</span>
						<br />
						<a href="#" id="dash_search" class="btn btn-large btn-block btn-primary">Search Flights</a>
					</div>
				</form>
				<div class="todo mrm" style="margin-top:50px;">
					<div class="todo-search" style="background-color:#1ABC9C;">
						<input id="search" class="todo-search-field" type="search" style="width:875px;" value="" placeholder="Or... Enter your query here... Press Enter when done.">
					</div>
					<ul id="dash_result">
						<!--<li class="todo-done">
							<div class="todo-icon fui-man-24"></div>
							<div class="todo-content">
								<h4 class="todo-name">
									Meet <strong>Adrian</strong> at <strong>6pm</strong>
								</h4>
								Times Square
							</div>
						</li>
						<li>
							<div class="todo-icon fui-menu-24"></div>
							<div class="todo-content">
								<h4 class="todo-name">
									Chat with <strong>V.Kudinov</strong>
								</h4>
								Skype conference an 9 am
							</div>
						</li>
						<li>
							<div class="todo-icon fui-eye-24"></div>
							<div class="todo-content">
								<h4 class="todo-name">
									Watch <strong>Iron Man</strong>
								</h4>
								1998 Broadway
							</div>
						</li>
						<li>
							<div class="todo-icon fui-time-24"></div>
							<div class="todo-content">
								<h4 class="todo-name">
									Fix bug on a <strong>Website</strong>
								</h4>
								As soon as possible
							</div>
						</li>-->
					</ul>
				</div>
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
		<!--<script src="http://vjs.zencdn.net/c/video.js"></script>-->
		<script src="<?php echo base_url(); ?>files/js/application.js"></script>
			<script type="text/javascript" src="<?php echo base_url(); ?>files/js/bootstrap.min.js" ></script>
			<script type="text/javascript" src="<?php echo base_url(); ?>files/js/bootbox.min.js"> </script>
			<script type="text/javascript" src="<?php echo base_url(); ?>files/scripts/dashboard.js" ></script>
		        <script type="text/javascript" src="<?php echo base_url(); ?>files/js/bootstrap-datetimepicker.min.js"></script>
    <!--<script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>-->
		<!--[if lt IE 8]>
		<script src="<?php echo base_url(); ?>files/js/icon-font-ie7.js"></script>
		<script src="<?php echo base_url(); ?>files/js/icon-font-ie7-24.js"></script>
		<![endif]-->
		<footer>
			<div class="container">
				<center> <strong>Informal Queries</strong> &copy; Developed by <strong>Aman Verma</strong> (U10CO028) @ SVNIT </center>
			</div>
		</footer>
	</body>
</html>
