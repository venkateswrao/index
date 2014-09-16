<?php
include_once 'connect.php';
session_start();
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$pass=base64_encode($_POST['pass']);
	$query=mysql_query("SELECT *FROM sam_data WHERE email='$eamil'AND pass='$pass'") or die(mysql_error());
	$row=mysql_fetch_array($query);
	if(is_array($row) && !$row){
		$_SESSION['id']=$row['id'];
		$_SESSION['name']=$row['name'];
		
	}
	
}
header('location:sucess.php');
?>