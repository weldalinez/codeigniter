<html>
<head>
  <title>Page 2</title>
  <base href="http://localhost/codeigniter/" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo base_url('/css/theme.css')?>" />
</head>
<h3 align="center">Data</h3>
<br />  
<div class="table-responsive">  
    <table align="center" class="table table-bordered">  
        <tr>  
        <th>NPM</th>  
        <th>Nama</th>  
        </tr>
        <?php  
            if($fetch_data->num_rows() > 0){  
                foreach($fetch_data->result() as $row){  
        ?>  
                 <tr>  
                  <td><?php echo $row->npm; ?></td>  
                  <td><?php echo $row->nama; ?></td>  
                  </tr>  
        <?php       
                }  
            }  
            else{  
        ?>  
              <tr>  
                   <td colspan="5">No Data Found</td>  
              </tr>  
        <?php  
            }  
        ?>  
  </table>
</div>
</html>