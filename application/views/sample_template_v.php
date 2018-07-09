<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>css/style.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
	<div id="wrapper">
		<header style="background: blue; padding: 5px; color: #fff">
			<h1 align="center" fonts="texb">This is the main template</h1>
		</header>
	</div>
  	<div class="container">
		<?php echo isset($content_view)? $content_view:''; ?>
	</div>
</body>
</html>