<?php

require("connection.php");

$ext= " SELECT * FROM class1 WHERE name='Rohan' ";
$extract=mysqli_query($connect,$ext);

   if($row =mysqli_fetch_assoc($extract))
  { $name=$row['name'];
    $e=$row['sub5'];
    $totalobt=$row['total obtained'] ;
    $percent=$row['percentage'];

    $new_e=99;
    $new_totalobt=$totalobt-$e+$new_e ;
    $new_percent=  $new_totalobt/5;
    echo  "Marksheet before updating :<br> Subject 5 = ".$e."<br>Total Marks obtained : ".$totalobt."<br>Percentage Obtained : ".$percent." %<br>";

    $update="UPDATE `class1` SET `sub5`=$new_e, `total obtained`=$new_totalobt, `percentage`=$new_percent WHERE name='Rohan'";
    if (mysqli_query($connect, $update))
    {
      echo "<br>Update done sucessfully<br><br>";
    }
    else
    {
      echo "error updating record :" .mysqli_error($connect);
    }
 }
 echo  $name." has updated marksheet:<br> Subject 5 = ".$new_e."<br>Total Marks obtained : ".$new_totalobt."<br>Percentage Obtained : ".$new_percent." %" ;

 mysqli_close($connect);

?>
