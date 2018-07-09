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