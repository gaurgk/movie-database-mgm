<?php
	session_start();
  error_reporting("E-NOTICE");
?>
<style>
.banner1 {
      background-image : url("images/banner1.jpeg");
      color: #0d0d0d;
      padding : 100px 25px;
      background-size: cover;
      font-family: 'Bad Script', cursive;
      }
  
  .thumbnail{
    border: 1px solid black;
    margin : 10px;

  }
  
  .about{
    margin-top: 40px;
    font-family: 'Magra', sans-serif;
    font-size: 20px;

    
  }

  .contact{
    background-color: 
  }

  #footer{background:#262626; padding-top:30px; padding-bottom:30px; text-align:center; border-top:solid 4px #303;}
#footer p{padding:10px; color:#cccccc;}
.social a{color:#FFF; font-size:18px !important}
.social i.fa{height:36px; width:36px; text-align:center; line-height:36px; background:#069; border-radius:50%;}
.social i.fa.fa-facebook{background:#43609C;}
.social i.fa.fa-twitter{background:#2CA8D2;}
.social i.fa.fa-linkedin{background:#428099;}
.social i.fa.fa-google-plus{background:#ce4d39;}




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
  </style>
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
         if(!$_SESSION['email'] && (!$_SESSION['pass'])){
			
    ?>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#pricing">CONTACT</a></li>
        <li><a href="account1.php">CLIENT LOGIN</a></li>
        <li><a href="admin/login.php">ADMIN LOGIN</a></li>
      </ul>
    </div>
    <?php
     } else { ?>
       <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="status.php">Check Status</a></li>  
      <li><a href="admin/logout.php">Logout</a></li>
      </ul>
      </div>
      <?php } ?>
  </div>
</nav>