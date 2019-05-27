<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
      <?php
      require 'configure.php';

        $password=$_POST[c_password];
        

        $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS );

        if (!$db_handle)
          {
            die('Could not connect: ' . mysql_error());
          }
        
        $database = "CSR_DB";

      ?>
       <?php
        $db_found = mysqli_select_db( $db_handle, $database );

      //execute the SQL query and return records
        if ($db_found) {
           $result = mysqli_query($db_handle,"SELECT Org_name,event_name,Edate,location,contact_no,Email FROM `company_event`");
           
        }
        else
          echo "<script>alert('db not found')</script>";
          
        ?>
      <table border="3" style= "background-color: #f4511e; color: white; margin: 0 auto;" >
      <thead>
        <tr>
          <th><br>Organisation_id</th><br>
          <th><br>Event_Name</th>
          <th><br>Event_date</th>
          <th><br>Event_location</th>
          <th><br>Event_contact</th>
          <th><br>Organiser_Email</th>
        </tr>
      </thead>
      <tbody>
       
       <?php
      while($rows=mysqli_fetch_assoc($result))
      {   
          ?>
          <tr>
            
              <td><b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['Org_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td><b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['event_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td><b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['Edate']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td><b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['location']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td><b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['contact_no']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td><b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rows['Email']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              
             
              
          </tr>
     <?php
     }
     ?>

      </tbody>
    </table>
     <?php mysqli_close($db_handle); ?>
    </body>
    </html>