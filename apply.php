<?php
	session_start();
	$mysqli = new mysqli("localhost","root",'','insurance_form');
	$policy=$_GET['policy'];
	$id=$_SESSION['user'];
	mysqli_query($mysqli,"UPDATE user set policy=$policy WHERE id=$id");
	header("location:index.php");
?>