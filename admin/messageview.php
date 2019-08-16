<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
</style>
</head>
<body>

<h1 style="font-size:60px;color:#ff8000;text-align:center">messages database</h1>
<?php

include 'C:\xampp\htdocs\dbms\includes\config.php';
$select = "SELECT * FROM adminmessage";
$qr = $conn->query($select);
while($rws = $qr->fetch_assoc())

{

?>




<table>
  <tr>
    <th>name</th>
    <th>phone</th>
    <th>message</th>
    <th>time</th>
    </tr>
    <td><?php echo $rws['name']; ?></td>
    <td><?php echo $rws['phone']; ?></td>
    <td><?php echo $rws['message']; ?></td>
    <td><?php echo $rws['time']; ?></td>

  </table>
  <?php }
  ?>
  </body>
  </html>