<?php
include_once 'connect.php';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=base64_encode($_POST['pass']);
	$phno=$_POST['phno'];
	$picname=$_FILES['pic']['name'];
	$pictype=$_FILES['pic']['type'];
	$picsize=$_FILES['pic']['size'];
	$tmp=$_FILES['pic']['tmp_name'];
	$dest='uploads/'.$picname;
	if(move_uploaded_file($tmp, $dest)){
		$sql=mysql_query("INSERT INTO sam_data(name,email,pass,phno,pic)VALUES('$name','$email','$pass','$phno','$dest')");
		
			header('location:login.php');
		
		
	}
	
}