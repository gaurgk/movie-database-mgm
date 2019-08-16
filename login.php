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

<div class="container" style="margin-top: 200px; margin-bottom: 120px;">
    <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title text-center"><strong>Admin LOGIN</strong></h3>
        </div>
          <div class="panel-body">
            <form method="post" action="#">
                    <fieldset>
                <div class="form-group">
                  <input class="form-control" placeholder="Enter Username" name="uname" type="text">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Enter Password" name="password" type="password" value="">
              </div>
              <a href="admin\index.php"><input class="btn btn-lg btn-success btn-block" type="submit" name="login" value="Login"></a>
            </fieldset>
          </form>
          </div>
      </div>
    </div>
  </div>
</div>

<?php
        if(isset($_POST['login'])){
          include 'includes/config.php';
          
          $uname = $_POST['uname'];
          $password = $_POST['password'];
          
          $query = "SELECT * FROM admin WHERE uname = '$uname' AND password = '$password'";
          $rs = $conn->query($query);
          $num = $rs->num_rows;
          $rows = $rs->fetch_assoc();
          if($num > 0){
            session_start();
            $_SESSION['uname'] = $rows['uname'];
            $_SESSION['password'] = $rows['password'];
            echo "<script type = \"text/javascript\">
                  alert(\"Login Successful.................\");
                  window.location = (\"admin/index.php\")
                  </script>";
          } else{
            echo "<script type = \"text/javascript\">
                  alert(\"Login Failed. Try Again................\");
                  window.location = (\"login.php\")
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