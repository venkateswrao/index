<?php 

$data=MjMx;
echo base64_decode($data);

exit;
?>


<html>
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>

<table>
<form action="insert.php" method="POST"  enctype="multipart/form-data">
<tr>
<td><label>Name:</label></td>
<td><input type="text" name="name" id="name"></td>
</tr>
<tr>
<td><label>Email</label></td>
<td><input type="text" name="email" id="email"></td>
</tr>
<tr>
<td><label>PassWord</label></td>
<td><input type="password" name="pass" id="pass"></td>
</tr>
<tr>
<td><label>Phoneno</label></td>
<td><input type="text" name="phno" id="phno"></td>
</tr>

<tr>
<td><label>ProfilePic</label></td>
<td><input type="file" name="pic" id="pic"></td>
</tr>
<tr><td></td><td><input type="submit" name="submit" value="sign_up"></td></tr>
</form>
</table>
</body>
</html>
