<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--<link rel="stylesheet" href="<?php echo base_url('/css/theme.css')?>" />-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>css/theme.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	
</head>

<body>
	<div id="#container">

		<div id="header">
			<!--header start here -->
			<!--<?php echo $_header; ?>-->
			<h1 align="center">This is the main template</h1>
			<!-- header end-->
			<div></div>
		</div>

		<div id="nav">
			<!-- Top Menu Start Here -->
			<!--<?php echo $_top_menu; ?>-->
			<ul>
				<li>
					<ul>
						<li><a href=".">Insert Data</a></li>
						<li><a href="./cjulilima/vdua">Table</a></li>
					</ul>
				</li>
			</ul>
			<!-- Top Menu End Here -->
		</div>

		<div id="body">
			<div id="content">
				<!-- Content Start Here -->
				<!--<?php echo $_content; ?>-->
				<?php echo isset($content_view)? $content_view:''; ?>
				<!-- Content End Here -->
			</div>

			<div class="sidebar">
				<!-- sidebar star here -->
				<!--<?php echo $_sidebar; ?>-->
				<!-- sidebar end here -->
			</div>
			<div></div>
		</div>

		<div id="footer">
			<div class="footer-bottom">
				<!-- Footer Start Here -->
				<!--<?php echo $_footer; ?>-->
				<!-- Footer End Here -->
			</div>
		</div>
	</div>
	<!--<div id="wrapper">
		<header style="background: blue; padding: 5px; color: #fff">
			<h1 align="center" fonts="texb">This is the main template</h1>
		</header>
	</div>
  	<div class="container">
		<?php echo isset($content_view)? $content_view:''; ?>
	</div>-->
</body>
</html>