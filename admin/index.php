
<!DOCTYPE html>
<html lang="en">
<head>
<title>MovieMagic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Magra" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  	.navbar {
    margin-bottom: 0;
    background-color: #0d0d0d;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
}

.navbar li a, .navbar .navbar-brand {
    color: #fff !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}

#3but{
  margin-top: 500px;
}


#footer{background:#0d0d0d; padding-top:30px; padding-bottom:30px; text-align:center; border-top:solid 4px #303;}
#footer p{padding:10px; color:#cccccc;}
.social a{color:#FFF; font-size:18px !important}
.social i.fa{height:36px; width:36px; text-align:center; line-height:36px; background:#069; border-radius:50%;}
.social i.fa.fa-facebook{background:#43609C;}
.social i.fa.fa-twitter{background:#2CA8D2;}
.social i.fa.fa-linkedin{background:#428099;}
.social i.fa.fa-google-plus{background:#ce4d39;}



  </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="new.html" style="font-family: 'Bad Script', cursive;">MovieMagic</a>
    </div>

    <?php
         session_start();
         if(!$_SESSION['uname'] && (!$_SESSION['pass'])){

         	header("location: ../login.php");
         }
			
    ?>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php">Logout</a></li>
      </ul>
      </div>
  </div>
</nav>
      
      <h1 class="text-center" style="margin-top: 125px;"><strong>WELCOME, ADMINISTRATOR</strong></h1>
      <div class="container text-center" style="margin-top: 140px; margin-bottom: 210px;">
        <div class="row">
      	<div class="col-md-5 col-md-offset-1">
      <a href="client_request.php"><button type="button" class="btn btn-primary btn-lg btn-block">CLIENT MANAGEMENT</button></a>
  </div>
  <div class="col-md-5">
      <a href="add_vehicle.php"><button type="button" class="btn btn-primary btn-lg btn-block">MOVIE MANAGEMENT</button></a>
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4" id="3but">
      <a href="messageview.php"><button type="button" class="btn btn-primary btn-lg btn-block">ADMIN MESSAGE</button></a>
  </div>
</div>
</div>
<footer id="footer">
  <div class="container">
        <p class="social"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a> <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></p>
        <p>Developed by <a href="#" target="_blank">Gaurav Kumar</a> &amp <a href="#" target="_blank">Jannat Malhotra</a></p></div>

        </footer>

</body>
</html>
