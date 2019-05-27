<!DOCTYPE html> 
<html lang="en">
<head>
  <!-- event organise-->
  <title>log-in</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="login.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <script type="text/javascript">
 
function validate()
{
var username = document.login.email.value;
var password = document.login.password.value;
 
if (username==null || username=="")
{
  alert("Username can't be blank");
  return false;
}
else if (password==null || password=="")
{
  alert("password can't be blank");
  return false;
}
}
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
    <br><br><h3 class="good text-center">Common CSR Portal Login</h3><br><h4 class="good text-center">For Individual Login Press Company Button Below.</h4><button type="button" class="btn btn-danger center-block" onclick="location.href='login.php'">Individual login</button><br><br>  
    <div class="row">
      
      <div class="col-sm-4"></div>
      <div class="col-sm-4 fixit">

<form name="login" action="login_c.php" method="POST">

        <h3 class="text-center">LogIn</h3><br>
        <h4>Email</h4>
        <input class="form-control input-lg" id="inputlg" type="text" placeholder="email" name="email" required><br>
        <h4>Password</h4>
        <input class="form-control input-lg" id="inputlg" type="Password" placeholder="Password" name="password" required><br>
        <button type="button submit" class="btn btn-danger center-block" >Login</button><br>  
        <input id="remember-me"type="checkbox"><label class="fixit">&nbsp;&nbsp;Remember me</label><br><br><br>

      </div>
</form>


    <div class="col-sm-4"></div>
  </div>
</div>
</body>
</html>
