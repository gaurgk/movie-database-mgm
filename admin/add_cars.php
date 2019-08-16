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
  
  </head>
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

#footer{background:#0d0d0d; padding-top:30px; padding-bottom:30px; text-align:center; border-top:solid 4px #303;}
#footer p{padding:10px; color:#cccccc;}
.social a{color:#FFF; font-size:18px !important}
.social i.fa{height:36px; width:36px; text-align:center; line-height:36px; background:#069; border-radius:50%;}
.social i.fa.fa-facebook{background:#43609C;}
.social i.fa.fa-twitter{background:#2CA8D2;}
.social i.fa.fa-linkedin{background:#428099;}
.social i.fa.fa-google-plus{background:#ce4d39;}

  </style>
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

    <h1 class="text-center" style="margin-top:  130px;"><strong>DETAILS OF NEW MOVIE</strong></h1>

    <div class="container" style="margin-top: 70px; margin-bottom: 70px;">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <fieldset>
            <div class="control-group">
              <label class="control-label">Movie Name</label>
              <div class="controls">
                <input type="text" name="mov_name" placeholder="" class="form-control input-lg" required >
                <p class="help-block">Please provide the Movie name</p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Movie type</label>
              <div class="controls">
                <input type="text"  name="mov_type" placeholder="" class="form-control input-lg" required>
                <p class="help-block">Enter the Movie type</p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Ticket Price</label>
              <div class="controls">
                <input type="text" name="tcost" placeholder="" class="form-control input-lg" required>
                <p class="help-block">Please Provide base price</p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Movie Image</label>
              <div class="controls">
                <input type="file" name="image" placeholder="" class="form-control input-lg" required>
                <p class="help-block">Please Provide Movie Image</p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label"> Capacity</label>
              <div class="controls">
                <input type="text" name="capacity" placeholder="" class="form-control input-lg" required>
                <p class="help-block">Specify the number of Seats</p>
              </div>
            </div>

        </fieldset>
         
            <div class="control-group" style="margin-top: 20px;">
              <!-- Button -->
              <div class="controls">
               <input class="btn btn-lg btn-primary btn-block"  type="submit" value="ADD" name="send">
              </div>
            </div>
          
        </form>
      </div>
    </div>
  </div>


  <?php
              if(isset($_POST['send'])){
                include '../includes/config.php';
                
                $target_path = "../images/";
                $target_path = $target_path . basename ($_FILES['image']['name']);
                if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
                
                $image = basename($_FILES['image']['name']);
                $mov_name = $_POST['mov_name'];
                $mov_type = $_POST['mov_type'];
                $tcost = $_POST['tcost'];
                $capacity = $_POST['capacity'];
                $qr = "INSERT INTO cars (image,mov_name,mov_type,tcost,capacity,status) 
                          VALUES('$image','$mov_name','$mov_type','$tcost','$capacity','Available')";         
                $res = $conn->query($qr);
                
                 if($res == TRUE){
                  echo "<script type = \"text/javascript\">
                      alert(\"Ticket Succesfully Added\");
                      window.location = (\"add_vehicle.php\")
                      </script>";
                  }
                }
                
                else 'Failed';
            }
            ?>

          

          <footer id="footer">
  <div class="container">
        <p class="social"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a> <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></p>
        <p>Developed by <a href="#" target="_blank">Gaurav Kumar</a> &amp <a href="#" target="_blank">Jannat Malhotra</a></p></div>

        </footer>



  </body>
  </html>