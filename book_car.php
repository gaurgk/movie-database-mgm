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
  <h1 class="text-center" style="font-size: 50px; margin-top: 90px;"><strong>MOVIES IN THEATRE</strong></h1>
   </div>
  
   <div class="container">
    
    <?php
    
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "MT";
  
  $conn = new mysqli($host, $user, $pass, $db);
  if($conn->connect_error){
    echo "Failed:" . $conn->connect_error;
  }


   $sel = "call movieview()";
   $qr = mysqli_query($conn,$sel);
   if (mysqli_num_rows($qr) > 0) {
  while($row = mysqli_fetch_assoc($qr)){
      echo '<div class="col-lg-4">
      <div class="thumbnail">
        <a href="selectcar.php?id=' . $row["mov_id"] . '">
          <img src="images/'. $row["image_id"] . '" alt="Lights" style="width:100%">
          <div class="caption"><p class="well well-sm text-center"> ' . $row["mov_name"] . ' - ' . $row["mov_type"] . '; - ' . $row["capacity"] . '</p>
            <p class="well well-sm text-center"><strong> " Cost(1 ticket) - ' .$row["tcost"] . '</strong></p></div>

        </a>
      </div>
    </div>';
        }
     }

    ?>


   </div>


 </body>
 </html>




