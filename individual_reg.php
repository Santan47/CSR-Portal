<!DOCTYPE html>
<html lang="en">
<head>
  <!-- event organise-->
  <title>individual-registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="register.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
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
    <br><br><h3 class="good text-center">Common CSR Portal Registration</h3><br><h4 class="good text-center">For Company Registration Press Company Button Below.</h4><button type="button" class="btn btn-danger center-block" onclick="location.href='register.php'">Company registration</button><br>  
        <div class="row">
      
      <div class="col-sm-3"></div>
     
<form action="individual.php" method="POST">
      <div class="col-sm-6 fixit">
        <h3 class="text-center">Individual registration</h3><br>
        <div class="row">
        <div class="col-sm-6">
            <h4>First Name*</h4>
            <input class="form-control input-lg" id="inputlg" type="text" name="fname" placeholder="First Name" required><br>
        </div>
        <div class="col-sm-6">
            <h4>Last Name*</h4>
            <input class="form-control input-lg" id="inputlg" type="text" name="lname" placeholder="Last Name" required><br>
        </div>
      </div>
        <h4>Address*</h4>
        <input class="form-control input-lg" id="inputlg" type="text" name="address" placeholder="Address" required><br>
        <div class="row">
        <div class="col-sm-6">
            <h4>State*</h4>
            <input class="form-control input-lg" id="inputlg" type="text" name="state" placeholder="State" required><br>
            <h4>Zip Code*</h4>
            <input class="form-control input-lg" id="inputlg" type="text" name="zipcode" placeholder="Zip Code" required><br>
        </div>
        <div class="col-sm-6">
            <h4>City*</h4>
            <input class="form-control input-lg" id="inputlg" type="text" name="city" placeholder="City" required><br>
            <h4>Country*</h4>
            <input class="form-control input-lg" id="inputlg" type="text" name="country" placeholder="Country" required><br>
        </div>
        </div>
        <h4>Contact Number*</h4>
        <input class="form-control input-lg" id="inputlg" type="text" name="contact" placeholder="Contact Number" required><br>
        <h4>Email Address*</h4>
        <input class="form-control input-lg" id="inputlg" type="text" name="Email" placeholder="Email" required><br>
        <h4>password*</h4>
        <input class="form-control input-lg "  id="inputlg" type="text" name="password" placeholder="password" required><br>
        <button type="button submit" class="btn btn-danger center-block">Register</button><br>
      </div>
</form>


    <div class="col-sm-3"></div>
  </div>
</div>
</body>
</html>
