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
  thumbnail{}
  
</head>
<body>
  <div>

    <?php include 'header1.php'; 


    ?>
    

  </div>

<div class="jumbotron text-center banner2.jpg img-responsive">
  <h1><strong>MovieMagic</strong></h1> 
  <h4></h4> 
  
       <?php
         if(!$_SESSION['email'] && (!$_SESSION['pass'])){
      
       ?>
      
       <a href="book_car.php"><button type="button" class="btn btn-success btn-lg" style="margin : 50px;"><strong>Start booking</strong></button></a>
      <?php        } 


              else {

         ?>
         <
       <h3><a href="book_car.php"><button type="button" class="btn btn-default btn-lg" style="margin : 50px;"><strong>Welcome, Select movie</strong></button></a></h3>
       <?php


                    } 
        ?>
      </div>


<div class="container" style="padding-top: 40px;">
  <div class="jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1  style="text-align: center; font-size: 50px;">
                    MOVIES IN THEATRE</h1>
            </div>
        </div>
    </div>
</div>
  <div class="row">
    <div class="col-md-5">
      <div class="thumbnail">
        <a href="#" target="_blank">
          <img src="images/qq.jpg" alt="Lights" style="width:100%">
          <div class="caption"><p class="well well-sm text-center">QARIB QARIB SINGLE</p>
            <p class="well well-sm text-center"><strong>Rs 200</strong></p></div>

        </a>
      </div>
    </div>
    <div class="col-md-5">
      <div class="thumbnail">
        <a href="#" target="_blank">
          <img src="images/maze.jpg" alt="Nature" style="width:100%">
          <div class="caption"><p class="well well-sm text-center">MAZE RUNNER</p>
            <p class="well well-sm text-center"><strong>Rs 200</strong></p></div>
        </a>
      </div>
    </div>
    <div class="col-md-5">
      <div class="thumbnail">
        <a href="#" target="_blank">
          <img src="images/robo.jpg" alt="Fjords" style="width:100%">
          <div class="caption"><p class="well well-sm text-center">ROBOT-2</p>
            <p class="well well-sm text-center"><strong>Rs 200</strong></p></div>
        </a>
      </div>
    </div>
    <div class="col-md-5">
      <div class="thumbnail">
        <a href="#" target="_blank">
          <img src="images/sardar.jpeg" alt="Fjords" style="width:100%">
          <div class="caption"><p class="well well-sm text-center">SARDAR GABBAR SINGH</p>
            <p class="well well-sm text-center"><strong>Rs 300</strong></p></div>
        </a>
      </div>
    </div>
    <div class="col-md-5">
      <div class="thumbnail">
        <a href="#" target="_blank">
          <img src="images/mugul.jpg" alt="Fjords" style="width:100%">
          <div class="caption"><p class="well well-sm text-center">MUGULAGE</p>
            <p class="well well-sm text-center"><strong>Rs 120</strong></p></div>
        </a>
      </div>
    </div>
    <div class="col-md-5">
      <div class="thumbnail">
        <a href="#" target="_blank">
          <img src="images/mani.jpg" alt="Fjords" style="width:100%">
          <div class="caption"><p class="well well-sm text-center">MANIKARNIKA</p>
            <p class="well well-sm text-center"><strong>Rs 130</strong></p></div>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="container" style=" padding-top: 40px;">
  <div class="jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1  style="text-align: center; font-size: 50px;">
                    ABOUT US</h1>
            </div>
        </div>
    </div>
</div>
<div class="about">
  <div>
    <p class="panel panel-default" style="border: 0 padding: 20px;;">MOVIEMAGIC is an ongoing Indian success story. Our guiding principles, and humble beginning, revolve around personal honesty and integrity. We believe in strengthening our communities one neighborhood at a time, serving our customers as if they were our family, and rewarding hard work.<br> Today, our massive network means Enterprise is the largest ticket booking solutions provider. </p>
  </div>
  <h2 class="text-center" style="font-family: 'Roboto', sans-serif; font-size: 30px; margin-bottom: 20px; ">Why MovieMagic?</h2>
  <div class="col-md-6">
    <div class ="panel panel-default " style="padding: 20px;">
      <div class= "panel-heading text-center">Versatile and Felixible</div>
      <div class="panel-body">If you love movies, but find it hard to identify one which is perfect for you, MovieMagic serves as an interesting option.</div>
  </div>
</div>
  <div class="col-md-6">
    <div class="panel panel-default" style="padding: 20px;">
      <div class="panel-heading text-center">24X7 Support and Assistance</div>
    <div  class="panel-body">Your experience with MovieMagic begins with the convenience of online booking. The movies listed on our site come with all India . It is extremely easy to book the movie.</div>
  </div>
</div>
  
</div>
</div>

<div class=" jumbotron container-fluid bg-grey">
  <h1 class="text-center">CONTACT</h1><br>
  
    <div class="text-center">
      <p>Contact us through our Tollfree Number or mail us.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Bangalore, India</p>
      <p><span class="glyphicon glyphicon-phone"></span> 1800 1234567</p>
      <p><span class="glyphicon glyphicon-envelope"></span> MovieMagic@gmail.com</p> 
    </div>
    

</div>

<footer id="footer">
  <div class="container">
        <p class="social"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a> <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></p>
        <p>Developed by <a href="#" target="_blank">Huzaifa</a> </p></div>
</div>
</footer>


</body>
</html>