<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM movies WHERE mov_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Mov Deleted from Stock\");
					window.location = (\"add_vehicle.php\")
				</script>";
	}
?>
