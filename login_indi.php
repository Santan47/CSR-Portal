<!DOCTYPE HTML>
<html>
<body>
<?php
      
       require 'configure.php';

        $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS );

        session_start();
        $_SESSION["mail"]= $_POST['email'];
        if (!$db_handle)
          {
            die('Could not connect: ' . mysql_error());
          }

        $database = "CSR_DB";

        $db_found = mysqli_select_db( $db_handle, $database );
        
       // $_SESSION['company_name']= mysqli_query($db_handle,"SELECT company_name FROM company_user WHERE Email='$Username' AND password='$Password'");

        $Username = $_POST['email']; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[] 
        $Password = $_POST['password']; 



        if ($db_found) {

         // INSERT INTO `individual_user` (`user_id`, `first_name`, `last_name`, `address`, `state`, `city`, `zip_code`, `country`, `contact`, `Email`, `password`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '')
          $query=mysqli_query($db_handle,"SELECT * FROM individual_user WHERE Email='$Username' AND password='$Password'");
          $count = mysqli_num_rows($query);
          if($count>0){
              header('Location: user_indi_profile.php');
          }
          else {
            echo"<script>alert('incorrect user name or password')</script>";
          }
        }
        else {

        print "Database not found";

        }
        mysql_close($db_handle)
?>
        
</body>
</html>

