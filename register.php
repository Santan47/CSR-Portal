<!DOCTYPE html>
<html lang="en">
<head>
  <!-- event organise-->
  <title>company-registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="register.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('form input[type="submit"]').prop("disabled", true);
        $(".agree").click(function(){
            if($(this).prop("checked") == true){
                $('form input[type="submit"]').prop("disabled", false);
            }
            else if($(this).prop("checked") == false){
                $('form input[type="submit"]').prop("disabled", true);
            }
        });
    });
</script>

</head>
<body >

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Common CSR Portal</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php#about">ABOUT</a></li>
        <li><a href="index.php#services">SERVICES</a></li>
        <li><a href="index.php#portfolio">PORTFOLIO</a></li>
        <li><a href="index.php#pricing">EVENTS</a></li>
        <li><a href="index.php#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br>

  <div class="container">
    <br><br><h3 class="good text-center">Common CSR Portal Registration</h3><br><h4 class="good text-center">For Individual Registration Press Individual Button Below.</h4><button type="button" class="btn btn-danger center-block" onclick="location.href='individual_reg.php'">Individual</button><br>  
    <div class="row">
      
      <div class="col-sm-3"></div>

<form action="company.php" method="POST">

      <div class="col-sm-6 fixit">
        <h3 class="text-center">Company registration</h3><br>
        <h4>Company name*</h4>
        <input class="form-control input-lg" id="inputlg" type="text" name="name" placeholder="Company" required><br>
        <h4>Company Address*</h4>
        <input class="form-control input-lg" id="inputlg" type="text" name="c_add" placeholder="Address" required><br>
        <div class="row">
        <div class="col-sm-5">
            <h4>State*</h4>
            <input class="form-control input-lg" id="inputlg" type="text" name="c_state" placeholder="State" required><br>
            <h4>Zip Code*</h4>
            <input class="form-control input-lg" id="inputlg" type="text" name="c_zip" placeholder="Zip Code" required><br>
        </div>
        <div class="col-sm-5">
            <h4>City*</h4>
            <input class="form-control input-lg" id="inputlg" type="text" name="c_city" placeholder="City" required><br>
            <h4>Country*</h4>
            <input class="form-control input-lg" id="inputlg" type="text" name="c_country" placeholder="Country" required><br>
        </div>
        </div>
        <h4>Contact Number*</h4>
        <input class="form-control input-lg" id="inputlg" type="text" name="c_contact" placeholder="Contact Number" required><br>
        <h4>Email Address*</h4>
        <input class="form-control input-lg" id="inputlg" type="text" name="c_email" placeholder="Email" required><br>
        <h4>Password*</h4>
        <input class="form-control input-lg" id="inputlg" type="text" name="c_password" placeholder="Password" required><br>
        <button type="button submit" class="btn btn-danger center-block" value="submit">Register</button><br>
      </div>
<!--onclick="location.href='login.php'"-->

</form>



    <div class="col-sm-3"></div>


    
  </div>
</div>
</body>
</html>
