<?php

include 'dbcon.php';
//require_once();
/*$server="localhost";
$user="root";
$pass="";
$dbname="svrphp";

$con1=mysqli_connect($server,$user,$pass,$dbname);

// $con2=mysqli_connect($server,$user,$pass);
// mysqli_select_db($con2,$dbname);

if(!$con1)
echo("Failled");
*/
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$city=$_POST["city"];

$insertsql = "insert into student(fname,lname,city) values('$fname','$lname','$city')";

$res = mysqli_query($con1,$insertsql);

if($res)
{
	echo "Data Iserted Successfuly";
	mysqli_close($con1);
	header("Location:index.php");
}
else
echo "Data insert failed";

?>