  
  <html>
     
    <body background="bg1.jpg">
        <table align="center" border="1px" style="width:1300px; line-height:40px;">
            <tr>
                <th colspan="10"><h2>STUDENT IDEAS</h2></th>
     
            </tr>
        <t>
            
    <th>NAME</th>
  
    <th>IDEA STATEMENT</th>
    <th>IDEA KEYWORDS</th>
    <th>IDEA SOLUTION</th>
    
        </t>
        
        
          <?php
    
    $con= mysqli_connect('localhost','root','password')or die("not connected");
     mysqli_select_db($con,'CSR_DB')or die("no db found");
     $result = mysqli_query($con,"select * from `company_event`");
      ?>
  
    
  
     
      <?php
      while($rows=mysqli_fetch_assoc($result))
      {   
          ?>
          <tr>
            
              <td><b><?php echo $rows['Org_name']; ?></td>
                <td><b><?php echo $rows['even_name']; ?></td>
              <td><b><?php echo $rows['Edate']; ?></td>
              <td><b><?php echo $rows['location']; ?></td>
              <td><b><?php echo $rows['Email']; ?></td>
              
             
              
          </tr>
     <?php
     }
     ?>
     
      