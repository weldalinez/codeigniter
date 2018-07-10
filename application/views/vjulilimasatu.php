<html>
<head>
	<title>Page 1</title>
  <base href="http://localhost/codeigniter/" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo base_url('/css/theme.css')?>" />
	</head>

<body>
	<div class="container">
		<br />
		<h3 align="center">Insert Data</h3>
		<form method="post" action="<?php echo base_url()?>cjulilima/form_validation">
			<?php
			if($this->uri->segment(2) == "inserted"){
				//base url - http://localhost/codeigniter  
           		//redirect url - http://localhost/codeigniter/cjulilima/inserted  
               		//main - segment(1)  
                	//inserted - segment(2)  
                echo '<p class="varchar-success">Data Inserted</p>';  
			}
			?>

		  <div class="form-group">  
          <label>Enter NPM</label>  
          <input type="varchar" name="npm" class="form-control" />
          <span class="varchar-danger"><?php echo form_error("npm");?></span></div>            
      <div class="form-group">  
          <label>Enter Nama</label>  
          <input type="varchar" name="nama" class="form-control" />
          <span class="varchar-danger"><?php echo form_error("nama");?></span></div>
      <div class="form-group">  
          <input type="submit" name="insert" value="Insert" class="btn btn-info" />  </div>
    </form>   
</body>
</html>