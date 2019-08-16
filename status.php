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

  <div class="jumbotron">
  <h1 class="text-center" style="font-size: 50px; margin-top: 90px;"><strong>YOUR BOOKING STATUS</strong></h1>
   </div>
   <div class="panel panel-default">
   <?php
            include 'includes/config.php';
            $sel = "SELECT * FROM client WHERE email = '$_SESSION[email]'";
            $rs = $conn->query($sel);
            $rws = $rs->fetch_assoc();
            $sel1 = "SELECT * FROM movies WHERE mov_id = '$rws[mov_id]'";
            $rs1 = $conn->query($sel1);
            $rws1 = $rs1->fetch_assoc();
      ?>

      <h2 class="text-center"><span style="font-size:25px; color: #FF0000">Booking Status:</span> <span style="color:#003333; 
            font-weight: bold; font-size: 25px;"><?php echo $rws['status'];?></span></h2>
            <h3 class="text-center">Name :<?php echo $rws['fname']; ?></h3><br>
            <h3 class="text-center">Movie Name :<?php echo $rws1['mov_name']; ?></h3><br>
</div>
</body>
</html>