<html>

<form action ='html1.php' method ='GET' >
	<input type = 'number' name ='sidea'><br>
	<input type = 'number' name ='sideb'><br>
	<input type = 'number' name ='sidec'><br>
	<input type = 'submit' value ='Enter'>
</form>

</html>

<?php
$a = $_GET['sidea'];
$b = $_GET['sideb'];
$c = $_GET['sidec'];

if($a==$b && $b==$c)
	echo "Equilateral Triangle<br>";
else if(pow($a,2)==pow($b,2)+pow($c,2)||pow($b,2)==pow($a,2)+pow($c,2)||pow($c,2)==pow($a,2)+pow($b,2))
 {
    echo "Right Angled Triangle";
 }
 else{
	if($a==$b||$a==$c||$b==$c)
	{
		echo "Isoceles Triangle<br>";
	}
	else
		echo "Scalene Triangle<br>";
}
?>
