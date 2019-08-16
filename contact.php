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
  <div>

    <?php include 'header1.php'; 


    ?>
    

  </div>

  <div class=" jumbotron container-fluid bg-grey" style="margin-top: 50px;">
  <h1 class="text-center">CONTACT</h1><br>
  
    <div class="text-center">
      <p>Contact us through our Tollfree Number or mail us.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Bangalore, India</p>
      <p><span class="glyphicon glyphicon-phone"></span> 1800 1234567</p>
      <p><span class="glyphicon glyphicon-envelope"></span> MOvieMagic@gmail.com</p> 
    </div>
    

</div>
<h2 class="text-center" style="margin-top: 30px;">You can message us your queries or give us your feedback and we will get back to you shortly.</h2>
<form class="form-horizontal" method="post" action="">
<div class="col-md-8 col-md-offset-2" style="margin-top: 30px; margin-bottom: 30px;">

<div class="form-group">
  <div class="control-group">
              <label class="control-label" for="name">Full Name:</label>
              <div class="controls">
                <input type="text"  name="name" placeholder="" class="form-control input-lg" required >
                <p class="help-block">Please provide your Full Name</p>
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
        <label for="name">Message</label>
                            <textarea name="message"  class="form-control input-lg" rows="9" cols="25" required
                                placeholder=""></textarea>
                              </div>



</div>
                    <div class="col-md-12">
                        <div class="controls">
               <input class="btn btn-lg btn-primary btn-block"  type="submit" value="Send Message" name="send">
              </div>
                    </div>
                  </div>
                </form>

                  <?php

          if(isset($_POST['send'])){
            include 'includes/config.php';
            
            $message = $_POST['message'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            
            $qry = "INSERT INTO message (name,phone,message,time)
              VALUES('$name','$phone','$message',now())";
              $result = $conn->query($qry);
              if($result === TRUE){
                echo "<script type = \"text/javascript\">
                      alert(\"Message Successfully Send\");
                      window.location = (\"contact.php\")
                      </script>";
              } else{
                echo "<script type = \"text/javascript\">
                      alert(\"Message Not Send. Try Again\");
                      window.location = (\"contact.php\")
                      </script>";
              }
          }
        ?>
      </body>
      </html>