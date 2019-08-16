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
<body>
  <?php 

    include 'header1.php';

   ?>

   <div class="jumbotron">
  <h1 class="text-center" style="font-size: 50px; margin-top: 90px;"><strong>PROCEED TO BOOK</strong></h1>
   </div>

   <?php
            include 'includes/config.php';
            $sel = "SELECT * FROM movies WHERE mov_id = '$_GET[id]'";
            $rs = $conn->query($sel);
            $rws = $rs->fetch_assoc();
      ?>
      <h3 class="text-center" style="margin-top: 20px;">You have selected-<?php echo $rws['mov_name'];?>. The ticket can be book one day before.</h3>
       <div class="container" style="margin-bottom: 200px">
      <div class="col-md-4 col-md-offset-2" style="margin-top: 100px;">
      <div class="thumbnail">
        <a href="selectcar.php?id=<?php echo $rws['mov_id'] ?>" target="_blank">
          <img src="images/<?php echo $rws['image']; ?>" alt="Lights" style="width:100%">
          <div class="caption"><p class="well well-sm text-center"><?php echo $rws['mov_name'];?> - <?php echo $rws['mov_type'];?> - <?php echo $rws['capacity'];?></p>
            <p class="well well-sm text-center"><strong><?php echo " Cost(1 ticket) - ".$rws['tcost'];?></strong></p></div>

        </a>
      </div>
      </div>

      <div class="col-md-4" style="padding: 20px; margin-top:10px;" >
      


      <?php
          if(!$_SESSION['email'] && (!$_SESSION['password']))

          {

        ?>

         <form class="form-horizontal" action="" method="post">
          <fieldset>
            <div id="legend">
              <legend class="text-center"><strong>REGISTER</strong></legend>
            </div>
            <div class="control-group">
              <label class="control-label" for="fname">Full Name:</label>
              <div class="controls">
                <input type="text" id="fname" name="fname" placeholder="" class="form-control input-lg" required >
                <p class="help-block">Please provide your Full Name</p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="id_no">ID number</label>
              <div class="controls">
                <input type="text" id="id_no" name="id_no" placeholder="" class="form-control input-lg" required>
                <p class="help-block">Enter your ID Number</p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="email">E-mail</label>
              <div class="controls">
                <input type="email" id="email" name="email" placeholder="" class="form-control input-lg" required>
                <p class="help-block">Please provide your E-mail</p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="phone">Phone Number</label>
              <div class="controls">
                <input type="text" id="phone" name="phone" placeholder="" class="form-control input-lg" required>
                <p class="help-block">Please provide your Phone Number</p>
              </div>
            </div>
         
            
         
            <div class="control-group">
            <label class="control-label">Gender</label>
            <div class="radio">
               <label><input type="radio" name="gender" value="Male">Male</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="gender" value="Female">Female</label>
            </div>
          </div>
            <div class="control-group">
              <label class="control-label" for="location">Seats</label>
              <div class="controls">
                <input type="text" id="seats" name="seats" placeholder="" class="form-control input-lg" required>
                <p class="help-block">Enter seats</p>
              </div>
            </div>

        </fieldset>
         
            <div class="control-group" style="margin-top: 20px;">
              <!-- Button -->
              <div class="controls">
               <input class="btn btn-lg btn-primary btn-block"  type="submit" value="Register" name="save">
              </div>
            </div>
          
        </form>
        <?php

             } 

                 else
            {

              $qr = "SELECT * from registered_user WHERE email = '$_SESSION[email]'";
              $qr1 = $conn->query($qr);
              $rws = $qr1->fetch_assoc();
              $fname = $rws['fname'];
              $id_no = $rws['id_no'];
              $gender = $rws['gender'];
              $email = $rws['email'];
              $phone = $rws['phone'];
              $seats = $rws['seats'];
              $qry = "INSERT INTO client (fname,id_no,gender,email,phone,seats,mov_id,status)
              VALUES('$fname','$id_no','$gender','$email','$phone','$seats','$_GET[id]','Pending')";
              $result1 = $conn->query($qry);
             ?>

        <h2 style="margin-top: 170px;"><a href="pay.php">Click to Pay and Book</a></h2>
      <?php
            }
      ?>

      </div>
    </div>

    <?php
            if(isset($_POST['save'])){
              include 'includes/config.php'; // include the connection file config.php
              $fname = $_POST['fname'];
              $id_no = $_POST['id_no'];
              $gender = $_POST['gender'];
              $email = $_POST['email'];
              $phone = $_POST['phone'];
              $seats = $_POST['seats'];
              
              $qry = "INSERT INTO client (fname,id_no,gender,email,phone,seats,mov_id,status)
              VALUES('$fname','$id_no','$gender','$email','$phone','$seats','$_GET[id]','Pending')";
              $result = $conn->query($qry);
              if($result == TRUE){
                echo "<script type = \"text/javascript\">
                      alert(\"Successfully Registered. Proceed to pay\");
                      window.location = (\"pay.php\")
                      </script>";
              } else{
                echo "<script type = \"text/javascript\">
                      alert(\"Registration Failed. Try Again\");
                      window.location = (\"book_car.php\")
                      </script>";
              }
            }
            
            ?>

    <footer id="footer">
  <div class="container">
        <p class="social"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a> <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></p>
        <p>Developed by <a href="#" target="_blank">Huzaifa</a> </p></div>
</footer>

    </body>
    </html>

