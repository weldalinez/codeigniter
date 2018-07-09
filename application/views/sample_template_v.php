<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
	<h1>This is the main template</h1>
  	<div class="container">
		<?php echo isset($content_view)? $content_view:''; ?>
	</div>
</body>
</html>