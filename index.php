<!DOCTYPE html>
<html lang="en">
<head>
  <!-- event organise-->
  <title>Common CSR Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="main.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Common CSR Portal</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#events">EVENTS</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="login.php">LOG-IN</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Make-Events</h1> 
  <p>Register your company and organise EVENTS in your city.</p> 
  <form>
    <div class="input-group">
      <div class="input-group-btn">
        <br><br>
        <button type="button" class="btn btn-danger" onclick="location.href='register.php'"> Register</button>
      </div>
    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Org-Events:-</h2><br>
      <h4> Mostly organization have their own CSR portal and conduct social activities on small scale.One corporate may not know what valuable initiative others are driving.This is a website which will enable different corporates or institutes to come together and collectively provide valuable services to serve the society.</h4><br>
      <p>Individual can also access this portal to provide or seek help for them or others in need.Also different institutes can post their requirements on this portal and can seek help from registered corporates such as stationary,teaching assistance,etc.As the database in the beginning will be on a small scales so number of activities will be less on the portal but as the number of organizations or individuals increases their CSR registration on this website the user engagement will increase and the dependencies and characteristics of the portal will enhance.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>BENEFITS:</strong> The benefits of this website are the corporates and individual can register to this portal and they can create their respective social events, interested companies can view those events and can register to the same so that companies can join hands to work for the betterment of society and make a difference, same portal will be accessible to individual users,360 degree representation from all sectors i.e. corporates and individuals as possible and these activities can be carried out on a larger scale as a collective effort of different organizations.</h4><br>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo-small"></span>
      <h4>INDIVIDUAL EVENTS</h4>
      <p>Events organised by individual person..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-briefcase logo-small"></span>
      <h4>COMPANY EVENTS</h4>
      <p>Events organised by the companies..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-education logo-small"></span>
      <h4>COLLABORATIVE EVENTS</h4>
      <p>Events organised by company and individual.</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-usd logo-small"></span>
      <h4>FUNDING</h4>
      <p>Providing funds for the events..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-earphone logo-small"></span>
      <h4>CHIT-CHAT</h4>
      <p>Communication with industry leaders..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">MEN-POWER</h4>
      <p>Availability of men power to complete an event..</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"I AM AN INDIVIDUAL"<br><span>Through this portal we are trying to reach out to such people who want to contribute for<br> better society so please register with us and get immense opportunities to earn self-satisfaction.</span></h4>
      </div>
      <div class="item">
        <h4>"I AM A COMPANY"<br><span>1. Innovation:CSR can help and guide the company’s research and development <br>efforts and lead to innovation of some path breaking and innovative products.</span></h4>
      </div>
       <div class="item">
        <h4>"I AM A COMPANY"<br><span>2. Long-term thinking:CSR is an effort to look at the company’s <br>long-term interest and ensuring that the company’s future is sustainable.</span></h4>
      </div>
       <div class="item">
        <h4>"I AM A COMPANY"<br><span>3. Employee engagement:Using CSR can help you engage with your employees in new <br>ways and give them an opportunity to feel proud of their organization and its activities.</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="events" class="container-fluid">
  <div class="text-center">
    <h2>Current Events</h2>
    <h4>See the current upcomming events!</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-6 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Individual Events</h1>
        </div>
        <div class="panel-body">
          <p><strong>view 5 upcomming individual events</strong></p>
          <button type="button" class="btn btn-danger btn-lg" onclick="location.href='indi_events.php'">Individual Events</button>
        </div>
        <div class="panel-footer">
          <h3>For more <br>Register yourself as a individual.</h3>
          <button class="btn btn-lg" onclick="location.href='individual_reg.php'">Sign Up</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-6 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Company Events</h1>
        </div>
        <div class="panel-body">
          <p><strong>view 5 upcomming company events</strong></p>
          <button type="button" class="btn btn-danger btn-lg" onclick="location.href='company_events.php'">Company Events</button>
        </div>
        <div class="panel-footer">
          <h3>For more <br>Register yourself as a company.</h3>
          <button class="btn btn-lg" onclick="location.href='register.php'">Sign Up</button>
        </div>
      </div>      
    </div>       

    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Arya College Of Engineering & IT,Jaipur</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91-7903516744</p>
      <p><span class="glyphicon glyphicon-envelope"></span> ltsantan47@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
