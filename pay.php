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
  <h1 class="text-center" style="font-size: 50px; margin-top: 90px;"><strong>CONFIRM PAYMENT</strong></h1>
   </div>
   <div class="container-fluid" style="margin-bottom: 100px;">
   <h3 class="text-center">Open the DigiPay Payment Portal and pay the amount.</h3><br>
   <br>

   <div class="col-md-6 col-md-offset-3">
    
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <div id="legend">
              <legend class="text-center"><strong>Give the details</strong></legend>
            </div>
            <div class="control-group">
              <label class="control-label" for="fname">DigiPay Transaction ID</label>
              <div class="controls">
                <input type="text" id="fname" name="digi" placeholder="" class="form-control input-lg" required >
                <p class="help-block">Please provide the Transaction id</p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="id_no">ID number</label>
              <div class="controls">
                <input type="password" id="id_no" name="id_no" placeholder="" class="form-control input-lg" required>
                <p class="help-block">Enter customer ID Number</p>
              </div>
            </div>
          </fieldset>

          <div class="control-group" style="margin-top: 20px;">
              <!-- Button -->
              <div class="controls">
               <input class="btn btn-lg btn-primary btn-block"  type="submit" value="Submit" name="pay">
              </div>
            </div>
        </form>
      </div>
      <?php
            if(isset($_POST['pay'])){ 
              include 'includes/config.php';
              $digi = $_POST['digi'];
              $id_no = $_POST['id_no'];
              
              $qry = "INSERT into payment VALUES('$digi','$id_no')";
              $result = $conn->query($qry);
              if($result == TRUE){
                echo "<script type = \"text/javascript\">
                      alert(\"Payment Successfully Done. Wait for Admin Approval\");
                      window.location = (\"wait.php\")
                      </script>";
              } else{
                echo "<script type = \"text/javascript\">
                      alert(\"Registration Failed. Try Again\");
                      window.location = (\"pay.php\")
                      </script>";
              }
            }
            
            ?>
          </div>

            <footer id="footer">
  <div class="container">
        <p class="social"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a> <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></p>
        <p>Developed by <a href="#" target="_blank">Huzaifa</a> </p></div>
</footer>
</body>
</html>



 