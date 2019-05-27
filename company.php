<?php
      
       require 'configure.php';

        $password=$_POST[c_password];
        

        $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS );

        if (!$db_handle)
          {
            die('Could not connect: ' . mysql_error());
          }
        
        $database = "CSR_DB";

        $db_found = mysqli_select_db( $db_handle, $database );

        if ($db_found) {
          
            $query2=mysqli_query($db_handle,"INSERT INTO `company_user` (`company_name`, `company_add`, `company_state`, `company_city`, `zip_code`,`country`, `contact`, `email`, `password`) VALUES ('$_POST[name]','$_POST[c_add]', '$_POST[c_state]','$_POST[c_city]','$_POST[c_zip]','$_POST[c_country]', '$_POST[c_contact]', '$_POST[c_email]','$_POST[c_password]')");


          if($query2){
            header('Location: login_com.php');
          }
          else{
            echo"<script>alert('fill all segments')</script>";
            header('Location: register.php');
          }
        }

        else {

        print "Database not found";

        }
        mysql_close($db_handle);
               
?>
