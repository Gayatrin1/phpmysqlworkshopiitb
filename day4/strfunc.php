<html>
<form action="strfunc.php" method="POST">
Enter a string:<input type="text" name="str">
<input type="submit" value="submit">
</form>
</html>
<?php
 $string=$_POST['str'];
 if($string)
 {
  echo "Number of Characters in the string:<br>".strlen($string)."<br>";
  $exparray=explode(" ",$string);
  echo "Array:<br>";
  foreach($exparray as $value)
  {
  echo $value."<br>";
  }
  echo  "Reverse of the string:<br>".strrev($string)."<br>";
  echo  "All alphabetic characters in string to their lower case form:<br>".strtolower($string)."<br>";
  echo  "All alphabetic characters in string to their upper case form:<br>". strtoupper($string)."<br>";
  $result=substr_replace($string,"David",11,14);
  echo "Replaced String:<br>".$result."<br>";
 }
?>
