<html>

<head>
  <title>Page 2</title>
  <base href="http://localhost/codeigniter/" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  </head>

<body>
  <div class="container">
    <br />  
    <h3 align="center">Data</h3>
    <br />  
    <div class="table-responsive">  
        <table class="table table-bordered">  
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
    <div id="body">
        <p>If you would like to see the previous page, click <a href=".">here</a>!</p>
    </div>
  </div>
</body>
</html>