<?php 

	include 'config.php';

	if(isset($_POST['btnsubmit'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "INSERT INTO `userdata`(`name`, `email`, `password`) VALUES ('{$name}','{$email}','{$password}')";

		if(mysqli_query($conn, $sql)){
			header("Location: index.php");
		}else{
			header("Location: adduser.php");
		}
	}
?>