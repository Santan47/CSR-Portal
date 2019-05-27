<?php
      
       require 'configure.php';

        $password=$_POST[password];

        $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS );

        if (!$db_handle)
          {
            die('Could not connect: ' . mysql_error());
          }

        $database = "CSR_DB";

        $db_found = mysqli_select_db( $db_handle, $database );

        if ($db_found) {

         // INSERT INTO `individual_user` (`user_id`, `first_name`, `last_name`, `address`, `state`, `city`, `zip_code`, `country`, `contact`, `Email`, `password`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '')
          $query1=mysqli_query($db_handle,"INSERT INTO `individual_user` (`first_name`, `last_name`, `address`, `state`, `city`, `zip_code`,`country`, `contact`, `Email`, `password`) VALUES ('$_POST[fname]','$_POST[lname]', '$_POST[address]','$_POST[state]','$_POST[city]','$_POST[zipcode]','$_POST[country]', '$_POST[contact]', '$_POST[Email]','$_POST[password]')");
          
          if($query1){
            header('Location: login.php');
          }
          else{
            echo"<script>alert('fill all segments')</script>";
            header('Location: individual_reg.php');
          }
        }

        else {

        print "Database not found";

        }
        mysql_close($db_handle)
?>
