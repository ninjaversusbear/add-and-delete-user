<?php 
	
	include 'config.php';

	$id = $_GET['id'];
	// $del = mysqli_query($conn, "DELETE FROM userdata WHERE id = '$id'");

	$sql = "DELETE FROM userdata WHERE id = '$id'";

	if(mysqli_query($conn, $sql)){
		header('Location: index.php') or die('ERROR: Query Failed.....');
	}else{
		echo 'The data could not be deleted..';
	}

?>