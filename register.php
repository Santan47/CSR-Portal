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
      <a class="navbar-brand" href="index.html">Common CSR Portal</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html#about">ABOUT</a></li>
        <li><a href="index.html#services">SERVICES</a></li>
        <li><a href="index.html#portfolio">PORTFOLIO</a></li>
        <li><a href="index.html#pricing">EVENTS</a></li>
        <li><a href="index.html#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br>

  <div class="container">
    <br><br><h3 class="good text-center">Common CSR Portal Registration</h3><br><h4 class="good text-center">For Individual Registration Press Individual Button Below.</h4><button type="button" class="btn btn-danger center-block" onclick="location.href='individual_reg.php'">Individual</button><br>  
    <div class="row">
      
      <div class="col-sm-3"></div>
      <div class="col-sm-6 fixit">
        <h3 class="text-center">Company registration</h3><br>
        <h4>Company name*</h4>
        <input class="form-control input-lg" id="inputlg" type="text" placeholder="Company"><br>
        <h4>Company Address*</h4>
        <input class="form-control input-lg" id="inputlg" type="text" placeholder="Company Address"><br>
        <div class="row">
        <div class="col-sm-5">
            <h4>State*</h4>
            <input class="form-control input-lg" id="inputlg" type="text" placeholder="State"><br>
            <h4>Zip Code*</h4>
            <input class="form-control input-lg" id="inputlg" type="text" placeholder="Zip Code"><br>
        </div>
        <div class="col-sm-5">
            <h4>City*</h4>
            <input class="form-control input-lg" id="inputlg" type="text" placeholder="City"><br>
            <h4>Country*</h4>
            <input class="form-control input-lg" id="inputlg" type="text" placeholder="Country"><br>
        </div>
        </div>
        <h4>Contact Number*</h4>
        <input class="form-control input-lg" id="inputlg" type="text" placeholder="Contact Number"><br>
        <h4>Email Address*</h4>
        <input class="form-control input-lg" id="inputlg" type="text" placeholder="Email"><br>
        <button type="button" class="btn btn-danger center-block">Register</button><br>
      </div>
        
    <div class="col-sm-3"></div>
  </div>
</div>
</body>
</html>
