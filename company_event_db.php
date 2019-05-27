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
          
            $query3=mysqli_query($db_handle,"INSERT INTO `company_event` (`Org_name`, `event_name`, `Edate`, `location`, `state`, `city`, `zip_code`,`country`, `contact_no`, `Email`) VALUES ('$_POST[EOrg]','$_POST[Ename]', '$_POST[Edate]', '$_POST[Eloc]','$_POST[Estate]','$_POST[E_city]','$_POST[Ezip]','$_POST[Ecountry]', '$_POST[Econtact]', '$_POST[Eemail]')");


          if($query3){
            header('Location: user_profile.php');
          }
          else{
            echo "<script>alert('fill all segments')</script>";
            header('Location: event_reg.php');
          }
        }

        else {

        print "Database not found";

        }
        mysql_close($db_handle);
               
?>
