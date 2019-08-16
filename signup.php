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

   <div class="container" style="margin-top: 70px; margin-bottom: 70px;">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    
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
              <label class="control-label" for="location">Location</label>
              <div class="controls">
                <input type="text" id="location" name="location" placeholder="" class="form-control input-lg" required>
                <p class="help-block">Enter your location</p>
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
      </div>
    </div>
  </div>

  <?php
            if(isset($_POST['save']))
            {
              include 'includes/config.php';
              $fname = $_POST['fname'];
              $id_no = $_POST['id_no'];
              $gender = $_POST['gender'];
              $email = $_POST['email'];
              $phone = $_POST['phone'];
              $location = $_POST['location'];
              
              $qry = "INSERT INTO registered_user (fname,id_no,gender,email,phone,location)
              VALUES('$fname','$id_no','$gender','$email','$phone','$location')";
              $result = $conn->query($qry);
              if($result == TRUE){
                echo "<script type = \"text/javascript\">
                      alert(\"Successfully Registered.\");
                      window.location = (\"account1.php\")
                      </script>";
              } else{
                echo "<script type = \"text/javascript\">
                      alert(\"Registration Failed. Try Again\");
                      window.location = (\"signup1.php\")
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
