<?php

error_reporting(0);
@$connect = mysqli_connect("localhost", "root", "") or die(mysqli_error());


mysqli_select_db($connect,"data1") or die(mysqli_error());

echo "Connected Succesfully!.<br><br>";


?>
