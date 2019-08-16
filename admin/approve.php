<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$query = "UPDATE client SET status = 'Approved' WHERE mov_id = '$id'";
	$qr = "UPDATE movies SET Stat = 'Not Available' WHERE mov_id = '$id'";
	$result = $conn->query($query);
	$result1 = $conn->query($qr);
	if($result === TRUE && $result1 === TRUE){
		echo 'Request has Successfully been Approved';
	?>
		<meta content="4; client_request.php" http-equiv="refresh" />
	<?php
	}
?>
