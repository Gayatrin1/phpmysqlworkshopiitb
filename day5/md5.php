<form action='md5.php' method='POST'>
Username:<input type='text' name='username'>
Password:<input type='password' name='password'>
<input type='submit' name='submit'>
</form>
<?php
require("connection5.php");
$username=$_POST['username'];
$password=$_POST['password'];
if($username && $password)
{
 $passwenc=md5($password);
 $write="INSERT INTO `details` VALUES('','$username','$passwenc')";
 if ($connect->query($write) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $write. "<br>" . $connect->error;
	}
}
?>
